<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\controller\Basic;
use think\Db;

//网站后台系统设置
class Wechat extends Basic
{
public function wechat_set()
{
//连接数据库获取参数变量
$data=Db::name('wechat')->where('id',1)->find();//find获取一维数组，select获取二维数组
//模板变量参数赋值
$this->assign([
'status'=>$data["status"],//微信公众号开关
'abutment_url'=>$data["abutment_url"],//微信公众号对接url
'abutment_token'=>$data["abutment_token"],//微信公众号对接token
'focus_reply'=>$data["focus_reply"],//微信公众号关注回复
'noResource_reply'=>$data["noResource_reply"],//微信公众号无资源回复
'defined_keyword1'=>$data["defined_keyword1"],//微信公众号 自定义关键词1
'defined_keyword2'=>$data["defined_keyword2"],//微信公众号 自定义关键词1
'defined_keyword3'=>$data["defined_keyword3"]//微信公众号 自定义关键词1
]);


return $this->fetch('/wechat');
}
//系统配置页面信息保存控制器
public function wechat_site_Revise()
{
$status =input('post.status');//微信公众号开关
$abutment_url =input('post.abutment_url');//微信公众号对接url
$abutment_token =input('post.abutment_token');//微信公众号对接token
$focus_reply =input('post.focus_reply');//微信公众号关注回复
$noResource_reply =input('post.noResource_reply');//微信公众号资源回复
$defined_keyword1=input('post.defined_keyword1');//微信公众号自定义关键词1
$defined_keyword2=input('post.defined_keyword2');//微信公众号自定义关键词2
$defined_keyword3=input('post.defined_keyword3');//微信公众号自定义关键词3
//更新数据库网站信息
$result=Db::name('wechat')->where('id',1)->update(['status'=>$status,'abutment_url'=>$abutment_url,'abutment_token'=>$abutment_token,'focus_reply'=>$focus_reply,'noResource_reply'=>$noResource_reply,'defined_keyword1'=>$defined_keyword1,'defined_keyword2'=>$defined_keyword2,'defined_keyword3'=>$defined_keyword3]);
//$result返回值为0说明，未修改设置信息，1表示修改成功，其他为系统错误，请联系管理员解决
if($result){
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
