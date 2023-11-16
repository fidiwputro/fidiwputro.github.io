<?php


class DataTugas
{
    private $idTugas;
    private $statusTugas;
    private $tanggalPengumpulan;
    private $deskripsiTugas;

    public function __construct($idTugas, $statusTugas, $tanggalPengumpulan, $deskripsiTugas)
    {
        $this->idTugas = $idTugas;
        $this->statusTugas = $statusTugas;
        $this->tanggalPengumpulan = $tanggalPengumpulan;
        $this->deskripsiTugas = $deskripsiTugas;
    }

    public function getIdTugas()
    {
        return $this->idTugas;
    }

    public function getStatusTugas()
    {
        return $this->statusTugas;
    }

    public function getTanggalPengumpulan()
    {
        return $this->tanggalPengumpulan;
    }

    public function getDeskripsiTugas()
    {
        return $this->deskripsiTugas;
    }

    public function setIdTugas($idTugas)
    {
        $this->idTugas = $idTugas;
    }

    public function setStatusTugas($statusTugas)
    {
        $this->statusTugas = $statusTugas;
    }

    public function setTanggalPengumpulan($tanggalPengumpulan)
    {
        $this->tanggalPengumpulan = $tanggalPengumpulan;
    }

    public function setDeskripsiTugas($deskripsiTugas)
    {
        $this->deskripsiTugas = $deskripsiTugas;
    }


}


?>