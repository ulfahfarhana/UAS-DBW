-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Bulan Mei 2022 pada 13.49
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grow`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `form_pendaftaran`
--

CREATE TABLE `form_pendaftaran` (
  `kode` varchar(255) NOT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `nomor_telepon` int(29) DEFAULT NULL,
  `pilihan_kelas` varchar(40) DEFAULT NULL,
  `pilihan_hari` varchar(255) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_berakhir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `form_pendaftaran`
--

INSERT INTO `form_pendaftaran` (`kode`, `nama_lengkap`, `Email`, `nomor_telepon`, `pilihan_kelas`, `pilihan_hari`, `tanggal_mulai`, `tanggal_berakhir`) VALUES
('', 'asd', 'aahdassabil@gmail.com', 1238123, 'qw', 'sad', '2022-05-27', '2022-05-21'),
('2', 'dasdas', NULL, NULL, NULL, NULL, NULL, NULL),
('23', 'fasfsa', 'aahdassabil@gmail.com', 1238123, 'qw', 'qw', '2022-05-27', '2022-05-14'),
('43', 'fasfsa', 'aahdassabil@gmail.com', 1238123, 'SD Reguler', 'Senin-Selasa', '2022-05-28', '2022-05-18');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `form_pendaftaran`
--
ALTER TABLE `form_pendaftaran`
  ADD PRIMARY KEY (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
