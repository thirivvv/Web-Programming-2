-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2025 at 03:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `department` varchar(50) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `mobile`, `email`, `gender`, `department`, `address`) VALUES
(19, 'kim', '2272995', 'kim@gmail.com', 'Female', 'Computer', 'dvfkvmefkm'),
(20, 'Alice  ', '49580445', 'Alice@gmail.com', 'Female', 'English', 'wdsdsvvdsjdujsdcnsuidoi'),
(21, 'Bowie', 'bowie@gmail.com', 'bowie@gmail.com', 'Male', 'English', 'hynthnthg'),
(22, ' Enid', '2402942', 'enid@gmail.com', 'Female', 'English', 'sdfdfwd'),
(23, 'Sherlock', '57345042', 'sherlock@gmail.com', 'Male', '', 'wsvgsrg'),
(24, 'Sherlock', '57345042', 'sherlock@gmail.com', 'Male', '', 'wsvgsrg'),
(25, 'Minato ', '8678585', 'minato@gmail.com', 'Male', '', 'dsbfgdb'),
(26, 'xxx', '42545252', 'xxx@gmail.com', 'Male', '', 'dfsvdvs'),
(27, 'Philip', '48502452', 'philip@gmail.com', 'Male', '', 'vsfsfvsfsf'),
(28, 'ws', 'e', 'fu@gmail.com', 'Male', '', 'ef'),
(29, 'Jenny', '3453452', 'jenny@gmail.com', 'Female', 'Business', 'sdvsdfvsfv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
