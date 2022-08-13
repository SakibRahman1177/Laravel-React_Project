-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Aug 07, 2022 at 01:29 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinepharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `number` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cusid` int(11) NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `username`, `cusid`, `dob`, `email`, `phone`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Naresh Barua Nisho', 'Nisho', 19403321, '1999-03-25', 'nareshbarua123@gmail.com', '+880184000010', 'nisho123.', '2022-07-05 13:33:28', '2022-08-06 22:30:53'),
(2, 'Shyamali Barua', 'Shyamali', 2207321, '1990-01-03', 'shyamali33@gmail.com', '01843397123', 'Naresh1!', '2022-07-05 15:23:49', '2022-07-05 15:24:39');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_a_p_i_s`
--

CREATE TABLE `login_a_p_i_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_05_190949_create_customers_table', 1),
(6, '2022_07_05_191017_create_orders_table', 1),
(7, '2022_07_05_191105_create_orderdetails_table', 1),
(8, '2022_07_05_191151_create_prescriptions_table', 1),
(9, '2022_07_05_191220_create_products_table', 1),
(10, '2022_08_01_033619_create_tokens_table', 2),
(11, '2022_08_01_033648_create_login_a_p_i_s_table', 2),
(12, '2022_08_01_033738_create_product_a_p_i_s_table', 2),
(13, '2022_08_06_114950_create_tokens_table', 3),
(14, '2022_08_07_030707_create_carts_table', 4),
(15, '2022_08_07_041425_create_orders_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `price`, `description`, `number`, `time`, `created_at`, `updated_at`) VALUES
(1, 'Montair', 400, 'Tablet', '1', '2022-08-07 04:18:14', '2022-08-06 22:18:14', '2022-08-06 22:18:14'),
(2, 'Gaxo', 200, 'Tablet', '1', '2022-08-07 04:18:14', '2022-08-06 22:18:14', '2022-08-06 22:18:14'),
(3, 'Montair', 400, 'Tablet', '1', '2022-08-07 04:28:04', '2022-08-06 22:28:04', '2022-08-06 22:28:04');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ins` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `name`, `dob`, `weight`, `type`, `ins`, `sub`, `address`, `created_at`, `updated_at`) VALUES
(5, 'Nisho', '2022-06-30', '60', 'Diarrhea', 'Flagyl 400 mg', 'Capsule', 'Jamalkhan', '2022-07-05 15:33:36', '2022-07-05 16:07:04'),
(6, 'Shyamali Barua', '2022-06-26', '80', 'Cold & Fever', 'Montair 10mg', 'Tablet', 'Dhaka', '2022-07-05 15:34:14', '2022-07-05 16:08:35'),
(7, 'a', 'b', 'c', 'd', 'e', 'f', 'gcxasdf', '2022-08-06 07:23:04', '2022-08-06 07:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Montair', 400, 'Tablet', '2022-07-05 13:29:27', '2022-07-05 13:29:27'),
(2, 'Clovate', 50, 'Ointment', '2022-07-05 13:29:27', '2022-07-05 13:29:27'),
(3, 'Gaxo', 200, 'Tablet', '2022-07-05 13:29:27', '2022-07-05 13:29:27'),
(4, 'Iprex', 300, 'Respiratory Solution', '2022-07-05 13:29:27', '2022-07-05 13:29:27'),
(5, 'Montair', 400, 'Tablet', '2022-07-05 14:42:42', '2022-07-05 14:42:42'),
(6, 'Clovate', 50, 'Ointment', '2022-07-05 14:42:42', '2022-07-05 14:42:42'),
(7, 'Gaxo', 200, 'Tablet', '2022-07-05 14:42:42', '2022-07-05 14:42:42'),
(8, 'Iprex', 300, 'Respiratory Solution', '2022-07-05 14:42:42', '2022-07-05 14:42:42'),
(9, 'Alatrol', 30, 'Allergy Tablet', '2022-07-05 14:42:42', '2022-07-05 14:42:42'),
(10, 'Montair', 400, 'Tablet', '2022-07-05 14:46:23', '2022-07-05 14:46:23'),
(11, 'Clovate', 50, 'Ointment', '2022-07-05 14:46:23', '2022-07-05 14:46:23'),
(12, 'Gaxo', 200, 'Tablet', '2022-07-05 14:46:23', '2022-07-05 14:46:23'),
(13, 'Iprex', 300, 'Respiratory Solution', '2022-07-05 14:46:23', '2022-07-05 14:46:23'),
(14, 'Alatrol', 30, 'Allergy Tablet', '2022-07-05 14:46:23', '2022-07-05 14:46:23'),
(15, 'Alendronate', 400, 'Tablet', '2022-07-05 14:47:15', '2022-07-05 14:47:15'),
(16, 'Metformin', 50, 'Ointment', '2022-07-05 14:47:15', '2022-07-05 14:47:15'),
(17, 'Omeprazole', 200, 'Tablet', '2022-07-05 14:47:15', '2022-07-05 14:47:15'),
(18, 'Hydrocodone', 300, 'Respiratory Solution', '2022-07-05 14:47:15', '2022-07-05 14:47:15'),
(19, 'Omidon', 30, 'Allergy Tablet', '2022-07-05 14:47:15', '2022-07-05 14:47:15');

-- --------------------------------------------------------

--
-- Table structure for table `product_a_p_i_s`
--

CREATE TABLE `product_a_p_i_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `email`, `token`, `created_at`, `updated_at`) VALUES
(1, 'Nisho', 'SvcQ314GOnAs4mxInUWNsIJFMNDhZ2dB8ScIPQqJHnR2j4T5dLV2bra5NQzhpY6a', '2022-08-06 06:06:58', '2022-08-06 06:06:58'),
(2, 'Nisho', 'qx7SlOOZU1GNcQ7O3QuZGrJThiUrXL8rJ8NXhtpPFLHlist7Ke2ytdKH9h87sPKb', '2022-08-06 06:13:24', '2022-08-06 06:13:24'),
(3, 'Nisho', '9cZucZPu2VdCp4l4bDRXVgXciFip33y8cqnCni6CAt0GhI54PsDHqURjtO4j2AMW', '2022-08-06 10:08:48', '2022-08-06 10:08:48'),
(4, 'Nisho', 'MysruAOIBtvlhpqUvyJEaFnDwxLlqRK3QiLTtvZ0GSKB27xq6B6xKqk39W0y3ac6', '2022-08-06 11:01:10', '2022-08-06 11:01:10'),
(5, 'Nisho', 'SiqJgL5rlyXrYe41jCoJOwS63cgeESjoaqK2wScfikkaywczoPwfx2aaYpNuPjmL', '2022-08-06 21:03:26', '2022-08-06 21:03:26'),
(6, 'Nisho', 'evv62y13BMzHX2eOoL5Uz4lPjuyUbPh42ubklUb8nGx0VzuYDoHICyAKuuTmzEwC', '2022-08-06 21:03:26', '2022-08-06 21:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `login_a_p_i_s`
--
ALTER TABLE `login_a_p_i_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_a_p_i_s`
--
ALTER TABLE `product_a_p_i_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_a_p_i_s`
--
ALTER TABLE `login_a_p_i_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_a_p_i_s`
--
ALTER TABLE `product_a_p_i_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
