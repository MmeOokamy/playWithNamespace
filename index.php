<?php

use PWN\Router\Router;

require_once __DIR__ . '/vendor/autoload.php';

var_dump( $_SERVER["REQUEST_URI"]);

$router = new Router($_SERVER["REQUEST_URI"]);

$router->run();