<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Unicodeveloper\Paystack\Paystack;

class PaymentController extends Controller
{
    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return (new \Unicodeveloper\Paystack\Paystack)->getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     * @throws \Unicodeveloper\Paystack\Exceptions\PaymentVerificationFailedException
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = (new \Unicodeveloper\Paystack\Paystack)->getPaymentData();

        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
