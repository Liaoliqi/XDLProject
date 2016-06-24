<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta charset="utf-8">
	<title><?php echo ($title); ?></title>
	<style type="text/css">

		html *, html *::after, html *::before {
		    box-sizing: inherit;
		}
		html *, html *::after, html *::before {
		    box-sizing: inherit;
		}
		body, button, select {
		    font: 400 14px Avenir,Microsoft Yahei,Hiragino Sans GB,Microsoft Sans Serif,WenQuanYi Micro Hei,sans-serif;
		}
		html *, html *::after, html *::before {
		    box-sizing: inherit;
		}
		article, aside, blockquote, body, button, code, dd, details, dl, dt, fieldset, figcaption, figure, footer, form, h1, h2, h3, h4, h5, h6, header, hr, input, legend, li, menu, nav, ol, p, pre, section, td, textarea, th, ul {
		    margin: 0;
		    padding: 0;
		}
		.container {
		    margin: 0 auto;
		    width: 950px;
		}
		html *, html *::after, html *::before {
		    box-sizing: inherit;
		}
		.account-header {
		    height: 80px;
		    padding-top: 20px;
		}
		html *, html *::after, html *::before {
		    box-sizing: inherit;
		}
		.account-header a, .login-mode-toggle:hover, .login-now:hover {
		    text-decoration: none;
		}
		a {
		    color: #0077dd;
		    text-decoration: none;
		}
		.logo {
		    color: #3199e8;
		    display: inline-block;
		    font-size: 36px;
		    height: 36px;
		    margin: 0;
		}
		.icon {
		    font-family: eleme;
		    font-style: normal;
		    font-variant: normal;
		    font-weight: 400;
		    line-height: 1em;
		    text-transform: none;
		}
		.account-container::after, .account-line::after {
		    clear: both;
		    content: "";
		    display: block;
		}
		.account-main.full {
		    min-height: 400px;
		    padding: 50px 80px;
		}
		.account-main {
		    background-color: #fafcfe;
		    border: 1px solid #dfe8f2;
		    min-height: 420px;
		    padding: 30px;
		    width: 950px;
		}
		.account-container::after, .account-line::after {
		    clear: both;
		    content: "";
		    display: block;
		}
		html *, html *::after, html *::before {
		    box-sizing: inherit;
		}
		.account-line {
		    margin-bottom: 15px;
		    overflow: hidden;
		}
		.account-line .line-left {
		    float: left;
		}
		.account-title {
		    font-size: 24px;
		    font-weight: 400;
		}
		.title, h2, h3, h4 {
		    color: #414c59;
		    font-family: Helvetica Neue,Microsoft Yahei,Hiragino Sans GB,Microsoft Sans Serif,WenQuanYi Micro Hei,sans-serif;
		}
		.register-aside {
		    border-left: 1px solid #dfe8f2;
		    float: right;
		    padding-left: 50px;
		    width: 280px;
		}
		.register-title {
		    color: #414c59;
		    font-size: 18px;
		    font-weight: 400;
		    padding-bottom: 15px;
		}
		.title, h2, h3, h4 {
		    color: #414c59;
		    font-family: Helvetica Neue,Microsoft Yahei,Hiragino Sans GB,Microsoft Sans Serif,WenQuanYi Micro Hei,sans-serif;
		}
		.register-info {
		    color: #8da0aa;
		    font-size: 16px;
		}
		a {
		    color: #0077dd;
		    text-decoration: none;
		}
		.register-auth {
		    margin-top: 60px;
		}
		.register-form {
		    margin: 20px 0 0 120px;
		    width: 280px;
		}
		.account-form .form-group.compact {
		    margin-top: 10px;
		}
		.account-form .form-group {
		    margin: 12px 0 10px;
		    position: relative;
		}
		.account-label {
		    font-size: 14px;
		    height: 40px;
		    left: -120px;
		    position: absolute;
		    text-align: right;
		    width: 110px;
		}
		.account-label, .account-text {
		    line-height: 40px;
		}
		.account-input {
		    border: 1px solid #d3e1f1;
		    border-radius: 2px;
		    font-size: 14px;
		    padding: 10px;
		    width: 100%;
		}
		input {
		    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075) inset;
		    outline: 0 none;
		}

		.account-btn.submit {
		    display: block;
		    height: 40px;
		    margin: 20px 0 0;
		    width: 100%;
		}
		.account-container::after, .account-line::after {
		    clear: both;
		    content: "";
		    display: block;
		}
		html *, html *::after, html *::before {
		    box-sizing: inherit;
		}
		.account-line.register {
		    margin-top: 20px;
		}
		.account-line {
		    margin-bottom: 15px;
		    overflow: hidden;
		}
		a {
		    color: #0077dd;
		    text-decoration: none;
		}
		.account-footer {
		    padding: 40px 0 30px;
		}
		.footer-line {
		    clear: both;
		    color: #666666;
		    line-height: 2em;
		    text-align: center;
		}
		.footer-line a {
		    color: inherit;
		}
		a {
		    color: #0077dd;
		    text-decoration: none;
		}
		.footer-line.line-under {
		    color: #999999;
		}
		.footer-line {
		    clear: both;
		    color: #666666;
		    line-height: 2em;
		    text-align: center;
		}
		.footer-line a {
		    color: inherit;
		}
		a {
		    color: #0077dd;
		    text-decoration: none;
		}
		input {
		    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075) inset;
		    outline: 0 none;
		}
		html *, html *::after, html *::before {
		    box-sizing: inherit;
		}
		html *, html *::after, html *::before {
		    box-sizing: inherit;
		}
		.account-input {
		    border: 1px solid #d3e1f1;
		    border-radius: 2px;
		    font-size: 14px;
		    padding: 10px;
		    width: 100%;
		}
		input {
		    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075) inset;
		    outline: 0 none;
		}
		html *, html *::after, html *::before {
		    box-sizing: inherit;
		}
		article, aside, blockquote, body, button, code, dd, details, dl, dt, fieldset, figcaption, figure, footer, form, h1, h2, h3, h4, h5, h6, header, hr, input, legend, li, menu, nav, ol, p, pre, section, td, textarea, th, ul {
		    margin: 0;
		    padding: 0;
		}
		.account-btn.verify {
		    background-color: #f0f0f0;
		    border: 1px solid #d9d9d9;
		    color: #333333;
		    font-size: 14px;
		    height: 32px;
		    padding: 0 1em;
		    position: absolute;
		    right: 4px;
		    top: 4px;
		    width: auto;
		}
		.account-btn.submit {
		    display: block;
		    height: 40px;
		    margin: 20px 0 0;
		    width: 100%;
		}
		.account-btn {
		    background: #3199e8 none repeat scroll 0 0;
		    border: 1px solid #3199e8;
		    border-radius: 3px;
		    color: #ffffff;
		    cursor: pointer;
		    font-size: 16px;
		    font-weight: 400;
		    height: 40px;
		    width: 100%;
		}
	</style>
	<script src="/1/gg/XDLProject/Enjoyeat/Public/Js/jquery.min.js"></script>
