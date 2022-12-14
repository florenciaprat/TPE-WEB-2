<?php
require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class View{
    private $smarty;

    function __construct($user) {
        $this->smarty = new Smarty();
        $this->smarty->assign('user', $user);

        
    }
    function showProducts($products, $brands){
        $this->smarty->assign('titulo', 'Add your product');
        $this->smarty->assign('products', $products);
        $this->smarty->assign('brands', $brands);
        $this->smarty->display('templates/productList.tpl');
    }
    function showBrands($brands, $error){
        $this->smarty->assign('brands', $brands);
        $this->smarty->assign('error', $error);
        $this->smarty->assign('titulo', 'Add your brand');
        $this->smarty->display('templates/brandList.tpl');
        
    }
    function showProduct($product){
        $this->smarty->assign('product', $product);
        $this->smarty->display('templates/viewProduct.tpl');

    }
    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

    function showBrandProducts($brandProducts, $brand){
        $this->smarty->assign('brand', $brand);
        $this->smarty->assign('products', $brandProducts);
        $this->smarty->display('templates/brandProducts.tpl');
    }    
  
  
   function editProduct($product, $brands){
    $this->smarty->assign('titulo', 'Edit the product');
    $this->smarty->assign('product', $product);
    $this->smarty->assign('brands', $brands);
    $this->smarty->display('./templates/editProduct.tpl');

   }
   function showFormEdit($brand){
    $this->smarty->assign('titulo', 'Edit the brand');
    $this->smarty->assign('brand', $brand);
    $this->smarty->display('./templates/editBrand.tpl');

   }
   
   function showFormLogin($error = null) {
    $this->smarty->assign("title", 'Log in');
    $this->smarty->assign("error", $error);
    $this->smarty->display('templates/login.tpl');
}

function showErrorDefault(){
    $this->smarty->assign('error', 'Error 404 not found');
    $this->smarty->display('templates/errorDefault.tpl');
}

}?>
