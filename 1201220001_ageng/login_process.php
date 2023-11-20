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

    // Additional methods if needed

    // ...

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create a new User instance with form data
    $user = new User('', $_POST['E-Mail'], $_POST['Password']);

    // Perform any necessary validation
    // For example, you may want to check if the email is valid or if the password meets certain criteria.

    // For now, let's just print the user data
    echo "<pre>";
    var_dump($user);
    echo "</pre>";
} else {
    // If someone tries to access this script directly without submitting the form, redirect them to the form page.
    header("Location: index.html");
    exit();
}
?>
