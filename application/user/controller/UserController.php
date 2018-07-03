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
        $aid=substr($a[0],6);
        if($aid==0||is_null($aid)){
            $this->error('参数有误');
        }
        $consumer=model('Consumer')->get($aid);
        $this->assign('consumer',$consumer);

        $id=input('param.id');
        if($id==0||is_null($id)){
            $this->error('参数有误');
        }

        $commodity=Db::table('commodity')
                    ->where('category_id',$id)
                    ->select();

        $this->assign('commodity',$commodity);

        $categorys=model('Category')->getCategorys();
        $this->assign('categorys',$categorys);

		return $this->fetch('');
    }
    public function shopping()
    {
        $a=explode(',', session('me_user','','me'));
        $aid=substr($a[0],6);
        if($aid==0||is_null($aid)){
            $this->error('参数有误');
        }
        $consumer=model('Consumer')->get($aid);
        $this->assign('consumer',$consumer);

        $orders=Db::table('order')
                    ->where('status','3')
                    ->select();
        $this->assign('orders',$orders);

        $categorys=model('Category')->getCategorys();
        $this->assign('categorys',$categorys);

        return $this->fetch('');
    }
    public function order()
    {
        $a=explode(',', session('me_user','','me'));
        $aid=substr($a[0],6);
        if($aid==0||is_null($aid)){
            $this->error('参数有误');
        }
        $consumer=model('Consumer')->get($aid);
        $this->assign('consumer',$consumer);

        $orders=Db::table('order')
                    ->where('status','1')
                    ->whereOr('status','2')
                    ->select();
        $this->assign('orders',$orders);
        
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
    public function add()
    {
        $id=input('param.id');
        if($id==0||is_null($id)){
            $this->error('参数有误');
        }

        $commodity=Db::table('commodity')
                    ->where('id',$id)
                    ->select();

        $com=$commodity[0];
        $date=[
                'spname'=>$com['spname'],
                'description'=>$com['description'],
                'category_id'=>$com['category_id'],
                'logo'=>$com['logo'],
                'content'=>$com['content'],
                'count'=>$com['count'],
                'status'=>'3',
                'sum'=>'1'
            ];

        $xuhao=model('Order')->add($date);
        if($xuhao){
            $this->success('增加成功',url('user/shopping'));
        }else{
            $this->error('增加失败');
        }
    }
    public function order_add()
    {
        // $input=input('post.');
        // $total=$input['total'];
        $xuhao;
        $order=Db::table('order')
                    ->where('status','3')
                    ->select();
        foreach ($order as $key=>$value) {
            $or=$order[$key];
            $date=[
                    'status'=>'1'
                ];

            $xuhao=model('Order')->save($date,['id'=>intval($or['id'])]);
        }
        if($xuhao){
            $this->success('更新成功',url('user/order'));
        }else{
            $this->error('更新失败');
        }
    }
    public function delete()
    {
        $id=input('param.id');
        if($id==0||is_null($id)){
            $this->error('参数有误');
        }

        $order=model('Order')->get($id);
        if(!is_null($order->delete())){
            $this->success('删除成功','user/shopping');
        }
        $this->error('删除失败');
    }
    public function logout()
    {
        session(null,'me');
        $this->redirect('@index/index/index');
    }
}
