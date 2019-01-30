<?php 

class CategoryDB
{
    public function __construct(){

    }
    public static function getCategories(){
        $db = Database::getDB();
        $query = "SELECT * FROM categories ORDER BY categoryID";
        $statment = $db->prepare($query);
        $statment->execute();
        $categories = array();
        foreach($statment as $row){
            $category = new Category($row["categoryID"], 
                                      $row["categoryName"]);
            $categories[] = $category;
        }
        return $categories;
    }

    public static function getCategoryByID($category_id){
        $db = Database::getDB();
        $query = 'SELECT * FROM categories
                  WHERE categoryID = :category_id';    
        $statement = $db->prepare($query);
        $statement->bindValue(':category_id', $category_id);
        $statement->execute();    
        $row = $statement->fetch();
        $statement->closeCursor();    
        $category = new Category($row['categoryID'],
                                 $row['categoryName']);
        return $category;

    }
}



?>