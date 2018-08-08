

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table friendship
# ------------------------------------------------------------

DROP TABLE IF EXISTS `friendship`;

CREATE TABLE `friendship` (
  `user_one_id` int(10) unsigned NOT NULL,
  `user_two_id` int(10) unsigned NOT NULL,
  `status` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `action_user_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `unique_users_id` (`user_one_id`,`user_two_id`),
  KEY `user_two_id` (`user_two_id`),
  KEY `action_user_id` (`action_user_id`),
  CONSTRAINT `friendship_ibfk_1` FOREIGN KEY (`user_one_id`) REFERENCES `users` (`id`),
  CONSTRAINT `friendship_ibfk_2` FOREIGN KEY (`user_two_id`) REFERENCES `users` (`id`),
  CONSTRAINT `friendship_ibfk_3` FOREIGN KEY (`action_user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `friendship` WRITE;
/*!40000 ALTER TABLE `friendship` DISABLE KEYS */;

INSERT INTO `friendship` (`user_one_id`, `user_two_id`, `status`, `action_user_id`)
VALUES
	(1,2,0,1);

/*!40000 ALTER TABLE `friendship` ENABLE KEYS */;
UNLOCK TABLES;


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
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_time` datetime NOT NULL,
  `post_text` mediumtext NOT NULL,
  `tags` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id_UNIQUE` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

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
	(14,'Melu','melufranco','melina.f@nnido.com.ar','$2y$10$zJze8CxUm/TRaoLtyVdZeebSqRnZCKnCncP25w87pEhM63N80aEt.',NULL);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
