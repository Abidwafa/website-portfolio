-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 05 nov 2021 om 13:21
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reserveren`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestellen`
--

CREATE TABLE `bestellen` (
  `id_besteld` int(11) NOT NULL,
  `voornaam` varchar(20) NOT NULL,
  `achternaam` varchar(20) NOT NULL,
  `telefoon` mediumint(10) NOT NULL,
  `adres` varchar(30) NOT NULL,
  `huisnummer_toevoeging` varchar(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `datum` date NOT NULL,
  `tijd` time NOT NULL,
  `id_fiets` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `bestellen`
--

INSERT INTO `bestellen` (`id_besteld`, `voornaam`, `achternaam`, `telefoon`, `adres`, `huisnummer_toevoeging`, `email`, `datum`, `tijd`, `id_fiets`) VALUES
(1, '', '', 0, '', '', '', '0000-00-00', '00:00:00', 1),
(2, '', '', 0, '', '', '', '0000-00-00', '00:00:00', 1),
(3, '', '', 0, '', '', '', '0000-00-00', '00:00:00', 2),
(4, '', '', 0, '', '', '', '0000-00-00', '00:00:00', 3),
(5, '', '', 0, '', '', '', '0000-00-00', '00:00:00', 1),
(6, 'jhug', 'bjhju', 0, '', '', '', '0000-00-00', '00:00:00', 11);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `fietsen`
--

CREATE TABLE `fietsen` (
  `id_fiets` int(11) NOT NULL,
  `soort` varchar(30) NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `fietsen`
--

INSERT INTO `fietsen` (`id_fiets`, `soort`, `type`) VALUES
(1, 'Elektrische fiets', 'AMIGO E-Active Dames'),
(2, 'Elektrische fiets', 'AMIGO E-Pulse Heren'),
(3, 'Mountainbike', 'Geroni Magnum Junior'),
(4, 'Mountainbike', 'Deed Vector Pro 294'),
(5, 'BMX', 'AMIGO Extreme'),
(6, 'BMX', 'AMIGO Fly 20'),
(7, 'Transportfiets', 'AMIGO Forest heren'),
(8, 'Transportfiets', 'AMIGO Eclypse dames'),
(9, 'Stadfiets', 'AMIGO Style-S2 heren'),
(10, 'Omafiets', 'Export Dames'),
(11, 'Opafiets', 'Export Heren'),
(12, 'Kinderfiets', 'AMIGO Rock Junior'),
(13, 'Kinderfiets', 'Volare Rocky'),
(14, 'Moederfiets', 'Burgers moederfiets'),
(15, 'Moederfiets', 'Burgers moederfiets'),
(16, 'Driewieler', 'QPlay driewieler Elite Junior '),
(17, 'Driewieler', 'QPlay driewieler Elite Junior '),
(18, 'Loopfiets', 'Van Dijk Toys loopfiets lichtblauw'),
(19, 'Loopfiets', 'JAMARA loopfiets rood'),
(20, 'Elektrische akfiets', 'Troy elektrische bakfiets');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bestellen`
--
ALTER TABLE `bestellen`
  ADD PRIMARY KEY (`id_besteld`),
  ADD KEY `connect` (`id_fiets`);

--
-- Indexen voor tabel `fietsen`
--
ALTER TABLE `fietsen`
  ADD PRIMARY KEY (`id_fiets`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bestellen`
--
ALTER TABLE `bestellen`
  MODIFY `id_besteld` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `fietsen`
--
ALTER TABLE `fietsen`
  MODIFY `id_fiets` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `bestellen`
--
ALTER TABLE `bestellen`
  ADD CONSTRAINT `connect` FOREIGN KEY (`id_fiets`) REFERENCES `fietsen` (`id_fiets`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
