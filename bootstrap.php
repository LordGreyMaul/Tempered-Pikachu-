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

$paths = array(__DIR__."/src");
$isDevMode = true;

// the connection configuration
$dbParams = array(
    'dbname' => 'ogpokemon',
    'user' => 'root',
    'password' => 'root',
    'host' => 'localhost',
    'unix_socket' => '/Applications/MAMP/tmp/mysql/mysql.sock',
    'driver' => 'pdo_mysql'
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, null, null, false);
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