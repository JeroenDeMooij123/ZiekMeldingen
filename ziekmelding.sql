-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 07 jun 2020 om 17:02
-- Serverversie: 10.1.35-MariaDB
-- PHP-versie: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ziekmelding`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `leerlingen`
--

CREATE TABLE `leerlingen` (
  `id` int(11) NOT NULL,
  `naam` varchar(40) NOT NULL,
  `klas` varchar(10) NOT NULL,
  `bdatum` varchar(20) NOT NULL,
  `edatum` varchar(20) NOT NULL,
  `status` varchar(15) NOT NULL,
  `details` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `leerlingen`
--

INSERT INTO `leerlingen` (`id`, `naam`, `klas`, `bdatum`, `edatum`, `status`, `details`) VALUES
(1, 'Jeroen de Mooij', 'IB1B', '7-6-2020', '9-6-2020', 'beter', 'Corona'),
(2, 'Jeroen de Mooij', 'IB1B', '7-6-2020', '9-6-2022', 'ziek', 'Corona'),
(3, 'Luuk beks', 'Ib1B', '10-6-2020', '9-6-2022', 'ziek', 'corona'),
(4, 'Bere Kanters', 'IB1B', '6-7-2020', '11-11-2026', 'beter', 'Corona');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tijdsduur`
--

CREATE TABLE `tijdsduur` (
  `id` int(11) NOT NULL,
  `naam` varchar(40) NOT NULL,
  `bdatum` varchar(20) NOT NULL,
  `edatum` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tijdsduur`
--

INSERT INTO `tijdsduur` (`id`, `naam`, `bdatum`, `edatum`) VALUES
(1, 'Luuk beks', '10-6-2020', '9-6-2022'),
(2, 'Luuk beks', '10-6-2020', '9-6-2024'),
(3, 'Bere Kanters', '6-7-2020', '11-11-2020'),
(4, 'Bere Kanters', '6-7-2020', '11-11-2026');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `leerlingen`
--
ALTER TABLE `leerlingen`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `tijdsduur`
--
ALTER TABLE `tijdsduur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `leerlingen`
--
ALTER TABLE `leerlingen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `tijdsduur`
--
ALTER TABLE `tijdsduur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
