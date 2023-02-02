-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 03:44 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findjobdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant_table`
--

CREATE TABLE `applicant_table` (
  `post_id` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_age` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_contact` varchar(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `user_resume` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicant_table`
--

INSERT INTO `applicant_table` (`post_id`, `user_id`, `user_name`, `user_age`, `user_email`, `user_contact`, `status`, `user_resume`) VALUES
('1', '3', 'applicant2', '25', 'applicant2@email.com', '1234567890', 'denied', 'PERFORMANCE-TASK-1.pdf'),
('2', '1', 'applicant1', '24', 'applicant1@email.com', '0987654312', 'pending', 'Final-Period-Laboratory-Exercises-1.docx'),
('1', '6', 'applicant4', '26', 'applicant4@email.com', '', 'pending', 'jeremy.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `job_table`
--

CREATE TABLE `job_table` (
  `post_id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `position` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_table`
--

INSERT INTO `job_table` (`post_id`, `user_id`, `company_name`, `description`, `position`, `email`, `address`) VALUES
(1, 2, 'corporate1', 'lf Net Work Engineer\nlf Net Work Engineer\nlf Net Work Engineer\nlf Net Work Engineer\nlf Net Work Engineer\nlf Net Work Engineer\nlf Net Work Engineer\nlf Net Work Engineer\nlf Net Work Engineer\nlf Net Work Engineer', 'Net Work Engineer', 'corporate1@email.com', 'Manila'),
(2, 2, 'corporate1', 'lf software engineer\nlf software engineer\nlf software engineer\nlf software engineer\nlf software engineer\nlf software engineer\nlf software engineer\nlf software engineer\nlf software engineer\nlf software engineer', 'software engineer', 'corporate1@email.com', 'Manila'),
(3, 5, 'corporate2', 'lf web developer\nlf web developer\nlf web developer\nlf web developer\nlf web developer\nlf web developer\nlf web developer\nlf web developer\nlf web developer\nlf web developer\nlf web developer\nlf web developer\nlf web developer', 'web developer', 'corporate2@email.com', 'Quezon');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `user_id` int(11) NOT NULL,
  `u_user` varchar(50) NOT NULL,
  `u_pass` varchar(50) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_age` varchar(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `contact` varchar(11) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `profile` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`user_id`, `u_user`, `u_pass`, `u_name`, `u_age`, `email`, `address`, `contact`, `usertype`, `profile`) VALUES
(1, 'applicant1', '4ef8604da22a9ae460300592d9b4b820', 'applicant1', '24', 'applicant1@email.com', '', '', 'Applicant', NULL),
(2, 'corporate1', 'e9013cbf1e459122a334df0cf160e178', 'corporate1', '', 'corporate1@email.com', 'Manila City', '', 'Corporate', NULL),
(3, 'applicant2', '80228fe3343c9613474abdc5d549416d', 'applicant2', '25', 'applicant2@email.com', '', '', 'Applicant', NULL),
(4, 'applicant3', 'de7e796cc69e13b4009a735f3e1421b6', 'applicant3', '26', 'applicant3@email.com', '', '', 'Applicant', NULL),
(5, 'corporate2', 'd77b5a9c295ebf9c4a66381771e136b2', 'corporate2', '', 'corporate2@email.com', 'Quezon City', '', 'Corporate', NULL),
(6, 'applicant4', 'b523dd6427024d32d75d708670073107', 'applicant4', '26', 'applicant4@email.com', '', '12345678901', 'Applicant', '310983539_665584861598272_9074979309605368850_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_table`
--
ALTER TABLE `job_table`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_table`
--
ALTER TABLE `job_table`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
