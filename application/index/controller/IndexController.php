<?php
namespace app\index\controller;
use think\Controller;

class IndexController extends Controller
{
    public function index()
    {
      	return $this->fetch();
    }
    public function about(){
        return $this->fetch();
    }
    public function gallery(){
        return $this->fetch();
    }
}
