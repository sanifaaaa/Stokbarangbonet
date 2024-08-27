-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2024 at 07:17 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stokbarang_bonet`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_akun`
--

INSERT INTO `tb_akun` (`id_akun`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemasukan_barang`
--

CREATE TABLE `tb_pemasukan_barang` (
  `Tanggal_Pembelian` date NOT NULL,
  `ID_Barang` int(50) NOT NULL,
  `Nama_Barang` varchar(255) NOT NULL,
  `Tipe` varchar(255) NOT NULL,
  `Satuan` varchar(255) NOT NULL,
  `Stok` int(50) NOT NULL,
  `Perangkat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pemasukan_barang`
--

INSERT INTO `tb_pemasukan_barang` (`Tanggal_Pembelian`, `ID_Barang`, `Nama_Barang`, `Tipe`, `Satuan`, `Stok`, `Perangkat`) VALUES
('0000-00-00', 1, 'Groove CPE // 52HPN', 'CPE', 'Unit', 0, 'Utama'),
('0000-00-00', 2, 'Groove AP // A52HPN', 'AP', 'Unit', 0, 'Utama'),
('0000-00-00', 3, 'Router RB951', '', 'Unit', 0, 'Utama'),
('0000-00-00', 4, 'SXT CPE // SXT LITE 5', '', 'Unit', 0, 'Utama'),
('0000-00-00', 5, 'SXT AP // SXT SA5', '', 'Unit', 0, 'Utama'),
('0000-00-00', 6, 'RBLHG', '', 'Unit', 0, 'Utama'),
('0000-00-00', 7, 'Router Wireless TP Link Archer C54', '', 'Unit', 0, 'Utama'),
('0000-00-00', 8, 'Radio Sectoral - Omnitik', '', 'Unit', 0, 'Utama'),
('0000-00-00', 9, 'Switch Biasa 5 Port Fast Ethernet', 'Switch', 'Unit', 0, 'Utama'),
('0000-00-00', 10, 'Switch Biasa 8 Port Fast Ethernet', 'Switch', 'Unit', 0, 'Utama'),
('0000-00-00', 11, 'Sectoral Mantbox 15S', 'Sectoral', 'Unit', 0, 'Utama'),
('0000-00-00', 12, 'QRT - 5ac ', '', 'Unit', 1, 'Utama'),
('0000-00-00', 13, 'CRS112-8G-4S-IN ', '', 'Unit', 0, 'Utama'),
('0000-00-00', 14, 'Converter Hotcom ', '', 'Pasang', 0, 'Utama'),
('0000-00-00', 15, 'Conveter Netlink Biasa 10/100 (Pasang)', '', 'Pasang', 0, 'Utama'),
('0000-00-00', 16, 'Conveter Netlink Gigabit 10/100/1000', '', 'Pasang', 0, 'Utama'),
('0000-00-00', 17, 'Converter SFP TPLINK  Gigabit MC220L', '', 'Unit', 0, 'Utama'),
('0000-00-00', 18, 'RB2011UiAS-RM', '', 'Unit', 0, 'Utama'),
('0000-00-00', 19, 'SFP ', '', 'Unit', 0, 'Utama'),
('0000-00-00', 20, 'Router CCR1016-12G(v2)', '', 'Unit', 0, 'Utama'),
('0000-00-00', 21, 'Radio PTP LHG XL', '', 'Unit', 0, 'Utama'),
('0000-00-00', 22, 'Access Point U6-Lite + Adaptor ', '', 'Unit', 0, 'Utama'),
('0000-00-00', 23, 'Radio PTP DynaDishG-5HacD', '', 'Unit', 0, 'Utama'),
('0000-00-00', 24, 'Converter TP Link MC111CS', '', 'Unit', 0, 'Utama'),
('0000-00-00', 25, 'Converter TP Link MC112CS', '', 'Unit', 0, 'Utama'),
('0000-00-00', 26, 'CRS106-1C-5S', '', 'Unit', 0, 'Utama'),
('0000-00-00', 27, 'Radio Hotspot Ruijie Reyee RG-EW1200', '', 'Unit', 0, 'Utama'),
('0000-00-00', 28, 'Media Converter FE TL-FC311A-20', '', 'Unit', 1, 'Utama'),
('0000-00-00', 29, 'Media Converter FE TL-FC311B-20', '', 'Unit', 1, 'Utama'),
('0000-00-00', 30, 'PoE Injector', '', 'Unit', 0, 'Utama'),
('0000-00-00', 31, 'Kabel UTP Cat5e (1roll = 305mtr)', '', 'Meter', 100, 'Pendukung'),
('0000-00-00', 32, 'Kabel STP Cat5e (1roll = 305mtr)', '', 'Meter', 0, 'Pendukung'),
('0000-00-00', 33, 'Kabel Fiber Optic KU Mini 4 Core ', '', 'Meter', 100, 'Pendukung'),
('0000-00-00', 34, 'Connector RJ45 Cat5e (1pack isi 50pcs)', '', 'Pcs', 12, 'Pendukung'),
('0000-00-00', 35, 'Klem No UTP (6-8)', '', 'Pack', 0, 'Pendukung'),
('0000-00-00', 36, 'Klem Kabel Listrik (10)', '', 'Meter', 0, 'Pendukung'),
('0000-00-00', 37, 'Klem Besi U 2\"', '', 'Pcs', 2, 'Pendukung'),
('0000-00-00', 38, 'Klem Besi U 3\"', '', 'Pcs', 0, 'Pendukung'),
('0000-00-00', 39, 'Kabel Ties ', '', 'Pack', 0, 'Pendukung'),
('0000-00-00', 40, 'Solasi Nitto ', '', 'Pcs', 0, 'Pendukung'),
('0000-00-00', 41, 'Fisher', '', 'Pack', 1, 'Pendukung'),
('0000-00-00', 42, 'Skrup', '', 'Pack', 1, 'Pendukung'),
('0000-00-00', 43, 'Dynabolt', '', 'Pcs', 4, 'Pendukung'),
('0000-00-00', 44, 'Klem No 22 (Paku Klem Pipa)', '', 'Pack', 0, 'Pendukung'),
('0000-00-00', 45, 'Kabel FO Dropcocore 1 Core 3 Selling', '', 'Meter', 0, 'Pendukung'),
('0000-00-00', 46, 'Kabel FO Dropcore 4 Core 3 Selling', '', 'Meter', 800, 'Pendukung'),
('2024-08-09', 50, 'teopokki', 'Makanan', 'pcs', 4, 'lunak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengeluaran_barang`
--

CREATE TABLE `tb_pengeluaran_barang` (
  `Tanggal_Pengeluaran` date NOT NULL,
  `ID_Barang` int(50) NOT NULL,
  `Nama_Barang` varchar(255) NOT NULL,
  `Tipe` varchar(255) NOT NULL,
  `Satuan` varchar(255) NOT NULL,
  `Stok` int(50) NOT NULL,
  `Perangkat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id_akun`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tb_pemasukan_barang`
--
ALTER TABLE `tb_pemasukan_barang`
  ADD PRIMARY KEY (`ID_Barang`);

--
-- Indexes for table `tb_pengeluaran_barang`
--
ALTER TABLE `tb_pengeluaran_barang`
  ADD PRIMARY KEY (`ID_Barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pemasukan_barang`
--
ALTER TABLE `tb_pemasukan_barang`
  MODIFY `ID_Barang` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tb_pengeluaran_barang`
--
ALTER TABLE `tb_pengeluaran_barang`
  MODIFY `ID_Barang` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
