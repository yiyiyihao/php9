<?php /* Smarty version Smarty-3.1.16, created on 2018-01-04 12:45:31
         compiled from ".\App\home\View\\user_login.html" */ ?>
<?php /*%%SmartyHeaderCode:1205a4da1d63e6622-41520385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27b43309367477f42b173b8ab31abac342db13a9' => 
    array (
      0 => '.\\App\\home\\View\\\\user_login.html',
      1 => 1515041119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1205a4da1d63e6622-41520385',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a4da1d640bc13_39973520',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4da1d640bc13_39973520')) {function content_5a4da1d640bc13_39973520($_smarty_tpl) {?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>黑色Html5响应式个人博客模板——主题《如影随形》</title>
<meta name="keywords" content="个人博客模板,博客模板,响应式" />
<meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。" />
<link href="../../Public/home/css/base.css" rel="stylesheet">
<link href="../../Public/home/css/about.css" rel="stylesheet">
<link href="../../Public/home/css/media.css" rel="stylesheet">

<style type='text/css'>
    form .input {width:250px; height:30px; border:1px #ccc solid;}
    form .btn {width:70px; height:30px;}
    form textarea {resize:none;}
    form dl dt {width:80px; text-align:left; float:left;}
    form dl dd {vertical-align:middle; margin-bottom:20px;}
</style>

<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<script src=../../Public/home/js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<div class="ibody">
  {include file='#'}
  <article>
    <h3 class="about_h">您现在的位置是：<a href="/">首页</a>><a href="1/">登陆</a></h3>
    <div class="about">
        <form action="/index.php?g=Home&c=Privilege&a=user_login_1" method="post">
            <dl>
              <dt>用户名：</dt>
              <dd><input class="input" type="text" name="u_name" /><span> * 请填写您的用户名</span></dd>
              <dt>密　码：</dt>
              <dd><input class="input" type="password" name="u_pwd" /><span> * 请填写您的密码</span></dd>
              <dd>
                 <input type='checkbox' name='remember' value='1' />&nbsp;下次自动登录
              </dd>
              <div style="clear:both;"></div>
              <dd>
                 <input class="btn" type="submit" name="submit" value="登陆" />
                 <input class="btn" type="reset" name="reset" value="注册" onclick="location.href='index.php?c=user&a=regUi'" />
              </dd>
            </dl>
        </form>
    </div>
  </article>
  <aside>
    <div class="avatar"><a href="about.html"><span>关于杨青</span></a></div>
    <div class="topspaceinfo">
      <h1>执子之手，与子偕老</h1>
      <p>于千万人之中，我遇见了我所遇见的人....</p>
    </div>
    <div class="about_c">
      <p>网名：DanceSmile | 即步非烟</p>
      <p>职业：Web前端设计师、网页设计 </p>
      <p>籍贯：四川省—成都市</p>
      <p>电话：13662012345</p>
      <p>邮箱：dancesmiling@qq.com</p>
      <p><a target="_blank" href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&amp;email=HHh9cn95b3F1cHVye1xtbTJ-c3E" ><img src="http://rescdn.qqmail.com/zh_CN/htmledition//Public/images/function/qm_open/ico_mailme_22.png" alt="杨青个人博客网站"></a></p>
      <p> 
        <!--以下是QQ邮件列表订阅嵌入代码--><a target="_blank" href="http://list.qq.com/cgi-bin/qf_invite?id=65fb9b3618916f162973471ebc5b97ff786efae0ec9a863e"><img border="0" alt="填写您的邮件地址，订阅我们的精彩内容：" src="http://rescdn.list.qq.com/zh_CN/htmledition//Public/images/qunfa/manage/picMode_light_m.png" /></a> </p>
    </div>
  </aside>
  <script src="../../Public/home/js/silder.js"></script>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
</body>
</html>
<?php }} ?>
