-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 06:06 AM
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
-- Database: `bakery_delight`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `aname` varchar(30) NOT NULL,
  `aemail` varchar(30) NOT NULL,
  `apassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `aname`, `aemail`, `apassword`) VALUES
(1, 'admin', 'admin@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cr_id` int(11) NOT NULL,
  `pr_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `order_no` int(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(10) NOT NULL,
  `total` int(40) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `crdate` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `crstatus` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cr_id`, `pr_id`, `cus_id`, `order_no`, `qty`, `price`, `total`, `cust_id`, `crdate`, `crstatus`) VALUES
(1, 3, 8, 7961, 4, 200, 800, 0, '2023-05-02 22:17:06.003607', 'ordered'),
(2, 1, 8, 7961, 3, 200, 600, 0, '2023-05-02 22:17:12.808746', 'ordered'),
(3, 2, 8, 5420, 1, 4000, 4000, 0, '2023-05-02 22:18:47.145318', 'ordered'),
(4, 3, 8, 8489, 3, 200, 600, 0, '2023-05-06 16:22:39.959002', 'ordered'),
(5, 2, 8, 8489, 1, 4000, 4000, 0, '2023-05-06 16:23:20.837564', 'ordered'),
(6, 2, 8, 6561, 1, 4000, 4000, 0, '2023-05-08 16:49:52.778567', 'ordered'),
(7, 2, 8, 0, 6, 4000, 24000, 0, '2023-05-08 17:20:51.077175', 'updated');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `cimage` text NOT NULL,
  `cdate` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `cname`, `cimage`, `cdate`) VALUES
(4, 'Cakes', 'cimage/cake.jpg', '2023-03-17 14:18:49.807996'),
(12, 'Pastries', 'cimage/pastry.jpeg', '2023-03-17 16:21:13.158293'),
(13, 'Breads', 'cimage/download (3).jpeg', '2023-03-17 16:21:34.989031');

-- --------------------------------------------------------

--
-- Table structure for table `coupen`
--

CREATE TABLE `coupen` (
  `cpn_id` int(11) NOT NULL,
  `cpn_name` varchar(30) NOT NULL,
  `percentage` int(11) NOT NULL,
  `cpn_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `cusname` varchar(30) NOT NULL,
  `cemail` varchar(30) NOT NULL,
  `cpassword` varchar(200) NOT NULL,
  `cphone` int(10) NOT NULL,
  `caddress` text NOT NULL,
  `cprofile` varchar(200) NOT NULL,
  `cdate` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cusname`, `cemail`, `cpassword`, `cphone`, `caddress`, `cprofile`, `cdate`) VALUES
