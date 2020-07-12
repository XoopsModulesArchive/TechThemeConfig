# phpMyAdmin SQL Dump
# version 2.5.6
# http://www.phpmyadmin.net
#
# Host: localhost
# Generation Time: May 18, 2004 at 03:57 PM
# Server version: 4.0.18
# PHP Version: 4.3.6
# 
# Database : `xoops`
# 

# --------------------------------------------------------

#
# Table structure for table `themeconfig`
#

CREATE TABLE `themeconfig` (
  `id` int(1) NOT NULL auto_increment,
  `sitename` text NOT NULL,
  `siteurl` text NOT NULL,
  `siteslogan` text NOT NULL,
  `scroll1` text NOT NULL,
  `scroll2` text NOT NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM AUTO_INCREMENT=2 ;

#
# Dumping data for table `themeconfig`
#

INSERT INTO `themeconfig` VALUES (1, 'Your Sites Name', 'http://yoursite.com', 'Your Sites Slogan', 'Scrolling Text 1', 'Scrolling Text 2');

# --------------------------------------------------------

#
# Table structure for table `themeconfiglinks`
#

CREATE TABLE `themeconfiglinks` (
  `id` int(1) NOT NULL auto_increment,
  `text` text NOT NULL,
  `url` text NOT NULL,
  `target` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) TYPE=MyISAM AUTO_INCREMENT=12 ;

#
# Dumping data for table `themeconfiglinks`
#

INSERT INTO `themeconfiglinks` VALUES (1, 'link1', 'http://link1', 0);
INSERT INTO `themeconfiglinks` VALUES (2, 'link2', 'http://link2', 0);
INSERT INTO `themeconfiglinks` VALUES (3, 'link3', 'http://link3', 0);
INSERT INTO `themeconfiglinks` VALUES (4, 'link4', 'http://link4', 0);
INSERT INTO `themeconfiglinks` VALUES (5, 'link5', 'http://link5', 0);
INSERT INTO `themeconfiglinks` VALUES (6, 'link6', 'http://link6', 0);
INSERT INTO `themeconfiglinks` VALUES (7, 'link7', 'http://link7', 0);
INSERT INTO `themeconfiglinks` VALUES (8, 'link8', 'http://link8', 0);
INSERT INTO `themeconfiglinks` VALUES (9, 'link9', 'http://link9.com', 0);
INSERT INTO `themeconfiglinks` VALUES (10, 'link10', 'http://link10', 0);
    