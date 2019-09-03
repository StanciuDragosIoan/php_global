<?php

require 'bootstrap.php';

//require 'Task.php';






$tasks = $query->selectAll('todos');





 

//var_dump($results[0]->description);

require 'index.view.php';

?>

<!-- 

    replaced the function that connects to database with a static method in a Connection class (in the database folder);
    replaced the fetchAllTasks() function with a QueryBuilder class;
        defined a protected property $pdo of the class and made it accessible via the constructor;

        in the QueryBuilder defined a public method selectAll($table), where we call the prepare() method from the
            private property $pdo of the class (as prepare() is a pdo method);
        
        #did this so that we don't have to pass the $pdo around to the QueryBuilder;

    set up a bootstrap file that requires the Connection and QueryBuilder classes and builds the query and returns it;
        next we capture in a var $query (in index.php) the resulting query;

    added the $intoTask var to the selectAll method so we can map a query result to specific classes (given as params)
 -->