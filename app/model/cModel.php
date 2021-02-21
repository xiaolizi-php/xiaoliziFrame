<?php
namespace app\model;
use core\lib\model;
class cModel extends model{
	public $table='c';
	public function lists(){
		
		$ret=$this->select($this->table,'*');
		return $ret;
		
	}
	public function getOne($id){
		$ret = $this->get($this->table,'*',array(
		'id'=>$id
		));
		return $ret;
	}
	public function setOne($id,$date){
		return $this->update($this->table,$date,array(
		'id'=>$id
		));
	}
	public function delOne($id){
		return $this->delete($this->table,array(
		'id'=>$id
		));
		
	}
}