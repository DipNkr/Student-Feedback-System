-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2018 at 08:03 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin-login`
--

CREATE TABLE `admin-login` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin-login`
--

INSERT INTO `admin-login` (`email`, `password`) VALUES
('admin', 'pass123');

-- --------------------------------------------------------

--
-- Table structure for table `contact us`
--

CREATE TABLE `contact us` (
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact us`
--

INSERT INTO `contact us` (`email`, `message`) VALUES
('abhishekkumar@gmail.com', 'can be improved'),
('abhishektyagi@gmail.com', 'best feedback system'),
('deepak@gmail.com', 'nice website'),
('dipankar@gmail.com', 'No Query');

-- --------------------------------------------------------

--
-- Table structure for table `feed-form`
--

CREATE TABLE `feed-form` (
  `roll` varchar(20) NOT NULL,
  `sub-code` varchar(20) NOT NULL,
  `faculty-name` text NOT NULL,
  `Clarity of communication` text NOT NULL,
  `Quality of lectures` text NOT NULL,
  `Effectiveness of discussions` text NOT NULL,
  `Effectiveness of learning experience` text NOT NULL,
  `Clear with subject concept` text NOT NULL,
  `Involve Students` text NOT NULL,
  `How can we improve our service?` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed-form`
--

INSERT INTO `feed-form` (`roll`, `sub-code`, `faculty-name`, `Clarity of communication`, `Quality of lectures`, `Effectiveness of discussions`, `Effectiveness of learning experience`, `Clear with subject concept`, `Involve Students`, `How can we improve our service?`) VALUES
('1622910001', 'RCS-402', 'Rohit Khokher', 'Best', 'Best', 'Best', 'Best', 'Best', 'Best', 'nill'),
('1622910002', 'RCS-402', 'Rohit Khokher', 'Best', 'Good', 'Worst', 'Good', 'Best', 'Good', 'best');

-- --------------------------------------------------------

--
-- Table structure for table `hod-login`
--

CREATE TABLE `hod-login` (
  `hod-id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod-login`
--

INSERT INTO `hod-login` (`hod-id`, `password`) VALUES
('cs', 'vidya'),
('mec', 'vidya');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `roll` varchar(12) NOT NULL,
  `pass` varchar(15) NOT NULL DEFAULT 'vidya@'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`roll`, `pass`) VALUES
('1622910001', 'vidya@'),
('1622910002', 'vidya@');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub-code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub-code`) VALUES
('RAS-402'),
('RCS-402'),
('RCS-403');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin-login`
--
ALTER TABLE `admin-login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `contact us`
--
ALTER TABLE `contact us`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `hod-login`
--
ALTER TABLE `hod-login`
  ADD PRIMARY KEY (`hod-id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub-code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
