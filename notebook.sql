-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 10 2020 г., 21:48
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bazait`
--

-- --------------------------------------------------------

--
-- Структура таблицы `notebook`
--

CREATE TABLE `notebook` (
  `id_note` int(11) NOT NULL,
  `name_company` text NOT NULL,
  `position` text NOT NULL,
  `the_resume` text NOT NULL,
  `details` text NOT NULL,
  `the_day` int(2) NOT NULL,
  `the_month` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `notebook`
--

INSERT INTO `notebook` (`id_note`, `name_company`, `position`, `the_resume`, `details`, `the_day`, `the_month`) VALUES
(1, 'qqqqqqqqqqqq', 'qqqqqqqq', 'q', 'q', 11, 11),
(2, 'BazaIT', 'FRONTEND WEB DEVELOPER', 'Very good candidat', 'All right!', 1, 1),
(31, 'cool', 'good', 'hhhhhhh', '1111111', 1, 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `notebook`
--
ALTER TABLE `notebook`
  ADD PRIMARY KEY (`id_note`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `notebook`
--
ALTER TABLE `notebook`
  MODIFY `id_note` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
