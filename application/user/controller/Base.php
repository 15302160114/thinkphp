<?php
namespace app\user\controller;
use think\Controller;

class Base extends Controller
{
	private $account='';
	public function _initialize(){
		if(!$this->isLogin()){
			$this->redirect('@index/index/index');
		}
		$user=$this->getLoginUser();
		$this->assign('user',$user);
	}
	public function isLogin(){
		$user=$this->getLoginUser();
		if($user&&$user->id){
			return true;
		}
		return false;
	}
	public function getLoginUser(){
		if(!$this->account){
			$this->account=session('me_user','','me');
		}
		return $this->account;
	}
}