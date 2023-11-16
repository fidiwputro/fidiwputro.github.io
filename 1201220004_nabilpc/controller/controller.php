<?php
include_once("models/barang.php");
include_once("models/user.php");
include_once("models/transaksi.php");
include_once("models/jasa_service.php");

$barang = new Barang();
$barang->id_barang = 1.5;
$user = new User('1', 'diandra nabil', 'passwordkuat123');
$jasa_service = new Jasa_service();
$jasa_service->rincian_harga = 1000;
echo 'TOTAL : RP.'. $jasa_service->calculateHargaTotal(). ',00'. '</br>';
echo $user->getIdUser(). '|'. $user->getUsername().'|'. $user->getPassword(). '</br>';
echo $barang->id_barang;

if($_SERVER['REQUEST_METHOD'])
?>