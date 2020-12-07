-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2017 at 11:31 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cook`
--

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `title` varchar(10) NOT NULL,
  `des` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `mode` varchar(30) NOT NULL,
  `time` varchar(10) NOT NULL,
  `ing` varchar(1000) NOT NULL,
  `method` varchar(5000) NOT NULL,
  `serve` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `title`, `des`, `type`, `mode`, `time`, `ing`, `method`, `serve`, `image`) VALUES
(2, 'Lemonade', 'Refreshing summer drink!', 'Drink', 'Freeze', '10 min.', 'i)1 cup white, granulated sugar (can reduce to 3/4 cup)\r\nii)1 cup water (for the simple syrup)\r\niii)1 cup lemon juice\r\niv)2 to 3 cups cold water (to dilute)', 'Step 1. First make a "simple syrup". Place the sugar and water in a small saucepan and bring to a simmer. Stir so that the sugar dissolves completely and remove from heat.\r\nStep 2. While the water is heating for the simple syrup, juice your lemons. Depending on the size of the lemons, 4 to 6 of them should be enough for one cup of juice.\r\nStep 3. Pour the juice and the simple syrup sugar water into a serving pitcher. Add 2 to 3 cups of cold water and taste. Add more water if you would like it to be more diluted (though note that when you add ice, it will melt and naturally dilute the lemonade). If the lemonade is a little sweet for your taste, add a little more straight lemon juice to it.\r\nRefrigerate 30 to 40 minutes.\r\nServe with ice, sliced lemons.\r\n', '6 serves', 'download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(20) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `image` varchar(500) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `image`) VALUES
(36, 'harloveleen ', 'kaur', 'harlove@yahoo.com', '123', 'female', 'pinata-party-cake-100115-1.jpeg'),
(37, 'khushdeep', 'kaur', 'khush@yahoo.com', '123', 'female', 'default.png'),
(38, 'Harpreet', 'Kanda', 'harkaur@gmail.com', 'happy', 'female', 'default.png'),
(39, 'Kulvir', 'Kaur Sidhu', 'kulvir@gmail.com', 'kul', 'female', 'default.png'),
(40, 'Sandeep', 'Kaur', 'sandykanda30@gmail.com', '123', 'female', 'IMG_5593.JPG'),
(41, 'Sagar', 'Honey', 'sagar69246@gmail.com', '123', 'male', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `comm_id` int(20) NOT NULL,
  `r_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL DEFAULT 'default.png',
  `rating` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`comm_id`, `r_name`, `email`, `comment`, `image`, `rating`) VALUES
(30, 'r1', 'sandykanda30@gmail.com', 'Nice one!!', '1457786159253.png', '4 stars,Good'),
(31, 'r2', 'surveen@gmail.com', 'Superb!!', 'IMG_1892.JPG', '4 stars,Good'),
(32, 'r3', 'sandykanda30@gmail.com', 'Good One !!', 'IMG_0898.JPG', '5 stars,Excellent'),
(33, 'r4', 'sandykanda30@gmail.com', 'nice !', 'IMG_5363.JPG', '3 stars,Average'),
(34, 'r5', 'sandykanda30@gmail.com', 'yummy yumm !!', '1488372000205.jpeg', '4 stars,Good'),
(35, 'r6', 'sdd@gmail.com', 'Delicious', 'IMG_5363.JPG', '5 stars,Excellent'),
(36, 'r7', 'harleen@gmail.com', 'So easy to make !!', 'IMG_5490.JPG', '4 stars,Good'),
(38, 'r13', 'sagar69246@gmail.com', 'good recipe !', 'user-128.png', '4 stars,Good');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`comm_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `comm_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
