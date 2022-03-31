-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2015 at 03:21 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `extreme`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_emp`
--

CREATE TABLE IF NOT EXISTS `add_emp` (
  `EMP_ID` int(11) NOT NULL,
  `F_NAME` varchar(20) NOT NULL,
  `L_NAME` varchar(20) NOT NULL,
  `GENDER` varchar(20) NOT NULL,
  `HOUSE_NO` int(11) NOT NULL,
  `COLONEY` varchar(20) NOT NULL,
  `CITY` varchar(20) NOT NULL,
  `CONTACT` int(11) NOT NULL,
  `CNIC` int(20) NOT NULL,
  `PAY` int(11) NOT NULL,
  `HIRE_DATE` date NOT NULL,
  PRIMARY KEY (`EMP_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_emp`
--

INSERT INTO `add_emp` (`EMP_ID`, `F_NAME`, `L_NAME`, `GENDER`, `HOUSE_NO`, `COLONEY`, `CITY`, `CONTACT`, `CNIC`, `PAY`, `HIRE_DATE`) VALUES
(23456, 'qwerty', 'ertyu', 'sdfghnj', 345, 'fgh', 'gfhn', 45678, 56789, 456, '1231-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `USER_NAME` varchar(20) NOT NULL,
  `PASSWARD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`USER_NAME`, `PASSWARD`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `comment`, `gender`) VALUES
('Ahmad', 'abchdgd@yahoo.com', 'fvghjnmk,', 'MALE'),
('bilal', 'sanbnabnma', 'dsjahjsjkfjsdjakjdhkjnmnhdskjsakjhsjkasjshashk', 'MALE'),
('jkdhfs', 'asdfghjk@gmail', 'etfgvhbjnmkxdfcgvhb', 'MALE');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `FUNCTION_TYPE` varchar(20) NOT NULL,
  `NAME` varchar(11) NOT NULL,
  `PH#` int(11) NOT NULL,
  `ADDRESS` varchar(11) NOT NULL,
  `DATE` date NOT NULL,
  `TIMING` time(4) NOT NULL DEFAULT '00:00:00.0000',
  `PAYMENT_TYPE` varchar(20) NOT NULL,
  `ACCOUNT_NO` int(20) NOT NULL,
  `AMOUNT` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `FUNCTION_TYPE`, `NAME`, `PH#`, `ADDRESS`, `DATE`, `TIMING`, `PAYMENT_TYPE`, `ACCOUNT_NO`, `AMOUNT`) VALUES
(20, 'wert', 'sxdcfgvhn', 345678, 'asdfghj', '2012-02-15', '12:00:00.0000', 'MasterCard', 456789, 1234567);

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `pic` varchar(20000) NOT NULL,
  `pixel` varchar(20) NOT NULL,
  `des` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`id`, `title`, `pic`, `pixel`, `des`) VALUES
(14, 'Tower', 'a1.jpg', '900x800px', 'It is about telling the story'),
(15, 'HP', 'asus-t200ta.jpg', '720x810px', 'It is so important in our profession '),
(16, 'Bikes Stunts', 'bikes_stunts.jpg', '1200x1080px', 'what life is about for them'),
(17, 'Brazil', 'Brazil.jpg', '600x520px', 'aware of what amazing similarities we share.'),
(18, 'Carribean', 'e3.jpg', '1000x700px', 'The Amazing Adventures'),
(19, 'Beuty Of Nature', 'i3.jpg', '900x800px', 'The Best Of Nature'),
(20, 'Poster', 'img.jpg', '1000x700px', 'Inception of The Year'),
(21, 'Stock', 'iStock_000016566511Small-760x505.jpg', '900x800px', 'Invest in big companies'),
(22, 'landscapes', 'landscapes.jpg', '720x810px', 'Toronto is naturally beutifull'),
(23, 'leo lion', 'leo_lion.jpg', '1200x1080px', 'Survival of the fittest'),
(24, 'Old', 'main3.jpg', '1000x700px', 'Memories could bring tears'),
(25, 'Books', 'main4.jpg', '1000x700px', 'Future of mankind'),
(26, 'Pukekura', 'Pukekura.jpg', '1200x1080px', 'stadium in newzealand'),
(27, 'rainbow', 'rainbow.jpg', '1280x1100px', 'After Rain in west country'),
(28, 'timthumb', 'timthumb.php.jpg', '1000x700px', 'concerned over the arrest of 1995'),
(29, 'PalmTrees', 's1.jpg', '1200x1080px', 'Beautifaull Evevning And palm Trees'),
(30, 'Beach', 'w4.jpg', '720x810px', 'West is Great with nits beaches'),
(31, 'Wembley', 'Wembley.jpg', '1100x980px', 'Founded in 1990 by a group of People'),
(32, 'World', 'World_.jpg', '1100x980px', 'Many countries lack not just a right'),
(33, 'Bridge', 'z1.jpg', '1200x1080px', 'Takes a stand against heavy-handed brutality'),
(35, 'Creature', 'WK-A.jpg', '1280x1100px', 'critically underrepresented in digital'),
(36, 'BaseBall Stadium', '800px-B.jpg', '800x700px', 'The Anja Niedringhaus Courage');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE IF NOT EXISTS `sign_up` (
  `NAME` varchar(20) NOT NULL,
  `LAST_NAME` varchar(20) NOT NULL,
  `CNIC` varchar(20) NOT NULL,
  `GENDER` varchar(20) NOT NULL,
  `CONTACT_NO` int(20) NOT NULL,
  `HOUSE_NO` int(20) NOT NULL,
  `COLONEY` varchar(20) NOT NULL,
  `CITY` varchar(20) NOT NULL,
  `USER_NAME` varchar(20) NOT NULL,
  `PASSWARD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`NAME`, `LAST_NAME`, `CNIC`, `GENDER`, `CONTACT_NO`, `HOUSE_NO`, `COLONEY`, `CITY`, `USER_NAME`, `PASSWARD`) VALUES
('Ahmad', 'Usman', '36104-2367678-1', 'MALE', 300, 900, 'shera', 'mehmoodabad', 'khan', '123'),
('asdfgh', 'sdfghjk', '1234567890', 'FeMALE', 1234567890, 34567, 'sdfghjk', 'zxcvbn', 'sam', '1234'),
('', '', '', '', 0, 0, '', '', '', ''),
('', '', '', '', 0, 0, '', '', '', ''),
('asd', 'gfhjbjk', '345678', 'MALE', 3477889, 76, 'jhvhkjn', 'ytfhvhjv', 'ali', '123'),
('', '', '', '', 0, 0, '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
