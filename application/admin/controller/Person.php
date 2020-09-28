<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\controller\Basic;

//后台基本信息页面模板
class Person extends Basic
{
public function person()
{
//参数传递
/*$this->assign([
'name1'=>'',
'name2'=>'',
'name3'=>'',
'name4'=>'',
'name5'=>'',
]);*/
return $this->fetch('/person');
}
}
