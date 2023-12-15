-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: mysql
-- Время создания: Дек 15 2023 г., 10:41
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
-- Структура таблицы `deviceParam`
--

CREATE TABLE `deviceParam` (
  `id` int NOT NULL,
  `devName` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ip` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `upTime` int NOT NULL,
  `sysLoad` int DEFAULT NULL,
  `mac` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `devKey` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `deviceParam`
--

INSERT INTO `deviceParam` (`id`, `devName`, `ip`, `upTime`, `sysLoad`, `mac`, `devKey`) VALUES
(12, '1', '1', 1, 1, '1', NULL),
(10, '1', '1', 1, 1, '1', NULL),
(11, '1', '1', 1, 1, '1', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `devStatus`
--

CREATE TABLE `devStatus` (
  `id` int NOT NULL,
  `devName` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `devKey` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `ip` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `mac` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `bssid` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `sysLoad` int DEFAULT NULL,
  `upTime` int DEFAULT NULL,
  `sendTime` int DEFAULT NULL,
  `connectTime` int DEFAULT NULL,
  `isntp` int DEFAULT NULL,
  `json` json DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `devStatus`
--

INSERT INTO `devStatus` (`id`, `devName`, `devKey`, `ip`, `mac`, `bssid`, `sysLoad`, `upTime`, `sendTime`, `connectTime`, `isntp`, `json`) VALUES
(1, 'SovHome_Esp12N_1', NULL, '192.168.10.250', '60:01:94:37:7B:6D', '76:4D:28:7D:37:EA', 15, 52, 1702468795, 1702468795, 1, '{\"hum\": 14, \"pres\": 769, \"temp\": 23}'),
(2, 'SovHome_Esp12N_3', NULL, '192.168.10.248', '50:02:91:7B:7B:85', '76:4D:28:7D:37:EA', 6, 52, 1702468799, 1702468799, 1, '{\"hum\": 14, \"pres\": 769, \"temp\": 23}');

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
  `temp0` int NOT NULL,
  `temp1` int NOT NULL,
  `temp2` int NOT NULL,
  `time` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `stat`
--

INSERT INTO `stat` (`id`, `temp0`, `temp1`, `temp2`, `time`) VALUES
(58121, 3, 52, 33, 1697149688),
(58136, 5, 53, 33, 1697172262),
(58135, 5, 53, 33, 1697171010),
(58134, 5, 52, 33, 1697169759),
(58133, 4, 53, 33, 1697168507),
(58132, 3, 52, 33, 1697164752),
(58131, 3, 53, 33, 1697163500),
(58130, 3, 52, 33, 1697162249),
(58129, 3, 52, 33, 1697160997),
(58128, 3, 52, 33, 1697159746),
(58127, 3, 52, 33, 1697157242),
(58126, 3, 52, 33, 1697155990),
(58125, 3, 52, 33, 1697154718),
(58124, 3, 52, 33, 1697153466),
(58123, 3, 52, 33, 1697152215),
(58122, 4, 52, 33, 1697150941);

-- --------------------------------------------------------

--
-- Структура таблицы `stat_11`
--

CREATE TABLE `stat_11` (
  `id` int UNSIGNED NOT NULL,
  `temp0` smallint NOT NULL,
  `temp1` smallint NOT NULL,
  `temp2` smallint NOT NULL,
  `time` int NOT NULL
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
  `login` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `auth_time` int DEFAULT NULL,
  `admin` int NOT NULL DEFAULT '0',
  `creation_time` int DEFAULT NULL,
  `stat_table` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `password` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `auth_time`, `admin`, `creation_time`, `stat_table`, `password`) VALUES
(183, '11', '11', 'server-2013-86@yandex.ru', 1702464335, 1, 1696419768, 'stat_11', '$2y$10$UCJbZ2vS2jns0SFF35UhheBI.UEnQc52aQxYRQ/LN8lf1aLIfEkBi'),
(184, '22', '22', 'server-2013-86@yandex.ru', 1702442348, 0, 1696420328, '', '$2y$10$cMS1Et9Gfz3npkQ07QvJhuOY.WNkUP.LDWOWondGdBO6KgB8ZAtQG'),
(185, '33', '33', 'server-2013-86@yandex.ru', 1696500635, 0, 1696500635, '', '$2y$10$r.gIbeGYY4caGUzJFQg3De7c0SIoIiaKz961yJo62e7ymz5gj9Sau');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `deviceParam`
--
ALTER TABLE `deviceParam`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `devStatus`
--
ALTER TABLE `devStatus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `stat`
--
ALTER TABLE `stat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `stat_11`
--
ALTER TABLE `stat_11`
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
-- AUTO_INCREMENT для таблицы `deviceParam`
--
ALTER TABLE `deviceParam`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `devStatus`
--
ALTER TABLE `devStatus`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `stat`
--
ALTER TABLE `stat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58137;

--
-- AUTO_INCREMENT для таблицы `stat_11`
--
ALTER TABLE `stat_11`
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
