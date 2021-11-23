<?php
namespace App\Models;

use PDO;
use DateTime;
use Core\Model;
use App\Models\ProductType;

require_once 'core/Model.php';


/*
* Relaciones 1:n entre modelos
* $hijo->padre->atributo
* En una relación 1:N:
*   -> un padre tiene muchos hijos
*   -> un hijo pertenece a un padre
* En la ruta /product/index mostramos la lista de productos
*   -> En lugar de: $product->type_id
*   -> Mostrar el nombre del tipo de produto: $product->type->name
*/
class Product extends Model
{
    public function __construct()
    {
    }

    public static function all()
    { 
        //obtener conexión
        $db = Product::db();
        //preparar consulta
        $sql = "SELECT * FROM products";
        //ejecutar
        $statement = $db->query($sql);
        //recoger datos con fetch_all
        $products = $statement->fetchAll(PDO::FETCH_CLASS, Product::class);
        
        //retornar
        return $products;
    }

    public static function find($id) 
    {
        $db = Product::db();
        $stmt = $db->prepare('SELECT * FROM products WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Product::class);
        $product = $stmt->fetch(PDO::FETCH_CLASS);

        return $product;
    } 

    public function findbyCategory($id)
    {
        $db = Product::db();
        $stmt = $db->prepare('SELECT name FROM products WHERE type_id=:id');
        $stmt->execute(array(':id' => $id));
        $products = $stmt->fetchAll(PDO::FETCH_CLASS,Product::class);

        return $products;
    }

    public function insert()
    {
        $db = Product::db();
        $stmt = $db->prepare('INSERT INTO products(name, price, type_id) VALUES(:name, :price, :type_id)');
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':price', $this->price);
        $stmt->bindValue(':type_id', $this->type_id);

        return $stmt->execute();
    }

    public function save()
    {
        $db = Product::db();
        $stmt = $db->prepare('UPDATE products SET name = :name, price = :price, type_id = :type_id WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':price', $this->price);
        $stmt->bindValue(':type_id', $this->type_id);

        return $stmt->execute();
    }

    public function delete()
    { 
        $db = Product::db();
        $stmt = $db->prepare('DELETE FROM products WHERE id = :id');
        $stmt->bindValue(':id', $this->id);

        return $stmt->execute();
    }

    /*
    * El método type 
    */
    public function type() 
    {
        // un producto pertenece a un tipo
        $db = Product::db();
        $statement = $db->prepare('SELECT * FROM product_types WHERE id = :id');
        $statement->bindValue(':id', $this->type_id);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, ProductType::class);
        $product_type = $statement->fetch(PDO::FETCH_CLASS);

        return $product_type;
    }

    /*
    * Aunque ya podemos mostrar el nombre del tipo: $product->type()->name
    * Sería más elegante tratar type como un atributo
    * Vamos ahora a usar el metodo __get($nombreAtributo)
    *   -> __get se ejecuta siempre que intentamos acceder a un atributo inexistente
    *
    * Vamos a modificarlo para que:
    *   -> Si piden un atributo desconocido pero hay un método con ese nombre
    *       1) Primero ejecuta el método para que cree ese atributo
    *       2) Después devuelve el atributo ya existente
    */
    public function __get($atributoDesconocido)
    {
        // return "atributo $atributoDesconocido desconocido";
        if (method_exists($this, $atributoDesconocido)) {
            $this->$atributoDesconocido = $this->$atributoDesconocido();
            return $this->$atributoDesconocido;
        }
    }
}
