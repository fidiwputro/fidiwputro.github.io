<?php
require 'config.php';//memuat file konfigurasi

class DbConncention{
    public function __construct(){
        $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";//Perint
        try{
            
            $pdo = new PDO ($dsn, $user, $pwd);
            if($pdo){
                echo"connect";
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }

    }
}
?>