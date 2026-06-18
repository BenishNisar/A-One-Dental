-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2026 at 07:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qadeerandzaheer`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `paragraph` varchar(600) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `paragraph`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 'scale set', 'Aziz & Ismail advises on trademarks, patents, designs, and copyrights—helping businesses protect what they create in Pakistan and beyond.', 'uploads/banners/1781078612_scale-set.jpeg', '2025-08-26 13:21:11', '2026-06-10 16:03:32'),
(2, 'Trademark Registration Made Simple', 'From clearance searches and filing to oppositions and renewals—we handle the process end-to-end with clear timelines and fees.', 'uploads/banners/1780127393_trademark-registration-made-simple.jpg', '2025-08-26 13:23:47', '2026-05-30 15:49:53'),
(3, 'Practical Legal Counsel for Innovators', 'Responsive, business-minded attorneys delivering fast turnarounds, strong enforcement, and global portfolio management.', 'uploads/banners/1756370610_aziz-and-co.jpg', '2025-08-26 13:24:06', '2025-08-28 15:48:24');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `short_description` varchar(900) NOT NULL,
  `content` longtext NOT NULL,
  `featured_image` varchar(600) NOT NULL,
  `author` varchar(599) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `category_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `slug` varchar(255) DEFAULT NULL,
  `meta_title` varchar(500) NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `short_description`, `content`, `featured_image`, `author`, `date`, `created_at`, `updated_at`, `category_id`, `status`, `slug`, `meta_title`, `meta_description`) VALUES
