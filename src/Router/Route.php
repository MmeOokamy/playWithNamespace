<?php


namespace PWN\Router;


class Route
{
    private string $path;
    private string $callable;

    public function __construct($path, $callable)
    {
        $this->path = $path;
        $this->callable = $callable;
    }

}