<?php
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

?>