-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Feb 2024 pada 07.56
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2021-04-nadilayu-laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `telepon` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nama`, `alamat`, `jenis_kelamin`, `telepon`) VALUES
(3, 'nadila ayu', 'kp.pairmalang', 'P', '08382');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_outlet`
--

CREATE TABLE `tb_outlet` (
  `id_outlet` int(11) NOT NULL,
  `nama` text NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `tlp` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_outlet`
--

INSERT INTO `tb_outlet` (`id_outlet`, `nama`, `alamat`, `tlp`) VALUES
(3, 'nadila ayu', 'kp.pairmalang', '08382');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paket`
--

CREATE TABLE `tb_paket` (
  `id_paket` int(11) NOT NULL,
  `id_outle` int(11) NOT NULL,
  `Jenis` int(11) NOT NULL,
  `nama_paket` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_paket`
--

INSERT INTO `tb_paket` (`id_paket`, `id_outle`, `Jenis`, `nama_paket`, `harga`) VALUES
(5, 3, 0, 'paket_b', '15.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_outlet` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `nama_paket` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_outlet`, `jenis`, `nama_paket`, `harga`) VALUES
(1, 'kiloan', 'paket_a', '10000'),
(1, 'kiloan', 'paket_a', ''),
(3, 'kiloan', 'paket_a', '211'),
(3, 'kiloan', 'paket_a', '211'),
(3, 'selimut', 'paket_a', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pasword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `pasword`) VALUES
(11, 'nadila ayu', 'dila', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `tb_outlet`
--
ALTER TABLE `tb_outlet`
  ADD PRIMARY KEY (`id_outlet`);

--
-- Indeks untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_outlet`
--
ALTER TABLE `tb_outlet`
  MODIFY `id_outlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_paket`
--
ALTER TABLE `tb_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
