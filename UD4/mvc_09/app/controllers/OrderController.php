<?php
namespace App\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Order;
/**
*
*/
class OrderController
{

    function __construct()
    {

    }

    public function index()
    {
        $orders = Order::all();
        require "app/views/order/index.php";
    }

    public function show($args){

        $id = $args[0];
        $order = Order::find($id);
        $products = Order::products($id);
        require "app/views/order/show.php";
    }
}
