-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 11:28 AM
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
-- Database: `dmcs-ae-survey-db`
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

--
-- Dumping data for table `alum_survey_q1`
--

INSERT INTO `alum_survey_q1` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 12, 'Female', '2021-06-16'),
(2, 13, 'Male', '2021-06-16'),
(3, 14, 'Male', '2021-06-16'),
(4, 15, 'Female', '2021-06-16'),
(5, 16, 'Female', '2021-06-16'),
(6, 17, 'Female', '2021-06-16'),
(7, 19, 'Male', '2021-06-16'),
(8, 18, 'Female', '2021-06-16'),
(9, 20, 'Female', '2021-06-16'),
(10, 21, 'Male', '2021-06-16'),
(11, 8, 'Female', '2021-06-21'),
(12, 67, 'Female', '2021-06-21'),
(13, 68, 'Female', '2021-06-21');

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

--
-- Dumping data for table `alum_survey_q2`
--

INSERT INTO `alum_survey_q2` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 12, 'Philippines', '2021-06-16'),
(2, 13, 'India', '2021-06-16'),
(3, 14, 'Yemen', '2021-06-16'),
(4, 15, 'Afghanistan', '2021-06-16'),
(5, 16, 'Australia', '2021-06-16'),
(6, 17, 'France', '2021-06-16'),
(7, 19, 'Mexico', '2021-06-16'),
(8, 18, 'North Korea', '2021-06-16'),
(9, 20, 'Russia', '2021-06-16'),
(10, 21, 'Iceland', '2021-06-16'),
(11, 8, 'Algeria', '2021-06-21'),
(12, 67, 'Afghanistan', '2021-06-21'),
(13, 68, 'Algeria', '2021-06-21');

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

--
-- Dumping data for table `alum_survey_q3`
--

INSERT INTO `alum_survey_q3` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 12, 'Generally Satisfied', '2021-06-16'),
(2, 13, 'Very Satisfied', '2021-06-16'),
(3, 14, 'Generally Dissatisfied', '2021-06-16'),
(4, 15, 'Very Satisfied', '2021-06-16'),
(5, 16, 'Very Satisfied', '2021-06-16'),
(6, 17, 'Very Dissatisfied', '2021-06-16'),
(7, 19, 'Generally Satisfied', '2021-06-16'),
(8, 18, 'Generally Satisfied', '2021-06-16'),
(9, 20, 'Generally Satisfied', '2021-06-16'),
(10, 21, 'Generally Satisfied', '2021-06-16'),
(11, 8, 'Generally Dissatisfied', '2021-06-21'),
(12, 67, 'Generally Satisfied', '2021-06-21'),
(13, 68, 'Generally Satisfied', '2021-06-21');

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

--
-- Dumping data for table `alum_survey_q4`
--

INSERT INTO `alum_survey_q4` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 13, '2 months or less', '2021-06-16'),
(2, 14, 'I got a job while still in college', '2021-06-16'),
(3, 15, 'I got a job while still in college', '2021-06-16'),
(4, 17, 'I am not sure', '2021-06-16'),
(5, 19, '1 to 2 years', '2021-06-16'),
(6, 18, '1 to 2 years', '2021-06-16'),
(7, 20, '7 months to 1 year', '2021-06-16');

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

--
-- Dumping data for table `alum_survey_q5`
--

INSERT INTO `alum_survey_q5` (`answer_id`, `user_id`, `Employed`, `Characterized`, `Industry`, `Other_Ans`, `Applying`, `date_response`) VALUES
(1, 12, 'No', '', '', '', 'Yes', '2021-06-16'),
(2, 13, 'Yes', 'Self-employed', 'other', 'Something else', 'NA', '2021-06-16'),
(3, 14, 'Yes', 'Full time (40 hours/week)', 'Media and Communication', '', 'NA', '2021-06-16'),
(4, 15, 'Yes', 'Full time (40 hours/week)', 'Activities of Households as Employers; Undifferentiated Goods-and Services-producing Activities of Households for Own Use', '', 'NA', '2021-06-16'),
(5, 16, 'No', '', '', '', 'No', '2021-06-16'),
(6, 17, 'Yes', 'Full time (40 hours/week)', 'Real Estate Activities', '', 'NA', '2021-06-16'),
(7, 19, 'Yes', 'Self-employed', 'Finance, Banks, and Insurance', '', 'NA', '2021-06-16'),
(8, 18, 'Yes', 'Full time (40 hours/week)', 'Human Health and Social Work Activities', '', 'NA', '2021-06-16'),
(9, 20, 'Yes', 'Full time (40 hours/week)', 'Public Administration and Defense; Compulsory Social Security', '', 'NA', '2021-06-16'),
(10, 21, 'No', '', '', '', 'No', '2021-06-16'),
(11, 8, 'No', 'NA', 'NA', 'NA', 'No', '2021-06-21'),
(12, 67, 'No', 'NA', 'NA', 'NA', 'No', '2021-06-21'),
(13, 68, 'No', 'NA', 'NA', 'NA', 'No', '2021-06-21'),
(14, 2, 'No', 'NA', 'NA', 'NA', 'No', '2021-06-24');

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

--
-- Dumping data for table `alum_survey_q6`
--

INSERT INTO `alum_survey_q6` (`answer_id`, `user_id`, `Level`, `Field`, `date_response`) VALUES
(1, 13, 'High school', 'NA', '2021-06-16'),
(2, 14, 'Some college', 'NA', '2021-06-16'),
(3, 15, 'High school', 'NA', '2021-06-16'),
(4, 17, 'Bachelor’s degree', 'Business Administration', '2021-06-16'),
(5, 19, 'Bachelor’s degree', 'Accounting', '2021-06-16'),
(6, 18, 'Bachelor’s degree', 'Medicine', '2021-06-16'),
(7, 20, 'Some college', 'NA', '2021-06-16');

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

--
-- Dumping data for table `alum_survey_q7`
--

INSERT INTO `alum_survey_q7` (`answer_id`, `user_id`, `Level`, `Field`, `date_response`) VALUES
(1, 13, 'High school', 'NA', '2021-06-16'),
(2, 14, 'Bachelor’s degree', 'Comm Arts', '2021-06-16'),
(3, 15, 'High school', 'NA', '2021-06-16'),
(4, 17, 'Bachelor’s degree', 'Business Administration', '2021-06-16'),
(5, 19, 'Bachelor’s degree', 'Accounting', '2021-06-16'),
(6, 18, 'Doctoral degree', 'Medicine', '2021-06-16'),
(7, 20, 'Some college', 'NA', '2021-06-16');

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

--
-- Dumping data for table `alum_survey_q8`
--

INSERT INTO `alum_survey_q8` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 12, 'Technicians and Associate Professionals', '2021-06-16'),
(2, 13, 'Skilled Agricultural, Forestry and Fishery Workers', '2021-06-16'),
(3, 14, 'Managers', '2021-06-16'),
(4, 15, 'Clerical Support Workers', '2021-06-16'),
(5, 16, 'Elementary Occupations (e.g. laborers and unskilled workers, domestic helpers, etc.)', '2021-06-16'),
(6, 17, 'Skilled Agricultural, Forestry and Fishery Workers', '2021-06-16'),
(7, 19, 'Professionals', '2021-06-16'),
(8, 18, 'Professionals', '2021-06-16'),
(9, 20, 'Plant and Machine Operators, and Assemblers', '2021-06-16'),
(10, 21, 'Armed Forces Occupations', '2021-06-16'),
(11, 8, 'Craft and Related Trade Workers', '2021-06-21'),
(12, 67, 'Clerical Support Workers', '2021-06-21'),
(13, 68, 'Craft and Related Trade Workers', '2021-06-21'),
(14, 2, 'Technicians and Associate Professionals', '2021-06-24');

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

--
-- Dumping data for table `alum_survey_q9`
--

INSERT INTO `alum_survey_q9` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 13, 'No, it is not related', '2021-06-16'),
(2, 14, 'No, it is not related', '2021-06-16'),
(3, 15, 'Yes, it is related to my major/s', '2021-06-16'),
(4, 17, 'Yes, it is the same field as my major/s', '2021-06-16'),
(5, 19, 'Yes, it is related to my major/s', '2021-06-16'),
(6, 18, 'Yes, it is the same field as my major/s', '2021-06-16'),
(7, 20, 'No, it is not related', '2021-06-16');

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

--
-- Dumping data for table `alum_survey_q10`
--

INSERT INTO `alum_survey_q10` (`answer_id`, `user_id`, `Job`, `Percent`, `date_response`) VALUES
(1, 13, 'Something', '100', '2021-06-16'),
(2, 14, 'Everything', '10', '2021-06-16'),
(3, 14, 'Something', '10', '2021-06-16'),
(4, 15, 'To work', '40', '2021-06-16'),
(5, 15, 'To work harder', '60', '2021-06-16'),
(6, 17, 'To work', '100', '2021-06-16'),
(7, 19, 'To work', '60', '2021-06-16'),
(8, 19, 'Something', '20', '2021-06-16'),
(9, 19, 'Everything', '20', '2021-06-16'),
(10, 18, 'To heal', '100', '2021-06-16'),
(11, 20, 'Everything', '100', '2021-06-16');

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

--
-- Dumping data for table `alum_survey_q11`
--

INSERT INTO `alum_survey_q11` (`answer_id`, `user_id`, `Volunteer`, `Characterized`, `date_response`) VALUES
(1, 12, 'Yes', 'Part time', '2021-06-16'),
(2, 13, 'No', 'NA', '2021-06-16'),
(3, 14, 'No', 'NA', '2021-06-16'),
(4, 15, 'No', 'NA', '2021-06-16'),
(5, 16, 'Yes', 'Full time (40 hours/week)', '2021-06-16'),
(6, 17, 'Yes', 'Full time (40 hours/week)', '2021-06-16'),
(7, 19, 'No', 'NA', '2021-06-16'),
(8, 18, 'Yes', 'Full time (40 hours/week)', '2021-06-16'),
(9, 20, 'Yes', 'Full time (40 hours/week)', '2021-06-16'),
(10, 21, 'Yes', 'Full time (40 hours/week)', '2021-06-16'),
(11, 8, 'No', 'NA', '2021-06-21'),
(12, 67, 'No', 'NA', '2021-06-21'),
(13, 68, 'No', 'NA', '2021-06-21'),
(14, 2, 'No', 'NA', '2021-06-24');

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

--
-- Dumping data for table `alum_survey_q12`
--

INSERT INTO `alum_survey_q12` (`answer_id`, `user_id`, `Experience`, `Necessity`, `date_response`) VALUES
(1, 13, 'No experience', 'Just because', '2021-06-16'),
(2, 14, 'Less than one (1) year', 'Because they said', '2021-06-16'),
(3, 15, 'No experience', 'I just feel it', '2021-06-16'),
(4, 17, 'Three (3) to six (6) years', 'Because reasons', '2021-06-16'),
(5, 19, 'Less than one (1) year', 'Because reasons', '2021-06-16'),
(6, 18, 'More than six (6+) years', 'Because it it', '2021-06-16'),
(7, 20, 'No experience', 'Reasons', '2021-06-16');

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

--
-- Dumping data for table `alum_survey_q13`
--

INSERT INTO `alum_survey_q13` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 12, 'More than adequately', '2021-06-16'),
(2, 13, 'More than adequately', '2021-06-16'),
(3, 14, 'Less than adequately', '2021-06-16'),
(4, 15, 'Very well', '2021-06-16'),
(5, 16, 'Very well', '2021-06-16'),
(6, 17, 'Very well', '2021-06-16'),
(7, 19, 'Very well', '2021-06-16'),
(8, 18, 'More than adequately', '2021-06-16'),
(9, 20, 'More than adequately', '2021-06-16'),
(10, 21, 'More than adequately', '2021-06-16'),
(11, 8, 'More than adequately', '2021-06-21'),
(12, 67, 'More than adequately', '2021-06-21'),
(13, 68, 'More than adequately', '2021-06-21'),
(14, 2, 'Less than adequately', '2021-06-24');

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

--
-- Dumping data for table `alum_survey_q14`
--

INSERT INTO `alum_survey_q14` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 13, 'Entry-level', '2021-06-16'),
(2, 14, 'Supervisory', '2021-06-16'),
(3, 15, 'Chief Executive (CEO, COO, CFO, GM, or principal in  Managerial a business or organization)', '2021-06-16'),
(4, 17, 'Executive level (except Chief Executive)', '2021-06-16'),
(5, 19, 'Supervisory', '2021-06-16'),
(6, 18, 'Executive level (except Chief Executive)', '2021-06-16'),
(7, 20, 'Entry-level', '2021-06-16');

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

--
-- Dumping data for table `alum_survey_q15`
--

INSERT INTO `alum_survey_q15` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 13, 'None at all', '2021-06-16'),
(2, 14, 'Some of my time (up to 25% of my time)', '2021-06-16'),
(3, 15, 'Most of my time (75% of my time)', '2021-06-16'),
(4, 17, 'Half my time (50%)', '2021-06-16'),
(5, 19, 'Some of my time (up to 25% of my time)', '2021-06-16'),
(6, 18, 'Half my time (50%)', '2021-06-16'),
(7, 20, 'None at all', '2021-06-16');

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

--
-- Dumping data for table `alum_survey_q16`
--

INSERT INTO `alum_survey_q16` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 13, 'No supervisory or lead responsibilities.', '2021-06-16'),
(2, 14, 'Limited or indirect supervision of one or more people. Responsible for day-to-day work direction, not responsible for employment decisions.', '2021-06-16'),
(3, 15, 'Direct supervision over a unit or department, involving responsibility for results in terms of budget management, methods of work, policy development and personnel issues.', '2021-06-16'),
(4, 17, 'Direct supervision of one or more people.', '2021-06-16'),
(5, 19, 'Limited or indirect supervision of one or more people. Responsible for day-to-day work direction, not responsible for employment decisions.', '2021-06-16'),
(6, 18, 'Direct supervision of one or more people.', '2021-06-16'),
(7, 20, 'No supervisory or lead responsibilities.', '2021-06-16');

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

--
-- Dumping data for table `alum_survey_q17`
--

INSERT INTO `alum_survey_q17` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 12, 'Generally dissatisfied', '2021-06-16'),
(2, 13, 'Generally satisfied', '2021-06-16'),
(3, 14, 'Very satisfied', '2021-06-16'),
(4, 15, 'Very satisfied', '2021-06-16'),
(5, 16, 'Very satisfied', '2021-06-16'),
(6, 17, 'Very satisfied', '2021-06-16'),
(7, 19, 'Generally satisfied', '2021-06-16'),
(8, 18, 'Generally satisfied', '2021-06-16'),
(9, 20, 'Generally dissatisfied', '2021-06-16'),
(10, 21, 'Generally satisfied', '2021-06-16'),
(11, 8, 'Generally satisfied', '2021-06-21'),
(12, 67, 'Generally dissatisfied', '2021-06-21'),
(13, 68, 'Generally satisfied', '2021-06-21'),
(14, 2, 'Very dissatisfied ', '2021-06-24');

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

--
-- Dumping data for table `alum_survey_q18`
--

