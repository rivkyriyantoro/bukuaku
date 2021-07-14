-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 04:42 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukuaku`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukuaku`
--

CREATE TABLE `bukuaku` (
  `id` int(11) NOT NULL,
  `nama_buku` varchar(50) NOT NULL,
  `kategori_buku` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `diskon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bukuaku`
--

INSERT INTO `bukuaku` (`id`, `nama_buku`, `kategori_buku`, `penerbit`, `harga`, `diskon`) VALUES
(6, 'ngell', 'novel', 'koaseng', 70000, '7000'),
(7, 'cinta', 'novel', 'PT baru jaya', 120000, '12000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukuaku`
--
ALTER TABLE `bukuaku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukuaku`
--
ALTER TABLE `bukuaku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
