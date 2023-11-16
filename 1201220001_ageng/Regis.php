<?php
class register {
    public $nama
    public $email;
    public $password;

    public function __construct($nama, $email, $password) {
        $this->nama = $nama;
        $this->email = $email;
        $this->password = $password;
    }

    public function nama(){
        return $this->nama;
    }

    public function email(){
        return $this->email;
    }

    public function password(){
        return $this->password;
    }
} 
/>