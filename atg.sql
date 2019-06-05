-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2019 at 06:31 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atg`
--

-- --------------------------------------------------------

--
-- Table structure for table `atg`
--

CREATE TABLE `atg` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `atg`
--

INSERT INTO `atg` (`id`, `name`, `email`, `pincode`, `created_at`, `updated_at`) VALUES
(1, 'Aurobindo Parida', 'aparida1987@gmail.com', 160071, '2019-06-03 12:42:52', '2019-06-03 18:12:52'),
(2, 'Aurobindo Parida', 'aparida19871@gmail.com', 160071, '2019-06-03 12:45:54', '2019-06-03 18:15:54'),
(3, 'Aurobindo Parida', 'aparida1987y@gmail.com', 160071, '2019-06-03 12:46:57', '2019-06-03 18:16:57'),
(4, 'Aurobindo Parida', 'aparida19873@gmail.com', 160071, '2019-06-03 12:51:03', '2019-06-03 18:21:03'),
(5, 'Aurobindo Parida', 'aparida19827@gmail.com', 160071, '2019-06-03 12:52:24', '2019-06-03 18:22:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atg`
--
ALTER TABLE `atg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atg`
--
ALTER TABLE `atg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
