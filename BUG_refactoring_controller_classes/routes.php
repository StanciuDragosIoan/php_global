<?php
 


//define routes based on request type
$router->get('phprepo/refactoring_controller_classes', 'PagesController@home');

$router->get('phprepo/refactoring_controller_classes/about', 'PagesController@about');

$router->get('phprepo/refactoring_controller_classes/contact', 'PagesController@contact');
 
$router->get('phprepo/refactoring_controller_classes/users', 'UsersController@index');

$router->post('phprepo/refactoring_controller_classes/users', 'UsersController@store');