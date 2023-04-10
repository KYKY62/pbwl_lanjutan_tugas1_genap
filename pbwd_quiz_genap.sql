-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Apr 2023 pada 13.17
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
-- Database: `pbwd_quiz_genap`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_album`
--

CREATE TABLE `tb_album` (
  `alb_id` int(11) NOT NULL,
  `alb_id_artist` int(11) NOT NULL,
  `alb_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_album`
--

INSERT INTO `tb_album` (`alb_id`, `alb_id_artist`, `alb_name`) VALUES
(1, 1, 'Arabian Night'),
(2, 1, 'Go'),
(3, 2, 'Bintang Kejora');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_artist`
--

CREATE TABLE `tb_artist` (
  `art_id` int(11) NOT NULL,
  `art_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_artist`
--

INSERT INTO `tb_artist` (`art_id`, `art_name`) VALUES
(1, 'One Direction'),
(2, 'Starla'),
(4, 'Slank');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_played`
--

CREATE TABLE `tb_played` (
  `ply_id` int(11) NOT NULL,
  `ply_id_track` int(11) NOT NULL,
  `ply_played` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_played`
--

INSERT INTO `tb_played` (`ply_id`, `ply_id_track`, `ply_played`) VALUES
(4, 3, '2023-04-09 23:11:13'),
(5, 34, '2023-04-10 10:56:01'),
(6, 2, '2023-04-10 10:56:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_track`
--

CREATE TABLE `tb_track` (
  `trc_id` int(11) NOT NULL,
  `trc_name` varchar(100) NOT NULL,
  `trc_id_album` int(11) NOT NULL,
  `time` decimal(4,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_track`
--

INSERT INTO `tb_track` (`trc_id`, `trc_name`, `trc_id_album`, `time`) VALUES
(1, 'Ohio Conser', 1, '12'),
(2, 'Favorite', 1, '22'),
(3, 'i love this song', 2, '12'),
(21, 'Yang ini bisa?', 2, '11'),
(33, 'sudah ya?', 2, '12'),
(34, 'bisa nya?', 2, '3'),
(81, 'sudah', 2, '21'),
(82, 'tesss', 1, '12'),
(86, 'gaka', 1, '12'),
(87, 'gakaas', 1, '4');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_album`
--
ALTER TABLE `tb_album`
  ADD PRIMARY KEY (`alb_id`),
  ADD KEY `alb_id_artist` (`alb_id_artist`);

--
-- Indeks untuk tabel `tb_artist`
--
ALTER TABLE `tb_artist`
  ADD PRIMARY KEY (`art_id`);

--
-- Indeks untuk tabel `tb_played`
--
ALTER TABLE `tb_played`
  ADD PRIMARY KEY (`ply_id`),
  ADD KEY `ply_id_track` (`ply_id_track`);

--
-- Indeks untuk tabel `tb_track`
--
ALTER TABLE `tb_track`
  ADD PRIMARY KEY (`trc_id`),
  ADD KEY `trc_id_album` (`trc_id_album`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_album`
--
ALTER TABLE `tb_album`
  MODIFY `alb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_artist`
--
ALTER TABLE `tb_artist`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_played`
--
ALTER TABLE `tb_played`
  MODIFY `ply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_track`
--
ALTER TABLE `tb_track`
  MODIFY `trc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_album`
--
ALTER TABLE `tb_album`
  ADD CONSTRAINT `tb_album_ibfk_1` FOREIGN KEY (`alb_id_artist`) REFERENCES `tb_artist` (`art_id`);

--
-- Ketidakleluasaan untuk tabel `tb_played`
--
ALTER TABLE `tb_played`
  ADD CONSTRAINT `tb_played_ibfk_1` FOREIGN KEY (`ply_id_track`) REFERENCES `tb_track` (`trc_id`);

--
-- Ketidakleluasaan untuk tabel `tb_track`
--
ALTER TABLE `tb_track`
  ADD CONSTRAINT `tb_track_ibfk_1` FOREIGN KEY (`trc_id_album`) REFERENCES `tb_album` (`alb_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
