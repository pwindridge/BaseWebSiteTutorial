<?php

namespace core;


class Router {

    private $routes = [
        'GET' => [],
        'POST' => []
    ];

    public function define(Array $routes)
    {
        $this->routes = $routes;
    }

    public function get(string $uri, string $route) {
        $this->routes['GET'][$uri] = $route;
    }

    public function post(string $uri, string $route) {
        $this->routes['POST'][$uri] = $route;
    }

    public static function load(string $file) {
        $router = new self;
        require $file;

        return $router;
    }

    public function direct(string $uri, string $method)
    {
        if (array_key_exists($uri, $this->routes[$method])) {
            return $this->routes[$method][$uri];
        }

        throw new \Exception('Resource not found');
    }
}