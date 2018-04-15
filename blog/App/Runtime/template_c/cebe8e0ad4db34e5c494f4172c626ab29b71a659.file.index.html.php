<?php /* Smarty version Smarty-3.1.16, created on 2018-01-06 14:14:45
         compiled from ".\App\admin\View\category\index.html" */ ?>
<?php /*%%SmartyHeaderCode:18615a4f8342a1ea29-02499619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cebe8e0ad4db34e5c494f4172c626ab29b71a659' => 
    array (
      0 => '.\\App\\admin\\View\\category\\index.html',
      1 => 1515218812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18615a4f8342a1ea29-02499619',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a4f8342a46009_69099353',
  'variables' => 
  array (
    'cate' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4f8342a46009_69099353')) {function content_5a4f8342a46009_69099353($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\blog\\Frame\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>拼图后台管理-后台管理</title>
    <link rel="stylesheet" href="/public/admin/css/pintuer.css">
    <link rel="stylesheet" href="/public/admin/css/admin.css">
    <script src="/public/admin/js/jquery.js"></script>
    <script src="/public/admin/js/pintuer.js"></script>
    <script src="/public/admin/js/respond.js"></script>
    <script src="/public/admin/js/admin.js"></script>
    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
    <link href="/favicon.ico" rel="bookmark icon" />
</head>

<body>
<div class="lefter">
    <div class="logo"><a href="#" target="_blank"><img src="/public/admin/images/logo.png" alt="后台管理系统" /></a></div>
</div>


<?php echo $_smarty_tpl->getSubTemplate ('../common/menu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('active'=>2,'sub'=>2001), 0);?>

        <div class="admin-bread">
            <span>您好，admin，欢迎您的光临。</span>
            <ul class="bread">
                <li><a href="index.html" class="icon-home"> 开始</a></li>
                <li><a href="content.html">类别管理</a></li>
                <li>所有类别</li>
            </ul>
        </div>


    </div>
</div>

<div class="admin">
	<form method="post">
    <div class="panel admin-panel">
    	<div class="panel-head"><strong>内容列表</strong></div>
        <div class="padding border-bottom">
            <input type="button" class="button button-small border-green" value="添加分类" onclick="location.href='index.php?g=admin&c=category&a=add'" />
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th width="120">类别</th>
                    <th width="*">描述</th>
                    <th width="200">时间</th>
                    <th width="200">排序</th>
                    <th width="100">操作</th>
                </tr>
            </thead>
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <tr>
                    <td><?php echo str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;',$_smarty_tpl->tpl_vars['item']->value['lv']);?>
<?php echo $_smarty_tpl->tpl_vars['item']->value['c_name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['c_desc'];?>
</td>
                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['c_time'],'Y-m-d H:i:s');?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['c_sort'];?>
</td>
                    <td>
                        <a class="button border-blue button-little" href="index.php?g=admin&c=category&a=modify&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['c_id'];?>
">修改</a> 
                        <a class="button border-yellow button-little" href="index.php?g=admin&c=category&a=del&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['c_id'];?>
" onclick="{if(confirm('确认删除?')){return true;}return false;}">删除</a>
                    </td>
                </tr>
            <?php } ?>    
            </tbody>
        </table>
    </div>
    </form>
    <br />
    <p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="#">拼图前端框架</a>构建</p>
</div>

</body>
</html><?php }} ?>
