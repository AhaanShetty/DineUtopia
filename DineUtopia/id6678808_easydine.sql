-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 01, 2018 at 03:41 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6678808_easydine`
--

-- --------------------------------------------------------

--
-- Table structure for table `Bill`
--

CREATE TABLE `Bill` (
  `bill_no` int(4) NOT NULL,
  `final_amt` int(5) NOT NULL,
  `c_email_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `offer_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Contains`
--

CREATE TABLE `Contains` (
  `order_Id` int(5) NOT NULL,
  `item_id` int(5) NOT NULL,
  `Quantity` int(3) NOT NULL,
  `sub_total` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Contains`
--

INSERT INTO `Contains` (`order_Id`, `item_id`, `Quantity`, `sub_total`) VALUES
(1158, 305, 1, 300),
(5314, 102, 1, 180),
(883, 102, 1, 180),
(2472, 101, 1, 180),
(2314, 305, 1, 300),
(2314, 402, 1, 170),
(8929, 503, 1, 220),
(8929, 506, 1, 210),
(5599, 104, 1, 170),
(3182, 108, 1, 220),
(3182, 403, 1, 200),
(8778, 208, 2, 580),
(8778, 502, 2, 580),
(4880, 302, 1, 200),
(6128, 305, 1, 300),
(7504, 101, 1, 180),
(3546, 204, 1, 280),
(7201, 102, 1, 180),
(1350, 203, 1, 250),
(9780, 101, 1, 180),
(3557, 109, 1, 240),
(5677, 102, 1, 180),
(5797, 104, 2, 340),
(3305, 301, 1, 280),
(2733, 102, 1, 180),
(6203, 108, 1, 220),
(429, 107, 1, 470),
(8407, 110, 1, 220),
(179, 202, 1, 260),
(179, 113, 1, 230),
(3780, 101, 1, 180),
(6040, 102, 1, 180),
(1863, 305, 1, 300),
(4323, 210, 1, 280),
(4323, 306, 1, 270),
(6090, 407, 1, 135),
(6090, 104, 1, 170),
(1655, 101, 4, 720),
(2554, 102, 4, 720),
(2554, 101, 1, 180),
(9068, 402, 1, 170),
(9068, 503, 1, 220),
(4157, 104, 2, 340),
(4157, 301, 1, 280),
(4157, 201, 1, 320),
(4157, 403, 1, 200),
(4157, 402, 1, 170),
(4157, 407, 1, 135),
(4157, 510, 1, 80),
(4157, 512, 1, 70),
(7477, 107, 1, 470),
(7477, 104, 1, 170),
(7477, 301, 1, 280),
(7477, 201, 1, 320),
(7477, 403, 1, 200),
(7477, 401, 1, 150),
(7477, 408, 1, 150),
(7477, 402, 1, 170),
(7477, 512, 1, 70),
(7477, 510, 1, 80),
(3090, 101, 3, 540),
(3090, 302, 4, 800),
(290, 101, 1, 180),
(290, 207, 1, 340),
(5607, 101, 1, 180),
(2023, 101, 6, 1080),
(8415, 108, 4, 880),
(3988, 203, 3, 750),
(3988, 504, 2, 540);

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Phone_number` bigint(11) NOT NULL,
  `Email_Id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `offer_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`Name`, `Phone_number`, `Email_Id`, `Password`, `offer_id`) VALUES
