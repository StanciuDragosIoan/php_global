<?php

require 'bootstrap.php';





$tasks = $query->selectAll('todos');

 

 

 

//var_dump($results[0]->description);

require 'index.view.php';

?>