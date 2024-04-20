<?php
class Database
{
    const serverName = 'DESKTOP-5HQDO2R\SQLEXPRESS';
    const database = 'TESTDATA';
    const uid = '';
    const pass = '';
    public function connect()
    {
        $connection = [
            'Database' => self::database,
            'Uid' => self::uid,
            'PWD' => self::pass
        ];
        $connect = sqlsrv_connect(self::serverName, $connection);
        if ($connect === false) {
            throw new Exception("Connection failed: " . print_r(sqlsrv_errors(), true));
        }
        return $connect;
    }

    // public function conn()
    // {
    //     try {
    //         $conn = new PDO("sqlsrv:server=DESKTOP-5HQDO2R\\SQLEXPRESS;database=TESTDATA", "", "");
    //         echo 'successful';
    //         return $conn;
    //     } catch (PDOException $e) {
    //         echo "Connection failed: " . $e->getMessage();
    //     }
    // }
    
}
?>