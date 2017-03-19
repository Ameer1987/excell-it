-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2017 at 10:48 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

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
-- Table structure for table `careers`
--

CREATE TABLE IF NOT EXISTS `careers` (
`id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `header`, `details`, `image_name`) VALUES
(1, 'kadjasd', '<p>asdaksd</p>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
`id` int(11) NOT NULL,
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
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `headers`
--

CREATE TABLE IF NOT EXISTS `headers` (
`id` int(11) NOT NULL,
  `logo_name` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `text` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `image_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `homepage_sliders`
--

CREATE TABLE IF NOT EXISTS `homepage_sliders` (
`id` int(11) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `homepage_sliders`
--

INSERT INTO `homepage_sliders` (`id`, `image_name`, `title`) VALUES
(1, 'Atlas%2013%20cover.jpg', 'adfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `home_middle_snippets`
--

CREATE TABLE IF NOT EXISTS `home_middle_snippets` (
`id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `order` int(11) NOT NULL,
  `image_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `home_upper_snippets`
--

CREATE TABLE IF NOT EXISTS `home_upper_snippets` (
`id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `order` int(11) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `background_colour` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `permalink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
`id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `header`, `details`, `image_name`) VALUES
(1, 'asdasd', '<p>asdasd</p>\r\n', 'sddfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `service_snippets`
--

CREATE TABLE IF NOT EXISTS `service_snippets` (
`id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `intro` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `service_snippets`
--

INSERT INTO `service_snippets` (`id`, `header`, `intro`) VALUES
(1, 'sdkfsdf', '<p>sdfjksldf</p>\r\n'),
(2, 'dfdf', '<p>sdsdf</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `service_snippet_points`
--

CREATE TABLE IF NOT EXISTS `service_snippet_points` (
`id` int(11) NOT NULL,
  `point_detail` varchar(255) NOT NULL,
  `service_snippets_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created`, `modified`, `email`, `password`) VALUES
(1, '2017-03-19 01:31:19', '2017-03-19 01:31:19', 'magdy.yackoub@ideo-cairo.org', '5bb258df6cf4f2c5c49668103794ff988ec6edb4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headers`
--
ALTER TABLE `headers`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage_sliders`
--
ALTER TABLE `homepage_sliders`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_middle_snippets`
--
ALTER TABLE `home_middle_snippets`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_upper_snippets`
--
ALTER TABLE `home_upper_snippets`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_snippets`
--
ALTER TABLE `service_snippets`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_snippet_points`
--
ALTER TABLE `service_snippet_points`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `headers`
--
ALTER TABLE `headers`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `homepage_sliders`
--
ALTER TABLE `homepage_sliders`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `home_middle_snippets`
--
ALTER TABLE `home_middle_snippets`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `home_upper_snippets`
--
ALTER TABLE `home_upper_snippets`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `service_snippets`
--
ALTER TABLE `service_snippets`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `service_snippet_points`
--
ALTER TABLE `service_snippet_points`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
