<?php
namespace app\common\validate;
use think\Validate;
class Admin extends Validate{
	protected $rule=[
		// 'name'=>'require|max:6',
		// 'sex'=>'number|between:0,1',
		// 'email'=>'email'
		['username','require|max:20','名称必须|名称最多不能超过20个字符'],
		['email','email','邮箱格式错误']
	];
	protected $scene=[
		'add'=>['username','email'],
		'edit'=>['id','username'],
		'delete'=>['id'],
	];
}