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

    // Retrieve the quantity and model of each canceled item
    $query = "SELECT quantity, iphone_model FROM keranjang WHERE id IN ($selectedItemsString)";
    $result = $conn->query($query);

    while ($row = $result->fetch_assoc()) {
        $quantity = $row['quantity'];
        $model = $row['iphone_model'];

        // Update the stock in the iphone_stocks table
        $updateStockQuery = "UPDATE iphone_stocks SET stock = stock + $quantity WHERE model = '$model'";
        $conn->query($updateStockQuery);
    }

    // Move the selected items back to the iphone_stocks table
    $moveItemsQuery = "UPDATE keranjang SET user_id = NULL WHERE id IN ($selectedItemsString)";
    $conn->query($moveItemsQuery);

    // Set a session variable to indicate that the order has been canceled
    $_SESSION['orderCanceled'] = true;
} else {
    // Set a session variable to indicate that no items were selected for cancellation
    $_SESSION['noItemsSelected'] = true;
}

$conn->close();
?>
