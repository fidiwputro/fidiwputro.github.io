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

// Check if the order has been canceled or no items were selected
$orderCanceled = isset($_SESSION['orderCanceled']) && $_SESSION['orderCanceled'];
$noItemsSelected = isset($_SESSION['noItemsSelected']) && $_SESSION['noItemsSelected'];

// Clear the session variables
unset($_SESSION['orderCanceled'], $_SESSION['noItemsSelected']);

// Fetch orders for the logged-in user from the keranjang table
$query = "SELECT k.id, k.iphone_model AS iphone_name, k.quantity, k.price, k.total_price, k.created_at
          FROM keranjang k
          WHERE k.user_id = (SELECT id FROM accounts WHERE username = '$loggedInUser')";
$result = $conn->query($query);

$totalPrice = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <link rel="stylesheet" type="text/css" href="keranjang.css">
    <style>
    #buyButton,
    #cancelButton {
        text-align: center;
        padding: 10px;
        border-radius: 5px;
        margin-top: 20px;
        background-color: #d3d3d3; /* Grey color by default */
        color: #fff;
    }

    #buyButton.blue {
        background-color: #49f043;
    }

    #cancelButton.blue {
        background-color: #fa2a1b
    }

    #buyButton.blue:hover {
        background-color: #2b8228;
    }

    #cancelButton.blue:hover {  
        background-color: #9e1c13
    }
    </style>
        <script>
        function updateButtons() {
            // Get all checkboxes
            var checkboxes = document.querySelectorAll('.item-checkbox');

            // Get the Buy and Cancel buttons
            var buyButton = document.getElementById('buyButton');
            var cancelButton = document.getElementById('cancelButton');

            // Check if at least one checkbox is checked
            var atLeastOneChecked = Array.from(checkboxes).some(function (checkbox) {
                return checkbox.checked;
            });

            // Toggle the Buy and Cancel buttons color
            buyButton.classList.toggle('blue', atLeastOneChecked);
            cancelButton.classList.toggle('blue', atLeastOneChecked);
        }

        function buyItems() {
            // Implement your buy logic here
            alert('Buy action for selected items');
        }

        function cancelItems() {
            // Get the selected item IDs
            var selectedItems = Array.from(document.querySelectorAll('.item-checkbox:checked')).map(function (checkbox) {
                return checkbox.value;
            });

            // Check if at least one item is selected
            if (selectedItems.length > 0) {
                // Create a FormData object to send the selected items to cancel.php using AJAX
                var formData = new FormData();
                formData.append('selectedItems', JSON.stringify(selectedItems));

                // Use fetch to send an AJAX request to cancel.php
                fetch('cancel.php', {
                    method: 'POST',
                    body: formData
                })
                .then(function (response) {
                    // Check if the response status is OK (HTTP 200-299)
                    if (response.ok) {
                        return response.text(); // Return the response text
                    }
                    throw new Error('Network response was not ok.');
                })
                .then(function (message) {
                    // Display the message in the update message div
                    document.getElementById('updateMessage').innerText = message;

                    // Update the content dynamically
                    updateContent();
                })
                .catch(function (error) {
                    console.error('There was a problem with the fetch operation:', error);
                });
            } else {
                alert('Please select at least one item to cancel.');
            }
        }
        function updateContent() {
            // Reload the content dynamically (you may want to use a more sophisticated approach)
            location.reload();
        }
        function buyItems() {
            // Get the selected item IDs
            var selectedItems = Array.from(document.querySelectorAll('.item-checkbox:checked')).map(function (checkbox) {
                return checkbox.value;
            });

            // Check if at least one item is selected
            if (selectedItems.length > 0) {
                // Create a FormData object to send the selected items to buy.php using AJAX
                var formData = new FormData();
                formData.append('selectedItems', JSON.stringify(selectedItems));

                // Use fetch to send an AJAX request to buy.php
                fetch('buy.php', {
                    method: 'POST',
                    body: formData
                })
                .then(function (response) {
                    // Check if the response status is OK (HTTP 200-299)
                    if (response.ok) {
                        return response.text(); // Return the response text
                    }
                    throw new Error('Network response was not ok.');
                })
                .then(function (message) {
                    // Display the message in the update message div
                    document.getElementById('updateMessage').innerText = message;

                    // Update the content dynamically
                    updateContent();
                })
                .catch(function (error) {
                    console.error('There was a problem with the fetch operation:', error);
                });
            } else {
                alert('Please select at least one item to buy.');
            }
        }
    </script>

</head>

<body>
    <h1>Keranjang</h1>

    <!-- Display an update message if the order was canceled or no items were selected -->
    <div id="updateMessage">
        <?php
            if ($orderCanceled) {
                echo "Order has been canceled";
            } elseif ($noItemsSelected) {
                echo "No items selected for cancellation";
            }
        ?>
    </div>

    <!-- Table for displaying orders -->
    <?php if ($result && $result->num_rows > 0): ?>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>iPhone Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Order Date</th>
                <th>Action</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['iphone_name']; ?></td>
                    <td><?php echo $row['quantity']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['created_at']; ?></td>
                    <td>
                        <!-- Display a checkbox for each item -->
                        <input type="checkbox" class="item-checkbox" value="<?php echo $row['id']; ?>" onchange="updateButtons()">
                    </td>
                </tr>
                <?php $totalPrice += ($row['price'] * $row['quantity']); ?>
            <?php endwhile; ?>
        </table>

        <!-- Display total price below the table -->
        <p>Total Price: $<?php echo number_format($totalPrice, 2); ?></p>

        <!-- Buy and Cancel buttons -->
        <div id="buyButton" class="<?php echo (isset($_POST['selectedItems']) || $orderCanceled || $noItemsSelected) ? 'blue' : 'grey'; ?>" onclick="buyItems()">Buy Selected Items</div>
        <div id="cancelButton" class="<?php echo (isset($_POST['selectedItems']) || $orderCanceled || $noItemsSelected) ? 'blue' : 'grey'; ?>" onclick="cancelItems()">Cancel Selected Items</div>


    <?php else: ?>
        <p>No orders found for <?php echo $loggedInUser; ?></p>
    <?php endif; ?>

    <a href="struk.php">View Purchased Item</a>
    <a href="javascript:history.go(-1)" class="back-button">Back</a>
    <a href="index.php" class="back-button">Home</a>
<?php
$conn->close();
?>
</body>
</html>
