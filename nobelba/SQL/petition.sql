-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2016 at 02:23 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `petition`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE IF NOT EXISTS `user_detail` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_no` bigint(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `digital_sign` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1007 ;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`uid`, `fname`, `lname`, `email`, `password`, `phone_no`, `address`, `country`, `state`, `city`, `qualification`, `comment`, `digital_sign`, `date`) VALUES
(1001, 'Nishant', 'Kobragade', 'nishantkk84@gmail.com', 'nishnat', 9658956836, 'Masal', 'India', '', 'Bhandara', 'BE', 'Good Efforts', 'Penguins.jpg', '2016-03-16 11:15:48'),
(1002, 'Swati', 'Hirekhan', 'swatihirekhan123@gmail.com', 'swati', 5689458796, 'Nandanwan', 'India', '', 'Yavatmal', 'MCA', 'GOOD', 'Jellyfish.jpg', '2016-03-16 11:36:41'),
(1003, 'Roshan', 'Chimankar', 'roshan1123@gmail.com', 'roshan', 819029661606, 'Hiroshima', 'Japan', '', 'Tokyo', 'MTech', 'Good Efforts', 'Desert.jpg', '2016-03-16 11:41:04'),
(1005, '', '', 'yhchoudhary@gmail.com', 'yc1123', 1234567896, '', '', '', '', '', '', '', '2016-03-26 11:34:24'),
(1006, '', '', 'uih', 'jhg', 0, '', '', '', '', '', '', '', '2016-03-26 12:10:52');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
