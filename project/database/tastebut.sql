-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 10:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tastebut`
--

-- --------------------------------------------------------

--
-- Table structure for table `approved_statements`
--

CREATE TABLE `approved_statements` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `statementdescription` varchar(255) NOT NULL,
  `statementfile` varchar(255) NOT NULL,
  `cadetid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `approved_statements`
--

INSERT INTO `approved_statements` (`id`, `number`, `statementdescription`, `statementfile`, `cadetid`) VALUES
(52, 0, 'number one statement', 'ApplicationSenior FIVE entrepreneurship MARKING SCHEME.docx', NULL),
(53, 0, 'number one statement', 'ApplicationSenior FIVE entrepreneurship MARKING SCHEME.docx', NULL),
(54, 0, 'number one statement', 'ApplicationSenior FIVE entrepreneurship MARKING SCHEME.docx', NULL),
(55, 0, 'number one statement', 'ApplicationSenior FIVE entrepreneurship MARKING SCHEME.docx', NULL),
(56, 0, 'number one statement', 'ApplicationSenior FIVE entrepreneurship MARKING SCHEME.docx', 0),
(57, 0, 'number one statement', 'ApplicationSenior FIVE entrepreneurship MARKING SCHEME.docx', NULL),
(58, 0, 'ahaa again', 'rdf.jpeg', NULL),
(59, 0, 'wapi', 'images.png', NULL),
(60, 0, 'wapi', 'images.png', 0),
(61, 0, 'ivan', 'download.jpeg', 0),
(62, 0, 'ivan', 'download.jpeg', 0),
(63, 0, 'ivan', 'download.jpeg', 0),
(64, 0, 'ivan', 'download.jpeg', 0),
(65, 0, 'ivan', 'download.jpeg', 0),
(66, 0, 'ivan', 'download.jpeg', 0),
(67, 0, 'ivan', 'download.jpeg', 0),
(68, 0, 'ivan', 'download.jpeg', 5),
(69, 0, 'ivan', 'download.jpeg', 5),
(70, 0, 'ok', 'download.jpeg', 12),
(71, 0, 'elesye teste another one', 'images.png', 2),
(72, 0, 'eleyse second test', 'download.jpeg', 2),
(73, 0, 'aha byanze', 'rdf.jpeg', 2),
(74, 0, 'elyse another test now', 'download.jpeg', 2),
(75, 0, 'ahahahaha', 'rdf.jpeg', 2),
(76, 0, 'ahaa again', 'rdf.jpeg', 2),
(77, 0, 'fdbdfbdfbfx', 'download.jpeg', 7),
(78, 0, 'bfbfbf', 'rdf.jpeg', 7),
(79, 0, 'hhhhds', 'rdf.jpeg', 7),
(80, 0, 'hahahaa', 'Concurrency and Concurrency Control.pptx', 1),
(81, 0, 'sdsdser', 'Advantages of Concurrency.docx', 1),
(82, 0, 'dsbbdsd', 'Advantages of Concurrency.docx', 1),
(83, 0, 'rekareka', 'Advantages of Concurrency.docx', 1),
(84, 0, 'test and test', 'Advantages of Concurrency.docx', 4),
(85, 0, 'elyse nanaone', 'rdf.jpeg', 2),
(86, 0, 'dfwvwefwe', '(DIEUDONNE BYIRINGIRO)car essence perfume and car wash database.accdb', 18),
(87, 0, 'egrgerg', '(DIEUDONNE BYIRINGIRO)car essence perfume and car wash database.accdb', 18),
(88, 0, 'dvsdfsdf', '(DIEUDONNE BYIRINGIRO)car essence perfume and car wash database.accdb', 18),
(89, 0, 'refused to run', 'LETTER confirm.pdf', 4),
(90, 0, 'yanze kwiruka', 'images.png', 12),
(91, 0, 'bfdbfabafbfbff fdbfbfdbfdba', 'LETTER confirm.pdf', 27);

-- --------------------------------------------------------

--
-- Table structure for table `cadet`
--

