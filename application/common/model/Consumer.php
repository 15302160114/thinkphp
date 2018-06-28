<?php
namespace app\common\model;
use think\Model;
class Consumer extends Model{
	public function getConsumer(){
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

	public function getConsumers(){
		$order=['id'=>'desc'];
		return $this->order($order)
					->select();
	}

	public function getConsumerByuserName($username){
		$data=['username'=>$username];
		return $this->where($data)->find();
	}
}