INSERT INTO `alum_survey_q18` (`answer_id`, `user_id`, `ques18_arr`, `answer_body`, `date_response`) VALUES
(1, 12, 'Possess the skills and mindset to improve human life', 'More than adequately', '2021-06-16'),
(2, 12, 'Commit to the freedom and welfare of all', 'More than adequately', '2021-06-16'),
(3, 12, 'Demonstrate mastery of knowledge in your specific discipline', 'More than adequately', '2021-06-16'),
(4, 12, 'Possess breadth of mind', 'More than adequately', '2021-06-16'),
(5, 12, 'Possess strength of character', 'More than adequately', '2021-06-16'),
(6, 12, 'Possess generosity of spirit', 'More than adequately', '2021-06-16'),
(7, 12, 'Inclusively engage with society and the world at large', 'More than adequately', '2021-06-16'),
(8, 12, 'Be mindful of the needs and capabilities of people', 'More than adequately', '2021-06-16'),
(9, 12, 'Be sensitive to the challenges and opportunities of national development and global change', 'More than adequately', '2021-06-16'),
(10, 12, 'Think critically', 'More than adequately', '2021-06-16'),
(11, 12, 'Demonstrate discernment', 'More than adequately', '2021-06-16'),
(12, 13, 'Possess the skills and mindset to improve human life', 'More than adequately', '2021-06-16'),
(13, 13, 'Commit to the freedom and welfare of all', 'Very well', '2021-06-16'),
(14, 13, 'Demonstrate mastery of knowledge in your specific discipline', 'More than adequately', '2021-06-16'),
(15, 13, 'Possess breadth of mind', 'Very well', '2021-06-16'),
(16, 13, 'Possess strength of character', 'More than adequately', '2021-06-16'),
(17, 13, 'Possess generosity of spirit', 'Very well', '2021-06-16'),
(18, 13, 'Inclusively engage with society and the world at large', 'More than adequately', '2021-06-16'),
(19, 13, 'Be mindful of the needs and capabilities of people', 'Very well', '2021-06-16'),
(20, 13, 'Be sensitive to the challenges and opportunities of national development and global change', 'More than adequately', '2021-06-16'),
(21, 13, 'Think critically', 'Very well', '2021-06-16'),
(22, 13, 'Demonstrate discernment', 'More than adequately', '2021-06-16'),
(23, 14, 'Possess the skills and mindset to improve human life', 'Less than adequately', '2021-06-16'),
(24, 14, 'Commit to the freedom and welfare of all', 'Less than adequately', '2021-06-16'),
(25, 14, 'Demonstrate mastery of knowledge in your specific discipline', 'Less than adequately', '2021-06-16'),
(26, 14, 'Possess breadth of mind', 'Less than adequately', '2021-06-16'),
(27, 14, 'Possess strength of character', 'Very poorly', '2021-06-16'),
(28, 14, 'Possess generosity of spirit', 'Less than adequately', '2021-06-16'),
(29, 14, 'Inclusively engage with society and the world at large', 'Very poorly', '2021-06-16'),
(30, 14, 'Be mindful of the needs and capabilities of people', 'Less than adequately', '2021-06-16'),
(31, 14, 'Be sensitive to the challenges and opportunities of national development and global change', 'Very poorly', '2021-06-16'),
(32, 14, 'Think critically', 'Very poorly', '2021-06-16'),
(33, 14, 'Demonstrate discernment', 'More than adequately', '2021-06-16'),
(34, 15, 'Possess the skills and mindset to improve human life', 'Very well', '2021-06-16'),
(35, 15, 'Commit to the freedom and welfare of all', 'More than adequately', '2021-06-16'),
(36, 15, 'Demonstrate mastery of knowledge in your specific discipline', 'Less than adequately', '2021-06-16'),
(37, 15, 'Possess breadth of mind', 'Less than adequately', '2021-06-16'),
(38, 15, 'Possess strength of character', 'Very poorly', '2021-06-16'),
(39, 15, 'Possess generosity of spirit', 'Less than adequately', '2021-06-16'),
(40, 15, 'Inclusively engage with society and the world at large', 'Less than adequately', '2021-06-16'),
(41, 15, 'Be mindful of the needs and capabilities of people', 'More than adequately', '2021-06-16'),
(42, 15, 'Be sensitive to the challenges and opportunities of national development and global change', 'Less than adequately', '2021-06-16'),
(43, 15, 'Think critically', 'Very well', '2021-06-16'),
(44, 15, 'Demonstrate discernment', 'Less than adequately', '2021-06-16'),
(45, 16, 'Possess the skills and mindset to improve human life', 'Very well', '2021-06-16'),
(46, 16, 'Commit to the freedom and welfare of all', 'More than adequately', '2021-06-16'),
(47, 16, 'Demonstrate mastery of knowledge in your specific discipline', 'More than adequately', '2021-06-16'),
(48, 16, 'Possess breadth of mind', 'Very well', '2021-06-16'),
(49, 16, 'Possess strength of character', 'More than adequately', '2021-06-16'),
(50, 16, 'Possess generosity of spirit', 'Very well', '2021-06-16'),
(51, 16, 'Inclusively engage with society and the world at large', 'More than adequately', '2021-06-16'),
(52, 16, 'Be mindful of the needs and capabilities of people', 'Very well', '2021-06-16'),
(53, 16, 'Be sensitive to the challenges and opportunities of national development and global change', 'More than adequately', '2021-06-16'),
(54, 16, 'Think critically', 'Very well', '2021-06-16'),
(55, 16, 'Demonstrate discernment', 'More than adequately', '2021-06-16'),
(56, 17, 'Possess the skills and mindset to improve human life', 'More than adequately', '2021-06-16'),
(57, 17, 'Commit to the freedom and welfare of all', 'More than adequately', '2021-06-16'),
(58, 17, 'Demonstrate mastery of knowledge in your specific discipline', 'More than adequately', '2021-06-16'),
(59, 17, 'Possess breadth of mind', 'Very well', '2021-06-16'),
(60, 17, 'Possess strength of character', 'Very well', '2021-06-16'),
(61, 17, 'Possess generosity of spirit', 'Very well', '2021-06-16'),
(62, 17, 'Inclusively engage with society and the world at large', 'More than adequately', '2021-06-16'),
(63, 17, 'Be mindful of the needs and capabilities of people', 'More than adequately', '2021-06-16'),
(64, 17, 'Be sensitive to the challenges and opportunities of national development and global change', 'More than adequately', '2021-06-16'),
(65, 17, 'Think critically', 'Very well', '2021-06-16'),
(66, 17, 'Demonstrate discernment', 'More than adequately', '2021-06-16'),
(67, 19, 'Possess the skills and mindset to improve human life', 'Very well', '2021-06-16'),
(68, 19, 'Commit to the freedom and welfare of all', 'More than adequately', '2021-06-16'),
(69, 19, 'Demonstrate mastery of knowledge in your specific discipline', 'Less than adequately', '2021-06-16'),
(70, 19, 'Possess breadth of mind', 'More than adequately', '2021-06-16'),
(71, 19, 'Possess strength of character', 'Very well', '2021-06-16'),
(72, 19, 'Possess generosity of spirit', 'More than adequately', '2021-06-16'),
(73, 19, 'Inclusively engage with society and the world at large', 'Less than adequately', '2021-06-16'),
(74, 19, 'Be mindful of the needs and capabilities of people', 'More than adequately', '2021-06-16'),
(75, 19, 'Be sensitive to the challenges and opportunities of national development and global change', 'Very well', '2021-06-16'),
(76, 19, 'Think critically', 'More than adequately', '2021-06-16'),
(77, 19, 'Demonstrate discernment', 'More than adequately', '2021-06-16'),
(78, 18, 'Possess the skills and mindset to improve human life', 'More than adequately', '2021-06-16'),
(79, 18, 'Commit to the freedom and welfare of all', 'More than adequately', '2021-06-16'),
(80, 18, 'Demonstrate mastery of knowledge in your specific discipline', 'More than adequately', '2021-06-16'),
(81, 18, 'Possess breadth of mind', 'More than adequately', '2021-06-16'),
(82, 18, 'Possess strength of character', 'More than adequately', '2021-06-16'),
(83, 18, 'Possess generosity of spirit', 'More than adequately', '2021-06-16'),
(84, 18, 'Inclusively engage with society and the world at large', 'More than adequately', '2021-06-16'),
(85, 18, 'Be mindful of the needs and capabilities of people', 'More than adequately', '2021-06-16'),
(86, 18, 'Be sensitive to the challenges and opportunities of national development and global change', 'More than adequately', '2021-06-16'),
(87, 18, 'Think critically', 'More than adequately', '2021-06-16'),
(88, 18, 'Demonstrate discernment', 'More than adequately', '2021-06-16'),
(89, 20, 'Possess the skills and mindset to improve human life', 'Very well', '2021-06-16'),
(90, 20, 'Commit to the freedom and welfare of all', 'More than adequately', '2021-06-16'),
(91, 20, 'Demonstrate mastery of knowledge in your specific discipline', 'More than adequately', '2021-06-16'),
(92, 20, 'Possess breadth of mind', 'Very well', '2021-06-16'),
(93, 20, 'Possess strength of character', 'More than adequately', '2021-06-16'),
(94, 20, 'Possess generosity of spirit', 'More than adequately', '2021-06-16'),
(95, 20, 'Inclusively engage with society and the world at large', 'Very well', '2021-06-16'),
(96, 20, 'Be mindful of the needs and capabilities of people', 'More than adequately', '2021-06-16'),
(97, 20, 'Be sensitive to the challenges and opportunities of national development and global change', 'More than adequately', '2021-06-16'),
(98, 20, 'Think critically', 'Very well', '2021-06-16'),
(99, 20, 'Demonstrate discernment', 'More than adequately', '2021-06-16'),
(100, 21, 'Possess the skills and mindset to improve human life', 'More than adequately', '2021-06-16'),
(101, 21, 'Commit to the freedom and welfare of all', 'More than adequately', '2021-06-16'),
(102, 21, 'Demonstrate mastery of knowledge in your specific discipline', 'More than adequately', '2021-06-16'),
(103, 21, 'Possess breadth of mind', 'More than adequately', '2021-06-16'),
(104, 21, 'Possess strength of character', 'More than adequately', '2021-06-16'),
(105, 21, 'Possess generosity of spirit', 'More than adequately', '2021-06-16'),
(106, 21, 'Inclusively engage with society and the world at large', 'More than adequately', '2021-06-16'),
(107, 21, 'Be mindful of the needs and capabilities of people', 'More than adequately', '2021-06-16'),
(108, 21, 'Be sensitive to the challenges and opportunities of national development and global change', 'More than adequately', '2021-06-16'),
(109, 21, 'Think critically', 'More than adequately', '2021-06-16'),
(110, 21, 'Demonstrate discernment', 'More than adequately', '2021-06-16'),
(111, 8, 'Possess the skills and mindset to improve human life', 'Very well', '2021-06-21'),
(112, 8, 'Commit to the freedom and welfare of all', 'Very well', '2021-06-21'),
(113, 8, 'Demonstrate mastery of knowledge in your specific discipline', 'Very well', '2021-06-21'),
(114, 8, 'Possess breadth of mind', 'Very well', '2021-06-21'),
(115, 8, 'Possess strength of character', 'Very well', '2021-06-21'),
(116, 8, 'Possess generosity of spirit', 'Very well', '2021-06-21'),
(117, 8, 'Inclusively engage with society and the world at large', 'Very well', '2021-06-21'),
(118, 8, 'Be mindful of the needs and capabilities of people', 'Very well', '2021-06-21'),
(119, 8, 'Be sensitive to the challenges and opportunities of national development and global change', 'Very well', '2021-06-21'),
(120, 8, 'Think critically', 'Very well', '2021-06-21'),
(121, 8, 'Demonstrate discernment', 'Very well', '2021-06-21'),
(122, 67, 'Possess the skills and mindset to improve human life', 'More than adequately', '2021-06-21'),
(123, 67, 'Commit to the freedom and welfare of all', 'More than adequately', '2021-06-21'),
(124, 67, 'Demonstrate mastery of knowledge in your specific discipline', 'More than adequately', '2021-06-21'),
(125, 67, 'Possess breadth of mind', 'More than adequately', '2021-06-21'),
(126, 67, 'Possess strength of character', 'More than adequately', '2021-06-21'),
(127, 67, 'Possess generosity of spirit', 'More than adequately', '2021-06-21'),
(128, 67, 'Inclusively engage with society and the world at large', 'More than adequately', '2021-06-21'),
(129, 67, 'Be mindful of the needs and capabilities of people', 'More than adequately', '2021-06-21'),
(130, 67, 'Be sensitive to the challenges and opportunities of national development and global change', 'More than adequately', '2021-06-21'),
(131, 67, 'Think critically', 'More than adequately', '2021-06-21'),
(132, 67, 'Demonstrate discernment', 'More than adequately', '2021-06-21'),
(133, 68, 'Possess the skills and mindset to improve human life', 'More than adequately', '2021-06-21'),
(134, 68, 'Commit to the freedom and welfare of all', 'More than adequately', '2021-06-21'),
(135, 68, 'Demonstrate mastery of knowledge in your specific discipline', 'More than adequately', '2021-06-21'),
(136, 68, 'Possess breadth of mind', 'More than adequately', '2021-06-21'),
(137, 68, 'Possess strength of character', 'More than adequately', '2021-06-21'),
(138, 68, 'Possess generosity of spirit', 'More than adequately', '2021-06-21'),
(139, 68, 'Inclusively engage with society and the world at large', 'More than adequately', '2021-06-21'),
(140, 68, 'Be mindful of the needs and capabilities of people', 'More than adequately', '2021-06-21'),
(141, 68, 'Be sensitive to the challenges and opportunities of national development and global change', 'More than adequately', '2021-06-21'),
(142, 68, 'Think critically', 'More than adequately', '2021-06-21'),
(143, 68, 'Demonstrate discernment', 'More than adequately', '2021-06-21'),
(144, 2, 'Possess the skills and mindset to improve human life', '', '2021-06-24'),
(145, 2, 'Commit to the freedom and welfare of all', '', '2021-06-24'),
(146, 2, 'Demonstrate mastery of knowledge in your specific discipline', '', '2021-06-24'),
(147, 2, 'Possess breadth of mind', '', '2021-06-24'),
(148, 2, 'Possess strength of character', '', '2021-06-24'),
(149, 2, 'Possess generosity of spirit', '', '2021-06-24'),
(150, 2, 'Inclusively engage with society and the world at large', '', '2021-06-24'),
(151, 2, 'Be mindful of the needs and capabilities of people', '', '2021-06-24'),
(152, 2, 'Be sensitive to the challenges and opportunities of national development and global change', '', '2021-06-24'),
(153, 2, 'Think critically', '', '2021-06-24'),
(154, 2, 'Demonstrate discernment', 'Very well', '2021-06-24');

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

--
-- Dumping data for table `alum_survey_q19`
--

INSERT INTO `alum_survey_q19` (`answer_id`, `user_id`, `Elaborate`, `answer_body`, `date_response`) VALUES
(1, 12, 'Yes', 'Very nice programs', '2021-06-16'),
(2, 13, 'No', 'NA', '2021-06-16'),
(3, 14, 'No', 'NA', '2021-06-16'),
(4, 15, 'Yes', 'Very helpful', '2021-06-16'),
(5, 16, 'No', 'NA', '2021-06-16'),
(6, 17, 'No', 'NA', '2021-06-16'),
(7, 19, 'No', 'NA', '2021-06-16'),
(8, 18, 'Yes', 'Study hard', '2021-06-16'),
(9, 20, 'No', 'NA', '2021-06-16'),
(10, 21, 'No', 'NA', '2021-06-16'),
(11, 8, 'No', 'NA', '2021-06-21'),
(12, 67, 'No', 'NA', '2021-06-21'),
(13, 68, 'No', 'NA', '2021-06-21'),
(14, 2, 'No', 'NA', '2021-06-24');

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

--
-- Dumping data for table `contactemp_ques`
--

INSERT INTO `contactemp_ques` (`answer_id`, `user_id`, `companyname`, `contactperson`, `contactnumber`, `contactemail`, `date_response`, `contacted`) VALUES
(1, 14, 'Media Inc.', 'Sam Ting Wong', '2345678', 'sam@mail.com', '2021-06-16', 'Yes'),
(2, 15, 'Drag University', 'Yekaterina Petrovna Zamolochikova', '', 'katya_zamo@mail.com', '2021-06-16', 'No'),
(3, 20, 'Company', 'Jane Doe', '09089089078', '', '2021-06-16', 'No');

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

--
-- Dumping data for table `emp_survey_q1`
--

INSERT INTO `emp_survey_q1` (`answer_id`, `user_id`, `answer_body`, `answer_others`, `date_response`) VALUES
(1, 24, 'Other', 'Semi private', '2021-05-24'),
(3, 25, 'Private', '', '2021-05-24'),
(4, 26, 'Public', '', '2021-05-24'),
(5, 28, 'Other', 'Semi public', '2021-05-24'),
(7, 27, 'Private', '', '2021-05-24'),
(8, 29, 'Private', '', '2021-05-24'),
(9, 31, 'Private', '', '2021-05-24'),
(10, 32, 'Public', '', '2021-05-24'),
(11, 34, 'Private', '', '2021-05-24'),
(12, 33, 'Public', '', '2021-05-24'),
(13, 5, 'Private', '', '2021-06-16'),
(14, 8, 'Private', '', '2021-06-21'),
(15, 67, 'Private', '', '2021-06-21'),
(16, 3, 'Other', 'Semi private', '2021-06-24');

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

--
-- Dumping data for table `emp_survey_q2`
--

INSERT INTO `emp_survey_q2` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 24, 'Abroad', '2021-05-24'),
(2, 25, 'Philippines', '2021-05-24'),
(3, 26, 'Philippines', '2021-05-24'),
(4, 28, 'Abroad', '2021-05-24'),
(5, 27, 'Philippines', '2021-05-24'),
(6, 29, 'Philippines', '2021-05-24'),
(7, 31, 'Philippines', '2021-05-24'),
(8, 32, 'Philippines', '2021-05-24'),
(9, 34, 'Philippines', '2021-05-24'),
(10, 33, 'Philippines', '2021-05-24'),
(11, 5, 'Abroad', '2021-06-16'),
(12, 8, 'Philippines', '2021-06-21'),
(13, 67, 'Abroad', '2021-06-21'),
(14, 3, 'Abroad', '2021-06-24');

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

--
-- Dumping data for table `emp_survey_q2_1`
--

INSERT INTO `emp_survey_q2_1` (`answer_id`, `user_id`, `region`, `subregion`, `date_response`) VALUES
(1, 24, 'Antarctica', '', '2021-05-24'),
(2, 28, 'Europe', 'Southern Europe', '2021-05-24'),
(3, 5, 'Asia', 'Southeast Asia', '2021-06-16'),
(4, 67, 'Asia', 'Southeast Asia', '2021-06-21'),
(5, 3, 'Africa', 'Northern Africa', '2021-06-24');

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

--
-- Dumping data for table `emp_survey_q3`
--

INSERT INTO `emp_survey_q3` (`answer_id`, `user_id`, `answer_body`, `answer_others`, `date_response`) VALUES
(1, 24, 'Education', '', '2021-05-24'),
(2, 25, 'Other Service Activities', '', '2021-05-24'),
(3, 26, 'Information Technology', '', '2021-05-24'),
(4, 28, 'Arts, Entertainment and Recreation', '', '2021-05-24'),
(5, 27, 'Finance, Banks, and Insurance', '', '2021-05-24'),
(6, 29, 'Manufacturing', '', '2021-05-24'),
(7, 31, 'Real Estate Activities', '', '2021-05-24'),
(8, 32, 'Information Technology', '', '2021-05-24'),
(9, 34, 'Arts, Entertainment and Recreation', '', '2021-05-24'),
(10, 33, 'Agriculture, Forestry and Fishing', '', '2021-05-24'),
(11, 5, 'Arts, Entertainment and Recreation', '', '2021-06-16'),
(12, 8, 'Agriculture, Forestry and Fishing', '', '2021-06-21'),
(13, 67, 'Information Technology', '', '2021-06-21'),
(14, 3, 'other', 'something', '2021-06-24');

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

--
-- Dumping data for table `emp_survey_q4`
--

