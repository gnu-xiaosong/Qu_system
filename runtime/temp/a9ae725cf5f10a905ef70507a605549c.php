<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"/storage/emulated/0/wwwroot/public/../application/search/view/searchIndex.html";i:1600849121;}*/ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="本系统致力于为用户提供最优质的题库搭建服务及数据可视化管理">
    <meta name="keyword" content="小松科技，网课答案，题库，系统">
    <style> 
      .xskj{text-align:center} 
    </style>
      <!--利用aiax实现网页不刷新更新内容-->
    <script>
function getAnswer()
{
//获取html中的id的值
  var q=document.getElementById("question").value;//获取题目id的值
  var keyq=document.getElementById("keyword").value;//获取关键词id的值
  var xmlhttp;    
  if (q==""&&keyq=="")
  {
  alert('请输入题目！');
    return;
  }
  //查询前提示
  document.getElementById("answer").innerHTML="<font color=\"red\">正在查询中……</font>";
  if (window.XMLHttpRequest)
  {
    // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
    xmlhttp=new XMLHttpRequest();
  }
  else
  {
    // IE6, IE5 浏览器执行代码
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    
      document.getElementById("answer").innerHTML=xmlhttp.responseText;//文本改变
    }
    
  }
  xmlhttp.open("GET","/public/index.php/search/Search/search"+"?question="+q+"&keyword="+keyq,true);
  xmlhttp.send();
}
</script>
          <!--利用aiax实现网页不刷新更新内容-->
 
    <link rel="shortcut icon" href="/public/static/admin//public/static/admin/img/favicon.png">

    <title>答案查询页-小松题库系统</title>

    <!-- Bootstrap core CSS -->
    <link href="/public/static/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/public/static/admin/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="/public/static/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="/public/static/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="/public/static/admin/css/owl.carousel.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="/public/static/admin/css/style.css" rel="stylesheet">
    <link href="/public/static/admin/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  
      <!--头部开始-->
     	
      <!--头部结束-->
      
      
      
      <!--侧边栏开始-->
      <!--侧边栏结束-->
     
    
     
      <!--main content start-->
 
          <!--表单开始-->
      
<!--题目框-->     
     
     

     
     
 <!--答案框-->
        
    

                          
                     <section class="panel">
                          <header class="panel-heading">
                              <div class="xskj">搜题能手</div>
                          </header>
                          
                          <div class="panel-body">
                          
                              <form  action="">
                                  <div class="form-group has-success">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">题目:</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" id="question" value="">
                                      </div>
                                  </div>
                                  <div class="form-group has-warning">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputWarning">关键词查询:</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" id="keyword" value="">
                                      </div>
                                  </div>
                                  
    
                                          <button type="button" class="btn btn-danger" onclick="getAnswer()">查询</button>
                                      </div>
                              </form>
                         <!--答案显示-->
                         <p id="answer">答案将在这里显示…</p>
                          </div>

                      </section>  
           
      <footer class="site-footer">
          <div class="text-center">
              2020&copy; 小松科技
              <a href="#" class="go-top">
                  <i class="icon-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/public/static/adminjs/jquery.js"></script>
    <script src="/public/static/admin/js/jquery-1.8.3.min.js"></script>
    <script src="/public/static/admin/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="/public/static/admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/public/static/admin/js/jquery.scrollTo.min.js"></script>
    <script src="/public/static/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="/public/static/admin/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="/public/static/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="/public/static/admin/js/owl.carousel.js" ></script>
    <script src="/public/static/admin/js/jquery.customSelect.min.js" ></script>
    <script src="/public/static/admin/js/respond.min.js" ></script>

    <script class="include" type="text/javascript" src="/public/static/admin/js/jquery.dcjqaccordion.2.7.js"></script>

    <!--common script for all pages-->
    <script src="/public/static/admin/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="/public/static/admin/js/sparkline-chart.js"></script>
    <script src="/public/static/admin/js/easy-pie-chart.js"></script>
    <script src="/public/static/admin/js/count.js"></script>

  <script>

      //owl carousel

      $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
			  autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
<!--2020小松科技版权所有，开发作者博客:http://www.xskj.store,开发不易，请尊重作者，勿删除版权信息，谢谢理解！-->
<!--获取更多源码，官方qq群:-->
  </body>
</html>
