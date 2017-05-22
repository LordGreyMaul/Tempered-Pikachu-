<?php

require 'vendor/autoload.php';
require 'bootstrap.php';

use App\Core\App;
use App\Core\Config;
use App\Core\Router;
use App\Core\Request;
//var_dump(App::getEntityManager());
//die();
\Stripe\Stripe::setApiKey(Config::get('stripe/secret_key'));

Router::load('routes.php')
    ->direct(Request::uri(), Request::method());

