<?php
require_once './models/BrandModel.php';
require_once './views/publicView.php';
require_once './helpers/AuthHelper.php';

class BrandController{

    private $model;
    private $views;
    private $authHelper;

    function __construct(){
        $this->model = new BrandModel();
        $this->authHelper = new AuthHelper();
        $this->views =new publicView($this->authHelper->getUser());

        
    }

    function showBrands(){
        $brands = $this->model->getAllBrands();
        $this->views->showBrands($brands, $error = false);
    }
    function viewBrandProducts($id){
        $brandProducts = $this-> model->getProducts($id);
        $this->views->showBrandProducts($brandProducts);

    }
function getId(){
    $brands = $this-> model->getAllBrands();
    $this->views->getBrand($brands);
    return;
    
}
function showForm(){
    $this->views->showForm();
}
function addBrand() {
    $this->authHelper->checkLoggedIn();
        // TODO: validar entrada de datos
     $name = $_POST['name'];
     $country = $_POST['country'];
     $foundation = $_POST['foundation'];
     $website = $_POST['website'];
     $id = $this->model->insertBrand($name, $country, $foundation, $website);
      header("Location: " . BASE_URL . 'brands'); 
}



    function deleteBrand($id){
        $this->authHelper->checkLoggedIn();

        try{
            
            $this->model->deleteBrandById($id);
            header("Location: " . BASE_URL . 'brands');

        }catch(Exception $e){
            $brands = $this->model->getAllBrands();
            $this->views->showBrands($brands, "No se puede eliminar la marca ya que esta tiene productos asociados, elimine primero el producto.");
        }
    }
    
    function updateBrand($id){
        $brand = $this->model->getBrand($id);
        $this->views->showFormEdit($brand);
    }

    function editBrand ($id){
        $this->authHelper->checkLoggedIn();
    if((isset($_POST['name'])) && (isset($_POST['country'])) && (isset($_POST['foundation'])) && (isset($_POST['website']))){
        $name = $_POST['name'];
        $country = $_POST['country'];
        $foundation = $_POST['foundation'];
        $website = $_POST['website'];
        $brand_ID =$id;
        $id = $this->model->editProduct($name, $country, $foundation, $website, $brand_ID);
        header("Location: ".BASE_URL. 'brands');
    }
  }
}