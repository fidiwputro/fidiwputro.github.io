<?php
require 'config.php';


class DatabaseConnection
{
    private $dbHost;
    private $dbName;
    private $dbUsername;
    private $dbPassword;

    public function __construct($dbHost, $dbName, $dbUsername, $dbPassword)
    {
        $this->dbHost = $dbHost;
        $this->dbName = $dbName;
        $this->dbUsername = $dbUsername;
        $this->dbPassword = $dbPassword;
    }

    public function connect()
    {
        try {
            $db = new PDO("mysql:host=$this->dbHost;dbname=$this->dbName", $this->dbUsername, $this->dbPassword);
            echo "<center>Database Terhubung</center>";

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $db;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    // diberikan parameter, supaya table ini bisa mengambil nama table berdasarkan input dinamis
    public function getTable(string $namaTable)
    {
        $db = $this->connect();
        if ($db == null) {
            return null;
        }

        $sql = "SELECT * FROM " . $namaTable;
        $stmt = $db->prepare($sql);
        $stmt->execute();

        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $users;
    }

    public function insertUser($nameuser, $passwordUser, $roleUser)
    {
        $db = $this->connect();
        if ($db == null) {
            return false;
        }

        $sql = "INSERT INTO user_wingraha (name_user, password_user, role_user) VALUES (:nameuser, :passwordUser, :roleUser)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':nameuser', $nameuser);
        $stmt->bindParam(':passwordUser', $passwordUser);
        $stmt->bindParam(':roleUser', $roleUser);



        if ($stmt->execute()) {
            return

                true;
        } else {
            return false;
        }
    }
}

$db = new DatabaseConnection($dbHost, $dbName, $dbUsername, $dbPassword);


// $db->insertUser("adin", "12", "admin");
// masukkan nama table untuk dipanggil

$users = $db->getTable("user_wingraha");

if (!empty($users)) {
    foreach ($users as $user) {
        echo "ID User: " . $user['id_user'] . "<br>";
        echo "User Name: " . $user['name_user'] . "<br>";
        echo "Password User: " . $user['password_user'] . "<br>";
        echo "User Role: " . $user['role_user'] . "<br>";
        echo "<br>";
    }
} else {
    echo "Table is exist but no data available";
}

?>

