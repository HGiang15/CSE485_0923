-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               11.1.2-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for phongmach
CREATE DATABASE IF NOT EXISTS `phongmach` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `phongmach`;

-- Dumping structure for table phongmach.doctor
CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nameDoctor` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table phongmach.doctor: ~11 rows (approximately)
INSERT INTO `doctor` (`id`, `nameDoctor`, `department`) VALUES
	(2, 'Lyda MacArte', 'Khoa 2'),
	(3, 'Tera Ainge', 'Khoa 3'),
	(4, 'Lowrance Ouchterlony', 'Khoa 4'),
	(5, 'Skyler Rigbye', 'Khoa 5'),
	(6, 'Kelsi Folling', 'Khoa 6'),
	(7, 'Kaleena Ham', 'Khoa 7'),
	(8, 'Alfy Gillice', 'Khoa 8'),
	(9, 'Deirdre Simpkin', 'Khoa 9'),
	(10, 'Grata Matelaitis', 'Khoa 10'),
	(13, 'Hoàng Giang', 'Khoa sản phụ');

-- Dumping structure for table phongmach.patient
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namePatient` varchar(255) NOT NULL,
  `dayHeal` date DEFAULT NULL,
  `symptom` text DEFAULT NULL,
  `idDoctor` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `patient_ibfk_1` (`idDoctor`),
  CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`idDoctor`) REFERENCES `doctor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table phongmach.patient: ~11 rows (approximately)
INSERT INTO `patient` (`id`, `namePatient`, `dayHeal`, `symptom`, `idDoctor`) VALUES
	(2, 'Orlando Cosin', '2023-06-18', 'mất ngủ', 2),
	(3, 'Elyse Labitt', '2023-08-13', 'đau đầu', 3),
	(4, 'Patric Zoane', '2023-07-24', 'ho khan', 4),
	(5, 'Gregorius Bestiman', '2023-09-04', 'đau chân', 5),
	(6, 'Francesco Dalgarnowch', '2023-09-09', 'tức ngực', 6),
	(7, 'Benedetta Hay', '2022-11-10', 'đau tay', 7),
	(8, 'Tuck Shaul', '2023-05-29', 'nhức vai', 8),
	(9, 'Vivyan McCotter', '2023-01-24', 'mỏi cơ', 9),
	(10, 'Conrado Schrir', '2023-07-04', 'thần kinh cao', 10),
	(13, 'Bùi Quang Đạo', '2003-05-12', 'Mệt mỏi', 13);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
