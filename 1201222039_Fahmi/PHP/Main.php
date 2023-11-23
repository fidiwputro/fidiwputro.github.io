<?php
include ("User.php");

$usr = new User('Fahmi', '12345', 'iniemail@gmail.com');
// $usr->username='Adel';
echo $usr->username;

var_dump($usr);

if(isset($_POST)){
    $usr = new User($_POST['username'], 
    $_POST['password'],
    $_POST['email']);

    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";
}
?>