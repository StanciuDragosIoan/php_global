<?php
function dd($data) {

    echo '<pre>';
        var_dump($data);
        die();
    echo '</pre>';
    
}



function connectToDb() {
    try {
        //database type, host, database name, user, password 
    return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '123456'); 
      
    } catch (PDOException $e) {
    
        //handle error
       // die('Could not connetc...');
    
       die($e->getMessage());
    }
    
}





function fetchAllTasks($pdo) {
    //prepare statement
    $statement = $pdo->prepare('select * from todos');

    //execute statement;
    $statement->execute();

    //dump result


    // $tasks = $statement->fetchAll(PDO::FETCH_OBJ);
    // $tasks = $statement->fetchAll(PDO::FETCH_OBJ);
    return  $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

?>