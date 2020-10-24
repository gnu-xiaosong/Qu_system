#-*-coding:utf8;-*-
import urllib.request
import urllib.error
import socket
import re
import time
from bs4 import BeautifulSoup 
import mysql.connector
import xlwt
import os
import xlrd
from xlutils.copy import copy
import datetime


#定义函数
def request(list):
	#请求url函数
		#数据封装:tuple={"url":url,"timeout":timeout}请求模块
	#header伪装
	headers = {
'User-Agent':'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
}
#调用request模块中方法封装请求头信息
	re = urllib.request.Request(url=list["url"],headers=headers)

#异常处理
	try:
	#发起请求
		respose = urllib.request.urlopen(re,			timeout=list["timeout"])
		#返回数据处理
		result = respose.read().decode('utf-8')
		return result
	except urllib.error.URLError as e:
		print()
		print("请求超时！")
		print('错误详情:')
		print(e.reason)
		print('解决方法:您可以检查下您的网络连接！')
		print()
		print('==========很遗憾(╥﹏╥)爬取失败！==========')
		exit()

def parser_html(html_content):
	#html文本解析
	#这是解析html内容函数 html_content传入的html内容
	
	#创建一个BeautifulSoup对象
	    soup = BeautifulSoup(html_content,'html.parser',from_encoding='utf-8')
	    #利用find_all方法查找符合标准的标签元列表
	    result = soup.find_all('a',class_='e eck')
	    #返回一个列表list
	    return result
	
def getInformation(re_ruler,data_string):
	#正则匹配
	    data_list = re.findall(re_ruler,data_string)
	    return data_list

def mysql(dict,table,data):
    import mysql.connector
    mydb = mysql.connector.connect(host = dict["host"],user = dict["username"],passwd = dict["password"],database = dict["database"])
    mycursor = mydb.cursor()
    if   not mycursor:
    	result =str(mycursor)
    	status = 0     #数据连接失败状态码
    	return [result,status]
    else:
    	sql1 = "CREATE TABLE IF NOT EXISTS "+table["name"]+"( id INT UNSIGNED AUTO_INCREMENT,"+table["column1"]+" VARCHAR(100) NOT NULL, "+table["column2"]+" VARCHAR(40) NOT NULL,time DATE,"+table["column3"]+" INT(255) NOT NULL,"+table["column4"]+" TEXT(255) NOT NULL,"+table["column5"]+" VARCHAR(100) NOT NULL,"+table["column6"]+" VARCHAR(100) NOT NULL,PRIMARY KEY ( id) )ENGINE=InnoDB DEFAULT CHARSET=utf8;"
    	mycursor.execute(sql1)
    	mydb.commit()
    	sql = "INSERT INTO "+table["name"]+" ("+table["column1"]+","+table["column2"]+","+table["column3"]+","+table["column4"]+","+table["column5"]+","+table["column6"] +")"+ "VALUES (%s,%s,%s,%s,%s,%s)"
    	val = data  #data为list中嵌套tuple类型
    	mysql_result=mycursor.executemany(sql, val)
    	mydb.commit()
    	if mysql_result: #写入数据库成功
    		result =str(mycursor)
    		status = 1
    		return [result,status]
    	else:                    #写入数据库失败
    		result =str(mycursor)
    		status = 2
    		return [result,status]
    		
#excel操作写入方法
def write_excel(data_ec,datalist):
	#获取当前时间
	time = datetime.datetime.now().strftime('%Y%m%d%H')
	data = []
	for item in datalist:
		data.append(list(item))
	#创建一个工作薄
	workbook = xlwt.Workbook()
	#在工作表中添加表单
	sheet = workbook.add_sheet(data_ec["sheet_name"])
	#添加表头字段
	for i in range(len(data_ec["item_title"])):
		sheet.write(0,i,data_ec["item_title"][i])
		
	#写入内容
	for i in range(len(data)):
		for j in range(len(data[i])):
			sheet.write(i+1,j,data[i][j])
	#保存数据
	path = str(data_ec["pages"])+"_"+data_ec["table"]+time+'.xls'
	print(path)
	workbook.save(str(path))
	status = 1
	result = '文件路径在:' +data_ec["path"]+str(data_ec["pages"])
	return [result,status]


#excel追加数据
def write_excel_append(data_ec,datalist):
	#数据类型转换
	data = []
	for item in datalist:
		data.append(list(item))
	#判断文件是否存在
	is_file = os.path.exists(data_ec["path"])
	if not is_file:
		#创建一个工作薄
		workbook = xlwt.Workbook()
		#在工作表中添加表单
		sheet = workbook.add_sheet(data_ec["sheet_name"])
		#添加表头字段
		for i in range(len(data_ec["item_title"])):
			sheet.write(0,i,data_ec["item_title"][i])
		#保存数据
		workbook.save(data_ec["path"])
	#开始追加
	
	#打开一个工作薄
	workbook1 = xlrd.open_workbook(data_ec["path"])
   #获取工作簿中的所有表格(所有的sheet
	sheets = workbook1.sheet_names()  
	#获取指定sheet表格
	sheet = workbook1.sheet_by_name(sheets[0])  #默认获取第一个表格
	#获取文件中已有数据行数
	rows_line = sheet.nrows
	# 将xlrd对象拷贝转化为xlwt对象
	new_workbook = copy(workbook1)  
	# 获取转化后工作簿中的第一个表格(第一个sheet页)
	new_worksheet = new_workbook.get_sheet(0)  
	#循环添加
	for i in range(len(data)):
		for j in range(len(data[i])):
			#追加数据
			new_worksheet.write(i+rows_line,j,data[i][j])
	new_workbook.save(data_ec["path"])  # 保存工作簿
	status = 1    #成功
	result = '文件路径在:' +data_ec["path"]
	return [result,status]
			
	
			

    
