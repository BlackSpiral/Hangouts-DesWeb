-- phpMyAdmin SQL Dump
-- version 3.4.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 24, 2013 at 09:09 AM
-- Server version: 5.5.23
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iphi_desweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci NOT NULL,
  `temporal_data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`, `temporal_data`) VALUES
('4a711872725231daf8612150c9c7472b', '201.137.10.181', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_3) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.65 Safari/537.31', 1366809724, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"phi@blackspiral.eu";s:6:"nombre";s:14:"Developer Jedi";s:5:"nivel";s:1:"1";}', ''),
('2755cd533fda6b31d312760e6dfcf1be', '201.137.10.181', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_3) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.65 Safari/537.31', 1366781338, 'a:4:{s:9:"user_data";s:0:"";s:5:"email";s:18:"phi@blackspiral.eu";s:6:"nombre";s:14:"Developer Jedi";s:5:"nivel";s:1:"1";}', '');

-- --------------------------------------------------------

--
-- Table structure for table `io_events`
--

CREATE TABLE IF NOT EXISTS `io_events` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `youtube_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hashtag` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `published` datetime NOT NULL,
  `duration_format` time NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `0_thumbnail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `1_thumbnail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `2_thumbnail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `3_thumbnail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `links` text COLLATE utf8_unicode_ci NOT NULL,
  `files` text COLLATE utf8_unicode_ci NOT NULL,
  `notes` text COLLATE utf8_unicode_ci NOT NULL,
  `pending` int(1) NOT NULL DEFAULT '1',
  `create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_edit` datetime NOT NULL,
  `create_by` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `last_edit_by` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `io_events`
--

INSERT INTO `io_events` (`id`, `youtube_id`, `title`, `hashtag`, `published`, `duration_format`, `description`, `0_thumbnail`, `1_thumbnail`, `2_thumbnail`, `3_thumbnail`, `links`, `files`, `notes`, `pending`, `create`, `last_edit`, `create_by`, `last_edit_by`) VALUES
(1, '6xhiI3Ziflg', 'Patric La Funk - Baltic (Original Mix)', '****************,,', '2011-10-25 12:10:34', '00:06:37', 'Listen on Spotify: http://spoti.fi/BalticSF\nDownload on Beatport: http://bit.ly/LaFunkBalticBP\nDownload on iTunes: http://bit.ly/BalticIT\n\nAfter collabs with Fedde le Grand and Dave Spoon, internationally acclaimed producer Patric La funk rocks the ZOUK label with the contagious ''Baltic''.\n\nGerman producer Patric La Frunk has come a long way since first bursting onto the scene. He''s seen some of the world''s most fancy clubs, travelled from Ibiza to Beijing and Miami to Sydney and shared his studio with some of the grandmasters in house music. Remixes for Wally Lopez, Moguai, Supermode and Sharam made him the next big promise of the future. And that future is now.\n\nOn ZOUK, he lands with the bold and bulky bassed ''Baltic''. It hits in deep, but soon lifts the house spirit with a playful, melodic progressive-house sound. Synthy stabs, electric vibes and a contagious hook. That''s all you need for peak-time pleasure!\n \nTracklist\n1. Baltic (Original Mix)', 'http://i.ytimg.com/vi/6xhiI3Ziflg/0.jpg', 'http://i.ytimg.com/vi/6xhiI3Ziflg/1.jpg', 'http://i.ytimg.com/vi/6xhiI3Ziflg/2.jpg', 'http://i.ytimg.com/vi/6xhiI3Ziflg/3.jpg', '', '', '', 1, '2013-04-24 05:33:13', '0000-00-00 00:00:00', 'phi@blackspiral.eu', ''),
(2, 'kYZjsVO1YFk', 'Kleerup with Lykke Li - Until we bleed (HQ)', '****************,,', '2008-10-23 13:18:41', '00:04:25', 'song from Kleerup''s solo album "Kleerup" in stores now :)', 'http://i.ytimg.com/vi/kYZjsVO1YFk/0.jpg', 'http://i.ytimg.com/vi/kYZjsVO1YFk/1.jpg', 'http://i.ytimg.com/vi/kYZjsVO1YFk/2.jpg', 'http://i.ytimg.com/vi/kYZjsVO1YFk/3.jpg', '', '', '', 1, '2013-04-24 13:22:15', '0000-00-00 00:00:00', 'phi@blackspiral.eu', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(99) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `movil` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` text COLLATE utf8_unicode_ci NOT NULL,
  `nivel` int(1) NOT NULL DEFAULT '0',
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `nombre`, `telefono`, `movil`, `direccion`, `nivel`, `last_login`) VALUES
(1, 'phi@blackspiral.eu', '2716373f1a0b85c7d8fb074fb4fc61c7', 'Developer Jedi', '5533667788', '', 'una dirección ', 1, '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
