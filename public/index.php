<?php
//require 'app/index.php';
//require 'resources/views/index.blade.php';
use Core\App;

require __DIR__ .'/../vendor/autoload.php';

require __DIR__ . '/../Core/bootstrap.php';

App:get('router')->redirect($_SERVER['REQUEST_URI']);