<?php
namespace App\Controllers;

use App\Models\ProductType;
use App\Models\Product;
use App\Models\Order;
/**
*
*/
class BasketController
{

    function __construct()
    {

    }

    public function index()
    {
        if(isset($_SESSION['cesta']))
        {
            $products = $_SESSION['cesta'];
        }
        require "app/views/basket/index.php";
        unset($_SESSION['message']);
    }

    public function add($args)
    {
        $id = $args[0];
        if(isset($_SESSION['cesta'][$id])) {
          $product = $_SESSION['cesta'][$id];
          $cantidad = $product->cantidad + 1;
          $product->cantidad = $cantidad;
          $_SESSION['cesta'][$id] = $product;

        } else {
            $product = Product::find($id);
            $product->cantidad = 1;
            $_SESSION['cesta'][$id] = $product;
        }
        header('Location:'.PATH.'/product');
    }

    public function up ($args)
    {
        $id = $args[0];
        $product = $_SESSION['cesta'][$id];
        var_dump($_SESSION['cesta']);
        $cantidad = $product->cantidad + 1;
        $product->cantidad = $cantidad;
        $_SESSION['cesta'][$id] = $product;

        header('Location:'.PATH.'/basket');

    }

    public function down($args)
    {
        $id = $args[0];
        $product = $_SESSION['cesta'][$id];

        if($product->cantidad == 1) {
            unset($_SESSION['cesta'][$id]);
        } else {
            $cantidad = $product->cantidad - 1;
            $product->cantidad = $cantidad;
            $_SESSION['cesta'][$id] = $product;
        }
        header('Location:'.PATH.'/basket');
    }

    public function store()
    {
        //guardamos el objeto
        $order = new Order();
        $date = date('Y-m-d H:i:s', time());
        $order->date = $date;
        $order->user_id = $_SESSION['user']->id;
        $order->insert();

        foreach($_SESSION['cesta'] as $product) {
            $order->appendProduct($product);
        }
        
        //vaciamos la cesta
        unset($_SESSION['cesta']);
        $_SESSION['message'] = "Se ha guardado el pedido corectamente.";
        header('Location:'.PATH.'/basket');
    }
}
