<?php

namespace core;


class Router {

    private $routes = [
        'GET' => [],
        'POST' => []
    ];

    public function get($uri, $route)
    {
        $this->routes['GET'][$uri] = $route;
    }

    public function post($uri, $route)
    {
        $this->routes['POST'][$uri] = $route;
    }

    public static function load(string $file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    /**
     * @param $uri
     * @param $method
     * @return mixed
     * @throws \Exception
     */
    public function direct($uri, $method)
    {
        if (array_key_exists($uri, $this->routes[$method])) {

            return $this->callAction(
                ...explode('@', $this->routes[$method][$uri])
            );

        } else {

            throw new \Exception('Page not found');
        }
    }

    /**
     * @param $controller
     * @param $action
     * @return mixed
     * @throws \Exception
     */
    private function callAction($controller, $action)
    {
        $controller = 'mvcwebsite\controllers\\' . $controller;

        $controller = new $controller();

        if (method_exists($controller, $action)) {
            return $controller->$action();
        }

        throw new \Exception('Action does not exist');
    }
}