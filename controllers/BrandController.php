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



    function deleteBrand($params = null){
        
        if((isset($params[':ID']) && !is_null($params))){
            $room_id = $params[':ID'];

            $action = null;
            $action = $this->roomModel->deleteRoomId($room_id);    
            
            if($action>0){
                $this->views->showHomeLocation();
            }else{
                $this->views->Error("Disculpe! No se puede eliminar la imagen");
            }   
        } else{ 
            $this->views->Error("Para borrar la sala, primero debe eliminar una película");
        }
    }
            
          //function updateBrand($id){
    //$this->authHelper->checkLoggedIn();

    //$this->model->updateBrandFromDB($id);
    //$this->view->showHomeLocation();
//   }
}