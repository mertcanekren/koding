
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text,
  `description` text,
  `createtime` varchar(20) DEFAULT NULL,
  `lastupdate` varchar(20) DEFAULT NULL,
  `rewrite` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--

CREATE TABLE IF NOT EXISTS `gallery_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `galleryid` varchar(20) DEFAULT NULL,
  `image` text,
  `createtime` varchar(20) DEFAULT NULL,
  `thumb` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1567 ;
--

CREATE TABLE IF NOT EXISTS `static` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module` varchar(20) DEFAULT NULL,
  `header` text,
  `content` text,
  `lastupdate` varchar(20) DEFAULT NULL,
  `stat` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;
