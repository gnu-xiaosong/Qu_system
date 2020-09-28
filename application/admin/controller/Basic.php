<?php
namespace app\Admin\controller;
use think\Controller;
use think\Session;
class Basic extends Controller
//所有后台模板文件继承该类，即了用于判断是否为管理员
{
  //如果你的控制器类继承了\think\Controller类的话，可以定义控制器初始化方法_initialize，在该控制器的方法调用之前首先执行。
  public function _initialize()
  {
    //判断有无admin_username这个session，如果没有，跳转到登陆界面
    if(!session('admin.user')){
      return $this->error('您没有登陆',url('admin/Adminlogin/adminlogin'));
    }
  }
}


//对于类的继承，即先执行该类