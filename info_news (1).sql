-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 02, 2020 at 10:23 AM
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
-- Table structure for table `info_news`
--

DROP TABLE IF EXISTS `info_news`;
CREATE TABLE IF NOT EXISTS `info_news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(255) NOT NULL,
  `news_short_description` text NOT NULL,
  `news_full_content` text NOT NULL,
  `news_author` varchar(120) NOT NULL,
  `news_published_on` datetime NOT NULL,
  `news_image` varchar(300) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_news`
--

INSERT INTO `info_news` (`news_id`, `news_title`, `news_short_description`, `news_full_content`, `news_author`, `news_published_on`, `news_image`) VALUES
(2, 'test news 1', 'BBC News is an operational business', 'BBC News is an operational business division of the British Broadcasting Corporation responsible for the gathering and broadcasting of news and current affairs.', 'ahmed', '2019-12-25 00:00:00', 'images\\news1.JPG'),
(3, 'news test 2', 'BBC News is an operational 2', 'BBC 22222 News is an operational business division of the British Broadcasting Corporation responsible for the gathering and broadcasting of news and current affairs.', 'ali', '2019-12-30 00:00:00', 'images\\news2.JPG'),
(4, 'Health Ministry bans all ranitidine medicines', 'CAIRO, Sept 20 (MENA) - The Ministry of Health and Population has banned all ranitidine medicines after discovering that the popular heartburn medication Zantac contain low levels of the nitrosamine impurity (N-nitrosodimethylamine) (NDMA).', 'CAIRO, Sept 20 (MENA) - The Ministry of Health and Population has banned all ranitidine medicines after discovering that the popular heartburn medication Zantac contain low levels of the nitrosamine impurity (N-nitrosodimethylamine) (NDMA).\r\n\r\nIn a statement released on Friday, the ministry said samples of the Zantac drug will be analysed by the National Organization for Drug and Control Research.\r\n\r\nThe Health Ministry\'s ban comes upon reports issued by the US Food and Drug Administration and the European Medicines Agency about the presence of the NDMA impurity in the Zantac product.\r\n\r\nThe ministry added that it will take all precautionary measures to ensure the safety of ranitidine medicines as per the globally-accredited control procedures.\r\n\r\nThe ministry will decide whether to release or pull out the ranitidine medicines from pharmacies as per the lab results, the statement read.', 'MENA', '2019-12-25 00:00:00', 'images\\healthnewsimage.JPG'),
(5, 'test new final', 'ckkkkkkkkkk', 'dddddddddd', 'ali', '2020-01-02 00:00:00', 'images/apple.jpg'),
(6, 'ttttttttttttttt', 'eeeeeeeeeeeeeee', 'eeeeeeeeeeeeeeeeeeeeee', 'ali', '2020-10-02 00:00:00', 'images/apple.jpg'),
(7, 'test new 3', 'Established in 1984 and acquired by the Group in 2014, Cleopatra Hospital is CHGâ€™s flagship hospital with a 35 yearlong track record of operational excellence, over 40 specialties and sub-specialties currently offered at the facility, and a strong network of consultants operating out of the hospital', 'Established in 1984 and acquired by the Group in 2014, Cleopatra Hospital is CHGâ€™s flagship hospital with a 35 yearlong track record of operational excellence, over 40 specialties and sub-specialties currently offered at the facility, and a strong network of consultants operating out of the hospital. Over the years, Cleopatra Hospital has become an industry leader for ICU and outpatient services. The hospital is home to two of the Groupâ€™s centers of excellence, covering micro-invasive surgeries and orthopedic care. Cleopatra Hospital is outfitted with one of the countryâ€™s best-staffed emergency rooms and is supported by specialized medical doctors as well as general practitioners. In 2006, CHG acquired a facility adjacent to Cleopatra Hospital and has since developed it into an extension to address the high occupancy rate of its outpatient clinic, intensive care unit (ICU), and other facilities. More recently, CHG has made a number of improvements at the hospital, including significant investments in the hospitalâ€™s medical technology to improve patient outcomes, as well as centralizing the hospitalâ€™s services in line with an integrated organizational structure that allows for increased synergies and cross-referrals within the Groupâ€™s wider platform', 'Ahmed', '2008-06-12 00:00:00', 'images/CLEOPATRA HOSPITAL.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
