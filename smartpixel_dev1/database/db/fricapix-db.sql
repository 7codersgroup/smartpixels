-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2020 at 10:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartpixels`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`properties`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bankings`
--

CREATE TABLE `bankings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_holder` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bankings`
--

INSERT INTO `bankings` (`id`, `user_id`, `bank_name`, `account_no`, `account_holder`, `created_at`, `updated_at`) VALUES
(3, 8, 'Access Bank', '0763198052', 'Samuel Oladipupo', '2020-05-31 11:56:18', '2020-05-31 13:00:42'),
(6, 1, 'Access Bank', '0763198045', 'Holder', '2020-05-31 13:20:45', '2020-06-04 14:19:44');

-- --------------------------------------------------------

--
-- Table structure for table `cart_storage`
--

CREATE TABLE `cart_storage` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart_data` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_storage`
--

INSERT INTO `cart_storage` (`id`, `cart_data`, `created_at`, `updated_at`) VALUES
('1_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:22;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:13:\"App\\DBStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:22;s:4:\"name\";s:13:\"Test Image 12\";s:5:\"price\";d:500;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:1:{s:3:\"url\";s:103:\"https://res.cloudinary.com/psarmmiey/image/private/t_Main/v1590679756/Fricapix/nf8eegdxkr40oev7dyox.jpg\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-05-05 23:35:41', '2020-06-18 11:24:16'),
('4_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:1:{i:22;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:13:\"App\\DBStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:22;s:4:\"name\";s:13:\"Test Image 12\";s:5:\"price\";d:500;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:1:{s:3:\"url\";s:103:\"https://res.cloudinary.com/psarmmiey/image/private/t_Main/v1590679756/Fricapix/nf8eegdxkr40oev7dyox.jpg\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-05-30 00:05:43', '2020-05-30 00:05:43'),
('6_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:5:{i:10;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:13:\"App\\DBStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:10;s:4:\"name\";s:11:\"Black Photo\";s:5:\"price\";d:400;s:8:\"quantity\";i:2;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:1:{s:3:\"url\";s:93:\"http://res.cloudinary.com/psarmmiey/image/upload/c_fit,h_3999,w_5999/ifjo6rkdapxfhtynq1nf.png\";}}s:10:\"conditions\";a:0:{}}}i:9;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:13:\"App\\DBStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:9;s:4:\"name\";s:11:\"Black Photo\";s:5:\"price\";d:4000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:1:{s:3:\"url\";s:93:\"http://res.cloudinary.com/psarmmiey/image/upload/c_fit,h_1200,w_1920/vk2lo3iusxkhxihphp1v.png\";}}s:10:\"conditions\";a:0:{}}}i:11;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:13:\"App\\DBStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:11;s:4:\"name\";s:16:\"Background Photo\";s:5:\"price\";d:4000;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:1:{s:3:\"url\";s:93:\"http://res.cloudinary.com/psarmmiey/image/upload/c_fit,h_1200,w_1920/sjzljyfcgykzjdglb7wv.png\";}}s:10:\"conditions\";a:0:{}}}i:12;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:13:\"App\\DBStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:12;s:4:\"name\";s:11:\"A Black Cat\";s:5:\"price\";d:500;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:1:{s:3:\"url\";s:93:\"http://res.cloudinary.com/psarmmiey/image/upload/c_fit,h_1600,w_2560/rifznqj68shzzwbdt3vv.png\";}}s:10:\"conditions\";a:0:{}}}i:8;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:13:\"App\\DBStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:8;s:4:\"name\";s:4:\"Skul\";s:5:\"price\";d:200;s:8:\"quantity\";i:2;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:1:{s:3:\"url\";s:93:\"http://res.cloudinary.com/psarmmiey/image/upload/c_fit,h_3563,w_2850/yzw7oa67abtuhqrzadrx.png\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-05-27 11:38:55', '2020-05-27 11:39:35'),
('7_cart_items', 'O:32:\"Darryldecode\\Cart\\CartCollection\":1:{s:8:\"\0*\0items\";a:4:{i:9;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:13:\"App\\DBStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:9;s:4:\"name\";s:11:\"Black Photo\";s:5:\"price\";d:4000;s:8:\"quantity\";i:3;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:1:{s:3:\"url\";s:93:\"http://res.cloudinary.com/psarmmiey/image/upload/c_fit,h_1200,w_1920/vk2lo3iusxkhxihphp1v.png\";}}s:10:\"conditions\";a:0:{}}}i:10;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:13:\"App\\DBStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:10;s:4:\"name\";s:11:\"Black Photo\";s:5:\"price\";d:400;s:8:\"quantity\";i:1;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:1:{s:3:\"url\";s:93:\"http://res.cloudinary.com/psarmmiey/image/upload/c_fit,h_3999,w_5999/ifjo6rkdapxfhtynq1nf.png\";}}s:10:\"conditions\";a:0:{}}}i:11;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:13:\"App\\DBStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:11;s:4:\"name\";s:16:\"Background Photo\";s:5:\"price\";d:4000;s:8:\"quantity\";i:5;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:1:{s:3:\"url\";s:93:\"http://res.cloudinary.com/psarmmiey/image/upload/c_fit,h_1200,w_1920/sjzljyfcgykzjdglb7wv.png\";}}s:10:\"conditions\";a:0:{}}}i:8;O:32:\"Darryldecode\\Cart\\ItemCollection\":2:{s:9:\"\0*\0config\";a:6:{s:14:\"format_numbers\";b:0;s:8:\"decimals\";i:0;s:9:\"dec_point\";s:1:\".\";s:13:\"thousands_sep\";s:1:\",\";s:7:\"storage\";s:13:\"App\\DBStorage\";s:6:\"events\";N;}s:8:\"\0*\0items\";a:6:{s:2:\"id\";i:8;s:4:\"name\";s:4:\"Skul\";s:5:\"price\";d:200;s:8:\"quantity\";i:2;s:10:\"attributes\";O:41:\"Darryldecode\\Cart\\ItemAttributeCollection\":1:{s:8:\"\0*\0items\";a:1:{s:3:\"url\";s:93:\"http://res.cloudinary.com/psarmmiey/image/upload/c_fit,h_3563,w_2850/yzw7oa67abtuhqrzadrx.png\";}}s:10:\"conditions\";a:0:{}}}}}', '2020-05-07 12:33:15', '2020-05-07 14:05:21');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 4),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, '{}', 5),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, '{}', 6),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 7),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, '{}', 10),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}', 12),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 13),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, '{}', 14),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 0, 1, 1, 1, 1, 1, '{}', 11),
(22, 1, 'firstname', 'text', 'Firstname', 1, 1, 1, 1, 1, 1, '{}', 2),
(23, 1, 'email_verified_at', 'timestamp', 'Email Verified At', 0, 1, 1, 1, 1, 1, '{}', 8),
(24, 1, 'lastname', 'text', 'Lastname', 1, 1, 1, 1, 1, 1, '{}', 3),
(25, 1, 'country', 'text', 'Country', 0, 1, 1, 1, 1, 1, '{}', 15),
(26, 1, 'phone', 'text', 'Phone', 0, 1, 1, 1, 1, 1, '{}', 16),
(27, 4, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(28, 4, 'user_id', 'text', 'User Id', 1, 1, 1, 0, 1, 0, '{}', 2),
(29, 4, 'bank_name', 'text', 'Bank Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(30, 4, 'account_no', 'text', 'Account No', 1, 1, 1, 1, 1, 1, '{}', 4),
(31, 4, 'account_holder', 'text', 'Account Holder', 1, 1, 1, 1, 1, 1, '{}', 5),
(32, 4, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(33, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(34, 5, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(35, 5, 'user_id', 'hidden', 'User Id', 0, 0, 0, 0, 0, 0, '{}', 3),
(36, 5, 'tag', 'text', 'Tag', 0, 1, 1, 1, 1, 1, '{}', 6),
(37, 5, 'location', 'text', 'Location', 0, 1, 1, 1, 1, 1, '{}', 7),
(38, 5, 'created_at', 'timestamp', 'Uploaded At', 0, 1, 1, 1, 0, 1, '{}', 9),
(39, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(40, 5, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(41, 5, 'description', 'text_area', 'Description', 0, 1, 1, 1, 1, 1, '{}', 4),
(42, 5, 'category', 'select_multiple', 'Category', 0, 1, 1, 1, 1, 1, '{}', 11),
(43, 5, 'price', 'text', 'Price', 0, 1, 1, 1, 1, 1, '{}', 8),
(44, 5, 'rating', 'text', 'Rating', 0, 1, 1, 1, 1, 1, '{\"on\":\"18+\",\"off\":\"None\",\"checked\":true}', 12),
(45, 5, 'url', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 13),
(46, 5, 'review', 'select_dropdown', 'Status', 0, 1, 1, 1, 1, 1, '{\"default\":\"PENDING\",\"options\":{\"APPROVED\":\"APPROVED\",\"REJECTED\":\"REJECTED\",\"PENDING\":\"PENDING\"}}', 14),
(47, 5, 'likes', 'hidden', 'Likes', 0, 0, 0, 0, 0, 0, '{}', 15),
(48, 5, 'downloads', 'hidden', 'Downloads', 0, 0, 0, 0, 0, 0, '{}', 16),
(50, 4, 'banking_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"email\",\"pivot_table\":\"bankings\",\"pivot\":\"0\",\"taggable\":\"0\"}', 8),
(51, 5, 'image_belongsto_user_relationship', 'relationship', 'Uploaded By', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\User\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"user_id\",\"key\":\"id\",\"label\":\"firstname\",\"pivot_table\":\"bankings\",\"pivot\":\"0\",\"taggable\":\"0\"}', 5);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-05-16 08:52:00', '2020-05-16 08:56:27'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2020-05-16 08:52:00', '2020-05-16 08:52:00'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2020-05-16 08:52:00', '2020-05-16 08:52:00'),
(4, 'bankings', 'bankings', 'Banking', 'Bankings', NULL, 'App\\Banking', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-05-16 08:57:32', '2020-05-16 09:27:57'),
(5, 'images', 'images', 'Image', 'Images', 'voyager-images', 'App\\Image', NULL, NULL, NULL, 1, 1, '{\"order_column\":\"id\",\"order_display_column\":\"created_at\",\"order_direction\":\"desc\",\"default_search_key\":\"title\",\"scope\":null}', '2020-05-16 09:12:30', '2020-05-16 17:19:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `id_verification`
--

CREATE TABLE `id_verification` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doc_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_doc_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saved_doc_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `likes` int(11) DEFAULT NULL,
  `downloads` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `user_id`, `tag`, `location`, `created_at`, `updated_at`, `title`, `description`, `category`, `price`, `rating`, `public_id`, `url`, `review`, `likes`, `downloads`) VALUES
(8, '1', 'Skul, Head', 'Nigeria', '2020-05-03 10:14:28', '2020-05-03 10:14:28', 'Skul', 'A designed skul', NULL, '200', NULL, NULL, 'http://res.cloudinary.com/psarmmiey/image/upload/c_fit,h_3563,w_2850/yzw7oa67abtuhqrzadrx.png', 'APPROVED', NULL, NULL),
(9, '1', 'Ola,Kolade', 'Nigeria', '2020-05-04 03:13:26', '2020-05-04 03:13:26', 'Black Photo', 'Anonymous Description', NULL, '4000', NULL, NULL, 'http://res.cloudinary.com/psarmmiey/image/upload/c_fit,h_1200,w_1920/vk2lo3iusxkhxihphp1v.png', 'PENDING', NULL, NULL),
(10, '1', NULL, 'Nigeria', '2020-05-05 09:01:34', '2020-05-05 09:01:34', 'Black Photo', 'imim', NULL, '400', NULL, NULL, 'http://res.cloudinary.com/psarmmiey/image/upload/c_fit,h_3999,w_5999/ifjo6rkdapxfhtynq1nf.png', 'APPROVED', NULL, NULL),
(11, '1', 'Black,Wallpaper', 'Nigeria', '2020-05-07 09:29:00', '2020-05-16 17:20:23', 'Background Photo', 'No Description', '[]', '4000', NULL, NULL, 'http://res.cloudinary.com/psarmmiey/image/upload/c_fit,h_1200,w_1920/sjzljyfcgykzjdglb7wv.png', 'REJECTED', NULL, NULL),
(12, '7', 'Cat,Black', 'Nigeria', '2020-05-07 12:18:00', '2020-05-16 10:46:38', 'A Black Cat', 'A Black Cat', '[]', '500', NULL, NULL, 'http://res.cloudinary.com/psarmmiey/image/upload/c_fit,h_1600,w_2560/rifznqj68shzzwbdt3vv.png', 'APPROVED', NULL, NULL),
(21, '1', NULL, NULL, '2020-05-28 13:48:00', '2020-05-28 14:12:55', 'Mr', NULL, '[]', NULL, NULL, 'Fricapix/vjkfltyjvvzowl8xnrdy', 'https://res.cloudinary.com/psarmmiey/image/private/t_Main/v1590677309/Fricapix/vjkfltyjvvzowl8xnrdy.jpg', 'APPROVED', NULL, NULL),
(22, '1', NULL, NULL, '2020-05-28 14:29:26', '2020-05-28 14:29:26', 'Test Image 12', 'vk bfjhb hjbfbj geg3roh', NULL, '500', NULL, 'Fricapix/nf8eegdxkr40oev7dyox', 'https://res.cloudinary.com/psarmmiey/image/private/t_Main/v1590679756/Fricapix/nf8eegdxkr40oev7dyox.jpg', 'PENDING', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL COMMENT 'user_id',
  `likeable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `likeable_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `likeable_type`, `likeable_id`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `magic_links`
--

CREATE TABLE `magic_links` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_visits` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `max_visits` tinyint(3) UNSIGNED DEFAULT NULL,
  `available_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `magic_links`
--

INSERT INTO `magic_links` (`id`, `token`, `action`, `num_visits`, `max_visits`, `available_at`, `created_at`, `updated_at`) VALUES
('84a2ad1c-1875-45eb-8188-74cc22e3936c', 'SiLWk9iNdb6ItJ7UFWybc9BTbxhMVzBOG9saz7gbVkRZsdut0Sz79b33BbAkdRfo', 'O:29:\"MagicLink\\Actions\\LoginAction\":3:{s:7:\"\0*\0user\";O:8:\"App\\User\":30:{s:11:\"\0*\0fillable\";a:7:{i:0;s:9:\"firstname\";i:1;s:8:\"lastname\";i:2;s:5:\"email\";i:3;s:8:\"password\";i:4;s:7:\"country\";i:5;s:5:\"phone\";i:6;s:9:\"google_id\";}s:9:\"\0*\0hidden\";a:2:{i:0;s:8:\"password\";i:1;s:14:\"remember_token\";}s:8:\"\0*\0casts\";a:1:{s:17:\"email_verified_at\";s:8:\"datetime\";}s:10:\"\0*\0guarded\";a:0:{}s:21:\"additional_attributes\";a:1:{i:0;s:6:\"locale\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:5:\"users\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:15:{s:2:\"id\";i:1;s:7:\"role_id\";i:1;s:9:\"firstname\";s:6:\"Samuel\";s:5:\"email\";s:19:\"psarmmiey@gmail.com\";s:6:\"avatar\";s:104:\"http://res.cloudinary.com/psarmmiey/image/upload/c_fit,h_3999,w_5999/v1/samples/l5h1cdnosiuqsa3thts8.png\";s:17:\"email_verified_at\";N;s:8:\"password\";s:60:\"$2y$10$o16G2iKUM1aMX7BHQWMW7u1EqlW7z1KVlhzWZ/gUhMaNyNFp5/oqW\";s:14:\"remember_token\";s:60:\"qbNK9IGR9kCnFetFke5UyvfbXQd2WstdhxzD84cd3l4QTPQ6XtbbR4MqAYqp\";s:8:\"settings\";N;s:10:\"created_at\";s:19:\"2020-04-10 01:00:31\";s:10:\"updated_at\";s:19:\"2020-05-27 18:20:49\";s:8:\"lastname\";s:9:\"Oladipupo\";s:7:\"country\";s:0:\"\";s:5:\"phone\";s:0:\"\";s:9:\"google_id\";N;}s:11:\"\0*\0original\";a:15:{s:2:\"id\";i:1;s:7:\"role_id\";i:1;s:9:\"firstname\";s:6:\"Samuel\";s:5:\"email\";s:19:\"psarmmiey@gmail.com\";s:6:\"avatar\";s:104:\"http://res.cloudinary.com/psarmmiey/image/upload/c_fit,h_3999,w_5999/v1/samples/l5h1cdnosiuqsa3thts8.png\";s:17:\"email_verified_at\";N;s:8:\"password\";s:60:\"$2y$10$o16G2iKUM1aMX7BHQWMW7u1EqlW7z1KVlhzWZ/gUhMaNyNFp5/oqW\";s:14:\"remember_token\";s:60:\"qbNK9IGR9kCnFetFke5UyvfbXQd2WstdhxzD84cd3l4QTPQ6XtbbR4MqAYqp\";s:8:\"settings\";N;s:10:\"created_at\";s:19:\"2020-04-10 01:00:31\";s:10:\"updated_at\";s:19:\"2020-05-27 18:20:49\";s:8:\"lastname\";s:9:\"Oladipupo\";s:7:\"country\";s:0:\"\";s:5:\"phone\";s:0:\"\";s:9:\"google_id\";N;}s:10:\"\0*\0changes\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:10:\"\0*\0visible\";a:0:{}s:20:\"\0*\0rememberTokenName\";s:14:\"remember_token\";s:14:\"\0*\0accessToken\";N;}s:8:\"\0*\0guard\";s:3:\"web\";s:15:\"\0*\0httpResponse\";s:1211:\"O:32:\"Illuminate\\Http\\RedirectResponse\":11:{s:10:\"\0*\0request\";N;s:10:\"\0*\0session\";N;s:12:\"\0*\0targetUrl\";s:31:\"http://127.0.0.1:8081/dashboard\";s:7:\"headers\";O:50:\"Symfony\\Component\\HttpFoundation\\ResponseHeaderBag\":5:{s:23:\"\0*\0computedCacheControl\";a:2:{s:8:\"no-cache\";b:1;s:7:\"private\";b:1;}s:10:\"\0*\0cookies\";a:0:{}s:14:\"\0*\0headerNames\";a:3:{s:13:\"cache-control\";s:13:\"Cache-Control\";s:4:\"date\";s:4:\"Date\";s:8:\"location\";s:8:\"Location\";}s:10:\"\0*\0headers\";a:3:{s:13:\"cache-control\";a:1:{i:0;s:17:\"no-cache, private\";}s:4:\"date\";a:1:{i:0;s:29:\"Mon, 08 Jun 2020 10:45:02 GMT\";}s:8:\"location\";a:1:{i:0;s:31:\"http://127.0.0.1:8081/dashboard\";}}s:15:\"\0*\0cacheControl\";a:0:{}}s:10:\"\0*\0content\";s:370:\"<!DOCTYPE html>\n<html>\n    <head>\n        <meta charset=\"UTF-8\" />\n        <meta http-equiv=\"refresh\" content=\"0;url=\'http://127.0.0.1:8081/dashboard\'\" />\n\n        <title>Redirecting to http://127.0.0.1:8081/dashboard</title>\n    </head>\n    <body>\n        Redirecting to <a href=\"http://127.0.0.1:8081/dashboard\">http://127.0.0.1:8081/dashboard</a>.\n    </body>\n</html>\";s:10:\"\0*\0version\";s:3:\"1.0\";s:13:\"\0*\0statusCode\";i:302;s:13:\"\0*\0statusText\";s:5:\"Found\";s:10:\"\0*\0charset\";N;s:8:\"original\";N;s:9:\"exception\";N;}\";}', 0, NULL, '2020-06-11 09:45:02', '2020-06-08 09:45:05', '2020-06-08 09:45:05'),
('925058b5-6878-4819-8267-0bdcdb8b92fe', 'J9dsr5UM9vvWbvkA77JtBYZidBx9lNugWgk7UbtwOike5e0KPGWxLga68NBGOhdc', 'O:29:\"MagicLink\\Actions\\LoginAction\":3:{s:7:\"\0*\0user\";O:8:\"App\\User\":30:{s:11:\"\0*\0fillable\";a:7:{i:0;s:9:\"firstname\";i:1;s:8:\"lastname\";i:2;s:5:\"email\";i:3;s:8:\"password\";i:4;s:7:\"country\";i:5;s:5:\"phone\";i:6;s:9:\"google_id\";}s:9:\"\0*\0hidden\";a:2:{i:0;s:8:\"password\";i:1;s:14:\"remember_token\";}s:8:\"\0*\0casts\";a:1:{s:17:\"email_verified_at\";s:8:\"datetime\";}s:10:\"\0*\0guarded\";a:0:{}s:21:\"additional_attributes\";a:1:{i:0;s:6:\"locale\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:5:\"users\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:15:{s:2:\"id\";i:1;s:7:\"role_id\";i:1;s:9:\"firstname\";s:6:\"Samuel\";s:5:\"email\";s:19:\"psarmmiey@gmail.com\";s:6:\"avatar\";s:104:\"http://res.cloudinary.com/psarmmiey/image/upload/c_fit,h_3999,w_5999/v1/samples/l5h1cdnosiuqsa3thts8.png\";s:17:\"email_verified_at\";N;s:8:\"password\";s:60:\"$2y$10$o16G2iKUM1aMX7BHQWMW7u1EqlW7z1KVlhzWZ/gUhMaNyNFp5/oqW\";s:14:\"remember_token\";s:60:\"qbNK9IGR9kCnFetFke5UyvfbXQd2WstdhxzD84cd3l4QTPQ6XtbbR4MqAYqp\";s:8:\"settings\";N;s:10:\"created_at\";s:19:\"2020-04-10 01:00:31\";s:10:\"updated_at\";s:19:\"2020-05-27 18:20:49\";s:8:\"lastname\";s:9:\"Oladipupo\";s:7:\"country\";s:0:\"\";s:5:\"phone\";s:0:\"\";s:9:\"google_id\";N;}s:11:\"\0*\0original\";a:15:{s:2:\"id\";i:1;s:7:\"role_id\";i:1;s:9:\"firstname\";s:6:\"Samuel\";s:5:\"email\";s:19:\"psarmmiey@gmail.com\";s:6:\"avatar\";s:104:\"http://res.cloudinary.com/psarmmiey/image/upload/c_fit,h_3999,w_5999/v1/samples/l5h1cdnosiuqsa3thts8.png\";s:17:\"email_verified_at\";N;s:8:\"password\";s:60:\"$2y$10$o16G2iKUM1aMX7BHQWMW7u1EqlW7z1KVlhzWZ/gUhMaNyNFp5/oqW\";s:14:\"remember_token\";s:60:\"qbNK9IGR9kCnFetFke5UyvfbXQd2WstdhxzD84cd3l4QTPQ6XtbbR4MqAYqp\";s:8:\"settings\";N;s:10:\"created_at\";s:19:\"2020-04-10 01:00:31\";s:10:\"updated_at\";s:19:\"2020-05-27 18:20:49\";s:8:\"lastname\";s:9:\"Oladipupo\";s:7:\"country\";s:0:\"\";s:5:\"phone\";s:0:\"\";s:9:\"google_id\";N;}s:10:\"\0*\0changes\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:10:\"\0*\0visible\";a:0:{}s:20:\"\0*\0rememberTokenName\";s:14:\"remember_token\";s:14:\"\0*\0accessToken\";N;}s:8:\"\0*\0guard\";s:3:\"web\";s:15:\"\0*\0httpResponse\";s:1211:\"O:32:\"Illuminate\\Http\\RedirectResponse\":11:{s:10:\"\0*\0request\";N;s:10:\"\0*\0session\";N;s:12:\"\0*\0targetUrl\";s:31:\"http://127.0.0.1:8081/dashboard\";s:7:\"headers\";O:50:\"Symfony\\Component\\HttpFoundation\\ResponseHeaderBag\":5:{s:23:\"\0*\0computedCacheControl\";a:2:{s:8:\"no-cache\";b:1;s:7:\"private\";b:1;}s:10:\"\0*\0cookies\";a:0:{}s:14:\"\0*\0headerNames\";a:3:{s:13:\"cache-control\";s:13:\"Cache-Control\";s:4:\"date\";s:4:\"Date\";s:8:\"location\";s:8:\"Location\";}s:10:\"\0*\0headers\";a:3:{s:13:\"cache-control\";a:1:{i:0;s:17:\"no-cache, private\";}s:4:\"date\";a:1:{i:0;s:29:\"Mon, 08 Jun 2020 10:46:55 GMT\";}s:8:\"location\";a:1:{i:0;s:31:\"http://127.0.0.1:8081/dashboard\";}}s:15:\"\0*\0cacheControl\";a:0:{}}s:10:\"\0*\0content\";s:370:\"<!DOCTYPE html>\n<html>\n    <head>\n        <meta charset=\"UTF-8\" />\n        <meta http-equiv=\"refresh\" content=\"0;url=\'http://127.0.0.1:8081/dashboard\'\" />\n\n        <title>Redirecting to http://127.0.0.1:8081/dashboard</title>\n    </head>\n    <body>\n        Redirecting to <a href=\"http://127.0.0.1:8081/dashboard\">http://127.0.0.1:8081/dashboard</a>.\n    </body>\n</html>\";s:10:\"\0*\0version\";s:3:\"1.0\";s:13:\"\0*\0statusCode\";i:302;s:13:\"\0*\0statusText\";s:5:\"Found\";s:10:\"\0*\0charset\";N;s:8:\"original\";N;s:9:\"exception\";N;}\";}', 0, NULL, '2020-06-11 09:46:55', '2020-06-08 09:46:55', '2020-06-08 09:46:55');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-05-16 08:52:01', '2020-05-16 08:52:01');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2020-05-16 08:52:02', '2020-05-16 08:52:02', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, 5, 3, '2020-05-16 08:52:02', '2020-05-16 10:54:13', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 2, '2020-05-16 08:52:02', '2020-05-16 09:51:53', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, 5, 2, '2020-05-16 08:52:02', '2020-05-16 09:51:54', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 5, '2020-05-16 08:52:02', '2020-05-16 10:54:13', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2020-05-16 08:52:02', '2020-05-16 09:51:36', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 4, '2020-05-16 08:52:02', '2020-05-16 10:54:13', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 5, '2020-05-16 08:52:02', '2020-05-16 10:54:13', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 6, '2020-05-16 08:52:02', '2020-05-16 10:54:13', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, 5, 8, '2020-05-16 08:52:02', '2020-05-16 10:54:13', 'voyager.settings.index', NULL),
(11, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 7, '2020-05-16 08:52:06', '2020-05-16 10:54:13', 'voyager.hooks', NULL),
(12, 1, 'Bankings', '', '_self', 'voyager-dollar', '#000000', NULL, 4, '2020-05-16 08:57:32', '2020-05-16 10:54:13', 'voyager.bankings.index', 'null'),
(13, 1, 'Uploaded Images', '', '_self', 'voyager-images', '#000000', NULL, 3, '2020-05-16 09:12:31', '2020-05-16 10:54:43', 'voyager.images.index', 'null');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 2),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 2),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 2),
(6, '2016_06_01_000004_create_oauth_clients_table', 2),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 2),
(8, '2020_04_10_000412_create_products_table', 3),
(9, '2020_04_10_012641_add_details_to_users', 4),
(10, '2020_04_10_014850_rename_firstname_to_users', 5),
(11, '2020_04_10_015123_drop_nsme_from_users', 6),
(12, '2014_10_12_100000_create_password_resets_table', 7),
(13, '2020_04_10_103624_create_id_verification_table', 8),
(14, '2020_04_10_135541_create_images_table', 9),
(15, '2020_04_23_140617_add_profile_to_images', 10),
(16, '2020_04_23_141242_add_url_to_images', 11),
(17, '2020_04_23_141441_remove_image_from_images', 12),
(18, '2020_04_26_200956_add_review_to_images', 13),
(19, '2020_04_28_143150_add_likesdownloads_to_images', 14),
(20, '2020_04_04_000000_create_user_follower_table', 15),
(21, '2018_12_14_000000_create_likes_table', 16),
(22, '2020_05_06_002149_create_cart_storage_table', 17),
(23, '2020_05_11_130507_create_banking_table', 18),
(24, '2016_01_01_000000_add_voyager_user_fields', 19),
(25, '2016_01_01_000000_create_data_types_table', 19),
(26, '2016_05_19_173453_create_menu_table', 19),
(27, '2016_10_21_190000_create_roles_table', 19),
(28, '2016_10_21_190000_create_settings_table', 19),
(29, '2016_11_30_135954_create_permission_table', 19),
(30, '2016_11_30_141208_create_permission_role_table', 19),
(31, '2016_12_26_201236_data_types__add__server_side', 19),
(32, '2017_01_13_000000_add_route_to_menu_items_table', 19),
(33, '2017_01_14_005015_create_translations_table', 19),
(34, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 19),
(35, '2017_03_06_000000_add_controller_to_data_types_table', 19),
(36, '2017_04_21_000000_add_order_to_data_rows_table', 19),
(37, '2017_07_05_210000_add_policyname_to_data_types_table', 19),
(38, '2017_08_05_000000_add_group_to_settings_table', 19),
(39, '2017_11_26_013050_add_user_role_relationship', 19),
(40, '2017_11_26_015000_create_user_roles_table', 19),
(41, '2018_03_11_000000_add_user_settings', 19),
(42, '2018_03_14_000000_add_details_to_data_types_table', 19),
(43, '2018_03_16_000000_make_settings_value_nullable', 19),
(44, '2017_07_06_000000_create_table_magic_links', 20),
(45, '2020_05_27_101408_add_google_id_column', 21),
(46, '2020_05_27_142323_create_profile_table', 22),
(47, '2020_05_28_120701_add_public_id_to_images', 23),
(48, '2020_06_17_142226_create_activity_log_table', 24),
(49, '2020_06_18_090001_create_payments_table', 25),
(50, '2020_06_18_151905_create_earnings_table', 26);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('11e2e9e0820b1d557e2731be81e27bf30dd72b2b69cd422c62a2d0f9618a0c53827c016e1d2c5c6c', 3, 1, 'MyApp', '[]', 0, '2020-04-10 00:54:29', '2020-04-10 00:54:29', '2021-04-10 01:54:29'),
('18c75613e0e81b50dfa7e9417b363039a9f6e33ca391e042de65bfc7c3da07ec158a4c8c299f61f5', 1, 1, 'MyApp', '[]', 0, '2020-04-10 00:00:59', '2020-04-10 00:00:59', '2021-04-10 01:00:59'),
('807a4f4209463420a997265fa1a607ecbf7ae93d3d6126c4f0766dcb1b94d05499413cd4bd7d27ec', 1, 1, 'MyApp', '[]', 0, '2020-04-23 14:17:35', '2020-04-23 14:17:35', '2021-04-23 15:17:35'),
('8cf766eed7270f3c6e1662165d25ebb4ec40ac17fdbb6384f345ccdb423bb21fb245721fcbf4191d', 1, 1, 'MyApp', '[]', 0, '2020-04-10 00:00:34', '2020-04-10 00:00:34', '2021-04-10 01:00:34'),
('a06072666b3ac9fb3f29294823645d5d3567c8947bc8de369a0ce0237f73697dad00377435be8dbd', 1, 1, 'MyApp', '[]', 0, '2020-04-23 14:22:07', '2020-04-23 14:22:07', '2021-04-23 15:22:07'),
('a9d81abdbd82d7dc39d53388cd5b0122bb10f73178aaeac61be3567cd3e91f153d2fcf80040b0116', 2, 1, 'MyApp', '[]', 0, '2020-04-10 00:51:43', '2020-04-10 00:51:43', '2021-04-10 01:51:43'),
('b902204afebf79def807fe086dfb633fac7c4825599f3f57597e17e62f3aab852975b32005cb6695', 1, 1, 'MyApp', '[]', 0, '2020-04-23 14:34:00', '2020-04-23 14:34:00', '2021-04-23 15:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', '4jGqbFfg27GzWVRQEcoEmW3AHsp5doprpxusOPBO', 'http://localhost', 1, 0, 0, '2020-04-09 22:59:43', '2020-04-09 22:59:43'),
(2, NULL, 'Laravel Password Grant Client', 'wvkbuxjfw9xSUl71xINohZ514JZjk7U4jcJ5FvDS', 'http://localhost', 0, 1, 0, '2020-04-09 22:59:44', '2020-04-09 22:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-04-09 22:59:44', '2020-04-09 22:59:44');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` smallint(6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('oladipupo.samuel@oouagoiwoye.edu.ng', '$2y$10$QnzC8.AZAUNcKPA7pdW3gOuHYWLGaE/lVwT67hLzGFMw3uefSPhSe', '2020-05-29 22:05:30'),
('psarmmiey@gmail.com', '$2y$10$c0yw1vQ1p79e2GvMgBoWK.dsFHdKkn2byJ89PJxpkK9i1pjic0URu', '2020-05-29 23:10:19');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `req_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_paid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `channel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `createdAt` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `reference`, `req_amount`, `amount_paid`, `status`, `channel`, `createdAt`, `created_at`, `updated_at`) VALUES
(1, 1, 'MY1Qk2CNQuRLhzAMjPpAknPFH', '96750', NULL, NULL, NULL, NULL, '2020-06-18 11:05:40', '2020-06-18 11:05:40'),
(2, 1, '8cLWCWIh782rL3YoNH78sPciD', '96750', NULL, NULL, NULL, NULL, '2020-06-18 11:24:00', '2020-06-18 11:24:00'),
(3, 1, 'qYp6d4msO78ooHrpOlZ7VR4X3', '53750', NULL, NULL, NULL, NULL, '2020-06-18 11:24:20', '2020-06-18 11:24:20');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2020-05-16 08:52:03', '2020-05-16 08:52:03'),
(2, 'browse_bread', NULL, '2020-05-16 08:52:03', '2020-05-16 08:52:03'),
(3, 'browse_database', NULL, '2020-05-16 08:52:03', '2020-05-16 08:52:03'),
(4, 'browse_media', NULL, '2020-05-16 08:52:03', '2020-05-16 08:52:03'),
(5, 'browse_compass', NULL, '2020-05-16 08:52:03', '2020-05-16 08:52:03'),
(6, 'browse_menus', 'menus', '2020-05-16 08:52:03', '2020-05-16 08:52:03'),
(7, 'read_menus', 'menus', '2020-05-16 08:52:03', '2020-05-16 08:52:03'),
(8, 'edit_menus', 'menus', '2020-05-16 08:52:03', '2020-05-16 08:52:03'),
(9, 'add_menus', 'menus', '2020-05-16 08:52:03', '2020-05-16 08:52:03'),
(10, 'delete_menus', 'menus', '2020-05-16 08:52:03', '2020-05-16 08:52:03'),
(11, 'browse_roles', 'roles', '2020-05-16 08:52:03', '2020-05-16 08:52:03'),
(12, 'read_roles', 'roles', '2020-05-16 08:52:03', '2020-05-16 08:52:03'),
(13, 'edit_roles', 'roles', '2020-05-16 08:52:03', '2020-05-16 08:52:03'),
(14, 'add_roles', 'roles', '2020-05-16 08:52:03', '2020-05-16 08:52:03'),
(15, 'delete_roles', 'roles', '2020-05-16 08:52:03', '2020-05-16 08:52:03'),
(16, 'browse_users', 'users', '2020-05-16 08:52:04', '2020-05-16 08:52:04'),
(17, 'read_users', 'users', '2020-05-16 08:52:04', '2020-05-16 08:52:04'),
(18, 'edit_users', 'users', '2020-05-16 08:52:04', '2020-05-16 08:52:04'),
(19, 'add_users', 'users', '2020-05-16 08:52:04', '2020-05-16 08:52:04'),
(20, 'delete_users', 'users', '2020-05-16 08:52:04', '2020-05-16 08:52:04'),
(21, 'browse_settings', 'settings', '2020-05-16 08:52:04', '2020-05-16 08:52:04'),
(22, 'read_settings', 'settings', '2020-05-16 08:52:04', '2020-05-16 08:52:04'),
(23, 'edit_settings', 'settings', '2020-05-16 08:52:04', '2020-05-16 08:52:04'),
(24, 'add_settings', 'settings', '2020-05-16 08:52:04', '2020-05-16 08:52:04'),
(25, 'delete_settings', 'settings', '2020-05-16 08:52:04', '2020-05-16 08:52:04'),
(26, 'browse_hooks', NULL, '2020-05-16 08:52:06', '2020-05-16 08:52:06'),
(27, 'browse_bankings', 'bankings', '2020-05-16 08:57:32', '2020-05-16 08:57:32'),
(28, 'read_bankings', 'bankings', '2020-05-16 08:57:32', '2020-05-16 08:57:32'),
(29, 'edit_bankings', 'bankings', '2020-05-16 08:57:32', '2020-05-16 08:57:32'),
(30, 'add_bankings', 'bankings', '2020-05-16 08:57:32', '2020-05-16 08:57:32'),
(31, 'delete_bankings', 'bankings', '2020-05-16 08:57:32', '2020-05-16 08:57:32'),
(32, 'browse_images', 'images', '2020-05-16 09:12:31', '2020-05-16 09:12:31'),
(33, 'read_images', 'images', '2020-05-16 09:12:31', '2020-05-16 09:12:31'),
(34, 'edit_images', 'images', '2020-05-16 09:12:31', '2020-05-16 09:12:31'),
(35, 'add_images', 'images', '2020-05-16 09:12:31', '2020-05-16 09:12:31'),
(36, 'delete_images', 'images', '2020-05-16 09:12:31', '2020-05-16 09:12:31');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'Product 1', 'Iphone 11', '2020-04-10 00:06:48', '2020-04-10 00:06:48'),
(2, 'Product 1', 'Iphone 11', '2020-04-21 11:19:23', '2020-04-21 11:19:23');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `user_id`, `country`, `phone`, `address`, `city`, `zip`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '08101255162', 'ICT Centre', 'Ago-Iwoye', '120101', '2020-05-27 15:00:46', '2020-05-27 17:06:50'),
(5, 6, '3', '08101255162', 'ICT Centre', 'Ago-Iwoye', '120101', '2020-05-27 15:42:40', '2020-05-27 16:58:27'),
(6, 10, NULL, NULL, NULL, NULL, NULL, '2020-05-30 00:16:11', '2020-05-30 00:16:11');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2020-05-16 08:52:02', '2020-05-16 08:52:02'),
(2, 'user', 'Normal User', '2020-05-16 08:52:02', '2020-05-16 08:52:02');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'admin.google_analytics_tracking_id', 'Google Analytics Tracking ID', '837489115697-a67n27uuj8d8hklqk9cebf8jgkh5978e.apps.googleusercontent.com', '', 'text', 4, 'Admin'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Fricapix', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Manage Fricapix Assets', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'site.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '837489115697-a67n27uuj8d8hklqk9cebf8jgkh5978e.apps.googleusercontent.com', '', 'text', 1, 'Site');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `firstname`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`, `lastname`, `country`, `phone`, `google_id`) VALUES
(1, 1, 'Samuel', 'psarmmiey@gmail.com', 'http://res.cloudinary.com/psarmmiey/image/upload/c_fit,h_3999,w_5999/v1/samples/l5h1cdnosiuqsa3thts8.png', NULL, '$2y$10$o16G2iKUM1aMX7BHQWMW7u1EqlW7z1KVlhzWZ/gUhMaNyNFp5/oqW', 'jD2911PG9vrHh05fJ1XfI2aUnxiz84IVoIWQeWwyc3JzogJM84eY81BlThjo', NULL, '2020-04-10 00:00:31', '2020-05-27 17:20:49', 'Oladipupo', '', '', NULL),
(2, NULL, 'Sam', 'psarmmiey@gmail.co', 'users/default.png', NULL, '$2y$10$jZI5GxZBIt./w73vnEBWYO8c0Qa49o3Ycj4nX6aju4ploSEJ2qiRG', NULL, NULL, '2020-04-10 00:51:43', '2020-04-10 00:51:43', 'Oladipupo', 'Nigeria', '08101255162', NULL),
(3, NULL, 'Sam', 'dammy@gmail.com', 'users/default.png', NULL, '$2y$10$IQX5vrD5Dgcn6OimEtWUjOzYQl2QOQXe.FPezx32yqVEeusoR6NnG', NULL, NULL, '2020-04-10 00:54:29', '2020-04-10 00:54:29', 'Oladipupo', 'Nigeria', '08101255162', NULL),
(4, NULL, 'Sam', 'oladipupo.samuel@oouagoiwoye.edu.ng', 'users/default.png', NULL, '$2y$10$xPf9Jqqyws5cXerpIF1rNuEYXWnkHk7G1JqyYUPMHHZInSkfkGsXW', NULL, NULL, '2020-04-10 02:52:31', '2020-04-10 02:52:31', 'John', '4', '08101255162', NULL),
(5, NULL, 'Sam', 'oladipupo.samuel@oouagoiwoye.edu', 'users/default.png', NULL, '$2y$10$vfE69iUNkwOeQiUuSY2fkuxw5jhEJmUq69XGXRsIA0jNnuy/iu.D2', NULL, NULL, '2020-04-10 02:58:39', '2020-04-10 02:58:39', 'John', '4', '012345678', NULL),
(6, NULL, 'Samuel', 'mail@mail.com', 'http://res.cloudinary.com/psarmmiey/image/upload/c_fit,h_500,w_500/v1/samples/pe6vowkyr0cafnzr7enc.png', NULL, '$2y$10$pn3gwPIiO6tPJ/uHj29IFONZ4HpDyKaw42N7MtXos8fxLPEdhyK.u', NULL, NULL, '2020-05-04 00:50:04', '2020-05-27 16:58:27', 'Oladipupo', '3', '08101255162', NULL),
(7, NULL, 'John', 'eltonjohn@gmail.com', 'users/default.png', NULL, '$2y$10$ZJpPc3CKwWdhf4cw2REgnebs2uUip0XV.qCniHgqqd0kjVV7P/UCC', NULL, NULL, '2020-05-07 11:04:12', '2020-05-07 11:04:12', 'Elton', NULL, NULL, NULL),
(8, 2, 'Frica', 'frikapix@gmail.com', 'users/default.png', NULL, NULL, NULL, NULL, '2020-05-29 23:58:26', '2020-05-29 23:58:26', 'pix', NULL, NULL, '107033650085090572015'),
(10, 2, 'Samuel', 'mrtolusamuel@gmail.com', 'http://res.cloudinary.com/psarmmiey/image/upload/c_fit,h_500,w_500/v1/samples/buqfhr286ceto1jmjd58.png', NULL, NULL, NULL, NULL, '2020-05-30 00:15:04', '2020-05-30 00:16:11', 'Oladipupo', NULL, NULL, '105129587269371324757');

