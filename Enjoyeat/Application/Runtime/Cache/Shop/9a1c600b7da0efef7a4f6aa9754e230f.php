<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>开店申请</title>
	<link rel="stylesheet" href="/dev/XDLProject/Enjoyeat/Public/bootstrap/css/bootstrap.min.css">
	<script src="/dev/XDLProject/Enjoyeat/Public/bootstrap/js/jquery-1.11.3.min.js"></script>
	<script src="/dev/XDLProject/Enjoyeat/Public/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-default" style="background:#1D89E0;">
				  <div class="container-fluid">
				    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header col-md-6" style="margin-left:250px;" >
				      <a class="navbar-brand" href="#" style="color:#fff;">享吃</a>
				    </div>
				    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse col-md-6" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav navbar-right">
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#fff;">琦琦 <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="#">退出登录</a></li>
				            
				          </ul>
				        </li>
				      </ul>
				    </div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
	</div>
	<div class="container-fluid" style="margin-top:30px;">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="jumbotron">
				  <h1>提交成功</h1>
				  <p>正在等待官方审核</p>
				  <p><a class="btn btn-primary btn-lg" href="<?php echo U('Register/index');?>" role="button">返回首页</a></p>
				</div>
				<br/><br/>
			</div>
		</div>
	</div>
</body>
</html>