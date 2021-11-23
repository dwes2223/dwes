USE `mvc`;


DROP TABLE IF EXISTS `orders_products`;
DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `date` date,
  `user_id` int,
  INDEX (user_id),
 FOREIGN KEY (user_id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `orders_products` (
  `order_id` int,
  `product_id` int,
  `price` double not null,
  `quantity` integer not null,
  INDEX (order_id),
  INDEX (product_id),
 PRIMARY KEY (order_id, product_id),
 FOREIGN KEY (order_id) REFERENCES orders(id),
 FOREIGN KEY (product_id) REFERENCES products(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


