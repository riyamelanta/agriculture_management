-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 11:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agrosys`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(10) NOT NULL,
  `a_name` varchar(40) NOT NULL,
  `a_email` varchar(50) NOT NULL,
  `a_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'Admin ', 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `agreement`
--

CREATE TABLE `agreement` (
  `ag_id` int(15) NOT NULL,
  `f_id` int(20) NOT NULL,
  `ag_date` datetime(6) NOT NULL,
  `ag_status` varchar(500) NOT NULL,
  `f_sign` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(30) NOT NULL,
  `s_id` int(20) NOT NULL,
  `no_labours` int(50) NOT NULL,
  `amt` int(50) NOT NULL,
  `b_status` varchar(500) NOT NULL,
  `b_date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `no_days` bigint(10) NOT NULL,
  `rdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `s_id`, `no_labours`, `amt`, `b_status`, `b_date`, `no_days`, `rdate`) VALUES
(5, 4, 2, 200, 'paid', '2023-05-16 15:55:16.125413', 2, '2023-05-18'),
(6, 4, 2, 5000, 'paid', '2023-05-17 09:51:10.939059', 5, '2023-05-22'),
(7, 4, 2, 2000, 'payment approved', '2023-05-27 07:33:03.286565', 4, '2023-05-31'),
(8, 4, 2, 3000, 'pending', '2023-05-27 07:44:23.979340', 2, '2023-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `consumer`
--

CREATE TABLE `consumer` (
  `c_id` int(40) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_password` varchar(300) NOT NULL,
  `c_address` varchar(200) NOT NULL,
  `c_phone` int(100) NOT NULL,
  `c_profile` text NOT NULL,
  `c_date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `c_status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consumer`
--

INSERT INTO `consumer` (`c_id`, `c_name`, `c_email`, `c_password`, `c_address`, `c_phone`, `c_profile`, `c_date`, `c_status`) VALUES
(2, 'sarosh', 'sarosh@gmail.com', '1234', 'mangalore', 1234567890, 'cus_image/c1e11b32b0428333b3da64fe733f42d1.jpg', '2023-05-08 22:31:44.612401', ''),
(3, 'zak', 'zak@gmail.com', '1234', 'MANGALORE,DAKSHINA KANNNADA,KARNATAKA,575027', 2147483647, 'cus_image/5dd3cc157c31ec9a2b36642b6291d7ab.jpg', '2023-05-08 23:19:08.401618', ''),
(4, 'fara', 'fara@gmail.com', '1234', 'mangalore', 1234567890, 'cus_image/c3eaa918641785889191946012838e8f.jpg', '2023-05-24 06:33:26.968871', '');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `f_id` int(10) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `f_email` varchar(250) NOT NULL,
  `f_password` varchar(300) NOT NULL,
  `f_address` varchar(500) NOT NULL,
  `f_landarea` text NOT NULL,
  `f_landloc` varchar(400) NOT NULL,
  `f_date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `f_status` varchar(300) NOT NULL,
  `f_phone` bigint(10) NOT NULL,
  `land_doc` text NOT NULL,
  `rent` int(100) NOT NULL,
  `nstatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`f_id`, `f_name`, `f_email`, `f_password`, `f_address`, `f_landarea`, `f_landloc`, `f_date`, `f_status`, `f_phone`, `land_doc`, `rent`, `nstatus`) VALUES
(7, 'sagar', 'sagar@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'mangalore', '1500', 'India', '2023-05-13 12:45:43.212133', 'approved', 8861537903, 'fdoc/asset_life.docx', 20, 'sent'),
(8, 'sara', 'sara@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'mangalore', '1600', 'India', '2023-05-13 12:46:35.635703', 'approved', 1234567890, 'fdoc/asset_life.docx', 100, ''),
(9, 's', 's@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'fygugref', '1000', 'mangalore', '2023-05-27 12:47:58.434894', 'approved', 1234567890, 'fdoc/bakery_delight (3).sql', 100, ''),
(10, 'rrrt', 'yy@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'mangalore', '1500', 'India', '2023-05-27 13:25:51.720248', '', 1234567890, 'fdoc/Neutral Minimalist Modern Professional Accountant Resume (3).pdf', 30, ''),
(11, 'tt', 'tt@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'mangalore', '1500', 'India', '2023-05-27 13:28:46.411704', '', 1234567890, 'fdoc/tt.pdf', 30, '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feed_id` int(10) NOT NULL,
  `o_id` int(15) NOT NULL,
  `feed_msg` varchar(500) NOT NULL,
  `feed_date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `feed_status` varchar(500) NOT NULL,
  `f_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `o_id`, `feed_msg`, `feed_date`, `feed_status`, `f_id`) VALUES
(1, 5, 'nice product', '0000-00-00 00:00:00.000000', '', 7),
(2, 5, 'nice product', '2023-05-16 21:22:02.980091', '', 7),
(3, 6, 'nice', '2023-05-17 10:06:27.205440', '', 7);

-- --------------------------------------------------------

--
-- Table structure for table `fertilizer`
--

CREATE TABLE `fertilizer` (
  `fl_id` int(15) NOT NULL,
  `fl_name` varchar(40) NOT NULL,
  `fl_qty` int(200) NOT NULL,
  `fl_price` bigint(20) NOT NULL,
  `stock` int(200) NOT NULL,
  `fl_date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `fl_status` varchar(500) NOT NULL,
  `fl_image` varchar(300) NOT NULL,
  `fl_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fertilizer`
--

INSERT INTO `fertilizer` (`fl_id`, `fl_name`, `fl_qty`, `fl_price`, `stock`, `fl_date`, `fl_status`, `fl_image`, `fl_desc`) VALUES
(1, 'Organic Lawn Care For Beginners - Maison', 10, 450, 0, '2023-05-11 21:27:29.802562', 'out of stock', 'fertilizer/Organic Lawn Care For Beginners - Maison Pur.jpg', 'Organic Lawn Care For Beginners - Maison Pur'),
(2, 'Genesys Organic Fertilizer ', 3, 300, 0, '2023-05-11 21:28:17.490684', 'out of stock', 'fertilizer/Genesys Organic Fertilizer Packaging.jpg', 'Genesys Organic Fertilizer '),
(3, 'Garden Right _ MiracleGro', 5, 700, 20, '2023-05-11 21:29:02.480363', 'available', 'fertilizer/Garden Right _ MiracleGro.jpg', 'Garden Right _ MiracleGro'),
(4, 'The Gardening Dad', 4, 300, 30, '2023-05-11 21:38:17.837232', 'available', 'fertilizer/12 Best Fertilizer For Plants to your Garden - The Gardening Dad.jpg', 'The Gardening Dad'),
(5, 'The Gardening Dad', 4, 300, 28, '2023-05-11 21:39:00.238844', 'available', 'fertilizer/12 Best Fertilizer For Plants to your Garden - The Gardening Dad.jpg', 'The Gardening Dad');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `in_id` int(10) NOT NULL,
  `in_title` varchar(100) NOT NULL,
  `in_image` text NOT NULL,
  `in_details` varchar(200) NOT NULL,
  `in_date` datetime(6) NOT NULL,
  `in_status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`in_id`, `in_title`, `in_image`, `in_details`, `in_date`, `in_status`) VALUES
(1, 'Pepper', 'info_image/Free Images _ fruit, orange, food, produce, vegetable, kitchen, healthy, eat, delicious, cook, vegetables, bell pepper, paprika, ingredients, bio, sweet peppers, flowering plant, chili pepper, yellow (3).jpg', 'Downloads Free Images : fruit, orange, food, produce, vegetable, kitchen, healthy, eat, delicious, cook, vegetables, bell pepper, paprika, ingredients, bio, sweet peppers, flowering plant, chili peppe', '0000-00-00 00:00:00.000000', ''),
(2, 'Red Chilli', 'info_image/whole ripe red chili pepper pod isolated on white background_ Ho.jpg', 'Downloads Free Images : fruit, orange, food, produce, vegetable, kitchen, healthy, eat, delicious, cook, vegetables, bell pepper, paprika, ingredients, bio, sweet peppers, flowering plant, chili peppe', '0000-00-00 00:00:00.000000', ''),
(3, 'Tomatto', 'info_image/The Early Girl Tomato_ A Reliable, Short-Season Favorite Hybrid Variety.jpg', 'The Early Girl Tomato_ A Reliable, Short-Season Favorite Hybrid Variety.', '0000-00-00 00:00:00.000000', ''),
(4, 'Tomatto', 'info_image/The Early Girl Tomato_ A Reliable, Short-Season Favorite Hybrid Variety.jpg', 'The Early Girl Tomato_ A Reliable, Short-Season Favorite Hybrid Variety.', '0000-00-00 00:00:00.000000', ''),
(5, 'Cabbage', 'info_image/Freshly harvested cabbage featuring cabbage, vegetable, and agriculture.jpg', 'Freshly harvested cabbage featuring cabbage, vegetable, and agriculture', '0000-00-00 00:00:00.000000', ''),
(6, '4120', 'info_image/', 'Pepper', '0000-00-00 00:00:00.000000', '');

-- --------------------------------------------------------

--
-- Table structure for table `labour`
--

CREATE TABLE `labour` (
  `l_id` int(40) NOT NULL,
  `s_id` int(40) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `l_age` int(4) NOT NULL,
  `l_gender` varchar(10) NOT NULL,
  `l_phone` int(100) NOT NULL,
  `l_image` text NOT NULL,
  `l_address` text NOT NULL,
  `wage` int(10) NOT NULL,
  `l_date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `l_status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labour`
--

INSERT INTO `labour` (`l_id`, `s_id`, `l_name`, `l_age`, `l_gender`, `l_phone`, `l_image`, `l_address`, `wage`, `l_date`, `l_status`) VALUES
(1, 4, 'Saam', 37, 'male', 1234567890, 'limage/acd934f24c8fa0c90c561f27fc9f75f9.jpg', 'mangalore', 0, '2023-05-16 15:44:50.563952', ''),
(2, 4, 'Reshma', 27, 'female', 1234567890, 'limage/c3eaa918641785889191946012838e8f.jpg', 'mangalore', 0, '2023-05-16 15:45:20.480331', ''),
(3, 4, 'Rada', 30, 'female', 1234567890, 'limage/1b5f937357fa8ad26f6dd9f8b50f1a6a.jpg', 'mangalore', 0, '2023-05-17 09:56:20.964886', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_ferti`
--

CREATE TABLE `order_ferti` (
  `o_id` int(10) NOT NULL,
  `f_id` int(20) NOT NULL,
  `fl_id` int(25) NOT NULL,
  `or_qty` int(150) NOT NULL,
  `total_price` int(10) NOT NULL,
  `name` varchar(60) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(60) NOT NULL,
  `city` varchar(40) NOT NULL,
  `country` varchar(40) NOT NULL,
  `zip` int(11) NOT NULL,
  `or_status` varchar(50) NOT NULL,
  `or_date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_ferti`
--

INSERT INTO `order_ferti` (`o_id`, `f_id`, `fl_id`, `or_qty`, `total_price`, `name`, `phone`, `email`, `address`, `city`, `country`, `zip`, `or_status`, `or_date`) VALUES
(3, 7, 2, 20, 6000, 'fara', 1234567890, 'sagar@gmail.com', 'mangalore', 'mangalore', 'sagar@gmail.com', 575027, 'paid', '2023-05-13 13:26:44.257922'),
(4, 7, 2, 1, 300, 'fara', 1234567890, 'sagar@gmail.com', 'mangalore', 'mangalore', 'sagar@gmail.com', 575027, 'Delivered', '2023-05-13 13:40:26.783775'),
(5, 7, 1, 20, 9000, 'sara zik', 8861537903, 'sam@gmail.com', 'mangalore', 'mangalore', 'sam@gmail.com', 575027, 'feedback sent', '2023-05-16 20:58:06.614338'),
(6, 7, 1, 10, 4500, 'rrr', 123456789, 'sagar@gmail.com', 'mangalore', 'wdefs', 'india', 23456, 'feedback sent', '2023-05-17 10:04:10.231031'),
(7, 7, 5, 2, 600, 'fara', 1234567890, 'sagar@gmail.com', 'mangalore', 'mangalore', 'sagar@gmail.com', 575027, 'Delivered', '2023-05-27 11:40:21.064834'),
(8, 7, 3, 10, 7000, 'fara', 1234567890, 'sagar@gmail.com', 'mangalore', 'mangalore', 'sagar@gmail.com', 575027, 'Delivered', '2023-05-27 13:36:17.408042');

-- --------------------------------------------------------

--
-- Table structure for table `paymentqt`
--

CREATE TABLE `paymentqt` (
  `py_id` int(11) NOT NULL,
  `q_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `amt` bigint(10) NOT NULL,
  `transaction_id` varchar(40) NOT NULL,
  `pdate` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `pstatus` varchar(40) NOT NULL,
  `mode` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymentqt`
--

INSERT INTO `paymentqt` (`py_id`, `q_id`, `c_id`, `amt`, `transaction_id`, `pdate`, `pstatus`, `mode`) VALUES
(1, 1, 0, 2060, '1234567890123456', '2023-05-27 05:06:28.101899', 'rejected', 'upi'),
(2, 1, 3, 2060, '1234567890123456', '2023-05-27 05:06:34.999072', 'approved', 'upi'),
(3, 1, 3, 2060, '1234567890123456', '2023-05-27 05:07:45.896479', 'pending', 'upi'),
(4, 1, 3, 2060, '1234567890123456', '2023-05-27 05:31:27.079275', 'pending', 'upi'),
(5, 1, 3, 2060, '1234567890123456', '2023-05-27 05:32:16.197652', 'pending', 'upi');

-- --------------------------------------------------------

--
-- Table structure for table `payment_farmers`
--

CREATE TABLE `payment_farmers` (
  `pa_id` int(10) NOT NULL,
  `f_id` int(10) NOT NULL,
  `o_id` int(10) NOT NULL,
  `transaction_id` varchar(60) NOT NULL,
  `pa_mode` varchar(30) NOT NULL,
  `amount` int(100) NOT NULL,
  `pa_status` varchar(500) NOT NULL,
  `pa_date` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_farmers`
--

INSERT INTO `payment_farmers` (`pa_id`, `f_id`, `o_id`, `transaction_id`, `pa_mode`, `amount`, `pa_status`, `pa_date`) VALUES
(1, 7, 4, '', '300', 0, '11/24', '0000-00-00 00:00:00.000000'),
(2, 7, 4, '', 'card', 300, 'paid', '2023-05-13 14:59:59.921831'),
(3, 7, 4, '', 'card', 300, 'paid', '2023-05-13 15:01:32.604190'),
(4, 7, 4, '', 'card', 300, 'paid', '2023-05-13 15:02:30.967964'),
(5, 7, 5, '', 'card', 9000, 'paid', '2023-05-16 20:59:33.175993'),
(6, 7, 6, '', 'card', 4500, 'paid', '2023-05-17 10:05:30.238448'),
(7, 7, 3, '1234567890123456', 'upi', 6000, 'pending', '2023-05-27 09:24:15.282706'),
(8, 7, 7, '1234567890123456', 'upi', 600, 'pending', '2023-05-27 11:45:48.262144'),
(9, 7, 8, '1234567890123456', 'upi', 7000, 'pending', '2023-05-27 13:41:13.386761');

-- --------------------------------------------------------

--
-- Table structure for table `payment_labours`
--

CREATE TABLE `payment_labours` (
  `p_id` int(110) NOT NULL,
  `b_id` int(10) NOT NULL,
  `p_amount` int(10) NOT NULL,
  `transaction_id` varchar(60) NOT NULL,
  `p_mode` varchar(10) NOT NULL,
  `p_status` varchar(500) NOT NULL,
  `p_date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `s_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_labours`
--

INSERT INTO `payment_labours` (`p_id`, `b_id`, `p_amount`, `transaction_id`, `p_mode`, `p_status`, `p_date`, `s_id`) VALUES
(9, 7, 2000, '1234567890123456', 'upi', 'approved', '2023-05-27 07:41:05.983266', 4),
(10, 7, 2000, '1234567890123456', 'upi', 'rejected', '2023-05-27 07:41:46.908719', 4),
(11, 8, 3000, '1234567890123456', 'upi', 'approved', '2023-05-27 07:44:54.448346', 4);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `po_id` int(11) NOT NULL,
  `potitle` varchar(40) NOT NULL,
  `podesc` bigint(30) NOT NULL,
  `podate` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `postatus` varchar(40) NOT NULL,
  `poimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`po_id`, `potitle`, `podesc`, `podate`, `postatus`, `poimage`) VALUES
(2, 'Coliflower', 90, '2023-05-25 07:42:41.215621', '', 'info_image/Freshly harvested cabbage featuring cabbage, vegetable, and agriculture.jpg'),
(3, 'Pepper', 200, '2023-05-26 21:05:29.332736', '', 'info_image/Free Images _ fruit, orange, food, produce, vegetable, kitchen, healthy, eat, delicious, cook, vegetables, bell pepper, paprika, ingredients, bio, sweet peppers, flowering plant, chili pepper, yellow (1).jpg'),
(4, 'Red Chilli', 100, '2023-05-26 21:41:04.583344', '', 'info_image/whole ripe red chili pepper pod isolated on white background_ Ho.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `q_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `po_id` int(11) NOT NULL,
  `quote_no` int(11) NOT NULL,
  `item_desc` text NOT NULL,
  `qty` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `gst` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL,
  `qdate` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `qstatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`q_id`, `c_id`, `po_id`, `quote_no`, `item_desc`, `qty`, `unit_price`, `total`, `gst`, `grand_total`, `qdate`, `qstatus`) VALUES
(1, 3, 4, 4532, 'Red Chilli', 100, 20, 2000, 3, 2060, '2023-05-26 23:13:00.642194', 'approved'),
(2, 2, 4, 2838, 'Red Chilli', 100, 30, 3000, 2, 3060, '2023-05-27 03:56:09.333256', ''),
(3, 4, 4, 5617, 'Red Chilli', 100, 40, 4000, 2, 4080, '2023-05-27 03:57:00.065929', 'rejected'),
(4, 2, 3, 1214, 'Pepper', 200, 40, 8000, 3, 8240, '2023-05-27 14:35:07.634413', '');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `s_id` int(10) NOT NULL,
  `s_name` varchar(200) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `s_password` varchar(400) NOT NULL,
  `s_phone` int(100) NOT NULL,
  `s_address` varchar(200) NOT NULL,
  `commission` bigint(10) NOT NULL,
  `s_date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `s_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`s_id`, `s_name`, `s_email`, `s_password`, `s_phone`, `s_address`, `commission`, `s_date`, `s_status`) VALUES
(3, 'dfghj', 'ankithshetty000@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2147483647, '3-46/1(3) Sri Devi Prasad, Shiva Nagara 5th cross, kavoor, mangalore', 0, '2023-03-30 11:57:34.349529', '0'),
(4, 'sagar', 'sagar@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1234567890, 'mangalore', 0, '2023-05-03 10:28:18.021500', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `agreement`
--
ALTER TABLE `agreement`
  ADD PRIMARY KEY (`ag_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `consumer`
--
ALTER TABLE `consumer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `fertilizer`
--
ALTER TABLE `fertilizer`
  ADD PRIMARY KEY (`fl_id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`in_id`);

--
-- Indexes for table `labour`
--
ALTER TABLE `labour`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `order_ferti`
--
ALTER TABLE `order_ferti`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `paymentqt`
--
ALTER TABLE `paymentqt`
  ADD PRIMARY KEY (`py_id`);

--
-- Indexes for table `payment_farmers`
--
ALTER TABLE `payment_farmers`
  ADD PRIMARY KEY (`pa_id`);

--
-- Indexes for table `payment_labours`
--
ALTER TABLE `payment_labours`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`po_id`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `agreement`
--
ALTER TABLE `agreement`
  MODIFY `ag_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `consumer`
--
ALTER TABLE `consumer`
  MODIFY `c_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feed_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fertilizer`
--
ALTER TABLE `fertilizer`
  MODIFY `fl_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `in_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `labour`
--
ALTER TABLE `labour`
  MODIFY `l_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_ferti`
--
ALTER TABLE `order_ferti`
  MODIFY `o_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `paymentqt`
--
ALTER TABLE `paymentqt`
  MODIFY `py_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment_farmers`
--
ALTER TABLE `payment_farmers`
  MODIFY `pa_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment_labours`
--
ALTER TABLE `payment_labours`
  MODIFY `p_id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `po_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;











/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
