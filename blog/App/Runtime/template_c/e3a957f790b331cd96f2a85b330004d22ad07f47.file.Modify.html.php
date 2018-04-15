<?php /* Smarty version Smarty-3.1.16, created on 2018-01-08 19:34:01
         compiled from ".\App\admin\View\article\Modify.html" */ ?>
<?php /*%%SmartyHeaderCode:298715a519402824ac6-15138364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3a957f790b331cd96f2a85b330004d22ad07f47' => 
    array (
      0 => '.\\App\\admin\\View\\article\\Modify.html',
      1 => 1515411230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298715a519402824ac6-15138364',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a519402863fd0_37982574',
  'variables' => 
  array (
    'article' => 0,
    'curPage' => 0,
    'cate' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a519402863fd0_37982574')) {function content_5a519402863fd0_37982574($_smarty_tpl) {?><!DOCTYPE html>
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
<script src="/public/admin/js/admin.js"></script>
<script src="/public/ueditor/ueditor.config.js"></script>
<script src="/public/ueditor/ueditor.all.min.js"></script>
<link type="image/x-icon" href="/favicon.ico" rel="shortcut icon" />
<link href="/favicon.ico" rel="bookmark icon" />
</head>

<body>
<div class="lefter">
  <div class="logo"><a href="#" target="_blank"><img src="/public/admin/images/logo.png" alt="后台管理系统" /></a></div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('../common/menu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('active'=>3,'sub'=>3002), 0);?>



    <div class="admin-bread"> <span>您好，admin，欢迎您的光临。</span>
      <ul class="bread">
        <li><a href="index.html" class="icon-home"> 开始</a></li>
        <li><a href="system.html">文章管理</a></li>
        <li>修改文章</li>
      </ul>
    </div>
  </div>
</div>
<div class="admin">
  <div class="tab">
    <div class="tab-head"> <strong>文章管理</strong>
      <ul class="tab-nav">
        <li class="active"><a href="#tab-set">修改文章</a></li>
      </ul>
    </div>
    <div class="tab-body"> <br />
      <div class="tab-panel active" id="tab-set">
        <form method="post" enctype="multipart/form-data" class="form-x" action="index.php">
        <input type="hidden" name="g" value="admin">
        <input type="hidden" name="c" value="article">
        <input type="hidden" name="a" value="Modify_1">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['a_id'];?>
" >
        <input type="hidden" name="img" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['a_img'];?>
" >
        <input type="hidden" name='curPage' value='<?php echo $_smarty_tpl->tpl_vars['curPage']->value;?>
'>
          <div class="form-group">
            <div class="label">
              <label for="title">文章标题</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="title" name="title" size="50" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['a_title'];?>
" data-validate="required:请填写你文章标题的名称" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="siteurl">所属分类</label>
            </div>
            <div class="field">
              <select class="input" name="cid" style="width:20%">
              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cate']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['c_id'];?>
"<?php if ($_smarty_tpl->tpl_vars['article']->value['c_id']==$_smarty_tpl->tpl_vars['v']->value['c_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['c_name'];?>
</option>
              <?php } ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="author">文章作者</label>
            </div>
            <div class="field">
              <input type="text" class="input" id="author" name="author"  value="<?php echo $_smarty_tpl->tpl_vars['article']->value['a_author'];?>
" data-validate="required:请填写分类排序" />
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="desc">文章描述</label>
            </div>
            <div class="field">
              <textarea class="input" name="desc" rows="5" cols="50"  data-validate="required:请填写分类描述"><?php echo $_smarty_tpl->tpl_vars['article']->value['a_desc'];?>
</textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="desc">文章内容</label>
            </div>
            <div class="field">
              <textarea id="ueditor" rows="5" name="content" cols="50"  data-validate="required:请填写文章描述"><?php echo $_smarty_tpl->tpl_vars['article']->value['a_content'];?>
</textarea>
              <script type="text/javascript">
                UE.getEditor('ueditor');
              </script>
            </div>
          </div>
          <div class="form-group">
            <div class="label">
              <label for="img">上传图片</label>
            </div>
            <div class="field">
              <input type="file" id="img" name="MyFile"/>
            </div>
          </div>
          <div class="form-button">
            <button class="button bg-main" type="submit">修改</button>
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
</html><?php }} ?>
