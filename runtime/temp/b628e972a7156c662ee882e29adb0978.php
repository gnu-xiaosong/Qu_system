<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"/storage/emulated/0/wwwroot/public/../application/admin/view/person.html";i:1600846145;s:62:"/storage/emulated/0/wwwroot/application/admin/view/header.html";i:1600846124;s:61:"/storage/emulated/0/wwwroot/application/admin/view/aside.html";i:1600841730;}*/ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="小松改">
    <meta name="keyword" content="网站，后台，模板，">
    <link rel="shortcut icon" href="/public/static/admin//public/static/admin/img/favicon.png">

    <title>小松题库系统-后台</title>

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

  <section id="container" >
      <!--头部开始-->
     <header class="header white-bg">






            <div class="sidebar-toggle-box">
              
                  <div data-original-title="人间值得" data-placement="right" class="icon-reorder tooltips"></div>
            </div>
            <!--logo start-->
            <a href="<?php echo url('admin/Admin/index'); ?>" class="logo">小松数据管理系统<span>后台</span></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                           
                             <i class="icon-tasks"></i>
                            <span class="badge bg-success">6</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            
                            <li>
                                <p class="green">你有6个任务</p>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">网站后台</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% 完成 (成功)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">数据库更新</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% 完成 (警告)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">苹果 发展 </div>
                                        <div class="percent">87%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                            <span class="sr-only">87% 完成</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">移动 App</div>
                                        <div class="percent">33%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                            <span class="sr-only">33% 完成 (危险)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info">
                                        <div class="desc">网站后台 </div>
                                        <div class="percent">45%</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                            <span class="sr-only">45% 完成</span>
                                        </div>
                                    </div>

                                </a>
                            </li>
                            <li class="external">
                                <a href="#">查看所有订单</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          
                              <i class="icon-envelope-alt"></i>
                            
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-red"></div>
                            
                            <li>
                                <p class="red">你有5个新的消息</p>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="/public/static/admin/img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">小红</span>
                                    <span class="time">7月</span>
                                    </span>
                                    <span class="message">
                                        你好，这是一个例子.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="/public/static/admin/img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">老王</span>
                                    <span class="time">10 分</span>
                                    </span>
                                    <span class="message">
                                     你好，最近在干嘛呢 ?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="/public/static/admin/img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">小鸡</span>
                                    <span class="time">3 月</span>
                                    </span>
                                    <span class="message">
                                        这是个英俊的人.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="/public/static/admin/img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">小明</span>
                                    <span class="time">7月 now</span>
                                    </span>
                                    <span class="message">
                                      你好，这是个例子
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">查看所有消息</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-alt"></i>
                            <span class="badge bg-warning">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-yellow"></div>
                            
                            
                            <li>
                                <p class="yellow">你有7天新通知</p>
                            </li>
                            
                            
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon-bolt"></i></span>
                                    这是通知.
                                    <span class="small italic">34 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon-bell"></i></span>
                                    这是通知.
                                    <span class="small italic">1 Hours</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon-bolt"></i></span>
                                   这是通知.
                                    <span class="small italic">4 hrs</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon-plus"></i></span>
                                    
                                   这是通知.
                                    <span class="small italic">Just now</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                    这是通知.
                                    <span class="small italic">10 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">查看所有通知</a>
                            </li>
                        </ul>
                    </li>
                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav ">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder="Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="/public/static/admin/img/avatar1_small.jpg">
                            <span class="username">小松子</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li><a href="#"><i class=" icon-suitcase"></i>个人资料</a></li>
                            <li><a href="#"><i class="icon-cog"></i> 设置</a></li>
                            <li><a href="#"><i class="icon-bell-alt"></i> 通知</a></li>
                            <li><a href="<?php echo url('admin/Loginout/loginout'); ?>"><i class="icon-key"></i> 退出登录</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!--search & user info end-->
            </div>
        </header>
      <!--头部结束-->
      
      
      
      <!--侧边栏开始-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              
   <ul class="sidebar-menu" id="nav-accordion">
              
              
              
                  <li>
                      <a class="active" href="/index">
                          <i class="icon-dashboard"></i>
                          <span>仪表盘</span>
                      </a>
                  </li>




                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-laptop"></i>
                          <span>版面</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="boxed_page.html">盒装页面</a></li>
                          <li><a  href="horizontal_menu.html">水平菜单</a></li>
                          <li><a  href="language_switch_bar.html">语言切换</a></li>
                      </ul>
                  </li>
                  
                  
                  
                  
                  
                  
          
                   <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-cogs"></i>
                          <span>系统配置</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo url('admin/Site/site'); ?>">网站设置</a></li>
                          <li><a  href="<?php echo url('admin/Email/email'); ?>">邮件配置</a></li>
                          <li><a  href="<?php echo url('admin/Chit/chit'); ?>">短信设置</a></li>
                          <li><a  href="<?php echo url('admin/Setpay/setpay'); ?>">支付设置</a></li>
                          <li><a  href="<?php echo url('admin/Payroad/payroad'); ?>">支付通道设置</a></li>
                      </ul>
                   </li>
                   
                   
                   
                   
                   
                   
                   
                        
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-cogs"></i>
                          <span>个人</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo url('admin/Person/person'); ?>">基本信息</a></li>
                          <li><a  href="<?php echo url('admin/Setadmin/setadmin'); ?>">修改密码</a></li>
                          <li><a  href="gallery.html">登录记录</a></li>
                          <li><a  href="todo_list.html">锁屏密码</a></li>
                      </ul>
                   </li>
                   
                   
                   
                   
          
                   
                     <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-book"></i>
                          <span>题库配置</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo url('admin/Question/question'); ?>">题库信息</a></li>
                          <li><a  href="buttons.html">api设置</a></li>
                          <li><a  href="widget.html">秘钥管理</a></li>
                          <li><a  href="slider.html">添加题目</a></li>
                          <li><a  href="nestable.html">调用统计</a></li>
                          <li><a  href="font_awesome.html">共享设置</a></li>
                      </ul>
                      </li>
                      
                      
                      
                      
                      
                      
                      
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-tasks"></i>
                          <span>用户</span>
                      </a>
                      <ul class="sub">
                             <li><a  href="form_validation.html">用户统计</a></li>
                          <li><a  href="advanced_form_components.html">用户列表</a></li>
                          <li><a  href="form_wizard.html">会员列表</a></li>
                       
                          <li><a  href="dropzone.html">用户设置</a></li>
 
                      </ul>
                  </li>
                  
                  
                  
                  
                  
                  
                  
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-th"></i>
                          <span>数据库</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo url('admin/Question/question'); ?>">数据库信息</a></li>
                          <li><a  href="<?php echo url('admin/Datatable/datatable'); ?>">数据库表</a></li>
                          <li><a  href="dynamic_table.html">数据库配置</a></li>
                          <li><a  href="advanced_table.html">联合数据库</a></li>
                          <li><a  href="editable_table.html">数据库检测</a></li>
                      </ul>
                  </li>
                  
                  
                  
                  
                  
                  
                  <li>
                      <a  href="<?php echo url('admin/Youjian/youjian'); ?>">
                          <i class="icon-envelope"></i>
                          <span>邮件</span>
                          <span class="label label-danger pull-right mail-info">2</span>
                      </a>
                  </li>
                  
                  
                  
                  
                  
                  
                  
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class=" icon-bar-chart"></i>
                          <span>调用设置</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="morris.html">调用统计</a></li>
                          <li><a  href="<?php echo url('admin/Wechat/wechat_set'); ?>">微信公众号</a></li>
                          <li><a  href="flot_chart.html">网页调用设置</a></li>
                          <li><a  href="xchart.html">调用加密设置</a></li>
                          <li><a  href="xchart.html">机器人设置</a></li>
                      </ul>
                  </li>
                  
                  
                  
                       
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-cogs"></i>
                          <span>工具箱</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="grids.html">格网</a></li>
                          <li><a  href="calendar.html">日历</a></li>
                          <li><a  href="gallery.html">画廊</a></li>
                          <li><a  href="todo_list.html">待办事项清单</a></li>
                      </ul>
                   </li>
                   
                   
                   
                  
                  
                  
                  
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-shopping-cart"></i>
                          <span>第三方工具</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="http://pay.xskj.store">小松云支付</a></li>
                          <li><a  href="">在线工具箱</a></li>
                          <li><a  href="">谷歌地图</a></li>
                      </ul>
                  </li>
                  
                  
                  
                  
                  <li>
                      <a  href="<?php echo url('admin/Lock/lock'); ?>">
                          <i class="icon-envelope"></i>
                          <span>锁屏</span>
                          <span class="label label-danger pull-right mail-info">2</span>
                      </a>
                  </li>
                  
                  
        
                  
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="icon-glass"></i>
                          <span>错误页设置</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo url('admin/C404/c404'); ?>">404 错误</a></li>
                          <li><a  href="<?php echo url('admin/C500/c500'); ?>">500 错误</a></li>
                      </ul>
                  </li>
                  
   
   </ul> 
              <!-- sidebar menu end-->
          </div>
