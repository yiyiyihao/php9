create database blog charset utf8;

use blog;


Table: user
Create Table: CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` char(15) NOT NULL,
  `user_pwd` char(32) NOT NULL,
  UNIQUE KEY `id` (`id`)
)     
有一个账户账号123，密码123；




-- 创建管理表
create table admin(
id int unsigned primary key auto_increment comment '主键',
a_name varchar(32) not null unique comment '登陆名',
a_pwd char(128) not null comment '密码',
a_truename varchar(32) not null default '' comment '真名',
a_avatar varchar(128) not null default '' comment '头像',
a_role int unsigned not null default 0 comment '角色',
a_sex char(1) not null default 0 comment '性别',
a_last_ip varchar(128) not null default '' comment '最后登陆的ip',
a_last_time datetime not null default '0000-00-00 00:00:00' comment '最后登陆的时间'
)charset utf8;

-- 插入测试数据
insert into admin values(default,'admin',md5('123'),'administrator','',0,0,'0.0.0.0','0000-00-00 00:00:00');




-- 创建类别数据表
create table category(
c_id int unsigned primary key auto_increment comment '主键',
c_name varchar(32) not null default '' comment '分类名',
c_desc varchar(32) not null default '' comment '分类描述',
c_sort tinyint unsigned not null default 50 comment '排序',
c_time int unsigned comment '创建时间',
c_pid int unsigned
)charset utf8;




①、创建数据表
use blog;
drop table if exists article;
-- 创建文章表
create table article(
a_id int unsigned primary key auto_increment comment '主键',
a_title varchar(32) not null default '' comment '文章标题',
a_desc varchar(128) not null default '' comment '文章描述', 
a_content text not null comment '文章内容', 
a_author int unsigned comment '文章作者',  #存储的当前登陆的用户的id 
a_time int unsigned comment '创建时间',
a_click int unsigned comment '浏览次数' default 0,
a_like int unsigned comment '点赞' default 0,
a_comment int unsigned comment '评论数' default 0,
c_id int unsigned comment '所属分类',
a_img varchar(128) comment '图片',
a_thumber varchar(128) comment '缩略图',
a_water varchar(128) comment '水印图'
)charset utf8;




alter table article add a_recommend tinyint unsigned default 0 comment '推荐:0表示没推荐，1表示推荐';



--创建评论表
create table reply(
r_id int unsigned primary key auto_increment comment '主键',
r_content varchar(256) not null default '' comment '内容',
r_time int unsigned comment '评论时间',
u_id int unsigned comment '回复人',
a_id int unsigned comment '所评论的文章',
r_pid int unsigned comment '对评论的回复'
)charset utf8;


--创建tag表:
use blog;
drop table if exists tag;
create table tag(
id int unsigned primary key auto_increment comment '主键',
t_name varchar(64) unique not null comment '关键词',
t_flag int unsigned default 0 comment '主键冲突时更新此记录'
)charset utf8;

--创建关联表:
use blog;
drop table if exists art_art;
create table art_art(
a_id int unsigned,
t_id int unsigned
)charset utf8;

