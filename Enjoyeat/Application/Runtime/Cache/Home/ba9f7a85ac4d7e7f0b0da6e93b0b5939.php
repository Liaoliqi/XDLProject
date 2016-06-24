<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0020)http://localhost/404 -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">
@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-block-transitions{transition:0s all!important;-webkit-transition:0s all!important;}.ng-hide-add-active,.ng-hide-remove{display:block!important;}
</style>
<style type="text/css">
@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-block-transitions{transition:0s all!important;-webkit-transition:0s all!important;}.ng-hide-add-active,.ng-hide-remove{display:block!important;}
</style>
<meta charset="utf-8">
<title ng-bind="SEO.title" class="ng-binding">出错啦 | 饿了么网上订餐</title>
<link href="/1/gg/XDLProject/Enjoyeat/Public/Home/404/vendor.cba496.css" rel="stylesheet">
<link href="/1/gg/XDLProject/Enjoyeat/Public/Home/404/profile.7433e7.css" rel="stylesheet">
<script src="/1/gg/XDLProject/Enjoyeat/Public/Home/404/perf.js" type="text/javascript" crossorigin="anonymous"></script>
<script src="/1/gg/XDLProject/Enjoyeat/Public/Home/404/vendor.8d538f.js" type="text/javascript" crossorigin="anonymous"></script>
<script src="/1/gg/XDLProject/Enjoyeat/Public/Home/404/profile.5fbed1.js" type="text/javascript" crossorigin="anonymous"></script>
</head>
<!-- header头开始 -->
<body ie8wide="" cute-title="" ng-class="{hidesidebar: layoutState &amp;&amp; layoutState.hideSidebar, smallbody: layoutState.smallBody, whitebody: layoutState.whiteBody}" lim:visitorcapacity="1" style="position: relative;">
<div ng-switch="state.type" state="layoutState" class="ng-isolate-scope">
	<!-- ngSwitchWhen: checkout --><!-- ngSwitchDefault:  -->
	<!-- ngSwitchDefault:  -->
	<div ng-switch-default="" topbar-default="" state="state" class="ng-scope ng-isolate-scope">
		<header class="topbar" role="navigation" ng-class="{shoptopbar: state.type === &#39;shop&#39;}">
		<div class="container clearfix">
			<h1><a href="http://localhost/" hardjump="" class="topbar-logo icon-logo"><span>饿了么</span></a></h1>
			<a href="http://localhost/" hardjump="" class="topbar-item topbar-homepage" ng-class="{&#39;focus&#39;: $root.locationpath[0] === &#39;place&#39;}">首页</a><!-- ngIf: $root.place.premiumCount > 0 --> <a href="http://localhost/profile/order" hardjump="" class="topbar-item" ng-class="{&#39;focus&#39;: $root.locationpath[1] === &#39;order&#39;}">我的订单</a><a href="http://kaidian.ele.me/" target="_blank" class="topbar-item cooperation">加盟合作</a><nav class="topbar-nav"><a href="http://localhost/gift" hardjump="" class="topbar-nav-link" ng-class="{&#39;focus&#39;: $root.locationpath[0] === &#39;gift&#39;}"><i class="topbar-nav-icon icon-gift"></i>积分商城</a><a href="http://localhost/support/center" hardjump="" class="topbar-nav-link" target="_blank"><i class="topbar-nav-icon icon-service"></i>服务中心</a>
			<div class="topbar-nav-link">
				<i class="topbar-nav-icon icon-mobile"></i>手机应用
				<div class="dropbox topbar-mobile-dropbox">
					<span>扫一扫, 手机订餐更方便</span><img src="/1/gg/XDLProject/Enjoyeat/Public/Home/404/appqc.852963.png" class="topbar-nav-qrcode" alt="扫一扫下载饿了么手机 App">
				</div>
			</div>
			<div topbar-profilebox="">
				<div class="topbar-profilebox">
					<!-- ngIf: $root.user.avatar && $root.topbarType !== 'checkout' --><span class="topbar-profilebox-avatar icon-profile" ng-show="!$root.user.username"></span><span ng-show="!$root.user.username" class=""><a ng-href="https://account.localhost/login" target="_blank" href="https://account.localhost/login">登录</a>/<a ng-href="https://account.localhost/register" target="_blank" href="https://account.localhost/register">注册</a></span><span class="topbar-profilebox-wrapper ng-hide" ng-show="$root.user.username"><!-- ngIf: $root.topbarType === 'checkout' --><span class="topbar-profilebox-username ng-binding"></span><!-- ngIf: $root.topbarType === 'checkout' --><!-- ngIf: $root.topbarType !== 'checkout' --><span class="topbar-profilebox-btn icon-arrow-down ng-scope" ng-if="$root.topbarType !== &#39;checkout&#39;"></span><!-- end ngIf: $root.topbarType !== 'checkout' -->
					<div class="dropbox topbar-profilebox-dropbox">
						<a class="icon-profile" href="http://localhost/profile" hardjump="">个人中心</a><a class="icon-star" href="http://localhost/profile/favor" hardjump="">我的收藏</a><a class="icon-location" href="http://localhost/profile/address" hardjump="">我的地址</a><a class="icon-setting" href="http://localhost/profile/security" hardjump="">安全设置</a><a class="icon-logout" href="JavaScript:" ng-click="logout()">退出登录</a>
					</div>
					</span>
				</div>
			</div>
			</nav>
		</div>
		</header>
	</div>
