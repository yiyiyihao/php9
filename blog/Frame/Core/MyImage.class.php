<?php
/**
 * 图片处理类，用于生成缩略图片水印
 */
namespace Core;
class MyImage {
    
   public function thumber($dw,$dh,$src,$path){
		//用户图片

		$infoSrc = getimagesize($src);
		//获取用于创建logo图片画布的函数
			$type = $infoSrc['mime'];
			switch($type){
				case 'image/png':
					$imgSrc = imagecreatefrompng($src);
					break;
				case 'image/jpeg':
					$imgSrc = imagecreatefromjpeg($src);
					break;
				case 'image/jpg':
					$imgSrc = imagecreatefromjpeg($src);
					break;
				case 'image/gif':
					$imgSrc = imagecreatefromgif($src);
					break;
			}

		$sw = $infoSrc[0];
		$sh = $infoSrc[1];

		$imgDest = imagecreatetruecolor($dw,$dh);
		//填充画布
		$bg = imagecolorallocate($imgDest, 250,250,250);
		imagefill($imgDest,0,0,$bg);

		$fh = $dh;
		$fw=$sw/$sh * $fh;
		if($fw >$dw){
			$fw = $dw;
			$fh = $sh/$sw * $fw;
		}

		$posx = ($dw-$fw)/2;
		$posy = ($dh-$fh)/2;

		imagecopyresampled($imgDest,$imgSrc,$posx,$posy,0,0,$fw,$fh,$sw,$sh);

		//header('Content-type:image/jpeg');

		$saveName = 'thumber_'. basename($src);			//thumber_201711081156564x.jpg
													//'./uploads/images/201711081156564x.jpg',
		$savePath = $path.'/'.$saveName;			//'./uploads/thumber/thumber_201711081156564x.jpg'

		imagejpeg($imgDest,$savePath);
		return $saveName;
	}

	//设计者
	public function water($dest,$src,$pos,$op,$path){

		//获取用户图片的信息
		$infoDest = getimagesize($dest);
		//获取logo图片的信息
		$infoSrc = getimagesize($src);

		//获取用于创建用户图片画布的函数
		$type = $infoDest['mime'];
		switch($type){
			case 'image/png':
				$imgDest = imagecreatefrompng($dest);
				break;
			case 'image/jpeg':
				$imgDest = imagecreatefromjpeg($dest);
				break;
			case 'image/jpg':
				$imgDest = imagecreatefromjpeg($dest);
				break;
			case 'image/gif':
				$imgDest = imagecreatefromgif($dest);
				break;
		}

		//获取用于创建logo图片画布的函数
		$type = $infoSrc['mime'];
		switch($type){
			case 'image/png':
				$imgSrc = imagecreatefrompng($src);
				break;
			case 'image/jpeg':
				$imgSrc = imagecreatefromjpeg($src);
				break;
			case 'image/jpg':
				$imgSrc = imagecreatefromjpeg($src);
				break;
			case 'image/gif':
				$imgSrc = imagecreatefromgif($src);
				break;
		}

		switch($pos){
			case 1:
				$posx = 0;
				$posy = 0;
				break;
			case 2:
				$posx = $infoDest[0] - $infoSrc[0];
				$posy = 0;
				break;
			case 3:
				$posx = 0;
				$posy = $infoDest[1] - $infoSrc[1];
				break;
			case 4:
				$posx = $infoDest[0] - $infoSrc[0];
				$posy = $infoDest[1] - $infoSrc[1];
				break;
			case 5:
				$posx = ($infoDest[0] - $infoSrc[0])/2;
				$posy = ($infoDest[1] - $infoSrc[1])/2;
				break;
		}

		imagecopymerge($imgDest,$imgSrc,$posx,$posy,0,0,$infoSrc[0],$infoSrc[1],$op);

		$saveName = 'water_'. basename($dest);
		$savePath = $path.'/'.$saveName;

		//header('content-type:image/jpeg');
		imagepng($imgDest,$savePath);
		return $saveName;
	}

}