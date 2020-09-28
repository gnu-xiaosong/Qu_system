<?php
namespace app\user\controller;
use think\Controller;
use think\Session;
use app\user\controller\Base;
class Index extends Base
//所有后台模板文件继承该类，即了用于判断是否为管理员
{
  //如果你的控制器类继承了\think\Controller类的话，可以定义控制器初始化方法_initialize，在该控制器的方法调用之前首先执行。
  public function index()
  {
    //后台模板主页
    return $this->fetch('/index');

  }
}


//对于类的继承，即先执行该类