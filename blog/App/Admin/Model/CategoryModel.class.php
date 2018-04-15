<?php
namespace Model;
use Core\Model;

class CategoryModel extends Model{
	public function update($data){
		extract($data);
		$sql = "update category set c_name='$c_name',c_pid='$c_pid',c_desc='$c_desc',c_sort='$c_sort'where c_id='$c_id' ";
		return $this -> mypdo ->doExec($sql);
	}
	public function getCateById($c_id){
		$sql = "select * from category where c_id='$c_id'";
		return $this ->mypdo -> getOne($sql);
	}
	public function delById($ids){
		$sql = "delete from category where c_id in ($ids)";
		return $this -> mypdo ->doExec($sql);
	}
	public function store($data){
		extract($data);
		$sql="insert into category(c_id,c_name,c_desc,c_sort,c_time,c_pid)values(default,'$c_name','$c_desc','$c_sort','$c_time','$c_pid')";
		return $this->mypdo->doExec($sql);
	}
	public function getAllCate($c_pid=0,$exclude=null){
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

}



