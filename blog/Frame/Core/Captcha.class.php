<?php
/**
 * 验证码类
 */

namespace Core;
class Captcha{
	//设计者
	function __construct($w,$h,$len){

		//1、创建画布
/*		$w = 100;
		$h = 30;*/
		$img = imagecreatetruecolor($w, $h);

		//2、填充颜色
		$bg = imagecolorallocate($img,mt_rand(210,255),mt_rand(210,255),mt_rand(210,255));
		imagefill($img,0,0,$bg);


		//3、边框
		$border = imagecolorallocate($img,30,30,30);
		//imagerectangle($img,0,0,99,29,$border);

		//4、绘制随机字符串
		$code = $this -> getRand($len);

		//将随机产生的验证码字符串 保存到session中
		//session_start();
		$_SESSION['code'] = $code; 

		for($i=0;$i<$len;$i++){
			$color = imagecolorallocate($img,mt_rand(90,200),mt_rand(90,200),mt_rand(90,200));

			imagettftext($img,mt_rand(15,20),mt_rand(-15,15),20*($i+1),25,$color,DIR_FRAME.'/fonts/SIMLI.TTF',$code[$i]);
		}

		for($i=0;$i<4;$i++){
			$color = imagecolorallocate($img,mt_rand(90,200),mt_rand(90,200),mt_rand(90,200));
			imageline($img,mt_rand(0,100),mt_rand(0,30),mt_rand(0,100),mt_rand(0,30),$color);
		}

		//输出
		header('Content-type:image/jpeg');
// 
		imagejpeg($img);
	}

   
	//随机生成字符串
	function getRand($len){
		$charset = "abcdefghijkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ23456789";
		$code = '';
		for ($i=0; $i < $len; $i++) { 
			# code...
			$ind = mt_rand(0,55);
			$code .= $charset[$ind];
		}
		return $code;
	}

}

  //       $w = 100;
		// $h = 30;
		// new Captcha($w,$h,4);
