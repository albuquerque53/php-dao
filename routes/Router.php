<?php

namespace Routes;

require_once __DIR__ . '/../vendor/autoload.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Access\Controller\UserController;

class Router
{
    public static function run()
    {
        $app = AppFactory::create();

        $app->get('/', function ($request, $response, $arguments) {
            $user = new UserController;

            echo json_encode($user->index());

            exit();
        });

        $app->run();
    }
}
