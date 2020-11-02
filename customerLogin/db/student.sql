-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 28, 2019 at 01:07 PM
-- Server version: 5.6.43
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

				--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'renujaiswal@gmail.com', 'renu');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(3) NOT NULL,
  `name` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `standard` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `Creation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Modified_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `name`, `standard`, `Creation_date`, `Modified_date`) VALUES
(3, 'PUNEET KUMAR SINGH', 'TWELTH', '2019-09-28 03:42:53', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `message`) VALUES
(2, 'Greenplant', '7388961339', 'renujaiswal1510@gmail.com', 'hiii');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(3) NOT NULL,
  `name` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `designation` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `qualification` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `experience` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `contact` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(35) COLLATE latin1_general_ci NOT NULL,
  `image` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `Creation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Modified_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `designation`, `qualification`, `experience`, `contact`, `email`, `image`, `Creation_date`, `Modified_date`) VALUES
(1, 'Alexander Alex', 'Sr. Facult', 'B.Tech', '2', '9890988764', 'alex@gmail.com', 'Teacher 06.jpg', '2019-09-24 18:22:00', '2019-09-24 18:35:28'),
(2, 'Shamima Sultana', 'Sr. Facult', 'B.Tech', '3', '8987678765', 'ultana@gmail.com', 'teacher2.png', '2019-09-25 12:09:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `standard`
--

CREATE TABLE `standard` (
  `id` int(3) NOT NULL,
  `standard` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Intake` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `Fees` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `Creation_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Modified_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `standard`
--

INSERT INTO `standard` (`id`, `standard`, `Intake`, `Fees`, `Creation_date`, `Modified_date`) VALUES
(1, 'one', '30', '3000', '2019-09-17 12:44:31', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `standard`
--
ALTER TABLE `standard`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `standard`
--
ALTER TABLE `standard`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
