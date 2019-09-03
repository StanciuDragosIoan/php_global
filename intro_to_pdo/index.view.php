<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intro to PDO</title>
</head>
<body>
    <ul>
        <?php foreach($tasks as $task) : ?>
        <!-- can t access protected property like below (works only with public properties) -->
            <li>
                <?php if($task->completed) : ?>
                    <del><?= $task->description;?></del>
                <?php else : ?>
                    <?= $task->description;?>   
                <?php endif;?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>