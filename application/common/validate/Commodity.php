<?php
namespace app\common\validate;
use think\Validate;
class Commodity extends Validate{
	protected $rule=[
		'categoryname'=>'require|max:10'
	];
	protected $scene=[
		'add'=>['spname'],
		'edit'=>['id','spname'],
	];
}