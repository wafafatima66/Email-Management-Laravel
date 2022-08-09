-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2022 at 08:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xactbid7_pocket_office`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_emails`
--

CREATE TABLE `all_emails` (
  `id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject` text CHARACTER SET latin1 NOT NULL,
  `email_body` longtext CHARACTER SET latin1 NOT NULL,
  `from_email` varchar(200) DEFAULT NULL,
  `total_attchments` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `folder_type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `all_emails`
--

INSERT INTO `all_emails` (`id`, `account_id`, `user_id`, `subject`, `email_body`, `from_email`, `total_attchments`, `folder_type`, `created_at`, `updated_at`, `timestamp`) VALUES
(24, 1, 18726, 'New jobs added for Remote laravel developer Jobs in United States on WhatJobs', 'pp', 'noreply@whatjobs.com', NULL, 1, '2022-03-27 20:54:04', '2022-03-27 20:54:04', '2022-03-31 06:35:41'),
(25, 1, 18727, 'Gaji Asif, we\'ve found new positions that match your search', 'pp', 'alerts@ziprecruiter.com', NULL, 0, '2022-03-27 20:54:04', '2022-03-27 20:54:04', '2022-03-28 02:54:04'),
(26, 1, 18728, 'Software Engineer (AI and Analytics) + 19 new jobs - Job Alert from JobStreet.com', 'pp', 'no-reply@recs.jobstreet.com', NULL, 0, '2022-03-27 20:54:04', '2022-03-27 20:54:04', '2022-03-28 02:54:04'),
(27, 1, 18729, 'Post Pandemic Opportunity For Engineers like you GAJI.', 'pp', 'support@immigrationsaustralia.com.au', NULL, 0, '2022-03-27 20:54:04', '2022-03-27 20:54:04', '2022-03-28 02:54:04'),
(28, 1, 18730, 'We\'ve identified some important projects matching your skills', 'pp', 'noreply@freelancer.com', NULL, 0, '2022-03-27 20:54:04', '2022-03-27 20:54:04', '2022-03-28 02:54:04'),
(29, 1, 18731, 'GAJI MD, these HTML, Software Architecture, and Website Design projects and contests might interest you', 'pp', 'noreply@notifications.freelancer.com', NULL, 0, '2022-03-27 20:54:04', '2022-03-27 20:54:04', '2022-03-28 02:54:04'),
(30, 1, 18732, 'New jobs added for Remote laravel developer Jobs in United States on WhatJobs', 'pp', 'noreply@whatjobs.com', NULL, 0, '2022-03-27 20:54:04', '2022-03-27 20:54:04', '2022-03-28 02:54:04'),
(31, 1, 18733, 'pandamart weekend binge deals begin here!', 'pp', 'contact@info.foodpanda.com.bd', NULL, 0, '2022-03-27 20:54:04', '2022-03-27 20:54:04', '2022-03-28 02:54:04'),
(32, 1, 18726, 'New jobs added for Remote laravel developer Jobs in United States on WhatJobs', 'pp', 'noreply@whatjobs.com', NULL, 0, '2022-03-27 20:56:39', '2022-03-27 20:56:39', '2022-03-28 02:56:39'),
(33, 1, 18727, 'Gaji Asif, we\'ve found new positions that match your search', 'pp', 'alerts@ziprecruiter.com', NULL, 0, '2022-03-27 20:56:39', '2022-03-27 20:56:39', '2022-03-28 02:56:39'),
(34, 1, 18728, 'Software Engineer (AI and Analytics) + 19 new jobs - Job Alert from JobStreet.com', 'pp', 'no-reply@recs.jobstreet.com', NULL, 0, '2022-03-27 20:56:39', '2022-03-27 20:56:39', '2022-03-28 02:56:39'),
(35, 1, 18729, 'Post Pandemic Opportunity For Engineers like you GAJI.', 'pp', 'support@immigrationsaustralia.com.au', NULL, 0, '2022-03-27 20:56:39', '2022-03-27 20:56:39', '2022-03-28 02:56:39'),
(36, 1, 18730, 'We\'ve identified some important projects matching your skills', 'pp', 'noreply@freelancer.com', NULL, 0, '2022-03-27 20:56:39', '2022-03-27 20:56:39', '2022-03-28 02:56:39'),
(37, 1, 18731, 'GAJI MD, these HTML, Software Architecture, and Website Design projects and contests might interest you', 'pp', 'noreply@notifications.freelancer.com', NULL, 0, '2022-03-27 20:56:39', '2022-03-27 20:56:39', '2022-03-28 02:56:39'),
(38, 1, 18732, 'New jobs added for Remote laravel developer Jobs in United States on WhatJobs', 'pp', 'noreply@whatjobs.com', NULL, 0, '2022-03-27 20:56:39', '2022-03-27 20:56:39', '2022-03-28 02:56:39'),
(39, 1, 18733, 'pandamart weekend binge deals begin here!', 'pp', 'contact@info.foodpanda.com.bd', NULL, 0, '2022-03-27 20:56:39', '2022-03-27 20:56:39', '2022-03-28 02:56:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_emails`
--
ALTER TABLE `all_emails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_emails`
--
ALTER TABLE `all_emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
