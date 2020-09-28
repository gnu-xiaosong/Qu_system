<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\controller\Basic;

//网站后台锁屏系统设置
class Lock extends Basic
{
public function lock()
{
//参数传递
/*$this->assign([
'name1'=>'',
'name2'=>'',
'name3'=>'',
'name4'=>'',
'name5'=>'',
]);*/
return $this->fetch('/lock');
}
}
