-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2021 at 07:27 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arhivefile`
--

-- --------------------------------------------------------

--
-- Table structure for table `arhivefile`
--

CREATE TABLE `arhivefile` (
  `arhivefile_id` int(11) NOT NULL,
  `arhivefilecategory_id` int(11) NOT NULL,
  `arhivefile_urlname` varchar(250) NOT NULL,
  `arhivefile_name` varchar(250) NOT NULL,
  `arhivefile_nameaz` varchar(250) NOT NULL,
  `arhivefile_row` int(11) NOT NULL,
  `arhivefile_text` text NOT NULL,
  `arhivefile_textaz` text NOT NULL,
  `arhivefile_pdf` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `arhivefile`
--

INSERT INTO `arhivefile` (`arhivefile_id`, `arhivefilecategory_id`, `arhivefile_urlname`, `arhivefile_name`, `arhivefile_nameaz`, `arhivefile_row`, `arhivefile_text`, `arhivefile_textaz`, `arhivefile_pdf`) VALUES
(5, 0, 'boltproduct', 'Bolt EN', 'Bolt AZ', 1, '<tbody>\r\n		<tr>\r\n			<td><strong>d1</strong></td>\r\n			<td><strong>M 4</strong></td>\r\n			<td><strong>M 5</strong></td>\r\n			<td><strong>M 6</strong></td>\r\n			<td><strong>M 8</strong></td>\r\n			<td><strong>M 10</strong></td>\r\n			<td><strong>M 12</strong></td>\r\n			<td><strong>M 16</strong></td>\r\n			<td><strong>M 20</strong></td>\r\n			<td><strong>M 24</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>P (pitch)</strong></td>\r\n			<td>0,7</td>\r\n			<td>0,8</td>\r\n			<td>1</td>\r\n			<td>1,25</td>\r\n			<td>1,5</td>\r\n			<td>1,75</td>\r\n			<td>2</td>\r\n			<td>2,5</td>\r\n			<td>3</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>d2 (max)</strong></td>\r\n			<td>8</td>\r\n			<td>11</td>\r\n			<td>13</td>\r\n			<td>16</td>\r\n			<td>20</td>\r\n			<td>23</td>\r\n			<td>29</td>\r\n			<td>35</td>\r\n			<td>44</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>h (max) </strong></td>\r\n			<td>10,5</td>\r\n			<td>13</td>\r\n			<td>17</td>\r\n			<td>20</td>\r\n			<td>25</td>\r\n			<td>33,5</td>\r\n			<td>37,5</td>\r\n			<td>46,5</td>\r\n			<td>56,5</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>m (max) </strong></td>\r\n			<td>4,6</td>\r\n			<td>6,5</td>\r\n			<td>8</td>\r\n			<td>10</td>\r\n			<td>12</td>\r\n			<td>14</td>\r\n			<td>17</td>\r\n			<td>21</td>\r\n			<td>25</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>a (max) </strong></td>\r\n			<td>2,1</td>\r\n			<td>2,4</td>\r\n			<td>3</td>\r\n			<td>4</td>\r\n			<td>4,5</td>\r\n			<td>5,3</td>\r\n			<td>6</td>\r\n			<td>7,5</td>\r\n			<td>9</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>e (max) </strong></td>\r\n			<td>20</td>\r\n			<td>26</td>\r\n			<td>33</td>\r\n			<td>39</td>\r\n			<td>51</td>\r\n			<td>65</td>\r\n			<td>73</td>\r\n			<td>90</td>\r\n			<td>110</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>l</strong></td>\r\n			<td>6-20</td>\r\n			<td>8-30</td>\r\n			<td>8-40</td>\r\n			<td>10-50</td>\r\n			<td>16-50</td>\r\n			<td>16-60</td>\r\n			<td>20-60</td>\r\n			<td>30-60</td>\r\n			<td>35-60</td>\r\n		</tr>\r\n	</tbody>\r\n', '<tbody>\r\n		<tr>\r\n			<td><strong>d1</strong></td>\r\n			<td><strong>M 4</strong></td>\r\n			<td><strong>M 5</strong></td>\r\n			<td><strong>M 6</strong></td>\r\n			<td><strong>M 8</strong></td>\r\n			<td><strong>M 10</strong></td>\r\n			<td><strong>M 12</strong></td>\r\n			<td><strong>M 16</strong></td>\r\n			<td><strong>M 20</strong></td>\r\n			<td><strong>M 24</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>P (pitch)</strong></td>\r\n			<td>0,7</td>\r\n			<td>0,8</td>\r\n			<td>1</td>\r\n			<td>1,25</td>\r\n			<td>1,5</td>\r\n			<td>1,75</td>\r\n			<td>2</td>\r\n			<td>2,5</td>\r\n			<td>3</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>d2 (max)</strong></td>\r\n			<td>8</td>\r\n			<td>11</td>\r\n			<td>13</td>\r\n			<td>16</td>\r\n			<td>20</td>\r\n			<td>23</td>\r\n			<td>29</td>\r\n			<td>35</td>\r\n			<td>44</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>h (max) </strong></td>\r\n			<td>10,5</td>\r\n			<td>13</td>\r\n			<td>17</td>\r\n			<td>20</td>\r\n			<td>25</td>\r\n			<td>33,5</td>\r\n			<td>37,5</td>\r\n			<td>46,5</td>\r\n			<td>56,5</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>m (max) </strong></td>\r\n			<td>4,6</td>\r\n			<td>6,5</td>\r\n			<td>8</td>\r\n			<td>10</td>\r\n			<td>12</td>\r\n			<td>14</td>\r\n			<td>17</td>\r\n			<td>21</td>\r\n			<td>25</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>a (max) </strong></td>\r\n			<td>2,1</td>\r\n			<td>2,4</td>\r\n			<td>3</td>\r\n			<td>4</td>\r\n			<td>4,5</td>\r\n			<td>5,3</td>\r\n			<td>6</td>\r\n			<td>7,5</td>\r\n			<td>9</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>e (max) </strong></td>\r\n			<td>20</td>\r\n			<td>26</td>\r\n			<td>33</td>\r\n			<td>39</td>\r\n			<td>51</td>\r\n			<td>65</td>\r\n			<td>73</td>\r\n			<td>90</td>\r\n			<td>110</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>l</strong></td>\r\n			<td>6-20</td>\r\n			<td>8-30</td>\r\n			<td>8-40</td>\r\n			<td>10-50</td>\r\n			<td>16-50</td>\r\n			<td>16-60</td>\r\n			<td>20-60</td>\r\n			<td>30-60</td>\r\n			<td>35-60</td>\r\n		</tr>\r\n	</tbody>\r\n', ''),
(6, 11, 'a', 'a', 'a', 1, '<tbody>\r\n		<tr>\r\n			<td><strong>d1</strong></td>\r\n			<td><strong>M 4</strong></td>\r\n			<td><strong>M 5</strong></td>\r\n			<td><strong>M 6</strong></td>\r\n			<td><strong>M 8</strong></td>\r\n			<td><strong>M 10</strong></td>\r\n			<td><strong>M 12</strong></td>\r\n			<td><strong>M 16</strong></td>\r\n			<td><strong>M 20</strong></td>\r\n			<td><strong>M 24</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>P (pitch)</strong></td>\r\n			<td>0,7</td>\r\n			<td>0,8</td>\r\n			<td>1</td>\r\n			<td>1,25</td>\r\n			<td>1,5</td>\r\n			<td>1,75</td>\r\n			<td>2</td>\r\n			<td>2,5</td>\r\n			<td>3</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>d2 (max)</strong></td>\r\n			<td>8</td>\r\n			<td>11</td>\r\n			<td>13</td>\r\n			<td>16</td>\r\n			<td>20</td>\r\n			<td>23</td>\r\n			<td>29</td>\r\n			<td>35</td>\r\n			<td>44</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>h (max) </strong></td>\r\n			<td>10,5</td>\r\n			<td>13</td>\r\n			<td>17</td>\r\n			<td>20</td>\r\n			<td>25</td>\r\n			<td>33,5</td>\r\n			<td>37,5</td>\r\n			<td>46,5</td>\r\n			<td>56,5</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>m (max) </strong></td>\r\n			<td>4,6</td>\r\n			<td>6,5</td>\r\n			<td>8</td>\r\n			<td>10</td>\r\n			<td>12</td>\r\n			<td>14</td>\r\n			<td>17</td>\r\n			<td>21</td>\r\n			<td>25</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>a (max) </strong></td>\r\n			<td>2,1</td>\r\n			<td>2,4</td>\r\n			<td>3</td>\r\n			<td>4</td>\r\n			<td>4,5</td>\r\n			<td>5,3</td>\r\n			<td>6</td>\r\n			<td>7,5</td>\r\n			<td>9</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>e (max) </strong></td>\r\n			<td>20</td>\r\n			<td>26</td>\r\n			<td>33</td>\r\n			<td>39</td>\r\n			<td>51</td>\r\n			<td>65</td>\r\n			<td>73</td>\r\n			<td>90</td>\r\n			<td>110</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>l</strong></td>\r\n			<td>6-20</td>\r\n			<td>8-30</td>\r\n			<td>8-40</td>\r\n			<td>10-50</td>\r\n			<td>16-50</td>\r\n			<td>16-60</td>\r\n			<td>20-60</td>\r\n			<td>30-60</td>\r\n			<td>35-60</td>\r\n		</tr>\r\n	</tbody>', '<tbody>\r\n		<tr>\r\n			<td><strong>d1</strong></td>\r\n			<td><strong>M 4</strong></td>\r\n			<td><strong>M 5</strong></td>\r\n			<td><strong>M 6</strong></td>\r\n			<td><strong>M 8</strong></td>\r\n			<td><strong>M 10</strong></td>\r\n			<td><strong>M 12</strong></td>\r\n			<td><strong>M 16</strong></td>\r\n			<td><strong>M 20</strong></td>\r\n			<td><strong>M 24</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>P (pitch)</strong></td>\r\n			<td>0,7</td>\r\n			<td>0,8</td>\r\n			<td>1</td>\r\n			<td>1,25</td>\r\n			<td>1,5</td>\r\n			<td>1,75</td>\r\n			<td>2</td>\r\n			<td>2,5</td>\r\n			<td>3</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>d2 (max)</strong></td>\r\n			<td>8</td>\r\n			<td>11</td>\r\n			<td>13</td>\r\n			<td>16</td>\r\n			<td>20</td>\r\n			<td>23</td>\r\n			<td>29</td>\r\n			<td>35</td>\r\n			<td>44</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>h (max) </strong></td>\r\n			<td>10,5</td>\r\n			<td>13</td>\r\n			<td>17</td>\r\n			<td>20</td>\r\n			<td>25</td>\r\n			<td>33,5</td>\r\n			<td>37,5</td>\r\n			<td>46,5</td>\r\n			<td>56,5</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>m (max) </strong></td>\r\n			<td>4,6</td>\r\n			<td>6,5</td>\r\n			<td>8</td>\r\n			<td>10</td>\r\n			<td>12</td>\r\n			<td>14</td>\r\n			<td>17</td>\r\n			<td>21</td>\r\n			<td>25</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>a (max) </strong></td>\r\n			<td>2,1</td>\r\n			<td>2,4</td>\r\n			<td>3</td>\r\n			<td>4</td>\r\n			<td>4,5</td>\r\n			<td>5,3</td>\r\n			<td>6</td>\r\n			<td>7,5</td>\r\n			<td>9</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>e (max) </strong></td>\r\n			<td>20</td>\r\n			<td>26</td>\r\n			<td>33</td>\r\n			<td>39</td>\r\n			<td>51</td>\r\n			<td>65</td>\r\n			<td>73</td>\r\n			<td>90</td>\r\n			<td>110</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>l</strong></td>\r\n			<td>6-20</td>\r\n			<td>8-30</td>\r\n			<td>8-40</td>\r\n			<td>10-50</td>\r\n			<td>16-50</td>\r\n			<td>16-60</td>\r\n			<td>20-60</td>\r\n			<td>30-60</td>\r\n			<td>35-60</td>\r\n		</tr>\r\n	</tbody>', ''),
(7, 11, 'din316', 'DIN 316 Butterfly Head Screw', 'Bolt AZ', 2, '<p>adsa</p>\r\n', '<p>asdas</p>\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `arhivefilecategory`
--

CREATE TABLE `arhivefilecategory` (
  `arhivefile_id` int(11) NOT NULL,
  `mainarhivefilecategory_id` int(11) NOT NULL,
  `arhivefilecategory_urlname` varchar(250) NOT NULL,
  `arhivefilecategory_name` varchar(250) NOT NULL,
  `arhivefilecategory_nameaz` varchar(250) NOT NULL,
  `arhivefilecategory_row` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mainarhivefilecategory`
