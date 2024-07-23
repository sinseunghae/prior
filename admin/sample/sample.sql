-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2022 at 06:03 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(50) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `branch_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `emp_name`, `branch_id`) VALUES
(1, 'juan dela cruz', 1),
(2, 'christina legazpi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(50) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `prod_price` int(100) NOT NULL,
  `prod_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `prod_name`, `prod_price`, `prod_category`) VALUES
(1, 'curtain rod', 150, 'curtain'),
(2, 'shorts', 30, 'clothes'),
(3, 'ruffles', 200, 'curtain'),
(4, 'blouse', 50, 'clothes'),
(5, 'pajama', 90, 'clothes');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `invoice_id` int(50) NOT NULL,
  `sales_date` date NOT NULL,
  `product_id` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `total_amount` int(100) NOT NULL,
  `branch_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`invoice_id`, `sales_date`, `product_id`, `quantity`, `total_amount`, `branch_id`) VALUES
(1, '2022-10-30', 1, 2, 300, 1),
(2, '2022-10-30', 3, 10, 2000, 1),
(3, '2022-10-30', 4, 3, 150, 1),
(4, '2022-10-30', 2, 8, 240, 1),
(5, '2022-10-30', 2, 5, 150, 1),
(6, '2022-10-30', 5, 2, 180, 1),
(7, '2022-10-30', 1, 3, 450, 1),
(8, '2022-10-30', 4, 5, 250, 1),
(8, '2022-10-01', 2, 2, 60, 2),
(9, '2022-10-02', 5, 2, 180, 2),
(10, '2022-10-03', 1, 5, 750, 2),
(11, '2022-10-04', 4, 3, 150, 2),
(12, '2022-10-05', 4, 3, 150, 2),
(14, '2022-10-24', 2, 2, 60, 1),
(15, '2022-10-25', 1, 3, 450, 1),
(16, '2022-10-26', 4, 4, 200, 1),
(17, '2022-10-28', 5, 2, 180, 1),
(18, '2022-10-27', 5, 6, 540, 1),
(19, '2022-10-29', 3, 7, 1400, 1),
(20, '2022-10-24', 2, 8, 240, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
