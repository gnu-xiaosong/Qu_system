<?php
namespace app\collection\controller;
use think\Controller;
use think\helper;
use think\Db;
//题目收集控制器
class collection extends Controller
{
  //如果你的控制器类继承了\think\Controller类的话，可以定义控制器初始化方法_initialize，在该控制器的方法调用之前首先执行。
public function collection()
{


  //接收数据
  $question=input('post.question');
  $yquestion=input('post.yquestion');
  $jx=input('post.jx');//题目解析
  $answer1=input('post.answer1');
  $answer2=input('post.answer2');
  $classify=input('post.classify');
  //对写入数据进行常规判断
  if(empty($question))
  {
   $this->error('题目不能为空！');
  }
  if(empty($answer1)&&empty($answer2))
  {
   $this->error('至少要有一个答案！');
  }
  //题目相同性判断
  $compare=Db::name('bank1')->where('question',$question)->find();
  if(!empty($compare)){
  $this->error('该题目已经存在！');
  }
  //写入数据库:向数据库question中xs_bank1 插入数据
  $data=['question'=>$question,'yquestion'=>$yquestion,'answer1'=>$answer1,'answer2'=>$answer2,'jx'=>$jx,'classify'=>$classify];
  $result=Db::name('bank1')->insert($data);
  //判断是否写入数据库成功
  if($result)
  {
  $this->success('添加成功！感谢您的支持！');
  
  }
  else{
   $this->error('服务器异常,添加失败！');
  }
  //调用函数公共函数commen.php的record()方法;
  record();
}
//题库提交页面渲染
public function index()
{
return $this->fetch('/index');
}
}