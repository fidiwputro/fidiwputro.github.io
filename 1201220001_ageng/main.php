<?php 
include ("User.php");
include ("Regis.php");

// $usr = new User('Ageng','theqar07@gmail.com','123','27-08-2023');
// echo $usr->nama();
// echo $usr->email();
// echo $usr->password();
// echo $usr->tglKunjungan();

if (isset($_POST)) {
    $usr = new User ('',$_POST['E-Mail'],$_POST['Password'],'');
    echo "<pre>";
    var_dump ($_POST);
    echo "</pre>";
}

if (isset($_POST)) {
    $usr = new Regis ('$_POST[Nama Lengkap]',$_POST['E-Mail'],$_POST['Password']);
    echo "<pre>";
    var_dump ($_POST);
    echo "</pre>";
}

?>