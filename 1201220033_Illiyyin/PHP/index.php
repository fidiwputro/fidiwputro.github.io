<?php

class User{
    public $name;
    public $email;
    public $password;
    public $status;
    public $prodi;


    public function __construct($name, $email, $password){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }



}

$user = new User("Ahmad", "<EMAIL>", "<PASSWORD>");

$user->name = "Ahmad";
echo $user->name;


