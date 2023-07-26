-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando datos para la tabla comite.failed_jobs: ~0 rows (aproximadamente)

-- Volcando datos para la tabla comite.migrations: ~7 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2014_10_12_100000_create_password_resets_table', 1),
	(4, '2019_08_19_000000_create_failed_jobs_table', 1),
	(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(6, '2023_07_25_164211_create_permission_tables', 1),
	(7, '2023_07_25_164454_create_products_table', 1);

-- Volcando datos para la tabla comite.model_has_permissions: ~0 rows (aproximadamente)

-- Volcando datos para la tabla comite.model_has_roles: ~3 rows (aproximadamente)
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1),
	(2, 'App\\Models\\User', 2),
	(1, 'App\\Models\\User', 3);

-- Volcando datos para la tabla comite.password_resets: ~0 rows (aproximadamente)

-- Volcando datos para la tabla comite.password_reset_tokens: ~0 rows (aproximadamente)

-- Volcando datos para la tabla comite.permissions: ~8 rows (aproximadamente)
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'role-list', 'web', '2023-07-26 23:39:18', '2023-07-26 23:39:18'),
	(2, 'role-create', 'web', '2023-07-26 23:39:18', '2023-07-26 23:39:18'),
	(3, 'role-edit', 'web', '2023-07-26 23:39:18', '2023-07-26 23:39:18'),
	(4, 'role-delete', 'web', '2023-07-26 23:39:18', '2023-07-26 23:39:18'),
	(5, 'product-list', 'web', '2023-07-26 23:39:18', '2023-07-26 23:39:18'),
	(6, 'product-create', 'web', '2023-07-26 23:39:18', '2023-07-26 23:39:18'),
	(7, 'product-edit', 'web', '2023-07-26 23:39:18', '2023-07-26 23:39:18'),
	(8, 'product-delete', 'web', '2023-07-26 23:39:18', '2023-07-26 23:39:18');

-- Volcando datos para la tabla comite.personal_access_tokens: ~0 rows (aproximadamente)

-- Volcando datos para la tabla comite.products: ~1 rows (aproximadamente)
INSERT INTO `products` (`id`, `name`, `detail`, `created_at`, `updated_at`) VALUES
	(1, 'Arroz', 'Arroz fibroso', '2023-07-26 23:47:17', '2023-07-26 23:47:17');

-- Volcando datos para la tabla comite.roles: ~2 rows (aproximadamente)
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'web', '2023-07-26 23:41:01', '2023-07-26 23:41:01'),
	(2, 'Aprendiz', 'web', '2023-07-26 23:46:32', '2023-07-26 23:46:32');

-- Volcando datos para la tabla comite.role_has_permissions: ~9 rows (aproximadamente)
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(1, 1),
	(2, 1),
	(3, 1),
	(4, 1),
	(5, 1),
	(6, 1),
	(7, 1),
	(8, 1),
	(5, 2);

-- Volcando datos para la tabla comite.users: ~3 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'LaravelTuts', 'admin@laraveltuts.com', NULL, '$2y$10$50emhqROY1yEc3NPXLPJ7.wyZ6VytElkjRN0YGvHISyf1I01Qadi.', '6TuJoZcQn7xbmWTkaHLHJEP04sxp3RNNCrCOjussPGqx61B0PypPRbJy3kBQ', '2023-07-26 23:41:01', '2023-07-26 23:41:01'),
	(2, 'Rosa', 'ro@gmail.com', NULL, '$2y$10$FmBSp2ofblVzmPRyvhKqJuXBNagSCJxF67aBA1cssEBQBvqeMaUsC', NULL, '2023-07-26 23:46:52', '2023-07-26 23:46:52'),
	(3, 'Pedro', 'p@gmail.com', NULL, '$2y$10$Vgn02tHFhTiNmrPEFwDUuO0tnQL7WCS/ElCx2j97xTBV/V/b004Vm', NULL, '2023-07-26 23:48:15', '2023-07-26 23:48:15');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
