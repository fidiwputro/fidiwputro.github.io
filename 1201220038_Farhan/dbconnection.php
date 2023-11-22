<?php
require 'config.php';

class DbConnection {
    public $db;
    public function __construct() {
        $dsn = "mysql:host=".DB_HOST."; dbname=".DB_NAME."; charset=UTF8";

        try {
            $pdo = new PDO($dsn, DB_USER, DB_PWD);
            if ($pdo){
                $this->db = $pdo;
                return $pdo;
                // echo 'database telah tersambung';
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>