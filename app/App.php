<?php

namespace App;

use App\Router;

class App
{
    public function route(string $URI, Router $router)
    {
        return $router->routing($URI);
    }
}