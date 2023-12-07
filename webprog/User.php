<?php
class User{
    private $nama;
    private $nim;
    private $prodi;
    private $password;
    private $status;

    public function __construct($nama,$nim,$prodi,$password,$status)
    {
        $this->nama=$nama;
        $this->nim=$nim;
        $this->prodi=$prodi;
        $this->password=$password;
        $this->status=$status;
    }

    public function tampilNama()
    {
        return $this->nama;
    }

    public function isiNama($nama)
    {
        $this->nama=$nama;
    }
    
}
?>