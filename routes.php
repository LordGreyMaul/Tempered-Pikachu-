<?php


// Main Pages
$router->get('', 'PagesController@index');
$router->get('about', 'PagesController@about');
$router->post('card', 'PagesController@card');
$router->post('search', 'PagesController@search');
$router->get('history', 'PagesController@history');
$router->get('sets', 'PagesController@sets');
$router->post('singleset', 'PagesController@singleSet');

//Store Routes
$router->get('store', 'StoreController@store');
$router->get('cart', 'StoreController@cart');