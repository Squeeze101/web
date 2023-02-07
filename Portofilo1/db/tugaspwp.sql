USE tugaspwp

SELECT*FROM users;

SHOW TABLES

DELETE FROM users

DROP TABLE users

CREATE TABLE `users` (
  `id` INT(10) PRIMARY KEY AUTO_INCREMENT,
  `username` VARCHAR(55) NOT NULL,
  `nama` VARCHAR(55) NOT NULL,
  `email` VARCHAR(90) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `handphone` VARCHAR(25) NOT NULL,
  `user_type` VARCHAR(44) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=utf8mb4