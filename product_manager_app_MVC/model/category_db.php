<?php 

function get_categories(){
    global $dbc;
    $query = "SELECT * FROM categories ORDER BY categoryID";
    $statement = $dbc->prepare($query);
    $statement->execute();
    $categories = $statement->fetchAll();
    $statement->closeCursor();
    return $categories;
};

function get_category_name($category_id){
        global $dbc;
        $query = "SELECT * FROM categories WHERE categoryID = :category_id";
        $statement = $dbc->prepare($query);
        $statement->bindValue(':category_id', $category_id);
        $statement->execute();
        $category = $statement->fetch();
        $category_name = $category["categoryName"];
        return $category_name;
};


?>