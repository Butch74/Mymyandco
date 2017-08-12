<?php 
$query_tables = array();
$query_sql = array();
$query_tables['psmegamenu']['psmegamenu'] = 'CREATE TABLE IF NOT EXISTS  `'._DB_PREFIX_.'psmegamenu` (
  `id_psmegamenu` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `id_parent` int(11) NOT NULL,
  `is_group` tinyint(1) NOT NULL,
  `width` varchar(255) DEFAULT NULL,
  `submenu_width` varchar(255) DEFAULT NULL,
  `alignment` varchar(255) DEFAULT NULL,
  `colum_width` varchar(255) DEFAULT NULL,
  `submenu_colum_width` varchar(255) DEFAULT NULL,
  `item` varchar(255) DEFAULT NULL,
  `colums` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `is_content` tinyint(1) NOT NULL,
  `show_title` tinyint(1) NOT NULL,
  `type_submenu` varchar(10) NOT NULL,
  `level_depth` smallint(6) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `position` int(11) NOT NULL,
  `submenu_content` text NOT NULL,
  `show_sub` tinyint(1) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `target` varchar(25) DEFAULT NULL,
  `privacy` smallint(6) DEFAULT NULL,
  `position_type` varchar(25) DEFAULT NULL,
  `menu_class` varchar(25) DEFAULT NULL,
  `content` text,
  `icon_class` varchar(255) DEFAULT NULL,
  `level` int(11) NOT NULL,
  `left` int(11) NOT NULL,
  `right` int(11) NOT NULL,
  `submenu_catids` text,
  `is_cattree` tinyint(1) DEFAULT \'1\',
  `date_add` datetime DEFAULT NULL,
  `date_upd` datetime DEFAULT NULL,
  PRIMARY KEY (`id_psmegamenu`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8';


$query_tables['psmegamenu']['psmegamenu_lang'] = 'CREATE TABLE IF NOT EXISTS  `'._DB_PREFIX_.'psmegamenu_lang` (
  `id_psmegamenu` int(11) NOT NULL,
  `id_lang` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `description` text,
  `content_text` text,
  `submenu_content_text` text,
  PRIMARY KEY (`id_psmegamenu`,`id_lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8';


$query_tables['psmegamenu']['psmegamenu_shop'] = 'CREATE TABLE IF NOT EXISTS  `'._DB_PREFIX_.'psmegamenu_shop` (
  `id_psmegamenu` int(11) NOT NULL DEFAULT \'0\',
  `id_shop` int(11) NOT NULL DEFAULT \'0\',
  PRIMARY KEY (`id_psmegamenu`,`id_shop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8';


$query_tables['psmegamenu']['psmegamenu_widgets'] = 'CREATE TABLE IF NOT EXISTS  `'._DB_PREFIX_.'psmegamenu_widgets` (
  `id_widget` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `type` varchar(255) NOT NULL,
  `params` text NOT NULL,
  `id_shop` int(11) NOT NULL,
  `key_widget` int(11) NOT NULL,
  PRIMARY KEY (`id_widget`,`id_shop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8';


/*DATA FOR TABLE psmegamenu*/
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'1\', \'\', \'0\', \'0\', \'\', \'\', \'\', \'\', \'\', \'3\', \'1\', \'category\', \'0\', \'1\', \'menu\', \'1\', \'1\', \'0\', \'\', \'0\', \'\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2015-08-12 23:03:48\', \'2015-08-12 23:03:48\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'2\', \'\', \'1\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'\', \'1\', \'url\', \'0\', \'1\', \'4\', \'2\', \'1\', \'0\', \'\', \'0\', \'index.php\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-12-02 02:24:15\', \'2016-12-19 20:35:05\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'3\', \'\', \'1\', \'0\', \'\', \'\', \'aligned-fullwidth\', \'\', \'\', \'\', \'1\', \'url\', \'0\', \'1\', \'3\', \'2\', \'1\', \'1\', \'\', \'0\', \'#\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-12-02 02:33:30\', \'2016-12-02 03:51:25\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'4\', \'\', \'1\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'\', \'1\', \'url\', \'0\', \'1\', \'menu\', \'2\', \'1\', \'3\', \'\', \'0\', \'sitemap\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-12-02 02:36:15\', \'2016-12-02 03:03:00\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'6\', \'\', \'1\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'\', \'1\', \'url\', \'0\', \'1\', \'menu\', \'2\', \'1\', \'5\', \'\', \'0\', \'contact\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-12-02 02:58:36\', \'2016-12-02 02:58:36\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'7\', \'\', \'4\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'4\', \'1\', \'cms\', \'0\', \'1\', \'menu\', \'3\', \'1\', \'0\', \'\', \'0\', \'sitemap\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-12-02 03:04:57\', \'2017-04-14 03:13:55\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'8\', \'\', \'4\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'7\', \'1\', \'cms\', \'0\', \'1\', \'menu\', \'3\', \'1\', \'1\', \'\', \'0\', \'category\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-12-02 03:06:00\', \'2017-04-18 04:30:27\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'9\', \'\', \'4\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'\', \'1\', \'url\', \'0\', \'1\', \'menu\', \'3\', \'1\', \'5\', \'\', \'0\', \'stores\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-12-02 03:06:33\', \'2016-12-02 03:06:55\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'10\', \'\', \'1\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'\', \'1\', \'url\', \'0\', \'1\', \'menu\', \'2\', \'1\', \'4\', \'\', \'0\', \'list&fc=module&module=psblog\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-12-02 03:14:56\', \'2016-12-05 05:33:31\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'11\', \'\', \'4\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'\', \'1\', \'url\', \'0\', \'1\', \'menu\', \'3\', \'1\', \'6\', \'\', \'0\', \'404\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2016-12-20 03:50:36\', \'2016-12-20 03:50:36\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'12\', \'\', \'1\', \'0\', \'\', \'\', \'aligned-fullwidth\', \'\', \'\', \'12\', \'1\', \'category\', \'0\', \'1\', \'8\', \'2\', \'1\', \'2\', \'\', \'0\', \'\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2017-04-14 02:51:16\', \'2017-04-14 02:52:35\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'13\', \'\', \'1\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'4\', \'1\', \'cms\', \'0\', \'1\', \'menu\', \'2\', \'1\', \'6\', \'\', \'0\', \'\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2017-04-14 02:53:23\', \'2017-04-14 02:53:23\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'14\', \'\', \'4\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'\', \'1\', \'url\', \'0\', \'1\', \'menu\', \'2\', \'1\', \'3\', \'\', \'0\', \'\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2017-04-14 03:18:26\', \'2017-04-14 03:18:26\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'15\', \'\', \'14\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'\', \'1\', \'url\', \'0\', \'1\', \'menu\', \'3\', \'1\', \'0\', \'\', \'0\', \'new-products\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2017-04-14 03:20:13\', \'2017-04-14 03:20:13\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'16\', \'\', \'14\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'\', \'1\', \'url\', \'0\', \'1\', \'menu\', \'2\', \'1\', \'1\', \'\', \'0\', \'best-sales\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2017-04-14 03:21:20\', \'2017-04-14 03:21:20\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'17\', \'\', \'14\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'\', \'1\', \'url\', \'0\', \'1\', \'menu\', \'2\', \'1\', \'2\', \'\', \'0\', \'prices-drop\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2017-04-14 03:22:09\', \'2017-04-14 03:22:09\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'18\', \'\', \'4\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'\', \'1\', \'url\', \'0\', \'1\', \'menu\', \'2\', \'1\', \'4\', \'\', \'0\', \'\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2017-04-14 03:23:33\', \'2017-04-14 03:23:33\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'19\', \'\', \'18\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'1\', \'1\', \'cms\', \'0\', \'1\', \'menu\', \'2\', \'1\', \'0\', \'\', \'0\', \'\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2017-04-14 03:24:11\', \'2017-04-14 03:24:11\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'20\', \'\', \'18\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'3\', \'1\', \'cms\', \'0\', \'1\', \'menu\', \'2\', \'1\', \'1\', \'\', \'0\', \'\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2017-04-14 03:25:20\', \'2017-04-14 03:25:20\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'21\', \'\', \'18\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'5\', \'1\', \'cms\', \'0\', \'1\', \'menu\', \'2\', \'1\', \'2\', \'\', \'0\', \'\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2017-04-14 03:25:51\', \'2017-04-14 03:25:51\')'; 
 $query_sql['psmegamenu'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu( `id_psmegamenu`,`image`,`id_parent`,`is_group`,`width`,`submenu_width`,`alignment`,`colum_width`,`submenu_colum_width`,`item`,`colums`,`type`,`is_content`,`show_title`,`type_submenu`,`level_depth`,`active`,`position`,`submenu_content`,`show_sub`,`url`,`target`,`privacy`,`position_type`,`menu_class`,`content`,`icon_class`,`level`,`left`,`right`,`submenu_catids`,`is_cattree`,`date_add`,`date_upd` ) 
							VALUES(\'22\', \'\', \'4\', \'0\', \'\', \'\', \'aligned-left\', \'\', \'\', \'6\', \'1\', \'cms\', \'0\', \'1\', \'menu\', \'3\', \'1\', \'2\', \'\', \'0\', \'\', \'_self\', \'0\', \'\', \'\', \'\', \'\', \'0\', \'0\', \'0\', \'\', \'1\', \'2017-04-18 00:18:41\', \'2017-04-18 00:18:41\')'; 
/*DATA FOR TABLE psmegamenu_lang*/
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'1\', \'_LANGUAGEID_\', \'Root\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'2\', \'_LANGUAGEID_\', \'Home\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'3\', \'_LANGUAGEID_\', \'Categories\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'4\', \'_LANGUAGEID_\', \'Pages\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'6\', \'_LANGUAGEID_\', \'Contact\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'7\', \'_LANGUAGEID_\', \'About Us\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'8\', \'_LANGUAGEID_\', \'Custom CMS Page\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'9\', \'_LANGUAGEID_\', \'stores\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'10\', \'_LANGUAGEID_\', \'blog\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'11\', \'_LANGUAGEID_\', \'page 404\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'12\', \'_LANGUAGEID_\', \'Special\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'13\', \'_LANGUAGEID_\', \'About Us\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'14\', \'_LANGUAGEID_\', \'Our Offers\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'15\', \'_LANGUAGEID_\', \'New product\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'16\', \'_LANGUAGEID_\', \'Best sellers\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'17\', \'_LANGUAGEID_\', \'Price drop\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'18\', \'_LANGUAGEID_\', \'CMS Page\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'19\', \'_LANGUAGEID_\', \'Delivery \', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'20\', \'_LANGUAGEID_\', \'Terms and conditions of use \', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'21\', \'_LANGUAGEID_\', \'Secure payment\', \'\', \'\', \'\', \'\')'; 
 $query_sql['psmegamenu_lang'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_lang( `id_psmegamenu`,`id_lang`,`title`,`text`,`description`,`content_text`,`submenu_content_text` ) 
							VALUES(\'22\', \'_LANGUAGEID_\', \'Product Element\', \'\', \'\', \'\', \'\')'; 
/*DATA FOR TABLE psmegamenu_shop*/
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'1\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'2\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'3\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'4\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'6\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'7\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'8\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'9\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'10\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'11\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'12\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'13\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'14\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'15\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'16\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'17\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'18\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'19\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'20\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'21\', \'_SHOPID_\')'; 
 $query_sql['psmegamenu_shop'][] = 'INSERT INTO '._DB_PREFIX_.'psmegamenu_shop( `id_psmegamenu`,`id_shop` ) 
							VALUES(\'22\', \'_SHOPID_\')'; 
/*DATA FOR TABLE psmegamenu_widgets*/

 ?>