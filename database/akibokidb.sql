-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2017 at 06:09 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `akibokidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminnote`
--

CREATE TABLE IF NOT EXISTS `adminnote` (
`id` int(50) NOT NULL,
  `admin_name` varchar(500) NOT NULL,
  `work` varchar(400) NOT NULL,
  `cus_id` varchar(333) NOT NULL,
  `work_payout` int(255) NOT NULL,
  `admin_note` varchar(600) NOT NULL,
  `com_not` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `adminnote`
--

INSERT INTO `adminnote` (`id`, `admin_name`, `work`, `cus_id`, `work_payout`, `admin_note`, `com_not`, `date`) VALUES
(18, 'Jahidul Islam Robin', 'Visiting Cars', '34', 70000, 'hello admin', 'Not Complete', '2016-09-24'),
(19, 'Hridoy Chandra Das', 'Visiting Cars', '21', 2000, 'This is new woe=dioi ', 'Complete', '2016-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `web_deve`
--

CREATE TABLE IF NOT EXISTS `web_deve` (
`id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `work` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `sub_date` date NOT NULL,
  `nid` int(50) NOT NULL,
  `profile` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `web_deve`
--

INSERT INTO `web_deve` (`id`, `fname`, `uname`, `pass`, `email`, `mobile`, `address`, `work`, `comment`, `sub_date`, `nid`, `profile`) VALUES
(1, 'hrdoy chandra das', 'hridoydas', '12345', 'hridoydas@gmail.com', '01784596764', 'mohammadpur', 'Dynamic Website', 'ami ekta website banaity chai..', '2021-08-16', 0, ''),
(19, 'hridoy chandra das', 'hridoydas', 'hridoy', 'hridoycdas@gmail.com', '01765556677', 'comilla bangladesh', 'Official Video Animation', 'my site is very helpful site', '2016-08-30', 2147483647, ''),
(20, 'Jahidul islam', 'Zihad', 'zihad123', 'zihad@gmail.com', '01855366777', 'jawtula comilla', 'Dynamic Website', 'akiboki website template', '2016-09-04', 12, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminnote`
--
ALTER TABLE `adminnote`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_deve`
--
ALTER TABLE `web_deve`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminnote`
--
ALTER TABLE `adminnote`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `web_deve`
--
ALTER TABLE `web_deve`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
