-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2019 at 05:33 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tugas1`
--

CREATE TABLE IF NOT EXISTS `tugas1` (
  `id` int(11) NOT NULL,
  `nama` varchar(52) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(52) NOT NULL,
  `email` varchar(52) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas1`
--

INSERT INTO `tugas1` (`id`, `nama`, `username`, `password`, `email`) VALUES
(1, 'M Irfan', 'fan99x   ', 'Apaaja123', 'enbuss88@gmail.com'),
(31, 'Muhammad Irfan Bakhtiar', 'irfan', '1', 'test@gmail.com'),
(32, 'Informatika', 'ti', '1', 'd4@gmail.com'),
(33, 'FreeFire', 'ff19', '1', 'ff@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tugas1`
--
ALTER TABLE `tugas1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tugas1`
--
ALTER TABLE `tugas1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