</aside>
      <!--侧边栏结束-->
     
    
     
      <!--main content start-->
 <br>
 <br>
 <br>
      <section id="main-content">
      
          <!--表单开始-->
      
      
                                        
                                  
                      <!--widget start-->
                              
                              
                     <aside class="profile-nav alt green-border">
                      
                          <section class="panel">
                              <div class="user-heading alt green-bg">
                                  <a href="#">
                                      <img alt="" src="img/profile-avatar.jpg">
                                  </a>
                                  <h1>小松科技</h1>
                                  <p>www.xskj.store</p>
                              </div>

                              <ul class="nav nav-pills nav-stacked">
                                <li><a href="javascript:;"> <i class="icon-time"></i> 小松<span class="label label-primary pull-right r-activity">19</span></a></li>
                                  <li><a href="javascript:;"> <i class="icon-time"></i> 邮箱<span class="label label-primary pull-right r-activity">19</span></a></li>
                                  <li><a href="javascript:;"> <i class="icon-calendar"></i>2020年6月25日 <span class="label label-info pull-right r-activity">11</span></a></li>
                                  <li><a href="javascript:;"> <i class="icon-bell-alt"></i>通知<span class="label label-warning pull-right r-activity">03</span></a></li>
                                  <li><a href="javascript:;"> <i class="icon-envelope-alt"></i>消息 <span class="label label-success pull-right r-activity">10</span></a></li>
                              </ul>

                          </section>
                      </aside>
                              
                              <!--widget end-->
                              
                      
                      
                    
                      
                      
                      
             <!--表单结束-->
      </section>
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
  </section>

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
