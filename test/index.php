<?php

// class Expense {

//     public $type;

//     public $description;

//     public $value;
 
// }



// //CONNECT TO DB (usually in a try{}catch(){} block)
// try {
//     //host, database name, user, password
//  $pdo = new PDO("mysql:host=localhost;dbname=expenses", "root", "123456");
// }catch(PDOException $e){
//     die($e->getMessage());
// }
// //prepare the statement
// $statement = $pdo->prepare('select * from expenses_record');
// //execute the statement;
// $statement->execute();

// $expenses = $statement->fetchAll(PDO::FETCH_CLASS, 'Expense');//fetch all records

// var_dump($expenses);



// PDO Traversy
$host = 'localhost';
$user = 'root';
$password = '123456';
$dbname = 'expenses';

//set DSN (data source name)
$dsn = 'mysql:host=' . $host . ';dbname=' .$dbname;
 
//create PDO instance
$pdo = new PDO($dsn, $user, $password);




//Prepared statements (prepare() and execute());

// //User input
// $table = "expenses_record";
// $description = "dinner ingredients";
// //positional params (supported by mysqli)

// $sql = "SELECT * FROM $table WHERE description = ?";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$description]);

// $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// var_dump($results);

//note that $description is given as a positional parameter (the ?) and it is inserted as actual variable only when the statement is being executed -->this separates SQL instructions from actual variables/data



// //named parameters (:param)
// //User input
// $table = "expenses_record";
// $description = "dinner ingredients";
// //positional params (supported by mysqli)

// $sql = "SELECT * FROM $table WHERE description = :description";
// $stmt = $pdo->prepare($sql);
// $stmt->execute(["description"=>$description]);

// $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// var_dump($results);

// //note that $description is given as a named parameter (the string :description) and at the execution of statement, the actual variable is being passed to the program through an associative array;