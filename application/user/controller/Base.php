<?php
namespace app\user\controller;
use think\Controller;
class Base extends Controller{

public function _initialize(){
//开启session
session_start();
//验证session(user.login)
if(!session('user.user')){
return $this->error('您没有登陆',url('user/User/login'));
}
}
}

?>