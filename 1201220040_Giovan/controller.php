<?php
class userAccount {
    public $iduser;
    public $namauser;
    public $email;
    public $password;
}

$user = new userAccount();
$user->iduser='1312';
echo $user->iduser;
?>