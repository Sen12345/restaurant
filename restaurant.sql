-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 10:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `breakfasts`
--

CREATE TABLE `breakfasts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `breakfasts`
--

INSERT INTO `breakfasts` (`id`, `title`, `description`, `price`, `image`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Breakfast Mix', 'Boiled Eggs & Toast with Salad', 6, '1646993915-tab-item-01.png', '2022-03-11 10:18:35', '2022-03-11 10:18:35', 6),
(3, 'Hamlet', 'Spanish Hamlet', 5, '1646995013-tab-item-06png', '2022-03-11 10:35:44', '2022-03-11 13:38:44', 6),
(4, 'Sea food Breakfast', 'Sea food and poached eggs', 8, '1647166834-about-thumb-01.jpg', '2022-03-13 10:20:34', '2022-03-13 10:20:34', 6),
(7, 'Ackee', 'Ackee & Salt-fish with roasted Breadfruit & Plantain', 8, '1647692715-Jam_Breakfast_1.jpg', '2022-03-19 12:25:15', '2022-03-19 12:32:41', 6),
(8, 'Ackee & Callaloo', 'Ackee and Saltfish with Roast Breadfruit, Platain and Callaloo', 7, '1647692781-Jam_Breakfast_3.jpg', '2022-03-19 12:26:21', '2022-03-19 12:33:59', 6),
(9, 'Ackee with Boiled ground food', 'Ackee & Saltfish with Boiled Dumpline, Yam and Banana', 8, '1647692834-Jam_Breakfast_2.jpg', '2022-03-19 12:27:14', '2022-03-19 12:30:09', 6);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `food_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `food_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, '7', '5', '2', '2022-03-11 10:13:29', '2022-03-11 10:13:29'),
(2, '6', '5', '1', '2022-03-16 15:15:25', '2022-03-16 15:15:25'),
(3, '6', '4', '1', '2022-03-16 15:38:08', '2022-03-16 15:38:08');

-- --------------------------------------------------------

--
-- Table structure for table `chefs`
--

CREATE TABLE `chefs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speciality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chefs`
--

INSERT INTO `chefs` (`id`, `name`, `speciality`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Yvette', 'Vegan', '1647006609.Vegan-chefs-feature-720x563.png', '2022-03-11 13:43:17', '2022-03-13 15:36:31'),
(4, 'Sandra', 'Oriental Dishes', '1647008085.Sandra.jpg', '2022-03-11 14:14:45', '2022-03-11 14:14:45'),
(5, 'Anthony', 'Jamaican Jerk', '1647008445.Jam Jerk.jpg', '2022-03-11 14:20:45', '2022-03-11 14:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `dinners`
--

CREATE TABLE `dinners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dinners`
--

INSERT INTO `dinners` (`id`, `user_id`, `title`, `description`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 6, 'Vegi Diner', 'Best For Vegeterians', 8, '1647182930-Jam-dinner-1.jpg', '2022-03-13 14:48:50', '2022-03-13 14:48:50'),
(3, 6, 'Jerk', 'Jerk Chicke & Rice ad Peas', 8, '1647184396-1646963406-Jamacian-Jerk-Chicken-Rice-Peas.jpg', '2022-03-13 15:13:16', '2022-03-13 15:13:16'),
(4, 6, 'Vegan', 'Vegan Mix with Stew peas', 9, '1647184440-1646990203-7-Day-Vegan-Meal-Plan-thumbnail.jpg', '2022-03-13 15:14:00', '2022-03-22 07:37:24');

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
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `user_id`, `title`, `price`, `image`, `description`, `created_at`, `updated_at`) VALUES
(2, 6, 'Chicken', '£11.50', '1647691006-Jam Curry.jpg', 'Curried Chicken', '2022-03-11 02:27:40', '2022-03-19 11:56:46'),
(3, 6, 'Vegan', '7', '1646990203-7-Day-Vegan-Meal-Plan-thumbnail.jpg', 'Dish for none meat eaters', '2022-03-11 09:16:43', '2022-03-11 09:16:43'),
(4, 6, 'Vegitarian', '6', '1646990843-Rice-Bowl-veg.jpg', 'Veg & Avacado with sause of your choice', '2022-03-11 09:27:23', '2022-03-11 09:27:23'),
(5, 6, 'Jerk Pork', '7', '1646993192-Jerk pork.jpg', 'Done in Jamaican Jerk style', '2022-03-11 10:06:32', '2022-03-11 10:06:32'),
(7, 6, 'Pancake', '9', '1647504861-menu-item-02.jpg', 'Pancake dessert', '2022-03-17 08:14:21', '2022-03-22 07:47:30'),
(9, 6, 'Reggae Jerk Chicken', '12.50', '1647690151-1646963406-Jamacian-Jerk-Chicken-Rice-Peas.jpg', 'Jamaican Jerk Chicken with Rice & Peas', '2022-03-19 11:42:31', '2022-03-19 11:59:51');

-- --------------------------------------------------------

--
-- Table structure for table `lunches`
--

CREATE TABLE `lunches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lunches`
--

INSERT INTO `lunches` (`id`, `user_id`, `title`, `description`, `price`, `image`, `created_at`, `updated_at`) VALUES
(2, 6, 'Vegan', 'For  non meat eaters', 6, '1647177691-1646990203-7-Day-Vegan-Meal-Plan-thumbnailjpg', '2022-03-13 13:02:16', '2022-03-13 13:24:24'),
(5, 6, 'Jerk Chicken', 'Rice & peas with Jerk Chicken', 8, '1647176986-1646963406-Jamacian-Jerk-Chicken-Rice-Peas.jpg', '2022-03-13 13:09:46', '2022-03-13 13:26:27'),
(6, 6, 'Vegi Mix', 'Vegitable luch special', 6, '1647178629-1646990203-7-Day-Vegan-Meal-Plan-thumbnail.jpg', '2022-03-13 13:37:09', '2022-03-13 13:37:09');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_01_27_123600_create_sessions_table', 1),
(8, '2022_01_31_232800_create_food_table', 2),
(9, '2022_02_04_024827_create_reservations_table', 3),
(13, '2022_02_05_231621_create_chefs_table', 4),
(14, '2022_02_09_004946_create_carts_table', 5),
(16, '2022_02_11_230429_create_orders_table', 6),
(17, '2022_03_09_211658_create_breakfasts_table', 7),
(18, '2022_03_10_104531_add_user_id_to_breakfasts_table', 8),
(20, '2022_03_13_111250_create_lunches_table', 9),
(21, '2022_03_13_140231_create_dinners_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foodname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `foodname`, `price`, `quantity`, `name`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Jerk pork', '4', 1, 'Senator', '07473490000', 'Flat 4, Priory House Court, Catford, London, SE6 2UB', '2022-02-13 02:23:19', '2022-02-13 02:23:19'),
(2, 'Vegan', '5', 1, 'Senator', '07473490000', 'Flat 4, Priory House Court, Catford, London, SE6 2UB', '2022-02-13 02:23:19', '2022-02-13 02:23:19'),
(3, 'Curry', '0', 1, 'EEE', '33333333', 'dddddddddddd', '2022-02-13 13:58:01', '2022-02-13 13:58:01'),
(4, 'Jerk chicken', '4', 3, 'EEE', '33333333', 'dddddddddddd', '2022-02-13 13:58:01', '2022-02-13 13:58:01');

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
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `email`, `phone`, `guest`, `date`, `time`, `message`, `created_at`, `updated_at`) VALUES
(1, 'eeeeee', 'eee@gmail.com', '07644536373', '7', '14.02.2022', '22:35', 'ddddddddd', '2022-02-13 21:36:01', '2022-02-13 21:36:01'),
(2, 'senator', 'senatorcox90@gmail.com', '0723444444', '3', '14.03.2022', '19:00', 'Lef mi food', '2022-03-09 11:56:03', '2022-03-09 11:56:03'),
(3, 'Seator', 'senatorcox90@gmail.com', '0733939384744', '2', '13.03.2022', '17:08', 'Lef mi food', '2022-03-11 17:09:14', '2022-03-11 17:09:14');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('kicd4OrNXNXXdGgwNCKemLMgJHzc3RN8A5surgzS', 6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.74 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQ256RW9zaDZaQXlIbGVNMHNCQldzb0ZuNzM3dU11enJjTE14RUsyWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91cGRhdGVtZW51LzciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo2O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkWTc5YkxKNmpjRlpDdDhMMHpTRC9lZXRCdDZZREZRb05lekhyeDJNVkxrRmZFdi5mSEVuL2EiO30=', 1647935251),
('ota0zj8s2s0DErgSIr9voCPo7ZtMeGKpyOioF2yB', 6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.74 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiOTNwcW5ZNzBYcldwWkExbTI2SkdEWWxmUUZrZEcwaUExc3U0VXFQOSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjY7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRZNzliTEo2amNGWkN0OEwwelNEL2VldEJ0NllERlFvTmV6SHJ4Mk1WTGtGZkV2LmZIRW4vYSI7fQ==', 1647697526);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_type`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(6, 'Senator', 'senatorcox90@gmail.com', '1', NULL, '$2y$10$Y79bLJ6jcFZCt8L0zSD/eetBt6YDFQoNezHrx2MVLkFfEv.fHEn/a', NULL, NULL, 'meuUAkFnLh3KagPtFIgvMTWEf70cgHJjvsVPDG5iK7zLAtpYsLOducY298RM', NULL, NULL, '2022-03-08 10:20:54', '2022-03-08 10:20:54'),
(7, 'Sedrick', 'seatorcox90@gmil.com', '0', NULL, '$2y$10$AYsjcZHrnT0RiCHdV9Rhy.9zs4PSCplsI9v9Th4PzNGnRMv/5HBt.', NULL, NULL, '3mSCJ5Ruh21PVWrJ4qM4X7MjMkOTgpAomgiuvIvOYFRmp8utJBvgec5RandT', NULL, NULL, '2022-03-11 10:08:01', '2022-03-11 10:08:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breakfasts`
--
ALTER TABLE `breakfasts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chefs`
--
ALTER TABLE `chefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dinners`
--
ALTER TABLE `dinners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`),
  ADD KEY `food_user_id_foreign` (`user_id`);

--
-- Indexes for table `lunches`
--
ALTER TABLE `lunches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `breakfasts`
--
ALTER TABLE `breakfasts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chefs`
--
ALTER TABLE `chefs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dinners`
--
ALTER TABLE `dinners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lunches`
--
ALTER TABLE `lunches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
