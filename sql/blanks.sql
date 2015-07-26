-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Час створення: Лип 26 2015 р., 11:22
-- Версія сервера: 5.6.25-0ubuntu0.15.04.1
-- Версія PHP: 5.6.4-4ubuntu6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База даних: `zvit`
--

-- --------------------------------------------------------

--
-- Структура таблиці `blanks`
--

CREATE TABLE IF NOT EXISTS `blanks` (
`id` int(3) NOT NULL,
  `code` varchar(8) NOT NULL,
  `name` varchar(250) NOT NULL,
  `face` int(1) NOT NULL,
  `period` int(1) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `parent` int(3) NOT NULL,
  `category` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `blanks`
--

INSERT INTO `blanks` (`id`, `code`, `name`, `face`, `period`, `start_date`, `end_date`, `parent`, `category`) VALUES
(1, 'F0103304', 'Податкова декларація платника єдиного податку - Фізичної особи-підприємця', 1, NULL, NULL, NULL, 0, 2),
(2, 'F0500105', 'Форма № 1 ДФ Податковий розрахунок сум доходу, нарахованого (сплаченого) на користь платників податку, і сум утриманого з них податку', 1, NULL, NULL, NULL, 0, 7),
(3, 'J0500105', 'Форма № 1 ДФ Податковий розрахунок сум доходу, нарахованого (сплаченого) на користь платників податку, і сум утриманого з них податку', 2, NULL, NULL, NULL, 0, 7);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `blanks`
--
ALTER TABLE `blanks`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `blanks`
--
ALTER TABLE `blanks`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
