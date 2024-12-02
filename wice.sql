-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2024 at 04:31 PM
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
-- Database: `wice`
--

-- --------------------------------------------------------

--
-- Table structure for table `students_tb`
--

CREATE TABLE `students_tb` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `parent_full_name` varchar(255) NOT NULL,
  `parent_email` varchar(255) NOT NULL,
  `parent_phone_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students_tb`
--

INSERT INTO `students_tb` (`user_id`, `first_name`, `last_name`, `email`, `username`, `password`, `grade`, `DOB`, `gender`, `phone_number`, `address`, `parent_full_name`, `parent_email`, `parent_phone_number`) VALUES
(1, 'Favour ', 'Abass ', 'abassalex49@gmail.com', 'favourrr', 'busayo22', 'SSS 3', '', '', '', '', '', '', ''),
(2, 'Favour ', 'Abass ', 'abassalex49@gmail.com', 'favourrr', 'busayo22', 'SSS 3', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'test', 'test', 'test@gmail.com', 'tester', 'test', 'Pry 1', '', '', '', '', '', '', ''),
(5, 'test', 'test', 'test@gmail.com', 'tester', 'test', 'Pry 1', '', '', '', '', '', '', ''),
(6, '', '', '', '', '', '', 'May 08, 2017', '', '0905436678', 'somewhere', '', '', ''),
(7, 'test', 'test', 'test@gmail.com', 'tester', 'test', 'Pry 1', 'Feb 06, 2018', '', '0812554755', 'somewhere', 'Mrs. test tester', 'mrstesttester@yahoo.com', '090123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students_tb`
--
ALTER TABLE `students_tb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students_tb`
--
ALTER TABLE `students_tb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
