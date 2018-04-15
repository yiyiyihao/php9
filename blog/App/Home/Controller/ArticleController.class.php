<?php
namespace Controller;
use Core\controller;
use Model\ArticleModel;
use Model\ReplyModel;
use Model\UserModel;
use Core\Pagination;

class ArticleController extends Controller{
	public function nono(){
		$data['a_id']=isset($_GET['id'])?$_GET['id']:0;
		$uid = isset($_GET['uid'])?$_GET['uid']:0;
		$ok = new UserModel();
		$ok -> updateok($uid);

		header('location: index.php?g=home&c=article&a=Article&a_id='.$data['a_id']);

	}
	public function addcomment(){ //print_r($_POST);exit;
		$data['a_id']=isset($_POST['id'])?$_POST['id']:0;
		if(!isset($_SESSION['userinfo'])){
			$this ->error('你没有登录，请先登入','index.php?g=home&c=privilege&a=user_login&aid='.$data['a_id']);
		}
		$data['u_id']=isset($_POST['userid'])?$_POST['userid']:1;
		$data['r_content']=isset($_POST['content'])?$_POST['content']:'';
		$data['r_time']=time();
		$data['r_pid']=isset($_POST['pid'])?$_POST['pid']:0;
		if(!$data['a_id']){
			$this ->error('非法操作','index.php?g=home&c=index&a=index');
		}
// echo $_POST['ok'];exit; 			
		$ok = isset($_POST['ok'])?$_POST['ok']:0;
		if($ok==1){
			$this ->error('你已经被禁言，不能评论','index.php?g=home&c=article&a=article&a_id='.$data['a_id']);
		}
		
		$rep = new ReplyModel(); 
		$return = $rep -> store($data);		
		if(!$return){ 
			$this ->error('操作失败','index.php?g=home&c=article&a=article&a_id='.$data['a_id']);
		} //print_r($data['a_id']);exit;
		
		$art = new ArticleModel();
		$art -> updatecomment($data['a_id']);

		header('location: index.php?g=home&c=article&a=Article&a_id='.$data['a_id']);
	}
	public function Article(){ 
		$c_pid = isset($_GET['pid'])?$_GET['pid']:0;
		$id = isset($_GET['a_id'])?$_GET['a_id']:0;
		// $u_id = isset($_GET['u_id'])?$_GET['u_id']:0;
		if(!$id){
			$this ->error('非法操作','index.php?g=home&c=index&a=index');
		}



// echo $_SESSION['userinfo']['ok'];exit;
		$ret = isset($_SESSION['userinfo']['id'])?$_SESSION['userinfo']['id']:1;
		$this -> view ->assign('user',$ret);		
		$ret = isset($_SESSION['userinfo']['role'])?$_SESSION['userinfo']['role']:0; 
		$this -> view ->assign('role',$ret);
		$ret = isset($_SESSION['userinfo']['ok'])?$_SESSION['userinfo']['ok']:0; 
		$this -> view ->assign('ok',$ret);

		$art = new ArticleModel();
		$data = $art ->getArtById($id); //print_r($data);exit;

		$click = $art ->updateclick($id);
		$pre = $art -> preart($id);
		$next = $art -> nextart($id);

		$rep = new ReplyModel();
		$keyword = $rep -> getkeyword($id);//print_r($keyword);exit;
		$this -> view -> assign('keyword',$keyword);

		$return = $rep -> getReply($id);
		$assoc = $rep ->getAssocArt($id); 
		$this -> view ->assign('assoc',$assoc);
		$this -> view ->assign('reply',$return);

		$arr = $art -> getCategory($c_pid); 
		$this -> view -> assign('cate',$arr);

		$this -> view ->assign('pre',$pre);
		$this -> view ->assign('next',$next);
		$this -> view ->assign('data',$data);
		$this -> display('article.html');
	}
	public function Articleindex(){
  //       $art = new ArticleModel();
		// $return = $art -> totalRows();value="<{$name}>"
		// $totalRows=$return['count(*)'];
		// $curPage=isset($_GET['curPage'])?$_GET['curPage']:1;
		// $rowsPerPage=$GLOBALS['config']['rowsPerPage'];
		// $offset = ($curPage-1)*$rowsPerPage;
		// $url='index.php?g=admin&c=article&a=index';
		// $pagination = Pagination::getPageNum($curPage,$totalRows,$rowsPerPage,$url);
		// $this -> view ->assign('page',$pagination);
		// $this -> view ->assign('curPage',$curPage);
		// $data = $art ->getAllArticle_1($offset,$rowsPerPage); //echo '<pre>';print_r($data);exit;
		// $this -> view -> assign('article',$data);
		// $this -> display('index.html');

		$c_pid = isset($_GET['pid'])?$_GET['pid']:0;

		if(!$c_pid){
			$this ->error('非法操作','index.php?g=home&c=index&a=index');
		}
		$art = new ArticleModel();
		$cate =  [$c_pid];
		$arr = $art -> getCategory($c_pid); 	//print_r($arr);exit;
		foreach ($arr as $v) {
			$cate[]=$v['c_id'];
			// $c_id[]=$v['c_id'];
			// $c_name[]=$v['c_name'];
		}	
		$cat = implode(',', $cate);
		
		//var_dump($cat);die;
		$return = $art -> totalRows($cat);
		$totalRows=$return['count(*)'];
		$curPage=isset($_GET['curPage'])?$_GET['curPage']:1;//echo $curPage;exit;
		$rowsPerPage=$GLOBALS['config']['rowsPerPage'];
		$offset = ($curPage-1)*$rowsPerPage;
		$url="index.php?g=home&c=article&a=Articleindex&pid=$c_pid";
		$pagination = Pagination::getPageNum($curPage,$totalRows,$rowsPerPage,$url);
		$this -> view ->assign('page',$pagination);
		$this -> view ->assign('curPage',$curPage);



		$arti = $art -> getcatearticle($cat,$offset,$rowsPerPage);//echo '<pre>';print_r($data);exit;
		$this -> view -> assign('arti',$arti); 
		$this -> view -> assign('cate',$arr);
		$this -> view ->assign('aaa',$c_pid);//echo $c_pid;exit;
		$this -> display('articleindex.html');
	}

}