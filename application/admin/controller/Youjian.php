<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\controller\Basic;

//网站后台支付系统设置
class Youjian extends Basic
{
public function youjian()
{
//参数传递
/*$this->assign([
'name1'=>'',
'name2'=>'',
'name3'=>'',
'name4'=>'',
'name5'=>'',
]);*/
return $this->fetch('/youjian');
}
}
