<?php

// $router-> define([

//     'phprepo/forms' => 'controllers/index.php',

//     'phprepo/forms/about' => 'controllers/about.php',

//     'phprepo/forms/about/culture' => 'controllers/about-culture.php',

//     'phprepo/forms/contact' => 'controllers/contact.php',

//     'phprepo/forms/names' => 'controllers/add-name.php'  //only for POST reqs
// ]);



//define routes based on request type
$router->get('phprepo/composer2', 'controllers/index.php');

$router->get('phprepo/composer2/about', 'controllers/about.php');

$router->get('phprepo/composer2/about/culture', 'controllers/about-culture.php');

$router->get('phprepo/composer2/contact', 'controllers/contact.php');

$router->post('phprepo/composer2/names', 'controllers/add-name.php');

 