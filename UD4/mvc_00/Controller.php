<?php
require_once('User.php');

/* MVC:
 *  El controlador responde a cada petición:
 *      Recibe ódenes como: quiero la lista de usuarios, añadir un nuevo, modificarlo...
 *  El modelo se ocupa de obtener los datos, normalmente desde BD.
 *      También incluye la clase que los contiene
 *  El controlador tras obtener los datos del modelo invoca una vista.
 * 
 * Ejemplo simplificado, sin BD:
 *      Un fichero cargador: start.php
 *      Un controlador: Controller.php
 *      Un modelo: User.php
 *      Dos vistas: invex y show
 */

class Controller  
{
    public function __construct()
    {
        echo "Controller -> construct<br>";
    }
    public function index()
    {
        $users = User::all();
        // echo json_encode($users);
        require('views/index.php');
    }
    public function show()
    {
        $id = $_GET['id'];
        $user = User::find($id);
        // echo json_encode($user);
        require('views/show.php');
    }
}

