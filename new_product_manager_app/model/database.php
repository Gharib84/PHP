<?php 

class Database
{
    private Static $data_source = "mysql:host=localhost;dbname=my_guitar_shop1";
    private static $user = "root";
    private static $pass = "Mah290kkl";
    private static $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    private static $obj;

    public function __construct(){

    }

    public static function getDB(){
        if (!isset(self::$obj)) {
            try {
                self::$obj =  new PDO(self::$data_source, self::$user, self::$pass, self::$option);
                //print "super";
            } catch (PDOException $e) {
                 print $e->getMessage();
                 exit();
            }
        }
       return self::$obj;


    }
}







?>
