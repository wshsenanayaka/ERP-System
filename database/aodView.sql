-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 15, 2019 at 05:00 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bhoomitechdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aodView`
--

CREATE TABLE `aodView` (
  `id` int(11) NOT NULL,
  `poNo` varchar(1000) NOT NULL,
  `itemCode` varchar(1000) NOT NULL,
  `sales` varchar(1000) NOT NULL,
  `alreadyDispathedAmount` varchar(1000) NOT NULL,
  `orderQyt` varchar(1000) NOT NULL,
  `availableQty` varchar(1000) NOT NULL,
  `issueQty` varchar(1000) NOT NULL,
  `serialNumber` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `returnQtyType` varchar(1000) NOT NULL,
  `returnQty` varchar(1000) NOT NULL,
  `dispatchedDate` varchar(1000) NOT NULL,
  `selectView` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aodView`
--

INSERT INTO `aodView` (`id`, `poNo`, `itemCode`, `sales`, `alreadyDispathedAmount`, `orderQyt`, `availableQty`, `issueQty`, `serialNumber`, `status`, `returnQtyType`, `returnQty`, `dispatchedDate`, `selectView`) VALUES
(10, '3', 'C/DP/4', '50 G Weights.', '2', '2', '32', 'null', 'null', 'null', 'null', 'null', 'null', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aodView`
--
ALTER TABLE `aodView`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aodView`
--
ALTER TABLE `aodView`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
