-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 28, 2017 at 12:26 PM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniinc`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `about_id` int(11) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `name` varchar(20) NOT NULL,
  `citizenship` varchar(50) NOT NULL,
  `residence` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `job` varchar(100) NOT NULL,
  `hometown` varchar(50) NOT NULL,
  `resume` varchar(250) NOT NULL,
  `projects` int(11) NOT NULL,
  `any` int(11) NOT NULL,
  `anyy` int(11) NOT NULL,
  `servicea` varchar(100) NOT NULL,
  `serviceb` varchar(100) NOT NULL,
  `servicec` varchar(100) NOT NULL,
  `serviced` varchar(100) NOT NULL,
  `servicee` varchar(100) NOT NULL,
  `servicef` varchar(100) NOT NULL,
  `deskripsia` varchar(100) NOT NULL,
  `deskripsib` varchar(100) NOT NULL,
  `deskripsic` varchar(100) NOT NULL,
  `deskripsid` varchar(100) NOT NULL,
  `deskripsie` varchar(100) NOT NULL,
  `deskripsif` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `deskripsi`, `name`, `citizenship`, `residence`, `age`, `job`, `hometown`, `resume`, `projects`, `any`, `anyy`, `servicea`, `serviceb`, `servicec`, `serviced`, `servicee`, `servicef`, `deskripsia`, `deskripsib`, `deskripsic`, `deskripsid`, `deskripsie`, `deskripsif`) VALUES
(1, 'fakhri, means A PRIDE, My mother gave that name. so I''ll try to be proud for My mother, and you from me. I''m simple person, although it does not look simple HAHA. I liked adventure in my beloved country. but I prefer to make you smile with my work.\r\n\r\nand\r\n\r\nwarm regards to black coffee lovers', 'Muhammad Fakhrizal', 'Indonesia', 'DKI Jakarta', 20, 'Student University, Freelancer', 'Jakarta Selatan', 'dropbox.com', 20, 10, 150, 'WEB DEVELOPMENT', 'IDEA', 'Futsal', 'ANALYTICS', 'Network', 'Android', 'For business website, for sure, there are of cloud on a cloud. so I can not force it to be the top o', 'I will give all my ideas, for you', 'Want to Sparing? haha please let me know', 'Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id e', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labor', 'Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariat');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` smallint(5) NOT NULL,
  `banner_page_id` smallint(5) NOT NULL,
  `banner_category_id` smallint(5) NOT NULL,
  `banner_size_id` smallint(5) NOT NULL,
  `banner_name` varchar(50) NOT NULL,
  `banner_caption` varchar(200) NOT NULL,
  `banner_url` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `extention` varchar(30) NOT NULL,
  `author` smallint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_page_id`, `banner_category_id`, `banner_size_id`, `banner_name`, `banner_caption`, `banner_url`, `file`, `extention`, `author`) VALUES
(1, 1, 1, 1, 'Banner 3', '', '', 'uploads/image/banners/12_160114070350.jpg', 'jpg', 27),
(2, 1, 1, 1, 'Banner 2', '<p>.</p>\r\n', '', 'uploads/image/banners/11_160114070341.jpg', 'jpg', 27),
(3, 1, 1, 1, 'Banner 1', '', '', 'uploads/image/banners/1_160114070332.jpg', 'jpg', 27);

-- --------------------------------------------------------

--
-- Table structure for table `banner_category`
--

CREATE TABLE `banner_category` (
  `banner_category_id` smallint(5) NOT NULL,
  `page_id` smallint(5) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_category`
--

INSERT INTO `banner_category` (`banner_category_id`, `page_id`, `category_name`) VALUES
(1, 1, 'Hero Banner'),
(2, 2, 'Static Banner'),
(3, 3, 'Static Banner'),
(4, 4, 'Static Banner'),
(5, 5, 'Static Banner'),
(6, 6, 'Static Banner');

-- --------------------------------------------------------

--
-- Table structure for table `banner_size`
--

CREATE TABLE `banner_size` (
  `banner_size_id` smallint(5) NOT NULL,
  `banner_category_id` smallint(5) NOT NULL,
  `size` varchar(50) NOT NULL,
  `size_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_size`
--

INSERT INTO `banner_size` (`banner_size_id`, `banner_category_id`, `size`, `size_name`) VALUES
(1, 1, '1606x508', '1606 x 508 (Slideshow)'),
(2, 2, '1606x508', '1606 x 508 (Slideshow)'),
(3, 3, '1606x508', '1606 x 508 (Slideshow)'),
(4, 4, '1606x508', '1606 x 508 (Slideshow)'),
(5, 5, '1606x508', '1606 x 508 (Slideshow)'),
(6, 6, '1606x508', '1606 x 508 (Slideshow)');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` smallint(5) NOT NULL,
  `blog_category_id` smallint(5) DEFAULT NULL,
  `judul` varchar(25) NOT NULL,
  `isi_blog` varchar(500) NOT NULL,
  `status` enum('draft','publish') NOT NULL,
  `filetype` enum('image','pdf','youtube') NOT NULL,
  `file` varchar(255) NOT NULL,
  `extension` varchar(30) NOT NULL,
  `youtube_id` varchar(255) DEFAULT NULL,
  `view` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_category_id`, `judul`, `isi_blog`, `status`, `filetype`, `file`, `extension`, `youtube_id`, `view`, `date`) VALUES
(1, 72, 'Korupsi ', 'Ada yang lagi korupsi', '', 'image', 'uploads/blog/12998721_1013345042068308_162442904440323921_n_160815070656.jpg', 'jpg', NULL, 0, '2016-08-31'),
(2, 73, 'Jalan-Jalan', 'Merbabu', 'draft', 'image', 'uploads/blog/IMG_20160727_083640878_160815071849.jpg', 'jpg', NULL, 0, '2016-08-31'),
(3, 72, 'Kopi Mirna', 'Mendingan kopi item enak dah', '', 'image', 'uploads/blog/06_160815022816.jpg', 'jpg', NULL, 0, '2016-08-01'),
(4, 74, 'Robot', 'Bikin Robot Yuk', '', 'image', 'uploads/blog/video_160822023217.jpg', 'jpg', NULL, 0, '2016-08-31');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `blog_category_id` smallint(5) NOT NULL,
  `blog_category_name` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`blog_category_id`, `blog_category_name`, `date`) VALUES
