-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2017 at 11:23 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('author', '2', 1504556709),
('riemann', '1', 1504556709);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('author', 1, NULL, NULL, NULL, 1504556708, 1504556708),
('createPost', 2, 'Create a news flash', NULL, NULL, 1504556708, 1504556708),
('riemann', 1, NULL, NULL, NULL, 1504556709, 1504556709),
('updatePost', 2, 'Update news flash', NULL, NULL, 1504556708, 1504556708);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('riemann', 'author'),
('author', 'createPost'),
('riemann', 'updatePost');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` int(11) NOT NULL,
  `campaignname` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `news_flash_id` int(11) NOT NULL,
  `mc_camp_list_id` varchar(255) NOT NULL,
  `mc_camp_id` varchar(255) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `campaignname`, `user_id`, `news_flash_id`, `mc_camp_list_id`, `mc_camp_id`, `created_by`, `created_at`, `updated_at`, `status`) VALUES
(1, '', 1, 2, '6915747ba2', NULL, 1, 1504969402, 1504969402, 0),
(2, '', 1, 3, '6915747ba2', NULL, 1, 1504969457, 1504969457, 0),
(3, '', 1, 3, '6915747ba2', NULL, 1, 1504969487, 1504969487, 0),
(4, '', 1, 3, '6915747ba2', NULL, 1, 1504969572, 1504969572, 0),
(5, '', 1, 36, '6915747ba2', NULL, 1, 1504970300, 1504970300, 0),
(6, '', 1, 36, '6915747ba2', 'b074c6e7e7', 1, 1504970379, 1504970381, 0),
(7, '', 1, 38, '6915747ba2', '3240492e7b', 1, 1504970677, 1504970681, 0),
(8, '', 1, 38, '6915747ba2', 'b5c377f07b', 1, 1504971089, 1504971093, 1),
(9, '', 1, 38, '6915747ba2', '934cd63d34', 1, 1504971714, 1504971718, 1),
(10, 'My first campaign', 1, 38, '6915747ba2', 'db8120a366', 1, 1504973301, 1504973304, 1),
(11, 'my mailchimp campaign', 7, 39, 'd51f72b5e4', '91798ce6d7', 7, 1504974552, 1504974555, 1);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1499413378),
('m130524_201442_init', 1499413386),
('m170713_121759_create_newsFlash_table', 1499951086),
('m170713_124443_add_created_at_column_to_newsFlash_table', 1499951086),
('m170713_124531_add_updated_at_column_to_newsFlash_table', 1499951086),
('m170713_125828_add_type_column_to_newsFlash_table', 1504283297),
('m140506_102106_rbac_init', 1504283415),
('m161220_101944_create_user_table', 1504530088);

-- --------------------------------------------------------

--
-- Table structure for table `newsflash`
--

CREATE TABLE `newsflash` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text,
  `image` varchar(255) DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=private,2=public',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsflash`
--

