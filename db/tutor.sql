-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2023 at 05:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aemail` varchar(255) NOT NULL,
  `apassword` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aemail`, `apassword`) VALUES
('admin@admin.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appoid` int(11) NOT NULL,
  `studentid` int(10) DEFAULT NULL,
  `apponum` int(3) DEFAULT NULL,
  `scheduleid` int(10) DEFAULT NULL,
  `appodate` date DEFAULT NULL,
  `status` text NOT NULL DEFAULT 'pending'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appoid`, `studentid`, `apponum`, `scheduleid`, `appodate`, `status`) VALUES
(18, 11, 2, 1, '2023-11-26', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseid` int(255) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `coursedescription` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseid`, `coursename`, `coursedescription`) VALUES
(2, 'Computer Programming', 'lorem ipsum'),
(4, 'Database Management', 'lorem ipsum'),
(5, 'sasa', 'asa');

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `blood_sugar` text NOT NULL,
  `blood_pressure` text NOT NULL,
  `weight` text NOT NULL,
  `body_temp` text NOT NULL,
  `prescription` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`id`, `student_id`, `teacher_id`, `blood_sugar`, `blood_pressure`, `weight`, `body_temp`, `prescription`, `date`) VALUES
(2, 10, 1, 'Sequi quas sunt eius', 'Voluptatem facere q', 'Similique voluptatum', 'Impedit necessitati', 'Nisi alias debitis d', '2023-05-28 23:32:25'),
(3, 10, 1, 'Numquam Nam accusamu', 'Sed et cumque ut ill', 'Aute magnam non eos ', 'Et ad hic fugiat eu', 'Ab soluta quis ipsa', '2023-05-28 23:33:51'),
(4, 1, 1, 'Sit beatae consequat', 'Ut et asperiores sim', 'Et\n fugiat consequatu', 'Sapiente eveniet of', 'Incididunt voluptati', '2023-05-28 23:33:57'),
(5, 0, 0, '213121', '2121', '2121', '2121', '2112', '2023-10-05 20:22:50'),
(6, 0, 0, 'sa', 'sas', 'sa', 'sa', 'sa', '2023-10-05 20:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `otp_code` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `scheduleid` int(11) NOT NULL,
  `teacherid` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `scheduledate` date DEFAULT NULL,
  `scheduletime` time DEFAULT NULL,
  `nop` int(4) DEFAULT NULL,
  `app_fee` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`scheduleid`, `teacherid`, `title`, `scheduledate`, `scheduletime`, `nop`, `app_fee`) VALUES
(11, '6', 'Tutor in Advanced Database', '2023-10-12', '22:09:00', 12, 500),
(1, '1', 'Test Session', '2050-01-01', '18:00:00', 50, 200),
(5, '1', '1', '2022-06-10', '20:35:00', 1, 100),
(6, '1', '12', '2022-06-10', '20:35:00', 1, 300),
(9, '6', 'tanggal ulo', '2023-10-05', '22:47:00', 12, 900);

-- --------------------------------------------------------

--
-- Table structure for table `specialties`
--

CREATE TABLE `specialties` (
  `id` int(2) NOT NULL,
  `sname` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `specialties`
--

INSERT INTO `specialties` (`id`, `sname`) VALUES
(1, 'Computer Programming'),
(2, 'Database Management'),
(3, 'Statistic and Probabilities'),
(4, 'Web Development'),
(5, 'Digital Marketing'),
(6, 'Email Marketing'),
(7, 'Cloud Computing'),
(13, 'System Architecture and Design');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentid` int(11) NOT NULL,
  `studentemail` varchar(255) DEFAULT NULL,
  `studentname` varchar(255) DEFAULT NULL,
  `studentpassword` varchar(255) DEFAULT NULL,
  `studentaddress` varchar(255) DEFAULT NULL,
  `studentnic` varchar(15) DEFAULT NULL,
  `studentdob` date DEFAULT NULL,
  `studenttel` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentid`, `studentemail`, `studentname`, `studentpassword`, `studentaddress`, `studentnic`, `studentdob`, `studenttel`) VALUES
(1, 'patient1@gmail.com', 'Bruce Banner', 'asd', 'Cebu', '0000000000', '2000-01-01', '0120000000'),
(2, 'patient2@gmail.com', 'Black Widow', 'asd', 'Cebu', '0110000000', '2022-06-03', '0700000000'),
(10, 'ortegacanillo76@gmail.com', 'asda dadsa', 'asdasd', 'fsdfsd', '2343242', '2023-06-08', '0934534534'),
(14, 'ajmixrhyme@gmail.com', 'Student name', '202cb962ac59075b964b07152d234b70', 'polomolok', '123', '2023-11-28', '0712345678');

-- --------------------------------------------------------

--
-- Table structure for table `student_logs`
--

CREATE TABLE `student_logs` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `logs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_logs`
--

INSERT INTO `student_logs` (`id`, `email`, `date`, `logs`) VALUES
(2, 'patient1@gmail.com', '2023-05-28 15:48:01', 'login'),
(3, 'patient1@gmail.com', '2023-05-28 15:48:08', 'logged out'),
(4, 'patient2@gmail.com', '2023-05-28 15:50:10', 'login'),
(5, 'patient2@gmail.com', '2023-05-28 15:52:42', 'logged out'),
(6, 'patient1@gmail.com', '2023-05-28 15:55:08', 'login'),
(7, 'patient1@gmail.com', '2023-05-28 16:10:43', 'logged out'),
(8, 'ortegacanillo76@gmail.com', '2023-05-28 16:20:35', 'login'),
(9, 'ortegacanillo76@gmail.com', '2023-05-28 16:20:56', 'logged out'),
(10, 'ortegacanillo76@gmail.com', '2023-05-28 23:34:19', 'login'),
(11, 'ortegacanillo76@gmail.com', '2023-05-28 23:50:45', 'logged out'),
(12, 'patient1@gmail.com', '2023-05-28 23:50:48', 'login'),
(13, 'patient2@gmail.com', '2023-05-28 23:50:58', 'login'),
(14, 'cypheruhrzel@gmail.com', '2023-10-05 20:34:40', 'login'),
(15, 'cypheruhrzel@gmail.com', '2023-10-05 21:42:12', 'login'),
(16, 'cypheruhrzel@gmail.com', '2023-10-05 21:45:19', 'login'),
(17, 'cypheruhrzel@gmail.com', '2023-10-05 22:26:52', 'login'),
(18, 'cypheruhrzel@gmail.com', '2023-10-05 22:58:20', 'login'),
(19, 'cypheruhrzel@gmail.com', '2023-10-06 10:21:35', 'login'),
(20, 'cypheruhrzel@gmail.com', '2023-10-06 10:47:52', 'login'),
(21, 'cypheruhrzel@gmail.com', '2023-10-06 10:50:47', 'login'),
(22, 'cypheruhrzel@gmail.com', '2023-10-06 10:52:39', 'login'),
(23, 'cypheruhrzel@gmail.com', '2023-10-06 10:57:31', 'login'),
(24, 'cypheruhrzel@gmail.com', '2023-10-06 22:24:25', 'login'),
(25, 'cypheruhrzel@gmail.com', '2023-10-06 22:30:21', 'logged out'),
(26, 'cypheruhrzel@gmail.com', '2023-10-10 17:59:11', 'login'),
(27, 'cypheruhrzel@gmail.com', '2023-10-12 21:12:15', 'login'),
(28, 'cypheruhrzel@gmail.com', '2023-10-12 22:13:14', 'login'),
(29, 'cypheruhrzel@gmail.com', '2023-10-12 22:25:01', 'logged out'),
(30, 'cypheruhrzel@gmail.com', '2023-10-12 22:25:31', 'login'),
(31, 'cypheruhrzel@gmail.com', '2023-10-12 22:26:24', 'logged out'),
(32, 'cypheruhrzel@gmail.com', '2023-11-11 12:52:12', 'login'),
(33, 'cypheruhrzel@gmail.com', '2023-11-11 12:52:52', 'login'),
(34, 'cypheruhrzel@gmail.com', '2023-11-11 13:17:13', 'logged out'),
(35, 'cypheruhrzel@gmail.com', '2023-11-11 13:18:45', 'login'),
(36, 'cypheruhrzel@gmail.com', '2023-11-11 13:23:38', 'logged out'),
(37, 'cypheruhrzel@gmail.com', '2023-11-11 13:23:42', 'login'),
(38, 'cypheruhrzel@gmail.com', '2023-11-11 13:23:53', 'logged out'),
(39, 'cypheruhrzel@gmail.com', '2023-11-11 13:27:01', 'login'),
(40, 'cypheruhrzel@gmail.com', '2023-11-11 13:29:32', 'logged out'),
(41, 'cypheruhrzel@gmail.com', '2023-11-11 13:29:58', 'login'),
(42, 'cypheruhrzel@gmail.com', '2023-11-11 13:30:20', 'logged out'),
(43, 'cypheruhrzel@gmail.com', '2023-11-11 21:21:23', 'login'),
(44, 'cypheruhrzel@gmail.com', '2023-11-11 21:26:30', 'logged out'),
(45, 'cypheruhrzel@gmail.com', '2023-11-11 21:52:09', 'login'),
(46, 'cypheruhrzel@gmail.com', '2023-11-11 21:53:50', 'logged out'),
(47, 'cypheruhrzel@gmail.com', '2023-11-11 21:55:12', 'login'),
(48, 'cypheruhrzel@gmail.com', '2023-11-11 21:55:18', 'logged out'),
(49, 'cypheruhrzel@gmail.com', '2023-11-12 19:31:14', 'login'),
(50, 'cypheruhrzel@gmail.com', '2023-11-17 20:44:05', 'login'),
(51, 'cypheruhrzel@gmail.com', '2023-11-18 09:02:42', 'login'),
(52, 'cypheruhrzel@gmail.com', '2023-11-18 09:03:02', 'logged out'),
(53, 'cypheruhrzel@gmail.com', '2023-11-18 09:03:22', 'login'),
(54, 'cypheruhrzel@gmail.com', '2023-11-18 09:03:42', 'logged out'),
(55, 'cypheruhrzel@gmail.com', '2023-11-18 10:52:53', 'login'),
(56, 'cypheruhrzel@gmail.com', '2023-11-18 10:52:59', 'logged out'),
(57, 'cypheruhrzel@gmail.com', '2023-11-26 14:01:06', 'login'),
(58, 'cypheruhrzel@gmail.com', '2023-11-26 14:17:54', 'logged out'),
(59, 'cypheruhrzel@gmail.com', '2023-11-26 14:57:53', 'login'),
(60, 'cypheruhrzel@gmail.com', '2023-11-26 15:00:34', 'logged out'),
(61, 'ajmixrhyme@gmail.com', '2023-12-17 18:44:51', 'login'),
(62, 'ajmixrhyme@gmail.com', '2023-12-17 18:45:01', 'logged out'),
(63, 'ajmixrhyme@gmail.com', '2023-12-17 19:02:36', 'login'),
(64, 'ajmixrhyme@gmail.com', '2023-12-17 19:03:01', 'logged out'),
(65, 'ajmixrhyme@gmail.com', '2023-12-17 19:28:43', 'login'),
(66, 'ajmixrhyme@gmail.com', '2023-12-17 19:28:57', 'logged out'),
(67, 'ajmixrhyme@gmail.com', '2023-12-22 12:08:19', 'login'),
(68, 'ajmixrhyme@gmail.com', '2023-12-22 12:08:42', 'logged out');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacherid` int(11) NOT NULL,
  `teacheremail` varchar(255) DEFAULT NULL,
  `teachername` varchar(255) DEFAULT NULL,
  `teacherpassword` varchar(255) DEFAULT NULL,
  `teachernic` varchar(15) DEFAULT NULL,
  `teachertel` varchar(15) DEFAULT NULL,
  `specialties` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacherid`, `teacheremail`, `teachername`, `teacherpassword`, `teachernic`, `teachertel`, `specialties`) VALUES
(18, 'Arzeljrz17@gmail.com', 'Sir Nash', '202cb962ac59075b964b07152d234b70', '123', '123', 4);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_logs`
--

CREATE TABLE `teacher_logs` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `logs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher_logs`
--

INSERT INTO `teacher_logs` (`id`, `email`, `date`, `logs`) VALUES
(2, 'doctor@gmail.com', '2023-05-28 15:53:06', 'login'),
(3, 'doctor@gmail.com', '2023-05-28 15:53:25', 'logged out'),
(4, 'doctor@gmail.com', '2023-05-28 21:16:56', 'login'),
(5, 'doctor@gmail.com', '2023-05-28 23:34:04', 'logged out'),
(6, 'arzeljrz17@gmail.com', '2023-10-05 19:47:57', 'login'),
(7, 'arzeljrz17@gmail.com', '2023-10-05 20:14:18', 'login'),
(8, 'arzeljrz17@gmail.com', '2023-10-05 20:58:46', 'login'),
(9, 'arzeljrz17@gmail.com', '2023-10-05 21:41:38', 'login'),
(10, 'arzeljrz17@gmail.com', '2023-10-05 21:45:07', 'login'),
(11, 'arzeljrz17@gmail.com', '2023-10-05 22:31:05', 'login'),
(12, 'arzeljrz17@gmail.com', '2023-10-05 23:01:00', 'login'),
(13, 'arzeljrz17@gmail.com', '2023-10-05 23:12:01', 'login'),
(14, 'arzeljrz17@gmail.com', '2023-10-06 09:49:33', 'login'),
(15, 'arzeljrz17@gmail.com', '2023-10-06 10:06:30', 'login'),
(16, 'arzeljrz17@gmail.com', '2023-10-06 10:47:33', 'login'),
(17, 'arzeljrz17@gmail.com', '2023-10-06 10:48:05', 'login'),
(18, 'arzeljrz17@gmail.com', '2023-10-06 10:50:38', 'login'),
(19, 'arzeljrz17@gmail.com', '2023-10-06 10:51:23', 'login'),
(20, 'arzeljrz17@gmail.com', '2023-10-06 10:52:51', 'login'),
(21, 'ajmixrhyme@gmail.com', '2023-10-06 10:57:38', 'login'),
(22, 'ajmixrhyme@gmail.com', '2023-10-06 11:02:19', 'login'),
(23, 'arzeljrz17@gmail.com', '2023-10-06 22:30:36', 'login'),
(24, 'arzeljrz17@gmail.com', '2023-10-06 22:31:04', 'login'),
(25, 'arzeljrz17@gmail.com', '2023-10-06 22:31:17', 'logged out'),
(26, 'arzeljrz17@gmail.com', '2023-10-10 17:56:37', 'login'),
(27, 'arzeljrz17@gmail.com', '2023-10-10 17:59:04', 'logged out'),
(28, 'arzeljrz17@gmail.com', '2023-10-12 22:09:40', 'login'),
(29, 'arzeljrz17@gmail.com', '2023-10-12 22:13:09', 'logged out'),
(30, 'arzeljrz17@gmail.com', '2023-11-11 12:21:08', 'login'),
(31, 'arzeljrz17@gmail.com', '2023-11-11 12:28:45', 'login'),
(32, 'arzeljrz17@gmail.com', '2023-11-11 12:30:17', 'logged out'),
(33, 'arzeljrz17@gmail.com', '2023-11-11 12:30:21', 'login'),
(34, 'arzeljrz17@gmail.com', '2023-11-11 12:30:36', 'logged out'),
(35, 'arzeljrz17@gmail.com', '2023-11-11 12:32:45', 'login'),
(36, 'arzeljrz17@gmail.com', '2023-11-11 12:36:20', 'logged out'),
(37, 'arzeljrz17@gmail.com', '2023-11-11 12:37:02', 'login'),
(38, 'arzeljrz17@gmail.com', '2023-11-11 12:43:47', 'login'),
(39, 'arzeljrz17@gmail.com', '2023-11-11 12:45:06', 'login'),
(40, 'arzeljrz17@gmail.com', '2023-11-11 12:51:58', 'logged out'),
(41, 'Arzeljrz17@gmail.com', '2023-11-11 13:17:42', 'login'),
(42, 'Arzeljrz17@gmail.com', '2023-11-11 13:18:42', 'logged out'),
(43, 'Arzeljrz17@gmail.com', '2023-11-11 13:23:57', 'login'),
(44, 'Arzeljrz17@gmail.com', '2023-11-11 13:26:57', 'logged out'),
(45, 'Arzeljrz17@gmail.com', '2023-11-11 21:26:36', 'login'),
(46, 'Arzeljrz17@gmail.com', '2023-11-11 21:52:05', 'logged out'),
(47, 'Arzeljrz17@gmail.com', '2023-11-11 21:53:55', 'login'),
(48, 'Arzeljrz17@gmail.com', '2023-11-11 21:53:57', 'logged out'),
(49, 'Arzeljrz17@gmail.com', '2023-11-11 21:55:25', 'login'),
(50, 'Arzeljrz17@gmail.com', '2023-11-11 21:55:41', 'logged out'),
(51, 'arzeljrz17@gmail.com', '2023-11-18 09:03:06', 'login'),
(52, 'arzeljrz17@gmail.com', '2023-11-18 09:03:19', 'logged out'),
(53, 'arzeljrz17@gmail.com', '2023-11-18 10:52:12', 'login'),
(54, 'arzeljrz17@gmail.com', '2023-11-18 10:52:17', 'logged out'),
(55, 'arzeljrz17@gmail.com', '2023-11-18 10:52:20', 'login'),
(56, 'arzeljrz17@gmail.com', '2023-11-18 10:52:50', 'logged out'),
(57, 'arzeljrz17@gmail.com', '2023-11-26 14:17:59', 'login'),
(58, 'arzeljrz17@gmail.com', '2023-11-26 14:35:10', 'logged out'),
(59, 'arzeljrz17@gmail.com', '2023-11-26 14:35:39', 'login'),
(60, 'arzeljrz17@gmail.com', '2023-11-26 14:35:59', 'logged out'),
(61, 'arzeljrz17@gmail.com', '2023-11-26 14:48:25', 'login'),
(62, 'arzeljrz17@gmail.com', '2023-11-26 14:48:26', 'logged out'),
(63, 'arzeljrz17@gmail.com', '2023-11-26 14:51:01', 'login'),
(64, 'arzeljrz17@gmail.com', '2023-11-26 14:51:02', 'logged out'),
(65, 'arzeljrz17@gmail.com', '2023-11-26 14:51:56', 'login'),
(66, 'arzeljrz17@gmail.com', '2023-11-26 14:52:00', 'logged out'),
(67, 'arzeljrz17@gmail.com', '2023-11-26 15:00:39', 'login'),
(68, 'arzeljrz17@gmail.com', '2023-11-26 15:02:05', 'logged out'),
(69, 'tutorappointment93@gmail.com', '2023-12-17 18:42:46', 'login'),
(70, 'tutorappointment93@gmail.com', '2023-12-17 18:42:50', 'logged out'),
(71, 'tutorappointment93@gmail.com', '2023-12-17 19:01:12', 'login'),
(72, 'tutorappointment93@gmail.com', '2023-12-17 19:01:28', 'logged out'),
(73, 'tutorappointment93@gmail.com', '2023-12-17 19:27:25', 'login'),
(74, 'tutorappointment93@gmail.com', '2023-12-17 19:27:40', 'logged out');

-- --------------------------------------------------------

--
-- Table structure for table `webuser`
--

CREATE TABLE `webuser` (
  `email` varchar(255) NOT NULL,
  `usertype` char(1) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `webuser`
--

INSERT INTO `webuser` (`email`, `usertype`, `status`) VALUES
('admin@admin.com', 'a', 1),
('doctor@gmail.com', 'd', 1),
('patient1@gmail.com', 'p', 1),
('patient2@gmail.com', 'p', 1),
('ortegacanillo76@gmail.com', 'p', 1),
('ajmixrhyme@gmail.com', 'p', 1),
('Arzeljrz17@gmail.com', 'd', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aemail`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appoid`),
  ADD KEY `studentid` (`studentid`),
  ADD KEY `scheduleid` (`scheduleid`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`scheduleid`),
  ADD KEY `teacherid` (`teacherid`);

--
-- Indexes for table `specialties`
--
ALTER TABLE `specialties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `student_logs`
--
ALTER TABLE `student_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacherid`),
  ADD KEY `specialties` (`specialties`);

--
-- Indexes for table `teacher_logs`
--
ALTER TABLE `teacher_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webuser`
--
ALTER TABLE `webuser`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courseid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `description`
--
ALTER TABLE `description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `scheduleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `student_logs`
--
ALTER TABLE `student_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacherid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `teacher_logs`
--
ALTER TABLE `teacher_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