</div>
<!-- 右侧栏的购物车 -->
<div class="sidebar" role="complementary" ng-hide="layoutState &amp;&amp; layoutState.hideSidebar">
	<div class="sidebar-tabs">
		<div class="toolbar-tabs-middle">
			<a class="toolbar-btn icon-order toolbar-close" href="https://www.ele.me/profile/order" hardjump="" tooltip="我的订单" tooltip-placement="left" ubt-click="toolbar_order"><!-- ngIf: sidebarCount.uncompletedOrder > 0 --></a>
			<div class="toolbar-separator">
			</div>
			<a class="toolbar-cartbtn icon-cart toolbar-open" href="JavaScript:" template="cart" ng-class="{&#39;focus&#39;: (activeTemplate === &#39;cart&#39; &amp;&amp; isSidebarOpen), &#39;toolbar-cartbtn-shownum&#39;: foodCount.count}" ubt-click="390">购物车<!-- ngIf: foodCount.count --></a>
			<div class="toolbar-separator">
			</div>
			<a class="toolbar-btn icon-notice toolbar-open modal-hide" href="JavaScript:" template="message" ng-class="{&#39;focus&#39;: (activeTemplate === &#39;message&#39; &amp;&amp; isSidebarOpen), &#39;toolbar-open&#39;: user, &#39;modal-hide&#39;: user}" tooltip="我的信息" title="我的信息" tooltip-placement="left" ubt-click="392"><!-- ngIf: messageCount.count --></a><a class="toolbar-btn icon-history toolbar-open" href="JavaScript:" template="history" ng-class="{&#39;focus&#39;: (activeTemplate === &#39;history&#39; &amp;&amp; isSidebarOpen)}" tooltip="浏览历史" title="浏览历史" tooltip-placement="left" ubt-click="393"></a>
		</div>
		<div class="toolbar-tabs-bottom">
			<div class="toolbar-btn icon-QR-code">
				<div class="dropbox toolbar-tabs-dropbox">
					<a href="" target="_blank"><img src="/1/gg/XDLProject/Enjoyeat/Public/Home/404/appqc.852963(1).png" alt="下载手机应用">
					<p>
                        下载手机应用
					</p>
					<p class="icon-QR-code-bonus">
                        即可参加分享红包活动
					</p>
					</a>
				</div>
			</div>
			<a class="toolbar-btn icon-service" online-service="" tooltip="在线客服" title="在线客服" tooltip-placement="left" id="live800iconlink" target="_blank" href="JavaScript:" style="visibility: visible;"></a><a class="toolbar-btn sidebar-btn-backtop icon-top" tooltip="回到顶部" title="回到顶部" href="JavaScript:" tooltip-placement="left" style="visibility: hidden;"></a>
		</div>
	</div>
	<div class="sidebar-content">
		<!-- ngInclude: activeTemplate ? ('/common/page/_block/sidebar/sidebar-'+ activeTemplate + '/sidebar-'+ activeTemplate + '.html') : '' -->
	</div>
