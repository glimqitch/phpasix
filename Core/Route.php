<?php

namespace Core;

class Route
{
    protected $routes= array();

    protected $route;

    public function register($route)
    {
        $this->routes[] = $route;
    }
    public function define($route)
    {
        $this->routes[] = $route;
        return $this;
    }
    public function redirect($uri)
    {
        if(!array_key_exists($uri, $this->routes))
        {
            require '../resources/views/errors/404.blade.php';
            return $this;
        }

        if(!file_exists($this->routes[$uri])){
            throw new \Exception("Route $uri does not exist");
            return $this->routes[$uri];
        }
    }
}
?>