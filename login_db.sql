-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 01:09 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `batchmanage`
--

CREATE TABLE `batchmanage` (
  `bid` int(10) NOT NULL,
  `coursename` varchar(50) NOT NULL,
  `startingdate` date NOT NULL,
  `coursefee` float(10,2) NOT NULL,
  `timeduration` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batchmanage`
--

INSERT INTO `batchmanage` (`bid`, `coursename`, `startingdate`, `coursefee`, `timeduration`) VALUES
(1, 'PWAD-54', '2022-11-12', 10001.00, '8AM-12AM'),
(3, 'JEE R-101', '2022-11-01', 25000.00, '1pm - 3 pm'),
(4, 'PWAD-53', '2022-11-01', 20000.00, '9AM-1AM');

-- --------------------------------------------------------

--
-- Table structure for table `collectionfee`
--

CREATE TABLE `collectionfee` (
  `collid` int(15) NOT NULL,
  `sid` int(10) NOT NULL,
  `colldate` date NOT NULL,
  `collamount` float(10,2) NOT NULL,
  `collnote` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collectionfee`
--

INSERT INTO `collectionfee` (`collid`, `sid`, `colldate`, `collamount`, `collnote`) VALUES
(1, 4, '2022-11-08', 5000.00, 'yes take'),
(2, 16, '2022-11-11', 15000.00, 'yes take'),
(3, 16, '2022-11-11', 15000.00, 'yes take'),
(4, 4, '2022-11-10', 5000.00, 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `Id_number` int(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `emailadd` varchar(50) NOT NULL,
  `phoneno` int(15) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Id_number`, `firstname`, `lastname`, `emailadd`, `phoneno`, `address`) VALUES
(1, 'Ruhul ', 'Amin ', 'ruhul.gub@gmail.com', 1916095334, 'mirpur, Dhaka '),
(2, 'Ruhul ', 'Ruha', 'superadmin@acculance.com', 1916095334, 'Dhaka Mirpur'),
(3, '', '', '', 0, ''),
(4, '', '', '', 0, ''),
(5, '', '', '', 0, ''),
(6, '', '', '', 0, ''),
(7, '', '', '', 0, ''),
(8, '', '', '', 0, ''),
(9, '', '', '', 0, ''),
(10, '', '', '', 0, ''),
(11, '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(10) NOT NULL,
  `bid` int(40) NOT NULL,
  `studentname` varchar(50) NOT NULL,
  `stdcontact` varchar(25) NOT NULL,
  `stdmail` varchar(60) NOT NULL,
  `stdimage` varchar(60) NOT NULL,
  `stdaddress` varchar(200) NOT NULL,
  `totalfee` float(10,2) NOT NULL,
  `collectedfee` float(10,2) NOT NULL,
  `dueamount` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `bid`, `studentname`, `stdcontact`, `stdmail`, `stdimage`, `stdaddress`, `totalfee`, `collectedfee`, `dueamount`) VALUES
(4, 1, 'Ruhul Amin badol', '01916095334', 'ruhul.gub@gmail.com', '', 'sewrapara', 25000.00, 5000.00, 20000.00),
(7, 1, 'billal', '01915352564564', 'billal@gmail.com', '', 'mirpur2', 0.00, 0.00, 0.00),
(14, 1, 'Bilkis', '019156546664', 'bellal@gmail.com', '', 'mirpur 1', 10001.00, 0.00, 10001.00),
(15, 4, 'Amin', '01916095334', 'ruhul.gub@gmail.com', '', 'mirpur10', 20000.00, 0.00, 20000.00),
(16, 4, 'imran', '0191565466', 'ruhul.gub@gmail.com', '', 'palton ', 20000.00, 0.00, 20000.00);

-- --------------------------------------------------------

--
-- Table structure for table `userpanel`
--

CREATE TABLE `userpanel` (
  `adminname` varchar(50) NOT NULL,
  `adminpassword` varchar(50) NOT NULL,
  `adminemail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userpanel`
--

INSERT INTO `userpanel` (`adminname`, `adminpassword`, `adminemail`) VALUES
('admin ', 'ruhul', 'ruhul.gub@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batchmanage`
--
ALTER TABLE `batchmanage`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `collectionfee`
--
ALTER TABLE `collectionfee`
  ADD PRIMARY KEY (`collid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`Id_number`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `bid` (`bid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batchmanage`
--
ALTER TABLE `batchmanage`
  MODIFY `bid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `collectionfee`
--
ALTER TABLE `collectionfee`
  MODIFY `collid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `Id_number` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collectionfee`
--
ALTER TABLE `collectionfee`
  ADD CONSTRAINT `collectionfee_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `student` (`sid`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`bid`) REFERENCES `batchmanage` (`bid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
