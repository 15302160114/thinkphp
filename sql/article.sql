#管理员表
create table `admin`(
`id` int(11) unsigned not null AUTO_INCREMENT,
`username` varchar(20) not null default  '' COMMENT '姓名',
`realname` varchar(20) not null default  '' COMMENT '真实姓名',
`logo` varchar(50) not null default '',
`password` varchar(32) not null default '' COMMENT '密码',
`status` tinyint(1)  not null default 1  COMMENT '状态 1正常 0删除 2禁用 ',
`create_time` int(11)  unsigned not null default 0  COMMENT '创建时间',
`update_time` int(11)  unsigned not null default 0  COMMENT '更新时间',
primary key(`id`),
unique key username(`username`)
)engine=innodb AUTO_INCREMENT=1 default charset=utf8;
INSERT INTO `admin`(username,realname,password,status,create_time,update_time) 
VALUES ( 'superadmin', '程程', 'e10adc3949ba59abbe56e057f20f883e', '1', '1521725536', '1521951698');


#用户表
create table `consumer`(
`id` int(11) unsigned not null AUTO_INCREMENT,
`username` varchar(20) not null default  '' COMMENT '姓名',
`realname` varchar(20) not null default  '' COMMENT '真实姓名',
`logo` varchar(50) not null default '',
`password` varchar(32) not null default '' COMMENT '密码',
`tel` varchar(20) not null default '' COMMENT '电话',
`email` varchar(20) not null default '' COMMENT '邮箱',
`address` varchar(50) not null default '' COMMENT '地址',
`note` text COMMENT '备注',
`status` tinyint(1)  not null default 1  COMMENT '状态 1正常 0删除 2私有 3禁用 ',
`create_time` int(11)  unsigned not null default 0  COMMENT '创建时间',
`update_time` int(11)  unsigned not null default 0  COMMENT '更新时间',
primary key(`id`),
unique key username(`username`)
)engine=innodb AUTO_INCREMENT=1 default charset=utf8;

#配送员表
create table `distributor`(
`id` int(11) unsigned not null AUTO_INCREMENT,
`realname` varchar(20) not null default  '' COMMENT '真实姓名',
`logo` varchar(50) not null default '',
`password` varchar(32) not null default '' COMMENT '密码',
`tel` varchar(20) not null default '' COMMENT '电话',
`email` varchar(20) not null default '' COMMENT '邮箱',
`note` text COMMENT '备注',
`status` tinyint(1)  not null default 1  COMMENT '状态 1正常 0删除 2私有 3禁用 ',
`create_time` int(11)  unsigned not null default 0  COMMENT '创建时间',
`update_time` int(11)  unsigned not null default 0  COMMENT '更新时间',
primary key(`id`),
unique key realname(`realname`)
)engine=innodb AUTO_INCREMENT=1 default charset=utf8;

#类别表
create table `category`(
`id` int(11) unsigned not null AUTO_INCREMENT,
`categoryname` varchar(30) not null default  '' COMMENT '类别名',
`status` tinyint(1)  not null default 1  COMMENT '状态 1正常 0删除 2禁用 ',
`create_time` int(11)  unsigned not null default 0  COMMENT '创建时间',
`update_time` int(11)  unsigned not null default 0  COMMENT '更新时间',
primary key(`id`),
unique key categoryname(`categoryname`)
)engine=innodb AUTO_INCREMENT=1 default charset=utf8;

#商品表
create table `commodity`(
`id` int(11) unsigned not null AUTO_INCREMENT,
`spname` varchar(50) not null default '' COMMENT '商品名',
`logo` varchar(50) not null default '',
`distributor_id` int(11) not null default 0,
`category_id` int(11) not null default 0,
`description` varchar(250) not null default '' COMMENT '商品描述',
`content` text COMMENT '商品详情',
`count` int(11) not null default 0 COMMENT '商品价格',
`status` tinyint(1)  not null default 1 COMMENT '状态 1正常 0删除 2下架 ',
`create_time` int(11)  unsigned not null default 0,
`update_time` int(11)  unsigned not null default 0,
primary key(`id`),
key distributor_id(`distributor_id`),
key category_id(`category_id`)
)engine=innodb AUTO_INCREMENT=1 default charset=utf8;

#订单表
create table `order`(
`id` int(11) unsigned not null AUTO_INCREMENT,
`spname` varchar(50) not null default '' COMMENT '商品名称',
`logo` varchar(50) not null default '',
`distributor_id` int(11) not null default 0 COMMENT '配送员ID',
`category_id` int(11) not null default 0,
`consumer_id` int(11) not null default 0,
`description` varchar(250) not null default '' COMMENT '商品介绍',
`content` text COMMENT '商品详情',
`note` int(11) not null default 0 COMMENT '用户备注',
`count` int(11) not null default 0 COMMENT '商品价格',
`sum` int(11) not null default 0 COMMENT '商品总价',
`status` tinyint(1)  not null default 1 COMMENT '状态 1未配送 2已配送 0订单取消',
`create_time` int(11)  unsigned not null default 0,
`update_time` int(11)  unsigned not null default 0,
primary key(`id`),
key distributor_id(`distributor_id`),
key category_id(`category_id`),
key consumer_id(`consumer_id`)
)engine=innodb AUTO_INCREMENT=1 default charset=utf8;

#评论表
create table `comment`(
`id` int(11) unsigned not null AUTO_INCREMENT,
`sp_id` int(11) not null default 0 COMMENT '商品ID',
`consumer_id` int(11) not null default 0 COMMENT '用户ID',
`content` text,
`up` int(11) not null default 0,
`status` tinyint(1)  not null default 1,
`create_time` int(11)  unsigned not null default 0,
`update_time` int(11)  unsigned not null default 0,
primary key(`id`),
key consumer_id(`consumer_id`),
key sp_id(`sp_id`)
)engine=innodb AUTO_INCREMENT=1 default charset=utf8;