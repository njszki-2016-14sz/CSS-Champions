-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2016. Okt 26. 12:33
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
  `email` varchar(26) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `ujtabladokumentum`
--

INSERT INTO `ujtabladokumentum` (`id`, `username`, `password`, `email`) VALUES
(1, 'Bob', 'asd', 'bob@ujemail.docx');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
