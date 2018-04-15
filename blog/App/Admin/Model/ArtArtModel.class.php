<?php
namespace Model;
use Core\Model;

class ArtArtModel extends Model{
	public function storetag($v){
		$sql = "insert into tag(t_name) values('$v') on duplicate key update t_flag=t_flag+1";
		$this -> mypdo ->doExec($sql);
		return $this -> mypdo -> lastId();
	}
	public function storelink($t_id,$return){
		$sql = "insert into art_art(a_id,t_id) values($return,'$t_id')";
		$this -> mypdo -> doExec($sql);
	}
}