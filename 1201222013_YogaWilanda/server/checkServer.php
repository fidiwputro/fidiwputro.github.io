<?php
include './server.php';
echo "Connected to the database successfully!" . "<br>";

$sql = "SELECT * FROM user";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Hasil dari table yang dipanggil
    while ($row = $result->fetch_assoc()) {
        echo $row["id_user"] . ". " . $row["nama_user"] . "<br>";
    }
} else {
    // Jika data tidak lebih dari 0/tidak ada.
    echo "No data found in the table.";
}

// Close the connection
$conn->close();