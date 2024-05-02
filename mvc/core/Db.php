<?php
class Database {
    private static $conn;

    public static function getConnection() {
        if (!isset(self::$conn)) {
            $serverName = 'DESKTOP-5HQDO2R\SQLEXPRESS';
            $database = 'TEST';
            $uid = '';
            $pass = '';
            try {
                self::$conn = new PDO("sqlsrv:Server=$serverName;Database=$database", $uid, $pass);
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
        return self::$conn;
    }
}
?>