<?php
class UserAccount{
    private $iduser;
    private $namauser;
    private $emailuser;
    private $usia;
    private $nomoruser;
    private $password;

    function __construct($umur,$nama)
    {
        $this->usia=$umur;
        $this->namauser=$nama;
    }

    function tampiluser()
    {
        echo $this->namauser;
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