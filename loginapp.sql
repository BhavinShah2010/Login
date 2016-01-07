-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2016 at 10:38 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `authId` varchar(40) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `authProvider` varchar(10) NOT NULL,
  `emailId` varchar(40) NOT NULL,
  `profilePicLink` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`authId`, `firstName`, `lastName`, `authProvider`, `emailId`, `profilePicLink`) VALUES
('107661577806924087086', '', '', 'google', 'harshsoni111093@gmail.com', 'h'),
('', 'Bhavin', 'Shah', 'google', 'Bhavin@gmail.com', 'google.com/123'),
('107661577806924087086', '', '', 'google', 'harshsoni111093@gmail.com', 'h'),
('972819629473262', 'Harsh', 'Soni', 'facebook', 'soniharsh1110@gmail.com', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xfa1/v/t1.0-1/c11.0.50.50/p50x50/1239465_623961421025753_1512377574_n.jpg?oh=44b57add0f11ac3d197464385e18ae04&oe=570B4627&__gda__=1460560814_0d35b34c65cf012addbba8e1807b5253'),
('', '', '', 'facebook', '', ''),
('116639356450219011291', '', '', 'facebook', 'shah2010bhavin@gmail.com', 'h'),
('116639356450219011291', 'Bhavin', 'Shah', 'facebook', 'shah2010bhavin@gmail.com', 'https://lh4.googleusercontent.com/-W65T5sQXZJY/AAAAAAAAAAI/AAAAAAAAABA/aQS3LU_ar4I/photo.jpg'),
('987587277978613', 'Bhavin', 'Shah', 'facebook', 'bhavinahd_007@yahoo.com', 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xaf1/v/t1.0-1/p50x50/12376413_979725385431469_3723488806999674832_n.jpg?oh=35e7aea7f225aa74d92b2ef8a2a62ff2&oe=57483D1A&__gda__=1464427949_e1b903508a19ca533b7960b2f6b6b593'),
('116639356450219011291', 'Bhavin', 'Shah', 'facebook', 'shah2010bhavin@gmail.com', 'https://lh4.googleusercontent.com/-W65T5sQXZJY/AAAAAAAAAAI/AAAAAAAAABA/aQS3LU_ar4I/photo.jpg'),
('116639356450219011291', 'Bhavin', 'Shah', 'facebook', 'shah2010bhavin@gmail.com', 'https://lh4.googleusercontent.com/-W65T5sQXZJY/AAAAAAAAAAI/AAAAAAAAABA/aQS3LU_ar4I/photo.jpg'),
('116639356450219011291', 'Bhavin', 'Shah', 'facebook', 'shah2010bhavin@gmail.com', 'https://lh4.googleusercontent.com/-W65T5sQXZJY/AAAAAAAAAAI/AAAAAAAAABA/aQS3LU_ar4I/photo.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
