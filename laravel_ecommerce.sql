-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2019 at 03:10 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecommerce_001`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` tinyint(4) NOT NULL DEFAULT '0',
  `publication_status` tinyint(4) NOT NULL DEFAULT '1',
  `deletion_status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_description`, `parent_id`, `publication_status`, `deletion_status`, `created_at`, `updated_at`, `category_image`) VALUES
(18, 'মোবাইল', 'মোবাইল বাংলাদেশ', 0, 1, 1, NULL, NULL, 'category_image/NZlc9q3CLnoVoB07OmDN.jpg'),
(19, 'সিম্ফোনি', 'Symphony Mobile in bangladesh', 18, 1, 1, NULL, NULL, NULL),
(20, 'কম্পিউটারের', 'কম্পিউটারের এবং ল্যাপটপ\r\n', 0, 1, 1, NULL, NULL, 'category_image/5mUn31Ru1ZB1gGpEw9V1.jpg'),
(21, 'কম্পিউটারের যন্ত্রপাতি', 'কম্পিউটারের যন্ত্রপাতি বাংলাদেশ\r\n', 0, 1, 1, NULL, NULL, 'category_image/joZ2ebCGt7ryuHhB7Mml.jpg'),
(22, 'ইলেকট্রনিক্স', '', 0, 1, 1, NULL, NULL, 'category_image/EkjLXi6FRvRAP6PiFGrB.jpg'),
(23, 'ওয়ালটন', 'ওয়ালটন বাংলাদেশ', 18, 1, 1, NULL, NULL, NULL),
(26, 'ডেস্কটপ কম্পিউটার', '', 20, 1, 1, NULL, NULL, NULL),
(27, 'ল্যাপটপ কম্পিউটার', '', 20, 1, 1, NULL, NULL, NULL),
(28, 'হার্ডডিস্ক', '', 21, 1, 1, NULL, NULL, NULL),
(29, 'র‍্যাম', '', 21, 1, 1, NULL, NULL, NULL),
(30, 'টিভি', '', 22, 1, 1, NULL, NULL, NULL),
(31, 'ক্যামেরা', '', 22, 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manufacture`
--

CREATE TABLE `manufacture` (
  `id` int(10) UNSIGNED NOT NULL,
  `manufacture_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `manufacture_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT '1',
  `deletion_status` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `manufacture`
--

INSERT INTO `manufacture` (`id`, `manufacture_name`, `manufacture_description`, `publication_status`, `deletion_status`, `created_at`, `updated_at`) VALUES
(12, 'সিম্ফোনি', '                                                                                                সিম্ফোনি বাংলাদেশ\r\n                            \r\n                            \r\n                            ', 1, 1, NULL, NULL),
(13, 'এইচ পি', 'এইচ পি ল্যাপটপ', 1, 1, NULL, NULL),
(14, 'ওয়ালটন', 'ওয়ালটন বাংলাদেশ', 1, 1, NULL, NULL),
(15, 'লেনেভো', '', 1, 1, NULL, NULL),
(16, 'ক্যানন', '', 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(32, '2014_10_12_000000_create_users_table', 1),
(33, '2014_10_12_100000_create_password_resets_table', 1),
(34, '2016_10_11_155208_create_category_table', 1),
(35, '2016_10_13_134724_create_manufacture_table', 1),
(36, '2016_10_13_141957_create_product_table', 1),
(37, '2016_10_16_132037_create_admin_table', 2),
(38, '2016_11_08_141831_create_tbl_customer_table', 3),
(39, '2016_11_10_143446_create_tbl_shipping_table', 4),
(40, '2016_11_12_142555_create_tbl_payment_table', 5),
(41, '2016_11_12_142630_create_tbl_order_table', 5),
(42, '2016_11_12_142728_create_tbl_order_details_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `manufacture_id` int(10) UNSIGNED NOT NULL,
  `short_description` text COLLATE utf8_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8_unicode_ci NOT NULL,
  `new_price` double(8,2) NOT NULL,
  `old_price` double(8,2) NOT NULL,
  `publication_status` tinyint(4) NOT NULL DEFAULT '1',
  `deletion_status` tinyint(4) NOT NULL DEFAULT '1',
  `is_featured` tinyint(4) NOT NULL DEFAULT '0',
  `stock` int(11) NOT NULL,
  `product_status` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `category_id`, `manufacture_id`, `short_description`, `long_description`, `new_price`, `old_price`, `publication_status`, `deletion_status`, `is_featured`, `stock`, `product_status`, `created_at`, `updated_at`) VALUES
(3, 'ক্যানন', 31, 0, ' \r\n                                                                                                ক্যানন এর ইওএস ৭০০ডি ক্যামেরার পরবর্তী দুটি সংস্করণ হচ্ছে ইওএস ৭৫০ডি এবং ইওএস ৭৬০ডি। ক্যামেরা দুটোর কারিগরী দিক কাছাকাছি হলেও ইওএস ৭০০ডি এর তুলনায় এই ক্যামেরা দুটির ভিন্নতা রয়েছে বাহ্যিক দিক থেকে। ক্যামেরার বডিতে রয়েছে থাম্বহুইল ও টপ প্লেট এলসিডি ডিসপ্লে। এ ধরনের ফিচারগুলো ক্যাননের উচ্চ ক্ষমতাসম্পন্ন ক্যামেরাগুলোতেই পাওয়া যায়। ওজনেও ইওএস ৭৫০ডি ক্যামেরাটি তুলনামূলকভাবে হালকা।\r\n                            \r\n                            \r\n                            ', '                                                                                                ক্যানন এর ইওএস ৭০০ডি ক্যামেরার পরবর্তী দুটি সংস্করণ হচ্ছে ইওএস ৭৫০ডি এবং ইওএস ৭৬০ডি। ক্যামেরা দুটোর কারিগরী দিক কাছাকাছি হলেও ইওএস ৭০০ডি এর তুলনায় এই ক্যামেরা দুটির ভিন্নতা রয়েছে বাহ্যিক দিক থেকে। ক্যামেরার বডিতে রয়েছে থাম্বহুইল ও টপ প্লেট এলসিডি ডিসপ্লে। এ ধরনের ফিচারগুলো ক্যাননের উচ্চ ক্ষমতাসম্পন্ন ক্যামেরাগুলোতেই পাওয়া যায়। ওজনেও ইওএস ৭৫০ডি ক্যামেরাটি তুলনামূলকভাবে হালকা।\r\n                            \r\n                            \r\n                            ', 4500.00, 50000.00, 1, 1, 1, 10, NULL, NULL, NULL),
(5, 'ওয়ালটন প্রিমো এস -৫', 23, 14, 'মাত্র ১৪,৯৯০ টাকা মুল্যে ওয়ালটন  মোবাইলের রয়েছে আকর্ষণীয় ওয়ালটন স্মার্টফন প্রিমো এস -৫ (Walton Primo S5)।  প্রিমো এস – ৫   সম্পূর্ণ থ্রিজি এবং ফোর জি নেটওয়ার্ক সাপোর্টেড একটি মোবাইল ফোন । এই রেঞ্জের সকল ফোনের মাঝে  প্রিমো এস – ৫ এর ডিজাইন সত্যি অসাধারণ ।', 'মাত্র ১৪,৯৯০ টাকা মুল্যে ওয়ালটন  মোবাইলের রয়েছে আকর্ষণীয় ওয়ালটন স্মার্টফন প্রিমো এস -৫ (Walton Primo S5)।  প্রিমো এস – ৫   সম্পূর্ণ থ্রিজি এবং ফোর জি নেটওয়ার্ক সাপোর্টেড একটি মোবাইল ফোন । এই রেঞ্জের সকল ফোনের মাঝে  প্রিমো এস – ৫ এর ডিজাইন সত্যি অসাধারণ ।', 14000.00, 14990.00, 1, 1, 1, 5, NULL, NULL, NULL),
(6, 'ইন্টেল কোর আই ফাইভ ', 26, 13, 'ইন্টেল কোর আই ফাইভ ৩.২০ গিগাহার্টজ গতির প্রসেসর, ১৮.৫ ইঞ্চি এলইডি মনিটর, ৪ গিগাবাইট র্যা ম, ১ টেরাবাইট হার্ডডিস্ক, ১ গিগাবাইট গ্রাফিকস কার্ড, ডিভিডি রাইটার, কি-বোর্ড, মাউস, স্পিকার, কেসিংসহ উচ্চক্ষমতার ডেস্কটপের দাম এখন পড়ে ৫০ হাজার টাকার বেশি। এখন বাজারে সর্বোচ্চ ক্ষমতার প্রসেসর হলো কোর আই সেভেন। এর দাম ২৫ হাজার টাকা।', 'ইন্টেল কোর আই ফাইভ ৩.২০ গিগাহার্টজ গতির প্রসেসর, ১৮.৫ ইঞ্চি এলইডি মনিটর, ৪ গিগাবাইট র্যা ম, ১ টেরাবাইট হার্ডডিস্ক, ১ গিগাবাইট গ্রাফিকস কার্ড, ডিভিডি রাইটার, কি-বোর্ড, মাউস, স্পিকার, কেসিংসহ উচ্চক্ষমতার ডেস্কটপের দাম এখন পড়ে ৫০ হাজার টাকার বেশি। এখন বাজারে সর্বোচ্চ ক্ষমতার প্রসেসর হলো কোর আই সেভেন। এর দাম ২৫ হাজার টাকা।', 25000.00, 28000.00, 1, 1, 0, 10, NULL, NULL, NULL),
(8, 'র‍্যাম (ডিডিআর ৩)', 29, 15, '৪ গিগাবাইট ডিডিআর ৩ (১৩৩৩-১৬০০ বাস) মুল্যঃ ৩৫০০-৪০০০/-*', '৪ গিগাবাইট ডিডিআর ৩ (১৩৩৩-১৬০০ বাস) মুল্যঃ ৩৫০০-৪০০০/-*', 3500.00, 4000.00, 1, 1, 0, 10, NULL, NULL, NULL),
(9, 'হার্ড ডিস্ক', 28, 13, 'গিগাবাইট জিভি ১ গি.বা. ৯৫০০ জিটি - ৪৬০০ টাকা', 'গিগাবাইট জিভি ১ গি.বা. ৯৫০০ জিটি - ৪৬০০ টাকা', 4000.00, 4600.00, 1, 1, 0, 5, NULL, NULL, NULL),
(10, 'ওয়ালটন TV', 30, 1, 'TV', '', 30000.00, 28000.00, 1, 1, 0, 5, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_lavel` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `admin_name`, `admin_email`, `admin_password`, `admin_lavel`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ismail', 'ismail@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, NULL, NULL, NULL),
(2, 'kaium', 'kaium@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, NULL, NULL, NULL),
(3, 'amzad', 'amzad@gmail.com', '123456', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `first_name`, `last_name`, `company_name`, `email_address`, `password`, `address`, `mobile`, `city`, `zip_code`, `country`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ismail', 'Hossain', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '72 purba razabazar, panthapath', '01686254438', 'dhaka', '1215', 'USA', NULL, NULL, NULL),
(2, 'Rana', '', '', 'rana@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'dhaka', '01686254438', '', '', 'USA', NULL, NULL, NULL),
(3, 'Ismail', 'Hossain', '', 'ismail@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '72 purba razabazar, panthapath', '01686254438', 'dhaka', '1215', 'USA', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pending',
  `order_total` float(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_status`, `order_total`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Pending', 10000.00, NULL, NULL),
(2, 2, 3, 2, 'Pending', 45000.00, NULL, NULL),
(4, 3, 4, 4, 'Pending', 45000.00, NULL, NULL),
(13, 3, 7, 16, 'Pending', 14000.00, NULL, NULL),
(14, 3, 8, 17, 'Pending', 14000.00, NULL, NULL),
(15, 3, 9, 18, 'Pending', 14000.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_sales_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'সিম্ফনি এইচ ৩০০', 10000.00, 1, NULL, NULL),
(2, 2, 2, 'এইচ পি ৪৫০ ', 45000.00, 1, NULL, NULL),
(3, 4, 2, 'এইচ পি ৪৫০ ', 45000.00, 1, NULL, NULL),
(4, 9, 9, 'হার্ড ডিস্ক', 4000.00, 1, NULL, NULL),
(5, 12, 3, 'ক্যানন', 45000.00, 1, NULL, NULL),
(6, 13, 5, 'ওয়ালটন প্রিমো এস -৫', 14000.00, 1, NULL, NULL),
(7, 14, 5, 'ওয়ালটন প্রিমো এস -৫', 14000.00, 1, NULL, NULL),
(8, 15, 5, 'ওয়ালটন প্রিমো এস -৫', 14000.00, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `payment_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_type`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 'cash_on_delivery', 'Pending', NULL, NULL),
(2, 'cash_on_delivery', 'Pending', NULL, NULL),
(3, 'cash_on_delivery', 'Pending', NULL, NULL),
(4, 'cash_on_delivery', 'Pending', NULL, NULL),
(5, 'cash_on_delivery', 'Pending', NULL, NULL),
(6, 'cash_on_delivery', 'Pending', NULL, NULL),
(7, 'cash_on_delivery', 'Pending', NULL, NULL),
(8, 'paypal', 'Pending', NULL, NULL),
(9, 'cash_on_delivery', 'Pending', NULL, NULL),
(10, 'cash_on_delivery', 'Pending', NULL, NULL),
(11, 'cash_on_delivery', 'Pending', NULL, NULL),
(12, 'cash_on_delivery', 'Pending', NULL, NULL),
(13, 'cash_on_delivery', 'Pending', NULL, NULL),
(14, 'cash_on_delivery', 'Pending', NULL, NULL),
(15, 'cash_on_delivery', 'Pending', NULL, NULL),
(16, 'cash_on_delivery', 'Pending', NULL, NULL),
(17, 'cash_on_delivery', 'Pending', NULL, NULL),
(18, 'cash_on_delivery', 'Pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_image`
--

CREATE TABLE `tbl_product_image` (
  `product_image_id` int(10) NOT NULL,
  `product_id` int(5) NOT NULL,
  `image_option` varchar(100) NOT NULL,
  `image_label` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product_image`
--

INSERT INTO `tbl_product_image` (`product_image_id`, `product_id`, `image_option`, `image_label`) VALUES
(1, 1, 'product_image/061914lA3FiaQ.jpg', 1),
(2, 1, 'product_image/061914symphony-h300-productreviewbd.jpg', 0),
(3, 2, 'product_image/071841my-deal-lk-hp-pro-book-450-g4-i5-7200u-laptop-04.jpg', 1),
(4, 2, 'product_image/071841my-deal-lk-hp-pro-book-450-g4-i5-7200u-laptop-04.jpg', 0),
(5, 3, 'product_image/073024Fullscreencapture629201581727AM.jpg', 1),
(6, 4, 'product_image/130339symphony-h300-productreviewbd.jpg', 1),
(7, 5, 'product_image/130950Walton-Primo-S5-Smartphone-.jpg', 1),
(8, 6, 'product_image/131827giant_35697.jpg', 1),
(9, 8, 'product_image/133321ram_lead_image.jpg', 1),
(10, 9, 'product_image/13383461DaMDnHEXL._SL1000_.jpg', 1),
(11, 10, 'product_image/135421u_10132102.jpg', 1),
(12, 11, 'product_image/175117lA3FiaQ.jpg', 1),
(13, 11, 'product_image/17511761DaMDnHEXL._SL1000_.jpg', 0),
(14, 11, 'product_image/175117symphony-h300-productreviewbd.jpg', 0),
(15, 12, 'product_image/054955download.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `mobile_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `first_name`, `last_name`, `company_name`, `email_address`, `address`, `mobile_number`, `city`, `zip_code`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Ismail', 'Hossain', '', '', '', '01686254438', 'dhaka', '1215', 'USA', NULL, NULL),
(2, '', '', '', '', '', '', '', '', 'USA', NULL, NULL),
(3, 'Ismail', '', '', 'ismail@gmail.com', 'dhaka', '01685221155', 'dhaka', '', 'USA', NULL, NULL),
(4, 'Ismail', 'Hossain', '', 'ismail@gmail.com', 'dhaka', '01686254438', 'dhaka', '1215', 'USA', NULL, NULL),
(5, 'Ismail', 'Hossain', '', 'ismail@gmail.com', '72 purba razabazar, panthapath', '01686254438', 'dhaka', '1215', 'USA', NULL, NULL),
(6, 'Ismail', 'Hossain', '', 'ismail@gmail.com', '72 purba razabazar, panthapath', '01686254438', 'dhaka', '1215', 'USA', NULL, NULL),
(7, 'Ismail', 'Hossain', '', 'ismail@gmail.com', '72 purba razabazar, panthapath', '01686254438', 'dhaka', '1215', 'USA', NULL, NULL),
(8, 'Ismail', 'Hossain', '', 'ismail@gmail.com', '72 purba razabazar, panthapath', '01686254438', 'dhaka', '1215', 'USA', NULL, NULL),
(9, 'ismail', 'hossain', '', 'ismail@gmail.com', 'dhaka', '016862574438', 'dhaka', '', 'USA', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_category_name_unique` (`category_name`);

--
-- Indexes for table `manufacture`
--
ALTER TABLE `manufacture`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `manufacture_manufacture_name_unique` (`manufacture_name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_product_name_unique` (`product_name`),
  ADD KEY `product_category_id_foreign` (`category_id`),
  ADD KEY `product_manufacture_id_foreign` (`manufacture_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_admin_admin_email_unique` (`admin_email`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_product_image`
--
ALTER TABLE `tbl_product_image`
  ADD PRIMARY KEY (`product_image_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `manufacture`
--
ALTER TABLE `manufacture`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_product_image`
--
ALTER TABLE `tbl_product_image`
  MODIFY `product_image_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
