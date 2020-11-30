-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Nov 2020 pada 03.56
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minggu4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawaia`
--

CREATE TABLE `pegawaia` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `jeniskelamin` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawaia`
--

INSERT INTO `pegawaia` (`id`, `nama`, `jeniskelamin`, `alamat`, `email`) VALUES
(38, 'user1', 'Laki - laki', 'bandar lampung', 'user1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawaib`
--

CREATE TABLE `pegawaib` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jeniskelamin` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawaib`
--

INSERT INTO `pegawaib` (`id`, `nama`, `jeniskelamin`, `alamat`, `email`) VALUES
(4, 'user2', 'Laki - laki', 'user2', 'user2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pegawaia`
--
ALTER TABLE `pegawaia`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pegawaib`
--
ALTER TABLE `pegawaib`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pegawaia`
--
ALTER TABLE `pegawaia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `pegawaib`
--
ALTER TABLE `pegawaib`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
