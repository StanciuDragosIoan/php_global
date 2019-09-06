<?php require 'partials/head.php';?>
        
        <h1>My Tasks</h1>
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

    <?php require 'partials/footer.php';?>