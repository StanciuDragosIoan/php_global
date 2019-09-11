<?php

// $router-> define([

//     'phprepo/forms' => 'controllers/index.php',

//     'phprepo/forms/about' => 'controllers/about.php',

//     'phprepo/forms/about/culture' => 'controllers/about-culture.php',

//     'phprepo/forms/contact' => 'controllers/contact.php',

//     'phprepo/forms/names' => 'controllers/add-name.php'  //only for POST reqs
// ]);



//define routes based on request type
$router->get('phprepo/dynamic_pdo', 'controllers/index.php');

$router->get('phprepo/dynamic_pdo/about', 'controllers/about.php');

$router->get('phprepo/dynamic_pdo/about/culture', 'controllers/about-culture.php');

$router->get('phprepo/dynamic_pdo/contact', 'controllers/contact.php');

$router->post('phprepo/dynamic_pdo/names', 'controllers/add-name.php');

 