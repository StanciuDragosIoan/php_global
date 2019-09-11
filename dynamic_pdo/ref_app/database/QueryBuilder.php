<?php
    class QueryBuilder

    {   

        protected $pdo;

        public function __construct ($pdo)

        {
            $this->pdo = $pdo;
        }




//selectAll used to map a required class

        // public function selectAll($table, $intoTask)

        // {

        //     $statement = $this->pdo->prepare("select * from {$table}");

        //     $statement->execute();

        //     return  $statement->fetchAll(PDO::FETCH_CLASS, $intoTask);
 
        // }

        public function selectAll($table)

        {

            $statement = $this->pdo->prepare("select * from {$table}");

            $statement->execute();

            return  $statement->fetchAll(PDO::FETCH_CLASS);
 
        }
    }
?>