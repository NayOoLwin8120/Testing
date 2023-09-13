-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 13, 2023 at 07:55 PM
-- Server version: 8.0.33
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfilio`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutuses`
--

CREATE TABLE `aboutuses` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci,
  `aboutus_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutuses`
--

INSERT INTO `aboutuses` (`id`, `title`, `short_title`, `short_description`, `long_description`, `aboutus_image`, `created_at`, `updated_at`) VALUES
(1, 'What is Lorem ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem is is is st odrs to l;;dfi jto lmidk..', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>', '/admin/about_us/1758684434706189.png', NULL, '2023-02-23 21:46:16');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `blog_button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `category_id`, `blog_button`, `blog_tags`, `blog_description`, `blog_image`, `created_at`, `updated_at`) VALUES
(2, 'Make communication Fast and Effectively.', 3, 'Read More', 'home,tech', '<p>You know Programming . I want to know what is this? I want to tell kjdkjkjgkfjkgjgfkjkfjn gfghfhgjf jgkgfgfgf</p>', 'admin/blog_image/1758686288304929.png', '2023-02-21 02:30:35', '2023-02-23 22:16:48'),
(3, 'Make communication Fast and Effectively.', 2, 'Read More', 'tech', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable</p>\r\n<p>Definition Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li><strong>Achieving effectiveness,</strong></li>\r\n<li><strong>Perceiving and utilizing opportunities,</strong></li>\r\n<li><strong>Mobilising resources,</strong></li>\r\n<li><strong>Securing an advantageous position,</strong></li>\r\n<li><strong>Meeting challenges and threats,</strong></li>\r\n<li><strong>Directing efforts and behaviour and</strong></li>\r\n<li><strong>Gaining command over the situation.</strong></li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', 'admin/blog_image/1758686270882954.png', '2023-02-21 20:16:25', '2023-02-23 22:15:27'),
(4, 'Best website traffics Booster with great tools', 2, 'Read More', 'Education', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable</p>\r\n<p>Definition Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', 'admin/blog_image/1758684677669250.png', '2023-02-23 21:50:07', NULL),
(5, 'How you should start product design', 2, 'Read More', 'Facebook', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable</p>\r\n<p>Definition Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>\r\n<div class=\"services__details__img\">\r\n<div class=\"row\">&nbsp;</div>\r\n</div>', 'admin/blog_image/1758694643518340.jpg', '2023-02-24 00:28:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `blog_category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', '2023-02-21 02:01:11', '2023-02-21 02:01:22'),
(2, 'Education', '2023-02-21 02:27:45', NULL),
(3, 'Knowledge', '2023-02-21 02:28:07', NULL),
(4, 'News', '2023-02-21 02:28:47', NULL),
(5, 'PHP', '2023-02-21 23:08:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactmes`
--

CREATE TABLE `contactmes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactmes`
--

INSERT INTO `contactmes` (`id`, `name`, `email`, `subject`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'nayoolwin', 'nay@gmail.com', 'About this project', '09962297286', 'dfdfd', '2023-02-23 21:11:19', NULL),
(2, 'nayoo', 'konay@gmail.com', 'About this project', '09962297286', 'lkdlfkdkfldkfld', '2023-02-23 21:13:02', NULL),
(3, 'nayoolwin', 'nayoo@gmail.com', 'About this project', '09962297286', 'dfdfdfdfdgbhnjfd', '2023-02-24 03:18:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci,
  `footer_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `location`, `footer_id`, `created_at`, `updated_at`) VALUES
(4, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3112.5533487632665!2d96.120677114245!3d16.846396488404913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c195ec95eb54ef%3A0x778343a0ca0a54a4!2zWVVGQyDhgJvhgJThgLrhgIDhgK_hgJThgLrhgJrhgLDhgJThgK3hgK_hgIDhgLrhgJDhgIDhgLrhgJjhgLHhgKzhgJzhgK_hgLbhgLjhgKHhgJ7hgIThgLrhgLjhgJvhgLHhgIDhgLDhgLjhgIDhgJThgLo!5e1!3m2!1sen!2smm!4v1677144816914!5m2!1sen!2smm', 4, '2023-02-23 04:17:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint UNSIGNED NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Linked_in` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Instrgram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `phone_number`, `short_description`, `Country`, `address`, `email`, `facebook_link`, `twitter_link`, `Linked_in`, `Instrgram`, `copyright`, `created_at`, `updated_at`) VALUES
(4, '09692946709', '<p>Hello How Are you</p>', 'MYANMAR', '<p>Hdikfhud</p>', 'nayoolwin@gmail.com', 'Facebook.com', 'Twilight.com', 'Ldinifke.com', 'Instrgram', 'Sabahna', '2023-02-22 22:11:08', '2023-02-23 04:16:30');

-- --------------------------------------------------------

--
-- Table structure for table `homes`
--

CREATE TABLE `homes` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homes`
--

INSERT INTO `homes` (`id`, `title`, `short_title`, `slide_image`, `video_url`, `created_at`, `updated_at`) VALUES
(1, 'What is Programming?', 'HTML,CSS,Javascript,Jquery,CssAnimation,Mysql,PHP,Laravel,Vue js,ReactJs,Java,J2EE,MangoDb', 'admin/Home_slider_image/1758686165189816.png', 'https://www.udemy.com/course/laravel-multi-vendor-ecommerce-project/learn/lecture/34031538#overview', NULL, '2023-02-23 22:13:46'),
(2, 'What is Programming?', 'HTML,CSS,Javascript,Jquery,CssAnimation,Mysql,PHP,Laravel,Vue js,ReactJs,Java,J2EE,MangoDb', 'admin/Home_slider_image/1757774187498176.png', 'https://www.udemy.com/course/laravel-multi-vendor-ecommerce-project/learn/lecture/34031538#overview', '2023-02-04 20:38:16', '2023-02-13 20:38:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_10_070828_create_homes_table', 1),
(6, '2023_02_13_084337_create_aboutuses_table', 1),
(7, '2023_02_14_053953_create_multi_images_table', 1),
(8, '2023_02_15_064758_create_portfilios_table', 1),
(9, '2023_02_16_074418_create_blogs_table', 1),
(10, '2023_02_20_053237_create_blog_categories_table', 1),
(11, '2023_02_21_062240_create_categories_table', 1),
(12, '2023_02_22_080655_create_footers_table', 1),
(13, '2023_02_23_064334_create_contacts_table', 1),
(14, '2023_02_23_100444_create_contactmes_table', 1),
(15, '2023_02_24_072902_create_partners_table', 2),
(16, '2023_02_24_084439_create_pimages_table', 3),
(17, '2023_02_24_095442_create_services_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `multi_images`
--

CREATE TABLE `multi_images` (
  `id` bigint UNSIGNED NOT NULL,
  `multiimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_images`
--

INSERT INTO `multi_images` (`id`, `multiimage`, `created_at`, `updated_at`) VALUES
(1, 'admin/multi_image/1757792103316120.png', '2023-02-14 01:23:02', NULL),
(2, 'admin/multi_image/1757792103396482.png', '2023-02-14 01:23:02', NULL),
(3, 'admin/multi_image/1757799272780026.jpg', '2023-02-14 03:16:59', NULL),
(4, 'admin/multi_image/1757799272872228.png', '2023-02-14 03:16:59', NULL),
(5, 'admin/multi_image/1757799272975618.jpg', '2023-02-14 03:16:59', NULL),
(6, 'admin/multi_image/1757877009948358.png', '2023-02-14 03:16:59', NULL),
(7, 'admin/multi_image/1757877010007367.png', '2023-02-14 23:52:35', NULL),
(9, 'admin/multi_image/1757877010082543.png', '2023-02-14 23:52:36', NULL),
(10, 'admin/multi_image/1757877010222632.jpg', '2023-02-14 23:52:36', NULL),
(11, 'admin/multi_image/1757877010082543.png', '2023-02-14 23:52:36', NULL),
(12, 'admin/multi_image/1757877010222632.jpg', '2023-02-14 23:52:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `title`, `short_description`, `created_at`, `updated_at`) VALUES
(5, 'I proud to have collaborated with some awesome companies', '<p>I\'m a bit of a digital product junky. Over the years, I\'ve used hundreds of web and mobile apps in different industries and verticals. Eventually, I decided that it would be a fun challenge to try designing and building my own.</p>', '2023-02-24 01:58:20', NULL);

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
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pimages`
--

CREATE TABLE `pimages` (
  `id` bigint UNSIGNED NOT NULL,
  `multiimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pimages`
--

INSERT INTO `pimages` (`id`, `multiimage`, `created_at`, `updated_at`) VALUES
(1, 'admin/partner/1758703945448778.png', '2023-02-24 02:56:23', NULL),
(2, 'admin/partner/1758703945606744.png', '2023-02-24 02:56:23', NULL),
(3, 'admin/partner/1758703945666894.png', '2023-02-24 02:56:23', NULL),
(4, 'admin/partner/1758703945764259.jpg', '2023-02-24 02:56:23', NULL),
(5, 'admin/partner/1758703945816447.jpg', '2023-02-24 02:56:23', NULL),
(6, 'admin/partner/1758703945864450.png', '2023-02-24 02:56:23', NULL),
(7, 'admin/partner/1758704428303423.jpg', '2023-02-24 03:04:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portfilios`
--

CREATE TABLE `portfilios` (
  `id` bigint UNSIGNED NOT NULL,
  `portfilio_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfilio_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfilio_button` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfilio_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfilio_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfilios`
--

INSERT INTO `portfilios` (`id`, `portfilio_name`, `portfilio_title`, `portfilio_button`, `portfilio_image`, `portfilio_description`, `created_at`, `updated_at`) VALUES
(3, 'Web Developement', 'Ecommerce Product Apps', 'VIEW CASE STUDY', '/admin/portfilio_image/1758684019239506.png', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</p>\r\n<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text</p>', NULL, NULL),
(4, 'web Application', 'Cryptocurrency web Application', 'VIEW CASE STUDY', '/admin/portfilio_image/1758684103127592.png', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</p>\r\n<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text</p>', NULL, NULL),
(5, 'Making 3d Illustration', 'Making 3d Illustration', 'VIEW CASE STUDY', '/admin/portfilio_image/1758684174839298.png', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</p>\r\n<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text</p>', NULL, NULL),
(6, 'Personal', 'Hilon - Personal Portfolio', 'VIEW CASE STUDY', '/admin/portfilio_image/1758684230670662.png', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</p>\r\n<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text</p>', NULL, NULL),
(7, 'App Design', 'Ecommerce Product Apps', 'VIEW CASE STUDY', '/admin/portfilio_image/1758684286345980.png', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</p>\r\n<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `button`, `service_image`, `created_at`, `updated_at`) VALUES
(4, 'Business Strategy', '<p>\r\n Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', 'Read More', 'admin/Service/1758959439166276.png', '2023-02-26 22:21:52', '2023-02-26 22:37:20'),
(5, 'Business Strategy', '<p>\r\n Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', 'Read More', 'admin/Service/1758961528999832.png', '2023-02-26 22:39:01', '2023-02-26 23:10:33'),
(6, 'Business Strategy', '<p>\r\n Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', 'Read More', '/admin/Service/1758959602538035.png', '2023-02-26 22:39:56', NULL),
(7, 'Business Strategy', '<p>\r\n Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', 'Read More', 'admin/Service/1758961779368960.png', '2023-02-26 22:40:32', '2023-02-26 23:14:32'),
(8, 'Business Strategy', '<p>\r\n Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', 'Read More', '/admin/Service/1758959699912254.png', '2023-02-26 22:41:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nayoolwin', 'nayoolwin', '2023-02-21 07:45:21PP.png', 'nay@gmail.com', '2023-02-21 01:14:30', '$2y$10$toZpWCY4v6EOhRsuXAD9J.7PBEqwPrniNMuM.CCd3vrIUvJSIDVsO', NULL, '2023-02-21 01:14:11', '2023-02-21 01:15:21'),
(2, 'nay', 'nayoo', '2023-02-21 10:39:08no_image.jpg', 'nayoo@gmail.com', '2023-02-21 04:08:28', '$2y$10$0Z6zpcYDp3w2KFW5i5W./uYH5rQsguDa/T65Vmo0J0mug/hXsnP4.', 'OYaONIuGjHXiCdbRPNPxYnEyxcXhCoeh8twRhBs9FlM8pnh7bVTrPmf0Nd7V', '2023-02-21 04:06:31', '2023-02-21 04:09:08'),
(4, 'nay', 'nayoo', '2023-02-21 10:52:33about_icon.png', 'konay@gmail.com', '2023-02-21 04:18:58', '$2y$10$zoTuB7vjvNmgHgHWrIw8ceFv1aWLufUf8PaFRxQIX/Taewmr5FA7C', NULL, '2023-02-21 04:14:10', '2023-02-21 04:22:33'),
(5, 'nayoo', 'nayoolwin', NULL, 'lwin@gmail.com', NULL, '$2y$10$D2.mnBj8bxetNiOLa7XiXe5mrp.hC/SMTGFaA3hcI5WE7UQ92eWYW', NULL, '2023-02-21 04:29:40', '2023-02-21 04:29:40'),
(6, 'nay', 'nayoo', '2023-02-22 05:37:58illustrator_light.png', 'oo@gmail.com', '2023-02-21 20:08:21', '$2y$10$zWMoStLfvaBw6euB8D2dKe05JQ2hAI.Qw3TOkvpbLkp.QFtSy0dTi', NULL, '2023-02-21 20:04:37', '2023-02-21 23:07:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutuses`
--
ALTER TABLE `aboutuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactmes`
--
ALTER TABLE `contactmes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homes`
--
ALTER TABLE `homes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multi_images`
--
ALTER TABLE `multi_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pimages`
--
ALTER TABLE `pimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfilios`
--
ALTER TABLE `portfilios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `aboutuses`
--
ALTER TABLE `aboutuses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contactmes`
--
ALTER TABLE `contactmes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `homes`
--
ALTER TABLE `homes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `multi_images`
--
ALTER TABLE `multi_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pimages`
--
ALTER TABLE `pimages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `portfilios`
--
ALTER TABLE `portfilios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
