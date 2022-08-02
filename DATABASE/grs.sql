-- phpMyAdmin SQL Dump
-- version 5.0.4deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2022 at 04:48 PM
-- Server version: 10.5.15-MariaDB-0+deb11u1
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grs`
--

-- --------------------------------------------------------

--
-- Table structure for table `grs_admin`
--

CREATE TABLE `grs_admin` (
  `adminid` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `grs_cust`
--

CREATE TABLE `grs_cust` (
  `cust_id` varchar(20) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `cust_image` varchar(200) NOT NULL,
  `adminid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `grs_product`
--

CREATE TABLE `grs_product` (
  `prd_name` varchar(100) NOT NULL,
  `prd_qun` int(11) NOT NULL,
  `prd_unit` varchar(50) NOT NULL,
  `prd_price` int(11) NOT NULL,
  `adminid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `grs_purchase`
--

CREATE TABLE `grs_purchase` (
  `cust_id` varchar(20) NOT NULL,
  `prd_name` varchar(100) NOT NULL,
  `prd_qun` int(11) NOT NULL,
  `prd_unit` varchar(10) NOT NULL,
  `pur_price` int(11) NOT NULL,
  `ispay` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grs_admin`
--
ALTER TABLE `grs_admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `grs_cust`
--
ALTER TABLE `grs_cust`
  ADD PRIMARY KEY (`cust_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
