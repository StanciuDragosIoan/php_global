<?php
    $app = [];


    $app['config'] = require 'config.php';

 

    
   $app['query'] =  new QueryBuilder(

        Connection::make($app['config']['database'])

    );

?>