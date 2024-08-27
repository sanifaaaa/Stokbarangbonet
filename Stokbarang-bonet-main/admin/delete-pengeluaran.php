<?php
session_start();
if (!isset($_SESSION['username'])) { 
    header("Location: ../index.php");
    exit();
}
include('../koneksi.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM tb_pengeluaran_barang WHERE ID_Barang='$id'";

    if ($conn->query($query) === TRUE) {
        $_SESSION['message'] = "Data berhasil dihapus!";
    } else {
        $_SESSION['message'] = "Error deleting record: " . $conn->error;
    }
    header("Location: pengeluaran-admin.php");
    exit();
} else {
    header("Location: pengeluaran-admin.php");
    exit();
}
?>