#程序执行动态过程图
def pre():
	print("爬虫程序启动中,请稍等:")#加载进行中
	for i in range(26):
		a = "■" * i
		b = "□" * (25 - i)
		c = (i / 25) * 25 * 4
		print("\r{}{}{:.2f}%".format(a, b, c), end="")
		time.sleep(0.1)
	for t in range(21):
		print("正在加载:"+'='*t+"==>"+str(t*5)+"%")
		time.sleep(0.1)
		if t == 20:
			print('加载成功!结果如下:')
			break

def start(tulpe2):
	#爬取函数
	#请求数据，获取html源码
	req = request(tuple2)
	#接受返回的标签元列表
	result = parser_html(req)
	#for循环写入list
	#数组list接收
	datalist1 = []
	for item in result:
		data = [ ]
		#正则匹配#######		
		#@写入数据1
		data_item1 = getInformation(re_ruler1,str(item).replace('<br/>',' '))
		if  data_item1:
			data.append(str(data_item1[0])) #添加数据进数组
		else:
			data.append('')    #为None时添加空
			
		#@写入数据2
		data_item2 = getInformation(re_ruler2,str(item).replace('<br/>',' '))
		if data_item2:
			data.append(str(data_item2[0]))
		else:
			data.append('')
				
		#@写入数据3
		data_item3 = getInformation(re_ruler3,str(item).replace('<br/>',' '))
		if data_item3:
			data.append(str(data_item3[0])) 
		else:
			data.append('')
			
		#@写入数据4
		data_item4 = getInformation(re_ruler4,str(item).replace('<br/>',' '))
		if data_item4:
			data.append(str(data_item4[0])) 
		else:
			data.append('')
			
		#@写入数据5
		data_item5 = getInformation(re_ruler5,str(item).replace('<br/>',' '))
		if data_item5:
			data.append(str(data_item5[0])) 
		else:
			data.append('')
			
			#@写入数据6
		data_item6 = getInformation(re_ruler6,str(item).replace('<br/>',' '))
		if data_item6:
			data.append(str(data_item6[0])) 
		else:
			data.append('')
			
		#写入总的datalist列表数据
		print(data)
		datalist1.append(tuple(data))
		global data_count 
		data_count += 1   #爬取条数
		print('爬取第%d条数据成功！' % data_count ) #提示
	return datalist1
	
#提示语函数
def end():
	print()
	print('*******************************')
	print('总共爬取%d条数据!' % data_count)
	print('总共爬取%d个页面!' % pages)
	print('======爬虫任务完成!=======') 
	
def check_status(ret):
	#ret参数为list = [result,status]
	#写入数据返回状态判断函数
	if ret[1] == 0:
		print('数据库连接失败！')
		print('错误信息:%s' % ret[0])	
	elif ret[1] == 1:
		print('写入数据成功！')
		print('返回信息:%s' % ret[0])
	elif ret[1] == 2:
		print('数据为空,写入数据失败！')
		print('错误信息:%s' % ret[0])
		
			
if __name__ == '__main__':
	pre()                     #程序进程图提示
	time.sleep(3)
	data_count = 1   #爬取初始条数	###########↓↓填写配置信息↓↓#######
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
	#excel配置信息
	data_ec={
"path" : '招聘信息2020.xls',
"item_title" : ["岗位","公司","地点","薪资"],
"sheet_name" : "班级学生统计信息",
"table":'销售小时信息表'  #不加.xls  表名
}
	#正则匹配规则配置
	re_ruler1 = re.compile(r'<span>(.*?)</span>',re.S)
	re_ruler2 = re.compile(r'<aside>(.*?)</aside>',re.S)
	re_ruler3 = re.compile(r'<i>(.*?)</i>',re.S)
	re_ruler4 = re.compile(r'<em>(.*?)</em>',re.S)
	re_ruler5 = re.compile(r'  ',re.S)
	re_ruler6 = re.compile(r'  ',re.S)
   #目标网站url
	base_url = 'https://m.51job.com/company/joblist.php?jobarea=220200&funtype=&saltype=&workyear=&keyword=&pageno='
	#爬取页面数量控制
	contr_pages = 100
	###########↑↑填写配置信息↑↑######

	#分页爬取重构url
	pages =1       #初始页数
	while(pages):
		if pages  > contr_pages:      #控制爬取的页面数量
			end() 
			break
		print('====================当前正爬取第%d页===========================' % pages)
		url = str(base_url) + str(pages)  
		tuple2 = {"url":url,"timeout":10}
		#获得数据类型为:list内嵌tuple
		datalist = start(tuple2)
		#判断页面数量加载跳出循环
		if not datalist:
			end()            
			break
		#为字典添加元素
		data_ec["pages"]=pages
		
		
		
		#注释即可控制↓↓↓↓
		#写入excel(生成多表)
		#ret = write_excel(data_ec,datalist)
		#写入excel(生成单表)
		ret = write_excel_append(data_ec,datalist)
		#写入数据库	
		#ret = mysql(dict,table,datalist) 
		#注释即可控制↑↑↑↑
		
		
		#调用验证函数，判断状态
		check_status(ret)
		#页数自增
		pages +=1 	
print('爬虫任务结束♥♥♥♥♥！')    	
			 
		 
				
				 
				 
				 
				 
				 
				 
			
		
			
			
		
			