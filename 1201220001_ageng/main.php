<?php 
class User {
    public $fullName;
    public $email;
    public $password;

    public function __construct($fullName, $email, $password) {
        $this->fullName = $fullName;
        $this->email = $email;
        $this->password = $password;
    }

    public function getFullName() {
        return $this->fullName;
    }

    public function setFullName($fullName) {
        $this->fullName = $fullName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
}

if (isset($_POST)) {
    $usr = new User ('',$_POST['E-Mail'],$_POST['Password']);
    echo "<pre>";
    var_dump ($_POST);
    echo "</pre>";
}
?>

