<?php
namespace app\common\validate;
use think\Validate;
class Userhotai extends Validate{
	protected $rule=[
		'id'=>'require|max:15'
	];
	protected $scene=[
		'add'=>['id'],
		'edit'=>['id','title'],
	];
}