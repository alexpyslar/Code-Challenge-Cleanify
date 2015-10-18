-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 18 2015 г., 03:48
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `test_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `fields`
--

CREATE TABLE IF NOT EXISTS `fields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `field_type` varchar(100) NOT NULL,
  `field_name` varchar(300) NOT NULL DEFAULT '0',
  `field_size` int(11) NOT NULL DEFAULT '0',
  `field_order` int(11) NOT NULL,
  `default_value` varchar(100) NOT NULL DEFAULT '0',
  `required` tinyint(1) NOT NULL DEFAULT '1',
  `field_classes` varchar(100) NOT NULL,
  `field_label` varchar(100) NOT NULL,
  `validator` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `field_order` (`field_order`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `fields`
--

INSERT INTO `fields` (`id`, `field_type`, `field_name`, `field_size`, `field_order`, `default_value`, `required`, `field_classes`, `field_label`, `validator`) VALUES
(1, 'input', 'last_name', 100, 2, 'Input your last name...', 1, 'required', 'Last name: ', '/^[a-z0-9_]+$/i'),
(2, 'input', 'first_name', 100, 1, 'Input your name...', 1, '', 'First name: ', '/^[a-z0-9_]+$/i'),
(3, 'email', 'email', 100, 3, 'Input your email...', 1, '', 'Your email: ', '/^[_a-z0-9-]+(\\.[_a-z0-9-]+)*@[a-z0-9-]+(\\.[a-z0-9-]+)*(\\.[a-z]{2,3})$/'),
(4, 'input', 'street', 100, 4, 'Write street...', 1, '', 'Your street: ', '/^[a-z0-9_]+$/i'),
(5, 'input', 'city', 100, 5, 'Write city...', 1, '', 'Your city: ', '/^[a-z0-9_]+$/i'),
(6, 'input', 'state', 100, 6, 'Write state...', 1, '', 'Your state: ', '/^[a-z0-9_]+$/i'),
(7, 'input', 'zip_postal', 100, 7, 'Write zip/postal...', 1, '', 'Your zip/postal: ', '/^\\d{5}([\\-]?\\d{4})?$/i'),
(10, 'input', 'fax', 100, 9, 'Write fax...', 0, '', 'Your fax: ', '/^[0-9]{10}$/i'),
(11, 'input', 'phone', 100, 8, 'Write phone...', 1, '', 'Your phone: ', '/^[0-9]{10}$/i'),
(12, 'checkbox', 'fax_service_aggreement', 100, 11, '', 1, '', 'Term of Services agreement', '/^[a-z0-9_]+$/i'),
(13, 'dropdown', 'best_time_to_contact', 100, 10, 'Morning,Afternoon,Evening', 1, '', 'Select', '/^[a-z0-9_]+$/i'),
(18, 'submit', 'btn_submit', 100, 12, 'Submit Form', 1, 'submitbtn', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
