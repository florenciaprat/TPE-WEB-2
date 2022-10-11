<?php

require_once './controllers/ProductController.php';
require_once './controllers/BrandController.php';
require_once './controllers/AuthController.php';


//------------------------------esto se queda
//define constantes
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
    $action = 'home';
    if(!empty($_GET['action'])){
        $action = $_GET['action'];
    }
   $params = explode('/', $action);
//-------------------------------------------





//TABLA DE RUTEO
   switch($params[0]){
    case 'home':
        $productController = new ProductController();
        $productController-> showHome();
        break;
    case 'brands':
        $brandController = new BrandController();
        $brandController->showBrands();
        break;
    case 'viewProduct':
        $productController = new ProductController();
        $productController->viewProduct($params[1]);
        break;
    case 'deleteProduct':
        $productController = new ProductController();
        $productController->deleteProduct($params[1]);
        break;
    case 'addProduct':
        $productController = new ProductController();
        $productController->addProduct();
        break;
    case 'addBrand':
        $brandController = new BrandController();
        $brandController->addBrand();
        break;
    case 'showForm':
        $brandController = new BrandController();
        $brandController->showForm();
        break;
    case 'deleteBrand':
        $brandController = new BrandController();
        $brandController->deleteBrand($params[1]);
        break;
    case 'updateProduct':
        $productController = new ProductController();
        $productController->updateProduct($params[1]);
        break;
    case 'form':
        $brandController = new BrandController();
        $brandController->getId();
        break;
    case 'login':
        $authController= new AuthController();
        $authController->showFormLogin();
        break;
    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;
    case 'logout':
        $authController= new AuthController();
        $authController->logout();
        break;
    
    case 'viewBrandProducts':
        $brandController = new BrandController();
        $brandController->viewBrandProducts($params[1]);
        break;
     default:
    echo ('404 page not found');
    break;
   }