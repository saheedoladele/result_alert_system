-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 04:20 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result_alert`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `created_by`, `created_date`) VALUES
(1, 'Saheed ', 'admin', 'admin123', 'admin', '2019-09-26');

-- --------------------------------------------------------

--
-- Table structure for table `hnd1rec`
--

CREATE TABLE `hnd1rec` (
  `id` int(11) NOT NULL,
  `matricno` varchar(30) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `othername` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL,
  `section` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hnd1rec`
--

INSERT INTO `hnd1rec` (`id`, `matricno`, `surname`, `othername`, `gender`, `email`, `phoneno`, `level`, `section`) VALUES
(1, '2019001', 'Adekule', 'Salam', 'Male', 'adekunle@gmail.com', '8099669779', 'NHD1', '2019/20'),
(2, '2019002', 'Adigun', 'Wale', 'Male', 'walex@yahoo.com', '7055675544', 'HND1', '2019/21'),
(3, '2019003', 'Adekola', 'Bimpe', 'Female', 'adebimpe001@gmail.com', '805544443', 'HND1', '2019/22'),
(4, '2019004', 'Lawal', 'Akitola', 'Male', 'akintola.lawal@gmail.com', '804334566', 'HND1', '2019/23'),
(5, '2019005', 'Samuel', 'Babatunde', 'Male', 'samuelbaba@yahoo.com', '9054332345', 'HND1', '2019/24'),
(10, '20190010', 'Jimoh', 'Serifat', 'Female', 'serifatbab@gmail.com', '8054333333', 'HND1', '2019/29');

-- --------------------------------------------------------

--
-- Table structure for table `hnd1result`
--

