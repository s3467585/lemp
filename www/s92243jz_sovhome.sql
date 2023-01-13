-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: mysql
-- Время создания: Янв 13 2023 г., 11:48
-- Версия сервера: 8.0.31
-- Версия PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `s92243jz_sovhome`
--

-- --------------------------------------------------------

--
-- Структура таблицы `sensor`
--

CREATE TABLE `sensor` (
  `pir1` int NOT NULL,
  `pir2` int NOT NULL,
  `rele1` int NOT NULL,
  `light` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `sensor`
--

INSERT INTO `sensor` (`pir1`, `pir2`, `rele1`, `light`) VALUES
(0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` varchar(50) NOT NULL,
  `value` tinytext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `value`) VALUES
('connection', '1666068104'),
('reboot', '1664686424'),
('ram', '1024');

-- --------------------------------------------------------

--
-- Структура таблицы `stat`
--

CREATE TABLE `stat` (
  `id` int NOT NULL,
  `temp0` smallint NOT NULL,
  `temp1` smallint NOT NULL,
  `temp2` smallint NOT NULL,
  `time` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `stat`
--

INSERT INTO `stat` (`id`, `temp0`, `temp1`, `temp2`, `time`) VALUES
(43465, 6, 44, 31, 1666050538),
(43464, 6, 44, 31, 1666049287),
(43463, 5, 44, 31, 1666044280),
(43462, 5, 44, 31, 1666041776),
(43461, 5, 44, 31, 1666040524),
(43460, 5, 44, 31, 1666039272),
(43475, 8, 44, 31, 1666068104),
(43474, 8, 44, 31, 1666065600),
(43473, 7, 44, 31, 1666063097),
(43472, 7, 44, 31, 1666061845),
(43471, 7, 44, 31, 1666060593),
(43470, 7, 44, 31, 1666059341),
(43469, 7, 44, 31, 1666058089),
(43468, 7, 44, 31, 1666056838),
(43467, 6, 44, 31, 1666055586),
(43466, 7, 44, 31, 1666054294);

-- --------------------------------------------------------

--
-- Структура таблицы `stat_1`
--

CREATE TABLE `stat_1` (
  `id` int UNSIGNED NOT NULL,
  `temp0` smallint NOT NULL,
  `temp1` smallint NOT NULL,
  `temp2` smallint NOT NULL,
  `time` int NOT NULL,
  `timestemp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `stat_1`
--

INSERT INTO `stat_1` (`id`, `temp0`, `temp1`, `temp2`, `time`, `timestemp`) VALUES
(1, 25, 10, 15, 1673322882, '2023-01-10 04:03:58'),
(2, 25, 10, 15, 1673322882, '2023-01-10 04:04:00'),
(3, 25, 10, 15, 1673322882, '2023-01-10 04:03:58'),
(4, 25, 10, 15, 1673322882, '2023-01-10 04:04:00'),
(5, 25, 10, 15, 1673322882, '2023-01-10 04:03:58'),
(6, 25, 10, 15, 1673322882, '2023-01-10 04:04:00'),
(7, 25, 10, 15, 1673322882, '2023-01-10 04:03:58'),
(8, 25, 10, 15, 1673322882, '2023-01-10 04:04:00'),
(9, 25, 10, 15, 1673322882, '2023-01-10 04:03:58'),
(10, 25, 10, 15, 1673322882, '2023-01-10 04:04:00'),
(11, 25, 10, 15, 1673322882, '2023-01-10 04:03:58'),
(12, 25, 10, 15, 1673322882, '2023-01-10 04:04:00'),
(13, 25, 10, 15, 1673322882, '2023-01-10 04:03:58'),
(14, 25, 10, 15, 1673322882, '2023-01-10 04:04:00'),
(15, 25, 10, 15, 1673322882, '2023-01-10 04:03:58'),
(16, 25, 10, 15, 1673322882, '2023-01-10 04:04:00');

-- --------------------------------------------------------

--
-- Структура таблицы `stat_2`
--

CREATE TABLE `stat_2` (
  `id` int UNSIGNED NOT NULL,
  `temp0` smallint NOT NULL,
  `temp1` smallint NOT NULL,
  `temp2` smallint NOT NULL,
  `time` int NOT NULL,
  `timestemp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `stat_2`
--

INSERT INTO `stat_2` (`id`, `temp0`, `temp1`, `temp2`, `time`, `timestemp`) VALUES
(1, 25, 10, 15, 1673322882, '2023-01-10 06:14:32');

-- --------------------------------------------------------

--
-- Структура таблицы `stat_5`
--

CREATE TABLE `stat_5` (
  `id` int UNSIGNED NOT NULL,
  `temp0` smallint NOT NULL,
  `temp1` smallint NOT NULL,
  `temp2` smallint NOT NULL,
  `time` int NOT NULL,
  `timestemp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `top_menu`
--

CREATE TABLE `top_menu` (
  `id` int NOT NULL,
  `link` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `top_menu`
--

INSERT INTO `top_menu` (`id`, `link`, `name`, `text`, `title`) VALUES
(1, '/main', 'main', '', 'main'),
(2, '/user', 'user', '', 'user');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `full_name` varchar(365) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `login` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `auth_time` int DEFAULT NULL,
  `creation_time` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `auth_time`, `creation_time`) VALUES
(103, '1', '1', '1', '$2y$10$t9528b0zO78dpSwz7wOeQeOWoBJq6Y20UfAmaH029ZQYn1ehxhyxW', NULL, '2023-01-09 10:53:21'),
(104, '2', '2', '2', '$2y$10$1uSPWMEnVw92dtohnml/6utmksvWnexjb4VBBT0pd3cW7jBv1lpxi', NULL, '2023-01-10 06:12:03'),
(105, '3', '3', '3', '$2y$10$Gk9PEUyDz4GpJv3vnm/x6eGBhUieu.F3f41z/DZEIs1OSmC5KM2DC', NULL, '2023-01-11 06:41:06'),
(106, '4', '4', '4', '$2y$10$oruVcve.wKucUr2oflH9h.YFJKg9btDfLWKbGs5f3TsQgfNNxug9.', NULL, '2023-01-11 06:44:12'),
(107, '5', '5', '5', '$2y$10$l1HgiDD/Od88rCJu1Fa4Auy37nC/jH/3.EmXQAsF76WHVfDuFyfri', NULL, '2023-01-11 06:44:35');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `stat`
--
ALTER TABLE `stat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `stat_1`
--
ALTER TABLE `stat_1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `stat_2`
--
ALTER TABLE `stat_2`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `stat_5`
--
ALTER TABLE `stat_5`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `top_menu`
--
ALTER TABLE `top_menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `stat`
--
ALTER TABLE `stat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43476;

--
-- AUTO_INCREMENT для таблицы `stat_1`
--
ALTER TABLE `stat_1`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `stat_2`
--
ALTER TABLE `stat_2`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `stat_5`
--
ALTER TABLE `stat_5`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `top_menu`
--
ALTER TABLE `top_menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
