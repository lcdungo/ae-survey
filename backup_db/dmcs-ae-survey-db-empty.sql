-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 12:12 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dmcs-ae-survey-db-empty`
--

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q1`
--

CREATE TABLE `alum_survey_q1` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q2`
--

CREATE TABLE `alum_survey_q2` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q3`
--

CREATE TABLE `alum_survey_q3` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q4`
--

CREATE TABLE `alum_survey_q4` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q5`
--

CREATE TABLE `alum_survey_q5` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Employed` mediumtext NOT NULL,
  `Characterized` mediumtext NOT NULL,
  `Industry` mediumtext NOT NULL,
  `Other_Ans` mediumtext NOT NULL,
  `Applying` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q6`
--

CREATE TABLE `alum_survey_q6` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Level` mediumtext NOT NULL,
  `Field` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q7`
--

CREATE TABLE `alum_survey_q7` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Level` mediumtext NOT NULL,
  `Field` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q8`
--

CREATE TABLE `alum_survey_q8` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q9`
--

CREATE TABLE `alum_survey_q9` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q10`
--

CREATE TABLE `alum_survey_q10` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Job` mediumtext NOT NULL,
  `Percent` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q11`
--

CREATE TABLE `alum_survey_q11` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Volunteer` mediumtext NOT NULL,
  `Characterized` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q12`
--

CREATE TABLE `alum_survey_q12` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Experience` mediumtext NOT NULL,
  `Necessity` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q13`
--

CREATE TABLE `alum_survey_q13` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q14`
--

CREATE TABLE `alum_survey_q14` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q15`
--

CREATE TABLE `alum_survey_q15` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q16`
--

CREATE TABLE `alum_survey_q16` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q17`
--

CREATE TABLE `alum_survey_q17` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q18`
--

CREATE TABLE `alum_survey_q18` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ques18_arr` text NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alum_survey_q19`
--

CREATE TABLE `alum_survey_q19` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `Elaborate` mediumtext NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contactemp_ques`
--

CREATE TABLE `contactemp_ques` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `companyname` mediumtext NOT NULL,
  `contactperson` mediumtext NOT NULL,
  `contactnumber` mediumtext NOT NULL,
  `contactemail` mediumtext NOT NULL,
  `date_response` date NOT NULL,
  `contacted` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q1`
--

CREATE TABLE `emp_survey_q1` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `answer_others` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q2`
--

CREATE TABLE `emp_survey_q2` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q2_1`
--

CREATE TABLE `emp_survey_q2_1` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `region` text NOT NULL,
  `subregion` text NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q3`
--

CREATE TABLE `emp_survey_q3` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `answer_others` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q4`
--

CREATE TABLE `emp_survey_q4` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q5`
--

CREATE TABLE `emp_survey_q5` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` int(11) NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q6`
--

CREATE TABLE `emp_survey_q6` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q7`
--

CREATE TABLE `emp_survey_q7` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `skill` text NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q8`
--

CREATE TABLE `emp_survey_q8` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `skill` text NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q9`
--

CREATE TABLE `emp_survey_q9` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q10`
--

CREATE TABLE `emp_survey_q10` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q11`
--

CREATE TABLE `emp_survey_q11` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `skill` text NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q12`
--

CREATE TABLE `emp_survey_q12` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `skill` text NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q13`
--

CREATE TABLE `emp_survey_q13` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `answer_others` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q14`
--

CREATE TABLE `emp_survey_q14` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` text NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q15`
--

CREATE TABLE `emp_survey_q15` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `answer_yes` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q16`
--

CREATE TABLE `emp_survey_q16` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `answer_yes` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emp_survey_q17`
--

CREATE TABLE `emp_survey_q17` (
  `answer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer_body` mediumtext NOT NULL,
  `answer_yes` mediumtext NOT NULL,
  `date_response` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `password_request`
--

CREATE TABLE `password_request` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_request` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `token` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pass` varchar(8) NOT NULL,
  `role_id` tinyint(4) NOT NULL,
  `time_created` datetime NOT NULL DEFAULT current_timestamp(),
  `last_login` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `token`, `password`, `pass`, `role_id`, `time_created`, `last_login`) VALUES
