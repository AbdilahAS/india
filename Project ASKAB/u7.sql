-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2020 pada 18.52
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `u7`
--

CREATE TABLE `u7` (
  `id` int(9) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ssb` varchar(100) NOT NULL,
  `nip` int(9) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `u7`
--

INSERT INTO `u7` (`id`, `nama`, `ssb`, `nip`, `gambar`) VALUES
(1, 'Tomas', 'Bina Muda', 202011000, ''),
(2, 'Riski', 'Gala Putra', 202011001, ''),
(3, 'Dani', 'Bina Muda', 202011002, ''),
(4, 'Ubay', 'Gala Putra', 202011003, ''),
(5, 'Rangga', 'Bina Muda', 202011004, '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `u7`
--
ALTER TABLE `u7`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `u7`
--
ALTER TABLE `u7`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
