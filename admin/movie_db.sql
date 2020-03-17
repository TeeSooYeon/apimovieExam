-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.38-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for test
CREATE DATABASE IF NOT EXISTS `test` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `test`;

-- Dumping structure for table test.tbl_admin
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(50) NOT NULL DEFAULT '',
  `admin_pass` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3002 DEFAULT CHARSET=latin1;

-- Dumping data for table test.tbl_admin: 1 rows
/*!40000 ALTER TABLE `tbl_admin` DISABLE KEYS */;
INSERT INTO `tbl_admin` (`admin_id`, `admin_username`, `admin_pass`) VALUES
	(3001, 'admin', '827ccb0eea8a706c4c34a16891f84e7b');
/*!40000 ALTER TABLE `tbl_admin` ENABLE KEYS */;

-- Dumping structure for table test.tbl_genre
CREATE TABLE IF NOT EXISTS `tbl_genre` (
  `gen_id` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `gen_name` varchar(50) NOT NULL DEFAULT '',
  `gen_desc` varchar(180) NOT NULL DEFAULT '',
  PRIMARY KEY (`gen_id`)
) ENGINE=MyISAM AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

-- Dumping data for table test.tbl_genre: 11 rows
/*!40000 ALTER TABLE `tbl_genre` DISABLE KEYS */;
INSERT INTO `tbl_genre` (`gen_id`, `gen_name`, `gen_desc`) VALUES
	(101, 'Action', 'Epic fight scenes and explosive effects!'),
	(102, 'Horror', 'A scary vibe for you!'),
	(103, 'Crime', 'The good guys and the bad guys.'),
	(104, 'Romance', 'Time to break or heal hearts.'),
	(105, 'Fantasy', 'Super fictional world with super wonders!'),
	(106, 'History', 'Based on real historic events.'),
	(107, 'Comedy', 'Laugh till you cant breathe!'),
	(108, 'Animation', '2D moving art at its finest.'),
	(109, 'Sci-Fi', 'Human fictional science at its peak.'),
	(110, 'Drama', 'Something to watch if you\'re feeling it'),
	(111, 'War', 'The eerie feeling and atmosphere of human conflicts.');
/*!40000 ALTER TABLE `tbl_genre` ENABLE KEYS */;

-- Dumping structure for table test.tbl_movies
CREATE TABLE IF NOT EXISTS `tbl_movies` (
  `mov_id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `mov_name` varchar(180) NOT NULL DEFAULT '',
  `mov_gen` varchar(50) NOT NULL DEFAULT '',
  `mov_price` decimal(3,0) NOT NULL DEFAULT '0',
  `mov_desc` varchar(300) NOT NULL DEFAULT '',
  `mov_year` year(4) NOT NULL DEFAULT '0000',
  PRIMARY KEY (`mov_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2009 DEFAULT CHARSET=latin1;

-- Dumping data for table test.tbl_movies: 7 rows
/*!40000 ALTER TABLE `tbl_movies` DISABLE KEYS */;
INSERT INTO `tbl_movies` (`mov_id`, `mov_name`, `mov_gen`, `mov_price`, `mov_desc`, `mov_year`) VALUES
	(2001, 'Black Mirror: Bandersnatch', 'Sci-Fi', 200, 'Programmer losses his sh*t of trying to figure out why there is an error on line 69 and thus beguns to question life itself. To make matters worse he uses Notepad++ and Internet Explorer.                        ', '2018'),
	(2002, 'Black Mirror: Nosedive', 'Drama', 160, 'Female social media user attempts to earn discount by getting higher stars. It doesn\'t turn out as it expected.', '2018'),
	(2003, 'Black Mirror: Smithereens', 'Drama', 160, 'Uber driver goes bananas and tries to contact CEO of a social media platform to say his last will before shooting himself.', '2019'),
	(2004, 'A Silent Voice', 'Romance', 180, 'Boy bullies handicapped girl ang gets karma. Now the bully becomes the bullied.                 ', '2017'),
	(2005, 'Emergence', 'Animation', 69, 'Girl tries to fit into society but society fails her.                               ', '2017'),
	(2006, 'Apex Legends', 'Action', 420, 'Main protagonist Caustic wrecks havoc in the match as he deploys the independent variable. Meanwhile other legends struggle to survive the weapon and skill nerfs. The road to Apex Predator is at hand!            ', '2019'),
	(2008, '1917', 'War', 220, 'Two blokes on a mission to pass the message to a battalion to stop the attack before they get baited by the Germans.', '2019');
/*!40000 ALTER TABLE `tbl_movies` ENABLE KEYS */;

-- Dumping structure for table test.tbl_users
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `user_fname` varchar(50) NOT NULL DEFAULT '',
  `user_lname` varchar(50) NOT NULL DEFAULT '',
  `user_email` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9001 DEFAULT CHARSET=latin1;

-- Dumping data for table test.tbl_users: 0 rows
/*!40000 ALTER TABLE `tbl_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
