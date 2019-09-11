<?php
    class QueryBuilder

    {   

        protected $pdo;

        public function __construct ($pdo)

        {
            $this->pdo = $pdo;
        }



        public function selectAll($table)

        {

            $statement = $this->pdo->prepare("select * from {$table}");

            $statement->execute();

            return  $statement->fetchAll(PDO::FETCH_CLASS);
 
        }

        public function insert($table, $parameters)
        {
            $sql = sprintf(
                'insert into %s (%s) values (%s)',

                $table, 
                
                //table to insert into
                //separate keys in array by comma
                implode(' , ', array_keys($parameters)), 
                
                //values to insert in table
                ':' . implode(', :', array_keys($parameters))

            );


            try {
                   //prepare query
            $statement = $this->pdo->prepare($sql);

            //execute querry  (bind values by passing $parameters array)
            $statement->execute($parameters);
            } catch (Exception $e) {

                die('whooops, something went wrong...');

            }
         
        }
    }
?>