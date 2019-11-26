-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2019 at 05:41 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aruskas`
--

CREATE TABLE `aruskas` (
  `idKeuangan` int(11) NOT NULL,
  `kas` int(11) NOT NULL,
  `pendapatan` int(100) NOT NULL,
  `bebanBiaya` int(100) NOT NULL,
  `hutang` int(100) NOT NULL,
  `piutang` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aruskas`
--

INSERT INTO `aruskas` (`idKeuangan`, `kas`, `pendapatan`, `bebanBiaya`, `hutang`, `piutang`) VALUES
(23, 15000, 20000, 10000, 5000, 10000),
(24, -14000, 5000, 10000, 10000, 1000),
(25, -14000, 5000, 10000, 10000, 1000),
(26, 995000, 1000000, 10000, 5000, 10000),
(27, 995000, 1000000, 10000, 5000, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `idCabang` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `namaCabang` varchar(255) NOT NULL,
  `alamatCabang` varchar(255) NOT NULL,
  `saranOwner` varchar(10000) NOT NULL,
  `idOwner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`idCabang`, `username`, `password`, `namaCabang`, `alamatCabang`, `saranOwner`, `idOwner`) VALUES
(1, '1', '1', 'Prox', 'Sukapura', 'q', 1),
(2, '2', '2', 'Prex', 'Sukabirus', '', 1),
(3, '3', '3', 'Ai', 'Kemuning', 'Lu gua bayar buat kerja bukan makan !', 1);

-- --------------------------------------------------------

--
-- Table structure for table `keuangan`
--

CREATE TABLE `keuangan` (
  `idKeuangan` int(11) NOT NULL,
  `idCabang` int(11) NOT NULL,
  `file_keuangan` varchar(255) NOT NULL,
  `tanggal_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keuangan`
--

INSERT INTO `keuangan` (`idKeuangan`, `idCabang`, `file_keuangan`, `tanggal_upload`) VALUES
(23, 2, 'Booqk142.csv', '2019-11-02 08:12:10'),
(24, 2, 'Book15.csv', '2019-11-02 09:08:28'),
(25, 1, 'Book16.csv', '2019-11-05 00:05:11'),
(26, 2, 'data.csv', '2019-11-22 04:34:36'),
(27, 1, 'data1.csv', '2019-11-22 04:36:07');

-- --------------------------------------------------------

--
-- Table structure for table `labarugi`
--

CREATE TABLE `labarugi` (
  `idKeuangan` int(11) NOT NULL,
  `keuntungan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labarugi`
--

INSERT INTO `labarugi` (`idKeuangan`, `keuntungan`) VALUES
(25, -500000),
(26, 99500000),
(27, 99500000);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `idOwner` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nama_bisnis` varchar(255) NOT NULL,
  `jenis_bisnis` varchar(255) NOT NULL,
  `no_telpon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`idOwner`, `username`, `password`, `email`, `nama`, `alamat`, `nama_bisnis`, `jenis_bisnis`, `no_telpon`) VALUES
(1, '1', '1', '1@gmail.com', 'Firdausi', '', 'Kemuning Community`', 'Utilitas', 0),
(2, 'Buds@gmail.com', '12345678', 'Buds@gmail.com', 'Budi', '', 'Mks', 'Manufaktur', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aruskas`
--
ALTER TABLE `aruskas`
  ADD PRIMARY KEY (`idKeuangan`);

--
-- Indexes for table `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`idCabang`),
  ADD KEY `fkOwner` (`idOwner`);

--
-- Indexes for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`idKeuangan`),
  ADD KEY `fkKeuangan` (`idCabang`);

--
-- Indexes for table `labarugi`
--
ALTER TABLE `labarugi`
  ADD PRIMARY KEY (`idKeuangan`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`idOwner`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aruskas`
--
ALTER TABLE `aruskas`
  MODIFY `idKeuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `cabang`
--
ALTER TABLE `cabang`
  MODIFY `idCabang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `idKeuangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `idOwner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aruskas`
--
ALTER TABLE `aruskas`
  ADD CONSTRAINT `fkKas` FOREIGN KEY (`idKeuangan`) REFERENCES `keuangan` (`idKeuangan`);

--
-- Constraints for table `cabang`
--
ALTER TABLE `cabang`
  ADD CONSTRAINT `fkOwner` FOREIGN KEY (`idOwner`) REFERENCES `owner` (`idOwner`);

--
-- Constraints for table `keuangan`
--
ALTER TABLE `keuangan`
  ADD CONSTRAINT `fkKeuangan` FOREIGN KEY (`idCabang`) REFERENCES `cabang` (`idCabang`);

--
-- Constraints for table `labarugi`
--
ALTER TABLE `labarugi`
  ADD CONSTRAINT `fkLaba` FOREIGN KEY (`idKeuangan`) REFERENCES `keuangan` (`idKeuangan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
