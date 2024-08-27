<?php
session_start();
if (!isset($_SESSION['username'])) { 
    header("Location: ../index.php");
    exit();
}
include('../koneksi.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tanggal = $_POST['Tanggal_Pembelian'];
        $nama = $_POST['Nama_Barang'];
        $tipe = $_POST['Tipe'];
        $satuan = $_POST['Satuan'];
        $stok = $_POST['Stok'];
        $perangkat = $_POST['Perangkat'];

        $query = "UPDATE tb_pemasukan_barang SET Tanggal_Pembelian='$tanggal', Nama_Barang='$nama', Tipe='$tipe', Satuan='$satuan', Stok='$stok', Perangkat='$perangkat' WHERE ID_Barang='$id'";

        if ($conn->query($query) === TRUE) {
            $_SESSION['message'] = "Data berhasil diupdate!";
        } else {
            $_SESSION['message'] = "Error: " . $query . "<br>" . $conn->error;
        }
        header("Location: pemasukan-admin.php");
        exit();
    } else {
        $query = "SELECT * FROM tb_pemasukan_barang WHERE ID_Barang='$id'";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
    }
} else {
    header("Location: pemasukan-admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventoris PT Bonet Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
        }
        .navbar-custom {
            background-color: #B83C08;
        }
        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            color: #fff;
        }
        .navbar-custom .nav-link:hover {
            color: #000;
        }
        .container {
            padding-top: 100px;
        }
        .table {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
        }
        .actions {
            display: flex;
            gap: 10px;
        }
        .pagination {
            justify-content: center;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <div class="container p-1">
        <a class="navbar-brand" href="admin.php">Bonet Utama</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="admin.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pemasukan-admin.php">Pemasukan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pengeluaran-admin.php">Pengeluaran</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="riwayat-admin.php">Histori</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h2>Edit Data Barang</h2>
    <p><i>Halaman ini berfungsi untuk merubah informasi data barang dari barang sudah yang ada</i></p>
    <form action="" method="POST">
        <div class="mb-3">
            <label for="Tanggal_Pembelian" class="form-label">Tanggal Pembelian</label>
            <input type="date" class="form-control" id="Tanggal_Pembelian" name="Tanggal_Pembelian" value="<?= htmlspecialchars($row['Tanggal_Pembelian']) ?>" disabled>
        </div>
        <div class="mb-3">
            <label for="Nama_Barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="Nama_Barang" name="Nama_Barang" value="<?= htmlspecialchars($row['Nama_Barang']) ?>" disabled>
        </div>
        <div class="mb-3">
            <label for="Tipe" class="form-label">Tipe</label>
            <input type="text" class="form-control" id="Tipe" name="Tipe" value="<?= htmlspecialchars($row['Tipe']) ?>">
        </div>
        <div class="mb-3">
            <label for="Satuan" class="form-label">Satuan</label>
            <input type="text" class="form-control" id="Satuan" name="Satuan" value="<?= htmlspecialchars($row['Satuan']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="Stok" class="form-label">Stok/Jumlah</label>
            <input type="number" class="form-control" id="Stok" name="Stok" value="<?= htmlspecialchars($row['Stok']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="Perangkat" class="form-label">Perangkat</label>
            <input type="text" class="form-control" id="Perangkat" name="Perangkat" value="<?= htmlspecialchars($row['Perangkat']) ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="pemasukan-admin.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