(7, 'Sana', 'sana@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1234567890, 'mangalore', 'cprofile/pro.jpeg', '2023-03-14 16:04:08.885485'),
(8, 'sara', 'sara@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2147483647, 'BAJAL ,MANGALORE,DAKSHINA KANNNADA,KARNATAKA,575027', 'cprofile/profile.png', '2023-04-26 20:10:24.868372');

-- --------------------------------------------------------

--
-- Table structure for table `customize`
--

CREATE TABLE `customize` (
  `cust_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `custom_no` int(20) NOT NULL,
  `serving_size` varchar(100) NOT NULL,
  `exp_date` date NOT NULL,
  `flavour` varchar(100) NOT NULL,
  `toppings` varchar(100) NOT NULL,
  `special_req` text NOT NULL,
  `ck_image` text NOT NULL,
  `custdate` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `cusstatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customize`
--

INSERT INTO `customize` (`cust_id`, `cus_id`, `custom_no`, `serving_size`, `exp_date`, `flavour`, `toppings`, `special_req`, `ck_image`, `custdate`, `cusstatus`) VALUES
(7, 8, 9870, '5 inch(5 desert servings)', '2023-05-17', 'Dark Chocolate Mud Cake', 'Drip (Chocolate, Metallic, Coloured & Glaze)', 'vagon', 'cusimage/lovepoem2.jpg', '2023-05-02 23:20:06.801156', 'Ready for Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `pr_id` int(11) NOT NULL,
  `message` varchar(30) NOT NULL,
  `fdate` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `fstatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `cus_id`, `pr_id`, `message`, `fdate`, `fstatus`) VALUES
(0, 0, 3, 'good', '2023-05-07 20:59:23.693452', ''),
(0, 8, 3, 'good', '2023-05-07 20:59:36.275145', ''),
(0, 8, 3, 'good', '2023-05-07 21:01:18.480950', ''),
(0, 8, 1, 'good', '2023-05-07 21:05:45.394581', '');

-- --------------------------------------------------------

--
-- Table structure for table `filter_poster`
--

CREATE TABLE `filter_poster` (
  `fil_id` int(11) NOT NULL,
  `fil_name` varchar(30) NOT NULL,
  `fil_image` text NOT NULL,
  `fil_desc` text NOT NULL,
  `c_id` int(11) NOT NULL,
  `o_id` int(11) NOT NULL,
  `fil_date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `fil_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `l_id` int(11) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `ldate` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`l_id`, `lname`, `ldate`) VALUES
(2, 'mangalore', '2023-04-23 22:56:59.700259');

-- --------------------------------------------------------

--
-- Table structure for table `occation`
--

CREATE TABLE `occation` (
  `o_id` int(11) NOT NULL,
  `oname` varchar(100) NOT NULL,
  `oimage` text NOT NULL,
  `odate` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `occation`
--

INSERT INTO `occation` (`o_id`, `oname`, `oimage`, `odate`) VALUES
(2, 'Birthday', '', '2023-03-17 12:22:40.686072'),
(3, 'Wedding', '', '2023-03-20 15:03:35.604790'),
(4, 'other', '', '2023-03-20 15:50:54.349786');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `or_id` int(11) NOT NULL,
  `order_no` int(20) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `l_id` int(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `mode` varchar(30) NOT NULL,
  `cpn_code` varchar(30) NOT NULL,
  `discount` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `ordate` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `orstatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`or_id`, `order_no`, `fname`, `lname`, `country`, `address`, `l_id`, `state`, `zip_code`, `phone`, `email`, `cus_id`, `cust_id`, `mode`, `cpn_code`, `discount`, `subtotal`, `total`, `ordate`, `orstatus`) VALUES
(7, 7961, 'sara', 'zik', 'India', 'mangalore', 2, 'Karnataka', 575027, 2147483647, 'sam@gmail.com', 8, 0, 'card', '', 0, 1400, 1400, '2023-05-02 22:17:42.179435', 'Ready for Delivery'),
(9, 8489, 'sara', 'zik', 'India', 'mangalore', 2, 'Karnataka', 575027, 2147483647, 'sam@gmail.com', 8, 0, 'card', '', 0, 4600, 4600, '2023-05-07 21:02:52.587853', 'ordered'),
(10, 6561, 'sara', 'zik', 'india', 'mangalore', 2, 'karnataka', 575027, 1234567890, 'a@gamil.com', 8, 0, 'card', '', 0, 4000, 4000, '2023-05-08 17:07:27.473072', 'ordered');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `p_id` int(11) NOT NULL,
  `or_id` int(11) NOT NULL,
  `mode` varchar(30) NOT NULL,
  `total` int(11) NOT NULL,
  `card_holder` varchar(30) NOT NULL,
  `crad_no` bigint(16) NOT NULL,
  `cvv` int(11) NOT NULL,
  `exp_date` int(11) NOT NULL,
  `pstatus` varchar(30) NOT NULL,
  `pdate` datetime(6) DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`p_id`, `or_id`, `mode`, `total`, `card_holder`, `crad_no`, `cvv`, `exp_date`, `pstatus`, `pdate`) VALUES
(1, 3, 'card', 21980, 'raku', 1234567890123456, 333, 11, 'paid', '2023-05-02 11:39:32.971975'),
(2, 1, 'card', 24540, 'raku', 1234567890123456, 333, 12, 'paid', '2023-05-02 21:58:28.797961'),
(3, 7, 'card', 1400, 'raku', 1234567890123456, 333, 11, 'paid', '2023-05-02 22:18:01.155727'),
(4, 9, 'card', 4600, 'raku', 1234567899123456, 333, 12, 'paid', '2023-05-07 21:03:15.701960'),
(5, 10, 'card', 4000, 'rakesh', 1234567890123456, 333, 23, 'paid', '2023-05-08 17:07:56.657115');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pr_id` int(11) NOT NULL,
  `pr_name` varchar(100) NOT NULL,
  `c_id` int(11) NOT NULL,
  `o_id` int(11) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `price` int(10) NOT NULL,
  `description` text NOT NULL,
  `prqty` int(10) NOT NULL,
  `pravailable` int(10) NOT NULL,
  `primage2` text NOT NULL,
  `primage3` text NOT NULL,
  `pr_discount` int(10) NOT NULL,
  `highlights` text NOT NULL,
  `primage1` text NOT NULL,
  `prdate` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `prstatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pr_id`, `pr_name`, `c_id`, `o_id`, `weight`, `price`, `description`, `prqty`, `pravailable`, `primage2`, `primage3`, `pr_discount`, `highlights`, `primage1`, `prdate`, `prstatus`) VALUES
(1, 'black forest cake', 4, 2, '500', 200, 'Disclaimer: Please keep in mind that each cake is handcrafted individually by a professional baker so there may be subtle differences in design and flowers (due to seasonal changes)', 5, 5, 'ckimage2/lovepoem2.jpg', 'ckimage3/lovepoem2.png', 100, 'Disclaimer: Please keep in mind that each cake is handcrafted individually by a professional baker so there may be subtle differences in design and flowers (due to seasonal changes)', 'ckimage1/lovepoem.jpg', '2023-05-02 22:14:30.624995', ''),
(2, 'love poem', 4, 3, '5', 4000, 'Disclaimer: Please keep in mind that each cake is handcrafted individually by a professional baker so there may be subtle differences in design and flowers (due to seasonal changes)', 13, 13, 'ckimage2/lovepoem2.jpg', 'ckimage3/lovepoem2.png', 2000, 'Disclaimer: Please keep in mind that each cake is handcrafted individually by a professional baker so there may be subtle differences in design and flowers (due to seasonal changes)', 'ckimage1/lovepoem.jpg', '2023-05-02 22:15:35.563513', ''),
(3, 'wheat bread', 13, 4, '100', 200, 'Disclaimer: Please keep in mind that each cake is handcrafted individually by a professional baker so there may be subtle differences in design and flowers (due to seasonal changes)', 20, 20, 'ckimage2/bread1.jpeg', 'ckimage3/bread.jpeg', 10, 'Disclaimer: Please keep in mind that each cake is handcrafted individually by a professional baker so there may be subtle differences in design and flowers (due to seasonal changes)', 'ckimage1/Wrightmixedgrainbread.webp', '2023-05-02 22:16:52.300244', '');

-- --------------------------------------------------------

--
-- Table structure for table `style`
--

CREATE TABLE `style` (
  `st_id` int(11) NOT NULL,
  `stname` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `weight` varchar(30) NOT NULL,
  `stimage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cr_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `customize`
--
ALTER TABLE `customize`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `occation`
--
ALTER TABLE `occation`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`or_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customize`
--
ALTER TABLE `customize`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `occation`
--
ALTER TABLE `occation`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `or_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
