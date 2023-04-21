-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 10:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demologin`
--

-- --------------------------------------------------------

--
-- Table structure for table `attachment`
--

CREATE TABLE `attachment` (
  `attachmentID` int(50) NOT NULL,
  `TaskID` int(50) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `filetype` varchar(255) NOT NULL,
  `filesize` bigint(50) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `Datesubmitted` date DEFAULT NULL,
  `Timesubmitted` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attachment`
--

INSERT INTO `attachment` (`attachmentID`, `TaskID`, `filename`, `filetype`, `filesize`, `filepath`, `Datesubmitted`, `Timesubmitted`) VALUES
(63, 8, 'GoodMoral_ZandroDelgado.jpg', 'image/jpeg', 1202143, 'admin/attachmentsdb/GoodMoral_ZandroDelgado.jpg', '2023-04-20', '04:09:05');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `ID` int(111) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `UserID` int(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`ID`, `Name`, `UserID`, `Department`, `Date`, `Time`, `Status`) VALUES
(10106, 'Trexie Lou Villacampa', 10000, 'Teaching', '2023-04-20', '16:00:09', 'Absent'),
(10107, 'Lonalyn Hosanion', 10002, 'Teaching', '2023-04-20', '16:10:29', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `leaveattachment`
--

CREATE TABLE `leaveattachment` (
  `attachmentID` int(11) NOT NULL,
  `requestID` int(11) NOT NULL,
  `attachmentName` varchar(111) NOT NULL,
  `attachmentPath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leavefeedback`
--

CREATE TABLE `leavefeedback` (
  `feedbackID` int(11) NOT NULL,
  `requestID` int(50) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leaverequest`
--

CREATE TABLE `leaverequest` (
  `requestID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Type` varchar(55) NOT NULL,
  `Reason` varchar(255) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `UserID` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Password` int(50) NOT NULL,
  `Department` enum('Teaching','Non-Teaching','Maintenance','') NOT NULL,
  `Occupation` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `Usertype` varchar(50) NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`UserID`, `Name`, `Password`, `Department`, `Occupation`, `Email`, `Contact`, `Usertype`) VALUES
(10000, 'Trexie Lou Villacampa', 1234, 'Teaching', 'English Teacher', 'trexie@gmail.com', 9347383484, 'User'),
(10001, 'Franz Mag-Usara', 1234, 'Teaching', 'Math Teacher', 'franz@gmail.com', 9348739375, 'User'),
(10002, 'Lonalyn Hosanion', 1234, 'Teaching', 'ICT Teacher', 'lonalyn@gmail.com', 9348728374, 'User'),
(10003, 'Alliah Sorono', 1234, 'Non-Teaching', 'Clinic Nurse', 'Alliah@gmail.com', 9348483949, 'User'),
(10004, 'Josh Matthew Valencia', 1234, 'Non-Teaching', 'Guidance Counselor', 'josh@gmail.com', 9348396453, 'User'),
(10005, 'Zandro Francis Delgado', 1234, 'Non-Teaching', 'School Accountant', 'zandrof@gmail.com', 9344853489, 'User'),
(10006, 'Keisha Angela Canque', 1234, 'Maintenance', 'Custodian', 'keishaangela@gmail.com', 9342349876, 'User'),
(10007, 'Trishtian Capangpangan', 1234, 'Maintenance', 'Electrician', 'trishtianc@gmail.com', 9343428976, 'User'),
(10008, 'John Lester Licayan', 1234, 'Maintenance', 'IT Technician', 'lesterlicayan@gmail.com', 9348763476, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `maint`
--

CREATE TABLE `maint` (
  `ID` int(50) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Pass` int(50) NOT NULL,
  `Usertype` varchar(50) NOT NULL DEFAULT 'Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maint`
--

INSERT INTO `maint` (`ID`, `User`, `Pass`, `Usertype`) VALUES
(1, 'admin-Maleen', 1234, 'Admin'),
(2, 'admin-Georgina', 1234, 'Admin'),
(3, 'admin-Laarni', 1234, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messageID` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `recipient` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `timestamp` datetime NOT NULL,
  `senderole` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `TaskID` int(20) NOT NULL,
  `UserID` int(50) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `date` date DEFAULT NULL,
  `Deadline` date NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'Unfinished',
  `Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`TaskID`, `UserID`, `Title`, `Description`, `date`, `Deadline`, `Status`, `Type`) VALUES
(1, 10000, 'Curriculum Development', 'Design and develop a curriculum for English Subject', '2023-04-20', '2023-04-27', 'Unfinished', 'urgent'),
(2, 10000, 'Class 11 STEM 2A Final Enrolled List Record', 'Submit the final list for class 11 STEM 2A.', '2023-04-20', '2023-05-01', 'Unfinished', 'normal'),
(3, 10001, 'Lesson Planning', 'Prepare lesson plans and course materials for math classes', '2023-04-20', '2023-04-28', 'Unfinished', 'personal'),
(4, 10001, 'Assessment', 'Evaluating students\' performance and progress in math subject', '2023-04-20', '2023-05-17', 'Unfinished', 'normal'),
(7, 10002, 'Develop Instructional Materials', 'Create materials that use technology to teach', '2023-04-20', '2023-05-23', 'Unfinished', 'normal'),
(8, 10002, 'Conducting classes', 'Teach students how to use different forms of technology', '2023-04-20', '2023-04-21', 'Approved', 'urgent'),
(9, 10003, 'Medical Assistance for Students with Fever', 'Provide medical assistance to students with unusual fever last April 17, 2022', '2023-04-20', '2023-04-22', 'Unfinished', 'urgent'),
(10, 10003, 'Record-Keeping', 'Maintain and submit medical records of students.', '2023-04-20', '2023-05-03', 'Unfinished', 'normal'),
(11, 10004, 'Daily Counseling Students (Confidential)', 'Provide counseling records for students on academic, personal, and social issues.', '2023-04-20', '2023-05-03', 'Unfinished', 'personal'),
(12, 10004, 'Career Guidance', 'Records of advices to students.', '2023-04-20', '2023-04-27', 'Unfinished', 'personal'),
(13, 10005, 'Budget Management', 'Manage school finances and creating budgets', '2023-04-20', '2023-05-30', 'Unfinished', 'personal'),
(14, 10005, 'Financial Reporting', 'Prepare and present financial reports', '2023-04-20', '2023-04-28', 'Unfinished', 'normal'),
(15, 10006, 'Cleaning and Maintenance', 'Reports of Cleaning the school premises', '2023-04-20', '2023-05-24', 'Unfinished', 'normal'),
(16, 10006, 'Security', 'Ensure the school premises', '2023-04-20', '2023-05-03', 'Unfinished', 'urgent'),
(17, 10007, 'Electrical Repairs', 'Fix the electrical faults at room 1003 and maintain electrical system.', '2023-04-20', '2023-04-21', 'Unfinished', 'urgent'),
(18, 10007, 'Electrical Installation', 'Install electrical system and equipment at the faculty room.', '2023-04-20', '2023-04-27', 'Unfinished', 'urgent'),
(19, 10008, 'Hardware and Software Troubleshooting', 'Troubleshoot hardware and software problems of LMS', '2023-04-20', '2023-05-03', 'Unfinished', 'normal'),
(20, 10008, 'Network Administration', 'Manage and maintain the school\'s computer network.', '2023-04-20', '2023-04-30', 'Unfinished', 'urgent');

-- --------------------------------------------------------

--
-- Table structure for table `taskfeedback`
--

CREATE TABLE `taskfeedback` (
  `feedbackID` int(11) NOT NULL,
  `TaskID` int(50) NOT NULL,
  `rating` int(50) NOT NULL,
  `comment` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taskfeedback`
--

INSERT INTO `taskfeedback` (`feedbackID`, `TaskID`, `rating`, `comment`, `file`, `timestamp`) VALUES
(34, 8, 4, 'Good job, needs more improvement.', '', '2023-04-20 08:09:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attachment`
--
ALTER TABLE `attachment`
  ADD PRIMARY KEY (`attachmentID`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `leaveattachment`
--
ALTER TABLE `leaveattachment`
  ADD PRIMARY KEY (`attachmentID`);

--
-- Indexes for table `leavefeedback`
--
ALTER TABLE `leavefeedback`
  ADD PRIMARY KEY (`feedbackID`);

--
-- Indexes for table `leaverequest`
--
ALTER TABLE `leaverequest`
  ADD PRIMARY KEY (`requestID`);

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `maint`
--
ALTER TABLE `maint`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`TaskID`);

--
-- Indexes for table `taskfeedback`
--
ALTER TABLE `taskfeedback`
  ADD PRIMARY KEY (`feedbackID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attachment`
--
ALTER TABLE `attachment`
  MODIFY `attachmentID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `ID` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10108;

--
-- AUTO_INCREMENT for table `leaveattachment`
--
ALTER TABLE `leaveattachment`
  MODIFY `attachmentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `leavefeedback`
--
ALTER TABLE `leavefeedback`
  MODIFY `feedbackID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leaverequest`
--
ALTER TABLE `leaverequest`
  MODIFY `requestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `UserID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10009;

--
-- AUTO_INCREMENT for table `maint`
--
ALTER TABLE `maint`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `TaskID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `taskfeedback`
--
ALTER TABLE `taskfeedback`
  MODIFY `feedbackID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
