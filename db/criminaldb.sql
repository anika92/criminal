-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2016 at 01:10 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `criminaldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `crimetable`
--

CREATE TABLE IF NOT EXISTS `crimetable` (
`crime_id` int(11) NOT NULL,
  `crime_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `criminaltable`
--

CREATE TABLE IF NOT EXISTS `criminaltable` (
`c_t_id` int(11) NOT NULL,
  `c_t_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `criminal_info`
--

CREATE TABLE IF NOT EXISTS `criminal_info` (
`c_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `crime_id` int(11) NOT NULL,
  `c_t_id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `height` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `missingtable`
--

CREATE TABLE IF NOT EXISTS `missingtable` (
`missing_id` int(11) NOT NULL,
  `missing_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `height` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `updated_by` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `missingtable`
--

INSERT INTO `missingtable` (`missing_id`, `missing_name`, `description`, `age`, `height`, `gender`, `image`, `address`, `date`, `status`, `added_by`, `updated_by`) VALUES
(3, 'Rony', 'Sera', 25, '5', 'Male', 'terms.png', 'hathazari', '2016-07-05', 'Still Missing', '', ''),
(4, 'Abul', 'Sera', 25, '5', 'Male', 'terms.png', 'hathazari', '2016-07-05', 'Still Missing', '', ''),
(5, 'Abul', 'Sera', 25, '5', 'Male', 'terms.png', 'hathazari', '2016-07-05', 'Still Missing', '', ''),
(6, 'Abul', 'Sera', 25, '5', 'Male', '1469444431terms.png', 'hathazari', '2016-07-05', 'Still Missing', '', ''),
(7, 'Abul', 'Sera', 25, '5', 'Male', '1469444527terms.png', 'hathazari', '2016-07-05', 'Still Missing', '', ''),
(8, 'Abul', 'Sera', 25, '5', 'Male', '1469444582terms.png', 'hathazari', '2016-07-05', 'Still Missing', '', ''),
(9, 'Abul', 'Sera', 25, '5', 'Male', '1469444663terms.png', 'hathazari', '2016-07-05', 'Still Missing', '', ''),
(10, 'Abul', 'Sera', 25, '5', 'Male', '1469444716terms.png', 'hathazari', '2016-07-05', 'Still Missing', '', ''),
(11, 'Abul', 'Sera', 25, '5', 'Male', '1469444780terms.png', 'hathazari', '2016-07-05', 'Still Missing', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `police_info`
--

CREATE TABLE IF NOT EXISTS `police_info` (
`p_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `police_code` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `police_profile`
--

CREATE TABLE IF NOT EXISTS `police_profile` (
`p_id` int(11) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `thana` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `postal` int(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phone` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
`user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nid` int(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE IF NOT EXISTS `user_profile` (
`user_id` int(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(20) NOT NULL,
  `thana` varchar(20) NOT NULL,
  `postal` int(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crimetable`
--
ALTER TABLE `crimetable`
 ADD PRIMARY KEY (`crime_id`);

--
-- Indexes for table `criminaltable`
--
ALTER TABLE `criminaltable`
 ADD PRIMARY KEY (`c_t_id`);

--
-- Indexes for table `criminal_info`
--
ALTER TABLE `criminal_info`
 ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `missingtable`
--
ALTER TABLE `missingtable`
 ADD PRIMARY KEY (`missing_id`);

--
-- Indexes for table `police_info`
--
ALTER TABLE `police_info`
 ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `police_profile`
--
ALTER TABLE `police_profile`
 ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `crimetable`
--
ALTER TABLE `crimetable`
MODIFY `crime_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `criminaltable`
--
ALTER TABLE `criminaltable`
MODIFY `c_t_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `criminal_info`
--
ALTER TABLE `criminal_info`
MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `missingtable`
--
ALTER TABLE `missingtable`
MODIFY `missing_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `police_info`
--
ALTER TABLE `police_info`
MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `police_profile`
--
ALTER TABLE `police_profile`
MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `police_profile`
--
ALTER TABLE `police_profile`
ADD CONSTRAINT `police_profile_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `police_info` (`p_id`);

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
ADD CONSTRAINT `user_profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
