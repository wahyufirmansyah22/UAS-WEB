-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2024 at 05:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kategori_barang` varchar(50) NOT NULL,
  `deskripsi_barang` text NOT NULL,
  `harga_barang` double NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `kode_barang`, `nama_barang`, `kategori_barang`, `deskripsi_barang`, `harga_barang`, `tanggal_masuk`, `status`) VALUES
(2, '1233', 'asus vivobook', 'elektronik', 'barang elektronik kondisi beru', 12000000, '2024-05-18', 'selesai'),
(5, '32024', 'hp iphone 11', 'elektronik', 'barang elektronik kondisi beru', 4800000, '2024-05-18', 'selesai'),
(6, '31024', 'hp oppo', 'elektronik', 'barang elektronik kondisi beru', 2000000, '2024-05-18', 'selesai'),
(7, '9024', 'hp iphone 12 pro', 'elektronik', 'barang elektronik kondisi beru', 8900000, '2024-05-18', 'selesai'),
(8, '20024', 'hp iphone 13 pro', 'elektronik', 'barang elektronik kondisi beru', 15000000, '2024-05-18', 'selesai'),
(15, '886161', 'asus vivobook', 'barang elektronik', 'kondisi barang baru', 14000000, '2024-06-20', 'selesai'),
(21, '2207', 'mikrotik', 'jaringan', 'barang bekas', 700000, '2024-07-06', 'dikemas'),
(22, '7743', 'mouse rexus', 'aksesoris', 'barang bekas no minus', 400000, '2024-07-02', 'selesai');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_petugas`, `username`, `password`) VALUES
(11, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(12, 'wahyu', 'wahyu', '32c9e71e866ecdbc93e497482aa6779f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
