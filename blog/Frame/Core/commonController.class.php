<?php
namespace Core;
class commonController extends Controller{
           public function __construct(){
           	parent:: __construct();
           	if(!isset($_SESSION['userInfo'])){
                $mess='请先登入。。。';
                $url='/index.php?g=Admin&c=Privilege&a=user_login';
                $second=2;
                $this->error($mess,$url,$second);
           	}
           }
}