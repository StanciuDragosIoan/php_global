<?php

function add($x, $y){
    return  $x + $y;
}

function addIndefiniteNumberofArgs($x, $y){
    return array_sum(func_get_args());
}

//specify the type of arguments
function addWithSpread(int...$numbers){
    return array_sum($numbers);
}

// echo addWithSpread(2,3,4);

// var_dump(["foo", "bar", ...["baz"]]);

function addWithSpread2($current = 0, int ...$numbers){
    
    return array_sum([$current, ...$numbers]);
}

echo addWithSpread2(3,4,3);