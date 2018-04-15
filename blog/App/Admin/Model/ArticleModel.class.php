<?php
namespace Model;
use Core\Model;

class ArticleModel extends Model{
	public function recommend($id){
		$sql = "update article set a_recommend = a_recommend^1 where a_id=$id";//print_r($sql);exit;
		return $this -> mypdo ->doExec($sql);
	}
	public function store($data){
		extract($data);
		$sql="insert into article(a_id,a_title,a_desc,a_content,a_author,a_time,a_click,a_like,a_comment,c_id,a_thumber,a_img,a_water) values(default,'$a_title','$a_desc','$a_content','$a_author','$a_time','$a_click','$a_like','$a_comment','$c_id','$a_thumber','$a_img','')";
	    $this -> mypdo ->doExec($sql);
	    return  $this -> mypdo ->lastId();		
	}
	public function getAllArticle(){
		$sql='select * from article';
		return $this ->mypdo ->getRow($sql);
	}
	public function del($id){
		$sql = "delete from article where a_id in ($id)";
		return $this ->mypdo ->doExec($sql);
	}
	public function getartById($id){
		$sql = "select * from article where a_id= $id";
		return $this ->mypdo ->getOne($sql);
	}
	public function modify($data){//print_r($data['a_img']);exit;
		extract($data);
		$sql = "update article set a_title='$a_title',c_id='$c_id',a_desc='$a_desc',a_content='$a_content',a_time='$a_time',a_img='$a_img' where a_id='$a_id'";
		return $this ->mypdo ->doExec($sql);
	}
	public function getAllArticle_1($offset,$rowsPerPage){
		$sql = "select * from article natural join category order by a_time desc limit $offset,$rowsPerPage";
		return $this ->mypdo ->getRow($sql);
	}
	public function totalRows(){
		$sql = "select count(*) from article";
		return $this ->mypdo ->getOne($sql);
	}
}


