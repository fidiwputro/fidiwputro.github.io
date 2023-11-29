<!-- login_process.php -->
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Connect to the database
    $conn = new mysqli('localhost', 'root', '', 'web_iphone_accounts');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve user data from the database
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($userId, $dbUsername, $dbPassword);
    $stmt->fetch();
    $stmt->close();

    // Verify password
    if (password_verify($password, $dbPassword)) {
        // Login successful
        $_SESSION["user_id"] = $userId;
        $_SESSION["username"] = $dbUsername;
        header("Location: index.php"); // Redirect to the main page
        exit();
    } else {
        // Login failed
        header("Location: login.php?error=1"); // Redirect with error parameter
        exit();
    }

    // Close connection
    $conn->close();
}
?>
