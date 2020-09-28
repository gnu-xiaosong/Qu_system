<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\controller\Basic;

//后台题库信息页面模板
class Question extends Basic
{
public function question()
{
//参数传递
/*$this->assign([
'name1'=>'',
'name2'=>'',
'name3'=>'',
'name4'=>'',
'name5'=>'',
]);*/
return $this->fetch('/question');
}
}
