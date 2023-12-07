<?php
class DataSekolah
{
    private $idSekolah;
    private $namaSekolah;
    private $Alamat;
    private $KodePos;
    private $Akreditasi;
    private $ContactPerson;
    private $emailSekolah;

    public function __construct($idSekolah, $namaSekolah, $Alamat, $KodePos, $Akreditasi, $ContactPerson, $emailSekolah)
    {
        $this->idSekolah = $idSekolah;
        $this->namaSekolah = $namaSekolah;
        $this->Alamat = $Alamat;
        $this->KodePos = $KodePos;
        $this->Akreditasi = $Akreditasi;
        $this->ContactPerson = $ContactPerson;
        $this->emailSekolah = $emailSekolah;
    }

    public function getIdSekolah()
    {
        return $this->idSekolah;
    }

    public function getnamaSekolah()
    {
        return $this->namaSekolah;
    }
    public function getAlamat()
    {
        return $this->Alamat;
    }
    public function getKodePos()
    {
        return $this->KodePos;
    }
    public function getAkreditasi()
    {
        return $this->Akreditasi;
    }
    public function getContactPerson()
    {
        return $this->ContactPerson;
    }
    public function getemailSekolah()
    {
        return $this->emailSekolah;
    }

    public function setnamaSekolah($namaSekolah)
    {
        $this->namaSekolah = $namaSekolah;
    }
    public function setAlamat($Alamat)
    {
        return $this->Alamat = $Alamat;
    }
    public function setKodePos($KodePos)
    {
        return $this->KodePos = $KodePos;
    }
    public function setAkreditasi($Akreditasi)
    {
        return $this->Akreditasi = $Akreditasi;
    }
    public function setContactPerson($ContactPerson)
    {
        return $this->ContactPerson = $ContactPerson;
    }
    public function setemailSekolah($emailSekolah)
    {
        return $this->emailSekolah = $emailSekolah;
    }


}

?>