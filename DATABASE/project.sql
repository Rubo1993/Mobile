-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 07 2019 г., 00:06
-- Версия сервера: 5.6.31
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `project`
--

-- --------------------------------------------------------

--
-- Структура таблицы `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(11) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `cat_id` int(11) unsigned NOT NULL,
  `slug` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brands`
--

INSERT INTO `brands` (`id`, `title`, `description`, `image`, `cat_id`, `slug`) VALUES
(3, 'Samsung', '', 'T6-shgdo6VaeLc3WhZaL3JIVUtPB8MJt.png', 6, 'samsung'),
(4, 'Nokia', '', '5dmgmkJbXHULbqqPzMA3hS1BqSz4vs_V.png', 6, 'nokia'),
(5, 'Xiomi', '', 'WE73yhI9tKNvIonNbsmkz3s_MFOH0CcV.png', 6, 'xiomi'),
(6, 'HP', '', '_SiqJP9gLFasquihucr0KRe8WU38j5_j.jpg', 7, 'hp'),
(7, 'Dell', '', 'Rb94qEoAihjXSkUX0FQ4vFIZUYmthYHA.png', 7, 'dell'),
(8, 'JBL ', '', 'GasRdRVlvbfcMjK2aWOPN_RmoT1K0IAG.jpg', 8, 'jbl'),
(12, 'Alcatel', '', '6dWbNqPPECGbECP6TszoIgCVSug4Dwr9.png', 6, 'alcatel'),
(14, 'coca_cola_bufer', '', 'P0CIWH_Ay1WI_Fb1MlYArh8aGmg0brWK.jpg', 9, 'cocacolabufer'),
(15, 'Iphone', '', 'mSbEElQjBSQ5cnk2rkRjfEopCxopCHvQ.png', 6, 'iphone'),
(16, 'MacBook', '', '1pRONayAU1D5qvPvSPRvtYlN6DtNVFrI.png', 7, 'macbook');

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) unsigned NOT NULL,
  `product_id` int(11) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `user_id`, `quantity`, `created_at`) VALUES
(103, 21, 10, 1, '2019-02-23 14:15:42'),
(112, 24, 2, 2, '2019-02-25 12:23:28'),
(116, 24, 11, 1, '2019-02-26 18:24:49');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `image` varchar(255) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `info_image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `image`, `slug`, `info_image`) VALUES
(6, 'Telephone', '', 'phone.jpg', 'telephone', ''),
(7, 'Notebooke', '', '', 'notebooke', ''),
(8, 'Accessories', '', '', 'accessories', ''),
(9, 'Bufers', '', '', 'buffers', '');

-- --------------------------------------------------------

--
-- Структура таблицы `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mail`
--

INSERT INTO `mail` (`id`, `email`, `content`, `date`, `name`) VALUES
(1, 'arm.phone2019@mail.ru', 'shop', '2019-02-26 22:21:20', 'Poxos'),
(2, 'arm.phone2019@mail.ru', 'test', '2019-03-01 11:05:40', '');

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(10) unsigned NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `qty` int(10) NOT NULL,
  `sum` float NOT NULL,
  `status` enum('0','1') DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order`
--

INSERT INTO `order` (`id`, `created_at`, `updated_at`, `qty`, `sum`, `status`, `name`, `email`, `phone`, `address`) VALUES
(1, '2019-02-25 14:08:58', '2019-02-25 14:08:58', 2, 6000, NULL, 'RUBO', 'Rubo@mail.ru', '65864', 'gfhjhg'),
(2, '2019-02-25 16:16:18', '2019-02-25 16:16:18', 1, 420000, '1', 'RUBO', 'Rubo@mail.ru', '7754', 'hgv'),
(3, '2019-02-26 22:19:53', '2019-02-26 22:19:53', 7, 820000, NULL, 'ARTUR', 'artur35qx994@mail.ru', '78454515', 'Mush taxamas'),
(4, '2019-02-26 22:25:39', '2019-02-26 22:25:39', 1, 395000, NULL, 'ADMIN', 'sport-199368@mail.ru', '5645', 'ghg'),
(5, '2019-02-26 22:26:33', '2019-02-26 22:26:33', 3, 506000, NULL, 'ADMIN', 'sport-199368@mail.ru', '4561', 'ytfg'),
(6, '2019-02-28 15:33:57', '2019-02-28 15:33:57', 5, 1834000, NULL, 'ADMIN', 'sport-199368@mail.ru', '321313', 'hkhklj;l'),
(7, '2019-02-28 20:57:54', '2019-02-28 20:57:54', 1, 395000, NULL, 'ADMIN', 'sport-199368@mail.ru', '5415', 'jomo'),
(8, '2019-03-02 13:33:22', '2019-03-02 13:33:22', 6, 509000, NULL, 'ADMIN', 'sport-199368@mail.ru', '45545', 'jomo');

