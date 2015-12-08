-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Inang: localhost:3306
-- Waktu pembuatan: 08 Des 2015 pada 22.14
-- Versi Server: 5.5.45-cll-lve
-- Versi PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `u3855145_wp_lily`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `forgot_token` varchar(255) NOT NULL,
  `signup_time` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `forgot_token`, `signup_time`, `last_login`) VALUES
(1, 'Renhard J', 'r3nhardj96@yahoo.co.id', 'd8a928b2043db77e340b523547bf16cb4aa483f0645fe0a290ed1f20aab76257', '57866b38d37bc4221c98e57e7ab90375', '2015-12-06 02:37:02', '2015-12-08 22:10:10'),
(2, 'Renhard', 'r3nhardj96@yahoo.co.ids', 'd416f2fc6410ea06df0aad38b140d37e74f7d2a9a98d6ec8c274e0d5052fb7b5', '', '2015-12-06 02:44:51', '0000-00-00 00:00:00'),
(6, 'popetto', 'chima.popetto@ymail.com', 'bbca67ac7ccda2251d6962b799467740f01c3841c386e1a959d005659de8794a', '', '2015-12-08 07:22:27', '2015-12-08 08:03:36'),
(7, 'popetto', 'chima.popetto@gmail.com', 'fd01e295fb405a3d4e5e76b1cdde92f2e5644c8f24cd72c350ce6deb2706df4a', '', '2015-12-08 07:23:39', '2015-12-08 08:31:07'),
(8, 'tes', 'tes@gmail.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', '', '2015-12-08 07:24:41', '2015-12-08 07:25:03'),
(9, 'ApriliantoChayadi', 'aprilianto_989@yahoo.com', '1cbd6ddbc53957531a59050efce05cf7ed01a09863f00fcb74045ddbc830a454', '2d64326071f70666f57e277e5028989b', '2015-12-08 07:42:08', '2015-12-08 13:57:36'),
(10, 'chima', 'alvreda.ivena@ymail.com', 'fd01e295fb405a3d4e5e76b1cdde92f2e5644c8f24cd72c350ce6deb2706df4a', '', '2015-12-08 08:06:22', '0000-00-00 00:00:00'),
(14, 'bryan', 'bryan@gmail.com', 'ef797c8118f02dfb649607dd5d3f8c7623048c9c063d532cc95c5ed7a898a64f', '', '2015-12-08 09:54:33', '2015-12-08 21:46:56'),
(15, 'Dodol', 'dodol@dodol.com', '883eea702af775ebdc29bee7631772a8c703d84a410853c2aaf9eebe155ae205', '', '2015-12-08 11:49:53', '2015-12-08 11:50:04'),
(16, 'andre', 'andreganteng@gmail.com', '719a8d858177305a372dc3f0db026491182e4ea616d25c4e8095538ffddf3903', '', '2015-12-08 12:14:49', '2015-12-08 12:15:01'),
(18, 'bryan1', 'bryan1@gmail.com', '9a9caa2b5901e85e6b221c60f1ce1ad759961fe7a8159e359f2ead6e23a43495', '', '2015-12-08 21:41:58', '0000-00-00 00:00:00'),
(19, 'bryan2', 'bryan2@gmail.com', '9a9caa2b5901e85e6b221c60f1ce1ad759961fe7a8159e359f2ead6e23a43495', '', '2015-12-08 21:42:50', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
