<?php
namespace App\Controllers;

use App\Core\App;
use Orders;
use Stripe\Order;
use Doctrine\ORM;

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

        // send to order success page;
        echo '<h1>Successfully charged $50.00!</h1>';
    }

    public function addProductToCart()
    {
        /** @var \Doctrine\ORM\EntityManager $em */
        $em = App::getEntityManager();

        /** How do we know the user? we probably don't want it posted. It would be good to have a user class that gets the current user with sessions?*/
        $account = $em->find('accounts', $_POST['account_id']);

        // No user found, inform view
        if(!$account )
        {
            return view('search', compact('search'));
        }

        $product = $em->find('products', $_POST['product_id']);
        $order = $em->find('orders', $_POST['order_id']);

        if(!isset($order))
        {
            $order = new Orders();
            $order->setAccountId();
            // create a new order
        }

        // cart is a class to store a cart object?
        // or is it a database table?
        // or is the order created with a status of 1 = cart, 2 = pending payment, 3 = paid, 4 sent

        // post product id and adds to orderProducts table
        //
    }

    public function removeProductFromCart()
    {
        $product = $_POST['product_id'];
    }
}