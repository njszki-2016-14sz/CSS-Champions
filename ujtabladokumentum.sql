-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2016. Nov 21. 09:39
-- Kiszolgáló verziója: 5.7.11
-- PHP verzió: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `ujadatbazisdokumentum`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `ujtabladokumentum`
--

CREATE TABLE `ujtabladokumentum` (
  `id` int(11) NOT NULL,
  `username` varchar(26) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(26) NOT NULL,
  `TeljesNev` varchar(28) DEFAULT NULL,
  `Munka` varchar(20) DEFAULT NULL,
  `Suli` varchar(35) DEFAULT NULL,
  `Kapcsolat` varchar(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `ujtabladokumentum`
--

INSERT INTO `ujtabladokumentum` (`id`, `username`, `password`, `email`, `TeljesNev`, `Munka`, `Suli`, `Kapcsolat`) VALUES
(1, 'Bob', 'asd', 'bob@ujemail.docx', 'Bob Bobinson', 'Bober', 'Elementary bob school', 'Complicated'),
(2, 'fel', 'asd', 'asd', '', NULL, NULL, NULL),
(3, 'ASD', 'asd', 'asd', '', NULL, NULL, NULL),
(4, 'pici', 'asd', 'asd@asd.hu', NULL, NULL, NULL, NULL),
(5, 'lolo', 'lo', 'asd@asd.com', NULL, NULL, NULL, NULL);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `ujtabladokumentum`
--
ALTER TABLE `ujtabladokumentum`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `ujtabladokumentum`
--
ALTER TABLE `ujtabladokumentum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
