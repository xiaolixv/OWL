<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>主页</title>

    <!-- Bootstrap core CSS -->
    <link href="/owl/Public/Content/css/bootstrap.min.css" rel="stylesheet">
    <link href="/owl/Public/Content/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="/owl/Public/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/owl/Public/Content/css/style.css" rel="stylesheet">
    <link href="/owl/Public/Content/css/style-responsive.css" rel="stylesheet" />
    <link href="/owl/Public/assets/bootstrap-datetimepicker/css/datetimepicker.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="/owl/Public/js/html5shiv.js"></script>
    <script src="/owl/Public/js/respond.min.js"></script>
    <![endif]-->


    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/owl/Public/js/jquery-1.8.3.min.js"></script>
    <script src="/owl/Public/js/bootstrap.min.js"></script>
    <script src="/owl/Public/js/jquery.cookie.js"></script>
    <script class="include" src="/owl/Public/js/jquery.dcjqaccordion.2.7.min.js"></script>
    <script src="/owl/Public/js/respond.min.js" ></script>
    <script src="/owl/Public/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <script src="/owl/Public/assets/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="/owl/Public/js/common-scripts.js"></script>
    <script src="/owl/Public/js/util.js"></script>
</head>

<body>

<section id="container" >
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo">Flat<span>lab</span></a>
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
                            <p class="green">You have 6 pending tasks</p>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Dashboard v1.3</div>
                                    <div class="percent">40%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Database Update</div>
                                    <div class="percent">60%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Iphone Development</div>
                                    <div class="percent">87%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                        <span class="sr-only">87% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Mobile App</div>
                                    <div class="percent">33%</div>
                                </div>
                                <div class="progress progress-striped">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                        <span class="sr-only">33% Complete (danger)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Dashboard v1.3</div>
                                    <div class="percent">45%</div>
                                </div>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                        <span class="sr-only">45% Complete</span>
                                    </div>
                                </div>

                            </a>
                        </li>
                        <li class="external">
                            <a href="#">See All Tasks</a>
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
                            <p class="red">You have 5 new messages</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jonathan Smith</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is an example msg.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jhon Doe</span>
                                    <span class="time">10 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, Jhon Doe Bhai how are you ?
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jason Stathum</span>
                                    <span class="time">3 hrs</span>
                                    </span>
                                    <span class="message">
                                        This is awesome dashboard.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jondi Rose</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is metrolab
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">See all messages</a>
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
                            <p class="yellow">You have 7 new notifications</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-danger"><i class="icon-bolt"></i></span>
                                Server #3 overloaded.
                                <span class="small italic">34 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-warning"><i class="icon-bell"></i></span>
                                Server #10 not respoding.
                                <span class="small italic">1 Hours</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-danger"><i class="icon-bolt"></i></span>
                                Database overloaded 24%.
                                <span class="small italic">4 hrs</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-success"><i class="icon-plus"></i></span>
                                New user registered.
                                <span class="small italic">Just now</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                Application error.
                                <span class="small italic">10 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">See all notifications</a>
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
                        <img alt="" src="img/avatar1_small.jpg">
                        <span class="username">Jhon Doue</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li><a href="#"><i class=" icon-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                        <li><a href="#"><i class="icon-bell-alt"></i> Notification</a></li>
                        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">
        <li>
            <a class="active" href="index.html">
                <i class="icon-dashboard"></i>
                <span>主页</span>
            </a>
        </li>

        <li class="sub-menu">
            <a href="javascript:;" >
                <i class="icon-laptop"></i>
                <span>权限管理</span>
            </a>
            <ul class="sub">
                <li><a  href="../Role/rolelist.html">角色管理</a></li>
                <li><a  href="../Menu/menulist.html">菜单管理</a></li>
            </ul>
        </li>

        <li class="sub-menu">
            <a href="javascript:;" >
                <i class="icon-book"></i>
                <span>项目管理</span>
            </a>
            <ul class="sub">
                <li><a  href="../Project/projectlist.html">项目管理</a></li>
                <li><a  href="../Project/StoryList.html">Story管理</a></li>
                <li><a  href="../Project/ScrumList.html">Scrum管理</a></li>
            </ul>
        </li>

        <!--multi level menu end-->

    </ul>
    <!-- sidebar menu end-->
</div>

    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content" style="min-height: 650px">
        <link rel="stylesheet" type="text/css" href="/owl/Public/Content/css/zTreeStyle.css">
<section class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    左侧菜单列表
                              <span class="tools pull-right">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                </header>
                <div class="panel-body zTreeDemoBackground left dd">
                        <ol id="treeDemo" class="ztree dd-list"></ol>
                </div>
            </section>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="menuUpdate" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">新增菜单</h4>
            </div>
            <div class="modal-body form-horizontal">
                <div class="form-group">
                    <label class="col-lg-2 col-sm-2 control-label">名  称</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="menuname" placeholder="左侧菜单名称">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 col-sm-2 control-label">URL</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="url" placeholder="左侧菜单URL">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 col-sm-2 control-label">描  述</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" id="menuremark" cols="60" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关  闭</button>
                <button type="button" class="btn btn-info" id="savemenu"><i class="icon-save"></i> 保  存</button>
            </div>
        </div>
    </div>
