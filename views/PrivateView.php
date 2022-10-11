<?php

require_once './libs/smarty-4.2.1/libs/Smarty.class.php';
class PrivateView{

    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }


    function addProduct($name, $milliliters, $price, $brand){
        $this->smarty->assign('titulo', $name);
        $this->smarty->assign('mililiters', $milliliters);
        $this->smarty->assign('price', $price);
        $this->smarty->assign('brand', $brand);
        $this->smarty->display('./templates/addForm.tpl');
    }
}