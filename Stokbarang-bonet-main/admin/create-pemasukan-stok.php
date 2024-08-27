<?php
session_start();
if (!isset($_SESSION['username'])) { 
    header("Location: ../index.php");
    exit();
}
include('../koneksi.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_barang = $_POST['id_barang'];
    $jumlah = $_POST['jumlah'];
    $tanggal = date('Y-m-d');

    // Update stok barang
    $update_query = "UPDATE tb_pemasukan_barang SET Stok = Stok + $jumlah WHERE ID_Barang = $id_barang";
    $conn->query($update_query);

    // Tambahkan ke riwayat
    $riwayat_query = "INSERT INTO tb_riwayat (id_barang, tipe, jumlah, tanggal) VALUES ($id_barang, 'pemasukan', $jumlah, '$tanggal')";
    $conn->query($riwayat_query);

    $_SESSION['message'] = "Stok berhasil ditambahkan.";
    header("Location: pemasukan-admin.php");
    exit();
}



$barang_query = "SELECT * FROM tb_pemasukan_barang";
$barang_result = $conn->query($barang_query);
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
                <li class="nav-item">
                    <a class="nav-link" href="riwayat-admin.php">Histori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h2 class="text-center fs-1 fw-bold">Form Pemasukan Barang</h2>
    <form method="POST" action="create-pemasukan-stok.php">
        <div class="mb-3">
            <label for="id_barang" class="form-label">Nama Barang</label>
            <select class="form-select" id="id_barang" name="id_barang" required>
                <option value="" selected>Pilih Barang...</option>
                <?php while ($row = $barang_result->fetch_assoc()): ?>
                    <option value="<?= htmlspecialchars($row['ID_Barang']) ?>"><?= htmlspecialchars($row['Nama_Barang']) ?></option>
                <?php endwhile; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan jumlah stok..." required>
        </div>
        <button type="submit" class="btn btn-success">Tambah Stok</button>
        <a href="pemasukan-admin.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
