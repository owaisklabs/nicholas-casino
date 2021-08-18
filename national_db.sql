-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 12:26 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `national_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `image`, `content`, `link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'YIXTKJICGU.png', 'Welcome to National Specialist Database. You will be a part of something special. You are a part of a ‘Specialist Database’ that all college coaches will have access too! Through your individual customized profile, you can now use this profile as a 1 stop shop.', 'https://www.coca-colacompany.com', '2021-05-25 11:48:06', '2021-05-25 11:48:06', NULL),
(2, 'F6W4qgqbRF.png', 'Welcome to National Specialist Database. You will be a part of something special. You are a part of a ‘Specialist Database’ that all college coaches will have access too! Through your individual customized profile, you can now use this profile as a 1 stop shop.Welcome to National Specialist Database. You will be a part of something special. You are a part of a ‘Specialist Database’ that all college coaches will have access too! Through your individual customized profile, you can now use this profile as a 1 stop shop.', 'https://en.cdprojektred.com/', '2021-05-25 11:48:28', '2021-05-25 11:48:28', NULL),
(3, 'ssA8ExmoVu.png', 'Welcome to National Specialist Database. You will be a part of something special. You are a part of a ‘Specialist Database’ that all college coaches will have access too! Through your individual customized profile, you can now use this profile as a 1 stop shop.Welcome to National Specialist Database. You will be a part of something special. You are a part of a ‘Specialist Database’ that all college coaches will have access too! Through your individual customized profile, you can now use this profile as a 1 stop shop.Welcome to National Specialist Database. You will be a part of something special. You are a part of a ‘Specialist Database’ that all college coaches will have access too! Through your individual customized profile, you can now use this profile as a 1 stop shop.', 'https://wizardsports.com/', '2021-05-25 11:49:09', '2021-05-25 11:49:09', NULL),
(4, 'rY4pDCY3cI.jpg', 'Welcome to National Specialist Database. You will be a part of something special. You are a part of a ‘Specialist Database’ that all college coaches will have access too! Through your individual customized profile, you can now use this profile as a 1 stop shop.Welcome to National Specialist Database. You will be a part of something special. You are a part of a ‘Specialist Database’ that all college coaches will have access too! Through your individual customized profile, you can now use this profile as a 1 stop shop.', 'coke.com', '2021-05-25 11:49:21', '2021-05-25 11:49:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `page` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `created_at`, `updated_at`, `page`, `title`, `subtitle`, `description`, `image`, `status`, `deleted_at`) VALUES
(1, '2021-05-25 11:37:31', '2021-05-25 11:45:44', 'Main', 'Pride And', 'Passion Meets', 'Success', 'xKo6n0HU7s.jpg', 'Inactive', NULL),
(2, '2021-05-25 11:38:33', '2021-05-25 11:47:00', 'About Us Home', 'About Us', 'Welcome to the National Specialist Database! The only database in the industry created by specialists for specialists! The 1st of its kind Centralized Database & Specialist Resource guide!', 'Welcome to National Specialist Database. You will be a part of something special. You are a part of a ‘Specialist Database’ that all college coaches will have access too! Through your individual customized profile, you can now use this profile as a 1 stop shop.', 'jq4zZ7VRO4.jpg', 'Inactive', NULL),
(3, '2021-05-25 11:42:46', '2021-06-23 22:49:02', 'Main Video', 'asd', 'asd', 'https://www.youtube.com/embed/ujKsB72nfuk', 'JCUdcXRcYI.jpg', 'Inactive', NULL),
(4, '2021-05-25 11:58:46', '2021-06-22 23:27:07', 'About Us Main', 'ABOUT US', NULL, 'Welcome to the National Specialist Database! The most comprehensive database for Kickers, Punters, and Long Snappers for the college recruiting process.\r\n\r\nYour all in one player database will give you everything you need for college coaches to see.\r\n\r\nYou no longer need to be listed on an evaluation platform for college coaches to find you. This database will provide an opportunity for everything to be found!\r\n\r\nJoin Us Today!', 'EV5RH29sQB.jpg', 'Inactive', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '#',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `link`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'brand 1', 'https://www.coca-colacompany.com', 'QsudLtkwYK.jpg', '2021-05-25 11:56:46', '2021-05-25 11:56:46', NULL),
(2, 'brand 1', 'https://en.cdprojektred.com/', 'RBcTh3uXPs.jpg', '2021-05-25 11:56:55', '2021-05-25 11:56:55', NULL),
(3, 'Gatorade', 'https://en.cdprojektred.com/', 'G0nBvbWQWa.jpg', '2021-05-25 11:57:12', '2021-05-25 11:57:12', NULL),
(4, 'asd', 'https://www.coca-colacompany.com', 'Ajl1CIETCK.jpg', '2021-05-25 11:57:19', '2021-05-25 11:57:19', NULL),
(5, 'ads', 'https://www.coca-colacompany.com', 'ZBJgUTXWgb.jpg', '2021-05-25 11:57:27', '2021-05-25 11:57:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `contact_no`, `message`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'uzair hyder', 'uzairhyder33@gmail.com', '876364434', 'dsdfgsre', '2021-07-01 22:50:58', '2021-07-01 22:50:58', NULL),
(2, 'uzair hyder', 'uzairhyder33@gmail.com', '876364434', 'dawfef', '2021-07-01 22:51:29', '2021-07-01 22:51:29', NULL),
(3, 'Fred Aston', 'testconsignor@gmail.com', '5555555555', 'fdegswrgs', '2021-07-01 22:56:36', '2021-07-01 22:56:36', NULL),
(4, 'uzair hyder', 'uzairhyder33@gmail.com', '876364434', 'ergdfhb', '2021-07-01 23:03:15', '2021-07-01 23:03:15', NULL),
(5, 'uzair hyder', 'uzairhyder33@gmail.com', '876364434', 'afafgeswr', '2021-07-01 23:05:44', '2021-07-01 23:05:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Customized URL link for you!', '2021-05-25 11:59:55', '2021-06-22 23:27:53', NULL),
(2, 'List every star rating you have earned on 1 page', '2021-05-25 12:00:02', '2021-05-25 12:00:02', NULL),
(3, 'No need for a twitter limit in this bio', '2021-05-25 12:00:07', '2021-05-25 12:00:07', NULL),
(4, 'List multiple hudl, camp and personal training videos on your profile', '2021-05-25 12:00:13', '2021-05-25 12:00:13', NULL),
(5, 'List your news articles, junior day visits and offers!', '2021-05-25 12:00:19', '2021-05-25 12:00:19', NULL),
(6, 'Most comprehensive player profile in the industry!', '2021-05-25 12:00:24', '2021-05-25 12:00:24', NULL),
(7, 'Created BY Specialists FOR Specialists!', '2021-05-25 12:00:28', '2021-05-25 12:00:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `type`, `image`, `created_at`, `updated_at`) VALUES
(2, 'footer', '4VUCv0ubnC.png', '2021-05-25 11:44:13', '2021-05-25 11:56:12'),
(3, 'favicon', '7aA93syaiO.svg', '2021-05-25 11:44:13', '2021-06-23 20:24:59'),
(4, 'main', '6aKTaMKoUi.png', '2021-05-27 12:16:17', '2021-05-27 12:16:17');

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
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2021_04_19_211503_users_type', 1),
(10, '2021_04_22_003508_create_logos_table', 1),
(11, '2021_04_22_030914_create_settings_table', 1),
(12, '2021_05_13_022907_create_banners_table', 1),
(13, '2021_05_17_212144_banner_title_subtitle_longtext', 1),
(14, '2021_05_17_234622_create_articles_table', 1),
(15, '2021_05_18_011132_create_brands_table', 1),
(16, '2021_05_18_015933_brands_link_default', 1),
(17, '2021_05_18_025100_create_features_table', 1),
(18, '2021_05_21_024018_create_packages_table', 1),
(19, '2021_05_21_034623_users_registration_fields', 1),
(20, '2021_05_23_040721_users_mltiple_types', 1),
(21, '2021_05_24_224431_users_profile_section', 1),
(22, '2021_05_24_225425_users_info_fields', 1),
(23, '2021_05_24_235249_users_coach_fields', 1),
(24, '2021_05_25_003319_create_star_ratings_table', 1),
(25, '2021_05_25_053220_users_season_stats', 1),
(26, '2021_05_26_043349_create_user_videos_table', 2);

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
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(20,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `amount`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Monthly', '100.00', '2021-05-25 11:50:38', '2021-05-25 11:50:38', NULL),
(2, 'Annual', '900.00', '2021-05-25 11:50:56', '2021-05-25 11:50:56', NULL),
(3, 'Lifetime', '900.00', '2021-05-25 11:51:13', '2021-05-25 11:51:13', NULL),
(4, 'Trial', '0.00', '2021-05-25 11:51:21', '2021-05-25 11:51:21', NULL);

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
('fredaston49@gmail.com', '$2y$10$CEqKA66yx/RDzA8cXpBlJu6rO7iBTLCWv9bGFP3pt.SOOMTyWhqsu', '2021-06-23 20:04:12'),
('uzairhyder33@gmail.com', '$2y$10$sf92HDBg526SXlVCGzzGauiZpDNL/nZ3/3iLvlsvQQCDPnKfA02Eq', '2021-07-01 18:52:30');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', 'https://www.facebook.com/', NULL, '2021-05-25 11:55:07'),
(2, 'Twitter', 'https://twitter.com/', NULL, '2021-05-25 11:55:07'),
(3, 'Youtube', 'https://www.youtube.com/user/ChrisSailerKicking', NULL, '2021-05-25 11:55:07'),
(4, 'Instagram', 'https://www.instagram.com/chrissailerkicking/', NULL, '2021-05-25 11:55:07'),
(5, 'Company Address 1', 'CoachHusby', NULL, '2021-05-25 11:55:07'),
(6, 'Company Address 2', 'Coach Hering', NULL, '2021-05-25 11:55:07'),
(7, 'Phone', '21121212112', NULL, '2021-05-25 11:55:07'),
(8, 'Phone 2', '29329103129301', NULL, '2021-05-25 11:55:07'),
(9, 'Email', NULL, NULL, NULL),
(10, 'Support Email', NULL, NULL, NULL),
(11, 'Copyright', 'copyright@designprosusa', NULL, '2021-07-02 19:45:35'),
(12, 'Staff Email', NULL, NULL, NULL),
(13, 'Central Office', NULL, NULL, NULL),
(14, 'Address Line 1', 'Corporate Central Office', NULL, '2021-05-25 11:55:07'),
(15, 'Address Line 2', 'Minneapolis, MN', NULL, '2021-05-25 11:55:07'),
(16, 'Contact Number', '651-353-2660', NULL, '2021-05-25 11:55:07'),
(17, 'Media Requests', 'Media@SpecialistDatabase.com', NULL, '2021-05-25 11:55:07'),
(18, 'Website/Profile Updates', 'Webmaster@SpecialistDatabase.com', NULL, '2021-05-25 11:55:07'),
(19, 'Exposure Oppurtunity 1 Content', 'Weekly Social Media posts out to our college coach network.', NULL, '2021-06-22 23:04:22'),
(20, 'Exposure Oppurtunity 2 Content', 'Bi-weekly emails out to college coach database.', NULL, '2021-05-25 11:55:07'),
(21, 'Exposure Oppurtunity 3 Content', 'Monthly texts to college coaches', NULL, '2021-05-25 11:55:07'),
(22, 'Exposure Oppurtunity 4 Content', 'Most comprehensive player profile in the industry.', NULL, '2021-05-25 11:55:07'),
(23, 'Exposure Oppurtunity 1 icon', 'img/1x/mobile-icon.png', NULL, '2021-06-22 23:04:55'),
(24, 'Exposure Oppurtunity 2 icon', 'img/1x/message-icon.png', NULL, '2021-05-25 11:55:07'),
(25, 'Exposure Oppurtunity 3 icon', 'img/1x/chat-icon.png', NULL, '2021-05-25 11:55:07'),
(26, 'Exposure Oppurtunity 4 icon', 'img/1x/user-icon.png', NULL, '2021-05-25 11:55:07');

-- --------------------------------------------------------

--
-- Table structure for table `star_ratings`
--

CREATE TABLE `star_ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `club_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_attended` date DEFAULT NULL,
  `rating` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `star_ratings`
--

INSERT INTO `star_ratings` (`id`, `user_id`, `club_name`, `last_attended`, `rating`, `created_at`, `updated_at`) VALUES
(4, 4, 'LA Galaxy', '2021-05-03', '2.50', '2021-05-28 14:17:01', '2021-05-28 14:17:01'),
(26, 2, 'Real Madrid C F', '2021-06-01', '2.50', '2021-06-01 12:16:10', '2021-06-01 12:16:10'),
(27, 2, 'Ajax Amsterdam', '2021-06-03', '4.50', '2021-06-01 12:16:22', '2021-06-01 12:16:22'),
(28, 10, 'Minnesota State Mankato(Punting)', '2021-03-12', '3.50', '2021-06-23 21:47:15', '2021-06-23 21:48:21'),
(29, 10, 'Minnesota State Mankato(Kicking)', '2021-03-23', '3.00', '2021-06-23 21:48:09', '2021-06-23 21:48:09'),
(30, 11, 'National Kicking Rankings(kicker )', '2021-01-02', '5.00', '2021-06-24 15:51:29', '2021-06-24 15:51:29'),
(31, 12, 'Kohls', '2021-01-01', '4.50', '2021-06-24 21:09:04', '2021-06-24 21:09:04'),
(32, 12, 'Sailer Kicking', '2021-03-02', '4.50', '2021-06-24 21:09:52', '2021-06-24 21:09:52'),
(33, 13, 'National Kicking Rankings:', '2021-01-01', '3.00', '2021-06-24 21:15:56', '2021-06-24 21:15:56');

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
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isKicker` int(11) DEFAULT 0,
  `isPunter` int(11) DEFAULT 0,
  `isLongSnapper` int(11) DEFAULT 0,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` decimal(8,2) DEFAULT 0.00,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_handle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_handle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jersey_number` int(11) DEFAULT NULL,
  `specialist_position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grad_year` year(4) DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `high_school` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` decimal(8,2) DEFAULT NULL,
  `weight` decimal(8,2) DEFAULT NULL,
  `other_fb_positions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_sports` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college_degrees_of_interest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gpa` decimal(8,2) DEFAULT NULL,
  `act` decimal(8,2) DEFAULT NULL,
  `sat` decimal(8,2) DEFAULT NULL,
  `ncaa_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_rank` int(11) DEFAULT NULL,
  `class_rank_percentile` decimal(8,2) DEFAULT NULL,
  `coach1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coach2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coach3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `senior_pat_comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `senior_fg_longest` int(11) DEFAULT NULL,
  `senior_fg_comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `senior_kos` int(11) DEFAULT NULL,
  `senior_ko_total_yardage` int(11) DEFAULT NULL,
  `senior_ko_average` decimal(8,2) DEFAULT NULL,
  `senior_ko_touchbacks` int(11) DEFAULT NULL,
  `senior_ko_comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `senior_punts` int(11) DEFAULT NULL,
  `senior_punt_average` decimal(8,2) DEFAULT NULL,
  `senior_longest_punt` int(11) DEFAULT NULL,
  `senior_punt_total_yardage` int(11) DEFAULT NULL,
  `senior_punt_120` int(11) DEFAULT NULL,
  `senior_punt_comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `senior_40_yard_dash` int(11) DEFAULT NULL,
  `senior_pat_snaps` int(11) DEFAULT NULL,
  `senior_perfect_pat_snaps` decimal(8,2) DEFAULT NULL,
  `senior_punt_snaps` int(11) DEFAULT NULL,
  `senior_perfect_punt_snaps` decimal(8,2) DEFAULT NULL,
  `junior_pat_comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `junior_fg_longest` int(11) DEFAULT NULL,
  `junior_fg_comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `junior_kos` int(11) DEFAULT NULL,
  `junior_ko_total_yardage` int(11) DEFAULT NULL,
  `junior_ko_average` decimal(8,2) DEFAULT NULL,
  `junior_ko_touchbacks` int(11) DEFAULT NULL,
  `junior_ko_comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `junior_punts` int(11) DEFAULT NULL,
  `junior_punt_average` decimal(8,2) DEFAULT NULL,
  `junior_longest_punt` int(11) DEFAULT NULL,
  `junior_punt_total_yardage` int(11) DEFAULT NULL,
  `junior_punt_120` int(11) DEFAULT NULL,
  `junior_punt_comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `junior_40_yard_dash` int(11) DEFAULT NULL,
  `junior_pat_snaps` int(11) DEFAULT NULL,
  `junior_perfect_pat_snaps` decimal(8,2) DEFAULT NULL,
  `junior_punt_snaps` int(11) DEFAULT NULL,
  `junior_perfect_punt_snaps` decimal(8,2) DEFAULT NULL,
  `sophomore_pat_comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sophomore_fg_longest` int(11) DEFAULT NULL,
  `sophomore_fg_comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sophomore_kos` int(11) DEFAULT NULL,
  `sophomore_ko_total_yardage` int(11) DEFAULT NULL,
  `sophomore_ko_average` decimal(8,2) DEFAULT NULL,
  `sophomore_ko_touchbacks` int(11) DEFAULT NULL,
  `sophomore_ko_comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sophomore_punts` int(11) DEFAULT NULL,
  `sophomore_punt_average` decimal(8,2) DEFAULT NULL,
  `sophomore_longest_punt` int(11) DEFAULT NULL,
  `sophomore_punt_total_yardage` int(11) DEFAULT NULL,
  `sophomore_punt_120` int(11) DEFAULT NULL,
  `sophomore_punt_comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sophomore_40_yard_dash` int(11) DEFAULT NULL,
  `sophomore_pat_snaps` int(11) DEFAULT NULL,
  `sophomore_perfect_pat_snaps` decimal(8,2) DEFAULT NULL,
  `sophomore_punt_snaps` int(11) DEFAULT NULL,
  `sophomore_perfect_punt_snaps` decimal(8,2) DEFAULT NULL,
  `freshman_pat_comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `freshman_fg_longest` int(11) DEFAULT NULL,
  `freshman_fg_comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `freshman_kos` int(11) DEFAULT NULL,
  `freshman_ko_total_yardage` int(11) DEFAULT NULL,
  `freshman_ko_average` decimal(8,2) DEFAULT NULL,
  `freshman_ko_touchbacks` int(11) DEFAULT NULL,
  `freshman_ko_comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `freshman_punts` int(11) DEFAULT NULL,
  `freshman_punt_average` decimal(8,2) DEFAULT NULL,
  `freshman_longest_punt` int(11) DEFAULT NULL,
  `freshman_punt_total_yardage` int(11) DEFAULT NULL,
  `freshman_punt_120` int(11) DEFAULT NULL,
  `freshman_punt_comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `freshman_40_yard_dash` int(11) DEFAULT NULL,
  `freshman_pat_snaps` int(11) DEFAULT NULL,
  `freshman_perfect_pat_snaps` decimal(8,2) DEFAULT NULL,
  `freshman_punt_snaps` int(11) DEFAULT NULL,
  `freshman_perfect_punt_snaps` decimal(8,2) DEFAULT NULL,
  `junior_days1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `junior_days2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offers1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offers2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agreement_value` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `package_id` int(11) DEFAULT NULL,
  `package_amount` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_status` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `user_status` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `package_end_date` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `type`, `last_name`, `user_name`, `isKicker`, `isPunter`, `isLongSnapper`, `image`, `rating`, `description`, `twitter_handle`, `instagram_handle`, `jersey_number`, `specialist_position`, `grad_year`, `state`, `high_school`, `height`, `weight`, `other_fb_positions`, `other_sports`, `college_degrees_of_interest`, `gpa`, `act`, `sat`, `ncaa_id`, `class_rank`, `class_rank_percentile`, `coach1`, `coach2`, `coach3`, `senior_pat_comment`, `senior_fg_longest`, `senior_fg_comment`, `senior_kos`, `senior_ko_total_yardage`, `senior_ko_average`, `senior_ko_touchbacks`, `senior_ko_comment`, `senior_punts`, `senior_punt_average`, `senior_longest_punt`, `senior_punt_total_yardage`, `senior_punt_120`, `senior_punt_comment`, `senior_40_yard_dash`, `senior_pat_snaps`, `senior_perfect_pat_snaps`, `senior_punt_snaps`, `senior_perfect_punt_snaps`, `junior_pat_comment`, `junior_fg_longest`, `junior_fg_comment`, `junior_kos`, `junior_ko_total_yardage`, `junior_ko_average`, `junior_ko_touchbacks`, `junior_ko_comment`, `junior_punts`, `junior_punt_average`, `junior_longest_punt`, `junior_punt_total_yardage`, `junior_punt_120`, `junior_punt_comment`, `junior_40_yard_dash`, `junior_pat_snaps`, `junior_perfect_pat_snaps`, `junior_punt_snaps`, `junior_perfect_punt_snaps`, `sophomore_pat_comment`, `sophomore_fg_longest`, `sophomore_fg_comment`, `sophomore_kos`, `sophomore_ko_total_yardage`, `sophomore_ko_average`, `sophomore_ko_touchbacks`, `sophomore_ko_comment`, `sophomore_punts`, `sophomore_punt_average`, `sophomore_longest_punt`, `sophomore_punt_total_yardage`, `sophomore_punt_120`, `sophomore_punt_comment`, `sophomore_40_yard_dash`, `sophomore_pat_snaps`, `sophomore_perfect_pat_snaps`, `sophomore_punt_snaps`, `sophomore_perfect_punt_snaps`, `freshman_pat_comment`, `freshman_fg_longest`, `freshman_fg_comment`, `freshman_kos`, `freshman_ko_total_yardage`, `freshman_ko_average`, `freshman_ko_touchbacks`, `freshman_ko_comment`, `freshman_punts`, `freshman_punt_average`, `freshman_longest_punt`, `freshman_punt_total_yardage`, `freshman_punt_120`, `freshman_punt_comment`, `freshman_40_yard_dash`, `freshman_pat_snaps`, `freshman_perfect_pat_snaps`, `freshman_punt_snaps`, `freshman_perfect_punt_snaps`, `junior_days1`, `junior_days2`, `offers1`, `offers2`, `agreement_value`, `package_id`, `package_amount`, `package_status`, `user_status`, `created_at`, `package_end_date`, `updated_at`) VALUES
(1, 'Admin', 'admin@nsd.com', NULL, '$2y$10$l0tswgrEhm1htd2dHDtbX.wN.H8zTKz.HipauG5udg5rtudvUXDWm', NULL, 'Admin', 'Admin', 'Admin', 0, 0, 0, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, '0', '0', '2021-05-25 11:26:58', NULL, '2021-06-24 16:22:23'),
(2, 'John', 'jd@nsd.com', NULL, '$2y$10$cHjd4Dyh9Tow/Q2UnzwJ9uR7o3Zt5RprQFHhSOHf/HjpH.lSRfwdK', NULL, 'Guest', 'Doe', 'jd', 1, 0, 1, 'NyFwAi1GuH.png', '3.50', 'john doe description john doe description john doe description john doe description john doe description john doe description john doe description john doe description john doe description john doe description john doe description john doe description john doe description john doe description john doe description john doe description john doe description john doe description john doe description john doe description john doe description john doe description john doe description john doe description john doe description john doe description john doe description john doe description john doe description john doe description', 'jdt', 'jdi', NULL, 'lw', 2020, 'kentucky', 'abc school', '5.50', '88.10', 'lb, rw, rb', 'basketball, soccer', 'psy', '2.80', '4.00', '4.00', '13213', 4, '44.44', 'Ammar', 'Uzair', 'Fahad', 'pat comment', 200, 'asd', 44, 21, '42.00', 12, 'arc 32', 12, '34.00', 231, 23, 2, 'sdff', 231, 12, '23.00', 23, '32.00', 'asdasdas', 12, 'asd', 23, 341, '231.00', 231, 'dfa', 231, '231.00', 231, 34, 453, 'sdffqwdf', 342, 21, '431.00', 231, '23.00', 'asdawds', 2, 'uhb', 2, 78, '7.00', 7, 'fadhugn', 276, '27.00', 72, 8, 82, 'asdbf', 31, 23, '43.00', 21, '22.00', 'asdasd', 7, '6aasd', 7, 76, '87.00', 8, 'vghvdyqtfd', 7627, '78.00', 6, 7, 76, 'BJ GBRFU2', 123, 23, '23.00', 13, '56.00', 'nqui2 rh2387rh 28r7 h', 'b83ehxn2897ey', 'JFK', 'ABC', '0', 2, NULL, '0', '0', '2021-05-25 11:35:27', NULL, '2021-06-01 12:16:22'),
(4, 'Mr', 'punter@nsd.com', NULL, '$2y$10$8vT9stNQt4kJZF0fA1TRc.KZeJnhKgKpC0Eon7gmzBkjZPgMRs2jC', NULL, 'Guest', 'Punter', 'mrputner', 0, 1, 0, 'KUROkW6jtU.png', '0.00', NULL, 'punter', 'punter', 44, 'CAM', 2015, 'IL', 'ABC IL', '6.20', '140.00', 'CDM', 'Ice Hockey', 'ABC', '4.40', '4.40', '45.00', '112312313', 4, '44.00', 'coach 1', NULL, NULL, 'asdasd', 123, 'asdasd', 1, 12, '23.00', 2, 'asdasd', 12, '23.00', 31, 231, 32, 'dfmsi fuh', 23, 23, '23.00', 23, '43.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '0', '0', '2021-05-28 14:15:13', NULL, '2021-06-28 23:26:49'),
(5, 'MR', 'snapper@nsd.com', NULL, '$2y$10$q.ffDG9E/ll.f8OcFzKqfOZdc0rBrDvWYojFWt7xUkj.ohdS5sxYW', NULL, 'Guest', 'Snapper', 'mrsnapper', 0, 0, 1, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, '0', '0', '2021-05-28 14:21:21', NULL, '2021-05-28 14:21:21'),
(8, 'Robert', 'bentjack@icloud.com', NULL, '$2y$10$Zn8NMeIublFGFNUbDMOPR.IchJdEx6SlNpSEIN/AihpyfVsEmfUV.', NULL, 'Guest', 'Smit', 'robertsmith', 0, 1, 0, 'qK97GJxNmn.png', '0.00', NULL, 'jack_smith2022', NULL, 99, 'PUNTER', 2022, 'AL', 'Saralandhigh', '6.20', '230.00', NULL, 'Baseball', 'Sports Medicine', '4.00', '24.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '0', '0', '2021-06-19 17:28:59', NULL, '2021-06-30 15:59:00'),
(10, 'Johanna Ronnei', 'johanna.deavila@gmail.com', NULL, '$2y$10$0UXmb8QIvm3TW7XkNlazueTI0xafZvy5lOj894JYGPMUF0Xyb8VAa', NULL, 'Guest', 'De Avila', 'Johanna Ronnei De Avila', 1, 1, 0, 'BmpAVIWXZ5.png', '3.50', NULL, 'eldondavila', 'eldon.deavila', 1, 'Kicker/Punter', 2024, 'Minnesota', 'Edina High School', '59.00', '175.00', 'DB and Quarterback', 'Baseball', 'Sports Management/Nutrition/Fitness/Analytics/Journalism, Business Administration', '3.14', NULL, NULL, NULL, NULL, NULL, 'Chris Husby', 'Edina Special Teams Coach', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, '0', '0', '2021-06-23 20:55:47', NULL, '2021-06-23 21:48:21'),
(11, 'Connor', 'connor.renyolds@me.com', NULL, '$2y$10$3vh75M/q0tL4sifzQuRLX.GveKXJv485tzEoaIceZzQf73/uzZmbC', NULL, 'Guest', 'Renyolds', 'Connor Renyolds', 1, 1, 0, 'I2Uxuz7T67.jpg', '5.00', '2020-2021: Varsity Kicker, Punter and Cornerback, Eden Prairie 7-0 Season, 2020 6A Champion, 31 for 31 PATs, 2 for 3 attempts on field goals (single miss from 54 yards),18 touchbacks, 13 punts with an average of 32.7 yards, 2 punts inside 20 yard line. Made last 51 consecutive PAT’s going back to third game of Junior season. 126 High School kick-offs and punts and none returned for a touchdown\r\n2019-2020: Varsity Kicker and Punter, 30 for 32 PATs, 3 for 5 attempts on field goals (long 47 yards), 22 punts with an average of 37.6 yards, 9 punts inside 20-yard line \r\n2018-2019: Varsity Kicker, 34 for 36 PATs, 3 for 5 attempts on field goals, all PAT’s complete at State Championship Game at U.S. Bank Stadium', 'Con_Reynolds13', 'Connor_Reynolds__', 13, 'Punter/ Kicker', 2021, 'Minnesota', 'Eden Prairie High school', '62.00', '200.00', 'CB', 'Soccer', 'Business administration', '3.44', '21.00', NULL, NULL, NULL, NULL, 'Chris Husby', NULL, NULL, '31 for 31 PATs 2020, 30 for 32 PATs 2019, 34 for 36 PATs 2018', NULL, '2 for 3 attempts on field goals (single miss from 54 yards),3 for 5 attempts on field goals (long 47 yards), 3 for 5 attempts on field goals, all PAT’s complete at State Championship Game at U.S. Bank Stadium', NULL, NULL, NULL, 18, ':# of KOs, Total Yardage, KO Average, Longest KO, Adjusted KO Average with only deep Kos: 18 touchbacks', 9, '37.00', 22, NULL, 20, 'of Punts, Total Yardage, Punt Average, I-20, Longest Punt: 22 punts with an average of 37.6 yards, 9 punts inside 20-yard line', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, '0', '0', '2021-06-24 15:34:06', NULL, '2021-06-24 16:08:11'),
(12, 'Carter', 'Cart9054@gmail.com', NULL, '$2y$10$vYTqCkIwlJsGBfbf7TRZDO8XC06eV1mSQy.EKPx1ckmWAZ.BeqXCy', NULL, 'Guest', 'Jensen', 'Carter Jensen', 0, 1, 0, 'D2xpHKfLCA.jpg', '4.50', NULL, '@cart9054', '@carternjensen', 95, 'Punter', 2021, 'MN', 'Eastview High School', '5.00', '195.00', 'OLB, RB', 'Hockey, Football, Weightlifting', 'Aviation, Political Science', '3.95', '35.00', NULL, NULL, 26, '4.80', 'Chris Husby @specialteamsfb', 'Aaron Perez @thepuntfactory', 'Javon Hering Coachhering', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, 40, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, '0', '0', '2021-06-24 20:34:03', NULL, '2021-06-24 21:12:01'),
(13, 'Andrew', 'andrewj0222@gmail.com', NULL, '$2y$10$qkMvJoo/.yLYecvnYkMu5OqJByvl6IR5jAS3DyNdu0VKTaRYnDD9K', NULL, 'Guest', 'Johnson', 'Andrew Johnson', 0, 0, 1, NULL, '3.00', NULL, '@AndrewJ933', '@andrewj0222', 3, 'Long Snapper', 2023, 'NE', 'Lincoln Christian School', '5.00', '165.00', 'Qb, S', 'baseball, football', NULL, '4.00', NULL, NULL, NULL, NULL, NULL, 'Jeff Garner', 'Quinn Slaven', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '0', '0', '2021-06-24 21:13:24', NULL, '2021-06-28 20:19:14'),
(14, 'uzair', 'uzairhyder33@gmail.com', NULL, '$2y$10$R1g5ABuVi5cxhydwuCbUWOEnzuLnUrkvbu5xir/RfKr6m8/fjj6d6', '4Zw6CBKvz0lT9t93duR803USL6X8xOTs9PBOV9zQ8g92JBf12NraVcLZp0Bt', 'Player', 'hyder', 'uzairhyder', 1, 0, 0, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, '100.00', '1', '0', '2021-06-30 15:49:30', '2021-07-30 15:49:30', '2021-07-01 18:50:30'),
(15, 'TEST', 'teste@gmail.com', NULL, '$2y$10$anOPW/zus95BLrIPI7sumORs4bVFg/MeU4fVVWTc2ydHYVeSPzWdK', NULL, 'Player', 'TESTE', 'testet', 1, 0, 0, NULL, '0.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, '100.00', '1', '1', '2021-06-30 21:56:05', '2021-07-30 21:56:05', '2021-06-30 21:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `user_videos`
--

CREATE TABLE `user_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_videos`
--

INSERT INTO `user_videos` (`id`, `user_id`, `title`, `category`, `link`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 8, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 2, 'asdadas', 'HUDL', 'dasdasd', '8HklX6H9gd.png', '2021-05-26 14:40:43', '2021-05-26 14:40:50'),
(9, 2, 'Camp', 'CAMP', '1x12e12zw2', 'AK2LR6SZlb.png', '2021-05-27 11:36:16', '2021-05-27 11:36:16'),
(10, 2, 'Training', 'TRAINING', 'asdqm1io23je180', 'ViLomMCHv1.png', '2021-05-27 11:36:32', '2021-05-27 11:36:39'),
(11, 4, 'Hudl video', 'HUDL', 'asd', 'SnIrR8ibWV.png', '2021-05-28 14:20:42', '2021-05-28 14:20:42'),
(12, 8, 'test', 'CAMP', 'https://youtu.be/oG-LHT21L3o', NULL, '2021-06-22 00:19:30', '2021-06-22 00:19:30'),
(13, 8, 'test', 'TRAINING', 'https://youtu.be/oG-LHT21L3o', NULL, '2021-06-22 00:23:02', '2021-06-22 00:23:02'),
(14, 8, '#5 Ranked Punter in America // Jackson Smith // Class of 2022', 'CAMP', 'https://www.youtube.com/embed/oG-LHT21L3o', NULL, '2021-06-22 00:24:17', '2021-06-22 00:24:17'),
(15, 10, 'Freshman Season 2020', 'HUDL', '//www.hudl.com/embed/video/3/15023956/5facec61bd6afc04d04f28ca', NULL, '2021-06-23 22:12:15', '2021-06-23 22:37:13'),
(16, 10, '2020 K/P Highlights', 'HUDL', '//www.hudl.com/embed/video/3/15023956/5fe2911b664b6d1450e0c88e', NULL, '2021-06-23 22:16:58', '2021-06-23 22:38:37'),
(17, 10, 'Eldon De Avila', 'CAMP', 'https://www.youtube.com/embed/c8xc8-pp8d0', NULL, '2021-06-23 22:18:26', '2021-06-23 22:40:23'),
(18, 10, 'Eldon De Avila | 2024 8th Grade Kicker Punter', 'CAMP', 'https://www.youtube.com/embed/zPRxYYkuK58', NULL, '2021-06-23 22:43:20', '2021-06-23 22:43:20'),
(19, 10, 'Eldon De Avila | 2024 MN Freshman | Punter', 'CAMP', 'https://www.youtube.com/embed/5jaU_bZQt4s', NULL, '2021-06-23 22:43:58', '2021-06-23 22:43:58'),
(20, 11, 'Kicking In Snow/ State Champ', 'HUDL', '//www.hudl.com/embed/video/3/10042388/5fd3cc775b3cdc0afcdaa7c9', NULL, '2021-06-24 15:56:21', '2021-06-24 15:56:21'),
(21, 11, 'Punting Highlights', 'HUDL', '//www.hudl.com/embed/video/3/10042388/5fdffc60b3d27c10f47b9852', NULL, '2021-06-24 15:57:36', '2021-06-24 15:57:36'),
(22, 11, '2020 Defensive Highlights', 'HUDL', '//www.hudl.com/embed/video/3/10042388/5fcc030764ea1b0570a97771', NULL, '2021-06-24 15:58:16', '2021-06-24 15:58:16'),
(23, 11, 'Connor Reynolds | 2021 MN Senior', 'CAMP', 'https://www.youtube.com/embed/MOCmtY56AGw', NULL, '2021-06-24 16:00:15', '2021-06-24 16:00:15'),
(25, 13, 'Sophomore Longsnapping Highlights', 'HUDL', '//www.hudl.com/embed/video/3/12738558/5fa9fa4a578dac1518428f7b', NULL, '2021-06-24 21:17:12', '2021-06-24 21:17:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `star_ratings`
--
ALTER TABLE `star_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_videos`
--
ALTER TABLE `user_videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `star_ratings`
--
ALTER TABLE `star_ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_videos`
--
ALTER TABLE `user_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
