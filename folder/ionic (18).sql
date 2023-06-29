-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2023 at 02:26 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ionic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(80) NOT NULL,
  `status` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `otp` varchar(100) NOT NULL,
  `tocken` int(80) NOT NULL,
  `panel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `status`, `name`, `email`, `phone`, `password`, `otp`, `tocken`, `panel`) VALUES
(1, 'Active', 'Admin', 'admin@gmail.com', '8368910114', '1111', '1318', 0, 'Store'),
(2, 'Active', 'nikhil', 'nikhil@gmail.com', '7982567755', '1111', '6572', 0, 'Admin'),
(3, 'Active', 'test', 'test@gmail.com', '4444', '1111', '2434', 0, 'Accounts'),
(4, 'Active', 'OPeration', 'operation@gnail.com', '7777', '1111', '8992', 0, 'Operations'),
(5, 'Active', 'Test Service', 'service@gmail.com', '8888', '1111', '6265', 0, 'Services');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `po_id` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `dealer_id` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `varient` varchar(100) NOT NULL,
  `quantity_with_batt` varchar(100) NOT NULL DEFAULT '0',
  `quantity_without_batt` varchar(100) NOT NULL DEFAULT '0',
  `amountWithOutBatt` varchar(100) NOT NULL DEFAULT '0',
  `amountWithBatt` varchar(100) NOT NULL DEFAULT '0',
  `total` varchar(255) NOT NULL DEFAULT '0',
  `add_time` varchar(255) NOT NULL,
  `add_date` varchar(255) NOT NULL,
  `approved_time` varchar(100) NOT NULL,
  `approved_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `po_id`, `status`, `dealer_id`, `model`, `varient`, `quantity_with_batt`, `quantity_without_batt`, `amountWithOutBatt`, `amountWithBatt`, `total`, `add_time`, `add_date`, `approved_time`, `approved_date`) VALUES
(12, '', 'Po-Approved', '11', 'EX2+', 'Blue', '1', '18', '100000', '1620000', '1720000', '05:27:26pm', '2023/04/26', '', ''),
(13, '', 'Po-Approved', '11', 'Luster', 'Yellow', '1', '0', '100000', '0', '100000', '11:50:54am', '2023/04/27', '', ''),
(14, '', 'Po-Approved', '11', 'EX1', 'Grey', '1', '0', '100000', '0', '118000', '12:38:29pm', '2023/04/27', '', ''),
(15, '', 'Po-Approved', '11', 'EX3', 'Black', '1', '0', '100000', '0', '118000', '05:03:22pm', '2023/04/27', '', ''),
(16, '', 'Po-Approved', '11', 'EX2', 'Black', '1', '2', '100000', '180000', '330400', '12:30:54pm', '2023/04/29', '', ''),
(17, '', 'Po-Approved', '11', 'EX2+', 'Blue', '1', '0', '100000', '0', '118000', '11:45:49am', '2023/05/01', '', ''),
(18, '', 'Po-Approved', '11', 'EX2', 'Blue', '1', '1', '100000', '90000', '224200', '11:46:57am', '2023/05/01', '', ''),
(19, '', 'Po-Approved', '11', 'EX2', 'Blue', '1', '2', '100000', '180000', '330400', '04:26:52pm', '2023/05/02', '', ''),
(20, '', 'Po-Approved', '11', 'EX2', 'Blue', '1', '0', '100000', '0', '118000', '04:01:05pm', '2023/05/03', '', ''),
(21, '', 'Po-Approved', '11', 'EX1', 'Black', '1', '1', '100000', '90000', '224200', '04:02:04pm', '2023/05/03', '', ''),
(22, '', 'Po-Approved', '11', 'EX2', 'Blue', '1', '1', '100000', '90000', '224200', '04:04:33pm', '2023/05/03', '', ''),
(23, '', 'Po-Approved', '11', 'EX1', 'Grey', '1', '1', '100000', '90000', '224200', '04:13:20pm', '2023/05/03', '', ''),
(24, '', 'Po-Approved', '11', 'SPARKLE(DB)', 'Blue', '1', '0', '104532', '0', '123347.76', '02:27:04pm', '2023/05/04', '', ''),
(25, '', 'Po-Approved', 'E0017', 'EX2', 'Dark Grey', '1', '2', '68094', '180000', '260498.7', '12:23:13pm', '2023/05/05', '', ''),
(26, '', 'Po-Approved', '11', 'EX2', 'Yellow', '30', '0', '2042820', '0', '2144961', '03:46:32pm', '2023/05/05', '', ''),
(27, '', 'Po-Approved', '11', 'EX3', 'Grey', '1', '0', '66594', '0', '69923.7', '04:41:22pm', '2023/05/19', '', ''),
(28, '', 'Po-Approved', '11', 'HELTER', 'Blue', '1', '0', '160000', '0', '168000', '03:57:08pm', '2023/06/07', '', ''),
(29, '', 'Po-Approved', '11', 'EX1', 'Grey', '1', '2', '67094', '180000', '259448.7', '04:10:16pm', '2023/06/07', '', ''),
(30, '', 'Po-Approved', '11', 'EX2', 'Red', '2', '0', '133188', '0', '139847.4', '04:10:36pm', '2023/06/07', '', ''),
(31, 'EE/PO/92129', 'Po-Disapproved', '11', 'EX1', 'Grey', '10', '0', '670940', '0', '704487', '04:15:17pm', '2023/06/07', '02:14:37pm', '2023/06/09'),
(32, 'EE/PO/92129', 'Po-Disapproved', '11', 'EX3', 'Red', '2', '2', '133188', '180000', '328847.4', '04:15:39pm', '2023/06/07', '02:14:37pm', '2023/06/09'),
(33, '70604', 'Closed', '11', 'HELTER', 'Blue', '10', '1', '1600000', '90000', '1774500', '04:16:09pm', '2023/06/07', '', ''),
(34, 'EE/PO/36749', 'Po-Approved', '11', 'EX3+', 'Red', '1', '0', '66594', '0', '69923.7', '12:25:57pm', '2023/06/08', '11:16:33am', '2023/06/09'),
(35, 'EE/PO/36749', 'Po-Approved', '11', 'HELTER', 'Skyblue', '2', '0', '320000', '0', '336000', '12:26:18pm', '2023/06/08', '11:16:33am', '2023/06/09');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(50) NOT NULL,
  `c_date` varchar(50) NOT NULL,
  `c_time` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `remark` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `complaint_id` varchar(100) NOT NULL,
  `close_time` varchar(100) NOT NULL,
  `close_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `c_date`, `c_time`, `name`, `location`, `designation`, `topic`, `remark`, `filename`, `status`, `complaint_id`, `close_time`, `close_date`) VALUES
(43, '2023/04/20', '04:23:28pm', '11', 'sd', 'Dealer', 'Order Processing', 'ggg', 'https://evramedia.com/apifolder/512x512.jpg', 'Closed', 'EVRA0043', '', ''),
(44, '2023/04/20', '04:25:57pm', '11', 'd', 'Employee', 'Order Processing', 'sdfasdfasdfasdfasdfafasdfsdfsdfsdfsdfsdf', 'https://evramedia.com/apifolder/complaint.jpg', 'Open', 'EVRA0044', '', ''),
(45, '2023/04/20', '04:30:47pm', '11', 'sd', 'Employee', 'Order Processing', 'fsdfs', 'https://evramedia.com/apifolder/folder/complaint.jpg', 'Open', 'EVRA0045', '05:30:50pm', '2023/04/30'),
(46, '2023/05/02', '04:35:57pm', '11', 'dgfdg', 'Super Stockist', 'Order Processing', 'sdfgsdfg', 'https://evramedia.com/apifolder/folder/evra.png', 'Closed', 'EVRA0046', '', ''),
(47, '2023/05/05', '03:45:02pm', '11', 'hfghfgh', 'Super Stockist', 'Transportation', 'fghfgh', 'https://evramedia.com/apifolder/folder/EX 2 (app) (1).png', 'Closed', 'EVRA0047', '', ''),
(48, '2023/05/11', '04:07:47pm', '11', 'dfg', 'Super Stockist', 'Transportation', 'dfgdfg', 'https://evramedia.com/apifolder/folder/sparkledb_banner.png', 'Closed', 'EVRA0048', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer_sale_master`
--

