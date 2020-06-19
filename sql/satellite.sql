-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 19 2020 г., 21:25
-- Версия сервера: 10.4.12-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `satellite`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id_article` int(11) NOT NULL,
  `article_title` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_url` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_date` date NOT NULL,
  `article_sort` int(11) NOT NULL,
  `article_img` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_pretext` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id_article`, `article_title`, `article_url`, `article_text`, `article_date`, `article_sort`, `article_img`, `article_pretext`) VALUES
(1, 'Как построить дом', 'kak_postroit_dom', 'Все больше и больше людей отдают предпочтение проживанию в собственном доме – в пригороде, вдали от городской суеты. И хотя этот выбор оправдан наличием неоспоримых преимуществ — отдых в собственном саду, игры с детьми на свежем воздухе, барбекю с друзьями и прочие радости частного домовладения, изначально приходится пройти через хоть и приятные, но все же существенные хлопоты, связанные со строительством дома. Поэтому неудивительно, что решение о начале строительства частного жилища является важным этапом в жизни любой семьи.\r\n\r\nСовершенно безосновательно, думая с чего начать строительство дома, за нулевой цикл многие принимают подготовку строительной площадки и закладывание фундамента. На практике это лишь «верхушка айсберга», ведь перед непосредственным началом строительства придется проделать большой объем подготовительных работ, от которых во многом зависит успех всего предприятия. Кроме получения необходимых разрешений, требуется проработать каждый этап строительства, что поможет избежать будущих проблем, например, с неудобными лестницами и заболоченным огородом.', '2020-06-19', 4, 'https://m-strana.ru/upload/resize_cache/medialibrary/ea5/758_467_2/s-chego-nachat-stroit-dom-podgotovka-i-posleduyushchie-shagi-10.jpg', 'Все больше и больше людей отдают предпочтение проживанию в собственном доме – в пригороде, вдали от городской суеты. И хотя этот выбор оправдан наличием неоспоримых преимуществ — отдых в собственном саду, игры с детьми на свежем воздухе, барбекю с друзьями и прочие радости частного домовладения, изначально приходится пройти через хоть и приятные, но все же существенные хлопоты, связанные со строительством дома. Поэтому неудивительно, что решение о начале строительства частного жилища является важным этапом в жизни любой семьи.'),
(2, 'Как выбрать ламинат', 'kak_vibrat_laminat', 'По каким критериям выбирают ламинат ?\r\nОсновными критериями при выборе качественного ламината в квартиру являются:\r\n<li> бренд;</li>\r\n<li>декоративный рисунок с имитацией какой-либо поверхности (чем четче рисунок и чем реже его повторяемость у досок, тем дороже ламинат);\r\n<li>цена;</li>\r\n<li>износостойкость;</li>\r\n<li>царапоустойчивость;</li>\r\n<li>влагостойкость;</li>\r\n<li>ударопрочность. </li>\r\n\r\nСверхвысокая износостойкость ламината важна только в помещениях с высокой проходимостью (в торговых залах, магазинах, крупных офисах и т.п.). Именно из-за высокой нагрузки на пол там используют максимально износостойкий ламинат 34 или 43 класса.\r\n\r\nВ квартире же необходимости в ламинате высокого класса износостойкости нет. Ведь протереть ламинат 32 класса там будет так же сложно, как и ламинат 34 (43) класса.\r\n\r\nМежду тем другие не менее важные характеристики ламината у 32 и 34 классов совпадают. Поэтому совершенно нет никакой разницы, какой класс износостойкости Вы выберете в квартиру.\r\nВедь срок эксплуатации покрытия будет один и тот же.', '2020-06-19', 2, 'https://s9.stc.all.kpcdn.net/share/i/12/10136774/inx960x640.jpg', 'Почему ламинат столь популярен? С точки зрения дизайна ему нет равных в имитации природных рисунков и рельефов поверхности дерева или камня. А с потребительскими качествами этого напольного покрытия многие знакомы не понаслышке. Его можно встретить в большинстве новостроек с готовой отделкой. Да и в старом жилом фонде идет активная замена штучного паркета и модульной паркетной доски на более прочный и практичный материал. Однако в торговом зале среди огромного количества коллекций выбрать несколько образцов и определить, какой из них лучше, непросто. Рассказываем, какой ламинат выбрать для квартиры и на что обратить внимание. ');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
