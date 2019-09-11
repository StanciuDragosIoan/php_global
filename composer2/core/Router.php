<?php

 class Router {

    public $routes = [
        'GET' => [],

        'POST' => []
    ];

    public static function load($file) {
        //use static or self to instantiate class inside static method (where we can t use $this)
        $router = new static;

        //load file (routes.php)
        require $file;

        //return an instance of router
        return $router;
    }

    

    //define get request for this class
    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller; 
    }


    //define post request for this class
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller; 
    }

  


    public function direct($uri, $requestType) {
        if(array_key_exists($uri, $this->routes[$requestType])){

            return $this->routes[$requestType][$uri];

        }

        throw new Exception('No route defined for this URI..');
    }
 }