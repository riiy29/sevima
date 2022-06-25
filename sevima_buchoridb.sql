-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2022 at 04:04 PM
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
-- Table structure for table `sevima_absen`
--

CREATE TABLE `sevima_absen` (
  `id_absen` int(11) NOT NULL,
  `hak_akses` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `diinput_tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sevima_buku`
--

CREATE TABLE `sevima_buku` (
  `id_buku` int(12) NOT NULL,
  `nama_buku` varchar(256) NOT NULL,
  `desc_buku` text NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `file_buku` varchar(256) NOT NULL,
  `diinput_tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sevima_guru`
--

CREATE TABLE `sevima_guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(256) NOT NULL,
  `hak_akses` int(16) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `diinput_tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sevima_jurusan`
--

CREATE TABLE `sevima_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(256) NOT NULL,
  `diinput_tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sevima_komentar`
--

CREATE TABLE `sevima_komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_video` int(11) NOT NULL,
  `isi_komentar` varchar(256) NOT NULL,
  `diinput_tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sevima_pelajaran`
--

CREATE TABLE `sevima_pelajaran` (
  `id_pelajaran` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `nama_pelajaran` varchar(256) NOT NULL,
  `desc_pelajaran` varchar(256) NOT NULL,
  `modul_url` varchar(256) NOT NULL,
  `diinput_tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sevima_user`
--

CREATE TABLE `sevima_user` (
  `id_user` int(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `user_akses` int(11) NOT NULL COMMENT '1 = admin, 2 = guru, 3 = murid',
  `diperbarui_tgl` date DEFAULT NULL,
  `diinput_tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sevima_video`
--

CREATE TABLE `sevima_video` (
  `id_video` int(11) NOT NULL,
  `id_pelajaran` int(11) NOT NULL,
  `nama_video` varchar(256) NOT NULL,
  `url_video` varchar(256) NOT NULL COMMENT 'url_youtube',
  `diinput_tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sevima_absen`
--
ALTER TABLE `sevima_absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `sevima_buku`
--
ALTER TABLE `sevima_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `sevima_guru`
--
ALTER TABLE `sevima_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `sevima_jurusan`
--
ALTER TABLE `sevima_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `sevima_komentar`
--
ALTER TABLE `sevima_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `sevima_pelajaran`
--
ALTER TABLE `sevima_pelajaran`
  ADD PRIMARY KEY (`id_pelajaran`);

--
-- Indexes for table `sevima_user`
--
ALTER TABLE `sevima_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `sevima_video`
--
ALTER TABLE `sevima_video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sevima_absen`
--
ALTER TABLE `sevima_absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sevima_buku`
--
ALTER TABLE `sevima_buku`
  MODIFY `id_buku` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sevima_guru`
--
ALTER TABLE `sevima_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sevima_jurusan`
--
ALTER TABLE `sevima_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sevima_komentar`
--
ALTER TABLE `sevima_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sevima_pelajaran`
--
ALTER TABLE `sevima_pelajaran`
  MODIFY `id_pelajaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sevima_user`
--
ALTER TABLE `sevima_user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sevima_video`
--
ALTER TABLE `sevima_video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
