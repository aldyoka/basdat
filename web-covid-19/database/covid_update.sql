-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jun 2020 pada 07.02
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid_update`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasus`
--

CREATE TABLE `kasus` (
  `id_kasus` int(11) NOT NULL,
  `jml_positif` int(11) NOT NULL,
  `jml_sembuh` int(11) NOT NULL,
  `jml_meninggal` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kasus`
--

INSERT INTO `kasus` (`id_kasus`, `jml_positif`, `jml_sembuh`, `jml_meninggal`, `id_provinsi`) VALUES
(1, 20, 17, 1, 1),
(2, 417, 148, 41, 2),
(3, 567, 267, 25, 3),
(4, 242, 12, 2, 4),
(5, 201, 111, 1, 5),
(6, 212, 64, 3, 6),
(7, 90, 53, 4, 7),
(8, 30, 9, 5, 8),
(9, 100, 45, 6, 9),
(10, 29, 10, 0, 10),
(11, 189, 98, 2, 11),
(12, 200, 25, 3, 12),
(13, 4200, 1200, 40, 13),
(14, 204, 15, 6, 14),
(15, 520, 157, 3, 15),
(16, 232, 167, 2, 16),
(17, 235, 187, 10, 17),
(18, 220, 197, 9, 18),
(19, 240, 97, 11, 19),
(20, 250, 37, 12, 20),
(21, 190, 53, 10, 21),
(22, 276, 67, 23, 22),
(23, 123, 99, 42, 23),
(24, 321, 176, 59, 24),
(25, 421, 143, 76, 25),
(26, 231, 90, 12, 26),
(27, 126, 100, 32, 27),
(28, 98, 42, 15, 28),
(29, 125, 41, 24, 29),
(30, 165, 91, 29, 30),
(31, 432, 267, 53, 31),
(32, 132, 89, 35, 32),
(33, 232, 132, 55, 33),
(34, 239, 112, 15, 34);

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'Aceh'),
(2, 'Sumatra Utara'),
(3, 'Sumatra Barat'),
(4, 'Riau'),
(5, 'Kepulauan Riau'),
(6, 'Jambi'),
(7, 'Bengkulu'),
(8, 'Sumatera Selatan'),
(9, 'Kepulauan Bangka Belitung'),
(10, 'Lampung'),
(11, 'Banten'),
(12, 'Jawa Barat'),
(13, 'Jakarta'),
(14, 'Jawa Tengah'),
(15, 'Yogyakarta'),
(16, 'Jawa Timur'),
(17, 'Bali'),
(18, 'Nusa Tenggara Barat'),
(19, 'Nusa Tenggara Timur'),
(20, 'Kalimantan Barat'),
(21, 'Kalimantan Selatan'),
(22, 'Kalimantan Tengah'),
(23, 'Kalimantan Timur'),
(24, 'Kalimantan Utara'),
(25, 'Gorontalo'),
(26, 'Sulawesi Barat'),
(27, 'Sulawesi Selatan'),
(28, 'Sulawesi Tengah'),
(29, 'Sulawesi Tenggara'),
(30, 'Sulawesi Utara'),
(31, 'Maluku'),
(32, 'Maluku Utara'),
(33, 'Papua Barat'),
(34, 'Papua');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kasus`
--
ALTER TABLE `kasus`
  ADD PRIMARY KEY (`id_kasus`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kasus`
--
ALTER TABLE `kasus`
  MODIFY `id_kasus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kasus`
--
ALTER TABLE `kasus`
  ADD CONSTRAINT `kasus_ibfk_1` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id_provinsi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
