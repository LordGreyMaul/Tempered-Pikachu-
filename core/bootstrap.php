<?php

use App\Core\App;

//App::bind('config', require 'config.php');
//
//App::bind('database', new QueryBuilder(
//    Connection::make(App::get('config')['database'])
//));

// bootstrap.php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array("/Users/scott/temperedpikachu/src");
$isDevMode = true;

// the connection configuration
$dbParams = array(
    'dbname' => 'ogpokemon',
    'user' => 'root',
    'password' => 'root',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);

function view($name, $data=[])
{
    extract($data);
    return require "views/{$name}.view.php";
}

function redirect($path)
{
    header("Location: /{$path}");
}