-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 07:01 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `uname`, `pass`, `email`) VALUES
(1, 'abc', 'def', 'abc', 'def@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `author` varchar(25) NOT NULL,
  `publication` varchar(30) NOT NULL,
  `p_date` date NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `a_qty` int(11) NOT NULL,
  `adm_name` varchar(25) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author`, `publication`, `p_date`, `price`, `qty`, `a_qty`, `adm_name`, `image`) VALUES
(8, 'The Lost Symbol', 'Dan Brown ', 'Doubleday', '2019-10-01', 125, 125, 125, 'def', '1.jpg'),
(9, 'Animal Farm', 'George Orwell', ' NAL ', '2019-10-03', 255, 78, 78, 'def', '2.jpg'),
(10, 'Unstoppable', 'Tim Green ', ' HarperCollins', '2019-10-11', 25, 123, 2, 'def', '3.jpg'),
(11, 'The Alchemist', ' Paulo Coelho', 'HarperCollins', '2019-10-18', 1000, 500, 504, 'def', '4.jpg'),
(12, 'Saving Fish from Drowning', 'Amy Tan ', 'Ballantine Books', '2019-09-05', 124, 50, 51, 'def', '5.jpg'),
(14, 'w', 'w', 'w', '2020-04-04', 25, 12, 78, '', '1.jpg'),
(15, 'q', 'a', 'a', '2020-04-11', 4, 2, 7, '', '5.JPG'),
(16, 'w', 'w', 'w', '2020-04-03', 2, 4, 7, '', 'WIN_20180226_15_41_04_Pro.jpg'),
(17, 'q', 'w', 'w', '2020-04-12', 23, 45, 100, '', 'WIN_20180226_15_41_36_Pro.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `issue_books`
--

CREATE TABLE `issue_books` (
  `id` int(11) NOT NULL,
  `s_eno` int(11) NOT NULL,
  `s_name` varchar(35) NOT NULL,
  `s_sem` int(11) NOT NULL,
  `s_contact` varchar(15) NOT NULL,
  `s_email` varchar(35) NOT NULL,
  `b_name` varchar(42) NOT NULL,
  `b_issue_date` date NOT NULL,
  `b_return_date` date NOT NULL,
  `s_uname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_books`
--

INSERT INTO `issue_books` (`id`, `s_eno`, `s_name`, `s_sem`, `s_contact`, `s_email`, `b_name`, `b_issue_date`, `b_return_date`, `s_uname`) VALUES
(10, 456, 'sudheesh G', 3, '974-612-7107', 'vishnugireesh310630@gmail.com', 'sudheesh G', '2019-11-04', '2019-11-04', 're'),
(15, 123, 'mrx', 4, '7878787474', 'mrx@gmail.com', 'Saving Fish from Drowning', '2020-04-26', '0000-00-00', 'mrx'),
(16, 123, 'mrx', 4, '7878787474', 'mrx@gmail.com', 'Unstoppable', '2020-04-26', '0000-00-00', 'mrx'),
(17, 12, 'vishnu', 5, '22333', 'qww@gmail.com', 'Saving Fish from Drowning', '2020-04-26', '2020-04-26', 'we'),
(18, 12, 'vishnu', 5, '22333', 'qww@gmail.com', 'Animal Farm', '2020-04-26', '0000-00-00', 'we'),
(19, 123, 'mrx', 4, '7878787474', 'mrx@gmail.com', 'The Alchemist', '2020-04-26', '2020-04-26', 'mrx');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(5) NOT NULL,
  `susername` varchar(45) NOT NULL,
  `dusername` varchar(45) NOT NULL,
  `title` varchar(100) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `read1` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `susername`, `dusername`, `title`, `msg`, `read1`) VALUES
(1, '', 'sankar', 'dd', 'ddddddd', 'y'),
(5, 'def', 'student', 'aa', 'aaaa', 'n'),
(6, 'def', 'sankar', 'tt', 'tttt', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `studreg`
--

CREATE TABLE `studreg` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `sem` int(11) NOT NULL,
  `eno` int(11) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studreg`
--

INSERT INTO `studreg` (`id`, `name`, `uname`, `pass`, `email`, `phone`, `sem`, `eno`, `status`) VALUES
(4, 'Manu', 'student', 'student', 'manu@gmail.com', '123-456-7896', 2, 123, 'yes'),
(5, 'Sankar', 'sankar', 'sankar', 'sankar123aaaaaaaa@gmail.com', '456-789-5285', 4, 456, 'yes'),
(6, 'vishnu', 'we', '12', 'qww@gmail.com', '22333', 5, 12, 'no'),
(7, 'mrx', 'mrx', 'mrx', 'mrx@gmail.com', '7878787474', 4, 123, 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_books`
--
ALTER TABLE `issue_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studreg`
--
ALTER TABLE `studreg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `issue_books`
--
ALTER TABLE `issue_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `studreg`
--
ALTER TABLE `studreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
