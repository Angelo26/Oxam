-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2018 at 02:19 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oxam`
--

-- --------------------------------------------------------

--
-- Table structure for table `ans`
--

CREATE TABLE `ans` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `a1` varchar(5) NOT NULL,
  `a2` varchar(5) NOT NULL,
  `a3` varchar(5) NOT NULL,
  `a4` varchar(5) NOT NULL,
  `a5` varchar(5) NOT NULL,
  `a6` varchar(5) NOT NULL,
  `a7` varchar(5) NOT NULL,
  `a8` varchar(5) NOT NULL,
  `a9` varchar(5) NOT NULL,
  `a10` varchar(5) NOT NULL,
  `a11` varchar(5) NOT NULL,
  `a12` varchar(5) NOT NULL,
  `a13` varchar(5) NOT NULL,
  `a14` varchar(5) NOT NULL,
  `a15` varchar(5) NOT NULL,
  `a16` varchar(5) NOT NULL,
  `a17` varchar(5) NOT NULL,
  `a18` varchar(5) NOT NULL,
  `a19` varchar(5) NOT NULL,
  `a20` varchar(5) NOT NULL,
  `a21` varchar(5) NOT NULL,
  `a22` varchar(5) NOT NULL,
  `a23` varchar(5) NOT NULL,
  `a24` varchar(5) NOT NULL,
  `a25` varchar(5) NOT NULL,
  `a26` varchar(5) NOT NULL,
  `a27` varchar(5) NOT NULL,
  `a28` varchar(5) NOT NULL,
  `a29` varchar(5) NOT NULL,
  `a30` varchar(5) NOT NULL,
  `a31` varchar(5) NOT NULL,
  `a32` varchar(5) NOT NULL,
  `a33` varchar(5) NOT NULL,
  `a34` varchar(5) NOT NULL,
  `a35` varchar(5) NOT NULL,
  `a36` varchar(5) NOT NULL,
  `a37` varchar(5) NOT NULL,
  `a38` varchar(5) NOT NULL,
  `a39` varchar(5) NOT NULL,
  `a40` varchar(5) NOT NULL,
  `a41` varchar(5) NOT NULL,
  `a42` varchar(5) NOT NULL,
  `a43` varchar(5) NOT NULL,
  `a44` varchar(5) NOT NULL,
  `a45` varchar(5) NOT NULL,
  `a46` varchar(5) NOT NULL,
  `a47` varchar(5) NOT NULL,
  `a48` varchar(5) NOT NULL,
  `a49` varchar(5) NOT NULL,
  `a50` varchar(5) NOT NULL,
  `a51` varchar(5) NOT NULL,
  `a52` varchar(5) NOT NULL,
  `a53` varchar(5) NOT NULL,
  `a54` varchar(5) NOT NULL,
  `a55` varchar(5) NOT NULL,
  `a56` varchar(5) NOT NULL,
  `a57` varchar(5) NOT NULL,
  `a58` varchar(5) NOT NULL,
  `a59` varchar(5) NOT NULL,
  `a60` varchar(5) NOT NULL,
  `a61` varchar(5) NOT NULL,
  `a62` varchar(5) NOT NULL,
  `a63` varchar(5) NOT NULL,
  `a64` varchar(5) NOT NULL,
  `a65` varchar(5) NOT NULL,
  `a66` varchar(5) NOT NULL,
  `a67` varchar(5) NOT NULL,
  `a68` varchar(5) NOT NULL,
  `a69` varchar(5) NOT NULL,
  `a70` varchar(5) NOT NULL,
  `a71` varchar(5) NOT NULL,
  `a72` varchar(5) NOT NULL,
  `a73` varchar(5) NOT NULL,
  `a74` varchar(5) NOT NULL,
  `a75` varchar(5) NOT NULL,
  `a76` varchar(5) NOT NULL,
  `a77` varchar(5) NOT NULL,
  `a78` varchar(5) NOT NULL,
  `a79` varchar(5) NOT NULL,
  `a80` varchar(5) NOT NULL,
  `a81` varchar(5) NOT NULL,
  `a82` varchar(5) NOT NULL,
  `a83` varchar(5) NOT NULL,
  `a84` varchar(5) NOT NULL,
  `a85` varchar(5) NOT NULL,
  `a86` varchar(5) NOT NULL,
  `a87` varchar(5) NOT NULL,
  `a88` varchar(5) NOT NULL,
  `a89` varchar(5) NOT NULL,
  `a90` varchar(5) NOT NULL,
  `a91` varchar(5) NOT NULL,
  `a92` varchar(5) NOT NULL,
  `a93` varchar(5) NOT NULL,
  `a94` varchar(5) NOT NULL,
  `a95` varchar(5) NOT NULL,
  `a96` varchar(5) NOT NULL,
  `a97` varchar(5) NOT NULL,
  `a98` varchar(5) NOT NULL,
  `a99` varchar(5) NOT NULL,
  `a100` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
