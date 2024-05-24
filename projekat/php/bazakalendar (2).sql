-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 22, 2024 at 06:10 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bazakalendar`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
CREATE DATABASE IF NOT EXISTS `bazakalendar` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `bazakalendar`;

CREATE TABLE `events` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `created_by` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `start`, `end`, `created_by`) VALUES
(3, 'Moj rodjendan', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', '2025-01-04 00:00:00', '2025-01-05 00:00:00', 4),
(4, 'Predaja projekta', 'Nemo kasnis', '2024-05-24 23:59:00', '2024-05-24 23:59:00', 4),
(5, 'bilo sta', 'asdasdasfsa', '2024-05-25 19:53:00', '2024-05-25 19:53:00', 4),
(6, 'Nije predaja projekta', 'zvdasvdsbfs', '2024-05-23 19:54:00', '2024-05-23 19:54:00', 4);

-- --------------------------------------------------------

-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `ime` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL,
  `priv` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `ime`, `prezime`, `email`, `password`, `about`, `priv`) VALUES
(1, 'MIhiqa', 'sfasfa', 'weijfisdnisnd@gmial.com', '81dc9bdb52d04dc20036dbd8313ed055', 'ifjewnfusdnfosndoifnoiwnwoief', '0'),
(2, 'MIhiqa', 'sfasfa', 'mihailo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'ncweoincowebuivewbncweoincowebuivewbncweoincowebuivewbncweoincowebuivewbncweoincowebuivewb', '0'),
(3, 'MIhiqa', 'stojic', 'stojic@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'vffevsd', '0'),
(4, 'MIhiqa', 'stojicic', 'stojicic@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'jsbacqnsiovenaidnvad', '0'),
(5, 'Mihailo', 'mihailovic', 'mihailooo@gmail.com', '202cb962ac59075b964b07152d234b70', 'nvodsnvusdnksdbvksbvduinvodsnvusdnksdbvksbvduinvodsnvusdnksdbvksbvduinvodsnvusdnksdbvksbvduinvodsnvusdnksdbvksbvduinvodsnvusdnksdbvksbvduinvodsnvusdnksdbvksbvduinvodsnvusdnksdbvksbvduinvodsnvusdnksdbvksbvduinvodsnvusdnksdbvksbvduinvodsnvusdnksdbvksbvduinvodsnvusdnksdbvksbvduinvodsnvusdnksdbvksbvdui', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
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
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
