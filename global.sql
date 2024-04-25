-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2024 at 02:09 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `global`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE `addtocart` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `total` int(50) NOT NULL,
  `image` varbinary(500) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(20) NOT NULL,
  `catname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `catname`) VALUES
(1, 'Gujarati'),
(2, 'Panjabi'),
(3, 'Rajasthani'),
(4, 'Italian'),
(5, 'Chinese'),
(7, 'South Indian'),
(8, 'Dessert'),
(9, 'unlimited');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `name`, `email`, `question`, `answer`) VALUES
(1, 'vishva', 'vmaru@gmail.com', 'Which is new added in your menu?', 'Cheese roll, bread butter, roll roti'),
(2, 'Disha', 'disha@gmail.com', 'do you give any discount in diwali?', 'yes, we will give big discount in diwali festival.');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `firstname`, `lastname`, `email`, `feedback`) VALUES
(1, 'Vishva', 'Maru', 'vmaru@gmail.com', 'Nice service'),
(2, 'Riddhi', 'Nadapra', 'riddhu@gmail.com', 'I cetisfied for your service'),
(3, 'Disha', 'Parmar', 'disha@gmail.com', 'Amazing food '),
(4, 'Vishva', 'Ram', 'vishva@gmail.com', 'Nice ');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `itemnm` varchar(50) NOT NULL,
  `itemdes` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `category`, `itemnm`, `itemdes`, `price`, `image`) VALUES
(2, 'Gujarati', 'Undhiyu', 'Delicious test', '199', 'image/g_Undhiyu1.jpg'),
(3, 'Gujarati', 'Patara', 'Nice in test', '99', 'image/g_patra.jpg'),
(4, 'Gujarati', 'Thepla', 'It is famous in gujarat.', '45', 'image/g_thepla.jpg'),
(5, 'Gujarati', 'Khandavi', 'It make using Beson floor', '99', 'image/g_khandavi.jpg'),
(6, 'Gujarati', 'Khaman', 'Nice in test', '149', 'image/g_khaman.jpg'),
(7, 'Gujarati', 'Kadhi', 'Good Test. Try once', '99', 'image/g_kadhi.jpg'),
(8, 'Panjabi', 'Chole Bhature', 'Delicious test', '149', 'image/p_chole_bhature.jpg'),
(9, 'Panjabi', 'Dal Makhani', 'Nice in test', '199', 'image/p_dal-makhani.jpg'),
(10, 'Panjabi', 'Gatte ki sabji', 'It is new item in panjabi.', '149', 'image/p_gatte-ki-sabji.jpg'),
(11, 'Panjabi', 'Naan', 'it is panjabi style roti.', '45', 'image/p_naan.jpg'),
(12, 'Panjabi', 'Veg Kadai', 'It is mixed vegetable', '199', 'image/p_veg_kadai.jpg'),
(13, 'Panjabi', 'sarson ka saag', 'It also famous panjabi item', '149', 'image/p_sarson_ka_saag.webp'),
(14, 'Chinese', 'Manchurian', 'it is amazing..', '149', 'image/c_manchurian.jpg'),
(15, 'Chinese', 'Noodles', 'it is delicious chinese food.', '149', 'image/c_noodles.webp'),
(16, 'Chinese', 'Veg Hakka Noodles', 'it is also chinese item', '149', 'image/c_veg_hakka_noodles.jpg'),
(17, 'Chinese', 'Spring Roll', 'Delicious test', '99', 'image/c_springroll.jpg'),
(18, 'Chinese', 'Manchow Soup', 'Good Test. Try once', '149', 'image/c_veg_manchow_soup.jpg'),
(19, 'Chinese', 'Hot and Sour soup', 'Nice in test', '199', 'image/c_Hot-and-Sour-Soup.jpg'),
(20, 'Italian', 'Vegetable Pizza', 'Good Test. Try once', '249', 'image/i_veggie-pizza.webp'),
(21, 'Italian', 'Cheese Pizza', 'Delicious test', '299', 'image/i_Cheese-pizza1.webp'),
(22, 'Italian', 'Corn Pizza', 'Delicious test', '199', 'image/i_corn_pizza.jpg'),
(23, 'Italian', 'Cheese Pasta', 'very good test. try once.', '149', 'image/i_cheesy-pasta.webp'),
(24, 'Italian', 'Macroni', 'Nice in test', '99', 'image/i_Macaroni.jpg'),
(25, 'Italian', 'Panne Pasta', 'Good Test. Try once', '199', 'image/i_Penne_pasta.jpg'),
(26, 'Rajasthani', 'Dal Baati', 'Famous Rajasthani food', '199', 'image/r_Dal-Baati.jpg'),
(27, 'Rajasthani', 'Kachori', 'Good Test. Try once', '149', 'image/r_kachori1.jpg'),
(28, 'Rajasthani', 'Churma Ladoo', 'famous sweet of rajasthan', '249', 'image/r_churma_ladoo.jpg'),
(29, 'Rajasthani', 'Ghevar', 'sweet. try once.', '199', 'image/r_Ghevar.webp'),
(30, 'Rajasthani', 'Balushali', 'it is amazing..', '199', 'image/r_Balushahi.webp'),
(31, 'Rajasthani', 'Bajara Roti', 'it is dellicious with eat any sabji.', '45', 'image/r_bajara.jpg'),
(32, 'South Indian', 'Masala Dosa', 'Good Test. Try once', '249', 'image/s_masala-dosa.jpeg'),
(33, 'South Indian', 'Idali', 'Delicious test', '99', 'image/s_idali.jpg'),
(34, 'South Indian', 'Meduvada', 'It serve with sambhar.', '149', 'image/s_meduvada.jpg'),
(35, 'South Indian', 'Uttapam', 'Nice in test', '99', 'image/s_uttapam.jpg'),
(36, 'South Indian', 'Appam', 'Good Test. Try once', '99', 'image/s_appam.jpg'),
(37, 'South Indian', 'Curd Rice', 'Nice in test', '199', 'image/s_curd-rice.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'Ravina', '123'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `total` int(100) NOT NULL,
  `payment` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `name`, `address`, `city`, `item`, `total`, `payment`) VALUES
(1, 'Vishva', 'Maru', 'Sarangpipri', 'Gatte ki sabji', 149, 149);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(20) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `mno` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `address`, `country`, `state`, `city`, `dob`, `gender`, `mno`, `email`, `username`, `password`) VALUES
(1, 'Vishva', 'Maru', 'Sarangpipri', 'India', 'Gujarat', 'Junagadh', '09/01/2009', 'female', '9485625412', 'vmaru@gmail.com', 'vishva', '123'),
(2, 'Riddhi', 'Nadapra', 'vanthali', 'India', 'Gujarat', 'Junagadh', '27/11/2003', 'female', '6573536951', 'riddhi@gmail.com', 'Riddhi', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtocart`
--
ALTER TABLE `addtocart`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
