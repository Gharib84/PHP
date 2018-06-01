<?php       
require_once("database.php");
$category_id = filter_input(INPUT_GET,  "category_id",FILTER_VALIDATE_INT);
if($category_id === null || $category_id === false){
    $category_id = 1;
}
$query = "SELECT * FROM categories WHERE categoryID = :category_id";
$statement = $dbc->prepare($query);
$statement->bindValue(':category_id', $category_id);
$statement->execute();
$category = $statement->fetch();
$category_name = $category[1];
$statement->closeCursor();

$query_2 = "SELECT * FROM categories ORDER BY  categoryID";
$statement_2 = $dbc->prepare($query_2);
$statement_2->execute();
$catos = $statement_2->fetchAll();
$statement_2->closeCursor();

$query_3 = "SELECT * FROM products WHERE categoryID = :category_id ORDER BY productID";
$statement_3 = $dbc->prepare($query_3);
$statement_3->bindValue(':category_id', $category_id);
$statement_3->execute();
$products = $statement_3->fetchAll();
$statement_3->closeCursor();



?>
