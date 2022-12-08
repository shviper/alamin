-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 04, 2022 at 01:48 PM
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
-- Database: `p-info`
--

-- --------------------------------------------------------

--
-- Table structure for table `Counter`
--

CREATE TABLE `Counter` (
  `id` int(11) NOT NULL,
  `visits` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Counter`
--

INSERT INTO `Counter` (`id`, `visits`) VALUES
(1, 189);

-- --------------------------------------------------------

--
-- Table structure for table `eroticmonkey`
--

CREATE TABLE `eroticmonkey` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eroticmonkey`
--

INSERT INTO `eroticmonkey` (`id`, `username`, `password`, `userId`) VALUES
(8, 'admin@gmail.com', 'ssssssssssssss', '6'),
(10, 'dasfasdfg', 'fasdfasd', '5');

-- --------------------------------------------------------

--
-- Table structure for table `live`
--

CREATE TABLE `live` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `live`
--

INSERT INTO `live` (`id`, `username`, `password`, `userId`) VALUES
(3, 'riyad@gmail.com', 'password', '5'),
(4, 'riyad01931@gmail.com', 'dddddddddd', '5');

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`id`, `name`, `link`, `status`) VALUES
(1, 'Eroticmonkey', 'eroticmonkey', 'Active'),
(2, 'Slixa', 'slixa', 'active'),
(3, 'tryst', 'tryst', 'active'),
(4, 'skiplhagames', 'skiplhagames', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `slixa`
--

CREATE TABLE `slixa` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slixa`
--

INSERT INTO `slixa` (`id`, `username`, `password`, `userId`) VALUES
(47, 'admin@gmail.com', 'dddddddddddddd', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tryst`
--

CREATE TABLE `tryst` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userId` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tryst`
--

INSERT INTO `tryst` (`id`, `username`, `password`, `userId`) VALUES
(6, 'admin@gmail.com', 'ddddddd', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(55) NOT NULL,
  `pnumber` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `password`, `pnumber`, `role`) VALUES
(3, 'sajjad', 'hasan', 'riyad@gmail.com', 'aerewr', '014785236', '1'),
(4, 'sajjad ', 'hasan', 'riyad@gmail.com', 'aerewr', '019658458', '0'),
(5, 'riyad', 'hasan', 'riyad@gmail.com', 'riyad@gmail.com', 'riyad@gmail.com', '0'),
(6, 'sajjad', 'hasan', 'hasan@gmail.com', '1111', '1111', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Counter`
--
ALTER TABLE `Counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eroticmonkey`
--
ALTER TABLE `eroticmonkey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `live`
--
ALTER TABLE `live`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slixa`
--
ALTER TABLE `slixa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tryst`
--
ALTER TABLE `tryst`
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
-- AUTO_INCREMENT for table `Counter`
--
ALTER TABLE `Counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eroticmonkey`
--
ALTER TABLE `eroticmonkey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `live`
--
ALTER TABLE `live`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slixa`
--
ALTER TABLE `slixa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tryst`
--
ALTER TABLE `tryst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
