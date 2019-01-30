<?php 

class Database
{
    private static $data_source = "mysql:host=localhost;dbname=my_guitar_shop1";
    private static $username = "root";
    private static $password = "Mah290kkl";
    private static $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    private  static $db;
    public function __construct(){

    }

    public static function getDB(){
        if (!isset(self::$db)) {
            try {
                 self::$db = new PDO(self::$data_source, self::$username, self::$password, self::$option);
                 //print "connecting super";
            } catch (PDOEXception $th) {
                print $th->getMessage();
                exit();
            }
        }
        return self::$db;
    }
   
}





?>