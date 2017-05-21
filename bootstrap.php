<?php

use App\Core\App;

//App::bind('config', require 'config.php');
//
//App::bind('database', new QueryBuilder(
//    Connection::make(App::get('config')['database'])
//));

// bootstrap.php

use App\Core\Config;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require'_config.local.php';

$paths = array(__DIR__."/src");
$isDevMode = true;


$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
$entityManager = EntityManager::create(Config::get('database'), $config);

function view($name, $data=[])
{
    extract($data);
    return require "views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: /{$path}");
}