INSERT INTO `emp_survey_q4` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 24, 'Supervisory – Director/Managing Director/Supervisor', '2021-05-24'),
(2, 25, 'Chief level – General Manager/President/CEO', '2021-05-24'),
(3, 26, 'Rank and file', '2021-05-24'),
(4, 28, 'Supervisory – Director/Managing Director/Supervisor', '2021-05-24'),
(5, 27, 'Chief level – General Manager/President/CEO', '2021-05-24'),
(6, 29, 'Supervisory – Director/Managing Director/Supervisor', '2021-05-24'),
(7, 31, 'Supervisory – Director/Managing Director/Supervisor', '2021-05-24'),
(8, 32, 'Supervisory – Director/Managing Director/Supervisor', '2021-05-24'),
(9, 34, 'Supervisory – Director/Managing Director/Supervisor', '2021-05-24'),
(10, 33, 'Rank and file', '2021-05-24'),
(11, 5, 'Rank and file', '2021-06-16'),
(12, 8, 'Supervisory – Director/Managing Director/Supervisor', '2021-06-21'),
(13, 67, 'Supervisory – Director/Managing Director/Supervisor', '2021-06-21'),
(14, 3, 'Supervisory – Director/Managing Director/Supervisor', '2021-06-24');

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

--
-- Dumping data for table `emp_survey_q5`
--

INSERT INTO `emp_survey_q5` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 24, 3, '2021-05-24'),
(2, 25, 6, '2021-05-24'),
(3, 26, 1, '2021-05-24'),
(4, 28, 7, '2021-05-24'),
(5, 27, 7, '2021-05-24'),
(6, 29, 5, '2021-05-24'),
(7, 31, 2, '2021-05-24'),
(8, 32, 1, '2021-05-24'),
(9, 34, 3, '2021-05-24'),
(10, 33, 5, '2021-05-24'),
(11, 5, 2, '2021-06-16'),
(12, 8, 1, '2021-06-21'),
(13, 67, 2, '2021-06-21'),
(14, 3, 3, '2021-06-24');

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

--
-- Dumping data for table `emp_survey_q6`
--

INSERT INTO `emp_survey_q6` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 24, 'Disagree', '2021-05-24'),
(2, 25, 'Strongly Agree', '2021-05-24'),
(3, 26, 'Disagree', '2021-05-24'),
(4, 28, 'Strongly Agree', '2021-05-24'),
(5, 27, 'Strongly Disagree', '2021-05-24'),
(6, 29, 'Agree', '2021-05-24'),
(7, 31, 'Agree', '2021-05-24'),
(8, 32, 'Agree', '2021-05-24'),
(9, 34, 'Strongly Agree', '2021-05-24'),
(10, 33, 'Strongly Agree', '2021-05-24'),
(11, 5, 'Agree', '2021-06-16'),
(12, 8, 'Agree', '2021-06-21'),
(13, 67, 'Disagree', '2021-06-21'),
(14, 3, 'Agree', '2021-06-24');

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

--
-- Dumping data for table `emp_survey_q7`
--

INSERT INTO `emp_survey_q7` (`answer_id`, `user_id`, `skill`, `answer_body`, `date_response`) VALUES
(1, 24, 'Reading Comprehension', 'Unimportant', '2021-05-24'),
(2, 24, 'Active Listening', 'Of Little Importance', '2021-05-24'),
(3, 24, 'Writing Skills', 'Of Little Importance', '2021-05-24'),
(4, 24, 'Verbal Communication', 'Important', '2021-05-24'),
(5, 24, 'Mathematics Skills', 'Very Important', '2021-05-24'),
(6, 24, 'Scientific Literacy', 'Important', '2021-05-24'),
(7, 24, 'Digital Literacy', 'Of Little Importance', '2021-05-24'),
(8, 24, 'Critical Thinking', 'Unimportant', '2021-05-24'),
(9, 24, 'Participatory Learning', 'Of Little Importance', '2021-05-24'),
(10, 24, 'Creative and Innovation', 'Important', '2021-05-24'),
(11, 24, 'Leadership Skills', 'Important', '2021-05-24'),
(12, 24, 'Social Awareness', 'Important', '2021-05-24'),
(13, 24, 'Service Orientation', 'Important', '2021-05-24'),
(14, 24, 'Time Management', 'Important', '2021-05-24'),
(15, 24, 'Complex Problem Solving Skills', 'Important', '2021-05-24'),
(16, 24, 'Judgment and Decision Making', 'Very Important', '2021-05-24'),
(17, 24, 'Systems Analysis and Evaluation', 'Of Little Importance', '2021-05-24'),
(18, 25, 'Reading Comprehension', 'Important', '2021-05-24'),
(19, 25, 'Active Listening', 'Very Important', '2021-05-24'),
(20, 25, 'Writing Skills', 'Important', '2021-05-24'),
(21, 25, 'Verbal Communication', 'Very Important', '2021-05-24'),
(22, 25, 'Mathematics Skills', 'Important', '2021-05-24'),
(23, 25, 'Scientific Literacy', 'Very Important', '2021-05-24'),
(24, 25, 'Digital Literacy', 'Important', '2021-05-24'),
(25, 25, 'Critical Thinking', 'Of Little Importance', '2021-05-24'),
(26, 25, 'Participatory Learning', 'Of Little Importance', '2021-05-24'),
(27, 25, 'Creative and Innovation', 'Important', '2021-05-24'),
(28, 25, 'Leadership Skills', 'Of Little Importance', '2021-05-24'),
(29, 25, 'Social Awareness', 'Of Little Importance', '2021-05-24'),
(30, 25, 'Service Orientation', 'Of Little Importance', '2021-05-24'),
(31, 25, 'Time Management', 'Important', '2021-05-24'),
(32, 25, 'Complex Problem Solving Skills', 'Of Little Importance', '2021-05-24'),
(33, 25, 'Judgment and Decision Making', 'Important', '2021-05-24'),
(34, 25, 'Systems Analysis and Evaluation', 'Very Important', '2021-05-24'),
(35, 26, 'Reading Comprehension', 'Important', '2021-05-24'),
(36, 26, 'Active Listening', 'Important', '2021-05-24'),
(37, 26, 'Writing Skills', 'Very Important', '2021-05-24'),
(38, 26, 'Verbal Communication', 'Important', '2021-05-24'),
(39, 26, 'Mathematics Skills', 'Very Important', '2021-05-24'),
(40, 26, 'Scientific Literacy', 'Important', '2021-05-24'),
(41, 26, 'Digital Literacy', 'Very Important', '2021-05-24'),
(42, 26, 'Critical Thinking', 'Important', '2021-05-24'),
(43, 26, 'Participatory Learning', 'Important', '2021-05-24'),
(44, 26, 'Creative and Innovation', 'Important', '2021-05-24'),
(45, 26, 'Leadership Skills', 'Very Important', '2021-05-24'),
(46, 26, 'Social Awareness', 'Important', '2021-05-24'),
(47, 26, 'Service Orientation', 'Very Important', '2021-05-24'),
(48, 26, 'Time Management', 'Important', '2021-05-24'),
(49, 26, 'Complex Problem Solving Skills', 'Very Important', '2021-05-24'),
(50, 26, 'Judgment and Decision Making', 'Important', '2021-05-24'),
(51, 26, 'Systems Analysis and Evaluation', 'Very Important', '2021-05-24'),
(52, 28, 'Reading Comprehension', 'Very Important', '2021-05-24'),
(53, 28, 'Active Listening', 'Very Important', '2021-05-24'),
(54, 28, 'Writing Skills', 'Of Little Importance', '2021-05-24'),
(55, 28, 'Verbal Communication', 'Of Little Importance', '2021-05-24'),
(56, 28, 'Mathematics Skills', 'Unimportant', '2021-05-24'),
(57, 28, 'Scientific Literacy', 'Unimportant', '2021-05-24'),
(58, 28, 'Digital Literacy', 'Important', '2021-05-24'),
(59, 28, 'Critical Thinking', 'Important', '2021-05-24'),
(60, 28, 'Participatory Learning', 'Of Little Importance', '2021-05-24'),
(61, 28, 'Creative and Innovation', 'Important', '2021-05-24'),
(62, 28, 'Leadership Skills', 'Of Little Importance', '2021-05-24'),
(63, 28, 'Social Awareness', 'Important', '2021-05-24'),
(64, 28, 'Service Orientation', 'Of Little Importance', '2021-05-24'),
(65, 28, 'Time Management', 'Important', '2021-05-24'),
(66, 28, 'Complex Problem Solving Skills', 'Very Important', '2021-05-24'),
(67, 28, 'Judgment and Decision Making', 'Of Little Importance', '2021-05-24'),
(68, 28, 'Systems Analysis and Evaluation', 'Unimportant', '2021-05-24'),
(69, 27, 'Reading Comprehension', 'Of Little Importance', '2021-05-24'),
(70, 27, 'Active Listening', 'Of Little Importance', '2021-05-24'),
(71, 27, 'Writing Skills', 'Of Little Importance', '2021-05-24'),
(72, 27, 'Verbal Communication', 'Of Little Importance', '2021-05-24'),
(73, 27, 'Mathematics Skills', 'Of Little Importance', '2021-05-24'),
(74, 27, 'Scientific Literacy', 'Of Little Importance', '2021-05-24'),
(75, 27, 'Digital Literacy', 'Of Little Importance', '2021-05-24'),
(76, 27, 'Critical Thinking', 'Of Little Importance', '2021-05-24'),
(77, 27, 'Participatory Learning', 'Of Little Importance', '2021-05-24'),
(78, 27, 'Creative and Innovation', 'Of Little Importance', '2021-05-24'),
(79, 27, 'Leadership Skills', 'Of Little Importance', '2021-05-24'),
(80, 27, 'Social Awareness', 'Of Little Importance', '2021-05-24'),
(81, 27, 'Service Orientation', 'Of Little Importance', '2021-05-24'),
(82, 27, 'Time Management', 'Of Little Importance', '2021-05-24'),
(83, 27, 'Complex Problem Solving Skills', 'Of Little Importance', '2021-05-24'),
(84, 27, 'Judgment and Decision Making', 'Of Little Importance', '2021-05-24'),
(85, 27, 'Systems Analysis and Evaluation', 'Of Little Importance', '2021-05-24'),
(86, 29, 'Reading Comprehension', 'Of Little Importance', '2021-05-24'),
(87, 29, 'Active Listening', 'Important', '2021-05-24'),
(88, 29, 'Writing Skills', 'Important', '2021-05-24'),
(89, 29, 'Verbal Communication', 'Important', '2021-05-24'),
(90, 29, 'Mathematics Skills', 'Important', '2021-05-24'),
(91, 29, 'Scientific Literacy', 'Important', '2021-05-24'),
(92, 29, 'Digital Literacy', 'Important', '2021-05-24'),
(93, 29, 'Critical Thinking', 'Important', '2021-05-24'),
(94, 29, 'Participatory Learning', 'Important', '2021-05-24'),
(95, 29, 'Creative and Innovation', 'Important', '2021-05-24'),
(96, 29, 'Leadership Skills', 'Of Little Importance', '2021-05-24'),
(97, 29, 'Social Awareness', 'Important', '2021-05-24'),
(98, 29, 'Service Orientation', 'Of Little Importance', '2021-05-24'),
(99, 29, 'Time Management', 'Important', '2021-05-24'),
(100, 29, 'Complex Problem Solving Skills', 'Very Important', '2021-05-24'),
(101, 29, 'Judgment and Decision Making', 'Important', '2021-05-24'),
(102, 29, 'Systems Analysis and Evaluation', 'Important', '2021-05-24'),
(103, 31, 'Reading Comprehension', 'Important', '2021-05-24'),
(104, 31, 'Active Listening', 'Important', '2021-05-24'),
(105, 31, 'Writing Skills', 'Important', '2021-05-24'),
(106, 31, 'Verbal Communication', 'Important', '2021-05-24'),
(107, 31, 'Mathematics Skills', 'Important', '2021-05-24'),
(108, 31, 'Scientific Literacy', 'Of Little Importance', '2021-05-24'),
(109, 31, 'Digital Literacy', 'Of Little Importance', '2021-05-24'),
(110, 31, 'Critical Thinking', 'Of Little Importance', '2021-05-24'),
(111, 31, 'Participatory Learning', 'Of Little Importance', '2021-05-24'),
(112, 31, 'Creative and Innovation', 'Of Little Importance', '2021-05-24'),
(113, 31, 'Leadership Skills', 'Of Little Importance', '2021-05-24'),
(114, 31, 'Social Awareness', 'Of Little Importance', '2021-05-24'),
(115, 31, 'Service Orientation', 'Of Little Importance', '2021-05-24'),
(116, 31, 'Time Management', 'Of Little Importance', '2021-05-24'),
(117, 31, 'Complex Problem Solving Skills', 'Of Little Importance', '2021-05-24'),
(118, 31, 'Judgment and Decision Making', 'Of Little Importance', '2021-05-24'),
(119, 31, 'Systems Analysis and Evaluation', 'Of Little Importance', '2021-05-24'),
(120, 32, 'Reading Comprehension', 'Very Important', '2021-05-24'),
(121, 32, 'Active Listening', 'Important', '2021-05-24'),
(122, 32, 'Writing Skills', 'Of Little Importance', '2021-05-24'),
(123, 32, 'Verbal Communication', 'Important', '2021-05-24'),
(124, 32, 'Mathematics Skills', 'Very Important', '2021-05-24'),
(125, 32, 'Scientific Literacy', 'Very Important', '2021-05-24'),
(126, 32, 'Digital Literacy', 'Very Important', '2021-05-24'),
(127, 32, 'Critical Thinking', 'Very Important', '2021-05-24'),
(128, 32, 'Participatory Learning', 'Of Little Importance', '2021-05-24'),
(129, 32, 'Creative and Innovation', 'Important', '2021-05-24'),
(130, 32, 'Leadership Skills', 'Important', '2021-05-24'),
(131, 32, 'Social Awareness', 'Important', '2021-05-24'),
(132, 32, 'Service Orientation', 'Important', '2021-05-24'),
(133, 32, 'Time Management', 'Very Important', '2021-05-24'),
(134, 32, 'Complex Problem Solving Skills', 'Very Important', '2021-05-24'),
(135, 32, 'Judgment and Decision Making', 'Important', '2021-05-24'),
(136, 32, 'Systems Analysis and Evaluation', 'Important', '2021-05-24'),
(137, 34, 'Reading Comprehension', 'Very Important', '2021-05-24'),
(138, 34, 'Active Listening', 'Very Important', '2021-05-24'),
(139, 34, 'Writing Skills', 'Very Important', '2021-05-24'),
(140, 34, 'Verbal Communication', 'Very Important', '2021-05-24'),
(141, 34, 'Mathematics Skills', 'Very Important', '2021-05-24'),
(142, 34, 'Scientific Literacy', 'Very Important', '2021-05-24'),
(143, 34, 'Digital Literacy', 'Very Important', '2021-05-24'),
(144, 34, 'Critical Thinking', 'Very Important', '2021-05-24'),
(145, 34, 'Participatory Learning', 'Very Important', '2021-05-24'),
(146, 34, 'Creative and Innovation', 'Very Important', '2021-05-24'),
(147, 34, 'Leadership Skills', 'Very Important', '2021-05-24'),
(148, 34, 'Social Awareness', 'Very Important', '2021-05-24'),
(149, 34, 'Service Orientation', 'Very Important', '2021-05-24'),
(150, 34, 'Time Management', 'Very Important', '2021-05-24'),
(151, 34, 'Complex Problem Solving Skills', 'Very Important', '2021-05-24'),
(152, 34, 'Judgment and Decision Making', 'Very Important', '2021-05-24'),
(153, 34, 'Systems Analysis and Evaluation', 'Very Important', '2021-05-24'),
(154, 33, 'Reading Comprehension', 'Important', '2021-05-24'),
(155, 33, 'Active Listening', 'Very Important', '2021-05-24'),
(156, 33, 'Writing Skills', 'Important', '2021-05-24'),
(157, 33, 'Verbal Communication', 'Very Important', '2021-05-24'),
(158, 33, 'Mathematics Skills', 'Important', '2021-05-24'),
(159, 33, 'Scientific Literacy', 'Very Important', '2021-05-24'),
(160, 33, 'Digital Literacy', 'Important', '2021-05-24'),
(161, 33, 'Critical Thinking', 'Very Important', '2021-05-24'),
(162, 33, 'Participatory Learning', 'Important', '2021-05-24'),
(163, 33, 'Creative and Innovation', 'Very Important', '2021-05-24'),
(164, 33, 'Leadership Skills', 'Important', '2021-05-24'),
(165, 33, 'Social Awareness', 'Very Important', '2021-05-24'),
(166, 33, 'Service Orientation', 'Important', '2021-05-24'),
(167, 33, 'Time Management', 'Very Important', '2021-05-24'),
(168, 33, 'Complex Problem Solving Skills', 'Important', '2021-05-24'),
(169, 33, 'Judgment and Decision Making', 'Very Important', '2021-05-24'),
(170, 33, 'Systems Analysis and Evaluation', 'Important', '2021-05-24'),
(171, 5, 'Reading Comprehension', 'Important', '2021-06-16'),
(172, 5, 'Active Listening', 'Very Important', '2021-06-16'),
(173, 5, 'Writing Skills', 'Very Important', '2021-06-16'),
(174, 5, 'Verbal Communication', 'Important', '2021-06-16'),
(175, 5, 'Mathematics Skills', 'Very Important', '2021-06-16'),
(176, 5, 'Scientific Literacy', 'Important', '2021-06-16'),
(177, 5, 'Digital Literacy', 'Very Important', '2021-06-16'),
(178, 5, 'Critical Thinking', 'Important', '2021-06-16'),
(179, 5, 'Participatory Learning', 'Important', '2021-06-16'),
(180, 5, 'Creative and Innovation', 'Important', '2021-06-16'),
(181, 5, 'Leadership Skills', 'Important', '2021-06-16'),
(182, 5, 'Social Awareness', 'Very Important', '2021-06-16'),
(183, 5, 'Service Orientation', 'Very Important', '2021-06-16'),
(184, 5, 'Time Management', 'Very Important', '2021-06-16'),
(185, 5, 'Complex Problem Solving Skills', 'Very Important', '2021-06-16'),
(186, 5, 'Judgment and Decision Making', 'Important', '2021-06-16'),
(187, 5, 'Systems Analysis and Evaluation', 'Important', '2021-06-16'),
(188, 8, 'Reading Comprehension', 'Important', '2021-06-21'),
(189, 8, 'Active Listening', 'Important', '2021-06-21'),
(190, 8, 'Writing Skills', 'Important', '2021-06-21'),
(191, 8, 'Verbal Communication', 'Important', '2021-06-21'),
(192, 8, 'Mathematics Skills', 'Important', '2021-06-21'),
(193, 8, 'Scientific Literacy', 'Important', '2021-06-21'),
(194, 8, 'Digital Literacy', 'Important', '2021-06-21'),
(195, 8, 'Critical Thinking', 'Important', '2021-06-21'),
(196, 8, 'Participatory Learning', 'Important', '2021-06-21'),
(197, 8, 'Creative and Innovation', 'Important', '2021-06-21'),
(198, 8, 'Leadership Skills', 'Important', '2021-06-21'),
(199, 8, 'Social Awareness', 'Important', '2021-06-21'),
(200, 8, 'Service Orientation', 'Important', '2021-06-21'),
(201, 8, 'Time Management', 'Important', '2021-06-21'),
(202, 8, 'Complex Problem Solving Skills', 'Important', '2021-06-21'),
(203, 8, 'Judgment and Decision Making', 'Important', '2021-06-21'),
(204, 8, 'Systems Analysis and Evaluation', 'Important', '2021-06-21'),
(205, 67, 'Reading Comprehension', 'Of Little Importance', '2021-06-21'),
(206, 67, 'Active Listening', 'Of Little Importance', '2021-06-21'),
(207, 67, 'Writing Skills', 'Of Little Importance', '2021-06-21'),
(208, 67, 'Verbal Communication', 'Of Little Importance', '2021-06-21'),
(209, 67, 'Mathematics Skills', 'Of Little Importance', '2021-06-21'),
(210, 67, 'Scientific Literacy', 'Of Little Importance', '2021-06-21'),
(211, 67, 'Digital Literacy', 'Of Little Importance', '2021-06-21'),
(212, 67, 'Critical Thinking', 'Of Little Importance', '2021-06-21'),
(213, 67, 'Participatory Learning', 'Of Little Importance', '2021-06-21'),
(214, 67, 'Creative and Innovation', 'Of Little Importance', '2021-06-21'),
(215, 67, 'Leadership Skills', 'Of Little Importance', '2021-06-21'),
(216, 67, 'Social Awareness', 'Of Little Importance', '2021-06-21'),
(217, 67, 'Service Orientation', 'Of Little Importance', '2021-06-21'),
(218, 67, 'Time Management', 'Of Little Importance', '2021-06-21'),
(219, 67, 'Complex Problem Solving Skills', 'Of Little Importance', '2021-06-21'),
(220, 67, 'Judgment and Decision Making', 'Of Little Importance', '2021-06-21'),
(221, 67, 'Systems Analysis and Evaluation', 'Of Little Importance', '2021-06-21'),
(222, 3, 'Reading Comprehension', 'Very Important', '2021-06-24'),
(223, 3, 'Active Listening', 'Very Important', '2021-06-24'),
(224, 3, 'Writing Skills', 'Very Important', '2021-06-24'),
(225, 3, 'Verbal Communication', 'Very Important', '2021-06-24'),
(226, 3, 'Mathematics Skills', 'Very Important', '2021-06-24'),
(227, 3, 'Scientific Literacy', 'Very Important', '2021-06-24'),
(228, 3, 'Digital Literacy', 'Very Important', '2021-06-24'),
(229, 3, 'Critical Thinking', 'Very Important', '2021-06-24'),
(230, 3, 'Participatory Learning', 'Very Important', '2021-06-24'),
(231, 3, 'Creative and Innovation', 'Very Important', '2021-06-24'),
(232, 3, 'Leadership Skills', 'Very Important', '2021-06-24'),
(233, 3, 'Social Awareness', 'Very Important', '2021-06-24'),
(234, 3, 'Service Orientation', 'Very Important', '2021-06-24'),
(235, 3, 'Time Management', 'Very Important', '2021-06-24'),
(236, 3, 'Complex Problem Solving Skills', 'Very Important', '2021-06-24'),
(237, 3, 'Judgment and Decision Making', 'Very Important', '2021-06-24'),
(238, 3, 'Systems Analysis and Evaluation', 'Very Important', '2021-06-24');

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

