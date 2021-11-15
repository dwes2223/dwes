<?php
namespace App\Controllers;

require_once "app/models/User.php";
use App\Models\User;
/**
*
*/
class UserController
{

    function __construct()
    {
        // echo "En UserController";
    }

    public function index()
    {
        //buscar datos
        $users = User::all();
        //pasar a la vista
        require('app/views/user/index.php');
    }
    
    public function show($args)
    {
        // $id = (int) $args[0];
        list($id) = $args;
        $user = User::find($id);
        // var_dump($user);
        // exit();
        require('app/views/user/show.php');        
    }
}
