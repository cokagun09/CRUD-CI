-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2019 pada 00.29
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data`
--

CREATE TABLE `data` (
  `id_uts` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `kabupaten` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hobi` varchar(50) DEFAULT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data`
--

INSERT INTO `data` (`id_uts`, `nama`, `nim`, `tgl`, `jenis_kelamin`, `kabupaten`, `email`, `hobi`, `img`) VALUES
(9, 'Cok Gde Agung', '1615323069', '1998-06-09', 'laki-laki', 'Karangasem', 'gdeAgung2017@gmail.com', 'Coding,Travel', ''),
(11, 'Ananta Wijaya', '1615323003', '1242-02-04', 'perempuan', 'Tabanan', 'wira.putra03.wp@gmail.com', 'Memasak,Travel', ''),
(14, 'Ananta Wijaya', '1615323069', '2019-02-15', 'laki-laki', 'Denpasar', 'gdeagung2017@gmail.com', 'Coding,Tidur', 'd788a966db24e28f211f919a5e5622f8.JPG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id_uts`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data`
--
ALTER TABLE `data`
  MODIFY `id_uts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
