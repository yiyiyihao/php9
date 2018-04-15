<?php /* Smarty version Smarty-3.1.16, created on 2018-01-17 08:32:34
         compiled from ".\App\Home\View\article\article.html" */ ?>
<?php /*%%SmartyHeaderCode:49745a57398129aba6-89653218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fa80ad02158e37d40fc93c4c7e1b1eff95b66f3' => 
    array (
      0 => '.\\App\\Home\\View\\article\\article.html',
      1 => 1516149118,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49745a57398129aba6-89653218',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a573981387517_68013146',
  'variables' => 
  array (
    'data' => 0,
    'keyword' => 0,
    'v' => 0,
    'pre' => 0,
    'next' => 0,
    'assoc' => 0,
    'as' => 0,
    'reply' => 0,
    'value' => 0,
    'div' => 0,
    'header' => 0,
    'footer' => 0,
    'role' => 0,
    'user' => 0,
    'ok' => 0,
    'h' => 0,
    'f' => 0,
    'cate' => 0,
    'val' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a573981387517_68013146')) {function content_5a573981387517_68013146($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\blog\\Frame\\Smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_cycle')) include 'F:\\blog\\Frame\\Smarty\\plugins\\function.cycle.php';
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>黑色Html5响应式个人博客模板——主题《如影随形》</title>
<meta name="keywords" content="个人博客模板,博客模板,响应式" />
<meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。" />
<link href="/public/home/css/base.css" rel="stylesheet">
<link href="/public/home/css/style.css" rel="stylesheet">
<link href="/public/home/css/media.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
<style type="text/css">
   .ds-replybox img {
    float:left;
    width:76px;
    height:76px;
  }
  textarea {
    box-shadow: none;
    color: #999;
    height: 54px;
    margin: 0;
    overflow: auto;
    padding: 10px;
    resize: none;
    width: 80%;
    margin-left:10px;
  }
  button {
    margin-top:10px;
    margin-left:85px;
    font-size: 14px;
    font-weight: bold;
    height: 32px;
    text-align: center;
    text-shadow: 0 1px 0 #fff;
    transition: all 0.15s linear 0s;
    width: 100px;
  }
  .otherlink dl {
    display:block;
    width:100%;
    height:65px;
    padding:20px 0;
    border-bottom:1px #DEDEDE solid;
  }
  .otherlink dt {
    float:left;
  }
  .otherlink h3 {
    color:#D23;
  }
  .otherlink h3,.otherlink p {
    line-height:22px;
    text-indent:10px;
  }
  .otherlink .msg {
     color:#333;
  }
  .otherlink .addtime {
     color:#999;
  }
  .logform input {
    width:140px;
    height:30px;
  }
</style>
</head>
<body>
<div class="ibody">
 <?php echo $_smarty_tpl->getSubTemplate ('../common/menu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('active'=>5), 0);?>

  <article>
    <h2 class="about_h">您现在的位置是：<a href="/">首页</a>><a href="1/">模板分享</a>><a href="1/">个人博客模板</a></h2>
    <div class="index_about">
      <h2 class="c_titile"><?php echo $_smarty_tpl->tpl_vars['data']->value['a_title'];?>
</h2>
      <p class="box_c"><span class="d_time">发布时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['data']->value['a_time'],'Y-m-d H:i:s');?>
</span><span>编辑：<?php echo $_smarty_tpl->tpl_vars['data']->value['a_name'];?>
</span><span>浏览（<?php echo $_smarty_tpl->tpl_vars['data']->value['a_click'];?>
）</span><span>评论数（<?php echo $_smarty_tpl->tpl_vars['data']->value['a_comment'];?>
）</span></p>
      <ul class="infos">
       <?php echo $_smarty_tpl->tpl_vars['data']->value['a_content'];?>

      </ul>
      <div class="keybq">
        <p><span>关键字词</span>：<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['keyword']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['v']->value['t_name'];?>
&nbsp;&nbsp;<?php } ?></p>
      </div>
      <div class="nextinfo">
        <?php if ($_smarty_tpl->tpl_vars['pre']->value==false) {?>
        <p>上一篇：没有了</p>
        <?php } else { ?>
        <p>上一篇：<a href="index.php?c=article&a=article&a_id=<?php echo $_smarty_tpl->tpl_vars['pre']->value['a_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['pre']->value['a_title'];?>
</a></p>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['next']->value==false) {?>
        <p>下一篇：没有了</p>
        <?php } else { ?>
        <p>下一篇：<a href="index.php?c=article&a=article&a_id=<?php echo $_smarty_tpl->tpl_vars['next']->value['a_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['next']->value['a_title'];?>
</a></p>
        <?php }?>
      </div>
      <div class="otherlink">
        <h2>相关文章</h2>
        <ul>
        <?php  $_smarty_tpl->tpl_vars['as'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['as']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['assoc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['as']->key => $_smarty_tpl->tpl_vars['as']->value) {
$_smarty_tpl->tpl_vars['as']->_loop = true;
?>
          <li><a href="index.php?c=article&a=article&a_id=<?php echo $_smarty_tpl->tpl_vars['as']->value['a_id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['as']->value['a_title'];?>
"><?php echo $_smarty_tpl->tpl_vars['as']->value['a_title'];?>
</a></li>
        <?php } ?>  
        </ul>
      </div>

    <div style="clear:both; height:10px;"></div>
      <div class="otherlink">
          <h2>评论列表</h2>
          <?php $_smarty_tpl->tpl_vars['header'] = new Smarty_variable('', null, 0);?>
          <?php $_smarty_tpl->tpl_vars['footer'] = new Smarty_variable('', null, 0);?>
          <?php $_smarty_tpl->tpl_vars['div'] = new Smarty_variable('', null, 0);?>

          <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reply']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
          <?php if ($_smarty_tpl->tpl_vars['value']->value['r_pid']==0) {?>
            <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'div', null); ob_start(); ?>
            <?php echo ($_smarty_tpl->tpl_vars['div']->value).($_smarty_tpl->tpl_vars['header']->value).($_smarty_tpl->tpl_vars['footer']->value);?>

            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php $_smarty_tpl->tpl_vars['header'] = new Smarty_variable('', null, 0);?>
            <?php $_smarty_tpl->tpl_vars['footer'] = new Smarty_variable('', null, 0);?>
          <?php }?>  
          <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'h', null); ob_start(); ?>
          <div style="border-radius:5px;margin:5px;border:1px solid #009999;">
          <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
          <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'f', null); ob_start(); ?>
          <img src="" alt="">
            <div style="position:relative;overflow:">
              <h3>评论者：<?php echo $_smarty_tpl->tpl_vars['value']->value['user_name'];?>
</h3>
              <p>评论内容：<?php echo $_smarty_tpl->tpl_vars['value']->value['r_content'];?>
</p>
              <p>评论时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['r_time'],'Y-m-d H:i:s');?>
</p>
              <?php if ($_smarty_tpl->tpl_vars['role']->value==1&&$_smarty_tpl->tpl_vars['value']->value['u_id']!=6) {?>
              <?php if ($_smarty_tpl->tpl_vars['value']->value['ok']==0) {?>
              <p><a href="index.php?g=home&c=article&a=nono&uid=<?php echo $_smarty_tpl->tpl_vars['value']->value['u_id'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['a_id'];?>
">禁言</a></p>
              <?php } else { ?>
              <p><a href="index.php?g=home&c=article&a=nono&uid=<?php echo $_smarty_tpl->tpl_vars['value']->value['u_id'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['data']->value['a_id'];?>
">解禁</a></p>
              <?php }?>
              <?php }?>
          <a href="javascript:void()" style="position:relative;left:500px;" onclick="this.nextSibling.style.display='block'">回复</a><div style="border-radius:5px;border:1px solid #009999;margin:5px;display:none;">
                <form action="index.php" method="post">
                <input type="hidden" name="g" value="home">
                <input type="hidden" name="c" value="Article">
                <input type="hidden" name="a" value="addcomment">
                <input type='hidden' name='userid' value='1' />
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['a_id'];?>
">
                <input type="hidden" name="pid" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['r_id'];?>
">
                <input type="hidden" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
">
                <input type="hidden" name="ok" value="<?php echo $_smarty_tpl->tpl_vars['ok']->value;?>
">

                <label>回复内容:</label><br/>
                <textarea name="content">
                </textarea>
                <br/>
                <input type="submit" value="回复">
                </form>
                </div>
                <div style="clear:both;height:10px;"></div>
                </div>
                </div>
                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'header', null); ob_start(); ?>
                <?php echo ($_smarty_tpl->tpl_vars['header']->value).($_smarty_tpl->tpl_vars['h']->value);?>

                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

                <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'footer', null); ob_start(); ?>
                <?php echo ($_smarty_tpl->tpl_vars['footer']->value).($_smarty_tpl->tpl_vars['f']->value);?>

                <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <?php } ?>

                <?php echo $_smarty_tpl->tpl_vars['div']->value;?>

                <?php echo $_smarty_tpl->tpl_vars['header']->value;?>

                <?php echo $_smarty_tpl->tpl_vars['footer']->value;?>


          
      </div>
    <div style="clear:both; height:10px;"></div>
     <div class="otherlink">
        <h2>发布评论</h2>
      </div>
      <div style="clear:both; height:10px;"></div>
      <?php if (isset($_SESSION['user']['id'])) {?>
         欢迎您<?php echo $_SESSION['user']['username'];?>
回来
         <a href="index.php?c=User&a=logout">退出</a>
      <?php } else { ?>

      <?php }?>
    <div style="clear:both; height:10px;"></div>
    
    <div class="ds-replybox">
        <?php if (isset($_SESSION['user']['id'])) {?>
        <img alt="" src="./Uploads/images/<?php echo $_SESSION['user']['avatar'];?>
">
        <?php } else { ?>
        <img alt="" src="Uploads/images/default_img.jpeg">
        <?php }?>
        <form action="index.php?g=home&c=article&a=addcomment" method="post">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['a_id'];?>
">
        <input type="hidden" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
">
        <input type="hidden" name="ok" value="<?php echo $_smarty_tpl->tpl_vars['ok']->value;?>
">
        <textarea placeholder="说点什么吧…" title="Ctrl+Enter快捷提交" name="content"></textarea><pre class="ds-hidden-text"></pre>
        </div>
        <div class="ds-post-toolbar">
        <div class="ds-post-options ds-gradient-bg"><span class="ds-sync"></span>
        </div>
          <button type="submit" class="ds-post-button">发布</button>
        <div class="ds-toolbar-buttons"><a title="插入表情" class="ds-toolbar-button ds-add-emote"></a>
        </div>
        </div>
        </form>
      </div>
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
      <li class="rnav<?php echo smarty_function_cycle(array('values'=>'1,2,3,4'),$_smarty_tpl);?>
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
  <script src="public/home/js/silder.js"></script>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
</body>
</html>
<?php }} ?>
