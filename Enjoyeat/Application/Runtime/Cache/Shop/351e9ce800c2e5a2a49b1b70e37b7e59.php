<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SpaceLab</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="/1/gg/XDLProject/Enjoyeat/Public/assets/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="/1/gg/XDLProject/Enjoyeat/Public/assets/css/font-awesome.min.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="/1/gg/XDLProject/Enjoyeat/Public/assets/css/animate.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="/1/gg/XDLProject/Enjoyeat/Public/assets/css/main.css">
    <link rel="stylesheet" href="/1/gg/XDLProject/Enjoyeat/Public/assets/css/my.css">
    <!-- Vector Map  -->
    <link rel="stylesheet" href="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/jvectormap/css/jquery-jvectormap-1.2.2.css">
    <!-- ToDos  -->
    <link rel="stylesheet" href="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/todo/css/todos.css">
    <!-- Morris  -->
    <link rel="stylesheet" href="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/morris/css/morris.css">
    <!-- Fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
    <!-- Feature detection -->
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/js/modernizr-2.6.2.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/js/html5shiv.js"></script>
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/js/respond.min.js"></script>
    <![endif]-->
    
    
</head>

<body>
    <section id="container">
        <header id="header">
            <!--logo start-->
            <div class="brand">
                <a href="index.html" class="logo">
                    <span>Space</span>Lab</a>
            </div>
            <!--logo end-->
            <div class="toggle-navigation toggle-left">
                <button type="button" class="btn btn-default" id="toggle-left" data-toggle="tooltip" data-placement="right" title="Toggle Navigation">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <div class="user-nav">
                <ul>
                    <li class="dropdown messages">
                        <span class="badge badge-danager animated bounceIn" id="new-messages">5</span>
                        <button type="button" class="btn btn-default dropdown-toggle options" id="toggle-mail" data-toggle="dropdown">
                            <i class="fa fa-envelope"></i>
                        </button>
                        <ul class="dropdown-menu alert animated fadeInDown">
                            <li>
                                <h1>You have
                                    <strong>5</strong>new messages</h1>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="/1/gg/XDLProject/Enjoyeat/Public/assets/img/avatar.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                        <span class="sender">James Bagian</span>
                                        <span class="time">30 mins</span>
                                        <div class="message-content">Lorem ipsum dolor sit amet, elit rutrum felis sed erat augue fusce...</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="/1/gg/XDLProject/Enjoyeat/Public/assets/img/avatar1.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                        <span class="sender">Jeffrey Ashby</span>
                                        <span class="time">2 hour</span>
                                        <div class="message-content">hendrerit pellentesque, iure tincidunt, faucibus vitae dolor aliquam...</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="/1/gg/XDLProject/Enjoyeat/Public/assets/img/avatar2.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                        <span class="sender">John Douey</span>
                                        <span class="time">3 hours</span>
                                        <div class="message-content">Penatibus suspendisse sit pellentesque eu accumsan condimentum nec...</div>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="/1/gg/XDLProject/Enjoyeat/Public/assets/img/avatar3.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                        <span class="sender">Ellen Baker</span>
                                        <span class="time">7 hours</span>
                                        <div class="message-content">Sem dapibus in, orci bibendum faucibus tellus, justo arcu...</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="profile-photo">
                                        <img src="/1/gg/XDLProject/Enjoyeat/Public/assets/img/avatar4.gif" alt="" class="img-circle">
                                    </div>
                                    <div class="message-info">
                                        <span class="sender">Ivan Bella</span>
                                        <span class="time">6 hours</span>
                                        <div class="message-content">Curabitur metus faucibus sapien elit, ante molestie sapien...</div>
                                    </div>
                                </a>
                            </li>
                            <li><a href="#">Check all messages <i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>

                    </li>
                    <li class="profile-photo">
                        <img src="/1/gg/XDLProject/Enjoyeat/Public/assets/img/avatar.png" alt="" class="img-circle">
                    </li>
                    <li class="dropdown settings">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      Mike Adams <i class="fa fa-angle-down"></i>
                    </a>
                        <ul class="dropdown-menu animated fadeInDown">
                            <li>
                                <a href="#"><i class="fa fa-user"></i> Profile</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-calendar"></i> Calendar</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge badge-danager" id="user-inbox">5</span></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-power-off"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="toggle-navigation toggle-right">
                            <button type="button" class="btn btn-default" id="toggle-right">
                                <i class="fa fa-comment"></i>
                            </button>
                        </div>
                    </li>

                </ul>
            </div>
        </header>
        <!--sidebar left start-->
        <aside class="sidebar">
            <div id="leftside-navigation" class="nano">
                <ul class="nano-content">
                    <li class="active">
                        <a href="<?php echo U('Index/index');?>"><i class="fa fa-dashboard"></i><span>店铺信息</span></a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-cogs"></i><span>订单管理</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul <?=((CONTROLLER_NAME == 'Order')?"style='display:block'":"")?>>

                            <!-- <li><a href="ui-alerts-notifications.html">订单列表</a> -->
                            <li <?=((CONTROLLER_NAME == 'Order' && ACTION_NAME == 'index')?"class='active'":"")?>><a href="<?php echo U('Order/index');?>">订单列表</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-table"></i><span>分类管理</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="tables-basic.html">Basic Tables</a>
                            </li>
                            <li><a href="tables-data.html">Data Tables</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa fa-tasks"></i><span>菜品管理</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="forms-components.html">Components</a>
                            </li>
                            <li><a href="forms-validation.html">Validation</a>
                            </li>
                            <li><a href="forms-mask.html">Mask</a>
                            </li>
                            <li><a href="forms-wizard.html">Wizard</a>
                            </li>
                            <li><a href="forms-multiple-file.html">Multiple File Upload</a>
                            </li>
                            <li><a href="forms-wysiwyg.html">WYSIWYG Editor</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-envelope"></i><span>活动推广</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul <?=((CONTROLLER_NAME == 'Activity')?"style='display:block'":"")?>>
                            <li <?=((CONTROLLER_NAME == 'Activity' && ACTION_NAME == 'myactivity')?"class='active'":"")?>><a href="<?php echo U('Activity/myactivity');?>">我的活动</a>
                            </li>
                            <li <?=((CONTROLLER_NAME == 'Activity' && ACTION_NAME == 'activityInfo')?"class='active'":"")?>><a href="<?php echo U('Activity/activityInfo');?>">活动信息</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-bar-chart-o"></i><span>Charts</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="charts-chartjs.html">Chartjs</a>
                            </li>
                            <li><a href="charts-morris.html">Morris</a>
                            </li>
                            <li><a href="charts-c3.html">C3 Charts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-map-marker"></i><span>Maps</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="map-google.html">Google Map</a>
                            </li>
                            <li><a href="map-vector.html">Vector Map</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="typography.html"><i class="fa fa-text-height"></i><span>Typography</span></a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:void(0);"><i class="fa fa-file"></i><span>Pages</span><i class="arrow fa fa-angle-right pull-right"></i></a>
                        <ul>
                            <li><a href="pages-blank.html">Blank Page</a>
                            </li>
                            <li><a href="pages-login.html">Login</a>
                            </li>
                            <li><a href="pages-sign-up.html">Sign Up</a>
                            </li>
                            <li><a href="pages-calendar.html">Calendar</a>
                            </li>
                            <li><a href="pages-timeline.html">Timeline</a>
                            </li>
                            <li><a href="pages-404.html">404</a>
                            </li>
                            <li><a href="pages-500.html">500</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

        </aside>
        <!--sidebar left end-->
        <!--main content start-->
        <section class="main-content-wrapper">
            <section id="main-content">

                <!-- 商家头 -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">台湾卤肉饭</h3>
                                <div class="actions pull-right">
                                    <i class="fa fa-chevron-down"></i>
                                    <i class="fa fa-times"></i>
                                </div>
                            </div>
                            <div class="panel-body">
                                台湾卤肉饭内容简介台湾卤肉饭内容简介台湾卤肉饭内容简介台湾卤肉饭内容简介台湾卤肉饭内容简介台湾卤肉饭内容简介台湾卤肉饭内容简介台湾卤肉饭内容简介台湾卤肉饭内容简介
                            </div>
                        </div>
                    </div>
                </div>
                <!--tiles start-->
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="dashboard-tile detail tile-red">
                            <div class="content">
                                <h1 class="text-left timer" data-from="0" data-to="180" data-speed="2500"></h1>
                                <p class="myfont">今日订单数</p>
                            </div>
                            <div class="icon"><i class="fa fa-users"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="dashboard-tile detail tile-turquoise">
                            <div class="content">
                                <h1 class="text-left timer" data-from="0" data-to="7582" data-speed="2500"></h1>
                                <p class="myfont">今日销售额</p>
                            </div>
                            <div class="icon"><i class="fa fa-comments"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="dashboard-tile detail tile-blue">
                            <div class="content">
                                <h1 class="text-left timer" data-from="0" data-to="2348" data-speed="2500"></h1>
                                <p class="myfont">月订单数</p>
                            </div>
                            <div class="icon"><i class="fa fa fa-envelope"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="dashboard-tile detail tile-purple">
                            <div class="content">
                                <h1 class="text-left timer" data-to="478325" data-speed="2500"></h1>
                                <p class="myfont">月销售额</p>
                            </div>
                            <div class="icon"><i class="fa fa-bar-chart-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!--tiles end-->
                <!--dashboard charts and map start-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">销售额/月</h3>
                                <div class="actions pull-right">
                                    <i class="fa fa-chevron-down"></i>
                                    <i class="fa fa-times"></i>
                                </div>
                            </div>
                            <!-- <div class="panel-body">
                                <div id="sales-chart" style="height: 250px;"></div>
                            </div> -->
                            <div style="width:100%;">
                                <canvas id="canvas2"></canvas>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <h4>商品类别销售比例</h4>
                               <!--  <div id="donut-example"></div> -->
                                   <div id="canvas-holder" style="width:100%">
                                        <canvas id="chart-area" />
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--ToDo end-->
            </section>
        </section>
        <!--main content end-->
    </section>
    <!--Global JS-->
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/js/jquery-1.10.2.min.js"></script>
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/waypoints/waypoints.min.js"></script>
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/js/application.js"></script>
    <!--Page Level JS-->
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/countTo/jquery.countTo.js"></script>
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/weather/js/skycons.js"></script>
    <!-- FlotCharts  -->
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/flot/js/jquery.flot.min.js"></script>
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/flot/js/jquery.flot.resize.min.js"></script>
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/flot/js/jquery.flot.canvas.min.js"></script>
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/flot/js/jquery.flot.image.min.js"></script>
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/flot/js/jquery.flot.categories.min.js"></script>
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/flot/js/jquery.flot.crosshair.min.js"></script>
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/flot/js/jquery.flot.errorbars.min.js"></script>
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/flot/js/jquery.flot.fillbetween.min.js"></script>
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/flot/js/jquery.flot.navigate.min.js"></script>
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/flot/js/jquery.flot.pie.min.js"></script>
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/flot/js/jquery.flot.selection.min.js"></script>
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/flot/js/jquery.flot.stack.min.js"></script>
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/flot/js/jquery.flot.symbol.min.js"></script>
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/flot/js/jquery.flot.threshold.min.js"></script>
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/flot/js/jquery.colorhelpers.min.js"></script>
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/flot/js/jquery.flot.time.min.js"></script>
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/flot/js/jquery.flot.example.js"></script>
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/flot/js/Chart.bundle.js"></script>

    <!-- Morris  -->
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/morris/js/morris.min.js"></script>
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/morris/js/raphael.2.1.0.min.js"></script>
    <!-- Vector Map  -->
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js"></script>
    <!-- ToDo List  -->
    <script src="/1/gg/XDLProject/Enjoyeat/Public/assets/plugins/todo/js/todos.js"></script>
    
    
    <!--Load these page level functions-->

    <style>
        canvas {
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;

        }
    </style>
    <script>
        var MONTHS = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100 * (Math.random() > 0.5 ? -1 : 1));
        };
        var randomColorFactor = function() {
            return Math.round(Math.random() * 255);
        };
        var randomColor = function(opacity) {
            return 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',' + (opacity || '.3') + ')';
        };

        var config1 = {
            type: 'line',
            data: {
                labels: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
                datasets: [{
                    label: "销售额",
                    // data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()],
                    data: [100,130,150,170,150,180,200,205,250,280,300,310],
                    lineTension: 0,
                    fill: false,
                    //borderDash: [5, 5],
                }]
            },
            options: {
                responsive: true,
                legend: {
                    position: 'bottom',
                },
                hover: {
                    mode: 'label'
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: '月份'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: '金额'
                        }
                    }]
                },
                title: {
                    display: true,
                    text: '2016年销售额折线图'
                }
            }
        };

        $.each(config1.data.datasets, function(i, dataset) {
            var background = randomColor(0.5);
            dataset.borderColor = 'rgba(26,188,156,1)';
            dataset.backgroundColor = 'rgba(26,188,156,1)';
            // dataset.borderColor = background;
            // dataset.backgroundColor = background;
            // dataset.pointBorderColor = background;
            // dataset.pointBackgroundColor = background;
            dataset.pointBorderColor =  'rgba(26,188,156,1)';
            dataset.pointBackgroundColor =  'rgba(255,255,255,1)';
            dataset.pointBorderWidth = 3;
        });

        // window.onload = function() {
        //     var ctx1 = document.getElementById("canvas2").getContext("2d");
        //     window.myLine = new Chart(ctx1, config);
        // };
    </script>
    <!-- <style>
    canvas {
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    </style> -->
    <script>
    $(document).ready(function() {
        app.timer();
        app.map();
        app.weather();
        app.morrisPie();

    });
    </script>  
    <script>

    // var randomScalingFactor = function() {
    //     return Math.round(Math.random() * 100);
    // };
    // var randomColorFactor = function() {
    //     return Math.round(Math.random() * 255);
    // };
    // var randomColor = function(opacity) {
    //     return 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',' + (opacity || '.3') + ')';
    // };

    var config = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [
                    200,
                    213,
                    234,
                    88,
                    534,
                ],
                backgroundColor: [
                    "#F7464A",
                    "#46BFBD",
                    "#FDB45C",
                    "#949FB1",
                    "#4D5360",
                ],
                label: 'Dataset 1'
            }],
            labels: [
                "套餐",
                "单点",
                "精品",
                "汤类",
                "甜点"
            ]
        },
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: true,
                text: ''
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };

    window.onload = function() {
        var ctx = document.getElementById("chart-area").getContext("2d");
        window.myDoughnut = new Chart(ctx, config);

        var ctx1 = document.getElementById("canvas2").getContext("2d");
            window.myLine = new Chart(ctx1, config1);

    };

    </script> 
    
</body>

</html>