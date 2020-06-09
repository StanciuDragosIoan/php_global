<?php
require "vendor/autoload.php";

//check if var is set
//echo isset($_GET['name']) ? $_GET['name'] : "\n Not provided \n";

//check if var set with nullcoalescent operator (checks 
//if var is set - php 7)
// echo $_GET["name"] ?? "\n Not provided \n";


//php 74 adds the null coalescence assignment operator

$user = [
        "name" => [
           // "first" => "jdoe",
            "last" => "exotic"
        ]
    ];

//no operator
// $user["name"]["first"] = isset($user["name"]["first"]) ? $user["name"]["first"] : "Not Provided";


//null coalescent operator
// $user["name"]["first"] = $user["name"]["first"] ?? "Not Provided";


//null coalescent assignment operator (php 7.4)
$user["name"]["first"] ??= "Not Provided";
var_dump($user);