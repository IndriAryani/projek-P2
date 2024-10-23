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


-- Dumping database structure for event
DROP DATABASE IF EXISTS `event`;
CREATE DATABASE IF NOT EXISTS `event` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `event`;

-- Dumping structure for table event.jns_lomba
DROP TABLE IF EXISTS `jns_lomba`;
CREATE TABLE IF NOT EXISTS `jns_lomba` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_lomba` varchar(256) DEFAULT NULL,
  `penyelenggara` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table event.jns_lomba: ~3 rows (approximately)
DELETE FROM `jns_lomba`;
INSERT INTO `jns_lomba` (`id`, `nama_lomba`, `penyelenggara`) VALUES
	(1, 'Lomba Balap Sarung', 'Kesiswaan SMKSA'),
	(2, 'Lomba Ciluk Baa', 'Sarik'),
	(3, 'Lomba Cukurukuk', 'Niyuhu');

-- Dumping structure for table event.pendaftaran
DROP TABLE IF EXISTS `pendaftaran`;
CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_lomba` int DEFAULT NULL,
  `nama_pendaftar` varchar(256) DEFAULT NULL,
  `kelas` varchar(256) DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `tgl_daftar` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table event.pendaftaran: ~1 rows (approximately)
DELETE FROM `pendaftaran`;
INSERT INTO `pendaftaran` (`id`, `id_lomba`, `nama_pendaftar`, `kelas`, `no_hp`, `tgl_daftar`) VALUES
	(6, 1, 'niyuhu', 'XII PPLG 1', '0812345', '2024-10-23');

-- Dumping structure for table event.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(256) DEFAULT NULL,
  `username` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table event.user: ~4 rows (approximately)
DELETE FROM `user`;
INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
	(4, 'joshua', '001', '111'),
	(5, 'indri', '2', '$2y$10$/sOWh3IXciO2eB9jEF7keuZ2mY7upSQPelnAFFU3cqZ4c8BfWN4aq'),
	(6, 'Admin', 'admin', '$2y$10$CkaDWaWZbsL2gH3z.53EW.QJaZw.sSOpijpBGsnbUUu7n9eEL3et6'),
	(7, 'admin', 'admin', '$2y$10$R4VrXEcmvrsGCUIGZZftpOb3AXmwQ5x9eODGR4MFp34xbx80xxho6');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
