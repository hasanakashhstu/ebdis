-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 09:32 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebids`
--

-- --------------------------------------------------------

--
-- Table structure for table `itb`
--

CREATE TABLE `itb` (
  `id` int(11) NOT NULL,
  `tenderID` int(255) NOT NULL,
  `bidID` int(255) NOT NULL,
  `cost` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `warranty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itb`
--

INSERT INTO `itb` (`id`, `tenderID`, `bidID`, `cost`, `duration`, `warranty`) VALUES
(1, 9000, 8000, '', '', ''),
(2, 9001, 8001, '600', '2 days', 'yes'),
(3, 9001, 8001, '600', '2 days', 'yes'),
(4, 9001, 8001, '600', '2 days', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tender`
--

CREATE TABLE `tender` (
  `TenderID` int(255) NOT NULL,
  `Tender_Title` varchar(255) NOT NULL,
  `Sector` varchar(255) NOT NULL,
  `Scope` varchar(255) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tender`
--

INSERT INTO `tender` (`TenderID`, `Tender_Title`, `Sector`, `Scope`, `Description`) VALUES
(9001, 'School Projects', 'Education', 'National', '	Upgrading of multipurpose hall in schools'),
(9002, 'Building Automation', 'Industrial', 'Local', 'Improved access control to secured sites'),
(9003, 'Rapid Rall links', 'Transporttation', 'Regional', 'Development of rapid transport rail links between countries'),
(9004, '...', '...', '...', '...'),
(9005, 'Global Banking', 'Financial', 'Global', 'Implementation of new international banking standardsw');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `PIDN` int(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `user_name`, `PIDN`, `contact_number`, `email_address`, `password`, `company_name`, `company_address`) VALUES
(1, 'ggfgj', 234665, 'egsghh', 'rrgreerth', '', 'rhr4e', 'etgrfeee'),
(3, 'akash', 567899, '3446567', 'hasanakash0215@gmail.com', '', 'ftvghg', 'grgrhr'),
(4, 'akash', 567899, '3446567', '', 'PJhpNXDJ', 'ftvghg', 'grgrhr'),
(5, 'akash', 567899, '3446567', '', 'Xvz2V5lV', 'ftvghg', 'grgrhr'),
(6, 'akash', 567899, '3446567', '', 'R3pSLqaq', 'ftvghg', 'grgrhr'),
(7, 'akash', 567899, '3446567', 'hasanakash0215@gmail.com', 'DZ7p4ICa', 'ftvghg', 'grgrhr'),
(8, 'akash', 567899, '3446567', 'hasanakash0215@gmail.com', 'n73xn6vU', 'ftvghg', 'grgrhr'),
(9, 'akash', 567899, '3446567', 'hasanakash0215@gmail.com', 'dfDTvphp', 'ftvghg', 'grgrhr'),
(10, 'akash', 567899, '3446567', 'hasanakash0215@gmail.com', 'Zxikioxr', 'ftvghg', 'grgrhr'),
(11, 'akash', 567899, '3446567', 'hasanakash0215@gmail.com', 'eyFC05s6', 'ftvghg', 'grgrhr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `itb`
--
ALTER TABLE `itb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tender`
--
ALTER TABLE `tender`
  ADD PRIMARY KEY (`TenderID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `itb`
--
ALTER TABLE `itb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tender`
--
ALTER TABLE `tender`
  MODIFY `TenderID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9006;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
