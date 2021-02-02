-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Maj 2019, 18:55
-- Wersja serwera: 10.1.38-MariaDB
-- Wersja PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `zamowienia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `id_klienta` int(11) NOT NULL,
  `imie` text COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  `kod_pocztowy` text COLLATE utf8_polish_ci NOT NULL,
  `ulica` text COLLATE utf8_polish_ci NOT NULL,
  `id_miasta` int(11) NOT NULL,
  `id_wojewodztwa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`id_klienta`, `imie`, `nazwisko`, `kod_pocztowy`, `ulica`, `id_miasta`, `id_wojewodztwa`) VALUES
(1, 'Jan', 'Kowalski', '61-600', 'ul. Jana Pawla 12', 1, 1),
(2, 'Anna', 'Dymna', '30-600', 'ul. Sztasica 1', 2, 2),
(3, 'Piotr', 'Wawrzyniak', '30-600', 'ul. Niepodleglosci 1', 2, 2),
(4, 'Jan', 'Kowalski', '61-600', 'ul. Jana Pawla 12', 1, 1),
(5, 'Jan', 'Kowalski', '21-120', 'ul. Poznanska 8', 3, 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `miasta`
--

CREATE TABLE `miasta` (
  `id_miasta` int(11) NOT NULL,
  `nazwa_miasta` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `miasta`
--

INSERT INTO `miasta` (`id_miasta`, `nazwa_miasta`) VALUES
(1, 'Poznan'),
(2, 'Krakow'),
(3, 'Wroclaw');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkt`
--

CREATE TABLE `produkt` (
  `id_produktu` int(11) NOT NULL,
  `nazwa_produktu` text COLLATE utf8_polish_ci NOT NULL,
  `cena_jedn` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `produkt`
--

INSERT INTO `produkt` (`id_produktu`, `nazwa_produktu`, `cena_jedn`) VALUES
(1, 'Opony 205 R16', '300 PLN'),
(2, 'Alufelgi Silver', '550 PLN'),
(3, 'Komplet zarowek', '80 PLN'),
(4, 'Plyn do spryskiwacz, Trojkat ostrzegawczy', '10 PLN'),
(1, 'Opony 205 R16', '300 PLN'),
(2, 'Alufelgi Silver', '550 PLN'),
(3, 'Komplet zarowek', '80 PLN'),
(4, 'Plyn do spryskiwacz, Trojkat ostrzegawczy', '10 PLN');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wojewodztwa`
--

CREATE TABLE `wojewodztwa` (
  `id_wojewodztwa` int(11) NOT NULL,
  `nazwa_wojewodztwa` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `wojewodztwa`
--

INSERT INTO `wojewodztwa` (`id_wojewodztwa`, `nazwa_wojewodztwa`) VALUES
(1, 'Wielkopolskie'),
(2, 'Malopolskie'),
(3, 'Dolnoslaskie');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienie`
--

CREATE TABLE `zamowienie` (
  `id_zamowienia` int(11) NOT NULL,
  `id_klienta` int(11) NOT NULL,
  `id_produktu` int(11) NOT NULL,
  `liczba_sztuk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `zamowienie`
--

INSERT INTO `zamowienie` (`id_zamowienia`, `id_klienta`, `id_produktu`, `liczba_sztuk`) VALUES
(101, 1, 1, 4),
(102, 2, 2, 4),
(103, 3, 2, 4),
(104, 4, 3, 1),
(105, 5, 4, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
