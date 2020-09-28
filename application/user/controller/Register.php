<?php
namespace app\user\controller;
use think\Controller;
use think\helper;
use think\Db;
class Register extends Controller{

//注册页面模板渲染
public function index()
{
return $this->fetch('/register');
}

//注册页面表单提交方法
public function register_controller()
{
//开启session
Session_start();
//获取session中保存的验证码
$emailCode=$_SESSION['code'];
$email=$_SESSION['email'];
//接收参数数据
$username=input('get.username');
$password=input('get.password');
$rpassword=input('get.rpassword');
$code=input('get.code');
//数据有效性检验
if(empty($rpassword)||empty($password)||empty($username)||empty($code))
{
$this->error('所填项目都不能为空！');
}

//邮箱账号获取验证
if(empty($email)){
$this->error('未知错误，请先发送邮箱验证码再提交！');
}

//用户名或密码长度检验
if(strlen($username)<6)
{
$this->error('用户名不能小于6位字符！');
}

if(strlen($password)<6)
{
$this->error('密码不能小于6位字符！');
}


//邮箱格式验证
$regex="/([a-z0-9]*[-_.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[.][a-z]{2,3}([.][a-z]{2})?/i";
$result1= preg_match($regex,$email);
if($result1=false){
$this->error('邮箱格式不正确！');
}
//密码一致性检验
if($password!=$rpassword)
{
$this->error('两次填写密码不一致！');
}
//验证码检验
if($emailCode!=$code)
{
$this->error('验证码不正确！');
}
//邮箱唯一性验证 读取数据库
$result=Db::name('user')->where('email',$email)->find();
if(!empty($result))
{
$this->error('该邮箱已被注册！');
}
//写入数据库
$result=Db::name('user')->data(['username'=>$username,'password'=>md5($password),'email'=>$email,'status'=>1])->insert();
if(empty($result))
{
$this->error('未知错误，注册失败！');
}
$this->success('恭喜您！注册成功！正跳转到登录页面',url('user/User/login'));
}

}

?>