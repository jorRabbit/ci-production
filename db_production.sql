-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2019 at 09:22 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_production`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbu_level`
--

CREATE TABLE `tbu_level` (
  `id_level` int(11) NOT NULL,
  `kode_level` varchar(3) NOT NULL,
  `nama_level` varchar(36) NOT NULL,
  `id_user_created` int(11) NOT NULL,
  `date_created_level` datetime NOT NULL DEFAULT current_timestamp(),
  `date_update_level` datetime DEFAULT NULL,
  `date_delete_level` enum('Y','N') DEFAULT NULL,
  `user_insert` enum('Y','N') NOT NULL DEFAULT 'N',
  `user_view` enum('Y','N') NOT NULL DEFAULT 'N',
  `user_edit` enum('Y','N') DEFAULT 'N',
  `user_delete` enum('Y','N') NOT NULL DEFAULT 'N',
  `request_insert` enum('Y','N') NOT NULL DEFAULT 'N',
  `request_view` enum('Y','N') NOT NULL DEFAULT 'N',
  `request_edit` enum('Y','N') NOT NULL DEFAULT 'N',
  `request_delete` enum('Y','N') NOT NULL DEFAULT 'N',
  `level_insert` enum('Y','N') NOT NULL DEFAULT 'N',
  `level_view` enum('Y','N') NOT NULL DEFAULT 'N',
  `level_edit` enum('Y','N') NOT NULL DEFAULT 'N',
  `level_delete` enum('Y','N') NOT NULL DEFAULT 'N',
  `diskusi_insert` enum('Y','N') NOT NULL DEFAULT 'N',
  `diskusi_view` enum('Y','N') NOT NULL DEFAULT 'N',
  `diskusi_edit` enum('Y','N') NOT NULL DEFAULT 'N',
  `diskusi_delete` enum('Y','N') NOT NULL DEFAULT 'N',
  `diskusi_child_insert` enum('Y','N') NOT NULL DEFAULT 'N',
  `diskusi_child_view` enum('Y','N') NOT NULL DEFAULT 'N',
  `diskusi_child_edit` enum('Y','N') NOT NULL DEFAULT 'N',
  `diskusi_child_delete` enum('Y','N') NOT NULL DEFAULT 'N',
  `request_child_insert` enum('Y','N') NOT NULL DEFAULT 'N',
  `request_child_view` enum('Y','N') NOT NULL DEFAULT 'N',
  `request_child_edit` enum('Y','N') NOT NULL DEFAULT 'N',
  `request_child_delete` enum('Y','N') NOT NULL DEFAULT 'N',
  `produk_insert` enum('Y','N') NOT NULL DEFAULT 'N',
  `produk_view` enum('Y','N') NOT NULL DEFAULT 'N',
  `produk_edit` enum('Y','N') NOT NULL DEFAULT 'N',
  `produk_delete` enum('Y','N') NOT NULL DEFAULT 'N',
  `event_insert` enum('Y','N') NOT NULL DEFAULT 'N',
  `event_view` enum('Y','N') NOT NULL DEFAULT 'N',
  `event_edit` enum('Y','N') NOT NULL DEFAULT 'N',
  `event_delete` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbu_level`
--

INSERT INTO `tbu_level` (`id_level`, `kode_level`, `nama_level`, `id_user_created`, `date_created_level`, `date_update_level`, `date_delete_level`, `user_insert`, `user_view`, `user_edit`, `user_delete`, `request_insert`, `request_view`, `request_edit`, `request_delete`, `level_insert`, `level_view`, `level_edit`, `level_delete`, `diskusi_insert`, `diskusi_view`, `diskusi_edit`, `diskusi_delete`, `diskusi_child_insert`, `diskusi_child_view`, `diskusi_child_edit`, `diskusi_child_delete`, `request_child_insert`, `request_child_view`, `request_child_edit`, `request_child_delete`, `produk_insert`, `produk_view`, `produk_edit`, `produk_delete`, `event_insert`, `event_view`, `event_edit`, `event_delete`) VALUES
(8, 'ADM', 'ADMIN', 1, '2019-11-24 02:29:21', NULL, NULL, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(9, 'PRD', 'PROD', 1, '2019-11-24 02:29:30', NULL, NULL, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(14, 'USR', 'END-USER', 1, '2019-11-26 11:44:40', NULL, NULL, 'Y', 'Y', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N'),
(15, 'SPV', 'END-SPV', 1, '2019-11-27 09:21:00', NULL, NULL, 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbu_user`
--

CREATE TABLE `tbu_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(60) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(256) NOT NULL,
  `kode_level` varchar(3) NOT NULL,
  `status_aktif` enum('Y','N') NOT NULL,
  `email` varchar(60) NOT NULL,
  `date_created_user` datetime NOT NULL,
  `date_update_user` datetime NOT NULL,
  `date_delete_user` datetime NOT NULL,
  `id_user_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbu_user`
--

INSERT INTO `tbu_user` (`id_user`, `nama_lengkap`, `username`, `password`, `kode_level`, `status_aktif`, `email`, `date_created_user`, `date_update_user`, `date_delete_user`, `id_user_created`) VALUES
(1, 'Athaya Wangsa', 'Wangsa', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'ADM', 'Y', 'dhesuhendra@gmail.com', '2019-11-19 00:00:00', '2019-11-26 14:02:53', '2019-11-19 00:00:00', '0000-00-00 00:00:00'),
(4, 'Purwanto KUNS', 'Purwanto', '$2y$10$Nni5knMWl5I/J11nhKd44exXg6WeDWVHNoC1sIqwn488ljevXb/.C', 'USR', 'Y', 'Purwan@pur.com', '2019-11-22 17:57:41', '2019-11-26 11:44:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Purwanto', 'Dede', '$2y$10$1NKqijoAHBlxrDVWwv0VnugsXSIaNFuQ71HeDBlen0nvEoYBRJs7m', 'ADM', 'Y', 'englishnow1asdf@asdfdf.com', '2019-11-23 15:54:06', '2019-11-28 11:31:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Saeful Mahmud', 'Saeful', '$2y$10$h34rkEa8BjlHP9JAuc6zwe797xWzVu2O0Y3ImoAIw0Ksvn9Rx5Y9K', 'USR', 'Y', 'saeful@mahmud.com', '2019-11-24 01:38:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_diskusi`
--

CREATE TABLE `tb_diskusi` (
  `id_diskusi` int(11) NOT NULL,
  `id_request_child` int(11) NOT NULL,
  `id_user_create_diskusi` int(11) NOT NULL,
  `status_diskusi` enum('W','Y') NOT NULL DEFAULT 'W',
  `date_created_diskusi` datetime NOT NULL DEFAULT current_timestamp(),
  `date_update_diskusi` datetime NOT NULL,
  `date_delete_diskusi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_diskusi`
--

INSERT INTO `tb_diskusi` (`id_diskusi`, `id_request_child`, `id_user_create_diskusi`, `status_diskusi`, `date_created_diskusi`, `date_update_diskusi`, `date_delete_diskusi`) VALUES
(1, 1, 1, 'Y', '2019-11-25 10:38:30', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 5, 1, 'Y', '2019-11-25 10:46:40', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 4, 1, 'W', '2019-11-28 08:14:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 3, 1, 'Y', '2019-11-28 08:45:32', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_diskusi_child`
--

CREATE TABLE `tb_diskusi_child` (
  `id_diskusi_child` int(11) NOT NULL,
  `id_diskusi` int(11) NOT NULL,
  `komentar` text NOT NULL,
  `photo_diskusi_child` varchar(120) DEFAULT NULL,
  `subject` varchar(36) NOT NULL,
  `id_user_create_diskusi_child` int(11) NOT NULL,
  `date_created_diskusi_child` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_diskusi_child`
--

INSERT INTO `tb_diskusi_child` (`id_diskusi_child`, `id_diskusi`, `komentar`, `photo_diskusi_child`, `subject`, `id_user_create_diskusi_child`, `date_created_diskusi_child`) VALUES
(1, 1, 'ASDFMBASKDFADS GASG', '0', 'AKJSDNKDASBFJKADSBG', 1, '2019-11-25 10:38:30'),
(2, 2, 'AFMKBGKMNG', '0', 'AJSORRRRR', 1, '2019-11-25 10:46:40'),
(3, 2, 'BWERLJKFHLKNF', '0', 'BELA', 1, '2019-11-26 05:37:28'),
(4, 2, 'OKJGOJKFLKJLFJLJFJKL', '0', 'MWRELKGLKJF', 1, '2019-11-26 05:37:46'),
(5, 1, 'PURWANTO', '0', 'PURWANTO', 4, '2019-11-26 05:46:18'),
(6, 1, 'PURWNTOOO', '0', 'PURWANTOOOOOOO', 4, '2019-11-26 05:46:29'),
(7, 1, 'asdfdasfsadf', NULL, 'aesfddsagf', 1, '2019-11-27 09:32:48'),
(8, 1, 'asgdasfsafds', NULL, 'agsdsf', 1, '2019-11-27 09:41:04'),
(9, 1, 'S', NULL, 'fx', 1, '2019-11-27 09:54:52'),
(10, 1, 'DSFS', NULL, 'DFGH', 1, '2019-11-27 09:59:34'),
(11, 1, 'ASDASFASF', NULL, 'AFASDF', 1, '2019-11-27 12:41:56'),
(12, 1, 'ADGGGG', NULL, 'ASDFFFffff', 1, '2019-11-27 12:53:39'),
(13, 1, 'asgdasfadsdfdasfdasf', NULL, 'sagasfgadsfdasfadsf', 1, '2019-11-27 12:54:33'),
(14, 1, 'SDGFDSGFDGFDSG', NULL, 'DHSDGDFGDFG', 1, '2019-11-27 13:08:37'),
(15, 1, 'SDFHGFDHSDFG', NULL, 'SDGSDGDSFGGHD', 1, '2019-11-27 13:10:19'),
(16, 1, 'ASDGASKJNGMASNGMKADSNF', NULL, 'KJAKGNASDKNGMASNA', 1, '2019-11-27 13:11:50'),
(17, 1, 'ASDFSAGHTTDSGSDFG', '17.jpg', 'TSHSDGSDFG', 1, '2019-11-27 13:12:34'),
(18, 1, 'ASLKGHKADSJGASG', '18.jpg', 'LKSNGRKLNALG', 1, '2019-11-27 13:13:49'),
(19, 1, 'BEGOIOO', '19.jpg', 'BEGK', 1, '2019-11-27 13:14:52'),
(20, 1, 'asfgasgasfg', NULL, 'arsgasgasg', 1, '2019-11-27 13:19:47'),
(21, 3, 'AFKJHFKJKFFJKJF', NULL, 'BAOKK', 1, '2019-11-28 08:14:07'),
(22, 4, 'asdfgdasgasg', NULL, 'asgdasgasdgadsg', 1, '2019-11-28 08:45:32');

-- --------------------------------------------------------

--
-- Table structure for table `tb_event`
--

CREATE TABLE `tb_event` (
  `id_event` int(11) NOT NULL,
  `kode_event` varchar(20) NOT NULL,
  `nama_event` varchar(60) NOT NULL,
  `date_start_event` datetime NOT NULL,
  `date_end_event` datetime NOT NULL,
  `pic_event` varchar(10) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_update` datetime NOT NULL,
  `date_delete` datetime NOT NULL,
  `id_user_create_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_event`
--

INSERT INTO `tb_event` (`id_event`, `kode_event`, `nama_event`, `date_start_event`, `date_end_event`, `pic_event`, `date_created`, `date_update`, `date_delete`, `id_user_create_event`) VALUES
(1, 'T-SEL', 'TELKOMSEL', '2019-11-28 00:00:00', '2019-11-29 00:00:00', 'YULI', '2019-11-24 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, 'GOJS', 'BNILIFE', '2019-11-04 00:00:00', '2019-11-14 00:00:00', 'PURWANT', '2019-11-24 19:39:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(4, 'BNI', 'BNI DESEMBER 2019', '2019-11-15 00:00:00', '2019-11-22 00:00:00', 'DIKA', '2019-11-25 09:05:54', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `kode_produk` varchar(12) NOT NULL,
  `nama_produk` varchar(36) NOT NULL,
  `id_user_create_produk` int(11) NOT NULL,
  `date_created_produk` datetime NOT NULL,
  `date_update_produk` datetime NOT NULL,
  `date_delete_produk` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `kode_produk`, `nama_produk`, `id_user_create_produk`, `date_created_produk`, `date_update_produk`, `date_delete_produk`) VALUES
(1, 'BAN', 'BANNER 3X4', 1, '2019-11-24 15:17:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'TOPI', 'TOPI SABLON', 1, '2019-11-24 16:12:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'JAKET', 'JAKET SABLON ', 1, '2019-11-24 16:12:23', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'TAS', 'TAS RANSEL', 1, '2019-11-24 16:12:35', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'BUKU', 'BUKU NIKAH', 1, '2019-11-24 16:12:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'KAOS', 'KAOS OBLONG', 1, '2019-11-25 03:03:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_request`
--

CREATE TABLE `tb_request` (
  `id_request` int(11) NOT NULL,
  `date_dateline` datetime NOT NULL,
  `date_created_request` datetime NOT NULL,
  `date_update_request` datetime NOT NULL,
  `date_delete_request` datetime NOT NULL,
  `keterangan` text NOT NULL,
  `status_request` enum('W','Y') NOT NULL DEFAULT 'W',
  `id_user_created` datetime NOT NULL,
  `id_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_request`
--

INSERT INTO `tb_request` (`id_request`, `date_dateline`, `date_created_request`, `date_update_request`, `date_delete_request`, `keterangan`, `status_request`, `id_user_created`, `id_event`) VALUES
(3, '2019-11-04 00:00:00', '2019-11-25 04:57:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'BANGMBLGNF', 'W', '0000-00-00 00:00:00', 4),
(4, '2019-11-06 00:00:00', '2019-11-25 10:46:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'BJULKJGNMG', 'W', '0000-00-00 00:00:00', 1),
(5, '2019-11-27 00:00:00', '2019-11-28 04:45:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'TELKOMSEL TRIP', 'W', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_request_child`
--

CREATE TABLE `tb_request_child` (
  `id_request_child` int(11) NOT NULL,
  `id_request` int(11) NOT NULL,
  `kode_produk` varchar(12) NOT NULL,
  `status_request_child` enum('W','Y') NOT NULL DEFAULT 'W',
  `date_created_request_child` datetime NOT NULL,
  `date_update_request_child` datetime NOT NULL,
  `date_delete_request_child` datetime NOT NULL,
  `id_user_request_child` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_request_child`
--

INSERT INTO `tb_request_child` (`id_request_child`, `id_request`, `kode_produk`, `status_request_child`, `date_created_request_child`, `date_update_request_child`, `date_delete_request_child`, `id_user_request_child`) VALUES
(1, 3, 'JAKET', 'W', '2019-11-25 04:57:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(3, 4, 'JAKET', 'W', '2019-11-25 10:46:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(4, 4, 'KAOS', 'W', '2019-11-25 10:46:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(5, 4, 'TAS', 'W', '2019-11-25 10:46:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(6, 5, 'BAN', 'W', '2019-11-28 04:45:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(7, 5, 'BUKU', 'W', '2019-11-28 04:45:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbu_level`
--
ALTER TABLE `tbu_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tbu_user`
--
ALTER TABLE `tbu_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_diskusi`
--
ALTER TABLE `tb_diskusi`
  ADD PRIMARY KEY (`id_diskusi`);

--
-- Indexes for table `tb_diskusi_child`
--
ALTER TABLE `tb_diskusi_child`
  ADD PRIMARY KEY (`id_diskusi_child`);

--
-- Indexes for table `tb_event`
--
ALTER TABLE `tb_event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_request`
--
ALTER TABLE `tb_request`
  ADD PRIMARY KEY (`id_request`);

--
-- Indexes for table `tb_request_child`
--
ALTER TABLE `tb_request_child`
  ADD PRIMARY KEY (`id_request_child`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbu_level`
--
ALTER TABLE `tbu_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbu_user`
--
ALTER TABLE `tbu_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_diskusi`
--
ALTER TABLE `tb_diskusi`
  MODIFY `id_diskusi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_diskusi_child`
--
ALTER TABLE `tb_diskusi_child`
  MODIFY `id_diskusi_child` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_event`
--
ALTER TABLE `tb_event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_request`
--
ALTER TABLE `tb_request`
  MODIFY `id_request` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_request_child`
--
ALTER TABLE `tb_request_child`
  MODIFY `id_request_child` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
