-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2018 at 09:14 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbform`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `accessoriesNo` int(11) NOT NULL,
  `NoidNo` varchar(45) DEFAULT NULL,
  `standard1` varchar(45) DEFAULT NULL,
  `standard2` varchar(45) DEFAULT NULL,
  `akstandard` text,
  `accessories1` varchar(45) DEFAULT NULL,
  `value1` varchar(45) DEFAULT NULL,
  `comment1` varchar(45) DEFAULT NULL,
  `cable` varchar(45) DEFAULT NULL,
  `accessories2` varchar(45) DEFAULT NULL,
  `value2` varchar(45) DEFAULT NULL,
  `comment2` varchar(45) DEFAULT NULL,
  `spe` varchar(45) DEFAULT NULL,
  `accessories3` varchar(45) DEFAULT NULL,
  `value3` varchar(45) DEFAULT NULL,
  `comment3` varchar(45) DEFAULT NULL,
  `fishtale` varchar(45) DEFAULT NULL,
  `talefish` varchar(45) DEFAULT NULL,
  `accessories4` varchar(45) DEFAULT NULL,
  `value4` varchar(45) DEFAULT NULL,
  `comment4` varchar(45) DEFAULT NULL,
  `onload` varchar(45) DEFAULT NULL,
  `accessories5` varchar(45) DEFAULT NULL,
  `value5` varchar(45) DEFAULT NULL,
  `comment5` varchar(45) DEFAULT NULL,
  `abb` varchar(45) DEFAULT NULL,
  `accessories6` varchar(45) DEFAULT NULL,
  `value6` varchar(45) DEFAULT NULL,
  `comment6` varchar(45) DEFAULT NULL,
  `commentAcc` varchar(45) DEFAULT NULL,
  `otherAcc` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`accessoriesNo`, `NoidNo`, `standard1`, `standard2`, `akstandard`, `accessories1`, `value1`, `comment1`, `cable`, `accessories2`, `value2`, `comment2`, `spe`, `accessories3`, `value3`, `comment3`, `fishtale`, `talefish`, `accessories4`, `value4`, `comment4`, `onload`, `accessories5`, `value5`, `comment5`, `abb`, `accessories6`, `value6`, `comment6`, `commentAcc`, `otherAcc`) VALUES
(3, '015', '√', '√', NULL, 'PRESSURE RELIFE', 'WO/C', 'jjjjjj', 'พิเศษ', 'THERMOMITER', 'W/C', 'jjj', 'jjjj', 'THERMOMITER', 'WO/C', 'jjj', 'HV', 'แบบ circuit', 'BUCHHOLZ RELAY', 'W/C', 'jjj', 'AVR', 'PRESSURE GUAGE', 'W/C', 'jjjjj', 'ABB', 'BUCHHOLZ RELAY', 'W/C', 'jjjj', 'jjjjj', NULL),
(4, '018', '√', '√', NULL, 'PRESSURE RELIFE', 'WO/C', '77', '4', 'THERMOMITER', 'W/C', '77', NULL, NULL, NULL, NULL, 'LV', 'แบบ circuit', NULL, NULL, NULL, 'AVR+OIL FILTER', NULL, NULL, NULL, 'ABB', NULL, NULL, NULL, '77', NULL),
(6, '020', '√', NULL, NULL, 'PRESSURE RELIFE', 'WO/C', 'bbbb', '4', 'PRESSURE RELIFE', 'W/C', 'bbbb', NULL, NULL, NULL, NULL, 'LV', 'แบบบาร์', NULL, NULL, NULL, 'AVR+OIL FILTER', NULL, NULL, NULL, 'MR', NULL, NULL, NULL, 'bbbb', NULL),
(7, '021', '√', '√', NULL, 'PRESSURE GUAGE', 'WO/C', 'TTTT', 'พิเศษ', NULL, NULL, 'TTTT', 'TTTT', 'PRESSURE RELIFE', 'W/C', 'TTTTT', 'HV', 'แบบบาร์', NULL, NULL, NULL, 'AVR', NULL, NULL, NULL, 'ABB', NULL, NULL, NULL, '', 'TTTT'),
(9, '023', '√', '√', NULL, 'PRESSURE RELIFE', 'WO/C', 'vvvv', 'พิเศษ', NULL, NULL, NULL, 'vvv', NULL, NULL, NULL, 'LV', 'แบบ circuit', NULL, NULL, NULL, 'AVR+OIL FILTER', NULL, NULL, NULL, 'ABB', NULL, NULL, NULL, NULL, NULL),
(10, '024', '√', '√', NULL, 'PRESSURE RELIFE', 'WO/C', 'vvvv', 'พิเศษ', NULL, NULL, NULL, 'vvv', NULL, NULL, NULL, 'LV', 'แบบ circuit', NULL, NULL, NULL, 'AVR+OIL FILTER', NULL, NULL, NULL, 'ABB', NULL, NULL, NULL, NULL, NULL),
(11, '025', '√', '√', NULL, 'PRESSURE RELIFE', 'WO/C', 'oooooo', '2', 'THERMOMITER', 'W/C', 'oooo', NULL, NULL, NULL, NULL, 'LV', 'แบบ circuit', NULL, NULL, NULL, 'AVR', NULL, NULL, NULL, 'ABB', NULL, NULL, NULL, NULL, NULL),
(12, '026', '√', '√', NULL, 'PRESSURE RELIFE', 'WO/C', 'rrrr', '4', NULL, NULL, NULL, 'rrrrrr', NULL, NULL, NULL, 'HV/LV', 'แบบ circuit', NULL, NULL, NULL, 'AVR', NULL, NULL, NULL, 'MR', NULL, NULL, NULL, 'rrrrr', NULL),
(15, '028', '√', '', NULL, 'BUCHHOLZ RELAY', 'W/C', '5555', '4', 'PRESSURE RELIFE', 'WO/C', '5555', NULL, NULL, NULL, NULL, 'LV', 'แบบ circuit', NULL, NULL, NULL, 'AVR', NULL, NULL, NULL, 'ABB', NULL, NULL, NULL, NULL, NULL),
(16, '029', '√', '√', NULL, 'THERMOMITER', 'WO/C', 'ccccccc', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'LV', 'แบบ circuit', NULL, NULL, NULL, 'AVR', NULL, NULL, NULL, 'ABB', NULL, NULL, NULL, NULL, NULL),
(17, '030', '√', '√', NULL, 'THERMOMITER', 'WO/C', 'กกกกกก', 'พิเศษ', NULL, NULL, NULL, 'กกกก', NULL, NULL, NULL, 'HV/LV', 'แบบ circuit', NULL, NULL, NULL, 'AVR+OIL FILTER', NULL, NULL, NULL, 'ABB', NULL, NULL, NULL, 'กกกกก', NULL),
(18, '031', '√', NULL, NULL, 'PRESSURE RELIFE', 'WO/C', 'อออออ', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'HV', 'แบบ circuit', NULL, NULL, NULL, 'AVR', NULL, NULL, NULL, 'ABB', NULL, NULL, NULL, NULL, NULL),
(22, '033', '√', NULL, NULL, 'THERMOMETER', NULL, NULL, NULL, 'PRESSURE RELIFE', NULL, NULL, NULL, 'OIL LEVEL GAUGE', NULL, NULL, NULL, NULL, 'BUCHOLZ RELAY', NULL, NULL, NULL, 'BUCHOLZ RELAY', NULL, NULL, NULL, 'BUCHOLZ RELAY', NULL, NULL, NULL, NULL),
(24, '100', '√', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, '103', '√', NULL, NULL, 'THERMOMETER', 'WO/C', NULL, 'พิเศษ', 'PRESSURE RELIFE', 'WO/C', NULL, '@@@@', 'BUCHOLZ RELAY', 'WO/C', NULL, 'HV/LV', 'แบบ circuit', 'PRESSURE GUAGE', 'WO/C', NULL, 'AVR+OIL FILTER', 'OIL LEVEL GAUGE', 'WO/C', NULL, 'ABB', 'WINDING TEMP INDICATOR', 'WO/C', NULL, NULL, NULL),
(28, '200', '√', NULL, 'THERMOMETER(POCKET), OIL LEVEL INDICATOR(WO/C', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, '2018CE001', '√', NULL, 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, '123', '√', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, '300', '√', NULL, 'THERMOMETER(POCKET), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)', NULL, NULL, NULL, '2', NULL, NULL, NULL, 'พพพพ', NULL, NULL, NULL, 'LV', 'แบบบาร์', NULL, NULL, NULL, 'AVR', NULL, NULL, NULL, 'MR', NULL, NULL, NULL, NULL, NULL),
(42, '301', '√', NULL, 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)', NULL, NULL, NULL, 'พิเศษ', NULL, NULL, NULL, 'นนนน', NULL, NULL, NULL, 'HV / LV', 'แบบ circuit', NULL, NULL, NULL, 'AVR + OIL FILTER', NULL, NULL, NULL, 'MR', NULL, NULL, NULL, NULL, NULL),
(43, '302', '√', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, '303', '√', '√', 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)', 'THERMOMETER', 'W/C', '1232', NULL, 'PRESSURE RELIFE', 'W/C', '123312', NULL, 'BUCHOLZ RELAY', 'W/C', '131231', NULL, NULL, 'PRESSURE GUAGE', 'W/C', '3123123', NULL, 'OIL LEVEL GAUGE', 'W/C', '123123', NULL, 'WINDING TEMP INDICATOR', 'W/C', '131231', NULL, '12312312'),
(45, '304', '√', '√', 'THERMOMETER(W/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C), WHEELS', 'THERMOMETER', 'W/C', NULL, NULL, 'BUCHOLZ RELAY', 'W/C', NULL, NULL, 'PRESSURE RELIFE', 'W/C', NULL, NULL, NULL, 'PRESSURE GUAGE', 'W/C', NULL, NULL, 'WINDING TEMP INDICATOR', 'W/C', NULL, NULL, 'OIL LEVEL GAUGE', 'W/C', NULL, NULL, '1231231'),
(46, '305', '√', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, '306', '√', NULL, 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, '307', '√', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, '308', '√', NULL, 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)', NULL, NULL, NULL, 'พิเศษ', NULL, NULL, NULL, 'hhhh', NULL, NULL, NULL, 'LV', 'แบบ circuit', NULL, NULL, NULL, 'AVR + OIL FILTER', NULL, NULL, NULL, 'ABB', NULL, NULL, NULL, NULL, NULL),
(50, '500', '√', '√', 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)', 'THERMOMETER', 'WO/C', 'eee', 'พิเศษ', 'PRESSURE RELIFE', 'W/C', 'eee', 'eee', 'BUCHOLZ RELAY', 'WO/C', 'ee', 'HV / LV', 'แบบ circuit', 'PRESSURE GUAGE', 'W/C', 'eee', 'AVR', 'OIL LEVEL GAUGE', 'W/C', 'ee', 'MR', 'WINDING TEMP INDICATOR', 'WO/C', 'eeee', 'eeee', 'eeee'),
(51, '501', '√', '√', 'THERMOMETER(POCKET), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)', 'THERMOMETER', 'W/C', 'pp', 'พิเศษ', 'PRESSURE RELIFE', 'W/C', 'ppp', 'pp', 'BUCHOLZ RELAY', 'W/C', 'pp', 'HV / LV', 'แบบ circuit', 'PRESSURE GUAGE', 'W/C', 'pp', 'AVR + OIL FILTER', 'OIL LEVEL GAUGE', 'W/C', 'pp', 'ABB', 'WINDING TEMP INDICATOR', 'W/C', 'ppp', 'pppp', NULL),
(52, '502', '√', NULL, 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, '504', '√', NULL, 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, '505', '√', NULL, 'THERMOMETER(POCKET), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, '506', '√', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, '507', '√', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, '508', '√', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, '510', '√', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, '511', '√', '√', 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)', 'THERMOMETER', 'WO/C', 'aaa', 'พิเศษ', 'PRESSURE RELIFE', 'WO/C', 'aa', 'aaa', 'BUCHOLZ RELAY', 'WO/C', 'aa', 'HV / LV', 'แบบ circuit', 'PRESSURE GUAGE', 'WO/C', 'aa', 'AVR + OIL FILTER', 'OIL LEVEL GAUGE', 'W/C', 'aa', 'MR', 'WINDING TEMP INDICATOR', 'WO/C', 'aa', 'aaaa', 'aaa'),
(62, '512', '√', NULL, 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, '600', '√', '√', NULL, 'THERMOMETER', 'W/C', '600', 'พิเศษ', 'PRESSURE RELIFE', 'W/C', '600', '600', 'BUCHOLZ RELAY', 'W/C', '600', 'HV / LV', 'แบบ circuit', 'PRESSURE GUAGE', 'W/C', '600', 'AVR + OIL FILTER', 'OIL LEVEL GAUGE', 'W/C', '600', 'ABB', 'WINDING TEMP INDICATOR', 'W/C', '600', '600', '600'),
(64, '601', '√', '√', NULL, 'THERMOMETER', 'W/C', '601', 'พิเศษ', 'PRESSURE RELIFE', 'W/C', '601', '601', 'BUCHOLZ RELAY', 'W/C', '601', 'HV / LV', 'แบบ circuit', 'PRESSURE GUAGE', 'W/C', '601', 'AVR + OIL FILTER', 'OIL LEVEL GAUGE', 'W/C', '601', 'MR', 'WINDING TEMP INDICATOR', 'W/C', '601', '601', '601');

-- --------------------------------------------------------

--
-- Table structure for table `accessorytool`
--

CREATE TABLE `accessorytool` (
  `accessorytoolid` int(11) NOT NULL,
  `accname` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accessorytool`
--

INSERT INTO `accessorytool` (`accessorytoolid`, `accname`) VALUES
(1, 'THERMOMETER'),
(2, 'PRESSURE RELIFE'),
(3, 'BUCHOLZ RELAY'),
(4, 'PRESSURE GUAGE'),
(5, 'OIL LEVEL GAUGE'),
(6, 'WINDING TEMP INDICATOR');

-- --------------------------------------------------------

--
-- Table structure for table `approve`
--

