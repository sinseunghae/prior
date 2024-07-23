-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 05:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

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
(1, 'Eden', 'eden', 'fortnite'),
(2, 'zich', 'zich', 'harry12');

-- --------------------------------------------------------

--
-- Table structure for table `branch1`
--

CREATE TABLE `branch1` (
  `pro_id` bigint(255) NOT NULL,
  `category` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `status` varchar(60) NOT NULL,
  `barcode` bigint(20) NOT NULL,
  `variations` varchar(20) NOT NULL,
  `sizes` varchar(20) NOT NULL,
  `branch_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch1`
--

INSERT INTO `branch1` (`pro_id`, `category`, `product_name`, `quantity`, `price`, `status`, `barcode`, `variations`, `sizes`, `branch_id`) VALUES
(1, 'Essential goods', 'KF94 (kids)', 30, 25, '', 51231252356, 'N/A', 'N/A', 1),
(3, 'Curtain', 'Ring Brocade', 5, 550, '', 231251232, 'N/A', 'N/A', 1);

-- --------------------------------------------------------

--
-- Table structure for table `branch2`
--

CREATE TABLE `branch2` (
  `pro_id` bigint(255) NOT NULL,
  `category` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `status` varchar(60) NOT NULL,
  `barcode` bigint(20) NOT NULL,
  `variations` varchar(20) NOT NULL,
  `sizes` varchar(20) NOT NULL,
  `branch_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch2`
--

INSERT INTO `branch2` (`pro_id`, `category`, `product_name`, `quantity`, `price`, `status`, `barcode`, `variations`, `sizes`, `branch_id`) VALUES
(1, 'Essential goods', 'KF94 (kids)', 10, 25, '', 51231252356, 'N/A', 'N/A', 2),
(2, 'Curtain', 'Sala Set', 5, 400, '', 3231243125, 'N/A', 'N/A', 2);

-- --------------------------------------------------------

--
-- Table structure for table `branch3`
--

CREATE TABLE `branch3` (
  `pro_id` bigint(255) NOT NULL,
  `category` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `status` varchar(60) NOT NULL,
  `barcode` bigint(20) NOT NULL,
  `variations` varchar(20) NOT NULL,
  `sizes` varchar(20) NOT NULL,
  `branch_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch3`
--

INSERT INTO `branch3` (`pro_id`, `category`, `product_name`, `quantity`, `price`, `status`, `barcode`, `variations`, `sizes`, `branch_id`) VALUES
(1, 'Essential goods', 'KF94 (kids)', 5, 25, '', 51231252356, 'N/A', 'N/A', 3),
(2, 'Essential goods', 'Paper Bag', 7, 40, '', 5123124512314, 'N/A', 'Large', 3),
(4, 'Curtain', 'Ring Brocade', 2, 550, '', 231251232, 'N/A', 'N/A', 3);

-- --------------------------------------------------------

--
-- Table structure for table `branch4`
--

CREATE TABLE `branch4` (
  `pro_id` bigint(255) NOT NULL,
  `category` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `status` varchar(60) NOT NULL,
  `barcode` bigint(20) NOT NULL,
  `variations` varchar(20) NOT NULL,
  `sizes` varchar(20) NOT NULL,
  `branch_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch4`
--

INSERT INTO `branch4` (`pro_id`, `category`, `product_name`, `quantity`, `price`, `status`, `barcode`, `variations`, `sizes`, `branch_id`) VALUES
(1, 'Essential goods', 'KF94 (kids)', 22, 25, '', 51231252356, 'N/A', 'N/A', 4),
(3, 'Curtain', 'Sala Set', 8, 400, '', 3231243125, 'N/A', 'N/A', 4),
(11, 'Essential goods', 'Tissue', 2, 20, '', 516123125123, 'N/A', 'N/A', 4);

-- --------------------------------------------------------

--
-- Table structure for table `damage`
--

CREATE TABLE `damage` (
  `damage_id` int(255) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `variation` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `quantity` int(255) NOT NULL,
  `status` varchar(60) NOT NULL
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
  `Branch_ID` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_ID`, `employee_name`, `employee_username`, `employee_password`, `email`, `contact_Number`, `Branch_ID`) VALUES
(4, 'zich', 'zich', 'fortnite2', 'zich@gmail.com', 123456, 1),
(5, 'Ezekiel Lledor', 'zich', 'fortnite', 'ezekiellledor@gmail.com', 123, 2),
(7, 'try', 'try', 'try', ' try@gmail.com', 12345, 4);

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
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `reorder_point` int(11) NOT NULL,
  `product_variations` varchar(255) NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `barcode` int(11) NOT NULL,
  `branch_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`product_id`, `product_name`, `product_price`, `quantity`, `reorder_point`, `product_variations`, `product_size`, `product_category`, `barcode`, `branch_id`) VALUES
(16, 'headband', 40, 20, 10, 'white', 'N/A', 'accessories', 2147483647, 0),
(17, 'blinds', 200, 78, 20, 'blue', 'N/A', 'curtain', 132341523, 0),
(18, 'toy aircraft', 151, 0, 5, 'N/A', 'Small', 'toys', 2147483647, 0),
(24, 'Ring Brocade', 550, 2, 5, 'N/A', 'N/A', 'Curtain', 231251232, 2),
(28, 'Tissue', 20, 0, 30, 'N/A', 'N/A', 'Essential goods', 2147483647, 0),
(29, 'Tissue', 20, 0, 30, 'N/A', 'N/A', 'Essential goods', 2147483647, 0),
(30, 'Ring Brocade', 550, 0, 5, 'N/A', 'N/A', 'Curtain', 231251232, 0);

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
  `product_price` int(255) NOT NULL,
  `reorder_point` int(255) NOT NULL,
  `product_variations` varchar(20) NOT NULL,
  `product_size` varchar(20) NOT NULL,
  `product_category` varchar(20) NOT NULL,
  `barcode` bigint(20) NOT NULL,
  `supplier_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `reorder_point`, `product_variations`, `product_size`, `product_category`, `barcode`, `supplier_name`) VALUES
(32, 'Ring Brocade', 550, 5, 'N/A', 'N/A', 'Curtain', 231251232, 'rrin'),
(33, 'Sala Set', 400, 5, 'N/A', 'N/A', 'Curtain', 3231243125, '33'),
(34, 'Tissue', 20, 30, 'N/A', 'N/A', 'Essential goods', 516123125123, 'rrin'),
(35, 'KF94 (kids)', 25, 15, 'N/A', 'N/A', 'Essential goods', 51231252356, 'rrin'),
(37, 'Paper Bag', 40, 10, 'N/A', 'Large', 'Essential goods', 5123124512314, '21');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `purchase_id` int(255) NOT NULL,
  `barcode` bigint(20) NOT NULL,
  `purchase_date` date NOT NULL DEFAULT current_timestamp(),
  `purchase_quantity` int(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `supplier_name` varchar(60) NOT NULL,
  `branch_id` int(5) NOT NULL,
  `status` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`purchase_id`, `barcode`, `purchase_date`, `purchase_quantity`, `product_price`, `supplier_name`, `branch_id`, `status`) VALUES
(17, 3231243125, '2022-10-29', 1, 550, '33', 4, 2),
(18, 231251232, '2022-10-27', 2, 400, 'rrin', 3, 2),
(19, 3231243125, '2022-10-27', 1, 550, '33', 3, 2),
(20, 3231243125, '2022-10-27', 2, 1100, '33', 3, 2),
(21, 3231243125, '2022-10-28', 1, 550, '33', 1, 2),
(22, 516123125123, '2022-10-28', 1, 10, 'rrin', 1, 2),
(23, 516123125123, '2022-10-28', 2, 20, 'rrin', 2, 2),
(24, 3231243125, '2022-10-28', 1, 550, '33', 4, 2),
(25, 516123125123, '2022-10-28', 2, 20, 'rrin', 4, 2);

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
-- Table structure for table `sales_activity`
--

CREATE TABLE `sales_activity` (
  `invoice_ID` varchar(255) NOT NULL,
  `sales_date` date NOT NULL,
  `sales_status` varchar(60) NOT NULL,
  `quantity` int(60) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `total_amount` int(255) NOT NULL,
  `product_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales_dummy`
--

CREATE TABLE `sales_dummy` (
  `transaction_id` bigint(255) NOT NULL,
  `invoice` varchar(60) NOT NULL,
  `barcode` bigint(20) NOT NULL,
  `quantity` int(20) NOT NULL,
  `amount` int(255) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `variations` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `purchase_id` int(255) NOT NULL,
  `barcode` bigint(20) NOT NULL,
  `purchase_date` date NOT NULL DEFAULT current_timestamp(),
  `purchase_quantity` int(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `supplier_name` varchar(60) NOT NULL,
  `branch_id` int(5) NOT NULL,
  `status` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`purchase_id`, `barcode`, `purchase_date`, `purchase_quantity`, `product_price`, `supplier_name`, `branch_id`, `status`) VALUES
(17, 3231243125, '2022-10-29', 1, 550, '33', 4, 2),
(18, 231251232, '2022-10-27', 2, 400, 'rrin', 3, 2),
(19, 3231243125, '2022-10-27', 1, 550, '33', 3, 2),
(20, 3231243125, '2022-10-27', 2, 1100, '33', 3, 2),
(21, 3231243125, '2022-10-28', 1, 550, '33', 1, 2),
(22, 516123125123, '2022-10-28', 1, 10, 'rrin', 1, 2),
(23, 516123125123, '2022-10-28', 2, 20, 'rrin', 2, 2),
(24, 3231243125, '2022-10-28', 1, 550, '33', 4, 2),
(25, 516123125123, '2022-10-28', 2, 20, 'rrin', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_ID` int(10) NOT NULL,
  `supplier_name` varchar(60) NOT NULL,
  `supplier_contact_number` bigint(11) NOT NULL,
  `company` varchar(60) NOT NULL,
  `address` varchar(70) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_ID`, `supplier_name`, `supplier_contact_number`, `company`, `address`, `email`) VALUES
(17, 'rrin', 923141234, 'gregory company', '235623', 'gregory@gmail.com'),
(21, '33', 12, '14', '65', '');

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
  ADD PRIMARY KEY (`pro_id`),
  ADD UNIQUE KEY `barcode` (`barcode`);

--
-- Indexes for table `branch2`
--
ALTER TABLE `branch2`
  ADD PRIMARY KEY (`pro_id`),
  ADD UNIQUE KEY `barcode` (`barcode`);

--
-- Indexes for table `branch3`
--
ALTER TABLE `branch3`
  ADD PRIMARY KEY (`pro_id`),
  ADD UNIQUE KEY `barcode` (`barcode`);

--
-- Indexes for table `branch4`
--
ALTER TABLE `branch4`
  ADD PRIMARY KEY (`pro_id`),
  ADD UNIQUE KEY `barcode` (`barcode`);

--
-- Indexes for table `damage`
--
ALTER TABLE `damage`
  ADD PRIMARY KEY (`damage_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_ID`);

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
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`product_id`);

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
  ADD UNIQUE KEY `barcode` (`barcode`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_ID`);

--
-- Indexes for table `sales_activity`
--
ALTER TABLE `sales_activity`
  ADD KEY `invoice_ID` (`invoice_ID`);

--
-- Indexes for table `sales_dummy`
--
ALTER TABLE `sales_dummy`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `branch1`
--
ALTER TABLE `branch1`
  MODIFY `pro_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `branch2`
--
ALTER TABLE `branch2`
  MODIFY `pro_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `branch3`
--
ALTER TABLE `branch3`
  MODIFY `pro_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `branch4`
--
ALTER TABLE `branch4`
  MODIFY `pro_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `damage`
--
ALTER TABLE `damage`
  MODIFY `damage_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_ID` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
  MODIFY `product_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `purchase_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sales_dummy`
--
ALTER TABLE `sales_dummy`
  MODIFY `transaction_id` bigint(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `purchase_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`guest_ID`) REFERENCES `guest` (`guest_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
