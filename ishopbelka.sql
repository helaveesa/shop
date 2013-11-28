-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 28 2013 г., 14:01
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `ishopbelka`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `cat_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `cat_id`) VALUES
(1, 'Ноутбуки', 'notebook'),
(2, 'Персональные компьютеры', 'pc');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(100) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `post_index` varchar(100) NOT NULL,
  `e-mail` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `image`, `category`) VALUES
(1, 'Asus X501U (темно-синий)', 'Процессор: AMD E2 1800\r\nЕмкость HDD (Гб): 320\r\nРазмер экрана: 15.6\r\nВидеокарта: AMD Radeon HD 7340\r\nОС: Microsoft Windows 8', '13.00', '1.png', 'notebook'),
(2, 'Acer Aspire E1-571G-53234G50Mnks (черный) ', 'Процессор: Intel® Core™ i5 3230M\r\nЕмкость HDD (Гб): 500\r\nРазмер экрана: 15.6\r\nВидеокарта: NVIDIA GeForce 710M\r\nОС: Microsoft Windows 8', '17.00', '2.png', 'notebook'),
(3, 'Lenovo IdeaPad G500 (черный металлик)', 'Процессор: Intel® Pentium® 2020M\r\nЕмкость HDD (Гб): 320\r\nРазмер экрана: 15.6\r\nВидеокарта: Intel GMA HD\r\nОС: DOS', '11.00', '3.png', 'notebook'),
(4, 'Apple MacBook Air 13 Mid 2013 (MD760RU/A) ', 'Процессор: Intel® Core™ i5\r\nРазмер экрана: 13.3\r\nВидеокарта: Intel GMA HD 5000\r\nОС: Mac OS X', '41.00', '4.png', 'notebook'),
(5, 'Apple iMac ME086RU/A', 'Процессор: Intel® Core™ i5\r\nРазмер экрана (дюйм): 21.5\r\nВидеокарта: Intel Iris Pro Graphics\r\nОС: Mac OS X', '52.00', '5.png', 'pc'),
(6, 'Apple iMac MD094RU/A', 'Процессор: Intel® Core™ i5\r\nРазмер экрана (дюйм): 21.5\r\nВидеокарта: NVIDIA GeForce GT 650M\r\nОС: Mac OS X', '56.00', '6.png', 'pc'),
(7, 'MSI Wind Top AP1612-023XRU (черный) ', 'Процессор: Intel® Celeron® B830\r\nРазмер экрана (дюйм): 15.6\r\nСенсорный дисплей: да\r\nВидеокарта: Intel GMA HD\r\nОС: DOS', '13.00', '7.png', 'pc'),
(8, 'MSI Wind Top AE2410G-233 (черный) ', 'Процессор: Intel® Core™ i5 2450M\r\nРазмер экрана (дюйм): 23.6\r\nВидеокарта: NVIDIA GeForce GT 630M\r\nОС: Microsoft Windows 7 Home Premium', '32.00', '8.png', 'pc');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
