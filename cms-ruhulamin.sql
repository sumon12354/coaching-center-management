-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 06:02 AM
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
-- Database: `cms-ruhulamin`
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
(4, 'PWAD-53', '2022-11-01', 20000.00, '9AM-1AM'),
(5, 'pwad-53', '2022-11-20', 15000.00, '9AM-1PM'),
(6, 'Auto Cad ', '2022-11-20', 20000.00, '1PM-4PM'),
(7, 'Oracle 11g', '2022-12-01', 20000.00, '6pm - 8pm');

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
(2, 20, '2022-12-05', 1000.00, 'Cash'),
(3, 20, '2022-12-05', 1000.00, 'Cash'),
(4, 24, '2022-12-05', 21000.00, 'Cash');

-- --------------------------------------------------------

--
-- Stand-in structure for view `collectionview`
-- (See below for the actual view)
--
CREATE TABLE `collectionview` (
`collid` int(15)
,`studentname` varchar(50)
,`colldate` date
,`collamount` float(10,2)
,`collnote` varchar(50)
);

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
(12, '', '', '', 0, ''),
(13, '', '', '', 0, '');

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
(19, 6, 'hamid hasan', '01916095334', 'ruhul.gub@gmail.com', '', 'uttara-12 sector ', 20000.00, 23000.00, -3000.00),
(20, 4, 'Billal hhhh', '01916095334', 'billal@gmail.com', '', 'Mirpur-2no ', 20000.00, 17000.00, 3000.00),
(22, 6, 'imran ', '01987878795', 'imran@gmail.com', '', 'deowanbug ', 20000.00, 16500.00, 0.00),
(23, 7, 'Farhana', '01548757', 'soyeburrahman80@gmail.com', '', 'Khalishpur, Khulna.', 20000.00, 0.00, 20000.00),
(24, 4, 'Farhana Ruhul', '01918340047', 'soyebur@gmail.com', 'upload/1670306607.', 'House-5 3-A, Road-2, Block-B, Aftab Nagor,', 20000.00, 21000.00, -1000.00),
(25, 6, 'Farhana Ruhul', '01918340047', 'soyebur@gmail.com', 'upload/1670306713.', 'House-5 3-A, Road-2, Block-B, Aftab Nagor,', 20000.00, 0.00, 20000.00),
(26, 3, 'Farhana Ruhul', '01918340047', 'soyebur@gmail.com', 'upload/1670307251.jpg', 'House-5 3-A, Road-2, Block-B, Aftab Nagor,', 25000.00, 0.00, 25000.00);

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

-- --------------------------------------------------------

--
-- Structure for view `collectionview`
--
DROP TABLE IF EXISTS `collectionview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `collectionview`  AS SELECT `collectionfee`.`collid` AS `collid`, `student`.`studentname` AS `studentname`, `collectionfee`.`colldate` AS `colldate`, `collectionfee`.`collamount` AS `collamount`, `collectionfee`.`collnote` AS `collnote` FROM (`collectionfee` join `student`) WHERE `collectionfee`.`sid` = `student`.`sid``sid`  ;

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
  ADD PRIMARY KEY (`collid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`Id_number`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batchmanage`
--
ALTER TABLE `batchmanage`
  MODIFY `bid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `collectionfee`
--
ALTER TABLE `collectionfee`
  MODIFY `collid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `Id_number` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
