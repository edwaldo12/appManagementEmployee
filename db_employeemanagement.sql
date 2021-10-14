-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2021 at 05:46 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_employeemanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `jam_datang` date NOT NULL,
  `jam_pulang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `alasan` text NOT NULL,
  `jumlah_hari` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `jabatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `jabatan`) VALUES
(5, 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `password` text NOT NULL,
  `role` enum('Admin','Pegawai') NOT NULL,
  `status` enum('0','1') NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `password`, `role`, `status`, `id_jabatan`, `username`) VALUES
(2, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', '1', 1, 'admin'),
(3, 'Yohanes ', '72c95b42a8f3ec08fbb451756497d7e5a254675f', 'Pegawai', '1', 1, 'yohanes');

-- --------------------------------------------------------

--
-- Table structure for table `pengunduran_diri`
--

CREATE TABLE `pengunduran_diri` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `alasan` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `penugasan`
--

CREATE TABLE `penugasan` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tugas` text NOT NULL,
  `upload_tugas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `phk`
--

CREATE TABLE `phk` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `punishment`
--

CREATE TABLE `punishment` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `punishment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rekrutmen`
--

CREATE TABLE `rekrutmen` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `telepon` text NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` text NOT NULL,
  `warga_negara` text NOT NULL,
  `pendidikan_terakhir` text NOT NULL,
  `status_pernikahan` text NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `status_rekrutmen` enum('0','1','2') NOT NULL DEFAULT '0',
  `upload_cv` text NOT NULL,
  `id_pengguna` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekrutmen`
--

INSERT INTO `rekrutmen` (`id`, `nama`, `alamat`, `telepon`, `jenis_kelamin`, `tanggal_lahir`, `agama`, `warga_negara`, `pendidikan_terakhir`, `status_pernikahan`, `id_jabatan`, `status_rekrutmen`, `upload_cv`, `id_pengguna`) VALUES
(2, 'Yohanes ', 'Jalan Seduduk Merah', '0811711445566', 'L', '2001-04-24', 'Islam', 'Indonesia', '-', 'Belum Menikah', 1, '1', 'export-10_7_2021,_7_20_13_PM.pdf', 3);

-- --------------------------------------------------------

--
-- Table structure for table `reward`
--

CREATE TABLE `reward` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `reward` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengunduran_diri`
--
ALTER TABLE `pengunduran_diri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penugasan`
--
ALTER TABLE `penugasan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phk`
--
ALTER TABLE `phk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `punishment`
--
ALTER TABLE `punishment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekrutmen`
--
ALTER TABLE `rekrutmen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reward`
--
ALTER TABLE `reward`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengunduran_diri`
--
ALTER TABLE `pengunduran_diri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penugasan`
--
ALTER TABLE `penugasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phk`
--
ALTER TABLE `phk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `punishment`
--
ALTER TABLE `punishment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rekrutmen`
--
ALTER TABLE `rekrutmen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reward`
--
ALTER TABLE `reward`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
