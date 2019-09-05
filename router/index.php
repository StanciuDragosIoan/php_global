<?php


 require 'core/bootstrap.php';
 
 
 
//chaining of 2 methods
require Router::load('routes.php')

    ->direct(Request::uri());


 
?>