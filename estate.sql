-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 10.0.0.57
-- Время создания: Окт 04 2022 г., 21:08
-- Версия сервера: 5.7.37-40
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `f0725656_test_base`
--

-- --------------------------------------------------------

--
-- Структура таблицы `estate`
--

CREATE TABLE `estate` (
  `id` int(3) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `adress` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(30,0) NOT NULL,
  `status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `estate`
--

INSERT INTO `estate` (`id`, `name`, `adress`, `description`, `price`, `status`, `image`) VALUES
(1, 'Объект 1', 'ул. Мамадышская 45-78', '9-ый дом, 180 кв. метров, двухуровневая', '7500000', '1', './images/16.jpg'),
(2, 'Объект 2', 'ул. Гагарина 56-56', 'ул. Азата Аббасова, д. 11, Казань', '3900000', '1', './images/1930134.jpg'),
(3, 'Объект 3', 'ул. Ленинградская 97-01', 'частный дом из сруба, 100 кв.метров', '4500000', '1', './images/1930518.jpg'),
(4, 'Объект 4\n', 'ул. Галимджана Баруди 59-78\n', 'Кирпичный дом, 80 кв. метров\n', '3200000', '1', './images/1944656.jpg'),
(5, 'Объект 5', 'ул. 50 лет Победы 24-32\n', 'Панельный дом, 45 кв. метров, с двумя лоджиями\n', '2500000', '1', './images/dom-gorodishce-141072644-2.jpg'),
(6, 'Объект 6', 'ул. Аббасова 11-22\n', 'Продается 2-комн. кв., 64 м2, 9/19 этаж\n', '3900000', '1', './images/dom-niva-178145527-2.jpg'),
(7, 'Объект 7', ' ул. Лушникова 50-7\n', 'Продается 2-комн. кв., 45.8 м2, 1/5 этаж\n', '2600000', '1', ' 	./images/foto_largest.jpg'),
(8, 'Объект 8', ' ул. Широка 97-01\n', 'Продается 2-комн. кв., 63 м2, 9/10 этаж\nПродается 2-комн. кв., 45.8 м2, 1/5 этаж\n', '4350000', '1', ' 	./images/getImage-50.jpeg'),
(9, 'Объект 9', 'ул. Хо Ши Мина  56-321\n', 'Продается 4-комн. кв., 83.5 м2, 10/11 этаж\n', '3750000', '1', './images/novostroyka-	usady-197995467-2.jpg'),
(10, 'Объект 10', ' ул. Фучика 6-97\n', 'Продается 2-комн. кв., 62.8 м2, 2/16 этаж\n', '5200000', '1', ' 	./images/R3.jpg'),
(11, 'Объект 10', ' ул. Фучика 6-97\r\n', 'Продается 2-комн. кв., 62.8 м2, 2/16 этаж\r\n', '5200000', '1', ' 	./images/type_b.jpg'),
(12, 'Объект xxx', ' ул. Фучика 6-989', 'Продается 2-комн. кв., 62.8 м2, 2/16 этаж', '520044', '0', './images/type_b.jpg'),
(29, 'ррр', 'Гагарина 23-99', '111', '600', '0', './images/3131930134.jpg'),
(30, '66', 'ул. Ленина 7', '66', '66', '0', './images/420foto_largest.jpg'),
(31, 'Новый объект', 'ул. Нормандия-Неман, д. 45 - 69', 'Новвое', '3300000', '0', './images/608dom-gorodishce-141072644-2.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `estate`
--
ALTER TABLE `estate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `estate`
--
ALTER TABLE `estate`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
