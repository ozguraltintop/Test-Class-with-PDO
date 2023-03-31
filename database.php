<?php 

class DB {
    
    private static $durum = NULL;
    private static $bilgi = 'mysql:host=localhost;dbname=testcase';
    private static $username = 'root';
    private static $password = '';
    public static $char = 'SET NAMES utf8';
    
    private function __construct() { }
    
    public static function baglan() {
        if(!self::$conn) {
            try {
                self::$conn = new PDO(self::$bilgi, self::$username, self::$password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                self::$conn->exec(self::$char);
            }
            catch (PDOException $e) {
                throw new Exception($e->GetMessage());  
            }
        }
        return self::$conn;
    }
    
    public function __destruct() {
        self::$conn = NULL;    
    }
}
?>
