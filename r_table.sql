-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 25, 2021 at 02:29 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rollbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `r_table`
--

CREATE TABLE `r_table` (
  `id` int(12) NOT NULL,
  `studentId` int(12) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `comment` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `r_table`
--

INSERT INTO `r_table` (`id`, `studentId`, `date`, `time`, `comment`) VALUES
(1, 1003, '2021-03-01', '08:03:00', ''),
(2, 1002, '2021-03-01', '08:41:00', ''),
(3, 1001, '2021-03-01', '08:58:00', ''),
(4, 1002, '2021-03-02', '08:03:00', ''),
(5, 1001, '2021-03-02', '08:01:00', ''),
(6, 1003, '2021-03-02', '08:30:00', ''),
(7, 1001, '2021-03-03', '08:00:00', ''),
(8, 1002, '2021-03-03', '08:32:00', ''),
(9, 1003, '2021-03-03', '08:17:00', ''),
(10, 1001, '2021-03-04', '08:05:00', ''),
(11, 1003, '2021-03-04', '08:10:00', ''),
(12, 1002, '2021-03-04', '08:25:00', ''),
(13, 1003, '2021-03-05', '08:51:00', ''),
(14, 1002, '2021-03-05', '08:17:00', ''),
(15, 1001, '2021-03-05', '08:26:00', ''),
(16, 1002, '2021-03-08', '08:53:00', ''),
(17, 1001, '2021-03-08', '08:41:00', ''),
(18, 1003, '2021-03-08', '08:24:00', ''),
(19, 1002, '2021-03-09', '08:52:00', ''),
(20, 1001, '2021-03-09', '08:20:00', ''),
(21, 1003, '2021-03-09', '08:35:00', ''),
(22, 1001, '2021-03-10', '08:40:00', ''),
(23, 1003, '2021-03-10', '08:26:00', ''),
(24, 1002, '2021-03-10', '08:00:00', ''),
(25, 1003, '2021-03-11', '08:04:00', ''),
(26, 1002, '2021-03-11', '08:31:00', ''),
(27, 1001, '2021-03-11', '08:02:00', ''),
(28, 1001, '2021-03-12', '08:38:00', ''),
(29, 1003, '2021-03-12', '08:35:00', ''),
(30, 1002, '2021-03-12', '08:17:00', ''),
(31, 1001, '2021-03-15', '08:05:00', ''),
(32, 1002, '2021-03-15', '08:22:00', ''),
(33, 1003, '2021-03-15', '08:28:00', ''),
(34, 1002, '2021-03-16', '08:16:00', ''),
(35, 1003, '2021-03-16', '08:01:00', ''),
(36, 1001, '2021-03-16', '08:17:00', ''),
(37, 1002, '2021-03-17', '08:29:00', ''),
(38, 1003, '2021-03-17', '08:50:00', ''),
(39, 1001, '2021-03-17', '08:34:00', ''),
(40, 1002, '2021-03-18', '08:22:00', ''),
(41, 1003, '2021-03-18', '08:36:00', ''),
(42, 1001, '2021-03-18', '08:54:00', ''),
(43, 1001, '2021-03-19', '08:23:00', ''),
(44, 1002, '2021-03-19', '08:58:00', ''),
(45, 1003, '2021-03-19', '08:56:00', ''),
(46, 1003, '2021-03-22', '08:13:00', ''),
(47, 1002, '2021-03-22', '08:38:00', ''),
(48, 1001, '2021-03-22', '08:15:00', ''),
(49, 1002, '2021-03-23', '08:42:00', ''),
(50, 1003, '2021-03-23', '08:22:00', ''),
(51, 1001, '2021-03-23', '08:25:00', ''),
(52, 1003, '2021-03-24', '08:38:00', ''),
(53, 1002, '2021-03-24', '08:56:00', ''),
(54, 1001, '2021-03-24', '08:15:00', ''),
(55, 1003, '2021-03-25', '21:27:18', 'まじやばい！'),
(56, 1001, '2021-03-25', '22:25:14', 'できた！'),
(57, 1002, '2021-03-25', '23:16:59', '時間が・・・');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `r_table`
--
ALTER TABLE `r_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `r_table`
--
ALTER TABLE `r_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
