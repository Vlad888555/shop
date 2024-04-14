-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 14 2024 г., 20:33
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
-- База данных: `pract_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`Id`, `Name`) VALUES
(1, 'Смартфоны и гаджеты'),
(2, 'Комлектующие'),
(3, 'Ноутбуки и компьютеры'),
(4, 'Компьютерная периферия'),
(5, 'Оргтечника и расходные материалы'),
(6, 'Сетевое и сервеное оборудование'),
(7, 'Телевизоры аудио видео'),
(8, 'Бытовая техника и товары для дома'),
(9, 'Товары для геймеров'),
(10, 'Развлечения и отдых');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Cover` text NOT NULL,
  `Price` decimal(10,0) NOT NULL,
  `Info` text NOT NULL,
  `Spesc` text NOT NULL,
  `Description` text NOT NULL,
  `Images` text NOT NULL,
  `Category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`Id`, `Name`, `Cover`, `Price`, `Info`, `Spesc`, `Description`, `Images`, `Category_id`) VALUES
(1, 'Товар 1', '1.jpg', 123123, 'rfwesfdsf\r\ngfdgf\r\njhgjjytk\r\ngfdgfdg\r\njhgkjhlk', '[{\"name\": \"UID товар\",\"value\": \"90MPO\"},{\"name\": \"Производитель\",\"value\": \"ASUS\"},{\"name\": \"Модель\",\"value\": \"ROG Strix Flare II Animate\"},{\"name\": \"Тип\",\"value\": \"Клавиатура\"},{\"name\": \"Тип клавиатуры\",\"value\": \"Подробнее Мультимедия\"}]', ' <h2>Описания</h2>\r\n                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est repellendus quia fuga quidem, voluptates laudantium nihil cupiditate commodi repudiandae, distinctio consectetur doloribus assumenda. Voluptate soluta adipisci qui labore, corporis nemo provident enim optio odio animi laborum, quae veritatis fuga earum.</p>', '[\"2.jpg\",\"3.jpg\",\"4.jpg\"]', 1),
(2, 'Товар 2', '3.jpg', 10000, 'rfwesfdsf\r\ngfdgf\r\njhgjjytk\r\ngfdgfdg\r\njhgkjhlk', '[{\"name\": \"UID товар\",\"value\": \"90MPO\"},{\"name\": \"Производитель\",\"value\": \"ASUS\"},{\"name\": \"Модель\",\"value\": \"ROG Strix Flare II Animate\"},{\"name\": \"Тип\",\"value\": \"Клавиатура\"},{\"name\": \"Тип клавиатуры\",\"value\": \"Подробнее Мультимедия\"}]', ' <h2>Описания</h2>\r\n                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est repellendus quia fuga quidem, voluptates laudantium nihil cupiditate commodi repudiandae, distinctio consectetur doloribus assumenda. Voluptate soluta adipisci qui labore, corporis nemo provident enim optio odio animi laborum, quae veritatis fuga earum.</p>', '[\"2.jpg\",\"3.jpg\",\"4.jpg\"]', 2),
(3, 'Товар 3', '5.jpg', 14678, 'rfwesfdsf\r\ngfdgf\r\njhgjjytk\r\ngfdgfdg\r\njhgkjhlk', '[{\"name\": \"UID товар\",\"value\": \"90MPO\"},{\"name\": \"Производитель\",\"value\": \"ASUS\"},{\"name\": \"Модель\",\"value\": \"ROG Strix Flare II Animate\"},{\"name\": \"Тип\",\"value\": \"Клавиатура\"},{\"name\": \"Тип клавиатуры\",\"value\": \"Подробнее Мультимедия\"}]', ' <h2>Описания</h2>\r\n                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est repellendus quia fuga quidem, voluptates laudantium nihil cupiditate commodi repudiandae, distinctio consectetur doloribus assumenda. Voluptate soluta adipisci qui labore, corporis nemo provident enim optio odio animi laborum, quae veritatis fuga earum.</p>', '[\"1.jpg\",\"2.jpg\",\"3.jpg\",\"4.jpg\",\"5.jpg\"]', 1),
(4, 'Товар 3', '5.jpg', 14678, 'rfwesfdsf\r\ngfdgf\r\njhgjjytk\r\ngfdgfdg\r\njhgkjhlk', '[{\"name\": \"UID товар\",\"value\": \"90MPO\"},{\"name\": \"Производитель\",\"value\": \"ASUS\"},{\"name\": \"Модель\",\"value\": \"ROG Strix Flare II Animate\"},{\"name\": \"Тип\",\"value\": \"Клавиатура\"},{\"name\": \"Тип клавиатуры\",\"value\": \"Подробнее Мультимедия\"}]', ' <h2>Описания</h2>\r\n                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est repellendus quia fuga quidem, voluptates laudantium nihil cupiditate commodi repudiandae, distinctio consectetur doloribus assumenda. Voluptate soluta adipisci qui labore, corporis nemo provident enim optio odio animi laborum, quae veritatis fuga earum.</p>', '[\"1.jpg\",\"2.jpg\",\"3.jpg\",\"4.jpg\",\"5.jpg\"]', 2),
(5, 'Товар 1', '1.jpg', 123123, 'rfwesfdsf\r\ngfdgf\r\njhgjjytk\r\ngfdgfdg\r\njhgkjhlk', '[{\"name\": \"UID товар\",\"value\": \"90MPO\"},{\"name\": \"Производитель\",\"value\": \"ASUS\"},{\"name\": \"Модель\",\"value\": \"ROG Strix Flare II Animate\"},{\"name\": \"Тип\",\"value\": \"Клавиатура\"},{\"name\": \"Тип клавиатуры\",\"value\": \"Подробнее Мультимедия\"}]', ' <h2>Описания</h2>\r\n                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est repellendus quia fuga quidem, voluptates laudantium nihil cupiditate commodi repudiandae, distinctio consectetur doloribus assumenda. Voluptate soluta adipisci qui labore, corporis nemo provident enim optio odio animi laborum, quae veritatis fuga earum.</p>', '[\"2.jpg\",\"3.jpg\",\"4.jpg\"]', 3),
(6, 'Товар 2', '3.jpg', 10000, 'rfwesfdsf\r\ngfdgf\r\njhgjjytk\r\ngfdgfdg\r\njhgkjhlk', '[{\"name\": \"UID товар\",\"value\": \"90MPO\"},{\"name\": \"Производитель\",\"value\": \"ASUS\"},{\"name\": \"Модель\",\"value\": \"ROG Strix Flare II Animate\"},{\"name\": \"Тип\",\"value\": \"Клавиатура\"},{\"name\": \"Тип клавиатуры\",\"value\": \"Подробнее Мультимедия\"}]', ' <h2>Описания</h2>\r\n                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est repellendus quia fuga quidem, voluptates laudantium nihil cupiditate commodi repudiandae, distinctio consectetur doloribus assumenda. Voluptate soluta adipisci qui labore, corporis nemo provident enim optio odio animi laborum, quae veritatis fuga earum.</p>', '[\"2.jpg\",\"3.jpg\",\"4.jpg\"]', 3),
(7, 'Товар 3', '5.jpg', 14678, 'rfwesfdsf\r\ngfdgf\r\njhgjjytk\r\ngfdgfdg\r\njhgkjhlk', '[{\"name\": \"UID товар\",\"value\": \"90MPO\"},{\"name\": \"Производитель\",\"value\": \"ASUS\"},{\"name\": \"Модель\",\"value\": \"ROG Strix Flare II Animate\"},{\"name\": \"Тип\",\"value\": \"Клавиатура\"},{\"name\": \"Тип клавиатуры\",\"value\": \"Подробнее Мультимедия\"}]', ' <h2>Описания</h2>\r\n                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est repellendus quia fuga quidem, voluptates laudantium nihil cupiditate commodi repudiandae, distinctio consectetur doloribus assumenda. Voluptate soluta adipisci qui labore, corporis nemo provident enim optio odio animi laborum, quae veritatis fuga earum.</p>', '[\"1.jpg\",\"2.jpg\",\"3.jpg\",\"4.jpg\",\"5.jpg\"]', 4),
(8, 'Товар 3', '5.jpg', 14678, 'rfwesfdsf\r\ngfdgf\r\njhgjjytk\r\ngfdgfdg\r\njhgkjhlk', '[{\"name\": \"UID товар\",\"value\": \"90MPO\"},{\"name\": \"Производитель\",\"value\": \"ASUS\"},{\"name\": \"Модель\",\"value\": \"ROG Strix Flare II Animate\"},{\"name\": \"Тип\",\"value\": \"Клавиатура\"},{\"name\": \"Тип клавиатуры\",\"value\": \"Подробнее Мультимедия\"}]', ' <h2>Описания</h2>\r\n                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est repellendus quia fuga quidem, voluptates laudantium nihil cupiditate commodi repudiandae, distinctio consectetur doloribus assumenda. Voluptate soluta adipisci qui labore, corporis nemo provident enim optio odio animi laborum, quae veritatis fuga earum.</p>', '[\"1.jpg\",\"2.jpg\",\"3.jpg\",\"4.jpg\",\"5.jpg\"]', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `Id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Content` text NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`Id`, `User_id`, `Date`, `Content`, `Comment`) VALUES
(2, 1, '0000-00-00', '1', '321421432534543');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `Id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Good_id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Text` text NOT NULL,
  `Rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`Id`, `User_id`, `Good_id`, `Date`, `Text`, `Rate`) VALUES
(1, 2, 1, '0000-00-00', '114546', 3),
(2, 1, 2, '2024-04-04', '324214532564376547rdrfgdr', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Login` text NOT NULL,
  `Password` text NOT NULL,
  `Phone` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`Id`, `Name`, `Login`, `Password`, `Phone`) VALUES
(1, 'Vlad', 'test1@mail.ru', '$2y$10$ZQ1bzpV6BEY/PdxL01CRCumRrAgLcGdaXB9HQrxn2wQl7LAmQfGGm', 'NULL'),
(2, '123', 'test2@mail.ru', '$2y$10$gsDSAp7436KN0jzh28MJa.C9ezgCeHufzo.gbho5ThvU879w/MLJq', 'NULL');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`Id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Category_id` (`Category_id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `orders_ibfk_1` (`User_id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `User_id` (`User_id`),
  ADD KEY `Good_id` (`Good_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `goods`
--
ALTER TABLE `goods`
  ADD CONSTRAINT `goods_ibfk_1` FOREIGN KEY (`Category_id`) REFERENCES `categories` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`Good_id`) REFERENCES `goods` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
