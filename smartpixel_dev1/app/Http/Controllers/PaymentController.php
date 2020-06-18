<?php

namespace App\Http\Controllers;

use App\Payments;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Unicodeveloper\Paystack\Paystack;

class PaymentController extends Controller
{
    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        $this->saveInvoice ();
        return (new \Unicodeveloper\Paystack\Paystack)->getAuthorizationUrl()->redirectNow();
    }

    public function saveInvoice() {
       //$user = User::find(Auth::Id());
        $user = \App\User::find(Auth::id ());
        $payment = new Payments();
        $payment->req_amount = session()->get('total') * 1;
        $payment->reference = session()->get('ref');
        $user->payments()->save($payment);
    }
    /**
     * Obtain Paystack payment information
     * @return void
     * @throws \Unicodeveloper\Paystack\Exceptions\PaymentVerificationFailedException
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = (new \Unicodeveloper\Paystack\Paystack)->getPaymentData();
        $this->updatePayment ($paymentDetails);
      //  dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }

    public function updatePayment($paymentDetails) {
        $user = \App\User::find(Auth::id ());
        $payment = $user->payments()
                        ->where('reference', '=', $paymentDetails['reference'])
                        ->first();
        if($payment->req_amount != $paymentDetails['amount']) {
            $payment->amount_paid = $paymentDetails['amount'];
            $payment->status = $paymentDetails['status'];
            $payment->channel = $paymentDetails['channel'];
            $user->push();
            redirect ()->route ('home')->with ('error', 'You made an invalid payment');
        } else {
            $payment->amount_paid = $paymentDetails['amount'];
            $payment->status = $paymentDetails['status'];
            $payment->channel = $paymentDetails['channel'];
            $user->push();
            redirect ()->route ('home')->with ('success', 'Order Completed Successfully. Check your mail for details');
        }

        $user->payments()->save($payment);
    }


}
