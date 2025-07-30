-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 30, 2025 at 07:57 AM
-- Server version: 10.6.22-MariaDB-cll-lve
-- PHP Version: 8.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bestwedo_zaestitches`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `status` enum('draft','published') NOT NULL DEFAULT 'draft',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `description`, `content`, `duration`, `featured_image`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'new one', 'news one', 'this is a news for the people to sing', 'this is the new of the centurior', '3', '/storage/uploads/blogs/kmpYHoWtebXd2rB7msBHzXGwE35Ql79hQt12WIzO.jpg', 'published', 1, '2025-06-04 18:00:58', '2025-06-04 18:00:58');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

CREATE TABLE `blog_comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_media`
--

CREATE TABLE `blog_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `media_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_media`
--

INSERT INTO `blog_media` (`id`, `blog_id`, `media_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_tag`
--

CREATE TABLE `blog_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `description`, `logo`, `created_at`, `updated_at`) VALUES
(11, 'ZAE STITCHES', 'Ready-to-wear/Bespoke', 'Casual and comfortable RTW/ Bespoke kaftans and other contemporary wares', '/storage/brands/qwkzMLqVomkV9mKhUmTMP6uuRYB30Mq0QJ7x04vQ.png', '2025-07-04 07:12:36', '2025-07-04 11:22:03');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `token` char(36) DEFAULT NULL,
  `status` enum('active','abandoned','ordered') NOT NULL DEFAULT 'active',
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `color` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `token`, `status`, `product_id`, `quantity`, `price`, `color`, `size`, `currency`, `created_at`, `updated_at`) VALUES
(1, NULL, 'edea9c68-c150-40a5-b520-a9b6edb71674', 'active', 4, 1, 150000.00, 'White', 'XS', '₦', '2025-07-04 08:33:34', '2025-07-04 08:34:13'),
(2, NULL, '7bf4a525-f219-494f-b3dc-0c958368c81d', 'active', 3, 1, 150000.00, 'Black', 'XS', '₦', '2025-07-04 17:25:49', '2025-07-04 17:26:19');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `type` enum('blog','product','both') NOT NULL DEFAULT 'product',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `description`, `type`, `created_at`, `updated_at`) VALUES
(8, 'Kaftan', 'Kaftan|Modern', '/storage/category/jSsY84jAX5wPTrFuBjRTN0zFwjzwkcdvDgGfTfdi.jpg', 'Casual and comfortable RTW kaftans', 'product', '2025-06-07 08:03:05', '2025-07-06 16:27:07'),
(9, 'Agbada', 'ready-to-wear', '/storage/category/fZzoTN8kxOPi9sLbYnxHD0h6C6EmtQqIU3Ibx9JW.jpg', 'comfortable, unique, stylish African Agbada', 'product', '2025-06-07 08:04:09', '2025-07-06 16:28:39'),
(10, 'Casuals', 'Modern casuals', '/storage/category/FLtNPdC98nCU5b7Y4nDBsSSBuartMERKYe0KyEjL.jpg', 'Modern comfortable casual RTW wares', 'product', '2025-06-08 11:06:22', '2025-07-06 16:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `hex` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `name`, `hex`, `created_at`, `updated_at`) VALUES
(1, 'Black', '#000000', '2025-06-04 17:56:28', '2025-06-04 17:56:28'),
(2, 'White', '#FFFFFF', '2025-06-04 17:56:28', '2025-06-04 17:56:28'),
(3, 'Red', '#FF0000', '2025-06-04 17:56:28', '2025-06-04 17:56:28'),
(4, 'Blue', '#0000FF', '2025-06-04 17:56:28', '2025-06-04 17:56:28'),
(5, 'Green', '#008000', '2025-06-04 17:56:28', '2025-06-04 17:56:28');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `commentable_type` varchar(255) DEFAULT NULL,
  `commentable_id` bigint(20) UNSIGNED DEFAULT NULL,
  `parent_id` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `symbol` varchar(255) NOT NULL,
  `rate_to_naira` decimal(10,4) NOT NULL,
  `country_code` varchar(255) NOT NULL,
  `shipping_amount` decimal(8,2) NOT NULL,
  `flag` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `code`, `name`, `symbol`, `rate_to_naira`, `country_code`, `shipping_amount`, `flag`, `created_at`, `updated_at`) VALUES
(1, 'NGN', 'Naira', '₦', 1.0000, 'NG', 1000.00, 'https://files.ekmcdn.com/1000flagsuk/images/nigeria-presidential-flag-with-rope-toggle-137638-p.png', '2025-06-04 17:55:55', '2025-06-04 17:55:55'),
(2, 'USD', 'US Dollar', '$', 1500.0000, 'US', 10.00, 'https://shop.flagfactory.bg/image/cache/catalog/products/flags/national/mockups/usa-1200x720.jpg', '2025-06-04 17:55:55', '2025-06-04 17:55:55'),
(3, 'GHS', 'Ghanaian Cedi', '₵', 130.0000, 'GH', 2000.00, 'https://t4.ftcdn.net/jpg/02/10/66/61/360_F_210666124_Z8bYqTWfGx8xisTIvqJgJdsSBOV5i3B7.jpg', '2025-06-04 17:55:55', '2025-06-04 17:55:55'),
(4, 'KES', 'Kenyan Shilling', 'KSh', 10.0000, 'KE', 4000.00, 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/Flag_of_Kenya.svg/2560px-Flag_of_Kenya.svg.png', '2025-06-04 17:55:55', '2025-06-04 17:55:55'),
(5, 'ZAR', 'South African Rand', 'R', 85.0000, 'ZA', 3000.00, 'https://i.ebayimg.com/images/g/ooIAAOSw9gVjYDKS/s-l1200.jpg', '2025-06-04 17:55:55', '2025-06-04 17:55:55'),
(6, 'EUR', 'Euro', '€', 1650.0000, 'EU', 1000.00, 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6a/European_flag%2C_incorrect_star_rotation.svg/250px-European_flag%2C_incorrect_star_rotation.svg.png', '2025-06-04 17:55:55', '2025-06-04 17:55:55'),
(7, 'GBP', 'British Pound', '£', 1900.0000, 'GB', 1000.00, 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Flag_of_the_United_Kingdom_%281-2%29.svg/1200px-Flag_of_the_United_Kingdom_%281-2%29.svg.png', '2025-06-04 17:55:55', '2025-06-04 17:55:55'),
(8, 'XOF', 'West African CFA franc', 'CFA', 2.5000, 'CI', 1000.00, 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Flag_of_C%C3%B4te_d%27Ivoire.svg/2560px-Flag_of_C%C3%B4te_d%27Ivoire.svg.png', '2025-06-04 17:55:55', '2025-06-04 17:55:55'),
(9, 'XAF', 'Central African CFA franc', 'FCFA', 2.7000, 'CM', 1000.00, 'https://flagpedia.net/data/flags/w1600/cm.png', '2025-06-04 17:55:55', '2025-06-04 17:55:55'),
(10, 'ETB', 'Ethiopian Birr', 'Br', 30.0000, 'ET', 1000.00, 'https://www.fotw.info/images/e/et.gif', '2025-06-04 17:55:55', '2025-06-04 17:55:55');

-- --------------------------------------------------------

--
-- Table structure for table `extras`
--

CREATE TABLE `extras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `homepage_brand` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extras`
--

INSERT INTO `extras` (`id`, `created_at`, `updated_at`, `homepage_brand`) VALUES
(1, '2025-06-04 17:56:28', '2025-06-04 17:56:28', 'https://demos.reytheme.com/london/wp-content/uploads/sites/8/2021/04/img8-v2.jpg');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `type` enum('blog','product','both') NOT NULL,
  `mime_type` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `extension` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `name`, `url`, `type`, `mime_type`, `size`, `extension`, `created_at`, `updated_at`) VALUES
(1, 'nc4wsufkk7hxfrs0qskcrmwhdlyalzfolnamm0m0qacqnoid.png', '/storage/uploads/products/media/RmrBW1PwEErM1RVwoyAiOnwvu8vvxtszvWcbewiu.png', 'product', 'image/png', '460.17KB', 'png', '2025-06-04 17:58:43', '2025-06-04 17:58:43'),
(2, 'Heavy Cotton T-Shirt Black.webp', '/storage/uploads/products/media/ZGthjtDSFkeGg0hX2fOubz3dtQSoz1hh7bwNl2u5.webp', 'product', 'image/webp', '62.56KB', 'webp', '2025-06-04 17:58:43', '2025-06-04 17:58:43'),
(3, 'wdd.jpeg', '/storage/uploads/blogs/media/JMQAFUY0YuMA84nPEuiljFzPc15EZPR5CeCnAS7p.jpg', 'blog', 'image/jpeg', '9.86KB', 'jpeg', '2025-06-04 18:00:59', '2025-06-04 18:00:59'),
(4, 'zweb1111 zzz copy.jpg', '/storage/uploads/products/media/MzIo5uv6KBz4YMz59FYWS7AdHoZ80SoT8XepHAsG.jpg', 'product', 'image/jpeg', '503.28KB', 'jpg', '2025-07-04 07:47:00', '2025-07-04 07:47:00'),
(5, 'zweb2222 zzz copy.jpg', '/storage/uploads/products/media/CVKofup0bi4q7gz76vWueOhONNVZdSftI1vubTZX.jpg', 'product', 'image/jpeg', '384.1KB', 'jpg', '2025-07-04 07:55:02', '2025-07-04 07:55:02'),
(6, 'zweb3333 zzzcopy.jpg', '/storage/uploads/products/media/ynuXc0NeJN36Lb391xUxpZA5KHWChMLbiKbs76z4.jpg', 'product', 'image/jpeg', '478.84KB', 'jpg', '2025-07-04 07:58:34', '2025-07-04 07:58:34'),
(7, 'zweb4444 zzzcopy.jpg', '/storage/uploads/products/media/8UO17pJNK5A6aK7CWrVRXCTyw4zkwWdjaVXXn4eo.jpg', 'product', 'image/jpeg', '304.68KB', 'jpg', '2025-07-04 08:02:56', '2025-07-04 08:02:56'),
(8, 'zweb5555 zzzcopy.jpg', '/storage/uploads/products/media/ElAxpL4wdgC3qBfsuVRkQSvGZ0yfiWuUFBHel67w.jpg', 'product', 'image/jpeg', '395.02KB', 'jpg', '2025-07-04 08:15:19', '2025-07-04 08:15:19'),
(9, 'web AG1.jpg', '/storage/uploads/products/media/8KRYd5xGnzSG9fglWk5IF22CrTWB3l9xx1bff2fH.jpg', 'product', 'image/jpeg', '278.62KB', 'jpg', '2025-07-04 12:58:17', '2025-07-04 12:58:17'),
(10, 'web ag 3.jpg', '/storage/uploads/products/media/Z5NLX3PhhasiFR7MqnU17REJwUx8LPtMysv1byVh.jpg', 'product', 'image/jpeg', '367.43KB', 'jpg', '2025-07-04 13:04:04', '2025-07-04 13:04:04');

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
(1, '0001_01_01_000000_create_newsletter_table', 1),
(2, '0001_01_01_000000_create_users_table', 1),
(3, '0001_01_01_000001_create_cache_table', 1),
(4, '0001_01_01_000002_create_jobs_table', 1),
(5, '2025_05_16_191110_create_colors_table', 1),
(6, '2025_05_16_194153_create_brands_table', 1),
(7, '2025_05_16_194153_create_sizes_table', 1),
(8, '2025_05_16_194153_create_tags_table', 1),
(9, '2025_05_16_194155_create_currencies_table', 1),
(10, '2025_05_16_205731_create_media_table', 1),
(11, '2025_05_17_194152_create_categories_table', 1),
(12, '2025_05_17_194152_create_products_table', 1),
(13, '2025_05_17_194153_create_product_variants_table', 1),
(14, '2025_05_17_194154_create_carts_table', 1),
(15, '2025_05_17_194154_create_orders_table', 1),
(16, '2025_05_17_194155_create_user_currency_preferences_table', 1),
(17, '2025_05_17_194156_create_blogs_table', 1),
(18, '2025_05_17_194156_create_comments_table', 1),
(19, '2025_05_17_205611_create_blog_category_table', 1),
(20, '2025_05_17_205611_create_blog_media_table', 1),
(21, '2025_05_17_205611_create_product_category_table', 1),
(22, '2025_05_17_205611_create_product_media_table', 1),
(23, '2025_05_17_205703_create_blog_tag_table', 1),
(24, '2025_05_17_205703_create_product_tag_table', 1),
(25, '2025_05_17_205713_create_product_brand_table', 1),
(26, '2025_05_17_205735_create_blog_comment_table', 1),
(27, '2025_05_17_205735_create_product_comment_table', 1),
(28, '2025_06_03_225135_create_extras_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscribers`
--

CREATE TABLE `newsletter_subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_number` varchar(255) NOT NULL,
  `status` enum('pending','paid','shipped','completed','cancelled') NOT NULL DEFAULT 'pending',
  `total_amount` decimal(10,2) NOT NULL,
  `country_code` varchar(255) DEFAULT NULL,
  `carts_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`carts_ids`)),
  `payment_method` varchar(255) DEFAULT NULL,
  `shipping_details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`shipping_details`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `rating` decimal(8,2) NOT NULL DEFAULT 0.00,
  `is_popular` tinyint(1) NOT NULL DEFAULT 0,
  `is_available` tinyint(1) NOT NULL DEFAULT 1,
  `is_latest` tinyint(1) NOT NULL DEFAULT 0,
  `price` decimal(10,2) NOT NULL,
  `discount_price` decimal(10,2) NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `dimension` varchar(255) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `featured_image` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive','draft') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `description`, `rating`, `is_popular`, `is_available`, `is_latest`, `price`, `discount_price`, `brand_id`, `weight`, `dimension`, `material`, `featured_image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'MOAM SS25 A1', 'Kaftan|Modern', 'Experience the art of elegance with our Kaftan from the MOAM SS 25 Collection \'Making of a Man\'. This stunning piece embodies the essence of sophistication and refinement, crafted to perfection for the modern man. Made from high-quality fabric, this flowing Kaftan is designed to make a statement at any formal or special occasion. With its sleek design and impeccable tailoring, this garment is sure to elevate your style and confidence. Part of our exclusive MOAM SS 25 Collection, this Kaftan is a testament to the making of a man who values tradition, elegance, and sophistication.\r\n\r\nNotes (N.B.):\r\n\r\nEach order includes matching pants.\r\nThe actual colors may vary slightly due to screen or monitor settings.', 5.00, 1, 1, 1, 150000.00, 0.00, 11, '1.2kg', '30cm-152cm', 'sky blue Viscose', '/storage/uploads/products/Vb2FtE3ks8K1DmqBTwBqEjnB37tK8ac2PqIpbZhs.jpg', 'active', '2025-07-04 07:47:00', '2025-07-04 07:55:16'),
