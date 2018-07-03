<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class IndexController extends Controller
{
    public function index()
    {
        $categorys=model('Category')->getCategorys();
        $this->assign('categorys',$categorys);

        $commodity=model('Commodity')->getCommoditys();
        $this->assign('commodity',$commodity);
      	return $this->fetch();
    }
    public function category()
    {
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
}
