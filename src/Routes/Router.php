<?php

namespace Src\Routes;

require_once __DIR__ . '/../../vendor/autoload.php';

use Slim\Factory\AppFactory;
use Access\Controller\ApiController;

class Router
{
    public static function routerApp(\Slim\App $app)
    {
        $app->get('/', ApiController::class . ':index');
        $app->get('/user/{id}', ApiController::class . ':show');
        $app->get('/search', ApiController::class . ':search');
        $app->post('/new', ApiController::class . ':store');
        $app->put('/update/{id}', ApiController::class . ':update');
        $app->delete('/remove/{id}', ApiController::class . ':destroy');

        return $app;
    }
}
