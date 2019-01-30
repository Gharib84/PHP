<?php 
require_once("../model/db.php");
require_once("../model/category.php");
require_once("../model/category_db.php");
require_once("../model/product.php");
require_once("../model/product_db.php");

$action = filter_input(INPUT_POST, "action");
if ($action == NULL) {
    $action = filter_input(INPUT_GET, "action");
    if ($action == NULL) {
        $action = "list_products";
    }
}

switch ($action) {
    case 'list_products':
        # code...
        $category_id = filter_input(INPUT_GET, "category_id", FILTER_VALIDATE_INT);
        if ($category_id == NULL || $category_id == FALSE) {
            $category_id = 1;
        }
        $current_category = CategoryDB::getCategoryByID($category_id);
        $categories = CategoryDB::getCategories();
        $products = ProductDB::getProductsByCategory($category_id);
        include('../view/product_list.php');
        break;

    case 'product_view':
        # code...
        $product_id = filter_input(INPUT_GET, "product_id", FILTER_VALIDATE_INT);
        $categories = CategoryDB::getCategories();
        $product = ProductDB::getProduct($product_id);
        include("../view/product_view.php");
        break;
}













?>