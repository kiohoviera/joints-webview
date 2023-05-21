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

-- Dumping structure for table joints.detections
CREATE TABLE IF NOT EXISTS `detections` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `angle` float DEFAULT NULL,
  `velocity` float DEFAULT NULL,
  `min_angle` float DEFAULT NULL,
  `max_angle` float DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `reference` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table joints.detections: ~17 rows (approximately)
INSERT INTO `detections` (`id`, `angle`, `velocity`, `min_angle`, `max_angle`, `position`, `remarks`, `created_at`, `updated_at`, `reference`) VALUES
	(1, 90, 0, NULL, NULL, 'left', NULL, '2023-04-30 20:40:45', '2023-04-30 20:40:45', NULL),
	(6, 90, 0, NULL, NULL, 'left', NULL, '2023-04-30 20:42:03', '2023-04-30 20:42:03', '001'),
	(7, 10, 0, NULL, NULL, 'left', NULL, '2023-04-30 20:42:06', '2023-04-30 20:42:06', '001'),
	(8, 15, 0, NULL, NULL, 'left', NULL, '2023-04-30 20:42:11', '2023-04-30 20:42:11', '001'),
	(9, 120, 0, NULL, NULL, 'left', NULL, '2023-04-30 20:42:16', '2023-04-30 20:42:16', '001'),
	(10, 120, 0, NULL, NULL, 'left', NULL, '2023-04-30 20:42:16', '2023-04-30 20:42:16', '001'),
	(11, 120, 0, NULL, NULL, 'left', NULL, '2023-04-30 20:42:17', '2023-04-30 20:42:17', '001'),
	(12, 90, 0, NULL, NULL, 'left', NULL, '2023-04-30 21:10:56', '2023-04-30 21:10:56', '001'),
	(13, 130, 0, NULL, NULL, 'left', NULL, '2023-04-30 21:12:43', '2023-04-30 21:12:43', '001'),
	(14, 130, 0, 10, 130, 'left', NULL, '2023-04-30 21:14:06', '2023-04-30 21:14:06', '001'),
	(15, 1, 0, 1, 130, 'left', NULL, '2023-04-30 21:14:30', '2023-04-30 21:14:30', '001'),
	(16, 20, 0, 1, 130, 'left', NULL, '2023-04-30 21:14:51', '2023-04-30 21:14:51', '001'),
	(17, 50, 0, 1, 130, 'left', NULL, '2023-04-30 21:43:00', '2023-04-30 21:43:00', '001'),
	(18, 120, 0, 1, 130, 'left', NULL, '2023-04-30 21:43:06', '2023-04-30 21:43:06', '001'),
	(19, 0, 0, 0, 130, 'left', NULL, '2023-04-30 22:08:13', '2023-04-30 22:08:13', '001'),
	(20, 90, 0, 0, 130, 'left', NULL, '2023-04-30 23:30:09', '2023-04-30 23:30:09', '001'),
	(21, 0, 0, 0, 130, 'left', NULL, '2023-04-30 23:30:15', '2023-04-30 23:30:15', '001'),
	(22, 120, 0, 0, 130, 'left', NULL, '2023-04-30 23:39:31', '2023-04-30 23:39:31', '001'),
	(23, -3, 0, -3, 130, 'left', NULL, '2023-04-30 23:39:51', '2023-04-30 23:39:51', '001'),
	(24, -3, 0, -3, 130, 'left', NULL, '2023-04-30 23:43:45', '2023-04-30 23:43:45', '001');

-- Dumping structure for table joints.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table joints.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table joints.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table joints.migrations: ~0 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_05_01_023421_create_detections_table', 1);

-- Dumping structure for table joints.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table joints.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table joints.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table joints.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table joints.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table joints.users: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
