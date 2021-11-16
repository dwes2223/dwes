<?php
namespace App\Controllers;

require_once "app/models/User.php";
use App\Models\User;

/*
* La inserción requiere dos métodos en el controlador:
*   - Método insert que genera un formulario de alta
*   - Método store que recibe los datos de dicho formulario:
*       -> concluye con un reenvío a la lista, index(), o al detalle, show() del nuevo registro
*
* La actualización requiere dos métodos en el controlador:
*   - Método edit que genera un formulario de modificación con los datos del registro.
*        Este método implica buscar en la base de datos antes de construir el formulario
*   - Método update que recibe los datos de dicho formulario.
*        Igualmente, debemos buscar el registro en la base de datos y después modificarlo
*
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
    
    public function create()
    {
        require 'app/views/user/create.php';
    }
    
    public function store()
    {
        $user = new User();
        $user->name = $_REQUEST['name'];
        $user->surname = $_REQUEST['surname'];
        $user->birthdate = $_REQUEST['birthdate'];
        $user->email = $_REQUEST['email'];
        $user->insert();
        header('Location:'.PATH.'/user');
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
    public function edit($arguments)
    {
        $id = (int) $arguments[0];
        $user = User::find($id);
        require 'app/views/user/edit.php';
    }
    
    public function update()
    {
        $id = $_REQUEST['id'];
        $user = User::find($id);
        $user->name = $_REQUEST['name'];
        $user->surname = $_REQUEST['surname'];
        $user->birthdate = $_REQUEST['birthdate'];
        $user->email = $_REQUEST['email'];
        $user->save();
        header('Location:'.PATH.'/user');
    }

    public function delete($arguments)
    {
        $id = (int) $arguments[0];
        $user = User::find($id);
        $user->delete();
        header('Location:'.PATH.'/user');
    }    
}
