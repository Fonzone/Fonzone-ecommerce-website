-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2020 at 11:41 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fonzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(20) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(20) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `total_price` varchar(20) NOT NULL,
  `product_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(300) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `mobile`, `address`, `password`) VALUES
(1, 'Qwerty', 'qwerty@gmail.com', '9895012345', 'Qwerty, Kannur, Kerala', 'qwqw'),
(2, 'Abcd', 'abcd@gmail.com', '9898', 'ab, ekm', 'abab'),
(3, 'Arun', 'arun@gmail.com', '1234567890', 'Arun House, Knr', 'arar');

-- --------------------------------------------------------

--
-- Table structure for table `latest_products`
--

CREATE TABLE `latest_products` (
  `id` int(20) NOT NULL,
  `product_name_home` varchar(100) NOT NULL,
  `product_price_new` varchar(20) NOT NULL,
  `product_price_old` varchar(20) NOT NULL,
  `product_image_home1` varchar(100) NOT NULL,
  `product_image_home2` varchar(100) NOT NULL,
  `product_code` varchar(20) NOT NULL,
  `product_name_single` varchar(100) NOT NULL,
  `product_image_single1` varchar(100) NOT NULL,
  `product_image_single2` varchar(100) NOT NULL,
  `product_image_single3` varchar(100) NOT NULL,
  `product_image_single4` varchar(100) NOT NULL,
  `description` varchar(700) NOT NULL,
  `highlights1` varchar(100) NOT NULL,
  `highlights2` varchar(100) NOT NULL,
  `highlights3` varchar(100) NOT NULL,
  `highlights4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latest_products`
--

INSERT INTO `latest_products` (`id`, `product_name_home`, `product_price_new`, `product_price_old`, `product_image_home1`, `product_image_home2`, `product_code`, `product_name_single`, `product_image_single1`, `product_image_single2`, `product_image_single3`, `product_image_single4`, `description`, `highlights1`, `highlights2`, `highlights3`, `highlights4`) VALUES
(1, 'Redmi Note 9 Pro Max', '16999', '17999', 'assets/images/redmi_note_9_pro_max1.jpg', 'assets/images/redmi_note_9_pro_max2.jpg', 'p1001', 'Redmi Note 9 Pro Max (Glacier White, 64 GB) (6 GB RAM)', 'assets/images/single/redmi-note-9-pro-max-1.jpg', 'assets/images/single/redmi-note-9-pro-max-2.jpg', 'assets/images/single/redmi-note-9-pro-max-3.jpg', 'assets/images/single/redmi-note-9-pro-max-4.jpg', '64MP rear camera with ultra-wide, super macro, portrait, night mode, 960fps slowmotion, AI scene recognition, pro color, HDR, pro mode | 32MP front camera 16.9418 centimeters (6.67-inch) FHD+ LCD full screen dot display multi-touch capacitive touchscreen with 2400 x 1080 pixels resolution, 400 ppi pixel density and 20:9 aspect ratio | 2.5D curved glass Android v10 operating system with 2.3GHz Qualcomm Snapdragon 720G with 8nm octa core processor Memory.', '6 GB RAM | 64 GB ROM', '16.94 Cm (6.67 Inch) Display', '64MP Rear Camera', '5020 MAh Battery'),
(2, 'Realme Narzo 10A', '8999', '9999', 'assets/images/realme-narzo-10a-1.jpg', 'assets/images/realme-narzo-10a-2.jpg', 'p1002', 'Realme Narzo 10A (Blue, 32 GB) (3 GB RAM)', 'assets/images/single/realme-narzo-10a-1.jpg', 'assets/images/single/realme-narzo-10a-2.jpg', 'assets/images/single/realme-narzo-10a-3.jpg', 'assets/images/single/realme-narzo-10a-4.jpg', 'Realme Narzo 10A Features A Massive 5000-MAh Battery. This Phone Comes With Reverse Charging, And Can Even Be Used As A Power Bank To Charge Other Devices. Large 16.5-Cm (6.5) HD+ Mini-Drop Fullscreen Offers A Large Field Of Vision, Ensuring That You Get An Immersive Visual Experience.', '3 GB RAM | 32 GB ROM', '16.56 Cm (6.52 Inch) HD+ Display', '12MP + 2MP + 2MP | 5MP Front Camera', '5000 MAh Lithium-Ion Battery'),
(3, 'Oppo A5 2020', '11499', '12499', 'assets/images/oppo_a5_2020_1.jpg', 'assets/images/oppo_a5_2020_2.jpg', 'p1003', 'OPPO A5 2020 (Mirror Black, 64 GB) (3 GB RAM)', 'assets/images/single/oppo-a5-2020-1.jpg', 'assets/images/single/oppo-a5-2020-2.jpg', 'assets/images/single/oppo-a5-2020-3.jpg', 'assets/images/single/oppo-a5-2020-4.jpg', 'A Phone That Offers Style And Durability - The Oppo A5 2020 Is An Ergonomically Designed Phone That Is Loaded With Features. You Can Click Spectacular Pictures With The 12 MP Rear Camera And The Ultra Wide 119° Rear Lens. Click Cute Selfies Whenever You Feel Like With The 8 MP Front Camera.', '3 GB RAM | 64 GB ROM', '16.51 Cm (6.5 Inch) Display', '12MP + 8MP + 2MP + 2MP | 8MP Front Camera', '5000 MAh Battery'),
(4, 'Apple iPhone 11 Pro Max', '114400', '115400', 'assets/images/iphone-11-pro-max1.jpg', 'assets/images/iphone-11-pro-max2.jpg', 'p1004', 'Apple IPhone 11 Pro Max (Space Grey, 64 GB)', 'assets/images/single/iphone-11-pro-max-1.jpg', 'assets/images/single/iphone-11-pro-max-2.jpg', 'assets/images/single/iphone-11-pro-max-3.jpg', 'assets/images/single/iphone-11-pro-max-4.jpg', 'A Phone That Offers Style And Durability - The Oppo A5 2020 Is An Ergonomically Designed Phone That Is Loaded With Features. You Can Click Spectacular Pictures With The 12 MP Rear Camera And The Ultra Wide 119° Rear Lens. Click Cute Selfies Whenever You Feel Like With The 8 MP Front Camera.', '64 GB ROM', '16.51 Cm (6.5 Inch) Super Retina XDR Display', '12MP + 12MP + 12MP | 12MP Front Camera', 'A13 Bionic Chip Processor'),
(5, 'Samsung Galaxy M31', '18999', '19999', 'assets/images/samsung-galaxy-m31-1.jpg', 'assets/images/samsung-galaxy-m31-2.jpg', 'p1005', 'Samsung Galaxy M31 (Ocean Blue, 64 GB) (6 GB RAM)', 'assets/images/single/samsung-galaxy-m31-1.jpg', 'assets/images/single/samsung-galaxy-m31-2.jpg', 'assets/images/single/samsung-galaxy-m31-3.jpg', 'assets/images/single/samsung-galaxy-m31-4.jpg', '64MP + 8MP + 5MP + 5MP rear camera | 32MP front facing camera 16.21 centimeters (6.4-inch) FHD+ capacitive touchscreen with 2340 x 1080 pixels resolution, 404 ppi pixel density and 16M color support Memory, Storage & SIM: 6GB RAM | 64GB storage expandable up to 512GB | Dual SIM with dual standby (4G+4G) Android v10.0 operating system with 2.3GHz + 1.7GHz Exynos 9611 Octa core processor.', '6 GB RAM | 64 GB ROM', '16.26 Cm (6.4 Inch) Full HD+ Display', '64MP + 8MP + 5MP + 5MP | 32MP Front Camera', '6000 MAh Battery'),
(6, 'Realme C15', '9999', '10999', 'assets/images/realme-c15-1.jpg', 'assets/images/realme-c15-2.jpg', 'p1006', '', '', '', '', '', '', '', '', '', ''),
(7, 'Redmi K20 Pro', '24999', '25999', 'assets/images/redmi-k20-pro-1.jpg', 'assets/images/redmi-k20-pro-2.jpg', 'p1007', '', '', '', '', '', '', '', '', '', ''),
(8, 'Honor 9X', '15999', '16999', 'assets/images/honor-9x-1.jpg', 'assets/images/honor-9x-2.jpg', 'p1008', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(300) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(500) NOT NULL,
  `grand_total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `mobile`, `address`, `pmode`, `products`, `grand_total`) VALUES
