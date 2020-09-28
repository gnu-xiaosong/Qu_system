<?php

function record()
{
//统计记录访问者ip及相关信息…函数
 
//获取访问者ip
$ip=$_SERVER["REMOTE_ADDR"];
//获取访问者时间
$time=date("Y.m.d.H:i:s");
//获取访问者地理位置
$url ="http://pv.sohu.com/cityjson？ip=".$ip;
$ch = curl_init();  
    curl_setopt($ch, CURLOPT_URL, $url);  

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) ; // 获取数据返回    

    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true) ; // 在启用 CURLOPT_RETURNTRANSFER 时候将获取数据返回    

    $data = curl_exec($ch);  
    curl_close($ch);  

//获取访问者浏览器信息
if (!empty($_SERVER['HTTP_USER_AGENT'])) {
        $os = $_SERVER['HTTP_USER_AGENT'];
        if (preg_match('/win/i', $os)) {
            $os = 'Windows';
        } else if (preg_match('/mac/i', $os)) {
            $os = 'MAC';
        } else if (preg_match('/linux/i', $os)) {
            $os = 'Linux';
        } else if (preg_match('/unix/i', $os)) {
            $os = 'Unix';
        } else if (preg_match('/bsd/i', $os)) {
            $os = 'BSD';
        } else {
            $os = 'Other';
        }
    } else {
        $os= '位置浏览器信息';
    }
//写入recordCollect.txt文件

//判断是否存在recordCollect.txt文件
$file="recordCollect.txt";
if(!file_exists($file))
{

//不存在，创建recordCollect.txt文件,在public目录下
$insert="访问者信息统计:\n"."   ip"."     "."     时间"."      "."        浏览器"."     "."           地理位置信息";
file_put_contents($file, $insert);

}
//把访问者信息写入recordCollect.txt文件
$newData=iconv("GB2312","UTF-8//IGNORE",$data);//json编码转化为中文，防止乱码


$txt="\n".$ip."  ".$time."  ".$os."  ".$newData;
$re=file_put_contents($file,$txt,FILE_APPEND);
}
?>