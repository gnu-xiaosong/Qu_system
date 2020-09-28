<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"/storage/emulated/0/wwwroot/public/../application/collection/view/index.html";i:1600846395;}*/ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="小松改">
    <meta name="keyword" content="网站，后台，模板，">
    <link rel="shortcut icon" href="/public/static/admin//public/static/admin/img/favicon.png">

    <title>小松题库系统-题目收集</title>

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
                              题库收集
                          </header>
                          
                          <div class="panel-body">
                          
                              <form class="" action="<?php echo url('collection/Collection/collection'); ?>" method="post">
                                  <div class="form-group has-success">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputSuccess">题目:</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" name="question" value="">
                                      </div>
                                  </div>
                                  <div class="form-group has-warning">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputWarning">原题目(题目+选项):</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" name="yquestion" value="">
                                      </div>
                                  </div>
                                  
                                  <div class="form-group has-warning">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputWarning">答案1:</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" name="answer1" value="">
                                      </div>
                                  </div>
                                 <div class="form-group has-warning">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputWarning">答案2:</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" name="answer2" value="">
                                      </div>
                                  </div>
                                  <div class="form-group has-warning">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputWarning">解析:</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" name="jx" value="">
                                      </div>
                                  </div>
                                  <div class="form-group has-warning">
                                      <label class="col-sm-2 control-label col-lg-2" for="inputWarning">分类:</label>
                                      <div class="col-lg-10">
                                          <input type="text" class="form-control" name="classify" value="">
                                      </div>
                                  </div>
                                          <button type="submit" class="btn btn-danger">向服务器提交数据</button>
                                      </div>
                              </form>
                          </div>
                      </section>  
                      
                      
                      
                      
                      
                      
      
                      
                      
                      
                    
                      
                      
                      
             <!--表单结束-->      
      <!--main content end-->
      
      
      
      
      
      
      <!--footer start-->
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

  </body>
</html>