</div>

<script src="/owl/Public/js/jquery.ztree.all-3.5.min.js"></script>
<SCRIPT type="text/javascript" >

    <!--
    var setting = {
        view:{
            showLine : false,
            showIcon:false,
            addHoverDom:addHoverDom,
            removeHoverDom:removeHoverDom,
            txtSelectedEnable: false
        },
        edit:{
            enable:true
        },
        callback:{
            beforeEditName:beforeEditName,
            beforeRemove: beforeRemove
        },
        data: {
            simpleData: {
                enable: true
            }
        }

    };

    var menuModel={};
    var parentNode={};

    function beforeRemove(treeId, treeNode){
        var flag=false; //treeNode.id
        $.when(deleteNode(treeId, treeNode))
        .done(function(){
            return flag;
        })
    }

    function deleteNode(treeId, treeNode){
        var deferred= $.Deferred();
        var data={};
        data.id=treeNode.id;
        $.ajax({
            type: 'POST',
            dataType:'json',
            url: "/owl/index.php/Home/Menu/DeleteMenu",
            data: data,
            success:function(data){
                deferred.resolve();
            }
        });
        return deferred;
    }

    function removeHoverDom(treeId,treeNode){
        $("#addBtn_"+treeNode.tId).unbind().remove();
    }

    var count=100;

    function cleardialog(){
        $("#menuname").val("");
        $("#menuremark").val("");
    }

    function addHoverDom(treeId, treeNode) {
        var sObj = $("#" + treeNode.tId + "_span");
        if (treeNode.editNameFlag || $("#addBtn_"+treeNode.tId).length>0) return;
        var addStr = "<button class='btn bg-success btn-xs line12' style='margin-left: 10px' id='addBtn_" + treeNode.tId + "' " +
                " onfocus='this.blur();'><i class='icon-plus'></i>新 增</button>";
        sObj.after(addStr);
        var btn = $("#addBtn_"+treeNode.tId);
        if (btn) btn.bind("click", function(){
            menuModel.pId=treeNode.id;
            parentNode={};
            parentNode=treeNode;
            menuModel.isAdd=true;
            cleardialog();
            $('#menuUpdate').modal({
                backdrop: 'static'
            })
            $("#menuUpdate").modal('show');
            return false;
        });
    };

    $(document).ready(function(){
        $.ajax({
            type:"GET",
            dataType:'json',
            url:"./searchlist",
            success:function(data){
                $.fn.zTree.init($("#treeDemo"), setting, data);
            }
        });
    });

    function beforeEditName(treeid,treenode){
        cleardialog();
        $('#menuUpdate').modal({
            backdrop: 'static'
        })
        $("#menuUpdate").modal('show');
        menuModel.updateTreeNode=treenode;
        $("#menuname").val(treenode.name);
        $("#menuremark").val(treenode.remark);
        return false;
    }

    $("#savemenu").click(function(){
        if(menuModel.isAdd) {
            menuModel.name = $("#menuname").val();
            menuModel.remark = $("#menuremark").val();
            menuModel.url=$("#url").val();
            $.ajax({
                type: 'POST',
                dataType:'json',
                url: "/owl/index.php/Home/Menu/AddMenu",
                data: menuModel,
                success:function(data){
                    if(!util.isNullOrEmpty(data)) {
                        menuModel.id = data;
                        var zTree = $.fn.zTree.getZTreeObj("treeDemo");
                        zTree.addNodes(parentNode, menuModel);
                        menuModel = {};
                    }
                }
            });

        }else{
            menuModel.updateTreeNode.name=$("#menuname").val();
            menuModel.updateTreeNode.remark=$("#menuremark").val();
            menuModel.updateTreeNode.url=$("#url").val();
            var m={};
            m._id=menuModel.updateTreeNode._id;
            m.id=menuModel.updateTreeNode.id;
            m.pId=menuModel.updateTreeNode.pId;
            m.name=menuModel.updateTreeNode.name;
            m.url=menuModel.updateTreeNode.url;
            m.remark=menuModel.updateTreeNode.remark;
            $.ajax({
                type: 'POST',
                dataType:'json',
                url: "/owl/index.php/Home/Menu/UpdateMenu",
                data: m,
                success:function(data){
                    if(data==null) {
                        var zTree = $.fn.zTree.getZTreeObj("treeDemo");
                        zTree.refresh();
                        menuModel = {};
                    }
                }
            });
        }
        $("#menuUpdate").modal('hide');
    });

    //-->
</SCRIPT>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            2013 &copy; FlatLab by VectorLab.
            <a href="#" class="go-top">
                <i class="icon-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>
</body>
</html>