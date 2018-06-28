<?php
namespace app\distributor\controller;
use think\Controller;

class DistributorController extends Base
{
    public function index()
    {
        return $this->fetch();
    }
    public function zhanghao()
    {
        $id=input('param.id');
		// if($id==0||is_null($id)){
		// 	$this->error('参数有误');
		// }
		$userhotai=model('Userhotai')->get($id);
		
		$this->assign('userhotai',$userhotai);
		return $this->fetch('');
    }
    public function edit(){
		$id=input('param.id');
		if($id==0||is_null($id)){
			$this->error('参数有误');
		}
		$userhotai=model('Userhotai')->get($id);
		$this->assign('userhotai',$userhotai);
		return $this->fetch('');
	}
	public function update(){
		echo "<meta charset='UTF-8'>";
		if(!request()->isPost()){
			$this->error("非法输入");
		}
		$input=input('post.');

		$validate=validate('Userhotai');
		if(!$validate->scene('edit')->check($input)){
			$this->error($validate->getError());
		}
		
		$date=[
				'username'=>$input['username'],
				'realname'=>$input['realname'],
				'logo'=>$input['logo'],
				'code'=>$input['code'],
				'tel'=>$input['tel'],
				'email'=>$input['email'],
				'note'=>$input['note']
			];

		$xuhao=model('Userhotai')->save($date,['id'=>intval($input['id'])]);
		if($xuhao){
			$this->success('更新成功',url('userhotai/zhanghao'));
		}else{
			$this->error('更新失败');
		}
	}
    public function logout(){
        session(null,'me');
        $this->redirect('@index/index/index');
    }
}
