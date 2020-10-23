import xlwt


#写入excel方式一:可以单独写入表单字段
def write_excel(data):
	#创建一个工作薄
	workbook = xlwt.Workbook()
	#在工作表中添加表单
	sheet = workbook.add_sheet(data["sheet_name"])
	#添加表头字段
	for i in range(len(data["item_title"])):
		sheet.write(0,i,data["item_title"][i])
	
	#写入内容
	for i in range(len(data["value"])):
		for j in range(len(data["value"][i])):
			sheet.write(i+1,j,data["value"][i][j])
	#保存数据
	workbook.save(data["path"])
	print('数据写入excel中成功！')
	print('文件路径在:%s' % data["path"])


#写入excel方式二:表单表头字段与值合并后一起写入
def write_excel_xls(data):
	'''参数说明:
		@param path               excel保存目录  str
		@param sheet_name  sheet表名         str
		@param value               数据                  list (内嵌list)
		@param item_title         字段标题         list
		item_title和value要一一对应
	'''
	va = []      
	va.append(data["item_title"])         #list字段标题追加 
	for item in data["value"]:                  #list遍历追加
		va.append(item)               #list数据追加
	#创建一个工作薄
	workbook = xlwt.Workbook()  
	#在工作薄中添加一个表单
	sheet = workbook.add_sheet(data["sheet_name"])
	#设置Excel的格式
	xlwt.easyxf('font: name 宋体, color-index blue, bold on') 
	#数据写入
	for i in range(len(va)):
		for j in range(len(va[i])):
			sheet.write(i,j,va[i][j])
	#保存工作薄
	workbook.save(data["path"])
	print('数据写入excel中成功！')
	print('文件路径在:%s' % data["path"])



##############↓↓↓数据配置↓↓↓###########
data_list=[
[1,'张三','社大',20],
[1,'张三','社大',20],
[1,'张三','社大',20],
[1,'张三','社大',20],
[1,'张三','社大',20],
[1,'张三','社大',20]
]

data ={
"path" : '学生信ok息.xls',
"item_title" : ["id","姓名","学校","年龄"],
"sheet_name" : "班级学生统计信息",
"value":data_list              #list嵌套list
}
##############↑↑↑数据配置↑↑↑###########

#write_excel_xls(data)
write_excel(data)





	









