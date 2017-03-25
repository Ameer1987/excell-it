-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 25, 2017 at 03:09 AM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `excell`
--

-- --------------------------------------------------------

--
-- Table structure for table `bottom_1_blocks`
--

CREATE TABLE IF NOT EXISTS `bottom_1_blocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text NOT NULL,
  `text` text NOT NULL,
  `image_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bottom_1_blocks`
--

INSERT INTO `bottom_1_blocks` (`id`, `header`, `text`, `image_name`) VALUES
(1, 'About', '', 'page-3_img04.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bottom_2_blocks`
--

CREATE TABLE IF NOT EXISTS `bottom_2_blocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text NOT NULL,
  `text` text NOT NULL,
  `image_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bottom_2_blocks`
--

INSERT INTO `bottom_2_blocks` (`id`, `header`, `text`, `image_name`) VALUES
(1, 'Services', '<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>\r\n\r\n<ul>\r\n	<li>point 1</li>\r\n	<li>point 2</li>\r\n	<li>point 3</li>\r\n</ul>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `bottom_3_blocks`
--

CREATE TABLE IF NOT EXISTS `bottom_3_blocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text NOT NULL,
  `text` text NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `background_colour` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bottom_3_blocks`
--

INSERT INTO `bottom_3_blocks` (`id`, `header`, `text`, `image_name`, `background_colour`) VALUES
(1, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bottom_4_blocks`
--

CREATE TABLE IF NOT EXISTS `bottom_4_blocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text NOT NULL,
  `text` text NOT NULL,
  `image_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `bottom_4_blocks`
--

INSERT INTO `bottom_4_blocks` (`id`, `header`, `text`, `image_name`) VALUES
(1, 'header 1', 'quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatu. Lorem ipsum dolor sit amet conse ctetur adipisicing e', ''),
(2, 'header 2', '<p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatu. Lorem ipsum dolor sit amet conse ctetur adipisicing e</p>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE IF NOT EXISTS `careers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text NOT NULL,
  `details` text NOT NULL,
  `image_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `header`, `details`, `image_name`) VALUES
(1, 'Apply Now', '<p>Please send us your cv at info@excell-it.com</p>\r\n', 'Apply-Careers-2.png');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `position_latitude` varchar(50) NOT NULL,
  `position_longitude` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `facebook_link` varchar(50) NOT NULL,
  `twitter_link` varchar(50) NOT NULL,
  `skype_link` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `details`, `mobile`, `position_latitude`, `position_longitude`, `phone`, `address`, `facebook_link`, `twitter_link`, `skype_link`, `email`) VALUES
(1, '', '', 'M: +971509137346, T+971509137346', '25.058320', '55.136063', 'JLT, Dubai United Arab Emirates', 'Unit No: 3O-01-994 Jewellery & Gemplex 3', '', '', '', 'info@excell-it.com');

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE IF NOT EXISTS `headers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo_name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `text` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `headers`
--

INSERT INTO `headers` (`id`, `logo_name`, `phone`, `text`, `message`, `image_name`) VALUES
(1, '', '0509137346', 'One of our representatives will happily contact you within 24 hours. For urgent needs call us at', '', 'logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_sliders`
--

CREATE TABLE IF NOT EXISTS `homepage_sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_name` varchar(100) NOT NULL,
  `title` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `homepage_sliders`
--

INSERT INTO `homepage_sliders` (`id`, `image_name`, `title`) VALUES
(4, 'Black-and-Blue-Wallpaper-Free-Download.jpg', 'Reducing software cost and ensuring license compliance'),
(5, 'Grey-Abstract-Wavy-Paper-Background.jpg', 'Detects and neutralizes subtle, stealthy threats'),
(6, 'Grey-Abstract-background.jpg', 'Donâ€™t just react faster to incidents and problems, get proactive');

-- --------------------------------------------------------

--
-- Table structure for table `home_middle_snippets`
--

CREATE TABLE IF NOT EXISTS `home_middle_snippets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text NOT NULL,
  `details` text NOT NULL,
  `order` int(11) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `home_middle_snippets`
--

INSERT INTO `home_middle_snippets` (`id`, `header`, `details`, `order`, `image_name`) VALUES
(1, 'End User Experience Management', '<p>Excell IT helps customers&nbsp;revolutionize incident and problem management,&nbsp;reducing end-user incidents up to 25%</p>\r\n', 0, 'page-4_img01.jpg'),
(2, 'Incididunt ut labore et dolore', '<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>\r\n', 0, 'page-3_img05.jpg'),
(3, 'Incididunt ut labore et dolore', '<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor.</p>\r\n', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `home_upper_snippets`
--

CREATE TABLE IF NOT EXISTS `home_upper_snippets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text NOT NULL,
  `details` text NOT NULL,
  `order` int(11) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `background_colour` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `home_upper_snippets`
--

INSERT INTO `home_upper_snippets` (`id`, `header`, `details`, `order`, `image_name`, `background_colour`) VALUES
(1, 'test ', '<p>header one</p>\r\n', 0, '1.png', ''),
(2, 'test', '<p>test 2</p>\r\n', 0, '2.png', ''),
(3, 'test 3', '<p>test</p>\r\n', 0, '3.png', ''),
(4, 'test4', '<p>test</p>\r\n', 0, '4.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `permalink` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE IF NOT EXISTS `partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text NOT NULL,
  `details` text NOT NULL,
  `image_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text NOT NULL,
  `details` text NOT NULL,
  `image_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `header`, `details`, `image_name`) VALUES
(1, 'License Optimization & End-user Analystics', '', 'page-3_img06.jpg'),
(2, 'Software Asset Management', '<p>We empowers organizations to optimize software licenses &amp; reduce costs by providing insight &amp; control of software consumption across all devices &amp; platforms</p>\r\n\r\n<p>We are proactively managing software license optimization which can help your organization to reduce the likelihood and cost of a software audit as well as delivering bottom-line financial benefits</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'page-3_img04.jpg'),
(3, 'Enterprise Immune System & Cyber Defense', '', 'page-3_img05.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service_snippets`
--

CREATE TABLE IF NOT EXISTS `service_snippets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text NOT NULL,
  `intro` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `service_snippets`
--

INSERT INTO `service_snippets` (`id`, `header`, `intro`) VALUES
(1, 'Excell IT', '<p>Excell IT</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `service_snippet_points`
--

CREATE TABLE IF NOT EXISTS `service_snippet_points` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `point_detail` text NOT NULL,
  `service_snippet_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `service_snippet_points`
--

INSERT INTO `service_snippet_points` (`id`, `point_detail`, `service_snippet_id`) VALUES
(1, 'best services', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created`, `modified`, `email`, `password`) VALUES
(1, '2017-03-19 01:31:19', '2017-03-19 12:39:33', 'admin-user@excell-it.com', '93b989b7ccd9d623aa611815b01eb6a05aff0e35');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