(17, 'Find the Best Job Opportunities and Build Your Career', '<p data-start=\"530\" data-end=\"713\">Looking for the right career opportunity? Discover the latest job openings across multiple industries and find the perfect role that matches your skills, experience, and career goals.</p>', '<h2 data-section-id=\"aesq1j\" data-start=\"738\" data-end=\"774\">Discover New Career Opportunities</h2><p data-start=\"776\" data-end=\"1044\">Finding the right job is one of the most important steps in building a successful career. Whether you are a fresh graduate, an experienced professional, or someone looking for a career change, the right opportunity can help you grow both personally and professionally.</p><p data-start=\"1046\" data-end=\"1290\">Today many companies are looking for talented individuals who are motivated, skilled, and ready to contribute to their organizations. By exploring the latest job openings, you can discover positions that match your qualifications and interests.</p><hr data-start=\"1292\" data-end=\"1295\"><h2 data-section-id=\"1vo22h9\" data-start=\"1297\" data-end=\"1334\">Why Choosing the Right Job Matters</h2><p data-start=\"1336\" data-end=\"1529\">Selecting the right job does not only mean earning a salary. It also means finding a workplace where you can learn new skills, gain valuable experience, and build a strong professional network.</p><p data-start=\"1531\" data-end=\"1564\">A good job opportunity can offer:</p><p data-start=\"1566\" data-end=\"1769\">Professional growth and development<br data-start=\"1601\" data-end=\"1604\">\r\nA positive and supportive work environment<br data-start=\"1646\" data-end=\"1649\">\r\nOpportunities to learn new technologies and skills<br data-start=\"1699\" data-end=\"1702\">\r\nCareer advancement and promotions<br data-start=\"1735\" data-end=\"1738\">\r\nLong term stability and success</p><p data-start=\"1771\" data-end=\"1868\">When you choose the right role, it helps you stay motivated and confident in your career journey.</p><hr data-start=\"1870\" data-end=\"1873\"><h2 data-section-id=\"1k720l7\" data-start=\"1875\" data-end=\"1923\">Job Opportunities Across Different Industries</h2><p data-start=\"1925\" data-end=\"2112\">There are many industries that offer excellent career opportunities today. Some of the most in demand sectors include technology, marketing, healthcare, finance, education, and logistics.</p><p data-start=\"2114\" data-end=\"2184\">Companies are constantly searching for professionals in areas such as:</p><p data-start=\"2186\" data-end=\"2366\">Digital marketing specialists<br data-start=\"2215\" data-end=\"2218\">\r\nWeb developers and designers<br data-start=\"2246\" data-end=\"2249\">\r\nCustomer service representatives<br data-start=\"2281\" data-end=\"2284\">\r\nSales executives<br data-start=\"2300\" data-end=\"2303\">\r\nAdministrative professionals<br data-start=\"2331\" data-end=\"2334\">\r\nFinance and accounting experts</p><p data-start=\"2368\" data-end=\"2482\">No matter your background or experience level, there are opportunities available that can match your career goals.</p><hr data-start=\"2484\" data-end=\"2487\"><h2 data-section-id=\"2ydcfv\" data-start=\"2489\" data-end=\"2522\">Tips for Finding the Right Job</h2><p data-start=\"2524\" data-end=\"2683\">Searching for the right job can sometimes feel challenging. However, with the right approach, you can increase your chances of finding the perfect opportunity.</p><p data-start=\"2685\" data-end=\"2880\">Update your resume regularly<br data-start=\"2713\" data-end=\"2716\">\r\nHighlight your key skills and achievements<br data-start=\"2758\" data-end=\"2761\">\r\nApply for jobs that match your experience<br data-start=\"2802\" data-end=\"2805\">\r\nPrepare well for interviews<br data-start=\"2832\" data-end=\"2835\">\r\nContinue learning new skills and technologies</p><p data-start=\"2882\" data-end=\"2976\">By staying proactive and focused, you can find the job that best fits your professional goals.</p><hr data-start=\"2978\" data-end=\"2981\"><h2 data-section-id=\"16sleu9\" data-start=\"2983\" data-end=\"3017\">Start Your Career Journey Today</h2><p data-start=\"3019\" data-end=\"3261\">The job market is full of opportunities for individuals who are ready to take the next step in their careers. Whether you are just starting out or looking for a better role, exploring new job openings can open doors to exciting possibilities.</p><p data-start=\"3263\" data-end=\"3382\">Take the first step today and discover job opportunities that can help you build a brighter and more successful future.</p><hr data-start=\"3384\" data-end=\"3387\"><p data-start=\"3389\" data-end=\"3434\">If you want, I can also create these for you:</p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p data-start=\"3436\" data-end=\"3642\" data-is-last-node=\"\" data-is-only-node=\"\">SEO optimized <strong data-start=\"3450\" data-end=\"3488\">H1 H2 H3 structure for a Jobs page</strong><br data-start=\"3488\" data-end=\"3491\">\r\nSchema markup for jobs page for Google<br data-start=\"3529\" data-end=\"3532\">\r\nA <strong data-start=\"3534\" data-end=\"3575\">Laravel or WordPress Jobs page layout</strong><br data-start=\"3575\" data-end=\"3578\">\r\nOr a <strong data-start=\"3583\" data-end=\"3641\">career page UI structure that converts more applicants</strong>.</p>', 'Dashboard_assets/1775826243_home0.png', 'Sufiyan Shakeel', '2026-03-12', '2026-03-13 13:10:05', '2026-04-10 21:04:03', 5, 1, 'find-the-best-job-opportunities-and-build-your-career', 'Find the Best Job Opportunities and Build Your Career', 'Explore the latest job opportunities across different industries. Find the right career path, apply for jobs, and grow professionally with the best employment opportunities available today.'),
(18, 'Top Career Opportunities for Professionals Looking for Growth', '<p data-start=\"296\" data-end=\"499\">Looking to grow your career in a fast paced and professional environment? Discover exciting opportunities in digital marketing and web development where your skills and creativity can make a real impact.</p>', '<h2 data-section-id=\"1gsmf23\" data-start=\"514\" data-end=\"569\">Build Your Future with Exciting Career Opportunities</h2><p data-start=\"571\" data-end=\"856\">Finding the right job is more than just getting employment. It is about building a career that allows you to grow, learn, and achieve your professional goals. Many companies today are looking for passionate individuals who can contribute their skills and ideas to help businesses grow.</p><p data-start=\"858\" data-end=\"1004\">If you are someone who is motivated, creative, and ready to work in a professional environment, there are excellent opportunities waiting for you.</p><hr data-start=\"1006\" data-end=\"1009\"><h2 data-section-id=\"gkfihn\" data-start=\"1011\" data-end=\"1041\">Digital Marketing Executive</h2><p data-start=\"1043\" data-end=\"1248\">Digital marketing has become one of the fastest growing career fields in the modern business world. Companies rely on digital platforms to reach customers, promote products, and build strong online brands.</p><p data-start=\"1250\" data-end=\"1430\">A Digital Marketing Executive plays an important role in managing online campaigns, creating marketing strategies, and improving brand visibility across different digital channels.</p><p data-start=\"1432\" data-end=\"1741\">Professionals in this role are responsible for managing social media platforms, optimizing websites for search engines, analyzing campaign performance, and generating leads through online marketing activities. This role is ideal for individuals who enjoy creativity, strategy, and data driven decision making.</p><p data-start=\"1743\" data-end=\"1887\">Working in digital marketing also offers continuous learning opportunities because online platforms and marketing tools are constantly evolving.</p><hr data-start=\"1889\" data-end=\"1892\"><h2 data-section-id=\"t3mr0j\" data-start=\"1894\" data-end=\"1910\">Web Developer</h2><p data-start=\"1912\" data-end=\"2104\">Web development is another highly valuable career path in today’s digital world. Businesses depend on websites to connect with customers, showcase their services, and manage online operations.</p><p data-start=\"2106\" data-end=\"2364\">A Web Developer is responsible for designing, building, and maintaining websites that are responsive, user friendly, and technically efficient. This role requires knowledge of web technologies such as HTML, CSS, JavaScript, and modern development frameworks.</p><p data-start=\"2366\" data-end=\"2531\">Web developers work closely with designers and marketing teams to ensure websites provide a smooth user experience while maintaining strong performance and security.</p><p data-start=\"2533\" data-end=\"2681\">This career path is ideal for individuals who enjoy solving technical problems, building digital products, and working with innovative technologies.</p><hr data-start=\"2683\" data-end=\"2686\"><h2 data-section-id=\"1entasl\" data-start=\"2688\" data-end=\"2727\">Why These Careers Are in High Demand</h2><p data-start=\"2729\" data-end=\"2928\">Both digital marketing and web development are among the most in demand professions today. As businesses continue to move online, the need for skilled professionals in these fields continues to grow.</p><p data-start=\"2930\" data-end=\"3086\">These careers offer several benefits including professional growth, competitive salaries, skill development, and opportunities to work on exciting projects.</p><hr data-start=\"3088\" data-end=\"3091\"><h2 data-section-id=\"16sleu9\" data-start=\"3093\" data-end=\"3127\">Start Your Career Journey Today</h2><p data-start=\"3129\" data-end=\"3343\">The right opportunity can change the direction of your career. Whether you are interested in marketing, technology, or digital innovation, these roles provide the perfect platform to build your professional future.</p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p data-start=\"3345\" data-end=\"3438\" data-is-last-node=\"\" data-is-only-node=\"\">Explore these opportunities and take the first step toward a rewarding and successful career.</p>', 'Dashboard_assets/1775826231_case0.jpg', 'Sufiyan Shakeel', '2026-03-12', '2026-03-13 13:30:29', '2026-04-10 21:03:51', 5, 1, 'top-career-opportunities-for-professionals-looking-for-growth', 'Top Career Opportunities for Professionals Looking for Growth', 'Explore exciting job opportunities in digital marketing and web development. Discover roles that help you grow your career, develop new skills, and work in a dynamic environment.'),
(19, 'How to Find the Right Job and Grow Your Professional Career', '<p data-start=\"264\" data-end=\"442\">Finding the right job can open the door to a successful and rewarding career. Learn how to explore new opportunities, improve your skills, and build a strong professional future.</p>', '<h2 data-section-id=\"ow7j01\" data-start=\"457\" data-end=\"497\">Finding the Right Job for Your Future</h2><p data-start=\"499\" data-end=\"718\">Choosing the right job is an important step in building a successful career. A good job does not only provide financial stability but also helps you grow professionally, gain valuable experience, and develop new skills.</p><p data-start=\"720\" data-end=\"1023\">In today’s competitive job market, companies are looking for individuals who are passionate, motivated, and ready to contribute to their organization. Whether you are a fresh graduate or an experienced professional, finding the right opportunity can make a significant difference in your career journey.</p><hr data-start=\"1025\" data-end=\"1028\"><h2 data-section-id=\"2k37m3\" data-start=\"1030\" data-end=\"1060\">Importance of Career Growth</h2><p data-start=\"1062\" data-end=\"1273\">A successful career is built on continuous learning and development. When you work in an environment that supports growth, you gain new experiences that help you improve your abilities and expand your knowledge.</p><p data-start=\"1275\" data-end=\"1514\">Career growth allows professionals to develop leadership skills, improve communication abilities, and gain industry specific expertise. Over time, this growth opens the door to better job opportunities and higher professional achievements.</p><hr data-start=\"1516\" data-end=\"1519\"><h2 data-section-id=\"tepw5w\" data-start=\"1521\" data-end=\"1554\">Skills That Employers Look For</h2><p data-start=\"1556\" data-end=\"1807\">Employers today value professionals who can adapt to changing environments and bring innovative ideas to the workplace. Some of the most valuable skills that companies look for include communication, problem solving, teamwork, and technical expertise.</p><p data-start=\"1809\" data-end=\"2028\">Having strong digital skills, analytical thinking, and the ability to learn quickly can also help professionals stand out in the job market. Continuous learning and skill development are essential for long term success.</p><hr data-start=\"2030\" data-end=\"2033\"><h2 data-section-id=\"1xyu3rs\" data-start=\"2035\" data-end=\"2081\">Preparing Yourself for Better Opportunities</h2><p data-start=\"2083\" data-end=\"2349\">If you want to improve your chances of getting a good job, it is important to focus on personal and professional development. Keeping your resume updated, improving your technical knowledge, and preparing for interviews can help you stand out among other candidates.</p><p data-start=\"2351\" data-end=\"2497\">Networking with professionals, attending workshops, and learning new tools can also increase your chances of finding the right career opportunity.</p><hr data-start=\"2499\" data-end=\"2502\"><h2 data-section-id=\"1efqvy9\" data-start=\"2504\" data-end=\"2537\">Build a Successful Career Path</h2><p data-start=\"2539\" data-end=\"2765\">The journey toward a successful career requires dedication, patience, and continuous effort. By exploring new opportunities, improving your skills, and staying focused on your goals, you can build a strong professional future.</p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p data-start=\"2767\" data-end=\"2956\" data-is-last-node=\"\" data-is-only-node=\"\">Every job opportunity is a step toward growth and learning. With the right mindset and determination, you can create a career path that leads to long term success and personal satisfaction.</p>', 'Dashboard_assets/1780925872_ChatGPT Image May 21, 2026, 05_30_08 AM.png', 'Sufiyan Shakeel', '2026-03-12', '2026-03-13 13:37:09', '2026-06-08 21:37:52', 5, 1, 'how-to-find-the-right-job-and-grow-your-professional-career', 'How to Find the Right Job and Grow Your Professional Career', 'Learn how to find the right job, improve your career opportunities, and build a successful professional future with the right skills and strategies.');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(800) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `updated_at`, `created_at`) VALUES
(3, 'Sales Tax', '2025-08-26 15:08:10', '2025-08-26 15:08:10'),
(4, 'Income Tax', '2025-08-26 15:08:19', '2025-08-26 15:08:19'),
(5, 'jobss', '2026-03-11 14:32:25', '2026-03-11 14:06:12');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(800) NOT NULL,
  `email` varchar(900) NOT NULL,
  `country` varchar(900) NOT NULL,
  `phone` varchar(900) NOT NULL,
  `message` varchar(900) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `country`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(142, 'benish', 'benishk800@gmail.com', 'Pakistan', '03478356711', 'test', '2026-04-28 16:07:21', '2026-04-28 16:07:21'),
