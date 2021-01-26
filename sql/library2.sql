-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 26, 2021 at 01:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library2`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `authors` varchar(50) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `quantity` int(3) NOT NULL,
  `genre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `name`, `authors`, `edition`, `status`, `quantity`, `genre`) VALUES
(100, 'CODE: The Hidden Language of Computer Hardware and Software', 'Charles Petzold', '3rd ', 'Available', 20, 'Computer Science'),
(103, 'Data Structures and Algorithm Analysis in C', 'Mark Allen Weiss', '2nd', 'Available', 12, 'Computer Science'),
(105, 'You can Achieve More', 'Shiv Khera', '1st ', 'Available', 25, 'Philosophy'),
(107, 'The Secret', 'Rhonda Byrne', '4th', 'Available', 30, 'Novel'),
(110, 'Introduction to Algorithms', 'Cormen,Leiserson,Rivest & Stein', '3rd', 'Available', 40, 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `first` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` bigint(100) NOT NULL,
  `gender` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`first`, `last`, `username`, `password`, `email`, `contact`, `gender`) VALUES
('Siddarth', 'SINGARAVEL', '18BCE1171', 'Siddu', 'sidd.singaravel@gmail.com', 861012193, 'male'),
('Developer', 'Devops', 'admin', 'admin', 'dev.devoloper200@gmail.com', 9823410979, 'male'),
('Lord ', 'Rama', 'GOD', 'master', 'rama.god@gmail.com', 9647231587, 'male'),
('Dr.Nithyanadam', 'VIT', 'Info_Sec_Prof.', 'am_the_boss', 'nithyanandam.p@vit.ac.in', 9876543210, 'male'),
('KAVYA', 'SINGARAVEL', 'Kacy', 'mysister', 'kavya.singaravel@yahoo.com', 4122099341, 'female'),
('Ram', 'Chandan', 'Ram', 'password', 'ram.chandan2000@gmail.com', 9962644350, 'male'),
('singaravel', 'manickam', 'Sing', 'mydad', 'ms_vel@hotmail.com', 9964259710, 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD UNIQUE KEY `bid` (`bid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
