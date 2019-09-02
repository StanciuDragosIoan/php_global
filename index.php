<?php

require 'functions.php';
 
 //CLASSES (e.g. Task, Comment, User, etc);

class Task {
    protected $description;

    protected $completed = false;

    public function __construct($description){
        //automatically triggered on instantiation
        $this->description = $description;
    }

    public function complete(){
        $this->completed = true;
    }

    public function isComplete() {
        return $this->completed;
    }
}


$task = new Task('Go to the store');

//$task->isComplete;

// dd($task);

$task->complete(); //complete the task

var_dump($task->isComplete());

require 'index.view.php';

//public properties can be accessed from outside the class -> $task->description;

//private properties we cannot access from outside the class -> $task->description;


$tasks = [
    new Task('Go to the store'),
    new Task('Finish my screencast'),
    new Task('Clean my room')
];

//dd($tasks);

?>