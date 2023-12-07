<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $namaLengkap = $_POST["Nama_Lengkap"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform any necessary validation
    // For example, you may want to check if the email is valid or if the password meets certain criteria.

    // Process the data (you can store it in a database, send an email, etc.)
    
    // For now, let's just echo the collected data
    echo "Nama Lengkap: $namaLengkap<br>";
    echo "Email: $email<br>";
    // Note: You should never directly echo or display passwords in a real-world application.
    // This is just for demonstration purposes.
    echo "Password: $password";
    header("Location: login.html");
    exit();
} else {
    // If someone tries to access this script directly without submitting the form, redirect them to the form page.
    header("Location: index.html");
    exit();
}
?>
