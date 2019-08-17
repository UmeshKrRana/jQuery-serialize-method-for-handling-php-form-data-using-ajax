-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2019 at 10:00 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpajaxdemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zip_code` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `first_name`, `last_name`, `email`, `password`, `address`, `city`, `state`, `zip_code`) VALUES
(1, 'Umesh', 'Rana', 'umesh@test.com', '12345', 'Sohna Road', 'Gurgaon', 'Haryana', 122018),
(7, 'Prawin', 'Kandulna', 'prawin@test.com', '123456', 'Ranchi', 'Ranchi', 'Jharkhand', 430010),
(8, 'Saurav', 'Verma', 'saurav@test.com', '123456', 'Ranchi', 'Ranchi', 'Jharkhand', 430010),
(9, 'Chetan', 'Yadav', 'chetan@test.com', '123456', 'Ranchi', 'Ranchi', 'Jharkhand', 430010),
(10, 'Pankaj', 'Mishra', 'pankaj@test.com', '123456', 'Ranchi', 'Ranchi', 'Jharkhand', 430010),
(11, 'Sumit', 'Mishra', 'sumit@test.com', '123456', 'Ranchi', 'Ranchi', 'Jharkhand', 430010),
(12, 'Chiky', 'Verma', 'chiky@test.com', '123456', 'Ranchi', 'Ranchi', 'Jharkhand', 430010);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
