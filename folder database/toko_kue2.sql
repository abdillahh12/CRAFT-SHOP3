-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Agu 2023 pada 15.42
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_kue2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_hp` char(12) NOT NULL,
  `pesan` varchar(70) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `nama`, `email`, `no_hp`, `pesan`, `tanggal`) VALUES
(10, 'Muhammad Abdillah Asyhar', 'muhammadabdillahasyh', '081386052908', 'Apakah Saat Ini Tersedia Lowongan Pekerjaan Untuk kasir', '2023-07-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id` int(11) NOT NULL,
  `nama_pelanggan` varchar(70) NOT NULL,
  `no_hp` char(12) NOT NULL,
  `alamat` varchar(90) NOT NULL,
  `pesanan` varchar(80) NOT NULL,
  `harga_barang` varchar(90) NOT NULL,
  `jumlah_pesanan` varchar(80) NOT NULL,
  `total_jumlah` varchar(110) NOT NULL,
  `tanggal_pemesanan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id`, `nama_pelanggan`, `no_hp`, `alamat`, `pesanan`, `harga_barang`, `jumlah_pesanan`, `total_jumlah`, `tanggal_pemesanan`) VALUES
(128, 'AHMAD', '081386052908', 'KARAWANG', 'KUE CUCUR', '4000', '12', '48000', '2023-07-28'),
(147, 'SUBANDI', '081386052908', 'BEKASI', 'ONDE-ONDE', '3500', '24', '84000', '2023-07-30'),
(151, 'JUNAEDI', '081278724579', 'KARAWANG', 'KUE LAPIS LEGIT', '2000', '23', '46000', '2023-07-30'),
(154, 'HANDOKO', '081386052908', 'BEKASI', 'ONDE-ONDE', '3500', '24', '84000', '2023-07-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users2`
--

CREATE TABLE `users2` (
  `id` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `password` varchar(259) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users2`
--

INSERT INTO `users2` (`id`, `username`, `password`) VALUES
(18, 'muhammad abdillah asyhar', '$2y$10$UQ9UWygtprV76IdjTgq3RejrbWn1o9dsCHlVo6RIN4Pa/N6xyuXIG'),
(26, 'abi', '$2y$10$98HhGDgK6xlMXj1AvoJXA.jqamEn6SUUf7RLtvv/JNiGaqpVsZCzq'),
(27, 'abdillah', '$2y$10$0oj2yKvqa.heJu9HkbTH/eT57eoZ39ab8Xg.IUX/ZYOqNrCNCEAsG'),
(28, 'eko', '$2y$10$XNbNGwP3.najbDs4dR6Bv.cg2aVC0l9zCoHn2x32W/Je8MLFh44Na');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_admin`
--

CREATE TABLE `users_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(90) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users_admin`
--

INSERT INTO `users_admin` (`id`, `username`, `password`) VALUES
(7, 'admin', '$2y$10$qKsYnlVncH04B9zWnzuiNOgmZLSgHZM8o0L5gyKLI6LKDSnTFFjK.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users_admin`
--
ALTER TABLE `users_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT untuk tabel `users2`
--
ALTER TABLE `users2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `users_admin`
--
ALTER TABLE `users_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
