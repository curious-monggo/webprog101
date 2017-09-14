-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2017 at 03:57 AM
-- Server version: 5.7.19-log
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
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comments_id` int(11) NOT NULL,
  `comment_content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comments_id`, `comment_content`) VALUES
(15, 'uiu'),
(16, 'uiuiui'),
(17, 'iuiuiu'),
(18, 'nhnjg'),
(19, 'jhj'),
(20, 'jhjhjhj'),
(21, 'test'),
(22, 'wewe'),
(23, 'ewewe'),
(24, 'rererer'),
(25, 'fefefefef'),
(26, 'dfd'),
(27, 'dfddd'),
(28, 'we'),
(29, 'rtrt'),
(30, 'uyu'),
(31, 'ere'),
(32, 'yu'),
(33, 'uyuyu'),
(34, 'ty'),
(35, 'df'),
(36, 'rt'),
(37, 'rer'),
(38, '12'),
(39, 'oio'),
(40, 'fgfgfg'),
(41, 'erfd'),
(42, 'yu7');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `posts_id` int(11) NOT NULL,
  `posts_title` varchar(256) NOT NULL,
  `posts_content` varchar(256) NOT NULL,
  `posts_category` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`posts_id`, `posts_title`, `posts_content`, `posts_category`) VALUES
(65, 'titile', 'question', 'Java'),
(66, 'titlee', 'questionnnn', 'C#');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_uid` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES
(4, 'AccName', 'LasAccNAme', 'admin@gmail.com', 'Admin', '$2y$10$CWkfrmMR9d94ojF1PpdwE.wfbiNElEJ8U9H4N/R05iZ9p8Vx4uBaK'),
(5, 'Fiona', 'Mojal', 'fiona.alexandra@gmail.com', 'princess fiona', '$2y$10$VXqjaGST.o4fhtZCp3cOHOyrMv8VlNqE3zaXeflo5Yh8v4suHpHma'),
(6, 'Cherryln', 'Mojal', 'cherry@gmail.com', 'icherry', '$2y$10$qeyrikbYJRMkAHTgRocJ7.yXTc70YIBtk9GMngrKl1x0S3E9ps9yq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comments_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`posts_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comments_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `posts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
