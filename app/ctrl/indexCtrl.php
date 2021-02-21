<?php
namespace app\ctrl;
use core\lib\model;
class indexCtrl extends \core\xiaoli
{
	public function index(){
		$data="hello word";
		$this->assign('data',$data);
		$this->display('index.html');
	
	}
	public function test(){
		$data="test";
		$this->assign('data',$data);
		$this->display('test.html');
	}
}