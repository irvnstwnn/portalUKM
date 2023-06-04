-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 12:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal_ukm`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_login`
--

CREATE TABLE `info_login` (
  `id` int(4) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `program_studi` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info_login`
--

INSERT INTO `info_login` (`id`, `nim`, `nama`, `program_studi`, `fakultas`) VALUES
(1, 'F1E121004', 'Noe', 'Sistem Informasi', 'Sains dan Teknologi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `program_studi` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nim`, `nama`, `program_studi`, `fakultas`, `password`) VALUES
(1, 'dsadsa', 'sad', 'dsa', 'sadsad', 'asdasd'),
(2, 'dsadsa', 'sad', 'dsa', 'sadsad', 'asdasd'),
(3, 'dsadsa', 'sad', 'dsa', 'sadsad', 'asdasd'),
(4, 'dsadsa', 'sad', 'dsa', 'sadsad', 'asdasd'),
(5, 'aaaaaa', 'aaaaaaaa', 'aaaa', 'aaaaaaaaa', 'aaaaaaaa'),
(6, 'z', 'z', 'z', 'z', 'z'),
(7, 'F1E121', 'REYVI', 'SISTEM INFORMASI', 'SAINS DAN TEKNOLOGI', 'reyvi123'),
(8, 'F1E121001', 'fiqri wahyu', 'sistem informasi', 'sains dan teknologi', 'fiqri123'),
(9, 'F1E121004', 'Noe', 'Sistem Informasi', 'Sains dan Teknologi', 'noe123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_login`
--
ALTER TABLE `info_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_login`
--
ALTER TABLE `info_login`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
