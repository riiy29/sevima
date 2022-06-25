-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 08:27 PM
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
-- Database: `sevima_buchoridb`
--

-- --------------------------------------------------------

--
-- Table structure for table `sevima_jurusan`
--

CREATE TABLE `sevima_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(256) NOT NULL,
  `diinput_tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sevima_jurusan`
--

INSERT INTO `sevima_jurusan` (`id_jurusan`, `nama_jurusan`, `diinput_tgl`) VALUES
(3, 'Programmer', '2022-06-25'),
(4, 'Teknik Elektro', '2022-06-25'),
(5, 'Desain Grafis', '2022-06-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sevima_jurusan`
--
ALTER TABLE `sevima_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sevima_jurusan`
--
ALTER TABLE `sevima_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
