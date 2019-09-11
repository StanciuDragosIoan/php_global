<?php


$query = require 'bootstrap.php';
  
require 'Task.php';

$tasks = $query->selectAll('todos');

//map tasks to the Task class and its properties manually
// $tasks = array_map(function ($task) {

//     $t =  new Task();

//     $t->description = $task['description'];
// }, $tasks);
 

//die(var_dump($tasks));

require 'index.view.php';



?>