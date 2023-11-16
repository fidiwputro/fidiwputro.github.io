<?php
include("User.php");
include("MataPelajaran.php");
include("DataSekolah.php");
include("DataTugas.php");

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




?>