-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2024 at 04:23 PM
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
-- Database: `empdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `empleave`
--

CREATE TABLE `empleave` (
  `lvid` int(10) NOT NULL,
  `id` int(10) DEFAULT NULL,
  `startdate` text NOT NULL,
  `enddate` text NOT NULL,
  `totaldays` int(10) NOT NULL DEFAULT 2,
  `reason` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `empleave`
--

INSERT INTO `empleave` (`lvid`, `id`, `startdate`, `enddate`, `totaldays`, `reason`, `status`) VALUES
(1, 2, '10', '30', 2, 'kkj', 'Approve'),
(2, 6, '02-03-2023', '03-05-2023', 2, 'iss', 'Cancle'),
(3, 2, 'sick', '2024-08-23', 2, '2024-08-23', 'Approve'),
(5, 6, '2024-08-21', '2024-08-23', 2, 'personal', 'Cancle'),
(6, 19, '2024-10-04', '2024-10-05', 2, 'sick', 'Cancle');

-- --------------------------------------------------------

--
-- Table structure for table `employeed`
--

CREATE TABLE `employeed` (
  `id` int(50) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(10) NOT NULL,
  `birthday` varchar(10) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `address` varchar(20) NOT NULL,
  `contact` int(10) NOT NULL,
  `depertment` text NOT NULL,
  `degree` varchar(10) NOT NULL,
  `usertype` varchar(10) NOT NULL DEFAULT 'user',
  `picture` varchar(100) NOT NULL DEFAULT 'img1.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employeed`
--

INSERT INTO `employeed` (`id`, `fname`, `lname`, `email`, `password`, `birthday`, `gender`, `address`, `contact`, `depertment`, `degree`, `usertype`, `picture`) VALUES
(1, 'shahid', 'khan', 'admin@gmail.com', '1234', '2024-08-06', 'Male', 'vasai', 77755809, 'IT', 'BCA', 'admin', ''),
(2, 'ganesh', 'patel', 'g@gmail.com', '12345', '', 'Male', 'surat', 2147483647, 'manager', 'BSC', 'user', 'h2.jpg'),
(3, 'shubham', 'shubham', 'ku@gmail.com', '1234', '2016-06-12', 'Male', 'valsad', 90987654, 'Manager', 'MBBA', 'user', 'lap1.webp'),
(6, 'rahil', 'kumar', 'ra@gmail.com', '1234', '12', 'Male', 'vapi', 98989796, 'it', 'bca', 'user', 'img1.png'),
(9, 'suraj', 'verma', 'su@gmail.com', '1234', '2024-09-03', 'male', 'vapi', 77755809, 'emp', 'BBA', 'user', 'img1.png'),
(10, 'sandeep ', 'jaisval', 'sa@gmai.com', '1234', '2024-08-29', 'Male', 'vasai', 77755809, 'Manager', 'MCA', 'user', 'img1.png'),
(12, 'taniya', 'kumar', 'r@gmail.com', '1235', '2024-08-15', 'female', 'surat', 88990765, 'IT', 'MBBA', 'user', 'img1.png'),
(14, 'sona', 'patel', 'user@gmail.com', '1234', '2024-08-21', 'Female', 'vapi', 77755809, 'Manager', 'MBBA', 'user', 'Screenshot 2023-08-0'),
(17, 'Nilesh', 'kumar', 'nal@gmail.com', '1234', '2024-07-31', 'female', 'vapi', 1234578, 'Manager', 'BCA', 'user', 'img1.png'),
(19, 'Najiya', 'khan', 'k@gmail.com', '1234', '2024-07-31', 'female', 'vapi', 1234578, 'Manager', 'BCA', 'user', 'facebook.png'),
(20, 'kisan', 'sha', 'kas@gmail.com', '1234', '2024-08-23', 'Male', 'vasai', 78789055, 'CEO', 'MCOM', 'user', 'img1.png'),
(22, 'surma', 'sha', 'sha@gmail.com', '1234', '2024-08-23', 'Male', 'vasai', 78789055, 'CEO', 'MCOM', 'user', 'img1.png'),
(23, 'jumman', 'shailk', 'ju@gmail.com', '1234', '2024-08-24', 'Male', 'mubra', 90453340, 'HR', 'Phd', 'user', 'instagram.png'),
(25, 'suhana', 'khan', 'su@gmail.com', '1234', '2024-09-25', 'Female', 'vapi', 88990765, 'CEO', 'MCOM', 'user', 'lap-2.jpg'),
(26, 'ansar', 'shekh', 's@gmail.com', '1234', '2024-10-04', 'Male', 'vapi', 9899785, 'Clark', 'BA', 'user', 'lap-2.jpg'),
(27, 'Shahid', 'khan', 'sh@gmail.com', '1234', '2024-09-26', 'Male', 'Bhilad', 998989, 'IT', 'MCA', 'user', 'WhatsApp Image 2024-07-24 at 11.03.08 AM.jpeg'),
(28, 'suraj', 'patel', 'patel@gmail.comm', '1234', '2024-10-03', 'Male', 'vapi', 98987889, 'CEO', 'MCOM', 'user', 'img1.png');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `pid` int(10) NOT NULL,
  `id` int(10) DEFAULT NULL,
  `pname` varchar(10) NOT NULL,
  `duedate` varchar(10) NOT NULL,
  `subdate` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`pid`, `id`, `pname`, `duedate`, `subdate`, `status`) VALUES
(1, 3, 'yakub', '2020-09-26', '2020-09-04', 'Submitted'),
(2, 1, 'ems', '20-09-2020', '30', 'Submit'),
(5, 6, 'dsssa', '7-08-2022', '00-00-00', 'Due'),
(6, 2, 'e-commerce', '20-10-2024', '00-00-00', 'Due'),
(8, 23, 'motercycle', '13-04-2023', '13-05-2023', 'submitted'),
(9, 3, 'ploat stru', '20-10-2024', '20-11-2024', 'submitted');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `eid` int(11) NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`eid`, `point`) VALUES
(1, 3),
(2, 0),
(3, 8),
(5, 4),
(6, 0),
(9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `sid` int(10) NOT NULL,
  `id` int(10) DEFAULT NULL,
  `base` int(10) NOT NULL,
  `bonus` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`sid`, `id`, `base`, `bonus`, `total`) VALUES
(1, 1, 20000, 3, 23000),
(2, 2, 500, 0, 500),
(3, 3, 18000, 4, 20000),
(7, 9, 15000, 1250, 15750),
(9, 6, 45000, 3749, 47250),
(10, 10, 3000, 4, 32000),
(11, 20, 50000, 4165, 52500),
(12, 23, 120000, 9996, 126000),
(13, 25, 8000, 657, 8285),
(14, 26, 25000, 2083, 26250),
(15, 27, 60000, 4998, 63000),
(16, 28, 7890, 657, 8285);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empleave`
--
ALTER TABLE `empleave`
  ADD PRIMARY KEY (`lvid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `employeed`
--
ALTER TABLE `employeed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `empleave`
--
ALTER TABLE `empleave`
  MODIFY `lvid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employeed`
--
ALTER TABLE `employeed`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `empleave`
--
ALTER TABLE `empleave`
  ADD CONSTRAINT `empleave_ibfk_1` FOREIGN KEY (`id`) REFERENCES `employeed` (`id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`id`) REFERENCES `employeed` (`id`);

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`id`) REFERENCES `employeed` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
