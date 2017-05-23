<?php

require 'vendor/autoload.php';
require 'bootstrap.php';

use App\Core\App;
use App\Core\Config;
use App\Core\Router;
use App\Core\Request;

//$em = App::getEntityManager();
//$qb = $em->createQueryBuilder();
//
//$qb->select('p')
//    ->from('OrderProducts', 'p')
//    ->where('p.productid = :productId')
//    ->andWhere('p.orderid = :orderId')
//    ->setParameter('productId', 1)
//    ->setParameter('orderId', 1);
////echo $qb->getDQL();
//$query = $qb->getQuery();

//var_dump($query->getResult());
//die();
/* @var OrderProducts $orderProducts */
//$orderProducts = $query->execute();
//var_dump($orderProducts);
//die();


\Stripe\Stripe::setApiKey(Config::get('stripe/secret_key'));

Router::load('routes.php')
    ->direct(Request::uri(), Request::method());

