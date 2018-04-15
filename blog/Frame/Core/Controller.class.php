<?php
namespace Core;
class Controller{  
	protected $view = null;
	public function __construct(){
		$this ->view = new View();        
	}
	public function display($temp){
        $this ->view->display($temp);
	}
	protected function success($mess,$url,$second=3){
		$this ->view -> assign('mess',$mess);
		$this ->view -> assign('url',$url);
		$this ->view -> assign('second',$second);
		$this ->view -> display('./frame/Common/success.html');
		exit;
	}	
	protected function error($mess,$url,$second=3){
		$this ->view -> assign('mess',$mess);
		$this ->view -> assign('url',$url);
		$this ->view -> assign('second',$second);
		$this ->view -> display('./frame/Common/error.html');
		exit;
	}
}