</head>
<body>
	<div ng-class="{container: !noGlobalWrap}" class="container">
		<!-- ngIf: !noGlobalWrap --><header ng-if="!noGlobalWrap" class="account-header ng-scope">
		<a href="http://www.ele.me">
		<h1 class="logo icon icon-fulllogo"><img src="/1/gg/XDLProject/Enjoyeat/Public/home/images/logo.png"></h1>
		</a>
		</header><!-- end ngIf: !noGlobalWrap -->
		<!-- ngView:  -->
		<div ng-view="" class="account-container ng-scope">
			<div class="register ng-scope">
				<div class="account-main full">
					<div class="account-line">
						<h3 class="account-title line-left">使用邮箱注册</h3>
					</div>
					<div class="register-aside">
						<h3 class="register-title">已经注册过 ？</h3>
						<p class="register-info">
							请点击 <a href="<?php echo U('User/login');?>">直接登录</a>
						</p>
						<!-- ngInclude: '/app/templates/_auth_links.tpl.html' -->
						<div ng-include="'/app/templates/_auth_links.tpl.html'" class="register-auth ng-scope">
						</div>
					</div>
					<div class="register-form">
						<form action="<?php echo U('User/doRegister');?>" method="post" onsubmit="return RegCheck()" id="registerForm" name="registerForm" class="account-form ng-scope ng-pristine ng-invalid ng-invalid-required">
							<div class="form-group needCheck" id="error" style="display:none">
								<label class="account-label"></label>	
								<input type="text" disabled id="errorMsg" style="color:red" value="邮箱格式不正确" class="account-input ng-pristine ng-invalid ng-invalid-required ng-valid-pattern">
							</div>
							<div class="form-group compact">
								<label for="mobile" class="account-label">邮箱</label>
								<input type="email" required="请输入您的邮箱" placeholder="请输入您的邮箱" name="email" id="email" class="account-input ng-pristine ng-invalid ng-invalid-required ng-valid-pattern">
							</div>
							<div class="form-group">
								<label for="emailVerify" class="account-label">邮箱验证码</label>
								<input type="text" name="emailFlag" required="请先进行邮箱认证" placeholder="请填写邮箱验证码" class="account-input ng-pristine ng-invalid ng-invalid-required" id="emailVerify">
								<a href="javascript:void(0)" style="margin-top:-1px;margin-right:-20px;height:30px;line-height:30px" time="60" mode="text"  class="account-btn verify ng-isolate-scope" id="sendMail" >获取验证码</a>
							</div>
							<div class="form-group">
								<label for="password" class="account-label">设置密码</label>

								<input type="password" name="password" required="请输入密码" maxlength="20" minlength="6" placeholder="密码长度6-20字符"  class="account-input ng-pristine ng-invalid ng-invalid-required ng-valid-maxlength ng-valid-minlength"><br>

								<label for="password" class="account-label">确认密码</label>
								<input type="password" name="repassword" required="请再次确认密码" maxlength="20" minlength="6" placeholder="再输一遍" style="margin-top:6px" class="account-input input-shadow ng-hide">
							</div>
							<div class="form-group">
								<button type="submit" class="account-btn submit ng-binding">同意协议并注册</button>
							</div>
						</form>
					</div>
				</div>
				<!-- ngIf: register.mailConfirm -->
			</div>
		</div>
		<!-- ngIf: !noGlobalWrap --><footer ng-if="!noGlobalWrap" class="account-footer ng-scope">
		<p class="footer-line">
			<a href="http://kaidian.ele.me" class="footer-link">我要开店</a> |
			<a href="http://ele.me/support/about/contact" class="footer-link">联系我们</a> |
			<a href="http://ele.me/support/about/agreement" class="footer-link">服务条款和协议</a> |
			<a href="http://jobs.ele.me" class="footer-link">加入我们</a>
		</p>
		<p class="footer-line line-under">
	      增值电信业务许可证 : 
			<a href="http://www.shca.gov.cn/" rel="nofollow" target="_blank" class="footer-link">沪B2-20150033</a> |
			<a href="http://www.miibeian.gov.cn" rel="nofollow" target="_blank" class="footer-link">沪ICP备 09007032</a> |
			<a href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&amp;entyId=20120305173227823" rel="nofollow" target="_blank" class="footer-link">上海工商行政管理</a>
	      Copyright &copy;2008-2015 ele.me, All Rights Reserved.
		</p>
		</footer><!-- end ngIf: !noGlobalWrap -->
	</div>
