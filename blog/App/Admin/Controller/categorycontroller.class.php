<?php
namespace Controller;
use Core\commonController;
use Model\CategoryModel;
use Core\Pagination;

class categorycontroller extends commonController{
 	public function index(){
 		
 		$cat = new CategoryModel();
 		$data = $cat -> getAllCate();
 		$this -> view -> assign('cate',$data);
 		$this -> display('index.html');
 	}
 	public function add(){
 		$cat = new CategoryModel();
 		$data = $cat -> getAllCate();
 		$this -> view ->assign('cate',$data);
 		$this -> display('add.html');
 	}
 	public function store(){ 
 		$data['c_name']= isset($_POST['cname'])?$_POST['cname']:'';
 		$data['c_pid']= isset($_POST['pid'])?$_POST['pid']:0;
 		$data['c_desc']= isset($_POST['cdesc'])?$_POST['cdesc']:'';
 		$data['c_sort']= isset($_POST['csort'])?$_POST['csort']:0;
 		$data['c_time']= time();

 		$cat = new CategoryModel();
 		$return = $cat -> store($data);
 		if($return){
 			header('location:index.php?g=admin&c=category&a=index');
 			exit;
 		}else{
 			$this->error('分类添加失败','index.php?g=admin&c=category&a=add');
 		}
 }
 	public function del(){
 		$c_id = isset($_GET['id'])?$_GET['id']:0;
 		if(!$c_id){
 			$this ->error('非法操作','index.php?g=admin&c=category&a=index');
 		}
 		$cate = new CategoryModel();
 		$rows = $cate -> getAllCate($c_id);
 		$ids = [$c_id];
 		foreach($rows as $v){
 			$ids[]=$v['c_id'];
 		}
 		$ids = implode(',',$ids);
 		$return = $cate -> delById($ids);
 		if(!$return){
 			$this ->error('删除失败','index.php?g=admin&c=category&a=index');
 		}
 		header("location:index.php?g=admin&c=category&a=index");
 	}
 	public function modify(){
 		$c_id = isset($_GET['id'])?$_GET['id']:0;
 		if(!$c_id){
 			$this ->error('非法操作','index.php?g=admin&c=category&a=index');
 		}
 		$cate = new CategoryModel();
 		$data = $cate -> getCateById($c_id); 
 		$this -> view -> assign('cate',$data);
 		$data = $cate -> getAllcate(0,$c_id);
 		$this -> view ->assign('cates',$data);	
 		$this -> view -> display('modify.html');	
 	}
 	public function update(){
 		$data['c_id']=isset($_POST['c_id'])?$_POST['c_id']:0;
 		$data['c_name']= isset($_POST['cname'])?$_POST['cname']:'';
 		$data['c_pid']= isset($_POST['pid'])?$_POST['pid']:0;
 		$data['c_desc']= isset($_POST['cdesc'])?$_POST['cdesc']:'';
 		$data['c_sort']= isset($_POST['csort'])?$_POST['csort']:0;
 		$data['c_time']= time();

 		$cat = new CategoryModel();
 		$return = $cat -> update($data);
 		if($return){
 			header('location:index.php?g=admin&c=category&a=index');
 			exit;
 		}else{
 			$this ->error('分类修改失败','index.php?g=admin&c=category&a=add');
 		}
 	}
}
