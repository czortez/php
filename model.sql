-- phpMyAdmin SQL Dump
-- version home.pl
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 11 Lut 2018, 10:27
-- Wersja serwera: 5.7.20-18-log
-- Wersja PHP: 7.1.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `24769562_krysti`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Dane Konsumentów`
--

CREATE TABLE IF NOT EXISTS `Dane Konsumentów` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Imię` varchar(45) NOT NULL,
  `Nazwisko` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Zakup produktu low` int(45) NOT NULL,
  `Zakup produktu medium` int(45) NOT NULL,
  `Zakup produktu high` int(45) NOT NULL,
  `Zakup całkowity` int(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `Email_UNIQUE` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=7 ;

--
-- Zrzut danych tabeli `Dane Konsumentów`
--

INSERT INTO `Dane Konsumentów` (`id`, `Imię`, `Nazwisko`, `Email`, `Zakup produktu low`, `Zakup produktu medium`, `Zakup produktu high`, `Zakup całkowity`) VALUES
(1, 'Janusz', 'Sundajski', 'nosacz@sundajski.pl', 5, 1, 0, 6),
(2, 'Grazyna', 'Sundajska', 'sundajska@nosacz.pl', 10, 3, 2, 15),
(5, 'Kajetan', 'Nowobogacki', 'bogacki@bogacz.pl', 0, 0, 100, 100),
(6, 'Olimpia', 'Nowobogacka', 'bogacka@bogacz.pl', 0, 0, 99, 99);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
