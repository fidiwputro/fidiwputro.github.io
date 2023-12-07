<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "DbConnection.php";

    $conn = (new DbConnection())->getConnection();

    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT id, username, password FROM accounts WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $username, $stored_password);
        $stmt->fetch();

        if ($password === $stored_password) {
            // Successful login
            session_start(); // Start a session
            $_SESSION["username"] = $username; // Store username in the session

            $response = array("success" => true, "message" => "Login successful");
        } else {
            // Invalid password
            $response = array("success" => false, "message" => "Invalid username or password");
        }
    } else {
        // User not found
        $response = array("success" => false, "message" => "Invalid username or password");
    }

    // Send JSON response
    header('Content-Type: application/json');
    echo json_encode($response);

    $stmt->close();
    $conn->close();
} else {
    // Invalid request method
    http_response_code(405); // Method Not Allowed
    echo "Invalid request method";
}
?>
