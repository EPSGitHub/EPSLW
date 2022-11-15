-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 11:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eps`
--

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vacancy` int(11) NOT NULL,
  `experiance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'negotiable',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_deadline` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `posted_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `title`, `slug`, `job_type`, `category`, `cat_slug`, `vacancy`, `experiance`, `location`, `salary`, `description`, `apply_deadline`, `status`, `posted_by`, `created_at`, `updated_at`) VALUES
(1, 'Software Engineer - Core .Net Developer', '', 'Full Time', 'Software Engineer', 'software-engineer', 5, '5', 'Uttara', 'negotiable', '<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Job Context</h4>\r\n\r\n<p style=\"text-align:justify\">We are currently looking for Product Desginer for our latest exciting project. Data Path Ltd. is an Equal Opportunity Employer. Applicants regardless of gender, color, race and religion are encouraged to apply.</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Job Responsibilities</h4>\r\n\r\n<p style=\"text-align:justify\">Producing high quality UI design solutions through wireframes and prototypes. To design user interface using visual assets like layout, patterns, typography, colors, working in highly collaborative and agile teams. Maintain design principles in terms of accessibility, responsiveness, and user interaction. Working with the product and development teams internally, putting forward innovative ideas, and continuously optimizing the user experience. Maintain a user-centric approach in design perspective and practice.</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Employment Status</h4>\r\n\r\n<p style=\"text-align:justify\">Full-time</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Workplace</h4>\r\n\r\n<p style=\"text-align:justify\">Work at office</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Educational Requirements</h4>\r\n\r\n<p style=\"text-align:justify\">Bachelor in Engineering (BEngg) in CSE, ICE, ICT, ECE</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Skills Required:</h4>\r\n\r\n<p style=\"text-align:justify\">Balsamiq, Figma, Product design, Web Design</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Experience Requirements</h4>\r\n\r\n<p style=\"text-align:justify\">At most 2 year(s)</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">The applicants should have experience in the following business area(s):</h4>\r\n\r\n<p style=\"text-align:justify\">Software Company</p>\r\n\r\n<p style=\"text-align:justify\">Additional Requirements</p>\r\n\r\n<p style=\"text-align:justify\">1-2 years working experience in designing a range of digital products (apps, websites, and software) across platforms (mobile, tablet, desktop), ideally for a large audiences or similar role with proven track records.</p>\r\n\r\n<p style=\"text-align:justify\">Proficiency in design software including industry standard design tools (e.g. Figma, Balsamiq, Adobe Photoshop, Adobe Illustrator, Adobe XD, etc. with an interest in exploring new tools and processes)</p>\r\n\r\n<p style=\"text-align:justify\">Familiar with iOS/Android design specifications.</p>\r\n\r\n<p style=\"text-align:justify\">Skills and knowledge in front-end development/web development technologies such as HTML/HTML5, CSS, JavaScript, and Responsive Web Design will be an added advantage.</p>\r\n\r\n<p style=\"text-align:justify\">Research and showcase knowledge in the industrys latest trends and technologies.</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Job Location</h4>\r\n\r\n<p style=\"text-align:justify\">Anywhere in Bangladesh</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Salary</h4>\r\n\r\n<p style=\"text-align:justify\">Negotiable</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Compensation &amp; Other Benefits</h4>\r\n\r\n<p style=\"text-align:justify\">Medical allowance, Performance bonus, Provident fund, Weekly 2 holidays, Gratuity</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Lunch Facilities</h4>\r\n\r\n<p style=\"text-align:justify\">Full Subsidize</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Salary Review</h4>\r\n\r\n<p style=\"text-align:justify\">Yearly</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Festival Bonus: 2</h4>', '2022-11-25', 1, 1, '2022-11-09 04:24:29', '2022-11-09 04:24:29'),
(2, 'Business Development Executive', '', 'Full Time', 'Business Development', 'business-development', 5, '2', 'Uttara', 'negotiable', '<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Job Context</h4>\r\n\r\n<p style=\"text-align:justify\">We are currently looking for Product Desginer for our latest exciting project. Data Path Ltd. is an Equal Opportunity Employer. Applicants regardless of gender, color, race and religion are encouraged to apply.</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Job Responsibilities</h4>\r\n\r\n<p style=\"text-align:justify\">Producing high quality UI design solutions through wireframes and prototypes. To design user interface using visual assets like layout, patterns, typography, colors, working in highly collaborative and agile teams. Maintain design principles in terms of accessibility, responsiveness, and user interaction. Working with the product and development teams internally, putting forward innovative ideas, and continuously optimizing the user experience. Maintain a user-centric approach in design perspective and practice.</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Employment Status</h4>\r\n\r\n<p style=\"text-align:justify\">Full-time</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Workplace</h4>\r\n\r\n<p style=\"text-align:justify\">Work at office</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Educational Requirements</h4>\r\n\r\n<p style=\"text-align:justify\">Bachelor in Engineering (BEngg) in CSE, ICE, ICT, ECE</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Skills Required:</h4>\r\n\r\n<p style=\"text-align:justify\">Balsamiq, Figma, Product design, Web Design</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Experience Requirements</h4>\r\n\r\n<p style=\"text-align:justify\">At most 2 year(s)</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">The applicants should have experience in the following business area(s):</h4>\r\n\r\n<p style=\"text-align:justify\">Software Company</p>\r\n\r\n<p style=\"text-align:justify\">Additional Requirements</p>\r\n\r\n<p style=\"text-align:justify\">1-2 years working experience in designing a range of digital products (apps, websites, and software) across platforms (mobile, tablet, desktop), ideally for a large audiences or similar role with proven track records.</p>\r\n\r\n<p style=\"text-align:justify\">Proficiency in design software including industry standard design tools (e.g. Figma, Balsamiq, Adobe Photoshop, Adobe Illustrator, Adobe XD, etc. with an interest in exploring new tools and processes)</p>\r\n\r\n<p style=\"text-align:justify\">Familiar with iOS/Android design specifications.</p>\r\n\r\n<p style=\"text-align:justify\">Skills and knowledge in front-end development/web development technologies such as HTML/HTML5, CSS, JavaScript, and Responsive Web Design will be an added advantage.</p>\r\n\r\n<p style=\"text-align:justify\">Research and showcase knowledge in the industrys latest trends and technologies.</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Job Location</h4>\r\n\r\n<p style=\"text-align:justify\">Anywhere in Bangladesh</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Salary</h4>\r\n\r\n<p style=\"text-align:justify\">Negotiable</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Compensation &amp; Other Benefits</h4>\r\n\r\n<p style=\"text-align:justify\">Medical allowance, Performance bonus, Provident fund, Weekly 2 holidays, Gratuity</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Lunch Facilities</h4>\r\n\r\n<p style=\"text-align:justify\">Full Subsidize</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Salary Review</h4>\r\n\r\n<p style=\"text-align:justify\">Yearly</p>\r\n\r\n<h4 style=\"margin-left:0; margin-right:0; text-align:start\">Festival Bonus: 2</h4>', '2022-11-18', 1, 1, '2022-11-09 04:25:03', '2022-11-09 04:25:03');

-- --------------------------------------------------------

--
-- Table structure for table `career_cats`
--

CREATE TABLE `career_cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_cats`
--

INSERT INTO `career_cats` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Software Engineer', 'software-engineer', '1', '2022-11-09 04:23:29', '2022-11-09 04:23:29'),
(2, 'Business Development', 'business-development', '1', '2022-11-09 04:23:41', '2022-11-09 04:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'shajedul', 'shemoon8@gmail.com', 'test', '2022-09-10 05:37:31', '2022-09-10 05:37:31'),
(2, 'shajedul', 'rlinfobd@gmail.com', 'trst', '2022-11-07 02:45:37', '2022-11-07 02:45:37'),
(3, 'shajedul', 'shemoon8@gmail.com', 'test', '2022-11-07 02:56:33', '2022-11-07 02:56:33'),
(4, 'Shajedul islam shimun', 'shemoon8@gmail.com', 'web mail test', '2022-11-07 03:02:40', '2022-11-07 03:02:40'),
(5, 'shajedul', 'shemoon8@gmail.com', 'test 2', '2022-11-08 13:34:31', '2022-11-08 13:34:31');

-- --------------------------------------------------------

--
-- Table structure for table `corporate_clients`
--

CREATE TABLE `corporate_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `corporate_clients`
--

