-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2022 at 12:39 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `archivefile`
--

-- --------------------------------------------------------

--
-- Table structure for table `archivefile`
--

CREATE TABLE `archivefile` (
  `archivefile_id` int(11) NOT NULL,
  `archivefilecategory_id` int(11) NOT NULL,
  `archivefile_urlname` varchar(250) NOT NULL,
  `archivefile_name` varchar(250) NOT NULL,
  `archivefile_nameaz` varchar(250) NOT NULL,
  `archivefile_row` int(11) NOT NULL,
  `archivefile_text` text NOT NULL,
  `archivefile_textaz` text NOT NULL,
  `archivefile_pdf` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `archivefile`
--

INSERT INTO `archivefile` (`archivefile_id`, `archivefilecategory_id`, `archivefile_urlname`, `archivefile_name`, `archivefile_nameaz`, `archivefile_row`, `archivefile_text`, `archivefile_textaz`, `archivefile_pdf`) VALUES
(9, 13, 'a', 'archive en', 'archive az', 1, '<p>a</p>\r\n', '<p>a</p>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `archivefilecategory`
--

CREATE TABLE `archivefilecategory` (
  `archivefilecategory_id` int(11) NOT NULL,
  `mainarchivefilecategory_id` int(11) NOT NULL,
  `archivefilecategory_urlname` varchar(250) NOT NULL,
  `archivefilecategory_name` varchar(250) NOT NULL,
  `archivefilecategory_nameaz` varchar(250) NOT NULL,
  `archivefilecategory_row` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `archivefilecategory`
--

INSERT INTO `archivefilecategory` (`archivefilecategory_id`, `mainarchivefilecategory_id`, `archivefilecategory_urlname`, `archivefilecategory_name`, `archivefilecategory_nameaz`, `archivefilecategory_row`) VALUES
(13, 0, 'archive1', 'Arxiv file kat en', 'Arxiv file kat az', 1);

-- --------------------------------------------------------

--
-- Table structure for table `archivefile_gallery`
--

CREATE TABLE `archivefile_gallery` (
  `archivefile_gallery_id` int(11) NOT NULL,
  `archivefile_id` int(11) NOT NULL,
  `archivefile_gallery_photo` varchar(255) NOT NULL,
  `archivefile_gallery_row` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `archivefile_gallery`
--

INSERT INTO `archivefile_gallery` (`archivefile_gallery_id`, `archivefile_id`, `archivefile_gallery_photo`, `archivefile_gallery_row`) VALUES
(430, 9, 'allfiles/31609318422235029859jairph-P-w61wkh-PQ-unsplash.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mainarchivefilecategory`
--

CREATE TABLE `mainarchivefilecategory` (
  `mainarchivefilecategory_id` int(11) NOT NULL,
  `mainarchivefilecategory_name` varchar(250) NOT NULL,
  `mainarchivefilecategory_nameaz` varchar(250) NOT NULL,
  `mainarchivefilecategory_row` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mainarchivefilecategory`
--

INSERT INTO `mainarchivefilecategory` (`mainarchivefilecategory_id`, `mainarchivefilecategory_name`, `mainarchivefilecategory_nameaz`, `mainarchivefilecategory_row`) VALUES
(11, 'Arxiv file en mc', 'Arxiv file az mc', 1);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `setting_id` int(11) NOT NULL,
  `setting_logo` varchar(250) NOT NULL,
  `setting_title` varchar(250) NOT NULL,
  `setting_description` varchar(250) NOT NULL,
  `setting_keywords` varchar(250) NOT NULL,
  `setting_author` varchar(250) NOT NULL,
  `setting_tel` varchar(250) NOT NULL,
  `setting_mail` varchar(250) NOT NULL,
  `setting_address` varchar(250) NOT NULL,
  `setting_addressaz` varchar(250) NOT NULL,
  `setting_facebook` varchar(250) NOT NULL,
  `setting_instagram` varchar(250) NOT NULL,
  `setting_youtube` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`setting_id`, `setting_logo`, `setting_title`, `setting_description`, `setting_keywords`, `setting_author`, `setting_tel`, `setting_mail`, `setting_address`, `setting_addressaz`, `setting_facebook`, `setting_instagram`, `setting_youtube`) VALUES
(0, '', 'Archive File\n', 'Archive File\n', 'Archive File\n', '', '', '', '', '', '#', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_time` datetime NOT NULL DEFAULT current_timestamp(),
  `user_name` varchar(250) NOT NULL,
  `user_mail` varchar(250) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_permission` varchar(50) NOT NULL,
  `user_situation` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_time`, `user_name`, `user_mail`, `user_password`, `user_permission`, `user_situation`) VALUES
(0, '2021-11-01 11:52:23', 'Arzu', 'arzu@bk.ru', '35e1c8d1841ea04253ace584fa65dea3', '5', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archivefile`
--
ALTER TABLE `archivefile`
  ADD PRIMARY KEY (`archivefile_id`);

--
-- Indexes for table `archivefilecategory`
--
ALTER TABLE `archivefilecategory`
  ADD PRIMARY KEY (`archivefilecategory_id`);

--
-- Indexes for table `archivefile_gallery`
--
ALTER TABLE `archivefile_gallery`
  ADD PRIMARY KEY (`archivefile_gallery_id`);

--
-- Indexes for table `mainarchivefilecategory`
--
ALTER TABLE `mainarchivefilecategory`
  ADD PRIMARY KEY (`mainarchivefilecategory_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archivefile`
--
ALTER TABLE `archivefile`
  MODIFY `archivefile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `archivefilecategory`
--
ALTER TABLE `archivefilecategory`
  MODIFY `archivefilecategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `archivefile_gallery`
--
ALTER TABLE `archivefile_gallery`
  MODIFY `archivefile_gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=431;

--
-- AUTO_INCREMENT for table `mainarchivefilecategory`
--
ALTER TABLE `mainarchivefilecategory`
  MODIFY `mainarchivefilecategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
