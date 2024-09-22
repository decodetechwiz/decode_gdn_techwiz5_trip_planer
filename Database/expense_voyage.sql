-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 22, 2024 at 07:26 AM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expense_voyage`
--

-- --------------------------------------------------------

--
-- Table structure for table `activitymodels`
--

DROP TABLE IF EXISTS `activitymodels`;
CREATE TABLE IF NOT EXISTS `activitymodels` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `Activity_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `Location` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Expense_category` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Payment_method` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Notes` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activitymodels`
--

INSERT INTO `activitymodels` (`id`, `Activity_name`, `start_date`, `end_date`, `Location`, `Expense_category`, `Amount`, `Payment_method`, `Notes`, `created_at`, `updated_at`) VALUES
(1, 'Paris Roller Coaster', '2024-09-25', '2024-09-27', 'London', 'Entertainment', '$250', 'Bank Transfer', 'Follow This Rules', '2024-09-22 01:33:14', '2024-09-22 01:33:14'),
(2, 'Sky Diving', '2024-09-25', '2024-09-27', 'England', 'Entertainment', '$250', 'Bank Transfer', 'Follow This Rules', '2024-09-22 01:34:50', '2024-09-22 01:34:50'),
(3, 'Camping', '2024-10-04', '2024-10-10', 'UAE', 'Entertainment', '$250', 'Bank Transfer', 'Follow This Rules', '2024-09-22 01:35:38', '2024-09-22 01:35:38'),
(4, 'Born Fire', '2024-10-03', '2024-10-10', 'South Africa', 'Entertainment', '$150', 'Cash', 'Follow This Rules', '2024-09-22 01:36:40', '2024-09-22 01:36:40');

-- --------------------------------------------------------

--
-- Table structure for table `categorymodels`
--

DROP TABLE IF EXISTS `categorymodels`;
CREATE TABLE IF NOT EXISTS `categorymodels` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `Category_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categorymodels_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactuses`
--

DROP TABLE IF EXISTS `contactuses`;
CREATE TABLE IF NOT EXISTS `contactuses` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Contact_number` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Message` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactuses`
--

INSERT INTO `contactuses` (`id`, `Name`, `Email`, `Contact_number`, `Message`, `created_at`, `updated_at`) VALUES
(1, 'asad', 'asad@gmail.com', '03178198228', 'hi', '2024-09-22 01:56:01', '2024-09-22 01:56:01');

-- --------------------------------------------------------

--
-- Table structure for table `destinationmodels`
--

DROP TABLE IF EXISTS `destinationmodels`;
CREATE TABLE IF NOT EXISTS `destinationmodels` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `Destination_Name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinationmodels`
--

INSERT INTO `destinationmodels` (`id`, `Destination_Name`, `created_at`, `updated_at`) VALUES
(1, 'Paris', '2024-09-22 00:59:11', '2024-09-22 00:59:11'),
(2, 'HongKong', '2024-09-22 00:59:30', '2024-09-22 00:59:30'),
(3, 'London', '2024-09-22 00:59:37', '2024-09-22 00:59:37'),
(4, 'South Africa', '2024-09-22 00:59:48', '2024-09-22 00:59:48'),
(5, 'UAE', '2024-09-22 01:00:08', '2024-09-22 01:00:08'),
(6, 'HamsterDam', '2024-09-22 01:02:38', '2024-09-22 01:02:38'),
(7, 'Houston', '2024-09-22 01:02:48', '2024-09-22 01:02:48');

-- --------------------------------------------------------

--
-- Table structure for table `expensismodels`
--

DROP TABLE IF EXISTS `expensismodels`;
CREATE TABLE IF NOT EXISTS `expensismodels` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `amount` int NOT NULL,
  `category` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trip_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expense_date` date NOT NULL,
  `notes` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `expensismodels_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expensismodels`
--

