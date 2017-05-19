<?php

require 'vendor/autoload.php';
require 'bootstrap.php';

use App\Core\Config;
use App\Core\Router;
use App\Core\Request;

Router::load('_config.local.php');
\Stripe\Stripe::setApiKey(Config::get('stripe/secret_key'));

Router::load('routes.php')
    ->direct(Request::uri(), Request::method());

