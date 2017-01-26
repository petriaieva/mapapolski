-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Янв 26 2017 г., 14:24
-- Версия сервера: 5.7.11
-- Версия PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `katalog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `katalog`
--

CREATE TABLE `katalog` (
  `Name` varchar(100) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Wojewodstwo` varchar(100) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Description` varchar(256) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Adres` varchar(200) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Telefon` varchar(12) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Stronawww` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `katalog`
--

INSERT INTO `katalog` (`Name`, `Wojewodstwo`, `Description`, `Adres`, `Telefon`, `Stronawww`, `Email`) VALUES
('MK-ARTS', 'Podkarpackie', 'Firma MK-ARTS wykonuje artykuÅ‚y papiernicze t.j. zaproszenia na Å›lub,winietki,zawieszki i przypinki dla goÅ›ci.Zajmuje siÄ™ takÅ¼e projektowaniem i wyrobem zaproszeÅ„ i kartek na komuniÄ™,chrzest czy urodziny.Nowoczesne wzornictwo, elegancki', 'Krasne 36-007 RzeszÃ³w', '608872300', 'www.mk-arts.pl', ' biuro@mk-arts.pl	'),
('AMIGO PARTY â€“ SÅ‚awomir Garnysz', 'ÅšlÄ…skie', 'DoÅ›wiadczony i zawodowy DJ wodzirej na wesele lub poprawiny. Wieloletnie doÅ›wiadczenie.  Posiadam wÅ‚asny sprzÄ™t muzyczny- nagÅ‚oÅ›nienie, oÅ›wietlenie, oÅ›wietlenie dekoracyjne, mikrofony bezprzewodowe oraz rÃ³Å¼ne efekty dodatkowe. ZnajomoÅ›Ä‡ wiedzy', 'Roztok i 7 m 3 43-300 Bielsko BiaÅ‚a', '603 168 747', 'www.djslawek.pl', ' djslawek@poczta.fm'),
('Nasz Taniec', 'Mazowieckie', 'Witam serdecznie, jestem instruktorem taÅ„ca. Posiadam 6 letnie doÅ›wiadczenie w pracy z narzeczonymi nad ich wymarzonym taÅ„cem weselnym. Sama taÅ„czÄ™ od 5 roku Å¼ycia. Co oferujÄ™? Udzielam', 'Rybnicka 97 02-432 Warszawa', '795 888 332', 'www.nasztaniec.pl', 'kasia@nasztaniec.pl');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
