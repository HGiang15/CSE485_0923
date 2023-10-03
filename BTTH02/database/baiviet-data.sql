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

-- Dumping data for table btth01_cse485.baiviet: ~5 rows (approximately)
INSERT INTO `baiviet` (`ma_bviet`, `tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`) VALUES
	(1, 'Bài viết 1', 'Bài hát 1', 1, 'Bài viết về bài hát 1', 'Nội dung bài viết 1', 1, '2023-09-22 21:28:33', 'baihat1.jpg'),
	(2, 'Bài viết 2', 'Bài hát 2', 2, 'Bài viết về bài hát 2', 'Nội dung bài viết 2', 1, '2023-09-22 21:28:33', 'baihat2.jpg'),
	(3, 'Bài viết 3', 'Bài hát 3', 1, 'Bài viết về bài hát 3', 'Nội dung bài viết 3', 2, '2023-09-22 21:28:33', 'baihat3.jpg'),
	(4, 'Bài viết 4', 'Bài hát 4', 3, 'Bài viết về bài hát 4', 'Nội dung bài viết 4', 2, '2023-09-22 21:28:33', 'baihat4.jpg'),
	(5, 'Bài viết 5', 'Bài hát 5', 2, 'Bài viết về bài hát 5', 'Nội dung bài viết 5', 3, '2023-09-22 21:28:33', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
