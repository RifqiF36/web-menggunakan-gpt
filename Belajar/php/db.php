<?php
$servername = "localhost"; // atau IP address dari server database
$username = "root"; // username dari database
$password = ""; // password dari database
$dbname = "inventory"; // nama database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
