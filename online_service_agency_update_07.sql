-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2022 at 10:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_service_agency`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` tinyint(10) NOT NULL,
  `aemail` varchar(30) DEFAULT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `aemail`, `password`) VALUES
(1, 'admin@gmail.com', '123456'),
(2, 'admin@gmail.com', '123456'),
(4, 'adminlogin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` tinyint(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `name`, `email`, `message`) VALUES
(1, 'kazi Mahbub Jamil', 'dsfsf@gmail.com', 'asdada');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `location` varchar(15) NOT NULL,
  `address` varchar(60) NOT NULL,
  `number` varchar(11) NOT NULL,
  `password` varchar(8) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `username`, `location`, `address`, `number`, `password`, `email`) VALUES
(1, 'adib', NULL, 'Gulsan', '23, Jasimuddin Road', '12345678901', 'adib1234', 'adib@gmail.com'),
(2, 'jamil', 'kmjm', 'gulsan', '12, kHan road', '03929203', '123456', 'km@gmail.com'),
(3, 'Sadman', 'adib.sadman@northsou', 'dhandmondi', 'dfgdfgdfgfdg', '01299840845', '12345678', 'dsfsf@gmail.com'),
(5, 'Sadman', 'vxd', 'dhandmondi', 'dfgdfgdfgfdg', '01299840845', '12345678', 'd3223sfsf@gmail.com'),
(6, 'Sadman', 'sadman123', 'mirpur', 'dfgdfgdfgfdg', '01299840845', '12345678', 'fsf@gmail.com'),
(7, 'dfs', 'dsfhkjad', 'dhandmondi', 'kjfsgkj', '01299840845', '12345678', 'anik@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `home_packages`
--

CREATE TABLE `home_packages` (
  `hpackages_id` int(11) NOT NULL,
  `hpackages_name` varchar(50) NOT NULL,
  `hmonth` varchar(12) NOT NULL,
  `hprice` varchar(20) NOT NULL,
  `hdetails` text NOT NULL,
  `hdetails1` text NOT NULL,
  `hdetails2` text NOT NULL,
  `hsaving` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_packages`
--

INSERT INTO `home_packages` (`hpackages_id`, `hpackages_name`, `hmonth`, `hprice`, `hdetails`, `hdetails1`, `hdetails2`, `hsaving`) VALUES
(1, 'AC Repairing Service', '1-2', '2800', '7 Days service warranty\r\n\r\n', 'Only service charge', 'Transportation cost', 100),
(3, 'Car Repairing', '1-2', '4000', 'Transportation cost', 'service cost', 'labor cost', 200),
(4, 'Ac cleaning', '1-2', '3500', 'Transportation cost', 'service cost', 'labor cost', 200),
(5, 'Electronic Repair', '1-2', '400', 'Transportation cost', 'service cost', 'labor cost', 120),
(6, 'Home Cleaning', '1', '450', 'Transportation cost', 'service cost', 'labor cost', 50);

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` int(20) NOT NULL,
  `instruction` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(20) NOT NULL,
  `package_name` varchar(20) NOT NULL,
  `start_month` varchar(9) NOT NULL,
  `active_month` varchar(9) NOT NULL,
  `price` varchar(6) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `package_id` int(50) NOT NULL,
  `package_name` varchar(30) NOT NULL,
  `start_month` varchar(50) NOT NULL,
  `active_month` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`package_id`, `package_name`, `start_month`, `active_month`, `price`, `details`) VALUES
(2, 'Basic 2', 'February', 'April', '6000', 'AC , Car'),
(3, 'Basic 3', 'February', 'July', '600', 'AC');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(20) NOT NULL,
  `service_name` varchar(25) NOT NULL,
  `location` varchar(10) NOT NULL,
  `details` varchar(200) NOT NULL,
  `price` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `home_packages`
--
ALTER TABLE `home_packages`
  ADD PRIMARY KEY (`hpackages_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `home_packages`
--
ALTER TABLE `home_packages`
  MODIFY `hpackages_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `package_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `package`
--
ALTER TABLE `package`
  ADD CONSTRAINT `package_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `package_ibfk_2` FOREIGN KEY (`package_id`) REFERENCES `order_table` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `service_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `package` (`package_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `order_table` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_ibfk_3` FOREIGN KEY (`service_id`) REFERENCES `cart` (`cart_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