--
-- Dumping data for table `emp_survey_q8`
--

INSERT INTO `emp_survey_q8` (`answer_id`, `user_id`, `skill`, `answer_body`, `date_response`) VALUES
(1, 24, 'Reading Comprehension', 'Very Unsatisfied', '2021-05-24'),
(2, 24, 'Active Listening', 'Unsatisfied', '2021-05-24'),
(3, 24, 'Writing Skills', 'Satisfied', '2021-05-24'),
(4, 24, 'Verbal Communication', 'Unsatisfied', '2021-05-24'),
(5, 24, 'Mathematics Skills', 'Satisfied', '2021-05-24'),
(6, 24, 'Scientific Literacy', 'Unsatisfied', '2021-05-24'),
(7, 24, 'Digital Literacy', 'Satisfied', '2021-05-24'),
(8, 24, 'Critical Thinking', 'Very Unsatisfied', '2021-05-24'),
(9, 24, 'Participatory Learning', 'Unsatisfied', '2021-05-24'),
(10, 24, 'Creative and Innovation', 'Satisfied', '2021-05-24'),
(11, 24, 'Leadership Skills', 'Very Satisfied', '2021-05-24'),
(12, 24, 'Social Awareness', 'Satisfied', '2021-05-24'),
(13, 24, 'Service Orientation', 'Unsatisfied', '2021-05-24'),
(14, 24, 'Time Management', 'Very Unsatisfied', '2021-05-24'),
(15, 24, 'Complex Problem Solving Skills', 'Unsatisfied', '2021-05-24'),
(16, 24, 'Judgment and Decision Making', 'Satisfied', '2021-05-24'),
(17, 24, 'Systems Analysis and Evaluation', 'Very Satisfied', '2021-05-24'),
(18, 25, 'Reading Comprehension', 'Very Unsatisfied', '2021-05-24'),
(19, 25, 'Active Listening', 'Unsatisfied', '2021-05-24'),
(20, 25, 'Writing Skills', 'Very Unsatisfied', '2021-05-24'),
(21, 25, 'Verbal Communication', 'Satisfied', '2021-05-24'),
(22, 25, 'Mathematics Skills', 'Very Satisfied', '2021-05-24'),
(23, 25, 'Scientific Literacy', 'Satisfied', '2021-05-24'),
(24, 25, 'Digital Literacy', 'Unsatisfied', '2021-05-24'),
(25, 25, 'Critical Thinking', 'Satisfied', '2021-05-24'),
(26, 25, 'Participatory Learning', 'Very Satisfied', '2021-05-24'),
(27, 25, 'Creative and Innovation', 'Satisfied', '2021-05-24'),
(28, 25, 'Leadership Skills', 'Satisfied', '2021-05-24'),
(29, 25, 'Social Awareness', 'Very Satisfied', '2021-05-24'),
(30, 25, 'Service Orientation', 'Satisfied', '2021-05-24'),
(31, 25, 'Time Management', 'Satisfied', '2021-05-24'),
(32, 25, 'Complex Problem Solving Skills', 'Very Satisfied', '2021-05-24'),
(33, 25, 'Judgment and Decision Making', 'Satisfied', '2021-05-24'),
(34, 25, 'Systems Analysis and Evaluation', 'Very Satisfied', '2021-05-24'),
(35, 26, 'Reading Comprehension', 'Very Satisfied', '2021-05-24'),
(36, 26, 'Active Listening', 'Satisfied', '2021-05-24'),
(37, 26, 'Writing Skills', 'Very Satisfied', '2021-05-24'),
(38, 26, 'Verbal Communication', 'Satisfied', '2021-05-24'),
(39, 26, 'Mathematics Skills', 'Very Satisfied', '2021-05-24'),
(40, 26, 'Scientific Literacy', 'Satisfied', '2021-05-24'),
(41, 26, 'Digital Literacy', 'Very Satisfied', '2021-05-24'),
(42, 26, 'Critical Thinking', 'Satisfied', '2021-05-24'),
(43, 26, 'Participatory Learning', 'Very Satisfied', '2021-05-24'),
(44, 26, 'Creative and Innovation', 'Satisfied', '2021-05-24'),
(45, 26, 'Leadership Skills', 'Satisfied', '2021-05-24'),
(46, 26, 'Social Awareness', 'Satisfied', '2021-05-24'),
(47, 26, 'Service Orientation', 'Satisfied', '2021-05-24'),
(48, 26, 'Time Management', 'Very Satisfied', '2021-05-24'),
(49, 26, 'Complex Problem Solving Skills', 'Very Satisfied', '2021-05-24'),
(50, 26, 'Judgment and Decision Making', 'Very Satisfied', '2021-05-24'),
(51, 26, 'Systems Analysis and Evaluation', 'Very Satisfied', '2021-05-24'),
(52, 28, 'Reading Comprehension', 'Unsatisfied', '2021-05-24'),
(53, 28, 'Active Listening', 'Satisfied', '2021-05-24'),
(54, 28, 'Writing Skills', 'Very Satisfied', '2021-05-24'),
(55, 28, 'Verbal Communication', 'Unsatisfied', '2021-05-24'),
(56, 28, 'Mathematics Skills', 'Satisfied', '2021-05-24'),
(57, 28, 'Scientific Literacy', 'Very Unsatisfied', '2021-05-24'),
(58, 28, 'Digital Literacy', 'Unsatisfied', '2021-05-24'),
(59, 28, 'Critical Thinking', 'Satisfied', '2021-05-24'),
(60, 28, 'Participatory Learning', 'Unsatisfied', '2021-05-24'),
(61, 28, 'Creative and Innovation', 'Satisfied', '2021-05-24'),
(62, 28, 'Leadership Skills', 'Satisfied', '2021-05-24'),
(63, 28, 'Social Awareness', 'Very Satisfied', '2021-05-24'),
(64, 28, 'Service Orientation', 'Satisfied', '2021-05-24'),
(65, 28, 'Time Management', 'Very Satisfied', '2021-05-24'),
(66, 28, 'Complex Problem Solving Skills', 'Satisfied', '2021-05-24'),
(67, 28, 'Judgment and Decision Making', 'Satisfied', '2021-05-24'),
(68, 28, 'Systems Analysis and Evaluation', 'Very Satisfied', '2021-05-24'),
(69, 27, 'Reading Comprehension', 'Unsatisfied', '2021-05-24'),
(70, 27, 'Active Listening', 'Unsatisfied', '2021-05-24'),
(71, 27, 'Writing Skills', 'Unsatisfied', '2021-05-24'),
(72, 27, 'Verbal Communication', 'Unsatisfied', '2021-05-24'),
(73, 27, 'Mathematics Skills', 'Unsatisfied', '2021-05-24'),
(74, 27, 'Scientific Literacy', 'Unsatisfied', '2021-05-24'),
(75, 27, 'Digital Literacy', 'Unsatisfied', '2021-05-24'),
(76, 27, 'Critical Thinking', 'Unsatisfied', '2021-05-24'),
(77, 27, 'Participatory Learning', 'Unsatisfied', '2021-05-24'),
(78, 27, 'Creative and Innovation', 'Unsatisfied', '2021-05-24'),
(79, 27, 'Leadership Skills', 'Unsatisfied', '2021-05-24'),
(80, 27, 'Social Awareness', 'Unsatisfied', '2021-05-24'),
(81, 27, 'Service Orientation', 'Unsatisfied', '2021-05-24'),
(82, 27, 'Time Management', 'Unsatisfied', '2021-05-24'),
(83, 27, 'Complex Problem Solving Skills', 'Unsatisfied', '2021-05-24'),
(84, 27, 'Judgment and Decision Making', 'Unsatisfied', '2021-05-24'),
(85, 27, 'Systems Analysis and Evaluation', 'Unsatisfied', '2021-05-24'),
(86, 29, 'Reading Comprehension', 'Satisfied', '2021-05-24'),
(87, 29, 'Active Listening', 'Satisfied', '2021-05-24'),
(88, 29, 'Writing Skills', 'Very Satisfied', '2021-05-24'),
(89, 29, 'Verbal Communication', 'Very Satisfied', '2021-05-24'),
(90, 29, 'Mathematics Skills', 'Unsatisfied', '2021-05-24'),
(91, 29, 'Scientific Literacy', 'Unsatisfied', '2021-05-24'),
(92, 29, 'Digital Literacy', 'Satisfied', '2021-05-24'),
(93, 29, 'Critical Thinking', 'Satisfied', '2021-05-24'),
(94, 29, 'Participatory Learning', 'Satisfied', '2021-05-24'),
(95, 29, 'Creative and Innovation', 'Very Satisfied', '2021-05-24'),
(96, 29, 'Leadership Skills', 'Satisfied', '2021-05-24'),
(97, 29, 'Social Awareness', 'Satisfied', '2021-05-24'),
(98, 29, 'Service Orientation', 'Satisfied', '2021-05-24'),
(99, 29, 'Time Management', 'Satisfied', '2021-05-24'),
(100, 29, 'Complex Problem Solving Skills', 'Very Satisfied', '2021-05-24'),
(101, 29, 'Judgment and Decision Making', 'Satisfied', '2021-05-24'),
(102, 29, 'Systems Analysis and Evaluation', 'Satisfied', '2021-05-24'),
(103, 31, 'Reading Comprehension', 'Satisfied', '2021-05-24'),
(104, 31, 'Active Listening', 'Satisfied', '2021-05-24'),
(105, 31, 'Writing Skills', 'Satisfied', '2021-05-24'),
(106, 31, 'Verbal Communication', 'Satisfied', '2021-05-24'),
(107, 31, 'Mathematics Skills', 'Satisfied', '2021-05-24'),
(108, 31, 'Scientific Literacy', 'Satisfied', '2021-05-24'),
(109, 31, 'Digital Literacy', 'Satisfied', '2021-05-24'),
(110, 31, 'Critical Thinking', 'Satisfied', '2021-05-24'),
(111, 31, 'Participatory Learning', 'Satisfied', '2021-05-24'),
(112, 31, 'Creative and Innovation', 'Satisfied', '2021-05-24'),
(113, 31, 'Leadership Skills', 'Satisfied', '2021-05-24'),
(114, 31, 'Social Awareness', 'Satisfied', '2021-05-24'),
(115, 31, 'Service Orientation', 'Satisfied', '2021-05-24'),
(116, 31, 'Time Management', 'Satisfied', '2021-05-24'),
(117, 31, 'Complex Problem Solving Skills', 'Satisfied', '2021-05-24'),
(118, 31, 'Judgment and Decision Making', 'Satisfied', '2021-05-24'),
(119, 31, 'Systems Analysis and Evaluation', 'Satisfied', '2021-05-24'),
(120, 32, 'Reading Comprehension', 'Satisfied', '2021-05-24'),
(121, 32, 'Active Listening', 'Satisfied', '2021-05-24'),
(122, 32, 'Writing Skills', 'Satisfied', '2021-05-24'),
(123, 32, 'Verbal Communication', 'Satisfied', '2021-05-24'),
(124, 32, 'Mathematics Skills', 'Satisfied', '2021-05-24'),
(125, 32, 'Scientific Literacy', 'Satisfied', '2021-05-24'),
(126, 32, 'Digital Literacy', 'Satisfied', '2021-05-24'),
(127, 32, 'Critical Thinking', 'Satisfied', '2021-05-24'),
(128, 32, 'Participatory Learning', 'Satisfied', '2021-05-24'),
(129, 32, 'Creative and Innovation', 'Satisfied', '2021-05-24'),
(130, 32, 'Leadership Skills', 'Satisfied', '2021-05-24'),
(131, 32, 'Social Awareness', 'Satisfied', '2021-05-24'),
(132, 32, 'Service Orientation', 'Satisfied', '2021-05-24'),
(133, 32, 'Time Management', 'Satisfied', '2021-05-24'),
(134, 32, 'Complex Problem Solving Skills', 'Satisfied', '2021-05-24'),
(135, 32, 'Judgment and Decision Making', 'Satisfied', '2021-05-24'),
(136, 32, 'Systems Analysis and Evaluation', 'Satisfied', '2021-05-24'),
(137, 34, 'Reading Comprehension', 'Very Satisfied', '2021-05-24'),
(138, 34, 'Active Listening', 'Very Satisfied', '2021-05-24'),
(139, 34, 'Writing Skills', 'Very Satisfied', '2021-05-24'),
(140, 34, 'Verbal Communication', 'Very Satisfied', '2021-05-24'),
(141, 34, 'Mathematics Skills', 'Very Satisfied', '2021-05-24'),
(142, 34, 'Scientific Literacy', 'Very Satisfied', '2021-05-24'),
(143, 34, 'Digital Literacy', 'Very Satisfied', '2021-05-24'),
(144, 34, 'Critical Thinking', 'Very Satisfied', '2021-05-24'),
(145, 34, 'Participatory Learning', 'Very Satisfied', '2021-05-24'),
(146, 34, 'Creative and Innovation', 'Very Satisfied', '2021-05-24'),
(147, 34, 'Leadership Skills', 'Very Satisfied', '2021-05-24'),
(148, 34, 'Social Awareness', 'Very Satisfied', '2021-05-24'),
(149, 34, 'Service Orientation', 'Very Satisfied', '2021-05-24'),
(150, 34, 'Time Management', 'Very Satisfied', '2021-05-24'),
(151, 34, 'Complex Problem Solving Skills', 'Very Satisfied', '2021-05-24'),
(152, 34, 'Judgment and Decision Making', 'Very Satisfied', '2021-05-24'),
(153, 34, 'Systems Analysis and Evaluation', 'Very Satisfied', '2021-05-24'),
(154, 33, 'Reading Comprehension', 'Unsatisfied', '2021-05-24'),
(155, 33, 'Active Listening', 'Very Satisfied', '2021-05-24'),
(156, 33, 'Writing Skills', 'Unsatisfied', '2021-05-24'),
(157, 33, 'Verbal Communication', 'Satisfied', '2021-05-24'),
(158, 33, 'Mathematics Skills', 'Very Satisfied', '2021-05-24'),
(159, 33, 'Scientific Literacy', 'Unsatisfied', '2021-05-24'),
(160, 33, 'Digital Literacy', 'Satisfied', '2021-05-24'),
(161, 33, 'Critical Thinking', 'Satisfied', '2021-05-24'),
(162, 33, 'Participatory Learning', 'Unsatisfied', '2021-05-24'),
(163, 33, 'Creative and Innovation', 'Satisfied', '2021-05-24'),
(164, 33, 'Leadership Skills', 'Very Satisfied', '2021-05-24'),
(165, 33, 'Social Awareness', 'Satisfied', '2021-05-24'),
(166, 33, 'Service Orientation', 'Unsatisfied', '2021-05-24'),
(167, 33, 'Time Management', 'Satisfied', '2021-05-24'),
(168, 33, 'Complex Problem Solving Skills', 'Unsatisfied', '2021-05-24'),
(169, 33, 'Judgment and Decision Making', 'Satisfied', '2021-05-24'),
(170, 33, 'Systems Analysis and Evaluation', 'Satisfied', '2021-05-24'),
(171, 5, 'Reading Comprehension', 'Satisfied', '2021-06-16'),
(172, 5, 'Active Listening', 'Satisfied', '2021-06-16'),
(173, 5, 'Writing Skills', 'Satisfied', '2021-06-16'),
(174, 5, 'Verbal Communication', 'Satisfied', '2021-06-16'),
(175, 5, 'Mathematics Skills', 'Satisfied', '2021-06-16'),
(176, 5, 'Scientific Literacy', 'Satisfied', '2021-06-16'),
(177, 5, 'Digital Literacy', 'Very Satisfied', '2021-06-16'),
(178, 5, 'Critical Thinking', 'Satisfied', '2021-06-16'),
(179, 5, 'Participatory Learning', 'Very Satisfied', '2021-06-16'),
(180, 5, 'Creative and Innovation', 'Satisfied', '2021-06-16'),
(181, 5, 'Leadership Skills', 'Very Satisfied', '2021-06-16'),
(182, 5, 'Social Awareness', 'Satisfied', '2021-06-16'),
(183, 5, 'Service Orientation', 'Very Satisfied', '2021-06-16'),
(184, 5, 'Time Management', 'Satisfied', '2021-06-16'),
(185, 5, 'Complex Problem Solving Skills', 'Very Satisfied', '2021-06-16'),
(186, 5, 'Judgment and Decision Making', 'Satisfied', '2021-06-16'),
(187, 5, 'Systems Analysis and Evaluation', 'Very Satisfied', '2021-06-16'),
(188, 8, 'Reading Comprehension', 'Satisfied', '2021-06-21'),
(189, 8, 'Active Listening', 'Satisfied', '2021-06-21'),
(190, 8, 'Writing Skills', 'Satisfied', '2021-06-21'),
(191, 8, 'Verbal Communication', 'Satisfied', '2021-06-21'),
(192, 8, 'Mathematics Skills', 'Satisfied', '2021-06-21'),
(193, 8, 'Scientific Literacy', 'Satisfied', '2021-06-21'),
(194, 8, 'Digital Literacy', 'Satisfied', '2021-06-21'),
(195, 8, 'Critical Thinking', 'Satisfied', '2021-06-21'),
(196, 8, 'Participatory Learning', 'Satisfied', '2021-06-21'),
(197, 8, 'Creative and Innovation', 'Satisfied', '2021-06-21'),
(198, 8, 'Leadership Skills', 'Satisfied', '2021-06-21'),
(199, 8, 'Social Awareness', 'Satisfied', '2021-06-21'),
(200, 8, 'Service Orientation', 'Satisfied', '2021-06-21'),
(201, 8, 'Time Management', 'Satisfied', '2021-06-21'),
(202, 8, 'Complex Problem Solving Skills', 'Satisfied', '2021-06-21'),
(203, 8, 'Judgment and Decision Making', 'Satisfied', '2021-06-21'),
(204, 8, 'Systems Analysis and Evaluation', 'Satisfied', '2021-06-21'),
(205, 67, 'Reading Comprehension', 'Satisfied', '2021-06-21'),
(206, 67, 'Active Listening', 'Satisfied', '2021-06-21'),
(207, 67, 'Writing Skills', 'Satisfied', '2021-06-21'),
(208, 67, 'Verbal Communication', 'Satisfied', '2021-06-21'),
(209, 67, 'Mathematics Skills', 'Satisfied', '2021-06-21'),
(210, 67, 'Scientific Literacy', 'Satisfied', '2021-06-21'),
(211, 67, 'Digital Literacy', 'Satisfied', '2021-06-21'),
(212, 67, 'Critical Thinking', 'Satisfied', '2021-06-21'),
(213, 67, 'Participatory Learning', 'Satisfied', '2021-06-21'),
(214, 67, 'Creative and Innovation', 'Satisfied', '2021-06-21'),
(215, 67, 'Leadership Skills', 'Satisfied', '2021-06-21'),
(216, 67, 'Social Awareness', 'Satisfied', '2021-06-21'),
(217, 67, 'Service Orientation', 'Satisfied', '2021-06-21'),
(218, 67, 'Time Management', 'Satisfied', '2021-06-21'),
(219, 67, 'Complex Problem Solving Skills', 'Satisfied', '2021-06-21'),
(220, 67, 'Judgment and Decision Making', 'Satisfied', '2021-06-21'),
(221, 67, 'Systems Analysis and Evaluation', 'Satisfied', '2021-06-21'),
(222, 3, 'Reading Comprehension', 'Very Satisfied', '2021-06-24'),
(223, 3, 'Active Listening', 'Very Satisfied', '2021-06-24'),
(224, 3, 'Writing Skills', 'Very Satisfied', '2021-06-24'),
(225, 3, 'Verbal Communication', 'Very Satisfied', '2021-06-24'),
(226, 3, 'Mathematics Skills', 'Very Satisfied', '2021-06-24'),
(227, 3, 'Scientific Literacy', 'Very Satisfied', '2021-06-24'),
(228, 3, 'Digital Literacy', 'Very Satisfied', '2021-06-24'),
(229, 3, 'Critical Thinking', 'Very Satisfied', '2021-06-24'),
(230, 3, 'Participatory Learning', 'Very Satisfied', '2021-06-24'),
(231, 3, 'Creative and Innovation', 'Very Satisfied', '2021-06-24'),
(232, 3, 'Leadership Skills', 'Very Satisfied', '2021-06-24'),
(233, 3, 'Social Awareness', 'Very Satisfied', '2021-06-24'),
(234, 3, 'Service Orientation', 'Very Satisfied', '2021-06-24'),
(235, 3, 'Time Management', 'Very Satisfied', '2021-06-24'),
(236, 3, 'Complex Problem Solving Skills', 'Very Satisfied', '2021-06-24'),
(237, 3, 'Judgment and Decision Making', 'Very Satisfied', '2021-06-24'),
(238, 3, 'Systems Analysis and Evaluation', 'Very Satisfied', '2021-06-24');

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

