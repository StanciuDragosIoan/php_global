<?php
 
//createa database cmd sql-> create database name ->create database mytodo;

//use mytodo; (open the DB);  (CREATED A DB called todos);

//once the DB opened, run -> show tables; (to see the tables)

//create table todos (description text, completed boolean);    ->this creates the table (not how we specify the type of data to be put in the database entries)

//describe todos; (shows details about DB);


//drop table todos; (deletes the table);

//create table todos (description text NOT NULL, completed boolean NOT NULL);  (we need to specify NOT NULL for values or we'll get an error); ->we do this so that we can make more empty rows in which to fill the description and completed (in this case);



//create table todos (id integer PRIMARY KEY AUTO_INCREMENT, description text NOT NULL, completed boolean NOT NULL);  (added autoincrement id which is primary key);



//insert into todos (description, completed) values('Go to the store', false);     (inserted 1st record into table)

//select * from todos;  (shows all items in the todos table);

require 'functions.php';
require 'index.view.php';




?>