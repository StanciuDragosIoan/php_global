<?php

 class Router {

    protected $routes = [];

    public static function load($file) {
        //use static or self to instantiate class inside static method (where we can t use $this)
        $router = new static;

        //load file (routes.php)
        require $file;

        //return an instance of router
        return $router;
    }

    public function define($routes) {

        $this->routes = $routes;

    }


    public function direct($uri) {
        if(array_key_exists($uri, $this->routes)){

            return $this->routes[$uri];

        }

        throw new Exception('No route defined for this URI..');
    }
 }