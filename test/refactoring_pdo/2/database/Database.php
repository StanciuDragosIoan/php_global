<?php
    class Database {
        public static function connectToDb($databaseName){
            try {
                //database type, host, database name, user, password 
               return new PDO("mysql:host=127.0.0.1;dbname=$databaseName", 'root', '123456'); 
            } catch (PDOException $e) {
               die($e->getMessage());
            }
        }
    }


?>