<?php
namespace app\admin\controller;
use think\Controller;


//网站后台支付系统设置
class Adminlogin extends Controller
{
//登录页面渲染
public function adminlogin()
{
return $this->fetch('/adminlogin');
}


}
