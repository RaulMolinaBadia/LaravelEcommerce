<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
// use Session;
use Stripe\Checkout\Session;
use Stripe\Stripe;
// use Stripe;
// use Illuminate\Support\Facades\Session;

class StripePaymentController extends Controller
{

    // public function stripe($totalPrice)
    // {
    //     // return $totalPrice; 
    //     return view('stripe', compact('totalPrice'));
    // }


    // public function stripePost(Request $request)
    // {
    //     Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    //     Stripe\Charge::create([
    //         "amount" => $request->totalPrice * 100, // convierte el precio a centavos
    //         "currency" => "usd",
    //         "source" => $request->stripeToken,
    //         "description" => "Test payment from LaravelTus.com."
    //     ]);

    //     Session::flash('success', 'Payment successful!');
    //     return redirect('/')->with('message', 'Payment successful!');
    // }

    public function stripe($totalPrice)
    {
        \Cart::clear();
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'eur',
                        'product_data' => [
                            'name' => 'Compra en tienda RaulVideogames',
                        ],
                        'unit_amount' => $totalPrice * 100,
                    ],
                    'quantity' => 1,
                ],
            ],
            'mode' => 'payment',
            'success_url' => 'http://127.0.0.1:8000/productos',
            'cancel_url' => 'http://127.0.0.1:8000/productos',
        ]);

        return redirect()->to($session->url);
    }
}
