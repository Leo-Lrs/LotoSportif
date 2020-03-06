-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.24 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Listage de la structure de la base pour loto_sportif
CREATE DATABASE IF NOT EXISTS `loto_sportif` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `loto_sportif`;

-- Listage de la structure de la table loto_sportif. equipe
CREATE TABLE IF NOT EXISTS `equipe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Listage des données de la table loto_sportif.equipe : ~7 rows (environ)
/*!40000 ALTER TABLE `equipe` DISABLE KEYS */;
INSERT INTO `equipe` (`id`, `nom`) VALUES
	(1, 'Manchester United'),
	(2, 'Liverpool'),
	(3, 'Marseille'),
	(4, 'Barcelone'),
	(5, 'Juventus'),
	(6, 'Real Madrid'),
	(7, 'Ajax Amsterdam');
/*!40000 ALTER TABLE `equipe` ENABLE KEYS */;

-- Listage de la structure de la table loto_sportif. matchs
CREATE TABLE IF NOT EXISTS `matchs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `eq1` int(11) NOT NULL DEFAULT '0',
  `eq2` int(11) NOT NULL DEFAULT '0',
  `dateMatch` date DEFAULT NULL,
  `result` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

-- Listage des données de la table loto_sportif.matchs : ~20 rows (environ)
/*!40000 ALTER TABLE `matchs` DISABLE KEYS */;
INSERT INTO `matchs` (`id`, `eq1`, `eq2`, `dateMatch`, `result`) VALUES
	(1, 1, 2, '2020-02-27', '1'),
	(2, 1, 3, '2020-02-29', '1'),
	(3, 1, 4, '2020-03-03', '1'),
	(4, 1, 5, '2020-02-17', '1'),
	(5, 1, 6, '2020-03-15', NULL),
	(6, 1, 7, '2020-03-14', NULL),
	(7, 2, 3, '2020-02-21', '2'),
	(8, 2, 4, '2020-02-22', '2'),
	(9, 2, 5, '2020-02-25', '2'),
	(10, 2, 6, '2020-03-10', NULL),
	(11, 3, 4, '2020-03-09', NULL),
	(12, 3, 5, '2020-03-05', 'N'),
	(13, 3, 6, '2020-03-04', '1'),
	(14, 3, 7, '2020-03-06', NULL),
	(15, 4, 5, '2020-03-02', '2'),
	(16, 4, 6, '2020-02-25', 'N'),
	(18, 4, 7, '2020-02-23', '1'),
	(19, 5, 6, '2020-02-26', 'N'),
	(20, 5, 7, '2020-02-21', '2'),
	(21, 6, 7, '2020-03-11', NULL);
/*!40000 ALTER TABLE `matchs` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
