<?php

    namespace App\Http\Controllers;

    use App\Image;
    use App\Payments;
    use App\User;
    use Darryldecode\Cart\Cart;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Support\Arr;
    use Illuminate\Support\Facades\Auth;
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
            $payment->req_amount = session ()->get ('total') * 1;
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
            return redirect ()->route ('home')->with ($status[0], $status[1]);

            //  dd($paymentDetails);
            // Now you have the payment details,
            // you can store the authorization_code in your db to allow for recurrent subscriptions
            // you can then redirect or do whatever you want
        }

        public function updatePayment ($paymentDetails)
        {
            $user = User::find (Auth::id ());
            $payment = $user->payments ()
                ->where ('reference', '=', $paymentDetails['data']['reference'])
                ->first ();
            if ($payment->req_amount != $paymentDetails['data']['amount']) {
                $payment->amount_paid = $paymentDetails['data']['amount'];
                $payment->status = $paymentDetails['data']['status'];
                $payment->channel = $paymentDetails['data']['channel'];
                $user->push ();
                $status[0] = 'error';
                $status[1] = 'You made an invalid payment';
                return $status;
            } else {
                if ('success' == strtolower ($paymentDetails['data']['status'])) {
                    $payment->amount_paid = $paymentDetails['data']['amount'];
                    $payment->status = $paymentDetails['data']['status'];
                    $payment->channel = $paymentDetails['data']['channel'];
                    $user->push ();
                    $status[0] = 'success';
                    $status[1] = 'Order Completed Successfully. Check your mail for details';
                    $images = array();
                    foreach (Cart::session (Auth::id ())->getContent () as $item) {
                        $images = Arr::add ($images, $item->id, $this->retrievePrivateLink ($item->id));
                    }
                    dd ($images);
                    //return $status;
                } else {
                    $payment->amount_paid = $paymentDetails['data']['amount'];
                    $payment->status = $paymentDetails['data']['status'];
                    $payment->channel = $paymentDetails['data']['channel'];
                    $user->push ();
                    $status[0] = 'error';
                    $status[1] = 'Your Payment was not successful';
                    return $status;
                }

            }

            //$user->payments()->save($payment);
        }

        public function retrievePrivateLink ($imageId)
        {
            $image = Image::where ('id', '=', $imageId)->first ();
            $image->downloads += 1;
            $image->save ();
            $publicId = $image->public_id;
            return Cloudder::showPrivateUrl ($publicId, 'png');
            // $image_url = Cloudder::showPrivateUrl($publicId, 'png');
            // return MagicLink::create(new DownloadFileAction($image_url))->url;
        }

    }
