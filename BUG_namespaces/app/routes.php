<?php
 


//define routes based on request type
$router->get('phprepo/namespaces', 'PagesController@home');

$router->get('phprepo/namespaces/about', 'PagesController@about');

$router->get('phprepo/namespaces/contact', 'PagesController@contact');
 
$router->get('phprepo/namespaces/users', 'UsersController@index');

$router->post('phprepo/namespaces/users', 'UsersController@store');