(1, 'Qwerty', 'qwerty@gmail.com', '9895012345', 'Qwerty, Kannur, Kerala', 'COD', 'Realme C15(2), Oppo A5 2020(2)', '42996'),
(2, 'Qwerty', 'qwerty@gmail.com', '9895012345', 'Qwerty, Kannur, Kerala', 'COD', 'Realme C15(2), Oppo A5 2020(2)', '42996'),
(3, 'Abcd', 'abcd@gmail.com', '98959895', 'Abcd, Kochi, Ekm', 'COD', 'Realme C15(2), Oppo A5 2020(2), Redmi Note 9 Pro Max(1), Realme Narzo 10A(1), Apple iPhone 11 Pro Max(1)', '183394'),
(4, 'Abcd', 'abcd@gmail.com', '9898', 'ab, ekm', 'Net Banking', 'Realme C15(2), Oppo A5 2020(2), Redmi Note 9 Pro Max(1), Realme Narzo 10A(1), Apple iPhone 11 Pro Max(1)', '183394');

-- --------------------------------------------------------

--
-- Table structure for table `top_products`
--

CREATE TABLE `top_products` (
  `id` int(20) NOT NULL,
  `product_name_home` varchar(100) NOT NULL,
  `product_price_new` varchar(20) NOT NULL,
  `product_price_old` varchar(20) NOT NULL,
  `product_image_home1` varchar(100) NOT NULL,
  `product_image_home2` varchar(100) NOT NULL,
  `product_code` varchar(20) NOT NULL,
  `product_name_single` varchar(100) NOT NULL,
  `product_image_single1` varchar(100) NOT NULL,
  `product_image_single2` varchar(100) NOT NULL,
  `product_image_single3` varchar(100) NOT NULL,
  `product_image_single4` varchar(100) NOT NULL,
  `description` varchar(700) NOT NULL,
  `highlights1` varchar(100) NOT NULL,
  `highlights2` varchar(100) NOT NULL,
  `highlights3` varchar(100) NOT NULL,
  `highlights4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `top_products`
--

INSERT INTO `top_products` (`id`, `product_name_home`, `product_price_new`, `product_price_old`, `product_image_home1`, `product_image_home2`, `product_code`, `product_name_single`, `product_image_single1`, `product_image_single2`, `product_image_single3`, `product_image_single4`, `description`, `highlights1`, `highlights2`, `highlights3`, `highlights4`) VALUES
(9, 'Redmi Note 9 Pro', '13999', '14999', 'assets/images/redmi-note-9-pro-1.jpg', 'assets/images/redmi-note-9-pro-2.jpg', 'p1009', '', '', '', '', '', '', '', '', '', ''),
(10, 'Realme Narzo 10', '11999', '12999', 'assets/images/realme-narzo-10-1.jpg', 'assets/images/realme-narzo-10-2.jpg', 'p1010', '', '', '', '', '', '', '', '', '', ''),
(11, 'Samsung Galaxy A21s', '14999', '15999', 'assets/images/samsung-galaxy-a21s-1.jpg', 'assets/images/samsung-galaxy-a21s-2.jpg', 'p1011', '', '', '', '', '', '', '', '', '', ''),
(12, 'Oppo A5s', '10990', '11990', 'assets/images/oppo-a5s-1.jpg', 'assets/images/oppo-a5s-2.jpg', 'p1012', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_products`
--
ALTER TABLE `latest_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_products`
--
ALTER TABLE `top_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `latest_products`
--
ALTER TABLE `latest_products`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `top_products`
--
ALTER TABLE `top_products`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
