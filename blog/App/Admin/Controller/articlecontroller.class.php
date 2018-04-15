<?php
namespace Controller;
use Core\commonController;
use Model\CategoryModel;
use Model\ArticleModel;
use Core\FileUpload;
use Core\Pagination;
use Core\MyImage;
use Model\ArtArtModel;

class articlecontroller extends commonController{
	public function recommend(){
 		$id = isset($_GET['id'])?$_GET['id']:0; 
 		$curPage = isset($_GET['curPage'])?$_GET['curPage']:1;
 		if(!$id){
 			$this ->error('非法操作','index.php?g=admin&c=article&a=index&curPage=$curPage');
 		}
		$recommend = new ArticleModel(); //
		$return = $recommend -> recommend($id);//echo $return;exit;
		header("Location:index.php?g=admin&c=article&a=index&curPage=$curPage");
	}
	public function index(){
		$art = new ArticleModel();
		$return = $art -> totalRows();
		$totalRows=$return['count(*)'];
		$curPage=isset($_GET['curPage'])?$_GET['curPage']:1;
		$rowsPerPage=$GLOBALS['config']['rowsPerPage'];
		$offset = ($curPage-1)*$rowsPerPage;
		$url='index.php?g=admin&c=article&a=index';
		$pagination = Pagination::getPageNum($curPage,$totalRows,$rowsPerPage,$url);
		$this -> view ->assign('page',$pagination);
		$this -> view ->assign('curPage',$curPage);


		

		$data = $art ->getAllArticle_1($offset,$rowsPerPage); //echo '<pre>';print_r($data);exit;
		$this -> view -> assign('article',$data);
		$this -> display('index.html');
	}
	public function add(){
		$cate = new CategoryModel();
		$data = $cate -> getAllCate();
		$this ->view -> assign('cate',$data);
		$this ->display('add.html');
	}
	public function store(){
		$tag=isset($_POST['tag'])?$_POST['tag']:'';
		$data['a_title']=isset($_POST['title'])?$_POST['title']:'';
		$data['c_id']=isset($_POST['cid'])?$_POST['cid']:0;
		$data['a_desc']=isset($_POST['desc'])?$_POST['desc']:'';
		$data['a_content']=isset($_POST['content'])?$_POST['content']:'';
		$data['a_time']=time();
		$data['a_click']=0;
		$data['a_like']=0;
		$data['a_comment']=0;
		$data['a_author']=$_SESSION['userInfo']['id'];

        if(is_uploaded_file($_FILES['MyFile']['tmp_name'])){
        $file = $_FILES['MyFile']; 
        $mime = $GLOBALS['config']['mime'];
        $maxsize = $GLOBALS['config']['maxsize'];
        $path = $GLOBALS['config']['image'];
        $fileupload = new FileUpload();
        $return = $fileupload ->uploads($file,$mime,$maxsize,$path);
        if(!is_numeric($return)){  
        	$data['a_img']=$return;

        	$t_w = $GLOBALS['config']['t_w'];
        	$t_h = $GLOBALS['config']['t_h'];
        	$path = $GLOBALS['config']['thumb'];
        	$src = $GLOBALS['config']['image'].'/'.$return;
        	$image = new MyImage();
        	$thumber = $image -> thumber($t_w,$t_h,$src,$path); 
        	if($thumber){
        		$data['a_thumber']=$thumber;
        	}
        }
        }else{
        	$data['a_img']='default_img.jpeg';
        	$data['a_thumber']='default_thumber.jpeg';
        }


		$art = new ArticleModel();
		if(!$tag){
	 			$this ->error('关键字不能为空','index.php?g=admin&c=article&a=add');
	 		}
		$return = $art -> store($data);
		if($return){

			$arttag = new ArtArtModel();
			$arr = explode(',', $tag);
			foreach($arr as $v){
				$t_id = $arttag -> storetag($v);
				$arttag -> storelink($t_id,$return);
	        }

			header("location:index.php?g=admin&c=article&a=index");
		}else{
			trigger_error();
			$this ->error('添加失败','index.php?g=admin&c=article&a=add');
		}
	}
	public function del(){ 
 		$id = isset($_GET['id'])?$_GET['id']:0; //var_dump($id);exit;
 		$curPage = isset($_GET['curPage'])?$_GET['curPage']:1;
 		if(!$id){
 			$this ->error('非法操作','index.php?g=admin&c=article&a=index');
 		}		
		$art = new ArticleModel();
		$return = $art ->del($id);
 		if(!$return){
 			$this ->error('删除失败','index.php?g=admin&c=article&a=index&curPage=$curPage');
 		}
 		header("location:index.php?g=admin&c=article&a=index&curPage=$curPage");
	}
	public function modify(){ 
 		$id = isset($_GET['id'])?$_GET['id']:0; 
 		$curPage = isset($_GET['curPage'])?$_GET['curPage']:1;
 		if(!$id){
 			$this ->error('非法操作','index.php?g=admin&c=article&a=index');
 		}
		$cate = new CategoryModel();
		$data = $cate -> getAllCate();
		$this ->view -> assign('cate',$data);		
		$art = new ArticleModel();
		$return = $art ->getartById($id);//print_r($return);exit;
		$this ->view ->assign('article',$return);
		$this ->view ->assign('curPage',$curPage);
		$this ->display('Modify.html');
	}
	public function modify_1(){
		$data['a_title']=isset($_POST['title'])?$_POST['title']:'';
		$data['c_id']=isset($_POST['cid'])?$_POST['cid']:0;
		$data['a_desc']=isset($_POST['desc'])?$_POST['desc']:'';
		$data['a_content']=isset($_POST['content'])?$_POST['content']:'';
		$data['a_id']=isset($_POST['id'])?$_POST['id']:'';
		$data['a_time']=time();
        $curPage = isset($_POST['curPage'])?$_POST['curPage']:1;
       
        if(is_uploaded_file($_FILES['MyFile']['tmp_name'])){
        $file = $_FILES['MyFile']; 
        $mime = $GLOBALS['config']['mime'];
        $maxsize = $GLOBALS['config']['maxsize'];
        $path = $GLOBALS['config']['image'];
        $fileupload = new FileUpload();
        $return = $fileupload ->uploads($file,$mime,$maxsize,$path);
        if(!is_numeric($return)){$data['a_img']=$return;}}else{$data['a_img']=$_POST['img'];}

		$art = new ArticleModel();
		$return = $art ->modify($data);
 		if($return){
 			header("location:index.php?g=admin&c=article&a=index&curPage=$curPage");
 		}else{
	 		$this ->error('修改失败',"index.php?g=admin&c=article&a=modify&id=$_POST[id]");
 		}		
	}

}


