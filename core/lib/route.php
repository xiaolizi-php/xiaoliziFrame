<?php
namespace core\lib;
use core\lib\conf;

class route{
	public $ctrl;
	public $action;
	public function __construct(){
		//url转换
		if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI']!='/'){
			$path= $_SERVER['REQUEST_URI'];
			$patharr = explode('/',trim($path,'/'));
			if(isset($path[0])){
				$this->ctrl=$patharr[0];
			}
			unset($patharr[0]);
			if(isset($path[1])){
				$this->action=$patharr[1];
				unset($patharr[1]);
			}else{
				$this->action=conf::get('ACTION','route');
			}
			//url多余部分转换GET
			//id/1/str/2p
			
			$conut=count($patharr) + 2;
			$i=2;
			while($i < $conut){
				if(isset($patharr[$i+1])){
				$_GET[$patharr[$i]] = $patharr[$i + 1];
				}
				$i = $i +2;
			}
			
			
			
		} else {
			$this->ctrl = conf::get('CTRL','route');
			$this->action = conf::get('ACTION','route');
		}
		
	}
}