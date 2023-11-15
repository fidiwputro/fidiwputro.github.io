<?php
include("useracc.php");

$user = new UserAccount('20','jin');  
$user->tambahusia(5);
echo $user->tampilusia();
?>