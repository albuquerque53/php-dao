<?php

namespace Routes;

require_once __DIR__ . '/../vendor/autoload.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Access\Controller\ApiController;

class Router
{
    public static function run()
    {
        $app = AppFactory::create();

        $app->get('/', ApiController::class . ':index');

        $app->run();
    }
}
