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
    <link href="/owl/Public/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="/owl/Public/Content/css/owl.carousel.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="/owl/Public/Content/css/style.css" rel="stylesheet">
    <link href="/owl/Public/Content/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="/owl/Public/js/html5shiv.js"></script>
    <script src="/owl/Public/js/respond.min.js"></script>
    <![endif]-->


    <!-- js placed at the end of the document so the pages load faster -->
    <script src="/owl/Public/js/jquery-1.8.3.min.js"></script>
    <script src="/owl/Public/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="/owl/Public/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="/owl/Public/js/jquery.scrollTo.min.js"></script>
    <script src="/owl/Public/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="/owl/Public/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="/owl/Public/js/owl.carousel.js" ></script>
    <script src="/owl/Public/js/jquery.customSelect.min.js" ></script>
    <script src="/owl/Public/js/respond.min.js" ></script>

    <!--common script for all pages-->
    <script src="/owl/Public/js/common-scripts.js"></script>
    <style type="text/css">
        .ztree{
            width: 100%;
        }
        .ztree li a{
            width: 100%;
            display: block;
            position: relative;
            line-height: 20px!important;
            height: 24px !important
        }
        .li[class~="important"] {
            color: red;
        }
    </style>
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
                        <span>菜单管理</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="general.html">新增菜单</a></li>
                        <li><a  href="buttons.html">配置菜单</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="icon-cogs"></i>
                        <span>Components</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="grids.html">Grids</a></li>
                        <li><a  href="calendar.html">Calendar</a></li>
                        <li><a  href="gallery.html">Gallery</a></li>
                        <li><a  href="todo_list.html">Todo List</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="icon-tasks"></i>
                        <span>Form Stuff</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="form_component.html">Form Components</a></li>
                        <li><a  href="advanced_form_components.html">Advanced Components</a></li>
                        <li><a  href="form_wizard.html">Form Wizard</a></li>
                        <li><a  href="form_validation.html">Form Validation</a></li>
                        <li><a  href="dropzone.html">Dropzone File Upload</a></li>
                        <li><a  href="inline_editor.html">Inline Editor</a></li>
                        <li><a  href="image_cropping.html">Image Cropping</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="icon-th"></i>
                        <span>Data Tables</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="basic_table.html">Basic Table</a></li>
                        <li><a  href="responsive_table.html">Responsive Table</a></li>
                        <li><a  href="dynamic_table.html">Dynamic Table</a></li>
                        <li><a  href="advanced_table.html">Advanced Table</a></li>
                        <li><a  href="editable_table.html">Editable Table</a></li>
                    </ul>
                </li>
                <li>
                    <a  href="inbox.html">
                        <i class="icon-envelope"></i>
                        <span>Mail </span>
                        <span class="label label-danger pull-right mail-info">2</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class=" icon-bar-chart"></i>
                        <span>Charts</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="morris.html">Morris</a></li>
                        <li><a  href="chartjs.html">Chartjs</a></li>
                        <li><a  href="flot_chart.html">Flot Charts</a></li>
                        <li><a  href="xchart.html">xChart</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="icon-shopping-cart"></i>
                        <span>Shop</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="product_list.html">List View</a></li>
                        <li><a  href="product_details.html">Details View</a></li>
                    </ul>
                </li>
                <li>
                    <a href="google_maps.html" >
                        <i class="icon-map-marker"></i>
                        <span>Google Maps </span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="icon-glass"></i>
                        <span>Extra</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="blank.html">Blank Page</a></li>
                        <li><a  href="lock_screen.html">Lock Screen</a></li>
                        <li><a  href="profile.html">Profile</a></li>
                        <li><a  href="invoice.html">Invoice</a></li>
                        <li><a  href="search_result.html">Search Result</a></li>
                        <li><a  href="404.html">404 Error</a></li>
                        <li><a  href="500.html">500 Error</a></li>
                    </ul>
                </li>
                <li>
                    <a  href="login.html">
                        <i class="icon-user"></i>
                        <span>Login Page</span>
                    </a>
                </li>

                <!--multi level menu start-->
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="icon-sitemap"></i>
                        <span>Multi level Menu</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="javascript:;">Menu Item 1</a></li>
                        <li class="sub-menu">
                            <a  href="boxed_page.html">Menu Item 2</a>
                            <ul class="sub">
                                <li><a  href="javascript:;">Menu Item 2.1</a></li>
                                <li class="sub-menu">
                                    <a  href="javascript:;">Menu Item 3</a>
                                    <ul class="sub">
                                        <li><a  href="javascript:;">Menu Item 3.1</a></li>
                                        <li><a  href="javascript:;">Menu Item 3.2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!--multi level menu end-->

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    <label class="panel-title">查询条件</label>
                </header>
                    <div class="row panel-body ">
                        <div class="form-horizontal col-lg-7">
                            <label class="col-lg-2 col-sm-2 control-label">名  称</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control col-sm-6" style="width:50% !important" id="searchname" placeholder="角色名称">
                            </div>
                        </div>
                        <div class="col-lg-5 ">
                            <button type="button" class="btn btn-primary "><i class=" icon-search"></i>查  找</button>
                            &nbsp;&nbsp;<button type="button" data-backdrop="static" data-toggle="modal" data-target="#myModal" class="btn btn-success "><i class=" icon-plus"></i> 新 增</button>
                            &nbsp;&nbsp;<button type="button" class="btn btn-danger "><i class=" icon-remove"></i> 删 除</button>
                            &nbsp;&nbsp;<button type="button" class="btn btn-info "><i class=" icon-user"></i> 设置人员</button>
                            &nbsp;&nbsp;<button type="button" class="btn btn-warning "><i class="icon-list"></i> 设置菜单</button>
                        </div>
                     </div>
            </section>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    角色列表
                </header>
                <div class="panel-body">
                    <section id="no-more-tables">
                        <table class="table table-bordered table-striped table-condensed cf">
                            <thead class="cf">
                            <tr>
                                <th class="text-center paddingNone" width="20px">
                                    <label>
                                        <input type="checkbox" value="">
                                    </label>
                                </th>
                                <th>Code</th>
                                <th>Company</th>
                                <th class="numeric">Price</th>
                                <th class="numeric">Change</th>
                                <th class="numeric">Change %</th>
                                <th class="numeric">Open</th>
                                <th class="numeric">High</th>
                                <th class="numeric">Low</th>
                                <th class="numeric">Volume</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center paddingNone" width="20px">
                                    <label>
                                        <input type="checkbox" value="">
                                    </label>
                                </td>
                                <td data-title="Code">AAC</td>
                                <td data-title="Company">AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                                <td class="numeric" data-title="Price">$1.38</td>
                                <td class="numeric" data-title="Change">-0.01</td>
                                <td class="numeric" data-title="Change %">-0.36%</td>
                                <td class="numeric" data-title="Open">$1.39</td>
                                <td class="numeric" data-title="High">$1.39</td>
                                <td class="numeric" data-title="Low">$1.38</td>
                                <td class="numeric" data-title="Volume">9,395</td>
                            </tr>
                            </tbody>
                        </table>
                    </section>
                </div>
            </section>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog"  aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">新增角色</h4>
            </div>
            <div class="modal-body form-horizontal">
               <div class="form-group">
                   <label class="col-lg-2 col-sm-2 control-label">名称</label>
                   <div class="col-lg-10">
                       <input type="text" class="form-control" id="rolename" placeholder="角色名称">
                   </div>
               </div>
                <div class="form-group">
                    <label class="col-lg-2 col-sm-2 control-label">角色描述</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" cols="60" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关  闭</button>
                <button type="button" class="btn btn-info"><i class="icon-save"></i> 保  存</button>
            </div>
        </div>
    </div>
</div>


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

  </script>
</body>
</html>