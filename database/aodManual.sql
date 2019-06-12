-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 12, 2019 at 12:45 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bhoomitechdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `aodManual`
--

CREATE TABLE `aodManual` (
  `id` int(11) NOT NULL,
  `pno` varchar(1200) NOT NULL,
  `customerName` varchar(1200) NOT NULL,
  `other` varchar(1000) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `createDate` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aodManual`
--

INSERT INTO `aodManual` (`id`, `pno`, `customerName`, `other`, `details`, `createDate`) VALUES
(1, '1', '2', '3', '[{\"itemCode\":\"M/S212-01\",\"sales\":\"S212-01 Penetration Piston\",\"issueQty\":\"2\",\"serialNumber\":\"443\",\"dispatchedDate\":\"2019-06-11\"}]', '2019-06-11'),
(2, '1', '3', '5', '[{\"itemCode\":\"C/M/MO/2\",\"sales\":\"Marshall Mould \",\"issueQty\":\"4\",\"serialNumber\":\"#35\",\"dispatchedDate\":\"2019-06-11\"}]', '2019-06-11'),
(3, '1', '3', '4', '[{\"itemCode\":\"C/M/MO/2\",\"sales\":\"Marshall Mould \",\"issueQty\":\"2\",\"serialNumber\":\"#4535\",\"dispatchedDate\":\"2019-06-11\"}]', '2019-06-11'),
(4, '2', '3', '1', '[{\"itemCode\":\"M/S213N\",\"sales\":\"S213N CBR/Marshall 2 Speeds Frame 50 Kn\",\"issueQty\":\"2\",\"serialNumber\":\"67%\",\"dispatchedDate\":\"2019-06-11\"}]', '2019-06-11'),
(5, '2', '3', '1', '[{\"itemCode\":\"M/S213N\",\"sales\":\"S213N CBR/Marshall 2 Speeds Frame 50 Kn\",\"issueQty\":\"2\",\"serialNumber\":\"67%\",\"dispatchedDate\":\"2019-06-11\"},{\"itemCode\":\"M/S213N\",\"sales\":\"S213N CBR/Marshall 2 Speeds Frame 50 Kn\",\"issueQty\":\"2\",\"serialNumber\":\"67%\",\"dispatchedDate\":\"2019-06-11\"}]', '2019-06-11'),
(6, '2', '3', '1', '[{\"itemCode\":\"M/S213N\",\"sales\":\"S213N CBR/Marshall 2 Speeds Frame 50 Kn\",\"issueQty\":\"2\",\"serialNumber\":\"67%\",\"dispatchedDate\":\"2019-06-11\"},{\"itemCode\":\"M/S213N\",\"sales\":\"S213N CBR/Marshall 2 Speeds Frame 50 Kn\",\"issueQty\":\"2\",\"serialNumber\":\"67%\",\"dispatchedDate\":\"2019-06-11\"},{\"itemCode\":\"M/S213N\",\"sales\":\"S213N CBR/Marshall 2 Speeds Frame 50 Kn\",\"issueQty\":\"2\",\"serialNumber\":\"67%\",\"dispatchedDate\":\"2019-06-11\"}]', '2019-06-11'),
(7, '2', '3', '1', '[{\"itemCode\":\"M/S213N\",\"sales\":\"S213N CBR/Marshall 2 Speeds Frame 50 Kn\",\"issueQty\":\"2\",\"serialNumber\":\"67%\",\"dispatchedDate\":\"2019-06-11\"},{\"itemCode\":\"M/S213N\",\"sales\":\"S213N CBR/Marshall 2 Speeds Frame 50 Kn\",\"issueQty\":\"2\",\"serialNumber\":\"67%\",\"dispatchedDate\":\"2019-06-11\"},{\"itemCode\":\"M/S213N\",\"sales\":\"S213N CBR/Marshall 2 Speeds Frame 50 Kn\",\"issueQty\":\"2\",\"serialNumber\":\"67%\",\"dispatchedDate\":\"2019-06-11\"},{\"itemCode\":\"M/S213N\",\"sales\":\"S213N CBR/Marshall 2 Speeds Frame 50 Kn\",\"issueQty\":\"2\",\"serialNumber\":\"67%\",\"dispatchedDate\":\"2019-06-11\"}]', '2019-06-11'),
(8, '1', '1', '1', '[{\"itemCode\":\"C/M/MO/2\",\"sales\":\"Marshall Mould \",\"issueQty\":\"1\",\"serialNumber\":\"#564\",\"dispatchedDate\":\"2019-06-11\"}]', '2019-06-11'),
(9, '1', '1', '2', '[{\"itemCode\":\"M/B047\",\"sales\":\"B047 Flow Meter\",\"issueQty\":\"1\",\"serialNumber\":\"#3545\",\"dispatchedDate\":\"2019-06-11\"}]', '2019-06-11'),
(10, 'sdfs', '345', 'sdfsfs', '[{\"itemCode\":\"C/SC/5\",\"sales\":\"Steel Ruler 300mm\",\"issueQty\":\"1\",\"serialNumber\":\"#dgfsdfs\",\"dispatchedDate\":\"2019-06-11\"}]', '2019-06-11'),
(11, '3', '4', '23', '[{\"itemCode\":\"M/S231 KIT\",\"sales\":\"Sand density cone apparatus\",\"issueQty\":\"2\",\"serialNumber\":\"#8723\",\"dispatchedDate\":\"2019-06-12\"}]', '2019-06-12'),
(12, '1', '2', '3', '[{\"itemCode\":\"M/S212-01\",\"sales\":\"S212-01 Penetration Piston\",\"issueQty\":\"3\",\"serialNumber\":\"#345\",\"dispatchedDate\":\"2019-06-12\"},{\"itemCode\":\"M/S212-03\",\"sales\":\"S212-03 Dial Gauge Holder\",\"issueQty\":\"4\",\"serialNumber\":\"#dsgs\",\"dispatchedDate\":\"2019-06-12\"}]', '2019-06-12'),
(13, '1', '2', '3', '[{\"itemCode\":\"M/S212-01\",\"sales\":\"S212-01 Penetration Piston\",\"issueQty\":\"3\",\"serialNumber\":\"#345\",\"dispatchedDate\":\"2019-06-12\"}]', '2019-06-12'),
(14, '1', '2', '3', '[{\"itemCode\":\"M/B033-01\",\"sales\":\"B033-01 Automatic Marshall Compactor For\",\"issueQty\":\"1\",\"serialNumber\":\"@w45\",\"dispatchedDate\":\"2019-06-12\"}]', '2019-06-12'),
(15, '2', '3', '324', '[{\"itemCode\":\"M/B033-01\",\"sales\":\"B033-01 Automatic Marshall Compactor For\",\"issueQty\":\"42\",\"serialNumber\":\"23\",\"dispatchedDate\":\"2019-06-12\"}]', '2019-06-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aodManual`
--
ALTER TABLE `aodManual`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aodManual`
--
ALTER TABLE `aodManual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
