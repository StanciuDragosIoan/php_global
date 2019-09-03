<?php

require 'functions.php';
 
 
require 'Task.php';




$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);





 

//var_dump($results[0]->description);

require 'index.view.php';

?>