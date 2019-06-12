-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 12, 2019 at 12:46 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bhoomitechdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aodViewM`
--

CREATE TABLE `aodViewM` (
  `id` int(11) NOT NULL,
  `ItemCode` varchar(1000) NOT NULL,
  `sales` varchar(1000) NOT NULL,
  `quantity` varchar(1000) NOT NULL,
  `dispatchedDate` varchar(1000) NOT NULL,
  `selectView` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aodViewM`
--
ALTER TABLE `aodViewM`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aodViewM`
--
ALTER TABLE `aodViewM`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
