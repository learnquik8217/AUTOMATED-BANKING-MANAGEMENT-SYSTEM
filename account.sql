-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2019 at 01:23 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `pin` int(200) NOT NULL,
  `cardno` varchar(255) NOT NULL,
  `balance` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `accounttype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`name`, `address`, `pin`, `cardno`, `balance`, `phone`, `accounttype`) VALUES
('nitya', 'patna', 12345, '6574170947927729', '600', '079876554', 'credit'),
('ujjawal', 'gaya', 123456, '2825299146791446', '500', '098123456', 'credit'),
('golu', 'delhi', 8217, '2668687733553695', '5450', '0987654433221', 'credit'),
('prem kumar', 'janakpur,gaya', 2345, '9377877071805305', '900', '09988776655', 'fixed-deposit'),
('ujjawal', 'katihar', 3456, '7816037728696236', '90550', '1234567890', 'credit'),
('abhi', 'gaya', 12345, '6844927711999372', '500', '7004144260', 'fixed-deposit'),
('Mahima jaiswal', 'Bhagalpur', 123898, '2754659705814795', '9999999999', '7484993050', 'fixed-deposit'),
('Priti Suman', 'Biharsharif', 8217, '9323772865393430', '1300', '7678109728', 'credit'),
('navneet', 'gaya', 12345, '2209920974690129', '500', '85673523341124', 'fixed-deposit'),
('ajay kumar', 'janakpur', 5678, '8944316770910197', '1500', '98765544433', 'fixed-deposit'),
('vibhav sir', 'varanasi', 8217, '6357113356822093', '1500', '98765554332', 'fixed-deposit'),
('abhishek', 'patna', 1234, '4242086564385381', '500', '987765544443', 'credit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD UNIQUE KEY `phone` (`phone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
