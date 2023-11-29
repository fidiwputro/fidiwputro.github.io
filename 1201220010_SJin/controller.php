<?php
include("useracc.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = new useraccount($_POST['username'], $_POST['email'], $_POST['nomorhp'], $_POST['umur'], $_POST['password']);
    echo "<pre>";
    var_dump($user);
    echo "</pre>";
}
?>
