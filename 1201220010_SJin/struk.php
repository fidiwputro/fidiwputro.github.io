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

// Fetch purchased items for the logged-in user from the struk table
$query = "SELECT s.id, s.iphone_model AS iphone_name, s.quantity, s.price, s.total_price, s.created_at
          FROM struk s
          WHERE s.user_id = (SELECT id FROM accounts WHERE username = '$loggedInUser')";
$result = $conn->query($query);

$totalPrice = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk</title>
    <link rel="stylesheet" type="text/css" href="struk.css">
</head>

<body>
    <h1>Struk</h1>

    <!-- Table for displaying purchased items -->
    <?php if ($result && $result->num_rows > 0): ?>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>iPhone Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Price</th>
                <th>Purchase Date</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['iphone_name']; ?></td>
                    <td><?php echo $row['quantity']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['total_price']; ?></td>
                    <td><?php echo $row['created_at']; ?></td>
                </tr>
                <?php $totalPrice += $row['total_price']; ?>
            <?php endwhile; ?>
        </table>

        <!-- Display total price below the table -->
        <p>Total Price: $<?php echo number_format($totalPrice, 2); ?></p>
    <?php else: ?>
        <p>No purchased items found for <?php echo $loggedInUser; ?></p>
    <?php endif; ?>

    <a href="javascript:history.go(-1)" class="back-button">Back</a>
    <a href="index.php" class="back-button">Home</a>

<?php
$conn->close();
?>
</body>
</html>
