<?php
namespace app\common\model;
use think\Model;
class Admin extends Model{
	public function getAdmin(){
		$data=[];
		$order=['id'=>'desc'];
		return $this->where($data)
				->order($order)
				->paginate(3);
	}

	public function add($date){
		$this->save($date);
		return $this->id;
	}

	public function getAdmins(){
		$order=['id'=>'desc'];
		return $this->order($order)
					->select();
	}

	public function getAdminByuserName($username){
		$data=['username'=>$username];
		return $this->where($data)->find();
	}
}