(72, 'News', '0000-00-00'),
(73, 'Adventure', '0000-00-00'),
(74, 'Teknologi', '0000-00-00'),
(75, '1', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `blog_child_category`
--

CREATE TABLE `blog_child_category` (
  `child_category_id` smallint(5) NOT NULL,
  `category_id` smallint(5) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog_image_size`
--

CREATE TABLE `blog_image_size` (
  `blog_size_id` int(11) NOT NULL,
  `category_id` smallint(5) NOT NULL,
  `size` varchar(30) NOT NULL,
  `size_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_image_size`
--

INSERT INTO `blog_image_size` (`blog_size_id`, `category_id`, `size`, `size_name`) VALUES
(24, 44, '847x470', '(847x470) px - Top'),
(25, 45, '847x470', '(847x470) px - Top'),
(26, 46, '847x470', '(847x470) px - Top'),
(27, 47, '847x470', '(847x470) px - Top'),
(29, 53, '847x470', '(847x470) px - Top'),
(30, 2, '847x470', '(847x470) px - Top'),
(40, 65, '847x470', '(847x470) px - Top');

-- --------------------------------------------------------

--
-- Table structure for table `blog_static`
--

CREATE TABLE `blog_static` (
  `blog_id` smallint(5) NOT NULL,
  `blog_category_id` smallint(5) NOT NULL,
  `status` enum('draft','publish') NOT NULL,
  `filetype` enum('image','pdf','youtube') NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `extention` varchar(30) DEFAULT NULL,
  `youtube_id` varchar(255) DEFAULT NULL,
  `view` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` smallint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_static`
--

INSERT INTO `blog_static` (`blog_id`, `blog_category_id`, `status`, `filetype`, `file`, `extention`, `youtube_id`, `view`, `create_date`, `author`) VALUES
(1, 1, 'publish', 'image', '', '', NULL, 0, '2015-11-21 08:53:23', 27),
(2, 2, 'draft', 'image', '', '', NULL, 0, '2015-11-22 13:44:58', 27),
(3, 3, 'draft', 'image', '', '', NULL, 0, '2015-11-23 04:13:18', 27),
(4, 4, 'draft', 'image', 'uploads/image/blog/8_151119035813.jpg', 'jpg', NULL, 0, '2015-11-19 14:58:13', 27),
(5, 5, 'draft', 'image', 'uploads/image/blog/blog1_151123051453.jpg', 'jpg', NULL, 0, '2015-11-23 04:14:53', 27),
(6, 6, 'draft', 'image', 'uploads/image/blog/blog1_151123051551.jpg', 'jpg', NULL, 0, '2015-11-23 04:15:52', 27);

-- --------------------------------------------------------

--
-- Table structure for table `blog_static_category`
--

CREATE TABLE `blog_static_category` (
  `blog_category_id` smallint(5) NOT NULL,
  `page_id` smallint(5) NOT NULL,
  `blog_category_name` varchar(100) NOT NULL,
  `order_no` smallint(2) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` smallint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_static_category`
--

INSERT INTO `blog_static_category` (`blog_category_id`, `page_id`, `blog_category_name`, `order_no`, `create_date`, `author`) VALUES
(1, 5, 'Single Page', 1, '2015-11-19 09:46:18', 1),
(2, 6, 'About', 0, '2015-11-19 10:16:38', 1),
(3, 6, 'Help', 0, '2015-11-19 10:16:41', 1),
(4, 6, 'Developers', 0, '2015-11-19 10:22:43', 1),
(5, 6, 'Terms', 0, '2015-11-19 10:22:46', 1),
(6, 6, 'Privacy', 0, '2015-11-19 10:22:48', 1),
(37, 4, 'dasdas55', 0, '2015-11-19 07:29:13', 27),
(38, 5, 'Default', 0, '2015-11-19 07:31:45', 0),
(39, 6, 'Privacy', 0, '2015-11-19 08:04:31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('78ae6b350ad49f0058946087318cfbe6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/56.0.2924.87 Safari/537.36', 1488307442, '');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` smallint(3) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `file` varchar(255) NOT NULL,
  `extention` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` smallint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `file`, `extention`, `date`, `author`) VALUES
(2, 'Cakra Tunggal', 'uploads/image/client/cakra-tunggal-steel_160112083546.png', 'png', '2016-01-12 19:35:46', 27),
(3, 'Hotel Santika', 'uploads/image/client/hotel-santika_160112083608.png', 'png', '2016-01-12 19:36:08', 27),
(4, 'Mpti', 'uploads/image/client/mpti_160112083614.png', 'png', '2016-01-12 19:36:14', 27);

-- --------------------------------------------------------

--
-- Table structure for table `contact_message`
--

CREATE TABLE `contact_message` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_message`
--

INSERT INTO `contact_message` (`contact_id`, `name`, `email`, `subject`, `message`, `send_date`) VALUES
(1, 'rakaa anggala', 'raka_home11@yahoo.com', 'test subject', 'hii pdi aku tester yaaa', '2015-11-22 13:03:31'),
(2, 'rakaa anggala', 'raka_home11@yahoo.com', 'test subject', 'hii pdi aku tester yaaa', '2015-11-22 13:03:37'),
(3, 'rakaa anggala', 'raka_home11@yahoo.com', 'test subject', 'hii pdi aku tester yaaa', '2015-11-22 13:04:25'),
(4, 'rakaa anggala', 'raka_home11@yahoo.com', 'test subject', 'hii pdi aku tester yaaa', '2015-11-22 13:04:43');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `countries_id` int(11) NOT NULL,
  `countries_idx` varchar(20) NOT NULL,
  `countries_name` varchar(100) NOT NULL,
  `countries_name_flag` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `extention` varchar(30) NOT NULL,
  `active` enum('no','yes') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`countries_id`, `countries_idx`, `countries_name`, `countries_name_flag`, `file`, `extention`, `active`) VALUES
(1, 'AED', 'United Arab Emirates Dirham (AED)', '', '', '', 'no'),
(2, 'AFN', 'Afghan Afghani (AFN)', '', '', '', 'no'),
(3, 'ALL', 'Albanian Lek (ALL)', '', '', '', 'no'),
(4, 'AMD', 'Armenian Dram (AMD)', '', '', '', 'no'),
(5, 'ANG', 'Netherlands Antillean Guilder (ANG)', '', '', '', 'no'),
(6, 'AOA', 'Angolan Kwanza (AOA)', '', '', '', 'no'),
(7, 'ARS', 'Argentine Peso (ARS)', '', '', '', 'no'),
(8, 'AUD', 'Australian Dollar (A$)', 'Australian', '', '', 'no'),
(9, 'AWG', 'Aruban Florin (AWG)', '', '', '', 'no'),
(10, 'AZN', 'Azerbaijani Manat (AZN)', '', '', '', 'no'),
(11, 'BAM', 'Bosnia-Herzegovina Convertible Mark (BAM)', '', '', '', 'no'),
(12, 'BBD', 'Barbadian Dollar (BBD)', '', '', '', 'no'),
(13, 'BDT', 'Bangladeshi Taka (BDT)', '', '', '', 'no'),
(14, 'BGN', 'Bulgarian Lev (BGN)', '', '', '', 'no'),
(15, 'BHD', 'Bahraini Dinar (BHD)', '', '', '', 'no'),
(16, 'BIF', 'Burundian Franc (BIF)', '', '', '', 'no'),
(17, 'BMD', 'Bermudan Dollar (BMD)', '', '', '', 'no'),
(18, 'BND', 'Brunei Dollar (BND)', '', '', '', 'no'),
(19, 'BOB', 'Bolivian Boliviano (BOB)', '', '', '', 'no'),
(20, 'BRL', 'Brazilian Real (R$)', '', '', '', 'no'),
(21, 'BSD', 'Bahamian Dollar (BSD)', '', '', '', 'no'),
(22, 'BTN', 'Bhutanese Ngultrum (BTN)', '', '', '', 'no'),
(23, 'BWP', 'Botswanan Pula (BWP)', '', '', '', 'no'),
(24, 'BYR', 'Belarusian Ruble (BYR)', '', '', '', 'no'),
(25, 'BZD', 'Belize Dollar (BZD)', '', '', '', 'no'),
(26, 'CAD', 'Canadian Dollar (CA$)', '', '', '', 'no'),
(27, 'CDF', 'Congolese Franc (CDF)', '', '', '', 'no'),
(28, 'CHF', 'Swiss Franc (CHF)', '', '', '', 'no'),
(29, 'CLF', 'Chilean Unit of Account (UF) (CLF)', '', '', '', 'no'),
(30, 'CLP', 'Chilean Peso (CLP)', '', '', '', 'no'),
(31, 'CNH', 'CNH (CNH)', '', '', '', 'no'),
(32, 'CNY', 'Chinese Yuan (CN?)', '', '', '', 'no'),
(33, 'COP', 'Colombian Peso (COP)', '', '', '', 'no'),
(34, 'CRC', 'Costa Rican Col?n (CRC)', '', '', '', 'no'),
(35, 'CUP', 'Cuban Peso (CUP)', '', '', '', 'no'),
(36, 'CVE', 'Cape Verdean Escudo (CVE)', '', '', '', 'no'),
(37, 'CZK', 'Czech Republic Koruna (CZK)', '', '', '', 'no'),
(38, 'DEM', 'German Mark (DEM)', '', '', '', 'no'),
(39, 'DJF', 'Djiboutian Franc (DJF)', '', '', '', 'no'),
(40, 'DKK', 'Danish Krone (DKK)', '', '', '', 'no'),
(41, 'DOP', 'Dominican Peso (DOP)', '', '', '', 'no'),
(42, 'DZD', 'Algerian Dinar (DZD)', '', '', '', 'no'),
(43, 'EGP', 'Egyptian Pound (EGP)', '', '', '', 'no'),
(44, 'ERN', 'Eritrean Nakfa (ERN)', '', '', '', 'no'),
(45, 'ETB', 'Ethiopian Birr (ETB)', '', '', '', 'no'),
(46, 'EUR', 'Euro (?)', '', '', '', 'no'),
(47, 'FIM', 'Finnish Markka (FIM)', '', '', '', 'no'),
(48, 'FJD', 'Fijian Dollar (FJD)', '', '', '', 'no'),
(49, 'FKP', 'Falkland Islands Pound (FKP)', '', '', '', 'no'),
(50, 'FRF', 'French Franc (FRF)', '', '', '', 'no'),
(51, 'GBP', 'British Pound Sterling', 'English', 'uploads/image/lang/en_151110123506.png', 'png', 'no'),
(52, 'GEL', 'Georgian Lari (GEL)', '', '', '', 'no'),
(53, 'GHS', 'Ghanaian Cedi (GHS)', '', '', '', 'no'),
(54, 'GIP', 'Gibraltar Pound (GIP)', '', '', '', 'no'),
(55, 'GMD', 'Gambian Dalasi (GMD)', '', '', '', 'no'),
(56, 'GNF', 'Guinean Franc (GNF)', '', '', '', 'no'),
(57, 'GTQ', 'Guatemalan Quetzal (GTQ)', '', '', '', 'no'),
(58, 'GYD', 'Guyanaese Dollar (GYD)', '', '', '', 'no'),
(59, 'HKD', 'Hong Kong Dollar (HK$)', '', '', '', 'no'),
(60, 'HNL', 'Honduran Lempira (HNL)', '', '', '', 'no'),
(61, 'HRK', 'Croatian Kuna (HRK)', '', '', '', 'no'),
(62, 'HTG', 'Haitian Gourde (HTG)', '', '', '', 'no'),
(63, 'HUF', 'Hungarian Forint (HUF)', '', '', '', 'no'),
(64, 'IDR', 'Indonesian Rupiah (IDR)', 'Indonesian', 'uploads/image/lang/id_151110122934.png', 'png', 'yes'),
(65, 'IEP', 'Irish Pound (IEP)', '', '', '', 'no'),
(66, 'ILS', 'Israeli New Sheqel (?)', '', '', '', 'no'),
(67, 'INR', 'Indian Rupee (Rs.)', '', '', '', 'no'),
(68, 'IQD', 'Iraqi Dinar (IQD)', '', '', '', 'no'),
(69, 'IRR', 'Iranian Rial (IRR)', '', '', '', 'no'),
(70, 'ISK', 'Icelandic Kr?na (ISK)', '', '', '', 'no'),
(71, 'ITL', 'Italian Lira (ITL)', '', '', '', 'no'),
(72, 'JMD', 'Jamaican Dollar (JMD)', '', '', '', 'no'),
(73, 'JOD', 'Jordanian Dinar (JOD)', '', '', '', 'no'),
(74, 'JPY', 'Japanese Yen (?)', '', '', '', 'no'),
(75, 'KES', 'Kenyan Shilling (KES)', '', '', '', 'no'),
(76, 'KGS', 'Kyrgystani Som (KGS)', '', '', '', 'no'),
(77, 'KHR', 'Cambodian Riel (KHR)', '', '', '', 'no'),
(78, 'KMF', 'Comorian Franc (KMF)', '', '', '', 'no'),
(79, 'KPW', 'North Korean Won (KPW)', '', '', '', 'no'),
(80, 'KRW', 'South Korean Won (?)', '', '', '', 'no'),
(81, 'KWD', 'Kuwaiti Dinar (KWD)', '', '', '', 'no'),
(82, 'KYD', 'Cayman Islands Dollar (KYD)', '', '', '', 'no'),
(83, 'KZT', 'Kazakhstani Tenge (KZT)', '', '', '', 'no'),
(84, 'LAK', 'Laotian Kip (LAK)', '', '', '', 'no'),
(85, 'LBP', 'Lebanese Pound (LBP)', '', '', '', 'no'),
(86, 'LKR', 'Sri Lankan Rupee (LKR)', '', '', '', 'no'),
(87, 'LRD', 'Liberian Dollar (LRD)', '', '', '', 'no'),
(88, 'LSL', 'Lesotho Loti (LSL)', '', '', '', 'no'),
(89, 'LTL', 'Lithuanian Litas (LTL)', '', '', '', 'no'),
(90, 'LVL', 'Latvian Lats (LVL)', '', '', '', 'no'),
(91, 'LYD', 'Libyan Dinar (LYD)', '', '', '', 'no'),
(92, 'MAD', 'Moroccan Dirham (MAD)', '', '', '', 'no'),
(93, 'MDL', 'Moldovan Leu (MDL)', '', '', '', 'no'),
(94, 'MGA', 'Malagasy Ariary (MGA)', '', '', '', 'no'),
(95, 'MKD', 'Macedonian Denar (MKD)', '', '', '', 'no'),
(96, 'MMK', 'Myanma Kyat (MMK)', '', '', '', 'no'),
(97, 'MNT', 'Mongolian Tugrik (MNT)', '', '', '', 'no'),
(98, 'MOP', 'Macanese Pataca (MOP)', '', '', '', 'no'),
(99, 'MRO', 'Mauritanian Ouguiya (MRO)', '', '', '', 'no'),
(100, 'MUR', 'Mauritian Rupee (MUR)', '', '', '', 'no'),
(101, 'MVR', 'Maldivian Rufiyaa (MVR)', '', '', '', 'no'),
(102, 'MWK', 'Malawian Kwacha (MWK)', '', '', '', 'no'),
(103, 'MXN', 'Mexican Peso (MX$)', '', '', '', 'no'),
(104, 'MYR', 'Malaysian Ringgit (MYR)', '', '', '', 'no'),
(105, 'MZN', 'Mozambican Metical (MZN)', '', '', '', 'no'),
(106, 'NAD', 'Namibian Dollar (NAD)', '', '', '', 'no'),
(107, 'NGN', 'Nigerian Naira (NGN)', '', '', '', 'no'),
(108, 'NIO', 'Nicaraguan C?rdoba (NIO)', '', '', '', 'no'),
(109, 'NOK', 'Norwegian Krone (NOK)', '', '', '', 'no'),
(110, 'NPR', 'Nepalese Rupee (NPR)', '', '', '', 'no'),
(111, 'NZD', 'New Zealand Dollar (NZ$)', '', '', '', 'no'),
(112, 'OMR', 'Omani Rial (OMR)', '', '', '', 'no'),
(113, 'PAB', 'Panamanian Balboa (PAB)', '', '', '', 'no'),
(114, 'PEN', 'Peruvian Nuevo Sol (PEN)', '', '', '', 'no'),
(115, 'PGK', 'Papua New Guinean Kina (PGK)', '', '', '', 'no'),
(116, 'PHP', 'Philippine Peso (Php)', '', '', '', 'no'),
(117, 'PKG', 'PKG (PKG)', '', '', '', 'no'),
(118, 'PKR', 'Pakistani Rupee (PKR)', '', '', '', 'no'),
(119, 'PLN', 'Polish Zloty (PLN)', '', '', '', 'no'),
(120, 'PYG', 'Paraguayan Guarani (PYG)', '', '', '', 'no'),
(121, 'QAR', 'Qatari Rial (QAR)', '', '', '', 'no'),
(122, 'RON', 'Romanian Leu (RON)', '', '', '', 'no'),
(123, 'RSD', 'Serbian Dinar (RSD)', '', '', '', 'no'),
(124, 'RUB', 'Russian Ruble (RUB)', '', '', '', 'no'),
(125, 'RWF', 'Rwandan Franc (RWF)', '', '', '', 'no'),
(126, 'SAR', 'Saudi Riyal (SAR)', '', '', '', 'no'),
(127, 'SBD', 'Solomon Islands Dollar (SBD)', '', '', '', 'no'),
(128, 'SCR', 'Seychellois Rupee (SCR)', '', '', '', 'no'),
(129, 'SDG', 'Sudanese Pound (SDG)', '', '', '', 'no'),
(130, 'SEK', 'Swedish Krona (SEK)', '', '', '', 'no'),
(131, 'SGD', 'Singapore Dollar (SGD)', '', '', '', 'no'),
(132, 'SHP', 'Saint Helena Pound (SHP)', '', '', '', 'no'),
(133, 'SLL', 'Sierra Leonean Leone (SLL)', '', '', '', 'no'),
(134, 'SOS', 'Somali Shilling (SOS)', '', '', '', 'no'),
(135, 'SRD', 'Surinamese Dollar (SRD)', '', '', '', 'no'),
(136, 'STD', 'S?o Tom? and Pr?ncipe Dobra (STD)', '', '', '', 'no'),
(137, 'SVC', 'Salvadoran Col?n (SVC)', '', '', '', 'no'),
(138, 'SYP', 'Syrian Pound (SYP)', '', '', '', 'no'),
(139, 'SZL', 'Swazi Lilangeni (SZL)', '', '', '', 'no'),
(140, 'THB', 'Thai Baht (?)', '', '', '', 'no'),
(141, 'TJS', 'Tajikistani Somoni (TJS)', '', '', '', 'no'),
(142, 'TMT', 'Turkmenistani Manat (TMT)', '', '', '', 'no'),
(143, 'TND', 'Tunisian Dinar (TND)', '', '', '', 'no'),
(144, 'TOP', 'Tongan Pa?anga (TOP)', '', '', '', 'no'),
(145, 'TRY', 'Turkish Lira (TRY)', '', '', '', 'no'),
(146, 'TTD', 'Trinidad and Tobago Dollar (TTD)', '', '', '', 'no'),
(147, 'TWD', 'New Taiwan Dollar (NT$)', '', '', '', 'no'),
(148, 'TZS', 'Tanzanian Shilling (TZS)', '', '', '', 'no'),
(149, 'UAH', 'Ukrainian Hryvnia (UAH)', '', '', '', 'no'),
(150, 'UGX', 'Ugandan Shilling (UGX)', '', '', '', 'no'),
(151, 'USD', 'US Dollar ($)', '', '', '', 'no'),
(152, 'UYU', 'Uruguayan Peso (UYU)', '', '', '', 'no'),
(153, 'UZS', 'Uzbekistan Som (UZS)', '', '', '', 'no'),
(154, 'VEF', 'Venezuelan Bol?var (VEF)', '', '', '', 'no'),
(155, 'VND', 'Vietnamese Dong (?)', '', '', '', 'no'),
(156, 'VUV', 'Vanuatu Vatu (VUV)', '', '', '', 'no'),
(157, 'WST', 'Samoan Tala (WST)', '', '', '', 'no'),
(158, 'XAF', 'CFA Franc BEAC (FCFA)', '', '', '', 'no'),
(159, 'XCD', 'East Caribbean Dollar (EC$)', '', '', '', 'no'),
(160, 'XDR', 'Special Drawing Rights (XDR)', '', '', '', 'no'),
(161, 'XOF', 'CFA Franc BCEAO (CFA)', '', '', '', 'no'),
(162, 'XPF', 'CFP Franc (CFPF)', '', '', '', 'no'),
(163, 'YER', 'Yemeni Rial (YER)', '', '', '', 'no'),
(164, 'ZAR', 'South African Rand (ZAR)', '', '', '', 'no'),
(165, 'ZMK', 'Zambian Kwacha (1968-2012) (ZMK)', '', '', '', 'no'),
(166, 'ZMW', 'Zambian Kwacha (ZMW)', '', '', '', 'no'),
(167, 'ZWL', 'Zimbabwean Dollar (2009) (ZWL)', '', '', '', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` smallint(5) NOT NULL,
  `gallery_album_id` smallint(5) NOT NULL,
  `file` varchar(255) NOT NULL,
  `extention` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url_link` varchar(255) NOT NULL,
  `video_intro` enum('no','yes') NOT NULL,
  `video_desc` text,
  `author` smallint(5) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_album_id`, `file`, `extention`, `type`, `title`, `url_link`, `video_intro`, `video_desc`, `author`, `date`) VALUES
(37, 17, 'uploads/image/gallery/2_160114115731.jpg', 'jpg', 'image', 'dasdas', 'dadasda', 'no', '', 27, '2016-01-14 22:57:31'),
(40, 17, 'oj6boZvaGVg', '', 'video', 'asdsa', 'dasd', 'no', '<p>dasdasda</p>\r\n', 27, '2016-01-15 07:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_album`
--

CREATE TABLE `gallery_album` (
  `gallery_album_id` int(11) NOT NULL,
  `album_name` varchar(100) NOT NULL,
  `album_title` varchar(100) NOT NULL,
  `album_description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` smallint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_album`
--

INSERT INTO `gallery_album` (`gallery_album_id`, `album_name`, `album_title`, `album_description`, `date`, `author`) VALUES
(17, 'Album Raja Ampat', 'Raja Ampat', '<p><em>Last entry image will take as cover album, Please entry new name for the albumsLast entry image will take as cover album, Please entry new name for the albumsLast entry image will take as cover album, Please entry new name for the albumsLast entry image will take as cover album, Please entry new name for the albumsLast entry image will take as cover album, Please entry new name for the albumsLast entry image will take as cover album, Please entry new name for the albums</em></p>\r\n', '2016-01-13 06:24:57', 27),
(18, 'Raja Singa', 'Berwisata ke raja singa', '<p>fsdfsfds</p>\r\n', '2016-01-14 23:11:20', 27),
(19, 'Bali - Nusa Penida', 'Bali', '<p>aaaaaaaaaa</p>\r\n', '2016-01-15 05:17:58', 27);

-- --------------------------------------------------------

--
-- Table structure for table `log_album_loved`
--

CREATE TABLE `log_album_loved` (
  `id_log` int(11) NOT NULL,
  `album_id` smallint(5) NOT NULL,
  `loved` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_album_view`
--

CREATE TABLE `log_album_view` (
  `id_log` int(11) NOT NULL,
  `album_id` smallint(5) NOT NULL,
  `view` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_album_view`
--

INSERT INTO `log_album_view` (`id_log`, `album_id`, `view`, `date`) VALUES
(1, 16, 17, '2015-11-23 10:39:01'),
(2, 14, 11, '2015-11-23 10:40:36');

-- --------------------------------------------------------

--
-- Table structure for table `log_article_loved`
--

CREATE TABLE `log_article_loved` (
  `log_id` int(11) NOT NULL,
  `blog_id` smallint(5) NOT NULL,
  `loved` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_article_loved`
--

INSERT INTO `log_article_loved` (`log_id`, `blog_id`, `loved`, `date`) VALUES
(1, 70, 1, '2015-11-23 12:19:10'),
(2, 69, 2, '2015-11-23 16:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `log_article_view`
--

CREATE TABLE `log_article_view` (
  `id_log` int(11) NOT NULL,
  `blog_id` smallint(5) DEFAULT NULL,
  `view` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_article_view`
--

INSERT INTO `log_article_view` (`id_log`, `blog_id`, `view`, `date`) VALUES
(12, 0, 2, '2015-11-22 08:46:49'),
(11, 70, 30, '2015-12-19 20:06:06'),
(10, 69, 26, '2015-12-19 20:06:30'),
(13, 55, 3, '2015-11-22 17:42:08'),
(14, 71, 15, '2015-11-23 16:32:57'),
(15, 72, 11, '2015-12-19 20:06:20'),
(16, 74, 1, '2015-11-23 11:02:56'),
(17, 73, 2, '2015-12-19 20:07:10');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `page_id` smallint(5) NOT NULL,
  `page_name` varchar(30) NOT NULL,
  `banner` enum('no','yes') NOT NULL,
  `blog` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`page_id`, `page_name`, `banner`, `blog`) VALUES
(1, 'Home', 'yes', 'no'),
(2, 'News', 'no', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `page_contact`
--

CREATE TABLE `page_contact` (
  `contact_id` smallint(5) NOT NULL,
  `contact_office` text NOT NULL,
  `opening_hour` text NOT NULL,
  `contact_email` varchar(200) NOT NULL,
  `contact_phone` text NOT NULL,
  `geolocation` varchar(200) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` smallint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_contact`
--

INSERT INTO `page_contact` (`contact_id`, `contact_office`, `opening_hour`, `contact_email`, `contact_phone`, `geolocation`, `create_date`, `author`) VALUES
(1, '<p>Ruko lorem ipsum<br />\nNo.38 lorem pisum<br />\nJakarta Selatan 12312</p>\n\n<p>&nbsp;</p>', '<ul>\r\n	<li>Monday - Friday: 08.00-20.00</li>\r\n	<li>Saturday: 09.00-15.00</li>\r\n	<li>Sunday and holidays: closed</li>\r\n</ul>\r\n', 'info@storm.com', '082196753916 ', 'dsada555', '2016-02-03 04:57:54', 0);

-- --------------------------------------------------------

--
-- Table structure for table `page_content`
--

CREATE TABLE `page_content` (
  `page_content_id` int(11) NOT NULL,
  `page_category` varchar(100) NOT NULL,
  `content_id` smallint(5) NOT NULL,
  `id_countries` smallint(5) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_content`
--

INSERT INTO `page_content` (`page_content_id`, `page_category`, `content_id`, `id_countries`, `title`, `content`) VALUES
(1, 'blog', 1, 64, 'dasdaLorem Ipsum is simply dummy text of the printing and typesetting industry. ', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in clas</p>\r\n'),
(2, 'blog', 2, 64, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in clas</p>\r\n'),
(3, 'blog', 3, 64, '', '<p>asasdads</p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `portfolio_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `file` varchar(500) NOT NULL,
  `extension` varchar(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`portfolio_id`, `title`, `name`, `deskripsi`, `file`, `extension`, `tanggal`) VALUES
(1, 'Bunga Abadi', 'edelweiss', 'Ini Adalah sebuah bunga abadi', 'uploads/portfolio/IMG_20160727_083640878_160815071634.jpg', 'jpg', '2016-08-30'),
(2, 'Fingerprint', 'Jempolasik', 'Sebuah sistem absensi sekolah', 'uploads/portfolio/Fingerprint-13_170228100923.png', 'png', '2017-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_category` varchar(50) NOT NULL,
  `product_brand` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_spec` text NOT NULL,
  `deals` enum('no','yes') NOT NULL,
  `location` varchar(70) NOT NULL,
  `file` varchar(255) NOT NULL,
  `extention` varchar(30) NOT NULL,
  `url_link` varchar(255) NOT NULL,
  `author` smallint(5) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_category`, `product_brand`, `product_name`, `product_price`, `product_desc`, `product_spec`, `deals`, `location`, `file`, `extention`, `url_link`, `author`, `create_date`) VALUES
(37, 'Luxury Yachts', '', 'dsa', 0, '<p>das</p>\r\n', '<p>dasdasdas5577</p>\r\n', 'no', 'daserer34', '', '', '', 27, '2016-01-17 08:28:45'),
(38, 'Luxury Yachts', '', 'dasdas', 0, '<p>dadas</p>\r\n', '<p>dasda</p>\r\n', 'yes', 'das', '', '', '', 27, '2016-01-18 06:04:16'),
(40, 'Luxury Yachts', '', 'xzXzdads', 0, '<p>dasd</p>\r\n', '<p>dsadas</p>\r\n', 'no', 'dasdas', '', '', '', 27, '2016-01-17 07:54:10'),
(41, 'Motor Wood / Sail', '', 'wsS', 0, '<p>adasdas</p>\r\n', '<p>DASDAS</p>\r\n', 'yes', 'Ss', '', '', '', 27, '2016-01-18 06:01:46'),
(42, 'Motor Wood / Sail', '', 'Azimut', 0, '<h2>Amizut 50 Feature</h2>\r\n\r\n<p>Maecenas vitae turpis condimentum metus tincidunt semper bibendum ut orci. Donec eget accumsan est. Duis laoreet sagittis elit et vehicula. Cras viverra posuere condimentum. Donec urna arcu, venenatis quis augue sit amet, mattis gravida nunc. Integer faucibus, tortor a tristique adipiscing, arcu metus luctus libero, nec vulputate risus elit id nibh.</p>\r\n', '<ul>\r\n <li>\r\n <h2>Amizut 50 Feature</h2>\r\n\r\n <p>Maecenas vitae turpis condimentum metus tincidunt semper bibendum ut orci. Donec eget accumsan est. Duis laoreet sagittis elit et vehicula. Cras viverra posuere condimentum. Donec urna arcu, venenatis quis augue sit amet, mattis gravida nunc. Integer faucibus, tortor a tristique adipiscing, arcu metus luctus libero, nec vulputate risus elit id nibh.</p>\r\n </li>\r\n</ul>\r\n\r\n<ul>\r\n <li>\r\n <p>television</p>\r\n </li>\r\n <li>\r\n <p>coffee</p>\r\n </li>\r\n <li>\r\n <p>air conditioning</p>\r\n </li>\r\n <li>\r\n <p>wine bar</p>\r\n </li>\r\n <li>\r\n <p>smoking allowed</p>\r\n </li>\r\n <li>\r\n <p>entertainment</p>\r\n </li>\r\n <li>\r\n <p>pick and drop</p>\r\n </li>\r\n <li>\r\n <p>pets allowed</p>\r\n </li>\r\n <li>\r\n <p>complimentary breakfast</p>\r\n </li>\r\n</ul>\r\n', 'yes', 'Jakarta, Bali', '', '', '', 27, '2016-01-18 06:01:38'),
(43, 'Motor Wood / Sail', '', 'Komodomo', 0, '<p>fs</p>\r\n', '<p>fdsfsfsd</p>\r\n', 'yes', 'fds', '', '', '', 27, '2016-01-18 06:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `product_category_id` smallint(5) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` smallint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`product_category_id`, `category_name`, `date`, `author`) VALUES
(1, 'Luxury Yachts', '2016-01-13 07:33:27', 27),
(2, 'Motor Wood / Sail', '2016-01-13 07:33:40', 27),
(3, 'Phinisi Schooner', '2016-01-14 21:59:52', 27),
(4, 'Liveaboard/Phinisi', '2016-01-28 05:10:05', 27);

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `product_image_id` smallint(5) NOT NULL,
  `product_id` smallint(5) NOT NULL,
  `file` varchar(255) NOT NULL,
  `extention` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`product_image_id`, `product_id`, `file`, `extention`) VALUES
(48, 37, 'uploads/image/product/Atasita_160117084559.jpg', 'jpg'),
(49, 37, 'uploads/image/product/Aneecha-Catamaran_160117084559.jpg', 'jpg'),
(50, 37, 'uploads/image/product/Amanikan_160117084559.jpg', 'jpg'),
(52, 38, 'uploads/image/product/Calico-Jack_160117085031.jpg', 'jpg'),
(53, 38, 'uploads/image/product/Komodo-Dancer_160117085031.jpg', 'jpg'),
(56, 40, 'uploads/image/product/5_160117085410.jpg', 'jpg'),
(57, 41, 'uploads/image/product/Burjuman-56_160117085617.jpg', 'jpg'),
(58, 41, 'uploads/image/product/Lady-Cruise_160117085617.jpg', 'jpg'),
(59, 37, 'uploads/image/product/Felicia_160117092805.jpg', 'jpg'),
(60, 42, 'uploads/image/product/Atasita_160117101116.jpg', 'jpg'),
(61, 43, 'uploads/image/product/Komodo-Dancer_160117101132.jpg', 'jpg'),
(62, 43, 'uploads/image/product/Burjuman-56_160117101228.jpg', 'jpg'),
(63, 43, 'uploads/image/product/Calico-Jack_160117101229.jpg', 'jpg'),
(64, 43, 'uploads/image/product/Datu-Bua_160117101229.jpg', 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `quotes_id` smallint(5) NOT NULL,
  `layout` enum('left','right') NOT NULL,
  `word` varchar(255) NOT NULL,
  `moment_by` varchar(100) NOT NULL,
  `template` text NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `extention` varchar(30) NOT NULL,
  `use_for` enum('blog','paste') NOT NULL,
  `link` varchar(255) NOT NULL,
  `author` smallint(5) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`quotes_id`, `layout`, `word`, `moment_by`, `template`, `file`, `extention`, `use_for`, `link`, `author`, `create_date`) VALUES
(8, 'left', '<p>TAK sehatlah masyarakat itu, manakala salah satu pihak menindas kepada yang lain</p>', 'Kursus politik kepada para wanita, Istana Presiden Yogyakarta, 1947', '\r\n              \r\n                <div class="col-md-3 ta-c width100">\r\n                   <img src="uploads/image/quotes/quote_151122064114.jpg" alt="Kutipan Soekarno">\r\n                </div>  \r\n              <blockquote class="blog-post-quote quote-depan col-md-9">\r\n                 <p class="lead"><p>TAK sehatlah masyarakat itu, manakala salah satu pihak menindas kepada yang lain</p></p>\r\n                 <span class="quote-author">Kursus politik kepada para wanita, Istana Presiden Yogyakarta, 1947</span>\r\n              </blockquote>\r\n            ', 'uploads/image/quotes/quote_151122064114.jpg', 'jpg', 'blog', '70', 27, '2015-11-22 17:41:14'),
(9, 'left', '<p>Orang tidak dapat mengabdi kepada Tuhan dengan tidak mengabdi kepada sesama manusia. Tuhan Bersemayam di gubuknya si miskin</p>', 'Bung Karno, 23 Oktober 1946', '\r\n              \r\n                <div class="col-md-3 ta-c width100">\r\n                   <img src="" alt="Kutipan Soekarno">\r\n                </div>  \r\n              <blockquote class="blog-post-quote quote-depan col-md-9">\r\n                 <p class="lead"><p>Orang tidak dapat mengabdi kepada Tuhan dengan tidak mengabdi kepada sesama manusia. Tuhan Bersemayam di gubuknya si miskin</p></p>\r\n                 <span class="quote-author">Bung Karno, 23 Oktober 1946</span>\r\n              </blockquote>\r\n            ', 'uploads/image/quotes/quote_151122064015.jpg', 'jpg', 'blog', '72', 27, '2015-11-22 17:40:20'),
(10, 'right', '<p>Nasionalisme kita adalah nasionalisme yang membuat kita menjadi &quot;perkakasnya Tuhan&quot;, dan membuat kita menjadi &quot;hidup di dalam roh&quot;.</p>', 'Soekarno, Suluh Indonesia Muda, 1928', '\r\n              \r\n                <div class="col-md-3 col-md-push-9 ta-c width100">\r\n                    <img src="" alt="Kutipan Soekarno">\r\n                </div>\r\n              <blockquote class="blog-post-quote quote-depan col-md-9 col-md-pull-3">\r\n                <p class="lead"><p>Nasionalisme kita adalah nasionalisme yang membuat kita menjadi &quot;perkakasnya Tuhan&quot;, dan membuat kita menjadi &quot;hidup di dalam roh&quot;.</p></p>\r\n                <span class="quote-author">Soekarno, Suluh Indonesia Muda, 1928</span>\r\n              </blockquote>', 'uploads/image/quotes/quote_151122063959.jpg', 'jpg', 'blog', '70', 27, '2015-11-22 17:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `resume_id` int(11) NOT NULL,
  `school` varchar(50) NOT NULL,
  `angkatan` varchar(50) NOT NULL,
  `deskripsia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`resume_id`, `school`, `angkatan`, `deskripsia`) VALUES
(1, 'SDI ISLAM DARUNNAJAH ULUJAMI JAKARTA', '2008', ''),
(2, 'SMPN 12 TANGERANG SELATAN', '2011', ' '),
(3, 'SMKN 5 KOTA TANGERAN', '2014', 'Rekayasa Perangkat Lunak');

-- --------------------------------------------------------

--
-- Table structure for table `resumee`
--

CREATE TABLE `resumee` (
  `resumee_id` int(11) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `deskripsi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resumee`
--

INSERT INTO `resumee` (`resumee_id`, `experience`, `date`, `deskripsi`) VALUES
(1, 'Badan Kepegawaian Negara', 'January-Maret 2015', 'IT Support'),
(2, 'PT. Bangsawan Cyberindo', 'August-September 2014:', 'IT Support & Web Developer'),
(3, 'PT. Mitra Info Parama', '2013 - 2014', 'IT Support & Web Developer');

-- --------------------------------------------------------

--
-- Table structure for table `socmed`
--

CREATE TABLE `socmed` (
  `socmed_id` smallint(5) NOT NULL,
  `socmed_arrangement` tinyint(2) NOT NULL,
  `socmed_name` varchar(50) NOT NULL,
  `socmed_link` varchar(200) NOT NULL,
  `file` varchar(255) NOT NULL,
  `extention` varchar(30) NOT NULL,
  `icon_class` varchar(30) NOT NULL,
  `author` smallint(5) NOT NULL,
  `create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `socmed`
--

INSERT INTO `socmed` (`socmed_id`, `socmed_arrangement`, `socmed_name`, `socmed_link`, `file`, `extention`, `icon_class`, `author`, `create`) VALUES
(1, 1, 'Facebook', 'http://facebook.com3', '', '', 'e169', 0, '2015-10-24 05:21:01'),
(2, 2, 'Twitter', 'https://twitter.com', '', '', 'e16d', 0, '2015-09-16 04:16:15'),
(3, 3, 'Instagram', 'http://instagram', '', '', '', 0, '2016-01-18 06:10:27');

-- --------------------------------------------------------

--
-- Table structure for table `sys_administrator`
--

CREATE TABLE `sys_administrator` (
  `id_administrator` smallint(5) NOT NULL,
  `id_privileges` smallint(2) NOT NULL,
  `nickname` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `salt` varchar(15) NOT NULL,
  `image` varchar(255) NOT NULL COMMENT 'References to id_file',
  `extention` varchar(30) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_administrator`
--

INSERT INTO `sys_administrator` (`id_administrator`, `id_privileges`, `nickname`, `username`, `password`, `salt`, `image`, `extention`, `create_date`) VALUES
(27, 1, 'Administrator', 'admin@admin.com', '9e6b20c597ff5a21b08ccf333d3841723f1fe93d', '160523035602', 'uploads/image/4_151118065332.jpg', 'jpg', '2016-05-23 10:56:02');

-- --------------------------------------------------------

--
-- Table structure for table `sys_privileges`
--

CREATE TABLE `sys_privileges` (
  `sys_privileges_id` smallint(5) NOT NULL,
  `sys_privileges_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sys_privileges`
--

INSERT INTO `sys_privileges` (`sys_privileges_id`, `sys_privileges_name`) VALUES
(1, 'root'),
(2, 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_charter`
--

CREATE TABLE `testimonial_charter` (
  `tc_id` smallint(5) NOT NULL,
  `charter_id` smallint(5) NOT NULL,
  `file` varchar(255) NOT NULL,
  `extention` varchar(30) NOT NULL,
  `comment` text NOT NULL,
  `user` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial_charter`
--

INSERT INTO `testimonial_charter` (`tc_id`, `charter_id`, `file`, `extention`, `comment`, `user`, `date`) VALUES
(2, 40, 'uploads/image/testimonial/charter//author2_160121014511.png', 'png', 'Excellent - you found the right boat in the right place at the right time, and managed to change the dates for our convenience - brillian.', 'Cherish', '2016-01-21 06:45:13'),
(3, 41, 'uploads/image/testimonial/charter//author1_160121014144.png', 'png', 'Excellent - you found the right boat in the right place at the right time, and managed to change the dates for our convenience - brillian.', 'Marina Chamer', '2016-01-21 06:41:46'),
(4, 43, 'uploads/image/testimonial/charter//author2_160121013948.png', 'png', 'Excellent - you found the right boat in the right place at the right time,and managed to change the dates for our convenience - brillian.', 'Calista', '2016-01-21 06:39:49');

-- --------------------------------------------------------

--
-- Table structure for table `u_subscribe`
--

CREATE TABLE `u_subscribe` (
  `u_subscribe_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `u_subscribe_email` varchar(70) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `u_subscribe`
--

INSERT INTO `u_subscribe` (`u_subscribe_id`, `name`, `u_subscribe_email`, `register_date`) VALUES
(1, '', 'hilmysyarif@gmail.com', '2016-02-18 19:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `web_setup`
--

CREATE TABLE `web_setup` (
  `web_setup_id` tinyint(2) NOT NULL,
  `status` enum('enable','disable') NOT NULL,
  `site_url` varchar(200) NOT NULL,
  `google_analytics` text NOT NULL,
  `file` varchar(225) NOT NULL,
  `extention` varchar(20) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `active_lang` smallint(5) NOT NULL COMMENT 'references to countries_id'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web_setup`
--

INSERT INTO `web_setup` (`web_setup_id`, `status`, `site_url`, `google_analytics`, `file`, `extention`, `favicon`, `active_lang`) VALUES
(1, 'enable', 'http://www.kemprus.com', '', 'uploads/image/logo/logo_160120024609.png', 'png', 'uploads/image/logo/logo_160120024609.ico', 64);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `banner_category`
--
ALTER TABLE `banner_category`
  ADD PRIMARY KEY (`banner_category_id`);

--
-- Indexes for table `banner_size`
--
ALTER TABLE `banner_size`
  ADD PRIMARY KEY (`banner_size_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `blog_category_id` (`blog_category_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`blog_category_id`);

--
-- Indexes for table `blog_child_category`
--
ALTER TABLE `blog_child_category`
  ADD PRIMARY KEY (`child_category_id`);

--
-- Indexes for table `blog_image_size`
--
ALTER TABLE `blog_image_size`
  ADD PRIMARY KEY (`blog_size_id`);

--
-- Indexes for table `blog_static`
--
ALTER TABLE `blog_static`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `blog_static_category`
--
ALTER TABLE `blog_static_category`
  ADD PRIMARY KEY (`blog_category_id`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `contact_message`
--
ALTER TABLE `contact_message`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`countries_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `gallery_album`
--
ALTER TABLE `gallery_album`
  ADD PRIMARY KEY (`gallery_album_id`);

--
-- Indexes for table `log_album_loved`
--
ALTER TABLE `log_album_loved`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `log_album_view`
--
ALTER TABLE `log_album_view`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `log_article_loved`
--
ALTER TABLE `log_article_loved`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `log_article_view`
--
ALTER TABLE `log_article_view`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `page_contact`
--
ALTER TABLE `page_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `page_content`
--
ALTER TABLE `page_content`
  ADD PRIMARY KEY (`page_content_id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`portfolio_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`product_category_id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`product_image_id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`quotes_id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`resume_id`);

--
-- Indexes for table `resumee`
--
ALTER TABLE `resumee`
  ADD PRIMARY KEY (`resumee_id`);

--
-- Indexes for table `socmed`
--
ALTER TABLE `socmed`
  ADD PRIMARY KEY (`socmed_id`);

--
-- Indexes for table `sys_administrator`
--
ALTER TABLE `sys_administrator`
  ADD PRIMARY KEY (`id_administrator`);

--
-- Indexes for table `sys_privileges`
--
ALTER TABLE `sys_privileges`
  ADD PRIMARY KEY (`sys_privileges_id`);

--
-- Indexes for table `testimonial_charter`
--
ALTER TABLE `testimonial_charter`
  ADD PRIMARY KEY (`tc_id`);

--
-- Indexes for table `u_subscribe`
--
ALTER TABLE `u_subscribe`
  ADD PRIMARY KEY (`u_subscribe_id`);

--
-- Indexes for table `web_setup`
--
ALTER TABLE `web_setup`
  ADD PRIMARY KEY (`web_setup_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `banner_category`
--
ALTER TABLE `banner_category`
  MODIFY `banner_category_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `banner_size`
--
ALTER TABLE `banner_size`
  MODIFY `banner_size_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `blog_category_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `blog_child_category`
--
ALTER TABLE `blog_child_category`
  MODIFY `child_category_id` smallint(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blog_image_size`
--
ALTER TABLE `blog_image_size`
  MODIFY `blog_size_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `blog_static`
--
ALTER TABLE `blog_static`
  MODIFY `blog_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `blog_static_category`
--
ALTER TABLE `blog_static_category`
  MODIFY `blog_category_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contact_message`
--
ALTER TABLE `contact_message`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `countries_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `gallery_album`
--
ALTER TABLE `gallery_album`
  MODIFY `gallery_album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `log_album_loved`
--
ALTER TABLE `log_album_loved`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log_album_view`
--
ALTER TABLE `log_album_view`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `log_article_loved`
--
ALTER TABLE `log_article_loved`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `log_article_view`
--
ALTER TABLE `log_article_view`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `page_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `page_contact`
--
ALTER TABLE `page_contact`
  MODIFY `contact_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `page_content`
--
ALTER TABLE `page_content`
  MODIFY `page_content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `portfolio_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `product_category_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `product_image_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `quotes_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `resume_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `resumee`
--
ALTER TABLE `resumee`
  MODIFY `resumee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `socmed`
--
ALTER TABLE `socmed`
  MODIFY `socmed_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sys_administrator`
--
ALTER TABLE `sys_administrator`
  MODIFY `id_administrator` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `sys_privileges`
--
ALTER TABLE `sys_privileges`
  MODIFY `sys_privileges_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `testimonial_charter`
--
ALTER TABLE `testimonial_charter`
  MODIFY `tc_id` smallint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `u_subscribe`
--
ALTER TABLE `u_subscribe`
  MODIFY `u_subscribe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `web_setup`
--
ALTER TABLE `web_setup`
  MODIFY `web_setup_id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
