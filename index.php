<?php


$query = require 'bootstrap.php';
  
//instantiate router class
$router = new Router();

//require routes file
//require 'routes.php';
$router->define([

	'' => 'controllers/index.php',

	'about' => 'controllers/about.php',

	'about/culture' => 'controllers/about-culture.php',

	'contact' => 'controllers/contact.php'

]);


?>