<?php

namespace TaskManager; //sita namespace is Router php rasome i composer json

class Router
{
    private $routes = [];

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }
// '->' reiskia, kad as kreipiuosi i objekto savybe

    public function define($routes)
    {
        $this->routes = $routes;
    }
    public function direct($uri)
    {
        if(array_key_exists($uri, $this->routes)) {  // paduodam stringa ir jis tikrina ar stringas yra tarp masyvo elementu
            return $this->routes[$uri]; // jei yra, grazina
        } else {
//            echo $_SERVER['REQUEST_URI'];
//            var_dump($this->routes);
            return $this->routes[404]; // jei ne, ismeta kitokio turinio psl
        }
    }
}