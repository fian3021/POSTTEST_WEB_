-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Nov 2022 pada 10.14
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `member`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id` int(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id`, `Email`, `Username`, `Pass`) VALUES
(9, 'alfiananp21803@gmail.com', 'alfiananur3021', '$2y$10$KdmXszOetaM3YVTEEH7naebCC9xU8.sOakCrJx7Xwqe1QcpM9jVIW');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member_istorii`
--

CREATE TABLE `member_istorii` (
  `id` int(10) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Nama` varchar(32) NOT NULL,
  `Usia` int(3) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Genre_Favorit` varchar(70) NOT NULL,
  `Tanggal_Join` varchar(20) NOT NULL,
  `Foto_Profil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `member_istorii`
--

INSERT INTO `member_istorii` (`id`, `Email`, `Nama`, `Usia`, `Gender`, `Genre_Favorit`, `Tanggal_Join`, `Foto_Profil`) VALUES
(55, 'alfiananur3021@gmail.com', 'Al Fiana Nur', 19, 'Wanita', 'Romantis,Horor,Komedi,Petualangan', '27/10/2022 22:03', 'Al Fiana Nur.jpeg'),
(56, 'shafiraoctfa@gmail.com', 'Shafira Octafia', 19, 'Wanita', 'Horor,Misteri', '27/10/2022 22:05', 'Shafira Octafia.jpeg'),
(57, 'alfian@gmail.com', 'Al Fian', 20, 'Pria', 'Horor,Sejarah,Misteri,Petualangan', '27/10/2022 22:06', 'Al Fian.jpg'),
(58, 'safasephia@gmail.com', 'Adlina Safa', 20, 'Wanita', 'Romantis,Horor,Misteri', '27/10/2022 22:07', 'Adlina Safa.jpeg'),
(59, 'andinurfadilah@gmail.com', 'Andi Nur Fadilah', 19, 'Wanita', 'Horor,Inspiratif,Misteri', '27/10/2022 22:08', 'Andi Nur Fadilah.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `member_istorii`
--
ALTER TABLE `member_istorii`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `member_istorii`
--
ALTER TABLE `member_istorii`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
