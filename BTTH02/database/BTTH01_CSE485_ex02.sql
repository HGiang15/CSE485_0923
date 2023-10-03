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


-- Dumping database structure for btth01_cse485
CREATE DATABASE IF NOT EXISTS `btth01_cse485` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `btth01_cse485`;

-- Dumping structure for table btth01_cse485.baiviet
CREATE TABLE IF NOT EXISTS `baiviet` (
  `ma_bviet` int(10) unsigned NOT NULL,
  `tieude` varchar(200) NOT NULL,
  `ten_bhat` varchar(100) NOT NULL,
  `ma_tloai` int(10) unsigned NOT NULL,
  `tomtat` text NOT NULL,
  `noidung` text DEFAULT NULL,
  `ma_tgia` int(10) unsigned NOT NULL,
  `ngayviet` datetime DEFAULT current_timestamp(),
  `hinhanh` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ma_bviet`),
  KEY `ma_tloai` (`ma_tloai`),
  KEY `ma_tgia` (`ma_tgia`),
  CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`ma_tloai`) REFERENCES `theloai` (`ma_tloai`),
  CONSTRAINT `baiviet_ibfk_2` FOREIGN KEY (`ma_tgia`) REFERENCES `tacgia` (`ma_tgia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table btth01_cse485.baiviet: ~5 rows (approximately)
INSERT INTO `baiviet` (`ma_bviet`, `tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`) VALUES
	(1, 'Bài viết 1', 'Bài hát 1', 1, 'Bài viết về bài hát 1', 'Nội dung bài viết 1', 1, '2023-09-22 21:28:33', 'baihat1.jpg'),
	(2, 'Bài viết 2', 'Bài hát 2', 2, 'Bài viết về bài hát 2', 'Nội dung bài viết 2', 1, '2023-09-22 21:28:33', 'baihat2.jpg'),
	(3, 'Bài viết 3', 'Bài hát 3', 1, 'Bài viết về bài hát 3', 'Nội dung bài viết 3', 2, '2023-09-22 21:28:33', 'baihat3.jpg'),
	(4, 'Bài viết 4', 'Bài hát 4', 3, 'Bài viết về bài hát 4', 'Nội dung bài viết 4', 2, '2023-09-22 21:28:33', 'baihat4.jpg'),
	(5, 'Bài viết 5', 'Bài hát 5', 2, 'Bài viết về bài hát 5', 'Nội dung bài viết 5', 3, '2023-09-22 21:28:33', NULL);

-- Dumping structure for table btth01_cse485.tacgia
CREATE TABLE IF NOT EXISTS `tacgia` (
  `ma_tgia` int(10) unsigned NOT NULL,
  `ten_tgia` varchar(100) NOT NULL,
  `hinh_tgia` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ma_tgia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table btth01_cse485.tacgia: ~3 rows (approximately)
INSERT INTO `tacgia` (`ma_tgia`, `ten_tgia`, `hinh_tgia`) VALUES
	(1, 'Nhacvietplus', 'nhacvietplus.jpg'),
	(2, 'Trinh Công Sơn', 'trinh_cong_son.jpg'),
	(3, 'Phan Mạnh Quỳnh', NULL);

-- Dumping structure for table btth01_cse485.theloai
CREATE TABLE IF NOT EXISTS `theloai` (
  `ma_tloai` int(10) unsigned NOT NULL,
  `ten_tloai` varchar(50) NOT NULL,
  PRIMARY KEY (`ma_tloai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table btth01_cse485.theloai: ~3 rows (approximately)
INSERT INTO `theloai` (`ma_tloai`, `ten_tloai`) VALUES
	(1, 'Nhạc trữ tình'),
	(2, 'Nhạc pop'),
	(3, 'Nhạc rap');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