</div>
<div class="importantnotification container" role="banner">
	<!-- ngIf: enable -->
</div>
<!-- ngView:  -->
<!-- ngView:  -->
<div ng-view="" role="main" class="ng-scope">
	<div class="error404 ng-scope">
		<img class="error404-img" src="/1/gg/XDLProject/Enjoyeat/Public/Home/404/0bf0f273cc4d059cd23f49c1255f1png.png" alt="饿了么 404">
		<h2 class="error404-title">对不起，页面好像被送餐员带走了...</h2>
		<p>
			出现了这个问题，也许是因为您访问了不正确的链接地址，<br>
			但更可能是由于我们对程序做出了更新，没有及时通知您所造成的。
		</p>
		<div class="error404-action">
			您现在可以： <a href="http://localhost/"><i class="error404-action-icon icon-404-home"></i>返回首页</a><a href="mailto:feedback@ele.me"><i class="error404-action-icon icon-404-email"></i>帮我们把它找回来</a>
		</div>
	</div>
</div>
<footer class="footer" role="contentinfo">
<div class="container clearfix">
	<div class="footer-link">
		<h3 class="footer-link-title">用户帮助</h3>
		<a class="footer-link-item" href="">服务中心</a><a class="footer-link-item" href="">常见问题</a><a class="footer-link-item" online-service="" href="javascript:" style="visibility: visible;">在线客服</a>
	</div>
	<div class="footer-link">
		<h3 class="footer-link-title">商务合作</h3>
		<a class="footer-link-item" href="">我要开店</a><a class="footer-link-item" href="">加盟指南</a><a class="footer-link-item" href="">市场合作</a><a class="footer-link-item" href="">开放平台</a>
	</div>
	<div class="footer-link">
		<h3 class="footer-link-title">关于我们</h3>
		<a class="footer-link-item" href="">饿了么介绍</a><a class="footer-link-item" href="">加入我们</a><a class="footer-link-item" href="">联系我们</a><a class="footer-link-item" href="">服务协议</a>
	</div>
	<div class="footer-contect">
		<div class="footer-contect-item">
            24小时客服热线 : 
			<a class="inherit" href="tel:10105757">10105757</a>
		</div>
		<div class="footer-contect-item">
            意见反馈 : 
			<a class="inherit" href="mailto:feedback@ele.me">feedback@ele.me</a>
		</div>
	</div>
	<div class="footer-mobile">
		<a href=""><img src="/1/gg/XDLProject/Enjoyeat/Public/Home/404/appqc.852963(1).png" class="footer-mobile-icon" alt="扫一扫下载饿了么手机 App"></a>
		<div class="footer-mobile-content">
			<h3>下载手机版</h3>
			<p>
                扫一扫,手机订餐方便
			</p>
		</div>
	</div>
	<div class="footer-copyright serif">
        增值电信业务许可证 : 
		<a href="">沪B2-20150033</a> | <a href="">沪ICP备 09007032</a> | <a href="">上海工商行政管理</a> Copyright ©2008-2016 ele.me, All Rights Reserved.
	</div>
	<div class="footer-police container">
		<a href=""><img alt="已通过沪公网备案，备案号 310100103568" src="/1/gg/XDLProject/Enjoyeat/Public/Home/404/picp_bg.e373b3.jpg" height="30"></a>
	</div>
