<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
//规则:('替换名','所在模块名/类名/方法名');
use  think\Route;


//后台路由设置↓↓↓↓↓

/*后台登录验证路由设置*/



/**后台模板引导路由**/
Route::rule('adminlogin','admin/Adminlogin/adminlogin');//管理员后台登陆
Route::rule('site','admin/Site/site');//后台网站信息配置页*
Route::rule('email','admin/Email/email');//后台网站邮箱配置页*
Route::rule('chit','admin/Chit/chit');//后台网站短信配置页*
Route::rule('setpay','admin/Setpay/setpay');//后台网站支付配置页*
Route::rule('payroad','admin/Payroad/payroad');//后台网站支付通道配置页*
Route::rule('person','admin/Person/person');//后台基本信息页*
Route::rule('setadmin','admin/Setadmin/setadmin');//后台管理员信息页*
Route::rule('question','admin/Question/question');//后台题库信息页*
Route::rule('datatable','admin/Datatable/datatable');//后台题库信息页*
Route::rule('youjian','admin/Youjian/youjian');//后台题库信息页
Route::rule('lock','admin/Lock/lock');//后台题库信息页
Route::rule('c404','admin/C404/c404');//后台题库信息页
Route::rule('c500','admin/C500/c500');//后台题库信息页
Route::rule('loginout','admin/Loginout/loginout');//退出后台登录
Route::rule('wechat_set','admin/Wechat/wechat_set');//后台微信公众号设置
//题库收集提交页面路由
Route::rule('collect','collection/Collection/index');//首页题库收集页
//题库收集提交路由设置
Route::rule('collection','collection/Collection/collection');

//前台路由↓↓↓↓↓

/*前台模板路由设置****/
Route::rule('index','index/Index/index');

//API模块

//模块调用api路由
Route::rule('api','api/Api/api');
//查询页面
//Route::rule('searchIndex','search/Search/searchIndex');
//查询页面调用路由
//Route::rule('search','search/Search/search');

Route::rule('db','index/Index/db');//查询体验路由
//微信公众号token验证路由
Route::rule('wechat','api/Wechat/wechat');




//用户路由
Route::rule('user_login_index','user/User/user_login_index');
//Route::rule('user_index','user/User/user_login_controller');