(3, 'MOAM SS25 A2', 'Kaftan', 'Experience the art of elegance with our Kaftan from the MOAM SS 25 Collection \'Making of a Man\'. This stunning piece embodies the essence of sophistication and refinement, crafted to perfection for the modern man. . With its sleek design and impeccable tailoring, this garment is sure to elevate your style and confidence. Part of our exclusive MOAM SS 25 Collection, this Kaftan is a testament to the making of a man who values tradition, elegance, and sophistication.\r\n\r\nNotes (N.B.):\r\nEach order includes matching pants.\r\nThe actual colors may vary slightly due to screen or monitor settings.', 5.00, 1, 1, 1, 150000.00, 0.00, 11, '1.2kg', '30cm-152cm', 'Black viscose textile', '/storage/uploads/products/pEevJcMX3IJjMg3zDetuc7TSYk0nom4UK8lzVY0f.jpg', 'active', '2025-07-04 07:55:02', '2025-07-04 07:55:02'),
(4, 'MOAM SS25 A3', 'MOAM SS25 A3', 'Experience the art of elegance with our Kaftan from the MOAM SS 25 Collection \'Making of a Man\'. This stunning piece embodies the essence of sophistication and refinement, crafted to perfection for the modern man. Made from high-quality fabric, this flowing Kaftan is designed to make a statement at any formal or special occasion. With its sleek design and impeccable tailoring, this garment is sure to elevate your style and confidence. Part of our exclusive MOAM SS 25 Collection, this Kaftan is a testament to the making of a man who values tradition, elegance, and sophistication.\r\n\r\nNotes (N.B.):\r\n\r\nEach order includes matching pants.\r\nThe actual colors may vary slightly due to screen or monitor settings.', 5.00, 1, 1, 1, 150000.00, 0.00, 11, '1.2kg', '30cm-152cm', 'light steel grey viscose textile', '/storage/uploads/products/a5A2VsE7T2BLxvmWqC8oIBLEizGEn1UEuRmkqqPi.jpg', 'active', '2025-07-04 07:58:34', '2025-07-04 07:58:34'),
(5, 'MOAM SS25 A4', 'MOAM SS25 A4', 'Experience the art of elegance with our Kaftan from the MOAM SS 25 Collection \'Making of a Man\'. This stunning piece embodies the essence of sophistication and refinement, crafted to perfection for the modern man. Made from high-quality fabric, this flowing Kaftan is designed to make a statement at any formal or special occasion. With its sleek design and impeccable tailoring, this garment is sure to elevate your style and confidence. Part of our exclusive MOAM SS 25 Collection, this Kaftan is a testament to the making of a man who values tradition, elegance, and sophistication.\r\n\r\nNotes (N.B.):\r\n\r\nEach order includes matching pants.\r\nThe actual colors may vary slightly due to screen or monitor settings.', 5.00, 1, 1, 1, 150000.00, 0.00, 11, '1.2kg', '30cm-152cm', 'Charcoal grey viscose Textile', '/storage/uploads/products/NBElFZN4mU5ImRmHgmfO2GkilEbCo30mTYN4xcUr.jpg', 'active', '2025-07-04 08:02:56', '2025-07-04 08:02:56'),
(6, 'MOAM SS25 A5', 'MOAM SS25 A5', 'Experience the art of elegance with our Kaftan from the MOAM SS 25 Collection \'Making of a Man\'. This stunning piece embodies the essence of sophistication and refinement, crafted to perfection for the modern man. Made from high-quality fabric, this flowing Kaftan is designed to make a statement at any formal or special occasion. With its sleek design and impeccable tailoring, this garment is sure to elevate your style and confidence. Part of our exclusive MOAM SS 25 Collection, this Kaftan is a testament to the making of a man who values tradition, elegance, and sophistication.\r\n\r\nNotes (N.B.):\r\n\r\nEach order includes matching pants.\r\nThe actual colors may vary slightly due to screen or monitor settings.', 5.00, 1, 1, 1, 150000.00, 0.00, 11, '1.2kg', '30cm-152cm', 'Chocolate brown viscose textile', '/storage/uploads/products/g4HN5Z01Q5IbZvfDHoXo7OCRs9S6RlaqOZb3Y16J.jpg', 'active', '2025-07-04 08:15:19', '2025-07-04 08:15:19'),
(7, 'Agbada RTW Z1', 'Agbada zae stitches', 'Experience the essence of traditional elegance with our AGBADA, carefully crafted for the modern man by Zae stitches. This majestic garment is designed to make a statement, featuring intricate details and luxurious fabric. Perfect for special occasions or everyday sophistication, our Agbada embodies the perfect blend of tradition and style.\r\n\r\nFIT: Regular Fit\r\n\r\nNotes:\r\nEach order includes matching pants.\r\nThe actual colours may vary slightly due to screen or monitor settings', 5.00, 1, 1, 1, 350557.00, 0.00, 11, '1.2kg', '30cm-152cm', 'Black Textile', '/storage/uploads/products/MyYY9M4CTcMypkgHdexEk6QptuiroucoXFl90PS0.jpg', 'active', '2025-07-04 12:58:17', '2025-07-04 12:58:17'),
(8, 'Agbada RTW Z2', 'Agbada RTW', 'Experience the essence of traditional elegance with our AGBADA, carefully crafted for the modern man by Zae stitches. This majestic garment is designed to make a statement, featuring intricate details and luxurious fabric. Perfect for special occasions or everyday sophistication, our Agbada embodies the perfect blend of tradition and style.\r\n\r\nFIT: Regular Fit\r\n\r\nNotes:\r\nEach order includes matching pants.\r\nThe actual colours may vary slightly due to screen or monitor settings', 5.00, 1, 1, 1, 350557.00, 0.00, 11, '1.2kg', '30cm-152cm', 'Green Textile', '/storage/uploads/products/yfi4nq1mTsfhL8ZWpchOTrhAmAJijrK2onckyVOY.jpg', 'active', '2025-07-04 13:04:04', '2025-07-04 13:04:04'),
(9, 'Agbada RTW Z3', 'Agbada RTW Z3', 'Experience the essence of traditional elegance with our AGBADA, carefully crafted for the modern man by Zae stitches. This majestic garment is designed to make a statement, featuring intricate details and luxurious fabric. Perfect for special occasions or everyday sophistication, our Agbada embodies the perfect blend of tradition and style.\r\n\r\nFIT: Regular Fit\r\n\r\nNotes:\r\nEach order includes matching pants.\r\nThe actual colours may vary slightly due to screen or monitor settings', 4.00, 1, 1, 1, 350557.00, 0.00, 11, '1.2kg', '30cm-152cm', 'pink Textile', '/storage/uploads/products/eUKqhjhO91oY6PIl7XR1YHcQ4PbTZ7w4dEkqeglX.jpg', 'active', '2025-07-04 13:05:26', '2025-07-04 13:05:26');

