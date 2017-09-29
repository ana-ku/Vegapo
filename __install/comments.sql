CREATE TABLE comments(
  `id` INT(11) PRIMARY KEY AUTO_INCREMENT,
  `product_id` INT(11) NOT NULL,
  `author_id` INT(11) NOT NULL,
  `body` TEXT NOT NULL,
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

ALTER TABLE users ADD avatar varchar(255);