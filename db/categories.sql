-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for nazmart
DROP DATABASE IF EXISTS `nazmart`;
CREATE DATABASE IF NOT EXISTS `nazmart` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `nazmart`;

-- Dumping structure for table nazmart.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image_id` bigint unsigned DEFAULT NULL,
  `status_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table nazmart.categories: ~14 rows (approximately)
INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image_id`, `status_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Portfolio', 'portfolio', NULL, NULL, NULL, NULL, NULL, NULL),
	(2, 'Agency', 'agency', NULL, NULL, NULL, NULL, NULL, NULL),
	(3, 'Article', 'article', NULL, NULL, NULL, NULL, NULL, NULL),
	(4, 'Barber Shop', 'barber-shop', NULL, NULL, NULL, NULL, NULL, NULL),
	(5, 'Construction', 'construction', NULL, NULL, NULL, NULL, NULL, NULL),
	(6, 'Donation', 'donation', NULL, NULL, NULL, NULL, NULL, NULL),
	(7, 'Consultancy', 'consultancy', NULL, NULL, NULL, NULL, NULL, NULL),
	(8, 'Event ', 'event', NULL, NULL, NULL, NULL, NULL, NULL),
	(9, 'Job Find', 'job-find', NULL, NULL, NULL, NULL, NULL, NULL),
	(10, 'Newspaper', 'newspaper', NULL, NULL, NULL, NULL, NULL, NULL),
	(11, 'PhotoGraphy', 'photography', NULL, NULL, NULL, NULL, NULL, NULL),
	(12, 'business', 'Business', NULL, NULL, NULL, NULL, NULL, NULL),
	(13, 'Support', 'support', NULL, NULL, NULL, NULL, NULL, NULL),
	(14, 'Weddings', 'weddings', NULL, NULL, NULL, NULL, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
