-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Aug 07, 2022 at 07:05 PM
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
-- Database: `deliveryman_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `authentications`
--

CREATE TABLE `authentications` (
  `a_id` bigint(20) UNSIGNED NOT NULL,
  `a_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authentications`
--

INSERT INTO `authentications` (`a_id`, `a_email`, `a_type`, `a_password`, `created_at`, `updated_at`) VALUES
(1, 'kanta@gmail.com', 'delivery', '$2y$10$S8uSI12Eqb7SLRSCEElV1e3AMguBvQ7VAxTjB5Jc/6QIRv8RD7Jfa', '2022-06-30 22:57:00', '2022-06-30 22:57:00'),
(2, 'nisho@gmail.com', 'delivery', '$2y$10$W1LLUbAdiy6rWoi4ZOhPyePktpUEz6oNtve7clRMezxwSaYwOUNPG', '2022-07-02 06:47:27', '2022-07-02 06:47:27');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `i_id` bigint(20) UNSIGNED NOT NULL,
  `i_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `i_phone` int(11) NOT NULL,
  `i_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `i_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `i_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`i_id`, `i_name`, `i_phone`, `i_email`, `i_address`, `i_image`, `created_at`, `updated_at`) VALUES
(1, 'Nisho', 1475846161, 'nisho@gmail.com', 'Bosundhora ', '', NULL, NULL),
(2, 'Sakib', 1475846161, 'nisho@gmail.com', 'Bosundhora ', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `i_id` bigint(20) UNSIGNED NOT NULL,
  `i_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `i_phone` int(11) NOT NULL,
  `i_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `i_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `i_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deliveries`
--

