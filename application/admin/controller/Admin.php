<?php
namespace app\Admin\controller;
use think\Controller;
use think\Session;
use app\admin\controller\Basic;
class Admin extends Basic
{

//后台模板主页
public function index()
{
    return $this->fetch('/index');
}

}


