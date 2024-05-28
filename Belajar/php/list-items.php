<?php
include('db.php'); // Memasukkan file koneksi database

$sql = "SELECT id, name, category, stock, price FROM items";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data dari setiap baris
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["category"]. "</td><td>" . $row["stock"]. "</td><td>" . $row["price"]. "</td></tr>";
    }
} else {
    echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
}
$conn->close();
?>
