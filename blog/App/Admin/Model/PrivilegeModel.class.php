<?php
namespace Model;
use Core\MyPDO;
use Core\Model;
class PrivilegeModel extends Model{
	public function user_login($user_name,$user_pwd){         
         $sql = "select * from admin where a_name='$user_name' and a_pwd=md5('$user_pwd')";
         return $this->mypdo ->getOne($sql);
	}
	public function updateInfo($id){
		$ip = $_SERVER['REMOTE_ADDR'];
		$time = date('Y-m-d H:i:s');
		$sql = "update admin set a_last_ip='$ip',a_last_time='$time' where id=$id";
		return $this ->mypdo->doExec($sql);
	}
}