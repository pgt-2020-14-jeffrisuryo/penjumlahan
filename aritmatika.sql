-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 10:43 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aritmatika`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_aritmatika`
--

CREATE TABLE `db_aritmatika` (
  `id` int(11) NOT NULL,
  `nilai_a` double NOT NULL,
  `nilai_b` double NOT NULL,
  `nilai_c` varchar(10) NOT NULL,
  `keterangan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_aritmatika`
--

INSERT INTO `db_aritmatika` (`id`, `nilai_a`, `nilai_b`, `nilai_c`, `keterangan`) VALUES
(11, 40960, 81920, '81920', 'Nilai A'),
(13, 0, 0, '0', 'Nilai D'),
(14, 4, 8, '8', 'Nilai D'),
(15, 4, 8, '8', 'Nilai D'),
(16, 4, 8, '8', 'Nilai D'),
(17, 1024, 2048, '2048', 'Nilai A'),
(18, 1024, 2048, '2048', 'Nilai A'),
(19, 180, 360, '360', 'Nilai A'),
(20, 80, 160, '160', 'Nilai A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_aritmatika`
--
ALTER TABLE `db_aritmatika`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_aritmatika`
--
ALTER TABLE `db_aritmatika`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