-- --------------------------------------------------------

--
-- Table structure for table `product_brand`
--

CREATE TABLE `product_brand` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(3, 2, 8, NULL, NULL),
(4, 4, 8, NULL, NULL),
(5, 3, 8, NULL, NULL),
(6, 5, 8, NULL, NULL),
(7, 6, 8, NULL, NULL),
(8, 7, 9, NULL, NULL),
(9, 8, 9, NULL, NULL),
(10, 9, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_comment`
--

CREATE TABLE `product_comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_media`
--

CREATE TABLE `product_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `media_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_media`
--

INSERT INTO `product_media` (`id`, `product_id`, `media_id`, `created_at`, `updated_at`) VALUES
(3, 2, 4, NULL, NULL),
(4, 3, 5, NULL, NULL),
(5, 4, 6, NULL, NULL),
(6, 5, 7, NULL, NULL),
(7, 6, 8, NULL, NULL),
(8, 7, 9, NULL, NULL),
(9, 8, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_tag`
--

CREATE TABLE `product_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tag`
--

INSERT INTO `product_tag` (`id`, `product_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(3, 4, 11, NULL, NULL),
(4, 3, 11, NULL, NULL),
(5, 2, 11, NULL, NULL),
(6, 5, 11, NULL, NULL),
(7, 6, 11, NULL, NULL),
(8, 7, 12, NULL, NULL),
(9, 8, 12, NULL, NULL),
(10, 9, 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `size_id` bigint(20) UNSIGNED DEFAULT NULL,
  `color_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `size_id`, `color_id`, `price`, `stock`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 4, 150000.00, 10, '2025-07-04 08:19:20', '2025-07-04 08:19:20'),
(2, 3, 1, 1, 150000.00, 10, '2025-07-04 08:21:26', '2025-07-04 08:21:26'),
(3, 4, 1, 2, 150000.00, 10, '2025-07-04 08:23:50', '2025-07-04 08:23:50'),
(4, 4, 1, 2, 150000.00, 10, '2025-07-04 08:23:52', '2025-07-04 08:23:52'),
(5, 6, 5, 1, 150000.00, 10, '2025-07-04 08:26:11', '2025-07-04 08:26:11'),
(6, 4, 4, 2, 150000.00, 10, '2025-07-04 08:29:19', '2025-07-04 08:29:19');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0dnuNxqslMzAPjrVsuXg2hZ7img2uV2L7ghtFC6d', NULL, '213.180.203.196', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVEplVDVpMVlJYWlLTU1IbkMwNElMTUhpTnFHaXVLRERHbVJxNEVLZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vemFlc3RpdGNoZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753803509),
('0XQGMkZCF11EhSZSpiIj04OTq4AF00S3JPsvnlGg', NULL, '79.142.76.209', 'Mozilla/5.0 (X11; U; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/115.0.5810.222 Chrome/115.0.5810.222 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWWNWRHZGeXRQMmh0VURqaTA0MGY0NEdMZEx3WklKNFhNdlR6djRnQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vemFlc3RpdGNoZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753713760),
('2KtaELnOJGeDITlbKe7OuxzCYVOtBxD31Ftitq3g', NULL, '40.77.167.79', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicWJCUFkyS2NudWJFRzAyNnJZVEI4WVdXSHZYYkswS1Q5cWJBVXhhciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vemFlc3RpdGNoZXMuY29tL2ZhcSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753761952),
('3QXL9o5idAFUgVPE3Tdw080GW9ZBwhfhiE5kBntq', NULL, '195.181.167.41', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36 Edg/131.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSVBhcGVPODRsandIcGpyQmxzR0MxcE1RZkVrdUlCdkFMWGFIdXN6WSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vemFlc3RpdGNoZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753713759),
('6j4IfFquWry3RHpPKvksdNoY4meBQDwJhAD0rj77', NULL, '54.36.148.95', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMXY4NkEzYWVaVEt1ZGFqazQ5d1V1TlZvUFhHZFpTV3RvdUdUNXIyYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vemFlc3RpdGNoZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753741935),
('6JGdzbwwjefAqG4ZZVEUpZvN8Brqw4lPlba8a4Xr', NULL, '199.16.157.181', 'Twitterbot/1.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZGNYWnJPcWUxMlpIbkIzdFZBc2FURzVtQ0pUMXpIUFE2b1VSVjk5RiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd3d3LnphZXN0aXRjaGVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753704937),
('6UDU3wt2stFqTN0ZY6VBRK0V3pgovdT2mjlj9UJk', NULL, '54.36.148.42', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM2JDYmVVWlllOEpYbFlldnRVTFJoRG5SNmVtMGJkelk2ZjQzUDR3biI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vemFlc3RpdGNoZXMuY29tL3Nob3A/Y2F0ZWdvcnk9d29tZW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1753769480),
('AtFeAoOIejhR7dtzRl7HkZbB2jzfev7VQdXQSw2k', NULL, '54.36.149.55', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUm42M3U2RTNsZXZEdUdLdm5iQmNZdW9JZ0haTUNuZTJCV0k4Mlk1VyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vemFlc3RpdGNoZXMuY29tL3Nob3A/Y2F0ZWdvcnk9amVhbnMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1753733103),
('atvfStHF33KOSVnoxaPKhpasp6POo8qQlSbqxIWM', NULL, '54.36.149.100', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaWhWZDlmQ1J0Z2U0QlNkQWdqMFVwTUVBcm1Jc3VvSmxtR1BXR1p6QiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vemFlc3RpdGNoZXMuY29tL3Nob3A/Y2F0ZWdvcnk9amVhbnMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1753733067),
('AYm5P0NSN9rgVch3lBdbxCQC6mPpjsMASu7SbKI9', NULL, '52.167.144.225', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/116.0.1938.76 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVlZqZkJCeENGRVVLTkNoRVd4cG5WbVd5enU0dDUxVlpNQ09oZ1RabiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHBzOi8vemFlc3RpdGNoZXMuY29tL2Fib3V0X3VzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753710516),
('cZNeJ1M72VmloWVUMMOrB0sPRPpJn9kDKszfGI8w', NULL, '54.236.1.11', 'Mozilla/5.0 (compatible; Pinterestbot/1.0; +http://www.pinterest.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT3NzY0RqWHJ6dlhFc2VUZ3ZDeE9Zc1ZZeUY0bDVrOEtUVkI5cHZISSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd3d3LnphZXN0aXRjaGVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753760260),
('DdrrQujXk7rpSmjS1rbHrb4sEchgSbH5ekSSjJYK', NULL, '57.141.0.14', 'meta-externalagent/1.1 (+https://developers.facebook.com/docs/sharing/webmasters/crawler)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicUcyRkx1Y1VPYmR0b2x2OHlSN2dyNXgzWDlwMEcyOXVKeFF4SmRNZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd3d3LnphZXN0aXRjaGVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753742613),
('DSqiGcZKdoDEPdQJ323yoydx6lSpLZoiHsSEUlSe', NULL, '57.141.0.19', 'meta-externalagent/1.1 (+https://developers.facebook.com/docs/sharing/webmasters/crawler)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaGw3VExlVkIzYm1oNWFqTzZwRUJzVXkxR0lRR0ZtMVgwU0c3WnNENCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd3d3LnphZXN0aXRjaGVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753831987),
('DU0h2Y2SDLBIlC1J5nIa6ecFSD0e3ftrLN1Jn8eh', NULL, '54.36.148.40', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNUxZRURQZEFPd3RQd0F0bTVYTnZITlo5aGNHZVJWTE0xVEU0RW9SSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vemFlc3RpdGNoZXMuY29tL3Nob3A/Y2F0ZWdvcnk9amFja2V0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753725079),
('EuvDJCorlMrXbIpLNamPGJaqbistXwKOn8vfUwzv', NULL, '54.36.148.89', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSmNwdHlJdFhPWmlvU3NEaGhUbkdWVk81UnZ4OVdYbE12VHBpWHFEQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vemFlc3RpdGNoZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753813090),
('GZTBZKPt83JohrdhbuFfRUsgxHeZXp3vhXf6g19U', NULL, '154.47.30.163', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_1_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.1.1 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiejBDRnI1SEsyY0V6cVE2NmhyZFAwaTJXU3JDVmNobjBhR0k0TlhvNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vemFlc3RpdGNoZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753713758),
('iEtcQhUEgColMhNUHxRwG56PoRithruJv5SBlUL8', NULL, '199.16.157.182', 'Twitterbot/1.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUzJWUlo3Wkp0V0lid3JJTnF3UlJaSEhxT3JhVmN5ZlFVQ2d2UUFMWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd3d3LnphZXN0aXRjaGVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753791517),
('IWzQGKEX0fWdePos4wU8BszCz4WElhuagaOD2Oza', NULL, '173.252.107.2', 'facebookexternalhit/1.1 (+http://www.facebook.com/externalhit_uatext.php)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUTYybWdwWHY1NDlMbktNOENhdENzUVM5eWg5ODlYQ2trSmRWR3E1SSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd3d3LnphZXN0aXRjaGVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753790474),
('IzYx3XXddoBj30QcvqCmKBIfvTiEb3DQWBQQIKem', NULL, '54.36.148.128', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV0VSQTZEaThtMXoxVXRTQ0tIek14NUNNeWM3Z01QY1lBRjdySW0wSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDY6Imh0dHBzOi8vemFlc3RpdGNoZXMuY29tL3Nob3A/Y2F0ZWdvcnk9dC1zaGlydHMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1753757162),
('JBojr8aIsHtyvHQXRHwckjbs6ZEVXRx1nPWDh700', NULL, '35.197.94.59', '', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiYlNZaW12bzFRVHFBcGhINUJTTTFoSlRzUGxMYjhRRWdPQ0FWRzBZbCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753791520),
('L1NF2kKG3SvN14ke8zhpkbBFpLylq4Tx6kRXTKcf', NULL, '57.141.0.14', 'meta-externalagent/1.1 (+https://developers.facebook.com/docs/sharing/webmasters/crawler)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic1R3cHhZVEpYTGFOMjl0Z2FWZlhYbWVZaUpKeTE2MTBCVmJNdjdKdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vemFlc3RpdGNoZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753792003),
('Mw2dhsatp9JwCfvKh7iOmGtUN10V8QYI6pRFIvlU', NULL, '57.141.4.15', 'meta-externalagent/1.1 (+https://developers.facebook.com/docs/sharing/webmasters/crawler)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidTN3RXNxRlpJYkd2RTRZakR0TmJhZUM2azlkMUpOanMxaE9TYktUaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vemFlc3RpdGNoZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753724933),
('OCdZdwZjrln2axq2ydZOzfnI5TvSesdvkzSfgoA8', NULL, '199.16.157.183', 'Twitterbot/1.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZDg1cDFjQzVLMzhGaGFCbFFpMjM0bngwelczOGZCc0NoWWlYbjJwZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd3d3LnphZXN0aXRjaGVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753800876),
('pHXiFuXXuaRjdfxkmVhgPBEsY447sDyBzZ8nhMto', NULL, '34.82.40.48', '', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiczBxM2tHZDdXdW5MVWhOcE1hNXhnR0xMZ0YxSXNJdHdQd1hMVW82UyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753791528),
('pYcuR3hkG3TYvbctbtW9ao9vl6edmZGs5ZKq0vmr', NULL, '90.173.135.21', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/114.0.5775.194 Chrome/114.0.5775.194 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMGQzZUw4M1kweTk1U2FsVGFCZlIzVnpxNkh2ZjVQV1A0bXltYVhuYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vemFlc3RpdGNoZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753714406),
('QaK3AOGBzYqHfFWWaT4GSEOLmHOpTPlxrEEaidfF', NULL, '54.236.1.11', 'Mozilla/5.0 (compatible; Pinterestbot/1.0; +http://www.pinterest.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidzlzclZWRG1XR25BT0E4MWFMM1M0Zld6WGFnZVdtOFFhUkp4eWVwdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHBzOi8vd3d3LnphZXN0aXRjaGVzLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753853952),
('rjRdsdXXnErJzCYcXYF1ByFTjtuTWZms0toVHVMC', NULL, '139.84.227.156', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_1_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.1.1 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR0RheWNyU0FVdmxSM0pvRTI4Wjc5OERhdFN4cjloQ1RhcmdCYTNoNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vemFlc3RpdGNoZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753713758),
('rK39UYjEKOR5KbLGjJvspcRVMOc3pQgKshw9DZvL', NULL, '167.172.39.104', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTmNoTWpVV1RyeURNMjNzOWdOOGUxamI3ejhsN0FkcmU3VnZiRTFvTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vemFlc3RpdGNoZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753753437),
('s9zDuRLGMPs2XTG0JobbAa89CSJpWIKgnzm6COqV', NULL, '54.36.149.29', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVnRsaTc4RU5kZnFINEhGdEh3b2RNU0xVY1k4M2ROaEVuOGVQb2s4OCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHBzOi8vemFlc3RpdGNoZXMuY29tL3Nob3A/Y2F0ZWdvcnk9amFja2V0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753725112),
('tejtn0FVhfIjPH5sIsBNdc6wPRzTv8h5nqW3kvJn', NULL, '173.252.127.2', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS3FvZXVORmdlOHJGMUxzZzg5VFIzclJIU1RlajhBdEpkNlRhZ0Y3cyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTQzOiJodHRwczovL3d3dy56YWVzdGl0Y2hlcy5jb20vP2ZiY2xpZD1Jd1pYaDBiZ05oWlcwQ01URUFBUjVfUEUyWEZYVUJaZnI2N0pENDcyXy1TZlY2WWYtbnh3b3pQYWpSNTRTLTh3NGVpVjhLb0dZd3ZldTkyd19hZW1fbzd5elZIV3pta3QxZFgyR1dpbzFkQSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753848339),
('XnSzsJ79ZbeNZQ5IIFb0xNhbgdpYDIPO1BKZGuQU', NULL, '213.180.203.162', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://yandex.com/bots)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaXZTWDJoeGg4V3dQbk15ODNGMTZjR1JZSHJHN01CSks0dnpab0NOOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vemFlc3RpdGNoZXMuY29tL3Nob3AvMyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753803446),
('zLSUJCbV9xyei6nT5dqwhmtEe1y8WtXdl1C3uAs0', NULL, '66.81.160.17', 'Mozilla/5.0 (X11; U; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/115.0.5810.222 Chrome/115.0.5810.222 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRFJncEZESmRVMmNFTnhYOFJGeGlmWkxqMGVTTlI0TmpKOEJic0NUNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vemFlc3RpdGNoZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753713758),
('zu0HkCuCdWutXuT286K8Mbm2nlEHh3FdCdwgnxpG', NULL, '54.36.148.42', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUDN2YTRzZThaOWlveHlrYlJKSmdhejBZNXRhZnY2cVpudEpsdFlaTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjM6Imh0dHBzOi8vemFlc3RpdGNoZXMuY29tIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753829914);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'XS', '2025-06-04 17:56:28', '2025-06-04 17:56:28'),
(2, 'S', '2025-06-04 17:56:28', '2025-06-04 17:56:28'),
(3, 'M', '2025-06-04 17:56:28', '2025-06-04 17:56:28'),
(4, 'L', '2025-06-04 17:56:28', '2025-06-04 17:56:28'),
(5, 'XL', '2025-06-04 17:56:28', '2025-06-04 17:56:28'),
(6, 'XXL', '2025-06-04 17:56:28', '2025-06-04 17:56:28');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `type` enum('blog','product','both') NOT NULL DEFAULT 'product',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `type`, `created_at`, `updated_at`) VALUES
(11, 'Kaftan', 'ready-to-wear', 'product', '2025-07-04 07:22:16', '2025-07-04 07:22:16'),
(12, 'Agbada', 'bespoke/ ready to wear', 'product', '2025-07-04 07:22:43', '2025-07-04 07:22:43'),
(13, 'Casuals', 'ready to wear', 'product', '2025-07-04 07:23:08', '2025-07-04 07:23:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` enum('customer','admin') NOT NULL DEFAULT 'customer',
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'customer', 'admin@gmail.com', NULL, '$2y$12$xCDFuMaMxmMcyBvBQ9VBwuYVAWqLeFotvffT6Y4OlOTCX17HV.fw.', 'k9AsYVAwlyiFAwd5KVKb62B9o6aWDC2CMY2k1d4X2k9Cpo4neLosPYJVD0jJ', '2025-06-04 17:45:17', '2025-06-04 17:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `user_currency_preferences`
--

CREATE TABLE `user_currency_preferences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `currency_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_category_blog_id_category_id_unique` (`blog_id`,`category_id`),
  ADD KEY `blog_category_category_id_foreign` (`category_id`);

--
-- Indexes for table `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_comment_blog_id_comment_id_unique` (`blog_id`,`comment_id`),
  ADD KEY `blog_comment_comment_id_foreign` (`comment_id`);

--
-- Indexes for table `blog_media`
--
ALTER TABLE `blog_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_media_blog_id_foreign` (`blog_id`),
  ADD KEY `blog_media_media_id_foreign` (`media_id`);

--
-- Indexes for table `blog_tag`
--
ALTER TABLE `blog_tag`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_tag_blog_id_tag_id_unique` (`blog_id`,`tag_id`),
  ADD KEY `blog_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_name_unique` (`name`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_commentable_type_commentable_id_index` (`commentable_type`,`commentable_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `currencies_code_unique` (`code`);

--
-- Indexes for table `extras`
--
ALTER TABLE `extras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newsletter_subscribers_email_unique` (`email`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_number_unique` (`order_number`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_title_unique` (`title`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `product_brand`
--
ALTER TABLE `product_brand`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_brand_product_id_brand_id_unique` (`product_id`,`brand_id`),
  ADD KEY `product_brand_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_category_product_id_category_id_unique` (`product_id`,`category_id`),
  ADD KEY `product_category_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_comment`
--
ALTER TABLE `product_comment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_comment_product_id_comment_id_unique` (`product_id`,`comment_id`),
  ADD KEY `product_comment_comment_id_foreign` (`comment_id`);

--
-- Indexes for table `product_media`
--
ALTER TABLE `product_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_media_product_id_foreign` (`product_id`),
  ADD KEY `product_media_media_id_foreign` (`media_id`);

--
-- Indexes for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_tag_product_id_tag_id_unique` (`product_id`,`tag_id`),
  ADD KEY `product_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variants_product_id_foreign` (`product_id`),
  ADD KEY `product_variants_size_id_foreign` (`size_id`),
  ADD KEY `product_variants_color_id_foreign` (`color_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_currency_preferences`
--
ALTER TABLE `user_currency_preferences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_currency_preferences_user_id_foreign` (`user_id`),
  ADD KEY `user_currency_preferences_currency_id_foreign` (`currency_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_media`
--
ALTER TABLE `blog_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_tag`
--
ALTER TABLE `blog_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `extras`
--
ALTER TABLE `extras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_brand`
--
ALTER TABLE `product_brand`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_comment`
--
ALTER TABLE `product_comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_media`
--
ALTER TABLE `product_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_currency_preferences`
--
ALTER TABLE `user_currency_preferences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD CONSTRAINT `blog_category_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD CONSTRAINT `blog_comment_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_comment_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_media`
--
ALTER TABLE `blog_media`
  ADD CONSTRAINT `blog_media_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_media_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_tag`
--
ALTER TABLE `blog_tag`
  ADD CONSTRAINT `blog_tag_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_brand`
--
ALTER TABLE `product_brand`
  ADD CONSTRAINT `product_brand_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_brand_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_category`
--
ALTER TABLE `product_category`
  ADD CONSTRAINT `product_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_category_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_comment`
--
ALTER TABLE `product_comment`
  ADD CONSTRAINT `product_comment_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_comment_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_media`
--
ALTER TABLE `product_media`
  ADD CONSTRAINT `product_media_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_media_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD CONSTRAINT `product_tag_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD CONSTRAINT `product_variants_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `product_variants_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_variants_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `user_currency_preferences`
--
ALTER TABLE `user_currency_preferences`
  ADD CONSTRAINT `user_currency_preferences_currency_id_foreign` FOREIGN KEY (`currency_id`) REFERENCES `currencies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_currency_preferences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
