<?php
class User{
    public $username;
    public $password;
    public $email;

    public function __construct($username, $password, $email){
        $this->username=$username;
        $this->password=$password;
        $this->email=$email;
    }

    public function tampilNama(){
        return $this->nama;
    }
}
?>