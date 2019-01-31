-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Фев 01 2019 г., 02:47
-- Версия сервера: 5.6.39-83.1
-- Версия PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cm32380_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id_book` int(20) NOT NULL AUTO_INCREMENT,
  `genre` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `year` int(20) NOT NULL,
  PRIMARY KEY (`id_book`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`id_book`, `genre`, `autor`, `name`, `year`) VALUES
(44, 'Роман-антиутопия', 'Олдос Хаксли', 'О дивный новый мир', 1985),
(43, 'Ужасы', 'Стивен Кинг', 'Мгла', 1997),
(45, 'Ужасы', 'Стивен Кинг', 'Оно', 1986);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
