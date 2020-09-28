<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\controller\Basic;
use think\Db;

//网站后台系统设置
class Site extends Basic
{
public function site()
{
//连接数据库获取参数变量
$data=Db::name('websystem')->where('ID',1)->find();//find获取一维数组，select获取二维数组
//模板变量参数赋值
$this->assign([
'web_title'=>$data["web_title"],//网站标题
'web_description'=>$data["web_description"],//网站描述
'web_beian'=>$data["web_beian"],//网站备案号
'web_keyword'=>$data["web_keyword"],//网站关键词
'web_copyright'=>$data["web_copyright"]//网站版权信息
//网站logo采用文件上传的方式赋值

//网站ico也采用文件上传的方式
]);


return $this->fetch('/site');
}
//系统配置页面信息保存控制器
public function siteRevise()
{
$web_title=input('post.web_title');//获取网站标题
$web_keyword=input('post.web_keyword');//获取网站关键词
$web_beian=input('post.web_beian');//获取网站备案号
$web_description=input('post.web_description');//获取网站描述
$web_copyright=input('post.web_copyright');//获取网站的版权信息
//更新数据库网站信息
$result=Db::name('websystem')->where('ID',1)->update(['web_title'=>$web_title,'web_keyword'=>$web_keyword,'web_description'=>$web_description,'web_copyright'=>$web_copyright,'web_beian'=>$web_beian]);
//$result返回值为0说明，未修改设置信息，1表示修改成功，其他为系统错误，请联系管理员解决
if($result==1){
$this->success('修改成功！');
}
if($result==0){
$this->error('您未修改！');
}
else{
$this->error('系统错误！请联系作者解决！');
}

}
}
