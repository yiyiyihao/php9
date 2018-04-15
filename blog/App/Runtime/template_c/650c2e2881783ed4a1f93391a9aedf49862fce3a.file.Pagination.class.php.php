<?php /* Smarty version Smarty-3.1.16, created on 2018-01-07 17:48:43
         compiled from "Frame\Core\Pagination.class.php" */ ?>
<?php /*%%SmartyHeaderCode:95055a51ecfb713930-37930387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '650c2e2881783ed4a1f93391a9aedf49862fce3a' => 
    array (
      0 => 'Frame\\Core\\Pagination.class.php',
      1 => 1514539201,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '95055a51ecfb713930-37930387',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a51ecfb715960_70245845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a51ecfb715960_70245845')) {function content_5a51ecfb715960_70245845($_smarty_tpl) {?><<?php ?>?php
/**
 * 分页类
 */
namespace Core;
class Pagination{
    
    public static function getPageNum($curPage,$totalRows,$rowsPerPage,$url){
/*       $curPage=isset($_GET['curPage'])?$_GET['curPage']:1;

		$totalRows=182;
		$rowsPerPage = 10;*/
		$totalPages = ceil($totalRows/$rowsPerPage);

		if($curPage<=5){
			$begin=1;
			$end=$begin+9>$totalPages?$totalPages:$begin+9;
		}else{
			$end = $curPage+5>$totalPages?$totalPages:$curPage+5;
			$begin = $end - 9<1?1:$end - 9;
		}

		$pageNumString='';

		$prev = $curPage -1<1?1:$curPage -1;
		$pageNumString .="<a href='$url&curPage=$prev'>上一页</a>";

		for($i=$begin;$i<=$end;$i++){
			if($i==$curPage){
				$pageNumString .= "<a href='$url&curPage=$i'><font color='red'>$i</font></a>&nbsp;&nbsp;";
			}else{
				$pageNumString .= "<a href='$url&curPage=$i'>$i</a>&nbsp;&nbsp;";
			}
			
		}
		$next = $curPage +1>$totalPages?$totalPages:$curPage +1;
		$pageNumString .="<a href='$url&curPage=$next'>下一页</a>";
		return $pageNumString;
    }
}<?php }} ?>
