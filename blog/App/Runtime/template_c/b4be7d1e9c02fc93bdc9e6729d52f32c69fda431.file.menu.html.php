<?php /* Smarty version Smarty-3.1.16, created on 2018-01-06 21:04:19
         compiled from "F:\blog\App\Admin\View\common\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:302225a4f782f2940f3-40419671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4be7d1e9c02fc93bdc9e6729d52f32c69fda431' => 
    array (
      0 => 'F:\\blog\\App\\Admin\\View\\common\\menu.html',
      1 => 1515237788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '302225a4f782f2940f3-40419671',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a4f782f295996_82916739',
  'variables' => 
  array (
    'active' => 0,
    'sub' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4f782f295996_82916739')) {function content_5a4f782f295996_82916739($_smarty_tpl) {?><div class="righter nav-navicon" id="admin-nav">
<div class="mainer">
        <div class="admin-navbar"> <span class="float-right"> <a class="button button-little bg-main" href="#">前台首页</a> <a class="button button-little bg-yellow" href="index.php?g=admin&c=privilege&a=logout">注销登录</a> </span>
  <ul class="nav nav-inline admin-nav">
    <li <?php if ($_smarty_tpl->tpl_vars['active']->value==1) {?>class="active"<?php }?>><a href="index.php?g=admin&c=index&a=index" class="icon-home"> 开始</a>
      <ul>
        <li <?php if ($_smarty_tpl->tpl_vars['sub']->value==1001) {?>class="active"<?php }?>><a href="index.php?g=admin&c=category&a=index">类别管理</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['sub']->value==1002) {?>class="active"<?php }?>><a href="index.php?g=admin&c=article&a=index">文章管理</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['sub']->value==1003) {?>class="active"<?php }?>><a href="#">相册管理</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['sub']->value==1004) {?>class="active"<?php }?>><a href="#">站长信息</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['sub']->value==1005) {?>class="active"<?php }?>><a href="#">关于我</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['sub']->value==1006) {?>class="active"<?php }?>><a href="#">栏目管理</a></li>
      </ul>
    </li>
    <li <?php if ($_smarty_tpl->tpl_vars['active']->value==2) {?>class="active"<?php }?>><a href="index.php?g=admin&c=category&a=index" class="icon-cog">类别管理</a>
      <ul>
        <li <?php if ($_smarty_tpl->tpl_vars['sub']->value==2001) {?>class="active"<?php }?>><a href="index.php?g=admin&c=category&a=index">所有类别</a></li>
        <li  <?php if ($_smarty_tpl->tpl_vars['sub']->value==2002) {?>class="active"<?php }?>"><a href="index.php?g=admin&c=category&a=add">添加类别</a></li>
        
      </ul>
    </li>
    <li <?php if ($_smarty_tpl->tpl_vars['active']->value==3) {?>class="active"<?php }?>><a href="index.php?g=admin&c=article&a=index" class="icon-file-text"> 文章管理</a>
      <ul>
        <li <?php if ($_smarty_tpl->tpl_vars['sub']->value==3001) {?>class="active"<?php }?>><a href="index.php?g=admin&c=article&a=index">所有文章</a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['sub']->value==3002) {?>class="active"<?php }?>><a href="index.php?g=admin&c=article&a=add">添加文章</a></li>
      </ul>
    </li>
    <li <?php if ($_smarty_tpl->tpl_vars['active']->value==4) {?>class="active"<?php }?>><a href="#" class="icon-shopping-cart"> 相册管理</a>
      <ul>
        <li><a href="#">添加相片</a></li>
      </ul>
    </li>
    <li <?php if ($_smarty_tpl->tpl_vars['active']->value==5) {?>class="active"<?php }?>><a href="#" class="icon-user"> 站长信息</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['active']->value==6) {?>class="active"<?php }?>><a href="#" class="icon-file"> 关于我</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['active']->value==7) {?>class="active"<?php }?>><a href="#" class="icon-th-list"> 栏目管理</a></li>
  </ul>
</div>
<?php }} ?>
