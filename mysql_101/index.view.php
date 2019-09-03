<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>my_sql</title>
</head>
<body>

    <?php foreach($tasks as $task) : ?>
        <li>
            <?=$task->description;?>
        </li>
    <?php endforeach; ?>

       
</body>
</html>