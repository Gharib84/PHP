<?php 
require("../model/cart.php");
$lifetime = 24 * 60 * 60 * 14;
$path = "/";

session_set_cookie_params($lifetime, $path);
session_start();


if (empty($_SESSION["cart12"])) {
    $_SESSION["cart12"] = Array();
}
$products = Array();
$products["MMS - 1754"] = Array(
    "name" => "Flute",
    "cost" => "1 49.50"
);
$products['MMS-6289'] = array('name' => 'Trumpet', 'cost' => '199.50');
$products['MMS-3408'] = array('name' => 'Clarinet', 'cost' => '299.50');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'show_add_item';
    }
}


switch ($action) {
    case 'show_add_item':
          include("../view/add_item.php");
          break;
    case 'add':
         $productkey = filter_input(INPOT_POST, "productkey");
         $item_qty = filter_input(INPUT_POST, "itemqty");
         add_item($productkey, $item_qty);
         include("../view/cart_view.php");
        break;
    case 'update':
         $newqty = filter_input(INPUT_POST, "newqty", FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
         foreach($newqty as $key => $qty){
             if ($_SESSION["cart12"][$key]["qty"] != $qty) {
                 update_item($key, $qty);
                
             }
         }
         include("../view/cart_view.php");
         break;
    case 'show_cart':
         include("../view/cart_view/php");
         break;
    
    
    case 'empty_cart':
        unset($_SESSION['cart12']);
        include('cart_view.php');
     break;

    
}


?>