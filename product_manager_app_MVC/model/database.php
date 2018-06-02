<?php
//the data base connection 

$data_source_name = "mysql:host=localhost;dbname=my_guitar_shop1";
$username = "root";
$password = "";
$option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try{
    $dbc = new PDO($data_source_name, $username, $password, $option);
    
}catch (PDOException $e){
    print $e->getMessage();
    exit();
};






?>