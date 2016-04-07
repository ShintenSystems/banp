-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2016 at 12:35 PM
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
  `country` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `digital_sign` varchar(200) NOT NULL,
  `activation` varchar(40) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1023 ;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`uid`, `fname`, `lname`, `email`, `password`, `phone_no`, `country`, `state`, `city`, `qualification`, `comment`, `digital_sign`, `activation`, `status`, `date`) VALUES
(1001, 'Nishant', 'Kobragade', 'nishantkk84@gmail.com', 'nishnat', 9658956836, 'India', '', 'Bhandara', 'BE', 'Good Efforts', 'Penguins.jpg', '', '0', '2016-03-16 11:15:48'),
(1014, '', '', 'roshan1123@gmail.com', 'roshan1123', 8597859586, '', '', '', '', '', '', 'ba3675f71566a3e1472e07ed96048d78', '0', '2016-04-01 07:31:02'),
(1021, 'Yogesh', 'Choudhary', 'yhchoudhary@gmail.com', 'yc1123', 4578587575, '14', '289', '7072', 'BE', '\r\nDear Nobel Committee\r\n\r\n					My name is Archit Wankhede and i want to nominate Mr. Dr. Ambedkar for Nobel Prize For his work in  Anthropology. I request to  take further step to owner him with the prize due to his work done in the field.\r\n\r\n\r\n\r\nThank You!\r\n', 'SignImages/Yogesh_Choudhary.png', 'ac1b81e7c40e17530cc0f5d3aa00fdbc', '1', '2016-04-01 10:07:21'),
(1022, '', '', 'swatihirekhan123@gmail.com', 'swati123', 9865324578, '', '', '', '', '', '', '9471856c50e689c666195b3600d933f9', '1', '2016-04-01 10:49:06');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
