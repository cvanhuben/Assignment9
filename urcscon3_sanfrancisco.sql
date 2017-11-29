-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 14, 2017 at 10:12 AM
-- Server version: 5.6.32-78.1-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `urcscon3_sanfrancisco`
--
CREATE DATABASE IF NOT EXISTS `urcscon3_sanfrancisco` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `urcscon3_sanfrancisco`;

-- --------------------------------------------------------

--
-- Table structure for table `frameworkSurvey`
--

CREATE TABLE IF NOT EXISTS `frameworkSurvey` (
  `counter` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `favoriteFramework` text NOT NULL,
  `favoriteFeature` text NOT NULL,
  `featuresToChange` text NOT NULL,
  `suggestionFeature` text NOT NULL,
  `suggestionFramework` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=224 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frameworkSurvey`
--

INSERT INTO `frameworkSurvey` (`counter`, `name`, `email`, `favoriteFramework`, `favoriteFeature`, `featuresToChange`, `suggestionFeature`, `suggestionFramework`) VALUES
(204, 'John', 'john@denzer.com', 'Bootstrap', 'Mobile Friendly', 'Flexibility', 'some', 'none'),
(203, 'TEST2', 'TEST@TEST.com', 'Stylus', 'Mobile Friendly', 'Flexibility', 'none', 'none'),
(222, 'Hillary Chun', 'hchun4@u.rochester.edu', '', 'Stability', 'Readability', '', ''),
(187, 'Ali', 'ahashim@u.rochester.edu', 'Susy', 'Flexibility', 'Mobile Friendly, Stability', 'More CSS Animations', 'Some templates'),
(189, 'Hillary Chun', 'hchun4@u.rochester.edu', 'Semantic', 'Flexibility, Browser Compatability, Community & Popularity, Mobile Friendly, Speed', 'Mobile Friendly, Stability', '', ''),
(194, 'Ali', 'ahashim@u.rochester.edu', 'Foundation', 'Mobile Friendly, Stability', 'Flexibility, Browser Compatability', 'test', 'test2'),
(206, 'Hillary', 'hchun4@u.rochester.edu', 'Pure', 'Flexibility, Community & Popularity, Mobile Friendly, Stability', 'Mobile Friendly, ', 'ihho', 'kljlkjkl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `frameworkSurvey`
--
ALTER TABLE `frameworkSurvey`
  ADD PRIMARY KEY (`counter`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `frameworkSurvey`
--
ALTER TABLE `frameworkSurvey`
  MODIFY `counter` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=224;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
