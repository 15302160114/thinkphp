<?php
namespace app\common\validate;
use think\Validate;
class Category extends Validate{
	protected $rule=[
		'categoryname'=>'require|max:10'
	];
	protected $scene=[
		'add'=>['categoryname'],
		'edit'=>['id','categoryname'],
	];
}