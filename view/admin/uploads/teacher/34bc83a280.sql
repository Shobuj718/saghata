-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2017 at 11:26 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bangla`
--

-- --------------------------------------------------------

--
-- Table structure for table `barcode`
--

CREATE TABLE `barcode` (
  `id` int(11) NOT NULL,
  `barcode` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barcode`
--

INSERT INTO `barcode` (`id`, `barcode`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, '123456789', '2017-11-29 09:40:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(2, 'shobuj islam', '2017-11-29 11:38:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(3, 'সবুজ ইসলাম', '2017-11-29 11:39:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(4, 'sakil23234', '2017-11-29 13:16:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `input`
--

CREATE TABLE `input` (
  `id` int(11) NOT NULL,
  `text` varchar(22) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `input`
--

INSERT INTO `input` (`id`, `text`, `image`, `image1`, `image2`) VALUES
(5, 'শিক্ষার্থী', '20160804_124513.jpg', 'Beautiful_Nature_1280x1024_Wallpaper.jpg', 'ClickHandler.ashx0.jpg'),
(6, 'শিক্ষার্থীর নাম', 'nature desktop 3.jpg', 'nature-wallpaper-13.jpg', 'Green Nature Wallpapers 02.jpg'),
(7, 'শিক্ষার্থীর ', '20160804_124513.jpg', '20160804_124513.jpg', '20160804_124513.jpg'),
(8, 'শিক্ষা', '20160804_124513.jpg', 'Beautiful_Nature_1280x1024_Wallpaper.jpg', 'ClickHandler.ashx0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `marksheet`
--

CREATE TABLE `marksheet` (
  `id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `shift` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `fullmark` varchar(255) NOT NULL,
  `cq` varchar(255) NOT NULL,
  `mcq` varchar(255) NOT NULL,
  `practical` varchar(255) NOT NULL,
  `subtotal` varchar(255) NOT NULL,
  `created_at` datetime(6) NOT NULL,
  `updated_at` datetime(6) DEFAULT NULL,
  `deleted_at` datetime(6) NOT NULL,
  `status` varchar(2) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marksheet`
--

INSERT INTO `marksheet` (`id`, `class`, `shift`, `branch`, `department`, `term`, `roll`, `subject`, `fullmark`, `cq`, `mcq`, `practical`, `subtotal`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, 'প্লে', 'প্রভাতী', 'ক', 'জেনারেল', 'Mid Term', '2222', 'বাংলা ১ম পত্র', '100', '25', '35', '22', '32', '2017-11-25 11:15:28.000000', '2017-11-29 11:34:31.000000', '0000-00-00 00:00:00.000000', '1'),
(2, 'নার্সারি', 'দিবা', 'খ', 'বিজ্ঞান', 'Final', '1111', 'বাংলা ২য় পত্র', '100', '22', '33', '33', '88', '2017-11-25 11:18:02.000000', NULL, '0000-00-00 00:00:00.000000', '1'),
(3, 'নবম', 'প্রভাতী', 'ক', 'জেনারেল', 'Mid Term', '3333', 'ইংরেজী ১ম পত্র', '100', '22', '22', '44', '88', '2017-11-25 11:19:41.000000', NULL, '0000-00-00 00:00:00.000000', '1'),
(4, 'প্লে', 'প্রভাতী', 'ক', 'জেনারেল', 'Final', '2222', 'বাংলা ২য় পত্র', '100', '21', '32', '20', '33', '2017-11-25 12:11:43.000000', NULL, '0000-00-00 00:00:00.000000', '1'),
(5, 'প্লে', 'প্রভাতী', 'ক', 'জেনারেল', 'Mid Term', '2222', 'ইংরেজী ১ম পত্র', '100', '11', '22', '33', '66', '2017-11-25 15:39:26.000000', NULL, '0000-00-00 00:00:00.000000', '1'),
(28, 'দ্বাদশ', 'দিবা', 'খ', 'বিজ্ঞান', 'Final', '১০০৩২০১৭', 'বাংলা ১ম পত্র', '100', '22', '22', '44', '', '2017-11-28 11:33:05.000000', NULL, '0000-00-00 00:00:00.000000', '1'),
(7, 'প্লে', 'প্রভাতী', 'খ', 'জেনারেল', 'Mid Term', '2222', 'ইংরেজী ২য় পত্র', '100', '23', '32', '44', '79', '2017-11-25 17:34:26.000000', NULL, '0000-00-00 00:00:00.000000', '1'),
(8, 'প্লে', 'প্রভাতী', 'ক', 'জেনারেল', 'Mid Term', '2222', 'গণিত', '100', '22', '33', '35', '80', '2017-11-26 15:00:25.000000', NULL, '0000-00-00 00:00:00.000000', '1'),
(9, 'নার্সারি', 'দিবা', 'খ', 'বিজ্ঞান', 'Final', '1111', 'তথ্য ও যোগাযোগ প্রযুক্তি', '50', '22', '30', '20', '40', '2017-11-26 16:01:33.000000', NULL, '0000-00-00 00:00:00.000000', '1'),
(10, 'নার্সারি', 'দিবা', 'খ', 'বিজ্ঞান', 'Mid Term', '2222', 'বাংলা ২য় পত্র', '100', '12', '22', '15', '49', '2017-11-26 18:02:44.000000', NULL, '0000-00-00 00:00:00.000000', '1'),
(11, 'নার্সারি', 'দিবা', 'খ', 'বিজ্ঞান', 'Mid Term', '2222', 'বিজ্ঞান', '100', '12', '12', '12', '36', '2017-11-26 18:05:05.000000', NULL, '0000-00-00 00:00:00.000000', '1'),
(12, 'নার্সারি', 'দিবা', 'খ', 'বিজ্ঞান', 'Mid Term', '2222', 'তথ্য ও যোগাযোগ প্রযুক্তি', '50', '15', '20', '15', '50', '2017-11-26 18:06:04.000000', NULL, '0000-00-00 00:00:00.000000', '1'),
(13, 'ডিগ্রী ১ম বর্ষ', 'দিবা', 'ক', 'মানবিক', 'Final', '১২২২০১৭', 'বাংলা ১ম পত্র', '100', '22', '44', '12', '', '2017-11-27 15:20:22.000000', NULL, '0000-00-00 00:00:00.000000', '1'),
(14, 'ডিগ্রী ১ম বর্ষ', 'দিবা', 'ক', 'মানবিক', 'Final', '১২২২০১৭', 'বাংলা ২য় পত্র', '100', '23', '33', '12', '', '2017-11-27 15:21:46.000000', NULL, '0000-00-00 00:00:00.000000', '1'),
(15, 'ডিগ্রী ১ম বর্ষ', 'দিবা', 'ক', 'মানবিক', 'Final', '১২২২০১৭', 'ইংরেজী ১ম পত্র', '100', '25', '30', '25', '', '2017-11-27 15:22:41.000000', NULL, '0000-00-00 00:00:00.000000', '1'),
(16, 'ডিগ্রী ১ম বর্ষ', 'দিবা', 'ক', 'মানবিক', 'Final', '১২২২০১৭', 'ইংরেজী ২য় পত্র', '100', '23', '23', '11', '', '2017-11-27 15:23:40.000000', NULL, '0000-00-00 00:00:00.000000', '1'),
(17, 'ডিগ্রী ১ম বর্ষ', 'দিবা', 'ক', 'মানবিক', 'Final', '১২২২০১৭', 'গণিত', '100', '12', '22', '12', '', '2017-11-27 15:24:15.000000', NULL, '0000-00-00 00:00:00.000000', '1'),
(18, 'ডিগ্রী ১ম বর্ষ', 'দিবা', 'ক', 'মানবিক', 'Final', '১২২২০১৭', 'বাংলাদেশ ও বিশ্ব পরিচয়', '100', '12', '33', '22', '', '2017-11-27 15:47:12.000000', NULL, '0000-00-00 00:00:00.000000', '1'),
(19, 'প্লে', 'প্রভাতী', 'ক', 'জেনারেল', 'Mid Term', '2222', 'বাংলাদেশ ও বিশ্ব পরিচয়', '50', '', '15', '15', '', '2017-11-28 09:58:36.000000', NULL, '0000-00-00 00:00:00.000000', '1'),
(20, 'প্লে', 'প্রভাতী', 'ক', 'জেনারেল', 'Mid Term', '2222', 'শারীরিক শিক্ষা ও স্বাস্থ্য', '50', '12', '12', '12', '', '2017-11-28 09:59:20.000000', '2017-11-29 12:04:11.000000', '0000-00-00 00:00:00.000000', '1'),
(21, 'প্লে', 'প্রভাতী', 'ক', 'জেনারেল', 'Final', '2222', 'বাংলা ১ম পত্র', '100', '25', '35', '22', '', '2017-11-28 10:07:32.000000', '2017-11-29 11:34:31.000000', '0000-00-00 00:00:00.000000', '1'),
(22, 'ডিগ্রী ১ম বর্ষ', 'দিবা', 'ক', 'মানবিক', 'Final', '১২২২০১৭', 'তথ্য ও যোগাযোগ প্রযুক্তি', '50', '10', '17', '10', '', '2017-11-28 10:14:59.000000', NULL, '0000-00-00 00:00:00.000000', '1'),
(33, 'দ্বাদশ', 'দিবা', 'খ', 'বিজ্ঞান', 'Final', '১০০৩২০১৭', 'বাংলাদেশ ও বিশ্ব পরিচয়', '50', '12', '12', '10', '', '2017-11-28 11:39:12.000000', NULL, '0000-00-00 00:00:00.000000', '1'),
(32, 'দ্বাদশ', 'দিবা', 'খ', 'বিজ্ঞান', 'Final', '১০০৩২০১৭', 'গণিত', '100', '25', '25', '33', '', '2017-11-28 11:38:43.000000', NULL, '0000-00-00 00:00:00.000000', '1'),
(31, 'দ্বাদশ', 'দিবা', 'খ', 'বিজ্ঞান', 'Final', '১০০৩২০১৭', 'ইংরেজী ২য় পত্র', '100', '20', '25', '25', '', '2017-11-28 11:38:16.000000', NULL, '0000-00-00 00:00:00.000000', '1'),
(29, 'দ্বাদশ', 'দিবা', 'খ', 'বিজ্ঞান', 'Final', '১০০৩২০১৭', 'বাংলা ২য় পত্র', '100', '15', '15', '40', '', '2017-11-28 11:33:36.000000', NULL, '0000-00-00 00:00:00.000000', '1'),
(30, 'দ্বাদশ', 'দিবা', 'খ', 'বিজ্ঞান', 'Final', '১০০৩২০১৭', 'ইংরেজী ১ম পত্র', '100', '22', '22', '22', '', '2017-11-28 11:36:36.000000', NULL, '0000-00-00 00:00:00.000000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `id` int(11) NOT NULL,
  `sex` varchar(25) NOT NULL,
  `student_name` varchar(25) NOT NULL,
  `class` varchar(25) NOT NULL,
  `shift` varchar(25) NOT NULL,
  `branch` varchar(25) NOT NULL,
  `department` varchar(25) NOT NULL,
  `student_id` varchar(25) NOT NULL,
  `class_roll` varchar(25) NOT NULL,
  `year` varchar(25) NOT NULL,
  `birth_day` varchar(25) NOT NULL,
  `birth_month` varchar(25) NOT NULL,
  `birth_year` varchar(25) NOT NULL,
  `blood_group` varchar(25) NOT NULL,
  `religion` varchar(25) NOT NULL,
  `birth_reg_num` varchar(55) NOT NULL,
  `last_study_orga` varchar(55) NOT NULL,
  `why_left` varchar(55) NOT NULL,
  `last_Orga_phone` varchar(25) NOT NULL,
  `home_name` varchar(25) NOT NULL,
  `hoding_number` varchar(25) NOT NULL,
  `road_number` varchar(25) NOT NULL,
  `village_name` varchar(25) NOT NULL,
  `postoffice` varchar(25) NOT NULL,
  `unione_name` varchar(25) NOT NULL,
  `thana_name` varchar(25) NOT NULL,
  `district_name` varchar(25) NOT NULL,
  `postcode` varchar(25) NOT NULL,
  `lasting_home_name` varchar(25) NOT NULL,
  `lasting_holding_number` varchar(25) NOT NULL,
  `lasting_road_number` varchar(25) NOT NULL,
  `lasting_village` varchar(25) NOT NULL,
  `lasting_postoffice` varchar(25) NOT NULL,
  `lasting_unione` varchar(25) NOT NULL,
  `lasting_thana` varchar(25) NOT NULL,
  `lasting_district` varchar(25) NOT NULL,
  `lasting_postcode` varchar(25) NOT NULL,
  `father_name` varchar(25) NOT NULL,
  `father_occupation` varchar(25) NOT NULL,
  `fa_monthly_income` varchar(25) NOT NULL,
  `fa_edu_quali` varchar(25) NOT NULL,
  `father_phone` varchar(25) NOT NULL,
  `father_email` varchar(255) NOT NULL,
  `father_national_id` varchar(55) NOT NULL,
  `mother_name` varchar(25) NOT NULL,
  `mother_occupation` varchar(25) NOT NULL,
  `mo_monthly_income` varchar(25) NOT NULL,
  `mo_edu_quali` varchar(25) NOT NULL,
  `mother_phone` varchar(55) NOT NULL,
  `mother_email` varchar(255) NOT NULL,
  `mo_national_id` varchar(55) NOT NULL,
  `local_gurdian` varchar(25) NOT NULL,
  `local_occupation` varchar(25) NOT NULL,
  `relation` varchar(25) NOT NULL,
  `local_edu` varchar(25) NOT NULL,
  `local_phone` varchar(55) NOT NULL,
  `local_email` varchar(255) NOT NULL,
  `local_national_id` varchar(55) NOT NULL,
  `student_image` varchar(255) NOT NULL,
  `father_image` varchar(255) NOT NULL,
  `mother_image` varchar(255) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT '1',
  `created_at` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `updated_at` datetime(6) DEFAULT NULL,
  `deleted_at` datetime(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`id`, `sex`, `student_name`, `class`, `shift`, `branch`, `department`, `student_id`, `class_roll`, `year`, `birth_day`, `birth_month`, `birth_year`, `blood_group`, `religion`, `birth_reg_num`, `last_study_orga`, `why_left`, `last_Orga_phone`, `home_name`, `hoding_number`, `road_number`, `village_name`, `postoffice`, `unione_name`, `thana_name`, `district_name`, `postcode`, `lasting_home_name`, `lasting_holding_number`, `lasting_road_number`, `lasting_village`, `lasting_postoffice`, `lasting_unione`, `lasting_thana`, `lasting_district`, `lasting_postcode`, `father_name`, `father_occupation`, `fa_monthly_income`, `fa_edu_quali`, `father_phone`, `father_email`, `father_national_id`, `mother_name`, `mother_occupation`, `mo_monthly_income`, `mo_edu_quali`, `mother_phone`, `mother_email`, `mo_national_id`, `local_gurdian`, `local_occupation`, `relation`, `local_edu`, `local_phone`, `local_email`, `local_national_id`, `student_image`, `father_image`, `mother_image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ছেলে', 'রানা মিয়া ', 'ডিগ্রী ৩য় বর্ষ', 'প্রভাতী', 'ক', 'বিজ্ঞান', '1111', '১১২২', '২০১৮', '২', 'ফেব্রুয়ারী', 'সাল', 'B+', 'বৌদ্ধ', '২৩২৩২৩২৩৩৩৩৩৩৩', 'বগুড়া ', 'জানি না ', 'বগুড়া ২৩২৩২', 'করণ ', '২৩', '২৩', 'জহুরুল নগর ', 'জহুরুল নগর ', 'জহুরুল নগর ', 'বগুড়া ', 'বগুড়া ', '২৩২৩৩২', 'মঞ্জিল ', '৩৪', '২৩', 'মনা ', 'বগুড়া ', 'বগুড়া ', 'বগুড়া ', 'বগুড়া ', '৩৪৩৪', 'কবির ', 'কৃষক ', '৩৩৪৩', 'নাই ', '৩৪৩৪৩৪৩৪৩৪', 'shobuj@gmail.com', '২৩২৩৩৩৩৩৩৩৩৩৩৩৩৩৩', 'মোমেনা বেগম ', 'গৃহিনী ', '০০.০০ টাকা ', 'নাই ', '৩৪৩৪৩৪৩৪', 'nai@gmail.com', '৩৪৩৪৩৩', 'জলিল ', 'ব্যাবসায়ী ', 'ভাই ', 'নাই ', '২৩২৩৩৪৩৪৩৪', 'jolil@gmail.com', '৩৪৩৪৩৪৩৪৩৪৩৪', '818e0a7927.jpg', 'be0ab0efe9.jpg', 'abc1394481.jpg', '1', '2017-11-16 16:44:28.510029', '2017-11-22 10:56:28.000000', NULL),
(2, 'সিলেক্ট করুণ', 's ', 'ডিগ্রী ৩য় বর্ষ', 'প্রভাতী', 'ক', 'বিজ্ঞান', 'asd', 'asd', 'asd', 'তারিখ', 'মাস', 'সাল', 'সিলেক্ট করুন', 'সিলেক্ট করুন', '', '', '', '', '', '', '', 'asd', 'asd', 'asd', 'asd', 'asdasd', '', '', '', '', '', '', '', '', '', '', 'asd', 'asdf', '', '', '', '', '', 'asdh', 'asdf', '', '', '', '', '', '', '', '', '', '', '', '212221', '9974ab1350.jpg', 'be0ab0efe9.jpg', 'abc1394481.jpg', '2', '2017-11-16 16:44:28.510029', '2017-11-22 10:57:54.000000', NULL),
(3, 'ছেলে', 'শিক্ষা', 'নার্সারি', 'দিবা', 'খ', 'জেনারেল', '২৩২৩৩৩২', '৩২৩২৩২৩', '৩৩২৩২২৩', '২', 'মার্চ', 'সাল', 'AB+', 'হিন্দু', '৩৪৩৪', '৩৪৪৪৪৩', 'এ ', 'এ ৩২', 'asdf', 'asd', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asd', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'e323f5f157.jpg', 'be0ab0efe9.jpg', 'abc1394481.jpg', '1', '2017-11-16 16:44:28.510029', '2017-11-22 09:15:41.000000', NULL),
(49, 'সিলেক্ট করুণ', 'as', 'সিলেক্ট করুন', 'সিলেক্ট করুন', 'সিলেক্ট করুন', 'সিলেক্ট করুন', '2345', 'as', '2017', 'তারিখ', 'মাস', 'সাল', 'সিলেক্ট করুন', 'সিলেক্ট করুন', '', '', '', '', '', '', '', 'as', 'as', 'as', 'as', 'as', '', '', '', '', '', '', '', '', '', '', 'as', 'as', '', '', '', '', '', 'as', 'as', '', '', '', '', '', '', '', '', '', '', '', '', '885943bca0.jpg', 'be0ab0efe9.jpg', 'abc1394481.jpg', '1', '2017-11-30 12:43:56.826165', NULL, NULL),
(50, 'সিলেক্ট করুণ', 'er', 'সিলেক্ট করুন', 'সিলেক্ট করুন', 'সিলেক্ট করুন', 'সিলেক্ট করুন', '172346', 'ur', '2017', 'তারিখ', 'মাস', 'সাল', 'সিলেক্ট করুন', 'সিলেক্ট করুন', '', '', '', '', '', '', '', 'ur', 'ur', 'ur', 'ur', 'ur', '', '', '', '', '', '', '', '', '', '', 'ur', 'ur', '', '', '', '', '', 'ur', 'ur', '', '', '', '', '', '', '', '', '', '', '', '', '51a30f82e0.jpg', 'be0ab0efe9.jpg', 'abc1394481.jpg', '1', '2017-11-30 12:46:26.130554', NULL, NULL),
(51, 'সিলেক্ট করুণ', 'qw', 'সিলেক্ট করুন', 'সিলেক্ট করুন', 'সিলেক্ট করুন', 'সিলেক্ট করুন', '172347', 'qw', '2017', 'তারিখ', 'মাস', 'সাল', 'সিলেক্ট করুন', 'সিলেক্ট করুন', '', '', '', '', '', '', '', 'qw', 'qw', 'qw', 'qw', 'qw', '', '', '', '', '', '', '', '', '', '', 'qw', 'qw', '', '', '', '', '', 'qw', 'qw', '', '', '', '', '', '', '', '', '', '', '', '', 'a645f8e5b1.jpg', 'be0ab0efe9.jpg', 'abc1394481.jpg', '1', '2017-11-30 12:57:04.921318', NULL, NULL),
(35, 'ছেলে', 'সবুজ ইসলাম ', 'নার্সারি', 'দিবা', 'খ', 'জেনারেল', '2222', '১২১২১২', '2017', '১', 'ফেব্রুয়ারী', '১৯৫২', 'A-', 'ইসলাম', '১২২২২২২২২২২২২২১২১২১২', 'বগুড়া স্কুল ', 'জানি না ', 'বগুড়া সদর ', 'মঞ্জিল ', '১২', '১২', 'বগুড়া ', 'বগুড়া ', 'বগুড়া ', 'বগুড়া ', 'বগুড়া ', '১২১২', 'মঞ্জিল ', '২৩', '২৩ ', '২৩', 'বগুড়া ', 'বগুড়া ', 'বগুড়া ', 'বগুড়া ', 'বগুড়া ', 'কবির ', 'মাস্টার ', '২০০০', 'বিএসসি ', '১২২২২২২২২২২২২২', 'shobuj@gmail.com', '১২২২২২২২২২২২২২২২২২২২২২২২', 'জান্নাতি ', 'গৃহিনী ', '০০.০০ টাকা ', 'এসএসসি ', '১২১২১২১২১২১২', 'shobuj@gmail.com', '২৩৩৩৩৩৩৩৩৩৩৩৩৩৩৩৩৩৩৩', 'মুক্তার ', 'চাকরিজীবী ', 'ভাই ', 'বিএসসি ', '১২১২২২২২২২২২২২২২', '', '২১২১২১২১২১২১২১২১২১২১২১২১৩', '9a50b867e1.jpg', 'be0ab0efe9.jpg', 'abc1394481.jpg', '1', '2017-11-18 17:05:32.215801', '2017-11-22 15:38:43.000000', NULL),
(23, 'ছেলে', 'শিক্ষার্থীর', 'ডিগ্রী ৩য় বর্ষ', 'প্রভাতী', 'ক', 'বিজ্ঞান', 'শিক্ষার্থীর', '৩২৩২', 'শিক্ষার্থীর', '১৯', 'জানুয়ারী', 'সাল', 'A+', 'ইসলাম', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', '', '621abf49af.jpg', 'nature-wallpaper-13.jpg', 'nature desktop 3.jpg', '1', '2017-11-18 11:49:51.429908', '2017-11-22 10:56:54.000000', NULL),
(44, 'ছেলে', 'শিক্ষা', 'নার্সারি', 'দিবা', 'খ', 'জেনারেল', '২৩২৩৩', '৩২৩', '৩৩২৩২২৩', '২', 'মার্চ', 'সাল', 'AB+', 'হিন্দু', '৩৪৩৪', '৩৪৪৪৪৩', 'এ ', 'এ ৩২', 'asdf', 'asd', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asd', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'e323f5f157.jpg', 'be0ab0efe9.jpg', 'abc1394481.jpg', '1', '2017-11-16 16:44:28.510029', '2017-11-22 15:41:20.000000', NULL),
(47, 'সিলেক্ট করুণ', 'asd', 'সিলেক্ট করুন', 'সিলেক্ট করুন', 'সিলেক্ট করুন', 'সিলেক্ট করুন', '২৩২', 'asd', '2017', 'তারিখ', 'মাস', 'সাল', 'সিলেক্ট করুন', 'সিলেক্ট করুন', '', '', '', '', '', '', '', 'asdf', 'asd', 'asdf', 'asdf', 'asdf', '', '', '', '', '', '', '', '', '', '', 'asdf', 'asdf', '', '', '', '', '', 'sdf', 'sdf', '', '', '', '', '', '', '', '', '', '', '', '', 'afdbcdc931.jpg', 'be0ab0efe9.jpg', 'abc1394481.jpg', '1', '2017-11-30 12:23:32.694309', NULL, NULL),
(45, 'মেয়ে', 'মাসুমা  as', 'ডিগ্রী ১ম বর্ষ', 'দিবা', 'ক', 'মানবিক', '১২২১২২০১৭', '২১', '২০১৮', '১৯', 'জানুয়ারী', 'সাল', 'A+', 'ইসলাম', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', '322222222', '317c628e85.jpg', 'be0ab0efe9.jpg', 'abc1394481.jpg', '1', '2017-11-18 12:05:15.248815', '2017-11-22 15:32:00.000000', NULL),
(46, 'মেয়ে', 'মাসুমা ', 'ডিগ্রী ১ম বর্ষ', 'দিবা', 'ক', 'মানবিক', '১২২১২২০১৭', '২১৮', '২০১৮', '১৯', 'জানুয়ারী', 'সাল', 'A+', 'ইসলাম', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', '322222222', '317c628e85.jpg', 'be0ab0efe9.jpg', 'abc1394481.jpg', '1', '2017-11-18 12:05:15.248815', '2017-11-22 15:32:21.000000', NULL),
(42, 'ছেলে', 'ওয়াদুদ ', 'নার্সারি', 'সান্ধ্যকালীন', 'খ', 'জেনারেল', '১০০৩২০১৭', '১', '২০১৭', '১২', 'নভেম্বর', 'সাল', 'A+', 'ইসলাম', '২৩৩৩৩৩৩৩৩৩৩৩৩', 'ঢাকা ', 'জানি না ', 'ঢাকা ২৩২৩২৩', 'গোধূলি ', '২৩', '৩৪', 'ঢাকা ', 'ঢাকা ', 'ঢাকা ', 'ঢাকা ', 'ঢাকা ', '২৩২৩', 'ঢাকা ', '৩৪', '৩৪', 'দিনাজপুর ', 'দিনাজপুর ', 'দিনাজপুর ', 'ঘোড়াঘাট ', 'দিনাজপুর ', '২৩৩', 'আব্বাছ আলী ', 'অবসরপ্রাপ্ত ', 'নাই ', 'এসএসসি ', '৩৪৩৪৩', 'salim@gmail.com', '২৩২৩৩৩৩৩৩৩৩৩৩৩৩', 'সিরা ', 'গৃহিনী ', 'নাই ', 'এসএসসি ', '২৩২৩২৩২৩২৩', 'sira@gmail.com', '২৩৪৪৪৪৪৪৪৪৪৪৪৪৪৪২২২২', 'সেলিম ', 'চাকুরীজীবি ', 'ভাই ', 'এসএসসি ', '২২৩৩৪৩৪৪৫', 'sh@gmail.com', '৫৩৫৩৫৩৫৩৫৩৫৩৫৩৫৩৫৩৫৩৫৩৫৩৫৩৫', '958471f36d.jpg', 'be0ab0efe9.jpg', 'abc1394481.jpg', '1', '2017-11-21 12:33:25.728585', '2017-11-21 12:39:21.000000', NULL),
(27, 'মেয়ে', 'মাসুমা dd', 'ডিগ্রী ১ম বর্ষ', 'দিবা', 'ক', 'মানবিক', '১২২২০১৭', '২১৮৮৮৮', '২০১৮', '১৯', 'জানুয়ারী', 'সাল', 'A+', 'ইসলাম', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', 'শিক্ষার্থীর', '322222222', '317c628e85.jpg', 'be0ab0efe9.jpg', 'abc1394481.jpg', '1', '2017-11-18 12:05:15.248815', '2017-11-22 15:33:24.000000', NULL),
(48, 'সিলেক্ট করুণ', 'sdf', 'সিলেক্ট করুন', 'সিলেক্ট করুন', 'সিলেক্ট করুন', 'সিলেক্ট করুন', '২৩২২০১৭', 'wt', '2017', 'তারিখ', 'মাস', 'সাল', 'সিলেক্ট করুন', 'সিলেক্ট করুন', '', '', '', '', '', '', '', 'wt', 'wt', 'wt', 'wt', 'wt', '', '', '', '', '', '', '', '', '', '', 'wt', 'wt', '', '', '', '', '', 'wt', 'wt', '', '', '', '', '', '', '', '', '', '', '', '', '087701dd99.jpg', 'be0ab0efe9.jpg', 'abc1394481.jpg', '1', '2017-11-30 12:39:56.072782', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stu_reinfo`
--

CREATE TABLE `stu_reinfo` (
  `id` int(11) NOT NULL,
  `sex` varchar(25) NOT NULL,
  `student_name` varchar(55) NOT NULL,
  `class` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stu_reinfo`
--

INSERT INTO `stu_reinfo` (`id`, `sex`, `student_name`, `class`) VALUES
(1, 'শিক্ষার্থীর ', 'শিক্ষা', 'শিক্ষার');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `shift` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `attend` varchar(155) NOT NULL,
  `att_time` date NOT NULL,
  `insertDT` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`id`, `class`, `shift`, `branch`, `department`, `roll`, `attend`, `att_time`, `insertDT`, `updated_at`) VALUES
(118, 'ডিগ্রী ১ম বর্ষ', 'দিবা', 'ক', 'মানবিক', '২১৮', 'present', '2017-11-22', NULL, '2017-11-23 10:32:24.000000'),
(119, 'ডিগ্রী ১ম বর্ষ', 'দিবা', 'ক', 'মানবিক', '২১৮৮৮৮', 'absent', '2017-11-22', NULL, '2017-11-23 10:32:24.000000'),
(117, 'ডিগ্রী ১ম বর্ষ', 'দিবা', 'ক', 'মানবিক', '২১', 'leave', '2017-11-22', NULL, '2017-11-23 10:32:24.000000'),
(108, 'নার্সারি', 'দিবা', 'খ', 'জেনারেল', '৩২৩২৩২৩', 'leave', '2017-11-22', NULL, NULL),
(57, 'নার্সারি', 'সান্ধ্যকালীন', 'খ', 'জেনারেল', '১', 'absent', '2017-11-22', NULL, NULL),
(58, 'ডিগ্রী ৩য় বর্ষ', 'প্রভাতী', 'ক', 'বিজ্ঞান', '১১২২', 'absent', '2017-11-22', NULL, NULL),
(59, 'ডিগ্রী ৩য় বর্ষ', 'প্রভাতী', 'ক', 'বিজ্ঞান', '১১২', 'present', '2017-11-22', NULL, NULL),
(60, 'ডিগ্রী ৩য় বর্ষ', 'প্রভাতী', 'ক', 'বিজ্ঞান', '১১২২১১২২', 'present', '2017-11-22', NULL, NULL),
(61, 'ডিগ্রী ৩য় বর্ষ', 'প্রভাতী', 'ক', 'বিজ্ঞান', '১১', 'absent', '2017-11-22', NULL, NULL),
(62, 'ডিগ্রী ৩য় বর্ষ', 'প্রভাতী', 'ক', 'বিজ্ঞান', '১১২২১১', 'leave', '2017-11-22', NULL, NULL),
(63, 'ডিগ্রী ৩য় বর্ষ', 'প্রভাতী', 'ক', 'বিজ্ঞান', '১', 'absent', '2017-11-22', NULL, NULL),
(64, 'ডিগ্রী ৩য় বর্ষ', 'প্রভাতী', 'ক', 'বিজ্ঞান', 'asd', 'absent', '2017-11-22', NULL, NULL),
(65, 'ডিগ্রী ৩য় বর্ষ', 'প্রভাতী', 'ক', 'বিজ্ঞান', 'শিক্ষার্থীর', 'present', '2017-11-22', NULL, NULL),
(66, 'ডিগ্রী ৩য় বর্ষ', 'প্রভাতী', 'ক', 'বিজ্ঞান', '১১২', 'present', '2017-11-21', NULL, NULL),
(67, 'ডিগ্রী ৩য় বর্ষ', 'প্রভাতী', 'ক', 'বিজ্ঞান', 'as', 'leave', '2017-11-21', NULL, NULL),
(68, 'ডিগ্রী ৩য় বর্ষ', 'প্রভাতী', 'ক', 'বিজ্ঞান', 'শিক্ষার্থীর', 'absent', '2017-11-21', NULL, NULL),
(69, 'ডিগ্রী ৩য় বর্ষ', 'প্রভাতী', 'ক', 'বিজ্ঞান', '১১২২', 'present', '2017-11-21', NULL, NULL),
(70, 'ডিগ্রী ৩য় বর্ষ', 'প্রভাতী', 'ক', 'বিজ্ঞান', 'asd', 'present', '2017-11-21', NULL, NULL),
(71, 'ডিগ্রী ৩য় বর্ষ', 'প্রভাতী', 'ক', 'বিজ্ঞান', 'শিক্ষার্থীর', 'present', '2017-11-22', NULL, NULL),
(72, 'ডিগ্রী ৩য় বর্ষ', 'প্রভাতী', 'ক', 'বিজ্ঞান', '১১২২', 'absent', '2017-11-22', NULL, NULL),
(73, 'ডিগ্রী ৩য় বর্ষ', 'প্রভাতী', 'ক', 'বিজ্ঞান', 'asd', 'absent', '2017-11-22', NULL, NULL),
(74, 'ডিগ্রী ৩য় বর্ষ', 'প্রভাতী', 'ক', 'বিজ্ঞান', 'শিক্ষার্থীর', 'present', '2017-11-22', NULL, NULL),
(75, 'ডিগ্রী ৩য় বর্ষ', 'প্রভাতী', 'ক', 'বিজ্ঞান', '১১২২', 'absent', '2017-11-22', NULL, NULL),
(76, 'ডিগ্রী ৩য় বর্ষ', 'প্রভাতী', 'ক', 'বিজ্ঞান', 'asd', 'absent', '2017-11-22', NULL, NULL),
(77, 'ডিগ্রী ৩য় বর্ষ', 'প্রভাতী', 'ক', 'বিজ্ঞান', 'শিক্ষার্থীর', 'present', '2017-11-22', NULL, NULL),
(79, 'নার্সারি', 'দিবা', 'খ', 'জেনারেল', '৩২৩২৩২', 'leave', '2017-11-22', NULL, NULL),
(80, 'নার্সারি', 'দিবা', 'খ', 'জেনারেল', '১২', 'present', '2017-11-22', NULL, NULL),
(81, 'ডিগ্রী ৩য় বর্ষ', 'প্রভাতী', 'ক', 'বিজ্ঞান', '১১২২', 'absent', '2017-11-22', NULL, NULL),
(84, 'ডিগ্রী ১ম বর্ষ', 'দিবা', 'ক', 'মানবিক', '২', 'present', '2017-11-22', NULL, NULL),
(86, 'ডিগ্রী ১ম বর্ষ', 'দিবা', 'ক', 'মানবিক', '২১৮৮', 'present', '2017-11-21', NULL, NULL),
(87, 'ডিগ্রী ১ম বর্ষ', 'দিবা', 'ক', 'মানবিক', '১১২২', 'absent', '2017-11-22', NULL, NULL),
(89, 'ডিগ্রী ১ম বর্ষ', 'দিবা', 'ক', 'মানবিক', '৩২৩২৩২৩', 'leave', '2017-11-22', NULL, NULL),
(90, 'ডিগ্রী ১ম বর্ষ', 'দিবা', 'ক', 'মানবিক', '১২১২১২', 'leave', '2017-11-22', NULL, NULL),
(92, 'ডিগ্রী ১ম বর্ষ', 'দিবা', 'ক', 'মানবিক', '৩২৩', 'present', '2017-11-22', NULL, NULL),
(93, 'ডিগ্রী ১ম বর্ষ', 'দিবা', 'ক', 'মানবিক', '২১', 'present', '2017-11-22', NULL, NULL),
(94, 'ডিগ্রী ১ম বর্ষ', 'দিবা', 'ক', 'মানবিক', '২১৮', 'present', '2017-11-22', NULL, NULL),
(95, 'ডিগ্রী ১ম বর্ষ', 'দিবা', 'ক', 'মানবিক', '১', 'absent', '2017-11-22', NULL, NULL),
(96, 'ডিগ্রী ১ম বর্ষ', 'দিবা', 'ক', 'মানবিক', '২১৮৮৮৮', 'leave', '2017-11-22', NULL, NULL),
(111, 'ডিগ্রী ৩য় বর্ষ', 'প্রভাতী', 'ক', 'বিজ্ঞান', '১১২২', 'absent', '2017-11-22', NULL, NULL),
(123, 'ডিগ্রী ১ম বর্ষ', 'দিবা', 'ক', 'মানবিক', '২১', 'present', '2017-11-23', NULL, '2017-11-23 17:41:51.000000'),
(124, 'ডিগ্রী ১ম বর্ষ', 'দিবা', 'ক', 'মানবিক', '২১৮', 'absent', '2017-11-23', NULL, '2017-11-23 17:41:51.000000'),
(192, 'নার্সারি', 'দিবা', 'খ', 'জেনারেল', '৩২৩২৩২৩', 'leave', '2017-11-24', '2017-11-24 08:14:01.000000', NULL),
(189, 'নার্সারি', 'দিবা', 'খ', 'জেনারেল', '৩২৩২৩২৩', 'present', '2017-11-23', '2017-11-23 18:16:15.000000', '2017-11-23 18:18:21.000000'),
(190, 'নার্সারি', 'দিবা', 'খ', 'জেনারেল', '১২১২১২', 'present', '2017-11-23', '2017-11-23 18:16:15.000000', '2017-11-23 18:18:21.000000'),
(191, 'নার্সারি', 'দিবা', 'খ', 'জেনারেল', '৩২৩', 'leave', '2017-11-23', '2017-11-23 18:16:15.000000', '2017-11-23 18:18:21.000000'),
(193, 'নার্সারি', 'দিবা', 'খ', 'জেনারেল', '১২১২১২', 'absent', '2017-11-24', '2017-11-24 08:14:01.000000', NULL),
(194, 'নার্সারি', 'দিবা', 'খ', 'জেনারেল', '৩২৩', 'present', '2017-11-24', '2017-11-24 08:14:01.000000', NULL),
(195, 'নার্সারি', 'দিবা', 'খ', 'জেনারেল', '৩২৩২৩২৩', 'leave', '2017-11-30', '2017-11-30 16:16:06.000000', NULL),
(196, 'নার্সারি', 'দিবা', 'খ', 'জেনারেল', '১২১২১২', 'absent', '2017-11-30', '2017-11-30 16:16:06.000000', NULL),
(197, 'নার্সারি', 'দিবা', 'খ', 'জেনারেল', '৩২৩', 'present', '2017-11-30', '2017-11-30 16:16:06.000000', NULL),
(198, 'নার্সারি', 'দিবা', 'খ', 'জেনারেল', '৩২৩২৩২৩', 'present', '2017-12-06', '2017-12-06 15:24:13.000000', NULL),
(199, 'নার্সারি', 'দিবা', 'খ', 'জেনারেল', '১২১২১২', 'absent', '2017-12-06', '2017-12-06 15:24:13.000000', NULL),
(200, 'নার্সারি', 'দিবা', 'খ', 'জেনারেল', '৩২৩', 'leave', '2017-12-06', '2017-12-06 15:24:13.000000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_data`
--

CREATE TABLE `teacher_data` (
  `id` int(11) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `what_work` varchar(255) NOT NULL,
  `eduquali` varchar(255) NOT NULL,
  `training` varchar(255) NOT NULL,
  `join_date` varchar(255) NOT NULL,
  `retire_date` varchar(255) NOT NULL,
  `index_number` varchar(255) NOT NULL,
  `mpo_date` varchar(255) NOT NULL,
  `birth_date` varchar(255) NOT NULL,
  `blood` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `lastorga` varchar(255) NOT NULL,
  `whyleft` varchar(255) NOT NULL,
  `orgaarea` varchar(255) NOT NULL,
  `homeName` varchar(255) NOT NULL,
  `holdingNum` varchar(255) NOT NULL,
  `roadName` varchar(255) NOT NULL,
  `village` varchar(255) NOT NULL,
  `postoffice` varchar(255) NOT NULL,
  `unione` varchar(255) NOT NULL,
  `thana` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `lasting_homeName` varchar(255) NOT NULL,
  `lasting_holdingNum` varchar(255) NOT NULL,
  `lasting_roadName` varchar(255) NOT NULL,
  `lasting_village` varchar(255) NOT NULL,
  `lasting_postoffice` varchar(255) NOT NULL,
  `lasting_unione` varchar(255) NOT NULL,
  `lasting_thana` varchar(255) NOT NULL,
  `lasting_district` varchar(255) NOT NULL,
  `lasting_postcode` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `fa_occupation` varchar(255) NOT NULL,
  `fa_monthly_income` varchar(255) NOT NULL,
  `fa_edu_quli` varchar(255) NOT NULL,
  `fa_phone` varchar(255) NOT NULL,
  `fa_email` varchar(255) NOT NULL,
  `fa_nid` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `ma_occupation` varchar(255) NOT NULL,
  `ma_monthly_income` varchar(255) NOT NULL,
  `ma_edu_quli` varchar(255) NOT NULL,
  `ma_phone` varchar(255) NOT NULL,
  `ma_email` varchar(255) NOT NULL,
  `ma_nid` varchar(255) NOT NULL,
  `marriage_person` varchar(255) NOT NULL,
  `marriage_occu` varchar(255) NOT NULL,
  `marriage_date` varchar(255) NOT NULL,
  `marriage_edu_quali` varchar(255) NOT NULL,
  `marriage_mobile` varchar(255) NOT NULL,
  `marriage_email` varchar(255) NOT NULL,
  `children` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `updated_at` datetime(6) DEFAULT NULL,
  `deleted_at` datetime(6) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher_data`
--

INSERT INTO `teacher_data` (`id`, `sex`, `teacher_name`, `designation`, `what_work`, `eduquali`, `training`, `join_date`, `retire_date`, `index_number`, `mpo_date`, `birth_date`, `blood`, `religion`, `email`, `nid`, `lastorga`, `whyleft`, `orgaarea`, `homeName`, `holdingNum`, `roadName`, `village`, `postoffice`, `unione`, `thana`, `district`, `postcode`, `lasting_homeName`, `lasting_holdingNum`, `lasting_roadName`, `lasting_village`, `lasting_postoffice`, `lasting_unione`, `lasting_thana`, `lasting_district`, `lasting_postcode`, `father_name`, `fa_occupation`, `fa_monthly_income`, `fa_edu_quli`, `fa_phone`, `fa_email`, `fa_nid`, `mother_name`, `ma_occupation`, `ma_monthly_income`, `ma_edu_quli`, `ma_phone`, `ma_email`, `ma_nid`, `marriage_person`, `marriage_occu`, `marriage_date`, `marriage_edu_quali`, `marriage_mobile`, `marriage_email`, `children`, `image`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, 'ছেলে', 'সবুজ ইসলাম ', 'শিক্ষক', 'শিক্ষকতা ', 'বিএসসি ', 'আইটি ', '1999-03-21', '1990-01-23', '2323', '1999-08-23', '1899-04-12', 'A+', 'ইসলাম', 'shobuj@gmail.com', '238929038934893489348', 'bogra school', 'don\'t know', 'bogra school 343334444', 'sa', '3490', '34', 'bogra', 'bora', 'bogra', 'bogra ', 'bogra', '3409', 'SA', '3434', '232', 'munglishpur', 'munglishpur', 'munglishpur', 'dinajpur', 'dinajpur', 'dinajpur', 'kabir', 'business', '3333.44 tk', 'bsc', '30493049', 'kabir@gmail.com', '0343040349340903', 'momena', 'housewife', '00.00 tk', 'ssc', '03430943940', 'momena@gmail.com', '340939403409', 'masuma', 'student', '1998-03-24', 'ssc', '09343049', 'masuma@gmail.com', 'সবাই লেখা পড়া ', '536b177319.jpg', '2017-11-27 16:30:15.653201', '2017-11-30 11:21:34.000000', NULL, 1),
(2, 'ছেলে', 'আনিসুর রহমান ', 'প্রধান শিক্ষক', 'সহকারী শিক্ষক ', 'এমএসসি ', 'রসায়ন ', '1223-03-12', '1998-02-21', '434', '3409-03-23', '3422-03-23', 'A+', 'ইসলাম', 'sho@gmial.com', '230304304', 'বগুড়া ', 'বগুড়া ', 'বগুড়া ', 'monjil', '34', '3434', 'bogra', 'bogra', 'bogra', 'bogra', 'bogra', '3490', 'SA', '23', '34', 'bogra', 'bogra', 'bogra', 'bogra', 'bogra', 'bogra', 'kabir', 'bussines', '3434 tk', 'ssc', '09493849849', 'asd@gmaol.com', '3049304948884', 'momena begum', 'house wife', '00.00 tk', 'ssc', '0234930493049', 'sldfj@gmail.com', '3409394839408934893489348', 'নাই ', 'নাই ', '0349-03-23', 'নাই ', '34093043049043', 'sh@gmail.com', 'সবাই সরকারি চাকুরীজীবি ', 'fc95c65fec.jpg', '2017-11-27 16:34:29.397242', '2017-11-30 11:25:48.000000', NULL, 1),
(3, 'ছেলে', 'আকাশ ', 'প্রধান শিক্ষক', 'শিক্ষকতা ', 'বিএসসি ', 'আইটি ', '1999-02-12', '1222-02-12', '২৩২৩', '1998-05-23', '19991-02-23', 'A+', 'ইসলাম', 'akash@gmail.com', '২০৩৯৩০৪০২৯৩৪৩০৯৪০৩৪০৩৪', 'দিনাজপুর ', 'জানি না ', 'দিনাজপুর সদর ৩৯৪০৩৯৮৪৯৩৮৪', 'মঞ্জিল ', '৩৪', '৩৪', 'বগুড়া ', 'বগুড়া ', 'বগুড়া ', 'বগুড়া ', 'বগুড়া  ', 'বগুড়া ', 'ম্যানসন ', '৩০', '৩৯৪৮', 'বগুড়া ', 'বগুড়া ', 'বগুড়া ', 'বগুড়া ', 'বগুড়া ', '৩৯৪৮', 'ভোলা ', 'চাকুরীজীবি ', '২২৩২৩', 'বিএসসি ', '০২৩৯৪০৩৪', 'vola@gmail.com', '০৩৯৪০৩৪৯৩০৪', 'আমেনা ', 'গৃহিনী ', '০০.০০ টাকা ', 'এসএসসি ', '৩০৪৩০৪৯০৩৪৯', 'amena@gmail.com', '০২৩৯৪৩০৪৩৯৮৪৯৩৪৯৩৪', 'মাসুমা ', 'ছাত্র ', '3434-03-12', 'এসএসসি ', '৩০৪৯৩০৪৯৩০৪৯', 'masuma@gmail.com', 'সবাই লেখা পড়া করে ', '0ab65553b0.jpg', '2017-11-29 15:55:22.060412', NULL, NULL, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barcode`
--
ALTER TABLE `barcode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `input`
--
ALTER TABLE `input`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marksheet`
--
ALTER TABLE `marksheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stu_reinfo`
--
ALTER TABLE `stu_reinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_data`
--
ALTER TABLE `teacher_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barcode`
--
ALTER TABLE `barcode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `input`
--
ALTER TABLE `input`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `marksheet`
--
ALTER TABLE `marksheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `stu_reinfo`
--
ALTER TABLE `stu_reinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `teacher_data`
--
ALTER TABLE `teacher_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
