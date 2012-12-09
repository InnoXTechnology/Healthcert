-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2012 at 11:16 AM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `health_cert`
--
CREATE DATABASE `health_cert` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `health_cert`;

-- --------------------------------------------------------

--
-- Table structure for table `analyses`
--

CREATE TABLE `analyses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sample_id` int(11) NOT NULL,
  `analyzer` int(11) NOT NULL,
  `analysis_date` date NOT NULL,
  `method` varchar(100) NOT NULL,
  `result` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `approve` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `SampleID` (`sample_id`,`analyzer`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `analyses`
--

INSERT INTO `analyses` (`id`, `sample_id`, `analyzer`, `analysis_date`, `method`, `result`, `status`, `approve`) VALUES
(1, 1, 0, '2012-12-05', 'à¸ˆà¸¸à¸¥à¸´à¸™à¸—à¸£à¸µà¸¢à¹Œ', '700 mg', 'à¸œà¹ˆà¸²à¸™', 'à¸œà¹ˆà¸²à¸™'),
(2, 2, 0, '2012-12-05', 'à¸ˆà¸¸à¸¥à¸´à¸™à¸—à¸£à¸µà¸¢à¹Œ', 'OK', 'à¸œà¹ˆà¸²à¸™', 'à¸œà¹ˆà¸²à¸™'),
(3, 2, 0, '2012-12-05', 'à¸ªà¸²à¸£à¸•à¸à¸„à¹‰à¸²à¸‡', 'OK', 'à¸œà¹ˆà¸²à¸™', 'à¸œà¹ˆà¸²à¸™'),
(4, 3, 0, '2012-12-07', 'à¸ˆà¸¸à¸¥à¸´à¸™à¸—à¸£à¸µà¸¢à¹Œ', '600 mg', 'à¸œà¹ˆà¸²à¸™', 'à¸œà¹ˆà¸²à¸™'),
(5, 3, 0, '2012-12-07', 'à¸ˆà¸¸à¸¥à¸´à¸™à¸—à¸£à¸µà¸¢à¹Œ', '400 mg', 'à¹„à¸¡à¹ˆà¸œà¹ˆà¸²à¸™', 'à¸œà¹ˆà¸²à¸™'),
(6, 3, 0, '2012-12-07', 'à¸ªà¸²à¸£à¸•à¸à¸„à¹‰à¸²à¸‡', '100 mg', 'NOT SEEN', 'à¹„à¸¡à¹ˆà¸œà¹ˆà¸²à¸™');

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE `attachments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `request_id` int(11) NOT NULL,
  `date_issue` date NOT NULL,
  `date_expire` date NOT NULL,
  `sample_no` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `scientific_name` varchar(100) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `edit_exportdetails`
--

CREATE TABLE `edit_exportdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `receiver` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `receiver_addr` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ship_date` date NOT NULL,
  `lot_no` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `regis_no` varchar(100) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `edit_exportdetails`
--

INSERT INTO `edit_exportdetails` (`id`, `receiver`, `receiver_addr`, `ship_date`, `lot_no`, `regis_no`, `weight`) VALUES
(1, 'AAA IMPORT CO, LT _edit', 'xxxxxxxxxxx GERMAN _edit', '2008-12-02', 'HB-020220088', 'HB-020220088_edit', 24),
(2, 'AAA IMPORT CO, LT_Edit', 'xxxxxxxxxxx GERMAN_Edit', '2032-01-01', 'HB-020220088_Edit', 'HB-020220088_Edit', 17);

-- --------------------------------------------------------

--
-- Table structure for table `edit_packers`
--

CREATE TABLE `edit_packers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `postcode` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `edit_packers`
--

INSERT INTO `edit_packers` (`id`, `name`, `address`, `province`, `postcode`, `phone`, `fax`) VALUES
(1, 'AGRICULTRE PRODUCTS CO,_edit', '50 PAHOLYOTHIN RD. CHATUCHA _edit', 'à¸à¸£à¸°à¸šà¸µà¹ˆ', '109001', '02-94000001', '02-94000012'),
(2, 'AGRICULTRE PRODUCTS CO,. LT_Edit', '50 PAHOLYOTHIN RD. CHATUCHA_Edit', 'à¸à¸²à¸¬à¸ªà¸´à¸™à¸˜à¸¸à¹Œ', '109001_Edit', '02-94000001_Edit', '02-94000012_Edit');

-- --------------------------------------------------------

--
-- Table structure for table `edit_requests`
--

CREATE TABLE `edit_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exporter_id` int(11) NOT NULL,
  `exportdetail_id` int(11) NOT NULL,
  `packer_id` int(11) NOT NULL,
  `packingHouse_id` int(11) NOT NULL,
  `vehicle` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `exportation_date` date NOT NULL,
  `receipt_no` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `receipt_date` datetime NOT NULL,
  `receipt_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `testing_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_weight` int(11) NOT NULL,
  `product_value` int(11) NOT NULL,
  `gap_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cert_no` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `is_microorganisms` tinyint(1) NOT NULL,
  `is_harmful` tinyint(1) NOT NULL,
  `oldRequest_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `edit_requests`
--

INSERT INTO `edit_requests` (`id`, `exporter_id`, `exportdetail_id`, `packer_id`, `packingHouse_id`, `vehicle`, `exportation_date`, `receipt_no`, `receipt_date`, `receipt_name`, `date`, `testing_type`, `product_name`, `product_weight`, `product_value`, `gap_code`, `cert_no`, `status`, `is_microorganisms`, `is_harmful`, `oldRequest_id`) VALUES
(13, 1, 1, 1, 1, 'à¸šà¸', '0000-00-00', '2012 / 1', '2012-12-05 15:37:04', '', '0000-00-00', '', 'Holy basil (Ocimum sanciu_edit', 324, 20499, 'à¸à¸© 03-02-0000-0000-3122', '', 'à¹„à¸¡à¹ˆà¸­à¸™à¸¸à¸¡à¸±à¸•à¸´', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `exportdetails`
--

CREATE TABLE `exportdetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `receiver` varchar(100) NOT NULL,
  `receiver_addr` text NOT NULL,
  `ship_date` date NOT NULL,
  `lot_no` varchar(100) NOT NULL,
  `regis_no` varchar(100) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `exportdetails`
--

INSERT INTO `exportdetails` (`id`, `receiver`, `receiver_addr`, `ship_date`, `lot_no`, `regis_no`, `weight`) VALUES
(1, 'AAA IMPORT CO, LT', 'xxxxxxxxxxx GERMAN', '2008-12-02', 'HB-020220088', 'HB-020220088', 24),
(2, 'AAA IMPORT CO, LT\\', 'xxxxxxxxxxx GERMANY', '2009-10-01', 'HB-02022008', 'HB-02022008', 25),
(3, 'AAA IMPORT CO, LTD', 'xxxxxxxxxxx GERMANY', '2009-10-01', 'HB-02022008', 'HB-02022008', 25),
(4, 'AAA IMPORT CO, LTD', 'xxxxxxxxxxx GERMANY', '2009-10-01', 'HB-02022008', 'HB-02022008', 25),
(5, 'AAA IMPORT CO, LTD', 'xxxxxxxxxxx GERMANY', '2009-10-01', 'HB-02022008', 'HB-02022008', 25),
(6, 'AAA IMPORT CO, LTD', 'xxxxxxxxxxx GERMANY', '2009-10-01', 'HB-02022008', 'HB-02022008', 25),
(7, 'AAA IMPORT CO, LT', 'xxxxxxxxxxx GERMAN', '2008-12-02', 'HB-02022008', 'HB-02022008', 24),
(8, 'AAA IMPORT CO, LTD', 'xxxxxxxxxxx GERMANY', '2009-10-01', 'HB-02022008', 'HB-02022008', 25),
(9, 'AAA IMPORT CO, LTD', 'xxxxxxxxxxx GERMANY', '2009-10-01', 'HB-02022008', 'HB-02022008', 25),
(10, 'AAA IMPORT CO, LTD', 'xxxxxxxxxxx GERMANY', '2009-10-01', 'HB-02022008', 'HB-02022008', 25),
(11, 'AAA IMPORT CO, LT', 'xxxxxxxxxxx GERMAN', '2008-12-02', 'HB-020220088', 'HB-020220088', 24),
(12, 'AAA IMPORT CO, LT', 'xxxxxxxxxxx GERMAN', '2008-12-02', 'HB-020220088', 'HB-020220088', 24),
(13, 'AAA IMPORT CO, LT', 'xxxxxxxxxxx GERMAN', '2008-12-02', 'HB-020220088', '8HB-02022008', 24),
(14, 'AAA IMPORT CO, LT', 'xxxxxxxxxxx GERMAN', '2008-12-02', 'HB-020220088', 'HB-020220088', 24),
(15, 'AAA IMPORT CO, LT', 'Add', '2012-12-05', 'HB-020220088', '12312', 123),
(16, 'AAA IMPORT CO, LT', '21312we', '2012-12-05', 'HB-020220088', 'HB-02022008', 4);

-- --------------------------------------------------------

--
-- Table structure for table `exporters`
--

CREATE TABLE `exporters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `province` varchar(100) NOT NULL,
  `postcode` varchar(5) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `fax` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_card` varchar(255) DEFAULT NULL,
  `cert_corp` varchar(255) DEFAULT NULL,
  `id_corp` varchar(255) DEFAULT NULL,
  `app_letter` varchar(255) DEFAULT NULL,
  `id_card_dir` varchar(255) DEFAULT NULL,
  `cert_corp_dir` varchar(255) DEFAULT NULL,
  `id_corp_dir` varchar(255) DEFAULT NULL,
  `app_letter_dir` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `exporters`
--

INSERT INTO `exporters` (`id`, `user_id`, `name`, `address`, `province`, `postcode`, `phone`, `fax`, `email`, `id_card`, `cert_corp`, `id_corp`, `app_letter`, `id_card_dir`, `cert_corp_dir`, `id_corp_dir`, `app_letter_dir`) VALUES
(1, 1, 'Exporter Test', 'Address of Exporter', 'à¸à¸£à¸¸à¸‡à¹€à¸—à¸žà¸¡à¸«à¸²à¸™à¸„à¸£', '10900', '081999999999', '029999999999', 'w@gmail.com', '2012-04-07 13.33.41.png', '2012-04-07 13.33.44.png', '2012-04-07 13.33.47.png', '2012-04-07 13.33.51.png', '1', '1', '1', '1'),
(2, 5, 'exportername', 'adreess of exporter', 'à¸à¸²à¸à¸ˆà¸™à¸šà¸¸à¸£à¸µ', '13131', '089-2222222', '02-2222222', 'exporter@hotmail.com', 'fsjobs_more.jpeg', 'fsjobs_more.jpeg', 'fsjobs_more.jpeg', 'fsjobs_more.jpeg', '2', '2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `packers`
--

CREATE TABLE `packers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `province` varchar(100) NOT NULL,
  `postcode` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `fax` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `packers`
--

INSERT INTO `packers` (`id`, `name`, `address`, `province`, `postcode`, `phone`, `fax`) VALUES
(1, 'AGRICULTRE PRODUCTS CO,. LT', '50 PAHOLYOTHIN RD. CHATUCHA', 'à¸à¸£à¸°à¸šà¸µà¹ˆ', '109001', '02-94000001', '02-94000012'),
(2, 'AGRICULTRE PRODUCTS CO,. LT', '50 PAHOLYOTHIN RD. CHATUCHA', 'à¸à¸£à¸¸à¸‡à¹€à¸—à¸žà¸¡à¸«à¸²à¸™à¸„à¸£', '10900', '02-9400000', '02-9400001'),
(3, 'AGRICULTRE PRODUCTS CO,. LT', '50 PAHOLYOTHIN RD. CHATUCHA', 'à¸à¸£à¸°à¸šà¸µà¹ˆ', '10900', '02-9400000', '02-9400001'),
(4, 'AGRICULTRE PRODUCTS CO,. LT', '50 PAHOLYOTHIN RD. CHATUCHA', 'à¸à¸£à¸°à¸šà¸µà¹ˆ', '10900', '02-9400000', '02-9400001'),
(5, 'AGRICULTRE PRODUCTS CO,. LTD', '50 PAHOLYOTHIN RD. CHATUCHAK', 'à¸à¸£à¸¸à¸‡à¹€à¸—à¸žà¸¡à¸«à¸²à¸™à¸„à¸£', '10900', '02-9400000', '02-9400001'),
(6, 'AGRICULTRE PRODUCTS CO,. LTD', '50 PAHOLYOTHIN RD. CHATUCHAK', 'à¸à¸£à¸¸à¸‡à¹€à¸—à¸žà¸¡à¸«à¸²à¸™à¸„à¸£', '10900', '02-9400000', '02-9400001'),
(7, 'AGRICULTRE PRODUCTS CO,. L', '50 PAHOLYOTHIN RD. CHATUCHAK', 'à¸à¸£à¸¸à¸‡à¹€à¸—à¸žà¸¡à¸«à¸²à¸™à¸„à¸£', '10900', '02-9400000', '02-9400001'),
(8, 'AGRICULTRE PRODUCTS CO,. LTD', '50 PAHOLYOTHIN RD. CHATUCHAK', 'à¸à¸£à¸¸à¸‡à¹€à¸—à¸žà¸¡à¸«à¸²à¸™à¸„à¸£', '10900', '02-9400000', '02-9400001'),
(9, 'AGRICULTRE PRODUCTS CO,. L', '50 PAHOLYOTHIN RD. CHATUCHAK', 'à¸à¸£à¸¸à¸‡à¹€à¸—à¸žà¸¡à¸«à¸²à¸™à¸„à¸£', '10900', '02-9400000', '02-9400001'),
(10, 'AGRICULTRE PRODUCTS CO,. LTD', '50 PAHOLYOTHIN RD. CHATUCHAK', 'à¸à¸£à¸¸à¸‡à¹€à¸—à¸žà¸¡à¸«à¸²à¸™à¸„à¸£', '10900', '02-9400000', '02-9400001'),
(11, 'AGRICULTRE PRODUCTS CO,.', 'Packe', 'à¸à¸£à¸¸à¸‡à¹€à¸—à¸žà¸¡à¸«à¸²à¸™à¸„à¸£', '10900', '123123123', '02-94000012'),
(12, 'AGRICULTRE PRODUCTS CO,. LTD', 'Add', 'à¸Šà¸¸à¸¡à¸žà¸£', '109001', '123123', '1231213');

-- --------------------------------------------------------

--
-- Table structure for table `packinghouses`
--

CREATE TABLE `packinghouses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `packer_id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `province` varchar(255) NOT NULL,
  `postcode` varchar(5) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `fax` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `PackerID` (`packer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `packinghouses`
--

INSERT INTO `packinghouses` (`id`, `packer_id`, `address`, `province`, `postcode`, `phone`, `fax`) VALUES
(1, 1, 'AGRICULTRE PRODUCTS CO,. LTD, 50 PAHOLYOTHIN RD. CHATUCHA', 'à¸à¸£à¸°à¸šà¸µà¹ˆ', '10902', '02-94000001', '02-94000012'),
(2, 11, 'Test', 'à¸à¸£à¸¸à¸‡à¹€à¸—à¸žà¸¡à¸«à¸²à¸™à¸„à¸£', '10900', '1231231', '12312312'),
(3, 12, 'Test', 'à¸à¸£à¸¸à¸‡à¹€à¸—à¸žà¸¡à¸«à¸²à¸™à¸„à¸£', '10900', '123123', '141241');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exporter_id` int(11) NOT NULL,
  `exportdetail_id` int(11) NOT NULL,
  `packer_id` int(11) NOT NULL,
  `packingHouse_id` int(11) NOT NULL,
  `vehicle` varchar(100) NOT NULL,
  `exportation_date` date NOT NULL,
  `receipt_no` varchar(255) NOT NULL,
  `receipt_date` datetime NOT NULL,
  `receipt_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `testing_type` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_weight` int(11) NOT NULL,
  `product_value` int(11) NOT NULL,
  `gap_code` varchar(255) NOT NULL,
  `cert_no` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `status_final` varchar(100) NOT NULL,
  `is_microorganisms` tinyint(1) NOT NULL,
  `is_harmful` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ExporterID` (`exporter_id`,`packer_id`,`packingHouse_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `exporter_id`, `exportdetail_id`, `packer_id`, `packingHouse_id`, `vehicle`, `exportation_date`, `receipt_no`, `receipt_date`, `receipt_name`, `date`, `testing_type`, `product_name`, `product_weight`, `product_value`, `gap_code`, `cert_no`, `status`, `status_final`, `is_microorganisms`, `is_harmful`) VALUES
(1, 1, 1, 1, 1, 'à¸šà¸', '2012-12-05', '2012 / 1', '2012-11-18 21:03:43', '', '0000-00-00', '', 'Holy basil (Ocimum sanciu', 324, 20499, 'à¸à¸© 03-02-0000-0000-3122', '', 'à¸­à¸™à¸¸à¸¡à¸±à¸•à¸´', 'à¸­à¸™à¸¸à¸¡à¸±à¸•à¸´', 0, 1),
(2, 1, 15, 11, 2, 'à¸šà¸', '0000-00-00', '2012 / 2', '2012-12-05 20:00:21', '', '0000-00-00', '', 'Holy basil (Ocimum sancium)', 4, 2, 'à¸à¸© 03-02-0000-0000-3122', '', 'à¸­à¸™à¸¸à¸¡à¸±à¸•à¸´', 'à¸­à¸™à¸¸à¸¡à¸±à¸•à¸´', 1, 0),
(3, 1, 16, 12, 3, 'à¹€à¸£à¸·à¸­', '0000-00-00', '2012 / 3', '2012-12-05 20:28:16', '', '0000-00-00', '', 'Holy basil (Ocimum sanciu)', 21312, 31123, 'à¸à¸© 03-02-0000-0000-3122', '', 'à¸­à¸™à¸¸à¸¡à¸±à¸•à¸´', 'à¸­à¸™à¸¸à¸¡à¸±à¸•à¸´', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `samples`
--

CREATE TABLE `samples` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exporter_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `submit_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ExporterID` (`exporter_id`,`request_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `samples`
--

INSERT INTO `samples` (`id`, `exporter_id`, `request_id`, `description`, `state`, `submit_date`) VALUES
(1, 1, 2, 'WORK', 'OK', '2012-12-05'),
(2, 1, 3, 'T1', 'OK', '2012-12-05'),
(3, 1, 3, 'à¸à¸£à¸°à¹€à¸žà¸²à¸°', 'OK', '2012-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `type`) VALUES
(1, 'exporterTest', 'de00b44acf50cddb785c459f27bbfc79714502c7', 'E'),
(2, 'DOATest', '9ab908a52837079ff27f3eee76ca327f58fef220', 'D'),
(3, 'LabHeadTest', '21fcf20ca974c0fbab48a6d0da5b6c33dae12443', 'H'),
(4, 'LabTesterTest', '71d9275b756fbf7c1c38b210b03c1c94555ed0f0', 'T'),
(5, 'DOAStaff2Test', '3b371e23a93eb741d345fc0d6932c7ea5c7031c8', 'F'),
(6, 'DOAHeadTest', '769ada9903507d551899e34a7ddc4320c9bdd071', 'A');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
