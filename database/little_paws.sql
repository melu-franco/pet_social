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

DROP TABLE IF EXISTS `friendship`;

CREATE TABLE IF NOT EXISTS `friendship` (
  `id` int(11) unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_one_id` INT(10) UNSIGNED NOT NULL,
  `user_two_id` INT(10) UNSIGNED NOT NULL,
  `status` TINYINT(3) UNSIGNED NOT NULL DEFAULT '0',
  `action_user_id` INT(10) UNSIGNED NOT NULL,
  FOREIGN KEY (`user_one_id`) REFERENCES users(`id`),
  FOREIGN KEY (`user_two_id`) REFERENCES users(`id`),
  FOREIGN KEY (`action_user_id`) REFERENCES users(`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

ALTER TABLE `friendship`
ADD UNIQUE KEY `unique_users_id` (`user_one_id`,`user_two_id`);

INSERT INTO `friendship` (`user_one_id`, `user_two_id`, `status`, `action_user_id`)
VALUES
	(1,2,0,1);

/*!40000 ALTER TABLE `friendship` ENABLE KEYS */;
UNLOCK TABLES;

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


DROP TABLE IF EXISTS `likes`;

CREATE TABLE `likes` (
  `id` int(11) NOT NULL DEFAULT '0',
  `liker` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


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