INSERT INTO `expensismodels` (`id`, `user_id`, `amount`, `category`, `trip_name`, `expense_date`, `notes`, `created_at`, `updated_at`) VALUES
(4, 2, 15000, 'Billing Method', 'Trip To UAE', '2024-09-23', 'bill add payment method', '2024-09-22 02:13:08', '2024-09-22 02:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guidemodels`
--

DROP TABLE IF EXISTS `guidemodels`;
CREATE TABLE IF NOT EXISTS `guidemodels` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `Guide_profile` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Guide_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Guide_designation` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guidemodels`
--

INSERT INTO `guidemodels` (`id`, `Guide_profile`, `Guide_name`, `Guide_designation`, `created_at`, `updated_at`) VALUES
(1, 'Dynamic_images\\1435097452.team-1.jpg', 'Mushtaq Ali', 'hi how are you', '2024-09-22 01:25:27', '2024-09-22 01:25:27'),
(2, 'Dynamic_images\\1183144347.team-2.jpg', 'Zufi Khan', 'hi how are you', '2024-09-22 01:25:55', '2024-09-22 01:25:55'),
(3, 'Dynamic_images\\512130990.team-3.jpg', 'Bilal Kamran', 'hi how are you', '2024-09-22 01:26:08', '2024-09-22 01:26:08'),
(4, 'Dynamic_images\\2056725158.team-4.jpg', 'Eliza But', 'hi how are you', '2024-09-22 01:26:21', '2024-09-22 01:26:21');

-- --------------------------------------------------------

--
-- Table structure for table `itineraryitems`
--

DROP TABLE IF EXISTS `itineraryitems`;
CREATE TABLE IF NOT EXISTS `itineraryitems` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `Transport` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lodging` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Activities` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Accommodation` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_09_18_075127_create_sessions_table', 1),
(7, '2024_09_18_154500_create_categorymodels_table', 1),
(8, '2024_09_18_154743_create_tripmodels_table', 1),
(9, '2024_09_18_154836_create_expensismodels_table', 1),
(10, '2024_09_19_094313_create_contactuses_table', 1),
(11, '2024_09_19_132201_create_destinationmodels_table', 1),
(12, '2024_09_20_191958_create_packages_table', 1),
(13, '2024_09_20_195305_create_guidemodels_table', 1),
(14, '2024_09_20_201054_create_servicemodels_table', 1),
(15, '2024_09_21_095055_create_activitymodels_table', 1),
(16, '2024_09_21_152916_create_itineraryitems_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
CREATE TABLE IF NOT EXISTS `packages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `Packages_image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Packages_location` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Package_days` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Package_persons` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Package_price` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Package_description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `Packages_image`, `Packages_location`, `Package_days`, `Package_persons`, `Package_price`, `Package_description`, `created_at`, `updated_at`) VALUES
(4, 'Dynamic_images\\1668360152.destination-3.jpg', 'London', '7', '1', '75000', 'Entertainment Enjoyment', '2024-09-22 01:52:13', '2024-09-22 01:52:13'),
(2, 'Dynamic_images\\2045657798.package-3.jpg', 'UAE', '7', '2', '30000', 'Entertainment Enjoyment', '2024-09-22 01:47:39', '2024-09-22 01:47:39'),
(3, 'Dynamic_images\\284425609.destination-2.jpg', 'Africa', '12', '1', '200000', 'Entertainment Enjoyment', '2024-09-22 01:48:18', '2024-09-22 01:48:18');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servicemodels`
--

DROP TABLE IF EXISTS `servicemodels`;
CREATE TABLE IF NOT EXISTS `servicemodels` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `Service_icon` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Service_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Service_description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `servicemodels`
--

INSERT INTO `servicemodels` (`id`, `Service_icon`, `Service_name`, `Service_description`, `created_at`, `updated_at`) VALUES
(1, 'fa fa-3x fa-car', 'Car Service', 'Best Service Are Available', '2024-09-22 01:28:05', '2024-09-22 01:28:05'),
(2, 'fa fa-3x fa-user', 'User Service', 'Best Service Are Available', '2024-09-22 01:28:21', '2024-09-22 01:28:21'),
(3, 'fa fa-3x fa-hotel', 'Best Hotel Available', 'Best Service Are Available', '2024-09-22 01:28:48', '2024-09-22 01:28:48'),
(4, 'fa fa-3x fa-plane', 'Best Airline', 'Best Service Are Available', '2024-09-22 01:29:19', '2024-09-22 01:29:19'),
(5, 'fa fa-3x fa-map', 'All Trip Locations', 'Best Service Are Available', '2024-09-22 01:29:37', '2024-09-22 01:29:37'),
(6, 'fa fa-3x fa-globe', 'World Wide Tours', 'Best Service Are Available', '2024-09-22 01:29:59', '2024-09-22 01:29:59'),
(7, 'fa fa-3x fa-money-bill', 'Different Payments Method', 'Best Service Are Available', '2024-09-22 01:30:38', '2024-09-22 01:30:38'),
(8, 'fa fa-3x fa-ticket-alt', 'Return Ticket Availabilty', 'Best Service Are Available', '2024-09-22 01:31:29', '2024-09-22 01:31:29');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('MQCXGf5g5rTrzAEKgCEfIFNPr0ZYM97pg9K7MP6Z', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTG5BQzQ2bGo3RWw3M0cyMUZpcHJSTDFlVko5cVY3bG9NejVyMlpIZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wYWNrYWdlcyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkWERmV29NNmpIbXZQdzZpT2VWV0diZXV0T0lNd3N6eXIwcTlFTTZxZ1lOeDl3cGNVS2xXU0MiO3M6MzoidXJsIjthOjA6e319', 1726985808),
('9a0bNiCINE1quqclwu3PHazOwAnTtn5JX2e9aiYs', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZnVnOHNiT2s1QzdJcFZyVkxhZUdXNkQ0OGFibmRmTHZXOHg5V3JJWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3RlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1726988359),
('FC5CoNtlzSZNtFr2OvSXdp1aOt1DGY5zvNoDc1i6', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiNXpXZWN5OGZmRE1zSE9Kbk1OUE9TVFF4eGlhdEpscnpoYXZaRzJyOCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9lbWFpbC92ZXJpZnkiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJE8vYnhyamgzcjNncXhHYXdmUHF5Uk9IUjRkejBqenNKR0tPUk03enpJU0VZano4MW43UnV1IjtzOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjMxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGFzaGJvYXJkIjt9fQ==', 1726989849),
('h0o9PBcXKxklfYroYOkZPksI1epKp516ZGyuowVN', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiOEREWGdDYnZvZGdVMW5IT2l2T1VMNE5CeXBQWVUyTVpPaXNQdXprcyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQyOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvZGFzaGJvYXJkP3ZlcmlmaWVkPTEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJE8vYnhyamgzcjNncXhHYXdmUHF5Uk9IUjRkejBqenNKR0tPUk03enpJU0VZano4MW43UnV1Ijt9', 1726989862);

-- --------------------------------------------------------

--
-- Table structure for table `tripmodels`
--

DROP TABLE IF EXISTS `tripmodels`;
CREATE TABLE IF NOT EXISTS `tripmodels` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `trip_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `destination` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `budget` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tripmodels_user_id_foreign` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `role` int NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `role`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(2, 'faisal', 'faisalaptech1@gmail.com', '2024-09-22 06:12:41', '$2y$10$jtXmk25i5Kpako0B7YF5zOa.THQ9lY4Y7HmhsaX293zip3QLznD3e', NULL, NULL, NULL, 0, NULL, NULL, NULL, '2024-09-22 01:12:03', '2024-09-22 01:12:03'),
(4, 'yaseen', 'yaseen2309d@aptechgdn.net', '2024-09-22 02:24:22', '$2y$10$O/bxrjh3r3gqxGawfPqyROHR4dz0jzsJGKORM7zzISEYjz81n7Ruu', NULL, NULL, NULL, 1, NULL, NULL, NULL, '2024-09-22 02:24:00', '2024-09-22 02:24:22');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categorymodels`
--
ALTER TABLE `categorymodels`
  ADD CONSTRAINT `categorymodels_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `expensismodels`
--
ALTER TABLE `expensismodels`
  ADD CONSTRAINT `expensismodels_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tripmodels`
--
ALTER TABLE `tripmodels`
  ADD CONSTRAINT `tripmodels_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
