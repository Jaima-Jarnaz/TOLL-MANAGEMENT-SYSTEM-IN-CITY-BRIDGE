-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2020 at 12:01 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toll_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_account`
--

CREATE TABLE `tb_account` (
  `account_no` int(30) NOT NULL,
  `class` varchar(30) NOT NULL,
  `payment` int(20) NOT NULL,
  `due` int(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_account`
--

INSERT INTO `tb_account` (`account_no`, `class`, `payment`, `due`, `date`) VALUES
(1503, 'class-3', 100, 0, '2020-03-22'),
(1502, 'class-1', 50, 0, '2020-03-22'),
(1502, 'class-1', 50, 0, '2020-03-22'),
(1502, 'class-1', 50, 0, '2020-03-22'),
(1502, 'class-1', 50, 0, '2020-03-22'),
(1502, 'class-1', 50, 0, '2020-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_catagory`
--

CREATE TABLE `tb_catagory` (
  `class` varchar(30) NOT NULL,
  `vehicle` varchar(20) NOT NULL,
  `tk` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_catagory`
--

INSERT INTO `tb_catagory` (`class`, `vehicle`, `tk`) VALUES
('class-1', 'Cars', 50),
('class-2', 'Small Bus', 70),
('class-3', 'Large Bus', 100),
('class-4', 'Small Truck', 120),
('class-5', 'Medium Truck', 150),
('class-6', 'Large Truck', 170),
('class-7', 'Trailers', 200),
('class-8', 'Taxi', 80);

-- --------------------------------------------------------

--
-- Table structure for table `tb_local`
--

CREATE TABLE `tb_local` (
  `class` varchar(30) NOT NULL,
  `amount` int(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_local`
--

INSERT INTO `tb_local` (`class`, `amount`, `date`) VALUES
('class-2', 70, '2020-03-21'),
('class-2', 70, '2020-03-21'),
('class-2', 70, '2020-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_new_account_info`
--

CREATE TABLE `tb_new_account_info` (
  `name` text NOT NULL,
  `address` text NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `bank_account_no` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_new_account_info`
--

INSERT INTO `tb_new_account_info` (`name`, `address`, `phone`, `email`, `bank_account_no`) VALUES
('Jaima', 'Tongi', '01990', 'jaima.jarnaz1234@gmail.com', 1502);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
