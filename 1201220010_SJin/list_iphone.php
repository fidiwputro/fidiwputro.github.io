<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List iPhone</title>
    <link rel="stylesheet" type="text/css" href="list_iphone.css">
</head>
<body>
    <div class="container">
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
                        echo '<div class="iphone-item">';
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
</body>
</html>