CREATE TABLE `hnd1result` (
  `id` int(11) NOT NULL,
  `matricno` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `ccode` varchar(20) NOT NULL,
  `unit` int(5) NOT NULL,
  `score` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hnd1result`
--

INSERT INTO `hnd1result` (`id`, `matricno`, `name`, `ccode`, `unit`, `score`) VALUES
(1, '2019001', 'adewale salam', 'COM102', 2, 67),
(2, '2019002', 'Akande Hammed', 'COM102', 2, 56),
(3, '2019003', 'Benson Racheal', 'COM103', 2, 67),
(4, '2019004', 'Lawal Azeez', 'COM104', 2, 45),
(5, '2019005', 'Ademola Micheal', 'COM105', 2, 89),
(6, '2019006', 'Lawal Tosin', 'COM106', 2, 56),
(7, '2019007', 'Adelabu Rukayat', 'COM107', 2, 77),
(8, '2019008', 'Sunday Marry', 'COM108', 2, 59),
(9, '2019009', 'Onoja Peace', 'COM109', 2, 70),
(10, '20190010', 'Audu Kareem', 'COM110', 2, 67);

-- --------------------------------------------------------

--
-- Table structure for table `hnd2rec`
--

CREATE TABLE `hnd2rec` (
  `id` int(11) NOT NULL,
  `matricno` varchar(30) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `othername` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL,
  `section` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hnd2rec`
--

INSERT INTO `hnd2rec` (`id`, `matricno`, `surname`, `othername`, `gender`, `email`, `phoneno`, `level`, `section`) VALUES
(26, '2019004', 'Lawal', 'Akitola', 'Male', 'akintola.lawal@gmail.com', '804334566', 'HND2', '2019/23'),
(27, '2019005', 'Samuel', 'Babatunde', 'Male', 'samuelbaba@yahoo.com', '9054332345', 'HND2', '2019/24'),
(30, '2019008', 'Ololade', 'Sadiat', 'Female', 'ololadesadiat@mail.yahoo.com', '8065544333', 'HND2', '2019/27'),
(31, '2019009', 'Oduola', 'Ibraheem', 'Male', 'oduola@yahoo.com', '904532222', 'HND2', '2019/28'),
(33, '20190011', 'Fashola', 'Folashade', 'Female', 'folashade@gmail.com', '806365353', 'HND2', '2019/30');

-- --------------------------------------------------------

--
-- Table structure for table `hnd2result`
--

CREATE TABLE `hnd2result` (
  `id` int(11) NOT NULL,
  `matricno` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `ccode` varchar(20) NOT NULL,
  `unit` int(5) NOT NULL,
  `score` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hnd2result`
--

INSERT INTO `hnd2result` (`id`, `matricno`, `name`, `ccode`, `unit`, `score`) VALUES
(1, '2019001', 'adewale salam', 'COM102', 2, 67),
(2, '2019002', 'Akande Hammed', 'COM102', 2, 56),
(3, '2019003', 'Benson Racheal', 'COM103', 2, 67),
(4, '2019004', 'Lawal Azeez', 'COM104', 2, 45),
(5, '2019005', 'Ademola Micheal', 'COM105', 2, 89),
(6, '2019006', 'Lawal Tosin', 'COM106', 2, 56),
(7, '2019007', 'Adelabu Rukayat', 'COM107', 2, 77),
(8, '2019008', 'Sunday Marry', 'COM108', 2, 59),
(9, '2019009', 'Onoja Peace', 'COM109', 2, 70),
(10, '20190010', 'Audu Kareem', 'COM110', 2, 67);

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` int(11) NOT NULL,
  `staffid` varchar(20) NOT NULL,
  `surnames` varchar(50) NOT NULL,
  `othernames` varchar(50) NOT NULL,
  `title` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`id`, `staffid`, `surnames`, `othernames`, `title`, `username`, `password`) VALUES
(1, '001', 'Adebisi', 'Jacob', 'Mr.', 'adebisi', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `nd1rec`
--

CREATE TABLE `nd1rec` (
  `id` int(11) NOT NULL,
  `matricno` varchar(30) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `othername` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneno` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL,
  `section` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nd1rec`
--

INSERT INTO `nd1rec` (`id`, `matricno`, `surname`, `othername`, `gender`, `email`, `phoneno`, `level`, `section`) VALUES
(34, '2019001', 'Adekule', 'Salam', 'Male', 'adekunle@gmail.com', '8099669779', 'ND1', '2019/20'),
(35, '2019002', 'Adigun', 'Wale', 'Male', 'walex@yahoo.com', '7055675544', 'ND1', '2019/21'),
(36, '2019003', 'Adekola', 'Bimpe', 'Female', 'adebimpe001@gmail.com', '805544443', 'ND1', '2019/22'),
(37, '2019004', 'Lawal', 'Akitola', 'Male', 'akintola.lawal@gmail.com', '804334566', 'ND1', '2019/23'),
(38, '2019005', 'Samuel', 'Babatunde', 'Male', 'samuelbaba@yahoo.com', '9054332345', 'ND1', '2019/24'),
(39, '2019006', 'Ojo', 'Janet', 'Female', 'ojojane@gmail.com', '80443322', 'ND1', '2019/25'),
(40, '2019007', 'Kazeem', 'Ogunrinu', 'Male', 'kazeem@gmail.com', '803456777', 'ND1', '2019/26'),
(41, '2019008', 'Ololade', 'Sadiat', 'Female', 'ololadesadiat@mail.yahoo.com', '8065544333', 'ND1', '2019/27'),
(42, '2019009', 'Oduola', 'Ibraheem', 'Male', 'oduola@yahoo.com', '904532222', 'ND1', '2019/28'),
(43, '20190010', 'Jimoh', 'Serifat', 'Female', 'serifatbab@gmail.com', '8054333333', 'ND1', '2019/29'),
(44, '20190011', 'Fashola', 'Folashade', 'Female', 'folashade@gmail.com', '806365353', 'ND1', '2019/30');

-- --------------------------------------------------------

--
-- Table structure for table `nd1result`
--

CREATE TABLE `nd1result` (
  `id` int(11) NOT NULL,
  `matricno` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `ccode` varchar(20) NOT NULL,
  `unit` int(5) NOT NULL,
  `score` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nd1result`
--

INSERT INTO `nd1result` (`id`, `matricno`, `name`, `ccode`, `unit`, `score`) VALUES
(1, '2019001', 'adewale salam', 'COM102', 2, 67),
(2, '2019002', 'Akande Hammed', 'COM102', 2, 56),
(3, '2019003', 'Benson Racheal', 'COM103', 2, 67),
(4, '2019004', 'Lawal Azeez', 'COM104', 2, 45),
(5, '2019005', 'Ademola Micheal', 'COM105', 2, 89),
(6, '2019006', 'Lawal Tosin', 'COM106', 2, 56),
(7, '2019007', 'Adelabu Rukayat', 'COM107', 2, 77),
(8, '2019008', 'Sunday Marry', 'COM108', 2, 59),
(9, '2019009', 'Onoja Peace', 'COM109', 2, 70),
(10, '20190010', 'Audu Kareem', 'COM110', 2, 67),
(11, '2019001', 'adewale salam', 'COM102', 2, 67),
(12, '2019002', 'Akande Hammed', 'COM102', 2, 56),
(13, '2019003', 'Benson Racheal', 'COM103', 2, 67),
(14, '2019004', 'Lawal Azeez', 'COM104', 2, 45),
(15, '2019005', 'Ademola Micheal', 'COM105', 2, 89),
(16, '2019006', 'Lawal Tosin', 'COM106', 2, 56),
(17, '2019007', 'Adelabu Rukayat', 'COM107', 2, 77),
(18, '2019008', 'Sunday Marry', 'COM108', 2, 59),
(19, '2019009', 'Onoja Peace', 'COM109', 2, 70),
(20, '20190010', 'Audu Kareem', 'COM110', 2, 67);

-- --------------------------------------------------------

--
-- Table structure for table `nd2rec`
--

CREATE TABLE `nd2rec` (
  `id` int(11) NOT NULL,
  `matricno` varchar(30) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `othername` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneno` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL,
  `section` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nd2rec`
--

INSERT INTO `nd2rec` (`id`, `matricno`, `surname`, `othername`, `gender`, `email`, `phoneno`, `level`, `section`) VALUES
(1, '2019001', 'Adekule', 'Salam', 'Male', 'adekunle@gmail.com', '8099669779', 'ND2', '2019/20'),
(2, '2019002', 'Adigun', 'Wale', 'Male', 'walex@yahoo.com', '7055675544', 'ND2', '2019/21'),
(8, '2019008', 'Ololade', 'Sadiat', 'Female', 'ololadesadiat@mail.yahoo.com', '8065544333', 'ND2', '2019/27'),
(9, '2019009', 'Oduola', 'Ibraheem', 'Male', 'oduola@yahoo.com', '904532222', 'ND2', '2019/28'),
(10, '20190010', 'Jimoh', 'Serifat', 'Female', 'serifatbab@gmail.com', '8054333333', 'ND2', '2019/29'),
(11, '20190011', 'Fashola', 'Folashade', 'Female', 'folashade@gmail.com', '806365353', 'ND2', '2019/30');

-- --------------------------------------------------------

--
-- Table structure for table `nd2result`
--

CREATE TABLE `nd2result` (
  `id` int(11) NOT NULL,
  `matricno` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `ccode` varchar(10) NOT NULL,
  `unit` int(5) NOT NULL,
  `score` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nd2result`
--

INSERT INTO `nd2result` (`id`, `matricno`, `name`, `ccode`, `unit`, `score`) VALUES
(1, '2019001', 'adewale salam', 'COM102', 2, 67),
(2, '2019002', 'Akande Hammed', 'COM102', 2, 56),
(3, '2019003', 'Benson Racheal', 'COM103', 2, 67),
(4, '2019004', 'Lawal Azeez', 'COM104', 2, 45),
(5, '2019005', 'Ademola Micheal', 'COM105', 2, 89),
(6, '2019006', 'Lawal Tosin', 'COM106', 2, 56),
(7, '2019007', 'Adelabu Rukayat', 'COM107', 2, 77),
(8, '2019008', 'Sunday Marry', 'COM108', 2, 59),
(9, '2019009', 'Onoja Peace', 'COM109', 2, 70),
(10, '20190010', 'Audu Kareem', 'COM110', 2, 67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `hnd1rec`
--
ALTER TABLE `hnd1rec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matricno` (`matricno`);

--
-- Indexes for table `hnd1result`
--
ALTER TABLE `hnd1result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matricno` (`matricno`);

--
-- Indexes for table `hnd2rec`
--
ALTER TABLE `hnd2rec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matricno` (`matricno`);

--
-- Indexes for table `hnd2result`
--
ALTER TABLE `hnd2result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matricno` (`matricno`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `staffid` (`staffid`);

--
-- Indexes for table `nd1rec`
--
ALTER TABLE `nd1rec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matricno` (`matricno`);

--
-- Indexes for table `nd1result`
--
ALTER TABLE `nd1result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matricno` (`matricno`);

--
-- Indexes for table `nd2rec`
--
ALTER TABLE `nd2rec`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matricno` (`matricno`);

--
-- Indexes for table `nd2result`
--
ALTER TABLE `nd2result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matricno` (`matricno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hnd1rec`
--
ALTER TABLE `hnd1rec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hnd1result`
--
ALTER TABLE `hnd1result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hnd2rec`
--
ALTER TABLE `hnd2rec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `hnd2result`
--
ALTER TABLE `hnd2result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nd1rec`
--
ALTER TABLE `nd1rec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `nd1result`
--
ALTER TABLE `nd1result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `nd2rec`
--
ALTER TABLE `nd2rec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nd2result`
--
ALTER TABLE `nd2result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
