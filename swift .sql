-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 09:01 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swift`
--

-- --------------------------------------------------------

--
-- Table structure for table `caltable`
--

CREATE TABLE `caltable` (
  `slno` int(5) NOT NULL,
  `A` int(2) NOT NULL,
  `C` int(2) NOT NULL,
  `E` int(2) NOT NULL,
  `S` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `maintable`
--

CREATE TABLE `maintable` (
  `slno` int(5) NOT NULL,
  `i` int(1) NOT NULL,
  `ii` int(1) NOT NULL,
  `iii` int(1) NOT NULL,
  `iv` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `slno` int(5) NOT NULL,
  `i` varchar(1) NOT NULL,
  `ii` varchar(1) NOT NULL,
  `iii` varchar(1) NOT NULL,
  `iv` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sumtable`
--

CREATE TABLE `sumtable` (
  `A` int(2) NOT NULL,
  `C` int(2) NOT NULL,
  `E` int(2) NOT NULL,
  `S` int(2) NOT NULL,
  `total` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `swift1`
--

CREATE TABLE `swift1` (
  `slno` int(2) NOT NULL,
  `C` int(2) NOT NULL,
  `S` int(2) NOT NULL,
  `E` int(2) NOT NULL,
  `A` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swift1`
--

INSERT INTO `swift1` (`slno`, `C`, `S`, `E`, `A`) VALUES
(1, 0, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `swift2`
--

CREATE TABLE `swift2` (
  `slno` int(2) NOT NULL,
  `A` int(2) NOT NULL,
  `S` int(2) NOT NULL,
  `C` int(2) NOT NULL,
  `E` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swift2`
--

INSERT INTO `swift2` (`slno`, `A`, `S`, `C`, `E`) VALUES
(2, 3, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `swift3`
--

CREATE TABLE `swift3` (
  `slno` int(2) NOT NULL,
  `E` int(2) NOT NULL,
  `A` int(2) NOT NULL,
  `C` int(2) NOT NULL,
  `S` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swift3`
--

INSERT INTO `swift3` (`slno`, `E`, `A`, `C`, `S`) VALUES
(3, 2, 0, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `swift4`
--

CREATE TABLE `swift4` (
  `slno` int(2) NOT NULL,
  `S` int(2) NOT NULL,
  `E` int(2) NOT NULL,
  `A` int(2) NOT NULL,
  `C` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swift4`
--

INSERT INTO `swift4` (`slno`, `S`, `E`, `A`, `C`) VALUES
(4, 4, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `swift5`
--

CREATE TABLE `swift5` (
  `slno` int(2) NOT NULL,
  `E` int(2) NOT NULL,
  `C` int(2) NOT NULL,
  `S` int(2) NOT NULL,
  `A` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swift5`
--

INSERT INTO `swift5` (`slno`, `E`, `C`, `S`, `A`) VALUES
(5, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `swift6`
--

CREATE TABLE `swift6` (
  `slno` int(2) NOT NULL,
  `A` int(2) NOT NULL,
  `E` int(2) NOT NULL,
  `C` int(2) NOT NULL,
  `S` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swift6`
--

INSERT INTO `swift6` (`slno`, `A`, `E`, `C`, `S`) VALUES
(6, 1, 0, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `swift7`
--

CREATE TABLE `swift7` (
  `slno` int(2) NOT NULL,
  `C` int(2) NOT NULL,
  `A` int(2) NOT NULL,
  `E` int(2) NOT NULL,
  `S` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swift7`
--

INSERT INTO `swift7` (`slno`, `C`, `A`, `E`, `S`) VALUES
(7, 0, 0, 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `swift8`
--

CREATE TABLE `swift8` (
  `slno` int(2) NOT NULL,
  `S` int(2) NOT NULL,
  `C` int(2) NOT NULL,
  `A` int(2) NOT NULL,
  `E` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swift8`
--

INSERT INTO `swift8` (`slno`, `S`, `C`, `A`, `E`) VALUES
(8, 0, 2, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `swift9`
--

CREATE TABLE `swift9` (
  `slno` int(2) NOT NULL,
  `E` int(2) NOT NULL,
  `A` int(2) NOT NULL,
  `S` int(2) NOT NULL,
  `C` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swift9`
--

INSERT INTO `swift9` (`slno`, `E`, `A`, `S`, `C`) VALUES
(9, 3, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `swift10`
--

CREATE TABLE `swift10` (
  `slno` int(2) NOT NULL,
  `C` int(2) NOT NULL,
  `A` int(2) NOT NULL,
  `S` int(2) NOT NULL,
  `E` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swift10`
--

INSERT INTO `swift10` (`slno`, `C`, `A`, `S`, `E`) VALUES
(10, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `swift11`
--

CREATE TABLE `swift11` (
  `slno` int(2) NOT NULL,
  `S` int(2) NOT NULL,
  `E` int(2) NOT NULL,
  `C` int(2) NOT NULL,
  `A` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swift11`
--

INSERT INTO `swift11` (`slno`, `S`, `E`, `C`, `A`) VALUES
(11, 0, 0, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `swift12`
--

CREATE TABLE `swift12` (
  `slno` int(2) NOT NULL,
  `A` int(2) NOT NULL,
  `C` int(2) NOT NULL,
  `E` int(2) NOT NULL,
  `S` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swift12`
--

INSERT INTO `swift12` (`slno`, `A`, `C`, `E`, `S`) VALUES
(12, 2, 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `swift13`
--

CREATE TABLE `swift13` (
  `slno` int(2) NOT NULL,
  `E` int(2) NOT NULL,
  `S` int(2) NOT NULL,
  `A` int(2) NOT NULL,
  `C` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swift13`
--

INSERT INTO `swift13` (`slno`, `E`, `S`, `A`, `C`) VALUES
(13, 1, 1, 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `swift14`
--

CREATE TABLE `swift14` (
  `slno` int(2) NOT NULL,
  `C` int(2) NOT NULL,
  `E` int(2) NOT NULL,
  `A` int(2) NOT NULL,
  `S` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swift14`
--

INSERT INTO `swift14` (`slno`, `C`, `E`, `A`, `S`) VALUES
(14, 0, 2, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `swift15`
--

CREATE TABLE `swift15` (
  `slno` int(2) NOT NULL,
  `A` int(2) NOT NULL,
  `S` int(2) NOT NULL,
  `E` int(2) NOT NULL,
  `C` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swift15`
--

INSERT INTO `swift15` (`slno`, `A`, `S`, `E`, `C`) VALUES
(15, 0, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `swifttable`
--

CREATE TABLE `swifttable` (
  `slno` int(2) NOT NULL,
  `C` int(2) NOT NULL,
  `A` int(2) NOT NULL,
  `S` int(2) NOT NULL,
  `E` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `swifttable`
--

INSERT INTO `swifttable` (`slno`, `C`, `A`, `S`, `E`) VALUES
(1, 0, 1, 2, 1),
(2, 1, 3, 0, 0),
(3, 2, 0, 0, 2),
(4, 0, 0, 4, 0),
(5, 1, 1, 1, 1),
(6, 3, 1, 0, 0),
(7, 0, 0, 4, 0),
(8, 2, 2, 0, 0),
(9, 1, 0, 0, 3),
(10, 1, 1, 1, 1),
(11, 3, 1, 0, 0),
(12, 2, 2, 0, 0),
(13, 2, 0, 1, 1),
(14, 0, 2, 0, 2),
(15, 2, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `cont` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `uname`, `addr`, `cont`, `email`) VALUES
(1, 'Guccho', 'Kolkata', '4565', 'guccho'),
(2, 'Rahul', 'Mumbai', '78961254', 'rahul'),
(3, 'Sourav', 'Kolkata', '457894611', 'sourav'),
(4, 'admin', 'guccho', '9632326355', 'guccho@gmail.com'),
(5, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(6, 'admin', 'Kolkata', '9632326355', 'guccho@gmail.com'),
(7, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(8, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '7259623737', 'swatantraguccho@gmail.com'),
(9, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '7259623737', 'swatantraguccho@gmail.com'),
(10, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '7259623737', 'swatantraguccho@gmail.com'),
(11, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '7259623737', 'swatantraguccho@gmail.com'),
(12, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '7259623737', 'swatantraguccho@gmail.com'),
(13, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(14, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(15, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(16, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(17, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(18, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(19, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(20, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(21, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '7777', 'swatantraguccho@gmail.com'),
(22, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(23, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(24, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(25, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(26, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(27, 'guccho', 'Kolkata', '9632326355', 'swatantraguccho@gmail.com'),
(28, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(29, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '7259623737', 'swatantraguccho@gmail.com'),
(30, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(31, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(32, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(33, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(34, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '7259623737', 'swatantraguccho@gmail.com'),
(35, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(36, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(37, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(38, 'admin', 'Kolkata', '9632326355', 'guccho@gmail.com'),
(39, 'admin', 'Kolkata', '9632326355', 'guccho@gmail.com'),
(40, 'admin', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(41, 'Swatantra Mukherjee', 'Jatin Das Road, Majherpara', '9632326355', 'swatantraguccho@gmail.com'),
(42, 'Swatantra Mukherjee', 'Jatin Das Road, Majherpara', '9632326355', 'swatantraguccho@gmail.com'),
(43, 'Swatantra Mukherjee', 'Jatin Das Road', '9632326355', 'swatantraguccho@gmail.com'),
(44, 'Swatantra Mukherjee', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(45, 'Swatantra Mukherjee', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '9632326355', 'swatantraguccho@gmail.com'),
(46, 'Swatantra Mukherjee', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '7259623737', 'swatantraguccho@gmail.com'),
(47, 'Swatantra Mukherjee', 'Jatin Das Road, Majherpara, Ichapur, North 24 Pgs', '7259623737', 'swatantraguccho@gmail.com'),
(48, 'guccho', 'Kolkata', '9632326355', 'swatantraguccho@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
