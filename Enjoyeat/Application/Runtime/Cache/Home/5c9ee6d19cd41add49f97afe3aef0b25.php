<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo ($title); ?></title>
	<link rel="icon" href="/git/Enjoyeat/Public/Home/Images/favicon1.png" size="64x64" type="image/png">
	<link rel="stylesheet" href="/git/Enjoyeat/Public/assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/git/Enjoyeat/Public/assets/css/font-awesome.min.css">
	<script src="/git/Enjoyeat/Public/assets/js/jquery-1.10.2.min.js"></script>
	<script src="/git/Enjoyeat/Public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="/git/Enjoyeat/Public/assets/plugins/waypoints/waypoints.min.js"></script>
	<script src="/git/Enjoyeat/Public/assets/js/application.js"></script>
	<style>
		html {
		    box-sizing: border-box;
		    color: #666;
		}
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
		article, aside, blockquote, body, button, code, dd, details, dl, dt, fieldset, figcaption, figure, footer, form, h1, h2, h3, h4, h5, h6, header, hr, input, legend, li, menu, nav, ol, p, pre, section, td, textarea, th, ul {
		    margin: 0;
		    padding: 0;
		}
		.account-main {
		    background-color: #fafcfe;
		    border: 1px solid #dfe8f2;
		    min-height: 420px;
		    padding: 30px;
		    width: 950px;
		}
		html *, html *::after, html *::before {
		    box-sizing: inherit;
		}
		.icon {
		    font-family: eleme;
		    font-style: normal;
		    font-variant: normal;
		    font-weight: 400;
		    line-height: 1em;
		    text-transform: none;
		}
		[ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak, .ng-hide {
		    display: none !important;
		}
		input {
		    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.075) inset;
		    outline: 0 none;
		}
		.account-inputicon {
		    background-color: #f8fafb;
		    border-radius: 3px;
		    color: #a6b2c2;
		    font-size: 20px;
		    left: 5px;
		    padding: 5px;
		    position: absolute;
		    top: 5px;
		}
		.account-verify {
		    padding-right: 135px;
		}
		.account-input {
		    border: 1px solid #d3e1f1;
		    border-radius: 2px;
		    font-size: 14px;
		    height: 40px;
		    padding: 10px;
		    width: 100%;
		}
		a {
		    color: #07d;
		    text-decoration: none;
		}
		.account-form .form-group {
		    margin: 12px 0 10px;
		    position: relative;
		}
		.account-btn {
		    background: #3199e8 none repeat scroll 0 0;
		    border: 1px solid #3199e8;
		    border-radius: 3px;
		    color: #fff;
		    cursor: pointer;
		    font-size: 16px;
		    font-weight: 400;
		    height: 40px;
		    width: 100%;
		}
		.title, h2, h3, h4 {
		    color: #414c59;
		    font-family: Helvetica Neue,Microsoft Yahei,Hiragino Sans GB,Microsoft Sans Serif,WenQuanYi Micro Hei,sans-serif;
		}
		.footer-line.line-under {
		    color: #999;
		}
		.footer-line {
		    color: #666;
		    line-height: 2em;
		    text-align: center;
		}
		html *, html *::after, html *::before {
		    box-sizing: inherit;
		}
		html {
		    box-sizing: border-box;
		    color: #666;
		}			
		html *, html *::after, html *::before {
		    box-sizing: inherit;
		}
		html *, html *::after, html *::before {
		    box-sizing: inherit;
		}
		.account-illustration {
		    float: left;
		    margin: 30px 30px 20px;
		    width: 445px;
		}
		html *, html *::after, html *::before {
		    box-sizing: inherit;
		}
		html *, html *::after, html *::before {
		    box-sizing: inherit;
		}
		html *, html *::after, html *::before {
		    box-sizing: inherit;
		}
		.account-main.aside {
		    float: left;
		    margin: 30px 0 20px 30px;
		    width: 340px;
		}
		.account-main {
		    background-color: #fafcfe;
		    border: 1px solid #dfe8f2;
		    min-height: 420px;
		    padding: 30px;
		    width: 950px;
		}
		html *, html *::after, html *::before {
		    box-sizing: inherit;
		}
		html *, html *::after, html *::before {
		    box-sizing: inherit;
		}
		.account-container::after, .account-line::after {
		    clear: both;
		    content: "";
		    display: block;
		}
		html *, html *::after, html *::before {
		    box-sizing: inherit;
		}
		html *, html *::after, html *::before {
		    box-sizing: inherit;
		}
		.icon-fulllogo::before {
		    content: "";
		}
		html *, html *::after, html *::before {
		    box-sizing: inherit;
		}
		html *, html *::after, html *::before {
		    box-sizing: inherit;
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
		.footer-line a {
		    color: inherit;
		}
		.account-line .line-right {
		    float: right;
		}
		.account-captcha .captcha-refresh {
		    color: #8da0aa;
		    float: right;
		    font-size: 12px;
		    line-height: 1.2em;
		    margin-top: 6px;
		    width: 36px;
		}
		.account-captcha {
		    height: 40px;
		    position: absolute;
		    right: 0;
		    top: 0;
		    vertical-align: bottom;
		    width: 132px;
		}
		.account-title {
		    font-size: 24px;
		    font-weight: 400;
		}
		.login-mode-toggle {
		    color: #8da0aa;
		    font-size: 14px;
		    padding-top: 8px;
		}
		
	</style>
	<script src="/git/Enjoyeat/Public/Js/jquery.min.js"></script>
</head>
<body>
	<div class="container">
        <!-- ngIf: !noGlobalWrap -->
      	<header class="account-header ng-scope" ng-if="!noGlobalWrap">
			<a href="http://www.ele.me">
				<img src="/git/Enjoyeat/Public/Home/images/logo.png" alt="">
			</a>
		</header>
        <!-- ngView:  -->
        <div ng-view="" class="account-container ng-scope">
            <div class="login ng-scope">
                <img src="/git/Enjoyeat/Public/Home/images/login_img.png" class="account-illustration"> <!-- ngInclude:  -->
                <div src="'/app/templates/_login_main.tpl.html'" ng-include="" class="account-main aside ng-scope">
                    <div class="account-line ng-scope">
                        <h3 class="account-title line-left" style="display:inline">登录</h3>
                        <a ng-if="normalMode" ng-click="changeMode()" href="javascript:" class="login-mode-toggle line-right ng-scope">手机验证登录</a><!-- end ngIf: normalMode -->
                        <!-- ngIf: !normalMode -->
                    </div><!-- ngInclude:  -->
                        <form action="javascript:void(0)" onsubmit="return loginCheck();" class="account-form ng-scope ng-pristine ng-invalid ng-invalid-required" id="loginForm" >
                            <div class="form-group compact" id="error" style="display:none">
                                <input type="text" disabled id="errorMsg" style="color:red" class="account-input withicon ng-pristine ng-invalid ng-invalid-required">
                            </div>
                            <div class="form-group compact">
                                <input type="text" required="" placeholder="手机号/邮箱/用户名" class="account-input withicon ng-pristine ng-invalid ng-invalid-required"  name="username">
                            </div>
                            <div class="form-group">
                                <input type="password" required="" maxlength="20" ng-minlength="6" placeholder="密码" class="account-input withicon ng-pristine ng-invalid ng-invalid-required ng-valid-minlength" name="password">
                            </div>
                            <div class="form-group account-verify">
                                <input required="" maxlength="4" ng-minlength="4" placeholder="验证码" class="account-input verify ng-pristine ng-invalid ng-invalid-required ng-valid-minlength" name="vcode"> 
                                <span class="account-captcha" >
                                <img title="图片验证码" class="captcha-img" id="vcode" src="<?php echo U('User/verify');?>" onclick="getNewVerify(this)"> 
                                </span>
                            </div>
                            <div class="form-group compact">
                                <label><input type="checkbox" checked="checked" class="account-checkbox" value="1" name="auto_login">下次自动登录</label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="account-btn submit ng-binding">登录</button>
                            </div>
                        </form>
                    
                    <div class="account-line ng-scope">
                        <a href="<?php echo U('User/register');?>">新用户注册</a> <a href="/forget" class="line-right">忘记密码</a>
                    </div><!-- ngInclude: '/app/templates/_auth_links.tpl.html' -->
                    <div ng-hide="noGlobalWrap &amp;&amp; iframe.hideAuth" ng-include="'/app/templates/_auth_links.tpl.html'" class="account-authlink ng-scope">
                
                    </div>
                </div>
            </div>
        </div><!-- ngIf: !noGlobalWrap -->

        <p class="footer-line">
            <a href="http://kaidian.ele.me" class="footer-link">我要开店</a> | <a href="http://ele.me/support/about/contact" class="footer-link">联系我们</a> | <a href="http://ele.me/support/about/agreement" class="footer-link">服务条款和协议</a> | <a href="http://jobs.ele.me" class="footer-link">加入我们</a>
        </p>
        <p class="footer-line line-under">
            增值电信业务许可证 : <a href="http://www.shca.gov.cn/" rel="nofollow" target="_blank" class="footer-link">沪B2-20150033</a> | <a href="http://www.miibeian.gov.cn" rel="nofollow" target="_blank" class="footer-link">沪ICP备 09007032</a> | <a href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&amp;entyId=20120305173227823" rel="nofollow" target="_blank" class="footer-link">上海工商行政管理</a> Copyright ©2008-2015 ele.me, All Rights Reserved.
        </p><!-- end ngIf: !noGlobalWrap -->
    </div>
</body>
</html>

<script type="text/javascript">
	function getNewVerify(obj){
		obj.src = obj.src;
	}

	function loginCheck(){
		var username = $("input[name='username']").val();
		var password = $("input[name='password']").val();
		var vcode = $("input[name='vcode']").val();
		$.ajax({
			type:'get',
			data:"username="+username+"&password="+password+"&vcode="+vcode,
			url:"doLogin",
			success:function(data){
				switch(data){
					case "0":
						$('#error').css('display','block');
						$('#errorMsg').val('验证码不正确');
						$('#vcode').trigger("click");
						break;
					case "1":
						$('#error').css('display','block');
						$('#errorMsg').val('没有该用户');
						break;
					case "2":
						$('#error').css('display','block');
						$('#errorMsg').val('密码不正确');
						break;	
					case "success":
						// $('#error').css('display','block');
						// $('#errorMsg').val('登陆成功');
						location.href = '<?php echo U('Index/index');?>';
						break;	
				}
			}
		});
		return false;
	}

</script>