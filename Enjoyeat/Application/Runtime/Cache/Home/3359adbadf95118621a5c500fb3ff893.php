<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta charset="utf-8">
	<title>用户注册</title>
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
				<div ng-show="!register.mailConfirm" class="account-main full">
					<div class="account-line">
						<h3 class="account-title line-left">使用<span ng-bind="mobileMode ? '手机' : '邮箱'" class="ng-binding">手机</span>注册</h3>
					</div>
					<div class="register-aside">
						<h3 class="register-title">已经注册过 ？</h3>
						<p class="register-info">
							请点击 <a href="/login">直接登录</a>
						</p>
						<!-- ngInclude: '/app/templates/_auth_links.tpl.html' -->
						<div ng-include="'/app/templates/_auth_links.tpl.html'" class="register-auth ng-scope">
						</div>
					</div>
					<div class="register-form">
						<!-- ngIf: mobileMode --><!-- ngInclude:  -->
						<div src="'/app/templates/_register_mobile.tpl.html'" ng-include="" ng-if="mobileMode" class="ng-scope">
							<form autocomplete="off" novalidate="" ng-submit="registerSubmit()" ng-controller="registerFormCtrl" name="registerForm" class="account-form ng-scope ng-pristine ng-invalid ng-invalid-required">
								<div class="form-group compact">
									<label for="mobile" class="account-label">账号</label><input type="text" required="" ng-pattern="/^1[3|4|5|8|7][0-9]{9}$/" ng-keydown="submitted = false" ng-model="register.mobile" update-model-on="registerForm.getToken registerForm.submit blur" placeholder="请输入你的手机号" name="account" class="account-input ng-pristine ng-invalid ng-invalid-required ng-valid-pattern" id="mobile">
								</div>
								<div class="form-group compact">
									<label for="mobile" class="account-label">邮箱</label><input type="text" required="" ng-pattern="/^1[3|4|5|8|7][0-9]{9}$/" ng-keydown="submitted = false" ng-model="register.mobile" update-model-on="registerForm.getToken registerForm.submit blur" placeholder="请输入你的手机号" name="account" class="account-input ng-pristine ng-invalid ng-invalid-required ng-valid-pattern" id="mobile">
								</div>
								<div class="form-group">
									<label for="mobileVerify" class="account-label">邮箱验证码</label><input type="text" required="" update-model-on="registerForm.submit blur" ng-model="register.code" class="account-input ng-pristine ng-invalid ng-invalid-required" name="verify" id="mobileVerify">
									<button type="button" ng-keydown="submitted = false" ng-click="sendMobileVerify('sms')" ng-class="{disabled: smsLoginCountdown === 'running' || audioRegisterCountdown === 'running'}" status="smsRegisterCountdown" time="60" mode="text" tpl="重新发送(?time)" countdown="" class="account-btn verify ng-isolate-scope">获取验证码</button>
								</div>
								<div class="form-group">
									<label for="password" class="account-label">设置密码</label><input type="text" style="display: none">
									<input type="password" required="" ng-maxlength="20" ng-minlength="6" ng-keydown="submitted = false" ng-show="!pwShow" ng-model="register.password" update-model-on="registerForm.submit blur" placeholder="密码长度6-20字符" name="password" class="account-input ng-pristine ng-invalid ng-invalid-required ng-valid-maxlength ng-valid-minlength" id="password">
									<label for="password" class="account-label">确认密码</label>
									<input type="text" placeholder="密码长度6-20字符" ng-value="registerForm.password.$viewValue" ng-show="pwShow" class="account-input input-shadow ng-hide">
									<div ng-mousedown="pwShow = 1" ng-mouseup="pwShow = 0" class="password-eye icon icon-eye">
									</div>
								</div>
								<div class="form-group">
									<button ng-bind="register.submitting ? '提交中...': '同意协议并注册'" ng-class="{disabled: register.submitting}" class="account-btn submit ng-binding">同意协议并注册</button>
								</div>
							</form>
						</div>
						<!-- end ngIf: mobileMode --><!-- ngIf: !mobileMode --><!-- ngIf: mobileMode -->
						<div class="account-line register ng-scope" ng-if="mobileMode">
							<a target="_blank" href="http://m.ele.me/app/about/agreement">《使用条款和协议》</a>
						</div>
						<!-- end ngIf: mobileMode -->
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