<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\controller\Basic;

//后台管理员修改页面模板
class Setadmin extends Basic
{
public function setadmin()
{
//参数传递
/*$this->assign([
'name1'=>'',
'name2'=>'',
'name3'=>'',
'name4'=>'',
'name5'=>'',
]);*/
return $this->fetch('/setadmin');
}
}
