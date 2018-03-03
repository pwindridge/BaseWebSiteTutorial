<?php

namespace core;


class Router {

    private $routes = [
        'GET' => [],
        'POST' => []
    ];

    public function get(string $uri, string $route)
    {
        $this->routes['GET'][$uri] = $route;
    }

    public function post(string $uri, string $route)
    {
        $this->routes['POST'][$uri] = $route;
    }

    public static function load(string $file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    public function direct(string $uri, string $method)
    {
        $uri = strtolower($uri);

        if (array_key_exists($uri, $this->routes[$method])) {
            return $this->callAction(
                ...explode('@', $this->routes[$method][$uri])
            );
        }

        throw new \Exception('Resource not found');
    }

    private function callAction($controller, $action)
    {
        $controller = '\mvcwebsite\controllers\\' . $controller;
        $controller = new $controller();

        if (method_exists($controller, $action)) {
            return $controller->$action();
        }

        throw new \Exception("Action not supported");
    }
}