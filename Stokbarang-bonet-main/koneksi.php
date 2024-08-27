<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stokbarang_bonet";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}
?>
