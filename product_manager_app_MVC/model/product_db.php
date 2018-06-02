<?php
function get_product_by_category($category_id){
    global $dbc;
    $query = "SELECT * FROM products WHERE categoryID = :category_id ORDER BY productID";
    $statement = $dbc->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();
    $products = $statement->fetchAll();
    $statement->closeCursor();
    return $products;
};

function get_products($product_id){
    global $dbc;
    $query = "SELECT * FROM products WHERE productID = :product_id";
    $statement = $dbc->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $statement->execute();
    $product = $statement->fetch();
    $statement->closeCursor();
    return $product; 


};

function delete_product($product_id){
    global $dbc;
    $query = "DELETE FROM products WHERE productID = :product_id";
    $statement = $dbc->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $statement->execute();
    $statement->closeCursor();
};

function add_product($category_id, $code, $name, $price){
    global $dbc;
    $query = "INSERT INTO products(categoryID, productCode, productName, listPrice)
    VALUES(:category_id, :code, :name, :price)";
    $statement = $dbc->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':price', $price);
    $statement->execute();
    $statement->closeCursor();
};





?>