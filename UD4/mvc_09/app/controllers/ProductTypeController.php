<?php

namespace App\Controllers;
use App\Models\ProductType;
use App\Models\Product;

class ProductTypeController
{

    function __construct(){
    }

    public function index()
    {
        //buscar datos
        $products = ProductType::all();
        //pasar a la vista
        require "app/views/productType/index.php";
    }

    public function create()
    {
        require "app/views/productType/create.php";
    }

    public function show($args){

        $id = $args[0];
        $productType = ProductType::find($id);
        require "app/views/productType/show.php";
    }

    public function store()
    {
        $productType = new ProductType();
        $productType->id = $_POST['id'];
        $productType->name = $_POST['name'];
        $productType->insert();

        header('Location:'.PATH.'/productType');
    }
    
    public function edit($args){
        $id = $args[0];
        $productType = ProductType::find($id);
        require "app/views/productType/update.php";
    }

    public function update(){
        $productType = new productType();
        $productType->id = $_POST['id'];
        $productType->name = $_POST['name'];
        $productType->update();

        header('Location:'.PATH.'/productType');
    }

    public function delete($args) {
        $id = $args[0];
        $productType = ProductType::find($id);

        $productType->delete();
        header('Location:'.PATH.'/productType');
    }
}