-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 05:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nama` varchar(25) NOT NULL,
  `nim` int(10) NOT NULL,
  `prodi` varchar(25) NOT NULL,
  `jenisKelamin` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nama`, `nim`, `prodi`, `jenisKelamin`, `status`) VALUES
('Nobara', 120140221, 'Teknik Paku', 'Perempuan', 'Tidak Aktif'),
('Argie', 120140253, 'Teknik Informatika', 'Laki-laki', 'Aktif'),
('Gojo Satoru', 120140420, 'Teknik Limitless', 'Laki-laki', 'Aktif'),
('Harizz', 140129582, 'Teknik Rizzler', 'Laki-laki', 'Tidak Aktif'),
('Sukuna', 142449123, 'Malevolent Kitchen', 'Laki-laki', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
