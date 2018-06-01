<?php 
$category_id = filter_input(INPUT_POST, "category_id", FILTER_VALIDATE_INT);
$code = filter_input(INPUT_POST, "code");
$name = filter_input(INPUT_POST, "name");
$price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT);

if($category_id  == null || $category_id == false || $code == null || $name == null ||  $price == null || $price == false){
        $errors = "Invalid product data. Check a ll fiel ds and try again.";

}else{
    require_once("database.php");
    $query = "INSERT INTO products(categoryID, productCode, productName, listPrice)
    VALUES(:category_id, :code, :name, :price)";
    $statement = $dbc->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':code', $code);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':price', $price);
    $success = $statement->execute();
    $statement->closeCursor();
    header('Location: ./add_product_form.php');


}

?>