(143, 'nisar', 'benishk800@gmail.com', 'pakistan', '03177638152', 'testing', '2026-04-28 16:15:17', '2026-04-28 16:15:17'),
(144, 'Benish Khan', 'benishk800@gmail.com', 'Pakistan', '03478356711', 'testing', '2026-04-28 16:16:43', '2026-04-28 16:16:43'),
(145, 'Benish Khan', 'benishk800@gmail.com', 'Pakistan', '03478356711', 'testing', '2026-04-28 16:16:48', '2026-04-28 16:16:48'),
(146, 'test', 'test@gmail.com', 'Pakistan', '03160109634', 'test', '2026-04-28 16:25:20', '2026-04-28 16:25:20'),
(147, 'test', 'test@gmail.com', 'Pakistan', '03160109634', 'test', '2026-04-28 16:28:20', '2026-04-28 16:28:20'),
(148, 'test', 'test@gmail.com', 'Pakistan', '03160109634', 'test', '2026-04-28 16:29:42', '2026-04-28 16:29:42'),
(149, 'test', 'test@gmail.com', 'Pakistan', '+923000344803', 'test', '2026-04-28 16:32:50', '2026-04-28 16:32:50'),
(150, 'benish', 'benishk800@gmail.com', 'Pakistan', '03160109634', 'test', '2026-04-28 16:38:21', '2026-04-28 16:38:21'),
(151, 'test', 'test@gmail.com', 'Pakistan', '03160109634', 'test', '2026-04-28 16:42:28', '2026-04-28 16:42:28'),
(152, 'test order', 'test@gmail.com', 'Pakistan', '+923000344803', 'test', '2026-04-28 17:00:10', '2026-04-28 17:00:10'),
(153, 'uzair Baloch', 'weboctane@gmail.com', 'Pakistan', '03160109634', 'TEST', '2026-05-05 16:08:09', '2026-05-05 16:08:09');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(800) NOT NULL,
  `email` varchar(900) NOT NULL,
  `country` varchar(900) DEFAULT NULL,
  `phone` varchar(900) DEFAULT NULL,
  `services` varchar(900) DEFAULT NULL,
  `message` text NOT NULL,
  `source` varchar(255) DEFAULT NULL,
  `service` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `country`, `phone`, `services`, `message`, `source`, `service`, `created_at`, `updated_at`) VALUES
