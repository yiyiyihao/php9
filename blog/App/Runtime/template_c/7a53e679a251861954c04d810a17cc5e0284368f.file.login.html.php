<?php /* Smarty version Smarty-3.1.16, created on 2018-01-05 14:23:04
         compiled from ".\App\admin\View\Privilege\login.html" */ ?>
<?php /*%%SmartyHeaderCode:153135a4f19c814b6e1-04104610%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a53e679a251861954c04d810a17cc5e0284368f' => 
    array (
      0 => '.\\App\\admin\\View\\Privilege\\login.html',
      1 => 1515118231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153135a4f19c814b6e1-04104610',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a4f19c817ded3_58930511',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4f19c817ded3_58930511')) {function content_5a4f19c817ded3_58930511($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="viewport" content="width=device-width,initial-scale=1.0">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
/bootstrap/js/jquery-3.0.0.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['admin']->value;?>
/bootstrap/js/bootstrap.min.js"></script>
<style>
	body{
		background-color:#1D2024;
	}
	.login-container{
		width:375px;
	}
	.login-white{
		color:#fff;
	}
	.text-green{
		color:#69AA46;
	}
	.login-container .text-primary{
		color:#DD5A3F;
	}
	h1{
		font-family: Arial,sans-serif;
		font-size:32px;
	}
	.login-box{
		
		padding:6px;
		background-color:#394557;
	}
	.login-widget{
		background-color:#F7F7F7;
	}
	.widget-main{
		padding:16px 36px 16px;
	}
	.widget-main h4{
		font-size:19px;
		color:blue;
		border-bottom:1px solid #d5e3ef;
		line-height:28px;
		padding-bottom:4px;
		margin-bottom:16px;
	}
	.widget-form{

	}
	.line{
		margin-top:10px;
		text-align:center;
		position:relative;
		z-index: 1;
	}
	.line::before{
		content:"";
		border-top:1px dotted #a6c4db;
		position:absolute;
		left:0;right:0;
		display:block;
		top:50%;
		z-index:-1;
	}
	.line span{
		font-size:13px;
		background:#f7f7f7 none repeat scroll 0 0;
		padding:0 8px;
		color:#5090c1;
	}

	.login-foot{
		background:#5090C1;
		border-top:2px solid #597597;
	}
	.login-foot::after{
		content:" ";
		display:table;
	}

	.login-foot .left{
		padding:9px 0 11px;
	}

	.login-foot .left a{
		margin-left:11px;
		color:#fe9;
		text-shadow:1px 0 1px rgba(0,0,0,.25);
	}
	.login-foot .right a{
		margin-right:11px;
		color:#cf7;
		text-shadow:1px 0 1px rgba(0,0,0,.25);

	}

	.login-foot .right{
		padding:9px 0 11px;
	}
	
	.social{
		margin-top:20px;
		text-align:center;
	}
	.social a{
		width:34px; 
		height:34px;
		margin:0;
		padding:0;
		line-height:34px;
		border-radius:100%;
	}
	.social a i{
		font-size:32px;
	}
</style>
</head>
<body>
    <div class="container">
    	<div class="row">
    		<div class="col-sm-10 col-sm-offset-1">
				<div class="login-container center-block">
					<div>
						<h1 class="text-center">
							<i class="glyphicon glyphicon-leaf text-green"></i>
							<span class="text-primary">ItC</span>
							<span class="login-white">Application</span>
						</h1>
						<h4 class="text-info text-center">
							&copy; Itcast
						</h4>
					</div>

					<div class="login-box">
						<div class="login-widget">
							<div class="widget-main">
								<h4>
									<i class="glyphicon glyphicon-glass text-green"></i>
									Please Enter Your Information
								</h4>
								<form action="/index.php?g=Admin&c=Privilege

								&a=user_login_1" method="post">
									<fieldset>
										<div class="form-group has-feedback">
											<input class="form-control" type="text" name="u_name" id="uname" placeholder="Uername">
											<div class="form-control-feedback">
											<span style="color:#666;" class="glyphicon glyphicon-user"></span></div>
										</div>
										<div class="form-group has-feedback">
											<input class="form-control" type="password" name="u_pwd" id="upass" placeholder="Password" value="/index.php?g=admin&c=Privilege&a=Captcha" >
											<div class="form-control-feedback">
											<span style="color:#666;" class="glyphicon glyphicon-lock"></span></div>
										</div>
										<div class="clearfix">
										<div class="form-group has-feedback pull-left" style="width:180px">
											<input class="form-control" type="text" name="verify" id="verify" placeholder="Verify">
											<div class="form-control-feedback">
												<span style="color:#666;" class="glyphicon glyphicon-leaf"></span>
											</div>
										</div>
											<img class="pull-right img-rounded" style="border:1px solid #ccc" width="100" src="/index.php?g=admin&c=Privilege&a=Captcha" onclick="this.src='/index.php?g=admin&c=Privilege&a=Captcha&'+Math.random()" alt="">
										</div>
										<div class="clearfix">
											<label for="remember" style="display:inline-block;margin-top: 6px;">
												<input style="position:absolute;" type="checkbox" name="remember" value=1 >
												<span style="color:#666;margin-left:16px;">记住密码</span>
											</label>
											<button class="pull-right btn btn-primary btn-sm" type="submit">
												<i class="glyphicon glyphicon-log-in">&nbsp;</i>
												登入
											</button>
										</div>
									</fieldset>
								</form>
								<div class="line">
									<span>Or According Bellow</span>
								</div>
								<div class="social">
									<a href="#" class="btn btn-primary">
										<i class="glyphicon glyphicon-grain"></i>
									</a>
									<a href="#" class="btn btn-danger">
										<i class="glyphicon glyphicon-fire"></i>
									</a>
									<a href="#" class="btn btn-info">
										<i class="glyphicon glyphicon-heart"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="login-foot clearfix">
							<div class="pull-left left">
								<a href="#">
									<i class="glyphicon glyphicon-arrow-left"></i>
									I forgot my password
								</a>
							</div>
							<div class="pull-right right">
								<a href="#">
									I want to register
									<i class="glyphicon glyphicon-arrow-right"></i>
								</a>
							</div>
						</div>
					</div>
					
				</div>
    		</div>
    	</div>
	</div>
</body>
</html><?php }} ?>
