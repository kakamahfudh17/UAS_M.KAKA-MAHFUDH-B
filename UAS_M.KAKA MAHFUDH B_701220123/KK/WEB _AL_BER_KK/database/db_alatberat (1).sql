-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2023 at 11:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_alatberat`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_alat`
--

CREATE TABLE `data_alat` (
  `Nama` varchar(100) NOT NULL,
  `Stok` int(10) NOT NULL,
  `Harga_Sewa` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_alat`
--

INSERT INTO `data_alat` (`Nama`, `Stok`, `Harga_Sewa`) VALUES
('buldozer', 10, '90.000');

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `Nama` varchar(100) NOT NULL,
  `Umur` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `No_hp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`Nama`, `Umur`, `alamat`, `No_hp`) VALUES
('rizal kulfikri', '13', 'sarolangun', 2147483647),
('vivin', '11', 'jambi', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `penyewaan`
--

CREATE TABLE `penyewaan` (
  `Nama` varchar(100) NOT NULL,
  `Alat_Berat` varchar(20) NOT NULL,
  `Lama_Sewa` varchar(50) NOT NULL,
  `Tanggal_Sewa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyewaan`
--

INSERT INTO `penyewaan` (`Nama`, `Alat_Berat`, `Lama_Sewa`, `Tanggal_Sewa`) VALUES
('aby', 'trenggiling', '5 hari', '2023-11-30'),
('jesi', 'excavator', '5 hari', '2023-11-17'),
('jesika', 'trenggiling', '1 hari', '2023-11-25'),
('rizal', 'Buldozer', '1 hari', '2023-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'admin1', '$2y$10$iiUQ0i4AKVSRLkmeonFQmOhZ0DJGXtVDCGbdkqpBcN9zyX8W8MF1m'),
(3, 'rizal', '$2y$10$DlIHfBo8thqL6nQhAtlh2.Mkl9L8KJF.NoXizpdAQgVz9JuWmTzZS'),
(5, 'jesika', '$2y$10$65I5tVpRdLFeymHDTPYMuOoH70tutCTTKoX6OJQNZqEMfvquBWBAC'),
(6, 'aby', '$2y$10$nDD1OnTrm8S/8P7Mz2hRr.LG6iQGJ/MqJkih8HeQg5c.8p68Om6Ge'),
(7, 'idoi', '$2y$10$xpCjPrxoiraYh8Xba2gfEutpk70mtvgTYfpVLjhdtlAzRCgmbNYou');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_alat`
--
ALTER TABLE `data_alat`
  ADD PRIMARY KEY (`Nama`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`Nama`);

--
-- Indexes for table `penyewaan`
--
ALTER TABLE `penyewaan`
  ADD PRIMARY KEY (`Nama`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
