<?php

require 'functions.php';
require 'Database.php';
 
require 'Task.php';


 



 $pdo = connectToDb();
 
 $database = new Database($pdo);

// $pdo = connectToDb();

// $tasks = fetchAllTasks($pdo);


//die(var_dump($pdo));

$tasks = $database->queryDatabase($pdo);





 

//var_dump($results[0]->description);

require 'index.view.php';

?>