CREATE TABLE `customer_sale_master` (
  `id` int(50) NOT NULL,
  `invoice_id` varchar(100) NOT NULL,
  `dealer_id` varchar(100) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_mobile` varchar(100) NOT NULL,
  `a_mobile` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `location` varchar(100) NOT NULL,
  `model_name` varchar(100) NOT NULL,
  `color` varchar(50) NOT NULL,
  `chassis_no` varchar(100) NOT NULL,
  `battery_no` varchar(50) NOT NULL,
  `motor_no` varchar(50) NOT NULL,
  `charger_no` varchar(50) NOT NULL,
  `controller_no` varchar(50) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL DEFAULT '0',
  `sale_date` varchar(100) NOT NULL,
  `sale_time` varchar(100) NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `c_pan` text NOT NULL,
  `district` text NOT NULL,
  `pincode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_sale_master`
--

INSERT INTO `customer_sale_master` (`id`, `invoice_id`, `dealer_id`, `c_name`, `c_mobile`, `a_mobile`, `email`, `location`, `model_name`, `color`, `chassis_no`, `battery_no`, `motor_no`, `charger_no`, `controller_no`, `amount`, `discount`, `sale_date`, `sale_time`, `city`, `state`, `c_pan`, `district`, `pincode`) VALUES
(8, '', '11', 'jhdfg', '23', '', '', 'r', 'EX2+', '', 'sdf22', '', '', '', '', '2', '', '', '', '', '', '', '', ''),
(9, '', '11', 'rohit', '45781457', '', '', 'gtghq', 'EX1', '', 'q', '', '', '', '', '111', '', '', '', '', '', '', '', ''),
(10, '', '11', 'ttt', '555', '', '', 'uuu', 'EX2', '', '555', '', '', '', '', '5555', '', '', '', '', '', '', '', ''),
(11, '', '11', 'sdf', '33', '', '', 'dsfg', 'LUSTER', '', '12323', '', '', '', '', '32', '', '', '', '', '', '', '', ''),
(12, '', '11', 'dsf', '34545', '', '', 'dfs', 'HELTER', '', 'sfds', '', '', '', '', '2222222', '', '', '', '', '', '', '', ''),
(13, '', '11', 'dfgdf', '23234', '', '', 'gdfg', 'SPARKLE', '', 'gerfg343434', '', '', '', '', '232334234', '', '', '', '', '', '', '', ''),
(14, '', '11', 'dfgdf', '3243', '4234', '', 'dfg', 'Bike', '', '234', '', '', '', '', '234234', '', '', '', '', '', '', '', ''),
(15, '', '11', 'test', '342345345', '', '', 'fdg', 'Scooty', '', '444', '', '', '', '', '345345345', '', '', '', '', '', '', '', ''),
(16, '', '11', 'sdf', '2222', '222', '', 'sdsd', 'MINE', '', '222222', '', '', '', '', '222', '', '', '', '', '', '', '', ''),
(17, '', '11', 'j', '85454', '54545', '', 'kjbjk', 'MINE', '', '5555', '', '', '', '', '5555', '', '', '', '', '', '', '', ''),
(18, '', '11', 'vcxcv', '234234', '234234', '', 'sdffdsfds', 'EX2+', '', 'sdfs', '', '', '', '', '234234', '', '', '', '', '', '', '', ''),
(19, '', '11', 'nikhil', '65456', '65476', '', '6547', 'EX1', 'Grey', '3', '', '', '', '', '3456', '', '', '', '', '', '', '', ''),
(20, '', '11', 'nikhil', '65656', '657656', '', 'JHGJH', 'EX1', 'Grey', '654656', '', '', '', '', '5756', '', '', '', '', '', '', '', ''),
(21, '', '11', 'ASDFRAF', '23423', '23423', '', '23', 'EX2+', 'White', '234', '', '', '', '', '23423', '', '', '', '', '', '', '', ''),
(22, '', '11', 'testuing', '46546', '65464', '', '6546', 'EX1', 'Blue', '1111', '6546', '65464', '654', '65464654', '6546546546546', '', '2023/05/09', '03:13:20pm', '', '', '', '', ''),
(23, '', '11', 'nikhil', '5645', '545', '', 'Sec 85', 'EX2', 'Blue', '56515216JJG54635', '44', '6464654', '65465', '654654', '100000', '', '2023/05/17', '10:24:52am', 'FARIDABAD', 'HARYANA', 'BQMPC66%9N', '', ''),
(24, '', '11', 'nikhl', '465465', '54656', '', 'Sec 45', 'EX2+', 'White', '65465', '6546', '6546', '654', '654', '100000', '', '2023/05/17', '05:23:22pm', '6546', '6546', '65465', '', ''),
(25, '', '11', 'ghfgh', '546', '456', '', 'hjihuj', 'EX3+', 'Red', 'ghjghjj5445', '456', '45545', '54655465465', '45546565', '555555', '', '2023/05/18', '09:59:26am', 'ghjk', 'jghjgh', '4564', '', ''),
(26, '', '11', 'dfgd', '7567567', '567567', '', '56756756', 'EX3+', 'Red', '5675675', '567567', '56756767567', '567567', '556', '65756756756', '', '2023/05/18', '10:02:48am', '75567567', '67567', '67567567', '', ''),
(27, '', '11', 'dfgdfg', '6565', '665', '', '6666', 'EX3+', 'Red', '666', '666', '666', '666', '666666', '66666', '', '2023/05/18', '10:05:11am', '666', '666', '6666', '', ''),
(28, '', '11', 'fsdf', '457457', '45675467', '', 'ghjj', 'EX3+', 'Red', '567567', '56756', '567567', '56756756', '56756567565', '567565', '', '2023/05/18', '10:20:28am', 'dghjdthgj', 'ghjfghj', '567567', '', ''),
(29, '', '11', 'nikhil', '252525255', '445', '', '6546', 'EX3', 'Black', '54', '455454', '545445', '544554', '54545454', '455454', '', '2023/05/19', '09:45:35am', '6546', '54654', '6546', '', ''),
(30, '', '11', 'nikhil', '4646', '6546', '', '54654', 'EX3', 'Black', '5465', '65456', '654', '65654', '665', '654656', '', '2023/05/19', '09:49:47am', '65465', '464', '6546', '', ''),
(31, '', '11', 'nikil', '646', '64', '', '6546', 'EX3', 'Black', '65456', '654', '6465', '6', '64', '654656546', '', '2023/05/19', '09:51:29am', '4654', '654', '65456', '', ''),
(32, '', '11', 'nikhil', '22', '22', '', '5452', 'EX3', 'Black', '454545', '463546', '6546', '654', '654', '6546', '', '2023/05/19', '09:53:50am', '232', '32', '23', '', ''),
(34, '', '11', 'mfghfg', '5456', '6546', '', '4646', 'EX3', 'Black', '56456', '64', '646', '46', '654', '65465656', '', '2023/05/19', '09:56:25am', '6', '65465', '46', '', ''),
(35, '', '11', 'kfgv', '646', '65', '', '6546', 'EX3', 'Black', '65456', '654', '6465', '6', '66', '654665', '', '2023/05/19', '10:01:28am', '656', '6546', '654', '', ''),
(36, '', '11', 'nikhil', '5654646', '646', '', '6546', 'EX3', 'Black', '656666', '85666666', '6464656', '98797998', '879898987', '6847969898', '9879879898', '2023/05/19', '10:18:29am', '54654', '656', '6546', '', ''),
(37, '', '11', 'nikhil', '65465', '654', '', '6', 'EX3', 'Black', '646', '6546', '656', '654', '6', '63546', '0', '2023/05/19', '10:24:21am', '6546', '6', '6465', '', ''),
(38, '', '11', 'nikhil', '65464', '4654', '', '464', 'EX3', 'Black', '65466', '656', '646', '464', '6', '654', '0', '2023/05/19', '11:15:31am', '66', '646', '6546', '', ''),
(39, '00039', '11', 'nikhil', '5666', '666', '', '6546', 'EX3', 'Black', '6465', '464', '6465', '464', '66', '64656', '0', '2023/05/19', '11:22:18am', '464', '6', '4654', '', ''),
(40, '00040', '11', 'nikhil', '46', '6546', '', '646', 'EX3', 'Black', '646', '646', '46', '464', '646', '6465465', '0', '2023/05/19', '03:59:14pm', '465', '46254', '546', '', ''),
(41, '00041', '11', 'jkjj', '6654646', '64', '', '4646', 'EX3', 'Black', '6564654', '6546', '46546', '46464', '65465465', '100000', '10', '2023/05/19', '04:02:35pm', '44', '654654', '6546', '', ''),
(42, '00042', '11', '65465', '654', '6546', '', '646', 'EX3', 'Black', '65465', '46464646', '6546', '546', '4646', '465', '6', '2023/05/20', '01:29:53pm', '4', 'kjhg', '464', '', ''),
(43, '00043', '11', '463464', '5', '46', '', '46', 'EX3', 'Black', '654', '654', '65', '4654', '65', '654', '4654', '2023/05/20', '03:11:17pm', '65', '546', '46', '6', '46'),
(44, '00044', '11', 'test', '87876', '868', '', '87687', 'HELTER', 'Yellow', '6876', '876', '8768', '6876', '876876', '687', '868', '2023/05/25', '02:49:36pm', '6876', '8768', '686', '876', '7687'),
(45, '00045', '11', 'gvdsfg', '234', '', 'sdfsdfsf@gmail.com', '42', 'HELTER', 'Yellow', '234', '34', '333', '33', '33', '3', '333', '2023/05/25', '03:59:29pm', '234', '342', '234', '234234', '234234'),
(46, '00046', '11', 'nihil', '66546', '5465', '4654', '6546', 'HELTER', 'Yellow', '6', '6546', '5465', '4654', '6546', '464', '65465', '2023/05/25', '05:33:41pm', '5465', '646', '654', '4654', '46');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `no_of_vehicles` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `any_other_vehicle` varchar(50) NOT NULL,
  `features` varchar(50) NOT NULL,
  `improvement` varchar(50) NOT NULL,
  `p_remark` text NOT NULL,
  `t_remark` text NOT NULL,
  `s_remark` text NOT NULL,
  `spare_part_remark` text NOT NULL,
  `f_remark` text NOT NULL,
  `rating` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `location`, `designation`, `no_of_vehicles`, `duration`, `any_other_vehicle`, `features`, `improvement`, `p_remark`, `t_remark`, `s_remark`, `spare_part_remark`, `f_remark`, `rating`, `date`, `time`) VALUES
(1, 'nikhil', 'far', 'Dealer', '05-10', '1-3', 'yes', 'Ease Of riding', 'Transportation', 'df', 'ff', 'fsdf', 'sdfsd', 'sdf', '2', '', ''),
(2, 'nikhil', 'sdf', 'Dealer', '05-10', '1-3', 'yes', 'Safety', 'Order Processing', 'fsd', 'sdf', 'sdfS', 'DFsdfsdfas', 'sdfs', '1', '2023/05/24', '02:05:10pm');

-- --------------------------------------------------------

--
-- Table structure for table `graph`
--

CREATE TABLE `graph` (
  `id` int(100) NOT NULL,
  `data` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `graph`
--

INSERT INTO `graph` (`id`, `data`) VALUES
(1, '10'),
(2, '20'),
(3, '30'),
(4, '40'),
(5, '50'),
(6, '150'),
(7, '160'),
(8, '170'),
(9, '160'),
(10, '170'),
(11, '100'),
(12, '200');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(100) NOT NULL,
  `dealer_id` varchar(30) NOT NULL,
  `po_raised` varchar(30) NOT NULL,
  `EX1` varchar(30) NOT NULL,
  `EX2` varchar(30) NOT NULL,
  `EX3` varchar(30) NOT NULL,
  `EX2+` varchar(30) NOT NULL,
  `EX3+` varchar(30) NOT NULL,
  `HELTER` varchar(30) NOT NULL,
  `LUSTER` varchar(30) NOT NULL,
  `MINE` varchar(30) NOT NULL,
  `SPARKLE` varchar(30) NOT NULL,
  `SPARKLE(DB)` varchar(30) NOT NULL,
  `EX1(grey)` varchar(30) NOT NULL DEFAULT '0',
  `EX1(black)` varchar(30) NOT NULL DEFAULT '0',
  `EX1(red)` varchar(30) NOT NULL DEFAULT '0',
  `EX1(blue)` varchar(30) NOT NULL DEFAULT '0',
  `EX2(black)` varchar(30) NOT NULL DEFAULT '0',
  `EX2(mustard)` varchar(30) NOT NULL DEFAULT '0',
  `EX2(yellow)` varchar(30) NOT NULL DEFAULT '0',
  `EX2(green)` varchar(30) NOT NULL DEFAULT '0',
  `EX2(white)` varchar(30) NOT NULL DEFAULT '0',
  `EX2(lightgrey)` varchar(30) NOT NULL DEFAULT '0',
  `EX2(darkgrey)` varchar(50) NOT NULL DEFAULT '0',
  `EX2(red)` varchar(50) NOT NULL DEFAULT '0',
  `EX2(blue)` varchar(50) NOT NULL DEFAULT '0',
  `EX2+(white)` varchar(50) NOT NULL DEFAULT '0',
  `EX2+(silver)` varchar(50) NOT NULL DEFAULT '0',
  `EX2+(black)` varchar(50) NOT NULL DEFAULT '0',
  `EX2+(red)` varchar(50) NOT NULL DEFAULT '0',
  `EX2+(yellow)` varchar(50) NOT NULL DEFAULT '0',
  `EX2+(blue)` varchar(50) NOT NULL DEFAULT '0',
  `EX3(grey)` varchar(50) NOT NULL DEFAULT '0',
  `EX3(black)` varchar(50) NOT NULL DEFAULT '0',
  `EX3(red)` varchar(50) NOT NULL DEFAULT '0',
  `EX3(blue)` varchar(50) NOT NULL DEFAULT '0',
  `EX3+(red)` varchar(50) NOT NULL DEFAULT '0',
  `EX3+(blue)` varchar(50) NOT NULL DEFAULT '0',
  `EX3+(orange)` varchar(50) NOT NULL DEFAULT '0',
  `EX3+(grey)` varchar(50) NOT NULL DEFAULT '0',
  `SPARKLE(white)` varchar(50) NOT NULL DEFAULT '0',
  `SPARKLE(silver)` varchar(50) NOT NULL DEFAULT '0',
  `SPARKLE(black)` varchar(50) NOT NULL DEFAULT '0',
  `MINE(white)` varchar(50) NOT NULL DEFAULT '0',
  `MINE(silver)` varchar(50) NOT NULL DEFAULT '0',
  `MINE(red)` varchar(50) NOT NULL DEFAULT '0',
  `MINE(black)` varchar(50) NOT NULL DEFAULT '0',
  `LUSTER(yellow)` varchar(50) NOT NULL DEFAULT '0',
  `LUSTER(green)` varchar(50) NOT NULL DEFAULT '0',
  `HELTER(blue)` text NOT NULL,
  `HELTER(red)` text NOT NULL,
  `HELTER(yellow)` text NOT NULL,
  `HELTER(skyblue)` text NOT NULL,
  `SPARKLE(DB)(black)` text NOT NULL,
  `SPARKLE(DB)(blue)` text NOT NULL,
  `SPARKLE(DB)(red)` text NOT NULL,
  `SPARKLE(DB)(white)` text NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `dealer_id`, `po_raised`, `EX1`, `EX2`, `EX3`, `EX2+`, `EX3+`, `HELTER`, `LUSTER`, `MINE`, `SPARKLE`, `SPARKLE(DB)`, `EX1(grey)`, `EX1(black)`, `EX1(red)`, `EX1(blue)`, `EX2(black)`, `EX2(mustard)`, `EX2(yellow)`, `EX2(green)`, `EX2(white)`, `EX2(lightgrey)`, `EX2(darkgrey)`, `EX2(red)`, `EX2(blue)`, `EX2+(white)`, `EX2+(silver)`, `EX2+(black)`, `EX2+(red)`, `EX2+(yellow)`, `EX2+(blue)`, `EX3(grey)`, `EX3(black)`, `EX3(red)`, `EX3(blue)`, `EX3+(red)`, `EX3+(blue)`, `EX3+(orange)`, `EX3+(grey)`, `SPARKLE(white)`, `SPARKLE(silver)`, `SPARKLE(black)`, `MINE(white)`, `MINE(silver)`, `MINE(red)`, `MINE(black)`, `LUSTER(yellow)`, `LUSTER(green)`, `HELTER(blue)`, `HELTER(red)`, `HELTER(yellow)`, `HELTER(skyblue)`, `SPARKLE(DB)(black)`, `SPARKLE(DB)(blue)`, `SPARKLE(DB)(red)`, `SPARKLE(DB)(white)`, `total`) VALUES
(4, '11', '2', '0', '0', '0', '-1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '9', '0', '0', '4', '0', '0', '2', '0', '0', '0', '2', '0', '0', '0', '6', '0', '100'),
(15, 'E0024', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '100');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(100) NOT NULL,
  `panel` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL,
  `sender_panel` varchar(100) NOT NULL,
  `sender_id` varchar(100) NOT NULL,
  `po_id` varchar(100) NOT NULL,
  `seen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `panel`, `message`, `status`, `date`, `time`, `sender_panel`, `sender_id`, `po_id`, `seen`) VALUES