-- --------------------------------------------------------

--
-- Table structure for table `user_follower`
--

CREATE TABLE `user_follower` (
  `id` int(10) UNSIGNED NOT NULL,
  `following_id` bigint(20) UNSIGNED NOT NULL,
  `follower_id` bigint(20) UNSIGNED NOT NULL,
  `accepted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_follower`
--

INSERT INTO `user_follower` (`id`, `following_id`, `follower_id`, `accepted_at`, `created_at`, `updated_at`) VALUES
(28, 1, 6, '2020-05-04 19:45:51', '2020-05-04 19:45:51', '2020-05-04 19:45:51'),
(29, 1, 1, '2020-05-05 12:09:03', '2020-05-05 12:09:03', '2020-05-05 12:09:03'),
(35, 1, 7, '2020-05-07 12:00:00', '2020-05-07 12:00:00', '2020-05-07 12:00:00'),
(36, 1, 8, '2020-05-31 18:32:41', '2020-05-31 18:32:41', '2020-05-31 18:32:41');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_log_log_name_index` (`log_name`),
  ADD KEY `subject` (`subject_id`,`subject_type`),
  ADD KEY `causer` (`causer_id`,`causer_type`);

--
-- Indexes for table `bankings`
--
ALTER TABLE `bankings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_storage`
--
ALTER TABLE `cart_storage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_storage_id_index` (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `id_verification`
--
ALTER TABLE `id_verification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_likeable_type_likeable_id_index` (`likeable_type`,`likeable_id`),
  ADD KEY `likes_user_id_index` (`user_id`);

--
-- Indexes for table `magic_links`
--
ALTER TABLE `magic_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_follower`
--
ALTER TABLE `user_follower`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_follower_following_id_index` (`following_id`),
  ADD KEY `user_follower_follower_id_index` (`follower_id`),
  ADD KEY `user_follower_accepted_at_index` (`accepted_at`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bankings`
--
ALTER TABLE `bankings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `id_verification`
--
ALTER TABLE `id_verification`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_follower`
--
ALTER TABLE `user_follower`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
