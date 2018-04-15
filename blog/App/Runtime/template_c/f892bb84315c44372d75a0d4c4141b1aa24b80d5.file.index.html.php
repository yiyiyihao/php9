<?php /* Smarty version Smarty-3.1.16, created on 2018-01-30 21:50:44
         compiled from ".\App\home\View\index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:265275a53616a99ff69-02716040%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f892bb84315c44372d75a0d4c4141b1aa24b80d5' => 
    array (
      0 => '.\\App\\home\\View\\index\\index.html',
      1 => 1517311365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '265275a53616a99ff69-02716040',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a53616a9d4c53_81656804',
  'variables' => 
  array (
    'recommend' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a53616a9d4c53_81656804')) {function content_5a53616a9d4c53_81656804($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\blog\\Frame\\Smarty\\plugins\\modifier.date_format.php';
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>豪哥的blog</title>
<meta name="keywords" content="个人博客模板,博客模板,响应式" />
<meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。" />
<link href="Public/home/css/base.css" rel="stylesheet">
<link href="Public/home/css/index.css" rel="stylesheet">
<link href="Public/home/css/media.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>
<div class="ibody">

<?php echo $_smarty_tpl->getSubTemplate ('../common/menu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('active'=>5), 0);?>

  <article>
    <div class="banner">
      <ul class="texts">
        <p>The best life is use of willing attitude, a happy-go-lucky life. </p>
        <p>最好的生活是用心甘情愿的态度，过随遇而安的生活。</p>
      </ul>
    </div>
    <div class="bloglist">
      <h2>
        <p><span>推荐</span>文章</p>
      </h2>
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recommend']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
      <div class="blogs">
        <h3><a href="index.php?g=home&c=article&a=Article&a_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['a_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['a_title'];?>
</a></h3>
        <figure><img src="/uploads/thumber/<?php echo $_smarty_tpl->tpl_vars['v']->value['a_thumber'];?>
" ></figure>
        <ul>
          <p><?php echo $_smarty_tpl->tpl_vars['v']->value['a_desc'];?>
</p>
          <a href="index.php?g=home&c=article&a=Article&a_id=<?php echo $_smarty_tpl->tpl_vars['v']->value['a_id'];?>
" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
        </ul>
        <p class="autor"><span>作者：<?php echo $_smarty_tpl->tpl_vars['v']->value['a_name'];?>
</span><span>分类：【<a href="/"><?php echo $_smarty_tpl->tpl_vars['v']->value['c_name'];?>
</a>】</span><span>浏览 (<a href="/"> <?php echo $_smarty_tpl->tpl_vars['v']->value['a_click'];?>
 </a>)</span><span>评论（<a href="/"><?php echo $_smarty_tpl->tpl_vars['v']->value['a_comment'];?>
</a>）</span></p>
        <div class="dateview"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['a_time'],'Y-m-d H:i:s');?>
</div>
      </div>
      <?php } ?>
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
    </div>
    <div class="bdsharebuttonbox"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
    <div class="tj_news">
      <h2>
        <p class="tj_t1">最新文章</p>
      </h2>
      <ul>
        <li><a href="/">犯错了怎么办？</a></li>
        <li><a href="/">两只蜗牛艰难又浪漫的一吻</a></li>
        <li><a href="/">春暖花开-走走停停-发现美</a></li>
        <li><a href="/">琰智国际-Nativ for Life官方网站</a></li>
        <li><a href="/">个人博客模板（2014草根寻梦）</a></li>
        <li><a href="/">简单手工纸玫瑰</a></li>
        <li><a href="/">响应式个人博客模板（蓝色清新）</a></li>
        <li><a href="/">蓝色政府（卫生计划生育局）网站</a></li>
      </ul>
      <h2>
        <p class="tj_t2">推荐文章</p>
      </h2>
      <ul>
        <li><a href="/">犯错了怎么办？</a></li>
        <li><a href="/">两只蜗牛艰难又浪漫的一吻</a></li>
        <li><a href="/">春暖花开-走走停停-发现美</a></li>
        <li><a href="/">琰智国际-Nativ for Life官方网站</a></li>
        <li><a href="/">个人博客模板（2014草根寻梦）</a></li>
        <li><a href="/">简单手工纸玫瑰</a></li>
        <li><a href="/">响应式个人博客模板（蓝色清新）</a></li>
        <li><a href="/">蓝色政府（卫生计划生育局）网站</a></li>
      </ul>
    </div>
    <div class="links">
      <h2>
        <p>友情链接</p>
      </h2>
      <ul>
        <li><a href="/">杨青个人博客</a></li>
        <li><a href="/">3DST技术社区</a></li>
      </ul>
    </div>
    <div class="copyright">
      <ul>
        <p> Design by <a href="/">DanceSmile</a></p>
        <p>蜀ICP备11002373号-1</p>
        </p>
      </ul>
    </div>
  </aside>
  <script src="public/home/js/silder.js"></script>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
</body>
</html>
<?php }} ?>
