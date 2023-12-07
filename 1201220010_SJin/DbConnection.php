<?php

class DbConnection {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'web_iphone';
    private $conn;

    public function __construct() {
        $this->conn = $this->connect();
    }

    public function getConnection() {
        return $this->conn;
    }

    private function connect() {
        $conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }

    public function closeConnection() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}

?>
