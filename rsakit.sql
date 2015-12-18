-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2015 at 04:27 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rsakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `kodeDokter` varchar(5) NOT NULL,
  `namaDokter` varchar(20) NOT NULL,
  `alamatDokter` varchar(30) NOT NULL,
  `kotaDokter` varchar(20) NOT NULL,
  `telpDokter` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`kodeDokter`, `namaDokter`, `alamatDokter`, `kotaDokter`, `telpDokter`) VALUES
('DK001', 'Lula', 'Jl. Banteng', 'Jakarta', '8563-5003');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `kodePasien` varchar(5) NOT NULL,
  `namaPasien` varchar(20) NOT NULL,
  `alamatPasien` varchar(30) NOT NULL,
  `kotaPasien` varchar(20) NOT NULL,
  `telpPasien` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`kodePasien`, `namaPasien`, `alamatPasien`, `kotaPasien`, `telpPasien`) VALUES
('PS001', 'Ruhayah', 'Jl. Panti Asuhan', 'Tangerang', '731-7765');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
 ADD PRIMARY KEY (`kodePasien`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
