<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>创建账户</title>

    <!-- Bootstrap core CSS -->
    <link href="/OWL/Public/Content/css/bootstrap.min.css" rel="stylesheet">
    <link href="/OWL/Public/Content/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="/OWL/Public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/OWL/Public/Content/css/style.css" rel="stylesheet">
    <link href="/OWL/Public/Content/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="/OWL/Public/js/html5shiv.js"></script>
    <script src="/OWL/Public/js/respond.min.js"></script>
    <![endif]-->
    <script src="/OWL/Public/js/jquery-1.8.3.min.js"></script>
    <script src="/OWL/Public/js/util.js"></script>

    <script type="text/javascript">
        function  checkFunction(){
            var flag=true;
            if($("#password").val()!=$("#repassword").val()){
                alert("两次输入的密码不一样，请重新输入。");
                $("#password").val("");
                $("#repassword").val("");
                flag=false;
            }else if(util.isNullOrEmpty($("#userName").val())){
                alert("用户名不能为空。")
                $("#userName").focus();
                flag=false;
            }else  if(util.isNullOrEmpty($("#email").val())){
                alert("Email不能为空。");
                $("#email").focus();
                flag=false;
            }
            return flag;
        }
    </script>
</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="/OWL/index.php/Home/Login/registerUser" onsubmit="return checkFunction()" method="post" >
        <h2 class="form-signin-heading">立即注册</h2>
        <div class="login-wrap">
            <p> 请输入您的账户详细信息</p>
            <input type="text" class="form-control" id="userName" placeholder="用户名" required autofocus name="username">
            <input type="text" class="form-control" id="email" placeholder="Email" autofocus name="email">
            <input type="password" class="form-control" id="password" required placeholder="密码" name="password">
            <input type="password" class="form-control" id="repassword" required placeholder="请在输入密码">
            <button class="btn btn-lg btn-login btn-block" type="submit" >提交</button>
            <div class="registration">
               准备注册.
                <a class="" href="login.html">
                    登录
                </a>
            </div>
        </div>
      </form>
    </div>
  </body>
</html>