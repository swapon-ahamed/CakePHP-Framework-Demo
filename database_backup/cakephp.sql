-- Adminer 4.7.3 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `details` text,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `articles` (`id`, `title`, `details`, `created`, `modified`) VALUES
(1,	'Fuzzy Beginnings',	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis libero itaque sunt ad. Nisi necessitatibus unde non nulla totam eveniet officiis, dignissimos alias ex, placeat natus. Sapiente alias dignissimos, dolorem blanditiis vel magni. Veniam accusantium sed in non ipsa velit, delectus dolorum optio, odit ad tenetur nisi corporis necessitatibus neque porro temporibus natus vero asperiores eum. Est vel, iusto dolorum ea. Enim nemo, possimus molestias sunt dicta, ab commodi aspernatur voluptatibus et eveniet cumque maiores odio dolore culpa repudiandae earum perferendis maxime! Iste quaerat perferendis minus laudantium deserunt doloremque rerum obcaecati, beatae et ullam. Explicabo voluptate, cum voluptatem debitis similique suscipit. Accusantium, fugit, consequuntur. Ea, culpa, veniam. Aspernatur animi, similique, non nihil atque veritatis odit nulla quae alias esse iusto nesciunt! Sit enim quod, nesciunt possimus iste adipisci ab dignissimos. Nostrum accusantium magni obcaecati eligendi, harum unde laboriosam odio eum aperiam commodi, expedita natus saepe explicabo magnam dicta officiis labore voluptatum, reiciendis non id ad! Quo culpa omnis deserunt aperiam vel dolorum earum eos hic quaerat. Quae recusandae asperiores voluptatibus! Quas impedit nobis incidunt architecto cupiditate alias optio dolore cumque, porro adipisci asperiores animi suscipit blanditiis aliquam neque iste officia rem. Nisi dolore facere aliquid atque maiores, praesentium nam dignissimos rerum numquam, iste aut incidunt officiis quis. Excepturi at, aliquid magnam architecto dolore dolores quae labore est aperiam nostrum dignissimos aspernatur ut possimus quasi. Corrupti id voluptatibus nostrum minus sit quaerat iusto labore deleniti commodi, veniam numquam voluptatum, nulla esse suscipit quidem debitis, adipisci dolore minima animi, dolores perferendis ad sapiente eius. Repellendus dolorum voluptatum inventore aliquid quas explicabo, quaerat eos dolor, minima, nostrum commodi voluptas! Asperiores nihil veniam impedit, repudiandae iure quod, nemo ex sequi error quasi porro! Eius iste dolores error, totam repudiandae voluptates, fugit eaque velit dolore eos molestias aspernatur recusandae porro debitis doloremque ducimus saepe accusantium. Ipsa ad perspiciatis sit laborum tempore, labore officiis hic, nobis magni id reprehenderit vitae amet recusandae maxime nihil nemo placeat aspernatur deleniti dolor. Eveniet dignissimos nemo, blanditiis nostrum earum incidunt quasi iste numquam. Praesentium aspernatur error quos. Voluptatem sunt numquam non maxime amet sed, alias dolor aperiam consequuntur eum possimus aut eos impedit molestiae. Atque harum, perspiciatis assumenda soluta ut et accusantium, molestiae aliquam distinctio earum, quis rem hic sed. Totam cum excepturi, nobis, error esse, dolore fugiat, illo aliquam accusamus natus magnam amet! Rem similique, voluptatibus accusamus. Sint obcaecati recusandae magnam officiis neque! Rem provident vitae repellat cum tempora distinctio, voluptas maxime dolore officia nisi ipsam architecto ut mollitia quae dolor soluta suscipit porro est a delectus? Voluptatem atque nihil hic qui laborum culpa quae deserunt amet officia officiis obcaecati asperiores, reiciendis in harum animi consequuntur, beatae explicabo eligendi nisi cupiditate facere! Quis eligendi, asperiores vero atque, aperiam deleniti! Nam soluta quo quisquam aliquid consequuntur harum ratione quos placeat autem reiciendis incidunt architecto et ducimus, eligendi fuga quod? Ad et reprehenderit tenetur commodi unde rem similique. Ratione culpa aliquid voluptates ipsam quidem. Tenetur accusantium laudantium, mollitia consequuntur ad officia qui. Eveniet unde magnam quo, id voluptates assumenda provident aliquid.\r\n',	'2020-04-22 23:20:21',	'2020-04-22 23:20:21'),
(2,	'Origins and Discovery',	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis libero itaque sunt ad. Nisi necessitatibus unde non nulla totam eveniet officiis, dignissimos alias ex, placeat natus. Sapiente alias dignissimos, dolorem blanditiis vel magni. Veniam accusantium sed in non ipsa velit, delectus dolorum optio, odit ad tenetur nisi corporis necessitatibus neque porro temporibus natus vero asperiores eum. Est vel, iusto dolorum ea. Enim nemo, possimus molestias sunt dicta, ab commodi aspernatur voluptatibus et eveniet cumque maiores odio dolore culpa repudiandae earum perferendis maxime! Iste quaerat perferendis minus laudantium deserunt doloremque rerum obcaecati, beatae et ullam. Explicabo voluptate, cum voluptatem debitis similique suscipit. Accusantium, fugit, consequuntur. Ea, culpa, veniam. Aspernatur animi, similique, non nihil atque veritatis odit nulla quae alias esse iusto nesciunt! Sit enim quod, nesciunt possimus iste adipisci ab dignissimos. Nostrum accusantium magni obcaecati eligendi, harum unde laboriosam odio eum aperiam commodi, expedita natus saepe explicabo magnam dicta officiis labore voluptatum, reiciendis non id ad! Quo culpa omnis deserunt aperiam vel dolorum earum eos hic quaerat. Quae recusandae asperiores voluptatibus! Quas impedit nobis incidunt architecto cupiditate alias optio dolore cumque, porro adipisci asperiores animi suscipit blanditiis aliquam neque iste officia rem. Nisi dolore facere aliquid atque maiores, praesentium nam dignissimos rerum numquam, iste aut incidunt officiis quis. Excepturi at, aliquid magnam architecto dolore dolores quae labore est aperiam nostrum dignissimos aspernatur ut possimus quasi. Corrupti id voluptatibus nostrum minus sit quaerat iusto labore deleniti commodi, veniam numquam voluptatum, nulla esse suscipit quidem debitis, adipisci dolore minima animi, dolores perferendis ad sapiente eius. Repellendus dolorum voluptatum inventore aliquid quas explicabo, quaerat eos dolor, minima, nostrum commodi voluptas! Asperiores nihil veniam impedit, repudiandae iure quod, nemo ex sequi error quasi porro! Eius iste dolores error, totam repudiandae voluptates, fugit eaque velit dolore eos molestias aspernatur recusandae porro debitis doloremque ducimus saepe accusantium. Ipsa ad perspiciatis sit laborum tempore, labore officiis hic, nobis magni id reprehenderit vitae amet recusandae maxime nihil nemo placeat aspernatur deleniti dolor. Eveniet dignissimos nemo, blanditiis nostrum earum incidunt quasi iste numquam. Praesentium aspernatur error quos. Voluptatem sunt numquam non maxime amet sed, alias dolor aperiam consequuntur eum possimus aut eos impedit molestiae. Atque harum, perspiciatis assumenda soluta ut et accusantium, molestiae aliquam distinctio earum, quis rem hic sed. Totam cum excepturi, nobis, error esse, dolore fugiat, illo aliquam accusamus natus magnam amet! Rem similique, voluptatibus accusamus. Sint obcaecati recusandae magnam officiis neque! Rem provident vitae repellat cum tempora distinctio, voluptas maxime dolore officia nisi ipsam architecto ut mollitia quae dolor soluta suscipit porro est a delectus? Voluptatem atque nihil hic qui laborum culpa quae deserunt amet officia officiis obcaecati asperiores, reiciendis in harum animi consequuntur, beatae explicabo eligendi nisi cupiditate facere! Quis eligendi, asperiores vero atque, aperiam deleniti! Nam soluta quo quisquam aliquid consequuntur harum ratione quos placeat autem reiciendis incidunt architecto et ducimus, eligendi fuga quod? Ad et reprehenderit tenetur commodi unde rem similique. Ratione culpa aliquid voluptates ipsam quidem. Tenetur accusantium laudantium, mollitia consequuntur ad officia qui. Eveniet unde magnam quo, id voluptates assumenda provident aliquid.',	'2020-04-22 23:20:21',	'2020-04-22 23:20:21'),
(3,	'What is Lorem Ipsum?',	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis libero itaque sunt ad. Nisi necessitatibus unde non nulla totam eveniet officiis, dignissimos alias ex, placeat natus. Sapiente alias dignissimos, dolorem blanditiis vel magni. Veniam accusantium sed in non ipsa velit, delectus dolorum optio, odit ad tenetur nisi corporis necessitatibus neque porro temporibus natus vero asperiores eum. Est vel, iusto dolorum ea. Enim nemo, possimus molestias sunt dicta, ab commodi aspernatur voluptatibus et eveniet cumque maiores odio dolore culpa repudiandae earum perferendis maxime! Iste quaerat perferendis minus laudantium deserunt doloremque rerum obcaecati, beatae et ullam. Explicabo voluptate, cum voluptatem debitis similique suscipit. Accusantium, fugit, consequuntur. Ea, culpa, veniam. Aspernatur animi, similique, non nihil atque veritatis odit nulla quae alias esse iusto nesciunt! Sit enim quod, nesciunt possimus iste adipisci ab dignissimos. Nostrum accusantium magni obcaecati eligendi, harum unde laboriosam odio eum aperiam commodi, expedita natus saepe explicabo magnam dicta officiis labore voluptatum, reiciendis non id ad! Quo culpa omnis deserunt aperiam vel dolorum earum eos hic quaerat. Quae recusandae asperiores voluptatibus! Quas impedit nobis incidunt architecto cupiditate alias optio dolore cumque, porro adipisci asperiores animi suscipit blanditiis aliquam neque iste officia rem. Nisi dolore facere aliquid atque maiores, praesentium nam dignissimos rerum numquam, iste aut incidunt officiis quis. Excepturi at, aliquid magnam architecto dolore dolores quae labore est aperiam nostrum dignissimos aspernatur ut possimus quasi. Corrupti id voluptatibus nostrum minus sit quaerat iusto labore deleniti commodi, veniam numquam voluptatum, nulla esse suscipit quidem debitis, adipisci dolore minima animi, dolores perferendis ad sapiente eius. Repellendus dolorum voluptatum inventore aliquid quas explicabo, quaerat eos dolor, minima, nostrum commodi voluptas! Asperiores nihil veniam impedit, repudiandae iure quod, nemo ex sequi error quasi porro! Eius iste dolores error, totam repudiandae voluptates, fugit eaque velit dolore eos molestias aspernatur recusandae porro debitis doloremque ducimus saepe accusantium. Ipsa ad perspiciatis sit laborum tempore, labore officiis hic, nobis magni id reprehenderit vitae amet recusandae maxime nihil nemo placeat aspernatur deleniti dolor. Eveniet dignissimos nemo, blanditiis nostrum earum incidunt quasi iste numquam. Praesentium aspernatur error quos. Voluptatem sunt numquam non maxime amet sed, alias dolor aperiam consequuntur eum possimus aut eos impedit molestiae. Atque harum, perspiciatis assumenda soluta ut et accusantium, molestiae aliquam distinctio earum, quis rem hic sed. Totam cum excepturi, nobis, error esse, dolore fugiat, illo aliquam accusamus natus magnam amet! Rem similique, voluptatibus accusamus. Sint obcaecati recusandae magnam officiis neque! Rem provident vitae repellat cum tempora distinctio, voluptas maxime dolore officia nisi ipsam architecto ut mollitia quae dolor soluta suscipit porro est a delectus? Voluptatem atque nihil hic qui laborum culpa quae deserunt amet officia officiis obcaecati asperiores, reiciendis in harum animi consequuntur, beatae explicabo eligendi nisi cupiditate facere! Quis eligendi, asperiores vero atque, aperiam deleniti! Nam soluta quo quisquam aliquid consequuntur harum ratione quos placeat autem reiciendis incidunt architecto et ducimus, eligendi fuga quod? Ad et reprehenderit tenetur commodi unde rem similique. Ratione culpa aliquid voluptates ipsam quidem. Tenetur accusantium laudantium, mollitia consequuntur ad officia qui. Eveniet unde magnam quo, id voluptates assumenda provident aliquid.',	'2020-04-22 23:20:21',	'2020-04-22 23:20:21'),
(4,	'Meaning of Lorem Ipsum',	'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis libero itaque sunt ad. Nisi necessitatibus unde non nulla totam eveniet officiis, dignissimos alias ex, placeat natus. Sapiente alias dignissimos, dolorem blanditiis vel magni. Veniam accusantium sed in non ipsa velit, delectus dolorum optio, odit ad tenetur nisi corporis necessitatibus neque porro temporibus natus vero asperiores eum. Est vel, iusto dolorum ea. Enim nemo, possimus molestias sunt dicta, ab commodi aspernatur voluptatibus et eveniet cumque maiores odio dolore culpa repudiandae earum perferendis maxime! Iste quaerat perferendis minus laudantium deserunt doloremque rerum obcaecati, beatae et ullam. Explicabo voluptate, cum voluptatem debitis similique suscipit. Accusantium, fugit, consequuntur. Ea, culpa, veniam. Aspernatur animi, similique, non nihil atque veritatis odit nulla quae alias esse iusto nesciunt! Sit enim quod, nesciunt possimus iste adipisci ab dignissimos. Nostrum accusantium magni obcaecati eligendi, harum unde laboriosam odio eum aperiam commodi, expedita natus saepe explicabo magnam dicta officiis labore voluptatum, reiciendis non id ad! Quo culpa omnis deserunt aperiam vel dolorum earum eos hic quaerat. Quae recusandae asperiores voluptatibus! Quas impedit nobis incidunt architecto cupiditate alias optio dolore cumque, porro adipisci asperiores animi suscipit blanditiis aliquam neque iste officia rem. Nisi dolore facere aliquid atque maiores, praesentium nam dignissimos rerum numquam, iste aut incidunt officiis quis. Excepturi at, aliquid magnam architecto dolore dolores quae labore est aperiam nostrum dignissimos aspernatur ut possimus quasi. Corrupti id voluptatibus nostrum minus sit quaerat iusto labore deleniti commodi, veniam numquam voluptatum, nulla esse suscipit quidem debitis, adipisci dolore minima animi, dolores perferendis ad sapiente eius. Repellendus dolorum voluptatum inventore aliquid quas explicabo, quaerat eos dolor, minima, nostrum commodi voluptas! Asperiores nihil veniam impedit, repudiandae iure quod, nemo ex sequi error quasi porro! Eius iste dolores error, totam repudiandae voluptates, fugit eaque velit dolore eos molestias aspernatur recusandae porro debitis doloremque ducimus saepe accusantium. Ipsa ad perspiciatis sit laborum tempore, labore officiis hic, nobis magni id reprehenderit vitae amet recusandae maxime nihil nemo placeat aspernatur deleniti dolor. Eveniet dignissimos nemo, blanditiis nostrum earum incidunt quasi iste numquam. Praesentium aspernatur error quos. Voluptatem sunt numquam non maxime amet sed, alias dolor aperiam consequuntur eum possimus aut eos impedit molestiae. Atque harum, perspiciatis assumenda soluta ut et accusantium, molestiae aliquam distinctio earum, quis rem hic sed. Totam cum excepturi, nobis, error esse, dolore fugiat, illo aliquam accusamus natus magnam amet! Rem similique, voluptatibus accusamus. Sint obcaecati recusandae magnam officiis neque! Rem provident vitae repellat cum tempora distinctio, voluptas maxime dolore officia nisi ipsam architecto ut mollitia quae dolor soluta suscipit porro est a delectus? Voluptatem atque nihil hic qui laborum culpa quae deserunt amet officia officiis obcaecati asperiores, reiciendis in harum animi consequuntur, beatae explicabo eligendi nisi cupiditate facere! Quis eligendi, asperiores vero atque, aperiam deleniti! Nam soluta quo quisquam aliquid consequuntur harum ratione quos placeat autem reiciendis incidunt architecto et ducimus, eligendi fuga quod? Ad et reprehenderit tenetur commodi unde rem similique. Ratione culpa aliquid voluptates ipsam quidem. Tenetur accusantium laudantium, mollitia consequuntur ad officia qui. Eveniet unde magnam quo, id voluptates assumenda provident aliquid.',	'2020-04-22 23:20:21',	'2020-04-22 23:20:21');

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `categories` (`id`, `name`, `parent`, `created`, `modified`) VALUES
(1,	'Men',	NULL,	'2020-04-22 15:28:35',	'2020-04-22 15:28:35'),
(2,	'Women',	NULL,	'2020-04-22 15:28:42',	'2020-04-22 15:28:42'),
(3,	'Kids',	NULL,	'2020-04-22 15:28:48',	'2020-04-22 15:28:48'),
(4,	'Test',	NULL,	'2020-04-23 12:23:31',	'2020-04-23 12:23:31'),
(7,	'sdfsd',	NULL,	'2020-04-23 12:28:26',	'2020-04-23 12:28:26'),
(8,	'dsfdsfds',	NULL,	'2020-04-23 12:29:00',	'2020-04-23 12:29:00');

DROP TABLE IF EXISTS `districts`;
CREATE TABLE `districts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `division_id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `divisions`;
CREATE TABLE `divisions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `division_bbs_code` varchar(14) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `divisions` (`id`, `division_bbs_code`, `name`, `created`, `modified`) VALUES
(1,	'200',	'Dhaka',	'2020-03-13 08:56:24',	'2020-03-13 13:28:07'),
(2,	'300',	'Rajshahi',	'2020-03-13 11:55:01',	'2020-03-13 13:28:30'),
(3,	'400',	'Khulna',	'2020-03-13 13:35:18',	'2020-03-13 13:35:18'),
(4,	'3434',	'Barisal',	'2020-03-13 15:08:09',	'2020-03-13 15:08:09'),
(5,	'3324',	'dsfds',	'2020-03-13 15:11:32',	'2020-03-13 15:11:32');

DROP TABLE IF EXISTS `phinxlog`;
CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20200311173154,	'Users',	'2020-03-11 11:49:05',	'2020-03-11 11:49:06',	0),
(20200421150224,	'Students',	'2020-04-21 09:39:12',	'2020-04-21 09:39:13',	0),
(20200421164429,	'Categories',	'2020-04-21 10:57:18',	'2020-04-21 10:57:18',	0),
(20200422060143,	'Profiles',	'2020-04-22 00:37:52',	'2020-04-22 00:37:52',	0),
(20200422143051,	'Skills',	'2020-04-22 08:32:25',	'2020-04-22 08:32:25',	0),
(20200422152152,	'Products',	'2020-04-22 09:25:15',	'2020-04-22 09:25:15',	0),
(20200422170649,	'Articles',	'2020-04-22 11:09:55',	'2020-04-22 11:09:56',	0);

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `products` (`id`, `category_id`, `name`, `created`, `modified`) VALUES
(1,	1,	'Shirt',	'2020-04-22 15:29:01',	'2020-04-22 15:29:01'),
(2,	2,	'Skut',	'2020-04-22 15:29:12',	'2020-04-22 15:29:12');

DROP TABLE IF EXISTS `profiles`;
CREATE TABLE `profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `profiles` (`id`, `user_id`, `mobile`, `created`, `modified`) VALUES
(1,	7,	'01726919674',	'2020-04-22 06:38:25',	'2020-04-22 06:38:25'),
(2,	2,	'01726919674',	'2020-04-22 14:16:57',	'2020-04-24 01:27:12'),
(3,	3,	'dsds',	'2020-04-22 14:17:07',	'2020-04-22 14:17:07'),
(4,	8,	'435345345',	'2020-04-22 14:45:32',	'2020-04-24 01:29:16'),
(5,	9,	'1232424',	'2020-04-23 12:21:27',	'2020-04-23 12:21:27'),
(6,	10,	'34324',	'2020-04-23 17:11:00',	'2020-04-23 17:11:00'),
(7,	11,	'4324324',	'2020-04-23 17:27:57',	'2020-04-23 17:27:57'),
(8,	12,	'353434',	'2020-04-23 17:41:56',	'2020-04-23 17:41:56'),
(9,	13,	'rewrewr',	'2020-04-23 17:49:17',	'2020-04-23 17:49:17'),
(10,	14,	'34343434',	'2020-04-23 18:04:32',	'2020-04-23 18:04:32'),
(11,	15,	'43434',	'2020-04-23 18:08:53',	'2020-04-23 18:08:53'),
(12,	16,	'324324',	'2020-04-23 18:10:36',	'2020-04-23 18:10:36'),
(13,	17,	'347324789',	'2020-04-24 00:49:16',	'2020-04-24 00:49:16'),
(14,	18,	'01726919674',	'2020-04-24 00:54:57',	'2020-04-24 00:54:57'),
(15,	19,	'343252342',	'2020-04-24 05:55:39',	'2020-04-24 05:55:39'),
(16,	20,	'324324',	'2020-04-24 06:03:05',	'2020-04-24 06:03:05'),
(17,	21,	'123123',	'2020-04-24 06:10:08',	'2020-04-24 06:10:08'),
(18,	22,	'3434',	'2020-04-24 06:21:30',	'2020-04-24 06:21:30'),
(19,	23,	'3424',	'2020-04-24 06:43:54',	'2020-04-24 06:43:54');

DROP TABLE IF EXISTS `skills`;
CREATE TABLE `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `skills` (`id`, `user_id`, `name`, `created`, `modified`) VALUES
(1,	8,	'javascript',	'2020-04-22 14:45:32',	'2020-04-22 14:45:32'),
(2,	8,	'PHP',	'2020-04-22 14:45:32',	'2020-04-22 14:45:32'),
(3,	9,	'javascript',	'2020-04-23 12:21:27',	'2020-04-23 12:21:27'),
(4,	9,	'PHP',	'2020-04-23 12:21:27',	'2020-04-23 12:21:27'),
(5,	10,	'sdfds',	'2020-04-23 17:11:00',	'2020-04-23 17:11:00'),
(6,	10,	'dsfdsf',	'2020-04-23 17:11:00',	'2020-04-23 17:11:00'),
(7,	11,	'sdfds',	'2020-04-23 17:27:57',	'2020-04-23 17:27:57'),
(8,	11,	'dsfdsf',	'2020-04-23 17:27:57',	'2020-04-23 17:27:57'),
(9,	12,	'rewrewr',	'2020-04-23 17:41:56',	'2020-04-23 17:41:56'),
(10,	12,	'sdfsdfdsf',	'2020-04-23 17:41:56',	'2020-04-23 17:41:56'),
(11,	13,	'dfsf',	'2020-04-23 17:49:17',	'2020-04-23 17:49:17'),
(12,	13,	'dsfdsf',	'2020-04-23 17:49:17',	'2020-04-23 17:49:17'),
(13,	14,	'dsds',	'2020-04-23 18:04:32',	'2020-04-23 18:04:32'),
(14,	14,	'dsds',	'2020-04-23 18:04:32',	'2020-04-23 18:04:32'),
(15,	15,	'sdds',	'2020-04-23 18:08:53',	'2020-04-23 18:08:53'),
(16,	15,	'dsfdsf',	'2020-04-23 18:08:53',	'2020-04-23 18:08:53'),
(17,	16,	'wewewe',	'2020-04-23 18:10:36',	'2020-04-23 18:10:36'),
(18,	16,	'erwerew',	'2020-04-23 18:10:36',	'2020-04-23 18:10:36'),
(19,	17,	'PHP',	'2020-04-24 00:49:16',	'2020-04-24 00:49:16'),
(20,	17,	'Javascript',	'2020-04-24 00:49:16',	'2020-04-24 00:49:16'),
(21,	18,	'PHP',	'2020-04-24 00:54:57',	'2020-04-24 00:54:57'),
(22,	18,	'React',	'2020-04-24 00:54:57',	'2020-04-24 00:54:57'),
(23,	2,	'PHP',	'2020-04-24 01:27:12',	'2020-04-24 01:27:12'),
(24,	2,	'Java',	'2020-04-24 01:27:12',	'2020-04-24 01:27:12'),
(25,	8,	'javascript',	'2020-04-24 01:29:16',	'2020-04-24 01:29:16'),
(26,	8,	'PHP',	'2020-04-24 01:29:16',	'2020-04-24 01:29:16'),
(27,	18,	'PHP',	'2020-04-24 01:40:03',	'2020-04-24 01:40:03'),
(28,	18,	'React',	'2020-04-24 01:40:03',	'2020-04-24 01:40:03'),
(29,	19,	'PHP',	'2020-04-24 05:55:39',	'2020-04-24 05:55:39'),
(30,	19,	'Java',	'2020-04-24 05:55:39',	'2020-04-24 05:55:39'),
(31,	19,	'PHP',	'2020-04-24 05:56:13',	'2020-04-24 05:56:13'),
(32,	19,	'Java',	'2020-04-24 05:56:13',	'2020-04-24 05:56:13'),
(33,	20,	'adsadas',	'2020-04-24 06:03:05',	'2020-04-24 06:03:05'),
(34,	20,	'dasd',	'2020-04-24 06:03:05',	'2020-04-24 06:03:05'),
(35,	20,	'adsadas',	'2020-04-24 06:07:30',	'2020-04-24 06:07:30'),
(36,	20,	'dasd',	'2020-04-24 06:07:30',	'2020-04-24 06:07:30'),
(37,	20,	'adsadas',	'2020-04-24 06:08:14',	'2020-04-24 06:08:14'),
(38,	20,	'dasd',	'2020-04-24 06:08:14',	'2020-04-24 06:08:14'),
(39,	20,	'adsadas',	'2020-04-24 06:09:00',	'2020-04-24 06:09:00'),
(40,	20,	'dasd',	'2020-04-24 06:09:00',	'2020-04-24 06:09:00'),
(41,	20,	'adsadas',	'2020-04-24 06:09:26',	'2020-04-24 06:09:26'),
(42,	20,	'dasd',	'2020-04-24 06:09:26',	'2020-04-24 06:09:26'),
(43,	21,	'ewrwer',	'2020-04-24 06:10:08',	'2020-04-24 06:10:08'),
(44,	21,	'ewrwer',	'2020-04-24 06:10:08',	'2020-04-24 06:10:08'),
(45,	21,	'ewrwer',	'2020-04-24 06:10:35',	'2020-04-24 06:10:35'),
(46,	21,	'ewrwer',	'2020-04-24 06:10:35',	'2020-04-24 06:10:35'),
(47,	22,	'sdfds',	'2020-04-24 06:21:30',	'2020-04-24 06:21:30'),
(48,	22,	'sdfds',	'2020-04-24 06:21:30',	'2020-04-24 06:21:30'),
(49,	23,	'dssdsd',	'2020-04-24 06:43:54',	'2020-04-24 06:43:54'),
(50,	23,	'dsfsdf',	'2020-04-24 06:43:54',	'2020-04-24 06:43:54'),
(51,	18,	'PHP',	'2020-04-24 07:04:27',	'2020-04-24 07:04:27'),
(52,	18,	'React',	'2020-04-24 07:04:27',	'2020-04-24 07:04:27'),
(53,	18,	'PHP',	'2020-04-24 07:04:40',	'2020-04-24 07:04:40'),
(54,	18,	'React',	'2020-04-24 07:04:40',	'2020-04-24 07:04:40'),
(55,	18,	'PHP',	'2020-04-24 07:05:36',	'2020-04-24 07:05:36'),
(56,	18,	'React',	'2020-04-24 07:05:36',	'2020-04-24 07:05:36'),
(57,	18,	'PHP',	'2020-04-24 07:05:46',	'2020-04-24 07:05:46'),
(58,	18,	'React',	'2020-04-24 07:05:46',	'2020-04-24 07:05:46'),
(59,	18,	'PHP',	'2020-04-24 07:08:12',	'2020-04-24 07:08:12'),
(60,	18,	'React',	'2020-04-24 07:08:12',	'2020-04-24 07:08:12'),
(61,	18,	'PHP',	'2020-04-24 07:11:41',	'2020-04-24 07:11:41'),
(62,	18,	'React',	'2020-04-24 07:11:41',	'2020-04-24 07:11:41'),
(63,	18,	'PHP',	'2020-04-24 07:13:41',	'2020-04-24 07:13:41'),
(64,	18,	'React',	'2020-04-24 07:13:41',	'2020-04-24 07:13:41'),
(65,	18,	'PHP',	'2020-04-24 07:14:07',	'2020-04-24 07:14:07'),
(66,	18,	'React',	'2020-04-24 07:14:07',	'2020-04-24 07:14:07'),
(67,	18,	'PHP',	'2020-04-24 07:14:26',	'2020-04-24 07:14:26'),
(68,	18,	'React',	'2020-04-24 07:14:26',	'2020-04-24 07:14:26');

DROP TABLE IF EXISTS `stores`;
CREATE TABLE `stores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `title` text,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `stores` (`id`, `name`, `title`, `created`, `modified`) VALUES
(1,	'Swapon',	'Lorem ipsum',	'2020-03-13 04:04:31',	'2020-03-13 04:04:31'),
(2,	'erewr',	'ewrewr',	'2020-03-13 14:59:12',	'2020-03-13 14:59:12'),
(3,	'dsfds',	'dsds',	'2020-04-22 08:28:05',	'2020-04-22 08:28:05');

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `students` (`id`, `name`, `age`, `country`, `created`, `modified`) VALUES
(1,	'john',	33,	'USA',	'2020-04-21 16:15:04',	'2020-04-21 16:15:04'),
(2,	'Jack ',	44,	'Canada',	'2020-04-21 16:15:32',	'2020-04-21 16:15:32');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `active` tinyint(1) DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `username`, `email`, `password`, `image`, `active`, `created`, `modified`) VALUES
(18,	'swapon',	'swapon.ahamed@gmail.com',	'$2y$10$pAyU0r.7FtiZuuisuhlyMOLQK3stGzqqEwlO7leBBbXeodizgKrya',	'2ef0bbff0e14ebb657422db671aafb80.jpg',	1,	'2020-04-24 00:54:57',	'2020-04-24 07:14:26');

-- 2020-04-27 09:45:14
