-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 02, 2020 at 10:24 AM
-- Server version: 5.7.26
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `economy_news`
--

DROP TABLE IF EXISTS `economy_news`;
CREATE TABLE IF NOT EXISTS `economy_news` (
  `news_title` varchar(255) NOT NULL,
  `news_short_description` text NOT NULL,
  `news_full_content` text NOT NULL,
  `news_author` varchar(120) NOT NULL,
  `news_published_on` datetime NOT NULL,
  `news_image` varchar(300) NOT NULL,
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `economy_news`
--

INSERT INTO `economy_news` (`news_title`, `news_short_description`, `news_full_content`, `news_author`, `news_published_on`, `news_image`, `news_id`) VALUES
('test new final', 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', 'flmkldznbngfo;nfgdbo', 'ali', '2020-02-02 00:00:00', 'images/apple.jpg', 1),
('test new final', 'fks;vdlnv;lgdbnl;fg;gfb;lg;l', 'kv m;lv ;l;lv;lv ;l l;l;bv', 'ali', '2002-03-02 00:00:00', 'images/apple.jpg', 2),
('ali', 'ali', 'ali', 'ali', '2020-03-02 00:00:00', 'images/apple.jpg', 3),
('Economy of Egypt', '\r\n\r\nEconomic growth slowed marginally in the first quarter of fiscal year 2020, which ran from July to September, according to a preliminary GDP release. ', '\r\nEconomic growth slowed marginally in the first quarter of fiscal year 2020, which ran from July to September, according to a preliminary GDP release. Although comprehensive data is not yet available, private consumption was likely strong, given that inflation cooled significantly in Q1 FY 2020 and that the unemployment rate dropped to 7.5% in Q4 FY 2019. Moreover, upbeat bank lending in the first two months of Q1 FY 2020 suggests fixed investment held up well, while recent improvements in the ease of doing business in Egypt, as highlighted by the World Bankâ€™s new Doing Business report, should have supported investment activity. Turning to the current quarter ending in December, the economy seems to be slowing slightly, as suggested by the non-oil private sector PMI dipping deeper into contractionary territory in October on falling output and new business orders.', 'Mohamed', '2019-11-26 00:00:00', 'images/economyimage.jpg', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
