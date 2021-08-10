-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 08:03 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `first_name`, `last_name`, `address`, `phone`, `email`, `pass`, `img`) VALUES
(1, 'Admin', 'Ali', 'Haider', 'Sheesh Mahal Sheikhupura, street no 4', '03424484926', 'haider@gmail.com', 'haider', 'IMG_20210414_173216.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `coin` varchar(255) NOT NULL,
  `coupon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `img`, `title`, `coin`, `coupon`) VALUES
(1, '674995.jpg', 'This video is related to study', '5', '1977');

-- --------------------------------------------------------

--
-- Table structure for table `mcqs`
--

CREATE TABLE `mcqs` (
  `id` int(11) NOT NULL,
  `user_key` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `opt1` varchar(255) NOT NULL,
  `opt2` varchar(255) NOT NULL,
  `opt3` varchar(255) NOT NULL,
  `opt4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mcqs`
--

INSERT INTO `mcqs` (`id`, `user_key`, `question`, `opt1`, `opt2`, `opt3`, `opt4`) VALUES
(1, '1', 'In Which Pakistan is make atomic bomb?', '1922', '1978', '1965', '1992');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `user_key` varchar(255) NOT NULL,
  `pay` varchar(255) NOT NULL,
  `stat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `user_key`, `pay`, `stat`) VALUES
(1, '1', '0.001', 'Paid'),
(2, '1', '0', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `github` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `course` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `point` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `phone`, `email`, `pass`, `address`, `facebook`, `instagram`, `twitter`, `github`, `website`, `course`, `img`, `point`) VALUES
(1, 'Zain', 'Goraya', '03094938876', 'zain.goraya926@gmail.com', 'honda', 'Sheesh Mahal Sheikhupura, street no 4', 'fb/haider', 'instagram/haider', 'twitter/haider', 'git/haider', 'www.haider.com', 'Web Design', 'IMG_20210414_173216.jpg', '3'),
(7, 'Ali', 'Haider', '03424484926', 'haider@gmail.com', 'chhaider', 'Sheesh Mahal Sheikhupura, street no 4', 'fb/haider', 'instagram/haider', 'twitter/haider', 'git/haider', 'www.haider.com', 'Web Development', 'IMG-20210314-WA0071.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `user_key` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descript` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `stat` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `opt1` varchar(255) NOT NULL,
  `opt2` varchar(255) NOT NULL,
  `opt3` varchar(255) NOT NULL,
  `opt4` varchar(255) NOT NULL,
  `copt` varchar(255) NOT NULL,
  `question_2` varchar(255) NOT NULL,
  `opt1_2` varchar(255) NOT NULL,
  `opt2_2` varchar(255) NOT NULL,
  `opt3_2` varchar(255) NOT NULL,
  `opt4_2` varchar(255) NOT NULL,
  `copt_2` varchar(255) NOT NULL,
  `question_3` varchar(255) NOT NULL,
  `opt1_3` varchar(255) NOT NULL,
  `opt2_3` varchar(255) NOT NULL,
  `opt3_3` varchar(255) NOT NULL,
  `opt4_3` varchar(255) NOT NULL,
  `copt_3` varchar(255) NOT NULL,
  `question_4` varchar(255) NOT NULL,
  `opt1_4` varchar(255) NOT NULL,
  `opt2_4` varchar(255) NOT NULL,
  `opt3_4` varchar(255) NOT NULL,
  `opt4_4` varchar(255) NOT NULL,
  `copt_4` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `user_key`, `username`, `video`, `title`, `descript`, `category`, `stat`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `copt`, `question_2`, `opt1_2`, `opt2_2`, `opt3_2`, `opt4_2`, `copt_2`, `question_3`, `opt1_3`, `opt2_3`, `opt3_3`, `opt4_3`, `copt_3`, `question_4`, `opt1_4`, `opt2_4`, `opt3_4`, `opt4_4`, `copt_4`) VALUES
(1, '1', 'Zain', 'Study Day - Motivational Short.mp4', 'New bootstrap 5', 'In this video i will show you how can we use bootstrap 5 for making our website responsive for all devices', 'C++', 'pending', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcqs`
--
ALTER TABLE `mcqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mcqs`
--
ALTER TABLE `mcqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
