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


-- Dumping database structure for cse
CREATE DATABASE IF NOT EXISTS `cse` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `cse`;

-- Dumping structure for table cse.users
CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `groupp` varchar(20) NOT NULL,
  `mobile` int(12) NOT NULL DEFAULT 0,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=203 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table cse.users: ~11 rows (approximately)
INSERT INTO `users` (`userid`, `username`, `email`, `gender`, `groupp`, `mobile`, `pass`) VALUES
	(198, 'Nguyen Dang Hoang Giang', 'hgiang@ygmail.com', 'Male', 'Admin', 398162589, 'giang123'),
	(199, 'Lorettalorna Woodroffe', 'lwoodroffe7@discuz.net', 'Male', 'Customer', 358162588, 'mP5*vBFj.M{&'),
	(200, 'Cedric Girvan', 'cgirvan8@lulu.com', 'Female', 'Customerr', 398162588, 'pY2<jC~(&'),
	(201, 'Terrell Flower', 'tflower9@redcross.org', 'Male', 'Customerr', 398169588, 'qV6}NxjoF,}@F_PK'),
	(202, 'Nguyen Duc Anh', 'da@gmail.com', 'Male', 'Customer', 398162577, 'da123fg'),
	(203, 'Bui Quang Dao', 'dao2003@gmail.com', 'Male', 'Customer', 974356232, 'dao2k3'),
	(204, 'Pham Quang Anh', 'qa@gmail.com', 'Male', 'Customer', 338245673, 'qa2003'),
	(205, 'Phung Thanh Do', 'do12@gmail.com', 'Male', 'Customer', 123456789, 'do85hehe'),
	(206, 'Nguyen Van Toan', 'toan2k3@gmail.com', 'Male', 'Customer', 23456983, 'toangnhanhgio'),
	(207, 'admin', 'admin@example.com', 'Female', 'Manager', 398162589, 'admin'),
	(208, 'Double Two T', 'double2@gmail.com', 'Male', 'Customer', 456734567, 'truongcon2');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
