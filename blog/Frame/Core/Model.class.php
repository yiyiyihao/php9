<?php
namespace Core;
class Model{
	protected $mypdo = null;
	public function __construct(){
		$config = $GLOBALS['config']['db'];
        $this -> mypdo = new MyPDO($config);
	}
}