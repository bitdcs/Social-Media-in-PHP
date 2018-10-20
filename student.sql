-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 09:03 PM
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
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL DEFAULT 'user.png',
  `cover` varchar(50) NOT NULL DEFAULT 'cover.png',
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `username`, `email`, `password`, `image`, `cover`, `status`) VALUES
(1, 'sourabh', 'kumarsourabh556@gmail.com', '13901055', 'logo.png', 'bgtexture2.jpg', 'Hi pk'),
(6, 'sagar', 'kumarsourabh556@gmail.com', '13901055', 'user.png', 'cover.png', 'Available'),
(7, 'sanjeet', 'sk9084589@gmail.com', '854', 'bitlogo.png', 'cover.png', 'Available'),
(8, 'gyatri', 'jhv@gmail.com', '854', '01003_BG.jpg', '04387_BG.jpg', 'Guitar'),
(9, 'sakshi', 'sakshi@gmail.com', '854', 'attendant3.jpg', 'DSCN2129.JPG', 'Online'),
(11, 'priyanshu', 'priyanshu@gmail.com', '1234', 'IMG_20150630_105233.jpg', '08193_HD.jpg', 'pant mutna'),
(12, 'sakshi', 'sakshiwork@gmail.com', 'sakshi12345', 'user.png', 'cover.png', ''),
(13, 'Vedant', 'vedant@gmail.com', '1234567', 'user.png', 'cover.png', ''),
(14, 'rahul kumar', 'rahulkuamrkvbr@gmail.com', 'rahuketu', 'user.png', 'cover.png', ''),
(15, 'rahul', 'rahul@gmail.com', '1234', '01003_BG.jpg', '08090_HD.jpg', 'hi'),
(16, 'vikram1996', 'vikash96.john@gmail.com', 'V!kash1996', 'user.png', 'cover.png', ''),
(17, 'niharika14', 'niharika@gmail.com', '1234', 'user.png', 'cover.png', 'hi'),
(18, 'Supriya Sharma', 'supriya123@gmail.com', 'sourabh', 'IMG_6049.JPG', 'Skull-Death-Smoking-Cigarettes.jpg', 'Shalu loves Prerna'),
(19, 'shalu', 'shalu123@gmail.com', 'shalu', 'user.png', 'cover.png', ''),
(20, 'jyoti mishra', 'jyoti@gmail.com', '1234', 'nihu.jpeg', 'DSCN2108.JPG', 'hi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
