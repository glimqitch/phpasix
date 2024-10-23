<?php
//require 'app/index.php';
//require 'resources/views/index.blade.php';
use Core\App;

require '../vendor/autoload.php';

require '../Core/bootstrap.php';

App::get('router')->redirect($_SERVER['REQUEST_URI']);