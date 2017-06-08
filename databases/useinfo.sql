-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2017 at 08:09 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mymssengerdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `useinfo`
--

CREATE TABLE `useinfo` (
  `username` varchar(30) NOT NULL,
  `passwrd` varchar(60) DEFAULT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useinfo`
--

INSERT INTO `useinfo` (`username`, `passwrd`, `email`) VALUES
('root', '{passwordData}', '{emailData}'),
('root1', '{passwordData}', '{emailData}'),
('root2', 'hhelo ', 'hello@gmail.com'),
('ajay', 'hello', 'hello@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `useinfo`
--
ALTER TABLE `useinfo`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
