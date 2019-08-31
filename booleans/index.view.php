<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

        <h1>
            Task For The Day
        </h1>

        <!-- <ul>
            <?php foreach($task as $heading => $value) : ?>
                <li>
                    <strong> <?= ucwords($heading); ?>: </strong> <?=$value; ?>
                </li>
            <?php endforeach; ?>
        </ul> -->


        <ul>
            <li><strong>Name: </strong><?=$task['title'];?></li>
            <li><strong>Due Date: </strong><?=$task['due'];?></li>
            <li><strong>Person Responsible: </strong><?=$task['assigned_to'];?></li>

            <!-- true ? 'do something' : 'do something else' -->
            <li><strong>Status: </strong><?=$task['completed'] ? 'Complete' : 'Incomplete';?></li>
        </ul>
</body>
</html>