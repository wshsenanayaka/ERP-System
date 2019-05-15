-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 15, 2019 at 05:01 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bhoomitechdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountinfor`
--

CREATE TABLE `accountinfor` (
  `id` int(11) NOT NULL,
  `companyid` int(20) NOT NULL,
  `bankname` varchar(100) NOT NULL,
  `accountno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accountinfor`
--

INSERT INTO `accountinfor` (`id`, `companyid`, `bankname`, `accountno`) VALUES
(1, 1, 'Sampath', '453657');

-- --------------------------------------------------------

--
-- Table structure for table `aodinfor`
--

CREATE TABLE `aodinfor` (
  `aod_no` int(11) NOT NULL,
  `po_number` int(200) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `customer_orderno` varchar(200) NOT NULL,
  `aodsite` varchar(200) NOT NULL,
  `create_by` varchar(200) NOT NULL,
  `create_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aodinfor`
--

INSERT INTO `aodinfor` (`aod_no`, `po_number`, `customer_name`, `customer_orderno`, `aodsite`, `create_by`, `create_date`) VALUES
(2, 3, 'Buddika', 'S', 'AA', 'admin@gmail.com', '0000-00-00'),
(3, 6, 'Hasitha', '4657834EDC', 'YY', 'admin@gmail.com', '0000-00-00'),
(4, 7, 'Buddika', '12123', 'AA', 'admin@gmail.com', '0000-00-00'),
(5, 6, 'Hasitha', '4657834EDC', 'YY', 'admin@gmail.com', '0000-00-00'),
(6, 6, 'Hasitha', '4657834EDC', 'YY', 'admin@gmail.com', '0000-00-00'),
(7, 4, 'Hasitha', '1', 'YY', 'admin@gmail.com', '0000-00-00'),
(8, 3, '', '', '', 'Admin@gmail.com', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `aodManual`
--

CREATE TABLE `aodManual` (
  `id` int(11) NOT NULL,
  `no` varchar(1200) NOT NULL,
  `date` varchar(1200) NOT NULL,
  `customerName` varchar(1200) NOT NULL,
  `salesDisc` varchar(1200) NOT NULL,
  `description` varchar(1200) NOT NULL,
  `quantity` varchar(1200) NOT NULL,
  `createDate` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aodManual`
--

INSERT INTO `aodManual` (`id`, `no`, `date`, `customerName`, `salesDisc`, `description`, `quantity`, `createDate`) VALUES
(1, '3', '2019-03-08', 'TestE', 'Triple Beam Balance MB2610', 'Triple Beam Balance MB2610', '1', '2019-03-08 (11:00:13)');

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

-- --------------------------------------------------------

--
-- Table structure for table `caddsiteinfor`
--

