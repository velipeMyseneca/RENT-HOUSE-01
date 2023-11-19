-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2023 at 02:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `renting_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive_property`
--

CREATE TABLE `archive_property` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid_agent` bigint(20) UNSIGNED DEFAULT NULL,
  `property_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `lifestyle` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `location_city` varchar(255) NOT NULL,
  `location_subcity` varchar(255) NOT NULL,
  `property_lifestyle` varchar(255) NOT NULL,
  `bedrooms` varchar(255) NOT NULL,
  `bathrooms` varchar(255) NOT NULL,
  `areasize` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid_agent` bigint(20) UNSIGNED DEFAULT NULL,
  `property_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `lifestyle` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `location_city` varchar(255) NOT NULL,
  `location_subcity` varchar(255) NOT NULL,
  `property_lifestyle` varchar(255) NOT NULL,
  `bedrooms` varchar(255) NOT NULL,
  `bathrooms` varchar(255) NOT NULL,
  `areasize` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `userid_agent`, `property_name`, `description`, `price`, `lifestyle`, `type`, `location_city`, `location_subcity`, `property_lifestyle`, `bedrooms`, `bathrooms`, `areasize`, `created_at`, `updated_at`) VALUES
(2, 2, 'p', 'p', '1', 'p', 'p', 'Toronto', 'Yorkdale', 'Refugee', '1', 'p', 'p', '2023-10-21 19:39:40', '2023-10-21 19:39:40'),
(12, 2, 'Property 1 (Updated)', 'Description 1', '500', 'Student', 'House', 'Toronto', 'Wilson', 'Student', '3', '2', '200', '2023-10-21 21:25:19', '2023-10-22 01:48:13'),
(13, 2, 'Property 2', 'Description 2', '150000', 'Single', 'Apartment', 'Toronto', 'Wilson', 'Student', '2', '1', '120', '2023-10-21 21:25:19', '2023-10-21 21:25:19'),
(14, 2, 'Property 3', 'Description 3', '80000', 'Student', 'Condo', 'Toronto', 'Yorkdale', 'Refugee', '1', '1', '80', '2023-10-21 21:25:19', '2023-10-21 21:25:19'),
(15, 2, 'Property 4', 'Description 4', '200000', 'Retiree', 'House', 'Toronto', 'Yorkdale', 'Refugee', '4', '3', '250', '2023-10-21 21:25:19', '2023-10-21 21:25:19'),
(16, 2, 'Property 5', 'Description 5', '120000', 'Family', 'Apartment', 'Toronto', 'Wilson', 'Student', '2', '2', '160', '2023-10-21 21:25:19', '2023-10-21 21:25:19'),
(17, 2, 'Property 6', 'Description 6', '90000', 'Family', 'House', 'Toronto', 'Yorkdale', 'Refugee', '3', '2', '180', '2023-10-21 21:25:54', '2023-10-21 21:25:54'),
(18, 2, 'Property 7', 'Description 7', '170000', 'Single', 'Apartment', 'Toronto', 'Yorkdale', 'Refugee', '2', '1', '110', '2023-10-21 21:25:54', '2023-10-21 21:25:54'),
(19, 2, 'Property 8', 'Description 8', '75000', 'Student', 'Condo', 'Toronto', 'Wilson', 'Refugee', '1', '1', '70', '2023-10-21 21:25:54', '2023-10-21 21:25:54'),
(20, 2, 'Property 9', 'Description 9', '180000', 'Retiree', 'House', 'Toronto', 'RoseDale', 'Student', '4', '3', '240', '2023-10-21 21:25:54', '2023-10-21 21:25:54'),
(21, 2, 'Property 10', 'Description 10', '110000', 'Family', 'Apartment', 'Toronto', 'Yorkdale', 'Refugee', '2', '2', '150', '2023-10-21 21:25:54', '2023-10-21 21:25:54'),
(22, 2, 'Property 11', 'Description 11', '95000', 'Family', 'House', 'Toronto', 'Yorkdale', 'Refugee', '3', '2', '190', '2023-10-21 21:25:54', '2023-10-21 21:25:54'),
(23, 2, 'Property 12', 'Description 12', '160000', 'Single', 'Apartment', 'Toronto', 'Wilson', 'Student', '2', '1', '105', '2023-10-21 21:25:54', '2023-10-21 21:25:54'),
(24, 2, 'Property 13', 'Description 13', '72000', 'Student', 'Condo', 'Toronto', 'RoseDale', 'Student', '1', '1', '65', '2023-10-21 21:25:54', '2023-10-21 21:25:54'),
(25, 2, 'Property 14', 'Description 14', '190000', 'Retiree', 'House', 'Toronto', 'Wilson', 'Student', '4', '3', '230', '2023-10-21 21:25:54', '2023-10-21 21:25:54'),
(26, 2, 'Property 15', 'Description 15', '105000', 'Family', 'Apartment', 'Toronto', 'Wilson', 'Student', '2', '2', '145', '2023-10-21 21:25:54', '2023-10-21 21:25:54'),
(27, 2, 'Property 16', 'Description 16', '92000', 'Family', 'House', 'Toronto', 'RoseDale', 'Student', '3', '2', '175', '2023-10-21 21:25:54', '2023-10-21 21:25:54'),
(28, 2, 'Property 17', 'Description 17', '155000', 'Single', 'Apartment', 'Toronto', 'RoseDale', 'Student', '2', '1', '100', '2023-10-21 21:25:54', '2023-10-21 21:25:54'),
(29, 2, 'Property 18', 'Description 18', '69000', 'Student', 'Condo', 'Toronto', 'Wilson', 'Student', '1', '1', '60', '2023-10-21 21:25:54', '2023-10-21 21:25:54'),
(30, 2, 'Property 19', 'Description 19', '175000', 'Retiree', 'House', 'Toronto', 'Yorkdale', 'Student', '4', '3', '220', '2023-10-21 21:25:54', '2023-10-21 21:25:54'),
(31, 2, 'Property 20', 'Description 20', '100000', 'Family', 'Apartment', 'Toronto', 'RoseDale', 'Student', '2', '2', '140', '2023-10-21 21:25:54', '2023-10-21 21:25:54'),
(32, 2, 'Property 21', 'Description 21', '98000', 'Family', 'House', 'Toronto', 'RoseDale', 'Student', '3', '2', '170', '2023-10-21 21:27:29', '2023-10-21 21:27:29'),
(33, 2, 'Property 22', 'Description 22', '165000', 'Single', 'Apartment', 'Toronto', 'RoseDale', 'Student', '2', '1', '95', '2023-10-21 21:27:29', '2023-10-21 21:27:29'),
(34, 2, 'Property 23', 'Description 23', '70000', 'Student', 'Condo', 'Toronto', 'RoseDale', 'Student', '1', '1', '50', '2023-10-21 21:27:29', '2023-10-21 21:27:29'),
(35, 2, 'Property 24', 'Description 24', '185000', 'Retiree', 'House', 'Toronto', 'RoseDale', 'Student', '4', '3', '210', '2023-10-21 21:27:29', '2023-10-21 21:27:29'),
(36, 2, 'Property 25', 'Description 25', '103000', 'Family', 'Apartment', 'Toronto', 'RoseDale', 'Student', '2', '2', '130', '2023-10-21 21:27:29', '2023-10-21 21:27:29'),
(37, 2, 'Property 26', 'Description 26', '94000', 'Family', 'House', 'Toronto', 'RoseDale', 'Student', '3', '2', '160', '2023-10-21 21:27:29', '2023-10-21 21:27:29'),
(38, 2, 'Property 27', 'Description 27', '160000', 'Single', 'Apartment', 'Toronto', 'Wilson', 'Student', '2', '1', '90', '2023-10-21 21:27:29', '2023-10-21 21:27:29'),
(39, 2, 'Property 28', 'Description 28', '68000', 'Student', 'Condo', 'Toronto', 'RoseDale', 'Student', '1', '1', '45', '2023-10-21 21:27:29', '2023-10-21 21:27:29'),
(40, 2, 'Property 29', 'Description 29', '195000', 'Retiree', 'House', 'Toronto', 'Eglinton', 'Student', '4', '3', '200', '2023-10-21 21:27:29', '2023-10-21 21:27:29'),
(41, 2, 'Property 30', 'Description 30', '99000', 'Family', 'Apartment', 'Toronto', 'RoseDale', 'Student', '2', '2', '120', '2023-10-21 21:27:29', '2023-10-21 21:27:29'),
(42, 2, 'Property 31', 'Description 31', '97000', 'Family', 'House', 'Toronto', 'Yorkdale', 'Refugee', '3', '2', '150', '2023-10-21 21:27:29', '2023-10-21 21:27:29'),
(43, 2, 'Property 32', 'Description 32', '170000', 'Single', 'Apartment', 'Toronto', 'Eglinton', 'Student', '2', '1', '85', '2023-10-21 21:27:29', '2023-10-21 21:27:29'),
(44, 2, 'Property 33', 'Description 33', '65000', 'Student', 'Condo', 'Toronto', 'Wilson', 'Worker', '1', '1', '40', '2023-10-21 21:27:29', '2023-10-21 21:27:29'),
(45, 2, 'Property 34', 'Description 34', '180000', 'Retiree', 'House', 'Toronto', 'Wilson', 'Student', '4', '3', '190', '2023-10-21 21:27:29', '2023-10-21 21:27:29'),
(46, 2, 'Property 35', 'Description 35', '101000', 'Family', 'Apartment', 'Toronto', 'Wilson', 'Worker', '2', '2', '110', '2023-10-21 21:27:29', '2023-10-21 21:27:29'),
(47, 2, 'Property 36', 'Description 36', '96000', 'Family', 'House', 'Toronto', 'Wilson', 'Refugee', '3', '2', '155', '2023-10-21 21:27:29', '2023-10-21 21:27:29'),
(48, 2, 'Property 37', 'Description 37', '155000', 'Single', 'Apartment', 'Toronto', 'RoseDale', 'Student', '2', '1', '80', '2023-10-21 21:27:29', '2023-10-21 21:27:29'),
(49, 2, 'Property 38', 'Description 38', '67000', 'Student', 'Condo', 'Toronto', 'RoseDale', 'Student', '1', '1', '55', '2023-10-21 21:27:29', '2023-10-21 21:27:29'),
(50, 2, 'Property 39', 'Description 39', '190000', 'Retiree', 'House', 'Toronto', 'Wilson', 'Student', '4', '3', '180', '2023-10-21 21:27:29', '2023-10-21 21:27:29'),
(51, 2, 'Property 40', 'Description 40', '102000', 'Family', 'Apartment', 'Toronto', 'Wilson', 'Worker', '2', '2', '100', '2023-10-21 21:27:29', '2023-10-21 21:27:29');

