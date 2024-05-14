-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 14 2024 г., 06:19
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yii2basic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `companies`
--

INSERT INTO `companies` (`id`, `name`, `logo`, `description`) VALUES
(1, 'Дубрава', 'orig.jpg', 'Чувствуйте себя как дома!\nОтель «Дубрава» расположен в городе Смоленске, в окружении соснового бора. Центральная площадь города и Лопатинский сад расположены на расстоянии 11 километров. Номерной фонд гостиницы представлен 37 номерами в двух дизайнерских исполнениях: «Классика» и «Лофт».\n\nК услугам гостей круглосуточная стойка регистрации, ресторан, бар, банкетный зал, VIP-зал для проведения встреч, доставка еды и напитков в номер, бесплатный Wi-Fi. Кроме лестницы до верхних этажей гостей доставляет лифт. В отеле предоставляются услуги прачечной, а также бизнес-услуги, такие как сканирование и ксерокопирование.Для удобства наших гостей, каждый номер оснащен: кондиционером, телевизором с плоским экраном и спутниковыми каналами, мини-холодильником, чайником и чайным набором, а также комфортными кроватями с ортопедическими матрасами. Каждый номер располагает собственной ванной комнатой.\n\nКонтинентальный завтрак подается каждое утро в главном ресторане отеля «Дубрава». По желанию, завтрак также сервируется в номере.'),
(2, 'VERANDA', NULL, 'Велнес-клуб Veranda предлагает широкую гамму услуг в сфере отдыха, красоты и здоровья в Смоленске. В самом сердце соснового бора в уникальном месте в пяти минутах езды от города и федеральной трассы  М1.\r\n\r\n \r\n\r\nК вашим услугам более 120-ти спа-уходов, массажей и процедур, большой мозаичный бассейн, просторная и светлая фитнес-студия, марокканская и финская парные, патио, фито-бар и хаммам. На первом этаже спа-комплекса расположился уютный ресторан с панорамным видом на сосновый бор.\r\n\r\n \r\n\r\nС мая 2019 года в состав комплекса входит Спа-отель Veranda 4* с высочайшим уровнем комфорта и сервиса. Более восьми вариантов размещения, включают просторные однокомнатные номера, номера-студии и апартаменты.\r\n\r\n \r\n\r\nПознакомьтесь с велнес-клубом Veranda подробнее!'),
(3, 'Lick U', NULL, 'Твой абонемент на искушения'),
(4, 'Чаплин', NULL, 'Ресторан «Чаплин» это прекрасное место для того, чтобы отметить важное событие вашей компании или личной жизни.  Интерьер зала нашего ресторана, подходит как для тематической вечеринки, так и для классического мероприятия. Ресторан оснащен профессиональным звуковым и световым оборудованием, ваши гости оценят это по достоинству. В мультимедийном оформлении мероприятия так же можно задействовать проектор с большим экраном и две плазменные панели. Зал ресторана может быть украшен и задрапирован по вашему желанию.'),
(5, 'Сан-Жак', NULL, 'Ресторан «Сан-Жак» находится в центре Смоленска и заслужил славу одной\r\nиз основных достопримечательностей города. Элегантный интерьер и вкуснейшая европейская кухня с первого визита завоевывает сердца наших посетителей.'),
(6, 'Упитанный Енот', NULL, 'Кафе расположено в 200м от Колхозной площади. Посетителей не оставят равнодушными необычный интерьер, качели вместо стульев, фонтаны, зимний сад под стеклянной крышей, уникальный Эльфийский зал.\r\n\r\nВ нашем меню придирчиво отобраны блюда из многих мировых кухонь и все это по вменяемым ценам!Блюда заказывают с помощью планшета, и их можно предварительно рассмотреть в деталях на фото. Ежедневно с 18:30 звучит живой вокал. Ну и еще, у нас, конечно, есть много всего интересного, но это нужно увидеть, а лучше попробовать.'),
(7, 'Hagen на Блонье', NULL, '«Hagen» на Блонье — это ресторан в классическом европейском стиле, с крафтовым пивом собственного производства и большим, разнообразным меню.\r\n\r\nМесторасположение ресторана — любимая смолянами и туристами пешеходная часть города, примыкающая к историческому парку Блонье и в шаговой доступности к большинству архитектурных достопримечательностей старого Смоленска. Как и исторический центр Смоленска, «Hagen» на Блонье — это место, куда всегда хочется возвращаться!');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1715381961),
('m240510_225933_create_companies_table', 1715382216),
('m240510_225951_create_reviews_table', 1715382216),
('m240513_103259_add_verification_to_reviews', 1715596596);

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `review_text` text DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `verification` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `author_name`, `photo`, `review_text`, `company_id`, `verification`) VALUES
(27, 'ТестДубравы1', 'midjourney_LOGO1.png', '111', 1, 1),
(28, 'ТестДубравы2', 'midjourney_LOGO1.png', '12321', 1, 1),
(29, 'ТестДубравы3', 'photo_2024-05-04_14-29-26.jpg', '3', 1, 1),
(30, 'ТестДубравы4', 'midjourney_LOGO1.png', '4', 1, 1),
(31, 'ТестДубравы5', 'VO8UskULLLA.jpg', '5', 1, 1),
(32, 'Тест неопубликованного отзыва', 'Screenshot_103.png', 'бла-бла', 1, 0),
(33, 'Сойжак тест', 'Screenshot_209.png', '123 ИЗМЕНЕНО', 5, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `auth_key` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `auth_key`) VALUES
(1, 'admin', '$2y$13$x6fFlt8Z.p37/zoZqJzhSeyJFuSoZ7zuEmfFQk0kPYOxT1XSLBsqu', 'pQoa7cTNk7tiE1Nkqj-JJjpp_mEBIs8X');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-reviews-company_id` (`company_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk-reviews-company_id` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