</body>
</html>
<script type="text/javascript">

	var emailYZM = '';//邮箱验证码

	$("#sendMail").click(function (){
		var email = $(":input[name='email']").val();
		var regexp = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
		if(!regexp.test(email)){
			$('#error').css({'display':'block'});
			$('#errorMsg').css('color','green').val('邮箱格式不正确');
			return false;
		}

		$.get("sendMail",{email:email},function (data){
			emailYZM = data;
		});	

		$('#error').css('display','block');
		$('#errorMsg').css('color','green').val('邮箱验证码已发送!');
	});

	function RegCheck(){
		var email = $(":input[name='email']").val();

		var regexp = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
		if(!regexp.test(email)){
			$('#error').css('display','block');
			$('#errorMsg').css('color','green').val('邮箱格式不正确');
			return false;
		}

		var emailFlag = $(":input[name='emailFlag']").val();
		if(emailFlag != emailYZM){
			$('#error').css('display','block');
			$('#errorMsg').css('color','green').val('邮箱验证码不正确');
			return false;
		}

		var password = $(":input[name='password']").val();
		var repassword = $(":input[name='repassword']").val();
		if(password != repassword){
			$('#error').css('display','block');
			$('#errorMsg').css('color','green').val('两次密码不一致');
			return false;

		}
		return true;
	}

	

</script>