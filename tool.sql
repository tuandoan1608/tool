-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2022 at 10:24 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tool`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name`) VALUES
(1, 'nlpt16101998@gmail.com'),
(2, 'nlpt16101998@gmail.com'),
(3, 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_links`
--

CREATE TABLE `tb_links` (
  `id` int(11) NOT NULL,
  `link_tw` varchar(500) DEFAULT NULL,
  `link_email` varchar(500) DEFAULT NULL,
  `link_ins` varchar(500) DEFAULT NULL,
  `link_fb` varchar(500) DEFAULT NULL,
  `link_medium` varchar(500) DEFAULT NULL,
  `link_yt` varchar(500) DEFAULT NULL,
  `link_red` varchar(500) DEFAULT NULL,
  `link_lk` varchar(500) DEFAULT NULL,
  `acc_name` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_links`
--

INSERT INTO `tb_links` (`id`, `link_tw`, `link_email`, `link_ins`, `link_fb`, `link_medium`, `link_yt`, `link_red`, `link_lk`, `acc_name`) VALUES
(1, 'sdsdf', 'doantuan1681999+121@gmail.com', NULL, 'sdfsdf', NULL, NULL, NULL, NULL, 'nlpt16101998@gmail.com'),
(2, 'sef', 'sef@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE `username` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_tw` varchar(500) DEFAULT NULL,
  `name_tele` varchar(500) DEFAULT NULL,
  `name_ins` varchar(500) DEFAULT NULL,
  `name_discord` varchar(500) DEFAULT NULL,
  `name_medium` varchar(500) DEFAULT NULL,
  `acc_name` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`id`, `name_tw`, `name_tele`, `name_ins`, `name_discord`, `name_medium`, `acc_name`) VALUES
(1, '@gmai', '@gmaisss', NULL, NULL, NULL, 'nlpt16101998@gmail.com'),
(2, NULL, NULL, NULL, NULL, NULL, 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id` int(10) UNSIGNED NOT NULL,
  `bep-20` varchar(500) DEFAULT NULL,
  `sol` varchar(500) DEFAULT NULL,
  `terra` varchar(500) DEFAULT NULL,
  `acc_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`id`, `bep-20`, `sol`, `terra`, `acc_name`) VALUES
(1, '0xAb4F9D14720b15AF57D8153F304e46000235813a', NULL, NULL, 'nlpt16101998@gmail.com'),
(2, NULL, NULL, NULL, 'sdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_links`
--
ALTER TABLE `tb_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_links`
--
ALTER TABLE `tb_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `username`
--
ALTER TABLE `username`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
