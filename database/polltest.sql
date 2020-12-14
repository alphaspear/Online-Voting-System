-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2020 at 04:07 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `polltest`
--

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `lan_id` int(100) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `options` varchar(255) NOT NULL,
  `votecount` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`lan_id`, `fullname`, `options`, `votecount`) VALUES
(1, 'one', 'java is a programming language designed by James Gosling', 1),
(2, 'two', 'python is a programming language created by Guido van Rossum', 0),
(3, 'three', 'c++ is a programming language designed by  Bjarne Stroustrup as an extension of C', 0),
(4, 'four', 'php is a programming language designed by Rasmus Lerdorf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loginusers`
--

CREATE TABLE `loginusers` (
  `id` int(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rank` varchar(80) NOT NULL DEFAULT 'voter',
  `status` varchar(10) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginusers`
--

INSERT INTO `loginusers` (`id`, `username`, `password`, `rank`, `status`) VALUES
(50, 'iabhilashjoshi', '4bbde07660e5eff90873642cfae9a8dd', 'voter', 'ACTIVE'),
(51, 'alphaspear', '3dbe00a167653a1aaee01d93e77e730e', 'administrator', 'ACTIVE'),
(52, 'Mayank27', '90179e4438aa55963ea28858f70e6cf9', 'administrator', 'ACTIVE'),
(53, 'abcd', '90179e4438aa55963ea28858f70e6cf9', 'voter', 'ACTIVE'),
(54, 'aaaa', '3dbe00a167653a1aaee01d93e77e730e', 'voter', 'ACTIVE'),
(55, 'Mayank7', 'c6d58d9dd5a0240a9dcde1fd8ce19d27', 'administrator', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question` varchar(500) NOT NULL,
  `option1` varchar(500) NOT NULL,
  `option2` varchar(500) NOT NULL,
  `option3` varchar(500) NOT NULL,
  `option4` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question`, `option1`, `option2`, `option3`, `option4`) VALUES
('whats my name?', 'abhilash', 'joshi', 'alpha', 'spear'),
('sdfhjasfdsfsad', 'sadfasdfsad', 'sdfsdfdsf', 'dfasdfadsf', 'asdfsdafsad'),
('fvzvbzdhfgvbjhdfbvhdfhvdfhdh vhdg', ' dfhvgsdfhgsdhfvhsdfhdfhfdshvg', 'hvhsdfvhsdhsdhvsdhvshd', 'hfdgvhsdgvhdghdghfdghfv', 'hfvdhzgvhdghfdgfhddfbdhfbhf'),
('who is the best', 'modi', 'rahul', 'ghanshu', 'me'),
('who is the best', 'modi', 'rahul', 'ghanshu', 'me'),
('asasds', 'sdsds', 'sadfg', 'fdgdfgre', 'fdgdfgf'),
('o lalal', 'sdjfs', 'LLLKLKL', 'KKJHHJMHJJHM', 'YRTYRTYRTYRT');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'NOTVOTED',
  `voted` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`firstname`, `lastname`, `username`, `status`, `voted`) VALUES
('Abhilash', 'Joshi', 'iabhilashjoshi', 'NOTVOTED', 'one'),
('alpha', 'spear', 'alphaspear', 'NOTVOTED', 'C++'),
('Mayank', 'Bhatt', 'Mayank27', 'NOTVOTED', 'JAVA'),
('abc', 'def', 'abcd', 'VOTED', 'one'),
('sdsd', 'sdsd', 'aaaa', 'NOTVOTED', NULL),
('Mayank', 'Bhatt', 'Mayank7', 'NOTVOTED', 'one');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `opt1` int(5) NOT NULL,
  `opt2` int(5) NOT NULL,
  `opt3` int(5) NOT NULL,
  `op4` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vquestion`
--

CREATE TABLE `vquestion` (
  `id` int(1) NOT NULL,
  `question` varchar(200) NOT NULL,
  `option1` varchar(200) NOT NULL,
  `option2` varchar(200) NOT NULL,
  `option3` varchar(200) NOT NULL,
  `option4` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vquestion`
--

INSERT INTO `vquestion` (`id`, `question`, `option1`, `option2`, `option3`, `option4`) VALUES
(1, 'What is your name?', 'Mayank', 'Abhilash', 'Paras', 'Bablu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`lan_id`);

--
-- Indexes for table `loginusers`
--
ALTER TABLE `loginusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `vquestion`
--
ALTER TABLE `vquestion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `lan_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loginusers`
--
ALTER TABLE `loginusers`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
