<?php require('partials/head.php'); ?>

        <h1>All Users</h1>

<?php


 
    foreach($users as $user) :  ?>
   
        <li><?=$user->name;?> </li>

<?php endforeach;?>  

<h1>Submit your name</h1>


<form method="POST" action="/phprepo/refactoring_controller_classes/users">

    <input name="name">

    <button type="submit">Submit</button>
</form>

<?php require('partials/footer.php'); ?>

 