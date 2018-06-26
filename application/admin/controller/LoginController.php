<?php
namespace app\admin\controller;
use think\Controller;
use think\captcha;

class LoginController extends Controller
{
    public function index()
    {
      	return $this->fetch();
    }
    public function check(){
    	if(!request()->isPost()){
    		$this->error('有错');
    	}
    	$data=input('post.');
    	$username=$data['username'];
    	$admin=model('Admin')->getAdminByuserName($username);
    	if(!$admin){
    		$this->error('有错');
    	}
        if(!captcha_check($data['captcha'])){          
            $this->error('验证码错误');
        }
    	if($admin->password!=md5($data['password'])){
    		$this->error('密码有错');
    	}
    	session('my_user',$admin,'my');
    	$this->success('ok','adminhotai/index');
    }
    public function logout(){
    	session(null,'my');
    	$this->redirect('login/index');
    }
}
