<?php
require 'database/Connection.php';
require 'database/QueryBuilder.php'; 
require 'Task.php';


$pdo = Connection::connectToDb();
$query= new QueryBuilder();