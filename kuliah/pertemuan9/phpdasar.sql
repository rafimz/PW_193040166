-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2020 pada 05.21
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `elektronik`
--

CREATE TABLE `elektronik` (
  `Id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `chipset` varchar(100) NOT NULL,
  `camera` varchar(100) NOT NULL,
  `baterai` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `elektronik`
--

INSERT INTO `elektronik` (`Id`, `type`, `chipset`, `camera`, `baterai`, `gambar`) VALUES
(1, 'Xiaomi Mi Mix 3 5G', 'Qualcomm SDM855 Snapdragon 855 (7 nm)', 'Dual 12 MP (lebar) + 12 MP (telefoto)', 'Li-Po 3800 mAh', '1.webp'),
(2, 'Xiaomi Mi 9', 'Qualcomm SDM855 Snapdragon 855 (7 nm)', 'Triple 48 MP + 16 MP + 12 MP', 'Li-Po 3300 mAh', '2.webp'),
(3, 'Xiaomi Mi 9 Explorer', 'Qualcomm SDM855 Snapdragon 855 (7 nm)', 'Triple 48 MP + 16 MP + 12 MP', 'Li-Po 3300 mAh', '3.webp'),
(4, 'Xiaomi Black Shark 2', '\"Qualcomm SDM855 Snapdragon 855 (7 nm)', 'Dual 48 MP + 12 MP', 'Li-Ion 4000 mAh', '4.webp'),
(5, 'Xiaomi Mi Mix 3', 'Qualcomm SDM660 Snapdragon 660 (14 nm)', 'Dual 12 MP + 12 MP', 'Li-Ion 3500 mAh', '5.webp'),
(6, 'Redmi K20 Pro (Xiaomi Mi 9T Pro)', 'Qualcomm SDM855 Snapdragon 855 (7 nm)', 'Triple 48 MP + 8 MP + 13 MP', 'Li-Po 4000 mAh', '6.webp'),
(7, 'Xiaomi Black Shark Helo', 'Qualcomm SDM845 Snapdragon 845 (10 nm)', 'Dual 12 MP + 20 MP', 'Li-Ion 4000 mAh', '7.webp'),
(8, ' Xiaomi Mi 8 Pro', 'Qualcomm SDM845 Snapdragon 845 (10 nm)', 'Dual 12 MP + 12 MP', 'Li-Po 3000 mAh', '8.webp'),
(9, 'Xiaomi Mi 8 Explorer Edition', 'Qualcomm SDM845 Snapdragon 845 (10 nm)', 'Dual 12 MP + 12 MP', 'Li-Po 3000 mAh', '9.webp'),
(10, 'Xiaomi Mi 8', 'Qualcomm SDM845 Snapdragon 845 (10 nm)', 'Dual 12 MP + 12 MP', 'Li-Po 3400 mAh', 'a.webp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Rafi MZ', '193040166', 'rafimz1234@gmail.com', 'teknik informatika', 'rafi.jpg'),
(2, 'R yusuf R', '193040168', 'ucup123@gmail.com', 'teknik mesin', 'ucup.jpg'),
(3, 'Alief F', '193040158', 'alip123@gmail.com', 'Teknik Pangan', 'alip.jpg'),
(4, 'Ujang F', '193040174', 'ujang123@gmail.com', 'PWK', 'ujang.jpg'),
(5, 'Busro T', '193040148', 'busro123@gmail.com', 'Teknik Informatika', 'busro.jpg'),
(6, 'Kevin F', '193040163', 'kevin123@gmail.com', 'PWK', 'kevin.jpg'),
(7, 'Rifqi M', '193040149', 'rifqy123@gmail.com', 'Teknik Mesin', 'rifqi.jpg'),
(8, 'Cahyadi I', '193040155', 'ipan123@gmail.com', 'Teknik Pangan', 'ipan.jpg'),
(9, 'Hermawan A', '193040161', 'hermawan123@gmail.com', 'Teknik Industri', 'mawan.jpg'),
(10, 'Ferdi YN', '193040151', 'ferdi123@gmail.com', 'Teknik Industri', 'ferdi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
