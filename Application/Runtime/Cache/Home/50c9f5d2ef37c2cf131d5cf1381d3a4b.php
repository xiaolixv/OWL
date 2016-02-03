<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="用户登录">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>用户登录</title>

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
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">

<div class="container">

    <form class="form-signin" action="/OWL/index.php/Home/Login/checkLogin" method="post">
        <h2 class="form-signin-heading">立即登录</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" required name="username" placeholder="用户名" autofocus>
            <input type="password" class="form-control" required name="password" placeholder="密码">
            <label class="checkbox">
                <input type="checkbox" value="remember-me"> 记住账号
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> 忘记密码？</a>

                </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">登录</button>
            <p>or you can sign in via social network</p>
            <div class="login-social-link">
                <a href="index.html" class="facebook">
                    <i class="icon-facebook"></i>
                    Facebook
                </a>
                <a href="index.html" class="twitter">
                    <i class="icon-twitter"></i>
                    Twitter
                </a>
            </div>
            <div class="registration">
                你还没有账户？
                <a class="" href="registration">
                    申请账户
                </a>
            </div>

        </div>

        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Forgot Password ?</h4>
                    </div>
                    <div class="modal-body">
                        <p>Enter your e-mail address below to reset your password.</p>
                        <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                        <button class="btn btn-success" type="button">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal -->

    </form>

</div>



<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>