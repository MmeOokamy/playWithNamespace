<?php

namespace PWN\Router;


class Router
{
    private string $viewPath;
    private array $routes = [];

    public function __construct($viewPath)
    {
        $this->viewPath = $viewPath;
    }

    public function get($path, $callable): Route
    {
        $route = new Route($path, $callable);
        $this->routes['GET'][] = $route;
        return $route;

    }

    public function post($path, $callable)
    {
        $route = new Route($path, $callable);
        $this->routes['POST'][] = $route;
        return $route;
    }


    public function run()
    {
        echo '<pre>';
        echo print_r($this->routes);
        echo '</pre>';
    }
}