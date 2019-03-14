-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 08, 2018 at 01:05 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinaysir`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_admin`
--

DROP TABLE IF EXISTS `add_admin`;
CREATE TABLE IF NOT EXISTS `add_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `photo` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_admin`
--

INSERT INTO `add_admin` (`id`, `name`, `username`, `password`, `photo`) VALUES
(1, 'vishwas', 'vishwas@gmail.com', '123456', 'camouflagecultforcecrew001-difference-of-opinion-4xl-original-imaek6j9qyykgaxf.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `add_to_cart`
--

DROP TABLE IF EXISTS `add_to_cart`;
CREATE TABLE IF NOT EXISTS `add_to_cart` (
  `p_id` varchar(20) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `p_image` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` int(8) NOT NULL,
  `p_type` varchar(20) NOT NULL,
  PRIMARY KEY (`p_id`),
  UNIQUE KEY `p_id` (`p_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_to_cart`
--

INSERT INTO `add_to_cart` (`p_id`, `p_name`, `Quantity`, `p_image`, `description`, `price`, `p_type`) VALUES
('HJS232HJDexx', 'Cycle', 2, 'rgpv.gif', 'this is my rgpv logo', 300, 'Handmade');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE IF NOT EXISTS `admin_login` (
  `username` varchar(30) NOT NULL,
  `pass` varchar(15) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `pass`) VALUES
('veer@gmail.com', '12345'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `p_id` varchar(20) NOT NULL,
  `p_name` varchar(20) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `p_upload` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` int(8) NOT NULL,
  `p_type` varchar(20) NOT NULL,
  PRIMARY KEY (`p_id`),
  UNIQUE KEY `p_id` (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `Quantity`, `p_upload`, `description`, `price`, `p_type`) VALUES
('23tryeb', 'tyre', 0, 'yu.jpg', 'thhsdfhhefb', 632, 'woodcraf'),
('3344hjb', 'arijit', 0, '41zADzQVMhL._UX425_.jpg', 'this is my lovely pic', 253, 'Bombowork'),
('AAx231T-2', 'truck', 0, 'hud.jpg', 'thzx', 6999, 'toys'),
('eeXX2321', 'Butiful Nari', 0, '591763.png', 'this inffnjnj', 9388, 'painting'),
('eyyuf45', 'Gun', 10, 'gun.png', 'this is my gun fro kali ', 8999, 'metalart'),
('HDG212HJ', 'Bike', 0, 'free-wallpapers-of-natural-scene.jpg', 'it my pic ', 200, 'Two Vale'),
('HJS232HJDexx', 'Cycle', 0, 'rgpv.gif', 'this is my rgpv logo', 300, 'Handmade'),
('iojodhhj', 'jkds', 0, 'hjd.jpg', 'asd', 123, 'painting'),
('jkd233xxcs', 'Trimer2.34', 0, '72005.jpg', 'this is cyber image', 342, 'metalart'),
('trit23', 'titanic', 0, 'titanic.jpg', 'this my anonys', 500, 'Terracotta');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `photo` varchar(100) NOT NULL,
  `f_name` varchar(15) NOT NULL,
  `email` varchar(20) NOT NULL,
  `Mobile_no` varchar(10) NOT NULL,
  `password` varchar(11) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `Gender` char(6) NOT NULL,
  PRIMARY KEY (`Mobile_no`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `Mobile no` (`Mobile_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`photo`, `f_name`, `email`, `Mobile_no`, `password`, `dob`, `Gender`) VALUES
('jk.jpeg', 'karan', 'karan@g', '7774530', '321123', '2018-05-02', 'Male'),
('hjfs.jpg', 'vishwas ', 'vishwas@gmail', '9981015328', '12345', '2018-05-16', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

DROP TABLE IF EXISTS `user_login`;
CREATE TABLE IF NOT EXISTS `user_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `name` char(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `mobile`, `username`, `password`, `name`) VALUES
(1, '7774530', 'karan@g', '321123', 'karan');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
