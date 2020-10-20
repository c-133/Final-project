-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 12:22 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `aid` int(11) NOT NULL,
  `hospitalid` int(11) NOT NULL,
  `doctorid` int(11) NOT NULL,
  `customername` varchar(100) NOT NULL,
  `civilid` varchar(100) NOT NULL,
  `serialnumber` varchar(100) DEFAULT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `doctordate` date NOT NULL,
  `doctortime` time NOT NULL,
  `doctorendtime` time DEFAULT NULL,
  `approval` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`aid`, `hospitalid`, `doctorid`, `customername`, `civilid`, `serialnumber`, `phone`, `email`, `doctordate`, `doctortime`, `doctorendtime`, `approval`) VALUES
(43, 1, 6, 'Ahmad Abul', '123456789123', '000', '97992336', '123@gmail.com', '2020-10-20', '11:30:00', '12:00:00', 'Waiting For Approval'),
(45, 1, 1, 'Ahmad Abul', '123456789123', '000', '97992336', '123@gmail.com', '2020-10-21', '07:00:00', '07:30:00', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `username`, `password`) VALUES
(1, 'Abdullah alkayat', '123'),
(2, 'dr. ali', '123'),
(3, 'dr. omar', '123'),
(4, 'drayesha', '123'),
(5, 'drhabib', '123'),
(6, 'drfatima', '123'),
(7, 'dramina', '123'),
(8, 'draalam', '123'),
(9, 'drdaria', '123'),
(10, 'drpervaiz', '123'),
(11, 'drtaha', '123'),
(12, 'drtaheem', '123'),
(13, 'drsaba', '123');

-- --------------------------------------------------------

--
-- Table structure for table `hospitalinfo`
--

CREATE TABLE `hospitalinfo` (
  `hosid` int(11) NOT NULL,
  `hosname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitalinfo`
--

INSERT INTO `hospitalinfo` (`hosid`, `hosname`) VALUES
(1, 'Dar AlShifa'),
(2, 'AlHadi'),
(3, 'AlMowasat'),
(4, 'Royale Hayat'),
(5, 'Taiba'),
(6, 'AlSeef');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patid`, `name`, `email`, `phone`, `message`) VALUES
(5, '1111', '1111@gmail.com', '1111', '1111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `hospitalid` (`hospitalid`),
  ADD KEY `doctorid` (`doctorid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitalinfo`
--
ALTER TABLE `hospitalinfo`
  ADD PRIMARY KEY (`hosid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`hospitalid`) REFERENCES `hospitalinfo` (`hosid`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`doctorid`) REFERENCES `doctor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
