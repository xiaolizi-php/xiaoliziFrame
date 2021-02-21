<?php
namespace core;
class xiaoli{
	public static $classMap=array();
	public $assign;
	static public function run()
	
	{
		\core\lib\log::init();
		\core\lib\log::log($_SERVER,'server');
		$route=new \core\lib\route();
		$ctrlclass=$route->ctrl;
		$action=$route->action;
		$ctrlfile=APP.'/ctrl/'.$ctrlclass.'Ctrl.php';
		$ctrlclass='\\'.MODULE .'\ctrl\\'.$ctrlclass.'Ctrl';
		
		if(is_file($ctrlfile)){
			include $ctrlfile;
			$ctrl = new $ctrlclass();
			$ctrl->$action();
			\core\lib\log::log('ctrl:'.$ctrlclass.'  '.'action:'.$action);
		}else{
			throw new \Exception('无控制器'.$ctrlclass);
		}
		
		
	}
	static public function load($class){
		//自动加载类

		if(isset($classMap[$class])){
			return true;
		}else{
		$class = str_ireplace('\\','/',$class);
		$file= XIAOLI.'/'.$class.'.php';
		if(is_file($file)){
			include $file;
			self:: $classMap[$class]=$class;
		}else{
			return false;
		}
	}
}
public function assign($name,$valus)
{
$this->assign[$name] = $valus;
}
public function display($file){
	$file=APP.'/views/'.$file;
	if(is_file($file)){
		
	
		$loader = new \Twig\Loader\FilesystemLoader(APP.'/views');
		$twig = new \Twig\Environment($loader, [
		    'cache' => XIAOLI.'/log',
			'debug'=>DEBUG 
		]);
		$template = $twig->load('index.html');
		$template->display($this->assign?$this->assign:'');
	}
}
}