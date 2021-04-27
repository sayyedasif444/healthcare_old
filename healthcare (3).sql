-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 10:32 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(50) NOT NULL,
  `blog_title` varchar(1000) DEFAULT NULL,
  `blog_img_type` enum('image','slider') DEFAULT NULL,
  `blog_desc` longtext DEFAULT NULL,
  `blog_slug` varchar(500) DEFAULT NULL,
  `blog_date` date DEFAULT NULL,
  `blog_time` varchar(10) DEFAULT NULL,
  `meta_tag` varchar(500) DEFAULT NULL,
  `meta_desc` varchar(1000) DEFAULT NULL,
  `blog_likes` int(50) NOT NULL DEFAULT 0,
  `comments` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `blog_title`, `blog_img_type`, `blog_desc`, `blog_slug`, `blog_date`, `blog_time`, `meta_tag`, `meta_desc`, `blog_likes`, `comments`) VALUES
(5, 'help the helpless who need you.', 'image', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now.</p>\n                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now.</p>\n                                <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </blockquote>\n                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now.</p>\n                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now.</p>', 'help-the-helpless-who-need-you.', '2020-12-29', NULL, NULL, NULL, 27, 1),
(6, 'help the helpless who need you.', 'image', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now.</p>\r\n                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now.</p>\r\n                                <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </blockquote>\r\n                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now.</p>\r\n                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now.</p>', 'help-the-helpless-who-need-you.', '2020-12-29', NULL, NULL, NULL, 0, 0),
(7, 'help the helpless who need you.', 'image', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now.</p>\r\n                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now.</p>\r\n                                <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </blockquote>\r\n                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now.</p>\r\n                                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now.</p>', 'help-the-helpless-who-need-you.', '2020-12-29', NULL, NULL, NULL, 0, 0),
(8, 'healthcare realization in covid-19 times', 'image', '<p>2020 is been a tough year not for one or two individuals but for the whole world. All of us were in lockdown and some of us are still in lockdown and in that period reality struck hard to all of us in some way. We were so busy in our day-to-day life that the thing we were working for or earning for lost its value in our head. The basic purpose for&nbsp; work is to fill our stomach which is to take care for our bodies and health and this is what we neglected all this while.&nbsp;</p><p>In lockdown we were suddenly worried for our health. The bubble burst and realization happened that if&nbsp; your health is stronger then your body can fight any disease. Earth needed an healthcare checkup so it put us in a lockdown to heal it self. Life came full circle and we went to the basic i.e., <b style=\"font-size: 18.6667px;\">WASH HANDS,CARRY A CLOTH, OPEN YOUR MOUTH WHEN IT IS NEEDED.</b></p><p>And in all this we released that we don’t work for our body but our body works for us. It helps us to fight so many germs, diseases&nbsp;which we don’t even know about. By following simple methods prescribed by doctors and other medical professionals the whole world took care of it self so that the professionals work towards the bigger challenge.&nbsp;</p><div><br></div>', 'healthcare-realization-in-covid-19-times', '2021-01-04', NULL, NULL, NULL, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_contacts`
--

CREATE TABLE `blog_contacts` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `emailid` varchar(500) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `blog_id` int(50) NOT NULL,
  `blog_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_contacts`
--

INSERT INTO `blog_contacts` (`contact_id`, `name`, `emailid`, `message`, `blog_id`, `blog_date`) VALUES
(5, 'John Abraham', '', 'Thanks for the awareness.', 8, 'Tue Jan 05 2021'),
(17, 'Asif Sayyed', 'sayyedasif444@gmail.com', 'dfsdf', 5, 'Tue Jan 05 2021'),
(18, 'test', 'test', 'test', 8, 'Sat Feb 27 2021'),
(19, 'test', '1ftesting@ftest.com', 'sdfsdf', 8, 'Sat Feb 27 2021'),
(20, 'SOHAIL', 'test@sohail.com', 'hi i am the writer', 8, 'Sat Feb 27 2021');

-- --------------------------------------------------------

--
-- Table structure for table `blog_images`
--

CREATE TABLE `blog_images` (
  `img_id` int(11) NOT NULL,
  `image_path` varchar(500) NOT NULL,
  `blog_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_images`
--

INSERT INTO `blog_images` (`img_id`, `image_path`, `blog_id`) VALUES
(3, '16090856371609085551.png', 5),
(4, '16090856371609085551.png', 6),
(5, '16090856371609085551.png', 7),
(6, '16097833481609783303.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `causes`
--

CREATE TABLE `causes` (
  `cause_id` int(50) NOT NULL,
  `cause_title` varchar(1000) NOT NULL,
  `cause_desc` longtext DEFAULT NULL,
  `cause_slug` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `causes`
--

INSERT INTO `causes` (`cause_id`, `cause_title`, `cause_desc`, `cause_slug`) VALUES
(66, 'ensure treatment for every poor children', '<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>\n                                                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p>\n                                                            <p>But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures.</p>\n\n<h3>We want to ensure the education for the kids.</h3>\n                                                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure.</p>\n                                                            <ul>\n                                                                <li>The wise man therefore always holds in these matters.</li>\n                                                                <li>In a free hour, when our power of choice and when nothing.</li>\n                                                                <li>Else he endures pains to avoid worse pains.</li>\n                                                                <li>We denounce with righteous indignation and dislike men. </li>\n                                                                <li>Which is the same as saying through.</li>\n                                                            </ul>', 'ensure-treatment-for-every-poor-children'),
(67, 'ensure treatment for every poor children', '<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>\n                                                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p>\n                                                            <p>But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures.</p>\n\n<h3>We want to ensure the education for the kids.</h3>\n                                                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure.</p>\n                                                            <ul>\n                                                                <li>The wise man therefore always holds in these matters.</li>\n                                                                <li>In a free hour, when our power of choice and when nothing.</li>\n                                                                <li>Else he endures pains to avoid worse pains.</li>\n                                                                <li>We denounce with righteous indignation and dislike men. </li>\n                                                                <li>Which is the same as saying through.</li>\n                                                            </ul>', 'ensure-treatment-for-every-poor-children-02'),
(68, 'ensure treatment for every poor children', '<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>\n                                                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p>\n                                                            <p>But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures.</p>\n\n<h3>We want to ensure the education for the kids.</h3>\n                                                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure.</p>\n                                                            <ul>\n                                                                <li>The wise man therefore always holds in these matters.</li>\n                                                                <li>In a free hour, when our power of choice and when nothing.</li>\n                                                                <li>Else he endures pains to avoid worse pains.</li>\n                                                                <li>We denounce with righteous indignation and dislike men. </li>\n                                                                <li>Which is the same as saying through.</li>\n                                                            </ul>', 'ensure-treatment-for-every-poor-children-03'),
(69, 'ensure treatment for every poor children', '<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>\n                                                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p>\n                                                            <p>But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures.</p>\n\n<h3>We want to ensure the education for the kids.</h3>\n                                                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure.</p>\n                                                            <ul>\n                                                                <li>The wise man therefore always holds in these matters.</li>\n                                                                <li>In a free hour, when our power of choice and when nothing.</li>\n                                                                <li>Else he endures pains to avoid worse pains.</li>\n                                                                <li>We denounce with righteous indignation and dislike men. </li>\n                                                                <li>Which is the same as saying through.</li>\n                                                            </ul>', 'ensure-treatment-for-every-poor-children-04');

-- --------------------------------------------------------

--
-- Table structure for table `cause_contacts`
--

CREATE TABLE `cause_contacts` (
  `contact_id` int(11) NOT NULL,
  `cause_id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `cause_date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cause_contacts`
--

INSERT INTO `cause_contacts` (`contact_id`, `cause_id`, `name`, `emailid`, `message`, `cause_date`) VALUES
(1, 66, 'adsfsdf', 'sayyedasif444@gmail.com', 'sdfsdfsdfsfsdfsdf sfsdf', NULL),
(2, 67, 'adsfsdf', 'sayyedasif444@gmail.com', 'sdfsdfsdfsfsdfsdf sfsdf', NULL),
(3, 68, 'adsfsdf', 'sayyedasif444@gmail.com', 'sdfsdfsdfsfsdfsdf sfsdf', NULL),
(4, 69, 'adsfsdf', 'sayyedasif444@gmail.com', 'sdfsdfsdfsfsdfsdf sfsdf', NULL),
(5, 69, 'Asif Sayyed', 'sayyedasif444@gmail.com', 'sdfsdf', 'Tue Jan 05 2021');

-- --------------------------------------------------------

--
-- Table structure for table `cause_images`
--

CREATE TABLE `cause_images` (
  `img_id` int(11) NOT NULL,
  `image_path` varchar(500) NOT NULL,
  `cause_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cause_images`
--

INSERT INTO `cause_images` (`img_id`, `image_path`, `cause_id`) VALUES
(8, '16090856371609085551.png', 66),
(9, '16090856371609085551.png', 67),
(10, '16090856371609085551.png', 68),
(11, '16090856371609085551.png', 69);

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `contact_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `note` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(50) NOT NULL,
  `event_title` varchar(1000) NOT NULL,
  `event_img_type` enum('image','slider') DEFAULT NULL,
  `event_desc` longtext DEFAULT NULL,
  `event_sch` longtext DEFAULT NULL,
  `event_slug` varchar(500) NOT NULL,
  `event_date` date DEFAULT NULL,
  `event_time` varchar(10) DEFAULT NULL,
  `event_loc` varchar(500) DEFAULT NULL,
  `event_host` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_img_type`, `event_desc`, `event_sch`, `event_slug`, `event_date`, `event_time`, `event_loc`, `event_host`) VALUES
(57, 'treatment for all children', NULL, '<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>', '<p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p>\n                                            <ul>\n                                                <li>The wise man therefore in these matters.</li>\n                                                <li>In a free hour, when our power of choice  and when nothing.</li>\n                                                <li>Else he  pains to avoid pains.</li>\n                                                <li>We denounce with righteous indignation dislike men. </li>\n                                                <li>Which is the same as saying through.</li>\n                                                <li>The wise man therefore always holds in these matters.</li>\n                                                <li>Power of choice  and when nothing.</li>\n                                                <li>Pains to avoid worse pains.</li>\n                                            </ul>', 'treatment-for-all-children-04', '2020-12-09', '12:50', '25 Newyork City', '25 Newyork City'),
(58, 'Treatment for All Children', NULL, '<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>', '                                      <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p>\r\n                                            <ul>\r\n                                                <li>The wise man therefore in these matters.</li>\r\n                                                <li>In a free hour, when our power of choice  and when nothing.</li>\r\n                                                <li>Else he  pains to avoid pains.</li>\r\n                                                <li>We denounce with righteous indignation dislike men. </li>\r\n                                                <li>Which is the same as saying through.</li>\r\n                                                <li>The wise man therefore always holds in these matters.</li>\r\n                                                <li>Power of choice  and when nothing.</li>\r\n                                                <li>Pains to avoid worse pains.</li>\r\n                                            </ul>', 'treatment-for-all-children', '2020-12-09', '12:50', '25 Newyork City', '25 Newyork City'),
(59, 'Treatment for All Children', NULL, '<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>', '                                      <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.</p>\r\n                                            <ul>\r\n                                                <li>The wise man therefore in these matters.</li>\r\n                                                <li>In a free hour, when our power of choice  and when nothing.</li>\r\n                                                <li>Else he  pains to avoid pains.</li>\r\n                                                <li>We denounce with righteous indignation dislike men. </li>\r\n                                                <li>Which is the same as saying through.</li>\r\n                                                <li>The wise man therefore always holds in these matters.</li>\r\n                                                <li>Power of choice  and when nothing.</li>\r\n                                                <li>Pains to avoid worse pains.</li>\r\n                                            </ul>', 'treatment-for-all-children', '2020-12-09', '12:50', '25 Newyork City', '25 Newyork City'),
(60, 'testing', 'image', 'hey hello', 'hey testing', 'testing', '2021-02-02', '12:50', '25 Newyork City', '25 Newyork City');

-- --------------------------------------------------------

--
-- Table structure for table `event_contacts`
--

CREATE TABLE `event_contacts` (
  `contact_id` int(11) NOT NULL,
  `event_id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `event_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_contacts`
--

INSERT INTO `event_contacts` (`contact_id`, `event_id`, `name`, `emailid`, `message`, `event_date`) VALUES
(2, 57, 'Asif Sayyed', 'sayyedasif444@gmail.com', 'sfsdf', 'Tue Jan 05 2021');

-- --------------------------------------------------------

--
-- Table structure for table `event_images`
--

CREATE TABLE `event_images` (
  `img_id` int(11) NOT NULL,
  `image_path` varchar(500) NOT NULL,
  `event_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_images`
--

INSERT INTO `event_images` (`img_id`, `image_path`, `event_id`) VALUES
(8, '16090856371609085551.png', 57),
(9, '16090856371609085551.png', 58),
(10, '16090856371609085551.png', 59),
(11, '16090856371609085551.png', 60);

-- --------------------------------------------------------

--
-- Table structure for table `page_meta`
--

CREATE TABLE `page_meta` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(500) DEFAULT NULL,
  `page_meta_tag` varchar(1000) DEFAULT NULL,
  `page_meta_desc` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_meta`
--

INSERT INTO `page_meta` (`page_id`, `page_name`, `page_meta_tag`, `page_meta_desc`) VALUES
(1, 'home', NULL, NULL),
(2, 'about', NULL, NULL),
(3, 'causes', NULL, NULL),
(4, 'events', NULL, NULL),
(5, 'blogs', NULL, NULL),
(6, 'gallery', NULL, NULL),
(7, 'contact', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `subscriber_id` int(11) NOT NULL,
  `EmailID` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`subscriber_id`, `EmailID`) VALUES
(1, 'abc@gmail.com'),
(2, 'abc@gmail.com'),
(3, 'abc1@gmail.com'),
(4, 'abc12@gmail.com'),
(5, 'abc123@gmail.com'),
(6, 'sayyedasif2016@gmail.com'),
(7, 'sayyedasif6@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `v_id` int(11) NOT NULL,
  `v_name` varchar(100) DEFAULT NULL,
  `v_post` varchar(100) DEFAULT NULL,
  `v_desc` varchar(100) DEFAULT NULL,
  `v_facebook` varchar(500) DEFAULT NULL,
  `v_linkedin` varchar(500) DEFAULT NULL,
  `v_twiter` varchar(500) DEFAULT NULL,
  `v_img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`v_id`, `v_name`, `v_post`, `v_desc`, `v_facebook`, `v_linkedin`, `v_twiter`, `v_img`) VALUES
(1, 'HASAN JACOBSON', 'BUSINESSMAN', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit dictum nobis.', NULL, NULL, NULL, '270x270.png'),
(2, 'HASAN JACOBSON', 'BUSINESSMAN', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit dictum nobis.', NULL, NULL, NULL, '270x270.png'),
(3, 'HASAN JACOBSON', 'BUSINESSMAN', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit dictum nobis.', NULL, NULL, NULL, '270x270.png'),
(4, 'HASAN JACOBSON', 'BUSINESSMAN', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit dictum nobis.', NULL, NULL, NULL, '270x270.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `blog_contacts`
--
ALTER TABLE `blog_contacts`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `blog_images`
--
ALTER TABLE `blog_images`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `blog_images_ibfk_1` (`blog_id`);

--
-- Indexes for table `causes`
--
ALTER TABLE `causes`
  ADD PRIMARY KEY (`cause_id`);

--
-- Indexes for table `cause_contacts`
--
ALTER TABLE `cause_contacts`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `event_contacts_ibfk_1` (`cause_id`);

--
-- Indexes for table `cause_images`
--
ALTER TABLE `cause_images`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `event_images_ibfk_1` (`cause_id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_contacts`
--
ALTER TABLE `event_contacts`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `event_contacts_ibfk_1` (`event_id`);

--
-- Indexes for table `event_images`
--
ALTER TABLE `event_images`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `event_images_ibfk_1` (`event_id`);

--
-- Indexes for table `page_meta`
--
ALTER TABLE `page_meta`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`subscriber_id`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog_contacts`
--
ALTER TABLE `blog_contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `blog_images`
--
ALTER TABLE `blog_images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `causes`
--
ALTER TABLE `causes`
  MODIFY `cause_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `cause_contacts`
--
ALTER TABLE `cause_contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cause_images`
--
ALTER TABLE `cause_images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `event_contacts`
--
ALTER TABLE `event_contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_images`
--
ALTER TABLE `event_images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `page_meta`
--
ALTER TABLE `page_meta`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `subscriber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_contacts`
--
ALTER TABLE `blog_contacts`
  ADD CONSTRAINT `blog_contacts_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`blog_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `blog_images`
--
ALTER TABLE `blog_images`
  ADD CONSTRAINT `blog_images_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`blog_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cause_contacts`
--
ALTER TABLE `cause_contacts`
  ADD CONSTRAINT `cause_contacts_ibfk_1` FOREIGN KEY (`cause_id`) REFERENCES `causes` (`cause_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cause_images`
--
ALTER TABLE `cause_images`
  ADD CONSTRAINT `cause_images_ibfk_1` FOREIGN KEY (`cause_id`) REFERENCES `causes` (`cause_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event_contacts`
--
ALTER TABLE `event_contacts`
  ADD CONSTRAINT `event_contacts_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event_images`
--
ALTER TABLE `event_images`
  ADD CONSTRAINT `event_images_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
