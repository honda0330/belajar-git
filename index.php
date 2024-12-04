<?php
// Menggabungkan ke database MYSQL
$conn = new mysqli('localhost', 'root', 'root', 'test_db');
if ($conn->connection_error) {
	die("Connection failed: ". $conn->connect_error);
}

// Membaca data dari database
$result = $conn->query("SELECT * FROM users");
while ($row = $result->fetch_assoc()) {
	echo "ID: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
}

$conn->close();
?>
