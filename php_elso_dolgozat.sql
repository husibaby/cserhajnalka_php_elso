-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Dec 15. 14:12
-- Kiszolgáló verziója: 10.4.28-MariaDB
-- PHP verzió: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `php_elso_dolgozat`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `borok`
--

CREATE TABLE `borok` (
  `id` int(11) NOT NULL,
  `nev` varchar(100) NOT NULL,
  `boraszat` varchar(100) NOT NULL,
  `szollof` varchar(100) NOT NULL,
  `evjarat` year(4) NOT NULL,
  `ar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `borok`
--

INSERT INTO `borok` (`id`, `nev`, `boraszat`, `szollof`, `evjarat`, `ar`) VALUES
(1, 'Cabernet Sauvignon Classic', 'Mészáros Borház', 'cabernet sauvignon', '2020', 2590),
(2, 'Bodri Szekszárdi Syrah', 'Bodri Pincészet', 'syrah', '2021', 2190),
(3, 'Bodri Chardonnay \"Sári\" Chardonnay ', 'Bodri Pincészet', 'chardonnay', '2022', 2060),
(4, 'TAKLER Szekszárd Grand ', 'TAKLER Borászat ', 'kékfrankos', '2017', 29500),
(5, 'HEIMANN & FIAI Porkoláb Kadarka ', 'H&F Borászat', 'kadarka', '2021', 6750),
(6, 'Ölelés Merlot ', 'Vida Pincészet', 'merlot', '2019', 2790),
(7, 'Mesterünk', 'Eszterbauer Borászat', 'cabernet franc, merlot', '2019', 6490),
(8, 'Szeleshát Szekszárdi Cabernet Franc ', 'Szeleshát Borászat', 'cabernet franc', '2016', 2450),
(9, 'Vesztergombi Szekszárdi Alpha', 'Vesztergombi Borászat', 'cabernet franc, syrah, merlot, cabernet sauvignon', '2017', 54800),
(10, 'Szekszárdi Sauvignon Blanc', 'Bodri Pincészet', 'sauvignon blanc', '2023', 1900);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `borok`
--
ALTER TABLE `borok`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `borok`
--
ALTER TABLE `borok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
