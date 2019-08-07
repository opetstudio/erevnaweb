-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 07, 2019 at 04:06 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erevnawebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`no`, `name`, `email`, `subject`, `message`) VALUES
(1, 'julian', 'julianpurukan1@gmail.com', 'testt', 'Hello'),
(2, 'purukan', 'julianpurukan1@yahoo.com', 'test1', 'Hello jga'),
(3, 'Erevna', 'Erevna@gmail.com', 'Erevna', 'Message Erevna');

-- --------------------------------------------------------

--
-- Table structure for table `content_web`
--

CREATE TABLE `content_web` (
  `no` int(11) NOT NULL,
  `content_param` varchar(255) NOT NULL,
  `content_value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content_web`
--

INSERT INTO `content_web` (`no`, `content_param`, `content_value`) VALUES
(1, 'CONTENT_VISI', '<p class=\"sub-title pad-bt15\">Our vision to become the leader and key player in Indonesia for payment gateway solution. We have been work to develop and modernize payment activities that ony drive world-class results. </p>\r\n'),
(2, 'CONTENT_ABOUTUS', '<p class=\"sub-title pad-bt15\"><span>PT. EREVNA RAYA TEKNOLOGI</span> we build smart payment method through comprehensive research, careful consideration together with the growth of digital era to make payment process even more efficient. With a development specialist team & experienced leader in banking, we consistently strive to be at the forefront of payment gateway technology.</p><br>\r\n<p class=\"sub-title pad-bt15\"><span>Our company started with only 10 (ten) personel, currently, after years of experience, we are supported by more then 500 consultants and developers.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `no` int(11) NOT NULL,
  `content_param` varchar(255) NOT NULL,
  `content_value` longtext NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service_product`
--

CREATE TABLE `service_product` (
  `no` int(11) NOT NULL,
  `content_param` varchar(255) NOT NULL,
  `content_value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_product`
--

INSERT INTO `service_product` (`no`, `content_param`, `content_value`) VALUES
(1, '<h3><span>P</span>ayment Gateway</h3>', '<p>Erevna Raya Teknologi offers various payment solution to facilitate your business needs. Whatever you need for financial technology, we will help you to actualize it.</p>\r\n'),
(2, '<h3><span>A</span>pplication Development</h3>', '<p>Play with Technology. Our mobile solutions are centered around the user. </p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `content_web`
--
ALTER TABLE `content_web`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `service_product`
--
ALTER TABLE `service_product`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `content_web`
--
ALTER TABLE `content_web`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_product`
--
ALTER TABLE `service_product`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
