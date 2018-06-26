<?php
namespace app\admin\controller;
use think\Controller;

class AdminhotaiController extends Base
{
    public function index()
    {
        return $this->fetch();
    }
    public function logout(){
        session(null,'my');
        $this->redirect('login/index');
    }
    public function zhanghao()
    {
        $a=explode(',', session('my_user','','my'));
    	$id=substr($a[0],6);
		if($id==0||is_null($id)){
			$this->error('参数有误');
		}
		$admin=model('Admin')->get($id);
		
		$this->assign('admin',$admin);
		return $this->fetch('');
    }
}
