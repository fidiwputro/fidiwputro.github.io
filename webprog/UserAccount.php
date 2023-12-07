<?php
class UserAccount{
    private $iduser;
    private $namauser;
    private $password;
    private $nim;
    private $prodi;
    private $gender;
    private $status;
    private $usia;

    function __construct($nama,$pass,$nim,$prodi,$gender,$status)
    {
        $this->namauser=$nama;
        $this->password=$pass;
        $this->nim=$nim;
        $this->prodi=$prodi;
        $this->gender=$gender;
        $this->status=$status;
    }

    public function tampilNama()
    {
        echo $this->namauser;
    }

    public function isiNama($nama)
    {
        $this->namauser=$nama;
    }

    public function tampilUsia()
    {
        echo $this->usia;
    }

    public function tambahUsia($tahun)
    {
        $this->usia = $this->usia+$tahun;
    }

    public function kurangUsia($tahun)
    {
        $this->usia = $this->usia-$tahun;
    }
}
?>