CREATE TABLE `cadet` (
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `joindate` date DEFAULT NULL,
  `rollno` int(11) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `platoon` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `parentsname` varchar(255) DEFAULT NULL,
  `parentsno` varchar(255) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `bloodgrp` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `cadetid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cadet`
--

INSERT INTO `cadet` (`fname`, `lname`, `email`, `joindate`, `rollno`, `company`, `platoon`, `gender`, `number`, `parentsname`, `parentsno`, `dateofbirth`, `bloodgrp`, `address`, `profile_image`, `cadetid`) VALUES
('Byiringiro', 'Dieudonne', 'dieudonnebyiringiro2020@gmail.com', '0000-00-00', 223026513, 'A- Company', 'P-2', 'Male', '0786296962', 'Mukasamari angel aline', '0790039602', '0000-00-00', 'O+', NULL, 'profile.PNG', 1),
('Niyonzima', 'Elyse', 'dieudonnebyiringiro2020@gmail.com', '0000-00-00', 22323, 'A- Company', 'P-3', 'Male', '0788602555', 'Uwase Alice', '0786296962', '0000-00-00', 'A+', NULL, 'images.png', 2),
('Mugisha ', 'Frank', 'gatesiemmy08@gmail.com', '0000-00-00', 147785, 'C- Company', 'P-2', 'Gender', '5078885858', 'Mukasamari angel aline', '0790039458', '0000-00-00', 'O+', NULL, 'images.png', 3),
('Bizimana', 'Dieudonne', 'boris@gmail.com', '0000-00-00', 0, 'A- Company', 'P-1', 'Male', '5078885858', 'Angel', '0790039602', '0000-00-00', '', NULL, 'images.png', 4),
('Umwalli', 'Ange', 'niyonzima@gmail.com', '0000-00-00', 4587, 'B- Company', 'P-3', 'Gender', '50788847454', 'Uwase Alice', '0790039411', '0000-00-00', 'A+', NULL, 'images.png', 9),
('Habiyambere', 'Kercy', 'niyonzima@gmail.com', '0000-00-00', 478523, 'A- Company', 'P-3', 'Female', '078884852', 'Uwase Alice', '0790039411', '0000-00-00', 'A+', NULL, 'images.png', 11),
('Byiringiro', 'Olivier', 'byiringirodie@gmail.com', '0000-00-00', 0, 'B- Company', 'P-3', 'Male', '5078885858', 'Mukasamari angel aline', '0786296962', '0000-00-00', 'A+', NULL, 'images.png', 12),
('Murenzi', 'Clement', 'byiringirodie@gmail.com', '0000-00-00', 487896, 'C- Company', 'P-2', 'Male', '5078885858', 'Mukasamari angel aline', '0786296962', '0000-00-00', 'A+', NULL, 'images.png', 13),
('Nzabamwita', 'Clement', 'boris@gmail.com', '0000-00-00', 487896, 'C- Company', 'P-2', 'Male', '0789022483', 'Mukasamari angel aline', '0786296962', '0000-00-00', 'A+', NULL, 'images.png', 14),
('Sibo', 'Emmanuel', 'boris@gmail.com', '0000-00-00', 152586626, 'B- Company', 'P-2', 'Male', '0789022124', 'Mukasamari angel aline', '0786296962', '0000-00-00', 'O+', NULL, 'images.png', 15),
('Nsabimana ', 'James', 'ronsard@gmail.com', '0000-00-00', 12132, 'C- Company', 'P-2', 'Male', '0786262626', 'Mukasamari angel aline', '0790039411', '0000-00-00', 'O+', NULL, 'rdf.jpeg', 17),
('Muhorakeye ', 'Anne', 'niyonzima@gmail.com', '0000-00-00', 0, 'B- Company', 'P-2', 'Female', '7777777777', 'Angel', '0790039411', '0000-00-00', 'A+', NULL, 'rdf.jpeg', 18),
('Gakoko', '', '', '0000-00-00', 0, 'A- Company', 'P-1', 'Gender', '', '', '', '0000-00-00', '', NULL, 'rdf.jpeg', 19),
('Kamanzi ', 'David', '', '0000-00-00', 0, 'A- Company', 'P-1', 'Gender', '', '', '', '0000-00-00', '', NULL, 'rdf.jpeg', 20),
('dieudonne', '', 'niyonzima@gmail.com', '0000-00-00', 0, 'A- Company', 'P-1', 'Gender', '', '', '', '0000-00-00', '', NULL, 'download.jpeg', 21),
('test nofifi', 'Frank', 'gatesiemmy08@gmail.com', '0000-00-00', 0, 'A- Company', 'P-1', 'Gender', '', '', '', '0000-00-00', '', NULL, 'images.png', 22),
('test nofifi', 'Frank', '', '0000-00-00', 0, 'A- Company', 'P-1', 'Gender', '', '', '', '0000-00-00', '', NULL, 'images.png', 23),
('hacking ', 'rutwe', '', '0000-00-00', 0, 'A- Company', 'P-1', 'Gender', '', '', '', '0000-00-00', '', NULL, 'rdf.jpeg', 24),
('testing another one', 'now', '', '0000-00-00', 0, 'A- Company', 'P-1', 'Gender', '', '', '', '0000-00-00', '', NULL, 'rdf.jpeg', 25),
('kabandi', 'Ivan', '', '0000-00-00', 0, 'A- Company', 'P-1', 'Gender', '', '', '', '0000-00-00', '', NULL, 'rdf.jpeg', 26),
('ahaa', 'ehee', '', '0000-00-00', 0, 'A- Company', 'P-1', 'Gender', '', '', '', '0000-00-00', '', NULL, 'download.jpeg', 27),
('Rugirangoga', '', '', '0000-00-00', 0, 'A- Company', 'P-1', 'Gender', '', '', '', '0000-00-00', '', NULL, 'download.jpeg', 28),
('dieudonne', 'Ivan', '', '0000-00-00', 0, 'A- Company', 'P-1', 'Gender', '', '', '', '0000-00-00', '', NULL, 'images.png', 29),
('matwitwi', 'Elyse', '', '0000-00-00', 0, 'A- Company', 'P-1', 'Gender', '', '', '', '0000-00-00', '', NULL, 'rdf.jpeg', 30),
('dieudonne', 'Dieudonne', '', '0000-00-00', 0, 'A- Company', 'P-1', 'Gender', '', '', '', '0000-00-00', '', NULL, 'download.jpeg', 31),
('Mugisha ', '', '', '0000-00-00', 0, 'A- Company', 'P-1', 'Gender', '', '', '', '0000-00-00', '', NULL, 'rdf.jpeg', 32),
('Rubimbura ', 'david', '', '0000-00-00', 5855666, 'B- Company', 'P-3', 'Gender', '14552232665+', '', '', '0000-00-00', '', NULL, 'rdf.jpeg', 33),
('ira', 'rehobot', 'byiringirodie@gmail.com', '0000-00-00', 4578545, 'B- Company', 'P-2', 'Male', '1212121212', 'Mukasamari angel aline', '0790039602', '0000-00-00', 'O+', NULL, 'download.jpeg', 34),
('Rutwaza ', 'Nelson', 'rutwaza@gmail.com', '0000-00-00', 125465665, 'B- Company', 'P-2', 'Male', '21511515151', 'Mukasamari angel aline', '0790039458', '0000-00-00', 'A+', NULL, 'rdf.jpeg', 35),
('Elisa', 'Elisa1', 'elosa@gmail.com', '0000-00-00', 629529595, 'B- Company', 'P-3', 'Male', '08', 'Uwase Alice', '07862969628', '0000-00-00', 'A+', NULL, 'rdf.jpeg', 36);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notification_id` int(11) NOT NULL,
  `cadetid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `notification_type` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notification_id`, `cadetid`, `userid`, `notification_type`, `description`, `timestamp`, `status`) VALUES
(0, 2, NULL, 'Statement', 'User with ID 2 has uploaded a new statement.', '2023-12-18 13:06:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `permission_name` varchar(255) DEFAULT NULL,
  `role_name` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `userid`, `permission_name`, `role_name`, `fname`, `lname`) VALUES
(6, 38, 'statements', 'Instructor', 'Niyonzima ', 'Elyse'),
(7, 39, 'statements', 'admin', 'admin', 'admin'),
(9, 37, 'statements', 'Platoon Commander', 'Byiringiro', 'Dieudonne'),
(10, 41, 'statements', 'Company Commander', 'kwizera', 'james'),
(11, 43, 'statements', 'admin', 'Habimana', 'Mourice'),
(12, 44, 'statements', 'Company Commander', 'Gasasira', 'Emmy'),
(14, 45, 'statements', 'Platoon Commander', 'Izihirwe', 'Blaise'),
(20, 36, 'add cadet', 'Health', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `rejected_statements`
--

CREATE TABLE `rejected_statements` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `statementdescription` varchar(255) NOT NULL,
  `statementfile` varchar(255) NOT NULL,
  `cadetid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rejected_statements`
--

INSERT INTO `rejected_statements` (`id`, `number`, `statementdescription`, `statementfile`, `cadetid`) VALUES
(36, 0, 'number one statement', 'ApplicationSenior FIVE entrepreneurship MARKING SCHEME.docx', NULL),
(37, 0, 'number one statement', 'ApplicationSenior FIVE entrepreneurship MARKING SCHEME.docx', NULL),
(38, 0, 'wapi', 'images.png', 0),
(39, 0, 'number one statement', 'ApplicationSenior FIVE entrepreneurship MARKING SCHEME.docx', 20),
(40, 0, 'wapi', 'images.png', 9),
(41, 0, 'rugirangoga test', 'rdf.jpeg', 6),
(42, 0, 'fbefbawebwbdbbrbaerae', '(DIEUDONNE BYIRINGIRO)car essence perfume and car wash database.accdb', 14);

-- --------------------------------------------------------

--
-- Table structure for table `statements`
--

CREATE TABLE `statements` (
  `statementid` int(11) NOT NULL,
  `number` int(11) DEFAULT NULL,
  `statementdescription` varchar(255) DEFAULT NULL,
  `statementfile` longblob DEFAULT NULL,
  `cadetid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `statements`
--

INSERT INTO `statements` (`statementid`, `number`, `statementdescription`, `statementfile`, `cadetid`) VALUES
(183, NULL, 'mugisha', 0x696d616765732e706e67, 3),
(184, NULL, 'mugisha', 0x696d616765732e706e67, NULL),
(207, NULL, 'ange test', 0x696d616765732e706e67, 9),
(208, NULL, 'ange test', 0x696d616765732e706e67, 9),
(209, NULL, 'ange test', 0x696d616765732e706e67, 9),
(210, NULL, 'ange test', 0x696d616765732e706e67, 9),
(211, NULL, 'ange test', 0x696d616765732e706e67, 9),
(214, NULL, 'kuraya cyane ', 0x7264662e6a706567, 12),
(215, NULL, 'kuraya cyane ', 0x7264662e6a706567, 12),
(221, NULL, 'rugirangoga test', 0x646f776e6c6f61642e6a706567, 6),
(222, NULL, 'rugirangoga test', 0x646f776e6c6f61642e6a706567, 6),
(225, NULL, 'scscss', 0x646f776e6c6f61642e6a706567, 6),
(226, NULL, 'rugirangoga trial', 0x696d616765732e706e67, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `joindate` date DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `number` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `rank` varchar(50) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fname`, `lname`, `email`, `joindate`, `password`, `number`, `gender`, `rank`, `department`, `dateofbirth`, `profile_image`, `status`) VALUES
(36, 'Rugirangoga', 'Ronsard', 'ronsard@gmail.com', '0000-00-00', '$2y$10$HNEwhVB/zSVNOsVLsqt5z.ky.ze9olvwcQlBAINsGBVd0wdmIR5x.', '0788602555', 'Male', 'Major', 'Health', '0000-00-00', NULL, 'unblock'),
(38, 'Niyonzima', 'Elyse', 'niyonzima@gmail.com', '0000-00-00', '$2y$10$m7/XNe.eI3dFgvkykNILp.0SI0mUBAGvsGqh4vNaA9lobL4O3QAAq', '0788602558', 'Male', 'sergent', 'Instructor', '0000-00-00', NULL, NULL),
(41, 'Kwizera', 'James', 'kwizera@gmail.com', '0000-00-00', '$2y$10$z2RG2MnP5qqSjS5aJtuQZukDm.yPMuBAqrvKErx9JpdG2t/le9wr2', '0785248752', 'Male', 'Captain', 'Company Commander', '0000-00-00', NULL, 'unblock'),
(43, 'Habimana', 'Mourice', 'admin@gmail.com', '0000-00-00', '$2y$10$5Kd.1.M91PaZtGJ5SS/txeG2CxSkLi7664yrZogLMSRHbiQD.ueHi', '5078885877', 'Male', 'Lieutnant', 'Instructor', '0000-00-00', 'desktopimages.png', NULL),
(44, 'Gasasira', 'Emmy', 'company@gmail.com', '0000-00-00', '$2y$10$ZtrRKdeMf1yO6kMF8WPZZuhm562DM7nZeb4yILUzgc.ntiokXBj42', '5078885819', 'Gender', 'Captain', 'Company Commander', '0000-00-00', NULL, NULL),
(45, 'Izihirwe', 'Blaise', 'platoon1@gmail.com', '0000-00-00', '$2y$10$KyXMFXH3np4iZ5t9icOcouPDUYmJpXaMsv6hDh3LhsJp/F2uhstue', '0785252557', 'Male', 'Lieutnant', 'Platoon Commander', '0000-00-00', NULL, NULL),
(46, 'Rukundo', 'Kevin ', 'rukundo@gmail.com', '0000-00-00', '$2y$10$cteYs./E9W12SbUDKBTxj.66WTRK4H63nJoLXYihXjZXzq.2RvtWe', '020510515', 'Male', 'Captain', 'Instructor', '0000-00-00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_cadet_assignment`
--

CREATE TABLE `user_cadet_assignment` (
  `assignment_id` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `cadetid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_cadet_assignment`
--

INSERT INTO `user_cadet_assignment` (`assignment_id`, `userid`, `cadetid`) VALUES
(296, 44, 1),
(297, 44, 2),
(298, 44, 4),
(299, 44, 11),
(300, 44, 19),
(301, 44, 20),
(302, 44, 21),
(303, 44, 22),
(304, 44, 23),
(305, 44, 24),
(306, 44, 25),
(307, 44, 26),
(308, 44, 27),
(309, 44, 28),
(310, 44, 29),
(311, 44, 30),
(312, 44, 31),
(313, 44, 32),
(329, 45, 4),
(330, 45, 19),
(331, 45, 20),
(332, 45, 21),
(333, 45, 22),
(334, 45, 23),
(335, 45, 24),
(336, 45, 25),
(337, 45, 26),
(338, 45, 27),
(339, 45, 28),
(340, 45, 29),
(341, 45, 30),
(342, 45, 31),
(343, 45, 32);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approved_statements`
--
ALTER TABLE `approved_statements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cadet`
--
ALTER TABLE `cadet`
  ADD PRIMARY KEY (`cadetid`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rejected_statements`
--
ALTER TABLE `rejected_statements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statements`
--
ALTER TABLE `statements`
  ADD PRIMARY KEY (`statementid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `user_cadet_assignment`
--
ALTER TABLE `user_cadet_assignment`
  ADD PRIMARY KEY (`assignment_id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `cadetid` (`cadetid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approved_statements`
--
ALTER TABLE `approved_statements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `cadet`
--
ALTER TABLE `cadet`
  MODIFY `cadetid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `rejected_statements`
--
ALTER TABLE `rejected_statements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `statements`
--
ALTER TABLE `statements`
  MODIFY `statementid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `user_cadet_assignment`
--
ALTER TABLE `user_cadet_assignment`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=344;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_cadet_assignment`
--
ALTER TABLE `user_cadet_assignment`
  ADD CONSTRAINT `user_cadet_assignment_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`),
  ADD CONSTRAINT `user_cadet_assignment_ibfk_2` FOREIGN KEY (`cadetid`) REFERENCES `cadet` (`cadetid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