CREATE TABLE `approve` (
  `approveNo` int(11) NOT NULL,
  `NoidNo` varchar(45) DEFAULT NULL,
  `approve1` varchar(45) DEFAULT NULL,
  `approve2` varchar(45) DEFAULT NULL,
  `approve3` varchar(45) DEFAULT NULL,
  `approve4` varchar(45) DEFAULT NULL,
  `approve5` varchar(45) DEFAULT NULL,
  `approve6` varchar(45) DEFAULT NULL,
  `approve7` varchar(45) DEFAULT NULL,
  `approve8` varchar(45) DEFAULT NULL,
  `approve9` varchar(45) DEFAULT NULL,
  `wantDate` varchar(45) DEFAULT NULL,
  `TellDate` varchar(45) DEFAULT NULL,
  `present` varchar(45) DEFAULT NULL,
  `position` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `approve`
--

INSERT INTO `approve` (`approveNo`, `NoidNo`, `approve1`, `approve2`, `approve3`, `approve4`, `approve5`, `approve6`, `approve7`, `approve8`, `approve9`, `wantDate`, `TellDate`, `present`, `position`) VALUES
(3, '015', '√', NULL, '√', NULL, '√', '√', '√', NULL, NULL, NULL, NULL, NULL, NULL),
(4, '018', '√', '√', '√', '√', '√', '√', '√', '√', '√', '1', '2', '3', '4'),
(6, '020', '√', NULL, '√', NULL, '√', '√', '√', NULL, NULL, NULL, NULL, NULL, NULL),
(7, '021', '√', '√', '√', '√', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '023', '√', NULL, '√', NULL, '√', NULL, '√', NULL, NULL, NULL, NULL, NULL, NULL),
(10, '024', '√', NULL, '√', NULL, '√', NULL, '√', NULL, NULL, NULL, NULL, NULL, NULL),
(11, '026', NULL, '√', NULL, '√', NULL, NULL, NULL, '√', NULL, 'rrrr', 'rrrrr', 'rrrrr', 'rrrrr'),
(13, '028', '√', '√', '√', '√', '√', '√', '√', '√', '√', '5555555', '555', '555', '5555'),
(14, '029', '√', '√', '√', '√', '√', '√', '√', '√', '√', 'cccc', 'ccccc', 'cccccc', 'cccccccc'),
(15, '030', '√', '√', '√', '√', '√', '√', '√', NULL, NULL, 'กกกกก', 'กกกกกก', 'กกกกกก', NULL),
(16, '031', '√', '√', '√', NULL, NULL, NULL, NULL, NULL, NULL, 'ออออ', 'อออออ', NULL, NULL),
(20, '033', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, '100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, '103', '√', NULL, '√', NULL, '√', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, '200', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, '2018CE001', '√', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, '300', '√', '√', NULL, '√', '√', '√', NULL, NULL, NULL, '09/01/2018', 'พพ', 'พพ', NULL),
(40, '301', '√', '√', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '18/01/2018', NULL, NULL, NULL),
(41, '302', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, '303', NULL, '√', NULL, '√', '√', NULL, '√', '√', NULL, '09/01/2018', '123213', '23123', '3123123'),
(43, '304', NULL, '√', NULL, '√', NULL, NULL, NULL, '√', NULL, '18/01/2018', '132', '123123', '123313'),
(44, '305', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, '306', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, '307', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, '308', '√', '√', NULL, '√', NULL, NULL, NULL, '√', NULL, '16/01/2018', 'hhhh', 'hhhhh', 'hhhhh'),
(48, '500', '√', '√', '√', '√', '√', '√', '√', '√', '√', '17/01/2018', 'eee', 'eee', 'eee'),
(49, '501', '√', '√', '√', '√', '√', '√', '√', '√', '√', '17/01/2018', 'ppp', 'pppp', 'pppp'),
(50, '502', '√', '√', '√', '√', '√', '√', '√', '√', '√', NULL, NULL, NULL, NULL),
(53, '504', '√', '√', '√', '√', '√', '√', '√', '√', '√', NULL, NULL, NULL, NULL),
(54, '505', '√', '√', '√', '√', '√', '√', '√', '√', '√', NULL, NULL, NULL, NULL),
(55, '506', '√', '√', '√', '√', '√', '√', '√', '√', '√', NULL, NULL, NULL, NULL),
(56, '507', '√', '√', '√', '√', '√', '√', '√', '√', '√', NULL, NULL, NULL, NULL),
(57, '508', '√', '√', '√', '√', '√', '√', '√', '√', '√', NULL, NULL, NULL, NULL),
(58, '510', '√', '√', '√', '√', '√', '√', '√', '√', '√', NULL, NULL, NULL, NULL),
(59, '511', '√', '√', '√', '√', '√', '√', '√', '√', '√', '09/01/2018', 'aa', 'aaaa', 'aa'),
(60, '512', '√', '√', '√', '√', '√', '√', '√', '√', '√', '17/01/2018', '512', '512', '512'),
(61, '600', '√', '√', '√', '√', '√', '√', '√', '√', '√', '01/02/2018', '600', '600', '600'),
(62, '601', '√', '√', '√', '√', '√', '√', '√', '√', '√', '01/02/2018', '601', '601', '601');

-- --------------------------------------------------------

--
-- Table structure for table `etc`
--

CREATE TABLE `etc` (
  `etcNo` int(11) NOT NULL,
  `NoidNo` varchar(45) DEFAULT NULL,
  `mat` varchar(45) DEFAULT NULL,
  `othermat` varchar(45) DEFAULT NULL,
  `many` varchar(45) DEFAULT NULL,
  `date10` varchar(45) DEFAULT NULL,
  `date10_1` varchar(45) DEFAULT NULL,
  `spare` varchar(45) DEFAULT NULL,
  `presentNo` varchar(45) DEFAULT NULL,
  `doc` varchar(45) DEFAULT NULL,
  `other10` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `etc`
--

INSERT INTO `etc` (`etcNo`, `NoidNo`, `mat`, `othermat`, `many`, `date10`, `date10_1`, `spare`, `presentNo`, `doc`, `other10`) VALUES
(3, '015', 'ไม่มี', NULL, 'jjjj', '2017-11-16', 'jjjj', 'jjj', 'jj', 'jjj', 'jjjj'),
(4, '018', 'ไม่มี', NULL, '77', '2017-11-08', '77', '77', '77', '77', '77'),
(6, '020', 'ไม่มี', NULL, 'bbbb', '2017-11-23', 'bbbb', 'bbbb', 'bbbb', 'bbbb', 'bbbb'),
(7, '021', 'มี', 'TTTT', 'TTT', '2017-11-23', 'TTT', 'TTTT', 'TTT', 'TT', 'TTTTT'),
(9, '023', 'ไม่มี', NULL, 'vvv', '2017-11-24', 'vvv', 'vvv', 'vvv', 'vvvv', 'vvvvv'),
(10, '024', 'ไม่มี', NULL, 'vvv', '2017-11-24', 'vvv', 'vvv', 'vvv', 'vvvv', 'vvvvv'),
(11, '025', 'ไม่มี', NULL, 'oooo', '2017-12-14', 'ooo', 'oooo', 'ooo', 'oooo', 'oooo'),
(12, '026', 'ไม่มี', NULL, 'rrrrr', '2017-11-30', 'rr', 'rrrr', 'rr', 'rrr', 'rrrrr'),
(15, '028', 'มี', '55555', '55555', '2017-12-13', '555', '555', '55', '555', '55555'),
(16, '029', 'ไม่มี', NULL, 'ccccc', '2017-12-14', 'cccccc', 'cccc', 'cccc', 'cccc', 'cccccc'),
(17, '030', 'มี', 'กกกกก', 'กกกกกก', '2017-12-07', 'กกก', 'กกกกก', 'กกกกก', 'กกกกก', 'กกกกกก'),
(18, '031', 'ไม่มี', NULL, 'อออออ', '2017-12-07', 'อออ', 'ออออ', 'อออ', 'ออออ', 'อออ'),
(22, '033', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, '100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, '103', 'ไม่มี', NULL, '@@', '2017-12-07', '@@', '@@@', '@@@', '@@@', '@@@@'),
(28, '200', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, '2018CE001', 'ไม่มี', NULL, '1', '2018-01-26', '10', NULL, NULL, NULL, NULL),
(37, '123', NULL, NULL, NULL, '18/01/2018', NULL, NULL, NULL, NULL, NULL),
(41, '300', 'ไม่มี', NULL, 'พพพพ', '17/01/2018', 'พพพพ', 'พพพพ', 'พพพ', 'พพ', 'พพพพ'),
(42, '301', 'มี', 'นนนน', 'นนน', '23/01/2018', 'นนน', 'นนน', 'นน', 'นน', 'นนน'),
(43, '302', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, '303', 'มี', '123131231', '1231232', NULL, NULL, NULL, NULL, NULL, NULL),
(45, '304', 'มี', '123123', NULL, '16/01/2018', NULL, NULL, NULL, NULL, NULL),
(46, '305', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, '306', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, '307', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, '308', 'มี', 'hhhhh', 'hhh', '17/01/2018', 'hhh', 'hhh', 'hhh', 'hhhh', 'hhhhh'),
(50, '500', 'มี', 'eeeee', 'eeee', '10/01/2018', 'eeee', 'eeee', 'eee', 'eee', 'eeee'),
(51, '501', 'มี', 'pppp', 'pppp', '23/01/2018', 'pp', 'pppp', 'pp', 'pppp', 'ppppp'),
(52, '502', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, '504', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, '505', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, '506', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, '507', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, '508', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, '510', 'มี', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, '511', 'มี', 'aaa', 'aaa', '24/01/2018', 'aaa', 'aa', 'aa', 'aa', 'aaaa'),
(62, '512', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, '600', 'มี', '600', '600', '01/02/2018', '600', '600', '600', '600', '600'),
(64, '601', 'มี', '601', '601', '01/02/2018', '601', '601', '601', '601', '601');

-- --------------------------------------------------------

--
-- Table structure for table `fishtale`
--

CREATE TABLE `fishtale` (
  `idfishtale` int(11) NOT NULL,
  `fishtalename` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fishtale`
--

INSERT INTO `fishtale` (`idfishtale`, `fishtalename`) VALUES
(1, 'LV'),
(2, 'HV'),
(3, 'HV / LV');

-- --------------------------------------------------------

--
-- Table structure for table `forcost`
--

CREATE TABLE `forcost` (
  `forcostNo` int(11) NOT NULL,
  `NoidNo` varchar(45) DEFAULT NULL,
  `foreng1` varchar(45) DEFAULT NULL,
  `costno` varchar(45) DEFAULT NULL,
  `foreng2` varchar(45) DEFAULT NULL,
  `foreng3` varchar(45) DEFAULT NULL,
  `foreng4` varchar(45) DEFAULT NULL,
  `foreng5` varchar(45) DEFAULT NULL,
  `engApprove1` varchar(45) DEFAULT NULL,
  `engdate1` varchar(45) DEFAULT NULL,
  `price1` varchar(45) DEFAULT NULL,
  `price2` varchar(45) DEFAULT NULL,
  `price3` varchar(45) DEFAULT NULL,
  `engApprove2` varchar(45) DEFAULT NULL,
  `engdate2` varchar(45) DEFAULT NULL,
  `engApprove0` varchar(45) DEFAULT NULL,
  `engdate0` varchar(45) DEFAULT NULL,
  `toManager` varchar(45) DEFAULT NULL,
  `manager` varchar(45) DEFAULT NULL,
  `managerdate` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forcost`
--

INSERT INTO `forcost` (`forcostNo`, `NoidNo`, `foreng1`, `costno`, `foreng2`, `foreng3`, `foreng4`, `foreng5`, `engApprove1`, `engdate1`, `price1`, `price2`, `price3`, `engApprove2`, `engdate2`, `engApprove0`, `engdate0`, `toManager`, `manager`, `managerdate`) VALUES
(3, '018', NULL, NULL, 'จัดทำเอกสารต้นทุน 1 และ 2', 'จัดทำเฉพาะเอกสารต้นทุนที่ 2', 'ปรับราคาเอกสารต้นทุนเลขที่', NULL, '777', '2017-11-10', 'เสนอประมูลราคา', 'เพื่อแข่งขันราคา', NULL, '777', '2017-11-29', NULL, NULL, '7777', NULL, NULL),
(5, '020', NULL, NULL, 'จัดทำเอกสารต้นทุน 1 และ 2', 'จัดทำเฉพาะเอกสารต้นทุนที่ 2', NULL, NULL, 'bbbb', '2017-11-23', 'เสนอประมูลราคา', 'เพื่อแข่งขันราคา', NULL, 'bbb', '2017-11-29', NULL, NULL, 'bbbbbb', 'bbbbb', 'bbbbbb'),
(6, '023', 'มีเอกสารต้นทุนแล้วเลขที่', 'vvvvv', 'จัดทำเอกสารต้นทุน 1 และ 2', 'จัดทำเฉพาะเอกสารต้นทุนที่ 2', 'ปรับราคาเอกสารต้นทุนเลขที่', NULL, 'vvv', '2017-11-16', 'เสนอประมูลราคา', 'เพื่อแข่งขันราคา', NULL, 'vvvv', '2017-11-30', 'vvvvv', '2017-11-08', 'vvv', 'vvv', '2017-11-24'),
(7, '024', 'มีเอกสารต้นทุนแล้วเลขที่', 'vvvvvv', 'จัดทำเอกสารต้นทุน 1 และ 2', 'จัดทำเฉพาะเอกสารต้นทุนที่ 2', 'ปรับราคาเอกสารต้นทุนเลขที่', NULL, 'vvv', '2017-11-16', 'เสนอประมูลราคา', 'เพื่อแข่งขันราคา', NULL, 'vvvv', '2017-11-30', 'vvvvv', '2017-11-08', 'vvv', 'vvv', '2017-11-24'),
(8, '026', 'มีเอกสารต้นทุนแล้วเลขที่', 'rrrrr', 'จัดทำเอกสารต้นทุน 1 และ 2', 'จัดทำเฉพาะเอกสารต้นทุนที่ 2', NULL, NULL, 'rrrr', '2017-12-21', 'เสนอประมูลราคา', 'เพื่อแข่งขันราคา', NULL, 'rrrr', '2017-12-20', 'rrrr', '2017-12-05', 'rrr', 'rrrr', '2017-12-29'),
(9, '029', 'มีเอกสารต้นทุนแล้วเลขที่', 'ccccc', 'จัดทำเอกสารต้นทุน 1 และ 2', 'จัดทำเฉพาะเอกสารต้นทุนที่ 2', 'ปรับราคาเอกสารต้นทุนเลขที่', 'ไม่จัดทำเพราะ', 'ccccc', '2017-12-14', 'เสนอประมูลราคา', 'เพื่อแข่งขันราคา', 'อื่นๆ', 'cccc', '2017-12-14', 'ccccc', '2017-12-07', 'cccccc', 'ccccc', '2017-12-21'),
(10, '030', NULL, NULL, 'จัดทำเอกสารต้นทุน 1 และ 2', 'จัดทำเฉพาะเอกสารต้นทุนที่ 2', 'ปรับราคาเอกสารต้นทุนเลขที่', 'ไม่จัดทำเพราะ', 'กกกกกก', '2017-12-14', 'เสนอประมูลราคา', 'เพื่อแข่งขันราคา', 'อื่นๆ', 'กกกกก', '2017-12-13', 'กกกกก', '2017-12-13', 'กกกกก', 'กกกกก', '2017-12-22'),
(11, '031', 'มีเอกสารต้นทุนแล้วเลขที่', 'อออออ', 'จัดทำเอกสารต้นทุน 1 และ 2', 'จัดทำเฉพาะเอกสารต้นทุนที่ 2', NULL, NULL, 'ออออ', '2017-12-22', 'เสนอประมูลราคา', 'เพื่อแข่งขันราคา', 'อื่นๆ', 'ออออ', '2017-12-13', 'ออออออ', '2017-12-13', 'ออออออ', 'ออออออ', '2017-12-07'),
(15, '033', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, '100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, '103', 'มีเอกสารต้นทุนแล้วเลขที่', NULL, 'จัดทำเอกสารต้นทุน 1 และ 2', 'จัดทำเฉพาะเอกสารต้นทุนที่ 2', NULL, 'ไม่จัดทำเพราะ', '@@@@', '2017-12-22', 'เสนอประมูลราคา', 'เพื่อแข่งขันราคา', 'อื่นๆ', '@@@@', '2017-12-21', '@@@@', '2017-12-21', '@@@@', '@@@@', '2017-12-29'),
(18, '200', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, '2018CE001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '18/01/2018', NULL, NULL, NULL, NULL, '10/01/2018', NULL, '03/01/2018', NULL, NULL, '09/01/2018'),
(26, '300', 'มีเอกสารต้นทุนแล้วเลขที่', NULL, NULL, 'จัดทำเฉพาะเอกสารต้นทุนที่ 2', 'ปรับราคาเอกสารต้นทุนเลขที่', 'ไม่จัดทำเพราะ', 'พพพพ', '17/01/2018', 'เสนอประมูลราคา', 'เพื่อแข่งขันราคา', NULL, 'พพพพ', '09/01/2018', 'พพพพ', '10/01/2018', 'พพพ', 'พพพพ', '10/01/2018'),
(27, '303', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, '307', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, '308', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, '500', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, '504', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, '507', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, '600', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `forproduce`
--

CREATE TABLE `forproduce` (
  `forproduceNo` int(11) NOT NULL,
  `NoidNo` varchar(45) DEFAULT NULL,
  `Itemcode` varchar(45) DEFAULT NULL,
  `design` varchar(45) DEFAULT NULL,
  `percent` varchar(45) DEFAULT NULL,
  `engineer` varchar(45) DEFAULT NULL,
  `day0` varchar(45) DEFAULT NULL,
  `time1` varchar(45) DEFAULT NULL,
  `day1` varchar(45) DEFAULT NULL,
  `day2` varchar(45) DEFAULT NULL,
  `time2` varchar(45) DEFAULT NULL,
  `day3` varchar(45) DEFAULT NULL,
  `com1` varchar(45) DEFAULT NULL,
  `designer` varchar(45) DEFAULT NULL,
  `designerdate` varchar(45) DEFAULT NULL,
  `engApprove3` varchar(45) DEFAULT NULL,
  `engdate3` varchar(45) DEFAULT NULL,
  `orderTime` varchar(45) DEFAULT NULL,
  `produce1` varchar(45) DEFAULT NULL,
  `spetest` varchar(45) DEFAULT NULL,
  `forOrder` varchar(45) DEFAULT NULL,
  `produce2` varchar(45) DEFAULT NULL,
  `com2` varchar(45) DEFAULT NULL,
  `designer2` varchar(45) DEFAULT NULL,
  `designerdate2` varchar(45) DEFAULT NULL,
  `engApprove4` varchar(45) DEFAULT NULL,
  `engdate4` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forproduce`
--

INSERT INTO `forproduce` (`forproduceNo`, `NoidNo`, `Itemcode`, `design`, `percent`, `engineer`, `day0`, `time1`, `day1`, `day2`, `time2`, `day3`, `com1`, `designer`, `designerdate`, `engApprove3`, `engdate3`, `orderTime`, `produce1`, `spetest`, `forOrder`, `produce2`, `com2`, `designer2`, `designerdate2`, `engApprove4`, `engdate4`) VALUES
(1, '015', 'jjjjj', 'ออกแบบใหม่/ปรับปรุงแบบก่อนการผลิต', '25%', 'jjjj', '2017-11-03', '√', 'jjjj', 'jjjjj', '√', 'jjjjj', 'jjjjjj', 'jjjjj', '2017-11-09', 'jjjj', '2017-11-23', 'jj', 'jjj', 'jjj', 'jjj', 'jj', 'jjj', 'jjj', '2017-11-17', 'jjjj', '2017-11-30'),
(2, '021', 'TTTTT', 'ออกแบบใหม่/ปรับปรุงแบบก่อนการผลิต', '100%', 'TTTT', '2017-11-09', '√', 'TTTTT', 'TTTT', '√', 'TTTTTT', 'TTTT', 'TTT', '2017-11-24', 'TTTT', '2017-11-23', 'TTT', 'TT', 'TTTT', 'TTT', 'TTT', 'TTTT', 'TTT', '2017-11-23', 'TTT', '2017-11-23'),
(4, '025', 'ooooo', 'ออกแบบใหม่/ปรับปรุงแบบก่อนการผลิต', '25%', 'ooooo', '2017-12-28', '√', 'ooooo', 'ooooo', '√', 'ooooo', 'oooooo', 'oooo', '2017-12-07', 'oooo', '2017-12-22', 'oooo', 'ooo', 'ooo', 'oooo', 'ooo', 'oooo', 'ooooo', '2017-12-28', 'oooo', '2017-12-28'),
(7, '028', '5555', 'ออกแบบใหม่/ปรับปรุงแบบก่อนการผลิต', '75%', '555', '2017-12-21', '√', '555', '55555', '√', '555555', '5555', '55555', '2017-12-07', '5555', '2017-12-20', '555', '555', '55', '555', '555', '5555', '555', '2017-11-30', '555', '2017-12-21'),
(8, '301', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '302', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, '304', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, '305', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '306', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, '508', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, '510', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, '511', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, '512', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, '601', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guaranteed`
--

CREATE TABLE `guaranteed` (
  `guaranteeNo` int(11) NOT NULL,
  `NoidNo` varchar(45) DEFAULT NULL,
  `gua` varchar(100) DEFAULT NULL,
  `core` varchar(45) DEFAULT NULL,
  `copper` varchar(45) DEFAULT NULL,
  `z` varchar(45) DEFAULT NULL,
  `at` varchar(45) DEFAULT NULL,
  `tempo` varchar(45) DEFAULT NULL,
  `tempw` varchar(45) DEFAULT NULL,
  `tolerance1` varchar(45) DEFAULT NULL,
  `otherTolerance1` varchar(45) DEFAULT NULL,
  `tolerance2` varchar(45) DEFAULT NULL,
  `otherTolerance2` varchar(45) DEFAULT NULL,
  `HV4` varchar(45) DEFAULT NULL,
  `LV4` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guaranteed`
--

INSERT INTO `guaranteed` (`guaranteeNo`, `NoidNo`, `gua`, `core`, `copper`, `z`, `at`, `tempo`, `tempw`, `tolerance1`, `otherTolerance1`, `tolerance2`, `otherTolerance2`, `HV4`, `LV4`) VALUES
(3, '015', 'พิเศษ', 'jjjj', 'jjj', 'jjjj', 'jjj', 'jjj', 'jjj', '+ 0%', NULL, 'ตาม IEC STANDARD', NULL, 'jjjjj', 'jjj'),
(4, '018', 'มาตรฐานเอกรัฐ (IEC STANDART ; TOTAL LOSS +10%)', '1', '2', '3', '4', '5', '6', 'ตาม IEC STANDARD', NULL, 'ตาม IEC STANDARD', NULL, '7', '8'),
(6, '020', 'มาตรฐานเอกรัฐ (IEC STANDART ; TOTAL LOSS +10%)', 'bbbb', 'bbbb', 'bbbb', 'bbbb', 'bbb', 'bbb', 'ตาม IEC STANDARD', NULL, 'ตาม IEC STANDARD', NULL, 'bbbb', 'bbb'),
(7, '021', 'มาตรฐานเอกรัฐ (IEC STANDART ; TOTAL LOSS +10%)', 'TTTTT', 'TTT', 'TTTT', 'TTT', 'TTT', 'TTTT', '+ 0%', NULL, 'อื่นๆ', 'TTT', 'TTTT', 'TTTT'),
(9, '023', 'มาตรฐานเอกรัฐ (IEC STANDART ; TOTAL LOSS +10%)', 'vvvv', 'vvvv', 'vvv', 'vvv', 'vvv', 'vvvv', 'ตาม IEC STANDARD', NULL, 'ตาม IEC STANDARD', NULL, 'vvv', 'vvv'),
(10, '024', 'มาตรฐานเอกรัฐ (IEC STANDART ; TOTAL LOSS +10%)', 'vvvv', 'vvvv', 'vvv', 'vvv', 'vvv', 'vvvv', 'ตาม IEC STANDARD', NULL, 'ตาม IEC STANDARD', NULL, 'vvv', 'vvv'),
(11, '025', 'มาตรฐานเอกรัฐ (IEC STANDART ; TOTAL LOSS +10%)', 'ooo', 'ooo', 'oooo', 'oo', 'oooo', 'oo', '+ 0%', NULL, 'ตาม IEC STANDARD', NULL, 'oooooo', 'ooo'),
(12, '026', 'พิเศษ', 'rrr', 'rrrr', 'rrr', 'rrrr', 'rrrr', 'rrr', '+ 0%', NULL, 'ตาม IEC STANDARD', NULL, 'rr', 'rrrrr'),
(15, '028', 'มาตรฐานเอกรัฐ (IEC STANDART ; TOTAL LOSS +10%)', '55555', '5555', '555', '5555', '5555', '5555', 'ตาม IEC STANDARD', NULL, 'ตาม IEC STANDARD', NULL, '55555', '555'),
(16, '029', 'พิเศษ', 'ccc', 'cccc', 'cccc', 'ccc', 'cccccc', 'cccccc', '+ 0%', NULL, 'ตาม IEC STANDARD', NULL, 'ccccccc', 'ccc'),
(17, '030', 'มาตรฐานเอกรัฐ (IEC STANDART ; TOTAL LOSS +10%)', 'กกกกก', 'กกก', 'กกกก', 'กกก', 'กกกก', 'กกก', 'ตาม IEC STANDARD', NULL, 'ตาม IEC STANDARD', NULL, 'กกกกกก', 'กกก'),
(18, '031', 'มาตรฐานเอกรัฐ (IEC STANDART ; TOTAL LOSS +10%)', 'อออออ', 'ออออ', 'ออออ', 'อออ', 'อออออ', 'ออออ', '+ 0%', NULL, 'ตาม IEC STANDARD', NULL, 'ออออ', 'อออ'),
(22, '033', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, '100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, '103', 'มาตรฐานเอกรัฐ (IEC STANDART ; TOTAL LOSS +10%)', '@@@@', '@@@@', '@@@@@', '@@@@', '@@@@', '@@@@', 'ตาม IEC STANDARD', NULL, 'ตาม IEC STANDARD', NULL, '@@@@@', '@@@@@'),
(28, '200', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, '2018CE001', 'มาตรฐานเอกรัฐ (IEC STANDART ; TOTAL LOSS +10% )', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, '300', 'พิเศษ', 'พพพ', 'พพพพ', 'พพพ', 'พพ', 'พพพพ', 'พพพ', NULL, NULL, NULL, NULL, 'พพพพ', 'พพพพ'),
(43, '301', 'มาตรฐานเอกรัฐ (IEC STANDARD ; TOTAL LOSS +10% )', 'นนนน', 'นนนน', 'นนนนน', 'นนน', 'นนน', 'นน', 'ตาม IEC STANDARD', NULL, 'ตาม IEC STANDARD', NULL, 'นนนน', 'นน'),
(44, '302', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, '303', 'มาตรฐานเอกรัฐ (IEC STANDARD ; TOTAL LOSS +10% )', NULL, NULL, NULL, NULL, NULL, NULL, 'อื่นๆ', '1232', 'อื่นๆ', '123234', NULL, NULL),
(46, '304', 'มาตรฐานเอกรัฐ (IEC STANDARD ; TOTAL LOSS +10% )', NULL, NULL, NULL, NULL, NULL, NULL, 'อื่นๆ', '2312', 'อื่นๆ', '3123123', NULL, NULL),
(47, '305', 'มาตรฐานเอกรัฐ (IEC STANDARD ; TOTAL LOSS +10% )', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, '306', 'มาตรฐานเอกรัฐ (IEC STANDARD ; TOTAL LOSS +10% )', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, '307', 'มาตรฐานเอกรัฐ (IEC STANDARD ; TOTAL LOSS +10% )', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, '308', 'มาตรฐานเอกรัฐ (IEC STANDARD ; TOTAL LOSS +10% )', 'hhhhh', 'hhhhhh', 'hhhh', 'hhhhh', 'hhhhh', 'hhhh', 'ตาม IEC STANDARD', NULL, 'ตาม IEC STANDARD', NULL, 'hhhh', 'hhhh'),
(51, '500', 'พิเศษ', 'eee', 'eee', 'ee', 'eee', 'ee', 'eee', 'อื่นๆ', 'eee', 'อื่นๆ', 'eee', 'ee', 'ee'),
(52, '501', 'พิเศษ', 'pppp', 'ppp', 'pp', 'pp', 'pp', 'pp', 'อื่นๆ', 'pppp', 'อื่นๆ', 'pppp', 'pppp', 'pp'),
(53, '502', 'มาตรฐานเอกรัฐ (IEC STANDARD ; TOTAL LOSS +10% )', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, '504', 'มาตรฐานเอกรัฐ (IEC STANDARD ; TOTAL LOSS +10% )', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, '505', 'มาตรฐานเอกรัฐ (IEC STANDARD ; TOTAL LOSS +10% )', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, '506', 'มาตรฐานเอกรัฐ (IEC STANDARD ; TOTAL LOSS +10% )', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, '507', 'มาตรฐานเอกรัฐ (IEC STANDARD ; TOTAL LOSS +10% )', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, '508', 'มาตรฐานเอกรัฐ (IEC STANDARD ; TOTAL LOSS +10% )', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, '510', 'มาตรฐานเอกรัฐ (IEC STANDARD ; TOTAL LOSS +10% )', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, '511', 'พิเศษ', 'aa', 'aa', 'aa', 'aa', 'aa', 'aaa', 'อื่นๆ', 'aaa', 'อื่นๆ', 'aaa', 'aa', 'aa'),
(63, '512', 'มาตรฐานเอกรัฐ (IEC STANDARD ; TOTAL LOSS +10% )', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, '600', 'พิเศษ', '600', '600', '600', '600', '600', '600', 'อื่นๆ', '600', 'อื่นๆ', '600', '600', '600'),
(65, '601', 'พิเศษ', '601', '601', '601', '601', '601', '601', 'อื่นๆ', '601', 'อื่นๆ', '601', '601', '601');

-- --------------------------------------------------------

--
-- Table structure for table `leader`
--

CREATE TABLE `leader` (
  `idleader` int(11) NOT NULL,
  `leadername` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `leader`
--

INSERT INTO `leader` (`idleader`, `leadername`) VALUES
(1, 'ทองแดง'),
(2, 'อลูมิเนียม');

-- --------------------------------------------------------

--
-- Table structure for table `loadingtype`
--

CREATE TABLE `loadingtype` (
  `idloadingtype` int(11) NOT NULL,
  `loadingtypename` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loadingtype`
--

INSERT INTO `loadingtype` (`idloadingtype`, `loadingtypename`) VALUES
(1, 'MOTOR STARTER'),
(2, 'INDUEED FURNACE'),
(3, 'ARC FURNACE'),
(4, 'NONSINUSOIDAL'),
(5, 'CONVENTIONAL LOAD'),
(6, 'TRANSMISSION SYSTEM'),
(7, 'อื่นๆ');

-- --------------------------------------------------------

--
-- Table structure for table `loadtap`
--

CREATE TABLE `loadtap` (
  `idloadtap` int(11) NOT NULL,
  `loadtapname` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loadtap`
--

INSERT INTO `loadtap` (`idloadtap`, `loadtapname`) VALUES
(1, 'Offloadtap'),
(2, 'Onloadtap');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `memberno` int(11) NOT NULL,
  `member_user` varchar(45) NOT NULL,
  `member_pass` varchar(45) NOT NULL,
  `member_status` varchar(45) DEFAULT NULL,
  `member_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`memberno`, `member_user`, `member_pass`, `member_status`, `member_name`) VALUES
(1, 'narumol', '1234', 'admin', 'Narumol'),
(3, 'j', '12345678', 'user', 'JANE'),
(4, 'test', 'test', 'admin', 'TESTTEST'),
(5, 'jane', 'jane', 'user', 'JANEJANE');

-- --------------------------------------------------------

--
-- Table structure for table `noid`
--

CREATE TABLE `noid` (
  `NoidNo` varchar(10) NOT NULL,
  `editNo` varchar(45) DEFAULT NULL,
  `formtype` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `noid`
--

INSERT INTO `noid` (`NoidNo`, `editNo`, `formtype`) VALUES
('015', NULL, 'แบบสอบถามการผลิต'),
('018', NULL, 'แบบสอบถามราคาต้นทุน'),
('020', NULL, 'แบบสอบถามราคาต้นทุน'),
('021', NULL, 'แบบสอบถามการผลิต'),
('023', NULL, 'แบบสอบถามราคาต้นทุน'),
('024', NULL, 'แบบสอบถามราคาต้นทุน'),
('025', NULL, 'แบบสอบถามการผลิต'),
('026', NULL, 'แบบสอบถามราคาต้นทุน'),
('028', NULL, 'แบบสอบถามการผลิต'),
('029', NULL, 'แบบสอบถามราคาต้นทุน'),
('030', NULL, 'แบบสอบถามราคาต้นทุน'),
('031', NULL, 'แบบสอบถามราคาต้นทุน'),
('033', NULL, 'แบบสอบถามราคาต้นทุน'),
('100', NULL, 'แบบสอบถามราคาต้นทุน'),
('103', NULL, 'แบบสอบถามราคาต้นทุน'),
('123', NULL, 'แบบสอบถามราคาต้นทุน'),
('200', NULL, 'แบบสอบถามราคาต้นทุน'),
('2018CE001', '0', 'แบบสอบถามราคาต้นทุน'),
('300', NULL, 'แบบสอบถามราคาต้นทุน'),
('301', NULL, 'แบบสอบถามการผลิต'),
('302', NULL, 'แบบสอบถามการผลิต'),
('303', NULL, 'แบบสอบถามราคาต้นทุน'),
('304', NULL, 'แบบสอบถามการผลิต'),
('305', NULL, 'แบบสอบถามการผลิต'),
('306', NULL, 'แบบสอบถามการผลิต'),
('307', NULL, 'แบบสอบถามราคาต้นทุน'),
('308', NULL, 'แบบสอบถามราคาต้นทุน'),
('500', NULL, 'แบบสอบถามราคาต้นทุน'),
('501', NULL, 'แบบสอบถามการผลิต'),
('502', NULL, 'แบบสอบถามการผลิต'),
('504', NULL, 'แบบสอบถามราคาต้นทุน'),
('505', NULL, 'แบบสอบถามการผลิต'),
('506', NULL, 'แบบสอบถามการผลิต'),
('507', NULL, 'แบบสอบถามการผลิต'),
('508', NULL, 'แบบสอบถามการผลิต'),
('510', NULL, 'แบบสอบถามการผลิต'),
('511', NULL, 'แบบสอบถามการผลิต'),
('512', NULL, 'แบบสอบถามการผลิต'),
('600', NULL, 'แบบสอบถามราคาต้นทุน'),
('601', NULL, 'แบบสอบถามการผลิต');

-- --------------------------------------------------------

--
-- Table structure for table `onload`
--

CREATE TABLE `onload` (
  `idonload` int(11) NOT NULL,
  `onloadname` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `onload`
--

INSERT INTO `onload` (`idonload`, `onloadname`) VALUES
(1, 'AVR'),
(2, 'AVR + OIL FILTER');

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

CREATE TABLE `other` (
  `otherNo` int(11) NOT NULL,
  `NoidNo` varchar(45) DEFAULT NULL,
  `OIL` varchar(45) DEFAULT NULL,
  `otherOIL` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `color1` varchar(45) DEFAULT NULL,
  `shade` varchar(45) DEFAULT NULL,
  `othercolor` varchar(45) DEFAULT NULL,
  `en` varchar(255) DEFAULT NULL,
  `otheren` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `other`
--

INSERT INTO `other` (`otherNo`, `NoidNo`, `OIL`, `otherOIL`, `color`, `color1`, `shade`, `othercolor`, `en`, `otheren`) VALUES
(3, '015', 'INHIBITATED', NULL, 'พิเศษ', 'สี EPOXY', 'jjjj', 'jjjj', NULL, NULL),
(4, '018', 'UN - INHITATED', NULL, 'มาตรฐานเอกรัฐ', NULL, NULL, NULL, 'มีไอเหลือจากทะเล,มีฝุ่นมากในการติดตั้งใช้งาน,', NULL),
(6, '020', 'UN - INHITATED', NULL, 'พิเศษ', 'สีน้ำมัน', 'bbb', 'bbbbb', 'มีไอเหลือจากทะเล,มีฝุ่นมากในการติดตั้งใช้งาน,', 'bbbb'),
(7, '021', 'อื่นๆ', 'TTTTT', 'พิเศษ', 'สี EPOXY', 'TTT', 'TTTT', 'มีไอเหลือจากทะเล,มีฝุ่นมากในการติดตั้งใช้งาน,', NULL),
(9, '023', 'INHIBITATED', NULL, 'มาฐานเอกรัฐ EPOXY', NULL, NULL, NULL, 'มีไอเหลือจากทะเล,มีฝุ่นมากในการติดตั้งใช้งาน', NULL),
(10, '024', 'INHIBITATED', NULL, 'มาฐานเอกรัฐ EPOXY', NULL, NULL, NULL, 'มีไอเหลือจากทะเล,มีฝุ่นมากในการติดตั้งใช้งาน', NULL),
(11, '025', 'INHIBITATED', NULL, 'มาตรฐานเอกรัฐ', NULL, NULL, NULL, 'มีไอเหลือจากทะเล,มีฝุ่นมากในการติดตั้งใช้งาน', NULL),
(12, '026', 'INHIBITATED', NULL, 'มาตรฐานเอกรัฐ', NULL, NULL, NULL, 'มีไอเหลือจากทะเล,มีฝุ่นมากในการติดตั้งใช้งาน', NULL),
(15, '028', 'INHIBITATED', NULL, 'พิเศษ', 'สีน้ำมัน', '555', '5555', 'มีไอเหลือจากทะเล,มีฝุ่นมากในการติดตั้งใช้งาน,', NULL),
(16, '029', 'INHIBITATED', NULL, 'พิเศษ', 'สี EPOXY', 'cccc', 'cccccc', 'มีไอเหลือจากทะเล,มีฝุ่นมากในการติดตั้งใช้งาน,', NULL),
(17, '030', 'INHIBITATED', NULL, 'พิเศษ', 'สีน้ำมัน', 'กกกกก', 'กกกกก', 'มีไอเหลือจากทะเล,มีฝุ่นมากในการติดตั้งใช้งาน,', 'กกกก'),
(18, '031', 'UN - INHITATED', NULL, 'มาตรฐานเอกรัฐ', NULL, NULL, NULL, 'มีไอเหลือจากทะเล,มีฝุ่นมากในการติดตั้งใช้งาน,', 'อออออ'),
(22, '033', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, '100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, '103', 'UN - INHITATED', NULL, 'มาตรฐานเอกรัฐ', NULL, NULL, NULL, 'มีไอเหลือจากทะเล,มีฝุ่นมากในการติดตั้งใช้งาน,', NULL),
(28, '200', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, '2018CE001', 'UN - INHITATED', NULL, 'มาตรฐานเอกรัฐ', NULL, NULL, NULL, 'มีไอเหลือจากทะเล,มีไอสารเคมี', NULL),
(37, '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, '300', 'UN - INHIBITATED', NULL, 'พิเศษ', 'สีน้ำมัน', NULL, NULL, 'มีไอเกลือจากทะเล,มีฝุ่นมากในการติดตั้งใช้งาน,', NULL),
(42, '301', 'SILICONE', NULL, 'มาตรฐานเอกรัฐ', NULL, NULL, NULL, NULL, NULL),
(43, '302', NULL, NULL, NULL, NULL, NULL, NULL, 'มีไอเกลือจากทะเล,มีฝุ่นมากในการติดตั้งใช้งาน,มีไอสารเคมี,มีการเคลื่อนย้ายบ่อยครั้ง,อื่นๆ', NULL),
(44, '303', 'อื่นๆ', '132321', 'พิเศษ', 'สีน้ำ', '123123', '123123', 'อื่นๆ', '12312312'),
(45, '304', 'อื่นๆ', '123123', 'พิเศษ', 'สีน้ำมัน', '12312', '12313', 'อื่นๆ', '123131'),
(46, '305', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, '306', 'UN - INHIBITATED', NULL, 'มาฐานเอกรัฐ EPOXY', NULL, NULL, NULL, NULL, NULL),
(48, '307', 'UN - INHIBITATED', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, '308', 'UN - INHIBITATED', NULL, 'มาฐานเอกรัฐ EPOXY', NULL, NULL, NULL, 'มีไอเกลือจากทะเล,มีฝุ่นมากในการติดตั้งใช้งาน,มีไอสารเคมี,มีการเคลื่อนย้ายบ่อยครั้ง,อื่นๆ', 'hhhhhh'),
(50, '500', 'อื่นๆ', 'eeee', 'พิเศษ', 'สี EPOXY', 'eee', 'eeeee', 'มีไอเกลือจากทะเล,มีฝุ่นมากในการติดตั้งใช้งาน,มีไอสารเคมี,มีการเคลื่อนย้ายบ่อยครั้ง,อื่นๆ', 'eeeeeeeeeeeeeeee'),
(51, '501', 'อื่นๆ', NULL, 'พิเศษ', 'สี EPOXY', 'ppp', 'pppp', 'มีไอเกลือจากทะเล,มีฝุ่นมากในการติดตั้งใช้งาน,มีไอสารเคมี,มีการเคลื่อนย้ายบ่อยครั้ง,อื่นๆ', 'pppp'),
(52, '502', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, '504', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, '505', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, '506', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, '507', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, '508', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, '510', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, '511', 'อื่นๆ', 'aaaa', 'พิเศษ', 'สี EPOXY', 'aaa', 'aaa', 'มีไอเกลือจากทะเล,มีฝุ่นมากในการติดตั้งใช้งาน,มีไอสารเคมี,มีการเคลื่อนย้ายบ่อยครั้ง,อื่นๆ', 'aaa'),
(62, '512', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, '600', 'อื่นๆ', '600', 'พิเศษ', 'สี EPOXY', '600', '600', 'มีไอเกลือจากทะเล,มีฝุ่นมากในการติดตั้งใช้งาน,มีไอสารเคมี,มีการเคลื่อนย้ายบ่อยครั้ง,อื่นๆ', '600'),
(64, '601', 'อื่นๆ', '601', 'พิเศษ', 'สี EPOXY', '601', '601', 'มีไอเกลือจากทะเล,มีฝุ่นมากในการติดตั้งใช้งาน,มีไอสารเคมี,มีการเคลื่อนย้ายบ่อยครั้ง,อื่นๆ', '601');

-- --------------------------------------------------------

--
-- Table structure for table `otheronload`
--

CREATE TABLE `otheronload` (
  `idotheronload` int(11) NOT NULL,
  `otheronloadname` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `otheronload`
--

INSERT INTO `otheronload` (`idotheronload`, `otheronloadname`) VALUES
(1, 'ABB'),
(2, 'MR');

-- --------------------------------------------------------

--
-- Table structure for table `packing`
--

CREATE TABLE `packing` (
  `packingNo` int(11) NOT NULL,
  `NoidNo` varchar(45) DEFAULT NULL,
  `pack` varchar(45) DEFAULT NULL,
  `set8` varchar(45) DEFAULT NULL,
  `set8_1` varchar(45) DEFAULT NULL,
  `set8_2` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `packing`
--

INSERT INTO `packing` (`packingNo`, `NoidNo`, `pack`, `set8`, `set8_1`, `set8_2`) VALUES
(3, '015', 'พาเลท', NULL, 'jjj', 'jjjj'),
(4, '018', 'พาเลท', 'COMPLETE SET', NULL, NULL),
(6, '020', 'ลังเหล็ก', 'แยกชิ้นส่วนประกอบ', 'bbbb', 'bbbb'),
(7, '021', 'ลังไม้', 'แยกชิ้นส่วนประกอบ', 'TTT', 'TTTT'),
(9, '023', 'ลังเหล็ก', 'COMPLETE SET', NULL, NULL),
(10, '024', 'ลังเหล็ก', 'COMPLETE SET', NULL, NULL),
(11, '025', 'พาเลท', NULL, NULL, NULL),
(12, '026', 'ลังไม้', 'COMPLETE SET', NULL, NULL),
(15, '028', NULL, NULL, NULL, NULL),
(16, '029', 'ลังเหล็ก', 'แยกชิ้นส่วนประกอบ', 'cccc', 'ccccc'),
(17, '030', 'ลังไม้', 'COMPLETE SET', NULL, NULL),
(18, '031', 'ลังเหล็ก', 'แยกชิ้นส่วนประกอบ', 'ออออ', 'อออ'),
(22, '033', NULL, NULL, NULL, NULL),
(24, '100', NULL, NULL, NULL, NULL),
(27, '103', 'ลังไม้', 'COMPLETE SET', NULL, NULL),
(28, '200', NULL, NULL, NULL, NULL),
(30, '2018CE001', 'ลังไม้', NULL, NULL, NULL),
(37, '123', NULL, NULL, NULL, NULL),
(41, '300', 'ลังเหล็ก', 'แยกชิ้นส่วนประกอบ', 'พพพพ', 'พพพพ'),
(42, '301', 'ลังเหล็ก', 'COMPLETE SET', NULL, NULL),
(43, '302', NULL, NULL, NULL, NULL),
(44, '303', NULL, 'แยกชิ้นส่วนประกอบ', '12313', '123213123'),
(45, '304', NULL, 'แยกชิ้นส่วนประกอบ', '12331', '313123'),
(46, '305', NULL, NULL, NULL, NULL),
(47, '306', NULL, NULL, NULL, NULL),
(48, '307', NULL, NULL, NULL, NULL),
(49, '308', 'ลังเหล็ก', 'COMPLETE SET', NULL, NULL),
(50, '500', 'ลังเหล็ก', 'แยกชิ้นส่วนประกอบ', 'eee', 'eeee'),
(51, '501', 'ลังเหล็ก', 'แยกชิ้นส่วนประกอบ', 'ppp', 'ppp'),
(52, '502', NULL, NULL, NULL, NULL),
(55, '504', NULL, NULL, NULL, NULL),
(56, '505', NULL, NULL, NULL, NULL),
(57, '506', NULL, NULL, NULL, NULL),
(58, '507', NULL, NULL, NULL, NULL),
(59, '508', NULL, NULL, NULL, NULL),
(60, '510', NULL, 'COMPLETE SET', NULL, NULL),
(61, '511', 'ลังเหล็ก', 'แยกชิ้นส่วนประกอบ', 'aaa', 'aaa'),
(62, '512', NULL, NULL, NULL, NULL),
(63, '600', 'ลังเหล็ก', 'แยกชิ้นส่วนประกอบ', '600', '600'),
(64, '601', 'ลังเหล็ก', 'แยกชิ้นส่วนประกอบ', '601', '601');

-- --------------------------------------------------------

--
-- Table structure for table `refference`
--

CREATE TABLE `refference` (
  `refferenceNo` int(11) NOT NULL,
  `NoidNo` varchar(45) DEFAULT NULL,
  `refference1` varchar(45) DEFAULT NULL,
  `so` varchar(45) DEFAULT NULL,
  `refference2` varchar(45) DEFAULT NULL,
  `reffno` varchar(45) DEFAULT NULL,
  `refference3` varchar(45) DEFAULT NULL,
  `refference4` varchar(45) DEFAULT NULL,
  `refference5` varchar(45) DEFAULT NULL,
  `refference6` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `refference`
--

INSERT INTO `refference` (`refferenceNo`, `NoidNo`, `refference1`, `so`, `refference2`, `reffno`, `refference3`, `refference4`, `refference5`, `refference6`) VALUES
(4, '015', '√', 'jjjj', '√', 'jjjjjj', NULL, '√', NULL, '√'),
(5, '018', '√', '123', NULL, NULL, NULL, '√', NULL, '√'),
(7, '020', NULL, NULL, NULL, NULL, '√', '√', '√', NULL),
(8, '021', '√', 'TTTT', '√', 'TTTT', NULL, NULL, NULL, NULL),
(10, '023', '√', 'vvvv', NULL, NULL, '√', NULL, '√', NULL),
(11, '024', '√', 'vvvv', NULL, NULL, '√', NULL, '√', NULL),
(12, '025', '√', 'oooo', '√', 'ooo', '√', '√', NULL, NULL),
(13, '026', NULL, NULL, '√', 'rrrrr', NULL, '√', NULL, '√'),
(16, '028', '√', '55555', '√', '55555', NULL, NULL, NULL, NULL),
(17, '029', NULL, NULL, NULL, NULL, '√', NULL, '√', NULL),
(18, '030', '√', 'กกกก', '√', 'กกกกก', NULL, NULL, NULL, NULL),
(19, '031', '√', 'ออออ', NULL, NULL, '√', NULL, '√', NULL),
(23, '033', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, '100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, '103', NULL, NULL, NULL, NULL, '√', NULL, '√', '√'),
(30, '200', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, '2018CE001', NULL, NULL, NULL, NULL, NULL, NULL, '√', NULL),
(40, '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, '300', NULL, NULL, NULL, NULL, '√', NULL, '√', NULL),
(45, '301', '√', 'นนนน', '√', 'นนนน', NULL, NULL, NULL, NULL),
(46, '302', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, '303', '√', '213', '√', '123', NULL, NULL, NULL, NULL),
(48, '304', '√', '31231', '√', '23113', NULL, NULL, NULL, NULL),
(49, '305', '√', 'กกก', NULL, NULL, NULL, NULL, NULL, NULL),
(50, '306', NULL, NULL, NULL, NULL, '√', NULL, NULL, NULL),
(51, '307', NULL, NULL, NULL, NULL, NULL, '√', NULL, NULL),
(52, '308', NULL, NULL, NULL, NULL, '√', NULL, '√', NULL),
(53, '500', '√', 'eee', '√', 'eee', '√', '√', '√', '√'),
(54, '501', '√', 'pppp', '√', 'ppp', '√', '√', '√', '√'),
(55, '502', NULL, NULL, NULL, NULL, '√', NULL, '√', NULL),
(58, '504', NULL, NULL, NULL, NULL, NULL, '√', NULL, NULL),
(59, '505', NULL, NULL, NULL, NULL, '√', NULL, NULL, NULL),
(60, '506', NULL, NULL, NULL, NULL, '√', NULL, NULL, NULL),
(61, '507', NULL, NULL, NULL, NULL, '√', NULL, NULL, NULL),
(62, '508', NULL, NULL, NULL, NULL, '√', NULL, NULL, NULL),
(63, '510', NULL, NULL, NULL, NULL, NULL, NULL, '√', NULL),
(64, '511', '√', 'aa', '√', 'aa', '√', '√', '√', '√'),
(65, '512', NULL, NULL, NULL, NULL, '√', NULL, NULL, NULL),
(66, '600', '√', '600', '√', '600', '√', '√', '√', '√'),
(67, '601', '√', '601', '√', '601', '√', '√', '√', '√');

-- --------------------------------------------------------

--
-- Table structure for table `road`
--

CREATE TABLE `road` (
  `idroad` int(11) NOT NULL,
  `roadname` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `road`
--

INSERT INTO `road` (`idroad`, `roadname`) VALUES
(1, 'ถนนลูกรัง'),
(2, 'ถนนลาดยาง'),
(3, 'ถนนคอนกรีต');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `sellerNo` int(11) NOT NULL,
  `NoidNo` varchar(45) DEFAULT NULL,
  `sellerName1` varchar(255) DEFAULT NULL,
  `sellerName2` varchar(255) DEFAULT NULL,
  `sellerName3` varchar(255) DEFAULT NULL,
  `sellerName4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`sellerNo`, `NoidNo`, `sellerName1`, `sellerName2`, `sellerName3`, `sellerName4`) VALUES
(5, '018', 'แดง', 'ดำ', 'เขียว', 'ขาว'),
(7, '020', 'bbb', 'bbb', 'bbb', 'bbb'),
(8, '015', 'apple', 'banana', 'orange', 'mango'),
(9, '021', 'TTTT', 'TTTT', 'TTTT', 'TTTTT'),
(11, '023', 'vvvv', 'vv', 'vvvvv', 'vvvv'),
(12, '024', 'vvvv', 'vv', 'vvvvv', 'vvvv'),
(13, '025', 'oooo', 'ooo', 'oooo', 'oooo'),
(14, '026', 'rrrr', 'rrrr', 'rrrr', 'rrrrr'),
(17, '028', '5555', '5555', '55555', '555'),
(18, '029', 'this', 'is', 'test', 'formtype'),
(19, '030', 'กกกก', 'กกกกก', 'กกกกก', 'กกกก'),
(20, '031', 'ออออ', 'อออ', 'ออออ', 'ออออ'),
(24, '033', NULL, NULL, NULL, NULL),
(27, '100', NULL, NULL, NULL, NULL),
(30, '103', '@@@@', '@@@@', '@@@@@', '@@@@'),
(31, '200', 'ฟฟ', 'ฟฟ', 'ฟ้ฟฟ', 'ฟฟฟ'),
(34, '2018CE001', 'นิธิวิทย์', 'เอกรัฐ', NULL, NULL),
(41, '123', NULL, NULL, NULL, NULL),
(45, '300', 'พพพ', 'พพพ', 'พพพพ', 'พพพ'),
(46, '301', 'นนนน', 'นนนน', 'นนนนนน', 'นนน'),
(47, '302', NULL, NULL, NULL, NULL),
(48, '303', '12', '123', '1', '2'),
(49, '304', '12313', '12313', '31231231', '12312312'),
(50, '305', 'กก', 'กกกกก', 'กก', 'กก'),
(51, '306', 'ddd', 'ddd', 'ddd', 'ddd'),
(52, '307', '1', '11', '111', '11'),
(53, '308', 'hhhhhh', 'hh', 'hhhhhh', 'hhhhh'),
(54, '500', 'ee', 'ee', 'ee', 'ee'),
(55, '501', 'ppp', 'pp', 'ppp', 'ppp'),
(56, '502', 'llll', 'll', 'lll', 'lll'),
(59, '504', 'nnn', 'nn', 'nnn', 'nnn'),
(60, '505', 'uu', 'uu', 'uuu', 'uu'),
(61, '506', 'yyy', 'yy', 'yyy', 'yyyy'),
(62, '507', 'bb', 'bbbb', 'bb', 'bbbb'),
(63, '508', 'ggg', 'gg', 'gg', 'ggg'),
(64, '510', '000', '00', '00', '000'),
(65, '511', 'aaa', 'aaa', 'aa', 'aa'),
(66, '512', '512', '512', '512', '512'),
(67, '600', '600', '600', '600', '600'),
(68, '601', '601', '601', '601', '601');

-- --------------------------------------------------------

--
-- Table structure for table `specolor`
--

CREATE TABLE `specolor` (
  `idspecolor` int(11) NOT NULL,
  `specolorname` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `specolor`
--

INSERT INTO `specolor` (`idspecolor`, `specolorname`) VALUES
(1, 'สีน้ำ'),
(2, 'สีน้ำมัน'),
(3, 'สี EPOXY'),
(4, 'สีฝุ่น');

-- --------------------------------------------------------

--
-- Table structure for table `standardaccessories`
--

CREATE TABLE `standardaccessories` (
  `idstandardaccessories` int(11) NOT NULL,
  `transformerrate` int(45) DEFAULT NULL,
  `transformertype` varchar(45) DEFAULT NULL,
  `standardaccess` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `standardaccessories`
--

INSERT INTO `standardaccessories` (`idstandardaccessories`, `transformerrate`, `transformertype`, `standardaccess`) VALUES
(1, 50, 'CONSERVATOR', 'THERMOMETER(POCKET), OIL LEVEL INDICATOR(WO/C)'),
(2, 100, 'CONSERVATOR', 'THERMOMETER(POCKET), OIL LEVEL INDICATOR(WO/C)'),
(3, 160, 'CONSERVATOR', 'THERMOMETER(POCKET), OIL LEVEL INDICATOR(WO/C)'),
(4, 250, 'CONSERVATOR', 'THERMOMETER(POCKET), OIL LEVEL INDICATOR(WO/C)'),
(5, 315, 'CONSERVATOR', 'THERMOMETER(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(6, 400, 'CONSERVATOR', 'THERMOMETER(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(7, 500, 'CONSERVATOR', 'THERMOMETER(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(8, 630, 'CONSERVATOR', 'THERMOMETER(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(10, 750, 'CONSERVATOR', 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(11, 800, 'CONSERVATOR', 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(12, 1000, 'CONSERVATOR', 'THERMOMETER(W/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(13, 1250, 'CONSERVATOR', 'THERMOMETER(W/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(14, 1500, 'CONSERVATOR', 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), BUCHHOLZ RELAY(W/C), OIL LEVEL INDICATOR(WO/C)'),
(15, 1600, 'CONSERVATOR', 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), BUCHHOLZ RELAY(W/C), OIL LEVEL INDICATOR(WO/C)'),
(16, 2000, 'CONSERVATOR', 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), BUCHHOLZ RELAY(W/C), OIL LEVEL INDICATOR(WO/C)'),
(17, 2500, 'CONSERVATOR', 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), BUCHHOLZ RELAY(W/C), OIL LEVEL INDICATOR(WO/C), WHEELS'),
(18, 50, 'N2 GAS SEALED', 'THERMOMETER(POCKET), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(19, 100, 'N2 GAS SEALED', 'THERMOMETER(POCKET), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(20, 160, 'N2 GAS SEALED', 'THERMOMETER(POCKET), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(21, 250, 'N2 GAS SEALED', 'THERMOMETER(POCKET), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(22, 315, 'N2 GAS SEALED', 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(23, 400, 'N2 GAS SEALED', 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(24, 500, 'N2 GAS SEALED', 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(25, 630, 'N2 GAS SEALED', 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(26, 750, 'N2 GAS SEALED', 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(27, 800, 'N2 GAS SEALED', 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(28, 1000, 'N2 GAS SEALED', 'THERMOMETER(W/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(29, 1250, 'N2 GAS SEALED', 'THERMOMETER(W/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(30, 1500, 'N2 GAS SEALED', 'THERMOMETER(W/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(32, 1600, 'N2 GAS SEALED', 'THERMOMETER(W/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(33, 2000, 'N2 GAS SEALED', 'THERMOMETER(W/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(34, 2500, 'N2 GAS SEALED', 'THERMOMETER(W/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C), WHEELS'),
(35, 50, 'FULLY WITH OIL', 'THERMOMETER(POCKET), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(36, 100, 'FULLY WITH OIL', 'THERMOMETER(POCKET), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(37, 160, 'FULLY WITH OIL', 'THERMOMETER(POCKET), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(38, 250, 'FULLY WITH OIL', 'THERMOMETER(POCKET), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(39, 315, 'FULLY WITH OIL', 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(40, 400, 'FULLY WITH OIL', 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(41, 500, 'FULLY WITH OIL', 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(42, 630, 'FULLY WITH OIL', 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(43, 750, 'FULLY WITH OIL', 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(44, 800, 'FULLY WITH OIL', 'THERMOMETER(WO/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(45, 1000, 'FULLY WITH OIL', 'THERMOMETER(W/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(46, 1250, 'FULLY WITH OIL', 'THERMOMETER(W/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(47, 1500, 'FULLY WITH OIL', 'THERMOMETER(W/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(48, 1600, 'FULLY WITH OIL', 'THERMOMETER(W/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(49, 2000, 'FULLY WITH OIL', 'THERMOMETER(W/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C)'),
(50, 2500, 'FULLY WITH OIL', 'THERMOMETER(W/C), PRESSURE RELIEF DEVICE(WO/C), OIL LEVEL INDICATOR(WO/C), WHEELS'),
(51, 400, 'CAST RESIN', 'THERMOMETER(WO/C), COOLING FAN(CROSS FLOW FAN), HOUSING, CONTROL BOX'),
(52, 500, 'CAST RESIN', 'THERMOMETER(WO/C), COOLING FAN(CROSS FLOW FAN), HOUSING, CONTROL BOX'),
(53, 630, 'CAST RESIN', 'THERMOMETER(WO/C), COOLING FAN(CROSS FLOW FAN), HOUSING, CONTROL BOX'),
(54, 800, 'CAST RESIN', 'THERMOMETER(WO/C), COOLING FAN(CROSS FLOW FAN), HOUSING, CONTROL BOX'),
(55, 1000, 'CAST RESIN', 'THERMOMETER(WO/C), COOLING FAN(CROSS FLOW FAN), HOUSING, CONTROL BOX'),
(56, 1250, 'CAST RESIN', 'THERMOMETER(WO/C), COOLING FAN(CROSS FLOW FAN), HOUSING, CONTROL BOX'),
(57, 1600, 'CAST RESIN', 'THERMOMETER(WO/C), COOLING FAN(CROSS FLOW FAN), HOUSING, CONTROL BOX'),
(58, 2000, 'CAST RESIN', 'THERMOMETER(WO/C), COOLING FAN(CROSS FLOW FAN), HOUSING, CONTROL BOX'),
(59, 2500, 'CAST RESIN', 'THERMOMETER(WO/C), COOLING FAN(CROSS FLOW FAN), HOUSING, CONTROL BOX'),
(60, 50, 'DRY TYPE (CLASS H)', 'HOUSING(แบบตะแกรง)'),
(61, 100, 'DRY TYPE (CLASS H)', 'HOUSING(แบบตะแกรง)'),
(62, 160, 'DRY TYPE (CLASS H)', 'HOUSING(แบบตะแกรง)'),
(63, 250, 'DRY TYPE (CLASS H)', 'HOUSING(แบบตะแกรง)'),
(64, 315, 'DRY TYPE (CLASS H)', 'THERMOMETER(WO/C), HOUSING(แบบตะแกรง)'),
(65, 400, 'DRY TYPE (CLASS H)', 'THERMOMETER(WO/C), HOUSING(แบบตะแกรง)'),
(66, 500, 'DRY TYPE (CLASS H)', 'THERMOMETER(WO/C), HOUSING(แบบตะแกรง)'),
(67, 630, 'DRY TYPE (CLASS H)', 'THERMOMETER(WO/C), HOUSING(แบบตะแกรง)'),
(69, 750, 'DRY TYPE (CLASS H)', 'THERMOMETER(WO/C), HOUSING(แบบตะแกรง)'),
(70, 800, 'DRY TYPE (CLASS H)', 'THERMOMETER(WO/C), HOUSING(แบบตะแกรง)'),
(71, 1000, 'DRY TYPE (CLASS H)', 'THERMOMETER(WO/C), HOUSING(แบบตะแกรง)');

-- --------------------------------------------------------

--
-- Table structure for table `talefish`
--

CREATE TABLE `talefish` (
  `idtalefish` int(11) NOT NULL,
  `talefishname` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `talefish`
--

INSERT INTO `talefish` (`idtalefish`, `talefishname`) VALUES
(1, 'แบบบาร์'),
(2, 'แบบ circuit');

-- --------------------------------------------------------

--
-- Table structure for table `technical_data`
--

CREATE TABLE `technical_data` (
  `technicalNo` int(11) NOT NULL,
  `NoidNo` varchar(45) DEFAULT NULL,
  `kva` varchar(45) DEFAULT NULL,
  `phase` varchar(45) DEFAULT NULL,
  `hz` varchar(45) DEFAULT NULL,
  `tapping` varchar(45) DEFAULT NULL,
  `technical` varchar(45) DEFAULT NULL,
  `loadtap` varchar(45) DEFAULT NULL,
  `primaryvol` varchar(45) DEFAULT NULL,
  `secondaryvol` varchar(45) DEFAULT NULL,
  `typeTransfrom` varchar(45) DEFAULT NULL,
  `othertypetransfrom` varchar(45) DEFAULT NULL,
  `leader` varchar(45) DEFAULT NULL,
  `vectorgroup` varchar(45) DEFAULT NULL,
  `loadtype` varchar(45) DEFAULT NULL,
  `otherload` varchar(45) DEFAULT NULL,
  `fin` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `technical_data`
--

INSERT INTO `technical_data` (`technicalNo`, `NoidNo`, `kva`, `phase`, `hz`, `tapping`, `technical`, `loadtap`, `primaryvol`, `secondaryvol`, `typeTransfrom`, `othertypetransfrom`, `leader`, `vectorgroup`, `loadtype`, `otherload`, `fin`) VALUES
(3, '015', NULL, NULL, NULL, NULL, 'On HV. Side', 'Offloadtap', NULL, NULL, 'CONSERVATOR', NULL, 'ทองแดง', NULL, 'MOTOR STARTER', 'jjjjj', NULL),
(4, '018', NULL, NULL, NULL, NULL, 'On HV. Side', 'Offloadtap', NULL, NULL, 'CONSERVATOR', NULL, 'ทองแดง', NULL, 'MOTOR STARTER', '55555', NULL),
(6, '020', 'bbb', 'bbbb', 'bbbb', 'bbbb', 'On HV. Side', 'Offloadtap', 'bbbb', 'bbbbb', 'CONSERVATOR', 'bbbbb', 'ทองแดง', 'bbbbb', 'MOTOR STARTER', 'bbb', NULL),
(7, '021', NULL, NULL, NULL, NULL, 'On LV. Side', 'Onloadtap', NULL, NULL, 'N2 GAS SEALED', NULL, 'อลูมิเนียม', NULL, 'ARC FURNACE', 'TTTT', NULL),
(9, '023', NULL, NULL, NULL, NULL, 'On HV. Side', 'Offloadtap', NULL, NULL, 'CONSERVATOR', NULL, 'ทองแดง', NULL, 'MOTOR STARTER', 'vvv', NULL),
(10, '024', NULL, NULL, NULL, NULL, 'On HV. Side', 'Offloadtap', NULL, NULL, 'CONSERVATOR', NULL, 'ทองแดง', NULL, 'MOTOR STARTER', 'vvv', NULL),
(11, '025', NULL, NULL, NULL, NULL, 'On HV. Side', 'Offloadtap', NULL, NULL, 'CONSERVATOR', NULL, 'ทองแดง', NULL, 'MOTOR STARTER', 'ooooo', NULL),
(12, '026', NULL, NULL, NULL, NULL, 'On HV. Side', 'Offloadtap', NULL, NULL, 'CONSERVATOR', NULL, 'ทองแดง', NULL, 'MOTOR STARTER', 'rrrrr', NULL),
(15, '028', NULL, NULL, NULL, NULL, 'On HV. Side', 'Offloadtap', NULL, NULL, 'CONSERVATOR', NULL, 'ทองแดง', NULL, 'MOTOR STARTER', '55555', NULL),
(16, '029', NULL, NULL, NULL, NULL, 'On HV. Side', 'Offloadtap', NULL, NULL, 'CONSERVATOR', NULL, 'ทองแดง', NULL, 'MOTOR STARTER', 'ccccc', NULL),
(17, '030', NULL, NULL, NULL, NULL, 'On HV. Side', 'Offloadtap', NULL, NULL, 'CONSERVATOR', NULL, 'ทองแดง', NULL, 'MOTOR STARTER', 'กกกกก', NULL),
(18, '031', NULL, NULL, NULL, NULL, 'On HV. Side', 'Offloadtap', NULL, NULL, 'CONSERVATOR', NULL, 'ทองแดง', NULL, 'MOTOR STARTER', 'ออออออ', NULL),
(22, '033', NULL, NULL, NULL, NULL, 'On HV. Side', 'Offloadtap', NULL, NULL, 'CONSERVATOR', NULL, 'ทองแดง', NULL, 'MOTOR STARTER', NULL, NULL),
(23, '100', '111', '111', '1111', '1111', 'On LV. Side', 'Onloadtap', '11111', '1111', 'CONSERVATOR', '11111', 'ทองแดง', '11111', 'MOTOR STARTER', '11111', NULL),
(26, '103', '@@@', '@@@@', '@@@', '@@@@', 'On LV. Side', 'Onloadtap', '@@@@', '@@@@', '-', '@@@@', 'ทองแดง', '@@@@', 'MOTOR STARTER', NULL, NULL),
(27, '200', '50', NULL, NULL, NULL, 'On LV. Side', 'Onloadtap', NULL, NULL, 'CONSERVATOR', NULL, 'ทองแดง', NULL, 'MOTOR STARTER', NULL, NULL),
(30, '2018CE001', '500', '3', '50', '+,-2x2.5', 'On HV. Side', 'Offloadtap', '22000', '400/230', 'HERMETICALLY SEALED', NULL, 'ทองแดง', 'Dyn11', 'CONVENTIONAL LOAD', NULL, NULL),
(37, '123', NULL, NULL, NULL, NULL, 'On LV. Side', 'Onloadtap', NULL, NULL, 'FULLY WITH OIL', NULL, 'ทองแดง', NULL, 'MOTOR STARTER', NULL, NULL),
(41, '300', '50', 'พพพ', 'พพพ', 'พพพ', 'On LV. Side', 'Onloadtap', 'พพพ', 'พพพ', 'FULLY WITH OIL', NULL, 'ทองแดง', 'พพพ', 'MOTOR STARTER', NULL, NULL),
(42, '301', '500', 'นนน', 'นนน', 'นนนน', 'On LV. Side', 'Onloadtap', 'นนน', 'นนน', 'FULLY WITH OIL', NULL, 'ทองแดง', 'นนนน', 'อื่นๆ', 'นนนน', NULL),
(43, '302', NULL, NULL, NULL, NULL, 'On LV. Side', 'Onloadtap', NULL, NULL, 'FULLY WITH OIL', NULL, 'ทองแดง', NULL, 'MOTOR STARTER', NULL, NULL),
(44, '303', '400', NULL, NULL, NULL, 'On LV. Side', 'Onloadtap', NULL, NULL, 'FULLY WITH OIL', NULL, 'ทองแดง', NULL, 'MOTOR STARTER', NULL, NULL),
(45, '304', '2500', NULL, NULL, NULL, 'On LV. Side', 'Onloadtap', NULL, NULL, 'FULLY WITH OIL', NULL, 'ทองแดง', NULL, 'MOTOR STARTER', NULL, NULL),
(46, '305', 'กกก', 'กก', 'กกก', 'กกกก', 'On LV. Side', 'Onloadtap', 'กกกก', 'กก', 'FULLY WITH OIL', 'กกก', 'ทองแดง', 'กกกก', 'MOTOR STARTER', 'กกกก', NULL),
(47, '306', '500', 'ddd', 'ddd', 'ddd', 'On LV. Side', 'Onloadtap', 'ddd', 'ddddd', 'FULLY WITH OIL', NULL, 'ทองแดง', 'ddd', 'MOTOR STARTER', NULL, NULL),
(48, '307', '11', '11', '1', '111', 'On LV. Side', 'Onloadtap', '11', '11', 'FULLY WITH OIL', '11', 'ทองแดง', '11', 'MOTOR STARTER', NULL, NULL),
(49, '308', '500', 'hhh', 'hh', 'hhhh', 'On LV. Side', 'Onloadtap', 'hhh', 'hhhh', 'FULLY WITH OIL', 'hhh', 'ทองแดง', 'hhh', 'MOTOR STARTER', NULL, NULL),
(50, '500', '500', 'eee', 'e', 'eee', 'On LV. Side', 'Onloadtap', 'eee', 'ee', 'FULLY WITH OIL', 'ee', 'ทองแดง', 'eee', 'MOTOR STARTER', 'eee', 'CORRUGATE'),
(51, '501', '100', 'ppp', 'ppp', 'pp', 'On LV. Side', 'Onloadtap', 'pp', 'pp', 'FULLY WITH OIL', 'ppp', 'ทองแดง', 'ppp', 'MOTOR STARTER', 'pp', 'CORRUGATE'),
(52, '502', '500', 'll', 'l', 'lll', 'On LV. Side', 'Onloadtap', 'l', 'lll', 'FULLY WITH OIL', NULL, 'ทองแดง', 'llll', 'MOTOR STARTER', 'lll', 'CORRUGATE'),
(55, '504', '500', 'nn', 'nn', 'nnn', 'On LV. Side', 'Onloadtap', 'nnn', 'nnn', 'FULLY WITH OIL', NULL, 'ทองแดง', 'nnn', 'MOTOR STARTER', 'nnn', 'CORRUGATE'),
(56, '505', '100', 'uuu', 'u', 'uu', 'On LV. Side', 'Onloadtap', 'uu', 'uu', 'FULLY WITH OIL', NULL, 'ทองแดง', 'uuu', 'MOTOR STARTER', 'uuu', 'CORRUGATE'),
(57, '506', 'yy', 'yy', 'y', 'yy', 'On LV. Side', 'Onloadtap', 'y', 'yy', 'FULLY WITH OIL', NULL, 'ทองแดง', 'yy', 'MOTOR STARTER', 'yyy', 'CORRUGATE'),
(58, '507', 'bb', 'bb', 'b', 'bb', 'On LV. Side', 'Onloadtap', 'b', 'bbbb', 'FULLY WITH OIL', NULL, 'ทองแดง', NULL, 'MOTOR STARTER', NULL, 'CORRUGATE'),
(59, '508', 'gg', 'gg', 'gg', 'ggg', 'On LV. Side', 'Onloadtap', 'g', 'gg', 'FULLY WITH OIL', NULL, 'ทองแดง', 'gg', 'MOTOR STARTER', 'ggg', 'CORRUGATE'),
(60, '510', '00', '00', '0', '00', 'On LV. Side', 'Onloadtap', '00', '000', 'FULLY WITH OIL', NULL, 'ทองแดง', '000', 'MOTOR STARTER', '00', 'CORRUGATE'),
(61, '511', '500', 'aa', 'aa', 'aa', 'On LV. Side', 'Onloadtap', 'aa', 'aaa', 'FULLY WITH OIL', 'aaa', 'ทองแดง', 'aa', 'MOTOR STARTER', 'aaa', 'CORRUGATE'),
(62, '512', '500', '512', '512', '512', 'On LV. Side', 'Onloadtap', '512', '512', 'FULLY WITH OIL', NULL, 'ทองแดง', '512', 'MOTOR STARTER', '512', 'CORRUGATE'),
(63, '600', '600', '600', '600', '600', 'On LV. Side', 'Onloadtap', '600', '600', 'FULLY WITH OIL', '600', 'ทองแดง', '600', 'MOTOR STARTER', '600', 'CORRUGATE'),
(64, '601', '601', '601', '601', '601', 'On LV. Side', 'Onloadtap', '601', '601', 'FULLY WITH OIL', '601', 'ทองแดง', '601', 'MOTOR STARTER', '601', 'CORRUGATE');

-- --------------------------------------------------------

--
-- Table structure for table `technicial`
--

CREATE TABLE `technicial` (
  `idtechnicial` int(11) NOT NULL,
  `technicialname` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `technicial`
--

INSERT INTO `technicial` (`idtechnicial`, `technicialname`) VALUES
(1, 'On LV. Side'),
(2, 'On HV. Side');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `testNo` int(11) NOT NULL,
  `NoidNo` varchar(45) DEFAULT NULL,
  `routine` varchar(45) DEFAULT NULL,
  `typetest1` varchar(45) DEFAULT NULL,
  `HV7` varchar(45) DEFAULT NULL,
  `LV7` varchar(45) DEFAULT NULL,
  `typetest2` varchar(45) DEFAULT NULL,
  `oiltest` varchar(45) DEFAULT NULL,
  `power` varchar(45) DEFAULT NULL,
  `partial` varchar(45) DEFAULT NULL,
  `sound` varchar(45) DEFAULT NULL,
  `leak` varchar(45) DEFAULT NULL,
  `vibration` varchar(45) DEFAULT NULL,
  `DGA` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`testNo`, `NoidNo`, `routine`, `typetest1`, `HV7`, `LV7`, `typetest2`, `oiltest`, `power`, `partial`, `sound`, `leak`, `vibration`, `DGA`) VALUES
(3, '015', 'ANSI / IEEE STANDARD', NULL, NULL, NULL, 'TEMP RISE', NULL, 'ทดสอบ', NULL, NULL, NULL, NULL, NULL),
(4, '018', 'IEC STANDARD', NULL, NULL, NULL, 'TEMP RISE', NULL, 'ทดสอบ', NULL, NULL, NULL, NULL, NULL),
(6, '020', 'IEC STANDARD', 'IMPULSE : FULL WAVE(HV / LV)', 'bbb', 'bbb', 'TEMP RISE', 'DGA,BREAK DOWN VOLTAGE,WATER CONTENT', 'ทดสอบ', 'ทดสอบ,REPORT', NULL, 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'DGA ก่อนทดสอบ,DGA หลังทดสอบ'),
(7, '021', 'IEC STANDARD', 'IMPULSE : FULL WAVE(HV / LV)', 'TTT', 'TTT', NULL, 'DGA,BREAK DOWN VOLTAGE', 'ทดสอบ', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'DGA ก่อนทดสอบ,DGA หลังทดสอบ'),
(9, '023', 'IEC STANDARD', NULL, NULL, NULL, 'TEMP RISE', 'DGA,WATER CONTENT', 'ทดสอบ', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'DGA ก่อนทดสอบ,DGA หลังทดสอบ'),
(10, '024', 'IEC STANDARD', NULL, NULL, NULL, 'TEMP RISE', 'DGA,WATER CONTENT', 'ทดสอบ', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'DGA ก่อนทดสอบ,DGA หลังทดสอบ'),
(11, '025', 'IEC STANDARD', 'IMPULSE : FULL WAVE(HV / LV)', 'ooo', 'ooooo', NULL, 'DGA,BREAK DOWN VOLTAGE', 'ทดสอบ', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'DGA ก่อนทดสอบ,DGA หลังทดสอบ'),
(12, '026', 'IEC STANDARD', NULL, NULL, NULL, 'TEMP RISE', 'DGA,WATER CONTENT', 'ทดสอบ', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'DGA ก่อนทดสอบ,DGA หลังทดสอบ'),
(15, '028', 'ANSI / IEEE STANDARD', NULL, NULL, NULL, 'TEMP RISE', 'DGA', 'ทดสอบ', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'DGA ก่อนทดสอบ,DGA หลังทดสอบ'),
(16, '029', 'IEC STANDARD', 'IMPULSE : FULL WAVE(HV / LV)', 'cccc', 'cccc', NULL, 'DGA', 'ทดสอบ', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'DGA ก่อนทดสอบ,DGA หลังทดสอบ'),
(17, '030', 'อื่นๆ', 'IMPULSE : FULL WAVE(HV / LV)', 'กกกกกก', 'กกก', 'TEMP RISE', 'DGA,BREAK DOWN VOLTAGE,WATER CONTENT', 'ทดสอบ', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'DGA ก่อนทดสอบ,DGA หลังทดสอบ'),
(18, '031', 'อื่นๆ', 'IMPULSE : FULL WAVE(HV / LV)', 'ออออออ', 'อออ', 'TEMP RISE', 'DGA,BREAK DOWN VOLTAGE,WATER CONTENT', 'ทดสอบ', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'DGA ก่อนทดสอบ,DGA หลังทดสอบ'),
(22, '033', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, '100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, '103', 'IEC STANDARD', 'IMPULSE : FULL WAVE(HV / LV)', '@@', '@@', 'TEMP RISE', 'DGA,BREAK DOWN VOLTAGE,WATER CONTENT', 'ทดสอบ', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'DGA ก่อนทดสอบ,DGA หลังทดสอบ'),
(28, '200', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, '2018CE001', 'IEC STANDARD', 'IMPULSE : FULL WAVE(HV / LV)', NULL, NULL, NULL, 'DGA', 'ทดสอบ', 'ทดสอบ', 'ทดสอบ', 'ทดสอบ', 'ทดสอบ', 'DGA ก่อนทดสอบ'),
(37, '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, '300', 'IEC STANDARD', 'IMPULSE : FULL WAVE(HV / LV)', 'พพพ', 'พพพ', 'TEMP RISE', 'DGA,BREAK DOWN VOLTAGE,WATER CONTENT', 'ทดสอบ', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'DGA ก่อนทดสอบ,DGA หลังทดสอบ'),
(42, '301', 'อื่นๆ', 'IMPULSE : FULL WAVE(HV / LV)', 'นนนน', 'นน', NULL, 'DGA,BREAK DOWN VOLTAGE', 'ทดสอบ', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'DGA ก่อนทดสอบ,DGA หลังทดสอบ'),
(43, '302', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, '303', 'อื่นๆ', 'IMPULSE : FULL WAVE(HV / LV)', '123123', '123131', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, '304', 'อื่นๆ', 'IMPULSE : FULL WAVE(HV / LV)', '132', '31323', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, '305', NULL, 'IMPULSE : FULL WAVE(HV / LV)', 'ห', 'ห', 'TEMP RISE', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, '306', 'ANSI / IEEE STANDARD', 'IMPULSE : FULL WAVE(HV / LV)', '123', '123', 'TEMP RISE', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, '307', 'ANSI / IEEE STANDARD', 'IMPULSE : FULL WAVE(HV / LV)', '2222', '2222', 'TEMP RISE', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, '308', 'ANSI / IEEE STANDARD', 'IMPULSE : FULL WAVE(HV / LV)', 'hhhh', 'hhhh', 'TEMP RISE', 'DGA,BREAK DOWN VOLTAGE,WATER CONTENT', 'ทดสอบ', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'DGA ก่อนทดสอบ,DGA หลังทดสอบ'),
(50, '500', 'อื่นๆ', 'IMPULSE : FULL WAVE(HV / LV)', 'eee', 'eee', 'TEMP RISE', 'DGA,BREAK DOWN VOLTAGE,WATER CONTENT', 'ทดสอบ', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'DGA ก่อนทดสอบ,DGA หลังทดสอบ'),
(51, '501', 'อื่นๆ', 'IMPULSE : FULL WAVE(HV / LV)', 'ppp', 'ppp', 'TEMP RISE', 'DGA,BREAK DOWN VOLTAGE,WATER CONTENT', 'ทดสอบ', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'DGA ก่อนทดสอบ,DGA หลังทดสอบ'),
(52, '502', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, '504', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, '505', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, '506', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, '507', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, '508', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, '510', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, '511', 'อื่นๆ', 'IMPULSE : FULL WAVE(HV / LV)', 'aa', 'aaa', 'TEMP RISE', 'DGA,BREAK DOWN VOLTAGE,WATER CONTENT', 'ทดสอบ', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'DGA ก่อนทดสอบ,DGA หลังทดสอบ'),
(62, '512', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, '600', 'อื่นๆ', 'IMPULSE : FULL WAVE(HV / LV)', '600', '600', 'TEMP RISE', 'DGA,BREAK DOWN VOLTAGE,WATER CONTENT', 'ทดสอบ', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'DGA ก่อนทดสอบ,DGA หลังทดสอบ'),
(64, '601', 'อื่นๆ', 'IMPULSE : FULL WAVE(HV / LV)', '601', '601', 'TEMP RISE', 'DGA,BREAK DOWN VOLTAGE,WATER CONTENT', 'ทดสอบ', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'ทดสอบ,REPORT', 'DGA ก่อนทดสอบ,DGA หลังทดสอบ');

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `transportNo` int(11) NOT NULL,
  `NoidNo` varchar(45) DEFAULT NULL,
  `transport` varchar(45) DEFAULT NULL,
  `transportin` varchar(45) DEFAULT NULL,
  `transportout` varchar(45) DEFAULT NULL,
  `car` varchar(45) DEFAULT NULL,
  `road` varchar(45) DEFAULT NULL,
  `ttest` varchar(45) DEFAULT NULL,
  `shock` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`transportNo`, `NoidNo`, `transport`, `transportin`, `transportout`, `car`, `road`, `ttest`, `shock`) VALUES
(3, '015', 'ในประเทศ', 'jjj', NULL, 'ทางรถยนต์', 'ถนนลูกรัง', NULL, 'ONE WAY'),
(4, '018', 'ในประเทศ', '77', NULL, 'ทางเรือ', NULL, NULL, 'RETURN'),
(6, '020', 'ในประเทศ', 'bbbb', NULL, 'ทางรถยนต์', 'ถนนลูกรัง', 'ทดสอบ,REPORT', 'ONE WAY'),
(7, '021', 'ต่างประเทศ', NULL, 'TTTT', 'ทางเรือ', NULL, 'ทดสอบ,REPORT', 'RETURN'),
(9, '023', 'ในประเทศ', 'vvv', NULL, 'ทางเรือ', NULL, 'ทดสอบ,REPORT', 'ONE WAY'),
(10, '024', 'ในประเทศ', 'vvv', NULL, 'ทางเรือ', NULL, 'ทดสอบ,REPORT', 'ONE WAY'),
(11, '025', 'ต่างประเทศ', NULL, 'ooooo', 'ทางเรือ', NULL, 'ทดสอบ,REPORT', 'RETURN'),
(12, '026', 'ในประเทศ', 'rr', NULL, 'ทางรถยนต์', 'ถนนลูกรัง', 'ทดสอบ,REPORT', 'ONE WAY'),
(15, '028', 'ในประเทศ', '5555555', NULL, 'ทางเรือ', 'ถนนลาดยาง', 'ทดสอบ,REPORT', 'RETURN'),
(16, '029', 'ในประเทศ', 'ccccc', NULL, 'ทางรถยนต์', 'ถนนลูกรัง', 'ทดสอบ,REPORT', 'ONE WAY'),
(17, '030', 'ต่างประเทศ', NULL, 'กกกกกก', 'ทางเรือ', NULL, 'ทดสอบ,REPORT', 'RETURN'),
(18, '031', 'ในประเทศ', 'อออ', NULL, 'ทางรถยนต์', 'ถนนลาดยาง', 'ทดสอบ,REPORT', 'ONE WAY'),
(22, '033', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, '100', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, '103', 'ในประเทศ', '@@', NULL, 'ทางเรือ', NULL, 'ทดสอบ,REPORT', 'ONE WAY'),
(28, '200', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, '2018CE001', 'ในประเทศ', 'สมุทรปราการ', NULL, NULL, 'ถนนคอนกรีต', 'ทดสอบ', 'RETURN'),
(37, '123', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, '300', 'ในประเทศ', 'พพพพ', NULL, 'ทางเรือ', NULL, 'ทดสอบ,REPORT', 'ONE WAY'),
(42, '301', 'ในประเทศ', 'นนนน', NULL, 'ทางรถยนต์', 'ถนนลาดยาง', 'ทดสอบ,REPORT', 'RETURN'),
(43, '302', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, '303', 'ในประเทศ', '12312312', NULL, 'ทางรถยนต์', 'ถนนลูกรัง', NULL, NULL),
(45, '304', 'ต่างประเทศ', NULL, '123123131', 'ทางรถยนต์', 'ถนนคอนกรีต', NULL, NULL),
(46, '305', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, '306', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, '307', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, '308', 'ในประเทศ', 'hhhh', NULL, 'ทางรถยนต์', 'ถนนคอนกรีต', 'ทดสอบ,REPORT', 'ONE WAY'),
(50, '500', 'ในประเทศ', 'eeee', NULL, 'ทางรถยนต์', 'ถนนคอนกรีต', 'ทดสอบ,REPORT', 'ONE WAY'),
(51, '501', 'ในประเทศ', 'pppp', NULL, 'ทางรถยนต์', 'ถนนลาดยาง', 'ทดสอบ,REPORT', 'RETURN'),
(52, '502', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, '504', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, '505', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, '506', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, '507', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, '508', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, '510', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, '511', 'ต่างประเทศ', NULL, 'aaa', 'ทางเรือ', NULL, 'REPORT', 'ONE WAY'),
(62, '512', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, '600', 'ในประเทศ', '600', NULL, 'ทางรถยนต์', 'ถนนลาดยาง', 'ทดสอบ,REPORT', 'ONE WAY'),
(64, '601', 'ต่างประเทศ', NULL, '601', 'ทางเรือ', NULL, 'ทดสอบ,REPORT', 'RETURN');

-- --------------------------------------------------------

--
-- Table structure for table `typeform`
--

CREATE TABLE `typeform` (
  `typeform` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `typeform`
--

INSERT INTO `typeform` (`typeform`) VALUES
('แบบสอบถามการผลิต'),
('แบบสอบถามราคาต้นทุน');

-- --------------------------------------------------------

--
-- Table structure for table `typetransform`
--

CREATE TABLE `typetransform` (
  `idtypetransform` int(11) NOT NULL,
  `typetransformname` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `typetransform`
--

INSERT INTO `typetransform` (`idtypetransform`, `typetransformname`) VALUES
(1, 'FULLY WITH OIL'),
(2, 'CONSERVATOR'),
(3, 'N2 GAS SEALED'),
(4, 'PAD MOUNTED'),
(5, 'DRY TYPE (CLASS H)'),
(6, 'CAST RESIN');

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `user_status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`user_status`) VALUES
('admin'),
('user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`accessoriesNo`),
  ADD KEY `accessories_fk_idx` (`NoidNo`);

--
-- Indexes for table `accessorytool`
--
ALTER TABLE `accessorytool`
  ADD PRIMARY KEY (`accessorytoolid`);

--
-- Indexes for table `approve`
--
ALTER TABLE `approve`
  ADD PRIMARY KEY (`approveNo`),
  ADD KEY `approve_fk_idx` (`NoidNo`);

--
-- Indexes for table `etc`
--
ALTER TABLE `etc`
  ADD PRIMARY KEY (`etcNo`),
  ADD KEY `etc_fk_idx` (`NoidNo`);

--
-- Indexes for table `fishtale`
--
ALTER TABLE `fishtale`
  ADD PRIMARY KEY (`idfishtale`);

--
-- Indexes for table `forcost`
--
ALTER TABLE `forcost`
  ADD PRIMARY KEY (`forcostNo`),
  ADD KEY `forcost_fk_idx` (`NoidNo`);

--
-- Indexes for table `forproduce`
--
ALTER TABLE `forproduce`
  ADD PRIMARY KEY (`forproduceNo`),
  ADD KEY `forproduce_fk_idx` (`NoidNo`);

--
-- Indexes for table `guaranteed`
--
ALTER TABLE `guaranteed`
  ADD PRIMARY KEY (`guaranteeNo`),
  ADD KEY `guaranteed_fk_idx` (`NoidNo`);

--
-- Indexes for table `leader`
--
ALTER TABLE `leader`
  ADD PRIMARY KEY (`idleader`);

--
-- Indexes for table `loadingtype`
--
ALTER TABLE `loadingtype`
  ADD PRIMARY KEY (`idloadingtype`);

--
-- Indexes for table `loadtap`
--
ALTER TABLE `loadtap`
  ADD PRIMARY KEY (`idloadtap`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memberno`),
  ADD UNIQUE KEY `member_user_UNIQUE` (`member_user`),
  ADD KEY `status_idx` (`member_status`);

--
-- Indexes for table `noid`
--
ALTER TABLE `noid`
  ADD PRIMARY KEY (`NoidNo`),
  ADD UNIQUE KEY `Noid_UNIQUE` (`NoidNo`),
  ADD KEY `noid_fk_idx` (`formtype`),
  ADD KEY `noid_idx` (`formtype`);

--
-- Indexes for table `onload`
--
ALTER TABLE `onload`
  ADD PRIMARY KEY (`idonload`);

--
-- Indexes for table `other`
--
ALTER TABLE `other`
  ADD PRIMARY KEY (`otherNo`),
  ADD KEY `other_fk_idx` (`NoidNo`);

--
-- Indexes for table `otheronload`
--
ALTER TABLE `otheronload`
  ADD PRIMARY KEY (`idotheronload`);

--
-- Indexes for table `packing`
--
ALTER TABLE `packing`
  ADD PRIMARY KEY (`packingNo`),
  ADD KEY `packing_fk_idx` (`NoidNo`);

--
-- Indexes for table `refference`
--
ALTER TABLE `refference`
  ADD PRIMARY KEY (`refferenceNo`),
  ADD KEY `refference_fk_idx` (`NoidNo`);

--
-- Indexes for table `road`
--
ALTER TABLE `road`
  ADD PRIMARY KEY (`idroad`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`sellerNo`),
  ADD KEY `NoidNo_idx` (`NoidNo`);

--
-- Indexes for table `specolor`
--
ALTER TABLE `specolor`
  ADD PRIMARY KEY (`idspecolor`);

--
-- Indexes for table `standardaccessories`
--
ALTER TABLE `standardaccessories`
  ADD PRIMARY KEY (`idstandardaccessories`);

--
-- Indexes for table `talefish`
--
ALTER TABLE `talefish`
  ADD PRIMARY KEY (`idtalefish`);

--
-- Indexes for table `technical_data`
--
ALTER TABLE `technical_data`
  ADD PRIMARY KEY (`technicalNo`),
  ADD KEY `technical_fk_idx` (`NoidNo`);

--
-- Indexes for table `technicial`
--
ALTER TABLE `technicial`
  ADD PRIMARY KEY (`idtechnicial`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`testNo`),
  ADD KEY `Noid_idx` (`NoidNo`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`transportNo`),
  ADD KEY `transport_fk_idx` (`NoidNo`);

--
-- Indexes for table `typeform`
--
ALTER TABLE `typeform`
  ADD PRIMARY KEY (`typeform`);

--
-- Indexes for table `typetransform`
--
ALTER TABLE `typetransform`
  ADD PRIMARY KEY (`idtypetransform`);

--
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`user_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `accessoriesNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `accessorytool`
--
ALTER TABLE `accessorytool`
  MODIFY `accessorytoolid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `approve`
--
ALTER TABLE `approve`
  MODIFY `approveNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `etc`
--
ALTER TABLE `etc`
  MODIFY `etcNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `fishtale`
--
ALTER TABLE `fishtale`
  MODIFY `idfishtale` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `forcost`
--
ALTER TABLE `forcost`
  MODIFY `forcostNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `forproduce`
--
ALTER TABLE `forproduce`
  MODIFY `forproduceNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `guaranteed`
--
ALTER TABLE `guaranteed`
  MODIFY `guaranteeNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `leader`
--
ALTER TABLE `leader`
  MODIFY `idleader` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `loadingtype`
--
ALTER TABLE `loadingtype`
  MODIFY `idloadingtype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `loadtap`
--
ALTER TABLE `loadtap`
  MODIFY `idloadtap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `memberno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `onload`
--
ALTER TABLE `onload`
  MODIFY `idonload` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `other`
--
ALTER TABLE `other`
  MODIFY `otherNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `otheronload`
--
ALTER TABLE `otheronload`
  MODIFY `idotheronload` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `packing`
--
ALTER TABLE `packing`
  MODIFY `packingNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `refference`
--
ALTER TABLE `refference`
  MODIFY `refferenceNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `road`
--
ALTER TABLE `road`
  MODIFY `idroad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `sellerNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `specolor`
--
ALTER TABLE `specolor`
  MODIFY `idspecolor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `standardaccessories`
--
ALTER TABLE `standardaccessories`
  MODIFY `idstandardaccessories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `talefish`
--
ALTER TABLE `talefish`
  MODIFY `idtalefish` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `technical_data`
--
ALTER TABLE `technical_data`
  MODIFY `technicalNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `technicial`
--
ALTER TABLE `technicial`
  MODIFY `idtechnicial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `testNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `transportNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `typetransform`
--
ALTER TABLE `typetransform`
  MODIFY `idtypetransform` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `accessories`
--
ALTER TABLE `accessories`
  ADD CONSTRAINT `accessories_fk` FOREIGN KEY (`NoidNo`) REFERENCES `noid` (`NoidNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `approve`
--
ALTER TABLE `approve`
  ADD CONSTRAINT `approve_fk` FOREIGN KEY (`NoidNo`) REFERENCES `noid` (`NoidNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `etc`
--
ALTER TABLE `etc`
  ADD CONSTRAINT `etc_fk` FOREIGN KEY (`NoidNo`) REFERENCES `noid` (`NoidNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `forcost`
--
ALTER TABLE `forcost`
  ADD CONSTRAINT `forcost_fk` FOREIGN KEY (`NoidNo`) REFERENCES `noid` (`NoidNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `forproduce`
--
ALTER TABLE `forproduce`
  ADD CONSTRAINT `forproduce_fk` FOREIGN KEY (`NoidNo`) REFERENCES `noid` (`NoidNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `guaranteed`
--
ALTER TABLE `guaranteed`
  ADD CONSTRAINT `guaranteed_fk` FOREIGN KEY (`NoidNo`) REFERENCES `noid` (`NoidNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member` FOREIGN KEY (`member_status`) REFERENCES `user_status` (`user_status`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `noid`
--
ALTER TABLE `noid`
  ADD CONSTRAINT `noid` FOREIGN KEY (`formtype`) REFERENCES `typeform` (`typeform`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `other`
--
ALTER TABLE `other`
  ADD CONSTRAINT `other_fk` FOREIGN KEY (`NoidNo`) REFERENCES `noid` (`NoidNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `packing`
--
ALTER TABLE `packing`
  ADD CONSTRAINT `packing_fk` FOREIGN KEY (`NoidNo`) REFERENCES `noid` (`NoidNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `refference`
--
ALTER TABLE `refference`
  ADD CONSTRAINT `refference_fk` FOREIGN KEY (`NoidNo`) REFERENCES `noid` (`NoidNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `seller_fk` FOREIGN KEY (`NoidNo`) REFERENCES `noid` (`NoidNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `technical_data`
--
ALTER TABLE `technical_data`
  ADD CONSTRAINT `technical_fk` FOREIGN KEY (`NoidNo`) REFERENCES `noid` (`NoidNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_fk` FOREIGN KEY (`NoidNo`) REFERENCES `noid` (`NoidNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transport`
--
ALTER TABLE `transport`
  ADD CONSTRAINT `transport_fk` FOREIGN KEY (`NoidNo`) REFERENCES `noid` (`NoidNo`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
