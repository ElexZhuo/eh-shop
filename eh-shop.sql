-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-08-16 12:21:10
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
-- 表的结构 `ad_loc`
--

CREATE TABLE `ad_loc` (
  `id` int(11) UNSIGNED NOT NULL,
  `tag` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `code` char(3) NOT NULL DEFAULT '1' COMMENT '1启用，0禁用',
  `desc` text,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_user_id` int(11) NOT NULL,
  `updated_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ad_loc`
--

INSERT INTO `ad_loc` (`id`, `tag`, `code`, `desc`, `created_at`, `updated_at`, `created_user_id`, `updated_user_id`) VALUES
(1, '首页Banner主位', '1', '首页Banner主位', 1533106203, 1533106203, 1, 1),
(2, '首页Banner主位底部', '11', '首页Banner主位底部广告', 1533106239, 1533106239, 1, 1),
(3, '首页Banner主位右边', '12', '首页Banner主位右边', 1533106254, 1533106254, 1, 1);

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
(36, '连衣裙', 27, 1529996396, 1531119770, 1, 1),
(37, '婚纱', 27, 1529996414, 1529996414, 1, 1),
(38, '手机', 25, 1529996423, 1529996423, 1, 1),
(39, '照相机', 25, 1529996436, 1529996436, 1, 1),
(40, '智能手环', 25, 1529996465, 1529996465, 1, 1),
(41, 'iPhone', 38, 1529996479, 1529996479, 1, 1),
(42, '小米', 38, 1529996489, 1529996489, 1, 1),
(43, '华为', 38, 1529996500, 1529996500, 1, 1),
(44, '格力', 29, 1529996508, 1529996508, 1, 1),
(45, '海尔', 29, 1529996519, 1529996519, 1, 1),
(46, '就我一层', 0, 1532938733, 1532938733, 1, 1),
(47, 'test4', 44, 1533005552, 1533005552, 1, 1),
(48, '厨卫大电', 24, 1533021782, 1533021782, 1, 1),
(49, '厨房小电', 24, 1533021793, 1533021793, 1, 1),
(50, '家庭影音', 24, 1533021826, 1533021826, 1, 1),
(51, '洗碗机', 48, 1533021850, 1533021850, 1, 1),
(52, '油烟机', 48, 1533021862, 1533021862, 1, 1),
(53, 'test8', 24, 1533022262, 1533022262, 1, 1),
(54, '汽车', 0, 1533022745, 1533022745, 1, 1),
(55, '食品', 0, 1533022754, 1533022754, 1, 1),
(56, '艺术/礼品', 0, 1533022765, 1533022765, 1, 1),
(57, '图书/音像', 0, 1533022780, 1533022780, 1, 1),
(58, '机票/旅游', 0, 1533022791, 1533022791, 1, 1),
(59, '交通出行', 58, 1533022821, 1533022821, 1, 1),
(60, '酒店住宿', 58, 1533022835, 1533022835, 1, 1),
(61, '签证门票', 58, 1533022849, 1533022849, 1, 1),
(62, '签证', 61, 1533022860, 1533022860, 1, 1),
(63, '景点门票', 61, 1533022873, 1533022873, 1, 1),
(64, '理财/保险', 0, 1533022904, 1533022904, 1, 1),
(65, '医药保健', 0, 1533022916, 1533022916, 1, 1),
(66, '安装/维修/清洗/保养', 0, 1533022947, 1533022947, 1, 1),
(67, '中西药品', 65, 1533022969, 1533022969, 1, 1),
(68, '营养健康', 65, 1533022992, 1533022992, 1, 1),
(69, '滋补养生', 65, 1533023007, 1533023007, 1, 1);

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

--
-- 转存表中的数据 `express`
--

INSERT INTO `express` (`id`, `name`, `logo`, `created_at`, `updated_at`, `created_user_id`, `updated_user_id`, `status`) VALUES
(1, '顺丰快递', NULL, 1532838655, 1532877283, 1, 1, 1),
(2, '圆通快递', NULL, 1532838703, 1532838703, 1, 1, 1),
(4, '邮政速递', NULL, 1532877370, 1532877370, 1, 1, 1);

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

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`id`, `category_id`, `product_title`, `product_desc`, `status`, `created_at`, `updated_at`, `created_user_id`, `updated_user_id`) VALUES
(85, 30, '黑狼', '<p>3的</p>', 10, 1531286530, 1531467935, 1, 1),
(94, 44, '3P静音空调', '<p>2</p>', 10, 1531288172, 1532591627, 1, 1),
(95, 31, '碧浪300L薰衣草香', '<p>打发士大夫是</p>', 10, 1531982551, 1531982551, 1, 1),
(96, 29, '格力家用系列K333', '<p>格力家用系列K333</p>', 10, 1531982610, 1531982610, 1, 1),
(97, 41, 'iPhone X', '<p>iPhone X</p>', 10, 1532595008, 1532595008, 1, 1),
(98, 28, '小米电视4', '<p>超薄人工智能语音电视</p><h2>小米电视4 75英寸</h2><p><span class=\"J_currentPrice cur-price\"><span class=\"num\">8999</span><span class=\"font506\">元</span></span><img src=\"https://i1.mifile.cn/f/i/18/mitv4/index_banner_img.jpg\"></p><p>*该电视含开关机等形式的广告，开关机时的广告视频不能删除、更改，且第三方内容的广告视频无法控制</p><p>小米电视全新推出大屏代表作：小米电视4 75英寸。11.4mm超薄金属机身，优<br>雅稳重；4K HDR 超高清画质，带来巨幕影院般的观看体验。在做产品的道路上，<br>我们不断探索，努力创新，始终坚持做“感动人心、价格厚道”的好产品。</p><ul><li>11.4mm超薄设计</li><li>金属机身漂亮时尚</li><li>4K HDR超高清画质</li><li>2GB+32GB超大内存空间</li><li>Dolby+DTS音频双解码</li><li>PatchWall人工智能语音系统</li></ul><p>大的刚刚好</p><p>75英寸电视，是可以轻松进入电梯<br>和家的超大尺寸。大而得当，摆在<br>家中，简约大气。</p><ul><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4/index_slider_img3.jpg\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4/index_slider_img4.jpg\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4/index_slider_img5.jpg\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4/index_slider_img1.jpg\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4/index_slider_img2.jpg\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4/index_slider_img3.jpg\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4/index_slider_img4.jpg\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4/index_slider_img5.jpg\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4/index_slider_img1.jpg\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4/index_slider_img2.jpg\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4/index_slider_img3.jpg\"></li></ul><p><a href=\"https://www.mi.com/mitv4/75/\" data-slide-index=\"0\" class=\"ui-pager-link active\" data-stat-id=\"ed877b32eca5354c\">1</a></p><p><a href=\"https://www.mi.com/mitv4/75/\" data-slide-index=\"1\" class=\"ui-pager-link\" data-stat-id=\"18d636977eb4a40f\">2</a></p><p><a href=\"https://www.mi.com/mitv4/75/\" data-slide-index=\"2\" class=\"ui-pager-link\" data-stat-id=\"73c266ca9c3193cd\">3</a></p><p><a href=\"https://www.mi.com/mitv4/75/\" data-slide-index=\"3\" class=\"ui-pager-link\" data-stat-id=\"214173af6e1f792f\">4</a></p><p><a href=\"https://www.mi.com/mitv4/75/\" data-slide-index=\"4\" class=\"ui-pager-link\" data-stat-id=\"a21f0e34bd019388\">5</a></p><p><a class=\"ui-prev\" href=\"https://www.mi.com/mitv4/75/\" data-stat-id=\"080bf6046b2cf358\">上一张</a><a class=\"ui-next\" href=\"https://www.mi.com/mitv4/75/\" data-stat-id=\"adf812f316358cf3\">下一张</a></p><p>设计</p><p>纤薄身材 + 超大屏幕</p><p>高颜值的黑科技大有不同</p><p>小米电视4，在工艺和设计上不断推陈出新，自我突破。全新推出的75英寸抛<br>弃了多余的设计元素，使得简洁的线条与漂亮的金属机身更好的融合在一起，<br>简洁不失时尚；带来美好观感享受的同时，更加坚固，优雅不失稳重。</p><p><img src=\"https://i1.mifile.cn/f/i/18/mitv4/index_art_img1.jpg\"></p><p>11.4mm<br>超薄金属机身</p><p>机身最薄处为11.4mm，搭配枪色金属机身，外观纤薄时尚。</p><p><img src=\"https://i1.mifile.cn/f/i/18/mitv4/index_art_img2.jpg\"></p><p>轻薄坚固的<br>铝合金中框</p><p>采用强度高、重量轻的铁塑板，同时采用了铝合金中框加强结构，解决了大尺寸美背电视的弯曲问题。</p><p><img src=\"https://i1.mifile.cn/f/i/18/mitv4/index_art_img3.jpg\"></p><p>双色阳极氧化工艺</p><p>双色阳极氧化工艺，让蓝绿色超窄金属边框，即使在暗光下也有晶莹剔透的光芒。</p><p>画质</p><p>4K HDR + 超大屏幕</p><p>巨幕般的观影体验身临其境</p><p>4K HDR 搭配超大的75英寸屏幕，让你在看电视时，视野变得更广阔，更投入，获得更沉浸的观影体验；用大屏看电视，几乎不会再受空间和距离的限制，而且细节更多，画面更清晰，观影更震撼。</p><p>4K HDR</p><p>更分明的色彩层次，使得电视画面更细<br>腻，图像更立体，给人身临其境的观看<br>体验。</p><p>*支持 HDR ：指处理器支持HDR</p><p>4K</p><p>非4K</p><p>侧入式背光</p><p>把LED晶粒配置在液晶屏幕的四周边<br>缘，为超薄机身设计提供了可能性，<br>也更节能省电。</p><p><video class=\"video\" preload=\"auto\" autoplay=\"autoplay\" loop=\"\" style=\"position: absolute; top: 4.4em; right: 0px; width: 19.8em; height: 7.12em;\"></video><img src=\"https://i1.mifile.cn/f/i/18/mitv4/index_pics_img.jpg\"></p><p>性能</p><p>超大内存 + 超大屏幕</p><p>大容量的电视机性能强劲</p><p><video class=\"video\" preload=\"auto\" autoplay=\"autoplay\" loop=\"\" style=\"position: absolute; top: 0px; left: 0px; z-index: 7; width: 1349px; height: 605.984px;\"></video><img src=\"https://i1.mifile.cn/f/i/18/mitv4/index_ram_img.png\"></p><p>是大容量的电视机，也是有速度的游戏机。32GB超大存储空间，64位高性能<br>的处理器，能装下更多你喜欢的应用，也可以让你的游戏更有速度。搭配丰<br>富的接口，创造更多娱乐可能。</p><p><img alt=\"\" src=\"https://i1.mifile.cn/f/i/18/mitv4/index_cpu1.jpg\">2GB + 32GB 超大内存</p><p>32GB的超大存储空间，能够装下更多<br>你喜欢的应用，内存更大，选择更多。</p><p><img alt=\"\" src=\"https://i1.mifile.cn/f/i/18/mitv4/index_cpu2.jpg\">64位四核高性能处理器</p><p>64位四核高性能处理器，性能强劲、体<br>验流畅，可以快速响应，快速处理。</p><p><img alt=\"\" src=\"https://i1.mifile.cn/f/i/18/mitv4/index_insert1.jpg\">丰富接口</p><p>标配 3 个 HDMI 接口、2 个 USB 接口，以及<br>AV、以太网等必备接口，可以轻松的将电脑、<br>音箱、游戏机等设备与电视连接。</p><p><img alt=\"\" src=\"https://i1.mifile.cn/f/i/18/mitv4/insert-icons.png\"></p><p><img alt=\"\" src=\"https://i1.mifile.cn/f/i/18/mitv4/smart-screen.jpg\">PatchWall</p><p>人工智能语音系统 + 超大屏幕</p><p>智能的语音操控快人一步</p><p>操作简单方便，想看什么想知道什么，只需按住遥控器语音键，说出来。支持<br>精准的片名点播，也可以智能的进行模糊搜索。在使用过程中，你会发现它越<br>来越懂你。</p><p>内置「小爱同学」</p><p>搜片、查天气、控制智能设备，<br>一句话的事儿。</p><p><img alt=\"\" src=\"https://i1.mifile.cn/f/i/18/mitv4/xiaoai.jpg\"></p><p>语音搜片</p><p>把电视变成能和你交流的小伙伴，能帮<br>你找片，还能告诉你天气和时间。</p><p>观看《花式语音搜片》视频</p><p><img alt=\"\" src=\"https://i1.mifile.cn/f/i/18/mitv4/index_yaokong.png\"></p><p><video class=\"video transi-up delay-05\" preload=\"auto\" autoplay=\"autoplay\" poster=\"https://i1.mifile.cn/f/i/18/mitv4/qiu1.jpg\" loop=\"\" style=\"opacity: 1; transform: translate3d(0px, 0px, 0px); transition: opacity 0.8s 0.5s, transform 0.8s; width: 6.95em; height: 8.3em;\"></video></p><p><video class=\"video\" preload=\"auto\" autoplay=\"autoplay\" poster=\"https://i1.mifile.cn/f/i/18/mitv4/qiu2.jpg\" loop=\"\" style=\"width: 6.95em; height: 8.3em;\"></video></p><p>语音控制智能家电</p><p>按住遥控器语音键，就能对你的智<br>能设备发号施令。扫地、关灯、开空<br>调，都不在话下。</p><p>观看《智能家庭联动》视频</p><p><img alt=\"\" src=\"https://i1.mifile.cn/f/i/18/mitv4/index_jiadian.jpg\"></p><p><img alt=\"\" src=\"https://i1.mifile.cn/f/i/18/mitv4/patchwall.jpg\">人工智能系统</p><p>聪明的PatchWall人工智能系统，<br>不断的深度学习，科学处理你和内<br>容之间的关系。根据你的喜好，精<br>准推荐内容。</p><p><img alt=\"\" src=\"https://i1.mifile.cn/f/i/18/mitv4/patchwall-tv.jpg\"></p><p><img alt=\"\" src=\"https://i1.mifile.cn/f/i/18/mitv4/index_yinzhi1.jpg\">音质</p><p>杜比音效 + 超大屏幕</p><p>影院级的震撼音效不同凡响</p><p>杜比音效搭配超大的75英寸屏幕，让声音更有感染力，富有震撼力。看电影、<br>玩游戏，声音清晰真实，震撼动听。让你仿佛走进电影院，享受一场声音大<br>秀，用声音的故事打动你，带你的耳朵回到现场。</p><p>杜比音效 + DTS双解码</p><p>声音更具立体感，音效更震撼逼真，<br>影音体验效果更佳。</p><p><img alt=\"\" src=\"https://i1.mifile.cn/f/i/18/mitv4/index_dolbytv1.jpg\"></p><p>倒相式低音结构</p><p>2 x 8W 双声道扬声器，声音清晰明亮，<br>震撼真实。</p><p><img alt=\"\" src=\"https://i1.mifile.cn/f/i/18/mitv4/dolby_yinxiang1.jpg\"></p><p><img alt=\"\" src=\"https://i1.mifile.cn/f/i/18/mitv4/source-screen.jpg\">内容</p><p>丰富资源 +超大屏幕</p><p>优质的海量内容投你所好</p><p>拥有海量的优质内容资源，电影、电视剧、综艺、体育、少儿，类型齐全。<br>不管你是追剧迷、体育迷、电影控、还是二次元、小清新，都能找到你喜欢<br>看的。打开电视，就一目了然。</p><p>类型齐全<br>打开电视就有</p><p>海量大片、热播大剧、火热综艺、<br>高分动画...内容优质、类型齐全，满<br>足全家人的喜好。</p><p><img src=\"https://i1.mifile.cn/f/i/18/mitv4/watch-1.jpg\"><img src=\"https://i1.mifile.cn/f/i/18/mitv4/watch-2.jpg\"><img src=\"https://i1.mifile.cn/f/i/18/mitv4/watch-3.jpg\"><img src=\"https://i1.mifile.cn/f/i/18/mitv4/watch-4.jpg\"><img src=\"https://i1.mifile.cn/f/i/18/mitv4/watch-5.jpg\"></p><ul><li></li><li></li><li></li><li></li><li></li></ul><ul><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_17.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_18.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_19.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_20.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_21.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_22.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_23.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_24.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_1.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_2.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_3.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_4.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_5.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_6.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_7.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_8.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_9.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_10.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_11.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_12.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_13.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_14.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_15.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_16.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_17.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_18.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_19.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_20.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_21.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_22.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_23.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_24.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_1.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_2.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_3.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_4.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_5.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_6.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_7.png\"></li><li><img src=\"https://i1.mifile.cn/f/i/18/mitv4s/55/movie_8.png\"></li></ul><p><img src=\"https://i1.mifile.cn/f/i/17/mitv4A/32/vip_icon.png\"></p><h3>小米影视会员</h3><p>成为会员可享受“小米影视会员年卡（价值498<br>元）+爱奇艺VIP会员年卡（价值198元）”双卡<br>的全部权益，价值696元，随电视加价购可享受<br>小米补贴价，超值特惠首年仅需299元。</p>', 10, 1533182855, 1533182855, 1, 1),
(99, 29, '6P格力大空调', '<p>6P格力大空调</p>', 10, 1533183424, 1533183424, 1, 1),
(100, 30, '海尔洗衣机Y23', '<p>海尔洗衣机Y23海尔洗衣机Y23<span class=\"redactor-invisible-space\">海尔洗衣机Y23<span class=\"redactor-invisible-space\">海尔洗衣机Y23<span class=\"redactor-invisible-space\">海尔洗衣机Y23<span class=\"redactor-invisible-space\"></span></span></span></span></p>', 10, 1533183482, 1533183482, 1, 1),
(101, 49, '电饭煲小米', '<p>智能电饭煲小米</p>', 10, 1533183551, 1533183551, 1, 1),
(102, 51, '方太洗碗机', '<p>方太洗碗机</p>', 10, 1533183591, 1533183591, 1, 1),
(103, 43, '华为P11', '<p>华为P11华为P11<span class=\"redactor-invisible-space\">华为P11<span class=\"redactor-invisible-space\">华为P11<span class=\"redactor-invisible-space\">华为P11<span class=\"redactor-invisible-space\"></span></span></span></span></p>', 10, 1533183649, 1533183649, 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `product_attr`
--

CREATE TABLE `product_attr` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `attr` varchar(64) NOT NULL DEFAULT '0.00',
  `pictures` text,
  `count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `price` decimal(10,2) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_user_id` int(11) NOT NULL,
  `updated_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `product_attr`
--

INSERT INTO `product_attr` (`id`, `product_id`, `attr`, `pictures`, `count`, `price`, `created_at`, `updated_at`, `created_user_id`, `updated_user_id`) VALUES
(64, 85, '黑色', '[\"1534321266316.jpg\",\"1534321266790.jpg\",\"1534321266694.jpg\"]', 53, '68.00', 1531286530, 1534321266, 1, 1),
(70, 94, '12', '[\"1534321338366.jpg\",\"1534321338687.jpg\",\"1534321338244.jpg\"]', 90, '3.00', 1531288836, 1534321338, 1, 1),
(72, 85, '红色', '[\"1534321277695.jpg\",\"1534321277939.jpg\"]', 5, '66.00', 1531467915, 1534321277, 1, 1),
(73, 95, '蓝色', '[\"1534321355256.jpg\",\"1534321355334.jpg\"]', 888, '34.00', 1531982551, 1534321355, 1, 1),
(74, 96, '3P', '[\"1534321562249.jpg\",\"1534321562708.jpg\",\"1534321562376.jpg\"]', 666, '2388.00', 1531982610, 1534321562, 1, 1),
(75, 85, '绿色', '[\"1534321289564.jpg\",\"1534321289703.jpg\",\"1534321289586.jpg\"]', 11, '11.00', 1532071966, 1534321289, 1, 1),
(76, 85, '黄色', '[\"1534321296563.jpg\"]', 233, '22.00', 1532575352, 1534321296, 1, 1),
(77, 85, '紫色', '[\"1534321307767.jpg\",\"1534321307106.jpg\",\"1534321307433.jpg\",\"1534321307706.jpg\",\"1534321307309.jpg\"]', 222, '1.00', 1532586574, 1534321307, 1, 1),
(78, 96, '2P', '[\"1534321569905.jpg\",\"1534321569735.jpg\"]', 1, '1.00', 1532594838, 1534321569, 1, 1),
(79, 96, '1P', '[\"1534321576984.jpg\",\"1534321576166.jpg\",\"1534321576119.jpg\"]', 1, '33.00', 1532594913, 1534321576, 1, 1),
(80, 97, '256G', '[\"1534321368360.jpg\",\"1534321368667.jpg\",\"1534321368649.jpg\"]', 66, '8000.00', 1532595008, 1534321368, 1, 1),
(81, 98, '黑色75寸', '[\"1534321496659.jpg\",\"1534321496696.jpg\",\"1534321496269.jpg\"]', 400, '8999.00', 1533182855, 1534321496, 1, 1),
(82, 99, '6P白色', '[\"1534321380156.jpg\",\"1534321380103.jpg\",\"1534321380801.jpg\"]', 44, '6000.00', 1533183424, 1534321380, 1, 1),
(83, 100, 'Y23-绿色', '[\"1534321396365.jpg\",\"1534321396667.jpg\",\"1534321396747.jpg\"]', 44, '1234.00', 1533183482, 1534321396, 1, 1),
(84, 101, '智能环保', '[\"1534321463271.jpg\"]', 22, '556.00', 1533183551, 1534321463, 1, 1),
(85, 102, 'H54', '[\"1534321448370.jpg\",\"1534321448256.jpg\",\"1534321448364.jpg\",\"1534321448941.jpg\",\"1534321448365.jpg\"]', 4, '455.00', 1533183591, 1534321448, 1, 1),
(86, 103, 'P11法拉利版', '[\"1534321425108.jpg\"]', 123, '10000.00', 1533183649, 1534321425, 1, 1);

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
  `updated_user_id` int(11) NOT NULL,
  `ad_loc_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `promotion`
--

INSERT INTO `promotion` (`id`, `title`, `status`, `pictures`, `created_at`, `updated_at`, `created_user_id`, `updated_user_id`, `ad_loc_id`) VALUES
(4, '限时优惠', 1, '1534321083770.jpg', 1530005293, 1534321083, 0, 1, 1),
(5, '中秋献礼', 1, '1534321096168.jpg', 1530010114, 1534321096, 0, 1, 1),
(6, '礼品系列2', 1, '1534321144887.jpg', 1533025265, 1534321144, 1, 1, 2),
(7, '热销商品', 1, '1533026386183.jpg', 1533026386, 1533026386, 1, 1, NULL),
(8, '推荐商品', 1, '1533026400411.png', 1533026400, 1533026400, 1, 1, NULL),
(9, '八一节促销2', 1, '1534321157587.jpg', 1533112177, 1534321157, 1, 1, 2),
(10, '端午节送礼', 1, '1534321188623.jpg', 1533114104, 1534321188, 1, 1, 3),
(11, '数码节', 1, '1534321202136.jpg', 1533114135, 1534321202, 1, 1, 3);

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

--
-- 转存表中的数据 `ref_promotion_product`
--

INSERT INTO `ref_promotion_product` (`id`, `product_id`, `promotion_id`, `created_at`, `updated_at`, `created_user_id`, `updated_user_id`) VALUES
(1, 94, 4, 1531971579, 1531971579, 1, 1),
(4, 94, 5, 1531982172, 1531982172, 1, 1),
(5, 95, 4, 1531982628, 1531982628, 1, 1),
(7, 96, 4, 1533200246, 1533200246, 1, 1),
(8, 97, 4, 1533200246, 1533200246, 1, 1),
(9, 98, 4, 1533200246, 1533200246, 1, 1),
(10, 99, 4, 1533200247, 1533200247, 1, 1),
(11, 100, 4, 1533200247, 1533200247, 1, 1),
(12, 85, 7, 1533200275, 1533200275, 1, 1),
(13, 95, 7, 1533200275, 1533200275, 1, 1),
(14, 101, 7, 1533200275, 1533200275, 1, 1),
(15, 102, 7, 1533200275, 1533200275, 1, 1),
(16, 103, 7, 1533200275, 1533200275, 1, 1),
(17, 96, 8, 1533200293, 1533200293, 1, 1),
(18, 97, 8, 1533200293, 1533200293, 1, 1),
(19, 98, 8, 1533200294, 1533200294, 1, 1),
(20, 99, 8, 1533200294, 1533200294, 1, 1),
(21, 100, 8, 1533200294, 1533200294, 1, 1),
(22, 96, 9, 1533200321, 1533200321, 1, 1),
(23, 85, 10, 1533200646, 1533200646, 1, 1),
(24, 85, 11, 1533200672, 1533200672, 1, 1),
(25, 100, 6, 1533200687, 1533200687, 1, 1),
(26, 94, 7, 1533202699, 1533202699, 1, 1),
(27, 97, 7, 1533202699, 1533202699, 1, 1),
(28, 100, 7, 1533202699, 1533202699, 1, 1),
(29, 101, 8, 1533300615, 1533300615, 1, 1),
(30, 102, 8, 1533300615, 1533300615, 1, 1),
(31, 96, 7, 1533630868, 1533630868, 1, 1);

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
(1, 'admin', 'RE-76eMKr3S6_bYJVsvjLrSuNSnW6FPo', '$2y$13$f4DJUlaxi5JZWFpbVbtO6ezktEpGwVauh1N6NVBIKvT2VibeZeQCW', NULL, '469251369@qq.com', 10, 1529731748, 1534386406),
(4, '12', 'cOBtmrbnO1uRhkQ3nWs0-sOG2HwGygC3', '$2y$13$YOYz0TSIN1qoamD7Wc3hZ.ZR0VkbAF99VchSUBVe0dZ/G26hvfMW2', NULL, 'ee2@qq.com', 10, 1532774358, 1532786552),
(5, '13', '2oB07QhdW1HLM0o5CdKXw64IOkFCk4PC', '$2y$13$fuoZMKxay5Whx0tiwPo/ZO2b7XJY/yDAZD7uDo4ZEsev1ZX.exxYW', NULL, '13@qq.com', 10, 1532775051, 1532786689),
(6, '14', 'RK_hyFxBV61o3oTArExCboucQgGFhy66', '$2y$13$HQGgAhWFqx0Hda83IELmSeCGqOhK/S9BFOZQKtOd6beYvblXwheym', NULL, '14@dd.com', 10, 1532775384, 1532775384),
(7, '15', 'TXUEGSpsodB8o9_I904AzEG1MicieYmR', '$2y$13$EuSZ0Lx7O95m.zn2RgH5O.34voR4iFw6fwjrk0ijeBUezMkrZS9GO', NULL, 'd@qq.com', 10, 1532778240, 1532778240),
(8, '16', 'UqGEIarjc3Eze_5N4t-0X59bRN445-2g', '$2y$13$SYHolz.TlwuH.F4hev4d6.Neao8BMA4HNVkd6gB.Bk/hPBwQ.fsB6', NULL, '16@enheng.tech', 10, 1532778254, 1532778254),
(9, '17', '0QQkHDzMMZy7LV6zuPAb8jWXzWuL6BeN', '$2y$13$ochXIRSVpq3spIsAYcqEYuRbSPk0KjVj0TcBKl1CDrFmnCq3gCNWa', NULL, 'ee3@qq.com', 10, 1532778269, 1532778269),
(10, '18', '0QQkHDzMMZy7LV6zuPAb8jWXzWuL6BeN', '$2y$13$ochXIRSVpq3spIsAYcqEYuRbSPk0KjVj0TcBKl1CDrFmnCq3gCNWa', '', 'ee3@2qq.com', 10, 1532778269, 1532778269),
(13, 'q11', '', '', NULL, 'edse@qq.com', 10, 1532774069, 1532774069),
(14, 'q2', 'cOBtmrbnO1uRhkQ3nWs0-sOG2HwGygC3', '$2y$13$9JvD4k7KNmyBn9u16KziCO2lWTzvzRiSRWwaLBXVv9Wa7dNBSh0mq', NULL, 'ee12@qq.com', 10, 1532774358, 1532774426),
(15, 'q3', '2oB07QhdW1HLM0o5CdKXw64IOkFCk4PC', '$2y$13$O2gs0/zY.DVC1TZiQhjfueGVB5P0Q/3H./P/Kx/77Kq6NGB0B88aa', NULL, '131@qq.com', 10, 1532775051, 1532775051),
(16, 'q4', 'RK_hyFxBV61o3oTArExCboucQgGFhy66', '$2y$13$HQGgAhWFqx0Hda83IELmSeCGqOhK/S9BFOZQKtOd6beYvblXwheym', NULL, '114@dd.com', 10, 1532775384, 1532775384),
(17, 'q5', 'TXUEGSpsodB8o9_I904AzEG1MicieYmR', '$2y$13$EuSZ0Lx7O95m.zn2RgH5O.34voR4iFw6fwjrk0ijeBUezMkrZS9GO', NULL, 'd1@qq.com', 10, 1532778240, 1532778240),
(18, 'q6', 'UqGEIarjc3Eze_5N4t-0X59bRN445-2g', '$2y$13$SYHolz.TlwuH.F4hev4d6.Neao8BMA4HNVkd6gB.Bk/hPBwQ.fsB6', NULL, '161@enheng.tech', 10, 1532778254, 1532778254),
(19, 'q7', '0QQkHDzMMZy7LV6zuPAb8jWXzWuL6BeN', '$2y$13$ochXIRSVpq3spIsAYcqEYuRbSPk0KjVj0TcBKl1CDrFmnCq3gCNWa', NULL, 'ee13@qq.com', 10, 1532778269, 1532778269),
(21, 'qtdmin', 'RE-76eMKr3S6_bYJVsvjLrSuNSnW6FPo', '$2y$13$YipBDHT5eqxZF7TrICPpFuXB3JJ2zPyLBcVd3kaK9nBgZPsqSSsnm', NULL, '46g19251369@qq.com', 10, 1529731748, 1529731748),
(22, 'qtee', 'wDU7uR2pb9yXkzqlIldjW6gFLBiBosQg', '$2y$13$TpI4Sib0w1BHoxoeRjY9SOXVOV9GiFIUs3QjkTw7NqfqOfZecczTS', NULL, 'egle1x@enheng.techd', 10, 1532759880, 1532773370),
(23, 'qt11', '', '', NULL, 'ege@qq.com', 10, 1532774069, 1532774069),
(24, 'qt2', 'cOBtmrbnO1uRhkQ3nWs0-sOG2HwGygC3', '$2y$13$9JvD4k7KNmyBn9u16KziCO2lWTzvzRiSRWwaLBXVv9Wa7dNBSh0mq', NULL, 'ere12@qq.com', 10, 1532774358, 1532774426),
(25, 'qt3', '2oB07QhdW1HLM0o5CdKXw64IOkFCk4PC', '$2y$13$O2gs0/zY.DVC1TZiQhjfueGVB5P0Q/3H./P/Kx/77Kq6NGB0B88aa', NULL, '1r31@qq.com', 10, 1532775051, 1532775051),
(26, 'qt4', 'RK_hyFxBV61o3oTArExCboucQgGFhy66', '$2y$13$HQGgAhWFqx0Hda83IELmSeCGqOhK/S9BFOZQKtOd6beYvblXwheym', NULL, '1r14@dd.com', 10, 1532775384, 1532775384),
(27, 'qt5', 'TXUEGSpsodB8o9_I904AzEG1MicieYmR', '$2y$13$EuSZ0Lx7O95m.zn2RgH5O.34voR4iFw6fwjrk0ijeBUezMkrZS9GO', NULL, 'dr1@qq.com', 10, 1532778240, 1532778240),
(28, 'qt6', 'UqGEIarjc3Eze_5N4t-0X59bRN445-2g', '$2y$13$SYHolz.TlwuH.F4hev4d6.Neao8BMA4HNVkd6gB.Bk/hPBwQ.fsB6', NULL, '1r61@enheng.tech', 10, 1532778254, 1532778254),
(29, 'qt7', '0QQkHDzMMZy7LV6zuPAb8jWXzWuL6BeN', '$2y$13$ochXIRSVpq3spIsAYcqEYuRbSPk0KjVj0TcBKl1CDrFmnCq3gCNWa', NULL, 'ere13@qq.com', 10, 1532778269, 1532778269),
(30, '007', 'hbkCg0OBBZYg9gmVh--CUUzWuNlTewsS', '$2y$13$xx2.gvVgtQzXFPXA5kbHf.MssnEWjNyVKvPEzCH5cGv5ENpSao8wW', NULL, '007@qq.com', 10, 1532782769, 1532782769);

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
-- Indexes for table `ad_loc`
--
ALTER TABLE `ad_loc`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `Unique_Prd_Promo` (`product_id`,`promotion_id`) USING BTREE,
  ADD KEY `FK_Promo_Prd` (`promotion_id`);

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
-- 使用表AUTO_INCREMENT `ad_loc`
--
ALTER TABLE `ad_loc`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- 使用表AUTO_INCREMENT `express`
--
ALTER TABLE `express`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- 使用表AUTO_INCREMENT `product_attr`
--
ALTER TABLE `product_attr`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- 使用表AUTO_INCREMENT `promotion`
--
ALTER TABLE `promotion`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用表AUTO_INCREMENT `ref_promotion_product`
--
ALTER TABLE `ref_promotion_product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
