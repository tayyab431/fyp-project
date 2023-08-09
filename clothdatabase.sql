-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Jul 29, 2023 at 05:07 PM
-- Server version: 8.0.33
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('tayyabraja713@gmail.com', '12345'),
('tayyabraja713@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int NOT NULL,
  `sender_id` int DEFAULT NULL,
  `reciever_id` int DEFAULT NULL,
  `message_text` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `is_offer` int DEFAULT NULL,
  `price` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `room_id` int DEFAULT NULL,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `sender_id`, `reciever_id`, `message_text`, `attachment`, `is_offer`, `price`, `product_id`, `room_id`, `status`) VALUES
(1, 1, 22, 'hi', '', 0, 0, 0, 8, NULL),
(2, 22, 1, 'how are you sir', '', 0, 0, 0, 8, NULL),
(3, 1, 22, 'i am fine , thanks', '', 0, 0, 0, 8, NULL),
(4, 22, 1, 'so, whatsup!', '', 0, 0, 0, 8, NULL),
(6, 1, 22, 'Offer', '', 1, 500, 24, 8, 1),
(24, 22, 1, 'hi', '', 0, 0, 0, 8, NULL),
(25, 22, 1, 'send me another offer', '', 0, 0, 0, 8, NULL),
(28, 1, 1, 'Offer', '', 1, 123, 24, 9, NULL),
(29, 1, 22, 'Offer', '', 1, 123, 24, 8, NULL),
(30, 1, 22, 'Offer', '', 1, 123, 24, 8, NULL),
(31, 1, 22, 'Offer', '', 1, 123, 24, 8, NULL),
(32, 1, 22, 'Offer', '', 1, 123, 24, 8, NULL),
(33, 1, 22, 'Offer', '', 1, 123, 24, 8, NULL),
(35, 1, 1, 'Offer', '', 1, 45, 24, 9, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chat_room`
--

CREATE TABLE `chat_room` (
  `id` int NOT NULL,
  `u1` int DEFAULT NULL,
  `u2` int DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat_room`
--

INSERT INTO `chat_room` (`id`, `u1`, `u2`, `date`, `status`) VALUES
(8, 1, 22, '2023-07-27 00:00:00', 1),
(9, 1, 1, '2023-07-28 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` int NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email_or_phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cnic` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `languages` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `unit_name` text COLLATE utf8mb4_general_ci NOT NULL,
  `unit_address` text COLLATE utf8mb4_general_ci NOT NULL,
  `registration_no` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `link_account` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `acc_password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `conf_password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `hashed_password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_role` varchar(50) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'manufacturer',
  `created_at` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `first_name`, `last_name`, `username`, `email_or_phone`, `cnic`, `languages`, `unit_name`, `unit_address`, `registration_no`, `link_account`, `acc_password`, `password`, `conf_password`, `hashed_password`, `user_role`, `created_at`) VALUES
(1, 'abuzar', 'khan', 'abuzar12', 'abuzar@gmail.com', '29902-1232345-6', 'english,urdu', 'style store', 'PIA society', '14374385326', 'http//facebook.com', '123', '123', '$2y$10$QcesGtm9iCO3fNOw0bWAYedlZVGQC/SjS8mb6EsWaUT8x178GxWgS', '$2y$10$yhOFNDJKcjAa3IWEurETkeaXGbJz74jQv6T614JHmkH5m4AwVwKTS', 'manufacturer', '2023-07-28 15:31:27.761085');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_profile`
--

CREATE TABLE `manufacturer_profile` (
  `manufacturer_id` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `description` text,
  `supply` varchar(50) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `language` varchar(50) DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `category_type` varchar(50) DEFAULT NULL,
  `profile_picture` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `manufacturer_profile`
--

INSERT INTO `manufacturer_profile` (`manufacturer_id`, `name`, `surname`, `description`, `supply`, `location`, `language`, `joining_date`, `address`, `message`, `email`, `category_type`, `profile_picture`) VALUES
(1, 'Raja ', 'tayyab', 'myyyy', 'tshirt', 'lahore', 'english,urdu', '2023-12-12', 'Gopal nagar main bazaar near humayou gujjar milk shop', 'follow us', 'tayyabraja713@gmail.com', NULL, 0x89504e470d0a1a0a0000000d49484452000000300000003008060000005702f987000000097048597300000b1300000b1301009a9c18000003cc49444154789ced995b6c0c5118c7675184be494943da9eb38b565ce3aee8038d5e66a2ca9cd38ba409c97aad07ea4548247810d4835b42857810b55db71d6d082122511e44c4fd41a4151e84875256fb97992edd8d9dd9333bb3b6624ff24f36b3df7ef3fbcff9be2fb3339294599995598e177648c3a0d2a5e0743b1809829387e0f40d38ed01a7881551a5a1b2a04e9e084e7783d3777f829a897c80eacb492fb89c3b069cec04a35fc5c1a3c448307df06afe6c70f23229f0587d01236fc14827186906f356419d3632b5f09c56277dd58576867681d32df0cfcd721f5e2d60e0249c32781ed3270fc0c914f7e0b9770938f9f677e0e960b3333addad496363cab8aa77a8cfcb7566c098eb698147a42f3a20499ee49b369df03c2295d6da8757a5e12e8d4b177681bcb03d99c0487d4a6036cf04ceac00fc45767f5b6dcf00278f5d056f9c019c5e0968ca80ce9602755e3b39ae89c3d7142c740d7c53117064f92078b4f62fb193eb07aa0ac7895efd438ec1374e059a970221393efc2f6d99e56e331bcdcbc8fba4c11b2603fb8b81ab09c07f2958016c982a9aff4462038ccc4f0abcde07ec5a005cac10038fd6a91540adc879c81381f2a14db6c06bbdc08e7940a0dc3eb816a5bd8b129f8bd13ea8d3b213ec00ed1002afa140d31ce0dc2a67e05a44ad656217ac86cc348797240f38fd2436cb4bdd01d7223a2f68807b579b1ba82bc8174a1275e2a787976177751ef6accdc333b3712912df2a6880d1468bfa27b25d033ac8b655b986f6accb4f68c034fe42b9a001d26cd5c0dbd26620205a42a4cda281c931bb06f432d0a17498e70225641a1f10de811b1606e865bb065c5340d840a7550f3c489b81b60ac112a2cfac76a03b6d0682820618edb6da81dea16f807cb6f80726b485a9317051b8847ae21b583f61ecbf6180f4c6375055382ead062e558a1a08c73750ef9be4d440dfc90284f74996d2639c19a0fd5637724dc62d6b6203edf14dc8e86ba108eff3c481f718dfe9312625744be0ea7f03f7fa4da7d0c024a2e560f4a365a2f635e3a129afcd76a2bfb5183f8ee6207c20cb90fe593f665e42f22b1c2cce4b303ebba07a175bc20f9af079c1e823b36446cc75650234b9d385fabf6fe46ac81f6d313aefda7ec4682464a4c5cc80117353cd46486e4148e9b70f2ef741934fa0bd74ac91abcc37ca04fe98a3f7067acd8191eff10cfc8eb956b9009a7247183ea4dc46489e1f93c33f37cb76bd8b9b20cba29f509bc65da9a408294dd0e41b08c9ddd0945e4321b9cb38a6295bf598b8bf2d29199154bddb7ccc7ecfca80e3379d3cc97a173ec9409d1e4f496e49f238aef7cccaacff70fd04a174b1c7c0cba0840000000049454e44ae426082);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `manufacturer_id` int DEFAULT NULL,
  `customer_id` int DEFAULT NULL,
  `invoice_id` int DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `product_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `manufacturer_id`, `customer_id`, `invoice_id`, `amount`, `date`, `status`, `product_id`) VALUES
