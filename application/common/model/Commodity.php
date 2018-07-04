<?php
namespace app\common\model;
use think\Model;
class Commodity extends Model{
	public function getCommodity(){
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

	public function getCommoditys(){
		$order=['id'=>'desc'];
		return $this->order($order)
					->select();
	}

	public function getCommodityByName($spyname){
		$data=['spname'=>$spname];
		return $this->where($data)->find();
	}
}