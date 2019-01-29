<?php 

require_once("../model/database.php");
require_once("../model/category_db.php");
require_once("../model/category.php");
require_once("../model/product_db.php");
require_once("../model/product.php");


$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_products';
    }
}  

switch ($action) {
    case 'list_products':
        
        $category_id = filter_input(INPUT_GET, "category_id", FILTER_VALIDATE_INT);
        if ($category_id == NULL || $category_id == FALSE) {
            $category_id = 1;
        }
        $current_category = CategoryDB::getCategory($category_id);
        $categories = CategoryDB::getCategories();
        $products = ProductDB::getProductsByCategory($category_id);
        include("../view/product_list.php");
        break;

    case 'delete_product':
         $product_id = filter_input(INPUT_POST, "product_id", FILTER_VALIDATE_INT);
         $category_id = filter_input(INPUT_POST, "categoy_id", FILTER_VALIDATE_INT);
         ProductDB::deleteProduct($product_id);
         header("Location: .?category_id=$category_id");
        break;

    case 'add_product':
        $category_id = filter_input(INPUT_POST, 'category_id',FILTER_VALIDATE_INT);
        $code = filter_input(INPUT_POST, 'code');
        $name = filter_input(INPUT_POST, 'name');
        $price = filter_input(INPUT_POST, 'price');
            
 
        if ($category_id == NULL || $category_id == FALSE || $name == NULL || $code == NULL || $price == NULL || $price == FALSE) {
            print "<h1>ERROR</h1>";
        }else {
            $current_category = CategoryDB::getCategory($category_id);
            $product = new Product($current_category, $code, $name, $price);
            ProductDB::addProduct($product);
            header("Location:.?category_id=$category_id");
        }
        break;

    case 'show_add_form':
        $categories = CategoryDB::getCategories();
        include("../view/product_add.php");
        break;
    
    
}



?>