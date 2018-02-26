<?php

namespace core;


class Router {

    private $routes = [];

    public function define(array $routes)
    {
        $this->routes = $routes;
    }

    public static function load(string $file)
    {
        $router = new static;

        $router->define(require $file);

        return $router;
    }

    public function direct(string $uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }
        throw new \Exception('Resource not found');
    }
}