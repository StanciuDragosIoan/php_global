<?php
function dd($data) {

    echo '<pre>';
        var_dump($data);
        die();
    echo '</pre>';
    
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