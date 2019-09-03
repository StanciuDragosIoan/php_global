<?php


require 'database/Database.php';
require 'database/QueryBuilder.php'; 

$query = new QueryBuilder(Database::connectToDb('mytodo'));