-- --------------------------------------------------------

--
-- Table structure for table `list_image`
--

CREATE TABLE `list_image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `list_id` bigint(20) UNSIGNED DEFAULT NULL,
  `img_url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_21_123932_create_listings', 1),
(6, '2023_10_21_125054_create_schedule_appointmnet_inquiry', 1),
(7, '2023_10_21_125105_create_archive_property', 1),
(8, '2023_10_21_125119_create_list_image', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule_appointmnet_inquiry`
--

CREATE TABLE `schedule_appointmnet_inquiry` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `list_id` bigint(20) UNSIGNED DEFAULT NULL,
  `date_schedule` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `user_lifestyle` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `email_verified_at`, `password`, `phone`, `type`, `user_lifestyle`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Vincent', 'Elipe', 'v@myseneca.ca', NULL, '$2y$10$ARockaVTZFIRZQy6NMtbyOp7/UmC9pIYX6UYQoTMwYZnp6rn5vVcy', '1234567890', 'agent', 'agent', NULL, '2023-10-21 17:28:03', '2023-10-21 17:28:03'),
(3, 'k', 'k', 'k@k', NULL, '$2y$10$PZMEk17LNaK9kUZ5PLDTR.Kwkvg8x./N2scOTT5Bd5zifuDhlzC6m', 'kk', 'k', 'kk', NULL, '2023-10-21 19:44:23', '2023-10-21 19:44:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive_property`
--
ALTER TABLE `archive_property`
  ADD PRIMARY KEY (`id`),
  ADD KEY `archive_property_userid_agent_index` (`userid_agent`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `listings_userid_agent_index` (`userid_agent`);

--
-- Indexes for table `list_image`
--
ALTER TABLE `list_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `list_image_list_id_index` (`list_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `schedule_appointmnet_inquiry`
--
ALTER TABLE `schedule_appointmnet_inquiry`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedule_appointmnet_inquiry_user_id_index` (`user_id`),
  ADD KEY `schedule_appointmnet_inquiry_list_id_index` (`list_id`);

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
-- AUTO_INCREMENT for table `archive_property`
--
ALTER TABLE `archive_property`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `listings`
--
ALTER TABLE `listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `list_image`
--
ALTER TABLE `list_image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule_appointmnet_inquiry`
--
ALTER TABLE `schedule_appointmnet_inquiry`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `archive_property`
--
ALTER TABLE `archive_property`
  ADD CONSTRAINT `archive_property_userid_agent_foreign` FOREIGN KEY (`userid_agent`) REFERENCES `users` (`id`);

--
-- Constraints for table `listings`
--
ALTER TABLE `listings`
  ADD CONSTRAINT `listings_userid_agent_foreign` FOREIGN KEY (`userid_agent`) REFERENCES `users` (`id`);

--
-- Constraints for table `list_image`
--
ALTER TABLE `list_image`
  ADD CONSTRAINT `list_image_list_id_foreign` FOREIGN KEY (`list_id`) REFERENCES `listings` (`id`);

--
-- Constraints for table `schedule_appointmnet_inquiry`
--
ALTER TABLE `schedule_appointmnet_inquiry`
  ADD CONSTRAINT `schedule_appointmnet_inquiry_list_id_foreign` FOREIGN KEY (`list_id`) REFERENCES `listings` (`id`),
  ADD CONSTRAINT `schedule_appointmnet_inquiry_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