--
-- Dumping data for table `emp_survey_q9`
--

INSERT INTO `emp_survey_q9` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 24, 'Unlikely', '2021-05-24'),
(2, 25, 'Very Likely', '2021-05-24'),
(3, 26, 'Likely', '2021-05-24'),
(4, 28, 'Unlikely', '2021-05-24'),
(5, 27, 'Likely', '2021-05-24'),
(6, 29, 'Likely', '2021-05-24'),
(7, 31, 'Likely', '2021-05-24'),
(8, 32, 'Very Likely', '2021-05-24'),
(9, 34, 'Very Likely', '2021-05-24'),
(10, 33, 'Likely', '2021-05-24'),
(11, 5, 'Likely', '2021-06-16'),
(12, 8, 'Likely', '2021-06-21'),
(13, 67, 'Likely', '2021-06-21'),
(14, 3, 'Likely', '2021-06-24');

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

--
-- Dumping data for table `emp_survey_q10`
--

INSERT INTO `emp_survey_q10` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 24, 'Very Unlikely', '2021-05-24'),
(2, 25, 'Likely', '2021-05-24'),
(3, 26, 'Likely', '2021-05-24'),
(4, 28, 'Very Likely', '2021-05-24'),
(5, 27, 'Likely', '2021-05-24'),
(6, 29, 'Likely', '2021-05-24'),
(7, 31, 'Likely', '2021-05-24'),
(8, 32, 'Very Likely', '2021-05-24'),
(9, 34, 'Very Likely', '2021-05-24'),
(10, 33, 'Very Likely', '2021-05-24'),
(11, 5, 'Likely', '2021-06-16'),
(12, 8, 'Likely', '2021-06-21'),
(13, 67, 'Likely', '2021-06-21'),
(14, 3, 'Likely', '2021-06-24');

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

--
-- Dumping data for table `emp_survey_q11`
--

INSERT INTO `emp_survey_q11` (`answer_id`, `user_id`, `skill`, `answer_body`, `date_response`) VALUES
(1, 24, 'Willing to undergo training and/or further education', 'Unimportant', '2021-05-24'),
(2, 24, 'Has strong and professional work ethic', 'Of Little Importance', '2021-05-24'),
(3, 24, 'Willing to share knowledge and expertise within the company and/or community', 'Unimportant', '2021-05-24'),
(4, 24, 'Willing and has a positive attitude towards working with others', 'Of Little Importance', '2021-05-24'),
(5, 24, 'Is able to learn quickly the basic company operations', 'Important', '2021-05-24'),
(6, 24, 'Is able to provide solutions and contribute to the growth of the company', 'Very Important', '2021-05-24'),
(7, 24, 'Is able to master company operations', 'Of Little Importance', '2021-05-24'),
(8, 24, 'Effective in both oral and written communication', 'Of Little Importance', '2021-05-24'),
(9, 24, 'Computer and Technical Literate', 'Important', '2021-05-24'),
(10, 24, 'Effective and efficient in accomplishing tasks', 'Important', '2021-05-24'),
(11, 24, 'Able to provide innovative ideas to the company', 'Of Little Importance', '2021-05-24'),
(12, 25, 'Willing to undergo training and/or further education', 'Important', '2021-05-24'),
(13, 25, 'Has strong and professional work ethic', 'Very Important', '2021-05-24'),
(14, 25, 'Willing to share knowledge and expertise within the company and/or community', 'Of Little Importance', '2021-05-24'),
(15, 25, 'Willing and has a positive attitude towards working with others', 'Of Little Importance', '2021-05-24'),
(16, 25, 'Is able to learn quickly the basic company operations', 'Important', '2021-05-24'),
(17, 25, 'Is able to provide solutions and contribute to the growth of the company', 'Very Important', '2021-05-24'),
(18, 25, 'Is able to master company operations', 'Important', '2021-05-24'),
(19, 25, 'Effective in both oral and written communication', 'Important', '2021-05-24'),
(20, 25, 'Computer and Technical Literate', 'Important', '2021-05-24'),
(21, 25, 'Effective and efficient in accomplishing tasks', 'Very Important', '2021-05-24'),
(22, 25, 'Able to provide innovative ideas to the company', 'Important', '2021-05-24'),
(23, 26, 'Willing to undergo training and/or further education', 'Very Important', '2021-05-24'),
(24, 26, 'Has strong and professional work ethic', 'Important', '2021-05-24'),
(25, 26, 'Willing to share knowledge and expertise within the company and/or community', 'Very Important', '2021-05-24'),
(26, 26, 'Willing and has a positive attitude towards working with others', 'Important', '2021-05-24'),
(27, 26, 'Is able to learn quickly the basic company operations', 'Very Important', '2021-05-24'),
(28, 26, 'Is able to provide solutions and contribute to the growth of the company', 'Very Important', '2021-05-24'),
(29, 26, 'Is able to master company operations', 'Very Important', '2021-05-24'),
(30, 26, 'Effective in both oral and written communication', 'Important', '2021-05-24'),
(31, 26, 'Computer and Technical Literate', 'Very Important', '2021-05-24'),
(32, 26, 'Effective and efficient in accomplishing tasks', 'Important', '2021-05-24'),
(33, 26, 'Able to provide innovative ideas to the company', 'Important', '2021-05-24'),
(34, 28, 'Willing to undergo training and/or further education', 'Very Important', '2021-05-24'),
(35, 28, 'Has strong and professional work ethic', 'Important', '2021-05-24'),
(36, 28, 'Willing to share knowledge and expertise within the company and/or community', 'Very Important', '2021-05-24'),
(37, 28, 'Willing and has a positive attitude towards working with others', 'Important', '2021-05-24'),
(38, 28, 'Is able to learn quickly the basic company operations', 'Important', '2021-05-24'),
(39, 28, 'Is able to provide solutions and contribute to the growth of the company', 'Very Important', '2021-05-24'),
(40, 28, 'Is able to master company operations', 'Of Little Importance', '2021-05-24'),
(41, 28, 'Effective in both oral and written communication', 'Important', '2021-05-24'),
(42, 28, 'Computer and Technical Literate', 'Important', '2021-05-24'),
(43, 28, 'Effective and efficient in accomplishing tasks', 'Important', '2021-05-24'),
(44, 28, 'Able to provide innovative ideas to the company', 'Important', '2021-05-24'),
(45, 27, 'Willing to undergo training and/or further education', 'Important', '2021-05-24'),
(46, 27, 'Has strong and professional work ethic', 'Important', '2021-05-24'),
(47, 27, 'Willing to share knowledge and expertise within the company and/or community', 'Important', '2021-05-24'),
(48, 27, 'Willing and has a positive attitude towards working with others', 'Important', '2021-05-24'),
(49, 27, 'Is able to learn quickly the basic company operations', 'Important', '2021-05-24'),
(50, 27, 'Is able to provide solutions and contribute to the growth of the company', 'Important', '2021-05-24'),
(51, 27, 'Is able to master company operations', 'Important', '2021-05-24'),
(52, 27, 'Effective in both oral and written communication', 'Important', '2021-05-24'),
(53, 27, 'Computer and Technical Literate', 'Important', '2021-05-24'),
(54, 27, 'Effective and efficient in accomplishing tasks', 'Important', '2021-05-24'),
(55, 27, 'Able to provide innovative ideas to the company', 'Important', '2021-05-24'),
(56, 29, 'Willing to undergo training and/or further education', 'Very Important', '2021-05-24'),
(57, 29, 'Has strong and professional work ethic', 'Very Important', '2021-05-24'),
(58, 29, 'Willing to share knowledge and expertise within the company and/or community', 'Very Important', '2021-05-24'),
(59, 29, 'Willing and has a positive attitude towards working with others', 'Important', '2021-05-24'),
(60, 29, 'Is able to learn quickly the basic company operations', 'Important', '2021-05-24'),
(61, 29, 'Is able to provide solutions and contribute to the growth of the company', 'Very Important', '2021-05-24'),
(62, 29, 'Is able to master company operations', 'Of Little Importance', '2021-05-24'),
(63, 29, 'Effective in both oral and written communication', 'Important', '2021-05-24'),
(64, 29, 'Computer and Technical Literate', 'Important', '2021-05-24'),
(65, 29, 'Effective and efficient in accomplishing tasks', 'Important', '2021-05-24'),
(66, 29, 'Able to provide innovative ideas to the company', 'Very Important', '2021-05-24'),
(67, 31, 'Willing to undergo training and/or further education', 'Important', '2021-05-24'),
(68, 31, 'Has strong and professional work ethic', 'Important', '2021-05-24'),
(69, 31, 'Willing to share knowledge and expertise within the company and/or community', 'Of Little Importance', '2021-05-24'),
(70, 31, 'Willing and has a positive attitude towards working with others', 'Of Little Importance', '2021-05-24'),
(71, 31, 'Is able to learn quickly the basic company operations', 'Important', '2021-05-24'),
(72, 31, 'Is able to provide solutions and contribute to the growth of the company', 'Important', '2021-05-24'),
(73, 31, 'Is able to master company operations', 'Of Little Importance', '2021-05-24'),
(74, 31, 'Effective in both oral and written communication', 'Of Little Importance', '2021-05-24'),
(75, 31, 'Computer and Technical Literate', 'Important', '2021-05-24'),
(76, 31, 'Effective and efficient in accomplishing tasks', 'Important', '2021-05-24'),
(77, 31, 'Able to provide innovative ideas to the company', 'Important', '2021-05-24'),
(78, 32, 'Willing to undergo training and/or further education', 'Important', '2021-05-24'),
(79, 32, 'Has strong and professional work ethic', 'Important', '2021-05-24'),
(80, 32, 'Willing to share knowledge and expertise within the company and/or community', 'Important', '2021-05-24'),
(81, 32, 'Willing and has a positive attitude towards working with others', 'Important', '2021-05-24'),
(82, 32, 'Is able to learn quickly the basic company operations', 'Important', '2021-05-24'),
(83, 32, 'Is able to provide solutions and contribute to the growth of the company', 'Important', '2021-05-24'),
(84, 32, 'Is able to master company operations', 'Important', '2021-05-24'),
(85, 32, 'Effective in both oral and written communication', 'Important', '2021-05-24'),
(86, 32, 'Computer and Technical Literate', 'Important', '2021-05-24'),
(87, 32, 'Effective and efficient in accomplishing tasks', 'Important', '2021-05-24'),
(88, 32, 'Able to provide innovative ideas to the company', 'Important', '2021-05-24'),
(89, 34, 'Willing to undergo training and/or further education', 'Very Important', '2021-05-24'),
(90, 34, 'Has strong and professional work ethic', 'Very Important', '2021-05-24'),
(91, 34, 'Willing to share knowledge and expertise within the company and/or community', 'Very Important', '2021-05-24'),
(92, 34, 'Willing and has a positive attitude towards working with others', 'Very Important', '2021-05-24'),
(93, 34, 'Is able to learn quickly the basic company operations', 'Very Important', '2021-05-24'),
(94, 34, 'Is able to provide solutions and contribute to the growth of the company', 'Very Important', '2021-05-24'),
(95, 34, 'Is able to master company operations', 'Very Important', '2021-05-24'),
(96, 34, 'Effective in both oral and written communication', 'Very Important', '2021-05-24'),
(97, 34, 'Computer and Technical Literate', 'Very Important', '2021-05-24'),
(98, 34, 'Effective and efficient in accomplishing tasks', 'Very Important', '2021-05-24'),
(99, 34, 'Able to provide innovative ideas to the company', 'Very Important', '2021-05-24'),
(100, 33, 'Willing to undergo training and/or further education', 'Very Important', '2021-05-24'),
(101, 33, 'Has strong and professional work ethic', 'Of Little Importance', '2021-05-24'),
(102, 33, 'Willing to share knowledge and expertise within the company and/or community', 'Important', '2021-05-24'),
(103, 33, 'Willing and has a positive attitude towards working with others', 'Important', '2021-05-24'),
(104, 33, 'Is able to learn quickly the basic company operations', 'Of Little Importance', '2021-05-24'),
(105, 33, 'Is able to provide solutions and contribute to the growth of the company', 'Very Important', '2021-05-24'),
(106, 33, 'Is able to master company operations', 'Important', '2021-05-24'),
(107, 33, 'Effective in both oral and written communication', 'Very Important', '2021-05-24'),
(108, 33, 'Computer and Technical Literate', 'Of Little Importance', '2021-05-24'),
(109, 33, 'Effective and efficient in accomplishing tasks', 'Important', '2021-05-24'),
(110, 33, 'Able to provide innovative ideas to the company', 'Important', '2021-05-24'),
(111, 5, 'Willing to undergo training and/or further education', 'Important', '2021-06-16'),
(112, 5, 'Has strong and professional work ethic', 'Important', '2021-06-16'),
(113, 5, 'Willing to share knowledge and expertise within the company and/or community', 'Important', '2021-06-16'),
(114, 5, 'Willing and has a positive attitude towards working with others', 'Important', '2021-06-16'),
(115, 5, 'Is able to learn quickly the basic company operations', 'Important', '2021-06-16'),
(116, 5, 'Is able to provide solutions and contribute to the growth of the company', 'Important', '2021-06-16'),
(117, 5, 'Is able to master company operations', 'Important', '2021-06-16'),
(118, 5, 'Effective in both oral and written communication', 'Important', '2021-06-16'),
(119, 5, 'Computer and Technical Literate', 'Important', '2021-06-16'),
(120, 5, 'Effective and efficient in accomplishing tasks', 'Important', '2021-06-16'),
(121, 5, 'Able to provide innovative ideas to the company', 'Important', '2021-06-16'),
(122, 8, 'Willing to undergo training and/or further education', 'Important', '2021-06-21'),
(123, 8, 'Has strong and professional work ethic', 'Important', '2021-06-21'),
(124, 8, 'Willing to share knowledge and expertise within the company and/or community', 'Important', '2021-06-21'),
(125, 8, 'Willing and has a positive attitude towards working with others', 'Important', '2021-06-21'),
(126, 8, 'Is able to learn quickly the basic company operations', 'Important', '2021-06-21'),
(127, 8, 'Is able to provide solutions and contribute to the growth of the company', 'Important', '2021-06-21'),
(128, 8, 'Is able to master company operations', 'Important', '2021-06-21'),
(129, 8, 'Effective in both oral and written communication', 'Important', '2021-06-21'),
(130, 8, 'Computer and Technical Literate', 'Important', '2021-06-21'),
(131, 8, 'Effective and efficient in accomplishing tasks', 'Important', '2021-06-21'),
(132, 8, 'Able to provide innovative ideas to the company', 'Important', '2021-06-21'),
(133, 67, 'Willing to undergo training and/or further education', 'Important', '2021-06-21'),
(134, 67, 'Has strong and professional work ethic', 'Important', '2021-06-21'),
(135, 67, 'Willing to share knowledge and expertise within the company and/or community', 'Important', '2021-06-21'),
(136, 67, 'Willing and has a positive attitude towards working with others', 'Of Little Importance', '2021-06-21'),
(137, 67, 'Is able to learn quickly the basic company operations', 'Of Little Importance', '2021-06-21'),
(138, 67, 'Is able to provide solutions and contribute to the growth of the company', 'Important', '2021-06-21'),
(139, 67, 'Is able to master company operations', 'Of Little Importance', '2021-06-21'),
(140, 67, 'Effective in both oral and written communication', 'Of Little Importance', '2021-06-21'),
(141, 67, 'Computer and Technical Literate', 'Important', '2021-06-21'),
(142, 67, 'Effective and efficient in accomplishing tasks', 'Important', '2021-06-21'),
(143, 67, 'Able to provide innovative ideas to the company', 'Important', '2021-06-21'),
(144, 3, 'Willing to undergo training and/or further education', 'Important', '2021-06-24'),
(145, 3, 'Has strong and professional work ethic', 'Important', '2021-06-24'),
(146, 3, 'Willing to share knowledge and expertise within the company and/or community', 'Important', '2021-06-24'),
(147, 3, 'Willing and has a positive attitude towards working with others', 'Important', '2021-06-24'),
(148, 3, 'Is able to learn quickly the basic company operations', 'Important', '2021-06-24'),
(149, 3, 'Is able to provide solutions and contribute to the growth of the company', 'Important', '2021-06-24'),
(150, 3, 'Is able to master company operations', 'Important', '2021-06-24'),
(151, 3, 'Effective in both oral and written communication', 'Important', '2021-06-24'),
(152, 3, 'Computer and Technical Literate', 'Important', '2021-06-24'),
(153, 3, 'Effective and efficient in accomplishing tasks', 'Important', '2021-06-24'),
(154, 3, 'Able to provide innovative ideas to the company', 'Important', '2021-06-24');

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

