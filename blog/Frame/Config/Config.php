<?php
return[
   'db'=>['type'=>'mysql','host'=>'127.0.0.1','port'=>3306,'user'=>'root','pwd'=>'101142','charset'=>'utf8','dbname'=>'blog','prefix'=>'blog_'],
   'width'=>100,
   'hight'=>30,
   'len'=>4,

   'mime'=>['image/jpeg','image/jpg','image/gif','image/png'],
   'maxsize'=>1024*1024*3,
   'image'=>'Uploads/images',

   't_w'=>170,
   't_h'=>115,
   'thumb'=>'./uploads/thumber',

   'rowsPerPage'=>10
];

// create table user(
// 	id int(10) unsigned not null unique auto_increment,
// 	user_name char(15) not null,
// 	user_pwd char(32) not null
// 	)charset utf8;
// insert into user values(default,123,md5(123));