INSERT INTO `corporate_clients` (`id`, `company_name`, `employee_number`, `contact_person`, `email`, `phone`, `website`, `company_details`, `created_at`, `updated_at`) VALUES
(1, 'shajedul', '11-20', 'shajedul', 'shemoon8@gmail.com', '123456', 'eps.com.bd', 'QAWSEDFGHJK,./', '2022-11-09 04:17:03', '2022-11-09 04:17:03');

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
-- Table structure for table `jobapplications`
--

CREATE TABLE `jobapplications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(10, '2022_09_10_061507_create_contacts_table', 2),
(82, '2022_11_08_180211_create_jobapplication__table', 4),
(83, '2022_11_08_184406_create_jobapplication_table', 5),
(115, '2014_10_12_000000_create_users_table', 6),
(116, '2014_10_12_100000_create_password_resets_table', 6),
(117, '2019_08_19_000000_create_failed_jobs_table', 6),
(118, '2019_12_14_000001_create_personal_access_tokens_table', 6),
(119, '2022_01_03_090108_create_categories_table', 6),
(120, '2022_01_03_150656_create_tags_table', 6),
(121, '2022_01_03_162309_create_posts_table', 6),
(122, '2022_01_04_031441_create_post_tag_table', 6),
(123, '2022_01_04_141950_create_settings_table', 6),
(124, '2022_10_29_052449_create_pressreleases_table', 6),
(125, '2022_11_04_144804_create_subscribes_table', 6),
(126, '2022_11_08_042848_create_searchabletexts_table', 6),
(127, '2022_11_08_051841_create_careers_table', 6),
(128, '2022_11_08_060623_create_career_cats_table', 6),
(129, '2022_11_08_185107_create_jobapplications_table', 6),
(133, '2022_11_09_091038_create_corporate_clients_table', 7);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `posted_by` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pressreleases`
--

CREATE TABLE `pressreleases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Uncategorized',
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'eps',
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canonical_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schema` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foucs_keyword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_keywords` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `searchabletexts`
--

CREATE TABLE `searchabletexts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Logo-04.png',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `social` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Maps` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `details`, `image`, `email_verified_at`, `password`, `user_role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'shajedul', 'shimun.eps@gmail.com', '01912586164', NULL, NULL, NULL, '$2y$10$z8c/LAUoi64C9jJmaGjSze5/yrT5XYmcSSBf/DGN6nIiB8T9F8FnC', 'admin', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_cats`
--
ALTER TABLE `career_cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate_clients`
--
ALTER TABLE `corporate_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobapplications`
--
ALTER TABLE `jobapplications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pressreleases`
--
ALTER TABLE `pressreleases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searchabletexts`
--
ALTER TABLE `searchabletexts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `career_cats`
--
ALTER TABLE `career_cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `corporate_clients`
--
ALTER TABLE `corporate_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobapplications`
--
ALTER TABLE `jobapplications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pressreleases`
--
ALTER TABLE `pressreleases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `searchabletexts`
--
ALTER TABLE `searchabletexts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
