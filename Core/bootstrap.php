<?php

use Dotenv\Dotenv;
use Core\App;
use Core\Database\Connection;
use Core\Database\Database;
use Core\Route;


$routes= require '../routes.php';

$dotenv= Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();

App::bind('config', require '../config.php');

App::bind('database', new Database(
    Connection::make(
        App::get('config')['database']
    )
));

App::bind('router', (new Route())->define($routes));
?>