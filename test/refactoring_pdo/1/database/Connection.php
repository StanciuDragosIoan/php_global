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

 
?>