-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2016 at 07:53 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insert_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `insert_record`
--

CREATE TABLE `insert_record` (
  `name` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insert_record`
--

INSERT INTO `insert_record` (`name`, `city`) VALUES
('anu', 'a''bad'),
('name', 'city'),
('uname', 'ctxt'),
('', ''),
('', ''),
('', ''),
('Anukul', 'Gandhinaga'),
('pinal', 'Gandhinaga'),
('', ''),
('rahul', 'ahmedabad'),
('dj', 'Ahme'),
('', ''),
('vishal', 'Ahmeda'),
('Pinal', 'Ah');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(50) NOT NULL,
  `r_username` varchar(50) NOT NULL,
  `r_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_username`, `r_password`) VALUES
(1, 'Anukul', 'aaff'),
(2, 'pinal', 'aaff');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `r_id` int(150) NOT NULL,
  `r_name` varchar(150) NOT NULL,
  `r_address` varchar(300) NOT NULL,
  `r_gender` varchar(20) NOT NULL,
  `r_DOB` varchar(20) NOT NULL,
  `r_phono_no` varchar(10) NOT NULL,
  `r_email` varchar(20) NOT NULL,
  `r_category` varchar(50) NOT NULL,
  `r_city` varchar(60) NOT NULL,
  `r_hobbies` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`r_id`, `r_name`, `r_address`, `r_gender`, `r_DOB`, `r_phono_no`, `r_email`, `r_category`, `r_city`, `r_hobbies`) VALUES
(1, 'Anukul', 'block no 496/2980 G.H.B,new bapunager,Ahmedabad', 'male', '2016-08-03', '2147483647', 'anukuklmehta999@gmai', 'Ahmedabad', 'Ahmedabad', ''),
(2, 'anukul', 'abc', 'male', '2016-08-02', '1234567890', 'anukuklmehta999@gmai', 'Ahmedabad', 'Ahmedabad', ''),
(3, 'anukul', 'abc', 'male', '2016-08-02', '1234567890', 'anukuklmehta999@gmai', '', 'Ahmedabad', ''),
(4, 'Anukul', 'aaa', 'male', '2016-08-10', '2147483647', 'anukuklmehta999@gmai', 'OPEN', 'Ahmedabad', ''),
(5, 'a', 'aa', 'male', '2016-08-02', '2147483647', 'anukuklmehta999@gmai', 'OPEN', 'Ahmedabad', ''),
(6, 'Anukul', 'aaa', 'male', '2016-08-02', '9724101463', 'anukuklmehta999@gmai', 'OPEN', 'Ahmedabad', ''),
(7, 'anukul', 'qqqq 26', 'male', '2016-08-09', '7048209108', 'anukuklmehta999@gmai', 'OPEN', 'Ahmedabad', 'Singing'),
(8, 'anukul', 'qqqq 26', 'male', '2016-08-09', '7048209108', 'anukuklmehta999@gmai', 'OPEN', 'Ahmedabad', 'Singing'),
(9, 'pinal', 'in', 'female', '1998-09-09', '1234567890', 'anukuklmehta999@gmai', 'Open', 'Ahmedabad', 'Singing'),
(10, 'Anukul', 'asdfg', 'Male', '2016-08-01', '1234567777', 'anukuklmehta999@gmai', 'Open', 'Ahmedabad', 'Playing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `r_id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
