<?php
namespace Model;
use Core\Model;

class ArticleModel extends Model{
	public function updatecomment($id){
	$sql = "update article set a_comment=a_comment+1 where a_id=$id";
	$this -> mypdo -> doExec($sql);
	}
	public function preart($id){
		$sql = "select * from article where a_id<$id order by a_id desc limit 1";
		return $this ->mypdo -> getOne($sql);
	}
	public function nextart($id){
		$sql = "select * from article where a_id>$id order by a_id asc limit 1";
		return $this ->mypdo -> getOne($sql);
	}	
	public function updateclick($id){
		$sql = "update article set a_click=a_click+1 where a_id=$id";
		return $this ->mypdo -> doExec($sql);
	}
	public function getArtById($id){
		$sql = "select * from article art left join admin adm on art.a_author=adm.id where a_id=$id";
		return $this -> mypdo -> getOne($sql);
	}
	public function totalRows($cat){
		$sql = "select count(*) from category left join article using (c_id) left join admin on article.a_author=admin.id  where article.c_id in ($cat)";
		return $this ->mypdo ->getOne($sql);
	}
	public function getcatearticle($cat,$offset,$rowsPerPage){
		$sql = "select * from category left join article using (c_id) left join admin on article.a_author=admin.id  where article.c_id in ($cat) limit $offset,$rowsPerPage";
		return $this -> mypdo -> getRow($sql);
	}
	public function getCategory($c_pid=0,$exclude=null){
		$sql = "select * from category";
		$data = $this -> mypdo ->getRow($sql);
		$tree = $this ->getTree($data,$c_pid,0,$exclude);
		return $tree;
	}
	public function getTree($arr,$c_pid=0,$lv=0,$exclude=null){
		static $tree = [];
		foreach($arr as $v){
			if($v['c_pid']==$c_pid){
				$v['lv']=$lv;
				if($v['c_id']==$exclude){
					continue;
				}
				$tree[]=$v;
				$this -> getTree($arr,$v['c_id'],$lv+1,$exclude);
			}
		}
		return $tree;
	}

	public function getRecommend(){
		$sql = "select * from category left join article using (c_id) left join admin on article.a_author=admin.id  where a_recommend=1 limit 6";//echo 123;exit;
		return $this ->mypdo -> getRow($sql);
	}
}