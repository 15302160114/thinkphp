<?php
namespace app\common\validate;
use think\Validate;
class Distributor extends Validate{
	protected $rule=[
		// 'name'=>'require|max:6',
		// 'sex'=>'number|between:0,1',
		// 'email'=>'email'
		['realname','require|max:50','名称必须|名称最多不能超过50个字符'],
		['email','email','邮箱格式错误']
	];
	protected $scene=[
		'add'=>['realname','id'],
		'edit'=>['id','realname'],
		'delete'=>['id'],
	];
}