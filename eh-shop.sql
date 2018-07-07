-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-06-28 10:12:19
-- 服务器版本： 10.1.30-MariaDB
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eh-shop`
--

-- --------------------------------------------------------

--
-- 表的结构 `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `consignee` varchar(64) NOT NULL DEFAULT '',
  `address` text NOT NULL,
  `postcode` char(6) DEFAULT '',
  `telephone` varchar(24) NOT NULL DEFAULT '',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_user_id` int(11) NOT NULL,
  `updated_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `cart`
--

CREATE TABLE `cart` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_attr_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_user_id` int(11) NOT NULL,
  `updated_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE `category` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(32) NOT NULL DEFAULT '',
  `parent_id` int(11) UNSIGNED DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_user_id` int(11) NOT NULL,
  `updated_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`id`, `title`, `parent_id`, `created_at`, `updated_at`, `created_user_id`, `updated_user_id`) VALUES
(24, '家用电器', 0, 1529996146, 1529996146, 1, 1),
(25, '数码', 0, 1529996168, 1529996168, 1, 1),
(26, '男装', 0, 1529996211, 1529996211, 1, 1),
(27, '女装', 0, 1529996217, 1529996217, 1, 1),
(28, '电视', 24, 1529996244, 1529996244, 1, 1),
(29, '空调', 24, 1529996251, 1529996251, 1, 1),
(30, '洗衣机', 24, 1529996257, 1529996257, 1, 1),
(31, '冰箱', 24, 1529996272, 1529996272, 1, 1),
(32, 'POLO衫', 26, 1529996297, 1529996297, 1, 1),
(33, 'T恤', 26, 1529996342, 1529996342, 1, 1),
(34, '牛仔裤', 26, 1529996368, 1529996368, 1, 1),
(35, '吊带裤', 27, 1529996385, 1529996385, 1, 1),
(36, '连衣裙', 27, 1529996396, 1529996396, 1, 1),
(37, '婚纱', 27, 1529996414, 1529996414, 1, 1),
(38, '手机', 25, 1529996423, 1529996423, 1, 1),
(39, '照相机', 25, 1529996436, 1529996436, 1, 1),
(40, '智能手环', 25, 1529996465, 1529996465, 1, 1),
(41, 'iPhone', 38, 1529996479, 1529996479, 1, 1),
(42, '小米', 38, 1529996489, 1529996489, 1, 1),
(43, '华为', 38, 1529996500, 1529996500, 1, 1),
(44, '格力', 29, 1529996508, 1529996508, 1, 1),
(45, '海尔', 29, 1529996519, 1529996519, 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `express`
--

CREATE TABLE `express` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_user_id` int(11) NOT NULL,
  `updated_user_id` int(11) NOT NULL,
  `status` smallint(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1529731367),
('m130524_201442_init', 1529731373);

-- --------------------------------------------------------

--
-- 表的结构 `order`
--

CREATE TABLE `order` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `address_id` int(11) NOT NULL DEFAULT '0',
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `status` smallint(3) UNSIGNED NOT NULL DEFAULT '0',
  `express_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `express_no` varchar(50) NOT NULL DEFAULT '',
  `trade_no` varchar(100) NOT NULL DEFAULT '',
  `trade_ext` text,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_user_id` int(11) NOT NULL,
  `updated_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) UNSIGNED NOT NULL,
  `order_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `product_attr_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_user_id` int(11) NOT NULL,
  `updated_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE `product` (
  `id` int(11) UNSIGNED NOT NULL,
  `category_id` int(11) UNSIGNED NOT NULL,
  `product_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_desc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(3) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_user_id` int(11) NOT NULL,
  `updated_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `product_attr`
--

CREATE TABLE `product_attr` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `attr` varchar(64) NOT NULL DEFAULT '0.00',
  `pictures` text NOT NULL,
  `count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `price` decimal(10,2) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_user_id` int(11) NOT NULL,
  `updated_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `promotion`
--

CREATE TABLE `promotion` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(3) NOT NULL DEFAULT '1' COMMENT '1启用，0禁用',
  `pictures` text,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_user_id` int(11) NOT NULL,
  `updated_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `promotion`
--

INSERT INTO `promotion` (`id`, `title`, `status`, `pictures`, `created_at`, `updated_at`, `created_user_id`, `updated_user_id`) VALUES
(4, '限时优惠', 1, '1530005293344.png', 1530005293, 1530005293, 0, 0),
(5, '中秋献礼', 1, '1530010114138.png', 1530010114, 1530010114, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `ref_promotion_product`
--

CREATE TABLE `ref_promotion_product` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `promotion_id` int(11) UNSIGNED NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_user_id` int(11) NOT NULL,
  `updated_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'RE-76eMKr3S6_bYJVsvjLrSuNSnW6FPo', '$2y$13$YipBDHT5eqxZF7TrICPpFuXB3JJ2zPyLBcVd3kaK9nBgZPsqSSsnm', NULL, '469251369@qq.com', 10, 1529731748, 1529731748);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_User_Address` (`user_id`),
  ADD KEY `FK_CreUser_Address` (`created_user_id`),
  ADD KEY `FK_UpdUser_Address` (`updated_user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_User_Cart` (`user_id`),
  ADD KEY `FK_Prdt_Cart` (`product_attr_id`),
  ADD KEY `FK_CreUser_Cart` (`created_user_id`),
  ADD KEY `FK_UpdUser_Cart` (`updated_user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Unique_Cate` (`title`) USING BTREE,
  ADD KEY `FK_Parent_Cate` (`parent_id`),
  ADD KEY `FK_CreUser_Cate` (`created_user_id`),
  ADD KEY `FK_UpdUser_Cate` (`updated_user_id`);

--
-- Indexes for table `express`
--
ALTER TABLE `express`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Unique_Express` (`name`) USING BTREE,
  ADD KEY `FK_CreUser_Express` (`created_user_id`),
  ADD KEY `FK_UpdUser_Express` (`updated_user_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `FK_ExpressNo_Order` (`express_id`,`express_no`) USING BTREE,
  ADD KEY `FK_User_Order` (`user_id`),
  ADD KEY `FK_Address_Order` (`address_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Order_Detail` (`order_id`),
  ADD KEY `FK_Prdt_OdDt` (`product_attr_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Cate_Prd` (`category_id`),
  ADD KEY `FK_CreUser_Prd` (`created_user_id`),
  ADD KEY `FK_UpdUser_Prd` (`updated_user_id`);

--
-- Indexes for table `product_attr`
--
ALTER TABLE `product_attr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Prd_Prdt` (`product_id`);

--
-- Indexes for table `promotion`
--
ALTER TABLE `promotion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Unique` (`title`) USING BTREE;

--
-- Indexes for table `ref_promotion_product`
--
ALTER TABLE `ref_promotion_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Promo_Prd` (`promotion_id`),
  ADD KEY `Unique_Prd_Promo` (`product_id`,`promotion_id`) USING BTREE;

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- 使用表AUTO_INCREMENT `express`
--
ALTER TABLE `express`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `product_attr`
--
ALTER TABLE `product_attr`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `ref_promotion_product`
--
ALTER TABLE `ref_promotion_product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 限制导出的表
--

--
-- 限制表 `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `FK_CreUser_Address` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_UpdUser_Address` FOREIGN KEY (`updated_user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_User_Address` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_CreUser_Cart` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_Prdt_Cart` FOREIGN KEY (`product_attr_id`) REFERENCES `product_attr` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_UpdUser_Cart` FOREIGN KEY (`updated_user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_User_Cart` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `FK_CreUser_Cate` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_UpdUser_Cate` FOREIGN KEY (`updated_user_id`) REFERENCES `user` (`id`);

--
-- 限制表 `express`
--
ALTER TABLE `express`
  ADD CONSTRAINT `FK_CreUser_Express` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_UpdUser_Express` FOREIGN KEY (`updated_user_id`) REFERENCES `user` (`id`);

--
-- 限制表 `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_Address_Order` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`),
  ADD CONSTRAINT `FK_Express_Order` FOREIGN KEY (`express_id`) REFERENCES `express` (`id`),
  ADD CONSTRAINT `FK_User_Order` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `FK_Order_Detail` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Prdt_OdDt` FOREIGN KEY (`product_attr_id`) REFERENCES `product_attr` (`id`);

--
-- 限制表 `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_Cate_Prd` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `FK_CreUser_Prd` FOREIGN KEY (`created_user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `FK_UpdUser_Prd` FOREIGN KEY (`updated_user_id`) REFERENCES `user` (`id`);

--
-- 限制表 `product_attr`
--
ALTER TABLE `product_attr`
  ADD CONSTRAINT `FK_Prd_Prdt` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `ref_promotion_product`
--
ALTER TABLE `ref_promotion_product`
  ADD CONSTRAINT `FK_Prd_Promo` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Promo_Prd` FOREIGN KEY (`promotion_id`) REFERENCES `promotion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