(1, 'Store', 'Payment approved', 'Seen', '2023/05/17', '10:24:52am', 'Accounts', '', '', ''),
(2, 'Store', 'wfsdf', 'In-Active', '', '', 'operations', '', '', ''),
(10, 'Store', 'Check Inventory', 'Seen', '2023/06/23', '12:18:01pm', 'Operations', '2', 'EE/PO/36749', ''),
(13, 'Operations', 'Inventory Checked', 'Active', '2023/06/27', '03:04:07pm', 'Store', '1', 'EE/PO/36749', ''),
(14, 'Accounts', 'Generate Quote', 'Active', '2023/06/28', '12:52:24pm', 'Operations', '4', 'EE/PO/36749', 'Seen');

-- --------------------------------------------------------

--
-- Table structure for table `notifications_entry`
--

CREATE TABLE `notifications_entry` (
  `id` int(100) NOT NULL,
  `n_id` varchar(100) NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL,
  `po_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications_entry`
--

INSERT INTO `notifications_entry` (`id`, `n_id`, `date`, `time`, `po_id`) VALUES
(1, '3', '2023/06/22', '03:35:02pm', ''),
(8, '2', '2023/06/23', '12:18:01pm', 'EE/PO/36749'),
(9, '1', '2023/06/23', '04:55:04pm', ''),
(12, '1', '2023/06/27', '03:04:07pm', 'EE/PO/36749'),
(13, '10', '2023/06/27', '03:56:02pm', ''),
(14, '4', '2023/06/28', '12:52:24pm', 'EE/PO/36749'),
(15, '13', '2023/06/28', '12:53:02pm', ''),
(16, '14', '2023/06/28', '12:53:06pm', ''),
(17, '14', '2023/06/28', '04:51:31pm', ''),
(18, '14', '2023/06/28', '04:59:34pm', ''),
(19, '14', '2023/06/28', '05:03:37pm', '');

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(100) NOT NULL,
  `otp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`id`, `otp`) VALUES
(1, 'Open'),
(2, '5747'),
(3, '9622'),
(4, '4042'),
(5, '22'),
(6, ''),
(7, 'E0024'),
(8, 'E0024');

-- --------------------------------------------------------

--
-- Table structure for table `po`
--

CREATE TABLE `po` (
  `id` int(50) NOT NULL,
  `po_id` varchar(100) NOT NULL,
  `dealer_id` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `unit_price` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `final_amt` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `add_date` varchar(100) NOT NULL,
  `add_time` varchar(100) NOT NULL,
  `approved_time` varchar(100) NOT NULL,
  `approved_date` varchar(100) NOT NULL,
  `company_status` varchar(100) NOT NULL,
  `dept_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `po`
--

INSERT INTO `po` (`id`, `po_id`, `dealer_id`, `model`, `unit_price`, `amount`, `quantity`, `final_amt`, `status`, `add_date`, `add_time`, `approved_time`, `approved_date`, `company_status`, `dept_status`) VALUES
(9, 'EE/PO/92129', '11', '', '', '4651465', '', '', 'Closed', '', '', '02:14:37pm', '2023/06/09', '', ''),
(14, 'EE/PO/36749', '11', '', '', '405923.7', '', '', 'Open', '', '', '11:16:33am', '2023/06/09', 'Accounts', 'Generate Quote');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `banner_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `status`, `p_id`, `name`, `image`, `banner_image`) VALUES
(1, 'Active', 'EX1', 'EX1', 'ex1.jpg', ''),
(2, 'Active', 'EX2', 'EX2', 'ex2.jpg', 'ex2_banner.jpg'),
(3, 'Active', 'EX2+', 'EX2+', 'ex2+.jpg', 'ex2plus_banner.png'),
(4, 'Active', 'EX3', 'EX3', 'ex3.jpg', ''),
(5, 'Active', 'EX3+', 'EX3+', 'ex3+.jpg', ''),
(6, 'Active', 'HELTER', 'HELTER', 'helter.png', ''),
(7, 'Active', 'LUSTER', 'LUSTER', 'luster.jpg', 'luster_banner.png'),
(8, 'Active', 'MINE', 'MINE', 'mine.jpg', ''),
(9, 'Active', 'SPARKLE', 'SPARKLE', 'sparkle.jpg', ''),
(10, 'Active', 'SPARKLE(DB)', 'SPARKLE(DB)', 'sparkle(db).png', '');

-- --------------------------------------------------------

--
-- Table structure for table `replace_sparepart`
--

CREATE TABLE `replace_sparepart` (
  `id` int(50) NOT NULL,
  `replace_id` varchar(100) NOT NULL,
  `dealerid` varchar(50) NOT NULL,
  `part_name` varchar(50) NOT NULL,
  `part_no` varchar(50) NOT NULL,
  `warranty_info` varchar(50) NOT NULL,
  `file` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `chassis` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `sale_date` varchar(50) NOT NULL,
  `warranty` varchar(50) NOT NULL,
  `docked` varchar(80) NOT NULL,
  `courier` varchar(50) NOT NULL,
  `courier_partner` varchar(80) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replace_sparepart`
--

INSERT INTO `replace_sparepart` (`id`, `replace_id`, `dealerid`, `part_name`, `part_no`, `warranty_info`, `file`, `remark`, `chassis`, `model`, `color`, `c_name`, `sale_date`, `warranty`, `docked`, `courier`, `courier_partner`, `status`) VALUES
(1, '', '11', '', '65464', 'In Warranty', '', 'fgh', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', '', '', '', 'Closed'),
(2, '', '11', '', '65464', 'In Warranty', '', 'sdfsdf', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', '', '', '', 'Closed'),
(3, '', '11', '', '65464', 'In Warranty', '', '5', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', '', '', '', 'Closed'),
(4, '', '11', '', '65464', 'In Warranty', '', 'gggg', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', '', '', '', 'Closed'),
(5, '', '11', '', '65464', 'In Warranty', '', 'sd', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', '', '', '', 'Closed'),
(6, '', '11', '', '65464', 'In Warranty', '', 'sd', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', '', '', '', 'Closed'),
(7, '', '11', '', '65464', 'In Warranty', '', 'fghfgh', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', '', '', '', 'Closed'),
(8, '', '11', '', '65464654', 'In Warranty', '', 'ndghjndtghjtgyhjdtyjty', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', '', '', '', 'Closed'),
(9, '', '11', '', '654', 'In Warranty', '', '4545', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', '', '', '', 'Closed'),
(10, '', '11', '', '65464', 'In Warranty', '', 'sdf', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', '', '', '', 'Closed'),
(11, '', '11', 'Battery', '65464', 'In Warranty', 'https://evramedia.com/apifolder/folder/mine_banner', 'dsfgdfgfg', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', '', '', '', 'Closed'),
(12, '', '11', 'Battery', '65464', 'In Warranty', 'https://evramedia.com/apifolder/folder/ex3_banner.', 'dfgdfgdfg', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', '', '', '', 'Closed'),
(13, '', '11', 'Battery', '65464', 'In Warranty', 'https://evramedia.com/apifolder/folder/sparkle_banner.png', 'dfgdf', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', '', '', '', 'Closed'),
(14, '', '11', 'Battery', '65464', 'In Warranty', 'https://evramedia.com/apifolder/folder/14.png', 'fgdsf', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', '', '', '', 'Closed'),
(15, '', '11', 'Battery', '65464', 'In Warranty', 'https://evramedia.com/apifolder/folder/13.png', 'sdfsdffsdf', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', 'sd', 'sdfsdf', '', 'Closed'),
(16, '', '11', 'Battery', '65464', 'In Warranty', 'https://evramedia.com/apifolder/folder/13.png', '11111', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', '', 'Self', '', 'Closed'),
(17, '', '11', 'Battery', '65464', 'In Warranty', 'https://evramedia.com/apifolder/folder/13.png', '1111', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', '', 'Self', '', 'Closed'),
(18, '', '11', 'Motor', '65464', 'In Warranty', 'https://evramedia.com/apifolder/folder/13.png', '1111', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', 'undefined', 'Others', '', 'Closed'),
(19, '', '11', 'Motor', '65464', 'In Warranty', 'https://evramedia.com/apifolder/folder/13.png', '1', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', 'undefined', 'Others', '', 'Closed'),
(20, '', '11', 'Motor', '65464', 'In Warranty', 'https://evramedia.com/apifolder/folder/13.png', '11', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', '1', 'Others', '', 'Closed'),
(21, '', '11', 'Controller', '65464654', 'In Warranty', 'https://evramedia.com/apifolder/folder/13.png', '11', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', '', 'Self', '', 'Closed'),
(22, '', '11', 'Controller', '65464654', 'In Warranty', 'https://evramedia.com/apifolder/folder/13.png', '11', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', '1', 'Others', '', 'Closed'),
(23, '', '11', 'Controller', '65464654', 'In Warranty', 'https://evramedia.com/apifolder/folder/13.png', '11', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', '1', 'Others', '', 'Closed'),
(24, '', '11', 'Controller', '65464654', 'In Warranty', 'https://evramedia.com/apifolder/folder/13.png', 'q', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', 'q', 'Others', '', 'Closed'),
(25, '', '11', 'Battery', '65464', 'In Warranty', 'https://evramedia.com/apifolder/folder/13.png', '11', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', '1', 'Others', '', 'Closed'),
(26, '', '11', 'Battery', 'dd', 'In Warranty', 'https://evramedia.com/apifolder/folder/13.png', '1', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', '11', 'Others', '1', 'Closed'),
(27, 'EE/RR/0027', '11', 'Controller', '65464654', 'In Warranty', 'https://evramedia.com/apifolder/folder/13.png', 'cxdvfdvdfv', '1111', 'EX1', 'Blue', 'testuing', '2023/05/09', '2028/05/09', '', 'Self', '', 'Open');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE `user_master` (
  `id` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `u_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `dealership_name` varchar(100) NOT NULL,
  `gst` text NOT NULL,
  `pan` text NOT NULL,
  `bank` text NOT NULL,
  `outlet_code` varchar(100) NOT NULL,
  `otp` varchar(100) NOT NULL,
  `signup_otp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_master`
--

INSERT INTO `user_master` (`id`, `status`, `u_id`, `name`, `email`, `password`, `phone`, `user_type`, `dealership_name`, `gst`, `pan`, `bank`, `outlet_code`, `otp`, `signup_otp`) VALUES
(1, 'Active', '11', 'niki', 'niki@gmail.com', '1111', '7982567755', 'Dealer', 'Pawan Ev Sales', 'BQMPC6659N', 'BQMPC6659N', 'ICICI BANK', 'EE/001', '2306', ''),
(13, '', 'E0011', 'nihil', 'nikhil@gmail.com', '2222', '0000', '', '', '', '', '', '', '', ''),
(14, '', 'E0014', 'sfd', 'sdfs@gmail.cp', 'fds', '34534', '', '', '', '', '', '', '', ''),
(15, '', 'E0015', 'dsfg', 'nikhil@gmail.com', '2222', '65456465', '', '', '', '', '', '', '', ''),
(16, '', 'E0016', 'rohit ', 'rohit@gmail.com', '2222', '4646546', 'Dealer', '', '', '', '', '', '', ''),
(18, 'Active', 'E0017', 'skajd', 'nikhil@gmail.com', '1111', '546546', 'Sub_Dealer', 'test dealerszhip', '1235465', 'BqmPP9977', 'ICICI', 'EM0013', '', ''),
(19, 'Pending', 'E0019', 'test', 'test@gmail.com', '2222', '8855221144', '', '', '', '', '', '', '', ''),
(20, 'Pending', 'E0020', 'test', 'Test@gmail.com', '2222', '225114455', 'Dealer', '', '', '', '', '', '', ''),
(21, 'Pending', 'E0021', 'test', 'nikhil@gmail.com', '2222', '5555', 'Sub_Dealer', '', '', '', '', '', '', ''),
(22, 'Pending', 'E0022', 'test', '1@gmail.com', '4444', '2222', 'Super Stockist', '', '', '', '', '', '', ''),
(23, 'Pending', 'E0023', 'rohit', 'rohit@gmail.com', '1212', '1212', 'Super Stockist', '', '', '', '', '', '', ''),
(36, 'Active', 'E0024', 'nikhil', 'nikhil@9911gmial.com', '', '1', 'Dealer', 'test dealerszhip', 'sdsdf', '34254', '34254', 'test dealerszhip', '5526', '2806');

-- --------------------------------------------------------

--
-- Table structure for table `varients`
--

CREATE TABLE `varients` (
  `id` int(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `price_w_out_b` varchar(255) NOT NULL,
  `price_wb` varchar(255) NOT NULL,
  `price_w_out_b_sub_dealer` varchar(100) NOT NULL,
  `price_wb_sub_dealer` varchar(100) NOT NULL,
  `banner_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `varients`
--

INSERT INTO `varients` (`id`, `color`, `p_id`, `p_name`, `price_w_out_b`, `price_wb`, `price_w_out_b_sub_dealer`, `price_wb_sub_dealer`, `banner_image`) VALUES
(1, 'Grey', 'EX1', 'EX1', '', '67094.00', '', '69594.00', 'ex1_banner.png'),
(2, 'Black', 'EX1', 'EX1', '', '67094.00', '', '69594.00', 'ex1_banner.png'),
(3, 'Red', 'EX1', 'EX1', '', '67094.00', '', '69594.00', 'ex1_banner.png'),
(4, 'Blue', 'EX1', 'EX1', '', '67094.00', '', '69594.00', 'ex1_banner.png'),
(5, 'Black', 'EX2', 'EX2', '', '68094.00', '', '71594.00', 'ex2_banner.png'),
(6, 'Blue', 'EX2', 'EX2', '', '68094.00', '', '71594.00', 'ex2_banner.png'),
(7, 'Mustard', 'EX2', 'EX2', '', '68094.00', '', '71594.00', 'ex2_banner.jpg'),
(8, 'Yellow', 'EX2', 'EX2', '', '68094.00', '', '71594.00', 'ex2_banner.jpg'),
(9, 'Green', 'EX2', 'EX2', '', '68094.00', '', '71594.00', 'ex2_banner.jpg'),
(10, 'White', 'EX2', 'EX2', '', '68094.00', '', '71594.00', 'ex2_banner.jpg'),
(11, 'LightGrey', 'EX2', 'EX2', '', '68094.00', '', '71594.00', 'ex2_banner.jpg'),
(12, 'DarkGrey', 'EX2', 'EX2', '', '68094.00', '', '71594.00', 'ex2_banner.jpg'),
(13, 'Red', 'EX2', 'EX2', '', '68094.00', '', '71594.00', 'ex2_banner.jpg'),
(14, 'White', 'EX2+', 'EX2+', '', '70094.00', '', '72594.00', 'ex2plus_banner.png'),
(15, 'Silver', 'EX2+', 'EX2+', '', '70094.00', '', '72594.00', 'ex2plus_banner.png'),
(16, 'Black', 'EX2+', 'EX2+', '', '70094.00', '', '72594.00', 'ex2plus_banner.png'),
(17, 'Red', 'EX2+', 'EX2+', '', '70094.00', '', '72594.00', 'ex2plus_banner.png'),
(18, 'Yellow', 'EX2+', 'EX2+', '', '70094.00', '', '72594.00', 'ex2plus_banner.png'),
(19, 'Blue', 'EX2+', 'EX2+', '', '70094.00', '', '72594.00', 'ex2plus_banner.png'),
(20, 'Grey', 'EX3', 'EX3', '', '66594.00', '', '69094.00', 'ex3_banner.png'),
(21, 'Black', 'EX3', 'EX3', '', '66594.00', '', '69094.00', 'ex3_banner.png'),
(22, 'Red', 'EX3', 'EX3', '', '66594.00', '', '69094.00', 'ex3_banner.png'),
(23, 'Blue', 'EX3', 'EX3', '', '66594.00', '', '69094.00', 'ex3_banner.png'),
(24, 'White', 'Sparkle', 'SPARKLE', '', '74532.00', '', '77032.00', 'sparkle_banner.png'),
(25, 'Silver', 'Sparkle', 'SPARKLE', '', '74532.00', '', '77032.00', 'sparkle_banner.png'),
(26, 'Black', 'Sparkle', 'SPARKLE', '', '74532.00', '', '77032.00', 'sparkle_banner.png'),
(27, 'White', 'Mine', 'MINE', '', '109999.00', '', '111999.00', 'mine_banner.png'),
(28, 'Silver', 'Mine', 'MINE', '', '109999.00', '', '111999.00', 'mine_banner.png'),
(29, 'Red', 'Mine', 'MINE', '', '109999.00', '', '111999.00', 'mine_banner.png'),
(30, 'Black', 'Mine', 'MINE', '', '109999.00', '', '111999.00', 'mine_banner.png'),
(31, 'Yellow', 'Luster', 'LUSTER', '', '145000.00', '', '148000.00', 'luster_banner.png'),
(32, 'Green', 'Luster', 'LUSTER', '', '145000.00', '', '148000.00', 'luster_banner.png'),
(33, 'Red', 'EX3+', 'EX3+', '', '68094.00', '', '70594.00', 'ex3plus_banner.png'),
(34, 'Blue', 'EX3+', 'EX3+', '', '68094.00', '', '70594.00', 'ex3plus_banner.png'),
(35, 'Orange', 'EX3+', 'EX3+', '', '68094.00', '', '70594.00', 'ex3plus_banner.png'),
(36, 'Grey', 'EX3+', 'EX3+', '', '68094.00', '', '70594.00', 'ex3plus_banner.png'),
(37, 'Blue', 'HELTER', 'HELTER', '', '160000.00', '', '164000.00', 'helter_banner.png'),
(38, 'Red', 'HELTER', 'HELTER', '', '160000.00', '', '164000.00', 'helter_banner.png'),
(39, 'Skyblue', 'HELTER', 'HELTER', '', '160000.00', '', '164000.00', 'helter_banner.png'),
(40, 'Yellow', 'HELTER', 'HELTER', '', '160000.00', '', '164000.00', 'helter_banner.png'),
(41, 'Black', 'SPARKLE(DB)', 'SPARKLE(DB)', '', '104532.00', '', '107032.00', 'sparkledb_banner.png'),
(42, 'Blue', 'SPARKLE(DB)', 'SPARKLE(DB)', '', '104532.00', '', '107032.00', 'sparkledb_banner.png'),
(43, 'Red', 'SPARKLE(DB)', 'SPARKLE(DB)', '', '104532.00', '', '107032.00', 'sparkledb_banner.png'),
(44, 'White', 'SPARKLE(DB)', 'SPARKLE(DB)', '', '104532.00', '', '107032.00', 'sparkledb_banner.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_sale_master`
--
ALTER TABLE `customer_sale_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graph`
--
ALTER TABLE `graph`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications_entry`
--
ALTER TABLE `notifications_entry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `po`
--
ALTER TABLE `po`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replace_sparepart`
--
ALTER TABLE `replace_sparepart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_master`
--
ALTER TABLE `user_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `varients`
--
ALTER TABLE `varients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `customer_sale_master`
--
ALTER TABLE `customer_sale_master`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `graph`
--
ALTER TABLE `graph`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notifications_entry`
--
ALTER TABLE `notifications_entry`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `po`
--
ALTER TABLE `po`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `replace_sparepart`
--
ALTER TABLE `replace_sparepart`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_master`
--
ALTER TABLE `user_master`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `varients`
--
ALTER TABLE `varients`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
