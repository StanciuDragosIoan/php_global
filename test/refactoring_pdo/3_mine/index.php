<?php

require 'bootstrap.php';










$tasks = $query->selectAll($pdo);





 

//var_dump($results[0]->description);

require 'index.view.php';

?>