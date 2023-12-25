<?php
session_start();

if (isset($_SESSION['username'])) {
    $loggedInUser = $_SESSION['username'];

    if (isset($_POST['item_id'])) {
        $itemId = $_POST['item_id'];

        $conn = new mysqli('localhost', 'root', '', 'web_iphone');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Retrieve item details from iphone_stocks
        $query = "SELECT id, model, stock, price FROM iphone_stocks WHERE id = $itemId";
        $result = $conn->query($query);

        if ($result && $row = $result->fetch_assoc()) {
            $modelName = $row['model'];
            $itemStock = $row['stock'];
            $itemPrice = $row['price'];

            // Check if there is enough stock to buy
            if ($itemStock > 0) {
                // Decrease stock in iphone_stocks
                $updateQuery = "UPDATE iphone_stocks SET stock = stock - 1 WHERE id = $itemId";
                $conn->query($updateQuery);

                // Insert a new record into keranjang
                $insertQuery = "INSERT INTO keranjang (user_id, iphone_id, iphone_model, quantity, price, total_price, created_at) 
                                VALUES (
                                    (SELECT id FROM accounts WHERE username = '$loggedInUser'),
                                    $itemId,
                                    '$modelName',
                                    1,
                                    $itemPrice,
                                    $itemPrice,
                                    NOW()
                                )";

                if ($conn->query($insertQuery)) {
                    echo "Item purchased successfully!";
                } else {
                    echo "Error inserting item into keranjang: " . $conn->error;
                }
            } else {
                echo "Sorry, the item is out of stock.";
            }
        } else {
            echo "Error retrieving item details: " . $conn->error;
        }

        $conn->close();
    } else {
        echo "Item ID not provided.";
    }
} else {
    echo "User not logged in.";
}
?>
