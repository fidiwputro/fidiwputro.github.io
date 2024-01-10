<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$loggedInUser = $_SESSION['username'];

// Assuming you have a database connection
$conn = new mysqli('localhost', 'root', '', 'web_iphone');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the selected item IDs from the POST data
$selectedItems = isset($_POST['selectedItems']) ? json_decode($_POST['selectedItems'], true) : [];

if (!empty($selectedItems)) {
    // Convert the array values to a comma-separated string for the SQL query
    $selectedItemsString = implode(',', $selectedItems);

    // Retrieve the selected items from the keranjang table
    $query = "SELECT * FROM keranjang WHERE id IN ($selectedItemsString)";
    $result = $conn->query($query);

    while ($row = $result->fetch_assoc()) {
        // Insert the selected items into the struk table
        $insertQuery = "INSERT INTO struk (user_id, iphone_model, quantity, price, total_price, created_at)
                        VALUES (
                            (SELECT id FROM accounts WHERE username = '$loggedInUser'),
                            '{$row['iphone_model']}',
                            {$row['quantity']},
                            {$row['price']},
                            {$row['total_price']},
                            NOW()
                        )";

        // Execute the insert query
        $conn->query($insertQuery);
    }

    // Delete the selected items from the keranjang table
    $deleteQuery = "DELETE FROM keranjang WHERE id IN ($selectedItemsString)";
    $conn->query($deleteQuery);

    echo 'Purchase successful!';
} else {
    echo 'No items selected for purchase.';
}

$conn->close();
?>
