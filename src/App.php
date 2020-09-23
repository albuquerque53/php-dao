<?php

namespace Src;

use Slim\Factory\AppFactory;
use Src\Routes\Router;

class App extends \Slim\App 
{
    protected $app;

    public function __construct()
    {
        $this->app = AppFactory::create(); 

        return $this->app;
    }

    public function implementRoutes(Router $router)
    {
        $routedApp = $router::routerApp($this->app);

        return $routedApp;
    }
}
