-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 10:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `helping_hands`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `roleID` int(11) NOT NULL,
  `roleName` varchar(25) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedOn` timestamp NOT NULL DEFAULT current_timestamp(),
  `isDeleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`roleID`, `roleName`, `createdAt`, `updatedOn`, `isDeleted`) VALUES
(25257672, 'System Admin', '2022-07-04 06:34:51', '2022-07-04 06:34:51', '0'),
(25257674, 'School Admin', '2022-07-04 06:35:27', '2022-07-04 06:35:27', '0'),
(25257675, 'Donor', '2022-07-04 06:36:20', '2022-07-04 06:36:20', '0'),
(25257676, 'Class 8 Candidate', '2022-07-04 06:36:49', '2022-07-04 06:36:49', '0'),
(25257677, 'High School Student', '2022-07-04 06:37:02', '2022-07-04 06:37:02', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userID` int(11) NOT NULL,
  `roleID` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedOn` timestamp NOT NULL DEFAULT current_timestamp(),
  `isDeleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userID`, `roleID`, `email`, `password`, `createdAt`, `updatedOn`, `isDeleted`) VALUES
(84575460, 25257675, 'leon.wafula@gmail.com', '$2y$10$PbyKy.obKJ2C5k5fpPNy8eWcGB20j/CftiVaJoBFjuzt0HaDw6Gua', '2022-07-04 07:42:11', '2022-07-04 07:42:11', '0'),
(84575461, 25257672, 'cindy.bosibori@gmail.com', '$2y$10$n1I9IFBRbuDaYm2VsdBBvOXPgUiIbSLBiTzFj8Ydc6mbRJH2ACzK6', '2022-07-04 07:51:52', '2022-07-04 07:51:52', '0'),
(84575462, 25257674, 'calvin.sendawula@gmail.com', '$2y$10$hoFO8PmVvqqZT/45UIKB3Op7GSBV9BVG3HsXc9PxkvJtLlRZshAzK', '2022-07-04 07:52:41', '2022-07-04 07:52:41', '0'),
(84575463, 25257676, 'betty.zawadi@gmail.com', '$2y$10$OZQ0QrBfXVDM5Y1GDnRWNu6hpPAfoLuCq6m2YpOhqZccMLNUqkaeu', '2022-07-04 07:56:10', '2022-07-04 07:56:10', '0'),
(84575464, 25257677, 'isaac.mwangi@gmail.com', '$2y$10$63291FnrJf.POLHRPLn9iO5rMKEguoSgkUZWZ0u8tzEQMWMI6djle', '2022-07-04 07:57:45', '2022-07-04 07:57:45', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_feedback`
--

CREATE TABLE `tbl_user_feedback` (
  `userFeedbackID` int(15) NOT NULL,
  `userID` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `email` varchar(60) NOT NULL,
  `message` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `isDeleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`roleID`),
  ADD UNIQUE KEY `roleName` (`roleName`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `roleID` (`roleID`);

--
-- Indexes for table `tbl_user_feedback`
--
ALTER TABLE `tbl_user_feedback`
  ADD PRIMARY KEY (`userFeedbackID`),
  ADD KEY `userID` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `roleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25257678;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84575465;

--
-- AUTO_INCREMENT for table `tbl_user_feedback`
--
ALTER TABLE `tbl_user_feedback`
  MODIFY `userFeedbackID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67394262;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`roleID`) REFERENCES `tbl_role` (`roleID`) ON DELETE CASCADE;

--
-- Constraints for table `tbl_user_feedback`
--
ALTER TABLE `tbl_user_feedback`
  ADD CONSTRAINT `tbl_user_feedback_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `tbl_user` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
