<?php

namespace Routes;

require_once __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;
use Access\Controller\ApiController;

class Router
{
    public static function run()
    {
        $app = AppFactory::create();

        $app->get('/', ApiController::class . ':index');
        $app->get('/user/{id}', ApiController::class . ':show');

        $app->run();
    }
}
