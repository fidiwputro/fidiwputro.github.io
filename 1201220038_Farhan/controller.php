<?php

require 'dbconnection.php';
class userAccount {
    private $uname;
    private $email;
    private $ps;
    private $age;
    private $location;
    private $point;
    private $basdat

    function __construct($uname, $email, $ps){
        $this->$basdat = new DbConnection();

        $this->uname = $uname;
        $this->email = $email;
        $this->ps = $ps;
    }

    public function getData(){
        echo $this->uname.' | ';
        echo $this->email.' | ';
        echo $this->ps;
    }

    public function setData($uname, $email, $ps){
        $this->uname = $uname;
        $this->email = $email;
        $this->ps = $ps;
    }

    public function simpan() {
        $sql = 'INSERT into user(username, email, password, birthdate, location, point) VALUES (?, ?, ?, ?, ?, ?)';
        $statement = $this 
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST' ) {

    $user = new userAccount($_POST['username'], $_POST['email'], $_POST['pswd']);

    $user->simpan();
    // echo "<pre>";
    // var_dump($user);
    // echo "</pre>";
}

?>