<?php

class BrandModel {

private $db;

public function __construct() {
    $this->db = new PDO('mysql:host=localhost;'.'dbname=tpespecial;charset=utf8' , 'root', '');
}


 
public function getAllBrands() {
    $query = $this->db->prepare("SELECT * FROM brands");
    $query->execute();

    // 3. obtengo los resultados
    $brands = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
    
    return $brands;
}

public function getProducts($id){
    $query = $this->db->prepare("SELECT a.* FROM products a INNER JOIN brands b ON a.brand_ID = b.brand_ID WHERE a.brand_ID = ?");
    $query->execute(array($id));
    $products = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
    
    return $products;

}

public function deleteBrandFromDB($id){
    $query = $this->db->prepare("DELETE FROM brands WHERE brand_ID=?");
    $action=$query->execute(array($id));

    return $action;
}
public function InsertBrand($name, $country, $foundation, $website){
    $query = $this->db->prepare("INSERT INTO brands (name, country, foundation, website) VALUES (?, ?, ?, ?)");
    $query->execute([$name, $country, $foundation, $website]);

    return $this->db->lastInsertId();



}
}