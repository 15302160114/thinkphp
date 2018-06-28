<?php
namespace app\common\model;
use think\Model;
class Distributor extends Model{
	public function getDistributor(){
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

	public function getDistributors(){
		$order=['id'=>'desc'];
		return $this->order($order)
					->select();
	}

	public function getDisByuserName($realname){
		$data=['realname'=>$realname];
		return $this->where($data)->find();
	}
}