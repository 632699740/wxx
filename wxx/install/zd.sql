-- 生成日期: 2013 年 03 月 11 日 10:49

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `iwebshop`
--

-- --------------------------------------------------------

--
-- 表的结构 `{pre}admin`
--

DROP TABLE IF EXISTS `{pre}admin`;
CREATE TABLE `{pre}admin` (
  `id` int(11) unsigned NOT NULL auto_increment COMMENT '管理员ID',
  `admin_name` varchar(20) NOT NULL COMMENT '用户名',
  `password` varchar(32) NOT NULL COMMENT '密码',
  `create_time` datetime default NULL COMMENT '创建时间',
  `email` varchar(255) default NULL COMMENT 'Email',
  `last_ip` varchar(30) default NULL COMMENT '最后登录IP',
  `last_time` datetime default NULL COMMENT '最后登录时间',
  PRIMARY KEY  (`id`),
  index (`admin_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='管理员用户表';

-- --------------------------------------------------------
--
-- 表的结构 `{pre}users`
--
DROP TABLE IF EXISTS `{pre}users`;
CREATE TABLE `{pre}users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '公众号ID',
  `appid` varchar(100) NOT NULL COMMENT '公众IP',
  `appsecret` varchar(100) NOT NULL COMMENT 'SECRET',
  `username` varchar(100) NOT NULL,
  `info` varchar(100) NOT NULL,
  `url` varchar(100) DEFAULT NULL,
  `token` varchar(10) DEFAULT NULL,
  PRIMARY KEY  (`id`),
  index (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='管理员用户表';