--
-- Dumping data for table `emp_survey_q12`
--

INSERT INTO `emp_survey_q12` (`answer_id`, `user_id`, `skill`, `answer_body`, `date_response`) VALUES
(1, 24, 'Willing to undergo training and/or further education', 'Very Unsatisfied', '2021-05-24'),
(2, 24, 'Has strong and professional work ethic', 'Unsatisfied', '2021-05-24'),
(3, 24, 'Willing to share knowledge and expertise within the company and/or community', 'Unsatisfied', '2021-05-24'),
(4, 24, 'Willing and has a positive attitude towards working with others', 'Satisfied', '2021-05-24'),
(5, 24, 'Is able to learn quickly the basic company operations', 'Unsatisfied', '2021-05-24'),
(6, 24, 'Is able to provide solutions and contribute to the growth of the company', 'Satisfied', '2021-05-24'),
(7, 24, 'Is able to master company operations', 'Unsatisfied', '2021-05-24'),
(8, 24, 'Effective in both oral and written communication', 'Satisfied', '2021-05-24'),
(9, 24, 'Computer and Technical Literate', 'Satisfied', '2021-05-24'),
(10, 24, 'Effective and efficient in accomplishing tasks', 'Satisfied', '2021-05-24'),
(11, 24, 'Able to provide innovative ideas to the company', 'Unsatisfied', '2021-05-24'),
(12, 25, 'Willing to undergo training and/or further education', 'Satisfied', '2021-05-24'),
(13, 25, 'Has strong and professional work ethic', 'Very Satisfied', '2021-05-24'),
(14, 25, 'Willing to share knowledge and expertise within the company and/or community', 'Satisfied', '2021-05-24'),
(15, 25, 'Willing and has a positive attitude towards working with others', 'Very Satisfied', '2021-05-24'),
(16, 25, 'Is able to learn quickly the basic company operations', 'Very Satisfied', '2021-05-24'),
(17, 25, 'Is able to provide solutions and contribute to the growth of the company', 'Very Satisfied', '2021-05-24'),
(18, 25, 'Is able to master company operations', 'Satisfied', '2021-05-24'),
(19, 25, 'Effective in both oral and written communication', 'Unsatisfied', '2021-05-24'),
(20, 25, 'Computer and Technical Literate', 'Unsatisfied', '2021-05-24'),
(21, 25, 'Effective and efficient in accomplishing tasks', 'Satisfied', '2021-05-24'),
(22, 25, 'Able to provide innovative ideas to the company', 'Satisfied', '2021-05-24'),
(23, 26, 'Willing to undergo training and/or further education', 'Unsatisfied', '2021-05-24'),
(24, 26, 'Has strong and professional work ethic', 'Unsatisfied', '2021-05-24'),
(25, 26, 'Willing to share knowledge and expertise within the company and/or community', 'Satisfied', '2021-05-24'),
(26, 26, 'Willing and has a positive attitude towards working with others', 'Satisfied', '2021-05-24'),
(27, 26, 'Is able to learn quickly the basic company operations', 'Unsatisfied', '2021-05-24'),
(28, 26, 'Is able to provide solutions and contribute to the growth of the company', 'Satisfied', '2021-05-24'),
(29, 26, 'Is able to master company operations', 'Unsatisfied', '2021-05-24'),
(30, 26, 'Effective in both oral and written communication', 'Very Satisfied', '2021-05-24'),
(31, 26, 'Computer and Technical Literate', 'Very Satisfied', '2021-05-24'),
(32, 26, 'Effective and efficient in accomplishing tasks', 'Very Satisfied', '2021-05-24'),
(33, 26, 'Able to provide innovative ideas to the company', 'Satisfied', '2021-05-24'),
(34, 28, 'Willing to undergo training and/or further education', 'Unsatisfied', '2021-05-24'),
(35, 28, 'Has strong and professional work ethic', 'Satisfied', '2021-05-24'),
(36, 28, 'Willing to share knowledge and expertise within the company and/or community', 'Satisfied', '2021-05-24'),
(37, 28, 'Willing and has a positive attitude towards working with others', 'Satisfied', '2021-05-24'),
(38, 28, 'Is able to learn quickly the basic company operations', 'Very Satisfied', '2021-05-24'),
(39, 28, 'Is able to provide solutions and contribute to the growth of the company', 'Satisfied', '2021-05-24'),
(40, 28, 'Is able to master company operations', 'Very Satisfied', '2021-05-24'),
(41, 28, 'Effective in both oral and written communication', 'Satisfied', '2021-05-24'),
(42, 28, 'Computer and Technical Literate', 'Satisfied', '2021-05-24'),
(43, 28, 'Effective and efficient in accomplishing tasks', 'Unsatisfied', '2021-05-24'),
(44, 28, 'Able to provide innovative ideas to the company', 'Very Unsatisfied', '2021-05-24'),
(45, 27, 'Willing to undergo training and/or further education', 'Satisfied', '2021-05-24'),
(46, 27, 'Has strong and professional work ethic', 'Satisfied', '2021-05-24'),
(47, 27, 'Willing to share knowledge and expertise within the company and/or community', 'Satisfied', '2021-05-24'),
(48, 27, 'Willing and has a positive attitude towards working with others', 'Satisfied', '2021-05-24'),
(49, 27, 'Is able to learn quickly the basic company operations', 'Satisfied', '2021-05-24'),
(50, 27, 'Is able to provide solutions and contribute to the growth of the company', 'Satisfied', '2021-05-24'),
(51, 27, 'Is able to master company operations', 'Satisfied', '2021-05-24'),
(52, 27, 'Effective in both oral and written communication', 'Satisfied', '2021-05-24'),
(53, 27, 'Computer and Technical Literate', 'Satisfied', '2021-05-24'),
(54, 27, 'Effective and efficient in accomplishing tasks', 'Satisfied', '2021-05-24'),
(55, 27, 'Able to provide innovative ideas to the company', 'Satisfied', '2021-05-24'),
(56, 29, 'Willing to undergo training and/or further education', 'Very Satisfied', '2021-05-24'),
(57, 29, 'Has strong and professional work ethic', 'Satisfied', '2021-05-24'),
(58, 29, 'Willing to share knowledge and expertise within the company and/or community', 'Very Satisfied', '2021-05-24'),
(59, 29, 'Willing and has a positive attitude towards working with others', 'Satisfied', '2021-05-24'),
(60, 29, 'Is able to learn quickly the basic company operations', 'Very Satisfied', '2021-05-24'),
(61, 29, 'Is able to provide solutions and contribute to the growth of the company', 'Satisfied', '2021-05-24'),
(62, 29, 'Is able to master company operations', 'Very Satisfied', '2021-05-24'),
(63, 29, 'Effective in both oral and written communication', 'Satisfied', '2021-05-24'),
(64, 29, 'Computer and Technical Literate', 'Very Satisfied', '2021-05-24'),
(65, 29, 'Effective and efficient in accomplishing tasks', 'Satisfied', '2021-05-24'),
(66, 29, 'Able to provide innovative ideas to the company', 'Very Satisfied', '2021-05-24'),
(67, 31, 'Willing to undergo training and/or further education', 'Satisfied', '2021-05-24'),
(68, 31, 'Has strong and professional work ethic', 'Satisfied', '2021-05-24'),
(69, 31, 'Willing to share knowledge and expertise within the company and/or community', 'Satisfied', '2021-05-24'),
(70, 31, 'Willing and has a positive attitude towards working with others', 'Satisfied', '2021-05-24'),
(71, 31, 'Is able to learn quickly the basic company operations', 'Satisfied', '2021-05-24'),
(72, 31, 'Is able to provide solutions and contribute to the growth of the company', 'Satisfied', '2021-05-24'),
(73, 31, 'Is able to master company operations', 'Satisfied', '2021-05-24'),
(74, 31, 'Effective in both oral and written communication', 'Satisfied', '2021-05-24'),
(75, 31, 'Computer and Technical Literate', 'Satisfied', '2021-05-24'),
(76, 31, 'Effective and efficient in accomplishing tasks', 'Satisfied', '2021-05-24'),
(77, 31, 'Able to provide innovative ideas to the company', 'Satisfied', '2021-05-24'),
(78, 32, 'Willing to undergo training and/or further education', 'Satisfied', '2021-05-24'),
(79, 32, 'Has strong and professional work ethic', 'Satisfied', '2021-05-24'),
(80, 32, 'Willing to share knowledge and expertise within the company and/or community', 'Satisfied', '2021-05-24'),
(81, 32, 'Willing and has a positive attitude towards working with others', 'Satisfied', '2021-05-24'),
(82, 32, 'Is able to learn quickly the basic company operations', 'Satisfied', '2021-05-24'),
(83, 32, 'Is able to provide solutions and contribute to the growth of the company', 'Satisfied', '2021-05-24'),
(84, 32, 'Is able to master company operations', 'Satisfied', '2021-05-24'),
(85, 32, 'Effective in both oral and written communication', 'Satisfied', '2021-05-24'),
(86, 32, 'Computer and Technical Literate', 'Satisfied', '2021-05-24'),
(87, 32, 'Effective and efficient in accomplishing tasks', 'Satisfied', '2021-05-24'),
(88, 32, 'Able to provide innovative ideas to the company', 'Satisfied', '2021-05-24'),
(89, 34, 'Willing to undergo training and/or further education', 'Very Satisfied', '2021-05-24'),
(90, 34, 'Has strong and professional work ethic', 'Very Satisfied', '2021-05-24'),
(91, 34, 'Willing to share knowledge and expertise within the company and/or community', 'Very Satisfied', '2021-05-24'),
(92, 34, 'Willing and has a positive attitude towards working with others', 'Very Satisfied', '2021-05-24'),
(93, 34, 'Is able to learn quickly the basic company operations', 'Very Satisfied', '2021-05-24'),
(94, 34, 'Is able to provide solutions and contribute to the growth of the company', 'Very Satisfied', '2021-05-24'),
(95, 34, 'Is able to master company operations', 'Very Satisfied', '2021-05-24'),
(96, 34, 'Effective in both oral and written communication', 'Very Satisfied', '2021-05-24'),
(97, 34, 'Computer and Technical Literate', 'Very Satisfied', '2021-05-24'),
(98, 34, 'Effective and efficient in accomplishing tasks', 'Very Satisfied', '2021-05-24'),
(99, 34, 'Able to provide innovative ideas to the company', 'Very Satisfied', '2021-05-24'),
(100, 33, 'Willing to undergo training and/or further education', 'Satisfied', '2021-05-24'),
(101, 33, 'Has strong and professional work ethic', 'Satisfied', '2021-05-24'),
(102, 33, 'Willing to share knowledge and expertise within the company and/or community', 'Satisfied', '2021-05-24'),
(103, 33, 'Willing and has a positive attitude towards working with others', 'Satisfied', '2021-05-24'),
(104, 33, 'Is able to learn quickly the basic company operations', 'Satisfied', '2021-05-24'),
(105, 33, 'Is able to provide solutions and contribute to the growth of the company', 'Satisfied', '2021-05-24'),
(106, 33, 'Is able to master company operations', 'Satisfied', '2021-05-24'),
(107, 33, 'Effective in both oral and written communication', 'Satisfied', '2021-05-24'),
(108, 33, 'Computer and Technical Literate', 'Satisfied', '2021-05-24'),
(109, 33, 'Effective and efficient in accomplishing tasks', 'Satisfied', '2021-05-24'),
(110, 33, 'Able to provide innovative ideas to the company', 'Satisfied', '2021-05-24'),
(111, 5, 'Willing to undergo training and/or further education', 'Satisfied', '2021-06-16'),
(112, 5, 'Has strong and professional work ethic', 'Satisfied', '2021-06-16'),
(113, 5, 'Willing to share knowledge and expertise within the company and/or community', 'Satisfied', '2021-06-16'),
(114, 5, 'Willing and has a positive attitude towards working with others', 'Satisfied', '2021-06-16'),
(115, 5, 'Is able to learn quickly the basic company operations', 'Satisfied', '2021-06-16'),
(116, 5, 'Is able to provide solutions and contribute to the growth of the company', 'Satisfied', '2021-06-16'),
(117, 5, 'Is able to master company operations', 'Satisfied', '2021-06-16'),
(118, 5, 'Effective in both oral and written communication', 'Satisfied', '2021-06-16'),
(119, 5, 'Computer and Technical Literate', 'Satisfied', '2021-06-16'),
(120, 5, 'Effective and efficient in accomplishing tasks', 'Satisfied', '2021-06-16'),
(121, 5, 'Able to provide innovative ideas to the company', 'Satisfied', '2021-06-16'),
(122, 8, 'Willing to undergo training and/or further education', 'Satisfied', '2021-06-21'),
(123, 8, 'Has strong and professional work ethic', 'Satisfied', '2021-06-21'),
(124, 8, 'Willing to share knowledge and expertise within the company and/or community', 'Satisfied', '2021-06-21'),
(125, 8, 'Willing and has a positive attitude towards working with others', 'Satisfied', '2021-06-21'),
(126, 8, 'Is able to learn quickly the basic company operations', 'Satisfied', '2021-06-21'),
(127, 8, 'Is able to provide solutions and contribute to the growth of the company', 'Satisfied', '2021-06-21'),
(128, 8, 'Is able to master company operations', 'Satisfied', '2021-06-21'),
(129, 8, 'Effective in both oral and written communication', 'Satisfied', '2021-06-21'),
(130, 8, 'Computer and Technical Literate', 'Satisfied', '2021-06-21'),
(131, 8, 'Effective and efficient in accomplishing tasks', 'Satisfied', '2021-06-21'),
(132, 8, 'Able to provide innovative ideas to the company', 'Satisfied', '2021-06-21'),
(133, 67, 'Willing to undergo training and/or further education', 'Satisfied', '2021-06-21'),
(134, 67, 'Has strong and professional work ethic', 'Very Satisfied', '2021-06-21'),
(135, 67, 'Willing to share knowledge and expertise within the company and/or community', 'Satisfied', '2021-06-21'),
(136, 67, 'Willing and has a positive attitude towards working with others', 'Very Satisfied', '2021-06-21'),
(137, 67, 'Is able to learn quickly the basic company operations', 'Satisfied', '2021-06-21'),
(138, 67, 'Is able to provide solutions and contribute to the growth of the company', 'Very Satisfied', '2021-06-21'),
(139, 67, 'Is able to master company operations', 'Satisfied', '2021-06-21'),
(140, 67, 'Effective in both oral and written communication', 'Very Satisfied', '2021-06-21'),
(141, 67, 'Computer and Technical Literate', 'Satisfied', '2021-06-21'),
(142, 67, 'Effective and efficient in accomplishing tasks', 'Very Satisfied', '2021-06-21'),
(143, 67, 'Able to provide innovative ideas to the company', 'Satisfied', '2021-06-21'),
(144, 3, 'Willing to undergo training and/or further education', 'Satisfied', '2021-06-24'),
(145, 3, 'Has strong and professional work ethic', 'Satisfied', '2021-06-24'),
(146, 3, 'Willing to share knowledge and expertise within the company and/or community', 'Satisfied', '2021-06-24'),
(147, 3, 'Willing and has a positive attitude towards working with others', 'Satisfied', '2021-06-24'),
(148, 3, 'Is able to learn quickly the basic company operations', 'Satisfied', '2021-06-24'),
(149, 3, 'Is able to provide solutions and contribute to the growth of the company', 'Satisfied', '2021-06-24'),
(150, 3, 'Is able to master company operations', 'Satisfied', '2021-06-24'),
(151, 3, 'Effective in both oral and written communication', 'Satisfied', '2021-06-24'),
(152, 3, 'Computer and Technical Literate', 'Satisfied', '2021-06-24'),
(153, 3, 'Effective and efficient in accomplishing tasks', 'Satisfied', '2021-06-24'),
(154, 3, 'Able to provide innovative ideas to the company', 'Satisfied', '2021-06-24');

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

