DROP TABLE IF EXISTS `#__fundraising`;

CREATE TABLE `#__fundraising` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`title` varchar(255) DEFAULT NULL,
`current_amount` int(11) DEFAULT NULL,
`final_amount` int(11) DEFAULT NULL,
`finished` tinyint(2) DEFAULT 0,
`link_article` varchar(55) DEFAULT NULL,
PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;

INSERT INTO `#__fundraising` VALUES (1, 'test_title', 1161138, 1125000, 0, 713);