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
        $consumer=model('Consumer')->getConsumer();
        return $this->fetch('',['consumer'=>$consumer]);
    }
    public function distributor()
    {
        $a=explode(',', session('my_user','','my'));
        $id=substr($a[0],6);
        if($id==0||is_null($id)){
            $this->error('参数有误');
        }
        $admin=model('Admin')->get($id);
        
        $this->assign('admin',$admin);
        $distributor=model('Distributor')->getDistributors();
        return $this->fetch('',['distributor'=>$distributor]);
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
    public function fenlei()
    {
        $a=explode(',', session('my_user','','my'));
        $id=substr($a[0],6);
        if($id==0||is_null($id)){
            $this->error('参数有误');
        }
        $admin=model('Admin')->get($id);
        $this->assign('admin',$admin);

        $categorys=model('Category')->getCategorys();
        $this->assign('categorys',$categorys);
        return $this->fetch('');
    }
    public function save()
    {
        echo "<meta charset='UTF-8'>";
        if(!request()->isPost()){
            $this->error("非法输入");
        }
        $input=input('post.');

        $validate=validate('Category');
        if(!$validate->scene('add')->check($input)){
            $this->error($validate->getError());
        }
        
        $date=[
                'categoryname'=>$input['categoryname']
            ];

        $xuhao=model('Category')->add($date);
        if($xuhao){
            $this->success('增加成功',url('adminhotai/fenlei'));
        }else{
            $this->error('增加失败');
        }
    }
    public function consumeredit()
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
        $consumer=model('Consumer')->get($id);
        $this->assign('consumer',$consumer);
        return $this->fetch('');
    }
    public function dis_edit()
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
        $distributor=model('Distributor')->get($id);
        $this->assign('distributor',$distributor);
        return $this->fetch('');
    }
    public function consumerdelete()
    {
        $id=input('param.id');
        if($id==0||is_null($id)){
            $this->error('参数有误');
        }
        $consumer=model('Consumer')->get($id);
        if(!is_null($consumer->delete())){
            $this->success('删除成功','adminhotai/user');
        }
        $this->error('删除失败');
    }
    public function dis_delete()
    {
        $id=input('param.id');
        if($id==0||is_null($id)){
            $this->error('参数有误');
        }
        $distributor=model('Distributor')->get($id);
        if(!is_null($distributor->delete())){
            $this->success('删除成功','adminhotai/distributor');
        }
        $this->error('删除失败');
    }
    public function ca_delete()
    {
        $id=input('param.id');
        if($id==0||is_null($id)){
            $this->error('参数有误');
        }
        $category=model('Category')->get($id);
        if(!is_null($category->delete())){
            $this->success('删除成功','adminhotai/fenlei');
        }
        $this->error('删除失败');
    }
    public function consumerupdate()
    {
        $a=explode(',', session('my_user','','my'));
        $aid=substr($a[0],6);
        if($aid==0||is_null($aid)){
            $this->error('参数有误');
        }
        $admin=model('Admin')->get($aid);
        $this->assign('admin',$admin);

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
                'email'=>$input['email']
            ];
        }else{
            $date=[
                'username'=>$input['username'],
                'realname'=>$input['realname'],
                'tel'=>$input['tel'],
                'email'=>$input['email'],
                'password'=>md5($input['password'])
            ];
        }

        $xuhao=model('Consumer')->save($date,['id'=>intval($input['id'])]);
        if($xuhao){
            $this->success('更新成功',url('adminhotai/user'));
        }else{
            $this->error('更新失败');
        }
    }
    public function dis_update()
    {
        $a=explode(',', session('my_user','','my'));
        $aid=substr($a[0],6);
        if($aid==0||is_null($aid)){
            $this->error('参数有误');
        }
        $admin=model('Admin')->get($aid);
        $this->assign('admin',$admin);

        echo "<meta charset='UTF-8'>";
        if(!request()->isPost()){
            $this->error("非法输入");
        }
        $input=input('post.');

        $validate=validate('Distributor');
        if(!$validate->scene('edit')->check($input)){
            $this->error($validate->getError());
        }

        $distributor=Db::table('distributor')
                    ->where('id',$input['id'])
                    ->select();
        $pa=$distributor[0];
        if($pa['password']==$input['password']){
            $date=[
                'realname'=>$input['realname'],
                'tel'=>$input['tel'],
                'note'=>$input['note'],
                'email'=>$input['email']
            ];
        }else{
            $date=[
                'realname'=>$input['realname'],
                'tel'=>$input['tel'],
                'email'=>$input['email'],
                'note'=>$input['note'],
                'password'=>md5($input['password'])
            ];
        }

        $xuhao=model('Distributor')->save($date,['id'=>intval($input['id'])]);
        if($xuhao){
            $this->success('更新成功',url('adminhotai/distributor'));
        }else{
            $this->error('更新失败');
        }
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
