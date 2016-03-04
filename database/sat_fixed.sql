-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Mar 2016 pada 12.01
-- Versi Server: 5.6.21-log
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE IF NOT EXISTS `absen` (
  `Mengambil_Mahasiswa_nim` varchar(20) NOT NULL,
  `Mengambil_Mata_Kuliah_id_mk` int(11) NOT NULL,
  `Mengambil_tgl_register` datetime(6) NOT NULL,
  `Mahasiswa_nim` varchar(20) NOT NULL,
  `tgl_absen` datetime DEFAULT NULL,
  `is_over_absen` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `angkatan` int(11) DEFAULT NULL,
  `no_hp` varchar(12) DEFAULT NULL,
  `email` mediumtext,
  `password` varchar(100) DEFAULT NULL,
  `is_deleted_mhs` tinyint(1) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `is_penutor` tinyint(1) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `angkatan`, `no_hp`, `email`, `password`, `is_deleted_mhs`, `deleted_at`, `is_penutor`, `is_admin`) VALUES
('081411631044', 'Kenny Karnama', 2014, '082339081041', 'kennykarnama@gmail.com', NULL, 0, NULL, 0, 0),
('081411631050', 'Halimatuz Zuhriyah', 2014, '082339081041', 'kennykarnama@gmail.com', NULL, 0, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_kuliah`
--

CREATE TABLE IF NOT EXISTS `mata_kuliah` (
  `id_mk` int(11) NOT NULL DEFAULT '0',
  `nama_mk` varchar(100) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `mata_kuliah`
--

INSERT INTO `mata_kuliah` (`id_mk`, `nama_mk`, `is_deleted`, `deleted_at`) VALUES
(1, 'Kalkulus', 0, NULL),
(2, 'Struktur Data', 0, NULL),
(3, 'Matematika Diskrit', 0, NULL),
(4, 'Statistik Dasar', 0, NULL),
(5, 'Pemrograman Berorientasi Objek', 0, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_kuliah_has_penutor`
--

CREATE TABLE IF NOT EXISTS `mata_kuliah_has_penutor` (
  `Mata_Kuliah_id_mk` int(11) NOT NULL,
  `Penutor_Mahasiswa_nim` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `mata_kuliah_has_penutor`
--

INSERT INTO `mata_kuliah_has_penutor` (`Mata_Kuliah_id_mk`, `Penutor_Mahasiswa_nim`) VALUES
(5, '081411631044');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mengambil`
--

CREATE TABLE IF NOT EXISTS `mengambil` (
  `Mahasiswa_nim` varchar(20) NOT NULL,
  `Mata_Kuliah_id_mk` int(11) NOT NULL,
  `tgl_register` datetime NOT NULL,
  `is_over` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penutor`
--

CREATE TABLE IF NOT EXISTS `penutor` (
  `Mahasiswa_nim` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `penutor`
--

INSERT INTO `penutor` (`Mahasiswa_nim`) VALUES
('081411631044');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`Mengambil_Mahasiswa_nim`,`Mengambil_Mata_Kuliah_id_mk`,`Mengambil_tgl_register`),
  ADD KEY `fk_Absen_Mahasiswa1_idx` (`Mahasiswa_nim`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `mata_kuliah`
--
ALTER TABLE `mata_kuliah`
  ADD PRIMARY KEY (`id_mk`),
  ADD UNIQUE KEY `nama_mk` (`nama_mk`);

--
-- Indexes for table `mata_kuliah_has_penutor`
--
ALTER TABLE `mata_kuliah_has_penutor`
  ADD PRIMARY KEY (`Mata_Kuliah_id_mk`,`Penutor_Mahasiswa_nim`),
  ADD KEY `fk_Mata_Kuliah_has_Penutor_Penutor1_idx` (`Penutor_Mahasiswa_nim`),
  ADD KEY `fk_Mata_Kuliah_has_Penutor_Mata_Kuliah1_idx` (`Mata_Kuliah_id_mk`);

--
-- Indexes for table `mengambil`
--
ALTER TABLE `mengambil`
  ADD PRIMARY KEY (`Mahasiswa_nim`,`Mata_Kuliah_id_mk`,`tgl_register`),
  ADD KEY `fk_Mahasiswa_has_Mata_Kuliah_Mata_Kuliah2_idx` (`Mata_Kuliah_id_mk`),
  ADD KEY `fk_Mahasiswa_has_Mata_Kuliah_Mahasiswa1_idx` (`Mahasiswa_nim`);

--
-- Indexes for table `penutor`
--
ALTER TABLE `penutor`
  ADD PRIMARY KEY (`Mahasiswa_nim`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `fk_Absen_Mahasiswa1` FOREIGN KEY (`Mahasiswa_nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Absen_Mengambil1` FOREIGN KEY (`Mengambil_Mahasiswa_nim`, `Mengambil_Mata_Kuliah_id_mk`, `Mengambil_tgl_register`) REFERENCES `mengambil` (`Mahasiswa_nim`, `Mata_Kuliah_id_mk`, `tgl_register`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mata_kuliah_has_penutor`
--
ALTER TABLE `mata_kuliah_has_penutor`
  ADD CONSTRAINT `fk_Mata_Kuliah_has_Penutor_Mata_Kuliah1` FOREIGN KEY (`Mata_Kuliah_id_mk`) REFERENCES `mata_kuliah` (`id_mk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Mata_Kuliah_has_Penutor_Penutor1` FOREIGN KEY (`Penutor_Mahasiswa_nim`) REFERENCES `penutor` (`Mahasiswa_nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mengambil`
--
ALTER TABLE `mengambil`
  ADD CONSTRAINT `fk_Mahasiswa_has_Mata_Kuliah_Mahasiswa1` FOREIGN KEY (`Mahasiswa_nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Mahasiswa_has_Mata_Kuliah_Mata_Kuliah2` FOREIGN KEY (`Mata_Kuliah_id_mk`) REFERENCES `mata_kuliah` (`id_mk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penutor`
--
ALTER TABLE `penutor`
  ADD CONSTRAINT `fk_Penutor_Mahasiswa1` FOREIGN KEY (`Mahasiswa_nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
