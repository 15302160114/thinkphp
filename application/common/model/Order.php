<?php
namespace app\common\model;
use think\Model;
class Order extends Model{
	public function getOrder(){
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

	public function getOrders(){
		$order=['id'=>'desc'];
		return $this->order($order)
					->select();
	}

	public function getOrderByuserName($username){
		$data=['username'=>$username];
		return $this->where($data)->find();
	}
}