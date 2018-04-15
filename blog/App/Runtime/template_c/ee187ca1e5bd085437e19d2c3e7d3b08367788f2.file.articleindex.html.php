<?php /* Smarty version Smarty-3.1.16, created on 2018-01-10 20:16:29
         compiled from ".\App\home\View\article\articleindex.html" */ ?>
<?php /*%%SmartyHeaderCode:213535a54ab310db150-45188530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee187ca1e5bd085437e19d2c3e7d3b08367788f2' => 
    array (
      0 => '.\\App\\home\\View\\article\\articleindex.html',
      1 => 1515586528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213535a54ab310db150-45188530',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a54ab31147035_78614576',
  'variables' => 
  array (
    'aaa' => 0,
    'arti' => 0,
    'article' => 0,
    'page' => 0,
    'cate' => 0,
    'i' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a54ab31147035_78614576')) {function content_5a54ab31147035_78614576($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\blog\\Frame\\Smarty\\plugins\\modifier.date_format.php';
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>豪哥个人博客模板——主题《如影随形》</title>
<meta name="keywords" content="个人博客模板,博客模板,响应式" />
<meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。" />
<link href="public/home/css/base.css" rel="stylesheet">
<link href="public/home/css/style.css" rel="stylesheet">
<link href="public/home/css/media.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<div class="ibody">
 <?php echo $_smarty_tpl->getSubTemplate ("../common/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('active'=>$_smarty_tpl->tpl_vars['aaa']->value), 0);?>

  <article>
    <h2 class="about_h">您现在的位置是：<a href="/">首页</a>><a href="1/">程序人生</a></h2>
    <div class="bloglist">
      <?php  $_smarty_tpl->tpl_vars['article'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['article']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['article']->key => $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->_loop = true;
?>
      <div class="newblog">
        <ul>
          <h3><a href="index.php?g=home&c=article&a=Article&a_id=<?php echo $_smarty_tpl->tpl_vars['article']->value['a_id'];?>
&pid=1"><?php echo $_smarty_tpl->tpl_vars['article']->value['a_title'];?>
</a></h3>
          <div class="autor"><span>作者：<?php echo $_smarty_tpl->tpl_vars['article']->value['a_name'];?>
</span><span>分类：[<a href="/"><?php echo $_smarty_tpl->tpl_vars['article']->value['c_name'];?>
</a>]</span><span>浏览（<a href="/"><?php echo $_smarty_tpl->tpl_vars['article']->value['a_click'];?>
</a>）</span><span>评论（<a href="/"><?php echo $_smarty_tpl->tpl_vars['article']->value['a_comment'];?>
</a>）</span></div>
          <p><?php echo $_smarty_tpl->tpl_vars['article']->value['a_desc'];?>
<a href="index.php?g=home&c=article&a=Article&a_id=<?php echo $_smarty_tpl->tpl_vars['article']->value['a_id'];?>
&pid=1" target="_blank" class="readmore">全文</a></p>
        </ul>
        <figure><img src="Uploads/thumber/<?php echo $_smarty_tpl->tpl_vars['article']->value['a_thumber'];?>
" ></figure>
        <div class="dateview"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['a_time'],'Y-m-d H:i:s');?>
</div>
      </div>
      <?php } ?>
    </div>
                <p align="center"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</p>
  </article>
  <aside>
    <div class="rnav">
      <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
      <li class="rnav<?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
 "><a href="index.php?g=home&c=article&a=Articleindex&pid=<?php echo $_smarty_tpl->tpl_vars['val']->value['c_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['c_name'];?>
</a></li>
      <?php } ?>
    </div>
    <div class="ph_news">
      <h2>
        <p>点击排行</p>
      </h2>
      <ul class="ph_n">
        <li><span class="num1">1</span><a href="/">有一种思念，是淡淡的幸福,一个心情一行文字</a></li>
        <li><span class="num2">2</span><a href="/">励志人生-要做一个潇洒的女人</a></li>
        <li><span class="num3">3</span><a href="/">女孩都有浪漫的小情怀——浪漫的求婚词</a></li>
        <li><span>4</span><a href="/">Green绿色小清新的夏天-个人博客模板</a></li>
        <li><span>5</span><a href="/">女生清新个人博客网站模板</a></li>
        <li><span>6</span><a href="/">Wedding-婚礼主题、情人节网站模板</a></li>
        <li><span>7</span><a href="/">Column 三栏布局 个人网站模板</a></li>
        <li><span>8</span><a href="/">时间煮雨-个人网站模板</a></li>
        <li><span>9</span><a href="/">花气袭人是酒香—个人网站模板</a></li>
      </ul>
      <h2>
        <p>栏目推荐</p>
      </h2>
      <ul>
        <li><a href="/">有一种思念，是淡淡的幸福,一个心情一行文字</a></li>
        <li><a href="/">励志人生-要做一个潇洒的女人</a></li>
        <li><a href="/">女孩都有浪漫的小情怀——浪漫的求婚词</a></li>
        <li><a href="/">Green绿色小清新的夏天-个人博客模板</a></li>
        <li><a href="/">女生清新个人博客网站模板</a></li>
        <li><a href="/">Wedding-婚礼主题、情人节网站模板</a></li>
        <li><a href="/">Column 三栏布局 个人网站模板</a></li>
        <li><a href="/">时间煮雨-个人网站模板</a></li>
        <li><a href="/">花气袭人是酒香—个人网站模板</a></li>
      </ul>
      <h2>
        <p>最新评论</p>
      </h2>
      <ul class="pl_n">
        <dl>
          <dt><img src="public/home/images/s8.jpg"> </dt>
          <dt> </dt>
          <dd>DanceSmile
            <time>49分钟前</time>
          </dd>
          <dd><a href="/">文章非常详细，我很喜欢.前端的工程师很少，我记得几年前yahoo花高薪招聘前端也招不到</a></dd>
        </dl>
        <dl>
          <dt><img src="public/home/images/s7.jpg"> </dt>
          <dt> </dt>
          <dd>yisa
            <time>2小时前</time>
          </dd>
          <dd><a href="/">我手机里面也有这样一个号码存在</a></dd>
        </dl>
        <dl>
          <dt><img src="public/home/images/s6.jpg"> </dt>
          <dt> </dt>
          <dd>小林博客
            <time>8月7日</time>
          </dd>
          <dd><a href="/">博客色彩丰富，很是好看</a></dd>
        </dl>
        <dl>
          <dt><img src="public/home/images/003.jpg"> </dt>
          <dt> </dt>
          <dd>DanceSmile
            <time>49分钟前</time>
          </dd>
          <dd><a href="/">文章非常详细，我很喜欢.前端的工程师很少，我记得几年前yahoo花高薪招聘前端也招不到</a></dd>
        </dl>
        <dl>
          <dt><img src="public/home/images/002.jpg"> </dt>
          <dt> </dt>
          <dd>yisa
            <time>2小时前</time>
          </dd>
          <dd><a href="/">我手机里面也有这样一个号码存在</a></dd>
        </dl>
      </ul>
      <h2>
        <p>最近访客</p>
        <ul>
          <img src="public/home/images/vis.jpg"><!-- 直接使用“多说”插件的调用代码 -->
        </ul>
      </h2>
    </div>
    <div class="copyright">
      <ul>
        <p> Design by <a href="/">DanceSmile</a></p>
        <p>蜀ICP备11002373号-1</p>
        </p>
      </ul>
    </div>
  </aside>
  <script src="js/silder.js"></script>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
</body>
</html>
<?php }} ?>