(15, 'Jamalia May', 'corifesowy@mailinator.com', 'Non et sequi volupta', '+1 (387) 386-2328', NULL, 'Omnis in non nemo re', 'Consectetur est nul', 'Quia omnis et facili', '2026-06-11 14:52:52', '2026-06-11 14:52:52'),
(16, 'Dora Andrews', 'limapa@mailinator.com', 'Ut cumque necessitat', '+1 (358) 875-5092', NULL, 'Dolorem voluptatem', 'Odio qui hic corrupt', 'Obcaecati non vitae', '2026-06-11 14:55:21', '2026-06-11 14:55:21'),
(17, 'Wayne Crane', 'fovazyb@mailinator.com', 'Laboris mollit omnis', '+1 (941) 477-2916', NULL, 'Exercitationem tempo', 'Laboriosam aperiam', 'Est adipisci fuga A', '2026-06-11 14:57:40', '2026-06-11 14:57:40'),
(18, 'Zenaida Savage', 'vaqure@mailinator.com', 'Lorem impedit volup', '+1 (906) 117-9143', NULL, 'Quo quis unde odit v', 'Sed nulla atque illu', 'Ut voluptas ut ipsa', '2026-06-11 15:17:27', '2026-06-11 15:17:27'),
(19, 'Jackson Montoya', 'resy@mailinator.com', 'Et qui veniam et ad', '+1 (383) 858-7422', NULL, 'Tempore tenetur dis', 'Consectetur itaque', 'Incididunt sapiente', '2026-06-11 15:31:50', '2026-06-11 15:31:50');

