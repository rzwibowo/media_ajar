-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 16 Mar 2017 pada 06.28
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medajar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_kuis`
--

CREATE TABLE `detail_kuis` (
  `id` int(11) NOT NULL,
  `soal` text NOT NULL,
  `pilihan_a` varchar(50) NOT NULL,
  `pilihan_b` varchar(50) NOT NULL,
  `pilihan_c` varchar(50) NOT NULL,
  `pilihan_d` varchar(50) NOT NULL,
  `jawaban` char(1) NOT NULL,
  `id_kuis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_kuis`
--

INSERT INTO `detail_kuis` (`id`, `soal`, `pilihan_a`, `pilihan_b`, `pilihan_c`, `pilihan_d`, `jawaban`, `id_kuis`) VALUES
(1, 'asdsds', 'xxxx', 'xxxx', 'xxxx', 'xxxx', 'a', 1),
(2, 'dfdf', '  xx    ', '  xx  ', '  xx  ', '  xx  ', 'c', 2),
(3, 'sdsds', '  xx', 'xx', 'xxx', 'xxx', 'b', 2),
(4, 'aaaaa', 'xxxxxxx', 'xxxxxxxxx', 'xxxxxxx', 'xxxxxxx', 'd', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuis`
--

CREATE TABLE `kuis` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kuis`
--

INSERT INTO `kuis` (`id`, `nama`) VALUES
(1, 'Jogja'),
(2, 'Jawa Timur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_prov` int(11) NOT NULL,
  `nama_prov` varchar(30) NOT NULL,
  `ibukota` varchar(30) NOT NULL,
  `jml_penduduk` int(11) NOT NULL,
  `luas_wilayah` int(11) NOT NULL,
  `rumah_adat` varchar(30) NOT NULL,
  `tari_adat` varchar(30) NOT NULL,
  `bhs_daerah` varchar(30) NOT NULL,
  `suku` varchar(30) NOT NULL,
  `gbr_baju_adat` varchar(100) NOT NULL,
  `gbr_rumah_adat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_prov`, `nama_prov`, `ibukota`, `jml_penduduk`, `luas_wilayah`, `rumah_adat`, `tari_adat`, `bhs_daerah`, `suku`, `gbr_baju_adat`, `gbr_rumah_adat`) VALUES
(1, 'Jambi', 'Sumatra', 3000, 3000, 'xxxxx', 'xxxxxxx', 'xxxxxx', 'xxxxxxxww', '', ''),
(3, 'Jambid', 'sdsd', 2, 2, 'Kraton', 'sdsds', 'Jawa', 'xxxxxxxww', '', ''),
(9, 'Jambi1', 'sdsd', 3, 3, 'dsdsd', 'sdsds', 'Jawa', 'xxxxxxxww', 'B20170310045851000000PM.png', 'R20170311101443000000AM.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'ngadimin', '5449ccea16d1cc73990727cd835e45b5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_kuis`
--
ALTER TABLE `detail_kuis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuis`
--
ALTER TABLE `kuis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_kuis`
--
ALTER TABLE `detail_kuis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kuis`
--
ALTER TABLE `kuis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_prov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