(6, 1, 2, 0, 3434, NULL, 'Paid', 23),
(7, 1, 2, 0, 1111, NULL, 'Paid', 19),
(8, 1, 2, 0, 1111, NULL, 'Paid', 19),
(9, 1, 22, 0, 500, NULL, 'Paid', 24),
(10, 1, 22, 0, 500, NULL, 'Paid', 24),
(11, 1, 22, 0, 500, NULL, 'Paid', 24);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `order_items` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `code` int NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `amount` double NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `discount` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `panel_users`
--

CREATE TABLE `panel_users` (
  `id` int NOT NULL,
  `profile_image_path` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `user_type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `fb` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `insta` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `linkdin` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `supply` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `from_country` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `languages` text COLLATE utf8mb4_general_ci,
  `address` text COLLATE utf8mb4_general_ci,
  `wallet` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `panel_users`
--

INSERT INTO `panel_users` (`id`, `profile_image_path`, `name`, `phone`, `email`, `created_at`, `user_type`, `description`, `fb`, `twitter`, `insta`, `linkdin`, `supply`, `from_country`, `languages`, `address`, `wallet`) VALUES
(1, NULL, 'abuzar khan ', '03124922089', 'raja123@gmail.com', '2023-05-10 11:35:11.415080', 'Manufacturer', 'my name is abuzar khan im from pakistan I m selling jeans shirts ', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.instagram.com/', 'https://www.linkdin.com/', 'Supply t-shirts', 'Pakistan', 'Urdu, English', 'Lahore Johar Town, Punjab', 995),
(30, 'profile_64c53b1795bb50.54554490.jpg', 'abuzar12', '03124922060', 'abuzar@gmail.com', '2023-07-29 16:15:19.617195', 'Manufacturer', 'My Name Is Abuzar Khan Im From Pakistan I M Selling Jeans Shirts', 'http/www.facebook.com', 'https://www.twitter.com/', 'http/www.facebook.com', 'https://www.linkdin.com/', 'tshirt', 'pakistan ', 'engilish', 'PIA society', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchase_price` double DEFAULT '0',
  `sale_price` double DEFAULT '0',
  `quantity` double DEFAULT '0',
  `tax` double DEFAULT '0',
  `category_id` int DEFAULT NULL,
  `sub_category_id` int DEFAULT NULL,
  `size_id` int DEFAULT NULL,
  `custom_id` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `manufacturer_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `description`, `image`, `purchase_price`, `sale_price`, `quantity`, `tax`, `category_id`, `sub_category_id`, `size_id`, `custom_id`, `created_at`, `updated_at`, `manufacturer_id`) VALUES
(24, 'copy', ' 1245', 'DFA', NULL, 41534, 142534, 415, 0, NULL, NULL, NULL, NULL, '2023-07-20 07:18:04', '2023-07-20 07:18:04', 1),
(25, 'TEST PRoduct', ' 24242', 'TEST Description ', NULL, 5600, 6700, 1200, 0, NULL, NULL, NULL, NULL, '2023-07-27 05:03:08', '2023-07-27 05:03:08', 3);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int NOT NULL,
  `tid` int DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `created_at` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `menu_id` int DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `tid`, `amount`, `created_at`, `currency`, `description`, `user_id`, `menu_id`, `date`) VALUES
(1, 0, 111100, '1690432845', 'pkr', '0', 2, 1, '2023-07-27 00:00:00'),
(2, 0, 50000, '1690461757', 'pkr', 'Paying for Offer', 22, 1, '2023-07-27 00:00:00'),
(3, 0, 50000, '1690553866', 'pkr', 'Paying for Offer', 22, 1, '2023-07-28 00:00:00'),
(4, 0, 50000, '1690554023', 'pkr', 'Paying for Offer', 22, 1, '2023-07-28 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `user_email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `retype-password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hashed_password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `user_role` varchar(50) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `username`, `user_email`, `user_password`, `retype-password`, `hashed_password`, `user_role`) VALUES
(1, 'tayyab123', 'raja123@gmail.com', NULL, NULL, '$2y$10$JT30ImVCIDAAs1sgviMqKODNFnNhvb0lPdax3yNracDZOmJVmpqBu', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_room`
--
ALTER TABLE `chat_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer_profile`
--
ALTER TABLE `manufacturer_profile`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panel_users`
--
ALTER TABLE `panel_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `chat_room`
--
ALTER TABLE `chat_room`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `manufacturer_profile`
--
ALTER TABLE `manufacturer_profile`
  MODIFY `manufacturer_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `panel_users`
--
ALTER TABLE `panel_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- Assuming the user's role and user type are known