-- --------------------------------------------------------

--
-- Table structure for table `contact_settings`
--

CREATE TABLE `contact_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `note` varchar(255) DEFAULT NULL,
  `address` text NOT NULL,
  `phones` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`phones`)),
  `emails` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`emails`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_settings`
--

INSERT INTO `contact_settings` (`id`, `note`, `address`, `phones`, `emails`, `created_at`, `updated_at`) VALUES
(1, '+92', '305, Frere Business Centre, Frere Road, Adjacent Akhbar Market, Saddar, Karachi-75350 (Pakistan)', '[\"0092-21-2772944, 2772945, 2721357, 2721359, 2750546, 2750547\"]', '[\"azizismail@cyber.net.pk\",\"info@azizismail.com\"]', '2025-08-27 20:18:29', '2025-08-27 20:32:15');

-- --------------------------------------------------------

--
-- Table structure for table `inner_banners`
--

CREATE TABLE `inner_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `reference_id` bigint(20) UNSIGNED DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`, `created_at`) VALUES
(16, 'benishk800@gmail.com', 'U5aRO5GTHJgbou9F00RnEQs2MO09ipzBAl3WrFz5yRnvTvRzbzb4h7bq56WYbeGf', '2025-12-20 02:45:15'),
(17, 'benishk800@gmail.com', 'a2r70whSFbYbCvIlvH8MfxP5DjX6cg7PKKC8OftLBz5AwSY7UmqxA7Aeu1n1DKPJ', '2025-12-20 13:52:56');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(800) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2025-12-15 19:19:57', '2025-12-15 19:19:57'),
(2, 'users', '2025-12-16 03:20:01', '2025-12-16 03:20:01'),
(3, 'company', '2026-03-09 14:08:54', '2026-03-09 14:08:54');

-- --------------------------------------------------------

--
-- Table structure for table `seo_settings`
--

