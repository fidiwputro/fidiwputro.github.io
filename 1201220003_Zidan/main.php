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

    public function __construct($iduser, $nama,$noTelp,$Address,$userName, $Password, $email)
    {      
        $this->iduser = $iduser;  
        $this->nama = $nama;
        $this->noTelp = $noTelp;
        $this->Address = $Address;
        $this->userName = $userName;
        $this->Password = $Password;
        $this->email = $email;
    }

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




// $usr = new User('1', 'zidan', 'irfan', '1', 'sidaorjo', 'zidzaky', 'ziz', 'zzidan@gmail');
// // $usr->nama = 'adel';
// echo "<pre>";
// var_dump($usr);
// echo "</pre>";
// echo $usr->getFirstName(), " ", $usr->getLastName();
// echo " ";
// echo $usr->setFirstName('Zaky');
// echo $usr->getFirstName(), " ", $usr->getLastName();

if (isset($_POST)) {
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    $usr = new User($_POST['nama'],$_POST['password'],$_POST['email']);
    echo "<pre>";
    var_dump($usr);
    echo "</pre>";
}



class MataPelajaran
{
    private $idPelajaran;
    private $namaPelajaran;
    private $namaKejurusan;
    private $Semester;

    public function __construct($idPelajaran, $namaPelajaran, $namaKejurusan, $Semester)
    {
        $this->idPelajaran = $idPelajaran;
        $this->namaPelajaran = $namaPelajaran;
        $this->namaKejurusan = $namaKejurusan;
        $this->Semester = $Semester;
    }

    public function getIdPelajaran()
    {
        return $this->idPelajaran;
    }

    public function getNamaPelajaran()
    {
        return $this->namaPelajaran;
    }

    public function getNamaKejurusann()
    {
        return $this->namaKejurusan;
    }

    public function getSemester()
    {
        return $this->Semester;
    }

    public function setNamaPelajaran($namaPelajaran)
    {
        $this->namaPelajaran = $namaPelajaran;
    }

    public function setNamaKejurusann($namaKejurusan)
    {
        $this->namaKejurusan = $namaKejurusan;
    }

    public function setSemester($Semester)
    {
        $this->Semester = $Semester;
    }



}

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

class DataTugas
{
    private $idTugas;
    private $statusTugas;
    private $tanggalPengumpulan;
    private $deskripsiTugas;

}


?>