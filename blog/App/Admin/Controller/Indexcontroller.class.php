<?php
namespace Controller;
use Core\commonController;
class Indexcontroller extends commonController{
    public function index(){   	
		$this ->display('admin_index.html');
    }
}