-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 29, 2021 at 09:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `study_station`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) NOT NULL,
  `course_name` varchar(45) NOT NULL,
  `price` float NOT NULL,
  `student_id` int(10) NOT NULL,
  `hourse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(10) NOT NULL,
  `course_name` varchar(45) NOT NULL,
  `major` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `major`) VALUES
(26, 'oop2', 'CS'),
(29, 'AI', 'CS'),
(30, 'DM', 'CN'),
(32, 'web programming', 'CS');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `course_id` int(10) DEFAULT NULL,
  `time` time(6) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `major` varchar(45) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `instructor_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`first_name`, `last_name`, `password`, `email`, `dob`, `course_id`, `time`, `date`, `major`, `price`, `gender`, `user_name`, `instructor_id`) VALUES
('latifah', 'alhtan', '$2y$10$wapxPW141KF/coU5CW983.CnvsMZDmww9XXORkr.DfnnOA/16EHIe', 'latifah_38@WK.COM', '2021-12-08', 29, '09:03:00.000000', '2021-12-22', 'CS', 30, 'female', 'latifah_2029', 50502),
('safa', 'alslman', '$2y$10$lmU.RM.f4MAmPJv3cu7ayO9wxLY15FPE.WebcbtI80G1Tz9L3HAXy', 'safa@hotmail.com', '2021-12-23', 32, '00:14:00.000000', '2021-12-31', 'CS', 100, 'female', 'safa_2121', 123456),
('sarah', 'alh', '$2y$10$v7EZ0aF4Lc6zcBV37rb0N.XZoo35Lym0Y5k9rRAVEbmoJ.QGxHM9q', 'sramm@ss.com', '2021-12-01', 26, '00:38:00.000000', '2021-12-07', 'CS', 20, 'female', 'sara_2727', 1001899),
('Hissah', 'Alwasifer', '$2y$10$BXsUN4PMbfh7.44dLRBWx.B/VGwsZdGI.dDT7i2Jq2lzb9nk6Oy8a', 'hessa-2121@hotmail.com', '2021-12-23', 30, '03:02:00.000000', '2022-01-06', 'CN', 150, 'female', 'hissah_2020', 219025504),
('nourah', 'alosened', '$2y$10$o8X7qPirFp5EKa4KEVVYMez4hwX/lrtCcbNZKDkF/vrlQ4wrjHA2K', 'nourah_20@hotmail.com', '2021-12-02', 30, '00:07:00.000000', '2021-12-30', 'CN', 10, 'female', 'nourah_2020', 219050636);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(10) NOT NULL,
  `card_number` int(25) NOT NULL,
  `Ex_Date` date NOT NULL,
  `method` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `card_number`, `Ex_Date`, `method`) VALUES
(18, 2147483647, '2021-12-29', 'select'),
(19, 2147483647, '2021-12-07', 'ApplePay'),
(20, 320390222, '2021-12-21', 'VISA');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(10) NOT NULL,
  `FName` varchar(20) NOT NULL,
  `LName` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `Level` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `FName`, `LName`, `username`, `password`, `email`, `date`, `Level`) VALUES
(22, 'SS', 'ASA', 'nourah_202033', '', 'SS@SS.COM', '0000-00-00', 4),
(220, 'KALSKL', 'SKLKS', 'nourah_2020323', '$2y$10$Uj5dV4wNpoMzwvbXpaGkfecrjU676Q5uCmT/hHqeoRVJUZRAxHsWK', 'SKKS@WW.COM', '2021-12-13', 5),
(73737, 'njs', 'jhhj', 'nourah_202044', '$2y$10$AivexEs16TEDBCmHDYB.7O.UvMILkRn1i6twvsJuZqt7GWm9mCX9i', 'nmnm.jshs@js.com', '2021-12-15', 3),
(1077210, 'mona', 'almsk', 'mona_2772', '$2y$10$vPv4Wms3cicndf./3nappOvXqgTd9YjvpwgeCWFx3cdBGCmPk7QQq', 'mona@sjsjs.com', '2021-12-22', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`instructor_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `payment_id` (`payment_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
