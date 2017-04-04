-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 04 apr 2017 om 12:46
-- Serverversie: 5.7.14
-- PHP-versie: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bemika`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `activitys`
--

CREATE TABLE `activitys` (
  `id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `page` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `activitys`
--

INSERT INTO `activitys` (`id`, `author`, `page`, `type`, `action`) VALUES
(1, 'admin', 'Article', 'text', 'added new record to rnb'),
(2, 'admin', 'Article', 'text', 'deleted record in Adventure'),
(3, 'admin', 'Article', 'text', 'deleted record in Adventure'),
(4, 'admin', 'Article', 'text', 'deleted record in Adventure'),
(5, 'admin', 'Article', 'text', 'deleted record in Adventure'),
(6, 'admin', 'Article', 'text', 'deleted record in Adventure'),
(7, 'admin', 'Article', 'text', 'added new record to hip-hop'),
(8, 'admin', 'Article', 'text', 'deleted record in Adventure'),
(9, 'admin', 'Article', 'text', 'added new record to Adventure'),
(10, 'admin', 'Article', 'text', 'updated record in rnb'),
(11, 'admin', 'Article', 'text', 'updated record in rnb'),
(12, 'admin', 'Article', 'text', 'updated record in rnb'),
(13, 'admin', 'Article', 'text', 'updated record in rnb'),
(14, 'admin', 'Article', 'text', 'updated record in rnb'),
(15, 'admin', 'Article', 'text', 'updated record in rnb'),
(16, 'admin', 'Article', 'text', 'updated record in rnb'),
(17, 'admin', 'Article', 'text', 'updated record in rnb'),
(18, 'admin', 'Article', 'text', 'updated record in rnb'),
(19, 'admin', 'Article', 'text', 'updated record in rnb'),
(20, 'admin', 'Article', 'text', 'updated record in rnb'),
(21, 'admin', 'Article', 'text', 'updated record in rnb'),
(22, 'admin', 'Article', 'text', 'updated record in rnb'),
(23, 'admin', 'Article', 'text', 'updated record in rnb'),
(24, 'admin', 'Article', 'text', 'updated record in rnb'),
(25, 'admin', 'Article', 'text', 'updated record in rnb'),
(26, 'admin', 'Article', 'text', 'added new record to rnb'),
(27, 'admin', 'Article', 'text', 'updated record in rnb'),
(28, 'admin', 'Article', 'text', 'updated record in rnb'),
(29, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(30, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(31, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(32, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(33, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(34, 'admin', 'Article', 'text', 'added new record to hip-hop'),
(35, 'admin', 'Article', 'text', 'added new record to hip-hop'),
(36, 'admin', 'Article', 'text', 'added new record to hip-hop'),
(37, 'admin', 'Article', 'text', 'added new record to hip-hop'),
(38, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(39, 'admin', 'Article', 'text', 'added new record to rnb'),
(40, 'admin', 'Article', 'text', 'added new record to rnb'),
(41, 'admin', 'Article', 'text', 'added new record to rnb'),
(42, 'admin', 'Article', 'text', 'added new record to rnb'),
(43, 'admin', 'Article', 'text', 'updated record in jazz'),
(44, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(45, 'admin', 'Article', 'text', 'deleted record in hip-hop'),
(46, 'admin', 'Article', 'text', 'deleted record in hip-hop'),
(47, 'admin', 'Article', 'text', 'added new record to Horror'),
(48, 'admin', 'Article', 'text', 'deleted record in rnb'),
(49, 'admin', 'Article', 'text', 'deleted record in hip-hop'),
(50, 'admin', 'Article', 'text', 'deleted record in hip-hop'),
(51, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(52, 'admin', 'Page', 'text', 'added new record'),
(53, 'admin', 'Page', 'text', 'deleted record in '),
(54, 'admin', 'Page', 'text', 'deleted record in '),
(55, 'admin', 'Page', 'text', 'deleted record in'),
(56, 'admin', 'Page', 'text', 'added new record'),
(57, 'admin', 'Page', 'text', 'deleted record in'),
(58, 'admin', 'Article', 'text', 'added new record'),
(59, 'admin', 'Article', 'text', 'updated record in Tennis'),
(60, 'admin', 'Article', 'text', 'updated record in Tennis'),
(61, 'admin', 'Article', 'text', 'updated record in Tennis'),
(62, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(63, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(64, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(65, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(66, 'admin', 'Article', 'text', 'added new record'),
(67, 'admin', 'Article', 'text', 'deleted record in hip-hop'),
(68, 'admin', 'Article', 'text', 'added new record'),
(69, 'admin', 'Article', 'text', 'added new record'),
(70, 'admin', 'Article', 'text', 'added new record'),
(71, 'admin', 'Article', 'text', 'added new record'),
(72, 'admin', 'Article', 'text', 'added new record'),
(73, 'admin', 'Article', 'text', 'added new record'),
(74, 'admin', 'Article', 'text', 'added new record'),
(75, 'admin', 'Article', 'text', 'added new record'),
(76, 'admin', 'Article', 'text', 'added new record'),
(77, 'admin', 'Article', 'text', 'added new record'),
(78, 'admin', 'Article', 'text', 'added new record'),
(79, 'admin', 'Article', 'text', 'added new record'),
(80, 'admin', 'Article', 'text', 'added new record'),
(81, 'admin', 'Article', 'text', 'added new record'),
(82, 'admin', 'Article', 'text', 'added new record'),
(83, 'admin', 'Article', 'text', 'added new record'),
(84, 'admin', 'Article', 'text', 'added new record'),
(85, 'admin', 'Article', 'text', 'added new record'),
(86, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(87, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(88, 'admin', 'Article', 'text', 'added new record'),
(89, 'admin', 'Article', 'text', 'added new record'),
(90, 'admin', 'Article', 'text', 'added new record'),
(91, 'admin', 'Article', 'text', 'added new record'),
(92, 'admin', 'Page', 'text', 'added new record'),
(93, 'admin', 'Page', 'text', 'added new record'),
(94, 'admin', 'Page', 'text', 'added new record'),
(95, 'admin', 'Page', 'text', 'added new record'),
(96, 'admin', 'Article', 'text', 'added new record'),
(97, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(98, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(99, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(100, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(101, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(102, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(103, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(104, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(105, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(106, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(107, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(108, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(109, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(110, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(111, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(112, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(113, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(114, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(115, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(116, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(117, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(118, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(119, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(120, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(121, 'admin', 'Article', 'text', 'added new record'),
(122, 'admin', 'Category', 'text', 'added new record'),
(123, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(124, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(125, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(126, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(127, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(128, 'admin', 'Article', 'text', 'added new record'),
(129, 'admin', 'Article', 'text', 'added new record'),
(130, 'admin', 'Article', 'text', 'added new record'),
(131, 'admin', 'Article', 'text', 'added new record'),
(132, 'admin', 'Article', 'text', 'added new record'),
(133, 'admin', 'Article', 'text', 'added new record'),
(134, 'admin', 'Article', 'text', 'added new record'),
(135, 'admin', 'Article', 'text', 'added new record'),
(136, 'admin', 'Article', 'text', 'added new record'),
(137, 'admin', 'Article', 'text', 'added new record'),
(138, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(139, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(140, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(141, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(142, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(143, 'admin', 'Article', 'text', 'updated record in Tennis'),
(144, 'admin', 'Article', 'text', 'added new record'),
(145, 'admin', 'Article', 'text', 'updated record in Tennis'),
(146, 'admin', 'Article', 'text', 'added new record'),
(147, 'admin', 'Article', 'text', 'added new record'),
(148, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(149, 'admin', 'Category', 'text', 'added new record'),
(150, 'admin', 'Article', 'text', 'added new record'),
(151, 'admin', 'Article', 'text', 'added new record'),
(152, 'admin', 'Article', 'text', 'added new record'),
(153, 'admin', 'Article', 'text', 'added new record'),
(154, 'admin', 'Article', 'text', 'added new record'),
(155, 'admin', 'Article', 'text', 'added new record'),
(156, 'admin', 'Article', 'text', 'added new record'),
(157, 'admin', 'Article', 'text', 'added new record'),
(158, 'admin', 'Article', 'text', 'added new record'),
(159, 'admin', 'Article', 'text', 'added new record'),
(160, 'admin', 'Article', 'text', 'updated record in Tennis'),
(161, 'admin', 'Article', 'text', 'added new record'),
(162, 'admin', 'Article', 'text', 'added new record'),
(163, 'admin', 'Article', 'text', 'added new record'),
(164, 'admin', 'Article', 'text', 'added new record'),
(165, 'admin', 'Article', 'text', 'added new record'),
(166, 'admin', 'Article', 'text', 'added new record'),
(167, 'admin', 'Article', 'text', 'added new record'),
(168, 'admin', 'Article', 'text', 'added new record'),
(169, 'admin', 'Article', 'text', 'added new record'),
(170, 'admin', 'Article', 'text', 'added new record'),
(171, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(172, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(173, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(174, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(175, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(176, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(177, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(178, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(179, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(180, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(181, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(182, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(183, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(184, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(185, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(186, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(187, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(188, 'admin', 'Article', 'text', 'added new record'),
(189, 'admin', 'Article', 'text', 'added new record'),
(190, 'admin', 'Article', 'text', 'added new record'),
(191, 'admin', 'Article', 'text', 'added new record'),
(192, 'admin', 'Article', 'text', 'added new record'),
(193, 'admin', 'Article', 'text', 'added new record'),
(194, 'admin', 'Article', 'text', 'added new record'),
(195, 'admin', 'Article', 'text', 'added new record'),
(196, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(197, 'admin', 'Article', 'text', 'updated record in hip-hop'),
(198, 'admin', 'Article', 'text', 'added new record'),
(199, 'admin', 'Article', 'text', 'updated record in Tennis'),
(200, 'admin', 'Article', 'text', 'updated record in Tennis');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` text,
  `genre` varchar(255) DEFAULT NULL,
  `hidden` varchar(10) NOT NULL DEFAULT 'true',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `articles`
--

INSERT INTO `articles` (`id`, `file`, `title`, `text`, `genre`, `hidden`, `date_created`) VALUES
(2, NULL, 'get rekt', 'hrfbjhbehjbejcf', NULL, 'true', '2017-04-04 09:29:55'),
(3, NULL, 'get rekt', 'hrfbjhbehjbejcf', NULL, 'true', '2017-04-04 09:30:00'),
(4, '', 'get rekt', 'heinrich wolthaus', 'hip-hop', 'true', '2017-04-04 09:36:43'),
(5, NULL, 'get rekt', NULL, 'hip-hop', 'true', '2017-04-04 09:37:48'),
(6, NULL, 'get rekt', NULL, 'hip-hop', 'true', '2017-04-04 09:38:28'),
(7, NULL, 'get rekt', NULL, 'hip-hop', 'true', '2017-04-04 09:38:42'),
(8, NULL, 'get rekt', NULL, 'hip-hop', 'true', '2017-04-04 09:39:29'),
(9, NULL, 'get rekt', NULL, 'hip-hop', 'true', '2017-04-04 09:40:10'),
(10, NULL, 'get rekt', NULL, 'hip-hop', 'true', '2017-04-04 09:41:53'),
(11, '10402482_582297911902224_7739442491245005212_n.jpg', 'get rekt', NULL, 'hip-hop', 'true', '2017-04-04 09:42:05'),
(12, '', '', 'lorum igab', 'Tennis', 'true', '2017-04-04 12:41:31');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categorys`
--

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `categorys`
--

INSERT INTO `categorys` (`id`, `title`, `type`) VALUES
(1, 'hip-hop', 'Music'),
(2, 'rnb', 'Music'),
(3, 'classic', 'Music'),
(4, 'jazz', 'Music'),
(5, 'Adventure', 'Movies'),
(8, 'Tennis', 'Sport'),
(9, 'Basketball', 'Sport'),
(11, 'hip-hop', 'Software');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `pages`
--

INSERT INTO `pages` (`id`, `name`) VALUES
(1, 'Music'),
(6, 'Sport'),
(7, 'Software'),
(11, 'Music');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`) VALUES
(3, 'admin', 'r@w.nl', '$2y$10$Kkn.vaqhXxVrZPXzwwhyouC6jn.Vvy/LFN85JdQU2CLKXEz/0k006'),
(4, 'rick', 'rick@gmail.nl', '$2y$10$Af9Acv7TF/E7GzQM5TejMuzWy3Nly2BE48kvrXNM6HRJvj2GBKffS'),
(5, 'milos', 'milos@gmail.com', '$2y$10$YCcBeIcE21YcFMzLhK0eweIDGLYHDMq4wJxWIt9ePa17D4Pl0zDtG'),
(6, 'gab', 'r@w.nl', '$2y$10$qk5aE00Jfl9TGYjF2SEfRebLt4A4tp3OUf9ijhUAk22XGmF6OAamy'),
(7, 'frederik', 'frederik@gmail.com', '$2y$10$kasyR4mq59LQ409znwtWD.gK9ggbYry1GRrVfj3fOHYoczSh8ZWVu');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `activitys`
--
ALTER TABLE `activitys`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `activitys`
--
ALTER TABLE `activitys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
--
-- AUTO_INCREMENT voor een tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT voor een tabel `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT voor een tabel `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
