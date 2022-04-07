<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PaymentController extends BaseController
{
    public function index()
    {
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-bniHSwdnbrw5QeP0-qD_7-jS';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = [
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            )
        ];

        $data = [
            $snapToken = \Midtrans\Snap::getSnapToken($params),
        ];

        return view('pay', $data);
    }
}
