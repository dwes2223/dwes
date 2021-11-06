<?php
namespace App\Models;

use PDO;
use DateTime;
use Core\Model;

require_once '../core/Model.php';
/**
*
*/
class User extends Model
{
    public function __construct()
    {
        $this->birthdate = DateTime::createFromFormat('Y-m-d', $this->birthdate);
    }
    public static function all(){ 
        //obtener conexión
        $db = User::db();
        //preparar consulta
        $sql = "SELECT * FROM users";
        //ejecutar
        $statement = $db->query($sql);
        //recoger datos con fetch_all
        $users = $statement->fetchAll(PDO::FETCH_CLASS, User::class);
        //retornar
        return $users;
    }
    public static function find($id) 
    {
        $db = User::db();
        $stmt = $db->prepare('SELECT * FROM users WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, User::class);
        $user = $stmt->fetch(PDO::FETCH_CLASS);
        // echo $this->birthdate->format('d-m-y');
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
