<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        header{
            background:#e3e3e3;
            padding:2rem;
            text-align:center;
        }
    </style>
</head>
<body>

    <header>    
        <h1><?php 

            $greeting = $_GET['greeting'];
            $name = $_GET['name'];
            $greeting = "Hello $name";
          //  echo $greeting;
            
            ?></h1>


            <h1><?php  echo htmlspecialchars($_GET['greeting']) . ' ' . htmlspecialchars($_GET['name']);  ?></h1>
    </header>
 
</body>
</html>

<!-- Fetch data from URL params with $_GET['key']  in url reference the key/value pairs as: http://localhost:5000/?greeting=Hello&name=Dragos -->