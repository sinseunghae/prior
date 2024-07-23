-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 02:08 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dcdg`
--
CREATE DATABASE IF NOT EXISTS `dcdg` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dcdg`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(10) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `UserName` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `Name`, `UserName`, `Password`) VALUES
(1, 'Eden', 'eden', 'fortnite');

-- --------------------------------------------------------

--
-- Table structure for table `branch1`
--

CREATE TABLE `branch1` (
  `category` varchar(60) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `status` varchar(60) NOT NULL,
  `barcode` int(20) NOT NULL,
  `variations` varchar(10) NOT NULL,
  `sizes` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `branch2`
--

CREATE TABLE `branch2` (
  `category` varchar(60) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `status` varchar(60) NOT NULL,
  `barcode` int(20) NOT NULL,
  `variations` varchar(10) NOT NULL,
  `sizes` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `branch3`
--

CREATE TABLE `branch3` (
  `category` varchar(60) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `status` varchar(60) NOT NULL,
  `barcode` int(20) NOT NULL,
  `variations` varchar(10) NOT NULL,
  `sizes` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `branch4`
--

CREATE TABLE `branch4` (
  `category` varchar(60) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `status` varchar(60) NOT NULL,
  `barcode` int(20) NOT NULL,
  `variations` varchar(10) NOT NULL,
  `sizes` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_ID` int(200) NOT NULL,
  `employee_name` varchar(60) NOT NULL,
  `employee_username` varchar(60) NOT NULL,
  `employee_password` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contact_Number` bigint(11) NOT NULL,
  `Branch_ID` int(200) NOT NULL,
  `admin_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_ID`, `employee_name`, `employee_username`, `employee_password`, `email`, `contact_Number`, `Branch_ID`, `admin_ID`) VALUES
(4, 'Zeke Panlaqui', 'zich', 'fortnite2', 'zich@gmail.com', 923142131, 1, 1),
(6, 'Leenard Javier', 'troyjavier', 'user010', 'yort@gmail.com', 912345678, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guest_ID` int(255) NOT NULL,
  `guest_name` varchar(60) NOT NULL,
  `guest_username` varchar(60) NOT NULL,
  `guest_email` varchar(60) NOT NULL,
  `guest_contact_number` int(11) NOT NULL,
  `guest_password` varchar(255) NOT NULL,
  `order_ID` int(255) NOT NULL,
  `employee_ID` int(200) NOT NULL,
  `invoice_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_ID`, `guest_name`, `guest_username`, `guest_email`, `guest_contact_number`, `guest_password`, `order_ID`, `employee_ID`, `invoice_ID`) VALUES
(4, 'Mariel Alisen', 'mcalisen', 'rie@gmail.com', 912345678, 'user020', 0, 6, 0),
(5, 'Daniella Manuel', 'dmmanuel', 'dan@gmail.com', 912876543, 'user030', 0, 4, 0),
(6, 'Jazel Cornillez', 'jhcornillez', 'jazel@gmail.com', 912348765, 'user040', 0, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_ID` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_ID` int(10) NOT NULL,
  `invoice_date` date NOT NULL,
  `invoice_status` varchar(60) NOT NULL,
  `due_date` date NOT NULL,
  `total_amount` int(255) NOT NULL,
  `balance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_ID` int(255) NOT NULL,
  `order_description` varchar(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `total_amount` int(255) NOT NULL,
  `order_status` varchar(60) NOT NULL,
  `guest_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(200) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_quality` varchar(60) NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_quantity` int(255) NOT NULL,
  `product_variations` varchar(10) NOT NULL,
  `product_size` varchar(5) NOT NULL,
  `product_category` varchar(20) NOT NULL,
  `stock_staus` varchar(60) NOT NULL,
  `barcode` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_quality`, `product_price`, `product_quantity`, `product_variations`, `product_size`, `product_category`, `stock_staus`, `barcode`) VALUES
(1, 'blinds', 'good', 200, 50, 'blue', 'N/A', 'curtain', 'available', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `purchase order`
--

CREATE TABLE `purchase order` (
  `purchase_ID` int(255) NOT NULL,
  `purchase_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `purchase_status` varchar(60) NOT NULL,
  `expected_delivery_date` date NOT NULL,
  `total_amount` int(255) NOT NULL,
  `supplier_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_ID` int(100) NOT NULL,
  `report_type` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales activity`
--

CREATE TABLE `sales activity` (
  `invoice_id` int(10) NOT NULL,
  `sales_date` date NOT NULL,
  `sales_status` varchar(60) NOT NULL,
  `quantity` int(60) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `total_amount` int(255) NOT NULL,
  `product_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_ID` int(10) NOT NULL,
  `supplier_name` varchar(60) NOT NULL,
  `supplier_contact_number` int(11) NOT NULL,
  `comapny` varchar(60) NOT NULL,
  `address` varchar(70) NOT NULL,
  `items` varchar(70) NOT NULL,
  `product_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `warehouse personnel`
--

CREATE TABLE `warehouse personnel` (
  `warehouse_ID` int(10) NOT NULL,
  `warehouse_name` varchar(60) NOT NULL,
  `warehouse_contact_number` int(11) NOT NULL,
  `supplier_ID` int(10) NOT NULL,
  `purchase_ID` int(255) NOT NULL,
  `invoice_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `branch1`
--
ALTER TABLE `branch1`
  ADD KEY `barcode` (`barcode`),
  ADD KEY `price` (`price`),
  ADD KEY `variations` (`variations`),
  ADD KEY `sizes` (`sizes`);

--
-- Indexes for table `branch2`
--
ALTER TABLE `branch2`
  ADD KEY `barcode` (`barcode`),
  ADD KEY `price` (`price`),
  ADD KEY `variations` (`variations`),
  ADD KEY `sizes` (`sizes`);

--
-- Indexes for table `branch3`
--
ALTER TABLE `branch3`
  ADD KEY `barcode` (`barcode`),
  ADD KEY `price` (`price`),
  ADD KEY `variations` (`variations`),
  ADD KEY `sizes` (`sizes`);

--
-- Indexes for table `branch4`
--
ALTER TABLE `branch4`
  ADD KEY `barcode` (`barcode`),
  ADD KEY `price` (`price`),
  ADD KEY `variations` (`variations`),
  ADD KEY `sizes` (`sizes`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_ID`),
  ADD KEY `admin_ID` (`admin_ID`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_ID`),
  ADD KEY `order_ID` (`order_ID`),
  ADD KEY `employee_ID` (`employee_ID`),
  ADD KEY `invoice_ID` (`invoice_ID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_ID`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_ID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `guest_ID` (`guest_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `barcode` (`barcode`),
  ADD UNIQUE KEY `product_price` (`product_price`),
  ADD KEY `product_variations` (`product_variations`,`product_size`),
  ADD KEY `product_size` (`product_size`);

--
-- Indexes for table `purchase order`
--
ALTER TABLE `purchase order`
  ADD PRIMARY KEY (`purchase_ID`),
  ADD KEY `supplier_ID` (`supplier_ID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_ID`);

--
-- Indexes for table `sales activity`
--
ALTER TABLE `sales activity`
  ADD KEY `product_id` (`product_id`),
  ADD KEY `invoice_id` (`invoice_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_ID`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `warehouse personnel`
--
ALTER TABLE `warehouse personnel`
  ADD PRIMARY KEY (`warehouse_ID`),
  ADD KEY `invoice_ID` (`invoice_ID`),
  ADD KEY `purchase_ID` (`purchase_ID`),
  ADD KEY `supplier_ID` (`supplier_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `purchase order`
--
ALTER TABLE `purchase order`
  MODIFY `purchase_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warehouse personnel`
--
ALTER TABLE `warehouse personnel`
  MODIFY `warehouse_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `branch1`
--
ALTER TABLE `branch1`
  ADD CONSTRAINT `branch1_ibfk_1` FOREIGN KEY (`barcode`) REFERENCES `product` (`barcode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `branch1_ibfk_2` FOREIGN KEY (`price`) REFERENCES `product` (`product_price`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `branch1_ibfk_3` FOREIGN KEY (`variations`) REFERENCES `product` (`product_variations`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `branch1_ibfk_4` FOREIGN KEY (`sizes`) REFERENCES `product` (`product_size`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `branch2`
--
ALTER TABLE `branch2`
  ADD CONSTRAINT `branch2_ibfk_1` FOREIGN KEY (`barcode`) REFERENCES `product` (`barcode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `branch2_ibfk_2` FOREIGN KEY (`price`) REFERENCES `product` (`product_price`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `branch2_ibfk_3` FOREIGN KEY (`variations`) REFERENCES `product` (`product_variations`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `branch2_ibfk_4` FOREIGN KEY (`sizes`) REFERENCES `product` (`product_size`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `branch3`
--
ALTER TABLE `branch3`
  ADD CONSTRAINT `branch3_ibfk_1` FOREIGN KEY (`barcode`) REFERENCES `product` (`barcode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `branch3_ibfk_2` FOREIGN KEY (`price`) REFERENCES `product` (`product_price`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `branch3_ibfk_3` FOREIGN KEY (`variations`) REFERENCES `product` (`product_variations`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `branch3_ibfk_4` FOREIGN KEY (`sizes`) REFERENCES `product` (`product_size`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `branch4`
--
ALTER TABLE `branch4`
  ADD CONSTRAINT `branch4_ibfk_1` FOREIGN KEY (`barcode`) REFERENCES `product` (`barcode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `branch4_ibfk_2` FOREIGN KEY (`price`) REFERENCES `product` (`product_price`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `branch4_ibfk_3` FOREIGN KEY (`variations`) REFERENCES `product` (`product_variations`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `branch4_ibfk_4` FOREIGN KEY (`sizes`) REFERENCES `product` (`product_size`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`admin_ID`) REFERENCES `admin` (`adminID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `guest`
--
ALTER TABLE `guest`
  ADD CONSTRAINT `guest_ibfk_2` FOREIGN KEY (`employee_ID`) REFERENCES `employee` (`employee_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`guest_ID`) REFERENCES `guest` (`guest_ID`);

--
-- Constraints for table `purchase order`
--
ALTER TABLE `purchase order`
  ADD CONSTRAINT `purchase order_ibfk_1` FOREIGN KEY (`supplier_ID`) REFERENCES `supplier` (`supplier_ID`);

--
-- Constraints for table `sales activity`
--
ALTER TABLE `sales activity`
  ADD CONSTRAINT `sales activity_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `sales activity_ibfk_2` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`invoice_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supplier`
--
ALTER TABLE `supplier`
  ADD CONSTRAINT `supplier_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `warehouse personnel`
--
ALTER TABLE `warehouse personnel`
  ADD CONSTRAINT `warehouse personnel_ibfk_1` FOREIGN KEY (`invoice_ID`) REFERENCES `invoice` (`invoice_ID`),
  ADD CONSTRAINT `warehouse personnel_ibfk_2` FOREIGN KEY (`purchase_ID`) REFERENCES `purchase order` (`purchase_ID`),
  ADD CONSTRAINT `warehouse personnel_ibfk_3` FOREIGN KEY (`supplier_ID`) REFERENCES `supplier` (`supplier_ID`);
--
-- Database: `ecomm`
--
CREATE DATABASE IF NOT EXISTS `ecomm` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ecomm`;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(1, 9, 1, 4),
(3, 9, 4, 6),
(4, 9, 12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cat_slug` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `cat_slug`) VALUES
(1, 'Laptops', 'laptops'),
(2, 'Desktop PC', 'desktop-pc'),
(3, 'Tablets', 'tablets');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `sales_id`, `product_id`, `quantity`) VALUES
(14, 9, 11, 2),
(15, 9, 13, 5),
(16, 9, 3, 2),
(17, 9, 1, 3),
(18, 10, 13, 3),
(19, 10, 2, 4),
(20, 10, 19, 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(200) NOT NULL,
  `date_view` date NOT NULL,
  `counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `slug`, `price`, `photo`, `date_view`, `counter`) VALUES
(1, 1, 'DELL Inspiron 15 7000 15.6', '<p>15-inch laptop ideal for gamers. Featuring the latest Intel&reg; processors for superior gaming performance, and life-like NVIDIA&reg; GeForce&reg; graphics and an advanced thermal cooling design.</p>\r\n', 'dell-inspiron-15-7000-15-6', 899, 'dell-inspiron-15-7000-15-6.jpg', '2018-05-12', 1),
(2, 1, 'MICROSOFT Surface Pro 4 & Typecover - 128 GB', '<p>Surface Pro 4 powers through everything you need to do, while being lighter than ever before</p>\r\n\r\n<p>The 12.3 PixelSense screen has extremely high contrast and low glare so you can work through the day without straining your eyes</p>\r\n\r\n<p>keyboard is not included and needed to be purchased separately</p>\r\n\r\n<p>Features an Intel Core i5 6th Gen (Skylake) Core,Wireless: 802.11ac Wi-Fi wireless networking; IEEE 802.11a/b/g/n compatible Bluetooth 4.0 wireless technology</p>\r\n\r\n<p>Ships in Consumer packaging.</p>\r\n', 'microsoft-surface-pro-4-typecover-128-gb', 799, 'microsoft-surface-pro-4-typecover-128-gb.jpg', '2018-05-10', 3),
(3, 1, 'DELL Inspiron 15 5000 15.6', '<p>Dell&#39;s 15.6-inch, midrange notebook is a bland, chunky block. It has long been the case that the Inspiron lineup lacks any sort of aesthetic muse, and the Inspiron 15 5000 follows this trend. It&#39;s a plastic, silver slab bearing Dell&#39;s logo in a mirror sheen.</p>\r\n\r\n<p>Lifting the lid reveals the 15.6-inch, 1080p screen surrounded by an almost offensively thick bezel and a plastic deck with a faux brushed-metal look. There&#39;s a fingerprint reader on the power button, and the keyboard is a black collection of island-style keys.</p>\r\n', 'dell-inspiron-15-5000-15-6', 599, 'dell-inspiron-15-5000-15-6.jpg', '2018-05-12', 1),
(4, 1, 'LENOVO Ideapad 320s-14IKB 14\" Laptop - Grey', '<p>- Made for portability with a slim, lightweight chassis design&nbsp;<br />\r\n<br />\r\n- Powerful processing helps you create and produce on the go&nbsp;<br />\r\n<br />\r\n- Full HD screen ensures crisp visuals for movies, web pages, photos and more&nbsp;<br />\r\n<br />\r\n- Enjoy warm, sparkling sound courtesy of two Harman speakers and Dolby Audio&nbsp;<br />\r\n<br />\r\n- Fast data transfer and high-quality video connection with USB-C and HDMI ports&nbsp;<br />\r\n<br />\r\nThe Lenovo&nbsp;<strong>IdeaPad 320s-14IKB 14&quot; Laptop</strong>&nbsp;is part of our Achieve range, which has the latest tech to help you develop your ideas and work at your best. It&#39;s great for editing complex documents, business use, editing photos, and anything else you do throughout the day.</p>\r\n', 'lenovo-ideapad-320s-14ikb-14-laptop-grey', 399, 'lenovo-ideapad-320s-14ikb-14-laptop-grey.jpg', '2018-05-10', 3),
(5, 3, 'APPLE 9.7\" iPad - 32 GB, Gold', '<p>9.7 inch Retina Display, 2048 x 1536 Resolution, Wide Color and True Tone Display</p>\r\n\r\n<p>Apple iOS 9, A9X chip with 64bit architecture, M9 coprocessor</p>\r\n\r\n<p>12 MP iSight Camera, True Tone Flash, Panorama (up to 63MP), Four-Speaker Audio</p>\r\n\r\n<p>Up to 10 Hours of Battery Life</p>\r\n\r\n<p>iPad Pro Supports Apple Smart Keyboard and Apple Pencil</p>\r\n', 'apple-9-7-ipad-32-gb-gold', 339, 'apple-9-7-ipad-32-gb-gold.jpg', '2018-05-10', 3),
(6, 1, 'DELL Inspiron 15 5000 15', '<p>15-inch laptop delivering an exceptional viewing experience, a head-turning finish and an array of options designed to elevate your entertainment, wherever you go.</p>\r\n', 'dell-inspiron-15-5000-15', 449.99, 'dell-inspiron-15-5000-15.jpg', '0000-00-00', 0),
(7, 3, 'APPLE 10.5\" iPad Pro - 64 GB, Space Grey (2017)', '<p>4K video recording at 30 fps</p>\r\n\r\n<p>12-megapixel camera</p>\r\n\r\n<p>Fingerprint resistant coating</p>\r\n\r\n<p>Antireflective coating</p>\r\n\r\n<p>Face Time video calling</p>\r\n', 'apple-10-5-ipad-pro-64-gb-space-grey-2017', 619, 'apple-10-5-ipad-pro-64-gb-space-grey-2017.jpg', '0000-00-00', 0),
(8, 1, 'ASUS Transformer Mini T102HA 10.1\" 2 in 1 - Silver', '<p>Versatile Windows 10 device with keyboard and pen included, 2-in-1 functionality: use as both laptop and tablet.Update Windows periodically to ensure that your applications have the latest security settings.</p>\r\n\r\n<p>All day battery life, rated up to 11 hours of video playback; 128GB Solid State storage. Polymer Battery.With up to 11 hours between charges, you can be sure that Transformer Mini T102HA will be right there whenever you need it. You can charge T102HA via its micro USB port, so you can use a mobile charger or any power bank with a micro USB connector.</p>\r\n', 'asus-transformer-mini-t102ha-10-1-2-1-silver', 549.99, 'asus-transformer-mini-t102ha-10-1-2-1-silver.jpg', '0000-00-00', 0),
(9, 2, 'PC SPECIALIST Vortex Core Lite Gaming PC', '<p>- Top performance for playing eSports and more&nbsp;<br />\r\n<br />\r\n- NVIDIA GeForce GTX graphics deliver smooth visuals&nbsp;<br />\r\n<br />\r\n- GeForce Experience delivers updates straight to your PC&nbsp;<br />\r\n<br />\r\nThe PC Specialist&nbsp;<strong>Vortex Core Lite&nbsp;</strong>is part of our Gaming range, bringing you the most impressive PCs available today. It has spectacular graphics and fast processing performance to suit the most exacting players.</p>\r\n', 'pc-specialist-vortex-core-lite-gaming-pc', 599.99, 'pc-specialist-vortex-core-lite-gaming-pc.jpg', '0000-00-00', 0),
(10, 2, 'DELL Inspiron 5675 Gaming PC - Recon Blue', '<p>All-new gaming desktop featuring powerful AMD Ryzen&trade; processors, graphics ready for VR, LED lighting and a meticulous design for optimal cooling.</p>\r\n', 'dell-inspiron-5675-gaming-pc-recon-blue', 599.99, 'dell-inspiron-5675-gaming-pc-recon-blue.jpg', '2018-05-10', 1),
(11, 2, 'HP Barebones OMEN X 900-099nn Gaming PC', '<p>What&#39;s inside matters.</p>\r\n\r\n<p>Without proper cooling, top tierperformance never reaches its fullpotential.</p>\r\n\r\n<p>Nine lighting zones accentuate theaggressive lines and smooth blackfinish of this unique galvanized steelcase.</p>\r\n', 'hp-barebones-omen-x-900-099nn-gaming-pc', 489.98, 'hp-barebones-omen-x-900-099nn-gaming-pc.jpg', '2018-05-12', 1),
(12, 2, 'ACER Aspire GX-781 Gaming PC', '<p>- GTX 1050 graphics card lets you play huge games in great resolutions&nbsp;<br />\r\n<br />\r\n- Latest generation Core&trade; i5 processor can handle demanding media software&nbsp;<br />\r\n<br />\r\n- Superfast SSD storage lets you load programs in no time&nbsp;<br />\r\n<br />\r\nThe Acer&nbsp;<strong>Aspire&nbsp;GX-781 Gaming PC&nbsp;</strong>is part of our Gaming range, which offers the most powerful PCs available today. It has outstanding graphics and processing performance to suit the most demanding gamer.</p>\r\n', 'acer-aspire-gx-781-gaming-pc', 749.99, 'acer-aspire-gx-781-gaming-pc.jpg', '2018-05-12', 3),
(13, 2, 'HP Pavilion Power 580-015na Gaming PC', '<p>Features the latest quad core Intel i5 processor and discrete graphics. With this power, you&rsquo;re ready to take on any activity from making digital art to conquering new worlds in VR.</p>\r\n\r\n<p>Choose the performance and storage you need. Boot up in seconds with to 128 GB SSD.</p>\r\n\r\n<p>Ditch the dull grey box, this desktop comes infused with style. A new angular bezel and bold green and black design give your workspace just the right amount of attitude.</p>\r\n\r\n<p>Up to 3 times faster performance - GeForce GTX 10-series graphics cards are powered by Pascal to deliver twice the performance of previous-generation graphics cards.</p>\r\n', 'hp-pavilion-power-580-015na-gaming-pc', 799.99, 'hp-pavilion-power-580-015na-gaming-pc.jpg', '2018-05-12', 1),
(14, 2, 'LENOVO Legion Y520 Gaming PC', '<p>- Multi-task with ease thanks to Intel&reg; i5 processor&nbsp;<br />\r\n<br />\r\n- Prepare for battle with NVIDIA GeForce GTX graphics card&nbsp;<br />\r\n<br />\r\n- VR ready for the next-generation of immersive gaming and entertainment<br />\r\n<br />\r\n- Tool-less upgrade helps you personalise your system to your own demands&nbsp;<br />\r\n<br />\r\nPart of our Gaming range, which features the most powerful PCs available today, the Lenovo&nbsp;<strong>Legion Y520 Gaming PC</strong>&nbsp;has superior graphics and processing performance to suit the most demanding gamer.</p>\r\n', 'lenovo-legion-y520-gaming-pc', 899.99, 'lenovo-legion-y520-gaming-pc.jpg', '2018-05-10', 13),
(15, 2, 'PC SPECIALIST Vortex Minerva XT-R Gaming PC', '<p>- NVIDIA GeForce GTX graphics for stunning gaming visuals<br />\r\n<br />\r\n- Made for eSports with a speedy 7th generation Intel&reg; Core&trade; i5 processor<br />\r\n<br />\r\n- GeForce technology lets you directly update drivers, record your gaming and more<br />\r\n<br />\r\nThe PC Specialist&nbsp;<strong>Vortex Minerva XT-R Gaming PC</strong>&nbsp;is part of our Gaming range, which offers the most powerful PCs available. Its high-performance graphics and processing are made to meet the needs of serious gamers.</p>\r\n', 'pc-specialist-vortex-minerva-xt-r-gaming-pc', 999.99, 'pc-specialist-vortex-minerva-xt-r-gaming-pc.jpg', '2018-05-10', 1),
(16, 2, 'PC SPECIALIST Vortex Core II Gaming PC', '<p>Processor: Intel&reg; CoreTM i3-6100 Processor- Dual-core- 3.7 GHz- 3 MB cache</p>\r\n\r\n<p>Memory (RAM): 8 GB DDR4 HyperX, Storage: 1 TB HDD, 7200 rpm</p>\r\n\r\n<p>Graphics card: NVIDIA GeForce GTX 950 (2 GB GDDR5), Motherboard: ASUS H110M-R</p>\r\n\r\n<p>USB: USB 3.0 x 3- USB 2.0 x 5, Video interface: HDMI x 1- DisplayPort x 1- DVI x 2, Audio interface: 3.5 mm jack, Optical disc drive: DVD/RW, Expansion card slot PCIe: (x1) x 2</p>\r\n\r\n<p>Sound: 5.1 Surround Sound support PSU Corsair: VS350, 350W, Colour: Black- Green highlights, Box contents: PC Specialist Vortex Core- AC power cable</p>\r\n', 'pc-specialist-vortex-core-ii-gaming-pc', 649.99, 'pc-specialist-vortex-core-ii-gaming-pc.jpg', '2018-05-10', 2),
(17, 3, 'AMAZON Fire 7 Tablet with Alexa (2017) - 8 GB, Black', '<p>The next generation of our best-selling Fire tablet ever - now thinner, lighter, and with longer battery life and an improved display. More durable than the latest iPad</p>\r\n\r\n<p>Beautiful 7&quot; IPS display with higher contrast and sharper text, a 1.3 GHz quad-core processor, and up to 8 hours of battery life. 8 or 16 GB of internal storage and a microSD slot for up to 256 GB of expandable storage.</p>\r\n', 'amazon-fire-7-tablet-alexa-2017-8-gb-black', 49.99, 'amazon-fire-7-tablet-alexa-2017-8-gb-black.jpg', '2018-05-12', 1),
(18, 3, 'AMAZON Fire HD 8 Tablet with Alexa (2017) - 16 GB, Black', '<p>Take your personal assistant with you wherever you go with this Amazon Fire HD 8 tablet featuring Alexa voice-activated cloud service. The slim design of the tablet is easy to handle, and the ample 8-inch screen is ideal for work or play. This Amazon Fire HD 8 features super-sharp high-definition graphics for immersive streaming.</p>\r\n', 'amazon-fire-hd-8-tablet-alexa-2017-16-gb-black', 79.99, 'amazon-fire-hd-8-tablet-alexa-2017-16-gb-black.jpg', '2018-05-12', 2),
(19, 3, 'AMAZON Fire HD 8 Tablet with Alexa (2017) - 32 GB, Black', '<p>The next generation of our best-reviewed Fire tablet, with up to 12 hours of battery life, a vibrant 8&quot; HD display, a 1.3 GHz quad-core processor, 1.5 GB of RAM, and Dolby Audio. More durable than the latest iPad.</p>\r\n\r\n<p>16 or 32 GB of internal storage and a microSD slot for up to 256 GB of expandable storage.</p>\r\n', 'amazon-fire-hd-8-tablet-alexa-2017-32-gb-black', 99.99, 'amazon-fire-hd-8-tablet-alexa-2017-32-gb-black.jpg', '2018-05-10', 1),
(20, 3, 'APPLE 9.7\" iPad - 32 GB, Space Grey', '<p>9.7-inch Retina display, wide color and true tone</p>\r\n\r\n<p>A9 third-generation chip with 64-bit architecture</p>\r\n\r\n<p>M9 motion coprocessor</p>\r\n\r\n<p>1.2MP FaceTime HD camera</p>\r\n\r\n<p>8MP iSight camera</p>\r\n\r\n<p>Touch ID</p>\r\n\r\n<p>Apple Pay</p>\r\n', 'apple-9-7-ipad-32-gb-space-grey', 339, 'apple-9-7-ipad-32-gb-space-grey.jpg', '2018-05-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pay_id` varchar(50) NOT NULL,
  `sales_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `user_id`, `pay_id`, `sales_date`) VALUES
(9, 9, 'PAY-1RT494832H294925RLLZ7TZA', '2018-05-10'),
(10, 9, 'PAY-21700797GV667562HLLZ7ZVY', '2018-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`) VALUES
(1, 'admin@admin.com', '$2y$10$8wY63GX/y9Bq780GBMpxCesV9n1H6WyCqcA2hNy2uhC59hEnOpNaS', 1, 'Lyndon', 'Bermoy', '', '', 'profile youtube1.jpg', 1, '', '', '2018-05-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Database: `pba`
--
CREATE DATABASE IF NOT EXISTS `pba` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pba`;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `game_id` int(8) NOT NULL,
  `game_venue_id` int(8) NOT NULL,
  `game_year` date NOT NULL,
  `game_day` date NOT NULL,
  `game_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`game_id`, `game_venue_id`, `game_year`, `game_day`, `game_time`) VALUES
(1, 3, '2021-07-19', '2021-07-19', '19:44:00'),
(2, 5, '2015-01-14', '2015-01-14', '12:20:16'),
(3, 7, '2013-10-09', '2013-10-09', '10:15:26'),
(4, 3, '2001-01-24', '2001-01-24', '15:59:00'),
(5, 5, '2015-02-18', '2015-02-18', '08:06:00'),
(6, 6, '2021-07-08', '2021-07-08', '18:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `player_id` int(11) NOT NULL,
  `family_name` varchar(35) NOT NULL,
  `given_name` varchar(35) NOT NULL,
  `middle_name` varchar(35) NOT NULL,
  `jersey_number` int(3) NOT NULL,
  `primary_playing_position` int(1) NOT NULL,
  `height` float NOT NULL,
  `team_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`player_id`, `family_name`, `given_name`, `middle_name`, `jersey_number`, `primary_playing_position`, `height`, `team_id`) VALUES
(1, 'Ahanmisi', 'Maverick', 'Frankera', 13, 2, 1.88, 1),
(2, 'Herndon', 'Robert', 'Conrad', 1, 3, 1.91, 1),
(3, 'Acuno', 'Rey Marc', 'Santos', 17, 5, 1.91, 2),
(4, 'Balanza', 'Jerrick', 'Isidro', 6, 1, 1.25, 5);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `team_id` int(8) NOT NULL,
  `team_name` varchar(35) NOT NULL,
  `team_moniker` varchar(35) NOT NULL,
  `team_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `team_name`, `team_moniker`, `team_status`) VALUES
(1, 'Alaska', 'Aces', 1),
(3, 'Shell', 'Turbo Chargers', 0),
(4, 'San Miguel ', 'Beermen', 1),
(5, 'Barangay Ginebra San Miguel', 'Gin Kings', 1),
(6, 'North Port', 'Batang Pier', 1),
(8, 'NLEX', 'Road Warriors', 1);

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `game_venue_id` int(8) NOT NULL,
  `venue_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`game_venue_id`, `venue_name`) VALUES
(1, 'Smart Araneta Coliseum'),
(2, 'Philippine Arena'),
(3, 'Mall of Asia Arena'),
(4, 'Cuneta Astrodome'),
(5, 'Ynares Center'),
(6, 'Alonte Sports Arena'),
(7, 'Filoil Flying V Arena'),
(9, 'The Quadricentennial Pavilion'),
(11, 'Ynares Center'),
(12, 'Caloocan Sports Complex');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`player_id`),
  ADD KEY `test` (`team_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`game_venue_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `game_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `team_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `game_venue_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

--
-- Dumping data for table `pma__column_info`
--

INSERT INTO `pma__column_info` (`id`, `db_name`, `table_name`, `column_name`, `comment`, `mimetype`, `transformation`, `transformation_options`, `input_transformation`, `input_transformation_options`) VALUES
(1, 'pba', 'teams', 'team_name', '', '', '', '', '', 'team_moniker'),
(2, 'pba', 'teams', 'team_moniker', '', '', '', '', '', 'team_status');

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

--
-- Dumping data for table `pma__designer_settings`
--

INSERT INTO `pma__designer_settings` (`username`, `settings_data`) VALUES
('root', '{\"angular_direct\":\"direct\",\"snap_to_grid\":\"off\",\"relation_lines\":\"true\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"dcdg\",\"table\":\"employee\"},{\"db\":\"dcdg\",\"table\":\"guest\"},{\"db\":\"dcdg\",\"table\":\"order\"},{\"db\":\"dcdg\",\"table\":\"product\"},{\"db\":\"dcdg\",\"table\":\"admin\"},{\"db\":\"dcdg\",\"table\":\"sales activity\"},{\"db\":\"dcdg\",\"table\":\"branch4\"},{\"db\":\"dcdg\",\"table\":\"branch3\"},{\"db\":\"dcdg\",\"table\":\"branch2\"},{\"db\":\"dcdg\",\"table\":\"branch1\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

--
-- Dumping data for table `pma__table_info`
--

INSERT INTO `pma__table_info` (`db_name`, `table_name`, `display_field`) VALUES
('dcdg', 'sales activity', 'sales_status'),
('dcdg2', 'branch2', 'category');

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2022-08-09 12:01:26', '{\"Console\\/Mode\":\"show\",\"Console\\/Height\":43.9239}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `posnic`
--
CREATE DATABASE IF NOT EXISTS `posnic` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `posnic`;

-- --------------------------------------------------------

--
-- Table structure for table `category_details`
--

CREATE TABLE `category_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(120) NOT NULL,
  `category_description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_details`
--

INSERT INTO `category_details` (`id`, `category_name`, `category_description`) VALUES
(20, 'pen', 'Boll Pen'),
(21, 'Clock', 'CricleClock'),
(22, 'Book', 'Note Book'),
(23, 'Pencil', 'HB Pencil'),
(24, 'BOX', 'Instrument Box'),
(25, 'BOLL', 'Rubber Ball'),
(26, 'Key Chain', 'Key chain'),
(27, 'Pen drive', 'Sandisk Pendrive'),
(28, 'Nokia 6300', 'Nokia 6300'),
(29, 'Bat', 'cricket Bat'),
(30, 'Lap Top', 'computer'),
(31, 'Tab', 'Samsung Tab'),
(32, 'Fan', 'Ceiling Fan'),
(33, 'Bag', 'School bag'),
(34, 'Sweet Corn', 'Vegitable'),
(35, 'Bananas', 'Vegitable'),
(36, 'Bulk Rolls', 'Vegitable'),
(37, 'hello', 'qqqq'),
(38, 'ttt', 'uuu'),
(39, 'fgp', '90p');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `customer_address` varchar(500) NOT NULL,
  `customer_contact1` varchar(100) NOT NULL,
  `customer_contact2` varchar(100) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`id`, `customer_name`, `customer_address`, `customer_contact1`, `customer_contact2`, `balance`) VALUES
(18, 'Regular', 'Bahawakchowk', '0345355282', '', 578),
(19, 'tariq', '', '', '', 108),
(20, 'ahsan', '', '', '', 0),
(21, 'Hostal', '', '', '', 1858),
(22, 'Hostal', 'se collage', '00000', '898989898', 1858);

-- --------------------------------------------------------

--
-- Table structure for table `stock_avail`
--

CREATE TABLE `stock_avail` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(120) NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_avail`
--

INSERT INTO `stock_avail` (`id`, `name`, `quantity`) VALUES
(22, 'Cello griper', 1801),
(23, 'techo tip', 756),
(24, 'cello', 52),
(25, 'ceParker Urban Fashion ', 0),
(26, 'Satzuma Diamante Pen', 0),
(27, 'Lamy Mod 17 Safari Matt ...', 0),
(28, 'shampo', 0),
(29, 'shampo', 0),
(30, 'pshampo ', 111),
(31, 'shugar', 386),
(32, 'nimak', 275),
(33, 'dairemilk', 269),
(34, 'salienty', 360),
(35, 'tofiee', 985),
(36, 'ricehigh', 4958),
(37, 'www', 0),
(38, 'apapa', 0),
(39, 'hello', 0),
(40, 'kkk', 0),
(41, 'kkk', 0),
(42, 'glass', 33),
(43, '111', 0),
(44, 'shampo', 0),
(45, 'usb', 99);

-- --------------------------------------------------------

--
-- Table structure for table `stock_details`
--

CREATE TABLE `stock_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `stock_id` varchar(120) NOT NULL,
  `stock_name` varchar(120) NOT NULL,
  `stock_quatity` int(11) NOT NULL,
  `supplier_id` varchar(250) NOT NULL,
  `company_price` decimal(10,2) NOT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `category` varchar(120) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `expire_date` datetime NOT NULL,
  `uom` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_details`
--

INSERT INTO `stock_details` (`id`, `stock_id`, `stock_name`, `stock_quatity`, `supplier_id`, `company_price`, `selling_price`, `category`, `date`, `expire_date`, `uom`) VALUES
(34, 'SD1', 'Cello griper', 0, 'arjun', '9.00', '10.00', 'pen', '2013-08-15 03:01:01', '0000-00-00 00:00:00', ''),
(35, 'SD35', 'techo tip', 0, 'sadham', '8.00', '10.00', 'pen', '2013-08-15 03:01:50', '0000-00-00 00:00:00', ''),
(36, 'SD36', 'cello', 0, 'sadham', '7.00', '10.00', 'pen', '2013-08-15 03:02:08', '0000-00-00 00:00:00', ''),
(37, 'SD37', 'ceParker Urban Fashion ', 0, 'sadham', '1000.00', '1100.00', 'pen', '2013-08-15 03:03:30', '0000-00-00 00:00:00', ''),
(38, 'SD38', 'Satzuma Diamante Pen', 0, 'sadham', '500.00', '550.00', 'pen', '2013-08-15 03:03:52', '0000-00-00 00:00:00', ''),
(39, 'SD39', 'Lamy Mod 17 Safari Matt ...', 0, 'sadham', '1980.00', '2000.00', 'pen', '2013-08-15 03:04:17', '0000-00-00 00:00:00', ''),
(40, 'SD40', 'shampo', 0, 'sadham', '34.00', '38.00', 'shampoo', '2014-02-15 06:01:03', '0000-00-00 00:00:00', ''),
(41, 'SD41', 'pshampo ', 234, 'ahsan', '23.00', '12.00', '', '2014-02-15 12:23:37', '0000-00-00 00:00:00', ''),
(42, 'SD42', 'shugar', 213, '', '21.00', '100.00', '', '2014-02-21 06:32:25', '0000-00-00 00:00:00', ''),
(44, 'SD44', 'dairemilk', 300, '', '9.50', '10.00', '', '2014-02-22 06:33:14', '0000-00-00 00:00:00', ''),
(45, 'SD45', 'salienty', 299, '', '4.50', '5.00', '', '2014-02-22 06:34:08', '0000-00-00 00:00:00', ''),
(46, 'SD46', 'tofiee', 1000, '', '1.00', '1.00', '', '2014-02-22 06:34:43', '0000-00-00 00:00:00', ''),
(47, 'SD47', 'ricehigh', 5000, '', '120.00', '160.00', '', '2014-02-22 06:35:26', '0000-00-00 00:00:00', ''),
(48, 'SD48', 'www', 0, '', '23.00', '34.00', '', '2014-04-24 13:31:54', '0000-00-00 00:00:00', ''),
(49, 'SD49', 'apapa', 0, '', '23.00', '21.00', '', '2014-04-24 13:33:10', '0000-00-00 00:00:00', ''),
(50, 'SD50', 'hello', 0, 'kiran', '45.00', '67.00', '', '2014-05-13 09:48:19', '0000-00-00 00:00:00', ''),
(52, 'SD51', 'kkk', 0, '', '909.00', '0.00', '', '2014-05-13 10:04:26', '0000-00-00 00:00:00', ''),
(53, 'SD53', 'glass', 0, 'Ahsan', '45.00', '50.00', 'glass', '2014-05-14 10:35:52', '0000-00-00 00:00:00', ''),
(54, 'SD54', '111', 0, '', '48.00', '57.00', '', '2014-05-14 10:43:43', '0000-00-00 00:00:00', ''),
(55, 'SD55', 'shampo', 0, 'dgdf', '23.00', '28.00', 'rtrt', '2014-05-19 05:57:43', '0000-00-00 00:00:00', ''),
(56, 'SD56', 'usb', 0, 'china', '300.00', '400.00', '', '2014-06-11 03:55:42', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `stock_entries`
--

CREATE TABLE `stock_entries` (
  `id` int(10) UNSIGNED NOT NULL,
  `stock_id` varchar(120) NOT NULL,
  `stock_name` varchar(260) NOT NULL,
  `stock_supplier_name` varchar(200) NOT NULL,
  `category` varchar(120) NOT NULL,
  `quantity` int(11) NOT NULL,
  `company_price` decimal(10,2) NOT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `opening_stock` int(11) NOT NULL,
  `closing_stock` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `username` varchar(120) NOT NULL,
  `type` varchar(50) NOT NULL,
  `salesid` varchar(120) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `mode` varchar(150) NOT NULL,
  `description` varchar(500) NOT NULL,
  `due` datetime NOT NULL,
  `subtotal` int(11) NOT NULL,
  `count1` int(11) NOT NULL,
  `billnumber` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_entries`
--

INSERT INTO `stock_entries` (`id`, `stock_id`, `stock_name`, `stock_supplier_name`, `category`, `quantity`, `company_price`, `selling_price`, `opening_stock`, `closing_stock`, `date`, `username`, `type`, `salesid`, `total`, `payment`, `balance`, `mode`, `description`, `due`, `subtotal`, `count1`, `billnumber`) VALUES
(261, 'PR3', 'Cello griper', 'arjun  ', '', 2001, '9.00', '10.00', 0, 1801, '2014-05-01 00:00:00', 'ahsan', 'entry', '', '18009.00', '10.00', '16180.00', 'cash', 'uouo', '2014-06-04 00:00:00', 18009, 1, 'BILL-126  '),
(262, 'PR264', 'techo tip', 'Monish', '', 1000, '8.00', '10.00', 0, 1000, '2013-08-15 00:00:00', 'admin', 'entry', '', '8000.00', '8000.00', '0.00', 'cheque', '768768', '0000-00-00 00:00:00', 8000, 1, 'BILL-126'),
(263, 'SD263', 'Cello griper', '', '', 10, '0.00', '10.00', 1000, 990, '2013-08-15 00:00:00', 'admin', 'sales', 'SD263', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'BILL-126'),
(264, 'SD264', 'Cello griper', '', '', 100, '0.00', '10.00', 990, 890, '2013-08-15 00:00:00', 'admin', 'sales', 'SD264', '1000.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'BILL-127'),
(265, 'SD265', 'Cello griper', '', '', 100, '0.00', '10.00', 890, 790, '2013-08-15 00:00:00', 'admin', 'sales', 'SD265', '1000.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'BILL-127'),
(266, 'SD266', 'Cello griper', '', '', 100, '0.00', '10.00', 790, 690, '2013-08-15 00:00:00', 'admin', 'sales', 'SD266', '1000.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'BILL-127'),
(267, 'SD267', 'Cello griper', '', '', 100, '0.00', '10.00', 690, 590, '2013-08-15 00:00:00', 'admin', 'sales', 'SD267', '1000.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'BILL-127'),
(268, 'SD268', 'Cello griper', '', '', 100, '0.00', '10.00', 590, 490, '2013-08-15 00:00:00', 'admin', 'sales', 'SD268', '1000.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'BILL-127'),
(269, 'SD269', 'Cello griper', '', '', 100, '0.00', '10.00', 490, 390, '2013-08-15 00:00:00', 'admin', 'sales', 'SD269', '1000.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'BILL-127'),
(270, 'SD270', 'Cello griper', '', '', 100, '0.00', '10.00', 390, 290, '2013-08-15 00:00:00', 'admin', 'sales', 'SD270', '1000.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'BILL-127'),
(271, 'SD270', 'techo tip', '', '', 100, '0.00', '10.00', 1000, 900, '2013-08-15 00:00:00', 'admin', 'sales', 'SD270', '1000.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 2, 'BILL-127'),
(272, 'PR274', 'cello', 'sello', '', 78, '7.00', '10.00', 0, 78, '2013-09-27 00:00:00', 'sohail', 'entry', '', '546.00', '61.00', '0.00', 'cash', '', '2014-05-11 00:00:00', 1131, 1, '4354'),
(273, 'PR274', 'Cello griper', 'sello', '', 65, '9.00', '10.00', 290, 355, '2013-09-27 00:00:00', 'sohail', 'entry', '', '585.00', '61.00', '0.00', 'cash', '', '2014-05-11 00:00:00', 1131, 2, '4354'),
(274, 'SD274', 'pshampo', '', '', 0, '0.00', '12.00', 234, 227, '2014-02-15 00:00:00', 'sohail', 'sales', 'SD274', '84.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, '333'),
(275, 'SD275', 'cello', '', '', 0, '0.00', '10.00', 78, 77, '2014-02-16 00:00:00', 'sohail', 'sales', 'SD275', '10.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, '890'),
(276, 'SD275', 'pshampo', '', '', 0, '0.00', '12.00', 227, 219, '2014-02-16 00:00:00', 'sohail', 'sales', 'SD275', '96.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 2, '890'),
(277, 'SD275', 'techo tip', '', '', 0, '0.00', '10.00', 900, 811, '2014-02-16 00:00:00', 'sohail', 'sales', 'SD275', '890.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 3, '890'),
(278, 'SD278', 'techo tip', '', '', 0, '0.00', '10.00', 811, 804, '2014-02-16 00:00:00', 'sohail', 'sales', 'SD278', '70.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, '7654'),
(279, 'SD278', 'pshampo', '', '', 0, '0.00', '12.00', 219, 212, '2014-02-16 00:00:00', 'sohail', 'sales', 'SD278', '84.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 2, '7654'),
(280, 'SD278', 'Cello griper', '', '', 0, '0.00', '10.00', 355, 346, '2014-02-16 00:00:00', 'sohail', 'sales', 'SD278', '90.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 3, '7654'),
(281, 'SD278', 'cello', '', '', 0, '0.00', '10.00', 77, 69, '2014-02-16 00:00:00', 'sohail', 'sales', 'SD278', '80.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 4, '7654'),
(282, 'SD282', 'techo tip', '', '', 0, '0.00', '10.00', 804, 796, '2014-02-16 00:00:00', 'sohail', 'sales', 'SD282', '80.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, '8768'),
(283, 'SD282', 'cello', '', '', 0, '0.00', '10.00', 69, 61, '2014-02-16 00:00:00', 'sohail', 'sales', 'SD282', '80.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 2, '8768'),
(284, 'SD282', 'pshampo', '', '', 0, '0.00', '12.00', 212, 206, '2014-02-16 00:00:00', 'sohail', 'sales', 'SD282', '72.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 3, '8768'),
(285, 'SD282', 'Cello griper', '', '', 0, '0.00', '10.00', 346, 341, '2014-02-16 00:00:00', 'sohail', 'sales', 'SD282', '50.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 4, '8768'),
(286, 'SD286', 'techo tip', '', '', 0, '0.00', '10.00', 796, 790, '2014-02-16 00:00:00', 'sohail', 'sales', 'SD286', '60.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'vydm'),
(287, 'SD287', 'techo tip', '', '', 0, '0.00', '10.00', 790, 786, '2014-02-16 00:00:00', 'sohail', 'sales', 'SD287', '40.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, '0681'),
(288, 'SD288', 'Cello griper', '', '', 0, '0.00', '10.00', 341, 333, '2014-02-16 00:00:00', 'sohail', 'sales', 'SD288', '80.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, '8334'),
(289, 'SD288', 'techo tip', '', '', 0, '0.00', '10.00', 786, 777, '2014-02-16 00:00:00', 'sohail', 'sales', 'SD288', '90.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 2, '8334'),
(290, 'SD288', 'pshampo', '', '', 0, '0.00', '12.00', 206, 198, '2014-02-16 00:00:00', 'sohail', 'sales', 'SD288', '96.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 3, '8334'),
(291, 'SD291', 'shugar', '', '', 0, '0.00', '100.00', 213, 213, '2014-02-21 00:00:00', 'sohail', 'sales', 'SD291', '50.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, '9582'),
(292, 'SD292', 'ricehigh', '', '', 0, '0.00', '160.00', 5000, 4999, '2014-02-22 00:00:00', 'sohail', 'sales', 'SD292', '240.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, '1437'),
(293, 'SD292', 'nimak', '', '', 0, '0.00', '5.00', 277, 275, '2014-02-22 00:00:00', 'sohail', 'sales', 'SD292', '10.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 2, '1437'),
(294, 'SD292', 'shugar', '', '', 0, '0.00', '100.00', 213, 213, '2014-02-22 00:00:00', 'sohail', 'sales', 'SD292', '30.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 3, '1437'),
(295, 'SD292', 'pshampo', '', '', 0, '0.00', '12.00', 198, 196, '2014-02-22 00:00:00', 'sohail', 'sales', 'SD292', '24.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 4, '1437'),
(296, 'SD292', 'salienty', '', '', 0, '0.00', '5.00', 299, 296, '2014-02-22 00:00:00', 'sohail', 'sales', 'SD292', '15.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 5, '1437'),
(297, 'SD292', 'tofiee', '', '', 0, '0.00', '1.00', 1000, 994, '2014-02-22 00:00:00', 'sohail', 'sales', 'SD292', '6.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 6, '1437'),
(298, 'SD292', 'Cello griper', '', '', 0, '0.00', '10.00', 333, 327, '2014-02-22 00:00:00', 'sohail', 'sales', 'SD292', '60.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 7, '1437'),
(299, 'SD292', 'cello', '', '', 0, '0.00', '10.00', 61, 54, '2014-02-22 00:00:00', 'sohail', 'sales', 'SD292', '70.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 8, '1437'),
(300, 'SD292', 'techo tip', '', '', 0, '0.00', '10.00', 777, 769, '2014-02-22 00:00:00', 'sohail', 'sales', 'SD292', '80.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 9, '1437'),
(301, 'SD292', 'dairemilk', '', '', 0, '0.00', '10.00', 300, 291, '2014-02-22 00:00:00', 'sohail', 'sales', 'SD292', '90.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 10, '1437'),
(302, 'SD302', 'shugar', '', '', 0, '0.00', '100.00', 213, 210, '2014-02-22 00:00:00', 'sohail', 'sales', 'SD302', '300.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, '2763'),
(303, 'SD303', 'cello', '', '', 0, '0.00', '10.00', 54, 53, '2014-02-22 00:00:00', 'sohail', 'sales', 'SD303', '10.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, '8992'),
(304, 'SD304', 'shugar', '', '', 0, '0.00', '100.00', 210, 209, '2014-02-22 00:00:00', 'sohail', 'sales', 'SD304', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, '3527'),
(305, 'SD305', 'shugar', '', '', 0, '0.00', '100.00', 210, 209, '2014-02-22 00:00:00', 'sohail', 'sales', 'SD305', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, '4191'),
(306, 'SD306', 'shugar', '', '', 0, '0.00', '100.00', 209, 208, '2014-02-22 00:00:00', 'sohail', 'sales', 'SD306', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, '8807'),
(307, 'SD307', 'shugar', '', '', 0, '0.00', '100.00', 208, 207, '2014-02-22 00:00:00', 'sohail', 'sales', 'SD307', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, '5954'),
(308, 'SD308', 'salienty', '', '', 0, '0.00', '5.00', 296, 295, '2014-02-22 00:00:00', 'sohail', 'sales', 'SD308', '5.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, '4575'),
(309, 'SD309', 'salienty', '', '', 0, '0.00', '5.00', 295, 294, '2014-02-22 00:00:00', 'sohail', 'sales', 'SD309', '5.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, '2501'),
(310, 'SD310', 'pshampo', '', '', 4, '0.00', '12.00', 196, 192, '2014-02-23 00:00:00', 'sohail', 'sales', 'SD310', '48.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR312'),
(311, 'SD311', 'shugar', '', '', 5, '0.00', '100.00', 207, 202, '2014-02-23 00:00:00', 'sohail', 'sales', 'SD311', '500.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR313'),
(312, 'SD312', 'shugar', '', '', 1, '0.00', '100.00', 202, 201, '2014-02-23 00:00:00', 'sohail', 'sales', 'SD312', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR314'),
(313, 'SD313', 'shugar', '', '', 8, '0.00', '100.00', 202, 194, '2014-02-23 00:00:00', 'sohail', 'sales', 'SD313', '800.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR315'),
(314, 'SD314', 'shugar', '', '', 1, '0.00', '100.00', 194, 193, '2014-02-23 00:00:00', 'sohail', 'sales', 'SD314', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR316'),
(315, 'SD315', 'shugar', '', '', 1, '0.00', '100.00', 193, 192, '2014-02-23 00:00:00', 'sohail', 'sales', 'SD315', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR317'),
(316, 'SD316', 'salienty', '', '', 2, '0.00', '5.00', 294, 292, '2014-02-23 00:00:00', 'sohail', 'sales', 'SD316', '10.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR318'),
(317, 'SD317', 'shugar', '', '', 1, '0.00', '100.00', 192, 191, '2014-02-23 00:00:00', 'sohail', 'sales', 'SD317', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR319'),
(318, 'SD318', 'shugar', '', '', 1, '0.00', '100.00', 191, 190, '2014-02-23 00:00:00', 'sohail', 'sales', 'SD318', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR320'),
(319, 'SD319', 'dairemilk', '', '', 2, '0.00', '10.00', 291, 289, '2014-02-23 00:00:00', 'sohail', 'sales', 'SD319', '20.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR321'),
(320, 'SD319', 'salienty', '', '', 2, '0.00', '5.00', 292, 290, '2014-02-23 00:00:00', 'sohail', 'sales', 'SD319', '10.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 2, 'PR321'),
(321, 'SD321', 'salienty', '', '', 2, '0.00', '5.00', 290, 288, '2014-02-23 00:00:00', 'sohail', 'sales', 'SD321', '10.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR323'),
(322, 'SD322', 'dairemilk', '', '', 4, '0.00', '10.00', 289, 285, '2014-02-23 00:00:00', 'sohail', 'sales', 'SD322', '40.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR324'),
(323, 'SD323', 'shugar', '', '', 1, '0.00', '100.00', 190, 189, '2014-02-24 00:00:00', 'sohail', 'sales', 'SD323', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR325'),
(324, 'SD324', 'shugar', '', '', 1, '0.00', '100.00', 189, 188, '2014-02-24 00:00:00', 'sohail', 'sales', 'SD324', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR326'),
(325, 'SD325', 'shugar', '', '', 2, '0.00', '100.00', 188, 186, '2014-02-24 00:00:00', 'sohail', 'sales', 'SD325', '200.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR327'),
(326, 'SD326', 'shugar', '', '', 1, '0.00', '100.00', 186, 185, '2014-02-24 00:00:00', 'sohail', 'sales', 'SD326', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR328'),
(327, 'SD327', 'shugar', '', '', 1, '0.00', '100.00', 185, 184, '2014-02-24 00:00:00', 'sohail', 'sales', 'SD327', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR329'),
(328, 'SD328', 'dairemilk', '', '', 8, '0.00', '10.00', 285, 277, '2014-02-24 00:00:00', 'sohail', 'sales', 'SD328', '80.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR330'),
(329, 'SD329', 'shugar', '', '', 1, '0.00', '100.00', 184, 183, '2014-02-25 00:00:00', 'sohail', 'sales', 'SD329', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR331'),
(330, 'SD330', 'shugar', '', '', 1, '0.00', '100.00', 183, 182, '2014-02-25 00:00:00', 'sohail', 'sales', 'SD330', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR332'),
(331, 'SD331', 'dairemilk', '', '', 1, '0.00', '10.00', 277, 276, '2014-02-25 00:00:00', 'sohail', 'sales', 'SD331', '10.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR333'),
(332, 'SD332', 'shugar', '', '', 1, '0.00', '100.00', 182, 181, '2014-02-25 00:00:00', 'sohail', 'sales', 'SD332', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR334'),
(333, 'SD333', 'shugar', '', '', 1, '0.00', '100.00', 181, 180, '2014-02-25 00:00:00', 'sohail', 'sales', 'SD333', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR335'),
(334, 'SD334', 'shugar', '', '', 1, '0.00', '100.00', 180, 179, '2014-02-25 00:00:00', 'sohail', 'sales', 'SD334', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR336'),
(335, 'SD335', 'shugar', '', '', 1, '0.00', '100.00', 179, 178, '2014-02-25 00:00:00', 'sohail', 'sales', 'SD335', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR337'),
(336, 'SD336', 'shugar', '', '', 1, '0.00', '100.00', 178, 177, '2014-02-25 00:00:00', 'sohail', 'sales', 'SD336', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR338'),
(337, 'SD337', 'shugar', '', '', 1, '0.00', '100.00', 177, 176, '2014-02-25 00:00:00', 'sohail', 'sales', 'SD337', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR339'),
(338, 'SD338', 'shugar', '', '', 1, '0.00', '100.00', 176, 175, '2014-02-25 00:00:00', 'sohail', 'sales', 'SD338', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR340'),
(339, 'SD339', 'shugar', '', '', 1, '0.00', '100.00', 175, 174, '2014-02-25 00:00:00', 'sohail', 'sales', 'SD339', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR341'),
(340, 'SD340', 'shugar', '', '', 1, '0.00', '100.00', 174, 173, '2014-02-25 00:00:00', 'sohail', 'sales', 'SD340', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR342'),
(341, 'SD341', 'shugar', '', '', 1, '0.00', '100.00', 173, 172, '2014-02-26 00:00:00', 'sohail', 'sales', 'SD341', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR343'),
(342, 'SD342', 'shugar', '', '', 1, '0.00', '100.00', 172, 171, '2014-02-26 00:00:00', 'sohail', 'sales', 'SD342', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR344'),
(343, 'SD343', 'shugar', '', '', 1, '0.00', '100.00', 171, 170, '2014-02-26 00:00:00', 'sohail', 'sales', 'SD343', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR345'),
(344, 'SD344', 'shugar', '', '', 1, '0.00', '100.00', 170, 169, '2014-02-26 00:00:00', 'sohail', 'sales', 'SD344', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR346'),
(345, 'SD345', 'shugar', '', '', 1, '0.00', '100.00', 169, 168, '2014-02-26 00:00:00', 'sohail', 'sales', 'SD345', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR347'),
(346, 'SD346', 'shugar', '', '', 1, '0.00', '100.00', 168, 167, '2014-02-26 00:00:00', 'sohail', 'sales', 'SD346', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR348'),
(347, 'SD347', 'shugar', '', '', 1, '0.00', '100.00', 167, 166, '2014-02-26 00:00:00', 'sohail', 'sales', 'SD347', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR349'),
(348, 'SD348', 'shugar', '', '', 1, '0.00', '100.00', 166, 165, '2014-02-26 00:00:00', 'sohail', 'sales', 'SD348', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR350'),
(349, 'SD349', 'shugar', '', '', 1, '0.00', '100.00', 165, 164, '2014-02-26 00:00:00', 'sohail', 'sales', 'SD349', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR351'),
(350, 'SD350', 'shugar', '', '', 1, '0.00', '100.00', 164, 163, '2014-02-26 00:00:00', 'sohail', 'sales', 'SD350', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR352'),
(351, 'SD351', 'shugar', '', '', 1, '0.00', '100.00', 163, 162, '2014-02-26 00:00:00', 'sohail', 'sales', 'SD351', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR353'),
(352, 'SD352', 'shugar', '', '', 1, '0.00', '100.00', 162, 161, '2014-02-26 00:00:00', 'sohail', 'sales', 'SD352', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR354'),
(353, 'SD353', 'shugar', '', '', 1, '0.00', '100.00', 161, 160, '2014-02-26 00:00:00', 'sohail', 'sales', 'SD353', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR355'),
(354, 'SD354', 'shugar', '', '', 1, '0.00', '100.00', 160, 159, '2014-02-26 00:00:00', 'sohail', 'sales', 'SD354', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR356'),
(355, 'SD355', 'shugar', '', '', 1, '0.00', '100.00', 159, 158, '2014-02-26 00:00:00', 'sohail', 'sales', 'SD355', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR357'),
(356, 'SD356', 'shugar', '', '', 1, '0.00', '100.00', 158, 157, '2014-02-26 00:00:00', 'sohail', 'sales', 'SD356', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR358'),
(357, 'SD357', 'shugar', '', '', 1, '0.00', '100.00', 157, 156, '2014-02-26 00:00:00', 'sohail', 'sales', 'SD357', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR359'),
(358, 'SD358', 'techo tip', '', '', 1, '0.00', '10.00', 769, 768, '2014-03-06 00:00:00', 'sohail', 'sales', 'SD358', '10.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR360'),
(359, 'SD359', 'shugar', '', '', 1, '0.00', '100.00', 156, 155, '2014-03-07 00:00:00', 'sohail', 'sales', 'SD359', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR361'),
(360, 'PR362', 'shugar', 'hello', '', 333, '21.00', '100.00', 155, 488, '2014-03-16 00:00:00', 'sohail', 'entry', '', '6993.00', '22.00', '38.00', 'cash', '', '2014-06-04 00:00:00', 6993, 1, 'PR362'),
(361, 'SD361', 'shugar', '', '', 1, '0.00', '100.00', 488, 487, '2014-04-02 00:00:00', 'ahsan', 'sales', 'SD361', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR363'),
(362, 'SD361', 'salienty', '', '', 3, '0.00', '5.00', 288, 285, '2014-04-02 00:00:00', 'ahsan', 'sales', 'SD361', '15.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 2, 'PR363'),
(363, 'SD363', 'shugar', '', '', 0, '0.00', '100.00', 487, 485, '2014-04-02 00:00:00', 'ahsan', 'sales', 'SD363', '200.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, '0044'),
(364, 'SD364', 'shugar', '', '', 1, '0.00', '100.00', 485, 484, '2014-04-02 00:00:00', 'ahsan', 'sales', 'SD364', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR366'),
(365, 'SD365', 'shugar', '', '', 2, '0.00', '100.00', 484, 482, '2014-04-02 00:00:00', 'ahsan', 'sales', 'SD365', '200.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR367'),
(366, 'SD366', 'shugar', '', '', 7, '0.00', '100.00', 482, 475, '2014-04-02 00:00:00', 'ahsan', 'sales', 'SD366', '700.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR368'),
(367, 'SD367', 'shugar', '', '', 8, '0.00', '100.00', 475, 467, '2014-04-02 00:00:00', 'ahsan', 'sales', 'SD367', '800.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR369'),
(368, 'SD368', 'shugar', '', '', 3, '0.00', '100.00', 467, 464, '2014-04-02 00:00:00', 'ahsan', 'sales', 'SD368', '300.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR370'),
(369, 'SD369', 'dairemilk', '', '', 7, '0.00', '10.00', 276, 269, '2014-04-02 00:00:00', 'ahsan', 'sales', 'SD369', '70.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR371'),
(370, 'SD370', 'shugar', '', '', 2, '0.00', '100.00', 464, 462, '2014-04-02 00:00:00', 'ahsan', 'sales', 'SD370', '200.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR372'),
(371, 'SD371', 'shugar', '', '', 1, '0.00', '100.00', 462, 461, '2014-04-03 00:00:00', 'ahsan', 'sales', 'SD371', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR373'),
(372, 'SD372', 'shugar', '', '', 2, '0.00', '100.00', 461, 459, '2014-04-06 00:00:00', 'ahsan', 'sales', 'SD372', '200.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR374'),
(373, 'SD372', 'techo tip', '', '', 3, '0.00', '10.00', 768, 765, '2014-04-06 00:00:00', 'ahsan', 'sales', 'SD372', '30.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 2, 'PR374'),
(374, 'SD374', 'shugar', '', '', 3, '0.00', '100.00', 459, 456, '2014-04-06 00:00:00', 'ahsan', 'sales', 'SD374', '300.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR376'),
(375, 'SD374', 'techo tip', '', '', 3, '0.00', '10.00', 765, 762, '2014-04-06 00:00:00', 'ahsan', 'sales', 'SD374', '30.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 2, 'PR376'),
(376, 'SD374', 'Cello griper', '', '', 3, '0.00', '10.00', 327, 324, '2014-04-06 00:00:00', 'ahsan', 'sales', 'SD374', '30.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 3, 'PR376'),
(377, 'SD374', 'pshampo', '', '', 4, '0.00', '12.00', 192, 188, '2014-04-06 00:00:00', 'ahsan', 'sales', 'SD374', '48.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 4, 'PR376'),
(378, 'SD374', 'salienty', '', '', 5, '0.00', '5.00', 285, 280, '2014-04-06 00:00:00', 'ahsan', 'sales', 'SD374', '25.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 5, 'PR376'),
(379, 'SD374', 'ricehigh', '', '', 4, '0.00', '160.00', 4999, 4995, '2014-04-06 00:00:00', 'ahsan', 'sales', 'SD374', '640.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 6, 'PR376'),
(380, 'SD380', 'shugar', '', '', 1, '0.00', '100.00', 456, 455, '2014-04-06 00:00:00', 'ahsan', 'sales', 'SD380', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR382'),
(381, 'SD381', 'shugar', '', '', 6, '0.00', '100.00', 455, 449, '2014-04-06 00:00:00', 'ahsan', 'sales', 'SD381', '600.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR383'),
(382, 'SD382', 'shugar', '', '', 1, '0.00', '100.00', 449, 448, '2014-04-06 00:00:00', 'ahsan', 'sales', 'SD382', '100.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR384'),
(383, 'SD383', 'salienty', '', '', 2, '0.00', '5.00', 280, 278, '2014-04-07 00:00:00', 'ahsan', 'sales', 'SD383', '10.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR385'),
(384, 'SD384', 'tofiee', '', '', 3, '0.00', '1.00', 994, 991, '2014-04-07 00:00:00', 'ahsan', 'sales', 'SD384', '3.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR386'),
(385, 'SD385', 'tofiee', '', '', 3, '0.00', '1.00', 991, 988, '2014-04-07 00:00:00', 'ahsan', 'sales', 'SD385', '3.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR387'),
(386, 'SD386', 'shugar', '', '', 4, '0.00', '100.00', 448, 444, '2014-04-07 00:00:00', 'ahsan', 'sales', 'SD386', '400.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR388'),
(387, 'SD386', 'tofiee', '', '', 3, '0.00', '1.00', 988, 985, '2014-04-07 00:00:00', 'ahsan', 'sales', 'SD386', '3.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 2, 'PR388'),
(388, 'SD386', 'techo tip', '', '', 6, '0.00', '10.00', 762, 756, '2014-04-07 00:00:00', 'ahsan', 'sales', 'SD386', '60.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 3, 'PR388'),
(389, 'SD386', 'ricehigh', '', '', 5, '0.00', '160.00', 4995, 4990, '2014-04-07 00:00:00', 'ahsan', 'sales', 'SD386', '800.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 4, 'PR388'),
(390, 'SD386', 'Cello griper', '', '', 6, '0.00', '10.00', 324, 318, '2014-04-07 00:00:00', 'ahsan', 'sales', 'SD386', '60.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 5, 'PR388'),
(391, 'SD391', 'shugar', '', '', 2, '0.00', '100.00', 444, 442, '2014-04-09 00:00:00', 'ahsan', 'sales', 'SD391', '200.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR393'),
(392, 'SD392', 'shugar', '', '', 4, '0.00', '100.00', 442, 438, '2014-04-09 00:00:00', 'ahsan', 'sales', 'SD392', '400.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR394'),
(393, 'SD393', 'salienty', '', '', 5, '0.00', '5.00', 278, 273, '2014-04-09 00:00:00', 'ahsan', 'sales', 'SD393', '25.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR395'),
(394, 'SD393', 'shugar', '', '', 4, '0.00', '100.00', 438, 434, '2014-04-09 00:00:00', 'ahsan', 'sales', 'SD393', '400.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 2, 'PR395'),
(395, 'SD393', 'ricehigh', '', '', 32, '0.00', '160.00', 4990, 4958, '2014-04-09 00:00:00', 'ahsan', 'sales', 'SD393', '5120.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 3, 'PR395'),
(396, 'SD396', 'shugar', '', '', 3, '0.00', '100.00', 434, 431, '2014-04-09 00:00:00', 'ahsan', 'sales', 'SD396', '300.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR398'),
(397, 'SD397', 'shugar', '', '', 4, '0.00', '100.00', 431, 427, '2014-04-09 00:00:00', 'ahsan', 'sales', 'SD397', '400.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR399'),
(398, 'SD398', 'shugar', '', '', 6, '0.00', '100.00', 427, 421, '2014-04-09 00:00:00', 'ahsan', 'sales', 'SD398', '600.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR400'),
(399, 'SD399', 'pshampo', '', '', 9, '0.00', '12.00', 188, 179, '2014-04-09 00:00:00', 'ahsan', 'sales', 'SD399', '108.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR401'),
(400, 'SD400', 'shugar', '', '', 6, '0.00', '100.00', 421, 415, '2014-04-11 00:00:00', 'ahsan', 'sales', 'SD400', '600.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR402'),
(401, 'SD400', 'pshampo', '', '', 6, '0.00', '12.00', 179, 173, '2014-04-11 00:00:00', 'ahsan', 'sales', 'SD400', '72.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 2, 'PR402'),
(402, 'SD400', 'salienty', '', '', 5, '0.00', '5.00', 273, 268, '2014-04-11 00:00:00', 'ahsan', 'sales', 'SD400', '25.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 3, 'PR402'),
(403, 'SD403', 'shugar', '', '', 8, '0.00', '100.00', 415, 407, '2014-04-11 00:00:00', 'ahsan', 'sales', 'SD403', '800.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR405'),
(404, 'SD404', 'salienty', '', '', 9, '0.00', '5.00', 268, 259, '2014-04-11 00:00:00', 'ahsan', 'sales', 'SD404', '45.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR406'),
(405, 'SD405', 'shugar', '', '', 3, '0.00', '100.00', 407, 404, '2014-04-11 00:00:00', 'ahsan', 'sales', 'SD405', '300.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR407'),
(406, 'SD405', 'pshampo', '', '', 4, '0.00', '12.00', 173, 169, '2014-04-11 00:00:00', 'ahsan', 'sales', 'SD405', '48.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 2, 'PR407'),
(407, 'SD405', 'Cello griper', '', '', 5, '0.00', '10.00', 318, 313, '2014-04-11 00:00:00', 'ahsan', 'sales', 'SD405', '50.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 3, 'PR407'),
(408, 'SD408', 'salienty', '', '', 1, '0.00', '5.00', 259, 258, '2014-04-15 00:00:00', 'ahsan', 'sales', 'SD408', '5.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR410'),
(409, 'SD409', 'shugar', '', '', 4, '0.00', '100.00', 404, 400, '2014-04-21 00:00:00', 'ahsan', 'sales', 'SD409', '400.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR411'),
(410, 'SD409', 'salienty', '', '', 1, '0.00', '5.00', 258, 257, '2014-04-21 00:00:00', 'ahsan', 'sales', 'SD409', '5.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 2, 'PR411'),
(411, 'SD411', 'cello', '', '', 1, '0.00', '10.00', 53, 52, '2014-05-09 00:00:00', 'ahsan', 'sales', 'SD411', '10.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR413'),
(412, 'SD412', 'salienty', '', '', 6, '0.00', '5.00', 257, 251, '2014-05-11 00:00:00', 'ahsan', 'sales', 'SD412', '30.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR414'),
(413, 'PR415', 'salienty', 'Monish', '', 23, '4.50', '5.00', 251, 274, '2014-05-11 00:00:00', 'ahsan', 'entry', '', '103.50', '103.50', '0.00', 'cash', '', '0000-00-00 00:00:00', 104, 1, 'PR415'),
(414, 'SD414', 'salienty', '', '', 2, '0.00', '5.00', 274, 272, '2014-05-12 00:00:00', 'ahsan', 'sales', 'SD414', '10.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, '101'),
(415, 'SD415', 'shugar', '', '', 2, '0.00', '100.00', 400, 398, '2014-05-12 00:00:00', 'ahsan', 'sales', 'SD415', '200.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, '1212'),
(416, 'SD416', 'shugar', '', '', 3, '0.00', '100.00', 398, 395, '2014-05-13 00:00:00', 'ahsan', 'sales', 'SD416', '300.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, '102'),
(417, 'SD417', 'salienty', '', '', 5, '0.00', '5.00', 272, 267, '2014-05-13 00:00:00', 'ahsan', 'sales', 'SD417', '25.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, '444'),
(418, 'SD418', 'salienty', '', '', 5, '0.00', '5.00', 267, 262, '2014-05-13 00:00:00', 'ahsan', 'sales', 'SD418', '25.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, '666'),
(419, 'PR421', 'Cello griper', 'Monish', '', 67, '9.00', '10.00', 313, 380, '2014-05-13 00:00:00', 'ahsan', 'entry', '', '603.00', '603.00', '0.00', 'cash', '', '0000-00-00 00:00:00', 603, 1, 'PR421'),
(420, 'PR422', 'salienty', 'ttt', '', 78, '4.50', '5.00', 262, 340, '2014-05-13 00:00:00', 'ahsan', 'entry', '', '351.00', '351.00', '0.00', 'cash', '', '0000-00-00 00:00:00', 351, 1, '101'),
(421, 'PR423', 'glass', 'ahsan', '', 34, '45.00', '50.00', 0, 34, '2014-05-14 00:00:00', 'ahsan', 'entry', '', '1530.00', '1530.00', '0.00', 'cash', '', '0000-00-00 00:00:00', 1530, 1, '111'),
(422, 'SD422', 'glass', '', '', 1, '0.00', '50.00', 34, 33, '2014-05-14 00:00:00', 'ahsan', 'sales', 'SD422', '50.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, '111'),
(423, 'PR425', '111', 'seee', '', 4, '48.00', '57.00', 0, 4, '2014-05-14 00:00:00', 'ahsan', 'entry', '', '192.00', '192.00', '0.00', 'cash', '', '0000-00-00 00:00:00', 192, 1, '111'),
(424, 'SD424', '111', '', '', 1, '0.00', '57.00', 4, 3, '2014-05-14 00:00:00', 'ahsan', 'sales', 'SD424', '57.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, '111'),
(426, 'SD425', 'salienty', '', '', 3, '0.00', '5.00', 337, 334, '2014-05-15 00:00:00', 'ahsan', 'sales', 'SD425', '15.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 2, 'PR427'),
(427, 'SD425', 'shugar', '', '', 3, '0.00', '100.00', 392, 389, '2014-05-15 00:00:00', 'ahsan', 'sales', 'SD425', '300.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 3, 'PR427'),
(428, 'SD428', 'pshampo', '', '', 34, '0.00', '12.00', 166, 132, '2014-05-18 00:00:00', 'ahsan', 'sales', 'SD428', '408.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR430'),
(429, 'SD429', 'pshampo', '', '', 12, '0.00', '12.00', 132, 120, '2014-05-18 00:00:00', 'ahsan', 'sales', 'SD429', '144.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR431'),
(430, 'SD430', 'pshampo', '', '', 12, '0.00', '12.00', 120, 108, '2014-05-18 00:00:00', 'ahsan', 'sales', 'SD430', '144.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR432'),
(431, 'SD431', 'shugar', '', '', 2, '0.00', '100.00', 389, 387, '2014-05-18 00:00:00', 'ahsan', 'sales', 'SD431', '200.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR433'),
(432, 'SD432', 'shugar', '', '', 2, '0.00', '100.00', 387, 385, '2014-05-18 00:00:00', 'ahsan', 'sales', 'SD432', '200.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR434'),
(433, 'SD433', 'salienty', '', '', 1, '0.00', '5.00', 334, 333, '2014-05-18 00:00:00', 'ahsan', 'sales', 'SD433', '5.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR435'),
(434, 'SD434', 'salienty', '', '', 1, '0.00', '5.00', 333, 332, '2014-05-18 00:00:00', 'ahsan', 'sales', 'SD434', '5.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR436'),
(435, 'PR437', 'salienty', 'sachu  ', '', 40, '4.50', '5.00', 365, 375, '2014-05-18 00:00:00', 'ahsan', 'entry', '', '180.00', '180.00', '0.00', 'cash', '', '2014-05-19 00:00:00', 180, 1, 'PR437  '),
(436, 'SD436', 'salienty', '', '', 1, '0.00', '5.00', 375, 374, '2014-05-19 00:00:00', 'ahsan', 'sales', 'SD436', '5.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR438'),
(437, 'SD437', 'salienty', '', '', 1, '0.00', '5.00', 374, 373, '2014-05-19 00:00:00', 'ahsan', 'sales', 'SD437', '5.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR439'),
(438, 'SD438', 'salienty', '', '', 1, '0.00', '5.00', 373, 372, '2014-05-19 00:00:00', 'ahsan', 'sales', 'SD438', '5.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR440'),
(439, 'SD439', 'salienty', '', '', 1, '0.00', '5.00', 372, 371, '2014-05-19 00:00:00', 'ahsan', 'sales', 'SD439', '5.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR441'),
(440, 'SD440', 'salienty', '', '', 6, '0.00', '5.00', 371, 365, '2014-06-04 00:00:00', 'ahsan', 'sales', 'SD440', '30.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR442'),
(441, 'SD441', 'salienty', '', '', 3, '0.00', '5.00', 365, 362, '2014-06-06 00:00:00', 'ahsan', 'sales', 'SD441', '15.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR443'),
(442, 'SD442', 'salienty', '', '', 2, '0.00', '5.00', 362, 360, '2014-06-11 00:00:00', 'ahsan', 'sales', 'SD442', '10.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR444'),
(443, 'SD442', 'shugar', '', '', 2, '0.00', '100.00', 388, 386, '2014-06-11 00:00:00', 'ahsan', 'sales', 'SD442', '200.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 2, 'PR444'),
(444, 'PR446', 'usb', 'china', '', 100, '300.00', '400.00', 0, 100, '2014-06-11 00:00:00', 'ahsan', 'entry', '', '30000.00', '30000.00', '0.00', 'cash', '', '0000-00-00 00:00:00', 30000, 1, 'PR446'),
(445, 'SD445', 'usb', '', '', 1, '0.00', '400.00', 100, 99, '2014-06-11 00:00:00', 'ahsan', 'sales', 'SD445', '400.00', '0.00', '0.00', '', '', '0000-00-00 00:00:00', 0, 1, 'PR447');

-- --------------------------------------------------------

--
-- Table structure for table `stock_sales`
--

CREATE TABLE `stock_sales` (
  `id` int(10) NOT NULL,
  `transactionid` varchar(250) NOT NULL,
  `stock_name` varchar(200) NOT NULL,
  `category` varchar(120) NOT NULL,
  `supplier_name` varchar(200) NOT NULL,
  `selling_price` decimal(10,2) NOT NULL,
  `quantity` decimal(10,2) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `date` date NOT NULL,
  `username` varchar(120) NOT NULL,
  `customer_id` varchar(120) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `discount` decimal(10,0) NOT NULL,
  `tax` decimal(10,0) NOT NULL,
  `tax_dis` varchar(100) NOT NULL,
  `dis_amount` decimal(10,0) NOT NULL,
  `grand_total` decimal(10,0) NOT NULL,
  `due` date NOT NULL,
  `mode` varchar(250) NOT NULL,
  `description` varchar(500) NOT NULL,
  `count1` int(11) NOT NULL,
  `billnumber` varchar(120) NOT NULL,
  `opp` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_sales`
--

INSERT INTO `stock_sales` (`id`, `transactionid`, `stock_name`, `category`, `supplier_name`, `selling_price`, `quantity`, `amount`, `date`, `username`, `customer_id`, `subtotal`, `payment`, `balance`, `discount`, `tax`, `tax_dis`, `dis_amount`, `grand_total`, `due`, `mode`, `description`, `count1`, `billnumber`, `opp`) VALUES
(1, 'SD372', 'shugar', '', '', '100.00', '2.00', '200.00', '2014-04-06', 'ahsan', 'Regular', '230.00', '230.00', '0.00', '0', '0', '', '0', '230', '1970-01-01', 'cash', '', 1, 'PR374', 0),
(2, 'SD372', 'techo tip', '', '', '10.00', '3.00', '30.00', '2014-04-06', 'ahsan', 'Regular', '230.00', '230.00', '0.00', '0', '0', '', '0', '230', '1970-01-01', 'cash', '', 2, 'PR374', 0),
(3, 'SD374', 'shugar', '', '', '100.00', '3.00', '300.00', '2014-04-06', 'ahsan', 'Regular', '1073.00', '1073.00', '0.00', '0', '0', '', '0', '1073', '1970-01-01', 'cash', '', 1, 'PR376', 0),
(4, 'SD374', 'techo tip', '', '', '10.00', '3.00', '30.00', '2014-04-06', 'ahsan', 'Regular', '1073.00', '1073.00', '0.00', '0', '0', '', '0', '1073', '1970-01-01', 'cash', '', 2, 'PR376', 0),
(5, 'SD374', 'Cello griper', '', '', '10.00', '3.00', '30.00', '2014-04-06', 'ahsan', 'Regular', '1073.00', '1073.00', '0.00', '0', '0', '', '0', '1073', '1970-01-01', 'cash', '', 3, 'PR376', 0),
(6, 'SD374', 'pshampo', '', '', '12.00', '4.00', '48.00', '2014-04-06', 'ahsan', 'Regular', '1073.00', '1073.00', '0.00', '0', '0', '', '0', '1073', '1970-01-01', 'cash', '', 4, 'PR376', 0),
(7, 'SD374', 'salienty', '', '', '5.00', '5.00', '25.00', '2014-04-06', 'ahsan', 'Regular', '1073.00', '1073.00', '0.00', '0', '0', '', '0', '1073', '1970-01-01', 'cash', '', 5, 'PR376', 0),
(8, 'SD374', 'ricehigh', '', '', '160.00', '4.00', '640.00', '2014-04-06', 'ahsan', 'Regular', '1073.00', '1073.00', '0.00', '0', '0', '', '0', '1073', '1970-01-01', 'cash', '', 6, 'PR376', 0),
(9, 'SD380', 'shugar', '', '', '100.00', '1.00', '100.00', '2014-04-06', 'ahsan', 'Regular', '100.00', '100.00', '0.00', '0', '0', '', '0', '100', '1970-01-01', 'cash', '', 1, 'PR382', 0),
(10, 'SD381', 'shugar', '', '', '100.00', '6.00', '600.00', '2014-04-06', 'ahsan', 'Regular', '600.00', '600.00', '0.00', '0', '0', '', '0', '600', '1970-01-01', 'cash', '', 1, 'PR383', 0),
(11, 'SD382', 'shugar', '', '', '100.00', '1.00', '100.00', '2014-04-06', 'ahsan', 'Regular', '100.00', '100.00', '0.00', '0', '0', '', '0', '100', '1970-01-01', 'cash', '', 1, 'PR384', 0),
(12, 'SD383', 'salienty', '', '', '5.00', '2.00', '10.00', '2014-04-07', 'ahsan', 'Regular', '10.00', '10.00', '0.00', '0', '0', '', '0', '10', '1970-01-01', 'cash', '', 1, 'PR385', 0),
(13, 'SD384', 'tofiee', '', '', '1.00', '3.00', '3.00', '2014-04-07', 'ahsan', 'Regular', '3.00', '3.00', '0.00', '0', '0', '', '0', '3', '1970-01-01', 'cash', '', 1, 'PR386', 0),
(14, 'SD385', 'tofiee', '', '', '1.00', '3.00', '3.00', '2014-04-07', 'ahsan', 'Regular', '3.00', '3.00', '0.00', '0', '0', '', '0', '3', '1970-01-01', 'cash', '', 1, 'PR387', 0),
(15, 'SD386', 'shugar', '', '', '100.00', '4.00', '400.00', '2014-04-07', 'ahsan', 'Regular', '1323.00', '1323.00', '0.00', '0', '0', '', '0', '1323', '1970-01-01', 'cash', '', 1, 'PR388', 0),
(16, 'SD386', 'tofiee', '', '', '1.00', '3.00', '3.00', '2014-04-07', 'ahsan', 'Regular', '1323.00', '1323.00', '0.00', '0', '0', '', '0', '1323', '1970-01-01', 'cash', '', 2, 'PR388', 0),
(17, 'SD386', 'techo tip', '', '', '10.00', '6.00', '60.00', '2014-04-07', 'ahsan', 'Regular', '1323.00', '1323.00', '0.00', '0', '0', '', '0', '1323', '1970-01-01', 'cash', '', 3, 'PR388', 0),
(18, 'SD386', 'ricehigh', '', '', '160.00', '5.00', '800.00', '2014-04-07', 'ahsan', 'Regular', '1323.00', '1323.00', '0.00', '0', '0', '', '0', '1323', '1970-01-01', 'cash', '', 4, 'PR388', 0),
(19, 'SD386', 'Cello griper', '', '', '10.00', '6.00', '60.00', '2014-04-07', 'ahsan', 'Regular', '1323.00', '1323.00', '0.00', '0', '0', '', '0', '1323', '1970-01-01', 'cash', '', 5, 'PR388', 0),
(20, 'SD391', 'shugar', '', '', '100.00', '2.00', '200.00', '2014-04-09', 'ahsan', 'Regular', '196.00', '196.00', '0.00', '0', '0', '', '4', '200', '1970-01-01', 'cash', '', 1, 'PR393', 0),
(21, 'SD392', 'shugar', '', '', '100.00', '4.00', '400.00', '2014-04-09', 'ahsan', 'Regular', '394.00', '394.00', '0.00', '0', '0', '', '6', '400', '1970-01-01', 'cash', '', 1, 'PR394', 0),
(22, 'SD393', 'salienty', '', '', '5.00', '5.00', '25.00', '2014-04-09', 'ahsan', 'tariq', '5540.00', '5540.00', '0.00', '0', '0', '', '5', '5545', '1970-01-01', 'cash', '', 1, 'PR395', 0),
(23, 'SD393', 'shugar', '', '', '100.00', '4.00', '400.00', '2014-04-09', 'ahsan', 'tariq', '5540.00', '5540.00', '0.00', '0', '0', '', '5', '5545', '1970-01-01', 'cash', '', 2, 'PR395', 0),
(24, 'SD393', 'ricehigh', '', '', '160.00', '32.00', '5120.00', '2014-04-09', 'ahsan', 'tariq', '5540.00', '5540.00', '0.00', '0', '0', '', '5', '5545', '1970-01-01', 'cash', '', 3, 'PR395', 0),
(25, 'SD396', 'shugar', '', '', '100.00', '3.00', '300.00', '2014-04-09', 'ahsan', 'tariq', '300.00', '300.00', '0.00', '0', '0', '', '0', '300', '1970-01-01', 'cheque', '', 1, 'PR398', 0),
(26, 'SD397', 'shugar', '', '', '100.00', '4.00', '400.00', '2014-04-09', 'ahsan', 'tariq', '400.00', '400.00', '0.00', '0', '0', '', '0', '400', '1970-01-01', 'other', '', 1, 'PR399', 0),
(27, 'SD398', 'shugar', '', '', '100.00', '6.00', '600.00', '2014-04-09', 'ahsan', 'ahsan', '600.00', '600.00', '0.00', '0', '0', '', '0', '600', '1970-01-01', 'cheque', '', 1, 'PR400', 0),
(28, 'SD399', 'pshampo', '', '', '12.00', '9.00', '108.00', '2014-04-09', 'ahsan', 'tariq', '108.00', '108.00', '0.00', '0', '0', '', '0', '108', '2014-05-11', 'cheque', '', 1, 'PR401', 0),
(29, 'SD400', 'shugar', '', '', '100.00', '6.00', '600.00', '2014-04-11', 'ahsan', 'Hostal', '697.00', '0.00', '697.00', '0', '0', '', '0', '697', '1970-01-01', 'cash', '', 1, 'PR402', 0),
(30, 'SD400', 'pshampo', '', '', '12.00', '6.00', '72.00', '2014-04-11', 'ahsan', 'Hostal', '697.00', '0.00', '697.00', '0', '0', '', '0', '697', '1970-01-01', 'cash', '', 2, 'PR402', 0),
(31, 'SD400', 'salienty', '', '', '5.00', '5.00', '25.00', '2014-04-11', 'ahsan', 'Hostal', '697.00', '0.00', '697.00', '0', '0', '', '0', '697', '1970-01-01', 'cash', '', 3, 'PR402', 0),
(32, 'SD403', 'shugar', '', '', '100.00', '8.00', '800.00', '2014-04-11', 'ahsan', 'Hostal', '800.00', '65.00', '735.00', '0', '0', '', '0', '800', '2014-06-04', 'cash', '', 1, 'PR405', 0),
(33, 'SD404', 'salienty', '', '', '5.00', '9.00', '45.00', '2014-04-11', 'ahsan', 'Hostal', '45.00', '45.00', '0.00', '0', '0', '', '0', '45', '2014-05-11', 'cash', '', 1, 'PR406', 0),
(34, 'SD405', 'shugar', '', '', '100.00', '3.00', '300.00', '2014-04-11', 'ahsan', 'Regular', '398.00', '398.00', '0.00', '0', '0', '', '0', '398', '1970-01-01', 'cash', '', 1, 'PR407', 0),
(35, 'SD405', 'pshampo', '', '', '12.00', '4.00', '48.00', '2014-04-11', 'ahsan', 'Regular', '398.00', '398.00', '0.00', '0', '0', '', '0', '398', '1970-01-01', 'cash', '', 2, 'PR407', 0),
(36, 'SD405', 'Cello griper', '', '', '10.00', '5.00', '50.00', '2014-04-11', 'ahsan', 'Regular', '398.00', '398.00', '0.00', '0', '0', '', '0', '398', '1970-01-01', 'cash', '', 3, 'PR407', 0),
(37, 'SD408', 'salienty', '', '', '5.00', '1.00', '5.00', '2014-04-15', 'ahsan', 'Regular', '5.00', '5.00', '0.00', '0', '0', '', '0', '5', '1970-01-01', 'cash', '', 1, 'PR410', 0),
(38, 'SD409', 'shugar', '', '', '100.00', '4.00', '400.00', '2014-04-21', 'ahsan', 'Regular', '400.00', '400.00', '0.00', '0', '0', '', '5', '405', '1970-01-01', 'cash', '', 1, 'PR411', 0),
(39, 'SD409', 'salienty', '', '', '5.00', '1.00', '5.00', '2014-04-21', 'ahsan', 'Regular', '400.00', '400.00', '0.00', '0', '0', '', '5', '405', '1970-01-01', 'cash', '', 2, 'PR411', 0),
(40, 'SD411', 'cello', '', '', '10.00', '1.00', '10.00', '2014-05-09', 'ahsan', 'Regular', '10.00', '10.00', '0.00', '0', '0', '', '0', '10', '1970-01-01', 'cash', '', 1, 'PR413', 0),
(41, 'SD412', 'salienty', '', '', '5.00', '6.00', '30.00', '2014-05-11', 'ahsan', 'Regular', '26.00', '26.00', '0.00', '0', '0', '', '4', '30', '1970-01-01', 'cash', '', 1, 'PR414', 0),
(42, 'SD414', 'salienty', '', '', '5.00', '2.00', '10.00', '2014-05-12', 'ahsan', 'Regular', '10.00', '10.00', '0.00', '0', '0', '', '0', '10', '1970-01-01', 'cash', '', 1, '101', 0),
(43, 'SD415', 'shugar', '', '', '100.00', '2.00', '200.00', '2014-05-12', 'ahsan', 'Regular', '200.00', '200.00', '0.00', '0', '0', '', '0', '200', '1970-01-01', 'other', '', 1, '1212', 0),
(44, 'SD416', 'shugar', '', '', '100.00', '3.00', '300.00', '2014-05-13', 'ahsan', 'Hostal', '300.00', '278.00', '22.00', '0', '0', '', '0', '300', '2014-06-04', 'cheque', '', 1, '102', 0),
(45, 'SD417', 'salienty', '', '', '5.00', '5.00', '25.00', '2014-05-13', 'ahsan', 'Regular', '25.00', '0.00', '25.00', '0', '0', '', '0', '25', '1970-01-01', 'cash', '', 1, '444', 0),
(46, 'SD418', 'salienty', '', '', '5.00', '5.00', '25.00', '2014-05-13', 'ahsan', 'Hostal', '25.00', '0.00', '25.00', '0', '0', '', '0', '25', '1970-01-01', 'cash', '', 1, '666', 0),
(47, 'SD422', 'glass', '', '', '50.00', '1.00', '50.00', '2014-05-14', 'ahsan', 'Regular', '50.00', '50.00', '0.00', '0', '0', '', '0', '50', '1970-01-01', 'cash', '', 1, '111', 0),
(48, 'SD424', '111', '', '', '57.00', '1.00', '57.00', '2014-05-14', 'ahsan', 'Regular', '56.00', '56.00', '0.00', '0', '0', '', '1', '57', '1970-01-01', 'cash', '', 1, '111', 0),
(49, 'SD425', '111', '', '', '57.00', '3.00', '171.00', '2014-05-15', 'ahsan', 'Regular', '486.00', '486.00', '0.00', '0', '0', '', '0', '486', '1970-01-01', 'cash', '', 1, 'PR427', 0),
(50, 'SD425', 'salienty', '', '', '5.00', '3.00', '15.00', '2014-05-15', 'ahsan', 'Regular', '486.00', '486.00', '0.00', '0', '0', '', '0', '486', '1970-01-01', 'cash', '', 2, 'PR427', 0),
(51, 'SD425', 'shugar', '', '', '100.00', '3.00', '300.00', '2014-05-15', 'ahsan', 'Regular', '486.00', '486.00', '0.00', '0', '0', '', '0', '486', '1970-01-01', 'cash', '', 3, 'PR427', 0),
(52, 'SD428', 'pshampo', '', '', '12.00', '34.00', '408.00', '2014-05-18', 'ahsan', 'Regular', '408.00', '408.00', '0.00', '0', '0', '', '0', '408', '1970-01-01', 'cash', '', 1, 'PR430', 0),
(53, 'SD429', 'pshampo', '', '', '12.00', '12.00', '144.00', '2014-05-18', 'ahsan', 'Regular', '144.00', '144.00', '0.00', '0', '0', '', '0', '144', '1970-01-01', 'cash', '', 1, 'PR431', 0),
(54, 'SD430', 'pshampo', '', '', '12.00', '12.00', '144.00', '2014-05-18', 'ahsan', 'Regular', '144.00', '144.00', '0.00', '0', '0', '', '0', '144', '1970-01-01', 'cash', '', 1, 'PR432', 0),
(55, 'SD431', 'shugar', '', '', '100.00', '2.00', '200.00', '2014-05-18', 'ahsan', 'tariq', '200.00', '200.00', '0.00', '0', '0', '', '0', '200', '1970-01-01', 'cash', '', 1, 'PR433', 0),
(56, 'SD432', 'shugar', '', '', '100.00', '2.00', '200.00', '2014-05-18', 'ahsan', 'Regular', '200.00', '200.00', '0.00', '0', '0', '', '0', '200', '1970-01-01', 'cash', '', 1, 'PR434', 0),
(57, 'SD433', 'salienty', '', '', '5.00', '1.00', '5.00', '2014-05-18', 'ahsan', 'Regular', '5.00', '5.00', '0.00', '0', '0', '', '0', '5', '1970-01-01', 'cash', '', 1, 'PR435', 0),
(58, 'SD434', 'salienty', '', '', '5.00', '1.00', '5.00', '2014-05-18', 'ahsan', 'Regular', '5.00', '5.00', '0.00', '0', '0', '', '0', '5', '1970-01-01', 'cash', '', 1, 'PR436', 0),
(59, 'SD436', 'salienty', '', '', '5.00', '1.00', '5.00', '2014-05-19', 'ahsan', 'Regular', '5.00', '5.00', '0.00', '0', '0', '', '0', '5', '1970-01-01', 'cash', '', 1, 'PR438', 0),
(60, 'SD437', 'salienty', '', '', '5.00', '1.00', '5.00', '2014-05-19', 'ahsan', 'Regular', '5.00', '5.00', '0.00', '0', '0', '', '0', '5', '1970-01-01', 'cash', '', 1, 'PR439', 0),
(61, 'SD438', 'salienty', '', '', '5.00', '1.00', '5.00', '2014-05-19', 'ahsan', 'Regular', '5.00', '5.00', '0.00', '0', '0', '', '0', '5', '1970-01-01', 'cash', '', 1, 'PR440', 0),
(62, 'SD439', 'salienty', '', '', '5.00', '1.00', '5.00', '2014-05-19', 'ahsan', 'Regular', '5.00', '5.00', '0.00', '0', '0', '', '0', '5', '1970-01-01', 'cash', '', 1, 'PR441', 0),
(63, 'SD440', 'salienty', '', '', '5.00', '6.00', '30.00', '2014-06-04', 'ahsan', 'Regular', '26.00', '25.00', '1.00', '0', '0', '', '4', '30', '2014-06-11', 'cash', '', 1, 'PR442', 0),
(64, 'SD441', 'salienty', '', '', '5.00', '3.00', '15.00', '2014-06-06', 'ahsan', 'Regular', '14.00', '14.00', '0.00', '0', '0', '', '1', '15', '1970-01-01', 'cash', '', 1, 'PR443', 0),
(65, 'SD442', 'salienty', '', '', '5.00', '2.00', '10.00', '2014-06-11', 'ahsan', 'Regular', '200.00', '200.00', '0.00', '0', '0', '', '10', '210', '1970-01-01', 'cash', '', 1, 'PR444', 0),
(66, 'SD442', 'shugar', '', '', '100.00', '2.00', '200.00', '2014-06-11', 'ahsan', 'Regular', '200.00', '200.00', '0.00', '0', '0', '', '10', '210', '1970-01-01', 'cash', '', 2, 'PR444', 0),
(67, 'SD445', 'usb', '', '', '400.00', '1.00', '400.00', '2014-06-11', 'ahsan', 'Regular', '400.00', '400.00', '0.00', '0', '0', '', '0', '400', '1970-01-01', 'cash', '', 1, 'PR447', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stock_user`
--

CREATE TABLE `stock_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_user`
--

INSERT INTO `stock_user` (`id`, `username`, `password`, `user_type`, `answer`) VALUES
(1, 'ahsan', 'ahsan', 'admin', 'awarapan');

-- --------------------------------------------------------

--
-- Table structure for table `store_details`
--

CREATE TABLE `store_details` (
  `name` varchar(100) NOT NULL,
  `log` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `web` varchar(100) NOT NULL,
  `pin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store_details`
--

INSERT INTO `store_details` (`name`, `log`, `type`, `address`, `place`, `city`, `phone`, `email`, `web`, `pin`) VALUES
('Hafiez Super Store', 'Hafiz Super Store.png', 'image/png', 'Bahawalchowk', 'Near Special Branch Police', 'Bahawalpur', '03453552884', 'ahsnariaz37@yahoo.com', 'Hafiez super Store', '60080'),
('Hafiez Super Store', 'Hafiz Super Store.png', 'image/png', 'Bahawalchowk', 'Near Special Branch Police', 'Bahawalpur', '03453552884', 'ahsnariaz37@yahoo.com', 'Hafiez super Store', '60080');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_details`
--

CREATE TABLE `supplier_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `supplier_name` varchar(200) NOT NULL,
  `supplier_address` varchar(500) NOT NULL,
  `supplier_contact1` varchar(100) NOT NULL,
  `supplier_contact2` varchar(100) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_details`
--

INSERT INTO `supplier_details` (`id`, `supplier_name`, `supplier_address`, `supplier_contact1`, `supplier_contact2`, `balance`) VALUES
(38, 'Monish', '#124,2nd sector,hsr layout,bangalore', '7787876786', '9539126325', 0),
(39, 'kiran', '#126,2nd sector,hsr layout,bangalore', '7787876786', '9539126325', 0),
(41, 'libin', '#126,2nd sector,hsr layout,bangalore', '7787876786', '9539126325', 0),
(42, 'sadham', '#126,2nd sector,hsr layout bangalore', '7787876786', '9539126325', 0),
(44, 'arun', '#126,2nd sector,hsr layout bangalore', '7787876786', '9539126325', 0),
(45, 'sachu', '#126,2nd sector,hsr layout bangalore', '7787876786', '9539126325', 0),
(46, 'hello', '', '', '', 0),
(47, 'ttt', '', '', '', 0),
(48, 'ahsan', '', '', '', 0),
(49, 'seee', '', '', '', 0),
(50, 'arjun ', '', '', '', 16200),
(51, 'china', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(50) NOT NULL,
  `customer` varchar(250) NOT NULL,
  `supplier` varchar(250) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `due` datetime NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `rid` varchar(120) NOT NULL,
  `receiptid` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `type`, `customer`, `supplier`, `subtotal`, `payment`, `balance`, `due`, `date`, `rid`, `receiptid`) VALUES
(16, 'entry', '', '', '1131.00', '70.00', '61.00', '2014-02-15 00:00:00', '2014-02-15 15:54:19', 'PR274', ''),
(17, 'sales', 'Regular ', '', '50.00', '8.00', '42.00', '2014-02-22 00:00:00', '2014-02-22 06:42:59', 'SD291', 'RCPT16'),
(18, 'sales', 'tariq ', '', '108.00', '100.00', '8.00', '2014-04-09 00:00:00', '2014-04-09 06:12:14', 'SD399', 'RCPT17'),
(19, 'sales', 'tariq ', '', '108.00', '8.00', '0.00', '2014-05-11 00:00:00', '2014-05-11 05:01:24', 'SD399', 'RCPT18'),
(20, 'entry', '', '', '1131.00', '61.00', '0.00', '2014-05-11 00:00:00', '2014-05-11 05:02:06', 'PR274', ''),
(21, 'sales', 'Hostal ', '', '45.00', '36.00', '0.00', '2014-05-11 00:00:00', '2014-05-11 05:02:39', 'SD404', 'RCPT20'),
(22, 'sales', 'Hostal ', '', '300.00', '78.00', '222.00', '2014-05-13 00:00:00', '2014-05-13 11:24:59', 'SD416', 'RCPT21'),
(23, 'entry', '', '', '18009.00', '10.00', '16190.00', '2014-06-04 00:00:00', '2014-06-04 09:50:58', 'PR3', ''),
(24, 'entry', '', '', '18009.00', '10.00', '16180.00', '2014-06-04 00:00:00', '2014-06-04 09:51:32', 'PR3', ''),
(25, 'sales', 'Hostal ', '', '300.00', '200.00', '22.00', '2014-06-04 00:00:00', '2014-06-04 09:52:40', 'SD416', 'RCPT24'),
(26, 'sales', 'Hostal ', '', '800.00', '10.00', '790.00', '2014-06-04 00:00:00', '2014-06-04 10:12:08', 'SD403', 'RCPT25'),
(27, 'sales', 'Hostal ', '', '800.00', '10.00', '780.00', '2014-06-04 00:00:00', '2014-06-04 10:12:34', 'SD403', 'RCPT26'),
(28, 'sales', 'Hostal ', '', '800.00', '0.00', '780.00', '2014-06-04 00:00:00', '2014-06-04 10:12:41', 'SD403', 'RCPT27'),
(29, 'sales', 'Hostal ', '', '800.00', '20.00', '760.00', '2014-06-04 00:00:00', '2014-06-04 10:13:00', 'SD403', 'RCPT28'),
(30, 'sales', 'Hostal ', '', '800.00', '23.00', '737.00', '2014-06-04 00:00:00', '2014-06-04 10:13:34', 'SD403', 'RCPT29'),
(31, 'sales', 'Hostal ', '', '800.00', '0.00', '737.00', '2014-06-04 00:00:00', '2014-06-04 10:13:38', 'SD403', 'RCPT30'),
(32, 'entry', '', '', '6993.00', '22.00', '38.00', '2014-06-04 00:00:00', '2014-06-04 10:14:01', 'PR362', ''),
(33, 'sales', 'Hostal ', '', '800.00', '2.00', '735.00', '2014-06-04 00:00:00', '2014-06-04 10:14:27', 'SD403', 'RCPT32'),
(34, 'sales', 'Regular ', '', '26.00', '3.00', '3.00', '2014-06-04 00:00:00', '2014-06-04 10:39:48', 'SD440', 'RCPT33'),
(35, 'sales', 'Regular ', '', '26.00', '2.00', '1.00', '2014-06-11 00:00:00', '2014-06-11 04:04:29', 'SD440', 'RCPT34');

-- --------------------------------------------------------

--
-- Table structure for table `uom_details`
--

CREATE TABLE `uom_details` (
  `id` int(10) UNSIGNED ZEROFILL NOT NULL,
  `name` varchar(120) NOT NULL,
  `spec` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uom_details`
--

INSERT INTO `uom_details` (`id`, `name`, `spec`) VALUES
(0000000006, 'UOM1', 'UOM1 Specification'),
(0000000007, 'UOM2', 'UOM2 Specification'),
(0000000008, 'UOM3', 'UOM3 Specification'),
(0000000009, 'UOM4', 'UOM4 Specification');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_details`
--
ALTER TABLE `category_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_avail`
--
ALTER TABLE `stock_avail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_details`
--
ALTER TABLE `stock_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_entries`
--
ALTER TABLE `stock_entries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_sales`
--
ALTER TABLE `stock_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_user`
--
ALTER TABLE `stock_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier_details`
--
ALTER TABLE `supplier_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uom_details`
--
ALTER TABLE `uom_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_details`
--
ALTER TABLE `category_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `stock_avail`
--
ALTER TABLE `stock_avail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `stock_details`
--
ALTER TABLE `stock_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `stock_entries`
--
ALTER TABLE `stock_entries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=446;

--
-- AUTO_INCREMENT for table `stock_sales`
--
ALTER TABLE `stock_sales`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `stock_user`
--
ALTER TABLE `stock_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supplier_details`
--
ALTER TABLE `supplier_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `uom_details`
--
ALTER TABLE `uom_details`
  MODIFY `id` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
