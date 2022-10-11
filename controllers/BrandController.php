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
        $this->views =new publicView();
        $this->authHelper = new AuthHelper();
        
    }

    function showBrands(){
        session_start();
        $brands = $this->model->getAllBrands();
        $this->views->showBrands($brands);
    }
    function viewBrandProducts($id){
        $brandProducts = $this-> model->getProducts($id);
        $this->views->showBrandProducts($brandProducts);

    }
function getId(){
    $this->authHelper->checkLoggedIn();
    $brands = $this-> model->getAllBrands();
    $this->views->getBrand($brands);
    return;
    
}
function showForm(){
    $this->authHelper->checkLoggedIn();
    $this->views->showForm();
}
function addBrand() {
        // TODO: validar entrada de datos
     $name = $_POST['name'];
     $country = $_POST['country'];
     $foundation = $_POST['foundation'];
     $website = $_POST['website'];
     $id = $this->model->insertBrand($name, $country, $foundation, $website);
      header("Location: " . BASE_URL . 'brands'); 
}



    function deleteBrand($id){
        
        if((isset($params[$id]))){
            $room_id = $params[':ID'];

            $action = null;
            $action = $this->roomModel->deleteRoomId($room_id);    
            
            if($action>0){
                $this->views->showHomeLocation();
            }   
        } else{ 
            $this->views->Error("Para borrar la sala, primero debe eliminar una película");
        }
    }
    
    function updateBrand($id){
        $this->authHelper->checkLoggedIn();
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