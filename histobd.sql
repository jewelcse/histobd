-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2018 at 08:11 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `histobd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'jewel', '12345'),
(3, 'jewelcse', 'jewelcsebu');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Dhaka'),
(2, 'Barishal'),
(3, 'Bagerhat'),
(6, 'Sylhet'),
(7, ' Rajshahi'),
(8, 'Cumilla');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_place_id` char(50) NOT NULL,
  `user_id` char(50) NOT NULL,
  `comment_date` date NOT NULL,
  `comment_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_place_id`, `user_id`, `comment_date`, `comment_content`) VALUES
(1, '1', '1', '2018-07-09', 'nice place'),
(2, '4', '2', '2018-07-11', 'nice place'),
(3, '4', '1', '2018-07-11', 'good'),
(9, '10', '1', '2018-07-15', 'nice place');

-- --------------------------------------------------------

--
-- Table structure for table `comments_reply`
--

CREATE TABLE `comments_reply` (
  `comments_reply_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `comments_date` date NOT NULL,
  `comments_content` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `place_id` int(11) NOT NULL,
  `place_cat_id` char(50) NOT NULL,
  `place_title` varchar(255) NOT NULL,
  `added_date` date NOT NULL,
  `place_image` text NOT NULL,
  `place_description` text NOT NULL,
  `place_location` text NOT NULL,
  `place_tags` text NOT NULL,
  `place_comment_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`place_id`, `place_cat_id`, `place_title`, `added_date`, `place_image`, `place_description`, `place_location`, `place_tags`, `place_comment_count`) VALUES
