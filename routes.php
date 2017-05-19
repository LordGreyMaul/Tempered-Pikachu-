<?php

/* @var $router \App\Core\Router*/
// Main Pages
$router->get('', 'PagesController@index');
$router->get('about', 'PagesController@about');
$router->post('card', 'PagesController@card');
$router->post('search', 'PagesController@search');
$router->get('history', 'PagesController@history');
$router->get('sets', 'PagesController@sets');
$router->post('singleset', 'PagesController@singleSet');

//User Pages
$router->get('register', 'UsersController@register');
$router->get('myaccount', 'UsersController@myAccount');

//Store Routes
$router->get('store', 'StoreController@store');
$router->get('cart', 'StoreController@cart');
$router->post('charge', 'StoreController@charge');
$router->get('checkOut', 'StoreController@checkOut');