/*
文章管理
  文章发布/编辑/删除/置顶
  分类新增/编辑/删除/排序
 */

CREATE TABLE IF NOT EXISTS article (
`id` INT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
`title` VARCHAR(100) NOT NULL DEFAULT "",
`content` TEXT NOT NULL DEFAULT "",
`keyword` VARCHAR(100) NOT NULL DEFAULT "",
`description` VARCHAR(200) NOT NULL DEFAULT "",
`cate_id` INT(8) UNSIGNED NOT NULL DEFAULT 0,
`img_id` INT(8) UNSIGNED NOT NULL DEFAULT 0 COMMENT "插图图片ID",
`stick` TINYINT(1) NOT NULL DEFAULT 1,
`status` TINYINT(1) NOT NULL DEFAULT 1,
`create_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
`update_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (`id`),
INDEX(`title`),
INDEX(`create_time`),
INDEX(`update_time`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS acategory (
`id` INT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
`pid` INT(8) UNSIGNED NOT NULL DEFAULT 0,
`title` VARCHAR(100) NOT NULL DEFAULT "",
`DESCRIPTION` VARCHAR(500) NOT NULL DEFAULT "",
`img_id` INT(8) UNSIGNED NOT NULL DEFAULT 0 COMMENT "插图图片ID",
`listorder` TINYINT(2) UNSIGNED NOT NULL DEFAULT 0,
`status` TINYINT(1) NOT NULL DEFAULT 1,
`create_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
`update_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (`id`),
INDEX(`title`),
INDEX(`create_time`),
INDEX(`update_time`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

/* 
 * RBAC 共5张表 
 * uee_admin uee_role 与其关系表 uee_role_admin
 * uee_role uee_menu 与其关系表 uee_role_menu
 */

CREATE TABLE IF NOT EXISTS uee_admin (
`id` INT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
`title` VARCHAR(100) NOT NULL DEFAULT "",
`password` CHAR(32) NOT NULL DEFAULT "",
`salt` CHAR(10) NOT NULL DEFAULT "",
`email` VARCHAR(100) NOT NULL DEFAULT "",
`mobile` CHAR(12) NOT NULL DEFAULT "",
`create_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
`update_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY(`id`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS uee_role (
`id` INT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
`title` VARCHAR(100) NOT NULL DEFAULT "",
`remark` VARCHAR(250) NOT NULL DEFAULT "",
`create_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
`update_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY(`id`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS uee_role_admin (
`rid` INT(8) UNSIGNED NOT NULL DEFAULT 0,
`aid` INT(8) UNSIGNED NOT NULL DEFAULT 0
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS uee_menu (
`id` INT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
`title` VARCHAR(100) NOT NULL DEFAULT "",
`pid` INT(8) UNSIGNED NOT NULL DEFAULT 0,
`m_module` VARCHAR(100) NOT NULL DEFAULT "",
`m_controller` VARCHAR(100) NOT NULL DEFAULT "",
`m_method` VARCHAR(100) NOT NULL DEFAULT "",
`m_params` VARCHAR(200) NOT NULL DEFAULT "",
`img_id` INT(8) UNSIGNED NOT NULL DEFAULT 0,
`remark` VARCHAR(250) NOT NULL DEFAULT "",
`listorder` TINYINT(2) UNSIGNED NOT NULL DEFAULT 0,
`create_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
`update_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY(`id`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS uee_role_menu (
`rid` INT(8) UNSIGNED NOT NULL DEFAULT 0,
`mid` INT(8) UNSIGNED NOT NULL DEFAULT 0
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;









CREATE TABLE IF NOT EXISTS uee_imgbox (
`id` INT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
`parent_id` INT(8) NOT NULL DEFAULT 0 COMMENT "父类ID",
`title` VARCHAR(100) NOT NULL DEFAULT "" COMMENT "相册标题",
`status` TINYINT(1) NOT NULL DEFAULT 1,
`create_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
`update_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (`id`),
INDEX(`title`),
INDEX(`create_time`),
INDEX(`update_time`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;







CREATE TABLE IF NOT EXISTS uee_sliderbox (
`id` INT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
`title` VARCHAR(100) NOT NULL DEFAULT "",
`status` TINYINT(1) NOT NULL DEFAULT 1,
`create_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
`update_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (`id`),
INDEX(`title`),
INDEX(`create_time`),
INDEX(`update_time`)
)ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;