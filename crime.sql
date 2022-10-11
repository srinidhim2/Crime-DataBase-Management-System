-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2022 at 08:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crime`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getcomplaint` ()  SELECT * FROM complaint$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(11) NOT NULL,
  `complaint_type` varchar(30) DEFAULT NULL,
  `complaint_desc` varchar(200) NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `pname` varchar(50) NOT NULL,
  `criminal_id` int(11) DEFAULT NULL,
  `cleared` tinyint(4) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `complaint_type`, `complaint_desc`, `p_id`, `pname`, `criminal_id`, `cleared`, `date`) VALUES
(15, 'Robbery', 'uiiu', NULL, 'admin', NULL, 1, 2020);

--
-- Triggers `complaint`
--
DELIMITER $$
CREATE TRIGGER `deletelog` AFTER DELETE ON `complaint` FOR EACH ROW INSERT INTO logs  VALUES(null, old.complaint_id,old.p_id, 'Deleted',NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertlog` AFTER INSERT ON `complaint` FOR EACH ROW INSERT INTO logs  VALUES(null, NEW.complaint_id,NEW.p_id, 'Inserted',NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updatelog` AFTER UPDATE ON `complaint` FOR EACH ROW INSERT INTO logs values(null, new.complaint_id,new.p_id,"Updated",now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `criminal`
--

CREATE TABLE `criminal` (
  `criminal_id` int(11) NOT NULL,
  `crime_type` varchar(50) NOT NULL,
  `criminal_name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `criminal_add` varchar(50) NOT NULL,
  `criminal_pno` int(11) NOT NULL,
  `cphoto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `c_crime`
--

CREATE TABLE `c_crime` (
  `crime_id` int(11) NOT NULL,
  `crime_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c_crime`
--

INSERT INTO `c_crime` (`crime_id`, `crime_type`) VALUES
(7, 'Burglary'),
(2, 'Domestic violence'),
(3, 'Driving under the influence'),
(4, 'Forgery'),
(5, 'Homicide'),
(6, 'Kidnapping'),
(1, 'Robbery'),
(8, 'Theft');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'Admin', 12345);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `complaint_id` int(11) NOT NULL,
  `police_id` int(11) NOT NULL,
  `action` varchar(20) NOT NULL,
  `cdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `complaint_id`, `police_id`, `action`, `cdate`) VALUES
(1, 6, 5, 'Inserted', '2022-01-26 05:40:36'),
(2, 5, 5, 'Updated', '2022-01-26 05:43:46'),
(3, 6, 5, 'Deleted', '2022-01-26 05:46:10'),
(4, 3, 1, 'Updated', '2022-01-26 06:45:16'),
(5, 5, 6, 'Updated', '2022-01-26 06:45:22'),
(6, 3, 1, 'Updated', '2022-01-26 06:48:02'),
(7, 7, 0, 'Deleted', '2022-01-26 09:09:47'),
(9, 7, 1, 'Inserted', '2022-01-26 10:20:12'),
(10, 8, 1, 'Inserted', '2022-01-26 10:20:38'),
(11, 9, 1, 'Inserted', '2022-01-26 10:21:06'),
(12, 10, 1, 'Inserted', '2022-01-26 10:21:28'),
(13, 5, 1, 'Updated', '2022-01-26 10:22:31'),
(14, 8, 1, 'Updated', '2022-01-26 10:22:39'),
(15, 7, 1, 'Updated', '2022-01-27 00:45:07'),
(16, 9, 1, 'Updated', '2022-01-27 00:45:48'),
(17, 10, 1, 'Updated', '2022-01-27 00:49:02'),
(18, 7, 1, 'Updated', '2022-01-27 00:55:31'),
(19, 11, 14, 'Inserted', '2022-01-27 02:04:44'),
(20, 12, 14, 'Inserted', '2022-01-27 05:26:57'),
(21, 13, 16, 'Inserted', '2022-01-27 08:41:19'),
(22, 13, 16, 'Updated', '2022-01-27 08:42:07'),
(23, 5, 1, 'Updated', '2022-01-27 08:42:50'),
(24, 5, 1, 'Updated', '2022-01-27 08:43:11'),
(25, 8, 1, 'Updated', '2022-01-27 08:43:31'),
(26, 12, 14, 'Updated', '2022-01-27 09:18:44'),
(27, 11, 14, 'Updated', '2022-01-27 09:18:51'),
(28, 12, 14, 'Updated', '2022-01-27 09:19:15'),
(29, 12, 14, 'Updated', '2022-01-27 09:19:17'),
(30, 11, 16, 'Updated', '2022-01-27 10:20:58'),
(31, 1, 1, 'Deleted', '2022-01-28 21:35:24'),
(32, 2, 13, 'Updated', '2022-01-28 21:35:56'),
(33, 2, 13, 'Deleted', '2022-01-28 21:35:59'),
(34, 3, 1, 'Deleted', '2022-01-28 21:36:02'),
(35, 5, 1, 'Deleted', '2022-01-28 21:36:04'),
(36, 7, 1, 'Deleted', '2022-01-28 21:36:06'),
(37, 8, 1, 'Deleted', '2022-01-28 21:36:07'),
(38, 9, 1, 'Deleted', '2022-01-28 21:36:08'),
(39, 10, 1, 'Deleted', '2022-01-28 21:36:11'),
(40, 11, 13, 'Updated', '2022-01-28 21:36:22'),
(41, 12, 1, 'Updated', '2022-01-28 21:36:33'),
(42, 13, 15, 'Updated', '2022-01-28 21:36:47'),
(43, 11, 13, 'Deleted', '2022-01-28 21:36:52'),
(44, 12, 1, 'Deleted', '2022-01-28 21:36:54'),
(45, 13, 15, 'Deleted', '2022-01-28 21:36:55'),
(46, 15, 1, 'Inserted', '2022-01-28 21:39:13'),
(47, 15, 1, 'Updated', '2022-01-28 21:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `logss`
--

CREATE TABLE `logss` (
  `id` int(11) NOT NULL,
  `police_id` int(11) NOT NULL,
  `police_name` varchar(30) NOT NULL,
  `action` varchar(20) NOT NULL,
  `cdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logss`
--

INSERT INTO `logss` (`id`, `police_id`, `police_name`, `action`, `cdate`) VALUES
(5, 1, 'admin', 'Updated', '2022-01-26 09:52:52'),
(6, 10, 'Anooj', 'Deleted', '2022-01-26 09:59:59'),
(7, 11, 'adminas', 'Deleted', '2022-01-26 10:13:44'),
(8, 12, 'admina', 'Deleted', '2022-01-26 10:14:18'),
(9, 1, 'admin', 'Updated', '2022-01-26 10:19:53'),
(10, 16, 'chul', 'Updated', '2022-01-27 08:40:39'),
(11, 14, 'pc', 'Deleted', '2022-01-27 10:16:03'),
(12, 1, 'admin', 'Updated', '2022-01-27 10:54:41'),
(13, 1, 'admin', 'Updated', '2022-01-27 11:01:01'),
(14, 15, 'chandru', 'Updated', '2022-01-27 11:11:14'),
(15, 17, 'Abhi', 'Deleted', '2022-01-28 02:05:52'),
(16, 1, 'admin', 'Updated', '2022-01-28 02:06:46'),
(17, 16, 'chul', 'Deleted', '2022-01-28 21:05:28'),
(18, 15, 'chandru', 'Updated', '2022-01-29 01:46:29'),
(19, 15, 'chandru', 'Updated', '2022-01-29 01:47:00'),
(20, 20, 'madhu', 'Deleted', '2022-01-29 07:13:55'),
(21, 19, 'ganesh', 'Deleted', '2022-01-29 07:14:00'),
(22, 18, 'Ravi', 'Deleted', '2022-01-29 07:14:02'),
(23, 15, 'chandru', 'Deleted', '2022-01-29 07:14:05'),
(24, 13, 'Anooj', 'Deleted', '2022-01-29 07:14:07'),
(25, 1, 'admin', 'Deleted', '2022-01-29 07:14:10'),
(26, 21, 'anooj', 'Updated', '2022-01-29 11:18:27'),
(27, 21, 'anooj', 'Updated', '2022-01-29 11:21:25'),
(28, 21, 'anooj', 'Updated', '2022-01-29 11:36:38'),
(29, 22, 'shree', 'Updated', '2022-01-29 12:22:54'),
(30, 22, 'shree', 'Deleted', '2022-01-29 12:23:37'),
(31, 21, 'anooj', 'Updated', '2022-01-29 12:24:56'),
(32, 24, 'nis', 'Updated', '2022-01-29 12:37:32');

-- --------------------------------------------------------

--
-- Table structure for table `u_login`
--

CREATE TABLE `u_login` (
  `u_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `join_date` date NOT NULL,
  `age` int(11) NOT NULL,
  `user_mob` int(11) NOT NULL,
  `user_mail` varchar(50) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `file_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `u_login`
--

INSERT INTO `u_login` (`u_id`, `username`, `password`, `join_date`, `age`, `user_mob`, `user_mail`, `user_address`, `file_name`) VALUES
(21, 'anooj', '12345', '2022-01-03', 32, 98765432, 'q@gmail.com', 'mijar', 'peakpx.jpg'),
(23, 'yt', '12345', '2222-02-22', 23, 12334, 'hra72020@gmail.com', 'ww', NULL),
(24, 'nis', '12345', '2222-02-22', 23, 233, 'yenne@gmail.com', 'ed', 'image2.jpg');

--
-- Triggers `u_login`
--
DELIMITER $$
CREATE TRIGGER `deletelogss` AFTER DELETE ON `u_login` FOR EACH ROW INSERT INTO logss  VALUES(null, OLD.u_id,OLD.username, 'Deleted',NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updatelogss` AFTER UPDATE ON `u_login` FOR EACH ROW INSERT INTO logss  VALUES(null, NEW.u_id,NEW.username, 'Updated',NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `victim`
--

CREATE TABLE `victim` (
  `victim_id` int(11) NOT NULL,
  `victim_name` varchar(50) NOT NULL,
  `victim_pno` int(11) NOT NULL,
  `victim_add` varchar(50) NOT NULL,
  `vcomplaint_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `victim`
--

INSERT INTO `victim` (`victim_id`, `victim_name`, `victim_pno`, `victim_add`, `vcomplaint_id`) VALUES
(1, 'Small', 123454321, 'asedsf', NULL),
(2, 'qas', 23, 'ss', NULL),
(3, 'pra', 1234, 'qwse', NULL),
(5, '', 0, '', NULL),
(6, 'manoj', 654321234, 'mijar', NULL),
(7, 'anooj', 123, 'awse', NULL),
(8, 'chinmaya', 12332, 'tets', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_id`),
  ADD KEY `complaint_type` (`complaint_type`),
  ADD KEY `complaint_ibfk_1` (`p_id`),
  ADD KEY `complaint_ibfk_2` (`criminal_id`);

--
-- Indexes for table `criminal`
--
ALTER TABLE `criminal`
  ADD PRIMARY KEY (`criminal_id`),
  ADD KEY `crime_type` (`crime_type`);

--
-- Indexes for table `c_crime`
--
ALTER TABLE `c_crime`
  ADD PRIMARY KEY (`crime_type`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logss`
--
ALTER TABLE `logss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `u_login`
--
ALTER TABLE `u_login`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `victim`
--
ALTER TABLE `victim`
  ADD PRIMARY KEY (`victim_id`),
  ADD KEY `vcomplaint_id` (`vcomplaint_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `criminal`
--
ALTER TABLE `criminal`
  MODIFY `criminal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `logss`
--
ALTER TABLE `logss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `u_login`
--
ALTER TABLE `u_login`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `victim`
--
ALTER TABLE `victim`
  MODIFY `victim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `u_login` (`u_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `complaint_ibfk_2` FOREIGN KEY (`criminal_id`) REFERENCES `criminal` (`criminal_id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `criminal`
--
ALTER TABLE `criminal`
  ADD CONSTRAINT `criminal_ibfk_1` FOREIGN KEY (`crime_type`) REFERENCES `c_crime` (`crime_type`) ON DELETE CASCADE;

--
-- Constraints for table `victim`
--
ALTER TABLE `victim`
  ADD CONSTRAINT `victim_ibfk_1` FOREIGN KEY (`vcomplaint_id`) REFERENCES `complaint` (`complaint_id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
