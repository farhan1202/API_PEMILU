-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Agu 2020 pada 18.25
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
(13, '1701081000', 'Kevin Tanes', 'Teknik Sipil', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur nostrum odio laborum laboriosam iste. Assumenda cupiditate unde, totam placeat nobis dolorum! Autem ratione quia tempora. Aspernatur nemo velit ut ullam.', '2020-07-19 16:04:10', ''),
(14, '1701081001', 'Muhammad Lutfi', 'Teknik Electro', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur nostrum odio laborum laboriosam iste. Assumenda cupiditate unde, totam placeat nobis dolorum! Autem ratione quia tempora. Aspernatur nemo velit ut ullam.', '2020-07-19 16:17:35', ''),
(15, '1701081002', 'Jefri ', 'Teknik Electro', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur nostrum odio laborum laboriosam iste. Assumenda cupiditate unde, totam placeat nobis dolorum! Autem ratione quia tempora. Aspernatur nemo velit ut ullam.', '2020-07-19 16:21:03', ''),
(17, '1701081004', 'Hidayatul Fadhilah', 'Pariwisata', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur nostrum odio laborum laboriosam iste. Assumenda cupiditate unde, totam placeat nobis dolorum! Autem ratione quia tempora. Aspernatur nemo velit ut ullam.', '2020-08-10 10:33:04', ''),
(21, '1701081005', 'Irfan Kurniawan', 'Bahasa ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur nostrum odio laborum laboriosam iste. Assumenda cupiditate unde, totam placeat nobis dolorum! Autem ratione quia tempora. Aspernatur nemo velit ut ullam.', '2020-08-12 20:11:53', 'image/nama.jpg'),
(22, '1701081006', 'Irfan Kurniawan', 'Bahasa ', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur nostrum odio laborum laboriosam iste. Assumenda cupiditate unde, totam placeat nobis dolorum! Autem ratione quia tempora. Aspernatur nemo velit ut ullam.', '2020-08-12 20:43:18', 'image/person.jpg');

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
(2, '1701081000', 20),
(3, '1701081001', 2),
(4, '1701081002', 6),
(5, '1701081004', 6),
(9, '1701081005', 1),
(10, '1701081006', 0);

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
(1, '8E:0B:69:2Fz2', '20', 'yofran', '2020-07-04 12:25:43', '1', '1', '0'),
(2, '8E:0B:69:2Fz', '13', 'abet', '2020-06-09 13:18:26', '0', '0', '0'),
(3, '04:77:34:BA:1B:29:80', '1', 'haqi', '2020-06-01 15:10:54', '0', '0', '0'),
(4, '03:69:5D:1B', '17', 'rian', '2019-09-17 10:20:07', '0', '0', '0'),
(5, '93:6F:11:1A', '12', 'fajar', '2019-09-16 22:26:29', '0', '0', '0'),
(6, '0', '0', '1701082020', '0000-00-00 00:00:00', '0', '0', '0'),
(7, '0', '0', '1701081001', '2020-07-17 15:53:23', '0', '0', '0'),
(8, '0', '0', '1701081002', '2020-07-18 13:07:40', '0', '0', '0'),
(13, '0', '0', '1701082018', '2020-07-20 17:29:24', '1', '1', '0'),
(14, '8E:0B:69:2F', '28', '1701082026', '2020-08-14 17:28:05', '1', '0', '0'),
(15, '27', '27', '1701082012', '2020-08-14 17:27:55', '0', '1', '0'),
(16, '0', '0', '1701082013', '2020-08-12 20:55:21', '0', '0', '0');

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
(6, '1701082020', 'yggdrasill', 'ganteng', ''),
(7, '1701081001', 'ganteng', 'dede', ''),
(8, '1701081002', 'ganteng', 'dede', ''),
(13, '1701082018', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Hidayatul', '0Y320Jk89u0UWd3iu0f82mjg29lfIV'),
(14, '1701082026', 'f90b2b6ba6fce2888ad2094d5848192b', 'Resti Pebriani', 'QjHskd00jfst23ae2x4k85hi93Qg3t'),
(15, '1701082012', '7b8d7b98dbca7e1b3e3cdc7d82ce0ccf', 'Farhan Hafifi', 'gALdhrq3BBkk4Bk9h2u4pGdz4YXc2W');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tb_result`
--
ALTER TABLE `tb_result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