--

CREATE TABLE `mainarhivefilecategory` (
  `mainarhivefilecategory_id` int(11) NOT NULL,
  `mainarhivefilecategory_name` varchar(250) NOT NULL,
  `mainarhivefilecategory_nameaz` varchar(250) NOT NULL,
  `mainarhivefilecategory_row` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mainarhivefilecategory`
--

INSERT INTO `mainarhivefilecategory` (`mainarhivefilecategory_id`, `mainarhivefilecategory_name`, `mainarhivefilecategory_nameaz`, `mainarhivefilecategory_row`) VALUES
(9, 'Setka En', 'Setka AZ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_gallery`
--

CREATE TABLE `product_gallery` (
  `arhivefile_gallery_id` int(11) NOT NULL,
  `arhivefile_id` int(11) NOT NULL,
  `arhivefile_gallery_photo` varchar(255) NOT NULL,
  `arhivefile_gallery_row` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_gallery`
--

INSERT INTO `product_gallery` (`arhivefile_gallery_id`, `arhivefile_id`, `arhivefile_gallery_photo`, `arhivefile_gallery_row`) VALUES
(421, 5, 'images/product/30057269863047024472flowers.jpg', 0),
(422, 5, 'images/product/21708220752552720854elena-rouame-Qt1kJzT4zJg-unsplash.jpg', 0);

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
(0, 'images/logo/22059logo.jpg', 'BoltCenter', 'BoltCenter', 'BoltCenter', '', '+994502630274', 'info@boltcenter.az', 'Baku city, Narmanov m', 'Bakı şəh, Nərmanov m.', '#', '#', '#');

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
-- Indexes for table `arhivefile`
--
ALTER TABLE `arhivefile`
  ADD PRIMARY KEY (`arhivefile_id`);

--
-- Indexes for table `arhivefilecategory`
--
ALTER TABLE `arhivefilecategory`
  ADD PRIMARY KEY (`arhivefile_id`);

--
-- Indexes for table `mainarhivefilecategory`
--
ALTER TABLE `mainarhivefilecategory`
  ADD PRIMARY KEY (`mainarhivefilecategory_id`);

--
-- Indexes for table `product_gallery`
--
ALTER TABLE `product_gallery`
  ADD PRIMARY KEY (`arhivefile_gallery_id`);

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
-- AUTO_INCREMENT for table `arhivefile`
--
ALTER TABLE `arhivefile`
  MODIFY `arhivefile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `arhivefilecategory`
--
ALTER TABLE `arhivefilecategory`
  MODIFY `arhivefile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mainarhivefilecategory`
--
ALTER TABLE `mainarhivefilecategory`
  MODIFY `mainarhivefilecategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_gallery`
--
ALTER TABLE `product_gallery`
  MODIFY `arhivefile_gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=423;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
