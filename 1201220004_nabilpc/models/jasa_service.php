<?php
class Jasa_service{
    public $id_jasa_service;
    public $rincian_harga;
    public $rincian_jasa_service;

    public function getRincianHarga(){
        return $this->rincian_harga;
    }

    public function calculateHargaTotal(){
        return $this->rincian_harga * 100;
    }
}

?>