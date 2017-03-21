-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 21 mrt 2017 om 09:49
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
-- Tabelstructuur voor tabel `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `articleImage` varchar(255) NOT NULL,
  `articleDescription` text NOT NULL,
  `date_created` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `articles`
--

INSERT INTO `articles` (`id`, `articleImage`, `articleDescription`, `date_created`) VALUES
(1, 'mffm', 'hohohohohohhohohohohohohohohohohoh', '2017-03-16 11:18:40'),
(2, 'fefef', 'feefefesdc', '2017-03-16 11:18:40'),
(3, 'fsdfsfa', 'afsdvrrefc', '2017-03-16 11:19:00'),
(4, 'gredsdq', 'j7ujyt6j', '2017-03-16 11:19:00'),
(5, 'hytyh', 'grfeda', '2017-03-16 11:19:22'),
(6, 'tbgrfed', 'weretr', '2017-03-16 11:19:22'),
(7, 'hytyh', 'grfeda', '2017-03-16 11:19:29'),
(8, 'tbgrfed', 'weretr', '2017-03-16 11:19:29');

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
(5, 'milos', 'milos@gmail.com', '$2y$10$YCcBeIcE21YcFMzLhK0eweIDGLYHDMq4wJxWIt9ePa17D4Pl0zDtG');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `articles`
--
ALTER TABLE `articles`
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
-- AUTO_INCREMENT voor een tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
