-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 03:49 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schooldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `A_id` int(11) NOT NULL,
  `A_name` varchar(20) NOT NULL,
  `A_Pass` varchar(50) NOT NULL,
  `A_Fullname` varchar(25) NOT NULL,
  `A_mail` varchar(50) NOT NULL,
  `A_last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`A_id`, `A_name`, `A_Pass`, `A_Fullname`, `A_mail`, `A_last_login`) VALUES
(1, 'jak', 'jak6699', 'jakleito', 'jak66@gmail.com', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `aimag`
--

CREATE TABLE `aimag` (
  `Id` int(11) NOT NULL,
  `Aimag_Hot` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aimag`
--

INSERT INTO `aimag` (`Id`, `Aimag_Hot`) VALUES
(1, 'Arhangai'),
(2, 'Bayan-Olgii'),
(3, 'Bayanhongor');

-- --------------------------------------------------------

--
-- Table structure for table `bagsh`
--

CREATE TABLE `bagsh` (
  `Bagsh_Id` int(11) NOT NULL,
  `Bagsh_Name` varchar(20) NOT NULL,
  `Bagsh_mail` varchar(50) NOT NULL,
  `Bagsh_utas` int(8) NOT NULL,
  `Bagsh_ajild_orson_jil` datetime NOT NULL,
  `Bagsh_mergejil` int(11) NOT NULL,
  `Bagsh_deleted_status` tinyint(1) NOT NULL DEFAULT 0,
  `about` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bagsh`
--

INSERT INTO `bagsh` (`Bagsh_Id`, `Bagsh_Name`, `Bagsh_mail`, `Bagsh_utas`, `Bagsh_ajild_orson_jil`, `Bagsh_mergejil`, `Bagsh_deleted_status`, `about`) VALUES
(1, 'asdf', 'gg@gmail.com', 1231, '2021-05-11 00:00:00', 10, 0, 'asdfasdf'),
(2, 'zxczx', 'a@gmail.copm', 321412341, '2021-05-18 00:00:00', 10, 0, 'asdfasd'),
(3, 'Gan-Erdene', 'aaa@gmail.com', 1111, '2021-05-18 00:00:00', 11, 0, 'aaa'),
(4, 'test', 'aaa@gmail.com', 112223344, '2021-05-03 00:00:00', 12, 0, 'aa'),
(5, 'tester', 'jak@gmail.com', 1123123123, '2021-05-03 00:00:00', 12, 0, 'asdfasd'),
(6, 'test', 'test@gmail.com', 23214213, '2021-05-11 00:00:00', 11, 0, 'asdfasd'),
(9, 'yoyo', 'yoyo@gmail.com', 321412, '2021-05-11 00:00:00', 10, 0, 'asdfsa'),
(10, 'ganaaa', 'g@g.com', 999999, '2021-05-11 00:00:00', 11, 0, 'asdasf'),
(11, 'gonchigsuren', 'gonchig@gmai.com', 8574961, '2021-05-04 00:00:00', 13, 0, 'uvurhangai'),
(12, 'jak', 'aaa@gmail.com', 99999911, '2021-05-10 00:00:00', 13, 0, 'aaaa'),
(13, 'baynhongor_bagsh', 'baynhongor1@gmail.com', 80777183, '2021-03-02 00:00:00', 13, 0, 'baynhongoriin bagsh 1'),
(14, 'gansuh', 'gansuh@g.com', 2147483647, '2021-06-14 00:00:00', 13, 0, 'asdfasfas');

-- --------------------------------------------------------

--
-- Table structure for table `hutulbur`
--

CREATE TABLE `hutulbur` (
  `Hutulbur_Id` int(11) NOT NULL,
  `HutulburName` varchar(50) NOT NULL,
  `School_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hutulbur`
--

INSERT INTO `hutulbur` (`Hutulbur_Id`, `HutulburName`, `School_Id`) VALUES
(10, 'Мэдээллийн технологи', 10),
(11, 'Аялал жуулчлал', 10),
(12, 'Авто зам, барилга байгууламж ', 10),
(13, 'Хуульч', 20);

-- --------------------------------------------------------

--
-- Table structure for table `mergejil`
--

CREATE TABLE `mergejil` (
  `Mergejil_Id` int(11) NOT NULL,
  `MergejilName` varchar(120) NOT NULL,
  `Hutulbur_Id` int(11) NOT NULL,
  `Mergeshil` varchar(400) NOT NULL,
  `Suraltsah_Time` int(1) NOT NULL DEFAULT 4,
  `SuuriShalgalt` varchar(55) NOT NULL,
  `GadaadHutulbur` varchar(400) NOT NULL,
  `Bosgo_Onoo` int(11) NOT NULL,
  `Surgaltiin_Tulbur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mergejil`
--

INSERT INTO `mergejil` (`Mergejil_Id`, `MergejilName`, `Hutulbur_Id`, `Mergeshil`, `Suraltsah_Time`, `SuuriShalgalt`, `GadaadHutulbur`, `Bosgo_Onoo`, `Surgaltiin_Tulbur`) VALUES
(1, 'компьютер программ хангамж', 10, 'компьютер', 4, 'мат,монгол хэл, физик', '', 480, 2650000),
(2, 'Аялал жуулчлалын инженер', 11, 'Аялал хөтөч', 4, 'Англи хэл, Нийгэм, Монгол хэл', '', 480, 2650000),
(3, 'Барилгын инженер', 12, 'Барилгын инженер, архитектурч', 4, 'Физик, Математик, Монгол хэл', '', 480, 2650000),
(4, 'Хуульч', 13, 'Хуульч, Шүүгч,өмгөөлөгч,нотрат,цагдаа хүчний байгууллага,хуулийн зөвлөгч', 4, 'Нийгэм,Монгол хэл,Англи хэл', '', 500, 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `suurihicheel`
--

CREATE TABLE `suurihicheel` (
  `Id` int(11) NOT NULL,
  `Ner` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tulbur`
--

CREATE TABLE `tulbur` (
  `Id` int(11) NOT NULL,
  `BurtgeliinDugaar` int(11) NOT NULL,
  `TulsunHemjee` int(11) NOT NULL,
  `TulsunUdur` datetime NOT NULL DEFAULT current_timestamp(),
  `UurchlugdsunUdur` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `Tulburiig_yugaar_hiisen_be` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tulbur`
--

INSERT INTO `tulbur` (`Id`, `BurtgeliinDugaar`, `TulsunHemjee`, `TulsunUdur`, `UurchlugdsunUdur`, `Tulburiig_yugaar_hiisen_be`) VALUES
(7, 100, 123, '2021-06-05 21:24:21', NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`A_id`);

--
-- Indexes for table `aimag`
--
ALTER TABLE `aimag`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `bagsh`
--
ALTER TABLE `bagsh`
  ADD PRIMARY KEY (`Bagsh_Id`);

--
-- Indexes for table `hutulbur`
--
ALTER TABLE `hutulbur`
  ADD PRIMARY KEY (`Hutulbur_Id`),
  ADD KEY `School_Id` (`School_Id`);

--
-- Indexes for table `mergejil`
--
ALTER TABLE `mergejil`
  ADD PRIMARY KEY (`Mergejil_Id`),
  ADD KEY `Hutulbur_Id` (`Hutulbur_Id`);

--
-- Indexes for table `suurihicheel`
--
ALTER TABLE `suurihicheel`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tulbur`
--
ALTER TABLE `tulbur`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `BurtgeliinDugaar` (`BurtgeliinDugaar`),
  ADD KEY `tulbur_ibfk_2` (`Tulburiig_yugaar_hiisen_be`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlog`
--
ALTER TABLE `adminlog`
  MODIFY `A_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aimag`
--
ALTER TABLE `aimag`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bagsh`
--
ALTER TABLE `bagsh`
  MODIFY `Bagsh_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hutulbur`
--
ALTER TABLE `hutulbur`
  MODIFY `Hutulbur_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mergejil`
--
ALTER TABLE `mergejil`
  MODIFY `Mergejil_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `suurihicheel`
--
ALTER TABLE `suurihicheel`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tulbur`
--
ALTER TABLE `tulbur`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hutulbur`
--
ALTER TABLE `hutulbur`
  ADD CONSTRAINT `hutulbur_ibfk_1` FOREIGN KEY (`School_Id`) REFERENCES `salbar_surguuli` (`School_Id`);

--
-- Constraints for table `mergejil`
--
ALTER TABLE `mergejil`
  ADD CONSTRAINT `mergejil_ibfk_1` FOREIGN KEY (`Hutulbur_Id`) REFERENCES `hutulbur` (`Hutulbur_Id`);

--
-- Constraints for table `tulbur`
--
ALTER TABLE `tulbur`
  ADD CONSTRAINT `tulbur_ibfk_1` FOREIGN KEY (`BurtgeliinDugaar`) REFERENCES `elsegch_burtgel` (`BurtgeliinDugaar`),
  ADD CONSTRAINT `tulbur_ibfk_2` FOREIGN KEY (`Tulburiig_yugaar_hiisen_be`) REFERENCES `tulburiin_turul` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
