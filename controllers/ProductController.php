<?php
include_once "models/ProductModel.php";
class ProductController
{
    private ProductModel $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $products = $this->productModel->getAll();
        include_once "views/products/list.php";
    }

    public function showFromCreate()
    {
        include_once "views/products/product-add.php";
    }

    public function create($data)
    {
        $data2 = [
            "name" => $_REQUEST['name'],
            "category" => $_REQUEST['category'],
            "price" => $_REQUEST['price'],
            "quantity" => $_REQUEST['quantity'],
            "date" => $_REQUEST['date'],
            "description" => $_REQUEST['description']
        ];
        $this->productModel->createProduct($data2);
        header("location:index.php");
    }

    public function deleteProduct($id)
    {
        if($this->productModel->getById($id) !== null){
            $this->productModel->delete($id);
            header("location:index.php");
        }
    }

    public function showFromEdit()
    {
        $id = $_REQUEST["id"];
        $product = $this->productModel->getById($id);
        include_once "views/products/product-edit.php";
    }

    public function editProduct($id, $request)
    {
        $this->productModel->getById($id);
        $data = [
            "name" => $request['name'],
            "category" => $request['category'],
            "price" => $request['price'],
            "quantity" => $request['quantity'],
            "date" => $request['date'],
            "description" => $request['description'],
            "id" => $id
        ];
        $this->productModel->editProduct($data);
        header("location:index.php");
    }

    public function showDetail($id)
    {
        $product = $this->productModel->getById($id);
        include_once "views/products/product-detail.php";
    }
    public function search($key)
    {
        $products = $this->productModel->search($key);
        include "views/products/searchList.php";

    }


}