-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 10:22 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_biodata`
--

CREATE TABLE `tabel_biodata` (
  `Id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `tanggal` date NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_biodata`
--

INSERT INTO `tabel_biodata` (`Id`, `nama`, `email`, `tanggal`, `gender`, `pesan`) VALUES
(1, 'Maria Yustina Tuga ', 'yustina.tuga17@gmail.com', '0000-00-00', 'P', 'save'),
(2, '  ', 'yulen@gmail.com', '0000-00-00', 'P', 'aaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_biodata`
--
ALTER TABLE `tabel_biodata`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_biodata`
--
ALTER TABLE `tabel_biodata`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
