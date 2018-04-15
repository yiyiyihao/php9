<?php
/**
 * 分页类
 */
namespace Core;
class Pagination{
    
    public static function getPageNum($curPage,$totalRows,$rowsPerPage,$url){
  //      $curPage=isset($_GET['curPage'])?$_GET['curPage']:1;

		// $totalRows=182;
		// $rowsPerPage = 10;
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
		$pageNumString .="<a href='$url&curPage=$prev'>上一页</a>&nbsp;&nbsp;";

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
}
