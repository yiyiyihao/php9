<?php
namespace Controller;
use Core\Controller;
use Model\PrivilegeModel;

class Privilegecontroller extends Controller{
	public function register(){
		$aid = isset($_GET['aid'])?$_GET['aid']:1;
		$u_name = isset($_POST['u_name'])?$_POST['u_name']:'';
	    $u_pwd = isset($_POST['u_pwd'])?$_POST['u_pwd']:'';
	    $u_pwd2 = isset($_POST['u_pwd2'])?$_POST['u_pwd2']:'';
	    $u_profile = isset($_POST['u_profile'])?$_POST['u_profile']:'';

	    if($u_pwd!=$u_pwd2){
	    	$this ->error('密码确认密码不一致','index.php?g=home&c=Privilege&a=regUi&aid='.$aid);
	    }
	    if(empty($u_name) || empty($u_pwd)){
	    	$this ->error('用户名，密码不能为空','index.php?g=home&c=Privilege&a=regUi&aid='.$aid);
	    }	

	    $pri = new PrivilegeModel();
	    $reg = $pri -> register($u_name,md5($u_pwd));//print_r($reg);exit;
	    if($reg){
	    	$this ->success('注册成功','index.php?g=home&c=Privilege&a=user_login&aid='.$aid);
	    }else{
	    	$this ->error('注册失败','index.php?g=home&c=Privilege&a=regUi&aid='.$aid);
	    }	 
	}
	public function regUi(){
		$aid = isset($_GET['aid'])?$_GET['aid']:1;
		$this -> view -> assign('aid',$aid);
		$this -> display('user_regUi.html');
	}
	public function user_login(){
		//var_dump($_GET);exit;
        $pwd = isset($_COOKIE['remember'])?$_COOKIE['remember']:'';
        $name = isset($_COOKIE['remember_name'])?$_COOKIE['remember_name']:'';
		$aid = isset($_GET['aid'])?$_GET['aid']:0; 
		if(!$aid){
			$this ->error('非法操作','index.php?g=home&c=index&a=index');
		}
		$this -> view ->assign('name',$name);
		$this -> view ->assign('pwd',$pwd);
		$this -> view -> assign('aid',$aid);
		$this ->display('user_login.html');
	}
	public function user_login_1(){//print_r($_REQUEST);exit;
		$user_name=isset($_REQUEST['u_name'])?$_REQUEST['u_name']:''; 
		$user_pwd=isset($_REQUEST['u_pwd'])?$_REQUEST['u_pwd']:'';
		$aid = isset($_REQUEST['aid'])?$_REQUEST['aid']:'';
		$remember=isset($_REQUEST['remember'])?$_REQUEST['remember']:0;
		$privilege = new PrivilegeModel();
		$return = $privilege ->user_login($user_name,md5($user_pwd));//print_r($return);die;
		if($return){//print_r($aid);exit;
			if($remember==1){
	            setcookie('remember',$user_pwd,time()+100000);
                setcookie('remember_name',$user_name,time()+100000);
			}
			$_SESSION['userinfo']=$return; //echo $_SESSION['userinfo']['ok'];exit;
			$mess='登入成功。。。';
			$url="/index.php?g=Home&c=article&a=article&a_id=$aid";
			$second=1;//print_r($SESSION['user11']);die;
			$this->success($mess,$url,$second);
		}else{
			$mess='登入失败，没注册先注册。';
			$url='index.php?g=Home&c=Privilege&a=regUi&a_id=$aid';
			$second=1;
			$this->success($mess,$url,$second);
		}
	}
}