-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июл 31 2022 г., 22:38
-- Версия сервера: 10.3.34-MariaDB-0ubuntu0.20.04.1
-- Версия PHP: 7.1.33-47+ubuntu20.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cscart`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cscart_department_descriptions`
--

CREATE TABLE `cscart_department_descriptions` (
  `department_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `lang_code` char(2) NOT NULL DEFAULT '',
  `department` varchar(255) NOT NULL DEFAULT '',
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cscart_department_descriptions`
--

INSERT INTO `cscart_department_descriptions` (`department_id`, `lang_code`, `department`, `description`) VALUES
(0, 'en', '', NULL),
(0, 'ru', '', NULL),
(6, 'en', 'second department', 'hello'),
(6, 'ru', 'second department', '<p><strong>Hello</strong><em>World</em>!!!</p>'),
(7, 'en', 'first department', ''),
(7, 'ru', 'first department', ''),
(8, 'en', 'third department', ''),
(8, 'ru', 'third department', ''),
(9, 'en', 'fourth department', ''),
(9, 'ru', 'fourth department', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cscart_department_descriptions`
--
ALTER TABLE `cscart_department_descriptions`
  ADD PRIMARY KEY (`department_id`,`lang_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
