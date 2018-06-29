<?php
namespace app\distributor\controller;
use think\Controller;
use think\captcha;

class LoginController extends Controller
{
    public function index()
    {
      	return $this->fetch();
    }
    public function save(){
        echo "<meta charset='UTF-8'>";
        if(!request()->isPost()){
            $this->error("非法输入");
        }
        
        $input=input('post.');

        $realname=$input['realname'];
        $user=model('Distributor')->getDisByuserName($realname);
        if($user){
            $this->error('用户名不可用');
        }
        if(!captcha_check($input['captcha'])){          
            $this->error('验证码错误');
        }

        $validate=validate('Distributor');
        if(!$validate->scene('add')->check($input)){
            $this->error($validate->getError());
        }
        
        $date=[
                'email'=>$input['email'],
                'tel'=>$input['tel'],
                'realname'=>$input['realname'],
                'password'=>md5($input['password'])
            ];

        $xuhao=model('Distributor')->add($date);
        if($xuhao){
            $this->success('增加成功，新增序号为'.$xuhao,url('login/index'));
        }else{
            $this->error('增加失败');
        }
    }
    public function check(){
    	if(!request()->isPost()){
    		$this->error('有错');
    	}
    	$data=input('post.');
    	$realname=$data['realname'];
    	$author=model('Distributor')->getDisByuserName($realname);
    	if(!$author){
    		$this->error('有错');
    	}
        if(!captcha_check($data['captcha'])){          
            $this->error('验证码错误');
        }
    	if($author->password!=md5($data['password'])){
    		$this->error('密码有错');
    	}
    	session('dis_user',$author,'dis');
    	$this->success('ok','distributor/index');
    }
    public function logout(){
    	session(null,'dis');
    	$this->redirect('login/index');
    }
}
