-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 01:46 AM
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
  `id_jurusan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `keterangan` varchar(256) NOT NULL,
  `tgl_absen` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sevima_absen`
--

INSERT INTO `sevima_absen` (`id_absen`, `id_jurusan`, `id_user`, `keterangan`, `tgl_absen`) VALUES
(1, 4, 3, 'Masuk', '2022-06-26'),
(2, 4, 3, 'izin', '2022-06-25');

-- --------------------------------------------------------

--
-- Table structure for table `sevima_buku`
--

CREATE TABLE `sevima_buku` (
  `id_buku` int(12) NOT NULL,
  `nama_buku` varchar(256) NOT NULL,
  `desc_buku` text NOT NULL,
  `file_buku` varchar(256) NOT NULL,
  `diinput_tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sevima_buku`
--

INSERT INTO `sevima_buku` (`id_buku`, `nama_buku`, `desc_buku`, `file_buku`, `diinput_tgl`) VALUES
(1, 'Programmer', 'sadasdasdasd', 'http://localhost:8080/assets/img/cover-buku46230214e682612df7af918d4df855e1.pdf', '2022-06-25'),
(2, 'DKV', 'sadasdasdasd', 'http://localhost:8080/assets/img/cover-buku46230214e682612df7af918d4df855e1.pdf', '2022-06-25');

-- --------------------------------------------------------

--
-- Table structure for table `sevima_guru`
--

CREATE TABLE `sevima_guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(256) NOT NULL,
  `hak_akses` int(16) NOT NULL DEFAULT 2,
  `id_jurusan` int(11) NOT NULL,
  `no_wa` varchar(256) NOT NULL,
  `diinput_tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sevima_guru`
--

INSERT INTO `sevima_guru` (`id_guru`, `nama_guru`, `hak_akses`, `id_jurusan`, `no_wa`, `diinput_tgl`) VALUES
(1, 'Eka Dwi', 2, 3, '+6289767678989', NULL),
(2, 'Egi Aprilianto', 2, 4, '+657327322323', '2022-06-25');

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

-- --------------------------------------------------------

--
-- Table structure for table `sevima_pelajaran`
--

CREATE TABLE `sevima_pelajaran` (
  `id_pelajaran` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `nama_pelajaran` varchar(256) NOT NULL,
  `desc_pelajaran` varchar(256) NOT NULL,
  `modul_url` varchar(256) NOT NULL,
  `diinput_tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sevima_pelajaran`
--

INSERT INTO `sevima_pelajaran` (`id_pelajaran`, `id_guru`, `nama_pelajaran`, `desc_pelajaran`, `modul_url`, `diinput_tgl`) VALUES
(2, 2, 'Belajar Laravel', 'Belajar laravel 8', 'http://localhost:8080/assets/img/modul46230214e682612df7af918d4df855e1.pdf', '2022-06-25');

-- --------------------------------------------------------

--
-- Table structure for table `sevima_user`
--

CREATE TABLE `sevima_user` (
  `id_user` int(12) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `user_akses` int(11) NOT NULL COMMENT '1 = admin, 2 = guru, 3 = murid',
  `diperbarui_tgl` date DEFAULT NULL,
  `diinput_tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sevima_user`
--

INSERT INTO `sevima_user` (`id_user`, `nama`, `email`, `username`, `password`, `user_akses`, `diperbarui_tgl`, `diinput_tgl`) VALUES
(2, 'Buchori', 'admin@sevima.com', 'admin', 'd9d5fe9dc72b1a4b5b2bd3881052ec99', 1, NULL, NULL),
(3, 'Buchori', 'murid@sevima.com', 'murid', '0d8c9c7675d015befc4c43ed01bf6088', 3, NULL, NULL);

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
-- Dumping data for table `sevima_video`
--

INSERT INTO `sevima_video` (`id_video`, `id_pelajaran`, `nama_video`, `url_video`, `diinput_tgl`) VALUES
(1, 2, 'Belajar Laravel', 'ytb_urlytb_urlytb_urlytb_url', '2022-06-25'),
(2, 2, 'Belajar Laravel', 'ytb_urlytb_urlytb_urlytb_url', '2022-06-26');

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
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sevima_buku`
--
ALTER TABLE `sevima_buku`
  MODIFY `id_buku` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sevima_guru`
--
ALTER TABLE `sevima_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sevima_jurusan`
--
ALTER TABLE `sevima_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sevima_pelajaran`
--
ALTER TABLE `sevima_pelajaran`
  MODIFY `id_pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sevima_user`
--
ALTER TABLE `sevima_user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sevima_video`
--
ALTER TABLE `sevima_video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
