<?php
include("UserAccount.php");

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = new UserAccount($_POST['txtnama'],$_POST['txtpwd'],$_POST['txtnim'],$_POST['slcprodi'],$_POST['gender'],$_POST['aktif']);
    echo "<pre>";
    var_dump($user);
    echo "</pre>";
}

?>