CREATE TABLE `seo_settings` (
  `id` int(11) NOT NULL,
  `page_name` varchar(255) NOT NULL,
  `section_name` varchar(255) DEFAULT NULL,
  `page_slug` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `canonical_url` varchar(255) DEFAULT NULL,
  `is_indexed` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seo_settings`
--

INSERT INTO `seo_settings` (`id`, `page_name`, `section_name`, `page_slug`, `meta_title`, `meta_keywords`, `meta_description`, `canonical_url`, `is_indexed`, `created_at`, `updated_at`) VALUES
(1, 'Home', NULL, '/', 'Expert Home Repair & Renovation Services | Reliable Handyman Solutions', 'home repair, renovation services, handyman services, electrical repairs, plumbing solutions, HVAC maintenance, roofing services, painting services, maintenance tips', 'Professional home repair and renovation services. Skilled experts in plumbing, electrical, HVAC, roofing, and painting. Schedule your service todayss!', 'http://127.0.0.1:8000/', 1, '2026-05-23 16:11:46', '2026-05-30 14:58:39'),
(2, 'About Us', NULL, 'about-us', 'About Us | Expert Home Renovation & Repair Services', 'about us, home renovation company, handyman team, professional services, company history, mission, vision, client satisfaction, expert team, residential services, quality assurance, trusted professionals', 'Learn about our expert home renovation and repair services. Discover our mission, vision, and skilled team committed to delivering high-quality, reliable solutions for every home project.', 'http://127.0.0.1:8000/about-us', 1, '2026-05-23 16:38:22', '2026-05-23 16:38:22');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` longtext DEFAULT NULL,
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(566) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `description`, `sort_order`, `is_active`, `created_at`, `updated_at`, `image`) VALUES
(1, 'income taxs', 'income-taxs', '<h2 class=\"\"><font face=\"Arial\" style=\"font-weight: normal;\">Tailored one-on-one therapy sessions designed to treat pain, restore movement, and strengthen your body.</font><span style=\"font-weight: normal; font-family: Arial;\">We create custom plans based on your condition, lifestyle, and goals.</span></h2><h2 class=\"\"><span style=\"font-weight: normal; font-family: Arial;\">We help with:</span></h2><h2 class=\"\"><font face=\"Arial\"><span style=\"white-space: normal; font-weight: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Back & neck pain</span></font></h2><h2 class=\"\"><font face=\"Arial\"><span style=\"white-space: normal; font-weight: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Joint stiffness</span></font></h2><h2 class=\"\"><font face=\"Arial\"><span style=\"white-space: normal; font-weight: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Posture issues</span></font></h2><h2 class=\"\"><font face=\"Arial\"><span style=\"white-space: normal; font-weight: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Muscle imbalances</span></font></h2><h2 class=\"\"><font face=\"Arial\"><span style=\"white-space: normal; font-weight: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Mobility problems</span></font></h2><div><br></div>', 1, 1, '2025-08-26 19:06:29', '2026-05-30 16:50:36', 'uploads/services/income-taxs-1780131036.jpg'),
(2, 'Sale Tax (Law and Procedures)', 'sale-tax-law-and-procedures', '<h3 class=\"\"><span style=\"font-size: 24px; font-weight: 400;\"></span></h3><h3 class=\"\"><span style=\"font-size: 24px; font-weight: 400;\">Evidence-based techniques to reduce chronic or acute pain without relying heavily on medication.</span></h3><div><span style=\"font-size: 24px; font-family: Nunito, sans-serif;\">Includes:</span></div><h3 class=\"\"><span style=\"font-size: 24px; font-weight: 400; white-space: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Manual therapy</span></h3><h3 class=\"\"><span style=\"font-size: 24px; font-weight: 400; white-space: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Guided exercises</span></h3><h3 class=\"\"><span style=\"font-size: 24px; font-weight: 400; white-space: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Heat/ice therapy plans</span></h3><h3 class=\"\"><span style=\"font-size: 24px; font-weight: 400; white-space: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Pain-relief routines</span></h3><h3 class=\"\"><span style=\"font-size: 24px; font-weight: 400; white-space: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Postural correction</span></h3>', 2, 1, '2025-08-26 20:34:10', '2025-12-04 15:39:59', 'uploads/services/sale-tax-law-and-procedures-1764833999.png'),
(3, 'Post-Injury Rehabilitation', 'post-injury-rehabilitation', '<h3 class=\"\"><span style=\"font-size: 24px; font-weight: 400;\">Recover stronger after accidents, sprains, muscle tears, or sports injuries.</span></h3><h3 class=\"\"><span style=\"font-size: 24px; font-weight: 400;\">We assist your healing process and help prevent future injuries.</span></h3><h3 class=\"\"><span style=\"font-size: 24px; font-weight: 400;\"><br></span></h3><h3 class=\"\"><span style=\"font-size: 24px; font-weight: 400;\">Ideal for:</span></h3><h3 class=\"\"><span style=\"font-size: 24px; font-weight: 400; white-space: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Sports injuries</span></h3><h3 class=\"\"><span style=\"font-size: 24px; font-weight: 400; white-space: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Strains &amp; sprains</span></h3><h3 class=\"\"><span style=\"font-size: 24px; font-weight: 400; white-space: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Tendon issues</span></h3><h3 class=\"\"><span style=\"font-size: 24px; font-weight: 400; white-space: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Muscle fatigue recovery</span></h3><div><br></div>', 3, 1, '2025-08-29 13:15:19', '2025-12-04 15:41:37', 'uploads/services/assitance-in-book-keeping-1756553655.jpg'),
(4, 'Post-Surgical Rehabilitation', 'post-surgical-rehabilitation', '<h3 class=\"\"><span style=\"font-size: 24px; font-weight: normal;\">Supportive and medically-guided rehab following surgeries such as:</span></h3><h3 class=\"\"><span style=\"font-size: 24px; font-weight: normal;\">ACL repair, joint replacement, spinal surgery, fractures, and more.</span></h3><h3 class=\"\"><span style=\"font-size: 24px; font-weight: normal;\"><br></span></h3><h3 class=\"\"><span style=\"font-size: 24px; font-weight: normal;\">Focus areas:</span></h3><h3 class=\"\"><span style=\"font-size: 24px; white-space: normal; font-weight: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Regaining strength</span></h3><h3 class=\"\"><span style=\"font-size: 24px; white-space: normal; font-weight: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Improving mobility</span></h3><h3 class=\"\"><span style=\"font-size: 24px; white-space: normal; font-weight: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Speeding up healing</span></h3><h3 class=\"\"><span style=\"font-size: 24px; white-space: normal; font-weight: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Preventing complications</span></h3><h3 class=\"\"><br></h3>', 4, 1, '2025-08-29 13:17:29', '2025-12-04 15:42:06', 'uploads/services/company-law-law-and-procedures-1756553666.jpg'),
(5, 'At-Home Physiotherapy Sessions', 'at-home-physiotherapy-sessions', '<h3 class=\"\"><span style=\"font-size: 24px; font-weight: normal;\">Skip the clinic — our professionals guide you from the comfort of your home.</span></h3><h3 class=\"\"><span style=\"font-size: 24px; font-weight: normal;\">Perfect for seniors, busy individuals, or anyone who prefers personalized care at home.</span></h3><div><br></div>', 5, 1, '2025-08-29 13:20:56', '2025-12-04 15:42:42', 'uploads/services/trademark-law-and-procedures-1756553681.jpg'),
(6, 'Online / Virtual Rehabilitation', 'online-virtual-rehabilitation', '<h3 class=\"\"><span style=\"font-size: 24px; font-weight: normal;\">Convenient video-based rehab sessions supported by our app and tools.</span></h3><h3 class=\"\"><span style=\"font-size: 24px; font-weight: normal;\">You get real-time guidance, progress tracking, and exercise monitoring.</span></h3><div><br></div>', 6, 1, '2025-08-29 13:23:20', '2025-12-04 15:43:21', 'uploads/services/copyrights-law-and-procedures-1756553692.jpg'),
(7, 'Preventive & Wellness Programs', 'preventive-wellness-programs', '<p>Stay strong, mobile, and healthy with routine rehab + mobility training programs.</p><p><br></p><p>Includes:</p><p><span style=\"white-space: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Flexibility & mobility routines</span></p><p><span style=\"white-space: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Strength & stability training</span></p><p><span style=\"white-space: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Desk-job posture programs</span></p><p><span style=\"white-space: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Home workout & recovery plans</span></p><div><br></div>', 7, 1, '2025-12-04 15:44:16', '2025-12-04 15:44:16', 'uploads/services/preventive-wellness-programs-1764834256.jpg'),
(8, 'Chronic Condition Management', 'chronic-condition-management', '<p>Long-term physical conditions require long-term support — we help you manage them effectively.</p><p><br></p><p>We support:</p><p><span style=\"white-space: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Arthritis</span></p><p><span style=\"white-space: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Sciatica</span></p><p><span style=\"white-space: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Chronic back pain</span></p><p><span style=\"white-space: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Shoulder & knee issues</span></p><p><span style=\"white-space: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Neck tension & migraines (MSK-related)</span></p><div><br></div>', 8, 1, '2025-12-04 15:44:50', '2025-12-04 15:44:50', 'uploads/services/chronic-condition-management-1764834290.png'),
(9, 'Corporate & Workplace Wellness', 'corporate-workplace-wellness', '<p>Custom solutions for companies to reduce workplace injuries and boost employee well-being.</p><p><br></p><p>Services include:</p><p><span style=\"white-space: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Ergonomic assessments</span></p><p><span style=\"white-space: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Posture workshops</span></p><p><span style=\"white-space: normal;\"><span style=\"white-space:pre\">	</span>•<span style=\"white-space:pre\">	</span>Therapy sessions for teams</span></p><div><br></div>', 10, 1, '2025-12-04 15:45:40', '2025-12-04 15:45:40', 'uploads/services/corporate-workplace-wellness-1764834340.png'),
(10, 'Pediatric Physiotherapy', 'pediatric-physiotherapy', '<p>Gentle, age-appropriate therapy for children dealing with mobility delays, injuries, or posture issues.</p>', 10, 1, '2025-12-04 15:46:14', '2025-12-04 15:46:14', 'uploads/services/pediatric-physiotherapy-1764834374.png');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `footer_text` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `tiktok` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `favicon`, `footer_text`, `email`, `phone`, `facebook`, `twitter`, `instagram`, `linkedin`, `tiktok`, `created_at`, `updated_at`) VALUES
(1, 'uploads/1781079104_Scaleset_Logo.png', 'uploads/1779540402_ChatGPT Image May 21, 2026, 05_30_08 AM.png', 'We deliver trusted home inspection services with detailed reports and expert guidance, helping you protect your investment and ensure peace of mind.', 'infoscalesset@gmail.com', '9334262627711', 'https://www.facebook.com/weboctane', 'https://www.qutu.org', NULL, 'https://www.raw.ws', 'https://www.peqojeci.com', '2026-05-23 09:36:28', '2026-06-10 16:58:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(800) DEFAULT NULL,
  `lastname` varchar(800) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `mobile_phone` varchar(50) DEFAULT NULL,
  `password` varchar(500) DEFAULT NULL,
  `gender` varchar(500) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `city` varchar(500) DEFAULT NULL,
  `country` varchar(500) DEFAULT NULL,
  `zip_code` varchar(500) DEFAULT NULL,
  `address_line1` varchar(500) DEFAULT NULL,
  `address_line2` varchar(500) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `organization` varchar(500) DEFAULT NULL,
  `profile_img` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phone`, `mobile_phone`, `password`, `gender`, `date_of_birth`, `city`, `country`, `zip_code`, `address_line1`, `address_line2`, `role_id`, `organization`, `profile_img`, `created_at`, `updated_at`) VALUES
(2, 'weboctanes', 'octanes', 'weboctane@gmail.com', '03177638152', NULL, '$2y$10$3.3GUBRywiR9nrTXKU819OvAhpnfa.W3E85L/Xy5p2n2wWUaf08ou', 'male', NULL, 'karachi', 'Pakistan', '75005', 'j 3/4 Pak jumhuria colony P.N.S shifa road karachi near DSRA clinic', 'j 3/4 Pak jumhuria colony P.N.S shifa road karachi near DSRA clinic', 1, 'weboctane@gmail.com', 'assets/profile_images/1772771349_images (2).jpg', '2025-04-03 06:24:10', '2026-03-06 12:29:09'),
(19, 'benish', 'nisar', 'benishnisarkhan56@gmail.com', '031776838152', '031776838152', '$2y$10$6gqWk.Djb/6iq1AD5zp8OO0VpB5p80Efzvv4Trtt311Y1ZRnYO38S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, '2026-02-16 17:31:53', '2026-02-16 17:31:53'),
(20, 'Ali', 'khan', 'Fingent@gmail.com', '03160109634', '03000339752', '$2y$10$Fop2A4JR61UHPdvgDyKXauyb8iQ1fyaGTyPYsfXnEGIlHOw7Ra932', 'male', '2026-03-04', 'melbourn', 'Austrila', '75000', 'dha', 'dha', 3, 'jobportalsaudia.com', 'assets/profile_images/1772695897_download_5 (1) (2).jpg', '2026-03-05 15:31:37', '2026-03-10 16:30:32'),
(21, 'muhammad', 'Khan', 'muhammadkhan800@gmail.com', '03478356711', '03478356711', '$2y$10$TYFVaqeQa6xln2X/5MUQg.IxNMpkhQYgUAbkTqbptDzsMscF7jdky', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, '2026-03-16 16:14:36', '2026-03-16 16:14:36'),
(22, 'benish nisar', 'nisar', 'benishnisar@gmail.com', '03566667791', '03566667791', '$2y$10$iLbqkcsEvM9MXPnWfV6tRugTrv882HOeCWOEPiHMCUdHLXArr9Bd6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, '2026-03-24 20:21:40', '2026-03-24 20:21:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_settings`
--
ALTER TABLE `contact_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inner_banners`
--
ALTER TABLE `inner_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `is_read` (`is_read`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_settings`
--
ALTER TABLE `seo_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_slug_unique` (`slug`),
  ADD KEY `idx_services_active_sort` (`is_active`,`sort_order`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact_settings`
--
ALTER TABLE `contact_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inner_banners`
--
ALTER TABLE `inner_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seo_settings`
--
ALTER TABLE `seo_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
