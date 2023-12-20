<?php
session_start();

if (isset($_SESSION['username'])) {
    $loggedInUser = $_SESSION['username'];

    // Assuming you have a database connection, adjust the query accordingly
    $conn = new mysqli('localhost', 'root', '', 'web_iphone');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT admin FROM accounts WHERE username = '$loggedInUser'";
    $result = $conn->query($query);

    if ($result) {
        $row = $result->fetch_assoc();
        $isAdmin = $row['admin'];

        if ($isAdmin == 1) {
            $loggedInUser = "admin";
        }
    }

    $result->free();
    $conn->close();
} else {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List iPhone</title>
    <link rel="stylesheet" type="text/css" href="list_iphone.css">
    <style>
        .header-info {
            text-align: right;
        }

        .header-info p {
            margin: 0;
            color: #007BFF;
            font-weight: bold;
        }

        .action-buttons {
            margin-bottom: 10px;
        }

        .action-buttons button {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header-info">
            <p>Welcome, <?php echo $loggedInUser; ?></p>
        </div>
        <h1>List iPhone</h1>
        <div class="action-buttons">
            <a href="create_item.php"><button>Create</button></a>
            <button onclick="editItem()">Edit</button>
            <button onclick="deleteItem()">Delete</button>
        </div>
        <div class="iphone-list">
            <?php
                $conn = new mysqli('localhost', 'root', '', 'web_iphone');
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $result = $conn->query('SELECT id, model, stock, price FROM iphone_stocks');
                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="iphone-item" onclick="highlight(this)" data-item-id="' . $row['id'] . '">';
                        echo '<img src="' . $row['model'] . '.jpg" alt="' . $row['model'] . '">';
                        echo '<p class="iphone-name">' . $row['model'] . '</p>';
                        echo '<p class="iphone-stock">Stock: ' . $row['stock'] . '</p>';
                        echo '<p class="iphone-price">Price: $' . $row['price'] . '</p>';
                        echo '</div>';
                    }
                    $result->free();
                } else {
                    echo "Error: " . $conn->error;
                }

                $conn->close();
            ?>
        </div>
        <a href="index.php" class="back-button">Back</a>
    </div>
    <script src="list_iphone.js" defer></script>
    <!-- Add this script to ensure the editItem function is properly defined -->
    <script>
        function editItem() {
            var selectedItem = document.querySelector('.iphone-item.selected');
            if (selectedItem) {
                var selectedItemId = selectedItem.getAttribute('data-item-id');
                window.location.href = 'edit_item.php?id=' + selectedItemId;
            } else {
                alert('Please select an item to edit.');
            }
        }
    </script>
    <script>
    function editItem() {
        var selectedItem = document.querySelector('.iphone-item.selected');
        if (selectedItem) {
            var selectedItemId = selectedItem.getAttribute('data-item-id');
            window.location.href = 'edit_item.php?id=' + selectedItemId;
        } else {
            alert('Please select an item to edit.');
        }
    }
    function deleteItem() {
        var selectedItem = document.querySelector('.iphone-item.selected');
        if (selectedItem) {
            var selectedItemId = selectedItem.getAttribute('data-item-id');

            // Ask for confirmation before deleting
            var confirmation = confirm('Are you sure you want to delete this item?');
            if (confirmation) {
                // Redirect to delete_item.php with the selected item ID
                window.location.href = 'delete_item.php?id=' + selectedItemId;
            }
        } else {
            alert('Please select an item to delete.');
        }
    }
</script>

</body>
</html>
