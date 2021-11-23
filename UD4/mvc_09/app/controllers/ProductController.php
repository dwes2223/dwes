<?php
namespace App\Controllers;

use App\Models\Product;
use App\Models\ProductType;

class ProductController
{

    function __construct()
    {
    }

    public function index()
    {
        //buscar datos
        $products = Product::all();
        //pasar a la vista
        require('app/views/product/index.php');
    }
    
    public function create()
    {
        $productsTypes = ProductType::all();
        require 'app/views/product/create.php';
    }
    
    public function store()
    {
        $product = new Product();
        $product->name = $_REQUEST['name'];
        $product->type_id = $_REQUEST['type_id'];
        $product->price = $_REQUEST['price'];
        $product->insert();
        header('Location:'.PATH.'/product');
    }
    
    public function show($args)
    {
        // $id = (int) $args[0];
        list($id) = $args;
        $product = Product::find($id);
        require('app/views/product/show.php');        
    }

    public function edit($arguments)
    {
        $id = (int) $arguments[0];
        $product = Product::find($id);
        $productsTypes = ProductType::all();
        require 'app/views/product/edit.php';
    }
    
    public function update()
    {
        $id = $_REQUEST['id'];
        $product = Product::find($id);
        $product->name = $_REQUEST['name'];
        $product->type_id = $_REQUEST['type_id'];
        $product->price = $_REQUEST['price'];
        $product->save();
        header('Location:'.PATH.'/product');
    }
    
    public function delete($arguments)
    {
        $id = (int) $arguments[0];
        $product = Product::find($id);
        $product->delete();
        header('Location:'.PATH.'/product');
    }
    
}
