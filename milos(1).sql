-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 14 mrt 2017 om 09:58
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `milos`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `articleImage` varchar(255) NOT NULL,
  `articleDescription` text NOT NULL,
  `date_created` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pageTitle` varchar(50) NOT NULL,
  `pageDescription` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden geëxporteerd voor tabel `content`
--

INSERT INTO `content` (`id`, `pageTitle`, `pageDescription`) VALUES
(1, 'Sport', 'fsdfsfsdfsdfsdfsfdsfssdfsfsdfsdfsdfsd');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `footer`
--

CREATE TABLE IF NOT EXISTS `footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `footerCopyright` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `header`
--

CREATE TABLE IF NOT EXISTS `header` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menuLogo` varchar(50) NOT NULL,
  `headerImage` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pagelinks`
--

CREATE TABLE IF NOT EXISTS `pagelinks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pageLink` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `projectTitle` varchar(50) NOT NULL,
  `projectImage` varchar(255) NOT NULL,
  `projectDescription` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden geëxporteerd voor tabel `project`
--

INSERT INTO `project` (`id`, `projectTitle`, `projectImage`, `projectDescription`) VALUES
(1, 'New project', 'fdsfsdfdsfds', 'fdsfsfsfsdf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
