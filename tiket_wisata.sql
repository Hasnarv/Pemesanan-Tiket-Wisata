-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 03:58 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket_wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_wisata`
--

CREATE TABLE `daftar_wisata` (
  `id` int(11) NOT NULL,
  `tempat_wisata` varchar(255) DEFAULT NULL,
  `doc` varchar(255) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_wisata`
--

INSERT INTO `daftar_wisata` (`id`, `tempat_wisata`, `doc`, `harga`) VALUES
(1, 'Pantai Alam Indah (PAI)', 'pantai.jpg', 15000),
(2, 'Musium Situs Semedo', 'musium.jpeg', 10000),
(3, 'Taman Pancasila', 'taman_pancasila.jpg', 5000),
(4, 'Profil Pantai Alam Indah (PAI)', 'https://www.youtube.com/embed/watch?v=WP_O-pOx9Dg', 15000),
(5, 'Profil Musium Situs Semedo', 'https://www.youtube.com/embed/watch?v=NxK6WX9VOyA', 10000),
(6, 'Profil Taman Pancasila', 'https://www.youtube.com/embed/watch?v=cdoxOb8Aylg', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `no_id` int(11) DEFAULT NULL,
  `no_hp` int(12) DEFAULT NULL,
  `tempat_wisata` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `pengunjung_dewasa` int(11) DEFAULT NULL,
  `pengunjung_anak` int(11) DEFAULT NULL,
  `harga_tiket` int(11) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_wisata`
--
ALTER TABLE `daftar_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_wisata`
--
ALTER TABLE `daftar_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
