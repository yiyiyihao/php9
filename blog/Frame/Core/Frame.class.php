<?php
class Frame{
	public static function run(){
		self::setChar();
        self::setError();
        self::loadConfig();
        self::analyseURL();
        self::setDIR();
        self::autoLoad();
        self::startSession();
        self::dispatch();
	}
    private static function setChar(){
    	header('content-type:text/html;charset=utf-8');
    }
    private static function setError(){
    	ini_set('display_error','On');
    	ini_set('error_reporting',E_ALL);
    }
    private static function loadConfig(){
    	$GLOBALS['config']=include('Frame/Config/Config.php');
    }
    private static function analyseURL(){
    	$g = isset($_REQUEST['g'])?$_REQUEST['g']:'home';
    	$c = isset($_REQUEST['c'])?$_REQUEST['c']:'index';
    	$a = isset($_REQUEST['a'])?$_REQUEST['a']:'index';

    	define('G',$g);
    	define('C',$c);
    	define('A',$a);
    }
    private static function setDIR(){
    	define('DIR_CONT',APP_PATH.'/'.G.'/Controller');
    	define('DIR_MODEL',APP_PATH.'/'.G.'/Model');
        define('DIR_TEMP',APP_PATH.'/'.G.'/View');
    	define('DIR_RUNTIME',APP_PATH.'/Runtime');

    	define('DIR_FRAME',str_replace('\\','/',dirname(__DIR__)));
    	define('DIR_CORE',DIR_FRAME.'/Core');
        define('DIR_SMARTY',DIR_FRAME.'/Smarty');

        define('DIR_PUBLIC','/Public');
        define('DIR_ADMIN',DIR_PUBLIC.'/'.G);
        define('DIR_HOME',DIR_PUBLIC.'/'.G);

    }
    private static function autoLoad(){
    	spl_autoload_register([__CLASS__,'loadCore']);
    	spl_autoload_register([__CLASS__,'loadController']);
    	spl_autoload_register([__CLASS__,'loadSmarty']);
    	spl_autoload_register([__CLASS__,'loadModel']);
    }
    private static function loadCore($cls){
        $cls = basename($cls);
    	$file = DIR_CORE.'/'.$cls.'.class.php';
    	if(file_exists($file)){
    		include $file;
    	}
    }
    private static function loadController($cls){
        $cls = basename($cls);
    	$file = DIR_CONT.'/'.$cls.'.class.php';
    	if(file_exists($file)){
    		include $file;
    	}
    }
    private static function loadSmarty($cls){
        $cls = basename($cls);
    	$file = DIR_SMARTY.'/'.$cls.'.class.php';
    	if(file_exists($file)){
    		include $file;
    	}
    }
    private static function loadModel($cls){
        $cls = basename($cls);
    	$file = DIR_MODEL.'/'.$cls.'.class.php';
    	if(file_exists($file)){
    		include $file;
    	}
    }
    private static function dispatch(){//echo 123;exit;
    	$controller = '\Controller\\'.C.'controller';
    	$action = A;
    	$obj = new $controller;
    	$obj -> $action();
    }
    private static function startSession(){
    	session_start();
    }
 
}