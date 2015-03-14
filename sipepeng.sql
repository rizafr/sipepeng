-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2015 at 01:36 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sipepeng`
--
CREATE DATABASE IF NOT EXISTS `sipepeng` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sipepeng`;

-- --------------------------------------------------------

--
-- Table structure for table `country_tabel`
--

CREATE TABLE IF NOT EXISTS `country_tabel` (
`id_country` int(11) NOT NULL,
  `country_name` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `country_tabel`
--

INSERT INTO `country_tabel` (`id_country`, `country_name`) VALUES
(1, 'Indonesia'),
(2, 'Jepang'),
(3, 'Malaysia');

-- --------------------------------------------------------

--
-- Table structure for table `orders_tabel`
--

CREATE TABLE IF NOT EXISTS `orders_tabel` (
`id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `order_amount` float NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `products_tabel`
--

CREATE TABLE IF NOT EXISTS `products_tabel` (
`id_product` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` varchar(500) NOT NULL,
  `product_price` float NOT NULL,
  `product_weight` float NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE IF NOT EXISTS `product_categories` (
`id_category` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `states_tabel`
--

CREATE TABLE IF NOT EXISTS `states_tabel` (
`id_state` int(11) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `states_tabel`
--

INSERT INTO `states_tabel` (`id_state`, `state`) VALUES
(1, 'Jawa Barat'),
(2, 'Jawa Tengah'),
(3, 'Jawa Timur'),
(4, 'DKI Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `users_status`
--

CREATE TABLE IF NOT EXISTS `users_status` (
`id_status` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users_status`
--

INSERT INTO `users_status` (`id_status`, `status`) VALUES
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `users_tabel`
--

CREATE TABLE IF NOT EXISTS `users_tabel` (
`id_user` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `confirm_password` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `first_address` varchar(100) NOT NULL,
  `second_address` varchar(100) DEFAULT NULL,
  `user_phone` varchar(15) NOT NULL,
  `user_city` varchar(100) NOT NULL,
  `user_zip` varchar(12) NOT NULL,
  `id_state` varchar(50) NOT NULL,
  `id_country` varchar(50) NOT NULL,
  `user_agree` tinyint(1) NOT NULL,
  `last_login` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users_tabel`
--

INSERT INTO `users_tabel` (`id_user`, `id_status`, `user_email`, `user_password`, `confirm_password`, `user_name`, `first_address`, `second_address`, `user_phone`, `user_city`, `user_zip`, `id_state`, `id_country`, `user_agree`, `last_login`, `created`, `modified`) VALUES
(1, 1, 'admin@sipepeng.com', 'admin', 'admin', 'Administrator', 'Leuwigajah', '', '085720573592', 'Cimahi', '40511', '1', '1', 1, '2015-03-14 19:33:52', '0000-00-00 00:00:00', '2015-03-14 17:48:01'),
(2, 2, 'dkp@gmail.com', 'dkp', 'dkp', 'DKP', 'Cimahi', '', '085720264347', 'Cimahi', '40615', '1', '1', 1, '2015-02-05 00:19:41', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 2, 'pu@gmail.com', 'pu', 'pu', 'Dinas PU', 'Cimahi', 'Jalan Manglayang Bawah No 457 Cilengkrang II', '085720264349', 'Cimahi', '40614', '1', '1', 1, '2015-02-05 01:21:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country_tabel`
--
ALTER TABLE `country_tabel`
 ADD PRIMARY KEY (`id_country`);

--
-- Indexes for table `orders_tabel`
--
ALTER TABLE `orders_tabel`
 ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `products_tabel`
--
ALTER TABLE `products_tabel`
 ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
 ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `states_tabel`
--
ALTER TABLE `states_tabel`
 ADD PRIMARY KEY (`id_state`);

--
-- Indexes for table `users_status`
--
ALTER TABLE `users_status`
 ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `users_tabel`
--
ALTER TABLE `users_tabel`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country_tabel`
--
ALTER TABLE `country_tabel`
MODIFY `id_country` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders_tabel`
--
ALTER TABLE `orders_tabel`
MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products_tabel`
--
ALTER TABLE `products_tabel`
MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `states_tabel`
--
ALTER TABLE `states_tabel`
MODIFY `id_state` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users_status`
--
ALTER TABLE `users_status`
MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users_tabel`
--
ALTER TABLE `users_tabel`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
