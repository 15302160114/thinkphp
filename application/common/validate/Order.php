<?php
namespace app\common\validate;
use think\Validate;
class Order extends Validate{
	protected $rule=[
		// 'name'=>'require|max:6',
		// 'sex'=>'number|between:0,1',
		// 'email'=>'email'
		['spname','require|max:50','名称必须|名称最多不能超过50个字符'],
		['email','email','邮箱格式错误']
	];
	protected $scene=[
		'add'=>['spname','author_id'],
		'edit'=>['id','spname'],
		'delete'=>['id'],
	];
}