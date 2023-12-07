<?php
class UserAccount{
    public $iduser;
    public $namauser;
    public $password;
    public $nim;
    public $prodi;
    public $gender;
    public $status;
}

$user = new UserAccount();
$user->iduser='12121';
echo $user->iduser;

?>