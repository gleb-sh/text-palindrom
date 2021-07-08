<?php

namespace App;

class Router
{
    public array $routsList = [
        'GET'=>[],
        'POST'=>[],
    ];

    public function get(string $route, array $data) : void
    {
        $this->newRouteToList($route,$data,'GET');
    }

    public function post(string $route, array $data) : void
    {
        $this->newRouteToList($route,$data,'POST');
    }

    private function newRouteToList(string $route, array $data, string $type) : void
    {
        $this->routsList[$type][$route] = $data;
    }

    public function routing(string $URI)
    {
        if ($URI === '/') {

            $this->includeController($this->routsList[$_SERVER['REQUEST_METHOD']]['/']);

        } else {

            $array = array_filter( explode('/',$URI));

            $this->includeController($this->routsList[$_SERVER['REQUEST_METHOD']][$array[1]]);

        }
    }

    private function includeController(array $data = null)
    {
        if (!$data) {
            header('404');
            die ("Page not found");
        }
        
        $controller = new $data[0];

        $action = $data[1];
        
        $controller->$action();
    }

}