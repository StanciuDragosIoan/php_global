<?php

    class Connection {

        public static function make () 

        {
            try {

                //database type, host, database name, user, password 
               return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '123456'); 

            } catch (PDOException $e) {

               die($e->getMessage());
            }

        }
    }




    //call public method
    // $connection = new Connection();
    // $connection->make();


    //call public static method  (for methods that don t require an instance of a class)
    //Connection::make();

   // $pdo = Connection::make();
?>