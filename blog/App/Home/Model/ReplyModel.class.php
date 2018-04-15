<?php
namespace Model;
use Core\Model;


class ReplyModel extends Model{
	public function getkeyword($id){
		$sql = "select t_name from tag where id in (select t_id from art_art where a_id=$id)";
		return $this ->mypdo ->getRow($sql);
	}
	public function getAssocArt($id){ //print_r($id);exit;
		$sql = "select * from article where a_id in (select a_id from art_art where t_id in (select t_id from art_art where t_id in (select t_id from art_art where a_id=$id) )) and a_id !=$id"; //echo $sql;exit;
		return $this -> mypdo ->getRow($sql);
	}
	public function store($data){
		extract($data);
		$sql = "insert into reply(r_content,r_time,u_id,a_id,r_pid)values('$r_content',$r_time,$u_id,$a_id,$r_pid)";
		return  $this -> mypdo ->doExec($sql);//echo $return;exit;
	}
	public function getReply($id){
		$sql = "select * from reply left join user on reply.u_id=user.id where a_id=$id";
		$arr = $this -> mypdo -> getRow($sql);
		$return = $this -> getTree($arr);
		return $return;
	}
	public function getTree($arr,$id=0){
		static $tree=[];
		foreach ($arr as $v) {
			if($v['r_pid']==$id){
				$tree[]=$v;
				$this ->getTree($arr,$v['r_id']);
			}
		}
		return $tree;
	}
}
