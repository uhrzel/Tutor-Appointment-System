-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2023 at 06:34 AM
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
(7, 1, 1, 1, '2023-05-28', 'approved'),
(8, 11, 1, 9, '2023-10-05', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
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
-- Dumping data for table `doctor`
--

INSERT INTO `teacher` (`teacherid`, `teacheremail`, `teachername`, `teacherpassword`, `teachernic`, `teachertel`, `specialties`) VALUES
(1, 'doctor@gmail.com', 'Steve Rogers', 'asd', '000000000', '0110000000', 1),
(6, 'arzeljrz17@gmail.com', 'cdoc', '202cb962ac59075b964b07152d234b70', '123', '092102192', 2);

-- --------------------------------------------------------

--
-- Table structure for table `medical`
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
-- Dumping data for table `medical`
--

INSERT INTO `description` (`id`, `student_id`, `teacher_id`, `blood_sugar`, `blood_pressure`, `weight`, `body_temp`, `prescription`, `date`) VALUES
(2, 10, 1, 'Sequi quas sunt eius', 'Voluptatem facere q', 'Similique voluptatum', 'Impedit necessitati', 'Nisi alias debitis d', '2023-05-28 23:32:25'),
(3, 10, 1, 'Numquam Nam accusamu', 'Sed et cumque ut ill', 'Aute magnam non eos ', 'Et ad hic fugiat eu', 'Ab soluta quis ipsa', '2023-05-28 23:33:51'),
(4, 1, 1, 'Sit beatae consequat', 'Ut et asperiores sim', 'Et
 fugiat consequatu', 'Sapiente eveniet of', 'Incididunt voluptati', '2023-05-28 23:33:57');

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
-- Table structure for table `patient`
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
-- Dumping data for table `patient`
--

INSERT INTO `student` (`studentid`, `studentemail`, `studentname`, `studentpassword`, `studentaddress`, `studentnic`, `studentdob`, `studenttel`) VALUES
(1, 'patient1@gmail.com', 'Bruce Banner', 'asd', 'Cebu', '0000000000', '2000-01-01', '0120000000'),
(2, 'patient2@gmail.com', 'Black Widow', 'asd', 'Cebu', '0110000000', '2022-06-03', '0700000000'),
(10, 'ortegacanillo76@gmail.com', 'asda dadsa', 'asdasd', 'fsdfsd', '2343242', '2023-06-08', '0934534534'),
(11, 'cypheruhrzel@gmail.com', 'Arzel John Zolina', '202cb962ac59075b964b07152d234b70', 'polomolok', '123', '2001-09-10', '0505051545');

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
  `nop` int(4) DEFAULT NULL
  `app_fee` int(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`scheduleid`, `teacherid`, `title`, `scheduledate`, `scheduletime`, `nop`, `app_fee`) VALUES
(1, '1', 'Test Session', '2050-01-01', '18:00:00', 50, 200),
(2, '1', '1', '2022-06-10', '20:36:00', 1, 500),
(3, '1', '12', '2022-06-10', '20:33:00', 1, 200),
(4, '1', '1', '2022-06-10', '12:32:00', 1, 100),
(5, '1', '1', '2022-06-10', '20:35:00', 1, 100),
(6, '1', '12', '2022-06-10', '20:35:00', 1, 300),
(9, '6', 'tanggal ulo', '2023-10-05', '22:47:00', 12,900);

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
(13, 'patient2@gmail.com', '2023-05-28 23:50:58', 'login');

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
(5, 'doctor@gmail.com', '2023-05-28 23:34:04', 'logged out');

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
('cypheruhrzel@gmail.com', 'p', 1),
('arzeljrz17@gmail.com', 'd', 1);

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
-- Indexes for table `doctor`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacherid`),
  ADD KEY `specialties` (`specialties`);

--
-- Indexes for table `medical`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentid`);

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
-- Indexes for table `student_logs`
--
ALTER TABLE `student_logs`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `appoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `teacher`
  MODIFY `teacherid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `medical`
--
ALTER TABLE `description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `student`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `scheduleid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `student_logs`
--
ALTER TABLE `student_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `teacher_logs`
--
ALTER TABLE `teacher_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
