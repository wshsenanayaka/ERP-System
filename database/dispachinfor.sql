-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 17, 2018 at 09:44 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bhoomitechdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `dispachinfor`
--

CREATE TABLE `dispachinfor` (
  `did` int(11) NOT NULL,
  `dpid` varchar(500) NOT NULL,
  `ditem_code` varchar(200) NOT NULL,
  `dsales` varchar(200) NOT NULL,
  `alreadyd` varchar(100) NOT NULL,
  `doq` varchar(100) NOT NULL,
  `daq` varchar(100) NOT NULL,
  `diq` varchar(100) NOT NULL,
  `dsn` varchar(100) NOT NULL,
  `status` varchar(200) NOT NULL,
  `dsrq` varchar(100) NOT NULL,
  `drq` varchar(100) NOT NULL,
  `ddate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dispachinfor`
--

INSERT INTO `dispachinfor` (`did`, `dpid`, `ditem_code`, `dsales`, `alreadyd`, `doq`, `daq`, `diq`, `dsn`, `status`, `dsrq`, `drq`, `ddate`) VALUES
(1, '1', '212', 'Test121', '1', '8', '10', '1', '', 'Approved', '', '', '2018-01-26'),
(2, '1', '212', 'Test121', '3', '8', '9', '2', '', 'Approved', '', '', '2018-01-26'),
(3, '2', '212', 'Test122', '0', '2', '10', '2', '', 'Pedning', '', '', '2018-02-07'),
(7, '8', '102', 'SAA1', '0', '5', '12', '1', '', 'Pedning', '', '', '2018-03-01'),
(8, 'uuu98/', '100', 'Sa1', '0', '5', '16', '1', '', 'Pedning', '', '', '2018-05-10'),
(9, 'uuu98', '100', 'Sa1', '0', '5', '16', '1', '', 'Pedning', '', '', '2018-05-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dispachinfor`
--
ALTER TABLE `dispachinfor`
  ADD PRIMARY KEY (`did`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dispachinfor`
--
ALTER TABLE `dispachinfor`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
