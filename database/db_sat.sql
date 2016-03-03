-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2016 at 11:19 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sat`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE IF NOT EXISTS `absensi` (
  `tgl_absensi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nim` varchar(20) NOT NULL,
  `id_mk` int(11) NOT NULL,
  `tgl_register` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_over_absen` tinyint(1) NOT NULL,
  `id_absen` int(11) NOT NULL,
  `tgl_tutor` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `mah_nim` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `angkatan` smallint(6) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` text NOT NULL,
  `is_penutor` tinyint(1) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_deleted_mhs` tinyint(1) NOT NULL,
  `deleted_at_mhs` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE IF NOT EXISTS `mata_kuliah` (
  `id_mk` int(11) NOT NULL,
  `nama_mk` varchar(100) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `deleted_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mengajar`
--

CREATE TABLE IF NOT EXISTS `mengajar` (
  `nim` varchar(20) NOT NULL,
  `id_mk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mengambil`
--

CREATE TABLE IF NOT EXISTS `mengambil` (
  `nim` varchar(20) NOT NULL,
  `id_mk` int(11) NOT NULL,
  `tgl_register` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_over` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id_mk`);

--
-- Indexes for table `mengajar`
--
ALTER TABLE `mengajar`
  ADD PRIMARY KEY (`nim`,`id_mk`);

--
-- Indexes for table `mengambil`
--
ALTER TABLE `mengambil`
  ADD PRIMARY KEY (`id_mk`,`tgl_register`,`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mengambil`
--
ALTER TABLE `mengambil`
  MODIFY `id_mk` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
