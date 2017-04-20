<?php



$router->get('', 'PagesController@index');
$router->get('about', 'PagesController@about');
$router->post('search', 'PagesController@search');
$router->get('history', 'PagesController@history');