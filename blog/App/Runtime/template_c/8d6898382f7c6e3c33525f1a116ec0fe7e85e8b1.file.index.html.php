<?php /* Smarty version Smarty-3.1.16, created on 2018-01-08 21:06:03
         compiled from ".\App\admin\View\article\index.html" */ ?>
<?php /*%%SmartyHeaderCode:236895a50aba5552a83-21606412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d6898382f7c6e3c33525f1a116ec0fe7e85e8b1' => 
    array (
      0 => '.\\App\\admin\\View\\article\\index.html',
      1 => 1515416758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '236895a50aba5552a83-21606412',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a50aba5580804_13638292',
  'variables' => 
  array (
    'article' => 0,
    'v' => 0,
    'curPage' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a50aba5580804_13638292')) {function content_5a50aba5580804_13638292($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\blog\\Frame\\Smarty\\plugins\\modifier.date_format.php';
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
    <script>
        
    </script>
</head>

<body>
<div class="lefter">
    <div class="logo"><a href="#" target="_blank"><img src="/public/admin/images/logo.png" alt="后台管理系统" /></a></div>
</div>

    <?php echo $_smarty_tpl->getSubTemplate ('../common/menu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('active'=>3,'sub'=>3001), 0);?>


        <div class="admin-bread">
            <span>您好，admin，欢迎您的光临。</span>
            <ul class="bread">
                <li><a href="index.html" class="icon-home"> 开始</a></li>
                <li>文章管理</li>
            </ul>
        </div>
    </div>
</div>

<div class="admin">

    <div class="panel admin-panel">
    	<div class="panel-head"><strong>文章列表</strong></div>
        <div class="padding border-bottom">
            <input type="button" class="button button-small checkall" name="checkall" checkfor="id[]" value="全选" />
            <input type="button" id="btnAdd" class="button button-small border-green" value="添加文章" onclick="location.href='index.php?g=admin&c=article&a=add'" />
            <input type="submit" class="button button-small border-yellow" onclick="delMult()" value="批量删除" />
            <script type="text/javascript">
                function delMult(){
                    if(!confirm('确认删除么？')){
                        return false;
                    }
                    var objInput = document.getElementsByName('ids');
                    var ids = '';
                    for(var i=0;i<objInput.length;i++){
                        if(objInput[i].checked){
                            ids += objInput[i].value+',';
                        }
                    }
                    ids = ids.substring(0,(ids.length-1));
                    window.location.href='index.php?g=admin&c=article&a=del&id='+ids;
                }
            </script>
            <input type="button" class="button button-small border-blue" value="回收站" />
        </div>
        <table class="table table-hover">
        	<tr>
                <th width="45">选择</th>
                <th width="120">所属类别</th>
                <th width="*">文章标题</th>
                <th width="120">点击率</th>
                <th width="180">发布时间</th>
                <th width="180">操作</th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
            <tr>
                <td><input type="checkbox" name="ids" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['a_id'];?>
" /></td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['c_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['a_title'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['a_click'];?>
</td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['a_time'],'Y-m-d H:i:s');?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['v']->value['a_recommend']==0) {?>
                    <a class="button border-red button-little" href="index.php?g=admin&c=article&a=recommend&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['a_id'];?>
&curPage=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
">推荐</a>
                    <?php } else { ?>
                    <a class="button border-green button-little" href="index.php?g=admin&c=article&a=recommend&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['a_id'];?>
&curPage=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
">取消推荐</a>
                    <?php }?>
                    <a class="button border-blue button-little" href="index.php?g=admin&c=article&a=modify&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['a_id'];?>
&curPage=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
">修改</a> 
                    <a class="button border-yellow button-little" href="index.php?g=admin&c=article&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['a_id'];?>
&curPage=<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
" onclick="return confirm('确认删除么？');">删除</a>
                </td>
            </tr>
            <?php } ?>

        </table>            
    </div>

    <br />
                <p align="center"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</p>
    <p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="#">拼图前端框架</a>构建</p>
</div>

</body>
</html><?php }} ?>
