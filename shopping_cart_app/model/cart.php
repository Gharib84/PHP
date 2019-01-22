<?php
namespace cart {
    function add_item($key, $quantity) {
        global $products;
        if ($quantity < 1) return;
        if (isset($_SESSION['cart13'][$key])) {
            $quantity += $_SESSION['cart13'][$key]['qty'];
            update_item($key, $quantity);
            return;
        }
        $cost = $products[$key]['cost'];
        $total = $cost * $quantity;
        $item = array(
            'name' => $products[$key]['name'],
            'cost' => $cost,
            'qty'  => $quantity,
            'total' => $total
        );
        $_SESSION['cart13'][$key] = $item;
    }
    function update_item($key, $quantity) {
        $quantity = (int) $quantity;
        if (isset($_SESSION['cart13'][$key])) {
            if ($quantity <= 0) {
                unset($_SESSION['cart13'][$key]);
            } else {
                $_SESSION['cart13'][$key]['qty'] = $quantity;
                $total = $_SESSION['cart13'][$key]['cost'] *
                         $_SESSION['cart13'][$key]['qty'];
                $_SESSION['cart13'][$key]['total'] = $total;
            }
        }
    }
    
    function get_subtotal() {
        $subtotal = 0;
        foreach ($_SESSION['cart13'] as $item) {
            $subtotal += $item['total'];
        }
        $subtotal_f = number_format($subtotal, 2);
        return $subtotal_f;
    }
    function compare_factory($sort_key) {
        return function($left, $right) use ($sort_key) {
            if ($left[$sort_key] == $right[$sort_key]) {
                return 0;
            } else if ($left[$sort_key] < $right[$sort_key]) {
                return -1;
            } else {
                return 1;
            }
        };
    }
    function sort($sort_key) {
        $compare_function = compare_factory($sort_key);
        usort($_SESSION['cart13'], $compare_function);
    }
}
?>