<?php
   

 //var_dump($_REQUEST);
//  var_dump('You typed ' . $_POST['name']);

$app['query']->insert('users', [
    'name' => $_POST['name']
]);


//redirect
header('Location: /phprepo/dynamic_pdo/');
// var_dump($app);