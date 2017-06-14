-- phpMyAdmin SQL Dump
-- version 4.0.10.16
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 14, 2017 at 11:29 PM
-- Server version: 5.1.73
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `app_elite`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `pizza` int(11) NOT NULL,
  `cheese` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `phone`, `address`, `pizza`, `cheese`, `status`, `created`, `modified`) VALUES
(1, 'Chi Nguyen', '0948482588', 'Ha Noi', 1, 1, 2, '2017-06-14 14:16:35', '2017-06-14 22:51:41'),
(2, 'Justin ', '0978236789', 'NewYork', 4, 2, 1, '2017-06-14 14:16:35', '2017-06-14 22:55:55'),
(3, 'Mark Logan', '0123456789', 'London', 1, 3, 0, '2017-06-14 14:16:35', '2017-06-14 22:55:44'),
(4, '1231231', NULL, '', 1, 0, 0, '2017-06-14 23:08:02', '2017-06-14 23:08:02'),
(5, 'My First Slider', '0972', '', 12, 1, 0, '2017-06-14 23:19:14', '2017-06-14 23:19:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(3, 'admin', '$2a$10$e0MwqbYbStUZgCWUz9Iax.ka9MDmsfNJKUDGIU3tsVNg7e1yOjQ6m', 'admin', '2017-06-14 21:00:03', '2017-06-14 21:00:03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
