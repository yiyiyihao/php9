<?php /* Smarty version Smarty-3.1.16, created on 2018-01-07 16:35:36
         compiled from ".\App\admin\View\category\modify.html" */ ?>
<?php /*%%SmartyHeaderCode:28475a5069aa0d8428-52465687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f34dee8019364eb68143eab3df326feefef6a3c' => 
    array (
      0 => '.\\App\\admin\\View\\category\\modify.html',
      1 => 1515300800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28475a5069aa0d8428-52465687',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a5069aa11ff57_52767977',
  'variables' => 
  array (
    'cate' => 0,
    'cates' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a5069aa11ff57_52767977')) {function content_5a5069aa11ff57_52767977($_smarty_tpl) {?><!DOCTYPE html>
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


  <?php echo $_smarty_tpl->getSubTemplate ('../common/menu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('active'=>2,'sub'=>2002), 0);?>




    <div class="admin-bread"> 
    <span>您好，admin，欢迎您的光临。</span>
      <ul class="bread">
        <li><a href="index.html" class="icon-home"> 开始</a></li>
        <li><a href="system.html">类别管理</a></li>
        <li>修改分类</li>
      </ul>
    </div>
  </div>
</div>
<div class="admin">
  <div class="tab">
    <div class="tab-head"> <strong>分类管理</strong>
      <ul class="tab-nav">
        <li class="active"><a href="#tab-set">修改分类</a></li>
      </ul>
    </div>
    <div class="tab-body"> <br />
      <div class="tab-panel active" id="tab-set">
        <form method="post" class="form-x" action="index.php">
          <input type="hidden" name = "g" value="admin">                                       
          <input type="hidden" name = "c" value="category">                                       
          <input type="hidden" name = "a" value="update">                                       
          <input type="hidden" name = "c_id" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['c_id'];?>
">                                       
          <div class="form-group">
            <div class="label">
              <label for="cname">分类名称</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="cname" name="cname" size="50" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['c_name'];?>
" data-validate="required:请填写类别名称" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="pid">所属分类</label>
            </div>
            <div class="field">
              <select class="input" id="pid" name="pid" style="width:20%">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['c_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['cate']->value['c_pid']==$_smarty_tpl->tpl_vars['v']->value['c_id']) {?>selected<?php }?>><?php echo str_repeat('---',$_smarty_tpl->tpl_vars['v']->value['lv']);?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['c_name'];?>
</option>
                <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="cdesc">描述</label>
            </div>
            <div class="field">
              <textarea class="input" name="cdesc" id="cdesc" rows="5" cols="50"  data-validate="required:请填写分类描述"><?php echo $_smarty_tpl->tpl_vars['cate']->value['c_desc'];?>
</textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="csort">排序</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="csort" name="csort" size="50" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['c_sort'];?>
" data-validate="required:请填写分类排序" />
            </div>
          </div>
          <div class="form-button">
            <button class="button bg-main" type="submit">提交</button>
          </div>
        </form>
      </div>
      <div class="tab-panel" id="tab-email">邮件设置</div>
      <div class="tab-panel" id="tab-upload">上传设置</div>
      <div class="tab-panel" id="tab-visit">访问限制</div>
    </div>
  </div>
  <p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="#">拼图前端框架</a>构建</p>
</div>
</body>
</html>



<?php }} ?>
