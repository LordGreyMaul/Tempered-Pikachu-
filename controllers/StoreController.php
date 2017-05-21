<?php
namespace App\Controllers;

class StoreController
{
    // Store index
    public function store()
    {
        return view('storeHome');
    }

    //Cart Page
    public function cart()
    {
        return view('cart');
    }

    public function checkOut()
    {
        return view('checkout');
    }

    public function charge()
    {
        $token  = $_POST['stripeToken'];

        $customer = \Stripe\Customer::create(array(
            'email' => 'customer@example.com',
            'source'  => $token
        ));

        $charge = \Stripe\Charge::create(array(
            'customer' => $customer->id,
            'amount'   => 5000,
            'currency' => 'usd'
        ));

        echo '<h1>Successfully charged $50.00!</h1>';
    }

    public function addProductToCart()
    {

    }

    public function removeProductFromCart()
    {

    }
}