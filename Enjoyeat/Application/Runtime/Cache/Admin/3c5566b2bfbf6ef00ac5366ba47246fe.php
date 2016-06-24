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
    <title>后台登入</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="/git/Enjoyeat/Public/Assets/img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/git/Enjoyeat/Public/Assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="/git/Enjoyeat/Public/Assets/css/font-awesome.min.css">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="/git/Enjoyeat/Public/Assets/css/animate.css">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="/git/Enjoyeat/Public/Assets/css/main.css">
    <!-- Fonts -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
    <!-- Feature detection -->
    <script src="/git/Enjoyeat/Public/Assets/js/modernizr-2.6.2.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/git/Enjoyeat/Public/Assets/js/html5shiv.js"></script>
    <script src="/git/Enjoyeat/Public/Assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <section id="login-container">

        <div class="row">
            <div class="col-md-3" id="login-wrapper">
                <div class="panel panel-primary animated flipInY">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            ENJOYEAT
                        </h3>
                    </div>
                    <div class="panel-body">
                        <p>登录访问enjoyeat后台。</p>
                        <form class="form-horizontal" role="form" action="<?php echo U('Public/doLogin');?>" method='post'>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" id="email" placeholder="后台用户" name='username'>
                                    <i class="fa fa-user"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="password" class="form-control" id="password" placeholder="请输入密码" name='password'>
                                    <i class="fa fa-lock"></i>
                                    <a href="javascript:void(0)" class="help-block">忘记密码？</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-primary btn-block" value="登入">
                                   
                                    <hr />
            
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--Global JS-->
    <script src="/git/Enjoyeat/Public/Assets/js/jquery-1.10.2.min.js"></script>
    <script src="/git/Enjoyeat/Public/Assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/git/Enjoyeat/Public/Assets/plugins/waypoints/waypoints.min.js"></script>
    <script src="/git/Enjoyeat/Public/Assets/plugins/nanoScroller/jquery.nanoscroller.min.js"></script>
    <script src="/git/Enjoyeat/Public/Assets/js/application.js"></script>

</body>

</html>