<?php
namespace app\admin\controller;
use think\Controller;
use think\helper;
use think\Db;
use think\Session;
use think\Request;

class LoginController extends Controller
{

//后台登录验证方法
public function adminLoginController()
{
//对接收数据进行判断

//请求方式判断
if((Request::instance()->isPost()))
{
//接收值并赋值
$admin_name=input('post.admin_name');
$admin_password=input('post.admin_password');
//对传来的值进行判断
    if(empty($admin_name)||empty($admin_password))
    {
    $this->error('用户名或密码不能为空！');
    }
    //从数据库读取数据
    $admin_info=Db::name('admin')->where('username',$admin_name)->find();
    //判断数据中管理员是否存在
    if(empty($admin_info))
    {
    $this->error('管理员账号不存在!,请重新登录');
    }
    else{
    //判断密码是否正确
          if(md5($admin_password)!=$admin_info['password'])
          {
          $this->error('密码错误，请重新输入！');
          }
          else{
          //把数据存放到session中
          $sessionData=[
          'user'=>$admin_name,
          'password'=>$admin_password
          ];
          //登录成功，设置session值:admin_name=>$admin_name
          session('admin',$sessionData);
          //登录成功跳转
          $this->success('恭喜您！登录成功！',url('admin/Admin/index'));
          }
    
    }

}
else{
//如果不是post，提示返回
$this->error("非法请求！");
}
}
}




