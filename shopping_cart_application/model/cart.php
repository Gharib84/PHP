<?php 

function add_item($key, $quant){
        global $products;
        if ($quant < 1){ 
            
            return false;
        }
        if (isset($_SESSION["cart12"][$key])) {
            
            $quant += $_SESSION["cart12"][$key][$quant];
            update_item($key, $quant);
            return $quant;
        }
        $cost = $products[$key]["cost"];
        $total = $cost * $quant;
        $item = Array(
            "name" => $_SESSION["cart12"][$key]["name"],
            "cost" => $cost,
            "qty" => $quant,
            "total"=> $total
        );
        $_SESSION["cart12"][$key] = $item;



}



function update_item($key, $quant){
    $quant = (int) $quant;
    if ($_SESSION["cart"][$key]) {
        if ($quant <= 0) {
            unset($_SESSION["cart12"][$key]);
        }else {
            $_SESSION["cart12"][$key]["qty"] = $quant;
            $total = $_SESSION["cart12"][$key]["cost"] *
            $_SESSION["cart12"][$key]["qty"];
            $_SESSION["cart12"][$key]["total"] = $total;
    
        }
    }
   
}

function get_subtotal(){
   $subtotal = 0;
   foreach($_SESSION["cart12"] as $items){
       $subtotal += $items["total"];
   }
   $stubtotal_format = number_format($subtotal, 2);
   return $subtotal;

}



?>