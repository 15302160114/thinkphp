<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
function status($status){
	if($status==1){
		$str="<span class='label label-success radius'>正常</span>";
	}else if($status==0){
		$str="<span class='label label-danger radius'>删除</span>";
	}else{
		$str="<span class='label label-danger radius'>禁用</span>";
	}
	return $str;
}
use think\Db;
function getUsername($id){
    return Db::name('category')->where('id',$id)->find()['categoryname'];
}
function getAuthorname($id){
    return Db::name('consumer')->where('id',$id)->find()['username'];
}
function getDisname($id){
    return Db::name('distributor')->where('id',$id)->find()['realname'];
}
function getStatusname($id){
	if($id==1){
		$a='<option value="1">未配送</option>
		<option value="0">订单取消</option>
		<option value="2">已配送</option>';
    	return $a;
	}
	if($id==2){
		$a='<option value="2">已配送</option>
		<option value="0">订单取消</option>
		<option value="1">未配送</option>';
		return $a;
	}
	if($id==0){
		$a='<option value="0">订单取消</option>
		<option value="2">已配送</option>
		<option value="1">未配送</option>';
		return $a;
	}
}
function getStatus($id){
	if($id==1){
		$a='未配送';
    	return $a;
	}
	if($id==2){
		$a='已配送';
		return $a;
	}
	if($id==0){
		$a='订单取消';
		return $a;
	}
}
function getDis($id){
	if($id==0){
		return '';
	}else{
		$yuan=Db::name('distributor')->where('id',$id)->find()['realname'];
		return '配送员：'.$yuan;
	}
}