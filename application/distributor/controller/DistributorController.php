<?php
namespace app\distributor\controller;
use think\Controller;
use think\Db;

class DistributorController extends Base
{
    public function index()
    {
    	$a=explode(',', session('dis_user','','dis'));
        $id=substr($a[0],6);
        if($id==0||is_null($id)){
            $this->error('参数有误');
        }
        $dis=model('Distributor')->get($id);
        $this->assign('dis',$dis);

        $order=Db::table('order')
                    ->where('status','1')
                    ->whereOr('status','2')
                    ->select();
        $this->assign('order',$order);

        $consumer=model('Consumer')->getConsumer();
        $this->assign('consumer',$consumer);
        return $this->fetch();
    }
    public function zhanghao()
    {
        $a=explode(',', session('dis_user','','dis'));
    	$id=substr($a[0],6);
		if($id==0||is_null($id)){
			$this->error('参数有误');
		}
		$dis=model('Distributor')->get($id);
		
		$this->assign('dis',$dis);
		return $this->fetch('');
    }
    public function order()
    {
        $a=explode(',', session('dis_user','','dis'));
        $id=substr($a[0],6);
        if($id==0||is_null($id)){
            $this->error('参数有误');
        }
        $dis=model('Distributor')->get($id);
        $this->assign('dis',$dis);

        $order=Db::table('order')
                    ->where('distributor_id',$id)
                    ->select();
        $this->assign('order',$order);

        return $this->fetch('');
    }
    public function add()
    {
        $a=explode(',', session('dis_user','','dis'));
        $aid=substr($a[0],6);
        if($aid==0||is_null($aid)){
            $this->error('参数有误');
        }

        $id=input('param.id');
        if($id==0||is_null($id)){
            $this->error('参数有误');
        }

        $xuhao=model('Order')
                    ->where('id',$id)
                    ->update(['distributor_id'=>$aid]);
        if($xuhao){
            $this->success('接单成功',url('distributor/order'));
        }else{
            $this->error('接单失败');
        }
	}
    public function update_o()
    {
        $id=input('param.id');
        if($id==0||is_null($id)){
            $this->error('参数有误');
        }
        $input=input('post.');
        $date=[
            'status'=>$input['status']
            ];
        $xuhao=model('Order')->save($date,['id'=>intval($id)]);
        if($xuhao){
            $this->success('更新成功',url('distributor/order'));
        }else{
            $this->error('更新失败');
        }
    }
	public function update()
	{
		$a=explode(',', session('dis_user','','dis'));
        $id=substr($a[0],6);
        if($id==0||is_null($id)){
            $this->error('参数有误');
        }

		echo "<meta charset='UTF-8'>";
        if(!request()->isPost()){
            $this->error("非法输入");
        }
        $input=input('post.');

        $validate=validate('Distributor');
        if(!$validate->scene('edit')->check($input)){
            $this->error($validate->getError());
        }

        $admin=Db::table('distributor')
                    ->where('id',$id)
                    ->select();
        $pa=$admin[0];  
        if($pa['password']==$input['password']){
            $date=[
                'realname'=>$input['realname'],
                'logo'=>$input['logo'],
                'tel'=>$input['tel'],
                'email'=>$input['email']
            ];
        }else{
            $date=[
                'realname'=>$input['realname'],
                'logo'=>$input['logo'],
                'tel'=>$input['tel'],
                'email'=>$input['email'],
                'password'=>md5($input['password'])
            ];
        }

        $xuhao=model('distributor')->save($date,['id'=>intval($input['id'])]);
        if($xuhao){
            $this->success('更新成功',url('distributor/zhanghao'));
        }else{
            $this->error('更新失败');
        }
	}
	function upload()
	{
        $file = $this->request->file('file');
        //file是传文件的名称，这是webloader插件固定写入的。因为webloader插件会写入一个隐藏input，不信你们可以通过浏览器检查页面
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads','');
    }
    public function logout(){
        session(null,'dis');
        $this->redirect('@index/index/index');
    }
}
