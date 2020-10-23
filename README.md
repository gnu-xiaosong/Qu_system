# 题库资源管理系统
=========================
## 前言

一款开源免费的题库系统程序，依托于thinkphp开发，支持多用户
## 开发者
* 开发者:小松科技
* 官方:[官方地址](http://zy.xskj.store)
* 时间:2020-09-09
## 体验
* 首页:[首页](http://zy.xskj.store)
* 搜题页:[搜题](http://zy.xskj.store/public/index.php/search/search/searchindex.html)
* 资源搜集页:[资源搜集](http://zy.xskj.store/public/index.php/collect.html)
* 后台地址:[后台](http://zy.xskj.store/public/index.php/adminlogin.html)
  账号:admin
  密码:admin
## -2020.07.17，添加网页查询

添加网页查询，查询结果全覆盖

## -2020.08.10,添加微信公众号查询

为了解决用户需求，添加了微信公众号查询，支持管理员控制微信对接token值，

## -2020.08.13,修复部分程序BUG

修复管理员登录session验证安全问题，

## -2020.09.16,支持多用户

新添加支持多用户管理，更加灵活，修复部分bug. 更加轻量上手，

## -2020.09.17,添加网站首页导航栏，修复点击报错问题。更加合理

## -2020.09.17,添加安装页面引导。

`让安装更加简单方便，修复以前数据库导入的复杂安装方式，最新ui安装页面，简洁大方。 自定义网站信息。具体安装引导目录在public/install目录下，独立安装页面，与以前的复杂安装互不干扰。完全独立。即你可以自定义选择安装方式。 使用方法:http://域名/install/ 进入安转引导页面，如果你已经安装成功，您可以选择删掉还目录，以防误操作重新安装导致数据丢失。 `<br>截图如下: image image

## -2020.09.18 修复安装锁🔒

添加安装锁，防止程序重新安装。
## -2020.09.18 添加首页模板

截图: image

## -2020.09.18 添加安装许可页面

截图: image

## -2020.09.18 添加资源采集ip自动记录，添加资源ip自动记录

## -2020.09.20 添加5万多的题库资源，自带优化了查询接口，测试题库爬虫采集功能。

题库资源位于public目录下

## -2020.09.21 添加20万题库及部分scv题库(资源来源于网络，如有侵权请联系删除)

## -2020.09.22 修改程序入口文件(程序版本为5.0+),直接将程序解压放入网站根目录，访问域名即可。不需要以前版本需要指定public为根目录文件。

          ` 修改网页搜索页面搜索提示优化。

           更改目录文件结构，题库与需要后续自行导入。`
## -2020.09.22 添加python爬虫采集题库功能
python程序位于python目录下

## -2020.10.15 修改python爬虫程序，添加新特性
在版本1的基础上添加对多条数据的爬虫，改文件在python目录下的new_spider.py文件
演示地址:http://songye-image-upyun.test.upcdn.net/photo/Pydroid%203.mp4
## -2020.10.23  添加分页爬虫脚本
  脚本在python目录下分页爬取.py文件
* 相关配置信息:
```
###########↓↓填写配置信息↓↓#######
	#数据库配置
	dict = {
	"host" : 'localhost',       #数据库地址
	"username" :'root',       #数据库用户名
	"password" :'',               #数据库密码
    "database" : 'question' #选择数据库名
	}
	#数据表及字段配置
	table = {
	"name" :'xs_other',
	"column1" : 'title',       #varchar字段
	"column2" :'picture_ink',          #varchar字段
	"column3" :'ip',                    #int字段
    "column4" : 'column4' ,       #text字段
    "column5" : 'column5',        #varchar字段
    "column6" : 'column6'        #varchar字段
	}
	#正则匹配规则配置
	re_ruler1 = re.compile(r'<p>(\d.*?)</p>',re.S)
	re_ruler2 = re.compile(r'<p(\d.*?)</p>',re.S)
	re_ruler3 = re.compile(r'  ',re.S)
	re_ruler4 = re.compile(r'  ',re.S)
	re_ruler5 = re.compile(r'  ',re.S)
	re_ruler6 = re.compile(r'  ',re.S)
   #目标网站url
	base_url = 'https://m.51job.com/company/joblist.php?jobarea=220200&funtype=&saltype=&workyear=&keyword=&pageno='
	###########↑↑填写配置信息↑↑######
	
```
* 使用命令:自己修改文件名即可
```
python 文件名.py   
```
