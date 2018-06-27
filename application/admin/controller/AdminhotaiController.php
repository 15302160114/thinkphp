<?php
namespace app\admin\controller;
use think\Controller;
use think\Db;

class AdminhotaiController extends Base
{
    public function index()
    {
        $a=explode(',', session('my_user','','my'));
        $id=substr($a[0],6);
        if($id==0||is_null($id)){
            $this->error('参数有误');
        }
        $admin=model('Admin')->get($id);
        
        $this->assign('admin',$admin);
        return $this->fetch();
    }
    public function user()
    {
        $a=explode(',', session('my_user','','my'));
        $id=substr($a[0],6);
        if($id==0||is_null($id)){
            $this->error('参数有误');
        }
        $admin=model('Admin')->get($id);
        
        $this->assign('admin',$admin);
        $author=model('Author')->getAuthor();
        return $this->fetch('',['author'=>$author]);
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
    public function all_order()
    {
        $a=explode(',', session('my_user','','my'));
        $id=substr($a[0],6);
        if($id==0||is_null($id)){
            $this->error('参数有误');
        }
        $admin=model('Admin')->get($id);
        
        $this->assign('admin',$admin);
        $order=model('Order')->getOrders();
        $this->assign('order',$order);
        return $this->fetch('');
    }
    public function order()
    {
        $a=explode(',', session('my_user','','my'));
        $id=substr($a[0],6);
        if($id==0||is_null($id)){
            $this->error('参数有误');
        }
        $admin=model('Admin')->get($id);
        $this->assign('admin',$admin);

        $id=input('param.id');
        if($id==0||is_null($id)){
            $this->error('参数有误');
        }
        $order=model('Order')->get($id);
        $this->assign('order',$order);
        $distributor=model('Distributor')->getDistributors();
        $this->assign('distributor',$distributor);
        return $this->fetch('');
    }
    public function update_o()
    {
        $id=input('param.id');
        if($id==0||is_null($id)){
            $this->error('参数有误');
        }
        $input=input('post.');
        $date=['status'=>$input['status']];
        $xuhao=model('Order')->save($date,['id'=>intval($id)]);
        if($xuhao){
            $this->success('更新成功',url('adminhotai/all_order'));
        }else{
            $this->error('更新失败');
        }
    }
    public function orderUpdate()
    {
        echo "<meta charset='UTF-8'>";
        if(!request()->isPost()){
            $this->error("非法输入");
        }
        $input=input('post.');

        $validate=validate('Order');
        if(!$validate->scene('edit')->check($input)){
            $this->error($validate->getError());
        }

        $date=[
                'count'=>$input['count'],
                'sum'=>$input['sum'],
                'status'=>$input['status'],
                'distributor_id'=>$input['distributor_id']
            ];

        $xuhao=model('Order')->save($date,['id'=>intval($input['id'])]);
        if($xuhao){
            $this->success('更新成功',url('adminhotai/all_order'));
        }else{
            $this->error('更新失败');
        }
    }
    public function update(){
        $a=explode(',', session('my_user','','my'));
        $id=substr($a[0],6);
        if($id==0||is_null($id)){
            $this->error('参数有误');
        }

        echo "<meta charset='UTF-8'>";
        if(!request()->isPost()){
            $this->error("非法输入");
        }
        $input=input('post.');

        $validate=validate('Admin');
        if(!$validate->scene('edit')->check($input)){
            $this->error($validate->getError());
        }

        $admin=Db::table('admin')
                    ->where('id',$id)
                    ->select();
        $pa=$admin[0];  
        if($pa['password']==$input['password']){
            $date=[
                'username'=>$input['username'],
                'realname'=>$input['realname'],
                'logo'=>$input['logo']
            ];
        }else{
            $date=[
                'username'=>$input['username'],
                'realname'=>$input['realname'],
                'logo'=>$input['logo'],
                'password'=>md5($input['password'])
            ];
        }

        $xuhao=model('Admin')->save($date,['id'=>intval($input['id'])]);
        if($xuhao){
            $this->success('更新成功',url('adminhotai/zhanghao'));
        }else{
            $this->error('更新失败');
        }
    }
    function upload(){
        $a=explode(',', session('my_user','','my'));
        $id=substr($a[0],6);
        if($id==0||is_null($id)){
            $this->error('参数有误');
        }
        $file = $this->request->file('file');
        //file是传文件的名称，这是webloader插件固定写入的。因为webloader插件会写入一个隐藏input，不信你们可以通过浏览器检查页面
        $info = $file->move(ROOT_PATH . 'public' . DS . 'admin_uploads'. DS .$id,'');
    }
    public function logout(){
        session(null,'my');
        $this->redirect('login/index');
    }
}
