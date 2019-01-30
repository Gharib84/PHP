<?php 

class ProductDB
{
    public function getProductsByCategory($category_id){
        $db = Database::getDB();
        $category = CategoryDB::getCategoryByID($category_id);
        $query = 'SELECT * FROM products
                  WHERE products.categoryID = :category_id
                  ORDER BY productID';
        $statement = $db->prepare($query);
        $statement->bindValue(":category_id", $category_id);
        $statement->execute();
        $rows = $statement->fetchAll();
        $statement->closeCursor();
    
        foreach ($rows as $row) {
            $product = new Product($category,
                                   $row['productCode'],
                                   $row['productName'],
                                   $row['listPrice']);
            $product->setProductID($row['productID']);
            $products[] = $product;
        }
        return $products;


    }
    public static function getProduct($product_id){
        $db = Database::getDB();
        $query = "SELECT * FROM products WHERE productID = :product_id";
        $stat = $db->prepare($query);
        $stat->bindValue(':product_id', $product_id);
        $stat->execute();
        $row = $stat->fetch();
        $stat->closeCursor();
        $category = CategoryDB::getCategoryByID($row["categoryID"]);
        $product = new Product($category, 
                                $row["productCode"],
                                $row["productName"],
                                $row["listPrice"] );
        $product->setProductID($row["productID"]);
        return $product;

        
    }

    public static function deleteProduct($product_id){
        $db = Database::getDB();
        $query = "DELETE * FROM products WHERE productID = :product_id";
        $stat = $db->prepare($query);
        $stat->bindValue(':product_id', $product_id);
        $stat->execute();
        $stat->closeCursor();


    }

    public static function addProduct($product){
        $db = Database::getDB();
        $category_id = $product->getCategory()->getProductID();
        $code = $product->getProductCode();
        $name = $product->getProductName();
        $list_price = $product->getListPrice();
        $q = "INSERT INTO products(categoryID, productID, productCode, productName, listPrice) 
              VALUES(:category_id, :code, :name, :list_price)";
        $stat = $db->prepare($q);
        $stat->bindValue(':category_id', $category_id);
        $stat->bindValue(':code', $code);
        $stat->bindValue(':name', $name);
        $stat->bindValue(':list_price', $list_price);
        $stat->execute();
        $stat->closeCursor();




    }

}





?>