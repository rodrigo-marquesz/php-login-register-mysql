-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 04:47 AM
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
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `cadastro`
--

CREATE TABLE `cadastro` (
  `ID` int(11) NOT NULL COMMENT 'PK',
  `NAME` varchar(70) NOT NULL,
  `LAST_NAME` varchar(70) NOT NULL,
  `DATE_BIRTH` date NOT NULL,
  `COUNTRY` varchar(10) NOT NULL,
  `CITY` varchar(18) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  `REPEAT_PASSWORD` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cadastro`
--

INSERT INTO `cadastro` (`ID`, `NAME`, `LAST_NAME`, `DATE_BIRTH`, `COUNTRY`, `CITY`, `EMAIL`, `PASSWORD`, `REPEAT_PASSWORD`) VALUES
(15, 'RODRIGO', 'ZAMORA', '2000-06-13', 'BR', 'Gravataí', 'rodrigojr907@gmail.com', 'root123', 'root123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK', AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
