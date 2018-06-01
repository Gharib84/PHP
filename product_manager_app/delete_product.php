<?php 
$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

// Delete the product from the database
if ($product_id != false && $category_id != false) {
    require_once("database.php");
    $query = "DELETE FROM products WHERE productId = :product_id";
    $statement = $dbc->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $success = $statement->execute();
    $statement->closeCursor();
    
   
        
}

header('Location: view.php');





?>