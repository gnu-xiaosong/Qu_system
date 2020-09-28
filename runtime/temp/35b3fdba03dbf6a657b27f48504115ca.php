<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"/storage/emulated/0/wwwroot/public/../application/user/view/./login.html";i:1600846476;}*/ ?>
<!DOCTYPE html>
<html lang="zh">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>用户登录-小松题库系统</title>
<link rel="icon" href="favicon.ico" type="image/ico">
<meta name="keywords" content="小松UI样式库,光年,后台模板,后台管理系统,光年HTML模板">
<meta name="description" content="小松UI样式库是一个基于Bootstrap v3.3.7的后台管理系统的HTML模板。">
<meta name="author" content="yinqi">
<link href="/public/static/user/css/bootstrap.min.css" rel="stylesheet">
<link href="/public/static/user/css/materialdesignicons.min.css" rel="stylesheet">
<link href="/public/static/user/css/style.min.css" rel="stylesheet">
<style>
.lyear-wrapper {
    position: relative;
}
.lyear-login {
    display: flex !important;
    min-height: 100vh;
    align-items: center !important;
    justify-content: center !important;
}
.login-center {
    background: #fff;
    min-width: 38.25rem;
    padding: 2.14286em 3.57143em;
    border-radius: 5px;
    margin: 2.85714em 0;
}
.login-header {
    margin-bottom: 1.5rem !important;
}
.login-center .has-feedback.feedback-left .form-control {
    padding-left: 38px;
    padding-right: 12px;
}
.login-center .has-feedback.feedback-left .form-control-feedback {
    left: 0;
    right: auto;
    width: 38px;
    height: 38px;
    line-height: 38px;
    z-index: 4;
    color: #dcdcdc;
}
.login-center .has-feedback.feedback-left.row .form-control-feedback {
    left: 15px;
}
</style>
</head>
  
<body>
<div class="row lyear-wrapper">
  <div class="lyear-login">
    <div class="login-center">
      <div class="login-header text-center">
        <h2>用户登录</h2>
      </div>
      
      
      
      <form action="<?php echo url('user/User/user_login_controller'); ?>" method="post">
        <div class="form-group has-feedback feedback-left">
          <input type="text" placeholder="请输入您的用户名" class="form-control" name="username" id="username" />
          <span class="mdi mdi-account form-control-feedback" aria-hidden="true"></span>
        </div>
        <div class="form-group has-feedback feedback-left">
          <input type="password" placeholder="请输入密码" class="form-control" id="password" name="password" />
          <span class="mdi mdi-lock form-control-feedback" aria-hidden="true"></span>
        </div>
        
        <div class="form-group">
          <button class="btn btn-block btn-primary" type="submit">立即登录</button>
        </div>
      </form>
      
      
      
      
      
      <hr>
      <footer class="col-sm-12 text-center">
        <p class="m-b-0">Copyright © 2020<a href="http://zy.xskj.store">小松题库系统</a>. All right reserved</p>
      </footer>
    </div>
  </div>
</div>
<script type="text/javascript" src="/public/static/user/js/jquery.min.js"></script>
<script type="text/javascript" src="/public/static/user/js/bootstrap.min.js"></script>
<script type="text/javascript">;</script>
</body>
</html>