CREATE TABLE `caddsiteinfor` (
  `id` int(11) NOT NULL,
  `cusno` int(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `site` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caddsiteinfor`
--

INSERT INTO `caddsiteinfor` (`id`, `cusno`, `address`, `site`) VALUES
(1, 1, 'Test1', 'Site1'),
(2, 1, 'Test2', 'Site2'),
(4, 2, 'AAAA', 'SSS');

-- --------------------------------------------------------

--
-- Table structure for table `categoryreportinfor`
--

CREATE TABLE `categoryreportinfor` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `col` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categoryreportinfor`
--

INSERT INTO `categoryreportinfor` (`id`, `title`, `col`) VALUES
(1, 'CR', '{\"rcategory\":\"Labs\"}');

-- --------------------------------------------------------

--
-- Table structure for table `companyinfor`
--

CREATE TABLE `companyinfor` (
  `id` int(11) NOT NULL,
  `company` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companyinfor`
--

INSERT INTO `companyinfor` (`id`, `company`, `designation`) VALUES
(5, 'BHOOMI TECH PVT LTD', 'DFAF'),
(7, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', '02'),
(8, 'BHOOMI-TECH (PVT) LTD', '01'),
(9, 'GRAKK COMPUTER FORMS PVT LTD', '03');

-- --------------------------------------------------------

--
-- Table structure for table `customerinfor`
--

CREATE TABLE `customerinfor` (
  `cid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerinfor`
--

INSERT INTO `customerinfor` (`cid`, `name`, `phone`, `email`, `reg_date`) VALUES
(1, 'TestE', 717898699, 'test@gmail.com', '2018-01-26'),
(3, 'zczx', 0, '2@gmail.com', '2019-03-25');

-- --------------------------------------------------------

--
-- Table structure for table `defaultadd`
--

CREATE TABLE `defaultadd` (
  `id` int(11) DEFAULT NULL,
  `bs` decimal(16,2) NOT NULL,
  `fbs` date DEFAULT NULL,
  `tbs` date DEFAULT NULL,
  `ba` decimal(16,2) NOT NULL,
  `fba` date DEFAULT NULL,
  `tba` date DEFAULT NULL,
  `mm` decimal(16,2) NOT NULL,
  `fmm` date DEFAULT NULL,
  `tmm` date DEFAULT NULL,
  `trv` decimal(16,2) NOT NULL,
  `ftrv` date DEFAULT NULL,
  `ttrv` date DEFAULT NULL,
  `acco` decimal(16,2) NOT NULL,
  `facco` date DEFAULT NULL,
  `tacco` date DEFAULT NULL,
  `add1` decimal(16,2) NOT NULL,
  `fadd1` date DEFAULT NULL,
  `tadd1` date DEFAULT NULL,
  `add2` decimal(16,2) NOT NULL,
  `fadd2` date DEFAULT NULL,
  `tadd2` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `defaultadd`
--

INSERT INTO `defaultadd` (`id`, `bs`, `fbs`, `tbs`, `ba`, `fba`, `tba`, `mm`, `fmm`, `tmm`, `trv`, `ftrv`, `ttrv`, `acco`, `facco`, `tacco`, `add1`, `fadd1`, `tadd1`, `add2`, `fadd2`, `tadd2`) VALUES
(0, '500.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL),
(6, '5000.00', '2018-06-01', '2018-12-31', '27.00', '2018-06-01', '2018-12-31', '5.00', '2018-06-01', '2018-12-31', '2.00', '2018-06-01', '2018-12-31', '22.00', '2018-06-01', '2018-12-31', '11.00', '2018-06-01', '2018-12-31', '11.00', '2018-06-01', '2018-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `defaultded`
--

CREATE TABLE `defaultded` (
  `id` int(11) DEFAULT NULL,
  `epf` decimal(16,2) NOT NULL,
  `fepf` date DEFAULT NULL,
  `tepf` date DEFAULT NULL,
  `sa` decimal(16,2) NOT NULL,
  `fsa` date DEFAULT NULL,
  `tsa` date DEFAULT NULL,
  `sl` decimal(16,2) NOT NULL,
  `fsl` date DEFAULT NULL,
  `tsl` date DEFAULT NULL,
  `ded1` decimal(16,2) NOT NULL,
  `fded1` date DEFAULT NULL,
  `tded1` date DEFAULT NULL,
  `ded2` decimal(16,2) NOT NULL,
  `fded2` date DEFAULT NULL,
  `tded2` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `defaultded`
--

INSERT INTO `defaultded` (`id`, `epf`, `fepf`, `tepf`, `sa`, `fsa`, `tsa`, `sl`, `fsl`, `tsl`, `ded1`, `fded1`, `tded1`, `ded2`, `fded2`, `tded2`) VALUES
(0, '12.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL),
(6, '12.00', '2018-06-01', '2018-12-31', '22.00', '2018-06-01', '2018-12-31', '11.00', '2018-06-01', '2018-12-31', '333.00', '2018-06-01', '2018-12-31', '44.00', '2018-06-01', '2018-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `departmentinfor`
--

CREATE TABLE `departmentinfor` (
  `id` int(11) NOT NULL,
  `departmentname` varchar(100) NOT NULL,
  `companyid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departmentinfor`
--

INSERT INTO `departmentinfor` (`id`, `departmentname`, `companyid`) VALUES
(1, 'DE1', 2),
(2, 'DD', 1),
(3, 'bvnv', 1);

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

-- --------------------------------------------------------

--
-- Table structure for table `employeeinfor`
--

CREATE TABLE `employeeinfor` (
  `id` int(11) NOT NULL,
  `company` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `othername` varchar(100) NOT NULL,
  `caddress` varchar(150) NOT NULL,
  `paddress` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` int(10) NOT NULL,
  `mobile` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `accno` varchar(50) NOT NULL,
  `bank` varchar(70) NOT NULL,
  `barnch` varchar(70) NOT NULL,
  `nation` varchar(50) NOT NULL,
  `pno` varchar(50) NOT NULL,
  `nic` varchar(50) NOT NULL,
  `bod` date NOT NULL,
  `empno` varchar(50) NOT NULL,
  `emptype` varchar(50) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `epfno` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `doj` date NOT NULL,
  `srm` varchar(50) NOT NULL,
  `packageid` int(11) NOT NULL,
  `addtion` double(16,2) NOT NULL,
  `dedion` double(16,2) NOT NULL,
  `etfval` double(16,2) NOT NULL,
  `epfval` double(16,2) NOT NULL,
  `netsal` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `createdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeeinfor`
--

INSERT INTO `employeeinfor` (`id`, `company`, `firstname`, `lastname`, `othername`, `caddress`, `paddress`, `email`, `telephone`, `mobile`, `gender`, `accno`, `bank`, `barnch`, `nation`, `pno`, `nic`, `bod`, `empno`, `emptype`, `designation`, `epfno`, `department`, `doj`, `srm`, `packageid`, `addtion`, `dedion`, `etfval`, `epfval`, `netsal`, `status`, `createdate`) VALUES
(6, 'BHOOMI TECH PVT LTD', 'Buddilka', 'charith', 'peris', 'Mat vv   ', '     Aat', 'test@gmail.com', 717898699, 717898699, 'Male', 'Acc1422', 'Test', 'YYY', 'GGGH', 'GGG', '932961687v', '2018-03-06', '546452', 'Prament', 'Qs Fileed', 'TT12', 'DE1', '2018-03-07', 'Bank Acc', 3, 20000.00, 0.00, 1600.00, 1600.00, '18400', 'Approved', '2018-03-01'),
(7, 'BHOOMI TECH PVT LTD', 'W.A.D.', 'NUWAN', 'NISHANTHA', ' No. 96/1 A, Hadigama, Piliyandala.', '   No. 96/1 A, Hadigama, Piliyandala.', 'SERVICE@BHOOMITCH.COM', -1, 773596070, 'Male', '101953116006', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '792713920V', '1979-09-27', 'B1', 'Prament', '01', '2', 'DD', '1999-10-01', 'Bank Acc', 3, 80000.00, 0.00, 6400.00, 6400.00, '73600', 'Approved', '2018-03-14'),
(8, 'BHOOMI TECH PVT LTD', 'Y.M.B.L.', 'KUMARA', 'YAPA', '\\\"Sirisewana\\\" Kapallewela, Kandegedara, Hali-Ella.   ', '\\\"Sirisewana\\\" Kapallewela, Kandegedara, Hali-Ella.   ', 'TEST@BHOOMITECH.COM', 552294786, 775469029, 'Male', '119257072027', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '791910048V', '1979-07-09', 'B2', 'Prament', '01', '4', 'DD', '2001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-14'),
(9, 'BHOOMI TECH PVT LTD', 'G.L.S.', 'AMARA', 'PERERA', ' No.506, Wadakadaura road, Dalupotha, Negambo.   ', '    No.506, Wadakadaura road, Dalupotha, Negambo.', 'TEST@BH00MITECH.COM', 314870540, 773596072, 'Male', '0', 'CASH', 'BHOOMITECH', 'SRILANKAN', '', '860710200V', '1986-03-11', 'B3', 'Prament', '01', '11', 'DD', '2007-04-01', 'Cash', 0, 77500.00, 0.00, 540.00, 1440.00, '75520', 'Approved', '2018-03-14'),
(10, 'BHOOMI TECH PVT LTD', 'S.R.S.', 'PRASAD', 'SILVA', ' No. 40, Railway Lane, Kaluthara-North.  ', '   No. 40, Railway Lane, Kaluthara-North.', 'TEST@BHOOMITECH.COM', 114934182, 773596071, 'Male', '121057246389', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '832270725 V', '1983-08-14', 'B4', 'Prament', '01', '14', 'DD', '2008-07-01', 'Bank Acc', 0, 47500.00, 0.00, 540.00, 2160.00, '44800', 'Approved', '2018-03-14'),
(11, 'BHOOMI TECH PVT LTD', 'W.G.', 'JANAKA', 'WICKRAMAGE', ' No. 28/1 Gagasirigama, Atabage. ', '  No. 28/1 Gagasirigama, Atabage.', 'TEST@BHOOMITECH.COM', -1, 719504630, 'Male', '121057231703', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '872022473V', '1987-07-20', 'B5', 'Prament', '01', '17', 'DD', '2009-04-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-14'),
(12, 'BHOOMI TECH PVT LTD', 'J.A.', 'PRASANNA', 'SANJEEWA', 'No. 39/E, Horana Road, Honnanthara south, Piliyandala. ', '  No. 39/E, Horana Road, Honnanthara south, Piliyandala.', 'TEST@BHOOMITECH.COM', -1, 773596073, 'Male', '121057336759', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '791844924V', '1979-07-02', 'B6', 'Prament', '01', '20', 'DD', '2010-06-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-14'),
(13, 'BHOOMI TECH PVT LTD', 'S.', 'USOOF', '-', ' No. 216, Mijindupura, Kandapola. ', ' No. 216, Mijindupura, Kandapola. ', 'TEST@BHOOMITECH.COM', -1, 713349396, 'Female', '121057341905', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '788142706V', '1978-11-09', 'B7', 'Prament', '01', '23', 'DD', '2010-06-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-14'),
(14, 'BHOOMI TECH PVT LTD', 'H.A.', 'PRASANNA', 'FERNANDO', 'No. 512/D, Ulpatha Kumbura, Ragama. ', ' No. 512/D, Ulpatha Kumbura, Ragama.', 'TEST@BHOOMITECH.COM', -1, 777411970, 'Male', '101753746368', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '861041158V', '1986-04-13', 'B9', 'Prament', '01', '26', 'DD', '2011-11-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-14'),
(15, 'BHOOMI TECH PVT LTD', 'B.L.', 'SUDATH', 'MENDIS', ' No.10/4, Robert Road, Dehiwala. ', ' No.10/4, Robert Road, Dehiwala. ', 'TEST@BHOOMITECH.COM', -1, 775347456, 'Male', '121057097686', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '633300283V', '1963-11-25', 'B10', 'Prament', '01', '27', 'DD', '2012-03-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-14'),
(16, 'BHOOMI TECH PVT LTD', 'T.', 'HASSAN', 'PUTHRA', ' No. 609/21, Biyagama road, Pethiyagoda, Kelaniya. ', '  No. 609/21, Biyagama road, Pethiyagoda, Kelaniya.', 'TEST@BHOOMITECH.COM', -1, 773596074, 'Male', '121054625922', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '832922889V', '1983-10-18', 'B11', 'Prament', '01', '28', 'DD', '2012-03-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-14'),
(17, 'BHOOMI TECH PVT LTD', 'A.M.D.T.', 'DANUSHKA', 'GUNAWARDENA', ' No. 529, Mild post road, Werahera, Boralesgamuwa.  ', '  No. 529, Mild post road, Werahera, Boralesgamuwa. ', 'TEST@BHOOMITECH.COM', 115715447, 759550317, 'Male', '121057336786', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '873521988V', '1987-12-17', 'B12', 'Prament', '01', '29', 'DD', '2012-03-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-14'),
(18, 'BHOOMI TECH PVT LTD', 'D.D.A.', 'SANJEEWA', 'WICKRAMARATHNA', ' No.71, 6th Lane, Rawatha watta, Moratuwa.  ', '   No.71, 6th Lane, Rawatha watta, Moratuwa.', 'TEST@BHOOMITECH.COM', 112568076, 776221348, 'Male', '121057336983', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '780512911V', '1978-02-20', 'B13', 'Prament', '01', '33', 'DD', '2012-05-01', 'Bank Acc', 1, 50500.00, 0.00, 4000.00, 6000.00, '44500', 'Approved', '2018-03-14'),
(19, 'BHOOMI TECH PVT LTD', 'A.A.', 'PRIYANKARA', 'DE SILVA', ' Kudawaskaduwa, Waskaduwa.  ', '   Kudawaskaduwa, Waskaduwa.', 'TEST@BHOOMITECH.COM', -1, 770133784, 'Male', '102654364671', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '792533132V', '1979-08-09', 'B14', 'Prament', '01', '35', 'DD', '2014-03-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-14'),
(20, 'BHOOMI TECH PVT LTD', 'R.P.R.', 'MANGALIKA', 'SENEVIRATHNA', ' No. 36/6, Mangala Road, Dehiwala.  ', '   No. 36/6, Mangala Road, Dehiwala.', 'TEST@BHOOMITECH.COM', 112719383, 774416721, 'Female', '0', 'CASH', 'BHOOMITECH', 'SRILANKAN', '', '608412123V', '1960-12-06', 'B15', 'Prament', '01', '36', 'DD', '2014-10-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-14'),
(21, 'BHOOMI TECH PVT LTD', 'M.', 'SAMEERA', '-', ' Masdeniyahena, Hasaraligama, Urubokka. ', '  Masdeniyahena, Hasaraligama, Urubokka.', 'TEST@BHOOMITECH.COM', -1, 776209668, 'Male', '121057336709', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '900514271V', '1990-02-20', 'B16', 'Prament', '01', '38', 'DD', '2014-10-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-14'),
(22, 'BHOOMI TECH PVT LTD', 'H.E.', 'SACHINI', 'SAMUDIKA', ' No.156, Devala Road, Maharagama. ', '  No.156, Devala Road, Maharagama.', 'TEST@BHOOMITECH.COM', -1, 756029754, 'Female', '109257143443', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '927190800 V', '1992-08-06', 'B17', 'Prament', '01', '40', 'DD', '2014-10-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-14'),
(23, 'BHOOMI TECH PVT LTD', 'S.', 'KRISHNA', 'BAWAN', 'Thudugalwatta,Rathnapura.  ', '  Thudugalwatta,Rathnapura.', 'TEST@BHOOMITECH.COM', -1, 771133537, 'Male', '119357421105', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '523332856V', '1952-11-28', 'B18', 'Prament', '01', '43', 'DD', '2014-10-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-14'),
(24, 'BHOOMI TECH PVT LTD', 'G.G.', 'DILUKI', 'UMESHA', ' No.269/1B, Main road, Attidiya, Dehiwala. ', ' No.269/1B, Main road, Attidiya, Dehiwala. ', 'TEST@BHOOMITECH.COM', -1, 719778992, 'Female', '121057336671', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '945822678V', '1994-03-22', 'B19', 'Prament', '01', '44', 'DD', '2014-10-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-14'),
(25, 'BHOOMI TECH PVT LTD', 'I.J.', 'ARUNA', 'SIRIWARDANE', ' No.80, Kurunduwatta road, Pitakotte. ', '  No.80, Kurunduwatta road, Pitakotte.', 'TEST@BHOOMITECH.COM', 112877868, 777142151, 'Male', '121057293929', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '680143153V', '1968-09-14', 'B20', 'Prament', '01', '46', 'DD', '2015-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-14'),
(26, 'BHOOMI TECH PVT LTD', 'J.', 'MACDONALD', 'JAMES', ' No: 222, Koralawella. ', '  No: 222, Koralawella.', 'TEST@BHOOMITECH.COM', -1, 723870414, 'Male', '0', 'CASH', 'BHOOMITECH', 'SRILANKAN', '', '612480907V', '1961-09-04', 'B22', 'Prament', '01', '50', 'DD', '2015-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-14'),
(27, 'BHOOMI TECH PVT LTD', 'W.', 'RANJITH', 'SILVA', ' No: 72/3, Samagi Mawatha, Kawdana road, Dehiwala. ', '  No: 72/3, Samagi Mawatha, Kawdana road, Dehiwala.', 'TEST@BHOOMITECH.COM', -1, 788915367, 'Male', '0', 'CASH', 'BHOOMITECH', 'SRILANKAN', '', '722091183V', '1972-07-27', 'B23', 'Prament', '01', '51', 'DD', '2015-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-14'),
(28, 'BHOOMI TECH PVT LTD', 'M.D.', 'SASIKA', 'GUNATHILAKA', ' Yatawara Junction, Kaluthara. ', ' Yatawara Junction, Kaluthara. ', 'TEST@BHOOMITECH.COM', 343021138, 714622431, 'Male', '102654636358', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '911150212V', '1991-04-24', 'B24', 'Prament', '01', '55', 'DD', '2015-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-14'),
(29, 'BHOOMI TECH PVT LTD', 'K.', 'SUJEEWA', 'BADDEVITHANA', ' Wethewa, Mathugama, Kaluthara. ', '  Wethewa, Mathugama, Kaluthara.', 'TEST@BHOOMITECH.COM', -1, 773558160, 'Male', '100554200789', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '820071360V', '1982-01-07', 'B25', 'Prament', '01', '56', 'DD', '2015-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-14'),
(30, 'BHOOMI TECH PVT LTD', 'R.M.', 'HASHAN', 'DILANTHA', ' No.41/3, Rohini Road, Nedimala, Dehiwala. ', '  No.41/3, Rohini Road, Nedimala, Dehiwala.', 'TEST@BHOOMITECH.COM', -1, 767933510, 'Male', '121057336953', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '922933510V', '1992-10-19', 'B27', 'Prament', '01', '57', 'DD', '2016-06-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-14'),
(31, 'BHOOMI TECH PVT LTD', 'U', 'VAITHEGI', '-', ' No. 05,Lane11, Peeliyadi, Kanniya, Trincomalee.   ', '    No. 05,Lane11, Peeliyadi, Kanniya, Trincomalee.', 'TEST@BHOOMITECH.COM', -1, 779590133, 'Female', '121057113425', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '857411455V', '1985-08-28', 'B28', 'Prament', '01', '58', 'DD', '2016-06-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-14'),
(32, 'BHOOMI TECH PVT LTD', 'S.', 'KUMARA', 'VITHARANA', ' No.53, 1st stage, Badovita, Mount Lavinia. ', '  No.53, 1st stage, Badovita, Mount Lavinia.', 'TEST@BHOOMITECH.COM', -1, 756541120, 'Male', '101754564118', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '930801356V', '1993-03-20', 'B29', 'Prament', '01', '59', 'DD', '2016-07-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-14'),
(33, 'BHOOMI TECH PVT LTD', 'G.S.', 'RAJ', 'WIJESOORIYA', ' No. 57, Vilpotha, Chilaw. ', '  No. 57, Vilpotha, Chilaw.', 'TEST@BHOOMITECH.COM', -1, 756919136, 'Male', '121057169724', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '941910483V', '1994-07-09', 'B30', 'Prament', '01', '62', 'DD', '2016-07-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-15'),
(34, 'BHOOMI TECH PVT LTD', 'P.D.T.', 'MADUSHANKA', 'PREMARATHNE', ' Manana, Bombuwala, Kaluthara. ', '  Manana, Bombuwala, Kaluthara.', 'TEST@BHOOMITECH.COM', 345670032, 718342963, 'Male', '121057328197', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '892010137V', '1989-07-09', 'B31', 'Prament', '01', '63', 'DD', '2016-07-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-15'),
(35, 'BHOOMI TECH PVT LTD', 'M.A.', 'PRADEEP', 'KUMARA', 'No: 05th stage, Badovita, Mount Lavinia. ', '  No: 05th stage, Badovita, Mount Lavinia.', 'TEST@BHOOMITECH.COM', -1, 723682961, 'Male', '121057336824', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '871652031V', '1987-06-13', 'B32', 'Prament', '01', '64', 'DD', '2016-07-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-15'),
(36, 'BHOOMI TECH PVT LTD', 'M.D.', 'NAVODYA', 'GAMAGE', ' No. 109/L , Pokuna road, Walapola, Panadura. ', '  No. 109/L , Pokuna road, Walapola, Panadura.', 'TEST@BHOOMITECH.COM', -1, 718921232, 'Female', '121057048400', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '945742208V', '1994-03-14', 'B33', 'Prament', '01', '65', 'DD', '2016-07-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-15'),
(37, 'BHOOMI TECH PVT LTD', 'P.L.', 'MADURANGA', 'WICKRAMASINGHE', ' Stoffil State, Delpitiya , Gampola. ', ' Stoffil State, Delpitiya , Gampola. ', 'TEST@BHOOMITECH.COM', -1, 766439325, 'Male', '104854960544', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '971072431V', '1997-04-16', 'B35', 'Prament', '01', '66', 'DD', '2017-02-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-15'),
(38, 'BHOOMI TECH PVT LTD', 'W.K.B.B.J', 'ERAN', 'FERNANDO', ' No.12, Alokapitiya Road, Moratumulla, Moratuwa. ', '  No.12, Alokapitiya Road, Moratumulla, Moratuwa.', 'TEST@BHOOMITECH.COM', 342227031, 712738614, 'Male', '121057342242', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '741161664V', '1974-04-25', 'B36', 'Prament', '01', '67', 'DD', '2017-02-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-15'),
(39, 'BHOOMI TECH PVT LTD', 'V.D.', 'HASHINTHA', 'MEL', ' No, 5/17, Sirisangabo road, Kawdana, Dehiwala. ', '  No, 5/17, Sirisangabo road, Kawdana, Dehiwala.', 'TEST@BHOOMITECH.COM', 112736336, 786983497, 'Male', '121057273808', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '951182613V', '1995-04-27', 'B37', 'Prament', '01', '68', 'DD', '2017-02-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-15'),
(40, 'BHOOMI TECH PVT LTD', 'P.C.', 'MADUSANKA', 'WICKRAMASINGHE', ' Delpitiya, Atabage. ', '  Delpitiya, Atabage.', 'TEST@BHOOMITECH.COM', -1, 788596437, 'Male', '121057336925', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '910531328V', '1991-02-22', 'B38', 'Prament', '01', '69', 'DD', '2017-02-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-15'),
(41, 'BHOOMI TECH PVT LTD', 'B.', 'IMARA', 'RASANTHI', ' No: 25/11, Vijitha Road, Nedimala, Dehiwala. ', '  No: 25/11, Vijitha Road, Nedimala, Dehiwala.', 'TEST@BHOOMITECH.COM', -1, 755755133, 'Female', '121057336657', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '915351506V', '1991-02-04', 'B39', 'Prament', '01', '70', 'DD', '2017-02-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-15'),
(42, 'BHOOMI TECH PVT LTD', 'M.D.D.', 'ERANGA', 'GUNATHILAKA', ' No,3A, Parakum Mawatha,Minuwanpitiya, Panadura. ', '  No,3A, Parakum Mawatha,Minuwanpitiya, Panadura.', 'TEST@BHOOMITECH.COM', -1, 716353937, 'Male', '121057330971', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '821620147V', '1983-06-10', 'B40', 'Prament', '01', '71', 'DD', '2017-02-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-15'),
(43, 'BHOOMI TECH PVT LTD', 'H.R.', 'NISHANTHA', 'KUMARASIRI', ' Westgalle state, Kothmale. ', ' Westgalle state, Kothmale. ', 'TEST@BHOOMITECH.COM', -1, 776743574, 'Male', '0', 'CASH', 'BHOOMITECH', 'SRILANKAN', '', '682291737V', '1968-08-16', 'B41', 'Prament', '01', '72', 'DD', '2017-02-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-15'),
(44, 'BHOOMI TECH PVT LTD', 'P.R.M.I.', 'CHAMARA', 'RAJAPAKSE', ' 110/C, 7th Lane ,Pamunuwa, Maharagama. ', '  110/C, 7th Lane ,Pamunuwa, Maharagama.', 'TEST@BHOOMITECH.COM', 112850885, 771674952, 'Male', '121057330974', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '830123164V', '1983-01-12', 'B42', 'Prament', '01', '73', 'DD', '2017-04-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-15'),
(45, 'BHOOMI TECH PVT LTD', 'K.G.', 'CHANNA', 'KUMARA', ' No. 7/27, Rathnayake road, Sanath perera mw, Thalpitiya- south, Wadduwa. ', '  No. 7/27, Rathnayake road, Sanath perera mw, Thalpitiya- south, Wadduwa.', 'TEST@BHOOMITECH.COM', -1, 786334646, 'Male', '121057456198', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '921482280V', '1992-05-27', 'B46', 'Prament', '01', '74', 'DD', '2016-07-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-15'),
(46, 'BHOOMI TECH PVT LTD', 'C.', 'JAYANATH', 'MALAVIPATHIRANA', ' No. 33 E/2, Hadigama, Piliyandala. ', '  No. 33 E/2, Hadigama, Piliyandala.', 'TEST@BHOOMITECH.COM', -1, 770542666, 'Male', '121057205947', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '663481550V', '1966-12-13', 'B34', 'Prament', '01', '106', 'DD', '2016-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-15'),
(47, 'BHOOMI TECH PVT LTD', 'W.', 'DANANJAYA', 'WICKRAMAGE', ' No. 28/1, Gagasirigama, Delpitiya, Atabage. ', '  No. 28/1, Gagasirigama, Delpitiya, Atabage.', 'TEST@BHOOMITECH.COM', -1, 711310808, 'Male', '121054891908', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '92232105V', '1992-08-19', 'B45', 'Prament', '01', '78', 'DD', '2012-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-15'),
(48, 'BHOOMI TECH PVT LTD', 'G.', 'SIVA', 'PRAKASH', 'No. Mohamadi Watta, (Upper Perattuwa), Baduraliya.   ', '   No. Mohamadi Watta, (Upper Perattuwa), Baduraliya.', 'TEST@BHOOMITECH.COM', -1, 775527235, 'Male', '121057432356', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '962362664V', '1996-08-23', 'B44', 'Prament', '01', '59', 'DD', '2017-02-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-15'),
(49, 'BHOOMI TECH PVT LTD', 'J.K.A.', 'RANJITH', 'THILAKARATHNE', ' No. 176/2, Hill Street Dehiwala. ', '  No. 176/2, Hill Street Dehiwala.', 'TEST@BHOOMITECH.COM', 112719739, 777218745, 'Male', '0', 'CASH', 'BHOOMITECH', 'SRILANKAN', '', '580890474V', '1958-03-29', 'BN3', 'Prament', '01', 'N EPF', 'DD', '2012-02-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-16'),
(50, 'BHOOMI TECH PVT LTD', 'P.D.S.', 'VINOD', 'KUMARA', 'No.97/1, Jayasewana Mawatha, Kalubowila. ', ' No.97/1, Jayasewana Mawatha, Kalubowila.', 'TEST@BHOOMITECH.COM', -1, 782418639, 'Male', '0', 'CASH', 'BHOOMITECH', 'SRILANKAN', '', '923633456V', '1992-12-28', 'B26', 'Prament', '01', '34', 'DD', '2010-05-05', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-16'),
(51, 'BHOOMI TECH PVT LTD', 'L.', 'THIMIRA', 'HIMIDIRI', ' No. 354, Kuleegoda, Ambalangoda. ', ' No. 354, Kuleegoda, Ambalangoda. ', 'TEST@BHOOMITECH.COM', -1, 775040458, 'Female', '107253590629', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '917140057V', '1993-08-01', 'BN11', 'Prament', '01', 'N EPF', 'DD', '2017-03-14', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-16'),
(52, 'BHOOMI TECH PVT LTD', 'T.', 'SANJU', 'DILSHAN', ' No. 14, Balika Vidyalaya Rd, Panaduara. ', '  No. 14, Balika Vidyalaya Rd, Panaduara.', 'TEST@BHOOMITECH.COM', 382284197, 702782687, 'Male', '121057431247', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '943651000V', '1994-12-30', 'BN16', 'Prament', '01', 'N EPF', 'DD', '2017-05-15', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-16'),
(53, 'BHOOMI TECH PVT LTD', 'W.K.', 'LAKSIRI', 'BANDA', 'No.124/A 1, Pallegamuwa, Atabage. ', ' No.124/A 1, Pallegamuwa, Atabage.', 'TEST@BHOOMITECH.COM', -1, 758267852, 'Male', '0', 'CASH', 'BHOOMITECH', 'SRILANKAN', '', '981001621V', '1998-04-09', 'BN28', 'Prament', '01', 'N EPF', 'DD', '2017-10-23', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-16'),
(54, 'BHOOMI TECH PVT LTD', 'D.', 'PETER', 'PRERA', ' No. 260/3, weththawa road, Seeduwa North, Seeduwa ', '  No. 260/3, weththawa road, Seeduwa North, Seeduwa', 'TEST@BHOOMITECH.COM', -1, -1, 'Male', '0', 'CASH', 'BHOOMITECH', 'SRILANKAN', '', '472923692V', '1947-10-18', 'BN5', 'Prament', '01', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-22'),
(55, 'BHOOMI TECH PVT LTD', 'K.N.', 'SALIYA', 'PERERA', ' Ni.10, 1st Lane, Medawelikada, Rajagiriya', ' Ni.10, 1st Lane, Medawelikada, Rajagiriya', 'TEST@BHOOMITECH.COM', -1, 711679345, 'Male', '121057550267', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '592521415V', '1959-09-08', 'BN6', 'Prament', '01', 'N EPF', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-22'),
(56, 'BHOOMI TECH PVT LTD', 'R.M.', 'NIMAL', 'PUSHPAKUMARA', ' Gamini peiris, No 02, Heeloya Road, Kinigama, Bandarawela', 'Gamini peiris, No 02, Heeloya Road, Kinigama, Bandarawela ', 'TEST@BHOOMITECH.COM', 573572018, 775273485, 'Male', '121057336747', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '720542005V', '1971-02-23', 'BN9', 'Prament', '01', 'N EPF', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-22'),
(57, 'BHOOMI TECH PVT LTD', 'M.', 'RANUKA', 'SHYAMAL', ' No. 300/2/C, Mahara Prison Road, Ragama', ' No. 300/2/C, Mahara Prison Road, Ragama', 'TEST@BHOOMITECH.COM', -1, 772647773, 'Male', '121057458390', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '841261038V', '1984-05-05', 'BN12', 'Prament', '01', 'N EPF', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-22'),
(58, 'BHOOMI TECH PVT LTD', 'K.H.', 'HESHAN', 'PERERA', ' No. 270/B/4, Madupitiya, Panadura', 'No. 270/B/4, Madupitiya, Panadura ', 'TEST@BHOOMITECH.COM', -1, 754440904, 'Male', '121057432486', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '970791566V', '1997-03-19', 'BN13', 'Prament', '01', 'N EPF', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-22'),
(59, 'BHOOMI TECH PVT LTD', 'R.W.B.S.', 'SANTHUSHKA', 'WICKRAMATHILAKA', 'No. 82, Waduramulla Watta, Panadura', ' No. 82, Waduramulla Watta, Panadura', 'TEST@BHOOMITECH.COM', -1, 756253701, 'Male', '0', 'CASH', 'BHOOMITECH', 'SRILANKAN', '', '200016103362(V)', '2000-06-09', 'BN15', 'Prament', '01', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-22'),
(60, 'BHOOMI TECH PVT LTD', 'R.A.D.', 'SUBASHINI', 'SAMARASINGHE', ' No.34/D, Newcity, Rerukana Road, Weedagama, Bandaragama', ' No.34/D, Newcity, Rerukana Road, Weedagama, Bandaragama', 'TEST@BHOOMITECH.COM', 382289311, 716010754, 'Female', '121057431257', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', 'NNN', '1994-06-02', 'BN17', 'Prament', '01', 'N EPF', 'DD', '2017-05-15', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-22'),
(61, 'BHOOMI TECH PVT LTD', 'K.J.A.', 'PRIYADARSHANA', 'DE SILVA', ' No. 41, Kurunduwatta road, Wathugedara, Ambalangoda', ' No. 41, Kurunduwatta road, Wathugedara, Ambalangoda', 'TEST@BHOOMITECH.COM', -1, 777237247, 'Male', '121057434801', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '662950190V', '1966-10-21', 'BN18', 'Prament', '01', 'N EPF', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-22'),
(62, 'BHOOMI TECH PVT LTD', 'W.S.', 'LAKSHAN', 'DISSANAYAKE', ' No.14, Police Quarters, Mount Lavinia', ' No.14, Police Quarters, Mount Lavinia', 'TEST@BHOOMITECH.COM', -1, 712358285, 'Male', '121057432481', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '912790312V', '1991-10-05', 'BN19', 'Prament', '01', 'N EPF', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-22'),
(63, 'BHOOMI TECH PVT LTD', 'T.', 'UDITHA', 'KUMARA', ' No.112, Sri Saranankara Road, Dehiwala', ' No.112, Sri Saranankara Road, Dehiwala', 'TEST@BHOOMITECH.COM', -1, 766254475, 'Male', '121057431260', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '821315379V', '1982-05-10', 'BN20', 'Prament', '01', 'N EPF', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-22'),
(64, 'BHOOMI TECH PVT LTD', 'L.', 'HIRANTHA', 'CHANDRASENA', ' No. 403/1 B, Bogahawila Road, Kottawa', ' No. 403/1 B, Bogahawila Road, Kottawa', 'TEST@BHOOMITECH.COM', -1, 777396997, 'Male', '121057470016', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '770071232V', '1977-01-07', 'BN25', 'Prament', '01', 'N EPF', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-22'),
(65, 'BHOOMI TECH PVT LTD', 'W.', 'THARINDU', 'DILSHAN', ' Maasdeniyahena, Urubokka,81600', ' Maasdeniyahena, Urubokka,81600', 'TEST@BHOOMITECH.COM', -1, 702812944, 'Male', '0', 'CASH', 'BHOOMITECH', 'SRILANKAN', '', '200022601052 V', '2000-08-13', 'BN27', 'Prament', '01', 'N EPF', 'DD', '2017-10-18', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-22'),
(66, 'BHOOMI TECH PVT LTD', 'K.', 'SHEHARA', 'COORAY', '35/7A, TERRANCE ROAD, MT.LAVINIA.', ' 35/7A, TERRANCE ROAD, MT.LAVINIA.', 'TEST@BHOOMITECH.COM', -1, 758631329, 'Male', '0', 'CASH', 'BHOOMITECH', 'SRILANKAN', '', '200122302352', '2001-08-10', 'BN34', 'Prament', '01', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-22'),
(67, 'BHOOMI TECH PVT LTD', 'W.A.R.S.', 'PERERA', '-', 'NO. 22/10, PRIYARATHNARAMA ROAD, DEHIWALA', ' NO. 22/10, PRIYARATHNARAMA ROAD, DEHIWALA', 'TEST@BHOOMITECH.COM', -1, 779213561, 'Male', '121057547526', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '782281100V', '1978-08-15', 'BN29', 'Prament', '01', 'N EPF', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-22'),
(68, 'BHOOMI TECH PVT LTD', 'H.', 'LAKMAL', '-', ' 20A, GODAMALITHTHA, HIMBILIYAGOLLA, HEWANAKUMBURA', ' 20A, GODAMALITHTHA, HIMBILIYAGOLLA, HEWANAKUMBURA ', 'TEST@BHOOMITECH.COM', -1, 750302075, 'Male', '0', 'CASH', 'BHOOMITECH', 'SRILANKAN', '', '200010804491V', '2000-04-17', 'BN36', 'Prament', '01', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-22'),
(69, 'BHOOMI TECH PVT LTD', 'J.', 'KUMARA', '-', ' YATAGAMPITIYA, BULATHSINHALA, JAYALATHGODA', '  YATAGAMPITIYA, BULATHSINHALA, JAYALATHGODA', 'TEST@BHOOMITECH.COM', -1, 713227478, 'Male', '0', 'CASH', 'BHOOMITECH', 'SRILANKAN', '', '923594299V', '1992-12-24', 'BN35', 'Prament', '01', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-22'),
(70, 'BHOOMI TECH PVT LTD', 'C.', 'SANDEEPA', '-', ' 348, MAHAWATHTHA, ORUBOKKA', ' 348, MAHAWATHTHA, ORUBOKKA', 'TEST@BHOOMITECH.COM', -1, 717700594, 'Male', '0', 'CASH', 'BHOOMITECH', 'SRILANKAN', '', '200033301232', '2000-11-28', 'BN37', 'Prament', '01', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-22'),
(71, 'BHOOMI TECH PVT LTD', 'M.', 'NAWARAGAN', '-', 'GONAKALE WATHTHA, UPPER DIVISION, PASSARA', ' GONAKALE WATHTHA, UPPER DIVISION, PASSARA', 'TEST@BHOOMITECH.COM', -1, 2147483647, 'Male', '0', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '672822670V', '1967-10-08', 'BN38', 'Prament', '01', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-22'),
(72, 'BHOOMI TECH PVT LTD', 'T.D.M.', 'RANGA', 'SAMPATH', ' 555/G, KUDA ARUKGODA, ALUBOMULLA', ' 555/G, KUDA ARUKGODA, ALUBOMULLA ', 'TEST@BHOOMITECH.COM', -1, 719186364, 'Male', '0', 'CASH', 'BHOOMITECH', 'SRILANKAN', '', '862580354V', '1986-09-14', 'BN39', 'Prament', '01', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-22'),
(73, 'BHOOMI TECH PVT LTD', 'M.', 'PALITHA', 'DE COSTA', ' 106, WELLABADA, MADAMPAGAMA, AMABALANGODA', ' 106, WELLABADA, MADAMPAGAMA, AMABALANGODA', 'TEST@BHOOMITECH.COM', -1, 771173939, 'Male', '0', 'CASH', 'BHOOMITECH', 'SRILANKAN', '', '593430529V', '1959-12-08', 'BN40', 'Prament', '01', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-22'),
(74, 'BHOOMI TECH PVT LTD', 'K.D.', 'WICKRAMASINGHE', 'PERERA', ' 284/5D, MALARAMBA ROAD, KOLAMUNNA, PILIYANDALA.', '  284/5D, MALARAMBA ROAD, KOLAMUNNA, PILIYANDALA.', 'TEST@BHOOMITECH.COM', -1, 772975279, 'Male', '121057336935', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '552072812V', '0001-01-01', 'BN2', 'Prament', '01', 'N EPF', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-22'),
(75, 'BHOOMI TECH PVT LTD', 'W.', 'MALINIGE', 'SAMARAKOON', ' 17/5, P.P.PERERA MAWATHA, KOLONNAWA', ' 17/5, P.P.PERERA MAWATHA, KOLONNAWA', 'TEST@BHOOMITECH.COM', -1, 725680956, 'Male', '0', 'CASH', 'BHOOMITECH', 'SRILANKAN', '', '540230803V', '0001-01-01', 'BN4', 'Prament', '01', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-22'),
(76, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'R.M.', 'SUPUN', 'MADUSANKA', 'Muluthukumbura, Hapathgamuwa, Bandarawela  ', '  Muluthukumbura, Hapathgamuwa, Bandarawela', 'TEST@GBDA.COM', 575790267, 717711334, 'Male', '121057471572', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '933483991V', '1993-12-13', 'GS10', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-22'),
(77, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'M.A.L.', 'VIDURA', 'KARUNARATHNA', ' Magama, Devanagala ', ' Magama, Devanagala ', 'TEST@GBDA.COM', -1, 789835174, 'Male', '108454938784', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '1992-04-13', 'GS6', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-22'),
(78, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'B.J.', 'SAMANMALI', 'SILVA', ' No. 35, De Soysa Road, Panadura ', '  No. 35, De Soysa Road, Panadura', 'TEST@GBDA.COM', 382243386, 774246963, 'Female', '102657147289', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '1964-12-07', 'GSN2', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-22'),
(79, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'S.M.L.', 'RADIKA', 'DINURANGI', ' 418/2 A, 10th Mail post road, Werahara, Boralesgamuwa ', '  418/2 A, 10th Mail post road, Werahara, Boralesgamuwa', 'TEST@GBDA.COM', -1, 759954115, 'Female', '121057431376', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '975690300V', '1997-03-09', 'GSN4', 'Prament', '02', 'N EPF', 'DD', '2017-03-22', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-22'),
(80, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'K.G.', 'DILMI', 'HASHARA', ' No. 09, Boruppa, Gunnapana ', '  No. 09, Boruppa, Gunnapana', 'TEST@GBDA.COM', -1, 719831624, 'Female', '121057431383', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '925541745V', '1992-02-23', 'GSN7', 'Prament', '02', 'N EPF', 'DD', '2017-06-26', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-22'),
(81, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'A.', 'ROSHINI', 'DISSANAYAKE', ' No. 65/ 3A Kendahena watta, Pannipitiya ', '  No. 65/ 3A Kendahena watta, Pannipitiya', 'TEST@GBDA.COM', -1, 702990402, 'Female', '108757121772', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '895523666V', '1989-02-21', 'GSN8', 'Prament', '02', 'N EPF', 'DD', '2017-08-02', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-22'),
(82, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'U.A.M.', 'SHASHINI', 'SENARATHNA', ' No. 29/20, Pallidora Road, Karagampitiya, Dehiwala ', '  No. 29/20, Pallidora Road, Karagampitiya, Dehiwala', 'TEST@GBDA.COM', -1, 778084208, 'Female', '121056021605', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '986253823V', '1998-05-04', 'GSN9', 'Prament', '02', 'N EPF', 'DD', '2017-10-10', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-22'),
(83, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'E.H.', 'KAMANI', 'DEEPIKA', ' No.69/2, Hospital Road, Kalubowila, Dehiwala ', '  No.69/2, Hospital Road, Kalubowila, Dehiwala', 'TEST@GBDA.COM', -1, 777427701, 'Female', '121054331722', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '687970098V', '1968-10-23', 'G1', 'Prament', '02', '2', 'DD', '1999-10-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-23'),
(84, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'K.M.L.', 'NILUKA', 'SHARMILI', ' No. 284/1, Dekatana South, Dekatana ', '  No. 284/1, Dekatana South, Dekatana', 'TEST@GBDA.COM', -1, 773552339, 'Female', '101753322770', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '757882213V', '1975-10-14', 'G2', 'Prament', '02', '3', 'DD', '1999-10-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-23'),
(85, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'W.', 'SHIROMANI', 'ATWEL', ' No. 105/6 A, Prathibimbarama Road, Kalubowila, Dehiwala', ' No. 105/6 A, Prathibimbarama Road, Kalubowila, Dehiwala', 'TEST@GBDA.COM', -1, 776265723, 'Female', '101753121126', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '748111921V', '1974-11-06', 'G3', 'Prament', '02', '26', 'DD', '2004-04-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(86, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'P.M.', 'CHARITH', 'DHARMAPRIYA', ' \\\'Udawa\\\' Pambala, Lakkapaliya', ' \\\'Udawa\\\' Pambala, Lakkapaliya', 'TEST@GBDA.COM', -1, 773038907, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '763381838V', '1976-12-03', 'G4', 'Prament', '02', '49', 'DD', '2007-04-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(87, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'R.L.', 'KODIPPILLI', 'WIJESINGHE', '\\\"Rashmini\\\" Uda Aparakka, Aparakka', ' \\\"Rashmini\\\" Uda Aparakka, Aparakka', 'TEST@GBDA.COM', 413419131, 711998747, 'Male', '121057431276', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '913654374V', '1991-12-30', 'G6', 'Prament', '02', '98', 'DD', '2013-08-07', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(88, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'N.G.U.', 'CHATHURANGANI', 'KUMARI', ' No.135/45 C, Jaya Mawatha, Godigamuwa, Maharagama', ' No.135/45 C, Jaya Mawatha, Godigamuwa, Maharagama', 'TEST@GBDA.COM', -1, 715265104, 'Female', '121054477432', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '926330730V', '1992-05-12', 'G7', 'Prament', '02', '100', 'DD', '2013-11-08', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(89, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'K.A.D.', 'PRASAD', 'KARUNANAYAKE', ' Uduwaka, Ihalagama, Algama, (Sabara)', ' Uduwaka, Ihalagama, Algama, (Sabara)', 'TEST@GBDA.COM', -1, 712437442, 'Male', '120554051717', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '863324076V', '1986-11-27', 'G8', 'Prament', '02', '102', 'DD', '2015-05-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(90, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'T.', 'DISSANAYAKE', '-', ' No. 16/2, Vihara Mawatha, Pepiliyana Boralesgamuwa', ' No. 16/2, Vihara Mawatha, Pepiliyana Boralesgamuwa', 'TEST@GBDA.COM', -1, 772157524, 'Male', '121057362745', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '850713588V', '1985-03-11', 'G9', 'Prament', '02', '105', 'DD', '2016-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(91, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'K.G.', 'MANOJ', 'CHANAKA', ' No. 70/2, Dharmaraja Mawatha, Panthiya, Mathugama', ' No. 70/2, Dharmaraja Mawatha, Panthiya, Mathugama', 'TEST@GBDA.COM', -1, 779082447, 'Male', '121057431282', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '900984278V', '1990-04-07', 'G10', 'Prament', '02', '108', 'DD', '2016-06-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(92, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'H.D.P.', 'KUMARI', 'GUNASEKARA', 'No. 118/1, Lulwela Road, Jamburaliya, Madapatha,', 'No. 118/1, Lulwela Road, Jamburaliya, Madapatha,', 'TEST@GBDA.COM', -1, 711491876, 'Female', '121057431322', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '885643477V', '1988-03-04', 'G13', 'Prament', '02', '76', 'DD', '2011-07-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(93, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'T.', 'KALEICHELVAN', '-', ' No. 31 D, Pakyam Lane, Periya Uppodai, Batticaloa', 'No. 31 D, Pakyam Lane, Periya Uppodai, Batticaloa ', 'TEST@GBDA.COM', -1, 713565150, 'Male', '121057431332', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '720823004V', '1972-03-22', 'G14', 'Prament', '02', '113', 'DD', '2017-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(94, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'L.A.', 'RANDIMA', 'PERERA', ' No. 34/18 A, Parakrama Road, Kalubowila, Dehiwala', ' No. 34/18 A, Parakrama Road, Kalubowila, Dehiwala', 'TEST@GBDA.COM', -1, 775411699, 'Female', '121057431361', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '928261948V', '1992-11-21', 'G15', 'Prament', '02', '118', 'DD', '2016-06-02', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(95, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'P.', 'MALEESHA', 'DULANI', ' No. 16/18, Sri Dharmapala Road, Mount Lavinia', ' No. 16/18, Sri Dharmapala Road, Mount Lavinia', 'TEST@GBDA.COM', -1, 784809021, 'Female', '121057431335', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '948434067V', '1994-12-08', 'G16', 'Prament', '02', '119', 'DD', '2016-07-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(96, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'T.M.', 'KARUNASENA', '-', ' No. 73/1B, Katuwawala, Boralesgamuwa ', '  No. 73/1B, Katuwawala, Boralesgamuwa', 'TEST@GBDA.COM', -1, 714900403, 'Male', '121057431400', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '612281688V', '1961-08-15', 'GF1', 'Prament', '02', '7', 'DD', '2001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-23'),
(97, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'P.D.', 'THILAK', 'PRASANNA', ' No. 3/4, Egodawatta, Wedawatta, Meegahathenna.', ' No. 3/4, Egodawatta, Wedawatta, Meegahathenna.', 'TEST@GBDA.COM', -1, 784945931, 'Male', '121057431414', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '803172404V', '1980-11-12', 'GF2', 'Prament', '02', '8', 'DD', '2001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(98, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'R.A.', 'PIYATHILAKA', '-', ' No. 19, Kumbukare Gedara, Thalamporuwa, Hakuruwela.', ' No. 19, Kumbukare Gedara, Thalamporuwa, Hakuruwela.', 'TEST@GBDA.COM', -1, -1, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '733562390V', '1973-12-21', 'GF4', 'Prament', '02', '25', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(99, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'W.N.', 'RUWAN', 'WICKRAMAGE', ' No.10, Gangasirigama, Dalpitiya, Atabage', ' No.10, Gangasirigama, Dalpitiya, Atabage', 'TEST@GBDA.COM', -1, 787409054, 'Male', '0', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '783404168V', '1978-12-05', 'GF5', 'Prament', '02', '39', 'DD', '2006-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(100, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'L.M.', 'PRAGEETH ', 'SANJAYA', ' No. 89/A, Hospital Road, Kalubowila, Dehiwala', ' No. 89/A, Hospital Road, Kalubowila, Dehiwala', 'TEST@GBDA.COM', -1, 775444362, 'Male', '121057223637', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '801624880V', '1980-06-10', 'GF6', 'Prament', '02', '43', 'DD', '2006-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(101, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'W.', 'PRIYANTHA', 'WICKRAMAGE', ' No. 42/20, Palliyadora Road, Dehiwala', ' No. 28/1, Gangasirigama, Dalpitiya, Atabage, Gampola', 'TEST@GBDA.COM', -1, 72415253, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '860411750V', '1986-02-10', 'GF7', 'Prament', '02', '44', 'DD', '2006-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(102, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'M.M.R.', 'ANUSHKA', 'COORAY', ' Trinco Road, Habarana ', '  Trinco Road, Habarana', 'TEST@GBDA.COM', -1, 768109980, 'Male', '121057223646', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '842201284V', '1984-08-07', 'GF8', 'Prament', '02', '57', 'DD', '2008-07-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-23'),
(103, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'D.M.N.', 'KUMARA', 'SENAVIRATHNA', ' No. 09, Gagasirigama, Delpitiya, Atabage', ' No. 09, Gagasirigama, Delpitiya, Atabage', 'TEST@GBDA.COM', -1, 718990194, 'Male', '101750163271', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '822402402V', '1982-08-27', 'GF9', 'Prament', '02', '60', 'DD', '2009-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(104, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'T.G.', 'THILINA', 'SRI BANDARA', 'No. 86, Webadagama, Damanewela', ' No. 86, Webadagama, Damanewela', 'TEST@GBDA.COM', -1, 789736055, 'Male', '121054911252', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '921551738V', '1992-06-03', 'GF10', 'Prament', '02', '66', 'DD', '2010-07-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(105, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'M.D.', 'SARATH', 'ANTONY', ' No. C 15/15, Raja Ella, Hingulakgoda', ' No. C 15/15, Raja Ella, Hingulakgoda', 'TEST@GBDA.COM', -1, 770376303, 'Male', '121057077391', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '802011997V', '1980-07-19', 'GF11', 'Prament', '02', '67', 'DD', '2010-07-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(106, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'M.A.', 'THARAKA ', 'SANDARUWAN', ' Kurulige Watta, Baddegama (North)', ' Kurulige Watta, Baddegama (North)', 'TEST@GBDA.COM', -1, 778876681, 'Male', '121057455986', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '912242307V', '1991-08-11', 'GF13', 'Prament', '02', '81', 'DD', '2012-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(107, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'A.', 'SUJEEWA', 'KAHINGALA', ' Browns Flats, Hatton', ' Browns Flats, Hatton', 'TEST@GBDA.COM', -1, 716069854, 'Male', '121054477487', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '662572101V', '1966-09-13', 'G5', 'Prament', '02', '91', 'DD', '2013-04-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(108, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'R.A.A.', 'LAKSIRI', 'RANAWAKA', ' \\\"Srimathi\\\" Kabalana Junction, Kathaluwa, Ahangama', ' Kimbulpola Kanda, Galpatha', 'TEST@GBDA.COM', -1, 774742770, 'Male', '118254090903', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '753353879V', '1975-11-30', 'GF3', 'Prament', '02', '19', 'DD', '2001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(109, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'G.A.A.', 'MADUSANKA', 'WICKRAMARATHNA', ' No.36, Ashokamalagama, Yaya 03, Penamaduwa, Anuradhapura', ' No.36, Ashokamalagama, Yaya 03, Penamaduwa, Anuradhapura', 'TEST@GBDA.COM', 255686287, 716599894, 'Male', '121057579331', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '930144070V', '2013-07-01', 'GF15', 'Prament', '02', '95', 'DD', '2013-07-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(110, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'D.', 'SHIROMALA', 'HAPUTHANTHRIGE', ' No. 117/4, Waidya Road, Dehiwala', ' No. 117/4, Waidya Road, Dehiwala', 'TEST@GBDA.COM', -1, 772433668, 'Female', '121057431589', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '758470768V', '1975-12-12', 'GF16', 'Prament', '02', '104', 'DD', '2015-02-05', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(111, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'R.M.', 'THIMIRA', 'HASARANGA', ' Sooriyagahawatha, Kanahela, Passara', ' Sooriyagahawatha, Kanahela, Passara', 'TEST@GBDA.COM', -1, 766845500, 'Male', '121057431554', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '952581341V', '1995-09-14', 'GF17', 'Prament', '02', '114', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(112, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'S.', 'ELAVARASAN', '-', ' Gona Kele Group, Upper Division, Passara', ' Gona Kele Group, Upper Division, Passara', 'TEST@GBDA.COM', -1, 714690215, 'Male', '121054318645', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '8821464229V', '1988-09-02', 'GF14', 'Prament', '02', '82', 'DD', '2012-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(113, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'M.K.', 'CHANDANA', 'KUMARA', ' Delmella, Bulathsinhala', ' Delmella, Bulathsinhala', 'TEST@GBDA.COM', -1, 713663482, 'Male', '121057336727', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '763524620V', '1976-12-17', 'GF18', 'Prament', '02', '116', 'DD', '2017-02-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(114, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'B.K.', 'SHANTHA', 'KUMARA', ' No.183/B/1, Debokkawa, Kariyamaditta', ' No.183/B/1, Debokkawa, Kariyamaditta', 'TEST@GBDA.COM', -1, 787266713, 'Male', '121057490325', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '841914490V', '1984-07-09', 'GF19', 'Prament', '02', '117', 'DD', '2017-02-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(115, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'V.A.', 'CHANDRASENA', '-', ' No. 16/18, 4th Lane, Katuwawala Road, Ambillawatta, Boralesgamuwa', ' No. 16/18, 4th Lane, Katuwawala Road, Ambillawatta, Boralesgamuwa', 'TEST@GBDA.COM', -1, 758005573, 'Male', '121057387612', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '561692564V', '1956-06-17', 'GFN9', 'Prament', '02', 'N EPF', 'DD', '2015-05-18', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(116, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'K.', 'SUNIL', 'PERERA', ' No. 78, Viharamawatha, Papiliyana, Boralesgamuwa', ' No. 78, Viharamawatha, Papiliyana, Boralesgamuwa', 'TEST@GBDA.COM', 114957810, -1, 'Male', '0', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '602980316V', '1960-10-24', 'GFN10', 'Prament', '02', 'N EPF', 'DD', '2015-10-22', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(117, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'P.J.', 'KEERTHI', 'PEIRIS', ' No. 246/A, Waiman Mawatha, Gangarama Road, Werahara, Boralesgamuwa', ' No. 246/A, Waiman Mawatha, Gangarama Road, Werahara, Boralesgamuwa', 'TEST@GBDA.COM', -1, 776452349, 'Male', '121057426439', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '612200149V', '1961-08-07', 'GFN11', 'Prament', '02', 'N EPF', 'DD', '2016-01-13', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(118, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'R.P.', 'SWARNAPALA', '-', ' No. 84, Puwakwatta Road, Halpathdeniya, Aththanagalla', ' No. 84, Puwakwatta Road, Halpathdeniya, Aththanagalla', 'TEST@GBDA.COM', -1, 775430100, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '642424203V', '1964-08-29', 'GFN5', 'Prament', '02', 'N EPF', 'DD', '2014-02-09', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(119, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'D.V.', 'TITAS', 'FONSEKA', ' No. 23/7, Wedamulla, Patumaga', ' No. 23/7, Wedamulla, Patumaga', 'TEST@GBDA.COM', 112906218, 769184324, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '550690837V', '1955-03-09', 'GFN12', 'Prament', '02', 'N EPF', 'DD', '2016-02-09', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(120, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'B.V.', 'MAITHREEPALA', '-', ' No. 322/D, Haldola Road, Bellena', ' No. 322/D, Haldola Road, Bellena', 'TEST@GBDA.COM', -1, 723637513, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '540860343V', '1954-03-26', 'GFN34', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(121, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'M.B.', 'AMANTHA', 'MADUSHAN', ' No.11/52, Kesel potha, Mapakada Lake, Mahiyanganaya', ' No.11/52, Kesel potha, Mapakada Lake, Mahiyanganaya', 'TEST@GBDA.COM', 555738593, 788151925, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '200030602665V', '2000-11-01', 'GFN32', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(122, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'A.', 'MADURANGA', 'LIYANAGE', '\\\'\\\'Suranga\\\" Kadurupokuna, Thangalla.', '\\\'\\\'Suranga\\\" Kadurupokuna, Thangalla.', 'TEST@GBDA.COM', -1, 712173274, 'Male', '121057431860', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '951700231V', '1995-06-18', 'GFN26', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(123, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'D.G.M.', 'RATHNA', 'KUMARA', ' Digogama, Godagampala, Parakaduwa', ' Digogama, Godagampala, Parakaduwa', 'TEST@GBDA.COM', -1, 788410469, 'Male', '121057431835', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '782254383V', '1978-08-12', 'GFN25', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(124, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'U.G.B.', 'SAMPATH', 'SOMARATHNA', ' No. 92, Pahala hapuvida, Alwatta,Mathale', ' No. 92, Pahala hapuvida, Alwatta,Mathale', 'TEST@GBDA.COM', -1, 716402924, 'Male', '111057000457', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '950290471V', '1995-01-29', 'GFN23', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(125, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'K.B.V.R.', 'PRIYANTHA', 'SIRINIMAL', ' Peramandiya, Maspanna', ' Peramandiya, Maspanna', 'TEST@GBDA.COM', -1, 779568872, 'Male', '121057431710', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '891492685V', '1989-05-28', 'GFN15', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(126, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'B.D.S.', 'MADURANGA', 'FERNANDO', ' Ranga Niwasa, Cement Factory Road, Thaladiya', ' Ranga Niwasa, Cement Factory Road, Thaladiya', 'TEST@GBDA.COM', -1, 719106710, 'Male', '121057486408', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '880580833V', '1988-02-27', 'GFN16', 'Prament', '02', 'N EPF', 'DD', '2016-12-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(127, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'M.W.', 'PERERA', '-', ' -', ' -', 'TEST@GBDA.COM', -1, 718218866, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GS1', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(128, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'U.', 'MUTHUKUMARANE', '-', ' -', ' -', 'TEST@GBDA.COM', -1, 777886926, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '2016-01-01', 'GS2', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23');
INSERT INTO `employeeinfor` (`id`, `company`, `firstname`, `lastname`, `othername`, `caddress`, `paddress`, `email`, `telephone`, `mobile`, `gender`, `accno`, `bank`, `barnch`, `nation`, `pno`, `nic`, `bod`, `empno`, `emptype`, `designation`, `epfno`, `department`, `doj`, `srm`, `packageid`, `addtion`, `dedion`, `etfval`, `epfval`, `netsal`, `status`, `createdate`) VALUES
(129, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'M.A.J.', 'UPALI', 'MARASINGHE', ' No,55, Aththidiya road, Kawdana, Dehiwala', ' No,55, Aththidiya road, Kawdana, Dehiwala', 'TEST@GBDA.COM', -1, 771291650, 'Male', '121057426953', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '1967-09-13', 'GSN3', 'Prament', '02', 'N EPF', 'DD', '2016-07-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-23'),
(130, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'A.K.D.L.', 'GIHAN', 'MADURANGA', ' No.10, Field Mawatha, Kohuwala, Nugegoda', ' No.10, Field Mawatha, Kohuwala, Nugegoda', 'TEST@GBDA.COM', -1, 729137159, 'Male', '121057431302', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '912040720 V', '0001-01-01', 'G12', 'Prament', '02', '111', 'DD', '2015-08-11', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(131, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'K.H.M.', 'LAKSHITHA', 'DE SILVA', 'Tholabowatta, 4th Mile post, Gamewela, Passara ', ' Tholabowatta, 4th Mile post, Gamewela, Passara', 'TEST@GBDA.COM', -1, 725924617, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '1999-06-10', 'GFN19', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(132, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'J.', 'PATHMARATHNE', '-', ' Delmalla, Bulathsinhala', ' Delmalla, Bulathsinhala', 'TEST@GBDA.COM', -1, 713663480, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '1959-01-10', 'GFN29', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(133, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'S.B.B.P.', 'MUNIDASA', '-', ' -', ' -', 'TEST@GBDA.COM', -1, 777255507, 'Male', '106154304114', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GS3', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(134, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'K.P.D.', 'PUSHPA', 'KUMARA', ' No,18/6, Nandimithra Mawatha, Kalubowila, Dehiwala', ' No,18/6, Nandimithra Mawatha, Kalubowila, Dehiwala', 'TEST@GBDA.COM', -1, -1, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '952474014V', '1995-09-03', 'GFN49', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(135, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'J.W.P.S.', 'VIDURANGA', '-', ' -', ' -', 'TEST@GBDA.COM', -1, 718733309, 'Male', '103657545113', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GS12', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(136, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'W.', 'SHASHIKALA', '-', ' -', ' -', 'TEST@GBDA.COM', -1, 765296440, 'Female', '121056029696', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GSN10', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(137, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'T.', 'THAVENDRA', '-', ' -', ' -', 'TEST@GBDA.COM', -1, 718054381, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GSN11', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(138, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'GUNASENA', '-', '-', ' -', ' -', 'TEST@GBDA.COM', -1, -1, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GFN1', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(139, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'SOMASIRI', '-', '-', ' -', ' -', 'TEST@GBDA.COM', -1, -1, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GFN2', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(140, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'S.', 'MUNASINGHE', '-', ' -', ' -', 'TEST@GBDA.COM', -1, -1, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GFN3', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(141, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'L.D.', 'ARIYAPALA', '-', ' -', ' -', 'TEST@GBDA.COM', -1, -1, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GFN4', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(142, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'C.', 'KUMARAN', '-', ' -', ' -', 'TEST@GBDA.COM', -1, -1, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GFN7', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(143, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'S.', 'FERNANDO', '-', ' -', ' -', 'TEST@GBDA.COM', -1, 756737319, 'Female', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GFN8', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(144, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'A.', 'WIJESINGHE', '-', ' -', ' -', 'TEST@GBDA.COM', -1, 702616076, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GFN14', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(145, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'J.A.', 'DINESH', 'SURANGA', ' -', ' -', 'TEST@GBDA.COM', -1, 713485894, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GFN18', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(146, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'U.A.', 'RASANGA', '-', ' -', ' -', 'TEST@GBDA.COM', -1, 752653106, 'Male', '121054555654', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GFN20', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(147, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'K.W.J.H.', 'PERERA', '-', ' -', ' -', 'TEST@GBDA.COM', -1, 711000938, 'Male', '121057362648', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GFN35', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(148, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'D.M.', 'SHALINDA', 'V. DISSANAYAKE', ' -', ' -', 'TEST@GBDA.COM', -1, 787157137, 'Male', '121057437789', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GFN39', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(149, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'H.M.G.H.', 'DANANJAYA', 'HERATH', ' -', ' -', 'TEST@GBDA.COM', -1, 716773571, 'Male', '121057431783', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GFN40', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(150, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'S.', 'KUMARA', '-', ' -', ' -', 'TEST@GBDA.COM', -1, 715708632, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GFN41', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(151, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'S.S.', 'RATHNAYAKE', '-', ' -', ' -', 'TEST@GBDA.COM', -1, 770577840, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GFN42', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(152, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'M.U.', 'CHINTHAKA', '-', ' -', ' -', 'TEST@GBDA.COM', -1, 715250987, 'Male', '121057431819', 'SAMPATH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GFN43', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(153, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'A.G.S.K.', 'SAMAN', 'KUMARA', ' -', ' -', 'TEST@GBDA.COM', -1, 763818273, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GFN44', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(154, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'P.', 'CHAMARA', 'JAYASINGHE', '- ', ' -', 'TEST@GBDA.COM', -1, 710537601, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GFN45', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(155, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'K.', 'KANCHUKA', 'KULARATHNE', ' -', '-', 'TEST@GBDA.COM', -1, 786534494, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GFN46', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(156, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'M.', 'NILANJAR', '-', ' -', '-', 'TEST@GBDA.COM', -1, 771416545, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GFN47', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(157, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'K.B.', 'AVISHKA', 'SHEHAN', ' -', '-', 'TEST@GBDA.COM', -1, 750470516, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GFN48', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(158, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'L.', 'SAHAN', 'AVISHKA', ' -', ' -', 'TEST@GBDA.COM', -1, 756647015, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GFN51', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(159, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'K.', 'KUMAR', 'SUDHARSHAN', ' -', ' -', 'TEST@GBDA.COM', -1, 710647192, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GFN52', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(160, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'J.', 'KUMARA', '-', ' -', ' -', 'TEST@GBDA.COM', -1, 769225452, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GFN50', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(161, 'GAMINI B DODANWELA ASSOCIATES PVT LTD', 'S.U.S.', 'GUNASEKARA', '-', ' -', ' -', 'TEST@GBDA.COM', -1, 718673165, 'Male', '0', 'CASH', 'GAMINI B DODANWELA', 'SRILANKAN', '', '-', '0001-01-01', 'GSN1', 'Prament', '02', 'N EPF', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(162, 'BHOOMI TECH PVT LTD', 'A.S.', 'NANDALAL', 'FERNANDO', ' No. 503, Galle Road, Kaluthara North', 'No. 503, Galle Road, Kaluthara North ', 'TEST@BHOOMITECH.COM', -1, 717038510, 'Male', '121057431238', 'SAMPATH', 'BHOOMITECH', 'SRILANKAN', '', '892180016V', '0001-01-01', 'B43', 'Prament', '01', '33', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(163, 'BHOOMI TECH PVT LTD', 'A.M.', 'LAXMAN', 'SIRISENA', ' Ilukmade, Epakanda, Polgahawela', ' Ilukmade, Epakanda, Polgahawela', 'TEST@BHOOMITECH.COM', -1, 789617770, 'Male', '0', 'CASH', 'BHOOMITECH', 'SRILANKAN', '', '731473447V', '0001-01-01', 'B48', 'Prament', '01', '22', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(164, 'GRAKK COMPUTER FORMS PVT LTD', 'S.K.', 'BAWAN', '-', ' -', ' -', 'TEST@GRAKK.COM', -1, 777133537, 'Male', '119357421105', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', '-', 'Prament', '03', '-', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(165, 'GRAKK COMPUTER FORMS PVT LTD', 'S.', 'ANTON', 'LIYANAGE', ' No.108, 17/B, Bankan Estate, Kiriwattuduwa,Homagama', ' No.108, 17/B, Bankan Estate, Kiriwattuduwa,Homagama', 'TEST@GRAKK.COM', -1, 714900398, 'Male', '101750142908', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '600400231V', '0001-01-01', 'GR1', 'Prament', '03', '1', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(166, 'GRAKK COMPUTER FORMS PVT LTD', 'W.A.', 'ANANDA', '-', ' No. 19/197, Thambiliwatta, Samagi Mawatha, Wetara, Polgasovita', ' No. 19/197, Thambiliwatta, Samagi Mawatha, Wetara, Polgasovita', 'TEST@GRAKK.COM', -1, 771490153, 'Male', '101953104413', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '643311712V', '0001-01-01', 'GR2', 'Prament', '03', '2', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(167, 'GRAKK COMPUTER FORMS PVT LTD', 'S.', 'SAMITH', 'SILVA', ' No. 696, Temple Road, Maharagama', ' No. 696, Temple Road, Maharagama', 'TEST@GRAKK.COM', -1, 722967638, 'Male', '0', 'CASH', 'GRAKK', 'SRILANKAN', '', '750592928V', '0001-01-01', 'GR3', 'Prament', '03', '4', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(168, 'GRAKK COMPUTER FORMS PVT LTD', 'E.H.', 'DAMINDA', 'SAMPATH', ' No.228, Hospital Road, Kalubowila, Dehiwala', ' No.228, Hospital Road, Kalubowila, Dehiwala', 'TEST@GRAKK.COM', -1, 754577740, 'Male', '121057432043', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '792311330V', '0001-01-01', 'GR4', 'Prament', '03', '5', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(169, 'GRAKK COMPUTER FORMS PVT LTD', 'G.H.', 'RUWAN', 'PRASANNA', ' No. 38/1, Makuluduwa, Piliyandala', ' No. 38/1, Makuluduwa, Piliyandala', 'TEST@GRAKK.COM', -1, 716156174, 'Male', '121057432052', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '773153396V', '0001-01-01', 'GR5', 'Prament', '03', '7', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(170, 'GRAKK COMPUTER FORMS PVT LTD', 'S.M.N.', 'DAMITH', '-', ' -', ' -', 'TEST@GRAKK.COM', 113164124, -1, 'Male', '100250220701', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', 'GR7', 'Prament', '03', '-', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(171, 'GRAKK COMPUTER FORMS PVT LTD', 'S.', 'SATHEESHWARAN', '-', ' Karapincha, Rathnapura', ' Karapincha, Rathnapura', 'TEST@GRAKK.COM', -1, 779632024, 'Male', '103754203725', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '851622314V', '0001-01-01', 'GR8', 'Prament', '03', '25', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(172, 'GRAKK COMPUTER FORMS PVT LTD', 'D.K.', 'PRABATH', 'DASANAYAKA', ' \\\"Lakmee\\\" Kumbuka, Gonapala Junction', ' \\\"Lakmee\\\" Kumbuka, Gonapala Junction', 'TEST@GRAKK.COM', -1, 712723507, 'Male', '121057432081', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '881860473 V', '0001-01-01', 'GR9', 'Prament', '03', '36', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(173, 'GRAKK COMPUTER FORMS PVT LTD', 'R.M.G.', 'SADEEPTHA', 'RAJAPAKSHA', ' No.93, Wanduramulla Watta, Kiriberiya Road, Panadura', ' No.93, Wanduramulla Watta, Kiriberiya Road, Panadura', 'TEST@GRAKK.COM', -1, 750288403, 'Male', '102657457201', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '932714876V', '0001-01-01', 'GR10', 'Prament', '03', '38', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(174, 'GRAKK COMPUTER FORMS PVT LTD', 'E.S.', 'THILAKAWANSA', 'KUMARA', ' No. 21/252, Ananda Balika Mawatha Pagoda Road, Pitakotte, Kotte', ' No. 21/252, Ananda Balika Mawatha Pagoda Road, Pitakotte, Kotte', 'TEST@GRAKK.COM', -1, 750122094, 'Male', '121057432310', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '922464430V', '0001-01-01', 'GR12', 'Prament', '03', '43', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(175, 'GRAKK COMPUTER FORMS PVT LTD', 'W.G.N.', 'THARAKA ', 'RANATHUNGE', ' Pallegama, Atabage', ' Pallegama, Atabage', 'TEST@GRAKK.COM', -1, 756637715, 'Male', '110154711365', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '901250979V', '0001-01-01', 'GR13', 'Prament', '03', '42', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(176, 'GRAKK COMPUTER FORMS PVT LTD', 'P.', 'NIROSHAN', 'KUMAR', ' Ge Kiyana Kanda, Pahala Kotasa, Nebada', ' Ge Kiyana Kanda, Pahala Kotasa, Nebada', 'TEST@GRAKK.COM', -1, 772822523, 'Male', '121057501990', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '961164346V', '0001-01-01', 'GR16', 'Prament', '03', '47', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(177, 'GRAKK COMPUTER FORMS PVT LTD', 'A.S.', 'RASANJANA', 'SILVA', ' No. 2/56, Nawa Wijaya Road, Palathota, Kaluthara', ' No. 2/56, Nawa Wijaya Road, Palathota, Kaluthara', 'TEST@GRAKK.COM', -1, 755385162, 'Male', '121057432321', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '813324555V', '0001-01-01', 'GR18', 'Prament', '03', '50', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(178, 'GRAKK COMPUTER FORMS PVT LTD', 'Y.M.', 'MANGALIKA', 'DE SILVA', ' No.06, Mallikarama Road, Rathmalana', 'No.06, Mallikarama Road, Rathmalana ', 'TEST@GRAKK.COM', -1, 777297426, 'Female', '121057432354', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '628640289V', '1962-12-29', 'GR21', 'Prament', '03', '53', 'DD', '2017-02-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(179, 'GRAKK COMPUTER FORMS PVT LTD', 'G.M.', 'HIRANTHA', 'MUTHUMALA', ' \\\"Mangala\\\"  Rocklan Road, Magalakanda, Maggona', ' \\\"Mangala\\\"  Rocklan Road, Magalakanda, Maggona', 'TEST@GRAKK.COM', -1, 756437612, 'Male', '121057432431', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '873124059V', '1987-11-07', 'GR22', 'Prament', '03', '54', 'DD', '2017-02-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(180, 'GRAKK COMPUTER FORMS PVT LTD', 'G.K.', 'RAVINDRALAL', 'RATHNASIRI', ' No.129, Hambanthota Watta, Dedduwa, Haburugala, Benthota', ' No.129, Hambanthota Watta, Dedduwa, Haburugala, Benthota', 'TEST@GRAKK.COM', -1, 774515824, 'Male', '101853173773', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '743023420V', '1974-10-28', 'GR23', 'Prament', '03', '57', 'DD', '2017-02-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(181, 'GRAKK COMPUTER FORMS PVT LTD', 'H.D.', 'KASUN', 'CHATHURANGA', 'No. 162/1, Rockland Road, Magala Kanda, Maggona', ' No. 162/1, Rockland Road, Magala Kanda, Maggona', 'TEST@GRAKK.COM', -1, 714714328, 'Male', '121057432416', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '913632842V', '1991-12-28', 'GR24', 'Prament', '03', '58', 'DD', '2017-02-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(182, 'GRAKK COMPUTER FORMS PVT LTD', 'H.', 'SANJEEWA', 'SAMPATH', ' No.166/1, Heen Ella Road, Pohaddaramulla, Wadduwa', ' No.166/1, Heen Ella Road, Pohaddaramulla, Wadduwa', 'TEST@GRAKK.COM', -1, 711249316, 'Male', '107553733654', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '771700608V', '1977-06-18', 'GR26', 'Prament', '03', '60', 'DD', '2017-02-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(183, 'GRAKK COMPUTER FORMS PVT LTD', 'J.M.C.', 'NISHANTHA', 'JAYASUNDARA', ' No.518/3, Werahara Road, Boralesgamuwa', ' No.518/3, Werahara Road, Boralesgamuwa', 'TEST@GRAKK.COM', -1, 777918344, 'Male', '121057432358', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '831480963V', '1983-05-27', 'GR27', 'Prament', '03', '61', 'DD', '2017-02-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(184, 'GRAKK COMPUTER FORMS PVT LTD', 'H.M.J.', 'MANJULA', 'PUSHPAKUMARA', ' \\\"Somasiri Niwasa\\\" Dehimalgolla, Kandepuhulpola', ' \\\"Somasiri Niwasa\\\" Dehimalgolla, Kandepuhulpola', 'TEST@GRAKK.COM', -1, 766129668, 'Male', '101854874723', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '971942762V', '1997-07-12', 'GR29', 'Prament', '03', '65', 'DD', '2017-02-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(185, 'GRAKK COMPUTER FORMS PVT LTD', 'G.D.', 'NUWAN', 'CHATHURANGA', ' No.48/60, Obeysekarapura, Rajagiriya', ' No.48/60, Obeysekarapura, Rajagiriya', 'TEST@GRAKK.COM', -1, 716421615, 'Male', '121057432374', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '862190149V', '1986-08-06', 'GR30', 'Prament', '03', '66', 'DD', '2017-02-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(186, 'GRAKK COMPUTER FORMS PVT LTD', 'A.', 'SILVA', '-', ' -', ' -', 'TEST@GRAKK.COM', -1, 779447830, 'Male', '121057432306', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', 'GR11', 'Prament', '03', '-', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(187, 'GRAKK COMPUTER FORMS PVT LTD', 'M.', 'PALLIYAGURU', '-', ' -', ' -', 'TEST@GRAKK.COM', -1, 755822915, 'Male', '121057432314', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', 'GR14', 'Prament', '03', '-', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(188, 'GRAKK COMPUTER FORMS PVT LTD', 'C.', 'KUMARA', '-', ' -', ' -', 'TEST@GRAKK.COM', -1, 755726823, 'Male', '121057432317', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', 'GR15', 'Prament', '03', '-', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(189, 'GRAKK COMPUTER FORMS PVT LTD', 'T.', 'MADUSHANKA', '-', ' -', ' -', 'TEST@GRAKK.COM', -1, 719830062, 'Male', '121057432318', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', 'GR17', 'Prament', '03', '-', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(190, 'GRAKK COMPUTER FORMS PVT LTD', 'T.', 'HEMANTHA', '-', ' -', ' -', 'TEST@GRAKK.COM', -1, 774313901, 'Male', '0', 'CASH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', 'GR19', 'Prament', '03', '-', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(191, 'GRAKK COMPUTER FORMS PVT LTD', 'D.H.', 'HANSANI', 'ERANDIKA', ' -', ' -', 'TEST@GRAKK.COM', -1, 758977841, 'Female', '105754560672', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', 'GR31', 'Prament', '03', '-', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(192, 'GRAKK COMPUTER FORMS PVT LTD', 'R.', 'THILAKARATHNA', '-', ' -', ' -', 'TEST@GRAKK.COM', -1, 719733250, 'Male', '101853139802', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', 'GR32', 'Prament', '03', '-', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(193, 'GRAKK COMPUTER FORMS PVT LTD', 'P.C.', 'GOMES', '-', ' -', ' -', 'TEST@GRAKK.COM', -1, 775479094, 'Male', '101753565413', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', 'GRN1', 'Prament', '03', '-', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(194, 'GRAKK COMPUTER FORMS PVT LTD', 'N.M.', 'BISOMANIKE', '-', ' -', ' -', 'TEST@GRAKK.COM', -1, 779659434, 'Female', '121057432359', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', 'GRN2', 'Prament', '03', '-', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(195, 'GRAKK COMPUTER FORMS PVT LTD', 'RAJAPAKSHA', '-', '-', ' - ', '  -', 'TEST@GRAKK.COM', -1, 718172795, 'Male', '0', 'CASH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', 'GRN3', 'Prament', '03', '-', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', 'Approved', '2018-03-24'),
(196, 'GRAKK COMPUTER FORMS PVT LTD', 'T.T.R.', 'WIMALASENA', '-', ' -', ' -', 'TEST@GRAKK.COM', -1, 719048161, 'Male', '101753600225', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', 'GRN4', 'Prament', '03', '-', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(197, 'GRAKK COMPUTER FORMS PVT LTD', 'C.', 'FERNANDO', '-', ' --', ' -', 'TEST@GRAKK.COM', -1, 714900402, 'Male', '101757426948', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', 'GRN5', 'Prament', '03', '-', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(198, 'GRAKK COMPUTER FORMS PVT LTD', 'PIYASENA', '-', '-', '-', ' -', 'TEST@GRAKK.COM', 113043340, 728053516, 'Male', '121057432360', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', 'GRN6', 'Prament', '03', '-', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(199, 'GRAKK COMPUTER FORMS PVT LTD', 'S.', 'MADUSHANKA', '-', ' -', ' -', 'TEST@GRAKK.COM', -1, 774257670, 'Male', '109457057860', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', 'GRN7', 'Prament', '03', '-', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(200, 'GRAKK COMPUTER FORMS PVT LTD', 'R.A.M.', 'ROSHINI', '-', ' -', ' -', 'TEST@GRAKK.COM', -1, 776900125, 'Female', '121057432380', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', 'GRN9', 'Prament', '03', '-', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(201, 'GRAKK COMPUTER FORMS PVT LTD', 'P.H.', 'AMILA', 'NANDASIRI', ' -', ' -', 'TEST@GRAKK.COM', -1, 712471541, 'Male', '121057432435', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', 'GRN11', 'Prament', '03', '-', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(202, 'GRAKK COMPUTER FORMS PVT LTD', 'K.', 'OSHANI', 'GUNAWARDENA', ' -', ' -', 'TEST@GRAKK.COM', -1, 754809433, 'Female', '121057432386', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', 'GRN13', 'Prament', '03', '-', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(203, 'GRAKK COMPUTER FORMS PVT LTD', 'M.', 'IYANNAR', '-', ' -', '-', 'TEST@GRAKK.COM', -1, 722412898, 'Male', '121057432405', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', 'GRN14', 'Prament', '03', '-', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(204, 'GRAKK COMPUTER FORMS PVT LTD', 'M.D.', 'MADHUSHAN', '-', ' -', ' -', 'TEST@GRAKK.COM', -1, 710165340, 'Male', '102657466143', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', 'GRN16', 'Prament', '03', '-', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(205, 'GRAKK COMPUTER FORMS PVT LTD', 'KAVIDAS', '-', '-', ' -', ' -', 'TEST@GRAKK.COM', -1, 775426961, 'Male', '0', 'CASH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', 'GRN18', 'Prament', '03', '-', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(206, 'GRAKK COMPUTER FORMS PVT LTD', 'P.', 'KUMARA', '-', ' -', ' -', 'TEST@GRAKK.COM', -1, 775950103, 'Male', '0', 'CASH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', 'GRN19', 'Prament', '03', '-', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(207, 'GRAKK COMPUTER FORMS PVT LTD', 'D.', 'RAJASEKARAN', '-', ' -', ' -', 'TEST@GRAKK.COM', -1, 763814501, 'Male', '0', 'CASH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', 'GRN20', 'Prament', '03', '-', 'DD', '0001-01-01', 'Cash', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(208, 'GRAKK COMPUTER FORMS PVT LTD', 'A.', 'SADARUWAN', '-', ' -', ' -', 'TEST@GRAKK.COM', -1, 772245129, 'Male', '121057581748', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', 'GRN21', 'Prament', '03', '-', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24'),
(209, 'GRAKK COMPUTER FORMS PVT LTD', 'S.K.', 'DUMINDA', 'INDIKA', ' -', ' -', 'TEST@GRAKK.COM', -1, 717921022, 'Male', '121057559024', 'SAMPATH', 'GRAKK', 'SRILANKAN', '', '-', '0001-01-01', 'GRN22', 'Prament', '03', '-', 'DD', '0001-01-01', 'Bank Acc', 0, 0.00, 0.00, 0.00, 0.00, '', '', '2018-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `employeeinforcopy`
--

CREATE TABLE `employeeinforcopy` (
  `id` int(11) NOT NULL,
  `company` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `othername` varchar(100) NOT NULL,
  `caddress` varchar(150) NOT NULL,
  `paddress` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telephone` int(10) NOT NULL,
  `mobile` int(10) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `accno` varchar(100) NOT NULL,
  `bank` varchar(70) NOT NULL,
  `barnch` varchar(100) NOT NULL,
  `nation` varchar(100) NOT NULL,
  `pno` varchar(50) NOT NULL,
  `nic` varchar(50) NOT NULL,
  `bod` date NOT NULL,
  `empno` varchar(50) NOT NULL,
  `emptype` varchar(50) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `epfno` varchar(50) NOT NULL,
  `department` varchar(150) NOT NULL,
  `doj` date NOT NULL,
  `srm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeeinforcopy`
--

INSERT INTO `employeeinforcopy` (`id`, `company`, `firstname`, `lastname`, `othername`, `caddress`, `paddress`, `email`, `telephone`, `mobile`, `gender`, `accno`, `bank`, `barnch`, `nation`, `pno`, `nic`, `bod`, `empno`, `emptype`, `designation`, `epfno`, `department`, `doj`, `srm`) VALUES
(2, 'Tset', 'Buddilkahh', 'charith', 'peris', ' zxczx                                        ', '                                                                                              xcxzc                                                   ', 'test@gmail.com', 717898699, 2147483647, 'Male', 'bvcbvcb', 'vcbvc', 'bvcbc', 'vcbcv', '0717898699', 'vbcvb', '2017-11-27', 'E88', 'bvcbvb', 'UU', 'E88', 'DE1', '2017-12-04', 'Cash'),
(4, 'bhoomitech Qs', 'Roshan', 'Ranasinghe', 'None', '555  hh', '     tset', 'tripalr1986@gmail.com', 775748787, 775748787, 'Male', '123494853', 'NTB', 'colombo', 'Sri Lanka', 'N4550303', '749586969v', '1986-01-02', 'a', 'Prament', 'Tset1', '34352', 'DD', '2018-01-08', 'Bank Acc'),
(6, 'Tset', 'Buddilka', 'charith', 'peris', 'Mat vv', '  Aat', 'test@gmail.com', 717898699, 717898699, 'Male', 'Acc1422', 'Test', 'YYY', 'GGGH', 'GGG', '932961687v', '2018-03-06', '546452', 'Prament', 'Qs Fileed', 'TT12', 'DE1', '2018-03-07', 'Bank Acc'),
(4, 'BHOOMI TECH PVT LTD', 'Roshan', 'Ranasinghe', 'None', '555    ', '       tset', 'tripalr1986@gmail.com', 775748787, 775748787, 'Male', '123494853', 'NTB', 'colombo', 'Sri Lanka', 'N4550303', '749586969v', '1986-01-02', 'a5454', 'Sub', 'Tset1', '34352', 'DD', '2018-01-08', 'Bank Acc'),
(2, 'Tset', 'Buddilkahh', 'charith', 'peris', ' zxczx                                        ', '                                                                                              xcxzc                                                   ', 'test@gmail.com', 717898699, 2147483647, 'Male', 'bvcbvcb', 'vcbvc', 'bvcbc', 'vcbcv', '0717898699', 'vbcvb', '2017-11-27', 'E88', 'bvcbvb', 'UU', 'E88', 'DE1', '2017-12-04', 'Cash'),
(4, 'bhoomitech Qs', 'Roshan', 'Ranasinghe', 'None', '555  hh', '     tset', 'tripalr1986@gmail.com', 775748787, 775748787, 'Male', '123494853', 'NTB', 'colombo', 'Sri Lanka', 'N4550303', '749586969v', '1986-01-02', 'a', 'Prament', 'Tset1', '34352', 'DD', '2018-01-08', 'Bank Acc'),
(6, 'Tset', 'Buddilka', 'charith', 'peris', 'Mat vv', '  Aat', 'test@gmail.com', 717898699, 717898699, 'Male', 'Acc1422', 'Test', 'YYY', 'GGGH', 'GGG', '932961687v', '2018-03-06', '546452', 'Prament', 'Qs Fileed', 'TT12', 'DE1', '2018-03-07', 'Bank Acc'),
(4, 'BHOOMI TECH PVT LTD', 'Roshan', 'Ranasinghe', 'None', '555    ', '       tset', 'tripalr1986@gmail.com', 775748787, 775748787, 'Male', '123494853', 'NTB', 'colombo', 'Sri Lanka', 'N4550303', '749586969v', '1986-01-02', 'a5454', 'Sub', 'Tset1', '34352', 'DD', '2018-01-08', 'Bank Acc');

-- --------------------------------------------------------

--
-- Table structure for table `exportdb`
--

CREATE TABLE `exportdb` (
  `id` int(11) NOT NULL,
  `date` varchar(200) NOT NULL,
  `supplier` varchar(500) NOT NULL,
  `proformaNo` varchar(200) NOT NULL,
  `paymentCon` varchar(500) NOT NULL,
  `situation` varchar(200) NOT NULL,
  `createDate` varchar(200) NOT NULL,
  `updateDate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exportdb`
--

INSERT INTO `exportdb` (`id`, `date`, `supplier`, `proformaNo`, `paymentCon`, `situation`, `createDate`, `updateDate`) VALUES
(1, '2019-01-10', 'Roshan', '423', '2131', 'Y', '2019-01-10', '2019-01-10 (20:01:44)'),
(4, '2019-01-10', '123', 'sda', 'dsa', 'asd', '2019-01-10 (14:54:21)', ''),
(5, '2019-01-10', '123', 'asd', 'asds', 'asda', '2019-01-10 (20:25:05)', '');

-- --------------------------------------------------------

--
-- Table structure for table `goodentry`
--

CREATE TABLE `goodentry` (
  `purchaseid` int(100) NOT NULL,
  `suppliername` varchar(200) NOT NULL,
  `supplierinvoiceno` varchar(200) NOT NULL,
  `item_code` varchar(500) NOT NULL,
  `purchasedisc` varchar(200) NOT NULL,
  `gsalesdisc` varchar(200) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `createDate` varchar(500) NOT NULL,
  `createBy` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `goodentry`
--

INSERT INTO `goodentry` (`purchaseid`, `suppliername`, `supplierinvoiceno`, `item_code`, `purchasedisc`, `gsalesdisc`, `quantity`, `createDate`, `createBy`) VALUES
(1, 'YYUI', '100', 'E23', 'LTest', 'LTest1', '68', '', ''),
(2, 'Roshan', '10225', '22', '1234', 'wefw', '12', '', ''),
(3, 'YYUI', 'E34', '102', 'Test12', 'Sal1', '12', '', ''),
(4, 'YYUI', 'E34', '22', '1234', 'awf', '12', '', ''),
(5, '123', 'sA', 'C/CDP/1', 'Cone Dial Penetrometer ', 'Cone Dial Penetrometer', '1', '', ''),
(6, 'Roshan', '343C', 'C/2610B', 'Triple Beam Balance MB2610', 'Triple Beam Balance MB2610', '5', 'admin', '2018-12-08'),
(7, '123', '2342', 'C/CM/5', 'Cube Mould 10kg 4parts', 'Cube Mould 10kg 4parts', '3', '', ''),
(8, '123', '2342', 'C/CM/4', 'Cube Mould 16kg 2parts ', 'Cube Mould 16kg 2parts', '4', 'admin', '2018-12-08'),
(9, '123', '434', 'C/DP/4', '50 G Weights.', '50 G Weights.', '32', '2018-12-08', 'admin'),
(10, '123', '434', 'C/ACV/2', 'Measuring Cup', 'Measuring Cup', '4', 'admin', '2018-12-08'),
(11, 'Roshan', 'dsd', '     L/CP/10', 'Cutting Player ', 'Cutting Player', '1', 'admin', '2019-03-25');

-- --------------------------------------------------------

--
-- Table structure for table `iteminfor`
--

CREATE TABLE `iteminfor` (
  `id` int(11) NOT NULL,
  `item_code` varchar(100) NOT NULL,
  `purchasedisc` varchar(200) NOT NULL,
  `itemcategory` varchar(200) NOT NULL,
  `reorderlevel` varchar(200) NOT NULL,
  `subitemreminder` varchar(200) NOT NULL,
  `salesdisc0` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iteminfor`
--

INSERT INTO `iteminfor` (`id`, `item_code`, `purchasedisc`, `itemcategory`, `reorderlevel`, `subitemreminder`, `salesdisc0`) VALUES
(3, 'M/C058', 'C058 Compression Testing Machine  2000 Kn', 'Survey Spare Part', '', 'T', '[{\"salesdisc\":\"C058 Compression Testing Machine  2000 Kn\"}]'),
(5, 'M/C055', 'C055  Compression Testing Machine  2000 Kn', 'Labs', '', '', '[{\"salesdisc\":\"C055  Compression Testing Machine E 2000 Kn\"}]'),
(7, 'M/B033-01', 'B033-01 Automatic Marshall Compactor ', 'Labs', '', '', '[{\"salesdisc\":\"B033-01 Automatic Marshall Compactor For\"}]'),
(8, 'C/M/MO/2', 'Marshall Mould', 'Labs', '', '', '[{\"salesdisc\":\"Marshall Mould \"}]'),
(10, 'M/S213N', 'S213N CBR/Marshall 2 Speeds Frame 50 Kn', 'Labs', '', '', '[{\"salesdisc\":\"S213N CBR/Marshall 2 Speeds Frame 50 Kn\"}]'),
(11, 'M/S370-10 ', 'S370-10 Lord Ring 50Kn ', 'Labs', '', '', '[{\"salesdisc\":\"S370-10 Lord Ring 50Kn \"}]'),
(12, 'M/S370-05', 'S370-05 Lord Ring 10Kn ', 'Labs', '', '', '[{\"salesdisc\":\"S370-05 Lord Ring 10Kn \"}]'),
(13, 'M/S212-01', 'S212-01 Penetration Piston', 'Labs', '', '', '[{\"salesdisc\":\"S212-01 Penetration Piston\"}]'),
(14, 'M/S212-03', 'S212-03 Dial Gauge Holder', 'Labs', '', '', '[{\"salesdisc\":\"S212-03 Dial Gauge Holder\"}]'),
(15, 'M/S376', 'S376 Dial Gauge 10 X 0,01 Mm', 'Labs', '', '', '[{\"salesdisc\":\"S376 Dial Gauge 10 X 0,01 Mm\"}]'),
(16, 'M/S374', 'S374 Brake Device To Hold Max. Load', 'Labs', '', '', '[{\"salesdisc\":\"S374 Brake Device To Hold Max. Load\"}]'),
(18, 'M/B042', 'B042 KIT Marshall Compression Frames', 'Labs', '', '', '[{\"salesdisc\":\"B042 KIT Marshall Compression Frames\"}]'),
(19, 'M/S212-05', 'S212-05 Load Piston', 'Labs', '', '', '[{\"salesdisc\":\"S212-05 Load Piston\"}]'),
(20, 'M/B046N', 'B046N Stability Mould 4â€œ Ã˜', 'Labs', '', '', '[{\"salesdisc\":\"B046N Stability Mould 4â€œ Ã˜\"}]'),
(21, 'M/B047', 'B047 Flow Meter', 'Labs', '', '', '[{\"salesdisc\":\"B047 Flow Meter\"}]'),
(22, 'M/B047-01', 'B047-01 Dial Gauge For Flow Meter', 'Labs', '', '', '[{\"salesdisc\":\"B047-01 Dial Gauge For Flow Meter\"}]'),
(23, 'M/S370-08S', 'S370-08S Load Ring 30kn With Electric Stop Safety Device', 'Labs', '', '', '[{\"salesdisc\":\"S370-08S Load Ring 30kn With Electric Stop Safety Device\"}]'),
(26, 'M/S170-05', 'S170-05 Liquid Limit Device â€œRight Side Crankâ€.', 'Labs', '', '', '[{\"salesdisc\":\"S170-05 Liquid Limit Device â€œRight Side Crankâ€.\"}]'),
(27, 'I/M/G/T/1', 'Casagrande Grooving Tool', 'Labs', '', '', '[{\"salesdisc\":\"Casagrande Grooving Tool\"}]'),
(28, 'I/M/G/T/2', 'ASTM Grooving Tool', 'Labs', '', '', '[{\"salesdisc\":\"ASTM Grooving Tool\"}]'),
(30, 'M/B052-01', 'B052-01 Digital Water Bath', 'Labs', '', '', '[{\"salesdisc\":\"Digital Water Bath\"}]'),
(32, 'M/B051', 'B051 Digital Water Bath', 'Labs', '', '', '[{\"salesdisc\":\"B051 Digital Water Bath\"}]'),
(34, 'M/B074-01', 'B074-1 RING AND BALL Pyrex Beaker, Brass Frame, Two Tapered Rings, Two Ball Cantering Guides And Two Balls.', 'Labs', '', '', '[{\"salesdisc\":\"B074-1 RING AND BALL Pyrex Beaker, Brass Frame, Two Tapered Rings, Two Ball Cantering Guides And Two Balls.\"}]'),
(35, 'C/G/T/1', 'Glass Thermometer 0 + 250Â°C', 'Labs', '', '', '[{\"salesdisc\":\"Glass Thermometer 0 + 250Â°C\"}]'),
(36, 'C/G/T/2', 'Glass Thermometer 0 + 110Â°C', 'Labs', '', '', '[{\"salesdisc\":\"Glass Thermometer 0 + 110Â°C\"}]'),
(37, 'C/H/P/1', 'Hot Plate ', 'Labs', '', '', '[{\"salesdisc\":\"Hot Plate \"}]'),
(39, 'M/B056 KIT', 'B056 Kit Standard Dial Penetrometer', 'Labs', '', '', '[{\"salesdisc\":\"B056 KIT Standard Dial Penetrometer\"}]'),
(40, 'M/B057-01', 'B057-01 Penetration Needle Not Hardened.', 'Labs', '', '', '[{\"salesdisc\":\"B057-01 Penetration Needle Not Hardened.\"}]'),
(41, 'M/B057-04', 'B057-04 50 G Weights.', 'Labs', '', '', '[{\"salesdisc\":\"B057-04 50 G Weights.\"}]'),
(42, 'M/B057-05', 'B057-05 100 G Weights.', 'Labs', '', '', '[{\"salesdisc\":\"B057-05 100 G Weights.\"}]'),
(43, 'M/V122-05', 'V122-05 Sample Cup, Brass Made, Dia. 55x35 Mm', 'Labs', '', '', '[{\"salesdisc\":\"V122-05 Sample Cup, Brass Made, Dia. 55x35 Mm\"}]'),
(44, 'M/V122-06', 'V122-06 Sample Cup, Brass Made, Dia. 70x45 Mm', 'Labs', '', '', '[{\"salesdisc\":\"V122-06 Sample Cup, Brass Made, Dia. 70x45 Mm\"}]'),
(45, 'M/B057-03', 'B057-03 Transfer Dish,', 'Labs', '', '', '[{\"salesdisc\":\"B057-03 Transfer Dish,\"}]'),
(47, 'M/B011', 'B011 Centrifuge extractor 1500/3000 g capacity', 'Labs', '', '', '[{\"salesdisc\":\"B011 Centrifuge extractor 1500/3000 g capacity\"}]'),
(48, 'M/B010-12', 'B010-12 Bowl And Cover 3000 G. Capacity', 'Labs', '', '', '[{\"salesdisc\":\"B010-12 Bowl And Cover 3000 G. Capacity\"}]'),
(49, 'M/B010-16', 'B010-16 Filter Disc, 3000 G. Capacity. Pack Of 100 Pieces', 'Labs', '', '', '[{\"salesdisc\":\"B010-16 Filter Disc, 3000 G. Capacity. Pack Of 100 Pieces\"}]'),
(50, 'M/B010-11', 'B010-11 Bowl And Cover 1500 G. Capacity', 'Labs', '', '', '[{\"salesdisc\":\"B010-11 Bowl And Cover 1500 G. Capacity\"}]'),
(51, 'M/B010-15', 'B010-15 Filter Disc, 1500 G. Capacity. Pack Of 100 Pieces', 'Labs', '', '', '[{\"salesdisc\":\"B010-15 Filter Disc, 1500 G. Capacity. Pack Of 100 Pieces\"}]'),
(53, 'M/S132N', 'S132N Colour standard chart', 'Labs', '', '', '[{\"salesdisc\":\"S132N Colour standard chart\"}]'),
(54, 'M/S132-02', 'S132-02 Graduated Impurities Test Bottle, Stoppard, Pyrex Glass, 500 Ml, Marked At 130 And 200 Ml', 'Labs', '', '', '[{\"salesdisc\":\"S132-02 Graduated Impurities Test Bottle, Stoppard, Pyrex Glass, 500 Ml, Marked At 130 And 200 Ml\"}]'),
(56, 'M/S138', 'S138 ORGANIC MATTER TEST SET', 'Labs', '', '', '[{\"salesdisc\":\"S138 ORGANIC MATTER TEST SET\"}]'),
(58, 'M/B073-01', 'B073-01 Magnetic stirrer/heater', 'Labs', '', '', '[{\"salesdisc\":\"B073-01 Magnetic stirrer/heater\"}]'),
(60, 'M/E055N', 'E055N Vicat apparatus', 'Labs', '', '', '[{\"salesdisc\":\"E055N Vicat apparatus\"}]'),
(61, 'M/E046N', 'E046N Needle, Hardened Dia. 1,13 Mm EN 196-3:2005', 'Labs', '', '', '[{\"salesdisc\":\"E046N Needle, Hardened Dia. 1,13 Mm EN 196-3:2005\"}]'),
(62, 'M/E046-01N', 'E046-01N Needle, Hardened Dia. 1 Mm ASTM - AASHTO', 'Labs', '', '', '[{\"salesdisc\":\"E046-01N Needle, Hardened Dia. 1 Mm ASTM - AASHTO\"}]'),
(63, 'M/E055-10', 'E055-10 Conical Plastic Mould Dia. 70/80 H 40 Mm (EN - NF)', 'Labs', '', '', '[{\"salesdisc\":\"E055-10 Conical Plastic Mould Dia. 70/80 H 40 Mm (EN - NF)\"}]'),
(64, 'M/E055-05', 'E055-05 Conical Plastic Mould Dia. 60/70 H 40 Mm (ASTM - AASHTO)', 'Labs', '', '', '[{\"salesdisc\":\"E055-05 Conical Plastic Mould Dia. 60/70 H 40 Mm (ASTM - AASHTO)\"}]'),
(65, 'M/E055-04', 'E055-04 Conical Plastic Mould Dia. 80/90 H 40 Mm (UNI)', 'Labs', '', '', '[{\"salesdisc\":\"E055-04 Conical Plastic Mould Dia. 80/90 H 40 Mm (UNI)\"}]'),
(66, 'M/E055-13', 'E055-13 Conical Plastic Mould Dia. 65/75 H 40 Mm (DIN)', 'Labs', '', '', '[{\"salesdisc\":\"E055-13 Conical Plastic Mould Dia. 65/75 H 40 Mm (DIN)\"}]'),
(67, 'M/E055-11', 'E055-11 Conical Brass Mould Dia. 80/90 H 40 Mm (BS)', 'Labs', '', '', '[{\"salesdisc\":\"E055-11 Conical Brass Mould Dia. 80/90 H 40 Mm (BS)\"}]'),
(68, 'M/E055-06', 'E055-06 Additional Weight 700 G To The Sliding Probe', 'Labs', '', '', '[{\"salesdisc\":\"E055-06 Additional Weight 700 G To The Sliding Probe\"}]'),
(69, 'M/E042N', 'E042N Final Needle Dia. 1,13 Mm', 'Labs', '', '', '[{\"salesdisc\":\"E042N Final Needle Dia. 1,13 Mm\"}]'),
(70, 'M/E042-01N', 'E042-01N Final Needle Dia. 1 Mm', 'Labs', '', '', '[{\"salesdisc\":\"E042-01N Final Needle Dia. 1 Mm\"}]'),
(71, 'M/E055-08', 'E055-08 Glass Thermometer -10 To +50Â° C.', 'Labs', '', '', '[{\"salesdisc\":\"E055-08 Glass Thermometer -10 To +50Â° C.\"}]'),
(72, 'M/E044-40N', 'E044-40N Conical Penetration Needle Dia 8 Mm By 50 Mm Long For Gypsum Tests', 'Labs', '', '', '[{\"salesdisc\":\"E044-40N Conical Penetration Needle Dia 8 Mm By 50 Mm Long For Gypsum Tests\"}]'),
(73, 'M/E055-15', 'E055-15 Probe, Total Weight Of 100 G For Tests', 'Labs', '', '', '[{\"salesdisc\":\"E055-15 Probe, Total Weight Of 100 G For Tests\"}]'),
(74, 'M/E055-07', 'E055-07 Glass Base Plate Dia. 120 Mm', 'Labs', '', '', '[{\"salesdisc\":\"E055-07 Glass Base Plate Dia. 120 Mm\"}]'),
(75, 'M/E044-48N', 'E044-48N Tang To Fix The Needle To The Probe', 'Labs', '', '', '[{\"salesdisc\":\"E044-48N Tang To Fix The Needle To The Probe\"}]'),
(76, 'M/E042-02N', 'E042-02N Consistency Plunger Dia. 10x50 Mm', 'Labs', '', '', '[{\"salesdisc\":\"E042-02N Consistency Plunger Dia. 10x50 Mm\"}]'),
(78, 'M/E086 Kit', 'E086 Kit Flow Tables', 'Labs', '', '', '[{\"salesdisc\":\"E086 Kit Flow Tables\"}]'),
(79, 'M/E085-07', 'E085-07 FILLING HOPPER To The Mould.', 'Labs', '', '', ''),
(82, 'M/E077-01KIT', 'Length Comparator with Digital Gauge', 'Labs', '', '', '[{\"salesdisc\":\"Length Comparator with Digital Gauge\"}]'),
(83, 'M/E078-06', 'Reference rod for A107 mould ', 'Labs', '', '', '[{\"salesdisc\":\"Reference rod for A107 mould\"}]'),
(85, 'M/S051', 'Dynamic cone penetrometer (DCP)', 'Labs', '', '', '[{\"salesdisc\":\"Dynamic cone penetrometer (DCP)\"}]'),
(87, 'M/C319', 'Pavement core drilling machine', 'Labs', '', '', '[{\"salesdisc\":\"Pavement core drilling machine\"}]'),
(88, 'M/C339-03', 'Diamond core drill bits 100mm', 'Labs', '', '', '[{\"salesdisc\":\"Diamond core drill bits 100mm\"}]'),
(89, 'M/C344-01', 'Strap wrench', 'Labs', '', '', '[{\"salesdisc\":\"Strap wrench\"}]'),
(91, 'M/B099 KIT', 'MOT straight edge', 'Labs', '', '', '[{\"salesdisc\":\"MOT straight edge\"}]'),
(92, 'M/B099-01N', 'Graduated Wedges', 'Labs', '', '', '[{\"salesdisc\":\"Graduated Wedges\"}]'),
(94, 'M/V160-03', 'DIAL THERMOMETERS 0 +250', 'Labs', '', '', '[{\"salesdisc\":\"DIAL THERMOMETERS 0 +250\"}]'),
(96, 'M/S231 KIT', 'Sand density cone apparatus', 'Labs', '', '', '[{\"salesdisc\":\"Sand density cone apparatus\"}]'),
(97, 'M/S231-05', 'Metal double cone assembly with valve, Ã˜ 12â€', 'Labs', '', '', '[{\"salesdisc\":\"Metal double cone assembly with valve, Ã˜ 12â€\"}]'),
(98, 'M/S231-06', 'Metal base with fixed centre hole for cone housing.', 'Labs', '', '', '[{\"salesdisc\":\"Metal base with fixed centre hole for cone housing.\"}]'),
(99, 'M/S231-11', 'Plastic jar, 10 litre complete of cone fixing device', 'Labs', '', '', '[{\"salesdisc\":\"Plastic jar, 10 litre complete of cone fixing device\"}]'),
(101, 'C180-KIT', 'SLUMP CONE TEST SETS', 'Labs', '', '', '[{\"salesdisc\":\"SLUMP CONE TEST SETS\"}]'),
(102, 'M/C180-01', 'Slump Cone, â€œstainless steelâ€ made with sliding measuring rod', 'Labs', '', '', '[{\"salesdisc\":\"Slump Cone, â€œstainless steelâ€ made with sliding measuring rod\"}]'),
(103, 'M/C180-02', 'Tamping rod, galvanized steel, dia. 16 x 600 mm', 'Labs', '', '', '[{\"salesdisc\":\"Tamping rod, galvanized steel, dia. 16 x 600 mm\"}]'),
(104, 'M/C180-03', 'Slump Cone funnel, galvanized steel', 'Labs', '', '', '[{\"salesdisc\":\"Slump Cone funnel, galvanized steel\"}]'),
(105, 'M/C180-06', 'Graduated slump scale â€œengraved in 0,5 cmâ€ increments', 'Labs', '', '', '[{\"salesdisc\":\"Graduated slump scale â€œengraved in 0,5 cmâ€ increments\"}]'),
(106, 'M/C180-07', 'Base, galvanized steel, complete', 'Labs', '', '', '[{\"salesdisc\":\"Base, galvanized steel, complete\"}]'),
(107, 'M/V184', 'Aluminium scoop, 500 cc capacity', 'Labs', '', '', '[{\"salesdisc\":\"Aluminium scoop, 500 cc capacity\"}]'),
(108, 'M/V178-01', 'Fine wire brush', 'Labs', '', '', '[{\"salesdisc\":\"Fine wire brush\"}]'),
(111, 'M/A060-01', 'Sieve shaker motor operated', 'Labs', '', '', '[{\"salesdisc\":\"Sieve shaker motor operated\"}]'),
(113, 'M/S236-01 KIT', 'Sand replacement apparatus 150mm', 'Labs', '', '', '[{\"salesdisc\":\"Sand replacement apparatus 150mm\"}]'),
(115, 'M/S237 KIT', 'Sand replacement apparatus 200mm', 'Labs', '', '', '[{\"salesdisc\":\"Sand replacement apparatus 200mm\"}]'),
(117, 'M/A007', 'Laboratory Drying Ovens', 'Labs', '', '', '[{\"salesdisc\":\"Laboratory Drying Ovens\"}]'),
(119, 'M/V172', 'Soil hydrometers', 'Labs', '', '', '[{\"salesdisc\":\"Soil hydrometers\"}]'),
(121, 'M/V184-01', 'Round Stainless Steel Scoop', 'Labs', '', '', '[{\"salesdisc\":\"Round Stainless Steel Scoop\"}]'),
(123, 'M/V219', 'Metal stands', 'Labs', '', '', '[{\"salesdisc\":\"Metal stands\"}]'),
(125, 'M/B061-02', 'FILTER CARTRIDGES Pack of 25 pieces.', 'Labs', '', '', '[{\"salesdisc\":\"FILTER CARTRIDGES, dia. 58x170 mm for Pack of 25 pieces.\"}]'),
(127, 'M/C290-06', 'Capping Compound', 'Labs', '', '', '[{\"salesdisc\":\"Capping Compound\"}]'),
(129, 'M/C290-01', 'Cylinder cappers', 'Labs', '', '', '[{\"salesdisc\":\"Cylinder cappers\"}]'),
(130, 'M/C290-02', 'Cylinder Carrier', 'Labs', '', '', '[{\"salesdisc\":\"Cylinder Carrier\"}]'),
(132, 'M/C290-03 KIT', 'MELTING POT, capacity: 5 litres', 'Labs', '', '', '[{\"salesdisc\":\"MELTING POT, capacity: 5 litres\"}]'),
(134, 'M/V200', 'PLATE DIAMETER 185 mm - 1500 W', 'Labs', '', '', '[{\"salesdisc\":\"PLATE DIAMETER 185 mm - 1500 W\"}]'),
(135, 'U/S25', 'Motorised 50kN CBR Test Machine', 'Labs', '', '', '[{\"salesdisc\":\"Motorised 50kN CBR Test Machine\"}]'),
(136, 'C/LR/50', 'Load Ring 50kN ', 'Labs', '', '', '[{\"salesdisc\":\"Load Ring 50kN \"}]'),
(137, 'C/LR/10', 'Load Ring 10kN', 'Labs', '', '', '[{\"salesdisc\":\"Load Ring 10kN \"}]'),
(138, 'W/P/1', 'Plunger ', 'Labs', '', '', '[{\"salesdisc\":\"Plunger\"}]'),
(139, 'C/DG/25', 'Dial Gauge 25mm x 0.01', 'Labs', '', '', '[{\"salesdisc\":\"Dial Gauge 25mm x 0.01\"}]'),
(141, 'U/TM1', '50kN Motorised Marshall Test Machine ', 'Labs', '', '', '[{\"salesdisc\":\"50kN Motorised Marshall Test Machine\"}]'),
(143, 'C/KR/30', 'Load Ring 30kN', 'Labs', '', '', '[{\"salesdisc\":\"Load Ring 30kN\"}]'),
(144, 'U/TM3/A', 'Stability Mould (Breaking Head) ', 'Labs', '', '', '[{\"salesdisc\":\"Stability Mould (Breaking Head)\"}]'),
(145, 'U/TM4', 'Flow Meter (Dial Gauge) 25mm x 0.01mm', 'Labs', '', '', '[{\"salesdisc\":\"Flow Meter (Dial Gauge) 25mm x 0.01mm\"}]'),
(147, 'U/TM8', 'Centrifuge Extractor', 'Labs', '', '', '[{\"salesdisc\":\"Centrifuge Extractor\"}]'),
(148, 'U/TM8/B', 'Extractor Bowl ', 'Labs', '', '', '[{\"salesdisc\":\"Extractor Bowl \"}]'),
(149, 'U/TM9', 'Filter Paper 300mm (Pack of 50)', 'Labs', '', '', '[{\"salesdisc\":\"Filter Paper 300mm (Pack of 50)\"}]'),
(151, 'U/S30', 'JKR Mackintosh & Mackintosh Prospecting Kit ', 'Labs', '', '', '[{\"salesdisc\":\"JKR Mackintosh & Mackintosh Prospecting Kit\"}]'),
(153, 'U/TM30', 'Speedy Moisture Tester ', 'Labs', '', '', '[{\"salesdisc\":\"Speedy Moisture Tester\"}]'),
(155, 'U/S32', 'Core Cutter 100mm dia x 130mm', 'Labs', '', '', '[{\"salesdisc\":\"Core Cutter 100mm dia x 130mm\"}]'),
(156, 'U/32/A', 'Driving Dolly', 'Labs', '', '', '[{\"salesdisc\":\"Driving Dolly\"}]'),
(157, 'U/32/B', 'Driving Rammer with Steel Handle ', 'Labs', '', '', '[{\"salesdisc\":\"Driving Rammer with Steel Handle \"}]'),
(159, 'U/U2/F', 'Thermostatic Control Oven  120L', 'Labs', '', '', '[{\"salesdisc\":\"Thermostatic Control Oven 120L\"}]'),
(161, 'U/CC1/2', '100mm  Core Bit', 'Labs', '', '', '[{\"salesdisc\":\"100mm  Core Bit\"}]'),
(163, 'C/CTM/1', 'CTM 2000kN Concrete Compression Testing Machine with Out Wheel (CTM2000)', 'Labs', '', '', '[{\"salesdisc\":\"ECO Concrete Compression Testing Machine 2000kN (CTM2000)\"}]'),
(165, 'C/CTM/2', 'CTM 2000kN Concrete Compression Testing Machine  with  Wheel (CTM 2000D)', 'Labs', '', '', '[{\"salesdisc\":\"Concrete Compression Testing Machine 2000kN (2000D)\"}]'),
(167, 'C/PCM/1', 'Core drilling Machine China ', 'Labs', '', '', '[{\"salesdisc\":\"UTS Core Drilling Machine\"}]'),
(168, 'C/CB/1', 'Black Core Bit 100mm', 'Labs', '', '', '[{\"salesdisc\":\"Black Core Bit 100mm\"}]'),
(170, 'C/ECM/1', 'Electric Core Drilling machine China', 'Labs', '', '', '[{\"salesdisc\":\"Electric Core Drilling machine China\"}]'),
(171, 'C/CB/2', 'Core Bit 100mm China', 'Labs', '', '', '[{\"salesdisc\":\"Core Bit 100mm China\"}]'),
(173, 'C/DA/1', 'Ductility Apparatus', 'Labs', '', '', '[{\"salesdisc\":\"ECO Ductility Apparatus\"}]'),
(176, 'C/RO/1', 'Rolling Thin Film Oven ', 'Labs', '', '', '[{\"salesdisc\":\"Eco Rolling Thin Film Oven\"}]'),
(177, 'C/RO/G/1', 'Glass Containers ', 'Labs', '', '', '[{\"salesdisc\":\"Glass Containers \"}]'),
(179, 'C/MC/1', 'Marshall Compactor China', 'Labs', '', '', '[{\"salesdisc\":\"Marshall Compactor ECO or China\"}]'),
(180, 'C/M/MO/1', 'Marshall Mould ECO Type', 'Labs', '', '', '[{\"salesdisc\":\"Marshall Mould ECO type\"}]'),
(182, 'C/CBR/1', 'California Bearing Ratio test', 'Labs', '', '', '[{\"salesdisc\":\"California Bearing Ratio test\"}]'),
(185, 'C/P/1', 'Plunger ', 'Labs', '', '', '[{\"salesdisc\":\"Plunger\"}]'),
(188, 'C/SC/1', 'Specimen Cutting Machine ', 'Labs', '', '', '[{\"salesdisc\":\"Specimen Cutting Machine\"}]'),
(189, 'C/C/W/1', 'Cutting Wheel ', 'Labs', '', '', '[{\"salesdisc\":\"Cutting Wheel\"}]'),
(191, 'C/KWF/1', 'Thermostatic Oven 620L', 'Labs', '', '', '[{\"salesdisc\":\"Thermostatic Oven 620L\"}]'),
(193, 'C/KWF/2', 'Thermostatic Oven 240L', 'Labs', '', '', '[{\"salesdisc\":\"Thermostatic Oven 240L\"}]'),
(195, 'C/KWF/3', 'Thermostatic Oven 140L', 'Labs', '', '', '[{\"salesdisc\":\"Thermostatic Oven 140L\"}]'),
(197, 'C/TD/1', 'Theatrical Density Meter  ', 'Labs', '', '', '[{\"salesdisc\":\"Theatrical Density Meter  \"}]'),
(199, 'C/SE/1', 'Sand Equivalent Shaker ', 'Labs', '', '', '[{\"salesdisc\":\"Sand Equivalent Shaker\"}]'),
(201, 'C/SE/2', 'Sample Extruder ', 'Labs', '', '', '[{\"salesdisc\":\"Sample Extruder \"}]'),
(203, 'C/AIV/1', 'Aggregate Impact Value ', 'Labs', '', '', '[{\"salesdisc\":\"Aggregate Impact Value\"}]'),
(204, 'C/ACV/M/1', 'Cylindrical Mould ', 'Labs', '', '', '[{\"salesdisc\":\"Cylindrical Mould\"}]'),
(205, 'C/ACV/T/1', 'Tamping Rod', 'Labs', '', '', '[{\"salesdisc\":\"Tamping Rod\"}]'),
(207, 'C/FD/1', 'Sand Pouring Cylinder 200mm', 'Labs', '', '', '[{\"salesdisc\":\"Sand Pouring Cylinder 200mm\"}]'),
(209, 'C/FD/2', 'Sand Pouring Cylinder 150mm', 'Labs', '', '', '[{\"salesdisc\":\"Sand Pouring Cylinder 150mm\"}]'),
(211, 'C/FD/3', 'Sand Pouring Cylinder 100mm', 'Labs', '', '', '[{\"salesdisc\":\"Sand Pouring Cylinder 100mm\"}]'),
(213, 'C/ACV/1', 'Aggregate Crushing Value ', 'Labs', '', '', '[{\"salesdisc\":\"Aggregate Crushing Value\"}]'),
(214, 'C/ACV/2', 'Measuring Cup', 'Labs', '', '', '[{\"salesdisc\":\"Measuring Cup\"}]'),
(215, 'C/ACV/3', 'Tamping Rod', 'Labs', '', '', '[{\"salesdisc\":\"Tamping Rod\"}]'),
(217, 'C/MR/1', 'Modified Compaction Rammer 4.54kg ASTM', 'Labs', '', '', '[{\"salesdisc\":\"Modified Compaction Rammer 4.54kg ASTM\"}]'),
(219, 'C/MR/2', 'Modified Compaction Rammer 4.5kg BS', 'Labs', '', '', '[{\"salesdisc\":\"Modified Compaction Rammer 4.5kg BS\"}]'),
(221, 'C/MM/1', 'Modified Compaction Mould ASTM', 'Labs', '', '', '[{\"salesdisc\":\"Modified Compaction Mould ASTM\"}]'),
(223, 'C/MM/2', 'Modified Compaction Mould BS', 'Labs', '', '', '[{\"salesdisc\":\"Modified Compaction Mould BS\"}]'),
(225, 'C/SR/1', 'Standard Compaction Rammer 2.54kg ASTM', 'Labs', '', '', '[{\"salesdisc\":\"Standard Compaction Rammer 2.54kg ASTM\"}]'),
(227, 'C/SR/2', 'Standard Compaction Rammer 2.5kg BS', 'Labs', '', '', '[{\"salesdisc\":\"Standard Compaction Rammer 2.5kg BS\"}]'),
(229, 'C/SM/1', 'Standard Compaction Mould ASTM', 'Labs', '', '', '[{\"salesdisc\":\"Standard Compaction Mould ASTM\"}]'),
(231, 'C/SM/2', 'Standard Compaction Mould BS', 'Labs', '', '', '[{\"salesdisc\":\"Standard Compaction Mould BS\"}]'),
(233, 'C/FP/1', 'Filter Paper 320mm', 'Labs', '', '', '[{\"salesdisc\":\"Filter Paper 320mm\"}]'),
(235, 'C/FP/2', 'Filter Paper 300mm', 'Labs', '', '', '[{\"salesdisc\":\"Filter Paper 300mm\"}]'),
(237, 'C/FP/3', 'Filter Paper 250mm', 'Labs', '', '', '[{\"salesdisc\":\"Filter Paper 250mm\"}]'),
(239, 'C/CBR/M/1', 'CBR Mould BS', 'Labs', '', '', '[{\"salesdisc\":\"CBR Mould BS\"}]'),
(241, 'C/CBR/M/', 'CBR Mould ASTM', 'Labs', '', '', '[{\"salesdisc\":\"CBR Mould BS ASTM\"}]'),
(243, 'C/ST/1', 'CBR Swell Tripod ', 'Labs', '', '', '[{\"salesdisc\":\"CBR Swell Tripod\"}]'),
(245, 'C/SP/1', 'CBR Swell Plate', 'Labs', '', '', '[{\"salesdisc\":\"CBR Swell Plate\"}]'),
(247, 'C/DG/10', 'Dial Gauge 10mm x 0.01mm', 'Labs', '', '', '[{\"salesdisc\":\"Dial Gauge 10mm x 0.01mm\"}]'),
(249, 'C/DG/30', 'Dial Gauge 30mm x 0.01mm', 'Labs', '', '', '[{\"salesdisc\":\"Dial Gauge 30mm x 0.01mm\"}]'),
(251, 'C/EC/1', 'CBR Mould Extension Collar ASTM ', 'Labs', '', '', '[{\"salesdisc\":\"CBR Mould Extension Collar ASTM\"}]'),
(253, 'C/CC/1', 'Cutting Collar ', 'Labs', '', '', '[{\"salesdisc\":\"Cutting Collar\"}]'),
(255, 'C/SW/1', 'Surcharge Weight 2.27kg Ring Type ', 'Labs', '', '', '[{\"salesdisc\":\"Surcharge Weight 2.27kg Ring Type \"}]'),
(257, 'C/SW/2', 'Surcharge Weight 2.27kg Slotted Type', 'Labs', '', '', '[{\"salesdisc\":\"Surcharge Weight 2.27kg Slotted Type\"}]'),
(259, 'C/SW/3', 'Surcharge Weight 2.27kg Split Type', 'Labs', '', '', '[{\"salesdisc\":\"Surcharge Weight 2.27kg Split Type\"}]'),
(261, 'C/SW/4', 'Surcharge Weight 2kg Ring Type ', 'Labs', '', '', '[{\"salesdisc\":\"Surcharge Weight 2kg Ring Type \"}]'),
(263, 'C/SW/5', 'Surcharge Weight 2kg Slotted Type', 'Labs', '', '', '[{\"salesdisc\":\"Surcharge Weight 2kg Slotted Type\"}]'),
(265, 'C/SW/6', 'Surcharge Weight 2kg Split Type', 'Labs', '', '', '[{\"salesdisc\":\"Surcharge Weight 2kg Split Type\"}]'),
(267, 'C/SW/7', 'Surcharge Weight 1kg Ring Type', 'Labs', '', '', '[{\"salesdisc\":\"Surcharge Weight 1kg Ring Type\"}]'),
(269, 'C/BP/1', 'Perforated Base Plate ASTM ', 'Labs', '', '', '[{\"salesdisc\":\"Perforated Base Plate ASTM \"}]'),
(271, 'C/BP/3', 'Perforated Base Plate BS ', 'Labs', '', '', '[{\"salesdisc\":\"Perforated Base Plate BS \"}]'),
(273, 'C/SB/1', 'Solid Base Plate ASTM ', 'Labs', '', '', '[{\"salesdisc\":\"Solid Base Plate ASTM\"}]'),
(275, 'C/SB/2', 'Solid Base Plate BS', 'Labs', '', '', '[{\"salesdisc\":\"Solid Base Plate BS\"}]'),
(277, 'C/SB/3', 'Solid Base Plate ASTM Round ', 'Labs', '', '', '[{\"salesdisc\":\"Solid Base Plate ASTM Round\"}]'),
(279, 'C/PB/1', 'Perforated Base Plate ASTM Round', 'Labs', '', '', '[{\"salesdisc\":\"Perforated Base Plate ASTM Round\"}]'),
(280, 'C/CS/1', 'C Spanner ', 'Labs', '', '', '[{\"salesdisc\":\"C Spanner\"}]'),
(282, 'C/BT/1', 'Base Plate Tool', 'Labs', '', '', '[{\"salesdisc\":\"Base Plate Tool\"}]'),
(286, 'C/SP/2', 'Spatula 150mm', 'Labs', '', '', '[{\"salesdisc\":\"Spatula 150mm\"}]'),
(288, 'C/SP/3', 'Spatula 100mm', 'Labs', '', '', '[{\"salesdisc\":\"Spatula 100mm\"}]'),
(290, 'C/AM/1', 'Aluminium Moister Containers 75mm x 50mm', 'Labs', '', '', '[{\"salesdisc\":\"Aluminium Moister Containers 75mm x 50mm\"}]'),
(292, 'C/AM/2', 'Aluminium Moister Containers 75mm x 25mm', 'Labs', '', '', '[{\"salesdisc\":\"Aluminium Moister Containers 75mm x 25mm\"}]'),
(294, 'C/SH/1', 'Soil Hydrometer China', 'Labs', '', '', '[{\"salesdisc\":\"Soil Hydrometer China\"}]'),
(296, 'C/FI/1', 'Flakiness Index Gauge ', 'Labs', '', '', '[{\"salesdisc\":\"Flakiness Index Gauge\"}]'),
(298, 'C/EG/1', 'Elongation Gauge ', 'Labs', '', '', '[{\"salesdisc\":\"Elongation Gauge\"}]'),
(300, 'C/TV/1', '10% Value ', 'Labs', '', '', '[{\"salesdisc\":\"10% Value\"}]'),
(301, 'C/TV/2', 'Measuring Cup', 'Labs', '', '', '[{\"salesdisc\":\"Measuring Cup\"}]'),
(302, 'C/TV/3', 'Tamping rod', 'Labs', '', '', '[{\"salesdisc\":\"Tamping rod\"}]'),
(304, 'C/SA/1', 'Sand Absorption Cone and Tamper', 'Labs', '', '', '[{\"salesdisc\":\"Sand Absorption Cone and Tamper\"}]'),
(306, 'C/DV/1', 'Glass Desecrater Vacuum  ', 'Labs', '', '', '[{\"salesdisc\":\"Glass Desecrater Vacuum  \"}]'),
(308, 'C/DN/1', 'Glass Desecrater Non Vacuum  ', 'Labs', '', '', '[{\"salesdisc\":\"Glass Desecrater Non Vacuum  \"}]'),
(310, 'C/GB/1', 'Specific Gravity Bottle 100ml', 'Labs', '', '', '[{\"salesdisc\":\"Specific Gravity Bottle 100ml\"}]'),
(312, 'C/HA/1', '3M Hand Auger', 'Labs', '', '', '[{\"salesdisc\":\"3M Hand Auger\"}]'),
(314, 'C/HM/2', 'Heating Mantle 200mm ', 'Labs', '', '', '[{\"salesdisc\":\"Heating Mantle 200mm\"}]'),
(316, 'C/DP/2', 'Dial Penetrometer ', 'Labs', '', '', '[{\"salesdisc\":\"Dial Penetrometer\"}]'),
(317, 'C/DP/3', 'Penetration Needle', 'Labs', '', '', '[{\"salesdisc\":\"Penetration Needle\"}]'),
(318, 'C/DP/4', '50 G Weights.', 'Labs', '', '', '[{\"salesdisc\":\"50 G Weights.\"}]'),
(319, 'C/DP/5', '100 G Weights.', 'Labs', '', '', '[{\"salesdisc\":\"100 G Weights.\"}]'),
(320, 'C/DP/6', 'Sample Cup, Brass Made, Dia. 55x35 Mm', 'Labs', '', '', '[{\"salesdisc\":\"Sample Cup, Brass Made, Dia. 55x35 Mm\"}]'),
(321, 'C/DP/7', 'Sample Cup, Brass Made, Dia. 70x45 Mm', 'Labs', '', '', '[{\"salesdisc\":\"Sample Cup, Brass Made, Dia. 70x45 Mm\"}]'),
(325, 'C/CDP/1', 'Cone Dial Penetrometer ', 'Labs', '', '', '[{\"salesdisc\":\"Cone Dial Penetrometer\"}]'),
(330, 'C/CDP/2', 'Cone ', 'Labs', '', '', '[{\"salesdisc\":\"Cone \"}]'),
(333, 'C/SC/2', 'Tamping Rod', 'Labs', '', '', '[{\"salesdisc\":\"Tamping Rod\"}]'),
(334, 'C/SC/3', 'Tray', 'Labs', '', '', '[{\"salesdisc\":\"Tray \"}]'),
(335, 'C/SC/4', 'Funnel ', 'Labs', '', '', '[{\"salesdisc\":\"Funnel \"}]'),
(336, 'C/SC/5', 'Steel Ruler 300mm', 'Labs', '', '', '[{\"salesdisc\":\"Steel Ruler 300mm\"}]'),
(338, 'C/CP/5', 'Compaction Plug ASTM (Spacer Disk)', 'Labs', '', '', '[{\"salesdisc\":\"Compaction Plug ASTM (Spacer Disk)\"}]'),
(340, 'C/CP/6', 'Compaction Plug BS (Spacer Disk)', 'Labs', '', '', '[{\"salesdisc\":\"Compaction Plug BS (Spacer Disk)\"}]'),
(342, 'C/DT/H/3', 'Dial Thermometer Humboldt ', 'Labs', '', '', '[{\"salesdisc\":\"Dial Thermometer Humboldt\"}]'),
(344, 'C/2610B', 'Triple Beam Balance MB2610', 'Labs', '', '', '[{\"salesdisc\":\"Triple Beam Balance MB2610\"}]'),
(346, 'C/311B', 'Triple Beam Balance MB311', 'Labs', '', '', '[{\"salesdisc\":\"Triple Beam Balance MB311\"}]'),
(348, 'C/S/2', 'Stainless Steel Scoop 125ml', 'Labs', '', '', '[{\"salesdisc\":\"Stainless Steel Scoop 125ml\"}]'),
(350, 'C/S/3', 'Stainless Steel Scoop 350ml', 'Labs', '', '', '[{\"salesdisc\":\"Stainless Steel Scoop 350ml\"}]'),
(352, 'C/S/4', 'Stainless Steel Scoop 500ml', 'Labs', '', '', '[{\"salesdisc\":\"Stainless Steel Scoop 500ml\"}]'),
(354, 'C/S/5', 'Stainless Steel Scoop 1000ml', 'Labs', '', '', '[{\"salesdisc\":\"Stainless Steel Scoop 1000ml\"}]'),
(356, 'C/T/1', 'Suitable Tongs 300mm', 'Labs', '', '', '[{\"salesdisc\":\"Suitable Tongs 300mm\"}]'),
(358, 'C/S/S/1', 'Standard Sand Packet 1350g', 'Labs', '', '', '[{\"salesdisc\":\"Standard Sand Packet 1350g\"}]'),
(360, 'C/LS/M/1', 'Linear Shrinkage Mould ', 'Labs', '', '', '[{\"salesdisc\":\"Linear Shrinkage Mould\"}]'),
(362, 'C/WS/1', '200Dia 75mic Wash Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200Dia 75mic Wash Sieve\"}]'),
(364, 'C/WS/2', '200Dia 63mic Wash Sieve', 'Labs', '', '', '[{\"salesdisc\":\"200Dia 63mic Wash Sieve\"}]'),
(366, 'C/P/CM/1', 'Plastic Cube Mould ', 'Labs', '', '', '[{\"salesdisc\":\"Plastic Cube Mould\"}]'),
(368, 'C/CM/3', 'Cube Mould 200 x 200mm', 'Labs', '', '', '[{\"salesdisc\":\"Cube Mould 200 x 200mm\"}]'),
(370, 'C/CM/4', 'Cube Mould 16kg 2parts ', 'Labs', '', '', '[{\"salesdisc\":\"Cube Mould 16kg 2parts\"}]'),
(372, 'C/CN/5', 'Cube Mould 16kg 4parts', 'Labs', '', '', '[{\"salesdisc\":\"Cube Mould 10kg 4parts\"}]'),
(374, 'C/CM/5', 'Cube Mould 10kg 4parts', 'Labs', '', '', '[{\"salesdisc\":\"Cube Mould 10kg 4parts\"}]'),
(376, 'C/CM/6', '3 Gan Mould 100 x 100 x 100mm', 'Labs', '', '', '[{\"salesdisc\":\"3 Gan Mould 100 x 100 x 100mm\"}]'),
(378, 'C/CM/7', 'Cylinder Mould 150 x 300mm', 'Labs', '', '', '[{\"salesdisc\":\"Cylinder Mould 150 x 300mm\"}]'),
(379, 'I/LAV/1', 'LAV Machine ', 'Labs', '', '', '[{\"salesdisc\":\"LAV Machine\"}]'),
(381, 'I/OV/2', 'Oven 140L', 'Labs', '', '', '[{\"salesdisc\":\"Oven 140L\"}]'),
(383, 'I/SP/3', 'Speedy Moisture Meter', 'Labs', '', '', '[{\"salesdisc\":\"Speedy Moisture Meter\"}]'),
(385, 'I/HO/4', '1M Hand Auger', 'Labs', '', '', '[{\"salesdisc\":\"1M Hand Auger\"}]'),
(387, 'I/SB/5', '20Kg Solution Balance', 'Labs', '', '', '[{\"salesdisc\":\"20Kg Solution Balance\"}]'),
(389, 'I/DT/6', 'Dial Thermometer  0 + 250Â°C(600cm)', 'Labs', '', '', '[{\"salesdisc\":\"Dial Thermometer  0 + 250Â°C(600cm)\"}]'),
(391, 'I/CM/7', 'CBR Mould ASTM', 'Labs', '', '', '[{\"salesdisc\":\"CBR Mould ASTM\"}]'),
(393, 'I/CM/8', 'CBR Mould BS', 'Labs', '', '', '[{\"salesdisc\":\"CBR Mould BS\"}]'),
(395, 'I/DG/9', 'Dial Gauge 25mm  x 0.01mm', 'Labs', '', '', '[{\"salesdisc\":\"Dial Gauge 25mm  x 0.01mm\"}]'),
(397, 'I/PB/10', 'Pyconometer  Bottle 1000ml', 'Labs', '', '', '[{\"salesdisc\":\"Pyconometer  Bottle 1000ml\"}]'),
(399, 'I/LL/11', 'Liquid Limit Device ', 'Labs', '', '', '[{\"salesdisc\":\"Liquid Limit Device\"}]'),
(400, 'I/GT/12', 'Casagrande  Grooving Tool', 'Labs', '', '', '[{\"salesdisc\":\"Casagrande  Grooving Tool\"}]'),
(401, 'I/GT/13', 'ASTM  Grooving Tool', 'Labs', '', '', '[{\"salesdisc\":\"ASTM  Grooving Tool\"}]'),
(403, 'I/SS/14', 'Sieve Shaker (UTS) With Tow Rods', 'Labs', '', '', '[{\"salesdisc\":\"Sieve Shaker (UTS) With Tow Rods\"}]'),
(405, 'I/GT/15', 'Glass Thermometer 0+50Â°C', 'Labs', '', '', '[{\"salesdisc\":\"Glass Thermometer 0+50Â°C\"}]'),
(407, 'I/GT/16', 'Glass Thermometer 0+110Â°C', 'Labs', '', '', '[{\"salesdisc\":\"Glass Thermometer 0+110Â°C\"}]'),
(409, 'I/GT/17', 'Glass Thermometer 0+250Â°C', 'Labs', '', '', '[{\"salesdisc\":\"Glass Thermometer 0+250Â°C\"}]'),
(411, '     I/ED/18', 'Ever Poring Disck ', 'Labs', '', '', '[{\"salesdisc\":\"Ever Poring Disck\"}]'),
(413, 'I/SS/19', 'Sieve Shaker ', 'Labs', '', '', '[{\"salesdisc\":\"Sieve Shaker  (UTS)\"}]'),
(416, 'L/MC/1', 'Measuring Cylinder 1000ml (Plastic)', 'Labs', '', '', '[{\"salesdisc\":\"Measuring Cylinder 1000ml (Plastic)\"}]'),
(418, 'L/MC/2', 'Measuring Cylinder 500ml (Plastic)', 'Labs', '', '', '[{\"salesdisc\":\"Measuring Cylinder 500ml (Plastic)\"}]'),
(420, 'L/MC/3', 'Measuring Cylinder 250ml (Plastic)', 'Labs', '', '', '[{\"salesdisc\":\"Measuring Cylinder 250ml (Plastic)\"}]'),
(422, 'L/MC/4', 'Measuring Cylinder 100ml (Plastic)', 'Labs', '', '', '[{\"salesdisc\":\"Measuring Cylinder 100ml (Plastic)\"}]'),
(424, 'L/MC/5', 'Measuring Cylinder 50ml (Plastic)', 'Labs', '', '', '[{\"salesdisc\":\"Measuring Cylinder 50ml (Plastic)\"}]'),
(426, 'L/MG/6', 'Measuring Cylinder 1000ml (Glass)', 'Labs', '', '', '[{\"salesdisc\":\"Measuring Cylinder 1000ml (Glass)\"}]'),
(428, 'L/MG/7', 'Measuring Cylinder 500ml (Glass )', 'Labs', '', '', '[{\"salesdisc\":\"Measuring Cylinder 500ml (Glass)\"}]'),
(430, 'L/MG/8', 'Measuring Cylinder 250ml (Glass)', 'Labs', '', '', '[{\"salesdisc\":\"Measuring Cylinder 250ml (Glass)\"}]'),
(432, 'L/MG/9', 'Measuring Cylinder 100ml (Glass)', 'Labs', '', '', '[{\"salesdisc\":\"Measuring Cylinder 100ml (Glass )\"}]'),
(434, 'L/MG/10', 'Measuring Cylinder 50ml (Glass )', 'Labs', '', '', '[{\"salesdisc\":\"Measuring Cylinder 50ml (Glass)\"}]'),
(438, 'L/VG/1', 'Volumetric  Flask  1000ml (Glass Pyrex)', 'Labs', '', '', '[{\"salesdisc\":\"Volumetric  Flask  1000ml  (Glass Pyrex)\"}]'),
(440, 'L/VG/2', 'Volumetric  Flask  500ml (Glass Pyrex)', 'Labs', '', '', '[{\"salesdisc\":\"Volumetric  Flask  500ml (Glass Pyrex)\"}]'),
(442, 'L/VG/3', 'Volumetric  Flask  250ml (Glass Pyrex)', 'Labs', '', '', '[{\"salesdisc\":\"Volumetric  Flask  250ml (Glass Pyrex)\"}]'),
(444, 'L/VG/4', 'Volumetric  Flask  100ml (Glass Pyrex)', 'Labs', '', '', '[{\"salesdisc\":\"Volumetric  Flask  100ml (Glass Pyrex) \"}]'),
(446, 'L/VG/5', 'Volumetric  Flask  1000ml  (Glass -N)', 'Labs', '', '', '[{\"salesdisc\":\"Volumetric  Flask  1000ml  (Glass -N)\"}]'),
(448, 'L/VG/6', 'Volumetric  Flask  500ml  (Glass -N)', 'Labs', '', '', '[{\"salesdisc\":\"Volumetric  Flask  500ml  (Glass -N)\"}]'),
(450, 'L/VG/7', 'Volumetric  Flask  250ml   (Glass -N)', 'Labs', '', '', '[{\"salesdisc\":\"Volumetric  Flask  250ml  (Glass -N)\"}]'),
(452, 'L/VG/9', 'Volumetric  Flask  100ml  (Glass -N) ', 'Labs', '', '', '[{\"salesdisc\":\"Volumetric  Flask  100ml  (Glass -N) \"}]'),
(454, 'L/VP/10', 'Volumetric  Flask  1000ml  (Plastic)', 'Labs', '', '', '[{\"salesdisc\":\"Volumetric  Flask  1000ml  (Plastic)\"}]'),
(456, 'L/VP/11', 'Volumetric  Flask  500ml  (Plastic)', 'Labs', '', '', '[{\"salesdisc\":\"Volumetric  Flask  500ml  (Plastic)\"}]'),
(458, 'L/VP/12', 'Volumetric  Flask  250ml   (Plastic)', 'Labs', '', '', '[{\"salesdisc\":\"Volumetric  Flask  250ml   (Plastic)\"}]'),
(460, 'L/VP/13', 'Volumetric  Flask  100ml  (Plastic) ', 'Labs', '', '', '[{\"salesdisc\":\"Volumetric  Flask  100ml  (Plastic) \"}]'),
(462, 'L/CF/1', 'Conical Flask 1000ml (Glass)', 'Labs', '', '', '[{\"salesdisc\":\"Conical Flask 1000ml (Glass)\"}]'),
(464, 'L/CF/2', 'Conical Flask 500ml (Glass)', 'Labs', '', '', '[{\"salesdisc\":\"Conical Flask 500ml (Glass)\"}]'),
(466, 'L/CF/3', 'Conical Flask 250ml (Glass)', 'Labs', '', '', '[{\"salesdisc\":\"Conical Flask 250ml (Glass)\"}]'),
(468, 'L/CF/4', 'Conical Flask 100ml (Glass)', 'Labs', '', '', '[{\"salesdisc\":\"Conical Flask 100ml (Glass)\"}]'),
(470, 'L/GB/1', 'Glass Beaker 1000ml ', 'Labs', '', '', '[{\"salesdisc\":\"Glass Beaker 1000ml \"}]'),
(472, 'L/GB/2', 'Glass Beaker 500ml', 'Labs', '', '', '[{\"salesdisc\":\"Glass Beaker 500ml\"}]'),
(474, 'L/GB/3', 'Glass Beaker 250ml', 'Labs', '', '', '[{\"salesdisc\":\"Glass Beaker 250ml\"}]'),
(476, 'L/GB/4', 'Glass Beaker 100ml', 'Labs', '', '', '[{\"salesdisc\":\"Glass Beaker 100ml\"}]'),
(478, 'L/WB/1', 'Wash  Bottle  500ml', 'Labs', '', '', '[{\"salesdisc\":\"Wash  Bottle  500ml\"}]'),
(480, 'L/WB/2', 'Wash  Bottle  250ml', 'Labs', '', '', '[{\"salesdisc\":\"Wash  Bottle  250ml\"}]'),
(482, 'L/TB/01', 'Tool Box ( Only)', 'Labs', '', '', '[{\"salesdisc\":\"Tool Box ( Only)\"}]'),
(484, 'L/PW/02', 'Pipe Wrench 18â€ ', 'Labs', '', '', '[{\"salesdisc\":\"Pipe Wrench 18â€\"}]'),
(486, 'L/OW/03', 'Open Wrench Set', 'Labs', '', '', '[{\"salesdisc\":\"Open Wrench Set\"}]'),
(488, 'L/EK/04', 'Ellen key Set', 'Labs', '', '', '[{\"salesdisc\":\"Ellen key Set\"}]'),
(490, 'L/PT/05', '5m Pocket Tape', 'Labs', '', '', '[{\"salesdisc\":\"5m Pocket Tape\"}]'),
(492, 'L/FS/06', 'Flat Screw  8â€™â€™', 'Labs', '', '', '[{\"salesdisc\":\"Flat Screw  8â€™â€™\"}]'),
(494, 'L/PS/07', 'Philip Screw  8â€™â€™', 'Labs', '', '', '[{\"salesdisc\":\"Philip Screw  8â€™â€™\"}]'),
(496, 'L/FT/08', 'Flat Screw  6â€™â€™', 'Labs', '', '', '[{\"salesdisc\":\"Flat Screw  6â€™â€™\"}]'),
(498, '     L/PS/09', 'Philip Screw  6â€™â€™', 'Labs', '', '', '[{\"salesdisc\":\"Philip Screw  6â€™â€™\"}]'),
(500, '     L/CP/10', 'Cutting Player ', 'Labs', '', '', '[{\"salesdisc\":\"Cutting Player\"}]'),
(502, 'L/NP/11', 'Nose Player ', 'Labs', '', '', '[{\"salesdisc\":\"Nose Player\"}]'),
(504, 'L/ST/12', 'Shifter  10â€™â€™', 'Labs', '', '', '[{\"salesdisc\":\"Shifter 10â€™â€™\"}]'),
(506, 'L/CH/13', 'Claw  Hammer', 'Labs', '', '', '[{\"salesdisc\":\"Claw  Hammer\"}]'),
(508, 'L/WB/14', 'Wheel  Barrow ', 'Labs', '', '', '[{\"salesdisc\":\"Wheel  Barrow\"}]'),
(510, 'L/SH/15', 'Safety  Helmet', 'Labs', '', '', '[{\"salesdisc\":\"Safety  Helmet\"}]'),
(512, 'L/SJ/16', 'Safety  Jacket', 'Labs', '', '', '[{\"salesdisc\":\"Safety  Jacket\"}]'),
(514, 'L/SG/17', 'Safety   Goggles', 'Labs', '', '', '[{\"salesdisc\":\"Safety   Goggles\"}]'),
(516, 'L/DM/18', 'Dust  Mask ', 'Labs', '', '', '[{\"salesdisc\":\"Dust  Mask\"}]'),
(518, 'L/SW/19', 'Shovel ', 'Labs', '', '', '[{\"salesdisc\":\"Shovel\"}]'),
(520, 'L/CB/20', 'Crow  Bar', 'Labs', '', '', '[{\"salesdisc\":\"Crow  Bar\"}]'),
(522, 'L/PA/21', 'Pick Axe ', 'Labs', '', '', '[{\"salesdisc\":\"Pick Axe\"}]'),
(524, 'L/FC/22', 'Flat Chassell', 'Labs', '', '', '[{\"salesdisc\":\"Flat Chassell\"}]'),
(526, 'L/PC/23', 'Point  Chassell', 'Labs', '', '', '[{\"salesdisc\":\"Point  Chassell\"}]'),
(528, 'L/AT/24', 'Aluminium Tray  240x400', 'Labs', '', '', '[{\"salesdisc\":\"Aluminium Tray  240x400\"}]'),
(530, 'L/CH/25', 'Club Hammer 2 Lb', 'Labs', '', '', '[{\"salesdisc\":\"Club Hammer 2 Lb\"}]'),
(532, 'L/HG/26', 'Heat Resistant Glows', 'Labs', '', '', '[{\"salesdisc\":\"Heat Resistant Glows\"}]'),
(534, 'L/RG/27', 'Rubber Glows ', 'Labs', '', '', '[{\"salesdisc\":\"Rubber Glows\"}]'),
(536, 'L/NG/28', 'Never P/ Glows( Black)', 'Labs', '', '', '[{\"salesdisc\":\"Never P/ Glows( Black)\"}]'),
(538, 'L/RM/29', 'Rubber Mallet ', 'Labs', '', '', '[{\"salesdisc\":\"Rubber Mallet\"}]'),
(540, 'L/SL/30', 'Sprite Level', 'Labs', '', '', '[{\"salesdisc\":\"Sprite Level\"}]'),
(542, 'L/WB/31', 'Wire Brash ', 'Labs', '', '', '[{\"salesdisc\":\"Wire Brash\"}]'),
(544, 'L/SB/32', 'Sieve  Brach', 'Labs', '', '', '[{\"salesdisc\":\"Sieve  Brach\"}]'),
(546, 'L/PB/33       ', 'Paint  Brach', 'Labs', '', '', '[{\"salesdisc\":\"Paint  Brach\"}]'),
(548, 'L/MT/34', 'Mason Trwal', 'Labs', '', '', '[{\"salesdisc\":\"Mason Trwal\"}]'),
(550, 'L/SP/35', 'Spoon', 'Labs', '', '', '[{\"salesdisc\":\"Spoon\"}]'),
(552, 'L/MT/36', 'Mamotee ', 'Labs', '', '', '[{\"salesdisc\":\"Mamotee\"}]'),
(554, 'L/H14/37', 'Hammer  14Lb', 'Labs', '', '', '[{\"salesdisc\":\"Hammer  14Lb\"}]'),
(556, 'L/H8/38', 'Hammer  8Lb', 'Labs', '', '', '[{\"salesdisc\":\"Hammer  8Lb\"}]'),
(558, 'L/H4/39', 'Hammer  4Lb', 'Labs', '', '', '[{\"salesdisc\":\"Hammer  4Lb\"}]'),
(560, 'L/H2/40', 'Hammer  2Lb', 'Labs', '', '', '[{\"salesdisc\":\"Hammer  2Lb\"}]'),
(562, 'L/AG/41', 'Asbestos Gloves', 'Labs', '', '', '[{\"salesdisc\":\"Asbestos Gloves\"}]'),
(564, 'L/SB/42', 'Stainless Steel Bowl- 2L', 'Labs', '', '', '[{\"salesdisc\":\"Stainless Steel Bowl- 2L\"}]'),
(566, 'L/SB/43', 'Stainless Steel Bowl- 1L', 'Labs', '', '', '[{\"salesdisc\":\"Stainless Steel Bowl- 1L\"}]'),
(568, 'L/PB/44', 'Porcelain  Mortar and Pestle   175mm', 'Labs', '', '', '[{\"salesdisc\":\"Porcelain  Mortar and Pestle   175mm\"}]'),
(570, 'L/HP/45', 'Hot Plate ', 'Labs', '', '', '[{\"salesdisc\":\"Hot Plate\"}]'),
(572, 'L/VC/46', ' Vernier Calliper  300mm', 'Labs', '', '', '[{\"salesdisc\":\"Vernier Calliper  300mm\"}]'),
(574, 'L/VC/47', 'Vernier Calliper  200mm', 'Labs', '', '', '[{\"salesdisc\":\"Vernier Calliper  200mm\"}]'),
(576, 'L/VC/48', 'Vernier Calliper  150mm', 'Labs', '', '', '[{\"salesdisc\":\"Vernier Calliper  150mm\"}]'),
(578, 'L/DV/49', 'Digital Vernier Calliper  300mm', 'Labs', '', '', '[{\"salesdisc\":\"Digital Vernier Calliper  300mm\"}]'),
(580, 'L/DV/50', 'Digital Vernier Calliper  200mm', 'Labs', '', '', '[{\"salesdisc\":\"Digital Vernier Calliper  200mm\"}]'),
(582, 'L/DV/51', 'Digital Vernier Calliper  150mm', 'Labs', '', '', '[{\"salesdisc\":\"Digital Vernier Calliper  150mm\"}]'),
(584, 'L/GP/52', 'Glass Plate 400x600x6', 'Labs', '', '', '[{\"salesdisc\":\"Glass Plate 400x600x6\"}]'),
(587, 'W/RB/01', 'Riffle  Box 63 mm', 'Labs', '', '', '[{\"salesdisc\":\"Riffle  Box 63 mm\"}]'),
(589, 'W/RB/02', 'Riffle  Box 50 mm', 'Labs', '', '', '[{\"salesdisc\":\"Riffle  Box 50 mm\"}]'),
(591, 'W/RB/03', 'Riffle  Box 38 mm', 'Labs', '', '', '[{\"salesdisc\":\"Riffle  Box 38 mm\"}]'),
(593, 'W/RB/04', 'Riffle  Box 25 mm', 'Labs', '', '', '[{\"salesdisc\":\"Riffle  Box 25 mm\"}]'),
(595, 'W/RB/05', 'Riffle  Box 12 mm', 'Labs', '', '', '[{\"salesdisc\":\"Riffle  Box 12 mm\"}]'),
(597, 'W/SF/06', 'Specific Gravity Frame ', 'Labs', '', '', '[{\"salesdisc\":\"Specific Gravity Frame\"}]'),
(599, 'W/BD/07', 'Bulk Density 30L', 'Labs', '', '', '[{\"salesdisc\":\"Bulk Density 30L\"}]'),
(601, 'W/BD/08', 'Bulk Density 10L', 'Labs', '', '', '[{\"salesdisc\":\"Bulk Density 10L\"}]'),
(603, 'W/BD/09', 'Bulk Density  7L', 'Labs', '', '', '[{\"salesdisc\":\"Bulk Density  7L\"}]'),
(605, 'W/ST/10', 'Sample Tray   1000x1000x75mm', 'Labs', '', '', '[{\"salesdisc\":\"Sample Tray   1000x1000x75mm\"}]'),
(607, 'W/ST/11', 'Sample Tray   1000x1000x50mm', 'Labs', '', '', '[{\"salesdisc\":\"Sample Tray   1000x1000x50mm\"}]'),
(609, 'W/ST/12', 'Sample Tray    900x900x75mm', 'Labs', '', '', '[{\"salesdisc\":\"Sample Tray    900x900x75mm\"}]'),
(611, 'W/ST/13', 'Sample Tray   900x900x50mm', 'Labs', '', '', '[{\"salesdisc\":\"Sample Tray   900x900x50mm\"}]'),
(613, 'W/ST/14', 'Sample Tray    600x600x75mm', 'Labs', '', '', '[{\"salesdisc\":\"Sample Tray    600x600x75mm\"}]'),
(615, 'W/ST/15', 'Sample Tray   600x600x50mm', 'Labs', '', '', '[{\"salesdisc\":\"Sample Tray   600x600x50mm\"}]'),
(617, 'W/ST/16', 'Sample Tray   400x400x75mm', 'Labs', '', '', '[{\"salesdisc\":\"Sample Tray   400x400x75mm\"}]'),
(619, 'W/ST/17', 'Sample Tray   400x400x50mm', 'Labs', '', '', '[{\"salesdisc\":\"Sample Tray   400x400x50mm\"}]'),
(621, 'W/ST/18', 'Sample Tray   300x300x75mm', 'Labs', '', '', '[{\"salesdisc\":\"Sample Tray   300x300x75mm\"}]'),
(623, 'W/ST/19', 'Sample Tray   300x300x50mm', 'Labs', '', '', '[{\"salesdisc\":\"Sample Tray   300x300x50mm\"}]'),
(625, 'W/ST/20', 'Sample Tray   250x250x75mm', 'Labs', '', '', '[{\"salesdisc\":\"Sample Tray   250x250x75mm\"}]'),
(627, 'W/ST/21', 'Sample Tray   250x250x50mm', 'Labs', '', '', '[{\"salesdisc\":\"Sample Tray   250x250x50mm\"}]'),
(629, 'W/SC/22', 'Scraper  300mm', 'Labs', '', '', '[{\"salesdisc\":\"Scraper  300mm\"}]'),
(631, 'W/TR/23', 'Tamping  Rod', 'Labs', '', '', '[{\"salesdisc\":\"Tamping  Rod\"}]'),
(633, 'W/WB/24', 'Water Bath (Local)', 'Labs', '', '', '[{\"salesdisc\":\"Water Bath (Local) UTS/ECO\"}]'),
(635, 'W/SE/25', '3M straight edge', 'Labs', '', '', '[{\"salesdisc\":\"3M straight edge\"}]'),
(637, 'W/WS/26', 'WEDGES (Set of Two)', 'Labs', '', '', '[{\"salesdisc\":\"WEDGES (Set of Two)\"}]'),
(638, 'U/2S/1', '200DIa 75mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 75mm Stainless Steel Sieve \"}]'),
(640, 'U/2S/2', '200DIa 63mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 63mm Stainless Steel Sieve \"}]'),
(642, 'U/2S/3', '200DIa 50mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 50mm Stainless Steel Sieve \"}]'),
(644, 'U/2S/4', '200DIa 40mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 40mm Stainless Steel Sieve \"}]'),
(646, 'U/2S/5', '200DIa 37.5mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 37.5mm Stainless Steel Sieve \"}]'),
(648, 'U/2S/6', '200DIa 31.5mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 31.5mm Stainless Steel Sieve \"}]'),
(650, 'U/2S/7', '200DIa 28mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 28mm Stainless Steel Sieve \"}]'),
(652, 'U/2S/8', '200DIa 25mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 25mm Stainless Steel Sieve \"}]'),
(654, 'U/2S/9', '200DIa 20mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 20mm Stainless Steel Sieve \"}]'),
(656, 'U/2S/10', '200DIa 19mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 19mm Stainless Steel Sieve \"}]'),
(658, 'U/2S/11', '200DIa 16mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 16mm Stainless Steel Sieve \"}]'),
(660, 'U/2S/12', '200DIa 14mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 14mm Stainless Steel Sieve \"}]'),
(662, 'U/2S/13', '200DIa 13.2mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 13.2mm Stainless Steel Sieve \"}]'),
(664, 'U/2S/14', '200DIa 12.5mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 12.5mm Stainless Steel Sieve \"}]'),
(666, 'U/2S/15', '200DIa 10mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 10mm Stainless Steel Sieve \"}]'),
(668, 'U/2S/16', '200DIa 9.5mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 9.5mm Stainless Steel Sieve \"}]'),
(670, 'U/2S/17', '200DIa 8mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 8mm Stainless Steel Sieve \"}]'),
(672, 'U/2S/18', '200DIa 6.5mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 6.5mm Stainless Steel Sieve \"}]'),
(674, 'U/2S/19', '200DIa 6.3mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 6.3mm Stainless Steel Sieve \"}]'),
(676, 'U/2S/20', '200DIa 6mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 6mm Stainless Steel Sieve \"}]'),
(678, 'U/2S/21', '200DIa 5mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 5mm Stainless Steel Sieve \"}]'),
(680, 'U/2S/22', '200DIa 4.75mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 4.75mm Stainless Steel Sieve \"}]'),
(682, 'U/2S/23', '200DIa 3.35mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 3.35mm Stainless Steel Sieve \"}]'),
(684, 'U/2S/24', '200DIa 2.36mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 2.36mm Stainless Steel Sieve \"}]'),
(686, 'U/2S/25', '200DIa 2mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 2mm Stainless Steel Sieve \"}]'),
(688, 'U/2S/26', '200DIa 1.7mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 1.7mm Stainless Steel Sieve \"}]'),
(690, 'U/2S/27', '200DIa 1.18mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 1.18mm Stainless Steel Sieve \"}]'),
(692, 'U/2S/28', '200DIa 1mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 1mm Stainless Steel Sieve \"}]'),
(694, 'U/2S/29', '200DIa 0.850mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 0.850mm Stainless Steel Sieve \"}]'),
(696, 'U/2S/30', '200DIa 0.600mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 0.600mm Stainless Steel Sieve \"}]'),
(698, 'U/2S/31', '200DIa 0.500mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 0.500mm Stainless Steel Sieve \"}]'),
(700, 'U/2S/32', '200DIa 0.425mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 0.425mm Stainless Steel Sieve \"}]'),
(702, 'U/2S/33', '200DIa 0.300mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 0.300mm Stainless Steel Sieve \"}]'),
(704, 'U/2S/34', '200DIa 0.250mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 0.250mm Stainless Steel Sieve \"}]'),
(706, 'U/2S/35', '200DIa 0.212mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 0.212mm Stainless Steel Sieve \"}]'),
(708, 'U/2S/36', '200DIa 0.150mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 0.150mm Stainless Steel Sieve \"}]'),
(710, 'U/2S/37', '200DIa 0.125mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 0.125mm Stainless Steel Sieve \"}]'),
(712, 'U/2S/38', '200DIa 0.075mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 0.075mm Stainless Steel Sieve \"}]'),
(714, 'U/2S/39', '200DIa 0.063mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 0.063mm Stainless Steel Sieve \"}]'),
(716, 'U/2S/40', '200DIa Lid & Pan  Stainless Steel ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa Lid & Pan  Stainless Steel \"}]'),
(718, 'U/3S/1', '300DIa 75mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 75mm Stainless Steel Sieve \"}]'),
(720, 'U/3S/2', '300DIa 63mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 63mm Stainless Steel Sieve \"}]'),
(722, 'U/3S/3', '300DIa 50mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 50mm Stainless Steel Sieve \"}]'),
(724, 'U/3S/4', '300DIa 40mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 40mm Stainless Steel Sieve \"}]'),
(726, 'U/3S/5', '300DIa 37.5mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 37.5mm Stainless Steel Sieve \"}]'),
(728, 'U/3S/6', '300DIa 31.5mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 31.5mm Stainless Steel Sieve \"}]'),
(730, 'U/3S/7', '300DIa 28mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 28mm Stainless Steel Sieve \"}]'),
(732, 'U/3S/8', '300DIa 25mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 25mm Stainless Steel Sieve \"}]'),
(734, 'U/3S/9', '300DIa 20mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 20mm Stainless Steel Sieve \"}]'),
(736, 'U/3S/10', '300DIa 19mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 19mm Stainless Steel Sieve \"}]'),
(738, 'U/3S/11', '300DIa 16mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 16mm Stainless Steel Sieve \"}]'),
(740, 'U/3S/12', '300DIa 14mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 14mm Stainless Steel Sieve \"}]'),
(742, 'U/3S/13', '300DIa 13.2mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 13.2mm Stainless Steel Sieve \"}]'),
(744, 'U/3S/14', '300DIa 12.5mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 12.5mm Stainless Steel Sieve \"}]'),
(746, 'U/3S/15', '300DIa 10mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 10mm Stainless Steel Sieve \"}]'),
(748, 'U/3S/16', '300DIa 9.5mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 9.5mm Stainless Steel Sieve \"}]'),
(750, 'U/3S/17', '300DIa 8mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 8mm Stainless Steel Sieve \"}]'),
(752, 'U/3S/18', '300DIa 6.5mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 6.5mm Stainless Steel Sieve \"}]'),
(754, 'U/3S/19', '300DIa 6.3mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 6.3mm Stainless Steel Sieve \"}]'),
(756, 'U/3S/20', '300DIa 6mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 6mm Stainless Steel Sieve \"}]'),
(758, 'U/3S/21', '300DIa 5mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 5mm Stainless Steel Sieve \"}]'),
(760, 'U/3S/22', '300DIa 4.75mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 4.75mm Stainless Steel Sieve \"}]'),
(762, 'U/3S/23', '300DIa 3.35mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 3.35mm Stainless Steel Sieve \"}]'),
(764, 'U/3S/24', '300DIa 2.36mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 2.36mm Stainless Steel Sieve \"}]'),
(766, 'U/3S/25', '300DIa 2mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 2mm Stainless Steel Sieve \"}]'),
(768, 'U/3S/26', '300DIa 1.7mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 1.7mm Stainless Steel Sieve \"}]'),
(770, 'U/3S/27', '300DIa 1.18mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 1.18mm Stainless Steel Sieve \"}]'),
(772, 'U/3S/28', '300DIa 1mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 1mm Stainless Steel Sieve \"}]'),
(774, 'U/3S/29', '300DIa 0.850mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 0.850mm Stainless Steel Sieve \"}]'),
(776, 'U/3S/30', '300DIa 0.600mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 0.600mm Stainless Steel Sieve \"}]');
INSERT INTO `iteminfor` (`id`, `item_code`, `purchasedisc`, `itemcategory`, `reorderlevel`, `subitemreminder`, `salesdisc0`) VALUES
(778, 'U/3S/31', '300DIa 0.500mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 0.500mm Stainless Steel Sieve \"}]'),
(780, 'U/3S/32', '300DIa 0.425mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 0.425mm Stainless Steel Sieve \"}]'),
(782, 'U/3S/33', '300DIa 0.300mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 0.300mm Stainless Steel Sieve \"}]'),
(784, 'U/3S/34', '300DIa 0.250mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 0.250mm Stainless Steel Sieve \"}]'),
(786, 'U/3S/35', '300DIa 0.212mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 0.212mm Stainless Steel Sieve \"}]'),
(788, 'U/3S/36', '300DIa 0.150mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 0.150mm Stainless Steel Sieve \"}]'),
(790, 'U/3S/37', '300DIa 0.125mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 0.125mm Stainless Steel Sieve \"}]'),
(792, 'U/3S/38', '300DIa 0.075mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 0.075mm Stainless Steel Sieve \"}]'),
(794, 'U/3S/39', '300DIa 0.063mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 0.063mm Stainless Steel Sieve \"}]'),
(796, 'U/3S/40', '300DIa Lid & Pan  Stainless Steel ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa Lid & Pan  Stainless Steel \"}]'),
(799, 'M/2S/1', '200DIa 75mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 75mm Stainless Steel Sieve \"}]'),
(801, 'M/2S/2', '200DIa 63mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 63mm Stainless Steel Sieve \"}]'),
(803, 'M/2S/3', '200DIa 50mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 50mm Stainless Steel Sieve \"}]'),
(805, 'M/2S/4', '200DIa 37.5mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 37.5mm Stainless Steel Sieve \"}]'),
(807, 'M/2S/5', '200DIa 28mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 28mm Stainless Steel Sieve \"}]'),
(809, 'M/2S/6', '200DIa 25mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 25mm Stainless Steel Sieve \"}]'),
(811, 'M/2S/7', '200DIa 20mm Stainless Steel Sieve', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 20mm Stainless Steel Sieve\"}]'),
(813, 'M/2S/8', '200DIa 19.5mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 19.5mm Stainless Steel Sieve \"}]'),
(815, 'M/2S/9', '200DIa 19mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 19mm Stainless Steel Sieve \"}]'),
(817, 'M2S/10', '200DIa 16mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 16mm Stainless Steel Sieve \"}]'),
(819, 'M/2S/11', '200DIa 14mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 14mm Stainless Steel Sieve \"}]'),
(821, 'M/2S/12', '200DIa 12.5mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 12.5mm Stainless Steel Sieve \"}]'),
(823, 'M/2S/13', '200DIa 10mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 10mm Stainless Steel Sieve \"}]'),
(825, 'M/2S/14', '200DIa 9.5mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 9.5mm Stainless Steel Sieve \"}]'),
(827, 'M/2S/15', '200DIa 6.3mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 6.3mm Stainless Steel Sieve \"}]'),
(829, 'M/2S/16', '200DIa 5mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 5mm Stainless Steel Sieve \"}]'),
(831, 'M/2S/17', '200DIa 4.75mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 4.75mm Stainless Steel Sieve \"}]'),
(833, 'M/2S/18', '200DIa 3.35mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 3.35mm Stainless Steel Sieve \"}]'),
(835, 'M/2S/19', '200DIa 2.36mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 2.36mm Stainless Steel Sieve \"}]'),
(837, 'M/2S/20', '200DIa 2mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 2mm Stainless Steel Sieve \"}]'),
(839, 'M/2S/21', '200DIa 1.7mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 1.7mm Stainless Steel Sieve \"}]'),
(841, 'M/2S/22', '200DIa 1.18mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 1.18mm Stainless Steel Sieve \"}]'),
(843, 'M/2S/23', '200DIa 1mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 1mm Stainless Steel Sieve \"}]'),
(845, 'M/2S/24', '200DIa 0.600mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 0.600mm Stainless Steel Sieve \"}]'),
(847, 'M/2S/25', '200DIa 0.425mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 0.425mm Stainless Steel Sieve \"}]'),
(849, 'M/2S/26', '200DIa 0.300mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 0.300mm Stainless Steel Sieve \"}]'),
(851, 'M/2S/27', '200DIa 0.150mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 0.150mm Stainless Steel Sieve \"}]'),
(853, 'M/2S/28', '200DIa 0.075mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 0.075mm Stainless Steel Sieve \"}]'),
(855, 'M/2S/29', '200DIa 0.063mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa 0.063mm Stainless Steel Sieve \"}]'),
(857, 'M/2S/30', '200DIa Lid & Pan Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"200DIa Lid & Pan Stainless Steel Sieve \"}]'),
(860, 'M/3S/1', '300DIa 75mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 75mm Stainless Steel Sieve \"}]'),
(862, 'M/3S/2', '300DIa 63mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 63mm Stainless Steel Sieve \"}]'),
(864, 'M/3S/3', '300DIa 50mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 50mm Stainless Steel Sieve \"}]'),
(866, 'M/3S/4', '300DIa 37.5mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 37.5mm Stainless Steel Sieve \"}]'),
(868, 'M/3S/5', '300DIa 28mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 28mm Stainless Steel Sieve \"}]'),
(870, 'M/3S/6', '300DIa 25mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 25mm Stainless Steel Sieve \"}]'),
(872, 'M/3S/7', '300DIa 20mm Stainless Steel Sieve', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 20mm Stainless Steel Sieve\"}]'),
(874, 'M/3S/8', '300DIa 19.5mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 19.5mm Stainless Steel Sieve \"}]'),
(876, 'M/3S/9', '300DIa 19mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 19mm Stainless Steel Sieve \"}]'),
(878, 'M/3S/10', '300DIa 16mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 16mm Stainless Steel Sieve \"}]'),
(880, 'M/3S/11', '300DIa 14mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 14mm Stainless Steel Sieve \"}]'),
(882, 'M/3S/12', '300DIa 12.5mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 12.5mm Stainless Steel Sieve \"}]'),
(884, 'M/3S/13', '300DIa 10mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 10mm Stainless Steel Sieve \"}]'),
(886, 'M/3S/14', '300DIa 9.5mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 9.5mm Stainless Steel Sieve \"}]'),
(888, 'M/3S/15', '300DIa 6.3mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 6.3mm Stainless Steel Sieve \"}]'),
(890, 'M/3S/16', '300DIa 5mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 5mm Stainless Steel Sieve \"}]'),
(892, 'M/3S/17', '300DIa 4.75mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 4.75mm Stainless Steel Sieve \"}]'),
(894, 'M/3S/18', '300DIa 3.35mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 3.35mm Stainless Steel Sieve \"}]'),
(896, 'M/3S/19', '300DIa 2.36mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 2.36mm Stainless Steel Sieve \"}]'),
(898, 'M/3S/20', '300DIa 2mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 2mm Stainless Steel Sieve \"}]'),
(900, 'M/3S/21', '300DIa 1.7mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 1.7mm Stainless Steel Sieve \"}]'),
(902, 'M/3S/22', '300DIa 1.18mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 1.18mm Stainless Steel Sieve \"}]'),
(904, 'M/3S/23', '300DIa 1mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 1mm Stainless Steel Sieve \"}]'),
(906, 'M/3S/24', '300DIa 0.600mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 0.600mm Stainless Steel Sieve \"}]'),
(908, 'M/3S/25', '300DIa 0.425mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 0.425mm Stainless Steel Sieve \"}]'),
(910, 'M/3S/26', '300DIa 0.300mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 0.300mm Stainless Steel Sieve \"}]'),
(912, 'M/3S/27', '300DIa 0.150mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 0.150mm Stainless Steel Sieve \"}]'),
(914, 'M/3S/28', '300DIa 0.075mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 0.075mm Stainless Steel Sieve \"}]'),
(916, 'M/3S/29', '300DIa 0.063mm Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa 0.063mm Stainless Steel Sieve \"}]'),
(918, 'M/3S/30', '300DIa Lid & Pan Stainless Steel Sieve ', 'Labs', '', '', '[{\"salesdisc\":\"300DIa Lid & Pan Stainless Steel Sieve \"}]');

-- --------------------------------------------------------

--
-- Table structure for table `Pack1add`
--

CREATE TABLE `Pack1add` (
  `id` int(11) DEFAULT NULL,
  `bs` decimal(16,2) NOT NULL,
  `fbs` date DEFAULT NULL,
  `tbs` date DEFAULT NULL,
  `ba` decimal(16,2) NOT NULL,
  `fba` date DEFAULT NULL,
  `tba` date DEFAULT NULL,
  `mm` decimal(16,2) NOT NULL,
  `fmm` date DEFAULT NULL,
  `tmm` date DEFAULT NULL,
  `trv` decimal(16,2) NOT NULL,
  `ftrv` date DEFAULT NULL,
  `ttrv` date DEFAULT NULL,
  `acco` decimal(16,2) NOT NULL,
  `facco` date DEFAULT NULL,
  `tacco` date DEFAULT NULL,
  `add1` decimal(16,2) NOT NULL,
  `fadd1` date DEFAULT NULL,
  `tadd1` date DEFAULT NULL,
  `add2` decimal(16,2) NOT NULL,
  `fadd2` date DEFAULT NULL,
  `tadd2` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Pack1add`
--

INSERT INTO `Pack1add` (`id`, `bs`, `fbs`, `tbs`, `ba`, `fba`, `tba`, `mm`, `fmm`, `tmm`, `trv`, `ftrv`, `ttrv`, `acco`, `facco`, `tacco`, `add1`, `fadd1`, `tadd1`, `add2`, `fadd2`, `tadd2`) VALUES
(0, '50000.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL),
(6, '50000.00', '2018-04-11', '2018-12-31', '0.00', '2018-04-11', '2018-12-31', '0.00', '2018-04-11', '2018-12-31', '0.00', '2018-04-11', '2018-12-31', '0.00', '2018-04-11', '2018-12-31', '0.00', '2018-04-11', '2018-12-31', '0.00', '2018-04-11', '2018-12-31'),
(7, '26000.00', '2018-05-01', '2019-01-01', '0.00', '2018-05-01', '2019-01-01', '19600.00', '2018-05-01', '2019-01-01', '17150.00', '2018-05-01', '2019-01-01', '12250.00', '2018-05-01', '2019-01-01', '0.00', '2018-05-01', '2019-01-01', '0.00', '2018-05-01', '2019-01-01'),
(7, '50000.00', '2018-01-01', '2018-12-31', '10000.00', '2018-01-01', '2018-12-31', '1000.00', '2018-01-01', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31'),
(6, '50000.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31'),
(6, '50000.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31'),
(6, '50000.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31'),
(6, '50000.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31'),
(6, '50000.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31'),
(6, '50000.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31'),
(6, '50000.00', '2018-05-19', '2018-12-31', '500.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31'),
(0, '50000.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL),
(6, '50000.00', '2018-04-11', '2018-12-31', '0.00', '2018-04-11', '2018-12-31', '0.00', '2018-04-11', '2018-12-31', '0.00', '2018-04-11', '2018-12-31', '0.00', '2018-04-11', '2018-12-31', '0.00', '2018-04-11', '2018-12-31', '0.00', '2018-04-11', '2018-12-31'),
(7, '26000.00', '2018-05-01', '2019-01-01', '0.00', '2018-05-01', '2019-01-01', '19600.00', '2018-05-01', '2019-01-01', '17150.00', '2018-05-01', '2019-01-01', '12250.00', '2018-05-01', '2019-01-01', '0.00', '2018-05-01', '2019-01-01', '0.00', '2018-05-01', '2019-01-01'),
(7, '50000.00', '2018-01-01', '2018-12-31', '10000.00', '2018-01-01', '2018-12-31', '1000.00', '2018-01-01', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31'),
(6, '50000.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31'),
(6, '50000.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31'),
(6, '50000.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31'),
(6, '50000.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31'),
(6, '50000.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31'),
(6, '50000.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31'),
(6, '50000.00', '2018-05-19', '2018-12-31', '500.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31'),
(18, '50000.00', '2018-05-19', '2018-12-31', '500.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31'),
(6, '150000.00', '2018-06-01', '2018-12-31', '7000.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31'),
(6, '12000.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31'),
(7, '10000.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31'),
(6, '50000.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31'),
(6, '10000.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31'),
(6, '660000.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `Pack1ded`
--

CREATE TABLE `Pack1ded` (
  `id` int(11) DEFAULT NULL,
  `epf` decimal(16,2) NOT NULL,
  `fepf` date DEFAULT NULL,
  `tepf` date DEFAULT NULL,
  `sa` decimal(16,2) NOT NULL,
  `fsa` date DEFAULT NULL,
  `tsa` date DEFAULT NULL,
  `sl` decimal(16,2) NOT NULL,
  `fsl` date DEFAULT NULL,
  `tsl` date DEFAULT NULL,
  `ded1` decimal(16,2) NOT NULL,
  `fded1` date DEFAULT NULL,
  `tded1` date DEFAULT NULL,
  `ded2` decimal(16,2) NOT NULL,
  `fded2` date DEFAULT NULL,
  `tded2` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Pack1ded`
--

INSERT INTO `Pack1ded` (`id`, `epf`, `fepf`, `tepf`, `sa`, `fsa`, `tsa`, `sl`, `fsl`, `tsl`, `ded1`, `fded1`, `tded1`, `ded2`, `fded2`, `tded2`) VALUES
(0, '12.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL),
(6, '12.00', '2018-04-11', '2018-12-31', '0.00', '2018-04-11', '2018-12-31', '0.00', '2018-04-11', '2018-12-31', '0.00', '2018-04-11', '2018-12-31', '0.00', '2018-04-11', '2018-12-31'),
(7, '12.00', '2018-05-01', '2019-01-01', '0.00', '2018-05-01', '2019-01-01', '0.00', '2018-05-01', '2019-01-01', '0.00', '2018-05-01', '2019-01-01', '0.00', '2018-05-01', '2019-01-01'),
(7, '12.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31'),
(6, '12.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31'),
(6, '12.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31'),
(6, '12.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31'),
(6, '12.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31'),
(6, '12.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31'),
(6, '12.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31'),
(6, '12.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31'),
(0, '12.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL),
(6, '12.00', '2018-04-11', '2018-12-31', '0.00', '2018-04-11', '2018-12-31', '0.00', '2018-04-11', '2018-12-31', '0.00', '2018-04-11', '2018-12-31', '0.00', '2018-04-11', '2018-12-31'),
(7, '12.00', '2018-05-01', '2019-01-01', '0.00', '2018-05-01', '2019-01-01', '0.00', '2018-05-01', '2019-01-01', '0.00', '2018-05-01', '2019-01-01', '0.00', '2018-05-01', '2019-01-01'),
(7, '12.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31'),
(6, '12.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31'),
(6, '12.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31', '0.00', '2018-05-16', '2018-12-31'),
(6, '12.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31'),
(6, '12.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31'),
(6, '12.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31', '0.00', '2018-05-18', '2018-12-31'),
(6, '12.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31'),
(6, '12.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31'),
(18, '12.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31', '0.00', '2018-05-19', '2018-12-31'),
(6, '12.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '89.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31'),
(6, '12.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31'),
(7, '12.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31'),
(6, '12.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31'),
(6, '12.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31'),
(6, '12.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31', '0.00', '2018-06-01', '2018-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `Pack2add`
--

CREATE TABLE `Pack2add` (
  `id` int(11) DEFAULT NULL,
  `bs` decimal(16,2) NOT NULL,
  `fbs` date DEFAULT NULL,
  `tbs` date DEFAULT NULL,
  `ba` decimal(16,2) NOT NULL,
  `fba` date DEFAULT NULL,
  `tba` date DEFAULT NULL,
  `mm` decimal(16,2) NOT NULL,
  `fmm` date DEFAULT NULL,
  `tmm` date DEFAULT NULL,
  `trv` decimal(16,2) NOT NULL,
  `ftrv` date DEFAULT NULL,
  `ttrv` date DEFAULT NULL,
  `acco` decimal(16,2) NOT NULL,
  `facco` date DEFAULT NULL,
  `tacco` date DEFAULT NULL,
  `add1` decimal(16,2) NOT NULL,
  `fadd1` date DEFAULT NULL,
  `tadd1` date DEFAULT NULL,
  `add2` decimal(16,2) NOT NULL,
  `fadd2` date DEFAULT NULL,
  `tadd2` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Pack2add`
--

INSERT INTO `Pack2add` (`id`, `bs`, `fbs`, `tbs`, `ba`, `fba`, `tba`, `mm`, `fmm`, `tmm`, `trv`, `ftrv`, `ttrv`, `acco`, `facco`, `tacco`, `add1`, `fadd1`, `tadd1`, `add2`, `fadd2`, `tadd2`) VALUES
(0, '20000.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL),
(6, '20000.00', '2018-06-02', '2018-12-31', '0.00', '2018-06-02', '2018-12-31', '0.00', '2018-06-02', '2018-12-31', '0.00', '2018-06-02', '2018-12-31', '0.00', '2018-06-02', '2018-12-31', '0.00', '2018-06-02', '2018-12-31', '0.00', '2018-06-02', '2018-12-31'),
(7, '80000.00', '2018-06-02', '2018-12-31', '0.00', '2018-06-02', '2018-12-31', '0.00', '2018-06-02', '2018-12-31', '0.00', '2018-06-02', '2018-12-31', '0.00', '2018-06-02', '2018-12-31', '0.00', '2018-06-02', '2018-12-31', '0.00', '2018-06-02', '2018-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `Pack2ded`
--

CREATE TABLE `Pack2ded` (
  `id` int(11) DEFAULT NULL,
  `epf` decimal(16,2) NOT NULL,
  `fepf` date DEFAULT NULL,
  `tepf` date DEFAULT NULL,
  `sa` decimal(16,2) NOT NULL,
  `fsa` date DEFAULT NULL,
  `tsa` date DEFAULT NULL,
  `sl` decimal(16,2) NOT NULL,
  `fsl` date DEFAULT NULL,
  `tsl` date DEFAULT NULL,
  `ded1` decimal(16,2) NOT NULL,
  `fded1` date DEFAULT NULL,
  `tded1` date DEFAULT NULL,
  `ded2` decimal(16,2) NOT NULL,
  `fded2` date DEFAULT NULL,
  `tded2` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Pack2ded`
--

INSERT INTO `Pack2ded` (`id`, `epf`, `fepf`, `tepf`, `sa`, `fsa`, `tsa`, `sl`, `fsl`, `tsl`, `ded1`, `fded1`, `tded1`, `ded2`, `fded2`, `tded2`) VALUES
(0, '8.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL, '0.00', NULL, NULL),
(6, '8.00', '2018-06-02', '2018-12-31', '0.00', '2018-06-02', '2018-12-31', '0.00', '2018-06-02', '2018-12-31', '0.00', '2018-06-02', '2018-12-31', '0.00', '2018-06-02', '2018-12-31'),
(7, '8.00', '2018-06-02', '2018-12-31', '0.00', '2018-06-02', '2018-12-31', '0.00', '2018-06-02', '2018-12-31', '0.00', '2018-06-02', '2018-12-31', '0.00', '2018-06-02', '2018-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `purchaseorderinfor`
--

CREATE TABLE `purchaseorderinfor` (
  `pid` int(11) NOT NULL,
  `customerorderno` varchar(200) NOT NULL,
  `customername` varchar(200) NOT NULL,
  `customeraddress` varchar(200) NOT NULL,
  `customersite` varchar(200) NOT NULL,
  `itemcode` varchar(1000) NOT NULL,
  `pquantity` varchar(200) NOT NULL,
  `createby` varchar(200) NOT NULL,
  `createdate` varchar(100) NOT NULL,
  `podate` varchar(100) NOT NULL,
  `poreceiveddate` varchar(100) NOT NULL,
  `deadlinedate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchaseorderinfor`
--

INSERT INTO `purchaseorderinfor` (`pid`, `customerorderno`, `customername`, `customeraddress`, `customersite`, `itemcode`, `pquantity`, `createby`, `createdate`, `podate`, `poreceiveddate`, `deadlinedate`) VALUES
(1, 'xcx', 'TestE', 'Test2', 'Site1', '[{\"item_code\":\"C/CDP/1\",\"sales_dis\":\"Cone Dial Penetrometer\",\"orderq\":\"1\",\"available_quantity\":\"1\",\"reminder\":\"GG\nFDDD\"}]', '', 'admin@gmail.com', '2019-03-01', '2019-03-12', '2019-03-26', '2019-03-12'),
(2, '23432', 'TestE', 'Test2', 'Site2', '[{\"item_code\":\"C/2610B\",\"sales_dis\":\"Triple Beam Balance MB2610\",\"orderq\":\"4\",\"available_quantity\":\"5\",\"reminder\":\"tttt\"},{\"item_code\":\"C/2610B\",\"sales_dis\":\"Triple Beam Balance MB2610\",\"orderq\":\"2\",\"available_quantity\":\"5\",\"reminder\":\"uu\nvv\"}]', '', 'admin@gmail.com', '2019-03-01', '2019-03-20', '2019-03-13', '2019-02-26'),
(3, '32', 'TestE', 'Test2', 'Site2', '[{\"item_code\":\"     L/CP/10\",\"sales_dis\":\"Cutting Player\",\"orderq\":\"1\",\"available_quantity\":\"1\",\"reminder\":\"YY\"},{\"item_code\":\"C/DP/4\",\"sales_dis\":\"50 G Weights.\",\"orderq\":\"2\",\"available_quantity\":\"32\",\"reminder\":\"FF\"},{\"item_code\":\"22\",\"sales_dis\":\"wefw\",\"orderq\":\"2\",\"available_quantity\":\"7\",\"reminder\":\"FFFF\"}]', '', 'admin@gmail.com', '2019-03-28', '2019-03-14', '2019-03-07', '2019-03-15'),
(4, '32', 'TestE', 'Test1', 'Site1', '[{\"item_code\":\"C/2610B\",\"sales_dis\":\"Triple Beam Balance MB2610\",\"orderq\":\"2\",\"available_quantity\":\"5\",\"reminder\":\"D\"},{\"item_code\":\"C/DP/4\",\"sales_dis\":\"50 G Weights.\",\"orderq\":\"2\",\"available_quantity\":\"32\",\"reminder\":\"Y\"},{\"item_code\":\"C/ACV/2\",\"sales_dis\":\"Measuring Cup\",\"orderq\":\"3\",\"available_quantity\":\"4\",\"reminder\":\"TT\"}]', '', 'admin@gmail.com', '2019-03-28', '2019-03-20', '2019-02-27', '2019-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `realgoodentry`
--

CREATE TABLE `realgoodentry` (
  `id` int(11) NOT NULL,
  `r_itemcode` varchar(400) NOT NULL,
  `r_purchasedisc` varchar(400) NOT NULL,
  `r_salesdisc` varchar(400) NOT NULL,
  `r_quantity` varchar(400) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `realgoodentry`
--

INSERT INTO `realgoodentry` (`id`, `r_itemcode`, `r_purchasedisc`, `r_salesdisc`, `r_quantity`) VALUES
(1, '102', 'Test12', 'Sal1', '17'),
(2, '22', '1234', 'wefw', '7'),
(3, 'E23', 'LTest', 'LTest1', '67'),
(4, '22', '1234', 'awf', '12'),
(5, 'C/CDP/1', 'Cone Dial Penetrometer ', 'Cone Dial Penetrometer', '1'),
(6, 'C/2610B', 'Triple Beam Balance MB2610', 'Triple Beam Balance MB2610', '5'),
(7, 'C/CM/5', 'Cube Mould 10kg 4parts', 'Cube Mould 10kg 4parts', '3'),
(8, 'C/CM/4', 'Cube Mould 16kg 2parts ', 'Cube Mould 16kg 2parts', '4'),
(9, 'C/DP/4', '50 G Weights.', '50 G Weights.', '32'),
(10, 'C/ACV/2', 'Measuring Cup', 'Measuring Cup', '4'),
(11, '     L/CP/10', 'Cutting Player ', 'Cutting Player', '1');

-- --------------------------------------------------------

--
-- Table structure for table `repayroll`
--

CREATE TABLE `repayroll` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `col` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repayroll`
--

INSERT INTO `repayroll` (`id`, `title`, `col`) VALUES
(1, 'Payroll Report Test', '{\"company\":\"\",\"firstname\":\"Buddilka\",\"epfno\":\"\",\"year\":\"2018\",\"month\":\"September\",\"designation\":\"\",\"totalearnings\":\"\",\"deductions\":\"\",\"netsal\":\"\"}'),
(3, '2333333', '{\"company\":\"BHOOMI TECH PVT LTD\",\"firstname\":\"\",\"lastname\":\"\",\"empno\":\"546452\",\"year\":\"2018\",\"month\":\"September\",\"designation\":\"\",\"totalearnings\":\"\",\"deductions\":\"\"}');

-- --------------------------------------------------------

--
-- Table structure for table `reportinfor`
--

CREATE TABLE `reportinfor` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `col` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reportinfor`
--

INSERT INTO `reportinfor` (`id`, `title`, `col`) VALUES
(1, 'Test', '{\"firstname\":\"Buddilka\",\"lastname\":\"\",\"othername\":\"\"}'),
(4, 'YYY', '{\"company\":\"Tset\",\"firstname\":\"\",\"lastname\":\"\",\"othername\":\"\"}'),
(3, 'DDDD', '{\"firstname\":\"Buddilka\",\"lastname\":\"\"}'),
(6, 'MARCH SALARY', '{\"company\":\"BHOOMI TECH PVT LTD\",\"firstname\":\"\",\"lastname\":\"\",\"accno\":\"\",\"nic\":\"\",\"empno\":\"\",\"epfno\":\"\"}'),
(7, 'Test Report 1', '{\"company\":\"BHOOMI TECH PVT LTD\",\"firstname\":\"\",\"lastname\":\"\",\"bod\":\"\",\"empno\":\"\",\"designation\":\"Qs Fileed\",\"epfno\":\"\",\"department\":\"\"}'),
(9, 'test', '{\"company\":\"BHOOMI-TECH (PVT) LTD\",\"empno\":\"\"}'),
(10, 'All male employees', '{\"company\":\"BHOOMI TECH PVT LTD\",\"firstname\":\"\",\"gender\":\"Male\",\"bank\":\"\",\"empno\":\"\",\"doj\":\"\"}');

-- --------------------------------------------------------

--
-- Table structure for table `resalarypay`
--

CREATE TABLE `resalarypay` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `col` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resalarypay`
--

INSERT INTO `resalarypay` (`id`, `title`, `col`) VALUES
(3, 'salary', '{\"company\":\"BHOOMI TECH PVT LTD\",\"firstname\":\"\",\"lastname\":\"\",\"empno\":\"\",\"netsal\":\"\"}'),
(2, 'S1', '{\"company\":\"Tset\",\"firstname\":\"\",\"lastname\":\"\",\"year\":\"2018\",\"month\":\"September\",\"srm\":\"Bank Acc\",\"deductions\":\"\",\"netsal\":\"\",\"epfpaid\":\"\",\"etppaid\":\"\",\"totalcontri\":\"\"}'),
(4, 'ADVANCE', '{\"deductions\":\"\"}'),
(5, 'testing title 1', '{\"company\":\"BHOOMI TECH PVT LTD\",\"firstname\":\"\",\"lastname\":\"\",\"empno\":\"\",\"designation\":\"\",\"srm\":\"\"}'),
(6, 'RR', '{\"company\":\"BHOOMI TECH PVT LTD\",\"firstname\":\"\",\"year\":\"2018\",\"month\":\"October\",\"srm\":\"Bank Acc\",\"netsal\":\"\",\"epfpaid\":\"\",\"etppaid\":\"\"}'),
(7, 'yyyymmm', '{\"company\":\"BHOOMI TECH PVT LTD\",\"firstname\":\"\",\"lastname\":\"\",\"year\":\"2018\",\"month\":\"October\",\"department\":\"\",\"srm\":\"Bank Acc\",\"deductions\":\"\",\"netsal\":\"\",\"epfpaid\":\"\",\"etppaid\":\"\",\"totalcontri\":\"\"}');

-- --------------------------------------------------------

--
-- Table structure for table `salarypackagesinfor`
--

CREATE TABLE `salarypackagesinfor` (
  `id` int(11) NOT NULL,
  `spname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salarypackagesinfor`
--

INSERT INTO `salarypackagesinfor` (`id`, `spname`) VALUES
(1, 'Pack1'),
(2, 'default'),
(3, 'Pack2');

-- --------------------------------------------------------

--
-- Table structure for table `setdepositestatusinfor`
--

CREATE TABLE `setdepositestatusinfor` (
  `id` int(11) NOT NULL,
  `sm` varchar(100) NOT NULL,
  `val` varchar(200) NOT NULL,
  `state` varchar(100) NOT NULL,
  `dateval` date NOT NULL,
  `yearval` varchar(100) NOT NULL,
  `monuthval` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setdepositestatusinfor`
--

INSERT INTO `setdepositestatusinfor` (`id`, `sm`, `val`, `state`, `dateval`, `yearval`, `monuthval`) VALUES
(1, 'Bank Acc', '                 30600', 'Pending', '2018-01-01', '2017', 'May'),
(2, 'Cash', '                 43362', 'Deposite', '2018-01-02', '2015', 'August'),
(3, 'Bank Acc', '               62', 'Pending', '2018-01-09', '2014', 'May'),
(4, 'Bank Acc', '40736.12', 'Pending', '2018-01-25', '2017', 'December'),
(5, 'Bank Acc', ' 40736.12', 'Pending', '2018-01-22', '2018', 'January');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mac` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `email`, `password`, `mac`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '14-58-D0-12-65-40'),
(2, 'userhr', 'd3ae57b6b6869a4d3f86cae441a592dd', ''),
(3, 'userinv', '63798aa9dfffa8fd3fac766ca6fbd2bf', ''),
(4, 'userm ', 'c8d32c2a41fc240a82ea6e2d1566e8ef', ''),
(5, 'hrm', '698d51a19d8a121ce581499d7b701668', '');

-- --------------------------------------------------------

--
-- Table structure for table `subsalarypackages`
--

CREATE TABLE `subsalarypackages` (
  `spid` int(11) NOT NULL,
  `subname` varchar(1010) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subsalarypackages`
--

INSERT INTO `subsalarypackages` (`spid`, `subname`) VALUES
(1, 'Pack1add'),
(1, 'Pack1ded'),
(2, 'defaultadd'),
(2, 'defaultded'),
(3, 'Pack2add'),
(3, 'Pack2ded');

-- --------------------------------------------------------

--
-- Table structure for table `suppliedreportinfor`
--

CREATE TABLE `suppliedreportinfor` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `col` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliedreportinfor`
--

INSERT INTO `suppliedreportinfor` (`id`, `title`, `col`) VALUES
(1, 'TestR', '{\"ritemcode\":\"102\",\"rpurchasedisc\":\"Test12\",\"rsalesdisc\":\"Sal1\"}');

-- --------------------------------------------------------

--
-- Table structure for table `supplierinfor`
--

CREATE TABLE `supplierinfor` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(150) NOT NULL,
  `date_value` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplierinfor`
--

INSERT INTO `supplierinfor` (`id`, `name`, `address`, `phone`, `email`, `date_value`) VALUES
(2, 'Roshan', 'No 12, Temple Road, Attidiya', '775748787', 'tripalr1986@gmail.com', '2019-03-14');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id` int(11) NOT NULL,
  `item_code` varchar(500) NOT NULL,
  `sales_dis` varchar(500) NOT NULL,
  `create_date` date NOT NULL,
  `quantity` int(50) NOT NULL,
  `available_quantity` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountinfor`
--
ALTER TABLE `accountinfor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aodinfor`
--
ALTER TABLE `aodinfor`
  ADD PRIMARY KEY (`aod_no`);

--
-- Indexes for table `aodManual`
--
ALTER TABLE `aodManual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aodView`
--
ALTER TABLE `aodView`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caddsiteinfor`
--
ALTER TABLE `caddsiteinfor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoryreportinfor`
--
ALTER TABLE `categoryreportinfor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companyinfor`
--
ALTER TABLE `companyinfor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerinfor`
--
ALTER TABLE `customerinfor`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `departmentinfor`
--
ALTER TABLE `departmentinfor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dispachinfor`
--
ALTER TABLE `dispachinfor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeeinfor`
--
ALTER TABLE `employeeinfor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exportdb`
--
ALTER TABLE `exportdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goodentry`
--
ALTER TABLE `goodentry`
  ADD PRIMARY KEY (`purchaseid`);

--
-- Indexes for table `iteminfor`
--
ALTER TABLE `iteminfor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `item_code` (`item_code`);

--
-- Indexes for table `purchaseorderinfor`
--
ALTER TABLE `purchaseorderinfor`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `realgoodentry`
--
ALTER TABLE `realgoodentry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repayroll`
--
ALTER TABLE `repayroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reportinfor`
--
ALTER TABLE `reportinfor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resalarypay`
--
ALTER TABLE `resalarypay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salarypackagesinfor`
--
ALTER TABLE `salarypackagesinfor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setdepositestatusinfor`
--
ALTER TABLE `setdepositestatusinfor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliedreportinfor`
--
ALTER TABLE `suppliedreportinfor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplierinfor`
--
ALTER TABLE `supplierinfor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountinfor`
--
ALTER TABLE `accountinfor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aodinfor`
--
ALTER TABLE `aodinfor`
  MODIFY `aod_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `aodManual`
--
ALTER TABLE `aodManual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aodView`
--
ALTER TABLE `aodView`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `caddsiteinfor`
--
ALTER TABLE `caddsiteinfor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categoryreportinfor`
--
ALTER TABLE `categoryreportinfor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `companyinfor`
--
ALTER TABLE `companyinfor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customerinfor`
--
ALTER TABLE `customerinfor`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `departmentinfor`
--
ALTER TABLE `departmentinfor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dispachinfor`
--
ALTER TABLE `dispachinfor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employeeinfor`
--
ALTER TABLE `employeeinfor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `exportdb`
--
ALTER TABLE `exportdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `goodentry`
--
ALTER TABLE `goodentry`
  MODIFY `purchaseid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `iteminfor`
--
ALTER TABLE `iteminfor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=919;

--
-- AUTO_INCREMENT for table `purchaseorderinfor`
--
ALTER TABLE `purchaseorderinfor`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `realgoodentry`
--
ALTER TABLE `realgoodentry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `repayroll`
--
ALTER TABLE `repayroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reportinfor`
--
ALTER TABLE `reportinfor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `resalarypay`
--
ALTER TABLE `resalarypay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `salarypackagesinfor`
--
ALTER TABLE `salarypackagesinfor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `setdepositestatusinfor`
--
ALTER TABLE `setdepositestatusinfor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `suppliedreportinfor`
--
ALTER TABLE `suppliedreportinfor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supplierinfor`
--
ALTER TABLE `supplierinfor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
