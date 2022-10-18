-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 11:30 AM
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
-- Table structure for table `tbl_cause`
--

CREATE TABLE `tbl_cause` (
  `causeID` int(11) NOT NULL,
  `causeTitle` varchar(255) NOT NULL,
  `schoolName` varchar(255) NOT NULL,
  `causeDetails` varchar(255) NOT NULL,
  `amountRaised` int(10) NOT NULL,
  `targetAmount` int(10) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedOn` timestamp NOT NULL DEFAULT current_timestamp(),
  `isDeleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cause`
--

INSERT INTO `tbl_cause` (`causeID`, `causeTitle`, `schoolName`, `causeDetails`, `amountRaised`, `targetAmount`, `createdAt`, `updatedOn`, `isDeleted`) VALUES
(59872484, 'Help class 8 children', 'Madaraka Primary School', 'We are raising money to help our candidates as they join high school.', 72000, 100000, '2022-07-18 04:31:32', '2022-07-18 04:31:32', '0'),
(59872485, 'Mercy Atieno', 'Khalsa Girls Secondary School', 'I need your assistance to proceed to form 2.', 19000, 28000, '2022-07-18 04:40:21', '2022-07-18 04:40:21', '0'),
(59872486, 'Dan Njoroge', 'Nanyuki High School', 'Your donations will help pay my Form 3 school fees for term 2.', 15000, 25000, '2022-07-18 04:41:36', '2022-07-18 04:41:36', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cause_details`
--

CREATE TABLE `tbl_cause_details` (
  `causeID` int(11) NOT NULL,
  `causeTitle` varchar(255) NOT NULL,
  `schoolName` varchar(255) NOT NULL,
  `causeDetails` varchar(1000) NOT NULL,
  `amountRaised` int(10) NOT NULL,
  `targetAmount` int(10) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedOn` timestamp NOT NULL DEFAULT current_timestamp(),
  `isDeleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cause_details`
--

INSERT INTO `tbl_cause_details` (`causeID`, `causeTitle`, `schoolName`, `causeDetails`, `amountRaised`, `targetAmount`, `createdAt`, `updatedOn`, `isDeleted`) VALUES
(59872484, 'Help class 8 children', 'Madaraka Primary School', 'We are raising money to help our candidates as they join high school. These students come from impoverished backgrounds. They are not able to raise the entry fees required for joining high school. Some of them end up dropping out of school while others miss out on their slots in their schools of choice. Kindly help us send these children to school.', 72000, 100000, '2022-07-18 04:31:32', '2022-07-18 04:31:32', '0'),
(59872485, 'Mercy Atieno', 'Khalsa Girls Secondary School', 'My name is Mercy Atieno and I need your assistance to proceed to form 2. I have a single mother and 4 younger siblings. My mother is not able to raise my fees. I am forced to work over the holidays in order to raise money and help my mother pay my fees, but because of COVID, our business has been struggling. Please help me stay in school. ', 19000, 28000, '2022-07-18 04:40:21', '2022-07-18 04:40:21', '0'),
(59872486, 'Dan Njoroge', 'Nanyuki High School', 'I go by the names Dan Njoroge. I am currently a form 3 student at Nanyuki High School. I was not able to stay in school during my second term because I have an outstanding fee balance which I am supposed to clear before resuming my studies. I need your assistance to raise the money required of me to proceed so I can catch up with the work my classmates are given.', 15000, 25000, '2022-07-18 04:41:36', '2022-07-18 04:41:36', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donation`
--

CREATE TABLE `tbl_donation` (
  `donationID` int(11) NOT NULL,
  `donationAmount` int(6) NOT NULL,
  `donorName` varchar(255) NOT NULL,
  `donorEmail` varchar(255) NOT NULL,
  `donorPhone` varchar(13) NOT NULL,
  `donationPaymentMethod` enum('MPESA','PayPal') NOT NULL DEFAULT 'MPESA',
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedOn` timestamp NOT NULL DEFAULT current_timestamp(),
  `isDeleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donor`
--

CREATE TABLE `tbl_donor` (
  `donorID` int(11) NOT NULL,
  `donorName` varchar(255) NOT NULL,
  `donorEmail` varchar(255) NOT NULL,
  `donorPhone` varchar(13) NOT NULL,
  `donorLocation` varchar(60) DEFAULT NULL,
  `total` int(7) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedOn` timestamp NOT NULL DEFAULT current_timestamp(),
  `isDeleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_donor`
--

INSERT INTO `tbl_donor` (`donorID`, `donorName`, `donorEmail`, `donorPhone`, `donorLocation`, `total`, `createdAt`, `updatedOn`, `isDeleted`) VALUES
(78625744, 'Lynn Nafula', 'lynn.nafula@gmail.com', '+254553817036', 'Rongai', 2500, '2022-07-18 03:47:59', '2022-07-18 03:47:59', '0'),
(78625745, 'Alvin Kyalo', 'alvin.kyalo@gmail.com', '+254358185114', 'Karen', 30000, '2022-07-18 03:49:03', '2022-07-18 03:49:03', '0'),
(78625746, 'John Omondi', 'john.omondi@gmail.com', '+254788421844', 'Ruaka', 5000, '2022-07-18 03:50:18', '2022-07-18 03:50:18', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donor_payment`
--

CREATE TABLE `tbl_donor_payment` (
  `donorPaymentID` int(11) NOT NULL,
  `donorName` varchar(255) NOT NULL,
  `donorEmail` varchar(255) NOT NULL,
  `donorPhone` varchar(13) NOT NULL,
  `donorPaymentMethod` varchar(60) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedOn` timestamp NOT NULL DEFAULT current_timestamp(),
  `isDeleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `eventID` int(11) NOT NULL,
  `eventDate` int(2) NOT NULL,
  `eventMonth` varchar(25) NOT NULL,
  `eventStartTime` varchar(25) NOT NULL,
  `eventEndTime` varchar(25) NOT NULL,
  `eventDescription` varchar(255) NOT NULL,
  `eventLocation` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedOn` timestamp NOT NULL DEFAULT current_timestamp(),
  `isDeleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`eventID`, `eventDate`, `eventMonth`, `eventStartTime`, `eventEndTime`, `eventDescription`, `eventLocation`, `createdAt`, `updatedOn`, `isDeleted`) VALUES
(28727466, 25, 'August', '09.00am', '03.00pm', 'Tree planting exercise', 'Ole Sangale Road', '2022-07-18 03:52:30', '2022-07-18 03:52:30', '0'),
(28727467, 16, 'October', '10.00am', '05.00pm', 'Nawiri Sisters Foundation event to raise funds for sanitary pads', 'Ole Sangale Road', '2022-07-18 03:53:37', '2022-07-18 03:53:37', '0'),
(28727468, 27, 'September', '09.00am', '03.00pm', 'Sports day obstacle race event', 'Ole Sangale Road', '2022-07-18 03:54:25', '2022-07-18 03:54:25', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedbackID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `isDeleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedbackID`, `name`, `email`, `phone`, `subject`, `message`, `createdAt`, `isDeleted`) VALUES
(53148842, 'Leonard Akinyi', 'leonard.akinyi@gmail.com', '+254786922126', 'Feedback', 'Great website functionality', '2022-07-18 07:50:30', '0'),
(53148843, 'Martha Kerubo', 'martha.kerubo@gmail.com', '+254761579771', 'Feedback', 'Well, it seems to be working as it should', '2022-07-18 07:52:04', '0'),
(53148844, 'Ethel Njeru', 'ethel.njeru@gmail.com', '+254788504679', 'Suggestion', 'Please review the payment methods. Accept Bitcoin!', '2022-07-18 07:53:08', '0'),
(53148845, 'Herman Odhiambo', 'herman.odhiambo@gmail.com', '+254755108916', 'Feedback', 'I love the subscription feature.', '2022-07-18 07:54:02', '0'),
(53148846, 'Betty Wambati', 'betty.wambati@gmail.com', '+254747756339', 'Complaint', 'It would be nice to see multiple themes. I want it red.', '2022-07-18 07:54:51', '0'),
(53148847, 'Phillip Kamagu', 'phillip.kamagu@gmail.com', '+254766795878', 'Feedback', 'Hats off to the team. Good work.', '2022-07-18 07:55:42', '0');

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
-- Table structure for table `tbl_sponsor`
--

CREATE TABLE `tbl_sponsor` (
  `sponsorID` int(11) NOT NULL,
  `sponsorName` varchar(255) NOT NULL,
  `sponsorGender` varchar(13) NOT NULL,
  `sponsorEmail` varchar(255) NOT NULL,
  `sponsorMethodOfInformation` varchar(255) NOT NULL,
  `sponsorNationalID` varchar(255) NOT NULL DEFAULT 'nationalID.jpg',
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedOn` timestamp NOT NULL DEFAULT current_timestamp(),
  `isDeleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_class_8`
--

CREATE TABLE `tbl_student_class_8` (
  `studentClass8ID` int(11) NOT NULL,
  `studentClass8FName` varchar(255) NOT NULL,
  `studentClass8MName` varchar(255) DEFAULT NULL,
  `studentClass8LName` varchar(255) NOT NULL,
  `studentClass8KCPEIndexNo` int(13) NOT NULL,
  `studentClass8Email` varchar(255) DEFAULT NULL,
  `studentClass8Stream` varchar(25) DEFAULT NULL,
  `studentClass8GuardianContact` varchar(13) NOT NULL,
  `studentClass8GuardianNatIdOrPassportNo` varchar(15) NOT NULL,
  `studentClass8SponsorAChildStatus` enum('Inactive','Requested','Pending','Approved','Rejected') NOT NULL DEFAULT 'Inactive',
  `studentClass8SponsorAChildStatusRejectionMessage` enum('Indiscipline','Request Withdrawn','Invalid Documents','Other') NOT NULL DEFAULT 'Other',
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedOn` timestamp NOT NULL DEFAULT current_timestamp(),
  `isDeleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student_class_8`
--

INSERT INTO `tbl_student_class_8` (`studentClass8ID`, `studentClass8FName`, `studentClass8MName`, `studentClass8LName`, `studentClass8KCPEIndexNo`, `studentClass8Email`, `studentClass8Stream`, `studentClass8GuardianContact`, `studentClass8GuardianNatIdOrPassportNo`, `studentClass8SponsorAChildStatus`, `studentClass8SponsorAChildStatusRejectionMessage`, `createdAt`, `updatedOn`, `isDeleted`) VALUES
(55991574, 'George', '', 'Mwangi', 2040759201, 'george.mwangi@gmail.com', 'A', '0753543235', '14894045', 'Approved', 'Other', '2022-07-18 16:47:24', '2022-07-18 16:47:24', '0'),
(55991575, 'Estella', '', 'Wawuda', 2040759209, 'estella.wawuda@gmail.com', 'D', '0724715463', '13311441', 'Pending', 'Other', '2022-07-18 16:48:57', '2022-07-18 16:48:57', '0'),
(55991576, 'Lucy', '', 'Wawira', 2040759265, 'lucy.wawira@gmail.com', 'A', '0710621606', '12141960', 'Inactive', 'Other', '2022-07-18 16:49:59', '2022-07-18 16:49:59', '0'),
(55991577, 'Peter', '', 'Lenku', 2040759248, 'peter.lenku@gmail.com', 'C', '0738750594', '11891359', 'Approved', 'Other', '2022-07-18 16:51:13', '2022-07-18 16:51:13', '0'),
(55991578, 'Abdi', '', 'Hassan', 2040759265, 'abdi.hassan@gmail.com', 'B', '0737024742', '12220878', 'Requested', 'Other', '2022-07-18 16:52:46', '2022-07-18 16:52:46', '0'),
(55991579, 'Sally', NULL, 'Mwaniki', 2040759271, 'sally.mwaniki@gmail.com', 'B', '0708296345', '11781249', 'Rejected', 'Request Withdrawn', '2022-07-18 16:54:45', '2022-07-18 16:54:45', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_sponsored`
--

CREATE TABLE `tbl_student_sponsored` (
  `studentSponsoredID` int(11) NOT NULL,
  `studentSponsoredFName` varchar(255) NOT NULL,
  `studentSponsoredMName` varchar(255) DEFAULT NULL,
  `studentSponsoredLName` varchar(255) NOT NULL,
  `studentSponsoredAmountRaised` int(6) NOT NULL,
  `studentSponsoredTargetAmount` int(6) NOT NULL,
  `studentSponsoredDonationClosingDate` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedOn` timestamp NOT NULL DEFAULT current_timestamp(),
  `isDeleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student_sponsored`
--

INSERT INTO `tbl_student_sponsored` (`studentSponsoredID`, `studentSponsoredFName`, `studentSponsoredMName`, `studentSponsoredLName`, `studentSponsoredAmountRaised`, `studentSponsoredTargetAmount`, `studentSponsoredDonationClosingDate`, `createdAt`, `updatedOn`, `isDeleted`) VALUES
(64534138, 'George', NULL, 'Mwangi', 22000, 46000, 'Jan 16, 2023', '2022-07-18 16:56:46', '2022-07-18 16:56:46', '0'),
(64534139, 'Peter', NULL, 'Lenku', 19000, 28000, 'Jan 14, 2023', '2022-07-18 16:57:27', '2022-07-18 16:57:27', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_testimonial`
--

CREATE TABLE `tbl_student_testimonial` (
  `studentTestimonialID` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `studentName` varchar(60) NOT NULL,
  `school` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedOn` timestamp NOT NULL DEFAULT current_timestamp(),
  `isDeleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student_testimonial`
--

INSERT INTO `tbl_student_testimonial` (`studentTestimonialID`, `title`, `message`, `studentName`, `school`, `grade`, `createdAt`, `updatedOn`, `isDeleted`) VALUES
(71777258, 'It has helped me so much.', 'Helping Hands provided the jump <br>start I needed to join high school.', 'Isaac Mwangi', 'Molo Academy', 'Form 3 student ', '2022-07-18 03:56:24', '2022-07-18 03:56:24', '0'),
(71777259, 'Thank you for your support.', 'Thank you so much for making it possible <br>for me to join high school. I am very happy <br>to be a part of your program.', 'Lucas Wahome', 'Agoro Sare High School', 'Form 1 student  ', '2022-07-18 03:57:52', '2022-07-18 03:57:52', '0'),
(71777260, 'Amazing opportunity.', 'I am excited to be joining <br>Nanyuki girls\' School next year and it is all <br>thanks to your donations', 'Betty Zawadi', 'Madaraka Primary School', 'Class 8 student ', '2022-07-18 03:59:06', '2022-07-18 03:59:06', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team_member`
--

CREATE TABLE `tbl_team_member` (
  `teamMemberID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedOn` timestamp NOT NULL DEFAULT current_timestamp(),
  `isDeleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_team_member`
--

INSERT INTO `tbl_team_member` (`teamMemberID`, `name`, `position`, `createdAt`, `updatedOn`, `isDeleted`) VALUES
(80165623, 'Cindy Bosibori', 'Co-Founder', '2022-07-18 04:00:14', '2022-07-18 04:00:14', '0'),
(80165624, 'Calvin Sendawula', 'Co-Founder', '2022-07-18 04:00:32', '2022-07-18 04:00:32', '0'),
(80165625, 'Ruth Githinji', 'Ground Person', '2022-07-18 04:01:04', '2022-07-18 04:01:04', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userID` int(11) NOT NULL,
  `roleID` int(11) NOT NULL,
  `roleName` varchar(60) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedOn` timestamp NOT NULL DEFAULT current_timestamp(),
  `isDeleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userID`, `roleID`, `roleName`, `name`, `email`, `password`, `createdAt`, `updatedOn`, `isDeleted`) VALUES
(84575460, 25257675, 'Donor', 'Leon Wafula', 'leon.wafula@gmail.com', '$2y$10$PbyKy.obKJ2C5k5fpPNy8eWcGB20j/CftiVaJoBFjuzt0HaDw6Gua', '2022-07-04 07:42:11', '2022-07-04 07:42:11', '0'),
(84575461, 25257672, 'System Admin', 'Cindy Bosibori', 'cindy.bosibori@gmail.com', '$2y$10$n1I9IFBRbuDaYm2VsdBBvOXPgUiIbSLBiTzFj8Ydc6mbRJH2ACzK6', '2022-07-04 07:51:52', '2022-07-04 07:51:52', '0'),
(84575462, 25257674, 'School Admin', 'Calvin Sendawula', 'calvin.sendawula@gmail.com', '$2y$10$hoFO8PmVvqqZT/45UIKB3Op7GSBV9BVG3HsXc9PxkvJtLlRZshAzK', '2022-07-04 07:52:41', '2022-07-04 07:52:41', '0'),
(84575463, 25257676, 'Class 8 Candidate', 'Betty Zawadi', 'betty.zawadi@gmail.com', '$2y$10$OZQ0QrBfXVDM5Y1GDnRWNu6hpPAfoLuCq6m2YpOhqZccMLNUqkaeu', '2022-07-04 07:56:10', '2022-07-04 07:56:10', '0'),
(84575464, 25257677, 'High School Student', 'Isaac Mwangi', 'isaac.mwangi@gmail.com', '$2y$10$63291FnrJf.POLHRPLn9iO5rMKEguoSgkUZWZ0u8tzEQMWMI6djle', '2022-07-04 07:57:45', '2022-07-04 07:57:45', '0');

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
-- Indexes for table `tbl_cause`
--
ALTER TABLE `tbl_cause`
  ADD PRIMARY KEY (`causeID`);

--
-- Indexes for table `tbl_cause_details`
--
ALTER TABLE `tbl_cause_details`
  ADD PRIMARY KEY (`causeID`);

--
-- Indexes for table `tbl_donation`
--
ALTER TABLE `tbl_donation`
  ADD PRIMARY KEY (`donationID`);

--
-- Indexes for table `tbl_donor`
--
ALTER TABLE `tbl_donor`
  ADD PRIMARY KEY (`donorID`);

--
-- Indexes for table `tbl_donor_payment`
--
ALTER TABLE `tbl_donor_payment`
  ADD PRIMARY KEY (`donorPaymentID`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`eventID`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedbackID`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`roleID`),
  ADD UNIQUE KEY `roleName` (`roleName`);

--
-- Indexes for table `tbl_sponsor`
--
ALTER TABLE `tbl_sponsor`
  ADD PRIMARY KEY (`sponsorID`);

--
-- Indexes for table `tbl_student_class_8`
--
ALTER TABLE `tbl_student_class_8`
  ADD PRIMARY KEY (`studentClass8ID`);

--
-- Indexes for table `tbl_student_sponsored`
--
ALTER TABLE `tbl_student_sponsored`
  ADD PRIMARY KEY (`studentSponsoredID`);

--
-- Indexes for table `tbl_student_testimonial`
--
ALTER TABLE `tbl_student_testimonial`
  ADD PRIMARY KEY (`studentTestimonialID`);

--
-- Indexes for table `tbl_team_member`
--
ALTER TABLE `tbl_team_member`
  ADD PRIMARY KEY (`teamMemberID`);

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
-- AUTO_INCREMENT for table `tbl_cause`
--
ALTER TABLE `tbl_cause`
  MODIFY `causeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59872487;

--
-- AUTO_INCREMENT for table `tbl_cause_details`
--
ALTER TABLE `tbl_cause_details`
  MODIFY `causeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59872487;

--
-- AUTO_INCREMENT for table `tbl_donation`
--
ALTER TABLE `tbl_donation`
  MODIFY `donationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40442782;

--
-- AUTO_INCREMENT for table `tbl_donor`
--
ALTER TABLE `tbl_donor`
  MODIFY `donorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78625747;

--
-- AUTO_INCREMENT for table `tbl_donor_payment`
--
ALTER TABLE `tbl_donor_payment`
  MODIFY `donorPaymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57447862;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `eventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28727469;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedbackID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53148848;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `roleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25257678;

--
-- AUTO_INCREMENT for table `tbl_sponsor`
--
ALTER TABLE `tbl_sponsor`
  MODIFY `sponsorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79015993;

--
-- AUTO_INCREMENT for table `tbl_student_class_8`
--
ALTER TABLE `tbl_student_class_8`
  MODIFY `studentClass8ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55991582;

--
-- AUTO_INCREMENT for table `tbl_student_sponsored`
--
ALTER TABLE `tbl_student_sponsored`
  MODIFY `studentSponsoredID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64534146;

--
-- AUTO_INCREMENT for table `tbl_student_testimonial`
--
ALTER TABLE `tbl_student_testimonial`
  MODIFY `studentTestimonialID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71777261;

--
-- AUTO_INCREMENT for table `tbl_team_member`
--
ALTER TABLE `tbl_team_member`
  MODIFY `teamMemberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80165626;

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
