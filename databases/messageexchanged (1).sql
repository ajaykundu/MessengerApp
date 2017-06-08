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
-- Table structure for table `messageexchanged`
--

CREATE TABLE `messageexchanged` (
  `sendername` varchar(30) NOT NULL,
  `receivername` varchar(30) NOT NULL,
  `messages` text NOT NULL,
  `timeanddate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messageexchanged`
--

INSERT INTO `messageexchanged` (`sendername`, `receivername`, `messages`, `timeanddate`) VALUES
('ajay', 'root2', 'hi', '2017-06-07 13:02:53'),
('root', 'ajay', 'hello', '2017-06-07 13:04:09'),
('ajay', 'root2', 'i am good you tell', '2017-06-07 13:04:52'),
('ajay', 'root2', 'i am also good', '2017-06-07 13:05:30'),
('ajay', 'root', 'hi', '2017-06-07 18:09:58'),
('root', 'ajay', 'how are you doing', '2017-06-07 18:10:29'),
('root2', 'ajay', 'this is not good ', '2017-06-07 18:30:28'),
('ajay', 'root2', 'what are you talking about bro..', '2017-06-07 18:31:01'),
('root2', 'ajay', 'nothing bro. just saying it.', '2017-06-07 18:31:19'),
('ajay', 'root2', '', '2017-06-07 18:31:29'),
('ajay', 'root2', '', '2017-06-07 18:31:39'),
('ajay', 'root2', '', '2017-06-07 18:31:39'),
('ajay', 'root2', '', '2017-06-07 18:31:40'),
('ajay', 'root2', '', '2017-06-07 18:31:41'),
('ajay', 'root2', '', '2017-06-07 18:31:43'),
('ajay', 'root2', '', '2017-06-07 18:31:44'),
('ajay', 'root2', '', '2017-06-07 18:31:47'),
('ajay', 'root2', '', '2017-06-07 18:31:47'),
('root2', 'ajay', '', '2017-06-07 18:31:50'),
('ajay', 'root2', '', '2017-06-07 18:31:59'),
('root2', 'ajay', '', '2017-06-07 18:32:01'),
('root2', 'ajay', '', '2017-06-07 18:32:02'),
('root2', 'ajay', '', '2017-06-07 18:32:03'),
('ajay', 'root2', '', '2017-06-07 18:32:07'),
('ajay', 'root2', '', '2017-06-07 18:32:07'),
('ajay', 'root2', '', '2017-06-07 18:32:08'),
('ajay', 'root2', '', '2017-06-07 18:32:09'),
('ajay', 'root2', '', '2017-06-07 18:32:10'),
('ajay', 'root2', '', '2017-06-07 18:32:10'),
('ajay', 'root2', '', '2017-06-07 18:32:11'),
('root2', 'ajay', '', '2017-06-07 18:32:14'),
('root2', 'ajay', '', '2017-06-07 18:32:15'),
('root2', 'ajay', '', '2017-06-07 18:32:15'),
('root2', 'ajay', 'hii dude say something', '2017-06-07 18:32:31'),
('ajay', 'root2', 'i am not going to say anythings.', '2017-06-07 18:32:53'),
('root2', 'ajay', 'hii dude say something', '2017-06-07 18:33:05'),
('root2', 'ajay', '', '2017-06-07 18:33:15'),
('root2', 'ajay', '', '2017-06-07 18:33:50'),
('root2', 'ajay', 'hello this is not a good task', '2017-06-08 06:40:43'),
('ajay', 'root2', 'welcome to new world.', '2017-06-08 06:42:18'),
('ajay', 'root1', 'hello', '2017-06-08 07:28:28');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
