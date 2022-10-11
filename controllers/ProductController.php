<?php
require_once './models/ProductModel.php';
require_once './views/PublicView.php';
require_once './models/BrandModel.php';
require_once './helpers/AuthHelper.php';


class ProductController{

    private $model;
    private $views;
    private $brandModel;
    private $authHelper;
    
    function __construct(){
        $this->model = new ProductModel();
        $this->views =new PublicView();
        $this->brandModel = new BrandModel();
        $this->authHelper = new AuthHelper();
        
    }

    function showHome(){
        session_start();
         $products = $this->model->getAllProducts();
        $this->views->showProducts($products);
        
    }
    

    function viewProduct($id){
        $this->authHelper->checkLoggedIn();

        $product = $this-> model->getProduct($id);
        $this->views->showProduct($product);
        

    }
    function addProduct() {
        $this->authHelper->checkLoggedIn();
        if((isset($_POST['name'])) && (isset($_POST['milliliters'])) && (isset($_POST['price'])) && (isset($_POST['brand_ID']))){
            $name = $_POST['name'];
            $milliliters = $_POST['milliliters'];
            $price = $_POST['price'];
            $brand_ID = $_POST['brand_ID'];
            $id = $this->model->InsertarProducto($name, $milliliters, $price, $brand_ID);
             header("Location: ".BASE_URL);
        }
        
      
    }
    function deleteProduct($id){
        $this->authHelper->checkLoggedIn();
        $this-> model->deleteProductFromDB($id);
        $this->views->showHomeLocation();
    }



   function updateProduct($id){
    $this->authHelper->checkLoggedIn();
    $brands = $this->brandModel->getAllBrands();
    $product = $this->model->getProduct($id);
    $this->views->editProduct($product, $brands);
    
   }

   function editProduct($id){
    $this->authHelper->checkLoggedIn();
    if((isset($_POST['name'])) && (isset($_POST['milliliters'])) && (isset($_POST['price'])) && (isset($_POST['brand_ID']))){
        $name = $_POST['name'];
        $milliliters = $_POST['milliliters'];
        $price = $_POST['price'];
        $brand_ID = $_POST['brand_ID'];
        $product_ID = $id;
        $id = $this->model->editProduct($name, $milliliters, $price, $brand_ID, $product_ID);
        header("Location: ".BASE_URL);
    }
    
   }

  


    
      



}