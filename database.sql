-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 08:37 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_student`
--

CREATE TABLE `add_student` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_student`
--

INSERT INTO `add_student` (`id`, `firstname`, `lastname`, `email`, `gender`, `fathername`, `birthdate`, `mobile`, `city`, `nationality`, `district`, `state`, `image`) VALUES
(5, 'Tushadri ', 'Boruah', 'tushadriboruah16@gmail.com', 'female', 'keshab boruah', '2021-01-04', '9101920310', 'Guwahati', 'Indian', 'Nagaon', 'Assam', 'Array'),
(6, 'Tushadri ', 'Boruah', 'tushadriboruah16@gmail.com', 'female', 'keshab boruah', '2021-01-04', '9101920310', 'Guwahati', 'Indian', 'Nagaon', 'Assam', 'Array'),
(7, 'Rajib', 'Borah', 'rajib@gmail.com', 'male', 'Pankaj Borah', '2021-01-04', '9101920310', 'Guwahati', 'Indian', 'Guwahati', 'Assam', 'Array'),
(8, 'Rajib', 'Borah', 'rajib@gmail.com', 'male', 'Pankaj Borah', '2021-01-04', '9101920310', 'Guwahati', 'Indian', 'Guwahati', 'Assam', 'Array'),
(9, 'Rajib', 'Borah', 'rajib@gmail.com', 'male', 'Pankaj Borah', '2021-01-04', '9101920310', 'Guwahati', 'Indian', 'Guwahati', 'Assam', 'Array'),
(10, 'Tuilip', 'xxyy', 'tuilip@gmail.com', 'female', 'john', '2021-02-01', '9101920310', 'Guwahati', 'Indian', 'Guwahati', 'Assam', 'Array'),
(11, 'Tuilip', 'xxyy', 'tuilip@gmail.com', 'female', 'john', '2021-02-01', '9101920310', 'Guwahati', 'Indian', 'Guwahati', 'Assam', 'Array'),
(12, 'Tuilip', 'xxyy', 'tuilip@gmail.com', 'female', 'john', '2021-02-01', '9101920310', 'Guwahati', 'Indian', 'Guwahati', 'Assam', 'Array'),
(13, 'Tuilip', 'Borah', 'tushadriboruah16@gmail.com', 'female', 'xgfk', '2009-05-06', '9101920310', 'Guwahati', 'Indian', 'Guwahati', 'Assam', 'Array');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `fname`, `email`, `password`, `cpassword`) VALUES
(4, 'tush', 'tushadriboruah1@gmail.com', '$2y$10$Ava9EHUMrER9p98jM8sC/.3mhrGGo18JcYlOkxOhr99R7KPkBUI0y', '$2y$10$phdzCr/TzIv.wFYnQqdMweyoug01ZCVOH8XcCVxAu2t6cm0p97V36'),
(5, 'Tuilip', 'tuilip@gmail.com', '$2y$10$DxgfKXifMJW.oY7ezIyr4.yTwIq35BbabpX1FS.bqOtuU7uPEolBS', '$2y$10$OH/ANZTGAB7iDUs.8cKYZO52DeDVidz4AL27Hxs6CRKDjtodTDg1q'),
(6, 'Rajib', 'rajib@gmail.com', '$2y$10$UZEkmNdMtn1nKBAagXnC9eaD4duEgdLVGLOvrSpsaJ3iF8KpH1uIm', '$2y$10$ulZOAgmEIfEm9wNrzAWOGOPMACeqPRYw9MYRi3.o23mx/2U2am812'),
(7, 'prashi', 'prashi@gmail.com', '$2y$10$Rw20MPlMJKJfRT8rrSiBKugNEZem534OwNbsqDoiZR9EdyWlrcNya', '$2y$10$b20HmLvZPGHJEbczjvPVYuD.G1H8gvsF4b/F3jh63EjpVwws5Hi42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_student`
--
ALTER TABLE `add_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_student`
--
ALTER TABLE `add_student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
