<?php
// Start the session to access user information
session_start();

// Check if a user is logged in
if (isset($_SESSION['username'])) {
    $loggedInUser = $_SESSION['username'];
} else {
    $loggedInUser = "Guest"; // Default to Guest if no user is logged in
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List iPhone</title>
    <link rel="stylesheet" type="text/css" href="list_iphone.css">
    <!-- Add the following style to position the username -->
    <style>
        .header-info {
            text-align: right;
        }

        .header-info p {
            margin: 0;
            color: #007BFF;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Display the welcome message with the logged-in user -->
        <div class="header-info">
            <p>Welcome, <?php echo $loggedInUser; ?></p>
        </div>
        <h1>List iPhone</h1>
        <div class="iphone-list">
            <?php
                // Connect to the database (modify the connection details)
                $conn = new mysqli('localhost', 'root', '', 'web_iphone');

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch iPhone data including stocks
                $result = $conn->query('SELECT model, stock FROM iphone_stocks');

                // Process result
                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="iphone-item" onclick="highlight(this)">';
                        echo '<img src="' . $row['model'] . '.jpg" alt="' . $row['model'] . '">';
                        echo '<p class="iphone-name">' . $row['model'] . '</p>';
                        echo '<p class="iphone-stock">Stock: ' . $row['stock'] . '</p>';
                        echo '</div>';
                    }
                    $result->free(); // Free result set
                } else {
                    echo "Error: " . $conn->error;
                }

                // Close connection when done
                $conn->close();
            ?>
        </div>
        <a href="index.php" class="back-button">Back</a>
    </div>
    <script src="list_iphone.js" defer></script>
</body>
</html>
