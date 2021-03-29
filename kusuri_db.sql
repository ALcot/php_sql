-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-03-29 15:23:46
-- サーバのバージョン： 10.4.17-MariaDB
-- PHP のバージョン: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `kusuri_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `kusuri_table`
--

CREATE TABLE `kusuri_table` (
  `id` int(12) NOT NULL,
  `k_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `hukusayou` text COLLATE utf8_unicode_ci NOT NULL,
  `kouka` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `kusuri_table`
--

INSERT INTO `kusuri_table` (`id`, `k_name`, `category`, `type`, `hukusayou`, `kouka`, `date`) VALUES
(1, 'ロキソニン', '頓服', '錠剤', '眠気が出る', '頭痛に効く', '0000-00-00 00:00:00'),
(2, '酸化マグネシウム', '朝', '錠剤', 'お腹が緩くなる', '腸の動きを活発にする。\r\nお腹に水分を集めて排泄をスムーズにする。', '0000-00-00 00:00:00'),
(3, 'アジルバ錠20mg', 'Array', '錠剤', '発疹、湿疹、かゆみ、めまい、頭痛、下痢などが報告されています。', '血圧を下げる薬です。\r\n通常、高血圧症の治療に用いられます。', '0000-00-00 00:00:00'),
(4, 'エリザス点鼻粉末', 'Array', '粉末', '鼻部不快感、咽頭不快感などが報告されています。', 'くしゃみ、鼻水、鼻づまりなどの症状を改善します。\r\n通常、アレルギー性鼻炎の治療に用いられます。', '0000-00-00 00:00:00'),
(5, 'リンデロン-VG軟膏', 'Array', 'その他', '皮膚刺激感、潮紅、皮膚炎、発疹、接触性皮膚炎、皮膚の感染症などが報告されています。', '皮膚のかゆみ、赤み、はれなどの症状を改善します。', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- テーブルの構造 `member_table`
--

CREATE TABLE `member_table` (
  `id` int(12) NOT NULL,
  `u_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `u_id` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `u_pw` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `member_table`
--

INSERT INTO `member_table` (`id`, `u_name`, `u_id`, `u_pw`, `indate`) VALUES
(3, 'a', 'a', 'aaaaaaaa', '2021-03-28 13:46:40');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `kusuri_table`
--
ALTER TABLE `kusuri_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `member_table`
--
ALTER TABLE `member_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `kusuri_table`
--
ALTER TABLE `kusuri_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- テーブルの AUTO_INCREMENT `member_table`
--
ALTER TABLE `member_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