--
-- Dumping data for table `emp_survey_q13`
--

INSERT INTO `emp_survey_q13` (`answer_id`, `user_id`, `answer_body`, `answer_others`, `date_response`) VALUES
(1, 24, 'Design courses that are more relevant to the needs of employers', '', '2021-05-24'),
(2, 24, 'Include practical experience as part of the academic programs', '', '2021-05-24'),
(3, 24, 'Provide better post-graduation support (facilitate relations between graduates and companies/organizations)', '', '2021-05-24'),
(4, 24, 'other', 'Something', '2021-05-24'),
(5, 25, 'Design courses that are more relevant to the needs of employers', '', '2021-05-24'),
(6, 25, 'Include practical experience as part of the academic programs', '', '2021-05-24'),
(7, 25, 'Include sector specific job placements as an integral part of the degree program', '', '2021-05-24'),
(8, 25, 'Provide better post-graduation support (facilitate relations between graduates and companies/organizations)', '', '2021-05-24'),
(9, 26, 'Design courses that are more relevant to the needs of employers', '', '2021-05-24'),
(10, 26, 'Include practical experience as part of the academic programs', '', '2021-05-24'),
(11, 26, 'Include sector specific job placements as an integral part of the degree program', '', '2021-05-24'),
(12, 28, 'other', 'Some people want it all', '2021-05-24'),
(13, 27, 'Design courses that are more relevant to the needs of employers', '', '2021-05-24'),
(14, 27, 'Include practical experience as part of the academic programs', '', '2021-05-24'),
(15, 27, 'Include sector specific job placements as an integral part of the degree program', '', '2021-05-24'),
(16, 27, 'Provide better post-graduation support (facilitate relations between graduates and companies/organizations)', '', '2021-05-24'),
(17, 29, 'Include practical experience as part of the academic programs', '', '2021-05-24'),
(18, 29, 'Include sector specific job placements as an integral part of the degree program', '', '2021-05-24'),
(19, 31, 'Design courses that are more relevant to the needs of employers', '', '2021-05-24'),
(20, 31, 'Include sector specific job placements as an integral part of the degree program', '', '2021-05-24'),
(21, 32, 'Design courses that are more relevant to the needs of employers', '', '2021-05-24'),
(22, 32, 'other', 'Be generous', '2021-05-24'),
(23, 34, 'Include practical experience as part of the academic programs', '', '2021-05-24'),
(24, 34, 'Provide better post-graduation support (facilitate relations between graduates and companies/organizations)', '', '2021-05-24'),
(25, 33, 'Include sector specific job placements as an integral part of the degree program', '', '2021-05-24'),
(26, 5, 'Include sector specific job placements as an integral part of the degree program', '', '2021-06-16'),
(27, 8, 'Include sector specific job placements as an integral part of the degree program', '', '2021-06-21'),
(28, 67, 'Design courses that are more relevant to the needs of employers', '', '2021-06-21'),
(29, 67, 'Provide better post-graduation support (facilitate relations between graduates and companies/organizations)', '', '2021-06-21'),
(30, 3, 'Design courses that are more relevant to the needs of employers', '', '2021-06-24'),
(31, 3, 'Include practical experience as part of the academic programs', '', '2021-06-24'),
(32, 3, 'Include sector specific job placements as an integral part of the degree program', '', '2021-06-24'),
(33, 3, 'Provide better post-graduation support (facilitate relations between graduates and companies/organizations)', '', '2021-06-24'),
(34, 3, 'other', 'Other actions', '2021-06-24');

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

--
-- Dumping data for table `emp_survey_q14`
--

INSERT INTO `emp_survey_q14` (`answer_id`, `user_id`, `answer_body`, `date_response`) VALUES
(1, 24, 'Of Little Importance', '2021-05-24'),
(2, 25, 'Important', '2021-05-24'),
(3, 26, 'Moderately part Important', '2021-05-24'),
(4, 28, 'Moderately part Important', '2021-05-24'),
(5, 27, 'Moderately part Important', '2021-05-24'),
(6, 29, 'Moderately part Important', '2021-05-24'),
(7, 31, 'Of Little Importance', '2021-05-24'),
(8, 32, 'Of Little Importance', '2021-05-24'),
(9, 34, 'Important', '2021-05-24'),
(10, 33, 'Of Little Importance', '2021-05-24'),
(11, 5, 'Important', '2021-06-16'),
(12, 8, 'Important', '2021-06-21'),
(13, 67, 'Of Little Importance', '2021-06-21'),
(14, 3, 'Moderately part Important', '2021-06-24');

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

--
-- Dumping data for table `emp_survey_q15`
--

INSERT INTO `emp_survey_q15` (`answer_id`, `user_id`, `answer_body`, `answer_yes`, `date_response`) VALUES
(1, 24, 'No', '', '2021-05-24'),
(2, 25, 'Yes', 'I forgot that u existed', '2021-05-24'),
(4, 26, 'No', '', '2021-05-24'),
(5, 28, 'No', '', '2021-05-24'),
(6, 27, 'No', '', '2021-05-24'),
(7, 29, 'No', '', '2021-05-24'),
(8, 31, 'No', '', '2021-05-24'),
(9, 32, 'No', '', '2021-05-24'),
(10, 34, 'Yes', 'Aral pa more', '2021-05-24'),
(12, 33, 'No', '', '2021-05-24'),
(13, 5, 'No', '', '2021-06-16'),
(14, 8, 'No', '', '2021-06-21'),
(15, 67, 'No', '', '2021-06-21'),
(16, 3, 'Yes', 'Some comments', '2021-06-24');

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

--
-- Dumping data for table `emp_survey_q16`
--

INSERT INTO `emp_survey_q16` (`answer_id`, `user_id`, `answer_body`, `answer_yes`, `date_response`) VALUES
(1, 24, 'Yes', 'Very negative', '2021-05-24'),
(3, 25, 'No', '', '2021-05-24'),
(4, 26, 'Yes', 'Very poor', '2021-05-24'),
(6, 28, 'No', '', '2021-05-24'),
(7, 27, 'No', '', '2021-05-24'),
(8, 29, 'Yes', 'Someone new', '2021-05-24'),
(10, 31, 'No', '', '2021-05-24'),
(11, 32, 'No', '', '2021-05-24'),
(12, 34, 'No', '', '2021-05-24'),
(13, 33, 'No', '', '2021-05-24'),
(14, 5, 'No', '', '2021-06-16'),
(15, 8, 'No', '', '2021-06-21'),
(16, 67, 'No', '', '2021-06-21'),
(17, 3, 'No', '', '2021-06-24');

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

--
-- Dumping data for table `emp_survey_q17`
--

INSERT INTO `emp_survey_q17` (`answer_id`, `user_id`, `answer_body`, `answer_yes`, `date_response`) VALUES
(1, 24, 'Yes', 'Very strong', '2021-05-24'),
(3, 25, 'No', '', '2021-05-24'),
(4, 26, 'Yes', 'Very good', '2021-05-24'),
(6, 28, 'No', '', '2021-05-24'),
(7, 27, 'No', '', '2021-05-24'),
(8, 29, 'Yes', 'Very peaceful', '2021-05-24'),
(10, 31, 'No', '', '2021-05-24'),
(11, 32, 'No', '', '2021-05-24'),
(12, 34, 'Yes', 'persevering', '2021-05-24'),
(14, 33, 'No', '', '2021-05-24'),
(15, 5, 'No', '', '2021-06-16'),
(16, 8, 'No', '', '2021-06-21'),
(17, 67, 'No', '', '2021-06-21'),
(18, 3, 'Yes', 'resilience', '2021-06-24');

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

--
-- Dumping data for table `password_request`
--

