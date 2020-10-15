#-*-coding:utf8;-*-
import urllib.request
import urllib.error
import socket
import re
import time
from bs4 import BeautifulSoup 
import mysql.connector

#定义函数
def request(tuple):
	#请求url函数
		#数据封装:tuple={"url":url,"timeout":timeout}请求模块
	#header伪装
	headers = {
'User-Agent':'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/57.0.2987.133 Safari/537.36'
}
#调用request模块中方法封装请求头信息
	re = urllib.request.Request(url=tuple1["url"],headers=headers)

#异常处理
	try:
	#发起请求
		respose = urllib.request.urlopen(re,			timeout=tuple1["timeout"])
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
	    result = soup.find_all('div',class_='post-list-item')
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
    if  not mycursor:
        result = '数据库连接失败！'+'错误原因:'+ str(mycursor)
    else:
    	sql1 = "CREATE TABLE IF NOT EXISTS "+table["name"]+"( id INT UNSIGNED AUTO_INCREMENT,"+table["column1"]+" VARCHAR(100) NOT NULL, "+table["column2"]+" VARCHAR(40) NOT NULL,time DATE,"+table["column3"]+" INT(255) NOT NULL,"+table["column4"]+" TEXT(255) NOT NULL,"+table["column5"]+" VARCHAR(100) NOT NULL,"+table["column6"]+" VARCHAR(100) NOT NULL,PRIMARY KEY ( id) )ENGINE=InnoDB DEFAULT CHARSET=utf8;"
    	mycursor.execute(sql1)
    	mydb.commit()
    	sql = "INSERT INTO "+table["name"]+" ("+table["column1"]+","+table["column2"]+","+table["column3"]+","+table["column4"]+","+table["column5"]+","+table["column6"] +")"+ "VALUES (%s,%s,%s,%s,%s,%s)"
    	val = data  #data为list中嵌套tuple类型
    	mycursor.executemany(sql, val)
    	mydb.commit()
    	result ='数据库连接成功！'+str(mycursor)
    return result
    
    
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
   	
   
if __name__ == '__main__':
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
	pre()  #程序进程图
	
	#数据封装处理
	url = 'http://www.xskj.store'
	timeout = 10
	tuple1={"url":url,"timeout":timeout}
	
	#正则匹配规则
	re_ruler1 = re.compile(r'<p>(\d.*?)</p>',re.S)
	re_ruler2 = re.compile(r'<p(\d.*?)</p>',re.S)
	re_ruler3 = re.compile(r'  ',re.S)
	re_ruler4 = re.compile(r'  ',re.S)
	re_ruler5 = re.compile(r'  ',re.S)
	re_ruler6 = re.compile(r'  ',re.S)
	
	#请求数据，获取html源码
	req = request(tuple1)
	#接受返回的标签元列表
	result = parser_html(req)
	
	#数组list接收
	datalist = []
	#for循环写入list
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
		datalist.append(tuple(data))
		print(data)
		print(len(datalist) )
	#爬去数据处理 sheet或mysql处理
	d = mysql(dict,table,datalist)
print()
print('*******************************')
print('总共添加%d条数据!' % len(result))
print('======爬虫任务完成!=======')
		
		