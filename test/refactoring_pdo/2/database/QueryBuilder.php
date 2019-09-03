<?php
    class QueryBuilder {

        protected $pdo;

        public function __construct($pdo) {
            $this->pdo = $pdo;
        }

        public function selectAll($table){
            //prepare statement
            $statement = $this->pdo->prepare("select * from {$table}");
            //execute statement;
            $statement->execute();
            return  $statement->fetchAll(PDO::FETCH_CLASS);
        }
    }