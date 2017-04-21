-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 21 2017 г., 16:54
-- Версия сервера: 5.6.31
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fast_and_furious`
--

-- --------------------------------------------------------

--
-- Структура таблицы `actors`
--

CREATE TABLE IF NOT EXISTS `actors` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `actors`
--

INSERT INTO `actors` (`id`, `name`, `photo`, `description`) VALUES
(1, 'Вин Дизель', 'images/actors/dizel.jpg', 'Вин Ди́зель (англ. Vin Diesel, настоящее имя Марк Синклер Винсент — англ. Mark Sinclair Vincent; род. 18 июля 1967) — американский актёр, кинорежиссёр, сценарист и продюсер. Основатель продюсерских компаний One Race Films и Racetrack Records, Tigon Studios. В 2002 году стал обладателем премии канала «MTV» в номинации «Лучшая экранная команда» за роль Доминика Торетто в фильме «Форсаж».'),
(2, 'Пол Уи́льям Уо́кер', 'images/actors/pol.jpg', 'Пол Уи́льям Уо́кер IV (англ. Paul William Walker IV; 12 сентября 1973, Глендейл — 30 ноября 2013, Санта-Кларита) — американский киноактёр и модель. Широкую известность получил благодаря роли Брайана О’Коннера в серии фильмов «Форсаж».'),
(3, 'Майте Мише́ль Родри́гес', 'images/actors/michelle.jpg', 'Майте Мише́ль Родри́гес (англ. Mayte Michelle Rodriguez; род. 12 июля 1978, Сан-Антонио, Техас, США) — американская актриса. Актёрскую карьеру начала в 2000 году сыграв роль Дианы Гузмен в фильме «Женский бой».\r\n\r\nНаиболее известна по фильмам: «Форсаж» (2001, 2009, 2013, 2015, 2017), «Мачете» (2010, 2013), «Аватар» (2009), «Обитель зла» (2002, 2012) и «S.W.A.T.: Спецназ города ангелов» (2003).'),
(4, 'Дуэйн Джонсон', 'images/actors/dwayne.jpg', 'Дуэ́йн Джо́нсон (англ. Dwayne Johnson; род. 2 мая 1972 года, Хейвард, США) — американский рестлер и киноактёр, известный также под псевдонимом Скала́ (англ. The Rock). С 1996 года по 2004 год выступал в World Wrestling Federation/Entertainment (WWF/E). С 2011 года вновь работает в WWE, нерегулярно выступая в основном на бренде Raw. Является восьмикратным чемпионом WWF/E, двукратным чемпионом WCW, двукратным интерконтинентальным чемпионом WWF и пятикратным командным чемпионом WWF. Также является шестым чемпионом Тройной короны и победителем Королевской битвы 2000 года.'),
(5, 'Джордана Брюстер', 'images/actors/jordana.jpg', 'Джордана Брюстер (англ. Jordana Brewster) — американская актриса и модель, известная благодаря роли Мии Торетто в серии фильмов «Форсаж», ролям в «Факультете», «Техасской резне бензопилой: Начало» и сериале «Даллас», где она сыграла Элену Рамос.'),
(6, 'Тайриз Гибсон', 'images/actors/gibson.jpg', 'Тайриз Дарнелл Гибсон (англ. Tyrese Darnell Gibson, также известный просто как Тайриз (англ. Tyrese); род. 30 декабря 1978 года, Лос-Анджелес, Калифорния, США) — американский рэпер, автор-исполнитель, виджей, актёр и продюсер. Снимался во многих фильмах, самые известные: «Двойной форсаж», «Полёт Феникса», «Трансформеры», «Трансформеры: Месть падших», «Трансформеры 3: Тёмная сторона Луны», «Смертельная гонка»,"Форсаж 5", «Форсаж 6» , «Форсаж 7» и "Форсаж 8".');

-- --------------------------------------------------------

--
-- Структура таблицы `films`
--

CREATE TABLE IF NOT EXISTS `films` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `films`
--

INSERT INTO `films` (`id`, `name`, `photo`, `description`) VALUES
(1, 'Форсаж ', 'images/films/f_1.jpg', '«Форса́ж» (англ. The Fast and the Furious; досл. «Быстрые и яростные») — криминальный боевик с Вином Дизелем и Полом Уокером в главных ролях, снятый режиссёром Робом Коэном. «Форсаж» — первая часть одноимённой серии, в которую, помимо первого, входят ещё семь фильмов: Двойной форсаж, Тройной форсаж. Токийский дрифт, Форсаж 4, Форсаж 5, Форсаж 6, Форсаж 7, Форсаж 8.\n\nВыход в прокат в США состоялся 22 июня, в России — 18 октября 2001 года.'),
(2, 'Двойной форсаж', 'images/films/f_2.jpg', '«Двойно́й форса́ж» (англ. 2 Fast 2 Furious) — криминальный боевик, снятый режиссёром Джоном Синглтоном. В главных ролях снялись Пол Уокер, Ева Мендес, Тайриз Гибсон, Джеймс Ремар, Коул Хаузер, Ludacris и Девон Аоки.\n\nВыход в прокат в США состоялся 6 июня, в России — 21 июля 2003 года.'),
(3, 'Тройной форсаж: Токийский дрифт', 'images/films/f_3.jpg', '«Тройно́й форса́ж: Токи́йский дрифт» (англ. The Fast and the Furious: Tokyo Drift) — американский криминальный боевик, снятый режиссёром Джастином Лином с Лукасом Блэком в главной роли. Это третья часть франшизы «Форсаж».\r\n\r\nВ фильме абсолютно новые герои и совершенно другая атмосфера (Токио, Япония) по сравнению с предыдущими двумя «Форсажами». Картина была снята в Токио и в Малом Токио Лос-Анджелеса. Последний часто украшали стойками и огнями, чтобы создать иллюзию Токийского стиля. Из оригинального фильма в третьем «Форсаже» появился только Вин Дизель в роли-камео.\r\n\r\nПремьера фильма состоялась 15 июня 2006 года в Пуэрто-Рико, Австралии и Таиланде. На день позже — 16 июня — картина вышла на широкие экраны США. А премьера в России состоялась 29 июня.'),
(4, 'Форсаж 4', 'images/films/f_4.jpg', '«Форса́ж 4» (англ. Fast & Furious) — американский криминальный боевик, снятый режиссёром Джастином Лином. Все актёры, исполнившие главные роли в фильме «Форсаж» (2001), вернулись к ним в этом фильме. «Форсаж 4» является продолжением «Форсажа» (2001) и «Двойного форсажа» (2003), а также приквелом «Тройного форсажа» (2006).'),
(5, 'Форсаж 5', 'images/films/f_5.jpg', '«Форсаж 5» (англ. Fast Five, досл. «Быстрая пятёрка») является первым фильмом серии «Форсаж», выпущенным в формате IMAX. Слоган фильма: «Всё решает скорость, всё решает команда». Фильм получил, в основном, положительные и смешанные отзывы от профессиональных рецензентов. Согласно агрегатору Metacritic, картина имеет оценку 67 баллов из 100 на основе 29 обозревателей. На сайте Rotten Tomatoes «Форсаж 5» имеет рейтинг 77% на основе 191 рецензии.'),
(6, 'Форсаж 6', 'images/films/f_6.jpg', 'Новый американский боевик от Джастина Лина – «Форсаж 6» не что иное, как ещё одна часть о жизни полюбившихся героев. После просмотра пятой части стало понятно, что история не закончена и скорее всего, будет иметь продолжение. Этот фильм вновь собрал практически всех героев из предыдущих «Форсажей». \r\nВ этот раз задумка режиссера была в том, чтобы показать жизнь полную приключений и опасностей и отойти немного от темы стрит-рейсинга. После обрушения преступной сетки у главных героев не осталось выбора, как пуститься в бега. И хотя отправились они не с пустыми руками, но всё ж деньги не приносят ожидаемой радости, а необходимость скитаться (пусть и с большими деньгами) сильно их угнетает.'),
(7, 'Форсаж 7', 'images/films/f_7.jpg', '«Форсаж 7» (англ. Furious 7) — криминальный боевик, седьмой фильм киносерии «Форсаж», снятый режиссёром Джеймсом Ваном с Вином Дизелем, Полом Уокером, Джейсоном Стейтемом и Дуэйном Джонсоном в главных ролях. Съёмки начались в сентябре 2013 года, а датой выхода было назначено 11 июля 2014, но смерть Пола Уокера в ноябре 2013 года заставила создателей картины переработать сценарий ленты и перенести дату выхода в прокат на апрель 2015 года (в США фильм вышел на экраны 3 апреля, в России — 9 апреля).'),
(8, 'Форсаж 8', 'images/films/f_8.jpg', '«Форсаж 8» (англ. The Fate Of The Furious) — американский боевик режиссёра Ф. Гэри Грея и сценариста Криса Моргана. Это восьмая часть франшизы Форсаж. Премьера фильма состоялась в США 14 апреля 2017 года, в России — 13 апреля в формате IMAX.');

-- --------------------------------------------------------

--
-- Структура таблицы `options`
--

CREATE TABLE IF NOT EXISTS `options` (
  `id` int(10) unsigned NOT NULL,
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
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `films`
--
ALTER TABLE `films`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `options`
--
ALTER TABLE `options`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
