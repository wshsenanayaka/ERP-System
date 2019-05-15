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
-- Table structure for table `dispachinfor`
--

CREATE TABLE `dispachinfor` (
  `id` int(11) NOT NULL,
  `poNo` varchar(1000) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `createDate` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dispachinfor`
--

INSERT INTO `dispachinfor` (`id`, `poNo`, `details`, `createDate`) VALUES
(1, '3', '[{\"poNo\":\"3\",\"itemCode\":\"22\",\"sales\":\"wefw\",\"alreadyDispathedAmount\":\"4\",\"orderQyt\":\"2\",\"availableQty\":\"7\",\"issueQty\":\"1\",\"serialNumber\":\"\",\"status\":\"Approved\",\"returnQtyType\":\"Partial\",\"returnQty\":\"\",\"dispatchedDate\":\"2019-05-14\"}]', '2019-05-14'),
(4, '3', '[{\"poNo\":\"3\",\"itemCode\":\"22\",\"sales\":\"wefw\",\"alreadyDispathedAmount\":5,\"orderQyt\":\"2\",\"availableQty\":\"7\",\"issueQty\":\"1\",\"serialNumber\":\"\",\"status\":\"Approved\",\"returnQtyType\":\"\",\"returnQty\":\"\",\"dispatchedDate\":\"2019-05-14\"},{\"poNo\":\"3\",\"itemCode\":\"C/DP/4\",\"sales\":\"50 G Weights.\",\"alreadyDispathedAmount\":2,\"orderQyt\":\"2\",\"availableQty\":\"32\",\"issueQty\":\"1\",\"serialNumber\":\"\",\"status\":\"Approved\",\"returnQtyType\":\"\",\"returnQty\":\"\",\"dispatchedDate\":\"2019-05-14\"}]', '2019-05-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dispachinfor`
--
ALTER TABLE `dispachinfor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dispachinfor`
--
ALTER TABLE `dispachinfor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
