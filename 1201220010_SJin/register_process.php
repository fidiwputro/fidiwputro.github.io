<!-- register_process.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $nomorhp = $_POST["nomorhp"];
    $umur = $_POST["umur"];
    $password = $_POST["password"];

    $conn = new mysqli('localhost', 'root', '', 'web_iphone');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert user data into the database
    $stmt = $conn->prepare("INSERT INTO accounts (username, email, nomor_hp, umur, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $username, $email, $nomorhp, $umur, $password);

    if ($stmt->execute()) {
        // Registration successful
        header("Location: login.php"); // Redirect to login page
        exit();
    } else {
        // Registration failed
        header("Location: register.php?error=1"); // Redirect with error parameter
        exit();
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>
