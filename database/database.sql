
# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.35)
# Database: little_paws
# Generation Time: 2018-08-11 16:18:04 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table likes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `likes`;

CREATE TABLE `likes` (
  `id` int(11) NOT NULL DEFAULT '0',
  `liker` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table messages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `message` varchar(3000) NOT NULL,
  `from_id` varchar(45) NOT NULL,
  `to_id` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL,
  `seen` binary(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



# Dump of table posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `content` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `likes` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;

INSERT INTO `posts` (`id`, `user_id`, `content`, `created_at`, `updated_at`, `likes`)
VALUES
	(95,15,'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','2018-08-09 18:49:26','2018-08-09 18:49:26',0),
	(96,15,'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2018-08-09 18:50:03','2018-08-09 18:50:03',0),
	(97,15,'Et tortor at risus viverra adipiscing. Vitae proin sagittis nisl rhoncus mattis. Id ornare arcu odio ut sem. Pharetra convallis posuere morbi leo urna. \r\n\r\nAmet consectetur adipiscing elit pellentesque habitant. Turpis massa tincidunt dui ut ornare. Amet tellus cras adipiscing enim eu. Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at. Iaculis eu non diam phasellus vestibulum lorem sed risus. Odio facilisis mauris sit amet massa vitae tortor condimentum lacinia. ','2018-08-09 18:50:14','2018-08-09 18:50:14',0),
	(101,15,'Augue eget arcu dictum varius duis at consectetur lorem. Aliquam ultrices sagittis orci a scelerisque.','2018-08-09 18:52:21','2018-08-09 18:52:21',0),
	(105,16,'Est diam fusce nam curabitur congue integer parturient eros proin massa mus lectus non quam metus, eu id augue nascetur ultricies nibh in purus imperdiet felis rutrum cras ac sodales. Duis leo metus pretium lobortis donec semper blandit phasellus orci viverra, netus ad cras aliquet lacinia tortor purus porttitor consequat, quis maecenas morbi odio vehicula malesuada fringilla nulla varius. Fusce mus nisl lacus diam nisi non hendrerit, tempor rhoncus nec proin sed urna etiam, molestie nunc aliquet primis blandit inceptos.','2018-08-09 20:16:44','2018-08-09 20:16:44',0);

/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT '',
  `profilephoto` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `profilephoto`)
VALUES
	(1,'Nombre 1','user1','user1@gmail.com','5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8',NULL),
	(2,'Nombre 2','user2','user2@gmail.com','5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8',NULL),
	(3,'Nombre 3','user3','user3@gmail.com','5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8',NULL),
	(4,'Nombre 4','user4','user4@gmail.com','5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8',NULL),
	(5,'Nombre 5','user5','user5@gmail.com','5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8',NULL),
	(6,'Nombre 6','user6','user6@gmail.com','5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8',NULL),
	(14,'Melu','melufranco','melina.f@nnido.com.ar','$2y$10$zJze8CxUm/TRaoLtyVdZeebSqRnZCKnCncP25w87pEhM63N80aEt.',NULL),
	(15,'Melina','melfranco','melu.franco@gmail.com','$2y$10$fOt5kHuX2siU9VlxMZKNl.DDejPd1yBexzuDbwKNGR9Yykx5zmcUS',NULL),
	(16,'Sparky','sparky','sparky@mail.com','$2y$10$TqVDj1zlTfGc02j/.nrU.OP5OIFaV76oBdUSIB4UT3XtzlgqKYP7S',NULL);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
