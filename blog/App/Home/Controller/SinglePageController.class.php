<?php
namespace Controller;
use Core\Controller;

class SinglePageController extends Controller{
	public function aboutme(){
		$this -> display('aboutme.html');
	}

}