<?php
namespace Controller;
use Core\Controller;
use Core\Captcha;
use Model\PrivilegeModel;
class Privilegecontroller extends Controller{
        public function user_login(){
                $pwd = isset($_COOKIE['remember'])?$_COOKIE['remember']:'';
                $name = isset($_COOKIE['remember_name'])?$_COOKIE['remember_name']:'';
                $this -> view -> assign('pwd',$pwd);
                $this -> view -> assign('name',$name);
                $this -> view ->assign('admin',DIR_ADMIN);
                $this ->display('login.html');
        }
        public function user_login_1(){    //print_r($_REQUEST);die;
                $user_name=isset($_REQUEST['u_name'])?$_REQUEST['u_name']:''; 
                $user_pwd=isset($_REQUEST['u_pwd'])?$_REQUEST['u_pwd']:'';
                $verify=isset($_REQUEST['verify'])?$_REQUEST['verify']:'';
                $remember=isset($_REQUEST['remember'])?$_REQUEST['remember']:0;
                $session = $_SESSION['code'];

                if(empty($user_name)){
                        $mess='用户名不能为空';
                        $url='/index.php?g=Admin&c=Privilege&a=user_login';
                        $second=2;
                        $this->success($mess,$url,$second); 
                        exit;                             
                }
                if(empty($user_pwd)){
                        $mess='密码不能为空';
                        $url='/index.php?g=Admin&c=Privilege&a=user_login';
                        $second=2;
                        $this->success($mess,$url,$second); 
                        exit;                             
                }                
                if(strtolower($verify)!=strtolower($session)){
                        $mess='验证码不正确';
                        $url='/index.php?g=Admin&c=Privilege&a=user_login';
                        $second=2;
                        $this->error($mess,$url,$second); 
                }

                $Privilege = new PrivilegeModel();
                $return = $Privilege ->user_login($user_name,$user_pwd);//print_r($return);die;
                if($return){
                        if($remember==1){
                                setcookie('remember',$user_pwd,time()+100000);
                                setcookie('remember_name',$user_name,time()+100000);
                        }
                        $_SESSION['userInfo']=$return;
                        $return = $Privilege -> updateInfo($return['id']);//print_r($return);die;
                        $mess='登入成功。。。';
                        $url='/index.php?g=Admin&c=Index&a=index';
                        $second=2;
                        $this->success($mess,$url,$second);
                }else{
                        $mess='登入失败，没注册先注册。';
                        $url='/index.php?g=Admin&c=Privilege&a=user_login';
                        $second=2;
                        $this->error($mess,$url,$second);
                }
        }
        public function Captcha(){
                $w = $GLOBALS['config']['width'];
                $h = $GLOBALS['config']['hight'];
                $len = $GLOBALS['config']['len'];
                new Captcha($w,$h,$len); 
        }
        public function logout(){
                setcookie('remember','');
                session_destroy();
                        $mess='已注销';
                        $url='/index.php?g=Admin&c=Privilege&a=user_login';
                        $second=1;
                        $this->error($mess,$url,$second);
        }
}