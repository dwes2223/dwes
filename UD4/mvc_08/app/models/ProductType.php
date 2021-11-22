<?php
namespace App\Models;

use PDO;
use Core\Model;
use App\Models\Product;

require_once 'core/Model.php';

/*
* $padre->hijos array
*   -> En la ruta /producttype/show/id puede interesar mostrar la lista de productos de cada tipo
*/
class ProductType extends Model
{
    public function __construct()
    {
    }

    public static function all()
    {    
        $db = ProductType::db();
        $sql = "SELECT * FROM product_types";
        //preparar consulta
        $statement = $db->query($sql);
        //$results = $statement->query();
        $products = $statement->fetchAll(PDO::FETCH_CLASS,ProductType::class);
        //ejecutar la consulta
        //recoger datos con fetch_all
        //retornar

        return $products;
    }

    public function insert()
    { 
        $db = ProductType::db();
        $stmt = $db->prepare('INSERT INTO product_types(id, name) VALUES(:id, :name)');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':name', $this->name);

        return $stmt->execute();
    }

    public function find($id)
    {
        $db = ProductType::db();
        $stmt = $db->prepare('SELECT * FROM product_types WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, ProductType::class);
        $ProductType = $stmt->fetch(PDO::FETCH_CLASS);

        return $ProductType;
    }

    public function update(){
        $db = ProductType::db();
        $stmt = $db->prepare('UPDATE product_types SET id = :id, name = :name WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':name', $this->name);

        return $stmt->execute();
    }

    public function delete()
    {
        $db = ProductType::db();
        $stmt = $db->prepare('DELETE FROM product_types WHERE id = :id');
        $stmt->bindValue(':id', $this->id);

        return $stmt->execute();
    }

    public function __get($atributoDesconocido)
    {
    // return "atributo $atributoDesconocido desconocido";
        if (method_exists($this, $atributoDesconocido)) {
            $this->$atributoDesconocido = $this->$atributoDesconocido();
            return $this->$atributoDesconocido;
            // echo "<hr> atributo $x <hr>";
        }
    }
    
    /*
    * Definimos un método products
    */
    public function products()
    {
         $db = ProductType::db();
         $stmt = $db->prepare('SELECT name FROM products WHERE type_id=:id');
         $stmt->execute(array(':id' => $this->type_id));
         $stmt->setFetchMode(PDO::FETCH_CLASS, Product::class);
         $products = $stmt->fetchAll(PDO::FETCH_CLASS,Product::class);

         return $products;
    }    
}