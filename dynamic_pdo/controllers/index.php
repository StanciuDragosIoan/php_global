<?php
    
$users = $app['query']->selectAll('users');

require 'views/index.view.php';