INSERT INTO `newsflash` (`id`, `user_id`, `title`, `body`, `image`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, 'TUNE IN: Tie Season Finale SUNDAY!', 'Gather \'round and raise a toast to the final episode of the season! The season three finale of Tia mowry at Home airs this Sunday, February 26th at 5:30pm PT I 8:30pm ET on Cooking Channel. ', 'portal-group1.png', 2, 1503590193, 1503590193),
(2, 1, 'TUNE IN: Besties Brunch with Tia SUNDAY!', 'Be sure to catch the next episode of Tie Mowry at Home on Cooking Channel this Sunday. February 19th at 5:30pm PT I 8:30pm ET. Don’t forget to tune in and set your DVRs! ', 'portal-group1.png', 2, 1503590174, 1503590174),
(3, 1, 'TUNE IN : Besties Brunch with Tia SUNDAY!', 'Be sure to catch the next episode of Tie Mowry at Home on Cooking Channel this Sunday. February 19th at 5:30pm PT I 8:30pm ET. Don’t forget to tune in and set your DVRs! ', 'portal-group1.png', 2, 1503590207, 1503590207),
(5, 1, 'sadasd', '<p>sdfsdf</p>\r\n', 'modal-bg.jpg', 2, 1503606461, 1504698107),
(6, 1, 'sadasd test', '<p>sdfsdf</p>\r\n', 'no-image.jpg', 2, 1503606525, NULL),
(7, 1, 'sadasd test r', '<p>sdfsdf</p>\r\n', 'no-image.jpg', 2, 1503606647, NULL),
(11, 1, 'qwqweqwe', '<p>&nbsp;asdasdasdasd</p>\r\n', 'no-image.jpg', 2, 1503607382, NULL),
(12, 1, 'testing', '<p>te</p>\r\n', 'no-image.jpg', 2, 1503675294, NULL),
(17, 1, 'qwqweqwe', '<p>&nbsp;asdasdasdasd</p>\r\n', 'ink.png', 2, 1503681395, 1504698050),
(18, 1, 'qwqweqwe', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', 'ink.png', 2, 1503681452, 1504698087),
(19, 1, 'testing', '<div>\r\n<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n', '47678760-beautiful-girl-picture.jpg', 2, 1503681459, 1504697982),
(21, 1, 'sadasd test r', '<p>sdfsdf</p>\r\n', 'Robert_Motorised_Recliner_01.jpg', 2, 1503681472, 1504697939),
(22, 1, 'qwqweqwe', '<p>&nbsp;asdasdasdasd</p>\r\n', 'screenshot-yahav-adword.dev-2017-07-14-17-46-39.png', 1, 1503681482, 1504697921),
(23, 1, 'TUNE IN: Tie Season Finale SUNDAY!', '<p>Gather &#39;round and raise a toast to the final episode of the season! The season three finale of Tia mowry at Home airs this Sunday, February 26th at 5:30pm PT I 8:30pm ET on Cooking Channel.</p>\r\n', 'Web-Design-and-Development.png', 2, 1503681494, 1504697902),
(24, 1, 'TUNE IN: Tie Season Finale SUNDAY!', '<p>Gather &#39;round and raise a toast to the final episode of the season! The season three finale of Tia mowry at Home airs this Sunday, February 26th at 5:30pm PT I 8:30pm ET on Cooking Channel.</p>\r\n', 'empty.png', 2, 1503693340, 1504697883),
(25, 1, 'TUNE IN : Besties Brunch with Tia SUNDAY! dfsdfdsf', '<p>Be sure to catch the next episode of Tie Mowry at Home on Cooking Channel this Sunday. February 19th at 5:30pm PT I 8:30pm ET. Don&rsquo;t forget to tune in and set your DVRs!</p>\r\n', '47678760-beautiful-girl-picture.jpg', 2, 1503693350, 1504697868),
(26, 1, 'qwqweqwe', '<p>&nbsp;asdasdasdasd</p>\r\n', NULL, 2, 1504698218, NULL),
(27, 1, 'qwqweqwe', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', NULL, 2, 1504698235, NULL),
(28, 1, 'qwqweqwe', '<p>&nbsp;asdasdasdasd</p>\r\n', NULL, 2, 1504698244, NULL),
(29, 5, 'testing', '<p><span class="_Tgc"><strong>To do that, you need </strong>to <b>set</b> the <b>CKEDITOR</b>.<b>config</b>.customConfig <b>setting</b> to an empty string. For example: <b>CKEDITOR</b>.replace( &#39;editor1&#39;, { customConfig: &#39;&#39; }); This <b>setting</b> is definitely recommended, if you are not <b>setting</b> the <b>configuration</b> in the <b>config</b>.js file nor a <b>custom configuration</b> file.</span></p>\r\n', '', 1, 1504706121, 1504706203),
(30, 1, 'test', '<p>asdasd</p>\r\n', 'ink.png', 1, 1504708670, NULL),
(31, 5, 'testing', '<p><span class="_Tgc"><strong>To do that, you need </strong>to <b>set</b> the <b>CKEDITOR</b>.<b>config</b>.customConfig <b>setting</b> to an empty string. For example: <b>CKEDITOR</b>.replace( &#39;editor1&#39;, { customConfig: &#39;&#39; }); This <b>setting</b> is definitely recommended, if you are not <b>setting</b> the <b>configuration</b> in the <b>config</b>.js file nor a <b>custom configuration</b> file.</span></p>\r\n', NULL, 1, 1504855409, NULL),
(32, 1, 'test', '<p>asdasd</p>\r\n', NULL, 1, 1504855416, NULL),
(33, 1, 'qwqweqwe', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', NULL, 2, 1504855421, NULL),
(34, 5, 'testing', '<p><span class="_Tgc"><strong>To do that, you need </strong>to <b>set</b> the <b>CKEDITOR</b>.<b>config</b>.customConfig <b>setting</b> to an empty string. For example: <b>CKEDITOR</b>.replace( &#39;editor1&#39;, { customConfig: &#39;&#39; }); This <b>setting</b> is definitely recommended, if you are not <b>setting</b> the <b>configuration</b> in the <b>config</b>.js file nor a <b>custom configuration</b> file.</span></p>\r\n', NULL, 1, 1504855434, NULL),
(35, 1, 'qwqweqwe', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', NULL, 2, 1504855438, NULL),
(36, 6, 'emo testing', '<p>asdsadsadsdasd</p>\r\n', 'ink.png', 2, 1504857982, 1504858818),
(39, 7, 'Where does it come from?', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>\r\n\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from &quot;de Finibus Bonorum et Malorum&quot; by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.&nbsp;<img alt="wink" src="http://employee-portal.front/assets/cc57013f/plugins/smiley/images/wink_smile.png" style="height:23px; width:23px" title="wink" /></p>\r\n', 'empty.png', 1, 1504974457, NULL),
(37, 6, 'Testing imo', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<img alt="kiss" src="http://employee-portal.front/assets/cc57013f/plugins/smiley/images/kiss.png" style="height:23px; width:23px" title="kiss" /> <img alt="laugh" src="http://employee-portal.front/assets/cc57013f/plugins/smiley/images/teeth_smile.png" style="height:23px; width:23px" title="laugh" /><img alt="cheeky" src="http://employee-portal.front/assets/cc57013f/plugins/smiley/images/tongue_smile.png" style="height:23px; width:23px" title="cheeky" /><img alt="yes" src="http://employee-portal.front/assets/cc57013f/plugins/smiley/images/thumbs_up.png" style="height:23px; width:23px" title="yes" /></p>\r\n', '', 2, 1504858038, 1504858118),
(38, 1, 'What is Lorem Ipsum?', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. <img alt="smiley" src="http://employee-portal.front/assets/cc57013f/plugins/smiley/images/regular_smile.png" style="height:23px; width:23px" title="smiley" /></p>\r\n', 'screenshot-www.airtel.in-2017-07-12-21-41-03.png', 1, 1504970547, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `status`, `created_at`, `updated_at`) VALUES
(1, 'riemann', 'y1FfEWWaGUavlx1D_KACxeyosuqXSqMj', 10, 1504559208, 1504559208),
(3, 'euclid', 'O7JRVkkc7GbfcdAR2E10usl7M6voo59G', 10, 1504704596, 1504704596),
(4, 'newton', '-TFBnyHmoXjsqFGI5Ja-N_n6XFAYEl-z', 10, 1504704633, 1504704633),
(5, 'tesla', 'ZD-q3Hsn-6NLPvaXteQUdRBI8epyQfZL', 10, 1504704824, 1504704824),
(6, 'euler', '4-AY54vcncNC8UZoAlWhno8w6f5ufm2T', 10, 1504712863, 1504712863),
(7, 'galieleo', '98ZVsMoLk8Znz-Js17WSUawqkS6ZBkG4', 10, 1504974273, 1504974273);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `newsflash`
--
ALTER TABLE `newsflash`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx-newsFlash-user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `auth_key` (`auth_key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `newsflash`
--
ALTER TABLE `newsflash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
