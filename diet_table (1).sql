-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2020-12-29 06:19:58
-- サーバのバージョン： 10.4.17-MariaDB
-- PHP のバージョン: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacf_d07_04`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `diet_table`
--

CREATE TABLE `diet_table` (
  `id` int(12) NOT NULL,
  `weight` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `diet_table`
--

INSERT INTO `diet_table` (`id`, `weight`, `created_at`, `updated_at`) VALUES
(1, 40, '2020-12-29 13:53:53', '2020-12-29 13:53:53'),
(3, 50, '2020-12-29 13:54:32', '2020-12-29 13:54:32'),
(4, 60, '2020-12-29 13:57:09', '2020-12-29 13:57:09'),
(5, 0, '2020-12-29 13:57:11', '2020-12-29 13:57:11'),
(6, 55, '2020-12-29 13:57:17', '2020-12-29 13:57:17');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `diet_table`
--
ALTER TABLE `diet_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `weight` (`weight`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `diet_table`
--
ALTER TABLE `diet_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
