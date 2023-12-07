<?php
require 'DbConnection.php';
class UserAccount{
    private $username;
    private $email;
    private $nomorhp;
    private $usia;
    private $password;

    function __construct($umur,$nama)
    {
        $this->usia=$umur;
        $this->username=$nama;
    }

    function tampiluser()
    {
        echo $this->username;
    }

    public function isinama($nama)
    {
        $this->namauser=$nama;
    }

    function tampilusia()
    {
        echo $this->usia;
    }

    public function tambahusia($tahun)
    {
        $this->usia = $this->usia+$tahun;
    }

}
?>