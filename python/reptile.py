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
	re = urllib.request.Request(url=tuple["url"],headers=headers)

#异常处理
	try:
	#发起请求
		respose = urllib.request.urlopen(re,			timeout=tuple["timeout"])
		#返回数据处理
		result = respose.read().decode('utf-8')
		return result
	except urllib.error.URLError as e:
		print("请求超时！")
		exit()

def parser_html(html_content):
	#html文本解析
	#这是解析html内容函数 html_content传入的html内容
	
	#创建一个BeautifulSoup对象
	    soup = BeautifulSoup(html_content,'html.parser',from_encoding='utf-8')
	    return soup
	
def getInformation(re_ruler,data_string):
	#正则匹配
	#调用re模块函数进行正则匹配
	    data_list = re.findall(re_ruler,data_string)
	#返回匹配成功的list数据
	    return data_list
"""这是正则匹配函数:这是获取网页信息模块
	data_string:传入的被匹配的string字符串
	re_ruler:传入的匹配正则规则     
	返回值:list类型  
"""


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
    	val = data  #data为元组类型
    	mycursor.execute(sql,val)
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
	"name" :'xs_bank6',
	"column1" : 'question',       #varchar字段
	"column2" :'answer',        #varchar字段
	"column3" :'ip',         #int字段
    "column4" : 'column4' ,       #text字段
    "column5" : 'column5',        #varchar字段
    "column6" : 'column6'      #varchar字段
	}
	#data = () #列表形式
	pre()  #程序进程图
	#数据封装处理
	url = 'https://m.sohu.com/a/272778098_540760'
	timeout = 10
	tuple={"url":url,"timeout":timeout}
	#正则匹配规则
	re_ruler = re.compile(r'<p>(\d.*?)</p>',re.S)
	#请求数据
	req = request(tuple)
	#html解析(第一次处理，减小范围) 返回类型为list
	result = parser_html(req).find_all('div',class_='hidden-content hide')
	 #提示这里的result要进行数据类型转化为pytjon的基本数据类型
	#正则匹配
	#字符串内容替换
	rep = '<br/>'
	torep = ''
	
	results = getInformation(re_ruler,str(result).replace(rep,torep))
	#数据结果处理
for item in results:
	#写入数据库中
		print(item)
		data = (item,item,1,'ok','ok','ok')
		d = mysql(dict,table,data)
		print(d)
		
		