('e', 9920678902, '123@123.com', '12345678', NULL),
('Ajhvafj', 9876543210, 'ask@gmail.com', '123456', 6),
('Chinmay Kamerkar', 987654320, 'ckk@gmail.com', '123456', 3),
('Deva', 9876543210, 'dev@gmail.com', 'deva1988', NULL),
('Devashish', 9987177126, 'devjaiswal18@gmail.com', 'deva1988', NULL),
('Divya Khetan', 987654322, 'dvk@gmail.com', '12345', 6),
('Example', 9999999999, 'example@example.com', '12345', NULL),
('mc', 9920560275, 'ht6vgyt@gmail.cpom', '9920560275', NULL),
('Jinit Mehta', 908765432, 'jinit@gmail.com', '1234', 1),
('Jugal Bharmani', 980765432, 'jugal@gmail.com', '12345', 5),
('Kalpana', 8779643492, 'kojaiswal@gmail.com', 'advkappu', NULL),
('Maulik Tanna', 980765434, 'maulik@gmail.com', '12345', 5),
('Omprakash', 123456780, 'om@gmail.com', '123456', 6),
('Prafful Jaware', 987654324, 'pdj@gmail.com', '1234567890', 2),
('Pravar', 9699411304, 'pravar98@gmail.com', 'abcdefghij', NULL),
('Soham Thakkar', 890765432, 'soham@gmail.com', '12345', 4),
('Soham', 9898484686, 'sohamt007@gmail.com', 'salmanbhai', NULL),
('S', 9920560275, 'sohamthakkar@rocketmail.com', '1234567', NULL),
('Pravar', 9699411304, 'sxas@adas.com', 'abcde', NULL),
('ccc', 9900889999, 'whycare@dontcare.com', 'abcde', NULL),
('Mr x', 9820544669, 'x@gmail.com', '12345', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Item`
--

CREATE TABLE `Item` (
  `Item_Id` int(3) NOT NULL,
  `Name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(5) NOT NULL,
  `Availability` tinyint(1) NOT NULL,
  `Type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Description` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Item`
--

INSERT INTO `Item` (`Item_Id`, `Name`, `Price`, `Availability`, `Type`, `Description`) VALUES
(101, 'Paneer Tikka', 180, 1, 'Veg', 'Starter'),
(102, 'Paneer Jalindaer Tikka', 180, 1, 'Veg', 'Starter'),
(103, 'Paneer Cheese Tikka', 180, 3, 'Veg', 'Starter'),
(104, 'Tandoori Aloo', 170, 3, 'Veg', 'Starter'),
(107, 'Veg-Platter', 470, 2, 'Veg', 'Starter'),
(108, 'Chicken Tikka', 220, 1, 'Non-Veg', 'Starter'),
(109, 'Reshmi Kebab', 240, 2, 'Non-Veg', 'Starter'),
(110, 'Pudina Kebab', 220, 2, 'Non-Veg', 'Starter'),
(111, 'Tangdi Kebab', 240, 1, 'Non-Veg', 'Starter'),
(112, 'Pahadi Kebab', 220, 3, 'Non-Veg', 'Starter'),
(113, 'Rozali Kebab', 230, 3, 'Non-Veg', 'Starter'),
(201, 'Veg Kadai', 320, 1, 'Veg', 'Main Course'),
(202, 'Paneer Handi', 260, 1, 'Veg', 'Main Course'),
(203, 'Kaju Masala', 250, 1, 'Veg', 'Main Course'),
(204, 'Paneer Afgani', 280, 1, 'Veg', 'Main Course'),
(207, 'Chicken Hyderabadi', 340, 1, 'Non-Veg', 'Main Course'),
(208, 'Butter Chicken', 290, 1, 'Non-Veg', 'Main course'),
(209, 'Chicken Laziz', 300, 1, 'Non-Veg', 'Main course'),
(210, 'Chicken Kadhai', 280, 1, 'Non-Veg', 'Main Course'),
(211, 'Mutton Fry', 350, 1, 'Non-Veg', 'Main Course'),
(212, 'Prawns Masala', 320, 1, 'Non-Veg', 'Main Course'),
(301, 'Russian Salad', 280, 1, 'Veg', 'Salad'),
(302, 'Mushroom Salad', 200, 1, 'Veg', 'Salad'),
(304, 'Chicken Tikka Salad', 270, 1, 'Non-Veg', 'Salad Awesome'),
(305, 'Mutton Salad', 300, 1, 'Non-Veg', 'Salad'),
(306, 'Chciken BBQ Salad', 270, 1, 'Non-Veg', 'Salad'),
(401, 'Red Velvet Cake', 150, 1, 'Non-Veg', 'Dessert'),
(402, 'Bluebeery Cheese Cake', 170, 1, 'Non-veg', 'Dessert'),
(403, 'Hot Chocolate Brownie', 200, 1, 'Veg', 'Dessert'),
(404, 'Gulab Jamun', 100, 1, 'Veg', 'Dessert'),
(405, 'Rabdi', 120, 1, 'Veg', 'Dessert'),
(406, 'Butterscotch Ice-cream', 80, 1, 'Veg', 'Dessert'),
(407, 'Dutch Truffle Cake', 135, 1, 'Non-Veg', 'Dessert'),
(408, 'Fruit Custard', 150, 1, 'Veg', 'Dessert'),
(501, 'Black Velvet', 280, 1, 'Cocktail', 'Drinks'),
(502, 'Panama', 290, 1, 'Cocktail', 'Drinks'),
(503, 'Bushwacker', 220, 1, 'Cocktail', 'Drinks'),
(504, 'Margarita', 270, 1, 'Cocktail', 'Drinks'),
(505, 'Blue Shoe', 200, 1, 'Mocktail', 'Drinks'),
(506, 'Hurricane Mocktail', 210, 1, 'Mocktail', 'Drinks'),
(507, 'Chatca', 180, 1, 'Mocktail', 'Drinks'),
(508, 'Mojito', 200, 1, 'Mocktail', 'Drinks'),
(509, 'Diet Coke', 150, 1, 'Soft Drinks', 'Drinks'),
(510, 'Sprite', 80, 1, 'Soft Drinks', 'Drinks'),
(511, 'Mountain Dew', 90, 1, 'Soft Drinks', 'Drinks'),
(512, 'Fanta', 70, 1, 'Soft Drinks', 'Drinks');

-- --------------------------------------------------------

--
-- Table structure for table `Manager`
--

CREATE TABLE `Manager` (
  `Email_Id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Contact_no` bigint(10) NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Manager`
--

INSERT INTO `Manager` (`Email_Id`, `Name`, `Contact_no`, `password`) VALUES
('ars@gmail.com', 'Ahaan', 123456789, '12345'),
('shivashish987@gmail.com', 'Shiva', 8369910143, 'monujaiswa'),
('yash.gupte@somaiya.edu', 'Yash', 9315465221, '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `Offer`
--

CREATE TABLE `Offer` (
  `offer_id` int(4) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `validity` date NOT NULL,
  `dis_per` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Offer`
--

INSERT INTO `Offer` (`offer_id`, `name`, `validity`, `dis_per`) VALUES
(1, 'GET10', '2018-08-11', 10),
(2, 'SAVE20', '2018-08-12', 20),
(3, 'WELCOME15', '2018-08-12', 15),
(4, 'DINE5', '2018-08-12', 5),
(5, 'YUMMY25', '2018-08-14', 25),
(6, 'FOOD10', '2018-10-23', 10);

-- --------------------------------------------------------

--
-- Table structure for table `Order1`
--

CREATE TABLE `Order1` (
  `Order_Id` int(5) NOT NULL,
  `No_of_items` int(3) DEFAULT NULL,
  `m_email_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `c_email_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Order1`
--

INSERT INTO `Order1` (`Order_Id`, `No_of_items`, `m_email_id`, `c_email_id`) VALUES
(179, NULL, NULL, NULL),
(290, NULL, NULL, 'ask@gmail.com'),
(429, NULL, NULL, NULL),
(883, NULL, NULL, NULL),
(1158, NULL, NULL, NULL),
(1350, NULL, NULL, NULL),
(1427, NULL, NULL, NULL),
(1655, NULL, NULL, 'ask@gmail.com'),
(1863, NULL, NULL, NULL),
(2023, NULL, NULL, 'ask@gmail.com'),
(2216, NULL, NULL, NULL),
(2314, NULL, NULL, NULL),
(2472, NULL, NULL, NULL),
(2554, NULL, NULL, 'ask@gmail.com'),
(2733, NULL, NULL, NULL),
(3090, NULL, NULL, 'ask@gmail.com'),
(3136, NULL, NULL, 'ask@gmail.com'),
(3182, NULL, NULL, NULL),
(3305, NULL, NULL, NULL),
(3355, NULL, NULL, 'dvk@gmail.com'),
(3546, NULL, NULL, NULL),
(3557, NULL, NULL, NULL),
(3780, NULL, NULL, NULL),
(3944, NULL, NULL, 'ask@gmail.com'),
(3988, NULL, NULL, 'ask@gmail.com'),
(4157, NULL, NULL, 'dvk@gmail.com'),
(4323, NULL, NULL, NULL),
(4624, NULL, NULL, NULL),
(4880, NULL, NULL, NULL),
(5314, NULL, NULL, NULL),
(5460, NULL, NULL, 'ask@gmail.com'),
(5599, NULL, NULL, NULL),
(5607, NULL, NULL, 'ask@gmail.com'),
(5677, NULL, NULL, NULL),
(5797, NULL, NULL, NULL),
(6040, NULL, NULL, NULL),
(6050, NULL, NULL, NULL),
(6090, NULL, NULL, NULL),
(6128, NULL, NULL, NULL),
(6203, NULL, NULL, NULL),
(7201, NULL, NULL, NULL),
(7477, NULL, NULL, 'dvk@gmail.com'),
(7504, NULL, NULL, NULL),
(8401, NULL, NULL, NULL),
(8407, NULL, NULL, NULL),
(8415, NULL, NULL, 'dvk@gmail.com'),
(8778, NULL, NULL, NULL),
(8929, NULL, NULL, NULL),
(9068, NULL, NULL, 'ask@gmail.com'),
(9780, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Reserve`
--

CREATE TABLE `Reserve` (
  `r_id` int(3) NOT NULL,
  `r_time` time NOT NULL,
  `r_date` date NOT NULL,
  `no_people` int(2) NOT NULL,
  `c_email_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `t_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Reserve`
--

INSERT INTO `Reserve` (`r_id`, `r_time`, `r_date`, `no_people`, `c_email_id`, `t_id`) VALUES
(1, '03:04:00', '2018-10-07', 3, 'ask@gmail.com', 5),
(2, '12:50:00', '2018-10-21', 5, 'ask@gmail.com', 6),
(3, '11:00:00', '2018-10-21', 2, 'ask@gmail.com', 1),
(4, '00:01:00', '2018-10-22', 1, 'ask@gmail.com', 2),
(5, '15:04:00', '2018-10-11', 4, '123@123.com', 3),
(6, '08:00:00', '2018-10-10', 5, 'ask@gmail.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `Updates`
--

CREATE TABLE `Updates` (
  `m_email_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `item_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Waiter`
--

CREATE TABLE `Waiter` (
  `Name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Contact number` int(10) NOT NULL,
  `Waiter Id` int(5) NOT NULL,
  `m_email_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `_Table`
--

CREATE TABLE `_Table` (
  `table_id` int(3) NOT NULL,
  `Capacity` int(2) NOT NULL,
  `Availability` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `_Table`
--

INSERT INTO `_Table` (`table_id`, `Capacity`, `Availability`) VALUES
(1, 2, 1),
(2, 4, 1),
(3, 6, 1),
(4, 8, 0),
(5, 3, 0),
(6, 5, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Bill`
--
ALTER TABLE `Bill`
  ADD PRIMARY KEY (`bill_no`),
  ADD KEY `c_email_id` (`c_email_id`),
  ADD KEY `offer_id` (`offer_id`);

--
-- Indexes for table `Contains`
--
ALTER TABLE `Contains`
  ADD KEY `Contains_ibfk_1` (`item_id`),
  ADD KEY `order_Id` (`order_Id`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`Email_Id`),
  ADD KEY `offer_id` (`offer_id`);

--
-- Indexes for table `Item`
--
ALTER TABLE `Item`
  ADD PRIMARY KEY (`Item_Id`);

--
-- Indexes for table `Manager`
--
ALTER TABLE `Manager`
  ADD PRIMARY KEY (`Email_Id`);

--
-- Indexes for table `Offer`
--
ALTER TABLE `Offer`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `Order1`
--
ALTER TABLE `Order1`
  ADD PRIMARY KEY (`Order_Id`),
  ADD KEY `Order1_ibfk_1` (`m_email_id`),
  ADD KEY `Order1_ibfk_2` (`c_email_id`);

--
-- Indexes for table `Reserve`
--
ALTER TABLE `Reserve`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `c_email_id` (`c_email_id`),
  ADD KEY `t_id` (`t_id`);

--
-- Indexes for table `Updates`
--
ALTER TABLE `Updates`
  ADD KEY `item_id` (`item_id`),
  ADD KEY `m_email_id` (`m_email_id`);

--
-- Indexes for table `Waiter`
--
ALTER TABLE `Waiter`
  ADD PRIMARY KEY (`Waiter Id`),
  ADD KEY `m_email_id` (`m_email_id`);

--
-- Indexes for table `_Table`
--
ALTER TABLE `_Table`
  ADD PRIMARY KEY (`table_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Bill`
--
ALTER TABLE `Bill`
  MODIFY `bill_no` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Item`
--
ALTER TABLE `Item`
  MODIFY `Item_Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=513;

--
-- AUTO_INCREMENT for table `Offer`
--
ALTER TABLE `Offer`
  MODIFY `offer_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Order1`
--
ALTER TABLE `Order1`
  MODIFY `Order_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9798;

--
-- AUTO_INCREMENT for table `_Table`
--
ALTER TABLE `_Table`
  MODIFY `table_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Bill`
--
ALTER TABLE `Bill`
  ADD CONSTRAINT `Bill_ibfk_1` FOREIGN KEY (`c_email_id`) REFERENCES `Customer` (`Email_Id`),
  ADD CONSTRAINT `Bill_ibfk_2` FOREIGN KEY (`offer_id`) REFERENCES `Offer` (`offer_id`);

--
-- Constraints for table `Contains`
--
ALTER TABLE `Contains`
  ADD CONSTRAINT `Contains_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `Item` (`Item_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Contains_ibfk_2` FOREIGN KEY (`order_Id`) REFERENCES `Order1` (`Order_Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Customer`
--
ALTER TABLE `Customer`
  ADD CONSTRAINT `Customer_ibfk_1` FOREIGN KEY (`offer_id`) REFERENCES `Offer` (`offer_id`);

--
-- Constraints for table `Order1`
--
ALTER TABLE `Order1`
  ADD CONSTRAINT `Order1_ibfk_1` FOREIGN KEY (`m_email_id`) REFERENCES `Manager` (`Email_Id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `Order1_ibfk_2` FOREIGN KEY (`c_email_id`) REFERENCES `Customer` (`Email_Id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `Reserve`
--
ALTER TABLE `Reserve`
  ADD CONSTRAINT `Reserve_ibfk_1` FOREIGN KEY (`c_email_id`) REFERENCES `Customer` (`Email_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Reserve_ibfk_2` FOREIGN KEY (`t_id`) REFERENCES `_Table` (`table_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Updates`
--
ALTER TABLE `Updates`
  ADD CONSTRAINT `Updates_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `Item` (`Item_Id`),
  ADD CONSTRAINT `Updates_ibfk_2` FOREIGN KEY (`m_email_id`) REFERENCES `Manager` (`Email_Id`);

--
-- Constraints for table `Waiter`
--
ALTER TABLE `Waiter`
  ADD CONSTRAINT `Waiter_ibfk_1` FOREIGN KEY (`m_email_id`) REFERENCES `Manager` (`Email_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
