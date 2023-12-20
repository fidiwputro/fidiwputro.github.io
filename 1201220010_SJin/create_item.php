<?php
session_start();

if (isset($_SESSION['username'])) {
    $loggedInUser = $_SESSION['username'];

    // Check if the request method is POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Assuming you have a database connection, adjust the query accordingly
        $conn = new mysqli('localhost', 'root', '', 'web_iphone');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve the data from the form
        $newModel = $_POST['new_model'];
        $newStock = $_POST['new_stock'];
        $newPrice = $_POST['new_price'];

        // Insert the new item into the database
        $insertQuery = "INSERT INTO iphone_stocks (model, stock, price) VALUES ('$newModel', '$newStock', '$newPrice')";
        $insertResult = $conn->query($insertQuery);

        if ($insertResult) {
            echo '<div class="success-message">Item created successfully.</div>';
        } else {
            echo '<div class="error-message">Error creating item: ' . $conn->error . '</div>';
        }

        $conn->close();
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
    <title>Create Item</title>
    <link rel="stylesheet" type="text/css" href="create_item.css">
</head>
<body>
    <div class="container">
        <h1>Create Item</h1>
        <form method="post">
            <label for="new_model">Model:</label>
            <input type="text" id="new_model" name="new_model" required>
            <label for="new_stock">Stock:</label>
            <input type="number" id="new_stock" name="new_stock" required>
            <label for="new_price">Price:</label>
            <input type="text" id="new_price" name="new_price" required pattern="\d+(\.\d{1,2})?">
            <button type="submit">Create Item</button>
        </form>
        <a href="list_iphone.php" class="back-button">Back</a>
    </div>
</body>
</html>
