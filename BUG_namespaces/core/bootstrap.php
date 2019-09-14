<?php

use App\Core\App;

//store configuration file in a $config key in the App DI container
App::bind('config', require 'config.php');



//we can bind anything to the container
// App::bind('foo', 'bar');
// die(var_dump(App::get('foo')));



//return the configuration array
// $config = App::get($config);
 

//get querybuilder from App DI container   
   App::bind('database', new QueryBuilder(

        Connection::make(App::get('config')['database'])

    ));



    //helper function
    function view($name, $data = []){

        // $test = ['name' => 'joe']  => extract($test) will produce a var $name = 'joe';
        extract($data);

        return require "app/views/{$name}.view.php";
    }

?>