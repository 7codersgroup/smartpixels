<?php

    namespace App\Http\Controllers;

    use App\Earning;
    use App\Image;
    use App\Mail\MyTestMail;
    use App\Mail\OrderMail;
    use App\Orders;
    use App\Payments;
    use App\User;
    use Darryldecode\Cart\Cart;
    use ErrorException;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Support\Arr;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Mail;
    use JD\Cloudder\Facades\Cloudder;
    use Unicodeveloper\Paystack\Exceptions\PaymentVerificationFailedException;
    use Unicodeveloper\Paystack\Paystack;

    class PaymentController extends Controller
    {
        /**
         * Redirect the User to Paystack Payment Page
         * @return Url|\Illuminate\Contracts\Foundation\Application|RedirectResponse|\Illuminate\Routing\Redirector
         */
        public function redirectToGateway ()
        {
            $this->saveInvoice ();
            return (new Paystack)->getAuthorizationUrl ()->redirectNow ();
        }

        public function saveInvoice ()
        {
            //$user = User::find(Auth::Id());
            $user = User::find (Auth::id ());
            $payment = new Payments();
            $payment->req_amount = (session ()->get ('total') * 1) / 100;
            $payment->reference = session ()->get ('ref');
            $user->payments ()->save ($payment);
        }

        /**
         * Obtain Paystack payment information
         * @return RedirectResponse
         * @throws PaymentVerificationFailedException
         */
        public function handleGatewayCallback ()
        {
            $paymentDetails = (new Paystack)->getPaymentData ();
            $status = $this->updatePayment ($paymentDetails);
            return redirect (\route ('home'))->with ($status[0], $status[1]);

            //  dd($paymentDetails);
            // Now you have the payment details,
            // you can store the authorization_code in your db to allow for recurrent subscriptions
            // you can then redirect or do whatever you want
        }

        public function updatePayment ($paymentDetails)
        {
            $user = User::find (Auth::id ());
            try{
                $payment = $user->payments ()
                    ->where ('reference', '=', $paymentDetails['data']['reference'])
                    ->first ();

                $paymentModel = new Payments();

                if ($payment->req_amount != ($paymentDetails['data']['amount'] / 100)) {
                    $payment->amount_paid = $paymentDetails['data']['amount'] / 100;
                    $payment->status = $paymentDetails['data']['status'];
                    $payment->channel = $paymentDetails['data']['channel'];
                    $user->push ();
                    $status[0] = 'error';
                    $status[1] = 'You made an invalid payment';

                    Activity()
                        ->performedOn($paymentModel)
                        ->causedBy(Auth::user ())
                        ->withProperties(['amount' => $paymentDetails['data']['amount'] / 100, 'reference' => $paymentDetails['data']['reference']])
                        ->log('Payment was not successful');
                    return $status;
                } else {
                    if ('success' == strtolower ($paymentDetails['data']['status'])) {
                        $payment->amount_paid = $paymentDetails['data']['amount'] / 100;
                        $payment->status = $paymentDetails['data']['status'];
                        $payment->channel = $paymentDetails['data']['channel'];
                        $user->payments()->save($payment);
                        $status[0] = 'success';
                        $status[1] = 'Order Completed Successfully. Check your mail for details';
                        $images = array();
                        foreach (\Cart::session (Auth::id ())->getContent () as $item) {
                            $images = Arr::add ($images, $item->id, $this->retrievePrivateLink ($item->id));
                            $order = new Orders();
                            $order->order_id = $paymentDetails['data']['reference'];
                            $order->image_id = $item->id;
                            $user->orders()->save($order);
                        }

                        \Cart::session(Auth::id ())->clear();

                        Activity()
                            ->performedOn($paymentModel)
                            ->causedBy(Auth::user ())
                            ->withProperties([
                                'amount' => $paymentDetails['data']['amount'] / 100,
                                'order_id' => $order->order_id,
                                'reference' => $paymentDetails['data']['reference']
                            ])
                            ->log('Made a successful order');

                        Mail::to (Auth::user()->email)->send (new OrderMail($images));
                        $status[0] = 'success';
                        $status[1] = 'Order completed successfully. Check your mail for details';
                        return $status;
                        //return redirect (\route ('home'))->with ('success', 'Order Completed Successfully. Check your mail for details');
                    } else {
                        $payment->amount_paid = $paymentDetails['data']['amount'] / 100;
                        $payment->status = $paymentDetails['data']['status'];
                        $payment->channel = $paymentDetails['data']['channel'];
                        $user->push ();
                        $status[0] = 'error';
                        $status[1] = 'Your Payment was not successful';
                        Activity()
                            ->performedOn($paymentModel)
                            ->causedBy(Auth::user ())
                            ->withProperties(['amount' => $paymentDetails['data']['amount'] / 100, 'reference' => $paymentDetails['data']['reference']])
                            ->log('Payment was not successful');
                        return $status;
                    }
                }
            } catch (ErrorException $exception) {
                $status[0] = 'error';
                $status[1] = 'You made an invalid payment';
                //dd($exception);
                return $status;
            }

            //$user->payments()->save($payment);
        }

        public function retrievePrivateLink ($imageId)
        {
            $image = Image::where ('id', '=', $imageId)->first ();
            $image->downloads += 1;
            $image->save ();
            $publicId = $image->public_id;
            $earning = Earning::updateOrCreate(['user_id' => $image->user_id]);
            $earning->current_balance = ($earning->current_balance + $image->price);
            $earning->total_income = ($earning->total_income + $earning->current_balance);
            $earning->save();
            return Cloudder::showPrivateUrl ($publicId, 'png');
        }

    }
