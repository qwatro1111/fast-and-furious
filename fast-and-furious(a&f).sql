-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 20 2017 г., 23:54
-- Версия сервера: 5.6.34
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fast-and-furious`
--

-- --------------------------------------------------------

--
-- Структура таблицы `actors`
--

CREATE TABLE `actors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `actors`
--

INSERT INTO `actors` (`id`, `name`, `photo`, `description`) VALUES
(1, 'Вин Дизель', 'images/actors/dizel.jpg', 'Вин Ди́зель (англ. Vin Diesel, настоящее имя Марк Синклер Винсент — англ. Mark Sinclair Vincent; род. 18 июля 1967) — американский актёр, кинорежиссёр, сценарист и продюсер. Основатель продюсерских компаний One Race Films и Racetrack Records, Tigon Studios. В 2002 году стал обладателем премии канала «MTV» в номинации «Лучшая экранная команда» за роль Доминика Торетто в фильме «Форсаж».'),
(2, 'Пол Уи́льям Уо́кер', 'images/actors/pol.jpg', 'Пол Уи́льям Уо́кер IV (англ. Paul William Walker IV; 12 сентября 1973, Глендейл — 30 ноября 2013, Санта-Кларита) — американский киноактёр и модель. Широкую известность получил благодаря роли Брайана О’Коннера в серии фильмов «Форсаж».'),
(3, 'Майте Мише́ль Родри́гес', 'images/actors/michelle.jpg', 'Майте Мише́ль Родри́гес (англ. Mayte Michelle Rodriguez; род. 12 июля 1978, Сан-Антонио, Техас, США) — американская актриса. Актёрскую карьеру начала в 2000 году сыграв роль Дианы Гузмен в фильме «Женский бой».\r\n\r\nНаиболее известна по фильмам: «Форсаж» (2001, 2009, 2013, 2015, 2017), «Мачете» (2010, 2013), «Аватар» (2009), «Обитель зла» (2002, 2012) и «S.W.A.T.: Спецназ города ангелов» (2003).');

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE `films` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`id`, `name`, `photo`, `description`) VALUES
(1, 'Форсаж ', 'images/films/f_1.jpg', '«Форса́ж» (англ. The Fast and the Furious; досл. «Быстрые и яростные») — криминальный боевик с Вином Дизелем и Полом Уокером в главных ролях, снятый режиссёром Робом Коэном. «Форсаж» — первая часть одноимённой серии, в которую, помимо первого, входят ещё семь фильмов: Двойной форсаж, Тройной форсаж. Токийский дрифт, Форсаж 4, Форсаж 5, Форсаж 6, Форсаж 7, Форсаж 8.\n\nВыход в прокат в США состоялся 22 июня, в России — 18 октября 2001 года.'),
(2, 'Двойной форсаж', 'images/films/f_2.jpg', '«Двойно́й форса́ж» (англ. 2 Fast 2 Furious) — криминальный боевик, снятый режиссёром Джоном Синглтоном. В главных ролях снялись Пол Уокер, Ева Мендес, Тайриз Гибсон, Джеймс Ремар, Коул Хаузер, Ludacris и Девон Аоки.\n\nВыход в прокат в США состоялся 6 июня, в России — 21 июля 2003 года.'),
(3, 'Тройной форсаж: Токийский дрифт', 'images/films/f_3.jpg', '«Тройно́й форса́ж: Токи́йский дрифт» (англ. The Fast and the Furious: Tokyo Drift) — американский криминальный боевик, снятый режиссёром Джастином Лином с Лукасом Блэком в главной роли. Это третья часть франшизы «Форсаж».\r\n\r\nВ фильме абсолютно новые герои и совершенно другая атмосфера (Токио, Япония) по сравнению с предыдущими двумя «Форсажами». Картина была снята в Токио и в Малом Токио Лос-Анджелеса. Последний часто украшали стойками и огнями, чтобы создать иллюзию Токийского стиля. Из оригинального фильма в третьем «Форсаже» появился только Вин Дизель в роли-камео.\r\n\r\nПремьера фильма состоялась 15 июня 2006 года в Пуэрто-Рико, Австралии и Таиланде. На день позже — 16 июня — картина вышла на широкие экраны США. А премьера в России состоялась 29 июня.');

-- --------------------------------------------------------

--
-- Структура таблицы `options`
--

CREATE TABLE `options` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `films`
--
ALTER TABLE `films`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `options`
--
ALTER TABLE `options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
