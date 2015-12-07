-- Adminer 4.2.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP DATABASE IF EXISTS `wp_lily`;
CREATE DATABASE `wp_lily` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `wp_lily`;

DROP TABLE IF EXISTS `diary`;
CREATE TABLE `diary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `feel` varchar(255) NOT NULL,
  `share` enum('Public','Private') NOT NULL,
  `diary` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_users` (`id_users`),
  CONSTRAINT `diary_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `diary` (`id`, `id_users`, `title`, `feel`, `share`, `diary`, `date`, `time`) VALUES
(1,	1,	'111',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-01',	'00:00:00'),
(2,	1,	'222',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-02',	'00:00:00'),
(3,	1,	'333',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-03',	'00:00:00'),
(4,	1,	'444',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-04',	'00:00:00'),
(5,	1,	'555',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-05',	'00:00:00'),
(6,	1,	'666',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-06',	'00:00:00'),
(7,	1,	'777',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-07',	'00:00:00'),
(8,	1,	'888',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-08',	'00:00:00'),
(9,	1,	'999',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-09',	'00:00:00'),
(10,	1,	'101010',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-10',	'00:00:00'),
(11,	1,	'111111',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-11',	'00:00:00'),
(12,	1,	'121212',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-12',	'00:00:00'),
(13,	1,	'131313',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-13',	'00:00:00'),
(14,	1,	'141414',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-14',	'00:00:00'),
(15,	1,	'151515',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-15',	'00:00:00'),
(16,	1,	'161616',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-16',	'00:00:00'),
(17,	1,	'171717',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-17',	'00:00:00'),
(18,	1,	'181818',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-18',	'00:00:00'),
(19,	1,	'191919',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-19',	'00:00:00'),
(20,	1,	'202020',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-20',	'00:00:00'),
(21,	1,	'212121',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-21',	'00:00:00'),
(22,	1,	'222222',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-22',	'00:00:00'),
(23,	1,	'232323',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-23',	'00:00:00'),
(24,	1,	'242424',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-24',	'00:00:00'),
(25,	1,	'A two digit representation of a year',	'Happy',	'Private',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-25',	'00:00:00'),
(26,	1,	'A full numeric representation of a year, 4 digits',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-26',	'00:00:00'),
(27,	1,	'Numeric representation of a month, without leading zeros',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-27',	'00:00:00'),
(28,	1,	'Kebakran terjadi disekitar perumahan warga',	'Happy',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-28',	'00:00:00'),
(29,	1,	'This has the same value as Y, except that if the ',	'Sad',	'Public',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-29',	'00:00:00'),
(30,	1,	'303030',	'Happy',	'Private',	'Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500a',	'2015-11-30',	'00:00:00'),
(31,	2,	'asdasd',	'Happy',	'Public',	'asdas\r\nds\r\naas\r\ndadd',	'2015-11-05',	'13:00:00');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `forgot_token` varchar(255) NOT NULL,
  `signup_time` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `forgot_token`, `signup_time`, `last_login`) VALUES
(1,	'Renhard Julindra',	'r3nhardj96@yahoo.co.id',	'd8a928b2043db77e340b523547bf16cb4aa483f0645fe0a290ed1f20aab76257',	'',	'2015-12-06 02:37:02',	'2015-12-07 21:07:00'),
(2,	'Renhard',	'r3nhardj96@yahoo.co.ids',	'd416f2fc6410ea06df0aad38b140d37e74f7d2a9a98d6ec8c274e0d5052fb7b5',	'',	'2015-12-06 02:44:51',	'0000-00-00 00:00:00'),
(3,	'Renhard',	'r3nhardj96@yahoo.co.idk',	'd416f2fc6410ea06df0aad38b140d37e74f7d2a9a98d6ec8c274e0d5052fb7b5',	'',	'2015-12-06 02:46:01',	'0000-00-00 00:00:00'),
(4,	'Renhard',	'r3nhardj96@yahoo.co.idkd',	'd416f2fc6410ea06df0aad38b140d37e74f7d2a9a98d6ec8c274e0d5052fb7b5',	'',	'2015-12-06 02:46:42',	'0000-00-00 00:00:00'),
(5,	'Renhard',	'r3nhardj96@yahoo.co.idl',	'd416f2fc6410ea06df0aad38b140d37e74f7d2a9a98d6ec8c274e0d5052fb7b5',	'',	'2015-12-06 02:47:46',	'0000-00-00 00:00:00');

-- 2015-12-07 22:47:59
