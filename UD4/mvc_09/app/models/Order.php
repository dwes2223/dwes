<?php
namespace App\Models;

use PDO;
use Core\Model;

Class Order extends Model
{


    public static function all(){
        
        $db = Order::db();
        $sql = "SELECT * FROM orders";
        //preparar consulta
        
        $statement = $db->query($sql);
        //$results = $statement->query();
        $orders = $statement->fetchAll(PDO::FETCH_CLASS,Order::class);
 
        //retornar
        return $orders;
    }

    public function find($id){

        $db = Order::db();
        $stmt = $db->prepare('SELECT * FROM orders WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Order::class);
        $order = $stmt->fetch(PDO::FETCH_CLASS);

        return $order;
    }

    public function insert(){ 

        $db = Order::db();
        $stmt = $db->prepare('INSERT INTO orders( date, user_id) VALUES(:date, :user_id)');
        $stmt->bindValue(':date', $this->date);
        $stmt->bindValue(':user_id', $this->user_id);
        $stmt->execute();
        
        //para obtener el id del order, despues de insertar y luego hacemos el return.
        $this->id = $db->lastInsertId();
        return;
    }

    public function appendProduct($product){

        $db = Order::db();
        $stmt = $db->prepare('INSERT INTO orders_products( order_id, product_id,price,quantity) VALUES(:order_id, :product_id, :price, :quantity)');
        $stmt->bindValue(':order_id', $this->id);
        $stmt->bindValue(':product_id', $product->id);
        $stmt->bindValue(':price', $product->price);
        $stmt->bindValue(':quantity', $product->cantidad);
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

    public function user()
    {
        //un producto pertenece a un tipo:
        $db = Order::db();
        $statement = $db->prepare('SELECT * FROM users WHERE id = :id');
        $statement->bindValue(':id', $this->user_id);
        $statement->execute();

        $statement->setFetchMode(PDO::FETCH_CLASS, Order::class);
        $user = $statement->fetch(PDO::FETCH_CLASS);
        return $user;
    }

    public function products($id){
        $db = Order::db();
        $statement = $db->prepare('SELECT * FROM orders_products WHERE order_id = :id ');
        $statement->bindValue(':id',$id);
        $statement->execute();
        $products = $statement->fetchAll(PDO::FETCH_CLASS,Order::class);
        return $products;

    }

}
