-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2018 at 05:51 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(100) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `artikel_id` varchar(50) NOT NULL,
  `artikel_judul` varchar(200) NOT NULL,
  `artikel_penulis` varchar(100) NOT NULL,
  `artikel_abstrak` text NOT NULL,
  `artikel_status` enum('non_valid','valid','pending','unknown') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `jumpemakalah`
-- (See below for the actual view)
--
CREATE TABLE `jumpemakalah` (
`jumlah_pemakalah` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `jumpeserta`
-- (See below for the actual view)
--
CREATE TABLE `jumpeserta` (
`jumlah_peserta` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `pemakalah`
--

CREATE TABLE `pemakalah` (
  `pemakalah_id` int(11) NOT NULL,
  `pemakalah_nama` varchar(100) NOT NULL,
  `pemakalah_telp` varchar(50) NOT NULL,
  `pemakalah_email` varchar(100) NOT NULL,
  `pemakalah_bank` varchar(50) NOT NULL,
  `pemakalah_nama_rek` varchar(100) NOT NULL,
  `pemakalah_bukti` text NOT NULL,
  `artikel_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `peserta_id` int(11) NOT NULL,
  `peserta_nama` varchar(100) NOT NULL,
  `peserta_telp` varchar(50) NOT NULL,
  `peserta_email` varchar(100) NOT NULL,
  `peserta_bank` varchar(50) NOT NULL,
  `peserta_nama_rek` varchar(100) NOT NULL,
  `peserta_bukti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `jumpemakalah`
--
DROP TABLE IF EXISTS `jumpemakalah`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jumpemakalah`  AS  select count(`pemakalah`.`pemakalah_id`) AS `jumlah_pemakalah` from `pemakalah` ;

-- --------------------------------------------------------

--
-- Structure for view `jumpeserta`
--
DROP TABLE IF EXISTS `jumpeserta`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jumpeserta`  AS  select count(`peserta`.`peserta_id`) AS `jumlah_peserta` from `peserta` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indexes for table `pemakalah`
--
ALTER TABLE `pemakalah`
  ADD PRIMARY KEY (`pemakalah_id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`peserta_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemakalah`
--
ALTER TABLE `pemakalah`
  MODIFY `pemakalah_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `peserta_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
