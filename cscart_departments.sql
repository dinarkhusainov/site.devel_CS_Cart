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
-- Структура таблицы `cscart_departments`
--

CREATE TABLE `cscart_departments` (
  `department_id` int(11) UNSIGNED NOT NULL,
  `position` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `status` varchar(1) NOT NULL DEFAULT 'A',
  `timestamp` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `upd_timestamp` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `adm_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cscart_departments`
--

INSERT INTO `cscart_departments` (`department_id`, `position`, `status`, `timestamp`, `upd_timestamp`, `user_id`, `adm_id`) VALUES
(6, 2, 'A', 1658955600, 0, 3, 11),
(7, 1, 'A', 1658955600, 0, 11, 3),
(8, 3, 'A', 1659128400, 0, 3, 11),
(9, 4, 'A', 1659214800, 0, 3, 11);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cscart_departments`
--
ALTER TABLE `cscart_departments`
  ADD PRIMARY KEY (`department_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cscart_departments`
--
ALTER TABLE `cscart_departments`
  MODIFY `department_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
