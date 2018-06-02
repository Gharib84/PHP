<?php
require_once("../model/database.php");
require_once("../model/category_db.php");
require_once("../model/product_db.php");

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_products';
    }
}


if ($action == "list_products") {
        $category_id = filter_input(INPUT_GET, "category_id", FILTER_VALIDATE_INT);
        if ($category_id == NULL || $category_id == FALSE) {
            $category_id = 1;
        }
        $category_name = get_category_name($category_id);
        $categories = get_categories();
        $products = get_product_by_category($category_id);
        include("product_list.php");

    }elseif ($action == "delete_product") {
        $product_id = filter_input(INPUT_POST, "product_id", FILTER_VALIDATE_INT);
        $category_id = filter_input(INPUT_POST, "category_id", FILTER_VALIDATE_INT);
        if ($category_id == NULL || $category_id == FALSE || $product_id == NULL || $product_id == False) {
            $error = "Missing or incorrect product id or category id.";
        }else{
            delete_product($product_id);
            header('Location: ?category_id=$category_id');
        }
    }elseif ($action == "show_add_form") {
        $categories = get_categories();
        include("product_add.php");

}elseif ($action == "add_product") {
        $category_id = filter_input(INPUT_POST, "category_id");
        $code = filter_input(INPUT_POST, "code");
        $name = filter_input(INPUT_POST, "name");
        $price = filter_input(INPUT_POST, "price");
        if ($category_id == NULL || $category_id == FALSE || $code == NULL || $name == FALSE || $price == NULL || $price == False){
            echo("error");
        }else {
            add_product($category_id, $code, $name, $price);
            header('Location: ?category=$category_id');
        }


    }

?>