INSERT INTO `deliveries` (`i_id`, `i_name`, `i_phone`, `i_email`, `i_address`, `i_image`, `created_at`, `updated_at`) VALUES
(1, 'Maria Kanta', 1254893, 'kanta@gmail.com', 'Bosundhora', '1656775905_IMG_3212G (1).jpg', '2022-06-30 22:57:00', '2022-07-31 11:07:51'),
(2, 'Noresh Borua', 165446131, 'nisho@gmail.com', 'Bosundhora', '2022-07-02 18:47:27', '2022-07-02 06:47:27', '2022-07-02 06:47:27');

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
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`id`, `name`, `amount`, `address`, `time`, `created_at`, `updated_at`) VALUES
(1, 'Napa', 10, 'Bosundhora', '2022-07-02 16:42:09', '2022-07-02 10:42:09', '2022-07-02 10:42:09'),
(2, 'Redoxe', 100, 'Bonani', '2022-07-02 16:47:45', '2022-07-02 10:47:45', '2022-07-02 10:47:45'),
(3, 'Oxin', 100, 'Bonani', '2022-07-02 16:48:12', '2022-07-02 10:48:12', '2022-07-02 10:48:12'),
(4, 'Axios', 100, 'Bonani', '2022-07-02 16:49:12', '2022-07-02 10:49:12', '2022-07-02 10:49:12'),
(5, 'Seclo', 10, 'Bosundhora', '2022-07-02 16:54:53', '2022-07-02 10:54:53', '2022-07-02 10:54:53'),
(6, 'Seclo', 10, 'Bosundhora', '2022-07-31 16:01:15', '2022-07-31 10:01:15', '2022-07-31 10:01:15'),
(7, 'Napa', 10, 'Bosundhora', '2022-07-31 16:11:46', '2022-07-31 10:11:46', '2022-07-31 10:11:46'),
(8, 'Napa', 10, 'Bosundhora', '2022-07-31 17:06:44', '2022-07-31 11:06:44', '2022-07-31 11:06:44');

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
(5, '2022_07_01_044406_create_deliverys_table', 1),
(6, '2022_07_01_044644_create_authentications_table', 2),
(7, '2022_07_01_045500_create_deliveries_table', 3),
(8, '2022_07_02_154914_create_notifications_table', 4),
(9, '2022_07_02_163259_create_histories_table', 5),
(10, '2022_07_03_145324_create_customers_table', 6),
(11, '2022_07_03_145946_add_i_id_to_notifications_table', 7),
(12, '2022_07_31_135952_create_tokens_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `i_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `name`, `amount`, `address`, `status`, `created_at`, `updated_at`, `i_id`) VALUES
(1, 'Napa', 10, 'Bosundhora', 'Delivered', NULL, '2022-07-31 11:06:44', 1),
(2, 'Seclo', 10, 'Bosundhora', 'Rejected', NULL, '2022-07-31 11:06:48', 1),
(3, 'Redoxe', 100, 'Bonani', 'No Response', NULL, '2022-07-31 09:47:32', 2),
(4, 'Oxin', 100, 'Bonani', 'Cancelled', NULL, '2022-07-31 11:06:52', 1),
(5, 'Axios', 100, 'Bonani', 'No Response', NULL, '2022-07-31 09:54:11', 2),
(6, 'Onsho', 100, 'Gulshan', 'No Response', NULL, '2022-07-31 09:47:41', 2),
(7, 'Cleinsi', 100, 'Mohammadpur', 'No Response', NULL, '2022-07-31 09:44:00', 2);

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
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expired_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `email`, `token`, `created_at`, `updated_at`, `expired_at`) VALUES
(1, 'kanta@gmail.com', 'NIRE8KcfPSereoeLo2TqtYTfvFJW4zg8KyEzNqlJNcO5dujAFKL2DMSc4l6Qxm52', '2022-07-31 08:07:53', '2022-07-31 08:49:11', '2022-07-31 08:49:11'),
(2, 'kanta@gmail.com', 'R2Ika1x5NbuBQXYckhUnS55WgSGRZH6ls5VZ2lQ68sVP47UDOmgDymqJYUcZ8iWD', '2022-07-31 08:08:45', '2022-07-31 08:49:11', '2022-07-31 08:49:11'),
(3, 'kanta@gmail.com', 'fDWz40wQQxkxj1wQScCTZH6VOabhd1iRusnd4cDVX5TWfw4AgvsbW7Ul566ciM7x', '2022-07-31 08:33:27', '2022-07-31 08:49:11', '2022-07-31 08:49:11'),
(4, 'kanta@gmail.com', 'WJsUrC4jMkNeMdwviXJeqa0QkbnhMjld5NNfmL5KY7vQH30HdfW7oVnZgIwIq0lb', '2022-07-31 08:39:54', '2022-07-31 08:53:13', '2022-07-31 08:53:13'),
(5, 'kanta@gmail.com', 'eONOAO1vRwhOgAbQWeFynn074UvnWB7Dpp9jGY8iC01sX5hFT4F0jVqjbRcJLld9', '2022-07-31 08:54:09', '2022-07-31 08:54:09', NULL),
(6, 'kanta@gmail.com', 'hTcfirsuDPQ2oL14neviXTyZ7tDZgqc5i7ymKp15KlYY4GFnxFz7eTX9XqHANy0h', '2022-07-31 08:57:13', '2022-07-31 08:57:13', NULL),
(7, 'kanta@gmail.com', 'igcbX8Z7P3ZVNJNZhai5rzu79t7uDghS72jXI9yCe0MEjxoRHB2xtj721ip42VvA', '2022-07-31 08:59:11', '2022-07-31 08:59:11', NULL),
(8, 'kanta@gmail.com', 'oRJ8GceyuY36vyz81QFTORYwzG1TtgybdyzwunZTGg2k3TkOOcFWGUvkndxeXFBI', '2022-07-31 09:57:19', '2022-07-31 09:57:19', NULL),
(9, 'kanta@gmail.com', '4vjFIWZcELB1AgGDjjyxwdEs6xM3xFgolbJv6SlJjrwGzIPL2unssM3w4Iu78ckV', '2022-07-31 10:45:14', '2022-07-31 10:45:14', NULL),
(10, 'kanta@gmail.com', 'krUfL8j1C5alkegzlGtWaRMUB7vBTDrdPOsRIkUymoAItFaIbnVsFHWuZwSjVaMK', '2022-07-31 11:05:56', '2022-07-31 11:05:56', NULL),
(11, 'kanta@gmail.com', '0inY6NXY1In61YPdY3k4YsmzU5Nk8qJLLgUn8BiupHxWhsOqeOqh611xdJrV3yLw', '2022-07-31 11:08:32', '2022-07-31 11:08:32', NULL),
(12, 'kanta@gmail.com', '0ep3WBzG6ZixkgRAzTvqUjQAzjt8BIhwAxdOK83k6UUW3nQh7nJykhLtFUreUHg7', '2022-08-05 10:47:36', '2022-08-05 10:47:36', NULL),
(13, 'kanta@gmail.com', 'gg2ZQFuS1blwsRMOekmolBWKOA06KcFTxUxKzdrBG6L9WULS0H55PjxVctBUeQgk', '2022-08-05 10:55:54', '2022-08-05 10:55:54', NULL),
(14, 'kanta@gmail.com', '8vYX9oxGW5jTM8JVhqbgaB5kVkb8LXLs5BSJ2YT5z6q9BHchHbZUqSNVZ6CyvYSO', '2022-08-05 21:43:07', '2022-08-05 21:43:07', NULL);

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
-- Indexes for table `authentications`
--
ALTER TABLE `authentications`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
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
-- AUTO_INCREMENT for table `authentications`
--
ALTER TABLE `authentications`
  MODIFY `a_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `i_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `i_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
