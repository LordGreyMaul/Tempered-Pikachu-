<?php
namespace App\Controllers;

use Accounts;
use App\Core\App;
use DateTime;
use OrderProducts;
use Orders;
use Products;
use Stripe\Order;
use Doctrine\ORM;
use Stripe\Product;

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

    /**
     * @return mixed
     */
    public function addProductToCart()
    {
        // cart is a class to store a cart object?
        // or is it a database table?
        // or is the order created with a status of 1 = cart, 2 = pending payment, 3 = paid, 4 sent

        // post product id and adds to orderProducts table
        //
        /** @var \Doctrine\ORM\EntityManager $em */
        $em = App::getEntityManager();

        /** How do we know the user? we probably don't want it posted. It would be good to have a user class that gets the current user with sessions?*/
        /* @var Accounts $account */
        $account = $em->find('accounts', $_POST['account_id']);

        // No user found, inform view
        if(!$account )
        {
            return view('search', compact('search'));
        }
        $order = $em->find('orders', $_POST['order_id']);

        if(!isset($order))
        {
            $date = new DateTime();
            $date->format('U = Y-m-d H:i:s');
            // create a new order
            $order = new Orders();
            $order->setAccountId($account->getId());
            $order->setDateAdded($date);
            $order->setStatus(1);
            $em->persist($order);
        }
        /* @var Products $product */
        $product = $em->find('products', $_POST['product_id']);
        if(isset($product))
        {
            $orderProducts = new OrderProducts();
            $orderProducts->setOrderid($order->getId());
            $orderProducts->setProductid($product->getId());
            $em->persist($orderProducts);
        }

        $em->flush();

        return view('cart');
    }

    public function removeProductFromCart()
    {
        /** @var \Doctrine\ORM\EntityManager $em */
        $em = App::getEntityManager();

        /** How do we know the user? we probably don't want it posted. It would be good to have a user class that gets the current user with sessions?*/
        /* @var Accounts $account */
        $account = $em->find('accounts', $_POST['account_id']);
        // No user found, inform view
        if(!$account)
        {
            return view('search', compact('search'));
        }
        // get order of customer
        /* @var Orders $order */
        $order = $em->find('orders', $_POST['order_id']);

        /* @var Products $product */
        $product = $em->find('products', $_POST['product_id']);

//        $orderProducts = $em->find('orderProducts',$_POST['product_id'] );


        $qb = $em->createQueryBuilder();

        $qb->select('po')
            ->from('OrderProducts', 'po')
            ->where('po.productid = :productId')
            ->andWhere('po.orderid = :orderId')
            ->setParameter('productId', $_POST['product_id'])
            ->setParameter('orderId', $order->getId());

        $query = $qb->getQuery();

        /* @var OrderProducts $orderProducts */
        $orderProducts = $query->execute();
        var_dump($orderProducts);
        $em->remove($orderProducts);

    }
}