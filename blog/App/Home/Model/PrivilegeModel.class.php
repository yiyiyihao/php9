<?php
namespace Model;
use Core\Model;
class PrivilegeModel extends Model{
	public function register($u_name,$u_pwd){
		$sql = "insert into user(user_name,user_pwd)values('$u_name','$u_pwd')";
		return $this -> mypdo -> doExec($sql);
	}
	public function user_login($user_name,$user_pwd){ 
        $sql = "select * from user where user_name='$user_name' and user_pwd='$user_pwd'";
        return $this ->mypdo->getOne($sql); //print_r($return);die;
	}
}