-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 11:02 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfoliodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodb`
--

CREATE TABLE `biodb` (
  `id` int(10) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `degree` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `city` varchar(20) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `map` text DEFAULT NULL,
  `facebook_icons` varchar(50) DEFAULT NULL,
  `instagram_icons` varchar(50) DEFAULT NULL,
  `twitter_icons` varchar(50) DEFAULT NULL,
  `skype_icons` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodb`
--

INSERT INTO `biodb` (`id`, `firstName`, `lastName`, `dateOfBirth`, `website`, `degree`, `phone`, `email`, `city`, `image`, `details`, `location`, `map`, `facebook_icons`, `instagram_icons`, `twitter_icons`, `skype_icons`, `password`) VALUES
(30, 'Moshiur', 'Rahman', '2021-12-31', 'www.moshiur.com', 'BSc in CSE', '01521426730', 'moshiur7620@gmail.com', 'Dhaka', '20928.jpg', 'I am a software developer', 'Dhaka', NULL, NULL, NULL, NULL, NULL, '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `categorydb`
--

CREATE TABLE `categorydb` (
  `cId` int(10) NOT NULL,
  `cName` varchar(20) NOT NULL,
  `catSlug` varchar(100) DEFAULT NULL,
  `status` tinyint(10) NOT NULL DEFAULT 1 COMMENT '1.Show 2.Hide'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorydb`
--

INSERT INTO `categorydb` (`cId`, `cName`, `catSlug`, `status`) VALUES
(1, 'ALL', 'all', 1),
(3, 'APP', 'app', 1),
(6, 'CARD', 'card', 1),
(8, 'WEB', 'web', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categorydetails`
--

CREATE TABLE `categorydetails` (
  `cdId` int(10) NOT NULL,
  `cId` int(10) NOT NULL,
  `clientName` varchar(50) NOT NULL,
  `projectURL` varchar(50) NOT NULL,
  `projectDate` date NOT NULL,
  `image` varchar(50) NOT NULL,
  `shortDesc` varchar(255) NOT NULL,
  `decription` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorydetails`
--

INSERT INTO `categorydetails` (`cdId`, `cId`, `clientName`, `projectURL`, `projectDate`, `image`, `shortDesc`, `decription`) VALUES
(9, 8, 'AGMJH', 'www.test1.com', '2022-01-02', '1.jpg', 'testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest', 'testtesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttesttest'),
(12, 8, 'Moshiur', 'www.moshiur.com', '2021-12-31', 'ashes_root_smith.jpg', 'The US government sent the vaccines under', 'The US government sent the vaccines under the Covax facility, said a Ministry of Health and Family Welfare press release today.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ctId` int(20) NOT NULL,
  `ctName` varchar(20) NOT NULL,
  `ctMail` varchar(20) NOT NULL,
  `ctSubject` varchar(20) NOT NULL,
  `ctMessage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `resumedb`
--

CREATE TABLE `resumedb` (
  `rId` int(10) NOT NULL,
  `rHead` varchar(255) NOT NULL,
  `rTitle` varchar(255) NOT NULL,
  `rStartyear` date NOT NULL,
  `rEndyears` date NOT NULL,
  `rname` varchar(50) NOT NULL,
  `rdetails` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resumedb`
--

INSERT INTO `resumedb` (`rId`, `rHead`, `rTitle`, `rStartyear`, `rEndyears`, `rname`, `rdetails`) VALUES
(6, 'Education', 'BSc', '2020-01-01', '2021-12-27', 'AIUB', 'Complete BSc from their'),
(7, 'Professional Experience', 'Designer', '2021-11-08', '2022-01-01', 'EMM', 'Lead in the design, development, and implementation\r\nLead in the design, development, and implementation\r\nLead in the design, development, and implementation');

-- --------------------------------------------------------

--
-- Table structure for table `reviewdb`
--

CREATE TABLE `reviewdb` (
  `reId` int(10) NOT NULL,
  `reComment` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `reNameBn` varchar(20) NOT NULL,
  `reDesignation` varchar(20) NOT NULL,
  `status` tinyint(10) NOT NULL DEFAULT 1 COMMENT '1.show\r\n2.delete'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviewdb`
--

INSERT INTO `reviewdb` (`reId`, `reComment`, `image`, `reNameBn`, `reDesignation`, `status`) VALUES
(2, 'est', '332043.jpg', 'shuvo', 'web', 1),
(4, 'Final test', 'Anindya_002.jpg', 'Test2', 'app', 1);

-- --------------------------------------------------------

--
-- Table structure for table `servicedb`
--

CREATE TABLE `servicedb` (
  `sId` int(20) NOT NULL,
  `sName` varchar(20) NOT NULL,
  `sdetails` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` tinyint(10) NOT NULL DEFAULT 1 COMMENT '1.show\r\n2.delete'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicedb`
--

INSERT INTO `servicedb` (`sId`, `sName`, `sdetails`, `image`, `status`) VALUES
(4, 'Test', 'Final test', '111.png', 1),
(5, 'Test 2222', 'First testFire breaks out at Covid dedicated hospital in Cox’s Bazar Rohingya camp', '94.jpg', 1),
(7, 'Design', 'বাংলাদেশি এক বিজ্ঞানীর নেতৃত্বে টেক্সাসের রাইস বিশ্ববিদ্যালয়ের', '111.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodb`
--
ALTER TABLE `biodb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorydb`
--
ALTER TABLE `categorydb`
  ADD PRIMARY KEY (`cId`),
  ADD UNIQUE KEY `catSlug` (`catSlug`);

--
-- Indexes for table `categorydetails`
--
ALTER TABLE `categorydetails`
  ADD PRIMARY KEY (`cdId`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ctId`);

--
-- Indexes for table `resumedb`
--
ALTER TABLE `resumedb`
  ADD PRIMARY KEY (`rId`);

--
-- Indexes for table `reviewdb`
--
ALTER TABLE `reviewdb`
  ADD PRIMARY KEY (`reId`);

--
-- Indexes for table `servicedb`
--
ALTER TABLE `servicedb`
  ADD PRIMARY KEY (`sId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodb`
--
ALTER TABLE `biodb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `categorydb`
--
ALTER TABLE `categorydb`
  MODIFY `cId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categorydetails`
--
ALTER TABLE `categorydetails`
  MODIFY `cdId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ctId` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resumedb`
--
ALTER TABLE `resumedb`
  MODIFY `rId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reviewdb`
--
ALTER TABLE `reviewdb`
  MODIFY `reId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `servicedb`
--
ALTER TABLE `servicedb`
  MODIFY `sId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
