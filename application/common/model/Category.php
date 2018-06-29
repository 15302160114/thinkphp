<?php
namespace app\common\model;
use think\Model;
class Category extends Model{
	public function getCategory(){
		$data=[];
		$order=['id'=>'desc','sex'=>'desc'];
		return $this->where($data)
				->order($order)
				->paginate(3);
	}

	public function add($date){
		$this->save($date);
		return $this->id;
	}

	public function getCategorys(){
		$order=['id'=>'desc'];
		return $this->order($order)
					->select();
	}

	public function getCategoryByName($categoryname){
		$data=['categoryname'=>$categoryname];
		return $this->where($data)->find();
	}
}