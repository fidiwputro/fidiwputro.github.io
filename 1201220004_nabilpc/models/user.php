<?php
class User{
    private $username;
    private $password;
    private $id_user;

    public function __construct($id_user, $username, $password)
    {
        $this->id_user = $id_user;
        $this->username = $username;
        $this->password = $password;
    }
    
    public function getIdUser(){
        return $this->id_user;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setIdUser( $id_user ){
        $this->id_user = $id_user;
    }
    public function setUsername( $username ){
        $this->username = $username;
    }
    public function setPassword( $password ){
        $this->password = $password;
    }
}

class Customer extends User{
    private $nama;
    private $email;
    
}

class Pegawai extends User{
    private $nama;
    private $role;
}

?>