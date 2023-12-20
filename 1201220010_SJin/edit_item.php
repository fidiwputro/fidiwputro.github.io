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

        // Retrieve the item ID from the request
        $itemId = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;

        if ($itemId !== null) {
            // Retrieve the edited data from the form
            $editedModel = $_POST['edited_model'];
            $editedStock = $_POST['edited_stock'];
            $editedPrice = $_POST['edited_price'];

            // Validate the price as a decimal number
            if (!preg_match('/^\d+(\.\d{1,2})?$/', $editedPrice)) {
                echo '<div class="error-message">Invalid price format. Please enter a valid decimal number.</div>';
                exit;
            }

            // Update the item in the database
            $updateQuery = "UPDATE iphone_stocks SET model = '$editedModel', stock = '$editedStock', price = '$editedPrice' WHERE id = '$itemId'";
            $updateResult = $conn->query($updateQuery);

            if ($updateResult) {
                echo '<div class="success-message">Item updated successfully.</div>';
            } else {
                echo '<div class="error-message">Error updating item: ' . $conn->error . '</div>';
            }
        } else {
            echo '<div class="error-message">Invalid item ID.</div>';
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
    <title>Edit Item</title>
    <link rel="stylesheet" type="text/css" href="edit_item.css">
</head>
<body>
    <div class="container">
        <h1>Edit Item</h1>
        <?php
            // Assuming you have a database connection, adjust the query accordingly
            $conn = new mysqli('localhost', 'root', '', 'web_iphone');

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Retrieve the item ID from the request
            $itemId = isset($_REQUEST['id']) ? $_REQUEST['id'] : null;

            if ($itemId !== null) {
                // Fetch the item data from the database
                $query = "SELECT * FROM iphone_stocks WHERE id = '$itemId'";
                $result = $conn->query($query);

                if ($result && $result->num_rows > 0) {
                    $row = $result->fetch_assoc();

                    // Display the form with pre-filled values
                    echo '<form method="post">';
                    echo '<label for="edited_model">Model:</label>';
                    echo '<input type="text" id="edited_model" name="edited_model" value="' . $row['model'] . '" required>';
                    echo '<label for="edited_stock">Stock:</label>';
                    echo '<input type="number" id="edited_stock" name="edited_stock" value="' . $row['stock'] . '" required>';
                    echo '<label for="edited_price">Price:</label>';
                    echo '<input type="text" id="edited_price" name="edited_price" value="' . $row['price'] . '" required>';

                    // Display the image of the selected item
                    echo '<img src="' . $row['model'] . '.jpg" alt="' . $row['model'] . '">';

                    echo '<button type="submit">Update Item</button>';
                    echo '</form>';
                } else {
                    echo '<div class="error-message">Item not found in the database.</div>';
                }

                $result->free();
            } else {
                echo '<div class="error-message">Invalid item ID.</div>';
            }

            $conn->close();
        ?>
        <a href="list_iphone.php" class="back-button">Back</a>
    </div>
</body>
</html>
