<?php

use Src\Routes\Router;
use Src\App;

require_once __DIR__ . '/../vendor/autoload.php';

$app = new App;
$router = new Router;

$app->implementRoutes($router);
$app->run();

