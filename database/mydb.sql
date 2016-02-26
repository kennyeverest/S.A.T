-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2016 at 09:23 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE IF NOT EXISTS `absen` (
  `tgl` timestamp(4) NOT NULL DEFAULT CURRENT_TIMESTAMP(4) ON UPDATE CURRENT_TIMESTAMP(4),
  `absen` tinyint(1) DEFAULT NULL,
  `mahasiswa_has_mata_kuliah_mahasiswa_nim` varchar(20) NOT NULL,
  `mahasiswa_has_mata_kuliah_mata_kuliah_id_mk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `nama_mhs` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_has_mata_kuliah`
--

CREATE TABLE IF NOT EXISTS `mahasiswa_has_mata_kuliah` (
  `mahasiswa_nim` varchar(20) NOT NULL,
  `mata_kuliah_id_mk` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah`
--

CREATE TABLE IF NOT EXISTS `mata_kuliah` (
  `id_mk` varchar(10) NOT NULL,
  `nama_mk` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mata_kuliah_has_penutor`
--

CREATE TABLE IF NOT EXISTS `mata_kuliah_has_penutor` (
  `mata_kuliah_id_mk` varchar(10) NOT NULL,
  `penutor_nim_penutor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `penutor`
--

CREATE TABLE IF NOT EXISTS `penutor` (
  `nim_penutor` varchar(20) NOT NULL,
  `nama_penutor` varchar(50) DEFAULT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penutor`
--

INSERT INTO `penutor` (`nim_penutor`, `nama_penutor`, `password`) VALUES
('081411631044', 'Kenny', 'ganteng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`tgl`,`mahasiswa_has_mata_kuliah_mahasiswa_nim`,`mahasiswa_has_mata_kuliah_mata_kuliah_id_mk`),
  ADD KEY `fk_absen_mahasiswa_has_mata_kuliah1_idx` (`mahasiswa_has_mata_kuliah_mahasiswa_nim`,`mahasiswa_has_mata_kuliah_mata_kuliah_id_mk`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `mahasiswa_has_mata_kuliah`
--
ALTER TABLE `mahasiswa_has_mata_kuliah`
  ADD PRIMARY KEY (`mahasiswa_nim`,`mata_kuliah_id_mk`),
  ADD KEY `fk_mahasiswa_has_mata_kuliah_mata_kuliah1_idx` (`mata_kuliah_id_mk`),
  ADD KEY `fk_mahasiswa_has_mata_kuliah_mahasiswa_idx` (`mahasiswa_nim`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id_mk`);

--
-- Indexes for table `mata_kuliah_has_penutor`
--
ALTER TABLE `mata_kuliah_has_penutor`
  ADD PRIMARY KEY (`mata_kuliah_id_mk`,`penutor_nim_penutor`),
  ADD KEY `fk_mata_kuliah_has_penutor_penutor1_idx` (`penutor_nim_penutor`),
  ADD KEY `fk_mata_kuliah_has_penutor_mata_kuliah1_idx` (`mata_kuliah_id_mk`);

--
-- Indexes for table `penutor`
--
ALTER TABLE `penutor`
  ADD PRIMARY KEY (`nim_penutor`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `fk_absen_mahasiswa_has_mata_kuliah1` FOREIGN KEY (`mahasiswa_has_mata_kuliah_mahasiswa_nim`, `mahasiswa_has_mata_kuliah_mata_kuliah_id_mk`) REFERENCES `mahasiswa_has_mata_kuliah` (`mahasiswa_nim`, `mata_kuliah_id_mk`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mahasiswa_has_mata_kuliah`
--
ALTER TABLE `mahasiswa_has_mata_kuliah`
  ADD CONSTRAINT `fk_mahasiswa_has_mata_kuliah_mahasiswa` FOREIGN KEY (`mahasiswa_nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mahasiswa_has_mata_kuliah_mata_kuliah1` FOREIGN KEY (`mata_kuliah_id_mk`) REFERENCES `mata_kuliah` (`id_mk`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mata_kuliah_has_penutor`
--
ALTER TABLE `mata_kuliah_has_penutor`
  ADD CONSTRAINT `fk_mata_kuliah_has_penutor_mata_kuliah1` FOREIGN KEY (`mata_kuliah_id_mk`) REFERENCES `mata_kuliah` (`id_mk`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mata_kuliah_has_penutor_penutor1` FOREIGN KEY (`penutor_nim_penutor`) REFERENCES `penutor` (`nim_penutor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
