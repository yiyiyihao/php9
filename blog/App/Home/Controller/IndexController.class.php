<?php
namespace Controller;
use Core\Controller;
use Model\articleModel;


class IndexController extends Controller{ 
	function index(){
		$art =new ArticleModel();
		$recommend = $art -> getRecommend();
		$this -> view -> assign('recommend',$recommend);
		$this -> display('index.html');
	}
}