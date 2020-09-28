<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Session;

class Index extends Controller
{



//网站主页
    public function index()
    {
    //模板变量赋值

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
    //存在跳转后台首页
  return $this->fetch('/index');
    }
    
   
    public function db()
    {
    $keyword="测试测试";
     $result=Db::name('bank1')->where('question','like','%'.$keyword.'%')->select();//select()返回二维数组
     echo sizeof($result);
              		              		
    
    
    
    /*
    //数据库配置
$servername = "23.224.53.118";//所要连接数据库服务器的ip地址
$username = "s4396428";//数据库名
$password = "fs123456";//数据库密码M1F3pU0w2pSVyhCn
    
    	/*****数据库操作***
              		//php数据库原生查询
              		
              		//连接数据库
                    $conn = mysqli_connect($servername, $username, $password);

                    
                      // 检测连接
                     if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
    exit;
}

//连接成功操作:开始执行数据库语句操作

//数据库查询操作
//$sql = 'SELECT * FROM `xs_bank1`  WHERE `question` LIKE "%中国%"';
$sql = 'SELECT *  FROM `xs_bank1` WHERE `yquestion` LIKE \'%中国%\'';

                    //选择数据库
                    mysqli_select_db( $conn, 'question' );
//调用函数执行数据库sql语句操作
$result= mysqli_query( $conn, $sql);
//利用函数取出结果集
//$row = mysqli_fetch_array($retval);//关联数组
while($row=mysqli_fetch_array($result))
{
    echo "大小:".sizeof($row);
//$row[]里面字段可以更改，改成自己当前指定firstname所要查询的字段数据
    echo "题目:".$row["question"] . " " . "分类:".$row["classify"];
    echo "<br>";
//数据封装:采用写入文本方式

}



//把结果集用数组表达
//$data=array($row);
//dump($row);

              	/*****数据库操作***/
    
    
    
    
    
    
    /*
    $ch=curl_init();
    $uri="http://baidu.com";
    $data="凑";
curl_setopt($ch,CURLOPT_URL,$uri);

curl_setopt($ch,CURLOPT_POST,1);//设置为post

curl_setopt($ch,CURLOPT_HEADER,0);

curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

curl_setopt($ch,CURLOPT_POSTFIELDS,$data);//data为post请求的参数

$return=curl_exec($ch);//$return为接收到的返回值
echo $return;
curl_close($ch);
    
    
    /*
    //查询构造器↓↓
    //获取数据(单个数据，不能返回数组)
  $data=Db::name('bank1')->where('question','like','%法律%')->find();
  if(empty($data)){
 echo "<script>alert('该题目不存在！');</script>";
   }
   else{
 echo "问题:".$data["yquestion"]."<br>"."答案:".$data["answer1"];
 }
    //插入数据
  //$data = ['username' => 'admin', 'password' => md5('admin')];
//$result=Db::name('admin')->insert($data);
     //查询数组集
 // $data=Db::name('admin')->where('admin','admin')->select();
  //更新信息,更新的信息为数组形式
  //$data=Db::name('admin')->where('admin','admin')->update(['password'=>'1314520']);
  //查询,二维数组
// $data=Db::name('admin')->select();//查询来为一个二维数组
    //查询特定条件
   //  $data=Db::name('admin')->where('creat_time','2020')->select();
  //删除数据
 // $data=Db::name('admin')->where('creat_time','10001')->delete();
 //echo $data["password"];//总结return返回属性值，dump返回所有
 
 //利用助手函数db(),默认每次链接数据库，所以不建议使用db()函数
 //插入数据
// $db=db('admin');//表名不用加前缀
  //$db->insert(['admin'=>'myname','password'=>'0000','creat_time'=>'2020623']);
 //更新操作
// $db->where('admin','myname');
// $db->update(['password'=>'123456','creat_time'=>'2020624']);
  //链式操作，不分先后
 /* $list=Db::name('admin')            //查询的字段                 //排序方法      查询条数
         ->where('admin','myname')->field('creat_time','password')->order('id','desc')->limit(2)->select();
         dump($list);*/
   

    
  //  $result=Db::name('admin')->where('admin','myname')->find();//返回一个(第一个)数组，而select返回二维数组
 //模糊查询
 //$result=Db::name('admin')->where('password','123456')->select();//select()返回二维数组
    //区间查询
      // $result=Db::name('admin')->where('id','BETWEEN',[0,6])->select();
      //添加多条数据
    /*      $data=[
        ['admin'=>'tygcc','password'=>'ggchjv'],
        
        ['admin'=>'tygcvgcc','password'=>'ggchhghjv'],
        ['admin'=>'tygccggc','password'=>'ggchghvjv'],
        ];
        $result=Db::name('admin')->insertALL($data);*/
        //更新数据库，thinkphp包装的函数
     //   $result=Db::name('admin')->where('id',1)->setfield('admin' ,'符松');
          //数组遍历
    /*      foreach($result as $key=>$value)
          {
          
           echo $key."–".$value["admin"]."<br>";   
                  }    
        */
               
      //     return $result[2]["admin"];//输出二维数组中特定属性的值
                    
    
    }
    
    
    
}

