-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2021 at 09:53 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `Activity_id` int(30) NOT NULL,
  `Activity` varchar(100) NOT NULL,
  `Time` time(5) NOT NULL,
  `Done by` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`Activity_id`, `Activity`, `Time`, `Done by`) VALUES
(1, 'Deployed workcation (2d89f0c8 in master) to production', '01:00:00.00000', 22),
(2, 'Deployed KiteTail (249df660 in master) to staging', '03:00:00.00000', 0),
(3, 'Deployed  Workcation (11464223 in master) to staging', '12:00:00.00000', 0),
(4, 'Deployed  Easywire (dad28e95 in master) to production', '00:00:02.00000', 0),
(5, 'Deployed  Easywire (624bc94c in master) to production', '00:00:05.00000', 0),
(6, 'Deployed  Workcation (e111f80 in master) to production', '00:00:01.00000', 0),
(7, 'Deployed  Resumaid (5e136005 in master) to staging', '00:00:01.00000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `Project_id` int(30) NOT NULL,
  `Project` varchar(30) NOT NULL,
  `Deploy time` time(5) NOT NULL,
  `State` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`Project_id`, `Project`, `Deploy time`, `State`) VALUES
(8, 'Easywire', '06:00:00.00000', 'United States'),
(21, 'Workcation', '03:00:00.00000', 'United States'),
(22, 'KiteTail', '01:00:00.00000', 'United states'),
(23, 'Workflow', '96:00:00.00000', 'United States'),
(24, 'Talkslide', '03:00:00.00000', 'United states'),
(25, 'Personal Website', '06:00:00.00000', 'United States'),
(26, 'Digest', '03:00:00.00000', 'United States');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(10) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Passord` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `Username`, `Email`, `Passord`) VALUES
(1, 'Debbielewis', 'debbielewis@gmail.com', 'debbie.lewis'),
(1, 'Debbielewis', 'debbielewis@gmail.com', 'debbie.lewis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`Activity_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`Project_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
