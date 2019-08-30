-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Agu 2019 pada 18.35
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if_41_02_monitoringbusiness`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aruskas`
--

CREATE TABLE `aruskas` (
  `idKeuangan` int(11) NOT NULL,
  `kas` varchar(25) DEFAULT NULL,
  `saranOwner` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aruskas`
--

INSERT INTO `aruskas` (`idKeuangan`, `kas`, `saranOwner`) VALUES
(1, '18.100.000', 'Harap di cek kembali setiap barang yang akan dikirimkan'),
(2, '65.000.000', 'Usahakan setiap barang yang dikirimkan terjamin keamanannya'),
(3, '58.300.000', 'Harap stok bahan baku selalu diperhatikan'),
(4, '10.000.000', 'Usahakan setiap bulan mencapai minimum angka produksi'),
(5, '11.200.000', 'Perhatikan setiap komposisi bahan baku yang digunakan untuk meningkatkan pendapatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cabang`
--

CREATE TABLE `cabang` (
  `idCabang` varchar(20) NOT NULL,
  `idOwner` int(11) DEFAULT NULL,
  `namaCabang` varchar(30) DEFAULT NULL,
  `alamatCabang` varchar(255) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cabang`
--

INSERT INTO `cabang` (`idCabang`, `idOwner`, `namaCabang`, `alamatCabang`, `username`, `password`) VALUES
('11', 1, 'Sinar Maju', 'Dayeuhkolot', 'intanmrn', 'intan123'),
('12', 1, 'Maju Jaya', 'Kebayoran Lama', 'intanmrn', 'intan123'),
('21', 2, 'Jiwa Marga', 'Cikupa', 'nuzulaz', 'azmi123'),
('22', 2, 'Pelita Harapan', 'Karawaci', 'nuzulaz', 'azmi123'),
('23', 2, 'Jasa Hati', 'Slipi', 'nuzulaz', 'azmi123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keuangan`
--

CREATE TABLE `keuangan` (
  `idCabang` varchar(20) DEFAULT NULL,
  `idKeuangan` int(11) NOT NULL,
  `pendapatan` varchar(25) DEFAULT NULL,
  `bebanBiaya` varchar(25) DEFAULT NULL,
  `hutang` varchar(25) DEFAULT NULL,
  `piutang` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keuangan`
--

INSERT INTO `keuangan` (`idCabang`, `idKeuangan`, `pendapatan`, `bebanBiaya`, `hutang`, `piutang`) VALUES
('11', 1, '25.000.000', '9.000.000', '2.500.000', '4.600.000'),
('12', 2, '105.000.000', '60.000.000', '8.000.000', '28.000.000'),
('21', 3, '100.000.000', '38.000.000', '2.650.000', '1.600.000'),
('22', 4, '13.000.000', '2.000.000', '1.300.000', '300.000'),
('23', 5, '17.000.000', '8.000.000', '600.000', '2.800.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `labarugi`
--

CREATE TABLE `labarugi` (
  `idKeuangan` int(11) NOT NULL,
  `laba` varchar(25) DEFAULT NULL,
  `rugi` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `labarugi`
--

INSERT INTO `labarugi` (`idKeuangan`, `laba`, `rugi`) VALUES
(1, '18.100.000', '0'),
(2, '65.000.000', '0'),
(3, '58.300.000', '0'),
(4, '10.000.000', '0'),
(5, '11.200.000', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `owner`
--

CREATE TABLE `owner` (
  `idOwner` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenisBisnis` varchar(100) NOT NULL,
  `noTelephone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `owner`
--

INSERT INTO `owner` (`idOwner`, `username`, `password`, `nama`, `email`, `alamat`, `jenisBisnis`, `noTelephone`) VALUES
(1, 'intanmrn', 'intan123', 'intan', 'intan@gmail.com', 'sukabirus,Bandung', 'onlineshop', '021285628'),
(2, 'nuzulaz', 'azmi123', 'azmi', 'nuzulaz@gmail.com', 'sukapura,Bandung', 'manufaktur', '021364463'),
(3, 'minto', 'satria123', 'satria', 'satria@gmail.com', 'Sragen', 'jasa', '021956659'),
(4, 'budinugroho', 'budi123', 'budi', 'budi@gmail.com', 'Pati', 'distributor', '021746647'),
(5, 'feryyy', 'fery123', 'fery', 'fery@gmail.com', 'Tasikmalaya', 'transportasi', '021365563');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aruskas`
--
ALTER TABLE `aruskas`
  ADD PRIMARY KEY (`idKeuangan`);

--
-- Indeks untuk tabel `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`idCabang`),
  ADD KEY `fkOwner` (`idOwner`);

--
-- Indeks untuk tabel `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`idKeuangan`),
  ADD KEY `fkKeuangan` (`idCabang`);

--
-- Indeks untuk tabel `labarugi`
--
ALTER TABLE `labarugi`
  ADD PRIMARY KEY (`idKeuangan`);

--
-- Indeks untuk tabel `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`idOwner`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `owner`
--
ALTER TABLE `owner`
  MODIFY `idOwner` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `aruskas`
--
ALTER TABLE `aruskas`
  ADD CONSTRAINT `fkArus` FOREIGN KEY (`idKeuangan`) REFERENCES `keuangan` (`idKeuangan`);

--
-- Ketidakleluasaan untuk tabel `cabang`
--
ALTER TABLE `cabang`
  ADD CONSTRAINT `fkOwner` FOREIGN KEY (`idOwner`) REFERENCES `owner` (`idOwner`);

--
-- Ketidakleluasaan untuk tabel `keuangan`
--
ALTER TABLE `keuangan`
  ADD CONSTRAINT `fkKeuangan` FOREIGN KEY (`idCabang`) REFERENCES `cabang` (`idCabang`);

--
-- Ketidakleluasaan untuk tabel `labarugi`
--
ALTER TABLE `labarugi`
  ADD CONSTRAINT `fkLabaRugi` FOREIGN KEY (`idKeuangan`) REFERENCES `keuangan` (`idKeuangan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
