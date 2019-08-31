<?php
//to run a php file in terminal type -> php file.php (name of file);

//type php -h to get the help options built in

//php -S localhost:5555 (or any other port number) starts a webpage with the file on the respective port (regardless of whether your file is in the htdocs or not), then go to the link or click on it in the terminal while holding ctr down and it opens the webpage;


#VARIABLES

    //nest a var as is between "" (not working with '') or concatenate it;


    //php tag cannot be not closed if it's nexted in html, if it's only 1 php file, with only 1 php tag, the tag does not have to be closed;


#FETCH DATA FROM URL PARAMS

    // Fetch data from URL params with $_GET['key']  in url reference the key/value pairs as: http://localhost:5000/?greeting=Hello&name=Dragos  (note how 1st param is defined with ? and next one/ones with &)

    // <php echo $test   (this is equal to <?= $test)
    
#ASSOCIATIVE ARRAYS
    $person = [
        'age' => 31,
        'hair' => 'brown',
        'career' => 'web developer'
    ];

    //var_dump displayed better because of <pre> tags;
    echo '<pre>';
    var_dump($person);
    echo '</pre>';

    //when debugging, we can either do:
    var_dump($person);
    die();
    //or we can do:
    die(var_dump($person));
    
    ?>