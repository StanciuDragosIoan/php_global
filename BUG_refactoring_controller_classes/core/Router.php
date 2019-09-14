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


            //PagesController@home


            explode('@', $this->routes[$requestType][$uri]);
            //die($this->routes[$requestType][$uri]);
            //return $this->routes[$requestType][$uri];

            return $this->callAction(

                ...explode('@', $this->routes[$requestType][$uri])

            );

        }

        throw new Exception('No route defined for this URI..');
    }

    protected function callAction($controller, $action)

    {

      //  die(var_dump($controller, $action));
        $controllerObject = new $controller;

      

        if (! method_exists($controllerObject, $action)){

            throw new Exception (

               "{$controller} does not respond to the {$action} action."

              
            );

        }
   
        return $controllerObject->$action();
        
    }
 }