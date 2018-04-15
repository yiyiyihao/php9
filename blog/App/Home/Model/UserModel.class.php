<?php
namespace Model;
use Core\Model;

class UserModel extends Model{
	public function updateok($uid){
		$sql = "update user set ok=ok^1 where id=$uid";
		return $this ->mypdo ->doExec($sql);
	}
}

