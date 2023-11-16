<?php
class User
{
    private $idUser;
    private $nama;
    private $noTelp;
    private $Address;
    private $userName;
    private $Password;
    private $email;

    public function __construct($nama, $Password, $email)
    {
        $this->nama = $nama;
        $this->Password = $Password;
        $this->email = $email;
    }

    // public function __construct($iduser, $nama,$noTelp,$Address,$userName, $Password, $email)
    // {      
    //     $this->iduser = $iduser;  
    //     $this->nama = $nama;
    //     $this->noTelp = $noTelp;
    //     $this->Address = $Address;
    //     $this->userName = $userName;
    //     $this->Password = $Password;
    //     $this->email = $email;
    // }

    public function getId()
    {
        return $this->idUser;
    }

    public function getNoTelp()
    {
        return $this->noTelp;
    }

    public function setNoTelp($noTelp)
    {
        $this->noTelp = $noTelp;
    }

    public function getAddress()
    {
        return $this->Address;
    }

    public function setAddress($Address)
    {
        $this->Address = $Address;
    }

    public function getUserName()
    {
        return $this->userName;
    }

    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    public function getPassword()
    {
        return $this->Password;
    }

    public function setPassword($Password)
    {
        $this->Password = $Password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

}



?>