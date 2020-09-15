<?php

use Routes\Router;

require_once __DIR__ . '/../vendor/autoload.php';

$app = Router::createApp();
$app->run();

