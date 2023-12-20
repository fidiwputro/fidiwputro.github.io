<?php
session_start();

if (isset($_SESSION['username'])) {
    $loggedInUser = $_SESSION['username'];

    // Check if the request method is GET
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        // Assuming you have a database connection, adjust the query accordingly
        $conn = new mysqli('localhost', 'root', '', 'web_iphone');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve the item ID from the request
        $itemId = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;

        if ($itemId !== null) {
            // Delete the item from the database
            $deleteQuery = "DELETE FROM iphone_stocks WHERE id = '$itemId'";
            $deleteResult = $conn->query($deleteQuery);

            if ($deleteResult) {
                echo '<div class="success-message">Item deleted successfully.</div>';
            } else {
                echo '<div class="error-message">Error deleting item: ' . $conn->error . '</div>';
            }
        } else {
            echo '<div class="error-message">Invalid item ID.</div>';
        }

        $conn->close();

        // Redirect to list_iphone.php after a brief delay
        echo '<script>';
        echo 'setTimeout(function() { window.location.href = "list_iphone.php"; }, 3000);'; // Redirect after 3 seconds
        echo '</script>';
    } else {
        echo '<div class="error-message">Invalid request method.</div>';
    }
} else {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Item</title>
    <link rel="stylesheet" type="text/css" href="delete_item.css">
</head>
<body>
    <div class="container">
        <h1>Delete Item</h1>
        <?php
            // Display any success or error messages here
        ?>
        <a href="list_iphone.php" class="back-button">Back</a>
    </div>
</body>
</html>
