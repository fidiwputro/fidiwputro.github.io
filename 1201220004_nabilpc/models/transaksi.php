<?php

class Transaksi{
    public $id_transaksi;
    public $harga_total;

    public function __construct($id_transaksi, $harga_total) {
        $this->id_transaksi =$id_transaksi;
        $this->harga_total =$harga_total;
    }

}

?>