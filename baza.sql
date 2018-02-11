-- phpMyAdmin SQL Dump
-- version home.pl
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 11 Lut 2018, 15:39
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
  `id` int(11) NOT NULL,
  `Imię` varchar(45) NOT NULL,
  `Nazwisko` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `Email_UNIQUE` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Zrzut danych tabeli `Dane Konsumentów`
--

INSERT INTO `Dane Konsumentów` (`id`, `Imię`, `Nazwisko`, `Email`) VALUES
(1, 'Janusz', 'Sundajski', 'nosacz@sundajski.pl'),
(2, 'Grazyna', 'Sundajska', 'sundajska@nosacz.pl'),
(3, 'Kajetan', 'Nowobogacki', 'bogacki@bogacz.pl'),
(4, 'Olimpia', 'Nowobogacka', 'bogacka@bogacz.pl');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Jednoosobowa działalność gospodarcza`
--

CREATE TABLE IF NOT EXISTS `Jednoosobowa działalność gospodarcza` (
  `Id` int(11) NOT NULL,
  `Typ podmiotu` enum('Jedno-osobowa-działalosc','Osoba-fizyczna') DEFAULT NULL,
  `Konsument` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `konsumen_fk_idx` (`Konsument`)
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Zrzut danych tabeli `Jednoosobowa działalność gospodarcza`
--

INSERT INTO `Jednoosobowa działalność gospodarcza` (`Id`, `Typ podmiotu`, `Konsument`) VALUES
(0, 'Jedno-osobowa-działalosc', 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Koszyk`
--

CREATE TABLE IF NOT EXISTS `Koszyk` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ProduktyHigh` enum('Whiskey36 years','Maybach','Yacht') DEFAULT NULL,
  `ProduktyMedium` enum('Starka 30 years','Mercedes SL','Boat') DEFAULT NULL,
  `PorudktLow` enum('Parkowa','Polonez','Kajak') DEFAULT NULL,
  `Konsument` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `Konsument_fk_idx` (`Konsument`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `Koszyk`
--

INSERT INTO `Koszyk` (`Id`, `ProduktyHigh`, `ProduktyMedium`, `PorudktLow`, `Konsument`) VALUES
(1, 'Maybach', NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Produkty`
--

CREATE TABLE IF NOT EXISTS `Produkty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Product Name` enum('Maybach','Rolex','Yacht') DEFAULT NULL,
  `Price` decimal(12,2) DEFAULT NULL,
  `Segment` enum('Low','Medium','High') DEFAULT NULL,
  `VAT` decimal(12,2) DEFAULT NULL,
  `Netto` decimal(12,2) DEFAULT NULL,
  `Brutto` decimal(12,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `Produkty`
--

INSERT INTO `Produkty` (`id`, `Product Name`, `Price`, `Segment`, `VAT`, `Netto`, `Brutto`) VALUES
(1, 'Maybach', '10.00', NULL, '9.00', '10.00', '0.00'),
(2, 'Rolex', '10000.00', NULL, '12.00', '10000.00', '0.00');

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `Jednoosobowa działalność gospodarcza`
--
ALTER TABLE `Jednoosobowa działalność gospodarcza`
  ADD CONSTRAINT `konsumen_fk` FOREIGN KEY (`Konsument`) REFERENCES `Dane Konsumentów` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `Koszyk`
--
ALTER TABLE `Koszyk`
  ADD CONSTRAINT `Konsument_fk` FOREIGN KEY (`Konsument`) REFERENCES `Dane Konsumentów` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