INSERT INTO `password_request` (`id`, `email`, `user_id`, `date_request`) VALUES
(14, 'test2@mail.com', 83, '2021-06-23 01:24:55'),
(16, 'test@mail.com', 85, '2021-06-24 16:03:12'),
(17, 'test1@mail.com', 68, '2021-06-24 16:03:41');

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
(2, 'jane@gmail.com', '5e6a6d87aeb4c389a1361cd463856eaf6466cefd82bae5408a94e05d337f319f49e38ccda424e0c1b7e1e376ea6a7e8becc3', '$2y$10$HK2Ellp9/Mw89bckEg9PbeJFwComfd5.4BQjcHAkqRs3Aei.lBbAi', '12345', 1, '2021-05-20 09:51:01', '2021-06-24 16:38:45'),
(3, 'john@gmail.com', '8478bfb97840a79d6e2ed2b61d8977487a72d685597ed4fd8054cfbbbd833940abf39322c47692ea321d2f85cbd4a3ba5163', '$2y$10$lQOQtTfN4Avsbuy8ROlUOOY.qSr2rz49GSYF..QNCCd2rsJ7bZlLG', '12345', 2, '2021-05-20 09:51:01', '2021-06-24 16:54:55'),
(4, 'admin@gmail.com', 'bbf073a951128bc7beff931d97845715e08ff3744445f6cd8324d2565f4c32f65c31262cdc54e5abe022e499f34a2248504b', '$2y$10$e45H4/zzpxHEKiEdqPK02eknJKZyXTVGScKHRATLBF5.W8km4vUMy', 'admin', 0, '2021-05-20 09:51:01', '2021-06-24 16:05:16'),
(5, 'juan@gmail.com', '7c61c8b92cfeb880d8d99b58533e324c07cc461d3e573b17369f2a377ef1f2dbb47629ea4b1511290a91319a6d5f7944cb78', '$2y$10$MiSINz5TurNhGjk0sIbzKu9eaOepd9WkQ0XD/uw3j9hryuTtZYuke', '12345', 3, '2021-05-20 09:51:01', '2021-06-21 23:44:31'),
(6, 'jen@gmail.com', 'e81e1502f327062b08945aa5be675c4488af8a411baedd922657ef346d1e73dee7aa19618a4572c0e898107677eeb64f72a8', '$2y$10$qTvg/EBRTtcpi.aHX5tFyegP/C3BO.b.y3HAvt.herwmej3URnK.q', 'ZDxyt3kL', 2, '2021-05-21 06:43:37', '2021-05-21 06:50:57'),
(7, 'admin2@mail.com', '26c1731abfdaa3d0c9efe3a99af10d1de301119324548f3707149281a3eb21ca1517321df1945b15de4d1e8eddf454a5875d', '$2y$10$nCAYW6LBthx9kBH8ropAreufnByt/O6AC02iMDAUHCqCaByN2WG.G', 'HE1nKkNg', 0, '2021-05-21 06:44:13', '2021-05-21 06:44:13'),
(8, 'jiji@mail.com', 'acb0d136743deda5472f6d450f2576bd4827af42b55b86c7a74326ca1bc1e1ef413354ff3f91914faeea31c3c49be91d24b5', '$2y$10$/obFaBBGMHAq.mv2xSgMUuSn23a2rFhfAKX3bxrfU45VchTzTlX2a', '15VkWCFg', 3, '2021-05-21 06:44:46', '2021-06-21 22:51:06'),
(9, 'jj@mail.com', '7e514e8836b1af412dfbbc5723b09f9d9fada2124e9790f369006eeb8459c5b0776cd8511f00052363889f56690c9bb7abc5', '$2y$10$yo8YoqxoQje3FAYYAFX8hOEiyynwqaPf0iTvo.AfrMuum7aZDFsAK', '72bD8ekW', 1, '2021-05-21 06:45:03', '2021-05-21 06:45:03'),
(10, 'jon@mail.com', 'a4a36353b3de1d0c67830c919c322eb3c5ac8b3314c7a5c28bf78b2da17ca83373dfdc81e2c6ace045a6554ef8b6f321658a', '$2y$10$XPMpNskyE4DW86y/fIzAMO5ZjpRjvWI30JWFRrLTYPwSbmcJN5Cum', 'xVgyLp3w', 2, '2021-05-21 06:45:18', '2021-05-21 09:10:43'),
(12, 'alumni_uno@gmail.com', '8d4a2fd0ccc964b32712bebc38abfe2fb2ca539720799964b9713043bf65acf971abb7a0065a68e1a7387e8cfc906f9eae36', '$2y$10$C/p1SEuPT/uw/6tro2xlLOBle/SGsFj5ZOggkJrKGh3.iw2AbE162', 'alumni1', 1, '2021-05-23 21:33:51', '2021-06-16 22:29:27'),
(13, 'alumni_dos@gmail.com', 'caf0047c10fc6ef99d9ad6be4c752219b69080eb78fd04f1adb3d67962cf41ad8315d13310aa0627aa489fe6b1e2de33bc28', '$2y$10$y2bs0mR.OjrbiLAMYNSc0ePTuo0mrTWdJc5nx2ZmeQRL8LSS.RLNa', 'alumni2', 1, '2021-05-23 21:34:55', '2021-06-16 22:32:48'),
(14, 'alumni_tres@gmail.com', '3045a6ce643cea3dbe55e4c7427de53ec9a7393d2ed75b1c9ff2f6b6aac79c9cb1ca74d862f9df14d50be2476f539fe922a3', '$2y$10$ru6YwKWZzjaJ0fWoMIUB.OBjLYePTL94eIlj/Bx/jo4F3LLX/Nanm', 'alumni3', 1, '2021-05-23 21:35:17', '2021-06-16 22:35:47'),
(15, 'alumni_cuatro@gmail.com', '929124360a3db51dcc83ae4a5849fd1e6c2012fb5aa6f04b1facaeac75332b1682cde7a29ec6596fc528ffc8ecc894dd84ee', '$2y$10$hEEN8gWPSjmGmEHd0nW75.ko7qJOdE0cHD/ZnLyQBngLodlPE7pDm', 'alumni4', 1, '2021-05-23 21:35:39', '2021-06-16 22:40:10'),
(16, 'alumni_cinco@gmail.com', '58cdc262d348c8f295ad5612ad60b8438d2b53df60b37e03e7d01b5f1bf94c81516ae5c2fa10aec7f33e48ea567cde4684c5', '$2y$10$mYyhrJa4iZ.MDDRA/bu70eDpRIUOm1xzLta1HYfhFIO4CuKTEW81m', 'alumni5', 1, '2021-05-23 21:36:03', '2021-06-16 22:47:19'),
(17, 'alumni_seis@gmail.com', '8ad66622d7555db7361c364dc553abbabd7914dff7e929782a0e172d23f27ced737c741e6e463fe147161fb8777e8840cb09', '$2y$10$zDofRdoe/binIk8nGTUsQ.gaKb3L3p/ps9WHGJIIVaU0aYswYI6u6', 'alumni6', 1, '2021-05-23 21:36:20', '2021-06-16 22:48:40'),
(18, 'alumni_siete@gmail.com', 'c18c1e1c100d836156e36423172c0efb5b9b3a156d9b7eea72b4c87329cedff9d25e8425067285182858c5992caacfe09349', '$2y$10$tUwflgCzuxLdeJ42XxHwcuZn8bu7HFLz2VobDz8RwhLkkHo8/LIc6', 'alumni7', 1, '2021-05-23 21:36:46', '2021-06-16 22:57:02'),
(19, 'alumni_ocho@gmail.com', 'a2ca6b09a219e57c2ec09bcd45067df216264cd85eec9ee8e4fa3094af33db3d022cb452e81b65e515931a8990095718f0a7', '$2y$10$SWFDsk3zVD417SrEYUGlzuA8pjI2XKaUu8BfYDStqhzuaw9BLlBlm', 'alumni8', 1, '2021-05-23 21:37:37', '2021-06-16 22:54:09'),
(20, 'alumni_nueve@gmail.com', 'd5d2626f1db74a2cd200bb8deed29268d7f7de61404eeca9283f3b11631ab578ecc77affdf790959bae04eb91ac29742fd72', '$2y$10$ovb1HldVUUFBsSDzxBRiBOpGXzsyH3G2ZQvrNvSz0qC8G/sIE0HZq', 'alumni9', 1, '2021-05-23 21:38:05', '2021-06-16 22:59:26'),
(21, 'alumni_diez@gmail.com', '49904e95686861d4462b7acf2fa104d8db8a12217b69f095b4d387d4a7bf6fc48ada97d45de3dbb06eb06ae9d18a65d5edd1', '$2y$10$/CXlyrCics8.1D45t3o6D.IqS8oFGa9IbYfesQyMt8ZtzyhaHAWcC', 'alumni10', 1, '2021-05-23 21:38:26', '2021-06-16 23:03:37'),
(24, 'employer_uno@gmail.com', 'ccf7c5c792535fc3f932b76aad54baf9103a9ef952bb4b67b89f9c93fdca504bc324fb5c899c32aff9ef4f1262c7598b6e5a', '$2y$10$.nyv1dRDglYBuZo7LrObYe/3E/n0YMPMNWEYS7hB5.2NvNrLhEdhW', 'emp1', 2, '2021-05-23 21:40:12', '2021-05-24 13:18:38'),
(25, 'employer_dos@gmail.com', 'bc443931cf2dce4706ae4b22fbcc93ee95639ad5625366d2dd29e228d41869db171c75f29cf8347b0944a582b0b8f9992dd1', '$2y$10$RJkBUzsFlPQv/uDuDj24zu0wHGWJHLjEvZSoAQGdX78lXSI6MF7HO', 'emp2', 2, '2021-05-23 21:40:39', '2021-05-24 13:59:55'),
(26, 'employer_tres@gmail.com', '242b46ccc38769507fbd36ef52b8297d5344ecd93a7b509bc1bb4eaad977e9d1414bb26315cb4da1d8838cc552b80fb38e61', '$2y$10$JaPr5fe0ZRTsQStJVvOMV.bhqst9.Vx/J9vm49.XjHXkEKb0ZkCOG', 'emp3', 2, '2021-05-23 21:40:56', '2021-05-24 14:02:38'),
(27, 'employer_cuatro@gmail.com', '2067593993e9a1d56b30f34f97fe11b1b2535f44bab2884032345fc440cfaf6f10c955e0d5f6b5d73c723829efa1932dc340', '$2y$10$VODjPDxkYKdNEQhe03fRtOphqAgE3E2gbrxOZY5rdJ69S5psZgSRy', 'emp4', 2, '2021-05-23 21:41:13', '2021-05-24 14:09:23'),
(28, 'employer_cinco@gmail.com', '1388827c75ecdc6eccec45f16d559b55bd41b059a3511a1c1021134a7754469ec669c5f3282bedb60b338a0092fa0ec12687', '$2y$10$kCwtQI0/OPEsmZat3WI4re9SIaqrgvJ1miZBRf8cCFYbg07/L1E5W', 'emp5', 2, '2021-05-23 21:42:56', '2021-05-24 14:10:42'),
(29, 'employer_seis@gmail.com', '7fe276fc33223b4660cb3a185780db9750f981afa13f52c849fbdca27e6cf2c7b6819ab8b85a399831bd43651c29c4f427b7', '$2y$10$.ICdv7u11bYRkebXGzrhEep5B/4NKVKHOknanHIqqlevql/tWL6y2', 'emp6', 2, '2021-05-23 21:43:22', '2021-05-24 14:13:26'),
(31, 'employer_siete@gmail.com', 'd4c2065311c6c9a46b68f0862f999b0b00bee75fb52b9cc1351a53929067187fc1e40b9e976d86ab294bd1b2936da537ebac', '$2y$10$34d2YeXfdOpaAJOvLqwX/OfksUl21nILQFDp2gr4xx41JUB9KbCZe', 'emp7', 2, '2021-05-23 21:44:26', '2021-05-25 09:34:18'),
(32, 'employer_ocho@gmail.com', 'e13be7b69f4d2de928b00ce707f639758fac95b6dfe59491d0823317ef91ef933449f29953259d866fdf52eebaee4460e7a6', '$2y$10$zK563wUsbOiVoKU7rkpMs.F/GN1eB6GJuTn90ftGa8W0bkmSLxNgu', 'emp8', 2, '2021-05-23 21:44:49', '2021-05-24 14:18:01'),
(33, 'employer_nueve@gmail.com', 'da5646599de973b0868c4a7c4e83a38aa57d0c5959d7d787707e9e636178316fe66c1ab75e430d6755ea72da2772bd97c906', '$2y$10$7MS3eTmw9liv/2UYBORiMeLWR35RzaQT2/GszYyThUUb8319qlkS2', 'emp9', 2, '2021-05-23 21:45:14', '2021-05-24 14:19:48'),
(34, 'employer_diez@gmail.com', 'a78349451bf5637c2a3c5da4a5182c18ce4b0a80c7aec670ba4cfee4354dc35ff328680659db718e106413a558eb254703e9', '$2y$10$h1fuD0NPsOr2gxXdl6tVU.wE1mxuc1zwu6Eaa4kK0X9cv5gZVcvk6', 'emp10', 2, '2021-05-23 21:45:49', '2021-05-24 14:21:14'),
(47, 'attachment@gmail.com', 'c252f891613630e546dbc5165ac643a0a39a50ca84c2a38283be207cd31e97422d12917736ebaac724d9c7d24ca28276806c', '$2y$10$tpu335LW1Vi1LYuORsVQL.gC6fncrBZIH3WclE8ew.23kNzR5s5Ta', 'attached', 1, '2021-06-15 09:14:01', '2021-06-15 09:27:03'),
(52, 'chuchu@gmail.com', '8242907a6de7c92d5cadee2301f1e0d01854ad72af643b4711da530e65093740ce2bcd3118606e6eaf7e1105c2093c021371', '$2y$10$F7TQBH7XqM/vRqqaacCFHuDkIs55Aas3MG/e85ev0kISXQ/4GC.3W', 'chuchuch', 1, '2021-06-13 17:24:09', '2021-06-15 20:43:56'),
(53, 'alumni_onze@gmail.com', '4266b728affac10c9271e812875daff6bba18ffdbfa6b6fdfc63bd93a12b87a550254ade3fa5cc50d2269b27696489ddd53c', '$2y$10$Eqlib.yPWfbbgyIpCpoEiuOAjNR6NTdAYuGMw3v8g2uycLDr1bvDi', 'alumni11', 1, '2021-06-16 22:09:36', '2021-06-16 22:09:36'),
(54, 'alumni_doze@gmail.com', '0361ece98550fc4e79618283aa1b81371448ec8c2f24abb77cfa73c0961fd34c85ffe0841b2fc8d049fa511da92987254832', '$2y$10$Zb95KVyQHDcU77IUGfhIeO0iFBukUOeXHkCJfxyTsptQ.TDzb2YJy', 'alumni12', 1, '2021-06-16 22:09:55', '2021-06-16 22:09:55'),
(55, 'alumni_trese@gmail.com', '3db08f70180fed79d49b9a35a800b1311ea59068b56e8c20b79373e363082f5aec9ed78efbaf105288fe84a829cd9e9a157f', '$2y$10$92vNOIrA2tndfupSKC7o/.MZdbkI2pKtFtxE1F3LSxtcByENjLtj6', 'alumni13', 1, '2021-06-16 22:10:17', '2021-06-16 22:10:17'),
(56, 'alumni_katorse@gmail.com', '090889eea5ee151cfa1ef032e3b48021d94cabe7880b067c48b8959624bf7b50bb9877396d19df9fe0085be490ea1aa528f1', '$2y$10$hP08mWT..0qUYsxbBAdJiudgMwdtf/Ow1n5u7q75WfeOOaFc3.vcG', 'alumni14', 1, '2021-06-16 22:10:35', '2021-06-16 22:10:35'),
(57, 'alumni_kinse@gmail.com', 'b53c0d36b93230d3ce09a070eb66f929fe4f01cf8d822bfb2bb797cd2e9cf919bbd956f43b5d7619d2594b50c0f4214bdce0', '$2y$10$y1JQ.krm5HtgBiLkW.ORlugufYAB7ZZJtG65/hP4uNfyRqYAsd1wm', 'alumni15', 1, '2021-06-16 22:10:55', '2021-06-16 22:10:55'),
(58, 'employer_onze@gmail.com', 'eae7980043a564722c144b63588e380b13d09e369704adb05fc431366602ca48ff6454b8dbce2acdcc1d864f7948257854d7', '$2y$10$1wZSkTYP5eMMgDhD6D8IEus2LTqui5KFvQpQ1R9Ko6Uqej9nFGb.2', 'employ11', 2, '2021-06-16 22:11:23', '2021-06-16 22:11:23'),
(59, 'employer_doze@gmail.com', '0959d26c5113c4aaf90633927ab455adb1f9a441298276f09af2f26201ef825a685fbecc7368a72d74e58d33cef6ff45e4e6', '$2y$10$efm4jUJJ8Qmja1wdjRwup.5C5AEcM7R9pjAvVsOJyGeOCFj0/PNLS', 'employ12', 2, '2021-06-16 22:11:39', '2021-06-16 22:11:39'),
(60, 'employer_trese@gmail.com', '65118f2e83f3388600c3441de73503a0797c88204a9ab569f35d584ed9950681cb897bf495b88dd2349eff52c40eda83482c', '$2y$10$Exv1WSOva6ljhsPD8EmRe.NxAkvFePRqkiiukEyKyFpx.QxG/JO5K', 'employ13', 2, '2021-06-16 22:11:56', '2021-06-16 22:11:56'),
(61, 'employer_katorse@gmail.com', 'c83325dd36accfe35b0e53383fcc1359fc1ff4660de593c83a84a38d90de82511cbd7b3fef1fc9ca4b16cfa2740ecfd3221d', '$2y$10$E4PE8TpUYB3Oy/BF2r7ezeu.GBjd3hb.91cn6MtZZUPObPgxpPGcC', 'employ14', 2, '2021-06-16 22:12:09', '2021-06-16 22:12:09'),
(62, 'employer_kinse@gmail.com', '6bf5476cdecd505ea8bbad3f4827d7a612276ca4ca62c61346a259491fd3867281a99f4541fd0ad9d29dcb49c9905edb2436', '$2y$10$NYInDBn.FFBS1zBZGE2AK.IQuNRF4EiMQqEtb8jyJg8iFvXEQy6v2', 'employ15', 2, '2021-06-16 22:12:33', '2021-06-16 22:12:33'),
(68, 'test1@mail.com', '054053a8b132538a53c7b1e9c560b041c8eca9f7798abe043c0d7577c68701e9f0463a74cfeb31c734caa44e3c2f4bf34e50', '$2y$10$24CAMQ21C2H3rdp/TqK2kuQ1LheeO6yAtnCxezNIuNHnPxpaXwapS', '11111111', 3, '2021-06-21 23:32:37', '2021-06-21 23:32:52'),
(85, 'test@mail.com', '42e91391a827afcdb5f135db056ab8688518236ed462362b1b9f057683f7481164708ba84d2883b0705460a0c2c23cdf8350', '$2y$10$d5xTDxcHkEj5NPtBo76TPeORBDkHMbApOoG3hbB0O2uD/zJ73XVda', '3vAFMhHs', 0, '2021-06-23 01:52:47', '2021-06-23 01:52:47'),
(86, 'test2@mail.com', '9d76c8760be34e1e33648c08534d1db7ce72bea240054267b54077253bc521a66ee28e2e10f92af27148382b284421b3ffae', '$2y$10$r9DDYa/b4mnob7qR0y.s.OEjM4.56QYZqZLBrasn0upStmpLuoAP6', '7jMB64oY', 3, '2021-06-23 01:53:03', '2021-06-23 01:53:03'),
(95, 'alpha@mail.com', 'c9014eaf7512da5b2f032da46dced750e93490a17ae6bd3cb4b466faffc5be9b90eda2c8971dad96f71d10375ed063e677a8', '$2y$10$ty.LMdVs6LkPxiRUzMZcbeUqP5rZ1osfpOkiOBZwefpp4TClL2f/m', 's7QwjGe6', 2, '2021-06-24 16:02:03', '2021-06-24 16:02:03'),
(96, 'lcdungo@up.edu.ph', 'eff27b02da9216821a9d1ab8d6fef1414f6f3e81c5e668ef0378e51300719f6a0d15bf2dd7046ba1f1072c55c4d18c3d880e', '$2y$10$d1xjxaIdLdbc6jQQ0tkUU.hM.bEdFkxAktIrAXgtk8Yoxn0CgOK7G', 'nbcXKPqx', 1, '2021-06-24 16:04:51', '2021-06-24 16:04:51');

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
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `alum_survey_q2`
--
ALTER TABLE `alum_survey_q2`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `alum_survey_q3`
--
ALTER TABLE `alum_survey_q3`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `alum_survey_q4`
--
ALTER TABLE `alum_survey_q4`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `alum_survey_q5`
--
ALTER TABLE `alum_survey_q5`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `alum_survey_q6`
--
ALTER TABLE `alum_survey_q6`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `alum_survey_q7`
--
ALTER TABLE `alum_survey_q7`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `alum_survey_q8`
--
ALTER TABLE `alum_survey_q8`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `alum_survey_q9`
--
ALTER TABLE `alum_survey_q9`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `alum_survey_q10`
--
ALTER TABLE `alum_survey_q10`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `alum_survey_q11`
--
ALTER TABLE `alum_survey_q11`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `alum_survey_q12`
--
ALTER TABLE `alum_survey_q12`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `alum_survey_q13`
--
ALTER TABLE `alum_survey_q13`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `alum_survey_q14`
--
ALTER TABLE `alum_survey_q14`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `alum_survey_q15`
--
ALTER TABLE `alum_survey_q15`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `alum_survey_q16`
--
ALTER TABLE `alum_survey_q16`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `alum_survey_q17`
--
ALTER TABLE `alum_survey_q17`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `alum_survey_q18`
--
ALTER TABLE `alum_survey_q18`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `alum_survey_q19`
--
ALTER TABLE `alum_survey_q19`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contactemp_ques`
--
ALTER TABLE `contactemp_ques`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `emp_survey_q1`
--
ALTER TABLE `emp_survey_q1`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `emp_survey_q2`
--
ALTER TABLE `emp_survey_q2`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `emp_survey_q2_1`
--
ALTER TABLE `emp_survey_q2_1`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `emp_survey_q3`
--
ALTER TABLE `emp_survey_q3`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `emp_survey_q4`
--
ALTER TABLE `emp_survey_q4`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `emp_survey_q5`
--
ALTER TABLE `emp_survey_q5`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `emp_survey_q6`
--
ALTER TABLE `emp_survey_q6`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `emp_survey_q7`
--
ALTER TABLE `emp_survey_q7`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT for table `emp_survey_q8`
--
ALTER TABLE `emp_survey_q8`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT for table `emp_survey_q9`
--
ALTER TABLE `emp_survey_q9`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `emp_survey_q10`
--
ALTER TABLE `emp_survey_q10`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `emp_survey_q11`
--
ALTER TABLE `emp_survey_q11`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `emp_survey_q12`
--
ALTER TABLE `emp_survey_q12`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `emp_survey_q13`
--
ALTER TABLE `emp_survey_q13`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `emp_survey_q14`
--
ALTER TABLE `emp_survey_q14`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `emp_survey_q15`
--
ALTER TABLE `emp_survey_q15`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `emp_survey_q16`
--
ALTER TABLE `emp_survey_q16`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `emp_survey_q17`
--
ALTER TABLE `emp_survey_q17`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `password_request`
--
ALTER TABLE `password_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
