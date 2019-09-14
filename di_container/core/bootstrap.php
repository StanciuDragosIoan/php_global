<?php

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

?>