-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2023 at 05:28 AM
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
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat_tulis`
--

CREATE TABLE `alat_tulis` (
  `id` int(10) NOT NULL,
  `jenis_barang` varchar(255) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `satuan` varchar(155) NOT NULL,
  `harga` varchar(155) NOT NULL,
  `total` varchar(155) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alat_tulis`
--

INSERT INTO `alat_tulis` (`id`, `jenis_barang`, `jumlah`, `satuan`, `harga`, `total`, `tanggal`) VALUES
(4, 'Amplop Putih Polos Panjang', 10, 'kotak', '30000', '300000', '2022-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `consumable`
--

CREATE TABLE `consumable` (
  `id` int(10) NOT NULL,
  `jenis_barang` varchar(255) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `satuan` varchar(155) NOT NULL,
  `harga` varchar(155) NOT NULL,
  `total` varchar(155) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consumable`
--

INSERT INTO `consumable` (`id`, `jenis_barang`, `jumlah`, `satuan`, `harga`, `total`, `tanggal`) VALUES
(1, 'Kertas komputer Voucher 2 ply logo', 0, 'box', '261364', '0', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `formulir`
--

CREATE TABLE `formulir` (
  `id` int(10) NOT NULL,
  `jenis_barang` varchar(255) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `satuan` varchar(155) NOT NULL,
  `harga` varchar(155) NOT NULL,
  `total` varchar(155) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `formulir`
--

INSERT INTO `formulir` (`id`, `jenis_barang`, `jumlah`, `satuan`, `harga`, `total`, `tanggal`) VALUES
(1, 'Amplop dinas coklat folio berlogo', 1, 'bungkus', '200000', '200000', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `materai`
--

CREATE TABLE `materai` (
  `id` int(10) NOT NULL,
  `jenis_barang` varchar(255) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `satuan` varchar(155) NOT NULL,
  `harga` varchar(155) NOT NULL,
  `total` varchar(155) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `materai`
--

INSERT INTO `materai` (`id`, `jenis_barang`, `jumlah`, `satuan`, `harga`, `total`, `tanggal`) VALUES
(1, 'Materai Rp. 6000', 0, 'lembar', '6000', '0', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(2, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'gudang', 'gudang@gmail.com', '202446dd1d6028084426867365b0c7a1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat_tulis`
--
ALTER TABLE `alat_tulis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consumable`
--
ALTER TABLE `consumable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materai`
--
ALTER TABLE `materai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat_tulis`
--
ALTER TABLE `alat_tulis`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `consumable`
--
ALTER TABLE `consumable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `formulir`
--
ALTER TABLE `formulir`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `materai`
--
ALTER TABLE `materai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
