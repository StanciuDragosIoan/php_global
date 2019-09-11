<?php
    
$tasks = $app['query']->selectAll('todos');

require 'views/index.view.php';
