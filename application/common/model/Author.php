<?php
namespace app\common\model;
use think\Model;
class Author extends Model{
	public function getAuthor(){
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

	public function getAuthors(){
		$order=['id'=>'desc'];
		return $this->order($order)
					->select();
	}

	public function getAuthorByuserName($username){
		$data=['username'=>$username];
		return $this->where($data)->find();
	}
}