<?php

namespace App\Controllers;

use App\Core\App;



class UsersController

{

    public function index ()
    {

        
        $users = App::get('database')->selectAll('users');

        return view('users', compact('users'));  

    }

    public function store ()

    {

        //insert user associated with the request 
        App::get('query')->insert('users', [
            'name' => $_POST['name']
        ]);

        
        //redirect back to all users
        header('Location: /phprepo/namespaces/users');

     

    }

}