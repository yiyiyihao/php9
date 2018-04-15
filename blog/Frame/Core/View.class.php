<?php
namespace Core;
class View extends \smarty{
    public function __construct(){
    	parent::__construct();
    	$this -> setTemplateDir(DIR_TEMP.'/'.C);
    	$this -> setCompileDir(DIR_RUNTIME.'/template_c');
    	$this -> setCacheDir(DIR_RUNTIME.'/cache');
    	$this -> setLeftDelimiter('<{');
    	$this -> setRightDelimiter('}>');
    }
}