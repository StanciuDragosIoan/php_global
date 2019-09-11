<?php


 require 'core/bootstrap.php';
 
 
 
//chaining of 2 methods (note they require instantiating the Router class);
require Router::load('routes.php')

    ->direct(Request::uri(), Request::method());


 
?>