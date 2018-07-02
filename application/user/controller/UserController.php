<?php
namespace app\user\controller;
use think\Controller;
use think\Db; 

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

        $commodity=model('Commodity')->getCommoditys();
        $this->assign('commodity',$commodity);
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
    public function category()
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

        $commodity=model('Commodity')->getCommoditys();
        $this->assign('commodity',$commodity);
		return $this->fetch('');
    }
	public function update(){
        echo "<meta charset='UTF-8'>";
        if(!request()->isPost()){
            $this->error("非法输入");
        }
        $input=input('post.');

        $validate=validate('Consumer');
        if(!$validate->scene('edit')->check($input)){
            $this->error($validate->getError());
        }

        $consumer=Db::table('consumer')
                    ->where('id',$input['id'])
                    ->select();
        $pa=$consumer[0];
        if($pa['password']==$input['password']){
            $date=[
                'username'=>$input['username'],
                'realname'=>$input['realname'],
                'tel'=>$input['tel'],
                'address'=>$input['address'],
                'email'=>$input['email']
            ];
        }else{
            $date=[
                'username'=>$input['username'],
                'realname'=>$input['realname'],
                'tel'=>$input['tel'],
                'email'=>$input['email'],
                'address'=>$input['address'],
                'password'=>md5($input['password'])
            ];
        }

        $xuhao=model('Consumer')->save($date,['id'=>intval($input['id'])]);
        if($xuhao){
            $this->success('更新成功',url('user/settings'));
        }else{
            $this->error('更新失败');
        }
	}
    public function logout(){
        session(null,'me');
        $this->redirect('@index/index/index');
    }
}
