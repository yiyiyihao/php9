<?php /* Smarty version Smarty-3.1.16, created on 2018-01-30 19:20:01
         compiled from "F:\blog\App\home\View\common\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:223615a536308c23a51-49856417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3554c070824bf051f45c8be47453d09a14ead303' => 
    array (
      0 => 'F:\\blog\\App\\home\\View\\common\\menu.html',
      1 => 1517311173,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '223615a536308c23a51-49856417',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a536308c24c94_88133322',
  'variables' => 
  array (
    'active' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a536308c24c94_88133322')) {function content_5a536308c24c94_88133322($_smarty_tpl) {?>  <header>
    <h1>如影随形</h1>
    <h2>影子是一个会撒谎的精灵，它在虚空中流浪和等待被发现之间;在存在与不存在之间....</h2>
    <div class="logo"><a href="/"></a></div>
    <nav id="topnav">
	    <a <?php if ($_smarty_tpl->tpl_vars['active']->value==5) {?>id="topnav_current"<?php }?> href="index.php">首页</a>
	    <a <?php if ($_smarty_tpl->tpl_vars['active']->value==4) {?>id="topnav_current"<?php }?> href="index.php?g=Home&c=SinglePage&a=aboutme">关于我</a>
	    <a <?php if ($_smarty_tpl->tpl_vars['active']->value==1) {?>id="topnav_current"<?php }?> href="index.php?g=Home&c=Article&a=Articleindex&pid=1">程序人生</a>
	    <a <?php if ($_smarty_tpl->tpl_vars['active']->value==3) {?>id="topnav_current"<?php }?> href="index.php?g=Home&c=Article&a=Articleindex&pid=3">旅行</a>
	    <a <?php if ($_smarty_tpl->tpl_vars['active']->value==2) {?>id="topnav_current"<?php }?> href="index.php?g=Home&c=Article&a=Articleindex&pid=2">美食</a>
    </nav>
  </header><?php }} ?>
