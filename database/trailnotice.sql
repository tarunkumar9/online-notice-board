-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2018 at 07:16 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trailnotice`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `notice_id` int(11) NOT NULL,
  `section` varchar(10) DEFAULT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `file` varchar(100) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `size` int(12) DEFAULT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `section`, `subject`, `Description`, `file`, `type`, `size`, `Date`) VALUES
(32, 'csea', 'asdvx', 'sczvdxb ', '26479-DBMS experiment2.pdf', 'application/pdf', 165220, '2018-01-09 22:49:03'),
(33, 'csea', 'did ypu', 'didi uook', '34646-receipt (1).pdf', 'application/pdf', 35642, '2018-01-09 22:50:32'),
(34, 'csea', 'trails', 'trails', '98571-DBMS experiment1.pdf', 'application/pdf', 179377, '2018-01-09 23:06:14'),
(35, 'csea', 'sreya chudu', 'ettu chudu ttt', '92694-DBMS experiment1.pdf', 'application/pdf', 179377, '2018-01-09 23:16:51'),
(36, 'csec', 'azsadsa', 'awsdfs', '84947-DBMS experiment1.pdf', 'application/pdf', 179377, '2018-01-09 23:27:24'),
(37, 'csec', 'azsadsa', 'awsdfs', '21869-DBMS experiment1.pdf', 'application/pdf', 179377, '2018-01-09 23:27:27'),
(38, 'cseb', 'WD', 'das', '14967-DBMS experiment1.pdf', 'application/pdf', 179377, '2018-01-09 23:36:26'),
(39, 'cseb', 'WD', 'das', '66662-DBMS experiment1.pdf', 'application/pdf', 179377, '2018-01-09 23:36:30'),
(40, 'cseb', 'i am cseb', 'yes i am', '46210-DBMS experiment2.pdf', 'application/pdf', 165220, '2018-01-09 23:38:05'),
(41, 'cseb', 'rf6ty', 'hiee', '94838-DBMS experiment1.pdf', 'application/pdf', 179377, '2018-01-09 23:43:45'),
(42, 'cseb', 'rf6ty', 'hiee', '56031-DBMS experiment1.pdf', 'application/pdf', 179377, '2018-01-09 23:43:48');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` char(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `section` varchar(10) DEFAULT NULL,
  `regid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `section`, `regid`) VALUES
(7, 'niki', 'niki@gmail.com', '587c8d2a43ec581df67365aac7ed819f', NULL, 2147483647),
(11, 'abhibbb', 'abhi@gmail.com', 'd76f3d05cc9ac98f1f9160274a39fe33', NULL, 2147483647),
(12, 'tarun', 'tk4474681@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 2147483647),
(26, 'arvind', 'arvind@gmail.com', '21232f297a57a5a743894a0e4a801fc3', NULL, 2147483647),
(29, 'tarunkumar', '16r91a0510@tkrec.com', '81dc9bdb52d04dc20036dbd8313ed055', 'csea', 2147483647),
(30, 'sreya', 'sreya@gmail.com', '7fa45ddb537e17ae3a47c736b371721c', 'cseb', 2147483647),
(31, 'naren', 'naren@gmail.com', '6bba25b576f8107f116ed17c8b4e4e17', 'csea', 2147483647),
(32, 'himanshu', 'himanshu@gmail.com', '4122ea4f5490094a33d7cdba65136cf8', 'csec', 2147483647),
(33, 'cseb', 'cseb@gmail.com', '7710b08c1df44e4b115d0a7781f8e8d7', 'cseb', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
ALTER TABLE `user` ADD FULLTEXT KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
