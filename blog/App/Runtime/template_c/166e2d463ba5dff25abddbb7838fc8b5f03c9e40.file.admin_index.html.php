<?php /* Smarty version Smarty-3.1.16, created on 2018-01-05 22:46:26
         compiled from ".\App\admin\View\Index\admin_index.html" */ ?>
<?php /*%%SmartyHeaderCode:219555a4f80eb49b258-65611801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '166e2d463ba5dff25abddbb7838fc8b5f03c9e40' => 
    array (
      0 => '.\\App\\admin\\View\\Index\\admin_index.html',
      1 => 1515163506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219555a4f80eb49b258-65611801',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a4f80eb4e7ea6_84875628',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a4f80eb4e7ea6_84875628')) {function content_5a4f80eb4e7ea6_84875628($_smarty_tpl) {?><!DOCTYPE html>
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
</div>
        <div class="admin-bread">
            <span>您好，admin，欢迎您的光临。</span>
            <ul class="bread">
                <li><a href="index.html" class="icon-home"> 开始</a></li>
                <li>后台首页</li>
            </ul>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ('../common/menu.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('active'=>1,'sub'=>1001), 0);?>


<div class="admin">
	<div class="line-big">
    	<div class="xm3">
        	<div class="panel border-back">
            	<div class="panel-body text-center">
                	<img src="/public/admin/images/face.jpg" width="120" class="radius-circle" /><br />
                    <?php echo $_SESSION['userInfo']['a_name'];?>

                </div>
                <div class="panel-foot bg-back border-back">您好，<?php echo $_SESSION['userInfo']['a_name'];?>
,上次登录IP为<?php echo $_SESSION['userInfo']['a_last_ip'];?>
，上次登录为<?php echo $_SESSION['userInfo']['a_last_time'];?>
。</div>
            </div>
            <br />
        	<div class="panel">
            	<div class="panel-head"><strong>站点统计</strong></div>
                <ul class="list-group">
                	<li><span class="float-right badge bg-red">88</span><span class="icon-user"></span> 会员</li>
                    <li><span class="float-right badge bg-main">828</span><span class="icon-file"></span> 文件</li>
                    <li><span class="float-right badge bg-main">828</span><span class="icon-shopping-cart"></span> 订单</li>
                    <li><span class="float-right badge bg-main">828</span><span class="icon-file-text"></span> 内容</li>
                    <li><span class="float-right badge bg-main">828</span><span class="icon-database"></span> 数据库</li>
                </ul>
            </div>
            <br />
        </div>
        <div class="xm9">
        	<div class="alert alert-yellow"><span class="close"></span><strong>注意：</strong>您有5条未读信息，<a href="#">点击查看</a>。</div>
            <div class="alert">
                <h4>拼图前端框架介绍</h4>
                <p class="text-gray padding-top">拼图是优秀的响应式前端CSS框架，国内前端框架先驱及领导者，自动适应手机、平板、电脑等设备，让前端开发像游戏般快乐、简单、灵活、便捷。</p>
            	<a target="_blank" class="button bg-dot icon-code" href="#"> 下载示例代码</a> 
            	<a target="_blank" class="button bg-main icon-download" href="#"> 下载拼图框架</a> 
            	<a target="_blank" class="button border-main icon-file" href="#"> 拼图使用教程</a>
            </div>
            <div class="panel">
            	<div class="panel-head"><strong>系统信息</strong></div>
                <table class="table">
                	<tr><th colspan="2">服务器信息</th><th colspan="2">系统信息</th></tr>
                    <tr><td width="110" align="right">操作系统：</td><td>Windows 2008</td><td width="90" align="right">系统开发：</td><td><a href="#" target="_blank">拼图前端框架</a></td></tr>
                    <tr><td align="right">Web服务器：</td><td>Apache</td><td align="right">主页：</td><td><a href="#" target="_blank">#</a></td></tr>
                    <tr><td align="right">程序语言：</td><td>PHP</td><td align="right">演示：</td><td><a href="#" target="_blank">http://demo.pintuer.com</a></td></tr>
                    <tr><td align="right">数据库：</td><td>MySQL</td><td align="right">群交流：</td><td><a href="http://shang.qq.com/wpa/qunwpa?idkey=a08e4d729d15d32cec493212f7672a6a312c7e59884a959c47ae7a846c3fadc1" target="_blank">201916085</a> (点击加入)</td></tr>
                </table>
            </div>
        </div>
    </div>
    <p class="text-right text-gray">基于<a class="text-gray" target="_blank" href="#">拼图前端框架</a>构建   来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
    
    <div class="clearfix text-center">
    	<a class="button button-big bg-main badge-corner" href="#" target="_blank">拼图最美中文后台-后翘<span class="badge bg-red">会员</span></a>
        <br /><br />
        <a href="#" target="_blank"><img src="/public/admin/images/index.jpg" class="img-responsive" alt="会员版-登录" /></a><br />
        <a href="#" target="_blank"><img src="/public/admin/images/login.jpg" class="img-responsive" alt="会员版-首页" /></a>
    </div>
    <br />
</div>


</body>
</html><?php }} ?>
