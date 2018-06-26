<?php 
namespace app\common\model;
use think\Model;
class Login extends Model{
	public function add($date){
		$this->save($date);
		return $this->id;
	}
}