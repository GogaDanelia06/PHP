-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 01:02 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vpmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Goga', 'DionSki', 599999999, 'tester1@gmail.com', '677bef934e9c3cbba646794e824d920e', '2019-07-05 01:38:23');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `ID` int(11) NOT NULL,
  `VehicleCat` varchar(120) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`ID`, `VehicleCat`, `CreationDate`) VALUES
(1, 'Slalom', '2019-07-05 07:06:50'),
(2, 'Long Turn', '2019-07-05 07:07:09'),
(4, 'SkiCross', '2019-07-07 07:31:17'),
(5, 'Snowboard', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblvehicle`
--

CREATE TABLE `tblvehicle` (
  `ID` int(10) NOT NULL,
  `ParticipantNumber` varchar(120) NOT NULL,
  `SkiCategory` varchar(120) NOT NULL,
  `SkierCountry` date NOT NULL,
  `RegistrationNumber` varchar(120) NOT NULL,
  `ParticipantName` varchar(120) NOT NULL,
  `ParticipantContactNumber` bigint(10) NOT NULL,
  `InTime` date NOT NULL,
  `OutTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ParticipantTaxes` varchar(120) NOT NULL,
  `Status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblvehicle`
--

INSERT INTO `tblvehicle` (`ID`, `ParticipantNumber`, `SkiCategory`, `SkierCountry`, `RegistrationNumber`, `ParticipantName`, `ParticipantContactNumber`, `InTime`, `OutTime`, `ParticipantTaxes`, `Status`) VALUES
(1, '521796069', 'Two Wheeler Category', '0000-00-00', 'DEL-678787', 'Rakesh Chandra', 8956232528, '2019-07-05', '2019-07-07 07:09:36', '50 Rs', 'Out'),
(2, '469052796', 'Two Wheeler Vehicle', '0000-00-00', 'DEL-895623', 'Pankaj', 8989898989, '2019-07-06', '2019-07-07 07:09:33', '35 Rs.', 'Out'),
(3, '734465023', 'Four Wheeler Vehicle', '0000-00-00', 'DEL-562389', 'Avinash', 7845123697, '2019-07-06', '2019-07-06 04:59:36', '50 Rs.', 'Out'),
(4, '432190880', 'Two Wheeler Vehicle', '0000-00-00', 'DEL-451236', 'Harish', 2132654447, '2019-07-06', '2019-07-06 05:53:35', '35 Rs.', 'Out'),
(5, '323009894', 'Two Wheeler Vehicle', '0000-00-00', 'DEL-55776', 'Abhi', 4654654654, '2019-07-06', '2019-07-06 04:59:24', '', ''),
(6, '522578915', 'Two Wheeler Vehicle', '0000-00-00', 'DEL-895623', 'Mahesh', 7978999879, '2019-07-06', '2021-06-02 07:18:30', '', ''),
(7, '917725207', 'Two Wheeler Vehicle', '0000-00-00', 'DL 1c RT2323', 'ABC', 1234567890, '2019-07-07', '2021-06-02 07:18:30', '', ''),
(8, '486258836', 'Two Wheeler Vehicle', '0000-00-00', 'DL 1C TY2322', 'Test User', 1234567890, '2019-07-07', '2019-07-07 07:32:42', '40', 'Out'),
(1, '521796069', 'Two Wheeler Category', '0000-00-00', 'DEL-678787', 'Rakesh Chandra', 8956232528, '2019-07-05', '2019-07-07 07:09:36', '50 Rs', 'Out'),
(2, '469052796', 'Two Wheeler Vehicle', '0000-00-00', 'DEL-895623', 'Pankaj', 8989898989, '2019-07-06', '2019-07-07 07:09:33', '35 Rs.', 'Out'),
(3, '734465023', 'Four Wheeler Vehicle', '0000-00-00', 'DEL-562389', 'Avinash', 7845123697, '2019-07-06', '2019-07-06 04:59:36', '50 Rs.', 'Out'),
(4, '432190880', 'Two Wheeler Vehicle', '0000-00-00', 'DEL-451236', 'Harish', 2132654447, '2019-07-06', '2019-07-06 05:53:35', '35 Rs.', 'Out'),
(5, '323009894', 'Two Wheeler Vehicle', '0000-00-00', 'DEL-55776', 'Abhi', 4654654654, '2019-07-06', '2019-07-06 04:59:24', '', ''),
(6, '522578915', 'Two Wheeler Vehicle', '0000-00-00', 'DEL-895623', 'Mahesh', 7978999879, '2019-07-06', '2021-06-02 08:43:22', '', ''),
(7, '917725207', 'Two Wheeler Vehicle', '0000-00-00', 'DL 1c RT2323', 'ABC', 1234567890, '2019-07-07', '2021-06-02 08:43:22', '', ''),
(8, '486258836', 'Two Wheeler Vehicle', '0000-00-00', 'DL 1C TY2322', 'Test User', 1234567890, '2019-07-07', '2019-07-07 07:32:42', '40', 'Out'),
(1, '521796069', 'Slalom', '0000-00-00', 'DEL-678787', 'Rakesh Chandra', 8956232528, '2021-07-05', '2021-07-07 07:09:36', '$3500', 'Out'),
(2, '469052796', 'Slalom', '0000-00-00', 'DEL-895623', 'Neuer', 8989898989, '2021-07-06', '2021-07-07 07:09:33', '$3500.', 'IN'),
(3, '734465023', 'LongTurn', '0000-00-00', 'DEL-562389', 'Avinash', 7845123697, '2021-07-06', '2021-07-06 04:59:36', '$3500.', 'IN'),
(4, '432190880', 'SkiCross', '0000-00-00', 'DEL-451236', 'John', 2132654447, '2019-07-06', '2019-07-06 05:53:35', '$3500.', 'IN'),
(5, '323009894', 'SkiCross', '0000-00-00', 'DEL-55776', 'Michl', 4654654654, '2020-07-06', '2020-07-06 04:59:24', '$3500', 'IN'),
(6, '522578915', 'LongTurn', '0000-00-00', 'DEL-895623', 'Mahesh', 7978999879, '2021-07-06', '2021-06-02 08:50:05', '$3500', 'OUT'),
(7, '917725207', 'Slalom', '0000-00-00', 'DL 1c RT2323', 'Piero', 1234567890, '2021-07-07', '2021-06-02 08:50:05', '$3500', 'IN'),
(8, '486258836', 'Slalom', '0000-00-00', 'DL 1C TY2322', 'Jack', 1234567890, '2019-07-07', '2019-07-07 07:32:42', '$3500', 'Out');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
