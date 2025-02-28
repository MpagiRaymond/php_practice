-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2025 at 08:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votes`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `INFORMATION` varchar(50) DEFAULT NULL,
  `PWD` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`ID`, `NAME`, `EMAIL`, `INFORMATION`, `PWD`) VALUES
(1, 'joels', 'joel@gmail.com', 'peter', 'joel'),
(2, 'Magezi John', 'John@gmail.com', 'footballer', 'john'),
(3, 'peter', 'acram@gmail.com', 'kisubi student', 'peter'),
(4, 'jack', 'jack@gmail.com', 'student', 'jack'),
(5, 'patrick', 'patrick@gmail.com', 'I just love my job', 'patrick'),
(6, 'regan', 'jo.magezi@unik.ac.ug', 'i just coding as a job', 'regan'),
(7, 'regans', 'jo.magezi@unik.ac.ug', 'I love an internship job', 'reganss'),
(8, 'regans', 'jo.magezi@unik.ac.ug', 'I love an internship job', 'reganss'),
(9, 'kamya', 'kamya@gmail.com', 'thats his name', 'kamya'),
(10, 'marvin', 'marvin@gmail.com', 'another friend of mine', '$2y$10$185gG.1XTpz/kRo8/frkZuyhWL/8eNVPwLA86u9u77x'),
(11, 'jam', 'jam@gmail.com', 'haha', '$2y$10$oVzECxhT8w7ctk3GnRS26OZ73hNtdg03DIazUjQHw2f'),
(12, 'pp', 'pp@gmail.com', 'pp', '$2y$10$BIyZgXOT3gV848rjmQMeuuFhwDYsBXXf7kJYAlBHD6X'),
(13, 'J', 'J@GMAIL.COM', 'J', '$2y$10$2VFo9SmH2vcc/sYTURVJ2OrEsuzF5oLQ4Naldp6aQEb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