</div>
</footer>
<script src="/1/gg/XDLProject/Enjoyeat/Public/Home/404/textStatic.js"></script>
<script src="/1/gg/XDLProject/Enjoyeat/Public/Home/404/textStatic.js"></script>
<div id="think_page_trace" style="position: fixed;bottom:0;right:0;font-size:14px;width:100%;z-index: 999999;color: #000;text-align:left;font-family:&#39;微软雅黑&#39;;">
	<div id="think_page_trace_tab" style="display: none;background:white;margin:0;height: 250px;">
		<div id="think_page_trace_tab_tit" style="height:30px;padding: 6px 12px 0;border-bottom:1px solid #ececec;border-top:1px solid #ececec;font-size:16px">
			<span style="color: rgb(0, 0, 0); padding-right: 12px; height: 30px; line-height: 30px; display: inline-block; margin-right: 3px; cursor: pointer; font-weight: 700;">基本</span>
			<span style="color: rgb(153, 153, 153); padding-right: 12px; height: 30px; line-height: 30px; display: inline-block; margin-right: 3px; cursor: pointer; font-weight: 700;">文件</span>
			<span style="color: rgb(153, 153, 153); padding-right: 12px; height: 30px; line-height: 30px; display: inline-block; margin-right: 3px; cursor: pointer; font-weight: 700;">流程</span>
			<span style="color: rgb(153, 153, 153); padding-right: 12px; height: 30px; line-height: 30px; display: inline-block; margin-right: 3px; cursor: pointer; font-weight: 700;">错误</span>
			<span style="color: rgb(153, 153, 153); padding-right: 12px; height: 30px; line-height: 30px; display: inline-block; margin-right: 3px; cursor: pointer; font-weight: 700;">SQL</span>
			<span style="color: rgb(153, 153, 153); padding-right: 12px; height: 30px; line-height: 30px; display: inline-block; margin-right: 3px; cursor: pointer; font-weight: 700;">调试</span>
		</div>
		<div id="think_page_trace_tab_cont" style="overflow:auto;height:212px;padding: 0; line-height: 24px">
			<div style="display: block;">
				<ol style="padding: 0; margin:0">
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">请求信息 : 2016-06-24 14:29:23 HTTP/1.1 GET : /1/gg/XDLProject/Enjoyeat/Home/user</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">运行时间 : 0.0450s ( Load:0.0170s Init:0.0050s Exec:0.0020s Template:0.0210s )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">吞吐率 : 22.22req/s</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">内存开销 : 1,214.13 kb</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">查询信息 : 0 queries 0 writes </li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">文件加载 : 30</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">缓存信息 : 0 gets 0 writes </li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">配置加载 : 122</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">会话信息 : SESSION_ID=u6hs3c93t246ipte955em2rdp7</li>
				</ol>
			</div>
			<div style="display:none;">
				<ol style="padding: 0; margin:0">
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\index.php ( 0.27 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\ThinkPHP\ThinkPHP.php ( 4.71 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\ThinkPHP\Library\Think\Think.class.php ( 12.32 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\ThinkPHP\Library\Think\Storage.class.php ( 1.38 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\ThinkPHP\Library\Think\Storage\Driver\File.class.php ( 3.56 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\ThinkPHP\Mode\common.php ( 2.82 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\ThinkPHP\Common\functions.php ( 52.62 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\ThinkPHP\Library\Think\Hook.class.php ( 4.02 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\ThinkPHP\Library\Think\App.class.php ( 12.44 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\ThinkPHP\Library\Think\Dispatcher.class.php ( 15.15 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\ThinkPHP\Library\Think\Route.class.php ( 13.38 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\ThinkPHP\Library\Think\Controller.class.php ( 10.95 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\ThinkPHP\Library\Think\View.class.php ( 7.96 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\ThinkPHP\Library\Behavior\BuildLiteBehavior.class.php ( 3.69 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\ThinkPHP\Library\Behavior\ParseTemplateBehavior.class.php ( 3.89 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\ThinkPHP\Library\Behavior\ContentReplaceBehavior.class.php ( 1.93 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\ThinkPHP\Conf\convention.php ( 11.18 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\Application\Common\Conf\config.php ( 0.81 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\ThinkPHP\Lang\zh-cn.php ( 2.57 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\ThinkPHP\Conf\debug.php ( 1.51 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\Application\Home\Conf\config.php ( 0.06 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\ThinkPHP\Library\Behavior\ReadHtmlCacheBehavior.class.php ( 5.62 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\Application\Home\Controller\UserController.class.php ( 4.05 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\Application\Home\Controller\HomeController.class.php ( 0.39 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\ThinkPHP\Library\Think\Template.class.php ( 28.35 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\ThinkPHP\Library\Think\Template\TagLib\Cx.class.php ( 22.62 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\ThinkPHP\Library\Think\Template\TagLib.class.php ( 9.19 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\Application\Runtime\Cache\Home\6830cbac89ff06451c77cd8769d6d4ca.php ( 14.02 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\ThinkPHP\Library\Behavior\WriteHtmlCacheBehavior.class.php ( 1.43 KB )</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">D:\wamp\www\1\gg\XDLProject\Enjoyeat\ThinkPHP\Library\Behavior\ShowPageTraceBehavior.class.php ( 5.27 KB )</li>
				</ol>
			</div>
			<div style="display:none;">
				<ol style="padding: 0; margin:0">
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ app_init ] --START--</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">Run Behavior\BuildLiteBehavior [ RunTime:0.000000s ]</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ app_init ] --END-- [ RunTime:0.001000s ]</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ app_begin ] --START--</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">Run Behavior\ReadHtmlCacheBehavior [ RunTime:0.001000s ]</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ app_begin ] --END-- [ RunTime:0.001000s ]</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ view_parse ] --START--</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ template_filter ] --START--</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">Run Behavior\ContentReplaceBehavior [ RunTime:0.000000s ]</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ template_filter ] --END-- [ RunTime:0.000000s ]</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">Run Behavior\ParseTemplateBehavior [ RunTime:0.013001s ]</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ view_parse ] --END-- [ RunTime:0.013001s ]</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ view_filter ] --START--</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">Run Behavior\WriteHtmlCacheBehavior [ RunTime:0.001000s ]</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ view_filter ] --END-- [ RunTime:0.001000s ]</li>
					<li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ app_end ] --START--</li>
				</ol>
			</div>
			<div style="display:none;">
				<ol style="padding: 0; margin:0">
				</ol>
			</div>
			<div style="display:none;">
				<ol style="padding: 0; margin:0">
				</ol>
			</div>
			<div style="display:none;">
				<ol style="padding: 0; margin:0">
				</ol>
			</div>
		</div>
	</div>
	<div id="think_page_trace_close" style="display:none;text-align:right;height:15px;position:absolute;top:10px;right:12px;cursor: pointer;">
		<img style="vertical-align:top;" src="">
	</div>
</div>
<div id="think_page_trace_open" style="height:30px;float:right;text-align: right;overflow:hidden;position:fixed;bottom:0;right:0;color:#000;line-height:30px;cursor:pointer;">
	<div style="background:#232323;color:#FFF;padding:0 6px;float:right;line-height:30px;font-size:14px">
		0.0450s
	</div>
	<img width="30" style="" title="ShowPageTrace" src="">
</div>
<script type="text/javascript">
(function(){
var tab_tit  = document.getElementById('think_page_trace_tab_tit').getElementsByTagName('span');
var tab_cont = document.getElementById('think_page_trace_tab_cont').getElementsByTagName('div');
var open     = document.getElementById('think_page_trace_open');
var close    = document.getElementById('think_page_trace_close').childNodes[0];
var trace    = document.getElementById('think_page_trace_tab');
var cookie   = document.cookie.match(/thinkphp_show_page_trace=(\d\|\d)/);
var history  = (cookie && typeof cookie[1] != 'undefined' && cookie[1].split('|')) || [0,0];
open.onclick = function(){
	trace.style.display = 'block';
	this.style.display = 'none';
	close.parentNode.style.display = 'block';
	history[0] = 1;
	document.cookie = 'thinkphp_show_page_trace='+history.join('|')
}
close.onclick = function(){
	trace.style.display = 'none';
this.parentNode.style.display = 'none';
	open.style.display = 'block';
	history[0] = 0;
	document.cookie = 'thinkphp_show_page_trace='+history.join('|')
}
for(var i = 0; i < tab_tit.length; i++){
	tab_tit[i].onclick = (function(i){
		return function(){
			for(var j = 0; j < tab_cont.length; j++){
				tab_cont[j].style.display = 'none';
				tab_tit[j].style.color = '#999';
			}
			tab_cont[i].style.display = 'block';
			tab_tit[i].style.color = '#000';
			history[1] = i;
			document.cookie = 'thinkphp_show_page_trace='+history.join('|')
		}
	})(i)
}
parseInt(history[0]) && open.click();
(tab_tit[history[1]] || tab_tit[0]).click();
})();
</script>
<script src="/1/gg/XDLProject/Enjoyeat/Public/Home/404/textStatic(1).js"></script>
<script src="/1/gg/XDLProject/Enjoyeat/Public/Home/404/textStatic(1).js"></script>
</body>
</html>