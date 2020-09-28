<?php
namespace app\user\controller;
use think\Controller;
use think\helper;
use think\Db;
use app\user\controller\Base;
class User extends Controller{
//用户登录页面
public function login()
{

//模板渲染
return $this->fetch('./login');
}

//用户登录表单验证控制器
public function user_login_controller(){
//接收表单数据     请定时清理缓存
$user_username=input('post.username');
$user_password=input('post.password');

//接收数据的后端验证
if(empty($user_username)||empty($user_password)){
$this->error('账号或密码不能为空！');
}
//读取数据库信息
$result=Db::name('user')->where("username",$user_username)->find();
//返回数据信息判断
if(empty($result)){
$this->error('该用户名不存在！');
}
//用户状态判断
if($result['status']=0){
 $this->error('该账户已被冻结！');
}
//对密码进行判断
if(md5($user_password)!=$result['password'])
{
$this->error('密码错误请重新输入！');
}
//登录成功
 $sessionData=[
          'user'=>$user_username,
          'password'=>$user_password
          ];
//设置session值
session('user',$sessionData);
//跳转用户后台
$this->success('恭喜您！登录成功！',url('user/Index/index'));
}


}
?>