(1, 'dmcs.survey.test1@gmail.com', 'bbf073a951128bc7beff931d97845715e08ff3744445f6cd8324d2565f4c32f65c31262cdc54e5abe022e499f34a2248504b', '$2y$10$e45H4/zzpxHEKiEdqPK02eknJKZyXTVGScKHRATLBF5.W8km4vUMy', 'admin', 0, '2021-06-24 18:11:37', '2021-06-24 18:11:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alum_survey_q1`
--
ALTER TABLE `alum_survey_q1`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q2`
--
ALTER TABLE `alum_survey_q2`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q3`
--
ALTER TABLE `alum_survey_q3`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q4`
--
ALTER TABLE `alum_survey_q4`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q5`
--
ALTER TABLE `alum_survey_q5`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q6`
--
ALTER TABLE `alum_survey_q6`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q7`
--
ALTER TABLE `alum_survey_q7`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q8`
--
ALTER TABLE `alum_survey_q8`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q9`
--
ALTER TABLE `alum_survey_q9`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q10`
--
ALTER TABLE `alum_survey_q10`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- Indexes for table `alum_survey_q11`
--
ALTER TABLE `alum_survey_q11`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q12`
--
ALTER TABLE `alum_survey_q12`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q13`
--
ALTER TABLE `alum_survey_q13`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q14`
--
ALTER TABLE `alum_survey_q14`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q15`
--
ALTER TABLE `alum_survey_q15`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q16`
--
ALTER TABLE `alum_survey_q16`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q17`
--
ALTER TABLE `alum_survey_q17`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q18`
--
ALTER TABLE `alum_survey_q18`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `alum_survey_q19`
--
ALTER TABLE `alum_survey_q19`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `contactemp_ques`
--
ALTER TABLE `contactemp_ques`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q1`
--
ALTER TABLE `emp_survey_q1`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q2`
--
ALTER TABLE `emp_survey_q2`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q2_1`
--
ALTER TABLE `emp_survey_q2_1`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q3`
--
ALTER TABLE `emp_survey_q3`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q4`
--
ALTER TABLE `emp_survey_q4`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q5`
--
ALTER TABLE `emp_survey_q5`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q6`
--
ALTER TABLE `emp_survey_q6`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q7`
--
ALTER TABLE `emp_survey_q7`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q8`
--
ALTER TABLE `emp_survey_q8`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q9`
--
ALTER TABLE `emp_survey_q9`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q10`
--
ALTER TABLE `emp_survey_q10`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q11`
--
ALTER TABLE `emp_survey_q11`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q12`
--
ALTER TABLE `emp_survey_q12`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q13`
--
ALTER TABLE `emp_survey_q13`
  ADD PRIMARY KEY (`answer_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q14`
--
ALTER TABLE `emp_survey_q14`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q15`
--
ALTER TABLE `emp_survey_q15`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q16`
--
ALTER TABLE `emp_survey_q16`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `emp_survey_q17`
--
ALTER TABLE `emp_survey_q17`
  ADD PRIMARY KEY (`answer_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `password_request`
--
ALTER TABLE `password_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alum_survey_q1`
--
ALTER TABLE `alum_survey_q1`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q2`
--
ALTER TABLE `alum_survey_q2`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q3`
--
ALTER TABLE `alum_survey_q3`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q4`
--
ALTER TABLE `alum_survey_q4`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q5`
--
ALTER TABLE `alum_survey_q5`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q6`
--
ALTER TABLE `alum_survey_q6`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q7`
--
ALTER TABLE `alum_survey_q7`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q8`
--
ALTER TABLE `alum_survey_q8`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q9`
--
ALTER TABLE `alum_survey_q9`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q10`
--
ALTER TABLE `alum_survey_q10`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q11`
--
ALTER TABLE `alum_survey_q11`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q12`
--
ALTER TABLE `alum_survey_q12`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q13`
--
ALTER TABLE `alum_survey_q13`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q14`
--
ALTER TABLE `alum_survey_q14`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q15`
--
ALTER TABLE `alum_survey_q15`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q16`
--
ALTER TABLE `alum_survey_q16`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q17`
--
ALTER TABLE `alum_survey_q17`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q18`
--
ALTER TABLE `alum_survey_q18`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alum_survey_q19`
--
ALTER TABLE `alum_survey_q19`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactemp_ques`
--
ALTER TABLE `contactemp_ques`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q1`
--
ALTER TABLE `emp_survey_q1`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q2`
--
ALTER TABLE `emp_survey_q2`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q2_1`
--
ALTER TABLE `emp_survey_q2_1`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q3`
--
ALTER TABLE `emp_survey_q3`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q4`
--
ALTER TABLE `emp_survey_q4`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q5`
--
ALTER TABLE `emp_survey_q5`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q6`
--
ALTER TABLE `emp_survey_q6`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q7`
--
ALTER TABLE `emp_survey_q7`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q8`
--
ALTER TABLE `emp_survey_q8`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q9`
--
ALTER TABLE `emp_survey_q9`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q10`
--
ALTER TABLE `emp_survey_q10`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q11`
--
ALTER TABLE `emp_survey_q11`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q12`
--
ALTER TABLE `emp_survey_q12`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q13`
--
ALTER TABLE `emp_survey_q13`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q14`
--
ALTER TABLE `emp_survey_q14`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q15`
--
ALTER TABLE `emp_survey_q15`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q16`
--
ALTER TABLE `emp_survey_q16`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_survey_q17`
--
ALTER TABLE `emp_survey_q17`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `password_request`
--
ALTER TABLE `password_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
