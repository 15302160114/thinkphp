<?php
namespace app\user\controller;
use think\Controller;

class UserController extends Base
{
    public function index()
    {
    	$a=explode(',', session('me_user','','me'));
        $id=substr($a[0],6);
        if($id==0||is_null($id)){
            $this->error('参数有误');
        }
        $consumer=model('Consumer')->get($id);
        $this->assign('consumer',$consumer);

        $categorys=model('Category')->getCategorys();
        $this->assign('categorys',$categorys);
        return $this->fetch();
    }
    public function settings()
    {
        $a=explode(',', session('me_user','','me'));
        $id=substr($a[0],6);
        if($id==0||is_null($id)){
            $this->error('参数有误');
        }
        $consumer=model('Consumer')->get($id);
        $this->assign('consumer',$consumer);

        $categorys=model('Category')->getCategorys();
        $this->assign('categorys',$categorys);
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
