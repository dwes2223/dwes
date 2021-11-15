<?php
namespace App\Models;

use PDO;
use DateTime;
use Core\Model;

require_once 'core/Model.php';

class User extends Model
{
    public function __construct()
    {
        $this->birthdate = DateTime::createFromFormat('Y-m-d', $this->birthdate);
    }

    /*
    * Método para buscar todos los registros
    */
    public static function all(){ 
        //obtener conexión
        $db = User::db();
        //preparar consulta
        $sql = "SELECT * FROM users";
        //ejecutar
        $statement = $db->query($sql); // query para ejecutar la consulta
        //el resultado puede ser tomado usan las funciones de de PDO
        //fetch recoge registro a registro. Si hay muchos requiere un bucle
        //fetch_all recoge arrays
        $users = $statement->fetchAll(PDO::FETCH_CLASS, User::class);
        //retornar
        return $users;
    }

    /*
    * El método find usa funciones preparadas
    * Este método carga un registro a partir de su id
    */
    public static function find($id) 
    {
        $db = User::db();
        $stmt = $db->prepare('SELECT * FROM users WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        //Para cargar un objeto User debemos usar setFetchMode y fetch
        $stmt->setFetchMode(PDO::FETCH_CLASS, User::class);
        $user = $stmt->fetch(PDO::FETCH_CLASS);
        //Las fechas se mostrarán con el parseo de mysql
        //  Si es tipo Date: año-mes-dia
        //  Si es DateTime: año:mes-dia h:m:s
        //Php puede manejar de forma nativa datos fecha:
        //  funciones: date() o strtotime()
        // echo $this->birthdate->format('d-m-y');
        //clase dateTime
        //$this->birthdate = DateTime::createFromFormat('Y-m-d', $this->birthdate)
        return $user;
    }    
    public function insert(){ 
        //TODO        
    }
    public function delete(){ 
        //TODO        
    }
    public function save(){ 
        //TODO        
    }
}
