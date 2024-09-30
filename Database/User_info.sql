-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 30, 2024 at 05:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PharmacyX_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `User_info`
--

CREATE TABLE `User_info` (
  `user_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `profilepic_url` varchar(255) DEFAULT NULL,
  `acc_status` enum('Active','Inactive') DEFAULT 'Active',
  `user_type` enum('Admin','Manager','Customer') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `User_info`
--

INSERT INTO `User_info` (`user_name`, `first_name`, `last_name`, `email`, `phone_no`, `password`, `profilepic_url`, `acc_status`, `user_type`) VALUES
('admin01', 'Moditha', 'Marasingha', 'moditha2003@gmail.com', '0716899444', 'mod123', 'propic3.jpeg', 'Active', 'Admin'),
('manager01', 'Hasindu', 'Sankalpa', 'sam.wilson@pharmacyx.com', '0772245566', 'managerPass02', 'propic4.jpeg', 'Active', 'Manager'),
('manager02', 'Medhani', 'test', 'kate.brown@pharmacyx.com', NULL, 'managerPass03', 'propic2.png', 'Active', 'Manager'),
('test1234', 'Moditha2', 'Marasingha', 'al5323540@gmail.com', NULL, 'moditha1234', NULL, 'Active', 'Customer'),
('user01', 'Kulanya', 'Lisaldi', 'alice.johnson@gmail.com', '1234567891', 'userPass01', 'propic5.jpeg', 'Active', 'Customer'),
('user02', 'Deshan', 'GGD', 'bob.williams@gmail.com', NULL, 'userPass02', 'propic1.jpg', 'Active', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `User_info`
--
ALTER TABLE `User_info`
  ADD PRIMARY KEY (`user_name`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
