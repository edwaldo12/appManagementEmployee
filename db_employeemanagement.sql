-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 05:54 AM
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
  `keterangan_waktu` date NOT NULL,
  `jam_datang` time DEFAULT NULL,
  `jam_pulang` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id`, `id_pengguna`, `keterangan_waktu`, `jam_datang`, `jam_pulang`) VALUES
(6, 2, '2021-12-01', '22:35:19', '23:16:06'),
(7, 2, '2021-12-14', '23:50:49', '23:50:51');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `alasan` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id`, `id_pengguna`, `tanggal_mulai`, `tanggal_selesai`, `alasan`, `file`) VALUES
(1, 4, '2021-11-15', '2021-11-22', 'Sakit', 'Surat_Keterangan_Cuti1.pdf'),
(2, 4, '2021-12-13', '2021-12-20', 'Berangkat', 'Surat_Keterangan_Cuti6.pdf');

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
(1, 'Staff'),
(2, 'Bengkel'),
(3, 'Gudang Material, Bangunan'),
(4, 'Keamanan'),
(5, 'Crumb A'),
(6, 'Crumb B'),
(7, 'Bongkar Slabs dan Lingkungan Hidup'),
(8, 'Blangket'),
(14, 'Supir');

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
(1, 'Admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', '1', 1, 'admin'),
(2, 'Yohanes', 'bb4a754c233192de7bcd540688f617730b79f08e', 'Pegawai', '1', 1, 'yohanes'),
(4, 'Jonathan', '3692bfa45759a67d83aedf0045f6cb635a966abf', 'Pegawai', '1', 6, 'jonathan'),
(6, 'Abi', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Pegawai', '1', 2, 'abi'),
(7, 'Bagas', '7cd6e3b4926614fd26f2e2ed70ee9cea47662c8f', 'Pegawai', '1', 14, 'bagas'),
(8, 'Budi', 'c4a683c78ef3829cd47a3b06dfc23db7344821f0', 'Pegawai', '1', 2, 'budi'),
(20, 'asdadad12313', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Pegawai', '1', 4, '1231312313');

-- --------------------------------------------------------

--
-- Table structure for table `pengunduran_diri`
--

CREATE TABLE `pengunduran_diri` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `upload_surat_pd` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengunduran_diri`
--

INSERT INTO `pengunduran_diri` (`id`, `id_pengguna`, `upload_surat_pd`, `file`) VALUES
(1, 2, 'Surat_Pengunduran_Diri1.pdf', 'Surat_Pengalaman_Kerja8.pdf'),
(2, 7, 'Surat_Pengunduran_Diri3.pdf', 'Surat_Pengalaman_Kerja7.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `phk`
--

CREATE TABLE `phk` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phk`
--

INSERT INTO `phk` (`id`, `id_pengguna`, `file`) VALUES
(1, 6, 'Surat_Pengalaman_Kerja2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `punishment`
--

CREATE TABLE `punishment` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `punishment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `punishment`
--

INSERT INTO `punishment` (`id`, `id_pengguna`, `punishment`) VALUES
(1, 6, 'Surat_Peringatan5.pdf'),
(2, 6, 'Surat_Peringatan6.pdf'),
(3, 7, 'Surat_Peringatan7.pdf');

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
(7, 'Jonathan', 'Jalan Veteran no 1', '081234567890', 'L', '2009-08-08', 'Kristen', 'Indonesia', 'SMA', 'Belum Menikah', 7, '1', 'cvcontoh1.pdf', 4),
(11, 'Abi', 'Jalan Tulip no 4', '082345678901', 'L', '2000-01-01', 'Islam', 'Indonesia', 'SMA', 'Belum Menikah', 1, '1', 'cvcontoh5.pdf', 6),
(12, 'Bagas', 'Jalan Mawar no 5', '083456789012', 'L', '2000-02-02', 'Budha', 'Indonesia', 'D1', 'Menikah', 14, '1', 'cvcontoh6.pdf', 7),
(13, 'Budi', 'Jln Rajawali', '0912324343', 'L', '2000-03-03', 'Islam', 'Indonesia', 'SMA', 'Belum Menikah', 2, '1', 'cvcontoh7.pdf', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `pengunduran_diri`
--
ALTER TABLE `pengunduran_diri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `phk`
--
ALTER TABLE `phk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `punishment`
--
ALTER TABLE `punishment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- Indexes for table `rekrutmen`
--
ALTER TABLE `rekrutmen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pengunduran_diri`
--
ALTER TABLE `pengunduran_diri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `phk`
--
ALTER TABLE `phk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `punishment`
--
ALTER TABLE `punishment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rekrutmen`
--
ALTER TABLE `rekrutmen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `absen_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cuti`
--
ALTER TABLE `cuti`
  ADD CONSTRAINT `cuti_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengunduran_diri`
--
ALTER TABLE `pengunduran_diri`
  ADD CONSTRAINT `pengunduran_diri_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phk`
--
ALTER TABLE `phk`
  ADD CONSTRAINT `phk_ibfk_1` FOREIGN KEY (`id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `punishment`
--
ALTER TABLE `punishment`
  ADD CONSTRAINT `punishment_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rekrutmen`
--
ALTER TABLE `rekrutmen`
  ADD CONSTRAINT `rekrutmen_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
