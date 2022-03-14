-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2021 at 07:58 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `20136713`
--

-- --------------------------------------------------------

--
-- Table structure for table `Card_Data`
--

CREATE TABLE `Card_Data` (
  `purchase_num` int(60) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Card_Number` varchar(16) NOT NULL,
  `CVV` varchar(5) NOT NULL,
  `Street_Address` varchar(60) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Local_Cinema` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Card_Data`
--

INSERT INTO `Card_Data` (`purchase_num`, `fullname`, `email`, `Card_Number`, `CVV`, `Street_Address`, `postcode`, `DOB`, `Phone`, `Local_Cinema`) VALUES
(1, 'test test', 'test@test.com', '1234567890123456', '787', '17 Broad Street', 'test123', '2000-01-01', '44123456789', 'Birmingham');

-- --------------------------------------------------------

--
-- Table structure for table `Customer_Data`
--

CREATE TABLE `Customer_Data` (
  `ID` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `First_Name` varchar(20) NOT NULL,
  `Last_Name` varchar(20) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Phone_Number` varchar(30) NOT NULL,
  `LocalCinema` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Customer_Data`
--

INSERT INTO `Customer_Data` (`ID`, `user_id`, `Username`, `Password`, `First_Name`, `Last_Name`, `Date_of_Birth`, `Email`, `Phone_Number`, `LocalCinema`) VALUES
(15, 55885901784974, 'admin', 'one', 'fervfer', 'Vigneswaran', '2000-12-16', 'bkjbkjbkjbk', '7674674746767868', 'Birmingham'),
(16, 1885, 'admin', 'one', 'Gokulan', 'Vigneswaran', '2000-12-16', 'gokulan1612@gmail.com', '07384416081', 'hgjfgj'),
(17, 706307712, 'admin', 'one', 'Gokulan', 'Vigneswaran', '2000-12-16', 'gokulan1612@gmail.com', '07384416081', 'hgjfgj'),
(18, 2991, 'admin', 'one', 'Gokulan', 'Vigneswaran', '2000-12-16', 'gokulan1612@gmail.com', '07384416081', 'hgjfgj'),
(19, 39422069938, 'admin', 'one', 'Gokulan', 'Vigneswaran', '2000-12-16', 'gokulan1612@gmail.com', '07384416081', 'fdvfdv'),
(20, 123841, 'admin', 'one', 'Gokulan', 'Vigneswaran', '2000-12-16', 'gokulan1612@gmail.com', '07384416081', 'fdvfdv');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Dune', 'Dune.jpeg', 20.00),
(2, 'SpiderMan', 'nowayhome.jpeg', 20.00),
(3, 'Elf', 'elf.jpeg', 20.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Card_Data`
--
ALTER TABLE `Card_Data`
  ADD PRIMARY KEY (`purchase_num`);

--
-- Indexes for table `Customer_Data`
--
ALTER TABLE `Customer_Data`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Card_Data`
--
ALTER TABLE `Card_Data`
  MODIFY `purchase_num` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Customer_Data`
--
ALTER TABLE `Customer_Data`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
