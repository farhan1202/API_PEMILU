-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Agu 2020 pada 15.46
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebook`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_candidate`
--

CREATE TABLE `tb_candidate` (
  `id` int(11) NOT NULL,
  `nobp_candidate` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `profile_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_candidate`
--

INSERT INTO `tb_candidate` (`id`, `nobp_candidate`, `nama`, `jurusan`, `keterangan`, `date`, `profile_image`) VALUES
(24, '1701081001', 'Hidayatul Fadhilah', 'Teknik Komputer', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur nostrum odio laborum laboriosam iste. Assumenda cupiditate unde, totam placeat nobis dolorum! Autem ratione quia tempora. Aspernatur nemo velit ut ullam.', '2020-08-19 15:44:56', 'image/nama1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_result`
--

CREATE TABLE `tb_result` (
  `id` int(11) NOT NULL,
  `nobp_candidate` varchar(15) NOT NULL,
  `jumlah_suara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_result`
--

INSERT INTO `tb_result` (`id`, `nobp_candidate`, `jumlah_suara`) VALUES
(11, '1701081001', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_status`
--

CREATE TABLE `tb_status` (
  `no` int(11) NOT NULL,
  `idcard` varchar(20) NOT NULL,
  `idfinger` varchar(11) NOT NULL,
  `nobp` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `ket` varchar(20) NOT NULL,
  `ket1` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_status`
--

INSERT INTO `tb_status` (`no`, `idcard`, `idfinger`, `nobp`, `date`, `ket`, `ket1`, `status`) VALUES
(14, '8E:0B:69:2F', '28', '1701082026', '2020-08-14 17:28:05', '1', '0', '0'),
(15, '27', '27', '1701082012', '2020-08-19 12:03:31', '1', '1', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nobp` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nobp`, `password`, `nama`, `token`) VALUES
(14, '1701082026', 'f90b2b6ba6fce2888ad2094d5848192b', 'Resti Pebriani', 'QjHskd00jfst23ae2x4k85hi93Qg3t'),
(15, '1701082012', '7b8d7b98dbca7e1b3e3cdc7d82ce0ccf', 'Farhan Hafifi', 'iVpTHafPdY0fONufa42spW2YWJ2Iu3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_candidate`
--
ALTER TABLE `tb_candidate`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_result`
--
ALTER TABLE `tb_result`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_candidate`
--
ALTER TABLE `tb_candidate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_result`
--
ALTER TABLE `tb_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
