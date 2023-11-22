<?php
include ("User.php");

if(isset($_POST)){
    $usr = new User($_POST['txtnama'],$_POST['txtnim'],$_POST['slcprodi'],$_POST['txtpwd'],$_POST['aktif']);
    
    echo "<pre>";
    var_dump($usr);
    echo "</pre>";
}
?>