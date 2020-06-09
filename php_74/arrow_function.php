<?php

require "vendor/autoload.php";
require "Series.php";
require "SeriesCollection.php";


// $series = collect([
//     new Series("php series"),
//     new Series("php series 2"),
// ]);

//regular function (capitalize 1st letter)
// $series->each(function($s){
//     $s->title = ucwords($s->title);
// });


/*  
    (capitalize 1st letter)
    arrow function (note it works only for single line commands, 
    can't use multiline with {} like in JS)
 */
//$series->each(fn($s) => $s->title = ucwords($s->title)); 

 

//extract an array of title objects only
// $series = $series->map(function($s){
//     return $s->title;
// });

//titles only with arrow
// $series = $series->map(fn($s) => $s->title);
// var_dump($series);



//####

$series = new SeriesCollection([
    new Series("php series"),
    new Series("php series 2"),
]);

var_dump($series->firstByTitle("php series 2"));