-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 11 2021 г., 17:12
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `site_for_mother`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Галинова М.А.', '45cc33eff513c889835b89a8df17be5a', '63bb06477b5fd9ee2b18d32922ba6aab');

-- --------------------------------------------------------

--
-- Структура таблицы `allimportantinhand`
--

CREATE TABLE `allimportantinhand` (
  `id` int(10) NOT NULL,
  `category` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `allimportantinhand`
--

INSERT INTO `allimportantinhand` (`id`, `category`, `name`, `icon`, `links`) VALUES
(1, 'childerWithTrouble', 'Эмоциональное и познавательное развитие ребенка ', '<img src=\"https://img.icons8.com/fluent/30/000000/microsoft-word-2019.png\"/> ', 'https://drive.google.com/file/d/1bVnNcxpU2e4ZMPufPhwiVDZrVO-PiBV1/view'),
(2, 'childerWithTrouble', 'Котышева Е.Н. Музыкальное коррекция детей с ОВЗ', '<img src=\"https://img.icons8.com/color/30/000000/pdf.png\"/>', 'https://drive.google.com/file/d/1jvheQtc2p1HaKZOhitCIZNGXElPFdxGb/view'),
(3, 'MusicDidactGames', 'Весенние чудеса', '<img src=\"https://img.icons8.com/fluent/30/000000/microsoft-powerpoint-2019.png\"/>', 'https://drive.google.com/file/d/1qS5MClsN553VGiBWTTaFagsUbNgoVsKY/view'),
(4, 'MusicDidactGames', 'Картотека музыкально-дидактических игр для детей подготовительной к школе группы', '<img src=\"https://img.icons8.com/fluent/30/000000/microsoft-powerpoint-2019.png\"/>', 'https://drive.google.com/file/d/1F5LF69LoNFeddA15TCBfmG4FRjTAV3Bs/view'),
(5, 'MusicDidactGames', 'Картотека музыкальных игр на развитие мышления дошкольников', '<img src=\"https://img.icons8.com/color/30/000000/pdf.png\"/>', 'https://drive.google.com/file/d/1F5LF69LoNFeddA15TCBfmG4FRjTAV3Bs/view'),
(6, 'MusicDidactGames', 'Новогодние шары <em>(музыкально-дидактическая игра на определение исполнительского состава музыки для старших дошкольников) </em>', '<img src=\"https://img.icons8.com/fluent/30/000000/zip.png\"/>', 'https://drive.google.com/drive/folders/1meQvoaCL8_9lHuaK-DAuooIyMJuxggqf'),
(7, 'MusicDidactGames', 'На чем играют звери <em>(музыкально-дидактическая игра на развитие чувства тембра)</em>', '<img src=\"https://img.icons8.com/fluent/30/000000/zip.png\"/>', 'https://drive.google.com/drive/folders/1_kB3dSqZP96P7j-vKxDr1nLcYOm9ggkN'),
(8, 'MusicDidactGames', 'Музыкальный магазин <em>(музыкально-дидактическая игра на развитие тембрового слуха и памяти)</em>', '<img src=\"https://img.icons8.com/fluent/30/000000/zip.png\"/>', 'https://drive.google.com/drive/folders/1betB0XqesHOMHr-LQA0E97uiByVbeqoJ'),
(9, 'MusicDidactGames', 'Музыкальный квест <em>(музыкально-дидактическая игра для старших дошкольников)</em>', '<img src=\"https://img.icons8.com/fluent/30/000000/zip.png\"/>', 'https://drive.google.com/drive/folders/1o0ZwF671VLVeFYp5Cl46C1yXaS3Stlg3'),
(10, 'MusicDidactGames', 'Золушкины платья <em>(музыкально-дидактическая игра на определение жанра и стиля музыки для старших дошкольников)</em>', '<img src=\"https://img.icons8.com/fluent/30/000000/zip.png\"/>', 'https://drive.google.com/drive/folders/1dB6hfCRLNIyU91ihpzJbEnhB0L3--P8h'),
(11, 'MusicDidactGames', 'День рождения <em>(музыкально-дидактическая игра на определение музыкального образа)</em>', '<img src=\"https://img.icons8.com/fluent/30/000000/zip.png\"/>', 'https://drive.google.com/drive/folders/17y84tHl143LzakGVQcYMXvTqdE4MTKfa'),
(12, 'workParentWithPedagogos', 'Развитие возможностей ребенка средствами музыки', '<img src=\"https://img.icons8.com/color/30/000000/pdf.png\"/>', 'https://drive.google.com/file/d/1TBZNglt4p8aLX_H8ftJMt3B7iUDrU6uI/view'),
(13, 'workParentWithPedagogos', 'Чешки ДОУ', '<img src=\"https://img.icons8.com/fluent/30/000000/microsoft-word-2019.png\"/>', 'https://drive.google.com/file/d/101j1IeBwQLpYz4zuq3djCri_fWyYHNWL/view'),
(14, 'workParentWithPedagogos', 'Консультация для педагогов', '<img src=\"https://img.icons8.com/fluent/30/000000/microsoft-word-2019.png\"/>', 'https://drive.google.com/file/d/1oBwFwzyGs9eP4_4wYCaDT31p3Q84X-RQ/view'),
(15, 'workParentWithPedagogos', 'Памятка для воспитателей задачи 1 младшая', '<img src=\"https://img.icons8.com/fluent/30/000000/microsoft-word-2019.png\"/>', 'https://drive.google.com/file/d/1CAU2wNWuGJrte8NGCfIn6lmhsMN_Ai3f/view'),
(16, 'workParentWithPedagogos', 'Памятка для воспитателей задачи 2 младшая', '<img src=\"https://img.icons8.com/fluent/30/000000/microsoft-word-2019.png\"/>', 'https://drive.google.com/file/d/1DuY_3j_UzPLdwyj1cncU-gNsFTziOOY1/view'),
(17, 'workParentWithPedagogos', 'Памятка для воспитателей задачи подготовительные', '<img src=\"https://img.icons8.com/fluent/30/000000/microsoft-word-2019.png\"/>', 'https://drive.google.com/file/d/1m3-71icO6hVIvWImS9-oMdBG-eQ2x1YD/view'),
(18, 'workParentWithPedagogos', 'Памятка для воспитателей задачи средняя', '<img src=\"https://img.icons8.com/fluent/30/000000/microsoft-word-2019.png\"/> ', 'https://drive.google.com/file/d/1h2nDKa_eFLZCGxyRIuGOEGSxv4trnmJ_/view'),
(19, 'workParentWithPedagogos', 'Буклет народные игры (осень)', '<img src=\"https://img.icons8.com/fluent/30/000000/microsoft-word-2019.png\"/>', 'https://drive.google.com/file/d/1-oB_GYuvSivG2J7OOAUrZu6llPzEtW79/view'),
(20, 'MethodKopilka', '1 младшая диагностика', '<img src=\"https://img.icons8.com/color/30/000000/microsoft-excel-2019--v1.png\"/>', 'https://drive.google.com/file/d/1aYfTe_1rBpOYCbJDgzoMPKiYnK7Bpdqt/view'),
(21, 'MethodKopilka', 'Диагностика - коне 2019-2020', '<img src=\"https://img.icons8.com/color/30/000000/microsoft-excel-2019--v1.png\"/>', 'https://drive.google.com/file/d/1sLlsrgKEsY48S1g4l_IqM3t_rbhRpU5v/view'),
(22, 'MethodKopilka', 'Динамика развития чувств ритма', '<img src=\"https://img.icons8.com/fluent/30/000000/microsoft-word-2019.png\"/> ', 'https://drive.google.com/file/d/1uXP6hqy4qabOPHNOCn2n0FrwQiUf-NWw/view'),
(23, 'MethodKopilka', 'Сводная таблица по МУЗО', '<img src=\"https://img.icons8.com/fluent/30/000000/microsoft-word-2019.png\"/> ', 'https://drive.google.com/file/d/1VP4EuQLX9GlMzxE1TL0kZFuIpeukW9kJ/view'),
(24, 'MethodKopilka', 'Годовый план музыкального руководителя', '<img src=\"https://img.icons8.com/fluent/30/000000/zip.png\"/> ', 'https://drive.google.com/drive/folders/1Ev5dJ2EL6N2uZ2720BGrG0PkdABXkyLY?usp=sharing'),
(25, 'MethodKopilka', 'Календарный план музыкального руководителя', '<img src=\"https://img.icons8.com/fluent/30/000000/zip.png\"/>', 'https://drive.google.com/drive/folders/1YPUehPcuTl2vNBaJKKUQk-feF3yzy7aE?usp=sharing'),
(26, 'MethodKopilka', 'Перспективный план музыкальных занятий', '<img src=\"https://img.icons8.com/fluent/30/000000/zip.png\"/>', 'https://drive.google.com/drive/folders/1bwfOcdAfJzWAteJO24XR0bFwLwLW5gbH?usp=sharing'),
(27, 'MethodKopilka', 'Музыкальная деятельность по ФГОС', '<img src=\"https://img.icons8.com/fluent/30/000000/microsoft-word-2019.png\"/>', 'https://drive.google.com/file/d/1aC2UI-crgH6u0ky3lNvG0Fdykffvsols/view'),
(28, 'MethodKopilka', 'Перспективный план по развитию чувств ритма', '<img src=\"https://img.icons8.com/fluent/30/000000/microsoft-word-2019.png\"/>', 'https://drive.google.com/file/d/183yVRGuuR4_qUVpymotF3rl1pXR9c1LL/view'),
(29, 'MethodKopilka', 'Перспективный план работы с родителями', '<img src=\"https://img.icons8.com/fluent/30/000000/microsoft-word-2019.png\"/>', 'https://drive.google.com/file/d/1KHUbgR_7xGEf0Bh1mnqkvTTE1uHY3AVj/view'),
(30, 'MethodKopilka', 'План работы с логопедом', '<img src=\"https://img.icons8.com/fluent/30/000000/microsoft-word-2019.png\"/>', 'https://drive.google.com/file/d/11ozmZiEj6AWqM-yH93WB9Cz70qlA9JxN/view'),
(31, 'MethodKopilka', 'План взаимодействия с логопедом', '<img src=\"https://img.icons8.com/fluent/30/000000/microsoft-word-2019.png\"/>', 'https://drive.google.com/file/d/11ozmZiEj6AWqM-yH93WB9Cz70qlA9JxN/view'),
(32, 'MethodKopilka', 'План взаимодействия с воспитателем ', '<img src=\"https://img.icons8.com/fluent/30/000000/microsoft-word-2019.png\"/>', 'https://docs.google.com/document/d/1BBIg7VsVH3ZDBK4ca3SMo8k1To0OBgqt/edit'),
(33, 'goodHand', 'Цветочки', '<img src=\"https://img.icons8.com/fluent/30/000000/microsoft-word-2019.png\"/> ', 'https://drive.google.com/file/d/1xZlaZBofdL-A9Aj14GGqpiG29y-fJOWl/view'),
(35, 'goodHand', 'Нотный кубик', '<img src=\"https://img.icons8.com/color/30/000000/pdf.png\"/> ', 'https://drive.google.com/file/d/1RZdju2-IFcVUArKdwYngfCDNbWd31eyI/view'),
(36, 'goodHand', 'Соковыжималка', '<img src=\"https://img.icons8.com/fluent/30/000000/microsoft-word-2019.png\"/>', 'https://drive.google.com/file/d/1MQlmEfgtzOmxezfrByb29aeyuPIkSZai/view'),
(37, 'LabArt', 'Талантливому ребенку талантливый педагог', '<img src=\"https://img.icons8.com/color/30/000000/pdf.png\"/>', 'https://drive.google.com/file/d/1YE7zB0ZHxAKWrsuqBhXg7stsZzV4eY87/view'),
(38, 'LabArt', 'Брошюра Контакт - игры', '<img src=\"https://img.icons8.com/color/30/000000/pdf.png\"/>', 'https://drive.google.com/file/d/1HAabD-fn83CqwK0LsrDe3RK7KLIDZslH/view'),
(39, 'LabArt', 'Буклет виртуальная гостиная ', '<img src=\"https://img.icons8.com/color/30/000000/pdf.png\"/>', 'https://drive.google.com/file/d/1mOWkZ-uu65ZuKutQMfJ5i6WDS81zJNZI/view'),
(40, 'goodHand', 'Надпись 23 февраля', '<img src=\"https://img.icons8.com/color/30/000000/pdf.png\"/> ', 'https://drive.google.com/file/d/1bCusCE8_va5Jsx0Z3GbjJCHudieoOatK/view?usp=sharing'),
(41, 'workParentWithPedagogos', 'План работы с родителями на год со всеми приложениями', '<img src=\"https://img.icons8.com/fluent/30/000000/microsoft-word-2019.png\"/> ', 'https://drive.google.com/file/d/1J_K42SeKI5D_4DrgUmImJCkRtsEcfYkq/view?usp=sharing');

-- --------------------------------------------------------

--
-- Структура таблицы `allimportantinhandname`
--

CREATE TABLE `allimportantinhandname` (
  `id` int(10) NOT NULL,
  `category` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `allimportantinhandname`
--

INSERT INTO `allimportantinhandname` (`id`, `category`, `name`) VALUES
(1, 'MethodKopilka', 'Методический кабинет'),
(2, 'LabArt', 'Лаборатория творчества'),
(3, 'childerWithTrouble', 'Музыкальное воспитание детей с проблемами здоровья'),
(4, 'workParentWithPedagogos', 'Работа с родителями и педагогами'),
(5, 'MusicDidactGames', 'Музыкально дидактические игры'),
(6, 'goodHand', 'Очень умелые ручки');

-- --------------------------------------------------------

--
-- Структура таблицы `answerquestion`
--

CREATE TABLE `answerquestion` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `time` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `answerquestion`
--

INSERT INTO `answerquestion` (`id`, `name`, `email`, `comment`, `time`) VALUES
(15, 'Эмиль', 'maiyagalinova@mail.ru', 'Проверка', 1615264651),
(16, 'Тимур', 'emilhadiev@mail.ru', 'sag', 1615281441),
(17, 'Эмиль', 'saas2@5125', 'sag', 1615281453),
(18, 'Майя', 'maiyagalinova@mail.ru', 'пппппп', 1615310329);

-- --------------------------------------------------------

--
-- Структура таблицы `outphoto`
--

CREATE TABLE `outphoto` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `outphoto`
--

INSERT INTO `outphoto` (`id`, `name`, `links`, `category`) VALUES
(1, 'Народный буклет(осень) 1', '<iframe src=\"https://drive.google.com/file/d/1A9JINKC5yVjbElc33JW7n3nxJVe0HAsJ/preview\" width=\"640\" height=\"480\"></iframe>', 'workParentWithPedagogos'),
(2, 'Народные игры (осень) 2', '<iframe src=\"https://drive.google.com/file/d/1OwxFKcI0zbgb_e1O7A32UMGU8aEoJELF/preview\" width=\"640\" height=\"480\"></iframe>', 'workParentWithPedagogos'),
(3, 'Народные игры (осень) 3', '<iframe src=\"https://drive.google.com/file/d/1jvDYPHsnROtiWCUzUb_bXEwp4dJ4XnE7/preview\" width=\"640\" height=\"480\"></iframe>', 'workParentWithPedagogos'),
(4, 'Народные игры (осень) 4', '<iframe src=\"https://drive.google.com/file/d/11UTP2If92JkGrqdWw1l_K-rxOelYA0x4/preview\" width=\"640\" height=\"480\"></iframe>', 'workParentWithPedagogos'),
(5, 'Новый год (памятка для родителей) 1', '<iframe src=\"https://drive.google.com/file/d/1SM-LqySjYdCMxTcvXm3VW88pIu3bg42H/preview\" width=\"640\" height=\"480\"></iframe>', 'workParentWithPedagogos'),
(6, 'Новый год (памятка для родителей) 2', '<iframe src=\"https://drive.google.com/file/d/1mwIjsK0cbl3-vbMexCRPvE7VYU8IsY_s/preview\" width=\"640\" height=\"480\"></iframe>', 'workParentWithPedagogos'),
(7, 'Новый год (памятка для родителей) 3', '<iframe src=\"https://drive.google.com/file/d/103PSeMIiUFk1Sk1YrQbTo2QxRox-V2Cc/preview\" width=\"640\" height=\"480\"></iframe>', 'workParentWithPedagogos'),
(8, 'Новый год (памятка для родителей) 4', '<iframe src=\"https://drive.google.com/file/d/1tqVLzhu0gvNtP7ZNn363CDkrDoVV6FTO/preview\" width=\"640\" height=\"480\"></iframe>', 'workParentWithPedagogos'),
(9, 'Новый год (памятка для родителей) 5', '<iframe src=\"https://drive.google.com/file/d/1rJyiBSAWXO-zZS5cs_SgTC8RoF8meZlj/preview\" width=\"640\" height=\"480\"></iframe>', 'workParentWithPedagogos'),
(10, 'Новый год (памятка для родителей) 6', '<iframe src=\"https://drive.google.com/file/d/1wneer9WFU7QumipRm18FlCi1WHfXk2GP/preview\" width=\"640\" height=\"480\"></iframe>', 'workParentWithPedagogos'),
(11, 'Новый год (памятка для родителей) 7', '<iframe src=\"https://drive.google.com/file/d/1wwQVr01tVkIgebYtDfquEHaLuNlH-DUR/preview\" width=\"640\" height=\"480\"></iframe>', 'workParentWithPedagogos'),
(12, 'Новый год (памятка для родителей) 8', '<iframe src=\"https://drive.google.com/file/d/1JBCrXrGOdMwlssUmXhzBq_xMVG8VfKuN/preview\" width=\"640\" height=\"480\"></iframe>', 'workParentWithPedagogos'),
(13, 'Новый год (памятка для родителей) 9', '<iframe src=\"https://drive.google.com/file/d/1UbNB7p87kFRhoo0LiWP447wlJ_dGxq12/preview\" width=\"640\" height=\"480\"></iframe>', 'workParentWithPedagogos'),
(14, 'Новый год (памятка для родителей) 10', '<iframe src=\"https://drive.google.com/file/d/1yGSjyUA6Fhd_7rgEEtwPBqincpStBQoo/preview\" width=\"640\" height=\"480\"></iframe>', 'workParentWithPedagogos'),
(15, 'Музыкальные пазлы 1', '<iframe src=\"https://drive.google.com/file/d/1MKh99l47sNV8ElnQMNKJcPWMPQAcjRmB/preview\" width=\"640\" height=\"480\"></iframe>', 'MusicDidactGames'),
(16, 'Музыкальные пазлы 2', '<iframe src=\"https://drive.google.com/file/d/10mvJwr_gRd6D3lxAqRZvtkBOyldwShhQ/preview\" width=\"640\" height=\"480\"></iframe>', 'MusicDidactGames'),
(17, 'Соковыжималка 1', '<iframe src=\"https://drive.google.com/file/d/19A53X3PJxq4KgEj6Zf6iN4HwJ3HEhSVv/preview\" width=\"640\" height=\"480\"></iframe>', 'goodHand'),
(18, 'Соковыжималка 2', '<iframe src=\"https://drive.google.com/file/d/1vM9idHPAPHy9PL7lm_AiLlvMaCCmsXH0/preview\" width=\"640\" height=\"480\"></iframe>', 'goodHand'),
(19, 'Цветочки', '<iframe src=\"https://drive.google.com/file/d/1ebNlPSOAiLPyMZ7YfMX-g1sB_WgCKICP/preview\" width=\"640\" height=\"480\"></iframe>', 'goodHand'),
(20, 'Выступление семьи Дудиных, на конкурсе \"Музыкальный аккорд\"', '<iframe src=\"https://drive.google.com/file/d/12j8tyCfP7tQK95Ud9TvTCAHKJ9Rup0VJ/preview\" width=\"640\" height=\"480\"></iframe>', 'workParentWithPedagogos');

-- --------------------------------------------------------

--
-- Структура таблицы `outvideoname`
--

CREATE TABLE `outvideoname` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `outvideoname`
--

INSERT INTO `outvideoname` (`id`, `name`, `category`) VALUES
(1, 'Видеоклипы', 'videoClips'),
(2, 'Детский театр', 'childrenTeatr'),
(3, 'Браво, дети', 'bravoChildren');

-- --------------------------------------------------------

--
-- Структура таблицы `showvideo`
--

CREATE TABLE `showvideo` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `showvideo`
--

INSERT INTO `showvideo` (`id`, `name`, `links`, `category`) VALUES
(1, 'Посвященно75-летию Победы в Великой Отечественной войне. И. Эринбург «Колыбельная»', '<iframe src=\"https://drive.google.com/file/d/1ghUwt7ImC8XICJw7NLxm3lyseJx6M6TL/preview\" width=\"640\" height=\"480\"></iframe>', 'videoClips'),
(2, '«Дорожные приключения в Лукоморье» - информационно – социальный видеоролик «5 минут безопасности»', '<iframe src=\"https://drive.google.com/file/d/1PT4s6p4A35izf8bfKr6RvJiVzDpuywtH/preview\" width=\"640\" height=\"480\"></iframe>', 'videoClips'),
(3, 'Творческий родительско- детский проект «Песни, опаленные войной», «Солнечный круг»', '<iframe src=\"https://drive.google.com/file/d/1oXOdHAvIwXYWLdqT9un9S9CbU-v9wXRg/preview\" width=\"640\" height=\"480\"></iframe>', 'videoClips'),
(4, '«День мамы» Сенсация! Наше поздравление напечатано во всех газетах!!!', '<iframe src=\"https://drive.google.com/file/d/1SZX8B8-sGqI8Ml1z7xoKfmBTPPbU97Lu/preview\" width=\"640\" height=\"480\"></iframe>', 'videoClips'),
(5, '«Весёлый ритм» - развиваем чувство ритма', '<iframe src=\"https://drive.google.com/file/d/1EibkC2D-_jwA-cBRmTUcVwqFK21qN6Td/preview\" width=\"640\" height=\"480\"></iframe>', 'videoClips'),
(6, 'Посвященно75-летию Победы в Великой Отечественной войне. И. Эринбург «Колыбельная»', '<iframe src=\"https://drive.google.com/file/d/1vXVsbsgEuqh4TX-S83wytkdxI3hwwWYu/preview\" width=\"640\" height=\"480\"></iframe>', 'videoClips'),
(7, 'Юмористическая театральная постановка на татарском языке для дошкольников по сказкам Г. Тукая «Сон Эмилии»', '<iframe src=\"https://drive.google.com/file/d/13ivwEDr1wrCKbBWievAQ_KDNwkG4hMJF/preview\" width=\"640\" height=\"480\"></iframe>', 'childrenTeatr'),
(8, 'Участие в дистанционном этапе республиканского фестиваля детских юношеских театров Музыкальная сказка «Серле урман» - 2020', '<iframe src=\"https://drive.google.com/file/d/1P7TXK90YzE2siH1yW9eQeK_4zfbIuacX/preview\" width=\"640\" height=\"480\"></iframe>', 'childrenTeatr'),
(9, 'Проект для визитки', '<iframe src=\"https://drive.google.com/file/d/1e6vvwJSDHKJVQtlT7HCuiOmIP5fNgnKZ/preview\" width=\"640\" height=\"480\"></iframe>', 'bravoChildren'),
(10, 'Участие в районном этапе конкурса «Татар малае, татар кызчыгы», «Туган авылым» - 2021 г', '<iframe src=\"https://drive.google.com/file/d/1770WfMMnpredUi1KSD72-kV4-Rydv-HC/preview\" width=\"640\" height=\"480\"></iframe>', 'bravoChildren'),
(11, 'XV Открытый фольклорный фестиваль-конкурс «Апрельские проталинки» воспитанников дошкольных учреждений Вахитовского, Приволжского, Советского, \r\nНово-Савиновского, Кировского и Московского районов г. Казани – 2020. «Со вьюном я хожу»\r\n', '<iframe src=\"https://drive.google.com/file/d/1H8P7vVVGfX_TVTh8a9rOjuGI8OibZeEz/preview\" width=\"640\" height=\"480\"></iframe>', 'bravoChildren'),
(12, 'Участие в конкурсе «Батл профессий» - 2019 среди команд ДОО Кировского и Московского районов г. Казани. Профессия - официант', '<iframe src=\"https://drive.google.com/file/d/1Mz56Uag3vTDJf4Bqyp_5KfTA9fw3NrpM/preview\" width=\"640\" height=\"480\"></iframe>', 'bravoChildren'),
(13, 'Участие в районном конкурсе «Спортивные танцы», «Морские жемчужины», 2019 г', '<iframe src=\"https://drive.google.com/file/d/1bxIDqOAS-sZdMWsDVtNzUFXChmwdX1Ty/preview\" width=\"640\" height=\"480\"></iframe>', 'bravoChildren'),
(14, 'Участие в районном конкурсе «Стань звездой – 2019». Китайский танец с веерами', '<iframe src=\"https://drive.google.com/file/d/1aEmj3y9N9nBGwWnjVxCVBwjQJsErLIe-/preview\" width=\"640\" height=\"480\"></iframe>', 'bravoChildren'),
(15, 'Участие в Международном конкурсе \"Принцесса на горошине\" 2018 г', '<iframe src=\"https://drive.google.com/file/d/1JmHEtbpZzNk8aVV1QeMt-5D1W24swqlk/preview\" width=\"640\" height=\"480\"></iframe>', 'bravoChildren'),
(16, 'Под куполом творчества', '<iframe src=\"https://drive.google.com/file/d/1osDDzq199lFncJVhtZJ228V9T5WwbTJw/preview\" width=\"640\" height=\"480\"></iframe>', 'bravoChildren');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `allimportantinhand`
--
ALTER TABLE `allimportantinhand`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `allimportantinhandname`
--
ALTER TABLE `allimportantinhandname`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `answerquestion`
--
ALTER TABLE `answerquestion`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `outphoto`
--
ALTER TABLE `outphoto`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `outvideoname`
--
ALTER TABLE `outvideoname`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `showvideo`
--
ALTER TABLE `showvideo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `allimportantinhand`
--
ALTER TABLE `allimportantinhand`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT для таблицы `allimportantinhandname`
--
ALTER TABLE `allimportantinhandname`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `answerquestion`
--
ALTER TABLE `answerquestion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `outphoto`
--
ALTER TABLE `outphoto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `outvideoname`
--
ALTER TABLE `outvideoname`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `showvideo`
--
ALTER TABLE `showvideo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
