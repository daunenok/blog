-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 17 2017 г., 15:02
-- Версия сервера: 5.7.16
-- Версия PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `preview` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `public` tinyint(1) NOT NULL,
  `comments` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `preview`, `category`, `public`, `comments`, `created_at`, `updated_at`) VALUES
(1, 'The best article', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend quam a blandit facilisis. Proin egestas bibendum tempor. Curabitur in odio in metus elementum ultricies. Donec pharetra est vel leo tempus vestibulum in at ipsum. Aliquam porta, arcu eget tincidunt commodo, mi ex congue urna, sed finibus ante magna at mi. Aliquam aliquet nunc tristique sem luctus ultrices ac eget mauris. Ut blandit odio ac risus porttitor, et ullamcorper justo consectetur. Proin gravida quam ac orci consequat sollicitudin. Sed ut blandit odio, bibendum bibendum nulla. Vivamus a orci tempor, lacinia lectus at, commodo ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut et quam odio. Mauris tellus ex, tristique at libero et, lobortis placerat urna. Donec eu ipsum eu mauris placerat pellentesque.', '/images/roza.jpg', 2, 1, 1, '2017-02-09 03:51:18', '2017-02-09 09:14:14'),
(2, 'Second article', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eleifend quam a blandit facilisis. Proin egestas bibendum tempor. Curabitur in odio in metus elementum ultricies. Donec pharetra est vel leo tempus vestibulum in at ipsum. Aliquam porta, arcu eget tincidunt commodo, mi ex congue urna, sed finibus ante magna at mi. Aliquam aliquet nunc tristique sem luctus ultrices ac eget mauris. Ut blandit odio ac risus porttitor, et ullamcorper justo consectetur. Proin gravida quam ac orci consequat sollicitudin. Sed ut blandit odio, bibendum bibendum nulla. Vivamus a orci tempor, lacinia lectus at, commodo ante. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut et quam odio. Mauris tellus ex, tristique at libero et, lobortis placerat urna. Donec eu ipsum eu mauris placerat pellentesque.', '/images/most.jpg', 2, 1, 1, '2017-02-09 03:52:38', '2017-02-09 09:13:47'),
(3, 'Third article', 'Aenean sed velit nibh. Maecenas laoreet nisl neque, tempus gravida lacus mattis quis. Donec porttitor ultricies lacus, sit amet gravida nisl aliquet sed. Mauris vel nibh augue. Aenean gravida justo sapien, in elementum nisi malesuada in. Nam quis molestie orci. Ut mi ligula, imperdiet non risus ut, hendrerit facilisis arcu. Mauris vitae velit non orci feugiat ultrices. In mauris nunc, interdum nec vestibulum at, dictum eu eros. Nam id feugiat eros. Donec lobortis, ante vel condimentum dignissim, justo felis maximus mauris, eu malesuada arcu magna id orci. Proin convallis venenatis urna, imperdiet pharetra magna accumsan id. Aliquam bibendum urna sit amet libero semper varius. Proin tincidunt, enim id eleifend venenatis, lacus eros molestie velit, eu pharetra risus elit a nisl. Fusce et dolor id felis dapibus accumsan.', '/images/most.jpg', 1, 1, 1, '2017-02-09 03:54:43', '2017-02-09 03:54:43');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'PHP', '2017-02-08 06:42:09', '2017-02-08 06:42:09'),
(2, 'HTML', '2017-02-08 06:42:21', '2017-02-08 06:42:21'),
(3, 'JavaScript', '2017-02-08 06:42:44', '2017-02-08 06:42:44'),
(13, 'Python', '2017-02-09 02:24:50', '2017-02-09 02:24:50'),
(14, 'Ruby', '2017-02-09 02:25:06', '2017-02-09 02:39:36');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `article` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `article`, `content`, `author`, `created_at`, `updated_at`) VALUES
(2, 1, 'Sed gravida a eros ut feugiat.', 'Jane Doe', '2017-02-10 07:38:34', '2017-02-10 08:59:13'),
(3, 2, 'Vestibulum vitae rhoncus lacus, ut mattis ante. Proin sit amet sollicitudin est. Etiam porta fermentum tellus, non lacinia quam tristique at.', 'Mary', '2017-02-10 02:20:52', '2017-02-10 02:20:52'),
(4, 2, 'Nam mollis auctor egestas.', 'Lisa', '2017-02-10 02:24:26', '2017-02-10 02:24:26'),
(5, 1, 'Donec purus elit, rutrum in diam eu, tempor consectetur magna. Quisque vehicula purus eget lacus posuere, a maximus augue tristique. Donec ut congue nulla, quis tristique eros.', 'Jack', '2017-02-10 02:27:15', '2017-02-10 02:27:15'),
(6, 2, 'Hi!', 'Kristi', '2017-02-12 13:46:39', '2017-02-12 13:46:39');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_02_08_090525_create_table_articles', 1),
(2, '2017_02_08_090618_create_table_categories', 1),
(3, '2017_02_08_090634_create_table_comments', 1),
(4, '2014_10_12_000000_create_users_table', 2),
(5, '2014_10_12_100000_create_password_resets_table', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('daunenok@list.ru', '$2y$10$VCGHpUTazcgqXDZv//2./u04VXojaegYLb7tywfI3Kxcy4w0.X0a2', '2017-02-11 03:34:25');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'daunenok', 'daunenok@list.ru', '$2y$10$urGQo9PkMQUaAasns2IQousYeyy6/ru25mUFARMBOxS7CfXBL..ZO', NULL, '2017-02-11 03:21:08', '2017-02-11 03:21:08'),
(2, 'daun', 'daun@list.ru', '$2y$10$yKA6ADAP9fvBvBMmT9IZVegDQTKN7WBV8H6mBZhawqx8Z31S2b2lO', NULL, '2017-02-11 03:26:41', '2017-02-11 03:26:41');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
