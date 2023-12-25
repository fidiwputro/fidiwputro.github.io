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
</head>

<body>
    <h1>Keranjang</h1>

    <?php if ($result && $result->num_rows > 0): ?>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>iPhone Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Order Date</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['iphone_name']; ?></td>
                    <td><?php echo $row['quantity']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['created_at']; ?></td>
                </tr>
                <?php $totalPrice += ($row['price'] * $row['quantity']); ?>
            <?php endwhile; ?>
        </table>
        <p>Total Price: $<?php echo number_format($totalPrice, 2); ?></p>
    <?php else: ?>
        <p>No orders found for <?php echo $loggedInUser; ?></p>
    <?php endif; ?>

    <a href="list_iphone.php">Back</a>

<?php
$conn->close();
?>
