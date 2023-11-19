<?php

// Database configuration
$host = "localhost";
$username = "root";
$password = "";
$database = "db_desktop";

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected to the database successfully!" . "<br>";

$sql = "SELECT * FROM buku";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Hasil dari table yang dipanggil
    while ($row = $result->fetch_assoc()) {
        echo $row["id"] . ". " . $row["judul"] . "<br>";
    }
} else {
    // Jika data tidak lebih dari 0/tidak ada.
    echo "No data found in the table.";
}

// Close the connection
$conn->close();
