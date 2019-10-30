<?php

$animals = ['dog', 'cat'];

//push onto array
//$animals[] = 'elephant';
 

$person = [
    'age' => 31,
    'hair' => 'brown',
    'career' => 'web developer'
];
//push onto associative array
$person['name'] = 'Jeffrey';

//eliminate an element from an array;
unset($person['age']);

//var_dump displayed better because of <pre> tags;
// echo '<pre>';
// var_dump($person);
// echo '</pre>';


//die(var_dump($person));



require 'index.view.php';




?>