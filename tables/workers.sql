-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 17 Maj 2019, 22:13
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
-- Baza danych: `pracownicy_oddzialu`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `adr_oddzialu`
--

CREATE TABLE `adr_oddzialu` (
  `id_adresu_oddzialu` int(11) NOT NULL,
  `adres_oddzialu` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `adr_oddzialu`
--

INSERT INTO `adr_oddzialu` (`id_adresu_oddzialu`, `adres_oddzialu`) VALUES
(1, 'Sloneczna 2/5'),
(2, 'Fabryczna 13/7'),
(3, 'Lesna 10'),
(4, 'Widokowa 12/26'),
(5, 'Portowa 23');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `miasta`
--

CREATE TABLE `miasta` (
  `id_miasta` int(11) NOT NULL,
  `miasto` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `miasta`
--

INSERT INTO `miasta` (`id_miasta`, `miasto`) VALUES
(1, 'Krakow'),
(2, 'Hel'),
(3, 'Gdynia');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oddzialy`
--

CREATE TABLE `oddzialy` (
  `id_oddzialu` int(11) NOT NULL,
  `oddzial` text COLLATE utf8_polish_ci NOT NULL,
  `nr_oddzialu` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `oddzialy`
--

INSERT INTO `oddzialy` (`id_oddzialu`, `oddzial`, `nr_oddzialu`) VALUES
(1, 'Alfaton', 'A1'),
(2, 'Alfabras', 'A2'),
(3, 'Betatryx', 'B1'),
(4, 'Betanor', 'B2'),
(5, 'Betarex', 'B3');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

CREATE TABLE `pracownicy` (
  `id_pracownika` int(11) NOT NULL,
  `Imie` text NOT NULL,
  `Nazwisko` text NOT NULL,
  `Pesel` bigint(20) NOT NULL,
  `id_miasta` int(11) NOT NULL,
  `id_oddzialu` int(11) NOT NULL,
  `id_adresu_oddzialu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `pracownicy`
--

INSERT INTO `pracownicy` (`id_pracownika`, `Imie`, `Nazwisko`, `Pesel`, `id_miasta`, `id_oddzialu`, `id_adresu_oddzialu`) VALUES
(1, 'Jan', 'Gluchomolski', 21108106713, 1, 1, 1),
(2, 'Wiktor', 'Sakowski', 15057698456, 1, 1, 1),
(3, 'Magdalena', 'Waligorska', 13015778123, 1, 2, 2),
(4, 'Ignacy', 'Kuchta', 30127623435, 2, 3, 3),
(5, 'Marzena', 'Sepien', 29035934567, 2, 3, 3),
(6, 'Jadwiga', 'Makusz', 31169675846, 2, 3, 3),
(7, 'Stanislawa', 'Marelkowska', 21016922987, 3, 4, 4),
(8, 'Zuzanna', 'Wal', 17037487678, 3, 5, 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wynagrodzenie_stanowisko`
--

CREATE TABLE `wynagrodzenie_stanowisko` (
  `id_pracownika` int(11) NOT NULL,
  `stanowisko` text COLLATE utf8_polish_ci NOT NULL,
  `wynagrodzenie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `wynagrodzenie_stanowisko`
--

INSERT INTO `wynagrodzenie_stanowisko` (`id_pracownika`, `stanowisko`, `wynagrodzenie`) VALUES
(1, 'Sprzedawca', 2700),
(2, 'Kierowca', 1800),
(3, 'Sprzedawca', 2700),
(4, 'Kierownik sekcji', 3500),
(5, 'Kierowca', 1800),
(6, 'Sprzedawca', 2700),
(7, 'Kierowca', 1800),
(8, 'Sprzedawca', 2700);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`id_pracownika`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  MODIFY `id_pracownika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
