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
        $uriPart = explode('/', $uri);
        if (array_key_exists($uri,$this->routes)){ //tikrina ar egzistuoja uri masyve
            return $this->routes[$uri];
        } else {
            $newUri = $uriPart[0]."/".$uriPart[1];
            if (array_key_exists($newUri, $this->routes)) { //tikrinam ar egzistuoja pirma uri dalis masyve
//                var_dump($uriPart[$newUri]);
                $this->routes[$uri] = $this->routes[$newUri]; //perrasom masyvo elemento ideksa su reikiamu id
                unset($this->routes[$newUri]);
//                var_dump($this->routes);
                if (array_key_exists($uri, $this->routes)) {//tikrinam ar masyve yra rout'as su reikiamu indeksu
                    return $this->routes[$uri]; //grazinam faila
                }
            } else {
                return $this->routes[404]; // parasom, kad nieko neradom
            }
        }
    }
}