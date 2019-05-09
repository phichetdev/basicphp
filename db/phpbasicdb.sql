-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2019 at 12:57 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpbasicdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(5) NOT NULL,
  `fullname` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fullname`, `email`, `password`, `tel`, `status`) VALUES
(1, 'phichet', 'phichet.demier@gmail.com', 'i9343230', '081-5663404', 1),
(2, 'พิเชษฐ์ ปั้นกาญจนโต', 'phichet@demier.net', '25315', '02-9343230', 0),
(3, 'pakin', 'pakin@gmail.com', '123456', '0971563404', 1),
(4, 'pakin', 'pakin@gmail.com', '123456', '0971563404', 1),
(5, 'pakin', 'pakin@gmail.com', '123456', '0971563404', 1),
(6, 'pakin', 'pakin@gmail.com', '123456', '0971563404', 1),
(7, 'pakin', 'pakin@gmail.com', '123456', '0971563404', 1),
(8, 'passakorn', 'passkorn@gmail.com', '15236', '0215415', 0),
(10, 'passakorn', 'passkorn@gmail.com', '15236', '0215415', 0),
(11, 'pakin', 'pakin@gmail.com', '123456', '0971563404', 1),
(12, 'AAAA', 'phichet.demier@gmail.com', 'dfsdfdfd', 'dfdsfdf', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
