-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2021 at 11:10 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `colporteur`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `image` varchar(255) NOT NULL,
  `cname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`image`, `cname`) VALUES
('images/slide1.jpg', 'Newspaper and Magazins'),
('images/section1.jpg', 'Stationery '),
('images/book3.jpg', 'Book');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `Name`, `Email`, `Message`) VALUES
(4, ' sabrina', 'sabrina@gmail.com', 'Too slow!'),
(5, ' Chondro', 'chondro@outlook.com', 'aaaa'),
(6, ' Kazi', 'kazi@gmail.com', 'Can I pay through bank account?'),
(7, ' Kazi', 'kazi@gmail.com', 'Can I pay through bank account?'),
(8, ' sadia', 'sadia234@yahoo.com', 'aaabbb'),
(10, ' ABCD', 'abcd@yahoo.com', 'abcdef'),
(11, 'www', 'wwww@gmail.com', 'www'),
(15, ' s', 's@yahoo.com', 'sss'),
(16, ' ABCD', 'abcd@yahoo.com', 'abcde'),
(18, ' ABCD', 'abcd@yahoo.com', 'abcde'),
(19, ' s', 's@yahoo.com', 'rrrr'),
(20, ' Ramisa', 'ramisa@gmail.com', 'abcder'),
(21, ' Ramisa', 'ramisa@gmail.com', 'ww'),
(22, ' Pinky', 'jpinku@gmail.com', 'What is the process of cancel an order ?'),
(23, ' Pinky', 'jpinku@gmail.com', 'xyz'),
(24, 'w ', 'w@gmail.com', 'wxyz'),
(25, 'Sadia Sultana Sabrina', 'sabrina@yahoo.com', 'cba'),
(26, ' sabrina', 'sabrina@gmail.com', 'abc'),
(27, 'Ramisa', 'ramisa@gmail.com', 'wwq');

-- --------------------------------------------------------

--
-- Table structure for table `teami`
--

CREATE TABLE `teami` (
  `Name` varchar(255) NOT NULL,
  `Id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teami`
--

INSERT INTO `teami` (`Name`, `Id`, `Email`, `Image`) VALUES
('Sadia Sultana', 180104094, '180104094@aust.edu', 'images/resized.jpg'),
('Ramisa Maliyat', 180104079, '180104079@aust.edu', 'images/resized.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_password` text NOT NULL,
  `activation_code` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_phone`, `user_password`, `activation_code`, `status`, `created_date`, `updated_date`, `user_address`) VALUES
(6, 'Sadia Sultana', 'sadia234@yahoo.com', '1708691919', 'fcea920f7412b5da7be0cf42b8c93759', NULL, 2, '2021-04-02 15:26:34', '2021-04-02 15:26:34', NULL),
(8, 'Sadia Sultana Sabrina', 'sabrina@yahoo.com', '01508691919', 'fcea920f7412b5da7be0cf42b8c93759', NULL, 1, '2021-04-02 16:11:47', '2021-04-02 16:11:47', '97/2-A Zigatola,Dhaka'),
(9, ' sabrina', 'sultanah@outlook.com', '1683383883', 'fcea920f7412b5da7be0cf42b8c93759', NULL, 2, '2021-04-02 16:13:21', '2021-04-02 16:13:21', NULL),
(10, 'xyz', 'xyz@gmail.com', '1683383883', 'fcea920f7412b5da7be0cf42b8c93759', NULL, 2, '2021-04-02 16:13:54', '2021-04-02 16:13:54', NULL),
(11, 'cba', 'cba@gmail.com', '1708691919', 'fcea920f7412b5da7be0cf42b8c93759', NULL, 2, '2021-04-02 16:15:14', '2021-04-02 16:15:14', NULL),
(15, 'jpinku', 'jpinku@gmail.com', '01658741234', 'fcea920f7412b5da7be0cf42b8c93759', NULL, 1, '2021-04-04 01:05:06', '2021-04-04 01:05:06', '94/2-A Zigatola,Dhaka'),
(16, ' sabrina', 'sss@gmail.com', '01708691919', 'fcea920f7412b5da7be0cf42b8c93759', NULL, 1, '2021-04-06 13:12:10', '2021-04-06 13:12:10', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
