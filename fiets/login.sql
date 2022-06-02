-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 05 nov 2021 om 13:24
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
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `loginuser`
--

CREATE TABLE `loginuser` (
  `gebruiksnaam` varchar(50) NOT NULL,
  `klant_naam` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `loginuser`
--

INSERT INTO `loginuser` (`gebruiksnaam`, `klant_naam`, `password`, `email`) VALUES
('', 'Gurpreet', '$2y$10$2/wqTXr/Hjyr7BNQKYAOxe7y9aZwoY36KsB0ahTYWATpSrFsq7Wj2', 'hyg@gmail.com'),
('Gurpreet', 'Gurpreet Singh', '$2y$10$YgzxkOn.Ffl.udWV8cYv7O5dXYhRhZhDQwH4zWdmY0IyGnD9AxYlS', 'Singh@gmail.com'),
('guruuuu', 'grr', '$2y$10$S026JaHP6XgMSRf.OVe9neL1kzC/7i9L3vTfwoVW5xfWxgu1WKQby', 's@gmail.com'),
('guruuuu', 'grr', '$2y$10$4KNWw96/zwxLD8imkrI4wOeviNbRuqzRziAP2zUYTY8DyckowX7ty', 's@gmail.com'),
('Gurpreer2002', 'Gurpreet', '$2y$10$3RKXczVj9pndtJxo0ytnuus2Dw6THAUxuk9KWk/HkGg5G8ztpTJca', 'Singhgurpreet14082002@gmail.com'),
('gg', 'gg', '$2y$10$A5nVn7JJfgm9LMB.jxmaEO0n.KCIC.hylxeSYddXUi4NoknC7x2V.', 'gg@gmail.com'),
('Jattstaan', 'Mohitpreet Singh', '$2y$10$Qz/Jy93AVgDKb9DKbmqfBuQo8R2a.Ux3WwNC3.H0cq1WdnZ.YztEy', 'preetmohit555@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
