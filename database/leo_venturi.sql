-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2014 at 03:04 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `leo_venturi`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE IF NOT EXISTS `assets` (
  `asset_id` int(100) NOT NULL AUTO_INCREMENT,
  `asset_ref` varchar(100) NOT NULL,
  `asset_value` int(100) NOT NULL,
  `asset_date` date NOT NULL,
  `asset_description` text NOT NULL,
  `asset_bank` varchar(100) NOT NULL,
  PRIMARY KEY (`asset_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`asset_id`, `asset_ref`, `asset_value`, `asset_date`, `asset_description`, `asset_bank`) VALUES
(6, '255', 50000, '2014-02-22', 'plot @ ruaka', 'Barclays-05415151'),
(7, '002', 100000, '2014-03-17', 'plot@enapai ridge', 'Cooperative Bank of Kenya-89803032');

-- --------------------------------------------------------

--
-- Table structure for table `bank_accounts`
--

CREATE TABLE IF NOT EXISTS `bank_accounts` (
  `bank_id` int(100) NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(100) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `bank_date` date NOT NULL,
  `account_no` varchar(100) NOT NULL,
  `balance` double NOT NULL,
  `branch` varchar(100) NOT NULL,
  `reasons` text NOT NULL,
  PRIMARY KEY (`bank_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `bank_accounts`
--

INSERT INTO `bank_accounts` (`bank_id`, `bank_name`, `account_name`, `bank_date`, `account_no`, `balance`, `branch`, `reasons`) VALUES
(1, 'Barclays', 'Haba', '2014-01-20', '05415151', 5000, 'Nbo', 'Current\r\n'),
(2, 'Cooperative Bank of Kenya', 'Leo', '2009-05-08', '89803032', 5000, 'University Way', 'savings'),
(4, 'Bank of Baroda', 'Tpain', '2014-02-20', '163463', 2000, 'nairobi', '<p>\r\n	idk</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(8) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  `cat_description` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `cat_name_unique` (`cat_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_description`) VALUES
(4, 'jameson', 'xigubu'),
(7, 'New investment', 'land'),
(10, 'Business Opportunities 2014', 'Viable opportunities'),
(11, 'Quail Farming', 'quaaludes'),
(12, 'Khona', 'Mafikizolo'),
(13, 'Category', 'test category'),
(15, 'test category', 'This is a test cat');

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE IF NOT EXISTS `deposits` (
  `deposit_id` int(100) NOT NULL AUTO_INCREMENT,
  `deposit_bank` varchar(100) NOT NULL,
  `deposited_by` varchar(100) NOT NULL,
  `deposit_date` date NOT NULL,
  `deposit_amount` int(100) NOT NULL,
  PRIMARY KEY (`deposit_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`deposit_id`, `deposit_bank`, `deposited_by`, `deposit_date`, `deposit_amount`) VALUES
(16, 'Cooperative Bank of Kenya-89803032', 'Alex Oxlade', '2014-02-08', 5000),
(17, 'Cooperative Bank of Kenya-89803032', 'Chianda Njogu', '2014-03-13', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE IF NOT EXISTS `expenses` (
  `expense_id` int(100) NOT NULL AUTO_INCREMENT,
  `expense_ref` varchar(100) NOT NULL,
  `expense_amount` int(100) NOT NULL,
  `expense_description` text NOT NULL,
  `expense_date` date NOT NULL,
  `expense_bank` varchar(100) NOT NULL,
  PRIMARY KEY (`expense_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`expense_id`, `expense_ref`, `expense_amount`, `expense_description`, `expense_date`, `expense_bank`) VALUES
(5, '1', 2500, '<p>\r\n Group lunch at Cucu&#39;s.</p>\r\n', '2014-02-22', 'Bank of Baroda-163463');

-- --------------------------------------------------------

--
-- Table structure for table `minutes`
--

CREATE TABLE IF NOT EXISTS `minutes` (
  `minutes_id` int(100) NOT NULL AUTO_INCREMENT,
  `minute_date` date NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `userfile` varchar(255) NOT NULL,
  PRIMARY KEY (`minutes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `minutes`
--

INSERT INTO `minutes` (`minutes_id`, `minute_date`, `title`, `description`, `userfile`) VALUES
(5, '2014-02-11', 'December 2013 Meeting', 'Xmass day meeting', './files/minutes/cv-template-modern-work.doc'),
(6, '2014-02-10', 'November 2013 ', '<p>\r\n Meeting @ Kimos&#39;</p>\r\n', './files/minutes/cover_letter.docx');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `receive_id` int(30) NOT NULL AUTO_INCREMENT,
  `user` int(8) NOT NULL,
  `payment_from` varchar(100) NOT NULL,
  `receive_bank` varchar(100) NOT NULL,
  `receive_amount` double NOT NULL,
  `receive_date` date NOT NULL,
  `receive_method` varchar(30) NOT NULL,
  `receive_description` text NOT NULL,
  PRIMARY KEY (`receive_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=131 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`receive_id`, `user`, `payment_from`, `receive_bank`, `receive_amount`, `receive_date`, `receive_method`, `receive_description`) VALUES
(124, 55, 'ramsey', 'Cooperative Bank of Kenya 89803032', 5000, '2014-02-22', 'Cash', 'test'),
(125, 30, 'linda', 'Cooperative Bank of Kenya 89803032', 10000, '2014-02-05', 'Mpesa', ''),
(126, 55, 'ramsey', 'Cooperative Bank of Kenya 89803032', 2500, '2014-01-16', 'Cash', 'test'),
(127, 30, 'linda', 'Cooperative Bank of Kenya 89803032', 2500, '2014-02-15', 'Cash', ''),
(128, 33, 'Chianda', 'Barclays-05415151', 5000, '2014-03-17', 'Cheque', 'chq no 0053'),
(129, 33, 'Chianda', 'Cooperative Bank of Kenya-89803032', 1000, '2014-09-22', 'Cheque', 'September subscription'),
(130, 33, 'Chianda', 'Coop Bank 08003932', 1000, '2008-09-01', 'Cash', '<p>\r\n R 001</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(8) NOT NULL AUTO_INCREMENT,
  `post_content` text NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `post_topic` int(8) NOT NULL,
  `post_by` varchar(100) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_content`, `post_date`, `post_topic`, `post_by`) VALUES
(6, 'quail egg@ 30', '2014-02-13 10:23:23', 16, 'chianda'),
(11, '@30', '2014-02-10 10:12:19', 11, 'Chianda'),
(12, 'This is a message in the topics category', '2014-02-11 17:16:08', 1, 'Chianda'),
(13, '@30', '2014-02-10 10:12:19', 18, 'Chianda'),
(15, 'this is a test topic', '2014-02-13 12:51:50', 19, 'Chianda'),
(18, 'test topic', '2014-02-13 09:54:05', 18, 'Chianda'),
(22, 'aguero', '2014-02-14 12:36:24', 34, 'Chianda'),
(25, 'xfbdxzfbdfb', '2014-02-14 13:41:12', 31, 'Chianda'),
(26, 'it sucks right?', '2014-02-14 13:48:30', 35, 'Chianda'),
(27, 'valentine is boring', '2014-02-14 13:48:51', 35, 'Chianda'),
(31, 'so now?', '2014-02-17 09:29:47', 31, 'Chianda'),
(32, 'wassup', '2014-02-17 11:37:15', 38, 'Chianda'),
(33, 'rabbits', '2014-02-17 12:20:41', 39, 'Chianda'),
(34, 'kuku', '2014-02-17 12:35:46', 40, 'Chianda'),
(35, ' yea', '2014-02-17 16:39:00', 40, 'Chianda'),
(36, 'another', '2014-02-19 08:29:52', 41, 'Chianda'),
(37, ' yes boss', '2014-02-19 13:08:06', 41, 'ramsey'),
(38, ' ngoku\r\n', '2014-02-19 13:14:38', 41, 'ramsey'),
(39, '0', '2014-02-19 13:14:55', 0, 'ramsey'),
(41, ' shiga', '2014-02-19 13:18:38', 41, 'ramsey'),
(42, ' maoera', '2014-02-21 07:39:59', 41, 'ramsey');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `topic_id` int(8) NOT NULL AUTO_INCREMENT,
  `topic_subject` varchar(255) NOT NULL,
  `topic_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `topic_cat` int(8) NOT NULL,
  `topic_by` varchar(100) NOT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_subject`, `topic_date`, `topic_cat`, `topic_by`) VALUES
(15, 'man u sucks', '2014-02-10 09:04:21', 1, 'Chianda'),
(16, 'mafikizolo', '2014-02-10 10:03:28', 2, 'Chianda'),
(17, 'eggs', '2014-02-10 10:12:19', 11, 'Chianda'),
(18, 'This is a topic 1', '2014-02-11 17:16:08', 1, 'Chianda'),
(19, 'topic', '2014-02-13 09:43:46', 13, 'Chianda'),
(20, 'test topic', '2014-02-13 12:45:38', 15, 'Chianda'),
(23, 'Radioactive', '2014-02-14 05:10:11', 13, 'Chianda'),
(25, 'Quail farm', '2014-02-14 05:31:13', 7, 'Chianda'),
(34, 'goal', '2014-02-14 12:36:23', 1, 'Chianda'),
(35, 'valentines huh?', '2014-02-14 13:48:30', 16, 'Chianda'),
(38, 'nigga', '2014-02-17 11:37:15', 3, 'Chianda'),
(39, 'Rabbit farming', '2014-02-17 12:20:41', 10, 'Chianda'),
(40, 'chicken', '2014-02-17 12:35:46', 10, 'Chianda'),
(41, 'another', '2014-02-19 08:29:52', 10, 'Chianda');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `national_id` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `postal_address` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL,
  `role` tinyint(4) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `con_password` varchar(200) NOT NULL,
  `opassword` int(30) NOT NULL,
  `npassword` int(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `username`, `national_id`, `email`, `postal_address`, `location`, `mobile_no`, `occupation`, `registration_date`, `active`, `role`, `avatar`, `password`, `con_password`, `opassword`, `npassword`) VALUES
(29, 'Beyonce', 'Knowles', 'beyonce', '252788236', 'beyonce@gmail.com', '28635', 'USA', '0726125893', 'Student', '2014-09-22 15:00:01', 0, 1, '', '88f1798e205c841fe851b42095329f84', '', 0, 0),
(30, 'linda', 'oyanda', 'linda', '', 'linda@gmail.com', '', 'Kenya', '0722799029', '', '2014-02-20 15:51:53', 0, 0, '', 'eaf450085c15c3b880c66d0b78f2c041', '', 0, 0),
(31, 'Ojenge', 'Collins', 'Collo', '328489', 'cojenge@gmail.com', '55534', 'Kenya', '072615115', 'Student', '2014-09-22 15:00:55', 0, 1, '', '1c138fd52ddd771388a5b4c410a9603a', '', 0, 0),
(33, 'Chianda', 'Njogu', 'Chianda', '28452882', 'chiandanj@gmail.com', '15849', 'Kenya', '0724070172', 'Student', '2014-02-21 08:18:59', 0, 1, 'files/avatar/IMG_20131129_070322.jpg', '54c1fb79b39bc07c3585db0b7eb1da29', '', 0, 0),
(55, 'Aaron', 'Ramsey', 'ramsey', '2845858', 'ramsey@gmail.com', '14789', 'Armenia', '0726125893', 'Student', '2014-02-22 07:07:12', 0, 0, 'files/avatar/ramsey.jpg', 'a7aa509c34aad08c76b46bd205955d4b', '', 0, 0),
(56, 'Mesut', 'Ozil', 'mesut', '28452882', 'mesut@gmail.com', '14789', 'England', '0726589457', 'Student', '2014-09-22 14:59:23', 0, 1, '0', 'd595878cf4d099846b16890e7d9fc490', '', 0, 0),
(57, 'Beryl', 'Mungla', 'beryl', '288544', 'bmungla@gmail.com', '12455', 'Azerbaijan', '0705123456', 'Student', '2014-02-09 11:25:43', 0, 1, '0', 'c183f263844f3a731790e4b0889fa3ff', '', 0, 0),
(58, 'Lukas', 'Podolski', 'podolski', '28452882', 'lukas@gmail.com', '14789', 'England', '0724070172', 'football player', '2014-09-22 14:59:40', 0, 1, '0', '1d028378e12ca6bdafa3b8b21bc5a9ea', '', 0, 0),
(59, 'Savio', 'Sunkuli', 'Savio', '2689798', 'savio@gmail.com', '28635', 'Antigua and Barbuda', '0726125893', 'Dev', '2014-02-21 07:47:12', 0, 1, 'files/', 'cf71e1a9345a0b1bdac7d9940d488efc', '', 0, 0),
(83, 'Uhuru', 'Kenyatta', 'uhuru', '45454584', 'uk@gmail.com', '7980', 'Argentina', '0705123456', 'Student', '2014-02-22 05:55:24', 0, 1, 'files/avatar/TTOB_-_Unknown2.jpg', 'c91497eaedfc46b7398ef737efc428e0', '', 0, 0),
(91, 'Njuguna', 'Kabogo', 'kadu', '25455637', 'njugunakabogo@gmail.com', '12455', 'Bahamas', '0724070172', 'singer', '2014-09-22 15:00:32', 0, 1, 'files/avatar/IMG_20140106_143954.jpg', 'd8412e32a3af46aeff95d39d139560a5', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE IF NOT EXISTS `withdrawals` (
  `withdrawal_id` int(100) NOT NULL AUTO_INCREMENT,
  `withdrawal_bank` varchar(100) NOT NULL,
  `withdrawal_amount` int(100) NOT NULL,
  `withdrawal_date` date NOT NULL,
  `withdrawal_reason` text NOT NULL,
  PRIMARY KEY (`withdrawal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`withdrawal_id`, `withdrawal_bank`, `withdrawal_amount`, `withdrawal_date`, `withdrawal_reason`) VALUES
(1, 'Cooperative Bank of Kenya-89803032', 50000, '2014-02-21', 'Deposit for Masii plot'),
(2, 'Cooperative Bank of Kenya-89803032', 5000, '2014-02-22', 'team building'),
(3, 'Cooperative Bank of Kenya-89803032', 200, '2014-02-22', 'misc'),
(4, 'Cooperative Bank of Kenya-89803032', 8999, '2014-02-22', 'ikea set');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
