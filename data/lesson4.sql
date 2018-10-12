-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 09 2018 г., 10:01
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lesson4`
--
CREATE DATABASE IF NOT EXISTS `lesson4` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `lesson4`;

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discount_price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `country`, `price`, `img`, `discount_price`) VALUES
(1, 'Виноград', 'Армения', 158.9, '/img/102.JPG', 3.5),
(2, 'Помидоры', ' Турция', 15.1, '/img/81.jpg', 2.1),
(3, 'Перец', 'Турция', 18, '/img/12.jpg', 2),
(4, 'Редис', 'Россия', 9.2, '/img/28.jpg', 2.2),
(5, 'Лук', 'Россия', 5.6, '/img/15.jpg', 2.6),
(6, 'Клубника', ' Греция', 42.4, '/img/128.jpg', 2.4),
(7, 'Орел', 'Америка', 1000, '/img/5.jpg', 2),
(8, 'Автомобиль', 'Япония', 25000, '/img/1.jpg', 1050);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `img` (`img`),
  ADD KEY `name` (`name`),
  ADD KEY `country` (`country`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
