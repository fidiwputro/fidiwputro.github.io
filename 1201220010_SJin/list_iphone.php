<?php
session_start();

if (isset($_SESSION['username'])) {
    $loggedInUser = $_SESSION['username'];
} else {
    header ('Location: login.php');
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
    </style>
</head>
<body>
    <div class="container">
        <div class="header-info">
            <p>Welcome, <?php echo $loggedInUser; ?></p>
        </div>
        <h1>List iPhone</h1>
        <div class="iphone-list">
            <?php
                $conn = new mysqli('localhost', 'root', '', 'web_iphone');
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $result = $conn->query('SELECT model, stock FROM iphone_stocks');
                if ($result) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="iphone-item" onclick="highlight(this)">';
                        echo '<img src="' . $row['model'] . '.jpg" alt="' . $row['model'] . '">';
                        echo '<p class="iphone-name">' . $row['model'] . '</p>';
                        echo '<p class="iphone-stock">Stock: ' . $row['stock'] . '</p>';
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
</body>
</html>
