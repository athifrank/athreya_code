-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2018 at 08:13 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `athreya`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_note`
--

CREATE TABLE `add_note` (
  `id` int(10) NOT NULL,
  `folder` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `gid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_note`
--

INSERT INTO `add_note` (`id`, `folder`, `description`, `gid`) VALUES
(3, 'Athena', '<p>\r\n	<span style=\"background-color:#ffa500;\">hi athi frank how are you today i am going to teach yo', 47),
(5, 'frank', '<p>\r\n	<span style=\"background-color:#ff3300;\">hyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyynnnnnnn', 48);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `use` varchar(15) NOT NULL COMMENT 'username',
  `pass` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL COMMENT 'admin_email'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`use`, `pass`, `name`, `mail`) VALUES
('srivatech', '6cfcb7f81c0507f44c9de4b186b33fa80bf9490c', 'admin', 'athifrank@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `folder`
--

CREATE TABLE `folder` (
  `id` int(100) NOT NULL,
  `folder_name` varchar(100) NOT NULL,
  `folder_image` varchar(200) NOT NULL,
  `cat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `folder`
--

INSERT INTO `folder` (`id`, `folder_name`, `folder_image`, `cat`) VALUES
(45, 'image_test', 'gallery/images/image_test/Lighthouse.jpg', 'image'),
(46, 'Video_test', 'gallery/videos/Video_test/Jellyfish.jpg', 'video'),
(47, 'Athena', 'gallery/images/Athena/Koala.jpg', 'image'),
(48, 'frank', 'gallery/images/frank/Desert.jpg', 'image'),
(49, 'video_folder', 'gallery/videos/video_folder/Chrysanthemum.jpg', 'video');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(100) NOT NULL,
  `update_date` varchar(100) NOT NULL,
  `img` varchar(200) NOT NULL,
  `select_folder` varchar(200) NOT NULL,
  `gid` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `update_date`, `img`, `select_folder`, `gid`) VALUES
(108, '03-07-2018', 'gallery/images/frank/Jellyfish7666.jpg', 'frank', 48),
(109, '03-07-2018', 'gallery/images/frank/Koala11331.jpg', 'frank', 48),
(110, '04-07-2018', 'gallery/images/Athena/Jellyfish12690.jpg', 'Athena', 47),
(111, '04-07-2018', 'gallery/images/Athena/Lighthouse16466.jpg', 'Athena', 47),
(112, '04-07-2018', 'gallery/images/Athena/Penguins3875.jpg', 'Athena', 47),
(113, '04-07-2018', 'gallery/images/frank/Chrysanthemum24588.jpg', 'frank', 48),
(114, '04-07-2018', 'gallery/images/frank/Desert15701.jpg', 'frank', 48),
(115, '04-07-2018', 'gallery/images/frank/Hydrangeas13162.jpg', 'frank', 48),
(116, '04-07-2018', 'gallery/images/frank/Jellyfish24667.jpg', 'frank', 48),
(117, '04-07-2018', 'gallery/images/frank/Koala28920.jpg', 'frank', 48),
(118, '04-07-2018', 'gallery/images/frank/Lighthouse22993.jpg', 'frank', 48);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_video`
--

CREATE TABLE `gallery_video` (
  `id` int(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `update_date` varchar(200) NOT NULL,
  `video` varchar(200) NOT NULL,
  `select_folder` varchar(200) NOT NULL,
  `gid` tinyint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_video`
--

INSERT INTO `gallery_video` (`id`, `title`, `update_date`, `video`, `select_folder`, `gid`) VALUES
(7, 'Testing', '16-05-2017', 'gallery/videos/Video_test/Node479936494.js Tutorial for Beginners - 19 - EJS.mp4', 'Video_test', 46);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL COMMENT 'Upload Date',
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Unblock, 0=Block'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_note`
--
ALTER TABLE `add_note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `folder`
--
ALTER TABLE `folder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_video`
--
ALTER TABLE `gallery_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_note`
--
ALTER TABLE `add_note`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `folder`
--
ALTER TABLE `folder`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `gallery_video`
--
ALTER TABLE `gallery_video`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
