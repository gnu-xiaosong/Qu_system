<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\controller\Basic;

//网站后台支付系统设置
class Loginout extends Basic
{
//退出登录方法
public function loginout()
{
//清除保存的session值
session(null);
return $this->success('退出成功！');
}

}
