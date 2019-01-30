<?php 

class Product
{
    private $product_id , $category_id, $product_code , $product_name, $list_price;
    public function __construct($category_id, $product_code, $product_name, $list_price){
        $this->category_id = $category_id;
        $this->product_code = $product_code;
        $this->product_name = $product_name;
        $this->list_price = $list_price;
    }

    public function getCategory(){
        return $this->category_id;
    }
    public function setCategory($v){
        $this->category_id = $v;
    }

    public function getProductID(){
        return $this->product_id;
    }
    public function setProductID($v){
        $this->product_id = $v;
    }

    public function getProductCode(){
        return $this->product_code;
    }
    public function setProductCode($v){
        $this->product_code = $v;
    }
    public function getProductName(){
        return $this->product_name;
    }
    public function setProductName($v){
        $this->product_name;
    }

    public function getListPrice(){
        return $this->list_price;
    }
    public function getListPriceFormat(){
        $format = number_format($this->list_price, 2);
        return $format;
    }
    public function setListPrice($v){
        $this->list_price = $v;
    }

    public function getDiscountPercent(){
        $discount = 30;
        return $discount;
    }

    public function getDiscountAmount(){
        $discount = $this->getDiscountPercent() / 100;
        $discountAmount = $this->list_price * $discount;
        $discountAmount_r = round($discountAmount, 2);
        $discountAmount_f = number_format($discountAmount_r, 2);
        return $discountAmount_f;
    }

    public  function getDiscuntPrice(){
          $discountPrice = $this->list_price - $this->getDiscountAmount();
          $discountPrice_f = number_format($discountPrice, 2);
          return $discountPrice_f;  
    }
    public function getImageFileName(){
        $image = $this->product_code .".png";
        return $image;
    }    

    public function getImagePath(){
        $image_path = "../images/" . $this->getImageFileName();
        return $image_path;
    }

    public function getImageAltText(){
        $image_alt = "Image: " . $this->getImageFileName();
        return $image_alt;

    }

}




?>