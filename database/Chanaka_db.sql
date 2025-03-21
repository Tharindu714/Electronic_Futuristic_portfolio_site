-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.32 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for chanaka_electro_new
CREATE DATABASE IF NOT EXISTS `chanaka_electro_new` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `chanaka_electro_new`;

-- Dumping structure for table chanaka_electro_new.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(60) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `verification_code` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Dumping data for table chanaka_electro_new.admin: ~2 rows (approximately)
REPLACE INTO `admin` (`email`, `fname`, `lname`, `verification_code`) VALUES
	('chanakaelectro1968@gmail.com', 'Chanaka', 'Sanjeewa', '64f30b20d6c41'),
	('chanakaelectro@gmail.com', 'Chanaka', 'Electronics', '6551c369ee134'),
	('tharinduchanaka6@gmail.com', 'Tharindu', 'Chanaka', '657ac1a12d757');

-- Dumping structure for table chanaka_electro_new.amp_photo
CREATE TABLE IF NOT EXISTS `amp_photo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(170) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table chanaka_electro_new.amp_photo: ~0 rows (approximately)

-- Dumping structure for table chanaka_electro_new.audio
CREATE TABLE IF NOT EXISTS `audio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(170) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table chanaka_electro_new.audio: ~8 rows (approximately)
REPLACE INTO `audio` (`id`, `code`) VALUES
	(2, 'resource//gallery//0_64f47cd36c971.jpeg'),
	(3, 'resource//gallery//1_64f47cd36e2fe.jpeg'),
	(4, 'resource//gallery//2_64f47cd36f216.jpeg'),
	(5, 'resource//gallery//0_64f47d30e3be9.jpeg'),
	(6, 'resource//gallery//1_64f47d30e5eb6.jpeg'),
	(7, 'resource//gallery//2_64f47d30e72c6.jpeg'),
	(8, 'resource//gallery//0_64f5e18736fa2.jpeg'),
	(9, 'resource//gallery//1_64f5e1873a3fd.jpeg'),
	(10, 'resource//gallery//0_64f5e2642aa9f.jpeg');

-- Dumping structure for table chanaka_electro_new.feedback
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `feedback` char(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT '0',
  `email` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table chanaka_electro_new.feedback: ~4 rows (approximately)
REPLACE INTO `feedback` (`id`, `user_name`, `feedback`, `email`) VALUES
	(3, 'Tharindu Chanaka ', 'I am really glad about the service! Keep it up Chanaka Electronics!', 'tharinduchanaka6@gmail.com'),
	(4, 'Chanaka Sanjeewa', 'I am really glad about the service! Keep it up Chanaka Electronics!', 'chanakaelectro@gmail.com'),
	(5, 'Tharindu Chanaka ', 'really good service', 'tharinduchanaka6@gmail.com'),
	(6, 'Sahan Perera', 'Good service', 'sahana@gmail.com'),
	(7, 'Tharindu Chanaka ', 'it is really amazing experince', 'tharinduchanaka6@gmail.com');

-- Dumping structure for table chanaka_electro_new.led
CREATE TABLE IF NOT EXISTS `led` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(170) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table chanaka_electro_new.led: ~2 rows (approximately)
REPLACE INTO `led` (`id`, `code`) VALUES
	(2, 'resource//gallery//0_64f5e03b8075f.jpeg'),
	(3, 'resource//gallery//1_64f5e03b8465e.jpeg'),
	(4, 'resource//gallery//2_64f5e03b86341.jpeg');

-- Dumping structure for table chanaka_electro_new.other
CREATE TABLE IF NOT EXISTS `other` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(170) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table chanaka_electro_new.other: ~3 rows (approximately)
REPLACE INTO `other` (`id`, `code`) VALUES
	(23, 'resource//gallery//0_64f5dc4d480c8.jpeg'),
	(24, 'resource//gallery//1_64f5dc4d4bac7.jpeg'),
	(25, 'resource//gallery//0_64f5deaacdbe8.jpeg');

-- Dumping structure for table chanaka_electro_new.portfolio
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Satisfied_Customer` int NOT NULL,
  `Succesful_Repairs` int NOT NULL,
  `Innovative_products` int NOT NULL,
  `YearOf_Exp` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table chanaka_electro_new.portfolio: ~0 rows (approximately)
REPLACE INTO `portfolio` (`id`, `Satisfied_Customer`, `Succesful_Repairs`, `Innovative_products`, `YearOf_Exp`) VALUES
	(1, 4500, 2600, 250, 32);

-- Dumping structure for table chanaka_electro_new.yt
CREATE TABLE IF NOT EXISTS `yt` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(170) NOT NULL,
  `link` char(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

-- Dumping data for table chanaka_electro_new.yt: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