(2, '3', 'Shat Gumbad/Gambuj ', '2018-07-10', 'Shat-Gombuj-Mosque.jpg', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.4440788786155!2d89.73964721453841!3d22.67450678513043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fff4565f03d17d%3A0x657f7377a89d5da7!2sShaat+Gombuj+Masjid!5e0!3m2!1sen!2sbd!4v1531231942126\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'sat gumbuj bagerhat', 2),
(3, '2', 'Guthia Mosque', '2018-07-10', 'guthia mos.jpg', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.523960648637!2d90.23666381454072!3d22.783041185074914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375548c12e363647%3A0xcaa0e5c7405e686a!2sGuthia+Baitul+Aman+Jame+Masjid+Complex!5e0!3m2!1sen!2sbd!4v1531231685857\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'guthia mosque barisal gutia', 1),
(4, '6', 'Hazrat Shahjalal Mazar', '2018-07-10', 'Shah-Jalal-Mazar.jpg', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.873837991867!2d91.86382951458783!3d24.902284684034285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37505528cd70ca2f%3A0x9eb2841db52a65c0!2sHazrat+Shahjalal+Mazar+Sharif!5e0!3m2!1sen!2sbd!4v1531231339634\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'mazar sahajalal', 2),
(6, '1', 'Lalbagh kella', '2018-07-15', 'lalbaghfort.jpg', '<p style=\"margin: 0.5em 0px; line-height: inherit; color: #222222; font-family: sans-serif;\"><strong>Lalbagh Fort</strong>&nbsp;(also&nbsp;<strong>Fort Aurangabad</strong>) is an incomplete 17th century&nbsp;<a class=\"mw-redirect\" style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Mughal empire\" href=\"https://en.wikipedia.org/wiki/Mughal_empire\">Mughal</a>&nbsp;fort complex that stands before the&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Buriganga River\" href=\"https://en.wikipedia.org/wiki/Buriganga_River\">Buriganga River</a>&nbsp;in the southwestern part of&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Dhaka\" href=\"https://en.wikipedia.org/wiki/Dhaka\">Dhaka</a>, Bangladesh.<sup id=\"cite_ref-bpedia_1-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;\"><a style=\"text-decoration-line: none; color: #0b0080; background: none;\" href=\"https://en.wikipedia.org/wiki/Lalbagh_Fort#cite_note-bpedia-1\">[1]</a></sup>&nbsp;The construction was started in 1678 AD by Mughal&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Subahdar\" href=\"https://en.wikipedia.org/wiki/Subahdar\">Subahdar</a>&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Muhammad Azam Shah\" href=\"https://en.wikipedia.org/wiki/Muhammad_Azam_Shah\">Muhammad Azam Shah</a>&nbsp;who was son of Emperor&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Aurangzeb\" href=\"https://en.wikipedia.org/wiki/Aurangzeb\">Aurangzeb</a>&nbsp;and later emperor himself. His successor,&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Shaista Khan\" href=\"https://en.wikipedia.org/wiki/Shaista_Khan\">Shaista Khan</a>, did not continue the work, though he stayed in Dhaka up to 1688.</p>\r\n<p style=\"margin: 0.5em 0px; line-height: inherit; color: #222222; font-family: sans-serif;\">The fort was never completed, and unoccupied for a long period, so that much of what was there was cleared or built over, and the modern restored and preserved site now runs up to modern buildings.</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1826.3988199096993!2d90.3870169760275!3d23.718919420033057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8d900000001%3A0x4e16316ffc66e862!2sLalbagh+Fort!5e0!3m2!1sen!2sbd!4v1531673522602\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'dhaka lalbagh lal kella', 0),
(7, '7', 'Mahasthangarh', '2018-07-15', 'Mohasthangor.jpg', '<p><strong style=\"color: #222222; font-family: sans-serif;\">Mahasthangarh</strong><span style=\"color: #222222; font-family: sans-serif;\">&nbsp;(</span><a style=\"text-decoration-line: none; color: #0b0080; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif;\" title=\"Bengali language\" href=\"https://en.wikipedia.org/wiki/Bengali_language\">Bengali</a><span style=\"color: #222222; font-family: sans-serif;\">:&nbsp;</span><span lang=\"bn\" style=\"color: #222222; font-family: sans-serif;\">à¦®à¦¹à¦¾à¦¸à§à¦¥à¦¾à¦¨à¦—à¦¡à¦¼</span><span style=\"color: #222222; font-family: sans-serif;\">&nbsp;</span><em style=\"color: #222222; font-family: sans-serif;\">M&ocirc;hasthang&ocirc;á¹›</em><span style=\"color: #222222; font-family: sans-serif;\">) is one of the earliest urban archaeological sites so far discovered in&nbsp;</span><a style=\"text-decoration-line: none; color: #0b0080; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif;\" title=\"Bangladesh\" href=\"https://en.wikipedia.org/wiki/Bangladesh\">Bangladesh</a><span style=\"color: #222222; font-family: sans-serif;\">. The village Mahasthan in&nbsp;</span><a style=\"text-decoration-line: none; color: #0b0080; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif;\" title=\"Shibganj Upazila, Bogra\" href=\"https://en.wikipedia.org/wiki/Shibganj_Upazila,_Bogra\">Shibganj</a><span style=\"color: #222222; font-family: sans-serif;\">&nbsp;</span><a class=\"mw-redirect\" style=\"text-decoration-line: none; color: #0b0080; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif;\" title=\"Administrative divisions of Bangladesh\" href=\"https://en.wikipedia.org/wiki/Administrative_divisions_of_Bangladesh\">thana</a><span style=\"color: #222222; font-family: sans-serif;\">&nbsp;of&nbsp;</span><a style=\"text-decoration-line: none; color: #0b0080; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif;\" title=\"Bogra District\" href=\"https://en.wikipedia.org/wiki/Bogra_District\">Bogra District</a><span style=\"color: #222222; font-family: sans-serif;\">&nbsp;contains the remains of an ancient city which was called Pundranagara or Paundravardhanapura in the territory of&nbsp;</span><a style=\"text-decoration-line: none; color: #0b0080; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif;\" title=\"Pundravardhana\" href=\"https://en.wikipedia.org/wiki/Pundravardhana\">Pundravardhana</a><span style=\"color: #222222; font-family: sans-serif;\">.</span><sup id=\"cite_ref-1\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px; color: #222222; font-family: sans-serif;\"><a style=\"text-decoration-line: none; color: #0b0080; background: none;\" href=\"https://en.wikipedia.org/wiki/Mahasthangarh#cite_note-1\">[1]</a></sup><sup id=\"cite_ref-Brochure_2-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px; color: #222222; font-family: sans-serif;\"><a style=\"text-decoration-line: none; color: #0b0080; background: none;\" href=\"https://en.wikipedia.org/wiki/Mahasthangarh#cite_note-Brochure-2\">[2]</a></sup><sup id=\"cite_ref-3\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px; color: #222222; font-family: sans-serif;\"><a style=\"text-decoration-line: none; color: #0b0080; background: none;\" href=\"https://en.wikipedia.org/wiki/Mahasthangarh#cite_note-3\">[3]</a></sup><span style=\"color: #222222; font-family: sans-serif;\">&nbsp;A&nbsp;</span><a style=\"text-decoration-line: none; color: #0b0080; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif;\" title=\"Limestone\" href=\"https://en.wikipedia.org/wiki/Limestone\">limestone</a><span style=\"color: #222222; font-family: sans-serif;\">&nbsp;slab bearing six lines in&nbsp;</span><a style=\"text-decoration-line: none; color: #0b0080; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif;\" title=\"Prakrit\" href=\"https://en.wikipedia.org/wiki/Prakrit\">Prakrit</a><span style=\"color: #222222; font-family: sans-serif;\">&nbsp;in&nbsp;</span><a style=\"text-decoration-line: none; color: #0b0080; background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; font-family: sans-serif;\" title=\"Brahmi script\" href=\"https://en.wikipedia.org/wiki/Brahmi_script\">Brahmi script</a><span style=\"color: #222222; font-family: sans-serif;\">, discovered in 1931, dates Mahasthangarh to at least the 3rd century BC.</span><sup id=\"cite_ref-4\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px; color: #222222; font-family: sans-serif;\"><a style=\"text-decoration-line: none; color: #0b0080; background: none;\" href=\"https://en.wikipedia.org/wiki/Mahasthangarh#cite_note-4\">[4]</a></sup><span style=\"color: #222222; font-family: sans-serif;\">&nbsp;The fortified area was in use until the 18th century AD.</span><sup id=\"cite_ref-Brochure_2-1\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px; color: #222222; font-family: sans-serif;\"><a style=\"text-decoration-line: none; color: #0b0080; background: none;\" href=\"https://en.wikipedia.org/wiki/Mahasthangarh#cite_note-Brochure-2\">[2]</a></sup></p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3617.1009620197183!2d89.34274091458926!3d24.962679384005835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fcfee89087ae65%3A0xb149cf750e5b69c8!2sMahasthangarh+Museum!5e0!3m2!1sen!2sbd!4v1531673996537\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'Mahasthangarh bogura rajshi', 0),
(8, '1', ' Shaheed Minar', '2018-07-15', 'Central-Shaheed-Minar.jpg', '<p style=\"margin: 0.5em 0px; line-height: inherit; color: #222222; font-family: sans-serif;\">The&nbsp;<strong>Shaheed Minar</strong>&nbsp;(<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Bengali language\" href=\"https://en.wikipedia.org/wiki/Bengali_language\">Bengali</a>:&nbsp;<span lang=\"bn\">à¦¶à¦¹à§€à¦¦ à¦®à¦¿à¦¨à¦¾à¦°</span>&nbsp;<em>Shohid Minar</em>&nbsp;lit. \"Martyr Monument\") is a national monument in&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Dhaka\" href=\"https://en.wikipedia.org/wiki/Dhaka\">Dhaka</a>,&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Bangladesh\" href=\"https://en.wikipedia.org/wiki/Bangladesh\">Bangladesh</a>, established to commemorate those killed during the&nbsp;<a class=\"mw-redirect\" style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Bengali Language Movement\" href=\"https://en.wikipedia.org/wiki/Bengali_Language_Movement\">Bengali Language Movement</a>&nbsp;demonstrations of 1952 in then&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"East Pakistan\" href=\"https://en.wikipedia.org/wiki/East_Pakistan\">East Pakistan</a>.</p>\r\n<p style=\"margin: 0.5em 0px; line-height: inherit; color: #222222; font-family: sans-serif;\">On 21 and 22 February 1952, students from Dhaka University and Dhaka Medical College and political activists were killed when the Pakistani police force opened fire on Bengali protesters who were demanding official status for their native tongue,&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Bengali language\" href=\"https://en.wikipedia.org/wiki/Bengali_language\">Bengali</a>.<sup id=\"cite_ref-1\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;\"><a style=\"text-decoration-line: none; color: #0b0080; background: none;\" href=\"https://en.wikipedia.org/wiki/Shaheed_Minar,_Dhaka#cite_note-1\">[1]</a></sup>&nbsp;The massacre occurred near&nbsp;<a class=\"mw-redirect\" style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Dhaka Medical College\" href=\"https://en.wikipedia.org/wiki/Dhaka_Medical_College\">Dhaka Medical College</a>&nbsp;and&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Ramna Park\" href=\"https://en.wikipedia.org/wiki/Ramna_Park\">Ramna Park</a>&nbsp;in Dhaka. A makeshift monument was erected on 23 February<sup id=\"cite_ref-2\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;\"><a style=\"text-decoration-line: none; color: #0b0080; background: none;\" href=\"https://en.wikipedia.org/wiki/Shaheed_Minar,_Dhaka#cite_note-2\">[2]</a></sup><sup id=\"cite_ref-Banglapedia_3-0\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;\"><a style=\"text-decoration-line: none; color: #0b0080; background: none;\" href=\"https://en.wikipedia.org/wiki/Shaheed_Minar,_Dhaka#cite_note-Banglapedia-3\">[3]</a></sup>&nbsp;by students of&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"University of Dhaka\" href=\"https://en.wikipedia.org/wiki/University_of_Dhaka\">Dhaka medical college</a>&nbsp;and other educational institutions, but soon demolished on 26 February<sup id=\"cite_ref-Banglapedia_3-1\" class=\"reference\" style=\"line-height: 1; unicode-bidi: isolate; white-space: nowrap; font-size: 11.2px;\"><a style=\"text-decoration-line: none; color: #0b0080; background: none;\" href=\"https://en.wikipedia.org/wiki/Shaheed_Minar,_Dhaka#cite_note-Banglapedia-3\">[3]</a></sup>&nbsp;by the Pakistani police force.</p>\r\n<p style=\"margin: 0.5em 0px; line-height: inherit; color: #222222; font-family: sans-serif;\">The Language Movement gained momentum, and after a long struggle, Bengali gained official status in Pakistan (with&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Urdu\" href=\"https://en.wikipedia.org/wiki/Urdu\">Urdu</a>) in 1956. To commemorate the dead, the Shaheed Minar was designed and built by Bangladeshi sculptors&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Hamidur Rahman (artist)\" href=\"https://en.wikipedia.org/wiki/Hamidur_Rahman_(artist)\">Hamidur Rahman</a>&nbsp;in collaboration with&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Novera Ahmed\" href=\"https://en.wikipedia.org/wiki/Novera_Ahmed\">Novera Ahmed</a>. Construction was delayed by&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Martial law\" href=\"https://en.wikipedia.org/wiki/Martial_law\">martial law</a>, but the monument was finally completed in 1963, and stood until the&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Bangladesh Liberation War\" href=\"https://en.wikipedia.org/wiki/Bangladesh_Liberation_War\">Bangladesh Liberation War</a>&nbsp;in 1971, when it was demolished completely during&nbsp;<a style=\"text-decoration-line: none; color: #0b0080; background: none;\" title=\"Operation Searchlight\" href=\"https://en.wikipedia.org/wiki/Operation_Searchlight\">Operation Searchlight</a>. After Bangladesh gained independence later that year, it was rebuilt. It was expanded in 1983.</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.564462163939!2d90.39443891456123!3d23.727242584600752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8e89cbec039%3A0xe403f93b9b07d016!2sCentral+Shaheed+Minar!5e0!3m2!1sen!2sbd!4v1531674237320\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'dhaka shahid minar', 0),
(9, '1', 'Curzon Hall', '2018-07-15', 'Curzon-Hall.jpg', '<p><span style=\"color: #333333; font-family: arial, sans-serif; font-size: 12px;\">Curzon Hall is a structure in Dhaka, Bangladesh, that has an extremely fascinating history. It was significant in many political battles and is today a vital part of traditional education. The University of&nbsp;</span><a style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; text-decoration-line: none; color: #003399; font-family: arial, sans-serif; font-size: 12px;\" title=\"Explore Dhaka\" href=\"http://www.bangladesh.com/dhaka-division/dhaka/\">Dhaka</a><span style=\"color: #333333; font-family: arial, sans-serif; font-size: 12px;\">has a School of Science division, of which the Curzon Hall is a part thereof. Its massive structure stands as a monument to the heritage of education in the city. Thus a dream that did not come true for its creator became as important as its original purpose was meant to be. Visiting Curzon Hall is not only a journey into the past, but it is an architectural masterpiece to marvel at</span></p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.5620580322575!2d90.39944861456127!3d23.72732838460072!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8e55bbc185f%3A0x9ee5e0bebc9d3a5!2sCurzon+Hall!5e0!3m2!1sen!2sbd!4v1531674419261\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'dhaka karjon hall', 0),
(10, '8', 'Mainamati', '2018-07-15', 'Mainamati-Comilla.jpg', '<p><span style=\"font-weight: bold; color: #6a6a6a; font-family: arial, sans-serif; font-size: small;\">Mainamati</span><span style=\"color: #545454; font-family: arial, sans-serif; font-size: small;\">&nbsp;(Bengali: à¦®à¦¯à¦¼à¦¨à¦¾à¦®à¦¤à¦¿ M&ocirc;ynamoti) is an isolated low, dimpled range of hills, dotted with more than 50 ancient Buddhist settlements dating to between the 8th and 12th century CE. It extends through the centre of the district of&nbsp;</span><span style=\"font-weight: bold; color: #6a6a6a; font-family: arial, sans-serif; font-size: small;\">Comilla</span><span style=\"color: #545454; font-family: arial, sans-serif; font-size: small;\">&nbsp;in Bangladesh.&nbsp;</span><span style=\"font-weight: bold; color: #6a6a6a; font-family: arial, sans-serif; font-size: small;\">Mainamati</span><span style=\"color: #545454; font-family: arial, sans-serif; font-size: small;\">&nbsp;is located almost 8 miles from the town of</span><span style=\"font-weight: bold; color: #6a6a6a; font-family: arial, sans-serif; font-size: small;\">Comilla</span><span style=\"color: #545454; font-family: arial, sans-serif; font-size: small;\">.</span></p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58560.47758688361!2d91.13099489386227!3d23.4593877749474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37547b97e98b7ce5%3A0xe7ed6b92d22a0211!2sPalace+of+Queen+Mainamati!5e0!3m2!1sen!2sbd!4v1531674626810\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'mainmati cumilla', 1),
(11, '1', 'Ulpur Zamindar Bari', '2018-07-15', 'Ulpur Zamindar Bari.jpg', '<p><span style=\"color: #333333; font-family: \'Droid Sans\', sans-serif; font-size: 16px; text-align: justify;\">During 1850, the greater Gopalganj area was ruled by the Zamindar. At that time, they made hundreds of buildings for their residence and official purposes. The buildings were made in the traditional Zamindar Bari look and style. In the last 150 years, most of the houses were destroyed by erosion. After being taken by the government, the authority turned some of these houses into government buildings. Now, most of the houses are abandoned or occupied by local people.</span></p>\r\n<p><span style=\"color: #333333; font-family: \'Droid Sans\', sans-serif; font-size: 16px; text-align: justify;\">There is a cluster of old buildings in the Ulpur Area which is situated in the Gopalgonj - Takerhat highway, not so far from the Gopalgonj main town. As soon as you cross the Ulpur Bridge from Ulpur bazar, the buildings start to appear. The first one was used as the Union Land Office (Government) but is now abandoned. The local people over there are now using it to stock fodder.</span></p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d469784.5700518523!2d89.62126148451256!3d23.090068028228025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ffdc51876f3657%3A0x422390d232d3516f!2sGopalganj+District!5e0!3m2!1sen!2sbd!4v1531675690178\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'dhaka gopalgonj', 0),
(12, '1', ' Mazar of  Bangabandhu', '2018-07-15', 'Tungipara-BangaBandhu-Mazar.jpg', '<p><span style=\"box-sizing: border-box; font-family: Poppins, sans-serif; font-size: 16px; text-align: justify;\" data-mce-mark=\"1\">Tungipara is the birthplace of national leader Sheikh Mujibur Rahman. He was killed by the traitors in the year 1975, 15</span><span style=\"box-sizing: border-box; font-family: Poppins, sans-serif; font-size: 16px; text-align: justify;\" data-mce-mark=\"1\">th</span><span style=\"box-sizing: border-box; font-family: Poppins, sans-serif; font-size: 16px; text-align: justify;\" data-mce-mark=\"1\">&nbsp;August. He along with all of his family members except two daughters Sheikh Rehana and Sheikh Hasina were killed at a time. Later his dead body was brought to his birthplace Tungupara for commemoration. Every year we remember the contributions of Bangabandhu in 15</span><span style=\"box-sizing: border-box; font-family: Poppins, sans-serif; font-size: 16px; text-align: justify;\" data-mce-mark=\"1\">th</span><span style=\"box-sizing: border-box; font-family: Poppins, sans-serif; font-size: 16px; text-align: justify;\" data-mce-mark=\"1\">&nbsp;August. It is a very historic and important place for the Bangladeshi people.</span></p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.1925473551028!2d89.89413231421561!3d22.906267826414613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ffe42793e2048b%3A0x8dfc3b4d71f5d568!2sMausoleum+of+Father+of+the+Nation+Bangabandhu+Sheikh+Mujibur+Rahman!5e0!3m2!1sen!2sbd!4v1531675990429\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'gopalgonj dhaka bonggobondhu', 0),
(13, '2', 'Barishal University', '2018-07-15', 'barisal university.jpg', '<p><span style=\"font-family: \'Droid Sans\', sans-serif; font-size: 13px; text-align: justify;\">The declaration for establishing a Public University in the then Barisal division was made by the Founder of Bangladesh, the Father of the nation, Bangabandhu Sheikh Mujibur Rahman in 1973. Several half-hearted attempts were made by the different political governments after 1980s but it was in 2009 that the establishment of the University got meaningfully underway by the Ministry of Education, and the Honorable President of the People&acirc;&euro;&trade;s Republic of Bangladesh Md. Zillur Rahman appointed Professor Dr. Md. Harunor Rashid Khan of the Department of Soil, Water and Environment of the University of Dhaka on 18th February 2010 as the Project Director to establish the University of Barisal. The law of the University of Barisal has been amended and passed by the National Assembly of Bangladesh on 16th June 2010. Thanks to further initiatives from University Grants Commission and the Ministry of Education, the University was eventually established by the Honorable Prime Minister Sheikh Hasina through foundation stone laying on 22nd February 2011.</span></p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29450.932033616995!2d90.33887160938208!3d22.677396426371825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x71825eb40c8459a6!2sUniversity+Of+Barisal!5e0!3m2!1sen!2sbd!4v1531676400177\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'bu ub barisal university', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL,
  `user_gender` text NOT NULL,
  `user_country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_firstname`, `user_lastname`, `username`, `user_image`, `user_email`, `user_password`, `user_gender`, `user_country`) VALUES
(1, 'Jewel', 'Chowdhury', 'jewel', '36842251_1465252366912113_4399692892327641088_o.jpg', 'jewel@gmail.com', '12345', 'male', 'Bangladesh'),
(2, 'Foysal cse', 'Sheikh', 'foysalcse', 'foysal.jpg', 'smfoysal77@gmail.com', '12345', 'male', 'Bangladesh'),
(10, 'MRR', 'Raju', 'miraju', '36842251_1465252366912113_4399692892327641088_o.jpg', 'miraju@gmail.com', '12345', 'male', 'Bangladesh'),
(11, 'Saimun', 'islam', 'saimun', 'j.jpg', 'saimun@gmail.com', '12345', 'male', 'Bangladesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `comments_reply`
--
ALTER TABLE `comments_reply`
  ADD PRIMARY KEY (`comments_reply_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD UNIQUE KEY `username_3` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `comments_reply`
--
ALTER TABLE `comments_reply`
  MODIFY `comments_reply_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


<div class="row mt-3">
                    <div class="col-sm-2">
                        <div class="thumbnail">
                            <img class="img-responsive user-photo"
                                src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                        </div><!-- /thumbnail -->
                    </div><!-- /col-sm-1 -->

                    <div class="col-sm-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <strong>myusername</strong> <span class="text-muted">commented 5 days ago</span>
                            </div>
                            <div class="panel-body" id="commentData">

                            </div><!-- /panel-body -->
                        </div><!-- /panel panel-default -->
                    </div><!-- /col-sm-5 -->
                </div>