-- --------------------------------------------------------

--
-- Структура таблицы `order_items`
--

CREATE TABLE IF NOT EXISTS `order_items` (
  `id` int(10) unsigned NOT NULL,
  `order_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `qty_item` int(10) NOT NULL,
  `sum_item` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `name`, `price`, `qty_item`, `sum_item`) VALUES
(3, 2, 21, 'iPhone X ', 480000, 1, 480000),
(4, 3, 18, 'Samsung Galaxy S8 Plus', 2000, 5, 10000),
(5, 3, 24, 'Apple Macbook', 400000, 1, 400000),
(6, 3, 25, 'Наушники Beats ', 480000, 1, 480000),
(7, 4, 24, 'Apple Macbook', 400000, 1, 400000),
(8, 5, 24, 'Apple Macbook', 400000, 1, 400000),
(9, 5, 19, 'Galaxy S6', 120000, 1, 120000),
(10, 5, 20, ' iPhone XR 64', 2000, 1, 2000),
(11, 6, 24, 'Apple Macbook', 400000, 3, 1200000),
(12, 6, 23, 'iPhone 6S', 234000, 1, 234000),
(13, 6, 25, 'Наушники Beats ', 480000, 1, 480000),
(14, 7, 24, 'Apple Macbook', 400000, 1, 400000),
(15, 8, 20, ' iPhone XR 64', 2000, 4, 8000),
(16, 8, 19, 'Galaxy S6', 120000, 1, 120000),
(17, 8, 24, 'Apple Macbook', 400000, 1, 400000);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `slug` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) unsigned NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `price` float unsigned NOT NULL,
  `sale_prise` float unsigned DEFAULT NULL,
  `sku` varchar(150) NOT NULL,
  `quantity` int(11) NOT NULL,
  `available_stock` int(11) NOT NULL,
  `is_new` enum('0','1') NOT NULL DEFAULT '0',
  `is_sale` enum('0','1') NOT NULL DEFAULT '0',
  `image` varchar(255) DEFAULT NULL,
  `is_feature` varchar(255) DEFAULT NULL,
  `cat_id` int(11) unsigned NOT NULL,
  `brand_id` int(11) unsigned DEFAULT NULL,
  `slug` varchar(150) NOT NULL,
  `best` enum('0','1') NOT NULL DEFAULT '0',
  `reyting` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `sale_prise`, `sku`, `quantity`, `available_stock`, `is_new`, `is_sale`, `image`, `is_feature`, `cat_id`, `brand_id`, `slug`, `best`, `reyting`) VALUES
(18, 'Samsung Galaxy S8 Plus', 'Կրկնակի SIM՝ Այո\r\nԷկրանի տեսակ՝ IPS LCD capacitive touchscreen\r\nԷկրանի անկյունագիծ "՝ 6,18\r\nԷկրանի լուծաչափ՝ 1080 x 2246\r\nՕպերացիոն համակարգ՝ Android 8.1\r\nRAM (օպերատիվ հիշողություն)(ԳԲ)՝ 6\r\nՀիմնական տեսախցիկ (ՄՊ)՝ 12', 2000, 1000, '1235569554555', 20, 20, '1', '1', 'UkprwTC3VkPZH8hQBbe0c-E2w-ANuzuD.jpg', '', 6, 3, 'samsung-galaxy-s8-plus', '1', 3),
(19, 'Galaxy S6', '', 120000, 110000, '556565235695656', 20, 20, '1', '0', 'jOISp5GiP2KIvJivABWjqM1F6EHYLceq.jpg', '', 6, 3, 'galaxy-s6', '0', 5),
(20, ' iPhone XR 64', 'Կրկնակի SIM՝ Ոչ\r\nԷկրանի տեսակ՝ IPS LCD capacitive touchscreen\r\nԷկրանի անկյունագիծ "՝ 6.1\r\nԷկրանի լուծաչափ՝ 828 x 1792\r\nՕպերացիոն համակարգ՝ OS, iOS 12\r\nRAM (օպերատիվ հիշողություն)(ԳԲ)՝ 3\r\nՀիմնական տեսախցիկ (ՄՊ)՝ 12', 2000, 1000, '66846546dsdfsdfsadda', 20, 20, '0', '0', '39eJEBlXKBWMqVoSOfautl7UpEx1OlTA.jpg', '', 6, 15, 'iphone-xr-64', '1', 5),
(21, 'iPhone X ', 'Կրկնակի SIM՝ Ոչ\r\nԷկրանի տեսակ՝ Super AMOLED capacitive touchscreen\r\nԷկրանի անկյունագիծ "՝ 5.8\r\nԷկրանի լուծաչափ՝ 1125 x 2436\r\nՕպերացիոն համակարգ՝ iOS 11.1.1\r\nRAM (օպերատիվ հիշողություն)(ԳԲ)՝ 3\r\nՀիմնական տեսախցիկ (ՄՊ)՝ 12', 480000, 420000, '668465465468485', 20, 20, '0', '0', 'O9aKkiUN76hEPfTLO1W9rgH9dDaSLCwV.jpg', '', 6, 15, 'iphone-x', '1', 5),
(23, 'iPhone 6S', 'Օպերատիվ հիշողություն  2 GB\r\nՀիշողություն 32 GB\r\nՀայտարարության տարին 2016\r\nԷկրանի բանաձևը 1334x750\r\nԷկրանի չափսը 4.7 դյույմ', 234000, 229000, '5445565665652', 5, 5, '1', '0', '_9t6fOBuRumh6rFScJWDia_x0HOkUVOi.jpg', '', 6, 15, 'iphone-6s', '0', 4),
(24, 'Apple Macbook', 'Էկրան11.6 inch (29.4cm)\r\nԿոշտ սկավառակի հիշողություն 256GB\r\nՕպերատիվ հիշողություն 4GBԱռկա ', 400000, 395000, '62626262625669162626', 10, 10, '0', '0', 'Ad4vp1bQ38SudaXO2hTw8S_9OXlbdajT.jpg', '', 7, 16, 'apple-macbook', '0', 5),
(25, 'Наушники Beats ', 'Тип - закрытые. \r\nДопустимый диапазон - 20-20 000 Гц.\r\nИмпеданс (сопротивление) - 320 м. \r\nЧувствительность - 115 дБ. \r\nПульт ДУ на внешней стороне наушника.\r\n Интегрированный микрофон (подходит для разговоров). \r\n', 480000, 420000, '4851518515', 5, 5, '0', '0', 'd93l8eRHlmNOwoIsTM1C8vknyfLAGkW2.jpg', '', 8, NULL, 'beats', '0', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id`, `description`, `image`) VALUES
(8, 'Скидки 20% на отдельные категории товаров', '1PsxA0EZ1uzGlTkttaIAlm6fsGQ9bdqQ.jpg'),
(9, '', 'm8YKcyXB7bAHTAGWBYHoDRDVRlgwUeZc.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_admin` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `is_admin`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `image`) VALUES
(2, 'rubo', '1', 'modBMFNFzhRdAe1j8BJ2-WxudY6wEsVI', '$2y$13$trdNfFnODL3XXhG/JJbgc.hNntcz3SyYwzZY09qe8mZx7o55qQ8I6', NULL, 'Rubo@mail.ru', 10, 1549047626, 1549047626, ''),
(8, 'admin', '0', 'vXuMkJwLMUDOsO8rw3G0aSo3cxtZ4tnj', '$2y$13$Pfrt4FGDyPbrPRT4lL1YUOD83qTq4GTS5EaAB3vFeU8ecyD9GlzMy', NULL, 'sport-199368@mail.ru', 10, 1550865120, 1550865120, ''),
(9, 'test', '0', 'YjSDC-Yqc8-JaAESmZlEsOwfZhEZkTBv', '$2y$13$OAiG1Chaxa9D0WGh9WDO/Oe.LI.OLNpdhX6kBK/KczUZNedbXW9Ke', NULL, 'myarmphone@mail.ru', 10, 1550868088, 1550868088, ''),
(10, 'tik', '0', 'ooR026TyysD1FALgL14_iUztMAo5NYYx', '$2y$13$6nBtvCMNPJTT2kgRcJnwZOwWeoWyyBdbViw7pJyC6kxYg7dT.ABlC', NULL, 'tigran.inbox@gmail.com', 10, 1550931332, 1550931332, ''),
(11, 'Artur', '0', 'BVuMAHJ05DIH0xODTgJUR31Cu9NSlgM8', '$2y$13$Jet2PoVfsmP8W7zd6WeJEeP1ILuVjIt/d7WVV45CBXLZ3l0.VQGSa', NULL, 'artur35qx994@mail.ru', 10, 1551205105, 1551205105, '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблицы `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `brands`
--
ALTER TABLE `brands`
  ADD CONSTRAINT `brands_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Ограничения внешнего ключа таблицы `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
