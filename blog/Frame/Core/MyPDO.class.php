<?php
namespace Core;
use PDO;
use PDOStatment;
use PDOException;

class MyPDO{
	private $type='';
	private $host='';
	private $port='';
	private $user='';
	private $pwd='';
	private $charset='';
	private $dbname='';
	private $pdo='';
	public function __construct($config=[]){
		$this->type=isset($config['type'])?$config['type']:'mysql';
		$this->host=isset($config['host'])?$config['host']:'127.0.0.1';
		$this->port=isset($config['port'])?$config['port']:'3306';
		$this->user=isset($config['user'])?$config['user']:'root';
		$this->pwd=isset($config['pwd'])?$config['pwd']:'';
		$this->charset=isset($config['charset'])?$config['charset']:'utf8';
		$this->dbname=isset($config['dbname'])?$config['dbname']:'';
		$this->connect();
		$this->enableException();
	}
	private function connect(){
		$dsn="$this->type:host=$this->host;port=$this->port;charset=$this->charset;dbname=$this->dbname";
		$user=$this->user;
		$pwd=$this->pwd;//echo $dsn,$user,$pwd;exit;
		$this->pdo = new PDO($dsn,$user,$pwd);
	}
	private function enableException(){
		$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}
	public function doExec($sql){
		try{
			$return = $this ->pdo->exec($sql);
		}catch(PDOException $e){
	       echo '错误信息如下:<br/>';
	       echo '错误编码为：',$e->getCode();
	       echo '错误信息为：',$e->getMessage();
	       echo '错误文件为：',$e->getFile();
	       echo '错误行号为：',$e->getLine();			
           exit;
		}
		return $return;
	}
	public function lastId(){
		return $this->pdo->lastInsertId();
	}
	public function getOne($sql){
		try{
			$stmt = $this->pdo->query($sql);
		}catch(PDOException $e){
	       echo '错误信息如下:<br/>';
	       echo '错误编码为：',$e->getCode();
	       echo '错误信息为：',$e->getMessage();
	       echo '错误文件为：',$e->getFile();
	       echo '错误行号为：',$e->getLine();			
           exit;			
		}
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	public function getRow($sql){
		try{
			$stmt=$this->pdo->query($sql);
		}catch(PDOException $e){
	       echo '错误信息如下:<br/>';
	       echo '错误编码为：',$e->getCode();
	       echo '错误信息为：',$e->getMessage();
	       echo '错误文件为：',$e->getFile();
	       echo '错误行号为：',$e->getLine();			
           exit;			
		}
		// if($type){
  //       return $stmt->fetchAll($type);
		// }else{
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	    // }
	}

}


// $config=['host'=>'127.0.0.1','pwd'=>'101142','user'=>'root','dbname'=>'php9'];
// $obj = new MyPDO($config);
// $sql = "select * from test";
// print_r($obj ->getRow($sql,PDO::FETCH_NUM));


