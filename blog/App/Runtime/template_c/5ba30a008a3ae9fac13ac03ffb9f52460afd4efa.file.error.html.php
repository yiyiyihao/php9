<?php /* Smarty version Smarty-3.1.16, created on 2018-01-05 19:07:12
         compiled from ".\frame\Common\error.html" */ ?>
<?php /*%%SmartyHeaderCode:116735a4f5c60529453-85318976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ba30a008a3ae9fac13ac03ffb9f52460afd4efa' => 
    array (
      0 => '.\\frame\\Common\\error.html',
      1 => 1514968647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116735a4f5c60529453-85318976',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'second' => 0,
    'url' => 0,
    'mess' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a4f5c60675c34_11312053',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4f5c60675c34_11312053')) {function content_5a4f5c60675c34_11312053($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['second']->value;?>
;url=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"/>
	<title>网页标题</title>
	<meta name="keywords" content="关键字列表" />
	<meta name="description" content="网页描述" />
	<link rel="stylesheet" type="text/css" href="" />
	<style type="text/css">

		*{margin:0;padding:0;}
		#box{
			width:300px;
			height:230px;
			border-radius:5px 5px 10px 10px;
			background:#efefef;
			margin:100px auto;
			transform:rotate(-30deg);
			box-shadow:3px 5px 5px 0px rgba(0,0,0,.5);
		}
		#box h4{
			background:#ffaa00 url(images/icn_alert_info.png) no-repeat 10px 10px;
			border-radius:5px 5px 0 0;
			padding:10px 0;
			width:100%;
			letter-spacing:10px;
			font-size:13px;
			color:#333;
			text-indent:40px;
		}
		#mess{
			width:300px;
			height:200px;
			line-height:200px;
			text-align:center;
			letter-spacing:5px;
			font-size:13px;
			color:#333;
		}

	</style>
	<script type="text/javascript">
		var i=<?php echo $_smarty_tpl->tpl_vars['second']->value;?>
;
		window.onload=function(){
			var objSecond = document.getElementById("second");;
			setInterval(startMove,1000);
			function startMove(){
				i--;
				objSecond.innerHTML=i;
			}
		}
	</script>
</head>
<body>
	<div id="box">
		<h4>系统提示信息...</h4>
		<div id="mess">
			<?php echo $_smarty_tpl->tpl_vars['mess']->value;?>

			<span id="second"><?php echo $_smarty_tpl->tpl_vars['second']->value;?>
</span>
		</div>
	</div>
</body>
</html>
<?php }} ?>
