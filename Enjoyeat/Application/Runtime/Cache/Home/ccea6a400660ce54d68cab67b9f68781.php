<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录-叫外卖上享吃</title>
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

	</style>
</head>
<body>
	<div ng-class="{container: !noGlobalWrap}" class="container">
        <!-- ngIf: !noGlobalWrap -->
      	<header class="account-header ng-scope" ng-if="!noGlobalWrap">
			<a href="http://www.ele.me">
				<h1 class="logo icon icon-fulllogo"></h1>
			</a>
		</header>
        <!-- ngView:  -->
        <div ng-view="" class="account-container ng-scope">
            <div class="login ng-scope">
                <img src="//static11.elemecdn.com/eleme/account/media/img/banner-app.98db42.png" class="account-illustration"> <!-- ngInclude:  -->
                <div src="'/app/templates/_login_main.tpl.html'" ng-include="" class="account-main aside ng-scope">
                    <div class="account-line ng-scope">
                        <h3 class="account-title line-left">
                            登录
                        </h3><!-- ngIf: normalMode --><a ng-if="normalMode" ng-click="changeMode()" href="javascript:" class="login-mode-toggle line-right ng-scope">手机验证登录</a><!-- end ngIf: normalMode -->
                        <!-- ngIf: !normalMode -->
                    </div><!-- ngInclude:  -->
                    <div src="'/app/templates/_login_normal.tpl.html'" ng-include="" class="login-form ng-scope" ng-show="normalMode">
                        <form novalidate="" ng-submit="loginNormal()" class="account-form ng-scope ng-pristine ng-invalid ng-invalid-required" name="loginnormal" ng-controller="LoginNormalCtrl">
                            <div ng-show="(loginnormal.$invalid || errTip) &amp;&amp; submitted" class="form-group error-group ng-hide">
                                <div ng-bind="errTip" ng-show="errTip" class="account-errtip ng-binding ng-hide"></div>
                                <div ng-show="loginnormal.username.$error.required" class="account-errtip">
                                    请输入手机号/邮箱/用户名
                                </div>
                                <div ng-show="loginnormal.password.$error.required" class="account-errtip">
                                    请输入密码
                                </div>
                                <div ng-show="loginnormal.password.$error.minlength" class="account-errtip ng-hide">
                                    密码长度不对
                                </div>
                                <div ng-show="loginnormal.captcha_code.$error.required" class="account-errtip">
                                    请输入验证码
                                </div>
                                <div ng-show="loginnormal.captcha_code.$error.minlength" class="account-errtip ng-hide">
                                    验证码位数不对
                                </div>
                            </div>
                            <div class="form-group compact">
                                <input type="text" required="" update-model-on="loginnormal.submit blur" ng-class="{error: submitted &amp;&amp; loginnormal.username.$dirty &amp;&amp; loginnormal.username.$invalid}" placeholder="手机号/邮箱/用户名" class="account-input withicon ng-pristine ng-invalid ng-invalid-required" ng-model="normalForm.username" name="username">
                            </div>
                            <div class="form-group">
                                <input type="password" required="" maxlength="20" ng-minlength="6" update-model-on="loginnormal.submit blur" ng-class="{error: submitted &amp;&amp; loginnormal.password.$dirty &amp;&amp; loginnormal.password.$invalid}" placeholder="密码" class="account-input withicon ng-pristine ng-invalid ng-invalid-required ng-valid-minlength" ng-model="normalForm.password" name="password">
                            </div>
                            <div class="form-group account-verify">
                                <input required="" maxlength="4" ng-minlength="4" ng-class="{error: submitted &amp;&amp; loginnormal.captcha_code.$dirty &amp;&amp; loginnormal.captcha_code.$invalid}" update-model-on="loginnormal.submit blur" placeholder="验证码" class="account-input verify ng-pristine ng-invalid ng-invalid-required ng-valid-minlength" ng-model="normalForm.captcha_code" name="captcha_code"> <span class="account-captcha" captcha=""><span><img title="图片验证码" ng-src="/restapi/v1/captchas/69bde5c0f4912beb9d9cf3d4fe96370972ec92a3" ng-click="refreshCaptcha()" class="captcha-img" ng-show="imgUrl" src="/restapi/v1/captchas/69bde5c0f4912beb9d9cf3d4fe96370972ec92a3"> <a ubt-click="captcha_refresh" href="javascript:" ng-click="refreshCaptcha()" class="captcha-refresh">看不清换一张</a></span></span>
                            </div>
                            <div class="form-group compact">
                                <label><input type="checkbox" checked="checked" class="account-checkbox">下次自动登录</label>
                            </div>
                            <div class="form-group">
                                <button ng-bind="submitting ? '提交中...' : '登录'" type="submit" ng-class="{disabled: submitting}" class="account-btn submit ng-binding">登录</button>
                            </div>
                        </form>
                    </div><!-- ngInclude:  -->
                    <div src="'/app/templates/_login_mobile.tpl.html'" ng-include="" class="login-form ng-scope ng-hide" ng-show="!normalMode">
                        <form novalidate="" ng-controller="LoginMobileCtrl" ng-submit="loginMobile()" class="account-form ng-scope ng-pristine ng-invalid ng-invalid-required" name="loginmobile">
                            <div ng-show="!gotTokenError &amp;&amp; submitted &amp;&amp; (loginmobile.$invalid || errTip)" class="form-group error-group ng-hide">
                                <div ng-bind="errTip" ng-show="errTip" class="account-errtip ng-binding ng-hide"></div>
                                <div ng-show="loginmobile.mobile.$error.required" class="account-errtip">
                                    请输入正确的手机号
                                </div>
                                <div ng-show="loginmobile.mobile.$error.pattern" class="account-errtip ng-hide">
                                    请输入正确的手机号
                                </div>
                                <div ng-show="loginmobile.code.$error.required" class="account-errtip">
                                    请输入短信验证码
                                </div>
                            </div>
                            <div ng-show="gotTokenError &amp;&amp; !submitted" class="form-group error-group ng-hide">
                                <div ng-show="errTip &amp;&amp; errTip.errorExists" class="account-errtip ng-hide">
                                    手机号还未注册，是否 <a href="//account.ele.me/register">立即注册</a>
                                </div>
                                <div ng-bind="errTip" ng-show="errTip" class="account-errtip ng-binding ng-hide"></div>
                                <div ng-show="loginmobile.mobile.$error.required" class="account-errtip">
                                    请输入正确的手机号
                                </div>
                                <div ng-show="loginmobile.mobile.$error.pattern" class="account-errtip ng-hide">
                                    请输入正确的手机号
                                </div>
                            </div>
                            <div class="form-group compact">
                                <input type="text" required="" ng-pattern="mobilePattern" update-model-on="loginmobile.submit loginmobile.getToken blur" ng-class="{error: (submitted || gotTokenError) &amp;&amp; loginmobile.mobile.$dirty &amp;&amp; loginmobile.mobile.$invalid}" placeholder="手机号" class="account-input withicon ng-pristine ng-invalid ng-invalid-required ng-valid-pattern" ng-model="mobileForm.mobile" name="mobile">
                            </div>
                            <div class="form-group">
                                <input type="text" required="" update-model-on="loginmobile.submit blur" ng-class="{error: submitted &amp;&amp; loginmobile.code.$dirty &amp;&amp; loginmobile.code.$invalid}" placeholder="手机验证码" class="account-input withicon ng-pristine ng-invalid ng-invalid-required" ng-model="mobileForm.code" name="code"> <button ng-click="getToken('sms')" ng-class="{disabled: smsLoginCountdown === 'running' || audioLoginCountdown === 'running'}" class="account-btn verify ng-isolate-scope" status="smsLoginCountdown" time="60" tpl="重新发送(?time)" mode="text" countdown="" type="button">获取验证码</button>
                                <div ng-show="smsLoginCountdown === 'running'" class="account-line countdown-tip ng-hide">
                                    短信已发送，请输入短信中的验证码
                                </div>
                                <div ng-show="smsLoginCountdown === 'end' &amp;&amp; !gotTokenError &amp;&amp; audioLoginCountdown !== 'running'" class="account-line countdown-tip ng-hide">
                                    收不到短信？使用 <a ng-click="getToken('audio')" href="javascript:">语音验证码</a>
                                </div>
                                <div ng-show="smsLoginCountdown === 'end' &amp;&amp; !gotTokenError &amp;&amp; audioLoginCountdown === 'running'" class="account-line countdown-tip ng-hide">
                                    电话拨打中... 请留意你的手机来电
                                    <div status="audioLoginCountdown" tpl="?time 秒后可重新拨打" time="60" mode="text" countdown="" class="tip-lower ng-isolate-scope"></div>
                                    <p class="tip-lower">
                                        你也可以拨打 <b>4001-075-517</b> 获取验证码
                                    </p>
                                </div>
                            </div>
                            <div class="form-group compact">
                                <label><input type="checkbox" checked="checked" class="account-checkbox">下次自动登录</label>
                            </div>
                            <div class="form-group">
                                <button ng-bind="submitting ? '提交中...' : '登录'" type="submit" ng-class="{disabled: submitting}" class="account-btn submit ng-binding">登录</button>
                            </div>
                        </form>
                    </div>
                    <div class="account-line ng-scope">
                        <a href="/register">新用户注册</a> <a href="/forget" class="line-right">忘记密码</a>
                    </div><!-- ngInclude: '/app/templates/_auth_links.tpl.html' -->
                    <div ng-hide="noGlobalWrap &amp;&amp; iframe.hideAuth" ng-include="'/app/templates/_auth_links.tpl.html'" class="account-authlink ng-scope">
                        <div ng-controller="AuthLinksCtrl" class="ng-scope">
                            <h4 class="auth-linktitle">
                                可使用以下账号直接登录
                            </h4><a target="_blank" href="https://graph.qq.com/oauth2.0/authorize?client_id=101204453&amp;response_type=code&amp;scope=get_user_info&amp;state=e215d9bc90ea76307f7aaf830b6cb351216e716b&amp;redirect_uri=https://account.ele.me/auth/connect/qq?redirect_url=http://www.ele.me" class="auth-link qq">QQ</a> <a target="_blank" ng-href="https://api.weibo.com/oauth2/authorize?client_id=1772937595&amp;response_type=code&amp;redirect_uri=https://account.ele.me/auth/connect/weibo?redirect_url=http://www.ele.me" class="auth-link weibo" href="https://api.weibo.com/oauth2/authorize?client_id=1772937595&amp;response_type=code&amp;redirect_uri=https://account.ele.me/auth/connect/weibo?redirect_url=http://www.ele.me">微博</a>
                        </div>
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